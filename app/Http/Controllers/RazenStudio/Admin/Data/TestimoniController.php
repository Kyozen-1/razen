<?php

namespace App\Http\Controllers\RazenStudio\Admin\Data;

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
use App\Models\RazenStudio\Data\LandingPageBerandaTestimoni;

class TestimoniController extends Controller
{
    public function index()
    {
        if(request()->ajax())
        {
            $data = LandingPageBerandaTestimoni::latest()->get();
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
                    return '<img src="'.asset('images/landingpage_razenstudio/home/testimoni/'.$data->gambar).'" style="height:5rem;">';
                })
                ->editColumn('testimoni', function($data) {
                    return strip_tags(substr($data->testimoni,0, 20)) . '...';
                })
                ->rawColumns(['aksi', 'gambar'])
                ->make(true);
        }
        return view('razen-studio.admin.landing-page.home.data.testimoni.index');
    }

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
        $gambarSize = public_path('images/landingpage_razenstudio/home/testimoni/'.$gambarName);
        $gambar->save($gambarSize, 60);

        $testimoni = new LandingPageBerandaTestimoni;
        $testimoni->nama = $request->nama;
        $testimoni->gambar = $gambarName;
        $testimoni->testimoni = $request->testimoni;
        $testimoni->save();

        return response()->json(['success' => 'Berhasil menambahkan Testimoni']);
    }

    public function show($id)
    {
        return response()->json(['result' => LandingPageBerandaTestimoni::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return response()->json(['result' => LandingPageBerandaTestimoni::find($id)]);
    }

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

        $testimoni = LandingPageBerandaTestimoni::find($request->hidden_id);
        $testimoni->nama = $request->nama;
        if($request->gambar)
        {
            File::delete(public_path('images/razen-teknologi/testimoni/'.$testimoni->gambar));

            $gambarExtension = $request->gambar->extension();
            $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
            $gambar = Image::make($request->gambar);
            $gambarSize = public_path('images/razen-teknologi/testimoni/'.$gambarName);
            $gambar->save($gambarSize, 60);

            $testimoni->gambar = $gambarName;
        }
        $testimoni->testimoni = $request->testimoni;
        $testimoni->save();

        return response()->json(['success' => 'Berhasil menambahkan Testimoni']);
    }

    public function destroy($id)
    {
        $testimoni = LandingPageBerandaTestimoni::find($id);

        File::delete(public_path('images/razen-teknologi/testimoni/'.$testimoni->gambar));

        $testimoni->delete();
    }
}
