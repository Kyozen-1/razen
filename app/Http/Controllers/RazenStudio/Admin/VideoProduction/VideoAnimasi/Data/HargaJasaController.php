<?php

namespace App\Http\Controllers\RazenStudio\Admin\VideoProduction\VideoAnimasi\Data;

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
use App\Models\RazenStudio\Data\LandingPageVideoProductionVideoAnimasiHargaJasa;

class HargaJasaController extends Controller
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
            $data = new LandingPageVideoProductionVideoAnimasiHargaJasa;
            $data = $data->latest();

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('aksi', function($data){
                    $button_show = '<a href="'.route('razen-studio.admin.video-production.video-animasi.data.harga-jasa.show', ['id' => $data->id]).'" class="detail btn btn-icon waves-effect btn-info" title="Detail Data"><i class="fas fa-eye"></i></a>';
                    $button_edit = '<a href="'.route('razen-studio.admin.video-production.video-animasi.data.harga-jasa.edit', ['id' => $data->id]).'" class="edit btn btn-icon waves-effect btn-warning" title="Edit Data"><i class="fas fa-edit"></i></a>';
                    $button_delete = '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-icon waves-effect btn-danger" title="Delete Data"><i class="fas fa-trash"></i></button>';
                    $button = $button_show . ' ' . $button_edit . ' ' . $button_delete;
                    return $button;
                })
                ->editColumn('standard', function($data){
                    $standard = json_decode($data->standard, true);
                    return $standard['inputan'];
                })
                ->editColumn('premium', function($data){
                    $premium = json_decode($data->premium, true);
                    return $premium['inputan'];
                })
                ->editColumn('ultimate', function($data){
                    $ultimate = json_decode($data->ultimate, true);
                    return $ultimate['inputan'];
                })
                ->rawColumns(['aksi', 'standard', 'premium', 'ultimate'])
                ->make(true);
        }

        return view('razen-studio.admin.landing-page.video-production.video-animasi.data.harga-jasa.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('razen-studio.admin.landing-page.video-production.video-animasi.data.harga-jasa.create');
    }

    public function store(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'nama' => 'required | max:255',
            'standard' => 'required',
            'premium' => 'required',
            'ultimate' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal', $errors);
            return redirect()->route('razen-studio.admin.video-production.video-animasi.data.harga-jasa.index');
        }

        $harga_website = new LandingPageVideoProductionVideoAnimasiHargaJasa;
        $harga_website->nama = $request->nama;
        $harga_website->standard = json_encode($request->standard);
        $harga_website->premium = json_encode($request->premium);
        $harga_website->ultimate = json_encode($request->ultimate);
        $harga_website->save();

        Alert::success('Berhasil', 'Berhasil Menambahkan Data');
        return redirect()->route('razen-studio.admin.video-production.video-animasi.data.harga-jasa.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = LandingPageVideoProductionVideoAnimasiHargaJasa::find($id);

        return view('razen-studio.admin.landing-page.video-production.video-animasi.data.harga-jasa.show', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = LandingPageVideoProductionVideoAnimasiHargaJasa::find($id);
        $standard = json_decode($data->standard, true);
        $premium = json_decode($data->premium, true);
        $ultimate = json_decode($data->ultimate, true);
        return view('razen-studio.admin.landing-page.video-production.video-animasi.data.harga-jasa.edit', [
            'data' => $data,
            'standard' => $standard,
            'premium' => $premium,
            'ultimate' => $ultimate,
            'id' => $id,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $errors = Validator::make($request->all(), [
            'nama' => 'required | max:255',
            'standard' => 'required',
            'premium' => 'required',
            'ultimate' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal', $errors);
            return redirect()->route('razen-studio.admin.video-production.video-animasi.data.harga-jasa.index');
        }

        $harga_website = LandingPageVideoProductionVideoAnimasiHargaJasa::find($id);
        $harga_website->nama = $request->nama;
        $harga_website->standard = json_encode($request->standard);
        $harga_website->premium = json_encode($request->premium);
        $harga_website->ultimate = json_encode($request->ultimate);
        $harga_website->save();

        Alert::success('Berhasil', 'Berhasil Menambahkan Data');
        return redirect()->route('razen-studio.admin.video-production.video-animasi.data.harga-jasa.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        LandingPageVideoProductionVideoAnimasiHargaJasa::find($id)->delete();
    }
}
