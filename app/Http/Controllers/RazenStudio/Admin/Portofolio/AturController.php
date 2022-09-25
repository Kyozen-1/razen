<?php

namespace App\Http\Controllers\RazenStudio\Admin\Portofolio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;
use DB;
use Validator;
use Carbon\Carbon;
use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioPortofolio;

class AturController extends Controller
{
    public function index()
    {
        return view('razen-studio.admin.landing-page.portofolio.atur.index');
    }

    public function section_1_store(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'title' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-studio.admin.portofolio.atur.index');
        }

        $cek = LandingpageRazenstudioPortofolio::first();
        if($cek)
        {
            $landingpage_razenstudio_portofolio = LandingpageRazenstudioPortofolio::find($cek->id);
        } else {
            $landingpage_razenstudio_portofolio = new LandingpageRazenstudioPortofolio;
        }
        $array = [
            'title' => $request->title,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
        ];

        $landingpage_razenstudio_portofolio->section_1 = json_encode($array);
        $landingpage_razenstudio_portofolio->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 1');
        return redirect()->route('razen-studio.admin.portofolio.atur.index');
    }

    public function section_2_store(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'judul' => 'required',
            'deskripsi' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-studio.admin.portofolio.atur.index');
        }

        $cek = LandingpageRazenstudioPortofolio::first();
        if($cek)
        {
            $landingpage_razenstudio_portofolio = LandingpageRazenstudioPortofolio::find($cek->id);
        } else {
            $landingpage_razenstudio_portofolio = new LandingpageRazenstudioPortofolio;
        }
        $array = [
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
        ];

        $landingpage_razenstudio_portofolio->section_2 = json_encode($array);
        $landingpage_razenstudio_portofolio->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 2');
        return redirect()->route('razen-studio.admin.portofolio.atur.index');
    }
}
