<?php

namespace App\Http\Controllers\RazenStudio\Admin\LandingPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;
use DB;
use Validator;
use DataTables;
use Carbon\Carbon;
use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioReview;

class ReviewerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request()->ajax())
        {
            $data = LandingpageRazenstudioReview::all();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('aksi', function($data){
                    $button_show = '<button type="button" name="detail" id="'.$data->id.'" class="detail btn btn-icon waves-effect btn-outline-success" title="Detail Data"><i class="fas fa-eye"></i></button>';
                    $button_edit = '<button type="button" name="edit" id="'.$data->id.'"
                    class="edit btn btn-icon waves-effect btn-outline-warning" title="Edit Data"><i class="fas fa-edit"></i></button>';
                    $button_delete = '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-icon waves-effect btn-outline-danger" title="Delete Data"><i class="fas fa-trash"></i></button>';
                    $button = $button_show . ' ' . $button_edit . ' ' . $button_delete;
                    return $button;
                })
                ->editColumn('ulasan', function($data){
                    $ulasan = strip_tags(substr($data->ulasan,0, 30)) . '...';
                    return $ulasan;
                })
                ->editColumn('gambar', function($data){
                    return '<img src="'.asset('images/landingpage_razenstudio/reviewer/'. $data->gambar).'" alt="" style="width: 5rem;">';
                })
                ->rawColumns(['aksi', 'ulasan', 'gambar'])
                ->make(true);
        }
        return view('razen-studio.admin.landing-page.reviewer.atur.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'nama' => 'required',
            'ulasan' => 'required',
            'gambar' => 'required | mimes:jpg, png, jpeg'
        ]);

        if($errors -> fails())
        {
            return response()->json(['errors' => $errors->errors()->all()]);
        }

        $gambarExtension = $request->gambar->extension();
        $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
        $gambar = Image::make($request->gambar);
        $gambarSize = public_path('images/landingpage_razenstudio/reviewer/'.$gambarName);
        $gambar->save($gambarSize, 100);

        $landing_page = new LandingpageRazenstudioReview;
        $landing_page->nama = $request->nama;
        $landing_page->ulasan = $request->ulasan;
        $landing_page->gambar = $gambarName;
        $landing_page->save();

        return response()->json(['success' => $request->nama. ' berhasil ditambahkan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = LandingpageRazenstudioReview::find($id);

        return response()->json(['result' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = LandingpageRazenstudioReview::find($id);

        return response()->json(['result' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'nama' => 'required',
            'ulasan' => 'required',
        ]);

        if($errors -> fails())
        {
            return response()->json(['errors' => $errors->errors()->all()]);
        }

        if($request->gambar)
        {
            $errors = Validator::make($request->all(), [
                'gambar' => 'required | mimes:jpg, png, jpeg'
            ]);

            if($errors -> fails())
            {
                return response()->json(['errors' => $errors->errors()->all()]);
            }
        }

        $landing_page = LandingpageRazenstudioReview::find($request->hidden_id);
        $landing_page->nama = $request->nama;
        $landing_page->ulasan = $request->ulasan;

        if($request->gambar)
        {
            $gambarName = $landing_page->gambar;
            File::delete(public_path('images/landingpage_razenstudio/reviewer/'.$gambarName));

            $gambarExtension = $request->gambar->extension();
            $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
            $gambar = Image::make($request->gambar);
            $gambarSize = public_path('images/landingpage_razenstudio/reviewer/'.$gambarName);
            $gambar->save($gambarSize, 100);

            $landing_page->gambar = $gambarName;
        }

        $landing_page->save();

        return response()->json(['success' => $request->nama. ' berhasil diubah']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = LandingpageRazenstudioReview::find($id);

        $gambarName = $data->gambar;
        File::delete(public_path('images/landingpage_razenstudio/reviewer/'.$gambarName));

        $data->delete();
    }
}
