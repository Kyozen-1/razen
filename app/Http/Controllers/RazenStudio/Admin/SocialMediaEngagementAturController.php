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
}
