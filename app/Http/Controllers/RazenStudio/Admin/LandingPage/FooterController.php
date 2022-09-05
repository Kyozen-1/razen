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
use Carbon\Carbon;
use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioFooter;

class FooterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('razen-studio.admin.landing-page.footer.atur.index');
    }

    public function deskripsi(Request $request)
    {
        $cek = LandingpageRazenstudioFooter::first();
        if($cek)
        {
            $footer = LandingpageRazenstudioFooter::find($cek->id);
        } else {
            $footer = new LandingpageRazenstudioFooter;
        }
        $footer->deskripsi = $request->deskripsi;
        $footer->save();

        Alert::success('Berhasil', 'Berhasil Merubah Deskripsi Pada Footer');
        return redirect()->route('razen-studio.admin.landing-page.footer.index');
    }

    public function footer_solution_store(Request $request)
    {
        $judul = $request->judul;
        $link = $request->link;
        $array = [];

        for ($i=0; $i < count($judul); $i++) {
            $array[] = [
                'id' => uniqid(),
                'judul' => $judul[$i],
                'link' => $link[$i]
            ];
        }

        $cek = LandingpageRazenstudioFooter::first();
        if($cek)
        {
            $footer = LandingpageRazenstudioFooter::find($cek->id);
        } else {
            $footer = new LandingpageRazenstudioFooter;
        }
        $footer->solution = json_encode($array);
        $footer->save();

        Alert::success('Berhasil', 'Berhasil Merubah Solution Pada Footer');
        return redirect()->route('razen-studio.admin.landing-page.footer.index');
    }

    public function footer_solution_hapus_satu(Request $request)
    {
        $get = LandingpageRazenstudioFooter::first();
        $array = [];
        foreach (json_decode($get->solution) as $value) {
            if($value->id != $request->id)
            {
                $array[] = [
                    'id' => $value->id,
                    'judul' => $value->judul,
                    'link' => $value->link
                ];
            }
        }

        $landingpage_razenstudio_footer = LandingpageRazenstudioFooter::find($get->id);
        $landingpage_razenstudio_footer->solution = json_encode($array);
        $landingpage_razenstudio_footer->save();

        return response()->json('berhasil');
    }

    public function footer_solution_tambah(Request $request)
    {
        $cek = LandingpageRazenstudioFooter::first();
        $judul = $request->judul;
        $link = $request->link;
        $array1 = [];

        for ($i=0; $i < count($judul); $i++) {
            $array1[] = [
                'id' => uniqid(),
                'judul' => $judul[$i],
                'link' => $link[$i]
            ];
        }

        foreach (json_decode($cek->solution) as $value) {
            $array2[] = [
                'id' => $value->id,
                'judul' => $value->judul,
                'link' => $value->link
            ];
        }

        $array = array_merge($array1, $array2);

        $landingpage_razenstudio_solution_footer = LandingpageRazenstudioFooter::find($cek->id);
        $landingpage_razenstudio_solution_footer->solution = json_encode($array);
        $landingpage_razenstudio_solution_footer->save();

        Alert::success('Berhasil', 'Berhasil Merubah Solution Pada Footer');
        return redirect()->route('razen-studio.admin.landing-page.footer.index');
    }

    public function footer_company_store(Request $request)
    {
        $judul = $request->judul;
        $link = $request->link;
        $array = [];

        for ($i=0; $i < count($judul); $i++) {
            $array[] = [
                'id' => uniqid(),
                'judul' => $judul[$i],
                'link' => $link[$i]
            ];
        }

        $cek = LandingpageRazenstudioFooter::first();
        if($cek)
        {
            $footer = LandingpageRazenstudioFooter::find($cek->id);
        } else {
            $footer = new LandingpageRazenstudioFooter;
        }
        $footer->company = json_encode($array);
        $footer->save();

        Alert::success('Berhasil', 'Berhasil Merubah Company Pada Footer');
        return redirect()->route('razen-studio.admin.landing-page.footer.index');
    }

    public function footer_company_hapus_satu(Request $request)
    {
        $get = LandingpageRazenstudioFooter::first();
        $array = [];
        foreach (json_decode($get->company) as $value) {
            if($value->id != $request->id)
            {
                $array[] = [
                    'id' => $value->id,
                    'judul' => $value->judul,
                    'link' => $value->link
                ];
            }
        }

        $landingpage_razenstudio_footer = LandingpageRazenstudioFooter::find($get->id);
        $landingpage_razenstudio_footer->company = json_encode($array);
        $landingpage_razenstudio_footer->save();

        return response()->json('berhasil');
    }

    public function footer_company_tambah(Request $request)
    {
        $cek = LandingpageRazenstudioFooter::first();
        $judul = $request->judul;
        $link = $request->link;
        $array1 = [];

        for ($i=0; $i < count($judul); $i++) {
            $array1[] = [
                'id' => uniqid(),
                'judul' => $judul[$i],
                'link' => $link[$i]
            ];
        }

        foreach (json_decode($cek->company) as $value) {
            $array2[] = [
                'id' => $value->id,
                'judul' => $value->judul,
                'link' => $value->link
            ];
        }

        $array = array_merge($array1, $array2);

        $landingpage_razenstudio_company_footer = LandingpageRazenstudioFooter::find($cek->id);
        $landingpage_razenstudio_company_footer->company = json_encode($array);
        $landingpage_razenstudio_company_footer->save();

        Alert::success('Berhasil', 'Berhasil Merubah Company Pada Footer');
        return redirect()->route('razen-studio.admin.landing-page.footer.index');
    }

    public function footer_get_in_touch_store(Request $request)
    {
        $data = $request->data;
        $tipe_data = $request->tipe_data;
        $array = [];

        for ($i=0; $i < count($data); $i++) {
            $array[] = [
                'id' => uniqid(),
                'data' => $data[$i],
                'tipe_data' => $tipe_data[$i]
            ];
        }

        $cek = LandingpageRazenstudioFooter::first();
        if($cek)
        {
            $footer = LandingpageRazenstudioFooter::find($cek->id);
        } else {
            $footer = new LandingpageRazenstudioFooter;
        }
        $footer->get_in_touch = json_encode($array);
        $footer->save();

        Alert::success('Berhasil', 'Berhasil Merubah Get In Touch Pada Footer');
        return redirect()->route('razen-studio.admin.landing-page.footer.index');
    }

    public function footer_get_in_touch_hapus_satu(Request $request)
    {
        $get = LandingpageRazenstudioFooter::first();
        $array = [];
        foreach (json_decode($get->get_in_touch) as $value) {
            if($value->id != $request->id)
            {
                $array[] = [
                    'id' => $value->id,
                    'data' => $value->data,
                    'tipe_data' => $value->tipe_data
                ];
            }
        }

        $landingpage_razenstudio_footer = LandingpageRazenstudioFooter::find($get->id);
        $landingpage_razenstudio_footer->get_in_touch = json_encode($array);
        $landingpage_razenstudio_footer->save();

        return response()->json('berhasil');
    }

    public function footer_get_in_touch_tambah(Request $request)
    {
        $cek = LandingpageRazenstudioFooter::first();
        $data = $request->data;
        $tipe_data = $request->tipe_data;
        $array1 = [];

        for ($i=0; $i < count($data); $i++) {
            $array1[] = [
                'id' => uniqid(),
                'data' => $data[$i],
                'tipe_data' => $tipe_data[$i]
            ];
        }

        foreach (json_decode($cek->get_in_touch) as $value) {
            $array2[] = [
                'id' => $value->id,
                'data' => $value->data,
                'tipe_data' => $value->tipe_data
            ];
        }

        $array = array_merge($array1, $array2);

        $landingpage_razenstudio_get_in_touch_footer = LandingpageRazenstudioFooter::find($cek->id);
        $landingpage_razenstudio_get_in_touch_footer->get_in_touch = json_encode($array);
        $landingpage_razenstudio_get_in_touch_footer->save();

        Alert::success('Berhasil', 'Berhasil Merubah Get In Touch Pada Footer');
        return redirect()->route('razen-studio.admin.landing-page.footer.index');
    }
}
