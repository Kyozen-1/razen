<?php

namespace App\Http\Controllers\RazenStudio\Admin\WebDevelopment\Data;

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
use App\Models\RazenStudio\Data\LandingPageWebDevelopmentHargaWebsite;

class HargaWebsiteController extends Controller
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
            $data = new LandingPageWebDevelopmentHargaWebsite;
            $data = $data->latest();

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('aksi', function($data){
                    $button_show = '<a href="'.route('razen-studio.admin.web-development.data.harga-website.show', ['id' => $data->id]).'" class="detail btn btn-icon waves-effect btn-info" title="Detail Data"><i class="fas fa-eye"></i></a>';
                    $button_edit = '<a href="'.route('razen-studio.admin.web-development.data.harga-website.edit', ['id' => $data->id]).'" class="edit btn btn-icon waves-effect btn-warning" title="Edit Data"><i class="fas fa-edit"></i></a>';
                    $button_delete = '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-icon waves-effect btn-danger" title="Delete Data"><i class="fas fa-trash"></i></button>';
                    $button = $button_show . ' ' . $button_edit . ' ' . $button_delete;
                    return $button;
                })
                ->editColumn('landing_page', function($data){
                    $landing_page = json_decode($data->landing_page, true);
                    return $landing_page['inputan'];
                })
                ->editColumn('company_profile', function($data){
                    $company_profile = json_decode($data->company_profile, true);
                    return $company_profile['inputan'];
                })
                ->editColumn('e_commerce', function($data){
                    $e_commerce = json_decode($data->e_commerce, true);
                    return $e_commerce['inputan'];
                })
                ->rawColumns(['aksi', 'landing_page', 'company_profile', 'e_commerce'])
                ->make(true);
        }

        return view('razen-studio.admin.landing-page.web-development.data.harga-website.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('razen-studio.admin.landing-page.web-development.data.harga-website.create');
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
            'landing_page' => 'required',
            'company_profile' => 'required',
            'e_commerce' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal', $errors);
            return redirect()->route('razen-studio.admin.web-development.data.harga-website.index');
        }

        $harga_website = new LandingPageWebDevelopmentHargaWebsite;
        $harga_website->nama = $request->nama;
        $harga_website->landing_page = json_encode($request->landing_page);
        $harga_website->company_profile = json_encode($request->company_profile);
        $harga_website->e_commerce = json_encode($request->e_commerce);
        $harga_website->save();

        Alert::success('Berhasil', 'Berhasil Menambahkan Data');
        return redirect()->route('razen-studio.admin.web-development.data.harga-website.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = LandingPageWebDevelopmentHargaWebsite::find($id);

        return view('razen-studio.admin.landing-page.web-development.data.harga-website.show', [
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
        $data = LandingPageWebDevelopmentHargaWebsite::find($id);
        $landing_page = json_decode($data->landing_page, true);
        $company_profile = json_decode($data->company_profile, true);
        $e_commerce = json_decode($data->e_commerce, true);
        return view('razen-studio.admin.landing-page.web-development.data.harga-website.edit', [
            'data' => $data,
            'landing_page' => $landing_page,
            'company_profile' => $company_profile,
            'e_commerce' => $e_commerce,
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
            'landing_page' => 'required',
            'company_profile' => 'required',
            'e_commerce' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal', $errors);
            return redirect()->route('razen-studio.admin.web-development.data.harga-website.index');
        }

        $harga_website = LandingPageWebDevelopmentHargaWebsite::find($id);
        $harga_website->nama = $request->nama;
        $harga_website->landing_page = json_encode($request->landing_page);
        $harga_website->company_profile = json_encode($request->company_profile);
        $harga_website->e_commerce = json_encode($request->e_commerce);
        $harga_website->save();

        Alert::success('Berhasil', 'Berhasil Menambahkan Data');
        return redirect()->route('razen-studio.admin.web-development.data.harga-website.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        LandingPageWebDevelopmentHargaWebsite::find($id)->delete();
    }
}
