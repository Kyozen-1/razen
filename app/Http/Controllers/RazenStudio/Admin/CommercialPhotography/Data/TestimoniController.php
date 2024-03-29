<?php

namespace App\Http\Controllers\RazenStudio\Admin\CommercialPhotography\Data;

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
use Auth;
use App\Models\RazenStudio\Data\LandingPageCommercialPhotographyTestimoni;

class TestimoniController extends Controller
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
            $data = LandingPageCommercialPhotographyTestimoni::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('aksi', function($data){
                    $button_show = '<button type="button" name="detail" id="'.$data->id.'" class="detail btn btn-icon waves-effect btn-info" title="Detail Data"><i class="fas fa-eye"></i></button>';
                    $button_edit = '<button type="button" name="edit" id="'.$data->id.'"
                    class="edit btn btn-icon waves-effect btn-warning" title="Edit Data"><i class="fas fa-edit"></i></button>';
                    $button_delete = '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-icon waves-effect btn-danger" title="Delete Data"><i class="fas fa-trash"></i></button>';
                    $button = $button_show . ' ' . $button_edit . ' ' . $button_delete;
                    return $button;
                })
                ->editColumn('gambar', function($data) {
                    return '<img src="'.asset('images/landingpage_razenstudio/commercial-photography/testimoni/'.$data->gambar).'" style="height:5rem;">';
                })
                ->editColumn('testimoni', function($data) {
                    return strip_tags(substr($data->testimoni,0, 20)) . '...';
                })
                ->rawColumns(['aksi', 'gambar'])
                ->make(true);
        }
        return view('razen-studio.admin.landing-page.commercial-photography.data.testimoni.index');
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
            'nama' => 'required | max:255',
            'testimoni' => 'required',
            'gambar' => 'required | mimes:png,jpg,jpeg,webp'
        ]);

        if($errors -> fails())
        {
            return response()->json(['errors' => $errors->errors()->all()]);
        }

        $gambarExtension = $request->gambar->extension();
        $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
        $gambar = Image::make($request->gambar);
        $gambarSize = public_path('images/landingpage_razenstudio/commercial-photography/testimoni/'.$gambarName);
        $gambar->save($gambarSize, 60);

        $testimoni = new LandingPageCommercialPhotographyTestimoni;
        $testimoni->nama = $request->nama;
        $testimoni->gambar = $gambarName;
        $testimoni->testimoni = $request->testimoni;
        $testimoni->save();

        return response()->json(['success' => 'Berhasil menambahkan Testimoni']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json(['result' => LandingPageCommercialPhotographyTestimoni::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return response()->json(['result' => LandingPageCommercialPhotographyTestimoni::find($id)]);
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
            'nama' => 'required | max:255',
            'testimoni' => 'required',
        ]);

        if($errors -> fails())
        {
            return response()->json(['errors' => $errors->errors()->all()]);
        }

        $testimoni = LandingPageCommercialPhotographyTestimoni::find($request->hidden_id);
        $testimoni->nama = $request->nama;
        if($request->gambar)
        {
            File::delete(public_path('images/landingpage_razenstudio/commercial-photography/testimoni/'.$testimoni->gambar));

            $gambarExtension = $request->gambar->extension();
            $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
            $gambar = Image::make($request->gambar);
            $gambarSize = public_path('images/landingpage_razenstudio/commercial-photography/testimoni/'.$gambarName);
            $gambar->save($gambarSize, 60);

            $testimoni->gambar = $gambarName;
        }
        $testimoni->testimoni = $request->testimoni;
        $testimoni->save();

        return response()->json(['success' => 'Berhasil menambahkan Testimoni']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testimoni = LandingPageCommercialPhotographyTestimoni::find($id);

        File::delete(public_path('images/landingpage_razenstudio/commercial-photography/testimoni/'.$testimoni->gambar));

        $testimoni->delete();
    }
}
