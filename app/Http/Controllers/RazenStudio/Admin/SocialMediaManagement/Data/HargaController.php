<?php

namespace App\Http\Controllers\RazenStudio\Admin\SocialMediaManagement\Data;

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
use App\Models\RazenStudio\Data\LandingPageSocialMediaManagementHarga;

class HargaController extends Controller
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
            $data = new LandingPageSocialMediaManagementHarga;
            $data = $data->latest();

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('aksi', function($data){
                    $button_show = '<a href="'.route('razen-studio.admin.social-media-management.data.harga.show', ['id' => $data->id]).'" class="detail btn btn-icon waves-effect btn-info" title="Detail Data"><i class="fas fa-eye"></i></a>';
                    $button_edit = '<a href="'.route('razen-studio.admin.social-media-management.data.harga.edit', ['id' => $data->id]).'" class="edit btn btn-icon waves-effect btn-warning" title="Edit Data"><i class="fas fa-edit"></i></a>';
                    $button_delete = '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-icon waves-effect btn-danger" title="Delete Data"><i class="fas fa-trash"></i></button>';
                    $button = $button_show . ' ' . $button_edit . ' ' . $button_delete;
                    return $button;
                })
                ->editColumn('ikon', function($data){
                    return '<img src="'.asset('images/landingpage_razenstudio/social-media-management/harga/'.$data->ikon).'" style="height: 5rem;">';
                })
                ->rawColumns(['aksi', 'ikon'])
                ->make(true);
        }

        return view('razen-studio.admin.landing-page.social-media-management.data.harga.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('razen-studio.admin.landing-page.social-media-management.data.harga.create');
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
            'mode_inputan' => 'required',
            'data' => 'required',
            'ikon' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal', $errors);
            return redirect()->route('razen-studio.admin.social-media-management.data.harga.index');
        }

        $ikonExtension = $request->ikon->extension();
        $ikonName =  uniqid().'-'.date("ymd").'.'.$ikonExtension;
        $ikon = Image::make($request->ikon);
        $ikonSize = public_path('images/landingpage_razenstudio/social-media-management/harga/'.$ikonName);
        $ikon->save($ikonSize, 60);

        $harga = new LandingPageSocialMediaManagementHarga;
        $harga->nama = $request->nama;
        $harga->mode_inputan = $request->mode_inputan;
        $harga->ikon = $ikonName;
        $harga->data = json_encode($request->data);
        $harga->save();

        Alert::success('Berhasil', 'Berhasil Menambahkan Data');
        return redirect()->route('razen-studio.admin.social-media-management.data.harga.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = LandingPageSocialMediaManagementHarga::find($id);

        return view('razen-studio.admin.landing-page.social-media-management.data.harga.show', [
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
        $data = LandingPageSocialMediaManagementHarga::find($id);
        return view('razen-studio.admin.landing-page.social-media-management.data.harga.edit', [
            'data' => $data,
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
            'mode_inputan' => 'required',
            'data' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal', $errors);
            return redirect()->route('razen-studio.admin.social-media-management.data.harga.index');
        }

        $harga = LandingPageSocialMediaManagementHarga::find($id);
        $harga->nama = $request->nama;
        $harga->mode_inputan = $request->mode_inputan;
        if($request->ikon)
        {
            File::delete(public_path('images/landingpage_razenstudio/social-media-management/harga/'.$harga->ikon));

            $ikonExtension = $request->ikon->extension();
            $ikonName =  uniqid().'-'.date("ymd").'.'.$ikonExtension;
            $ikon = Image::make($request->ikon);
            $ikonSize = public_path('images/landingpage_razenstudio/social-media-management/harga/'.$ikonName);
            $ikon->save($ikonSize, 60);

            $harga->ikon = $ikonName;
        }
        $harga->data = json_encode($request->data);
        $harga->save();

        Alert::success('Berhasil', 'Berhasil Menambahkan Data');
        return redirect()->route('razen-studio.admin.social-media-management.data.harga.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $harga = LandingPageSocialMediaManagementHarga::find($id);

        File::delete(public_path('images/landingpage_razenstudio/social-media-management/harga/'.$harga->ikon));

        $harga = $harga->delete();
    }
}
