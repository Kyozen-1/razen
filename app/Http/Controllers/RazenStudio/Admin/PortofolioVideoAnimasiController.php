<?php

namespace App\Http\Controllers\RazenStudio\Admin;

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
use App\Models\PortofolioVideoAnimasi;

class PortofolioVideoAnimasiController extends Controller
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
            $data = PortofolioVideoAnimasi::latest()->get();
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
                    return '<img src="'.asset('images/razen-studio/portofolio-video-animasi/'.$data->gambar).'" style="height:5rem;">';
                })
                ->editColumn('deskripsi', function($data) {
                    return strip_tags(substr($data->deskripsi,0, 20)) . '...';
                })
                ->editColumn('link', function($data){
                    return '<a href="'.$data->link.'" class="btn btn-primary btn-icon waves-effect waves-light" target="blank">Lihat</a>';
                })
                ->rawColumns(['aksi', 'gambar', 'link'])
                ->make(true);
        }
        return view('razen-studio.admin.portofolio-video-animasi.index');
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
            'deskripsi' => 'required',
            'gambar' => 'required | mimes:png,jpg,jpeg,webp',
            'link' => 'required'
        ]);

        if($errors -> fails())
        {
            return response()->json(['errors' => $errors->errors()->all()]);
        }

        $gambarExtension = $request->gambar->extension();
        $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
        $gambar = Image::make($request->gambar);
        $gambarSize = public_path('images/razen-studio/portofolio-video-animasi/'.$gambarName);
        $gambar->save($gambarSize, 60);

        $portofolio = new PortofolioVideoAnimasi;
        $portofolio->nama = $request->nama;
        $portofolio->gambar = $gambarName;
        $portofolio->deskripsi = $request->deskripsi;
        $portofolio->link = $request->link;
        $portofolio->save();

        return response()->json(['success' => 'Berhasil menambahkan Portofolio']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json(['result' => PortofolioVideoAnimasi::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return response()->json(['result' => PortofolioVideoAnimasi::find($id)]);
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
            'deskripsi' => 'required',
        ]);

        if($errors -> fails())
        {
            return response()->json(['errors' => $errors->errors()->all()]);
        }

        $portofolio = PortofolioVideoAnimasi::find($request->hidden_id);
        $portofolio->nama = $request->nama;
        if($request->gambar)
        {
            File::delete(public_path('images/razen-studio/portofolio-video-animasi/'.$portofolio->gambar));

            $gambarExtension = $request->gambar->extension();
            $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
            $gambar = Image::make($request->gambar);
            $gambarSize = public_path('images/razen-studio/portofolio-video-animasi/'.$gambarName);
            $gambar->save($gambarSize, 60);

            $portofolio->gambar = $gambarName;
        }
        $portofolio->deskripsi = $request->deskripsi;
        $portofolio->link = $request->link;
        $portofolio->save();

        return response()->json(['success' => 'Berhasil menambahkan Portofolio']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $portofolio = PortofolioVideoAnimasi::find($id);

        File::delete(public_path('images/razen-studio/portofolio-video-animasi/'.$portofolio->gambar));

        $portofolio->delete();
    }
}
