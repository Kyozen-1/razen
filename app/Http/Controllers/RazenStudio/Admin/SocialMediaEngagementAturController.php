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
use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioSocialMediaEngagement;

class SocialMediaEngagementAturController extends Controller
{
    public function index()
    {
        return view('razen-studio.admin.landing-page.social-media-engagement.atur.index');
    }

    public function section_1_store(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'judul' => 'required',
            'deskripsi' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-studio.admin.social-media-engagement.atur.index');
        }

        $cek = LandingpageRazenstudioSocialMediaEngagement::first();
        if($cek)
        {
            $landingpage_razenstudio_social_media_engagement = LandingpageRazenstudioSocialMediaEngagement::find($cek->id);
        } else {
            $landingpage_razenstudio_social_media_engagement = new LandingpageRazenstudioSocialMediaEngagement;
        }
        $array = [
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
        ];

        $landingpage_razenstudio_social_media_engagement->section_1 = json_encode($array);
        $landingpage_razenstudio_social_media_engagement->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 1');
        return redirect()->route('razen-studio.admin.social-media-engagement.atur.index');
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
            return redirect()->route('razen-studio.admin.social-media-engagement.atur.index');
        }

        $cek = LandingpageRazenstudioSocialMediaEngagement::first();
        if($cek)
        {
            $landingpage_razenstudio_social_media_engagement = LandingpageRazenstudioSocialMediaEngagement::find($cek->id);
            if($landingpage_razenstudio_social_media_engagement->section_2)
            {
                $get_section_2 = json_decode($landingpage_razenstudio_social_media_engagement->section_2, true);

                if ($request->gambar) {
                    $gambarName = $get_section_2['gambar'];
                    File::delete(public_path('images/landingpage_razenstudio/social-media-engagement/'.$gambarName));

                    $gambarExtension = $request->gambar->extension();
                    $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                    $gambar = Image::make($request->gambar);
                    $gambarSize = public_path('images/landingpage_razenstudio/social-media-engagement/'.$gambarName);
                    $gambar->save($gambarSize, 100);
                } else {
                    $gambarName = $get_section_2['gambar'];
                }
            } else {
                $gambarExtension = $request->gambar->extension();
                $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                $gambar = Image::make($request->gambar);
                $gambarSize = public_path('images/landingpage_razenstudio/social-media-engagement/'.$gambarName);
                $gambar->save($gambarSize, 100);
            }
        } else {
            $landingpage_razenstudio_social_media_engagement = new LandingpageRazenstudioSocialMediaEngagement;

            $gambarExtension = $request->gambar->extension();
            $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
            $gambar = Image::make($request->gambar);
            $gambarSize = public_path('images/landingpage_razenstudio/social-media-engagement/'.$gambarName);
            $gambar->save($gambarSize, 100);
        }


        $array = [
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $gambarName
        ];

        $landingpage_razenstudio_social_media_engagement->section_2 = json_encode($array);
        $landingpage_razenstudio_social_media_engagement->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 2');
        return redirect()->route('razen-studio.admin.social-media-engagement.atur.index');
    }

    public function section_3_store(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'judul' => 'required',
            'deskripsi' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-studio.admin.social-media-engagement.atur.index');
        }

        $cek = LandingpageRazenstudioSocialMediaEngagement::first();
        if($cek)
        {
            $landingpage_razenstudio_social_media_engagement = LandingpageRazenstudioSocialMediaEngagement::find($cek->id);
            if($landingpage_razenstudio_social_media_engagement->section_3)
            {
                $get_section_3 = json_decode($landingpage_razenstudio_social_media_engagement->section_3, true);

                if ($request->gambar) {
                    $gambarName = $get_section_3['gambar'];
                    File::delete(public_path('images/landingpage_razenstudio/social-media-engagement/'.$gambarName));

                    $gambarExtension = $request->gambar->extension();
                    $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                    $gambar = Image::make($request->gambar);
                    $gambarSize = public_path('images/landingpage_razenstudio/social-media-engagement/'.$gambarName);
                    $gambar->save($gambarSize, 100);
                } else {
                    $gambarName = $get_section_3['gambar'];
                }
            } else {
                $gambarExtension = $request->gambar->extension();
                $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                $gambar = Image::make($request->gambar);
                $gambarSize = public_path('images/landingpage_razenstudio/social-media-engagement/'.$gambarName);
                $gambar->save($gambarSize, 100);
            }
        } else {
            $landingpage_razenstudio_social_media_engagement = new LandingpageRazenstudioSocialMediaEngagement;

            $gambarExtension = $request->gambar->extension();
            $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
            $gambar = Image::make($request->gambar);
            $gambarSize = public_path('images/landingpage_razenstudio/social-media-engagement/'.$gambarName);
            $gambar->save($gambarSize, 100);
        }


        $array = [
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $gambarName
        ];

        $landingpage_razenstudio_social_media_engagement->section_3 = json_encode($array);
        $landingpage_razenstudio_social_media_engagement->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 3');
        return redirect()->route('razen-studio.admin.social-media-engagement.atur.index');
    }

    public function section_4_store(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'judul' => 'required',
            'deskripsi' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-studio.admin.social-media-engagement.atur.index');
        }

        $cek = LandingpageRazenstudioSocialMediaEngagement::first();
        if($cek)
        {
            $landingpage_razenstudio_social_media_engagement = LandingpageRazenstudioSocialMediaEngagement::find($cek->id);
            if($landingpage_razenstudio_social_media_engagement->section_4)
            {
                $get_section_4 = json_decode($landingpage_razenstudio_social_media_engagement->section_4, true);

                if ($request->gambar) {
                    $gambarName = $get_section_4['gambar'];
                    File::delete(public_path('images/landingpage_razenstudio/social-media-engagement/'.$gambarName));

                    $gambarExtension = $request->gambar->extension();
                    $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                    $gambar = Image::make($request->gambar);
                    $gambarSize = public_path('images/landingpage_razenstudio/social-media-engagement/'.$gambarName);
                    $gambar->save($gambarSize, 100);
                } else {
                    $gambarName = $get_section_4['gambar'];
                }
            } else {
                $gambarExtension = $request->gambar->extension();
                $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                $gambar = Image::make($request->gambar);
                $gambarSize = public_path('images/landingpage_razenstudio/social-media-engagement/'.$gambarName);
                $gambar->save($gambarSize, 100);
            }
        } else {
            $landingpage_razenstudio_social_media_engagement = new LandingpageRazenstudioSocialMediaEngagement;

            $gambarExtension = $request->gambar->extension();
            $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
            $gambar = Image::make($request->gambar);
            $gambarSize = public_path('images/landingpage_razenstudio/social-media-engagement/'.$gambarName);
            $gambar->save($gambarSize, 100);
        }


        $array = [
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $gambarName
        ];

        $landingpage_razenstudio_social_media_engagement->section_4 = json_encode($array);
        $landingpage_razenstudio_social_media_engagement->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 4');
        return redirect()->route('razen-studio.admin.social-media-engagement.atur.index');
    }

    //Section 5 Start
    public function section_5_store(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'judul' => 'required',
            'harga' => 'required',
            'link' => 'required',
            'gambar' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-studio.admin.social-media-engagement.atur.index');
        }

        $gambarExtension = $request->gambar->extension();
        $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
        $gambar = Image::make($request->gambar);
        $gambarSize = public_path('images/landingpage_razenstudio/social-media-engagement/'.$gambarName);
        $gambar->save($gambarSize, 100);

        $item_penilaian = $request->item_penilaian;
        $penilaian = [];

        for ($i=0; $i < count($item_penilaian); $i++) {
            $penilaian[] = [
                'id' => uniqid(),
                'item' => $item_penilaian[$i]
            ];
        }

        $cek = LandingpageRazenstudioSocialMediaEngagement::first();
        if($cek)
        {
            $landingpage_razenstudio_social_media_engagement = LandingpageRazenstudioSocialMediaEngagement::find($cek->id);
            if($landingpage_razenstudio_social_media_engagement->section_5)
            {
                $section_5 = json_decode($landingpage_razenstudio_social_media_engagement->section_5, true);
                $array_lama = [];

                foreach ($section_5 as $item) {
                    $array_lama[] = [
                        'id' => $item['id'],
                        'judul' => $item['judul'],
                        'harga' => $item['harga'],
                        'link' => $item['link'],
                        'gambar' => $item['gambar'],
                        'item_penilaian' => $item['item_penilaian']
                    ];
                }

                $array_baru[] = [
                    'id' => uniqid(),
                    'judul' => $request->judul,
                    'harga' => $request->harga,
                    'link' => $request->link,
                    'gambar' => $gambarName,
                    'item_penilaian' => $penilaian
                ];

                $array = array_merge($array_lama, $array_baru);

            } else {
                $array[] = [
                    'id' => uniqid(),
                    'judul' => $request->judul,
                    'harga' => $request->harga,
                    'link' => $request->link,
                    'gambar' => $gambarName,
                    'item_penilaian' => $penilaian
                ];
            }

        } else {
            $landingpage_razenstudio_social_media_engagement = new LandingpageRazenstudioSocialMediaEngagement;
            $array[] = [
                'id' => uniqid(),
                'judul' => $request->judul,
                'harga' => $request->harga,
                'link' => $request->link,
                'gambar' => $gambarName,
                'item_penilaian' => $penilaian
            ];
        }

        $landingpage_razenstudio_social_media_engagement->section_5 = json_encode($array);
        $landingpage_razenstudio_social_media_engagement->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 5');
        return redirect()->route('razen-studio.admin.social-media-engagement.atur.index');
    }

    public function section_5_hapus_satu(Request $request)
    {
        $get = LandingpageRazenstudioSocialMediaEngagement::first();
        $array = [];
        foreach (json_decode($get->section_5) as $value) {
            if($value->id != $request->id)
            {
                $array[] = [
                    'id' => $value->id,
                    'link' => $value->link,
                    'harga' => $value->harga,
                    'judul' => $value->judul,
                    'gambar' => $value->gambar,
                    'item_penilaian' => $value->item_penilaian,
                ];
            } else {
                File::delete(public_path('images/landingpage_razenstudio/social-media-engagement/'.$value->gambar));
            }
        }

        $landingpage_razenstudio_footer = LandingpageRazenstudioSocialMediaEngagement::find($get->id);
        $landingpage_razenstudio_footer->section_5 = json_encode($array);
        $landingpage_razenstudio_footer->save();

        return response()->json('berhasil');
    }
    //Section 5 End

    //Section 6 Start
    public function section_6_store(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-studio.admin.social-media-engagement.atur.index');
        }

        $cek = LandingpageRazenstudioSocialMediaEngagement::first();
        $judul_konten = $request->judul_konten;
        $deskripsi_konten = $request->deskripsi_konten;

        foreach ($request->file('gambar') as $file) {
            $gambarExtension = $file->extension();
            $gambarName = uniqid().'-'.date("ymd").'.'.$gambarExtension;
            $gambar = Image::make($file);
            $gambarSize = public_path('images/landingpage_razenstudio/social-media-engagement/'.$gambarName);
            $gambar->save($gambarSize, 60);

            $dataGambar[] = $gambarName;
        }

        $konten = [];

        for ($i=0; $i < count($dataGambar); $i++) {
            $konten[] = [
                'id' => uniqid(),
                'judul_konten' => $judul_konten[$i],
                'deskripsi_konten' => $deskripsi_konten[$i],
                'gambar_konten' => $dataGambar[$i]
            ];
        }

        $array = [
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'konten' => $konten
        ];

        if($cek)
        {
            $landingpage_razenstudio_social_media_engagement = LandingpageRazenstudioSocialMediaEngagement::find($cek->id);
        } else {
            $landingpage_razenstudio_social_media_engagement = new LandingpageRazenstudioSocialMediaEngagement;
        }
        $landingpage_razenstudio_social_media_engagement->section_6 = json_encode($array);
        $landingpage_razenstudio_social_media_engagement->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 6');
        return redirect()->route('razen-studio.admin.social-media-engagement.atur.index');
    }

    public function section_6_hapus_satu(Request $request)
    {
        $get = LandingpageRazenstudioSocialMediaEngagement::first();
        $section6 = json_decode($get->section_6, true);
        $array = [];
        foreach ($section6['konten'] as $value) {
            if($value['id'] != $request->id)
            {
                $array[] = [
                    'id' => $value['id'],
                    'judul_konten' => $value['judul_konten'],
                    'deskripsi_konten' => $value['deskripsi_konten'],
                    'gambar_konten' => $value['gambar_konten']
                ];
            } else {
                File::delete(public_path('images/landingpage_razenstudio/social-media-engagement/'.$value['gambar_konten']));
            }
        }

        $data = [
            'judul' => $section6['judul'],
            'deskripsi' => $section6['deskripsi'],
            'konten' => $array
        ];

        $landingpage_razenstudio_social_media_engagement = LandingpageRazenstudioSocialMediaEngagement::find($get->id);
        $landingpage_razenstudio_social_media_engagement->section_6 = json_encode($data);
        $landingpage_razenstudio_social_media_engagement->save();

        return response()->json('berhasil');
    }

    public function section_6_edit(Request $request)
    {
        $get = LandingpageRazenstudioSocialMediaEngagement::first();
        $section6 = json_decode($get->section_6, true);

        if($request->judul_konten)
        {
            $judul_konten_baru = $request->judul_konten;
            $deskripsi_konten_baru = $request->deskripsi_konten;

            foreach ($request->file('gambar') as $file) {
                $gambarExtension = $file->extension();
                $gambarName = uniqid().'-'.date("ymd").'.'.$gambarExtension;
                $gambar = Image::make($file);
                $gambarSize = public_path('images/landingpage_razenstudio/social-media-engagement/'.$gambarName);
                $gambar->save($gambarSize, 60);

                $dataGambarBaru[] = $gambarName;
            }

            $array_baru = [];
            for ($i=0; $i < count($dataGambarBaru); $i++) {
                $array_baru[] = [
                    'id' => uniqid(),
                    'judul_konten' => $judul_konten_baru[$i],
                    'deskripsi_konten' => $deskripsi_konten_baru[$i],
                    'gambar_konten' => $dataGambarBaru[$i],
                ];
            }

            $array_lama = [];
            foreach ($section6['konten'] as $value) {
                $array_lama[] = [
                    'id' => $value['id'],
                    'judul_konten' => $value['judul_konten'],
                    'deskripsi_konten' => $value['deskripsi_konten'],
                    'gambar_konten' => $value['gambar_konten']
                ];
            }

            $data = [
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
                'konten' => array_merge($array_lama, $array_baru)
            ];
        } else {

            $array_lama = [];
            foreach ($section6['konten'] as $value) {
                $array_lama[] = [
                    'id' => $value['id'],
                    'judul_konten' => $value['judul_konten'],
                    'deskripsi_konten' => $value['deskripsi_konten'],
                    'gambar_konten' => $value['gambar_konten']
                ];
            }

            $data = [
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
                'konten' => $array_lama
            ];
        }

        $landingpage_razenstudio_social_media_engagement = LandingpageRazenstudioSocialMediaEngagement::find($get->id);
        $landingpage_razenstudio_social_media_engagement->section_6 = json_encode($data);
        $landingpage_razenstudio_social_media_engagement->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 6');
        return redirect()->route('razen-studio.admin.social-media-engagement.atur.index');
    }
    //Section 6 End
}
