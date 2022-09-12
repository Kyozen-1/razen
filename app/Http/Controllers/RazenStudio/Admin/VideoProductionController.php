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
use Carbon\Carbon;
use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioVideoProduction;

class VideoProductionController extends Controller
{
    public function index()
    {
        return view('razen-studio.admin.landing-page.video-production.atur.index');
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
            return redirect()->route('razen-studio.admin.video-production.atur.index');
        }

        $cek = LandingpageRazenstudioVideoProduction::first();
        if($cek)
        {
            $landingpage_razenstudio_video_production = LandingpageRazenstudioVideoProduction::find($cek->id);
        } else {
            $landingpage_razenstudio_video_production = new LandingpageRazenstudioVideoProduction;
        }
        $array = [
            'title' => $request->title,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
        ];

        $landingpage_razenstudio_video_production->section_1 = json_encode($array);
        $landingpage_razenstudio_video_production->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 1');
        return redirect()->route('razen-studio.admin.video-production.atur.index');
    }

    public function section_2_store(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'judul' => 'required',
            'deskripsi' => 'required',
            'link' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-studio.admin.video-production.atur.index');
        }

        $cek = LandingpageRazenstudioVideoProduction::first();
        if($cek)
        {
            $landingpage_razenstudio_video_production = LandingpageRazenstudioVideoProduction::find($cek->id);
            if($landingpage_razenstudio_video_production->section_2)
            {
                $get_section_2 = json_decode($landingpage_razenstudio_video_production->section_2, true);

                if ($request->gambar) {
                    $gambarName = $get_section_2['gambar'];
                    File::delete(public_path('images/landingpage_razenstudio/video-production/'.$gambarName));

                    $gambarExtension = $request->gambar->extension();
                    $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                    $gambar = Image::make($request->gambar);
                    $gambarSize = public_path('images/landingpage_razenstudio/video-production/'.$gambarName);
                    $gambar->save($gambarSize, 100);
                } else {
                    $gambarName = $get_section_2['gambar'];
                }
            } else {
                $gambarExtension = $request->gambar->extension();
                $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                $gambar = Image::make($request->gambar);
                $gambarSize = public_path('images/landingpage_razenstudio/video-production/'.$gambarName);
                $gambar->save($gambarSize, 100);
            }
        } else {
            $landingpage_razenstudio_video_production = new LandingpageRazenstudioVideoProduction;

            $gambarExtension = $request->gambar->extension();
            $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
            $gambar = Image::make($request->gambar);
            $gambarSize = public_path('images/landingpage_razenstudio/video-production/'.$gambarName);
            $gambar->save($gambarSize, 100);
        }


        $shortUrlRegex = '/youtu.be\/([a-zA-Z0-9_-]+)\??/i';
        $longUrlRegex = '/youtube.com\/((?:embed)|(?:watch))((?:\?v\=)|(?:\/))([a-zA-Z0-9_-]+)/i';

        if (preg_match($longUrlRegex, $request->link, $matches)) {
            $youtube_id = $matches[count($matches) - 1];
        }

        if (preg_match($shortUrlRegex, $request->link, $matches)) {
            $youtube_id = $matches[count($matches) - 1];
        }
        $url = 'https://www.youtube.com/embed/' . $youtube_id ;

        $array = [
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'link' => $url,
            'gambar' => $gambarName
        ];

        $landingpage_razenstudio_video_production->section_2 = json_encode($array);
        $landingpage_razenstudio_video_production->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 2');
        return redirect()->route('razen-studio.admin.video-production.atur.index');
    }

    //Section 3 Start
    public function section_3_store(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'judul' => 'required',
            'deskripsi' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-studio.admin.video-production.atur.index');
        }

        $cek = LandingpageRazenstudioVideoProduction::first();
        $judul_konten = $request->judul_konten;
        $deskripsi_konten = $request->deskripsi_konten;

        $konten = [];

        for ($i=0; $i < count($judul_konten); $i++) {
            $konten[] = [
                'id' => uniqid(),
                'judul_konten' => $judul_konten[$i],
                'deskripsi_konten' => $deskripsi_konten[$i]
            ];
        }

        $array = [
            'judul' => $request->judul,
            'deskripsi'=> $request->deskripsi,
            'konten' => $konten
        ];

        if($cek)
        {
            $landingpage_razenstudio_video_production = LandingpageRazenstudioVideoProduction::find($cek->id);
        } else {
            $landingpage_razenstudio_video_production = new LandingpageRazenstudioVideoProduction;
        }
        $landingpage_razenstudio_video_production->section_3 = json_encode($array);
        $landingpage_razenstudio_video_production->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 3');
        return redirect()->route('razen-studio.admin.video-production.atur.index');
    }

    public function section_3_hapus_satu(Request $request)
    {
        $get = LandingpageRazenstudioVideoProduction::first();
        $section3 = json_decode($get->section_3, true);
        $array = [];
        foreach ($section3['konten'] as $value) {
            if($value['id'] != $request->id)
            {
                $array[] = [
                    'id' => $value['id'],
                    'judul_konten' => $value['judul_konten'],
                    'deskripsi_konten' => $value['deskripsi_konten'],
                ];
            }
        }

        $data = [
            'judul' => $section3['judul'],
            'deskripsi' => $section3['deskripsi'],
            'konten' => $array
        ];

        $landingpage_razenstudio_video_production = LandingpageRazenstudioVideoProduction::find($get->id);
        $landingpage_razenstudio_video_production->section_3 = json_encode($data);
        $landingpage_razenstudio_video_production->save();

        return response()->json('berhasil');
    }

    public function section_3_edit(Request $request)
    {
        $get = LandingpageRazenstudioVideoProduction::first();
        $section3 = json_decode($get->section_3, true);

        if($request->judul_konten)
        {
            $judul_konten_baru = $request->judul_konten;
            $deskripsi_konten_baru = $request->deskripsi_konten;

            $array_baru = [];
            for ($i=0; $i < count($judul_konten_baru); $i++) {
                $array_baru[] = [
                    'id' => uniqid(),
                    'judul_konten' => $judul_konten_baru[$i],
                    'deskripsi_konten' => $deskripsi_konten_baru[$i],
                ];
            }

            $array_lama = [];
            foreach ($section3['konten'] as $value) {
                $array_lama[] = [
                    'id' => $value['id'],
                    'judul_konten' => $value['judul_konten'],
                    'deskripsi_konten' => $value['deskripsi_konten'],
                ];
            }

            $data = [
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
                'konten' => array_merge($array_lama, $array_baru)
            ];
        } else {

            $array_lama = [];
            foreach ($section3['konten'] as $value) {
                $array_lama[] = [
                    'id' => $value['id'],
                    'judul_konten' => $value['judul_konten'],
                    'deskripsi_konten' => $value['deskripsi_konten'],
                ];
            }

            $data = [
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
                'konten' => $array_lama
            ];
        }

        $landingpage_razenstudio_video_production = LandingpageRazenstudioVideoProduction::find($get->id);
        $landingpage_razenstudio_video_production->section_3 = json_encode($data);
        $landingpage_razenstudio_video_production->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 3');
        return redirect()->route('razen-studio.admin.video-production.atur.index');
    }
    //Section 3 End

    //Section 3 Start
    public function section_4_store(Request $request)
    {
        $cek = LandingpageRazenstudioVideoProduction::first();
        $data = [];
        $array = [];

        $judul = $request->judul;
        $deskripsi = $request->deskripsi;
        $link_page = $request->link_page;
        $link_youtube = $request->link_youtube;

        foreach ($request->file('gambar') as $file) {
            $gambarExtension = $file->extension();
            $gambarName = uniqid().'-'.date("ymd").'.'.$gambarExtension;
            $gambar = Image::make($file);
            $gambarSize = public_path('images/landingpage_razenstudio/video-production/'.$gambarName);
            $gambar->save($gambarSize, 60);

            $data[] = $gambarName;
        }

        for ($i=0; $i < count($data); $i++) {
            $array[] = [
                'id' => uniqid(),
                'judul' => $judul[$i],
                'deskripsi' => $deskripsi[$i],
                'link_page' => $link_page[$i],
                'link_youtube' => $link_youtube[$i],
                'gambar' => $data[$i]
            ];
        }

        if($cek)
        {
            $landingpage_razenstudio_video_production = LandingpageRazenstudioVideoProduction::find($cek->id);
        } else {
            $landingpage_razenstudio_video_production = new LandingpageRazenstudioVideoProduction;
        }
        $landingpage_razenstudio_video_production->section_4 = json_encode($array);
        $landingpage_razenstudio_video_production->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 4');
        return redirect()->route('razen-studio.admin.video-production.atur.index');
    }

    public function section_4_hapus_satu(Request $request)
    {
        $get = LandingpageRazenstudioVideoProduction::first();
        $section4 = json_decode($get->section_4, true);
        $array = [];
        foreach ($section4 as $value) {
            if($value['id'] != $request->id)
            {
                $array[] = [
                    'id' => $value['id'],
                    'judul' => $value['judul'],
                    'deskripsi' => $value['deskripsi'],
                    'link_page' => $value['link_page'],
                    'link_youtube' => $value['link_youtube'],
                    'gambar' => $value['gambar']
                ];
            } else {
                File::delete(public_path('images/landingpage_razenstudio/video-production/'.$value['gambar']));
            }
        }

        $landingpage_razenstudio_video_production = LandingpageRazenstudioVideoProduction::find($get->id);
        $landingpage_razenstudio_video_production->section_4 = json_encode($array);
        $landingpage_razenstudio_video_production->save();

        return response()->json('berhasil');
    }

    public function section_4_edit(Request $request)
    {
        $get = LandingpageRazenstudioVideoProduction::first();
        $section4 = json_decode($get->section_4, true);

        if($request->judul)
        {
            $dataBaru = [];
            $array_baru = [];

            $judul = $request->judul;
            $deskripsi = $request->deskripsi;
            $link_page = $request->link_page;
            $link_youtube = $request->link_youtube;

            foreach ($request->file('gambar') as $file) {
                $gambarExtension = $file->extension();
                $gambarName = uniqid().'-'.date("ymd").'.'.$gambarExtension;
                $gambar = Image::make($file);
                $gambarSize = public_path('images/landingpage_razenstudio/video-production/'.$gambarName);
                $gambar->save($gambarSize, 60);

                $dataBaru[] = $gambarName;
            }

            for ($i=0; $i < count($dataBaru); $i++) {
                $array_baru[] = [
                    'id' => uniqid(),
                    'judul' => $judul[$i],
                    'deskripsi' => $deskripsi[$i],
                    'link_page' => $link_page[$i],
                    'link_youtube' => $link_youtube[$i],
                    'gambar' => $dataBaru[$i]
                ];
            }

            $array_lama = [];
            foreach ($section4 as $value) {
                $array_lama[] = [
                    'id' => $value['id'],
                    'judul' => $value['judul'],
                    'deskripsi' => $value['deskripsi'],
                    'link_page' => $value['link_page'],
                    'link_youtube' => $value['link_youtube'],
                    'gambar' => $value['gambar'],
                ];
            }

            $array = array_merge($array_lama, $array_baru);

        } else {

            $array_lama = [];
            foreach ($section4 as $value) {
                $array_lama[] = [
                    'id' => $value['id'],
                    'judul' => $value['judul'],
                    'deskripsi' => $value['deskripsi'],
                    'link_page' => $value['link_page'],
                    'link_youtube' => $value['link_youtube'],
                    'gambar' => $value['gambar'],
                ];
            }

            $array = $array_lama;
        }

        $landingpage_razenstudio_video_production = LandingpageRazenstudioVideoProduction::find($get->id);
        $landingpage_razenstudio_video_production->section_4 = json_encode($array);
        $landingpage_razenstudio_video_production->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 4');
        return redirect()->route('razen-studio.admin.video-production.atur.index');
    }
}
