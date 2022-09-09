<?php

namespace App\Http\Controllers\RazenStudio\Admin\SocialMediaEngagement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;
use DB;
use Validator;
use Carbon\Carbon;
use App\Models\RazenStudio\LandingPage\SocialMediaEngagement\LandingpageRazenstudioSocialMediaEngagementTikTok;

class TikTokController extends Controller
{
    public function index()
    {
        return view('razen-studio.admin.landing-page.social-media-engagement.tik-tok.index');
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
            return redirect()->route('razen-studio.admin.social-media-engagement.tik-tok.index');
        }

        $cek = LandingpageRazenstudioSocialMediaEngagementTikTok::first();
        if($cek)
        {
            $landingpage_razenstudio_social_media_engagement_tik_tok = LandingpageRazenstudioSocialMediaEngagementTikTok::find($cek->id);
        } else {
            $landingpage_razenstudio_social_media_engagement_tik_tok = new LandingpageRazenstudioSocialMediaEngagementTikTok;
        }
        $array = [
            'title' => $request->title,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
        ];

        $landingpage_razenstudio_social_media_engagement_tik_tok->section_1 = json_encode($array);
        $landingpage_razenstudio_social_media_engagement_tik_tok->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 1');
        return redirect()->route('razen-studio.admin.social-media-engagement.tik-tok.index');
    }

    public function section_2_store(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'judul' => 'required',
            'deskripsi' => 'required',
            'mini_text' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-studio.admin.social-media-engagement.tik-tok.index');
        }

        $cek = LandingpageRazenstudioSocialMediaEngagementTikTok::first();
        if($cek)
        {
            $landingpage_razenstudio_social_media_engagement_tik_tok = LandingpageRazenstudioSocialMediaEngagementTikTok::find($cek->id);
            if($landingpage_razenstudio_social_media_engagement_tik_tok->section_2)
            {
                $get_section_2 = json_decode($landingpage_razenstudio_social_media_engagement_tik_tok->section_2, true);

                if ($request->gambar) {
                    $gambarName = $get_section_2['gambar'];
                    File::delete(public_path('images/landingpage_razenstudio/social-media-engagement/tik-tok/'.$gambarName));

                    $gambarExtension = $request->gambar->extension();
                    $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                    $gambar = Image::make($request->gambar);
                    $gambarSize = public_path('images/landingpage_razenstudio/social-media-engagement/tik-tok/'.$gambarName);
                    $gambar->save($gambarSize, 100);
                } else {
                    $gambarName = $get_section_2['gambar'];
                }
            } else {
                $gambarExtension = $request->gambar->extension();
                $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                $gambar = Image::make($request->gambar);
                $gambarSize = public_path('images/landingpage_razenstudio/social-media-engagement/tik-tok/'.$gambarName);
                $gambar->save($gambarSize, 100);
            }
        } else {
            $landingpage_razenstudio_social_media_engagement_tik_tok = new LandingpageRazenstudioSocialMediaEngagementTikTok;

            $gambarExtension = $request->gambar->extension();
            $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
            $gambar = Image::make($request->gambar);
            $gambarSize = public_path('images/landingpage_razenstudio/social-media-engagement/tik-tok/'.$gambarName);
            $gambar->save($gambarSize, 100);
        }


        $array = [
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'mini_text' => $request->mini_text,
            'gambar' => $gambarName
        ];

        $landingpage_razenstudio_social_media_engagement_tik_tok->section_2 = json_encode($array);
        $landingpage_razenstudio_social_media_engagement_tik_tok->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 2');
        return redirect()->route('razen-studio.admin.social-media-engagement.tik-tok.index');
    }

    public function section_3_store(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-studio.admin.social-media-engagement.tik-tok.index');
        }

        $cek = LandingpageRazenstudioSocialMediaEngagementTikTok::first();
        if($cek)
        {
            $landingpage_razenstudio_social_media_engagement_tik_tok = LandingpageRazenstudioSocialMediaEngagementTikTok::find($cek->id);
            if($landingpage_razenstudio_social_media_engagement_tik_tok->section_3)
            {
                $get_section_3 = json_decode($landingpage_razenstudio_social_media_engagement_tik_tok->section_3, true);

                if ($request->gambar) {
                    $gambarName = $get_section_3['gambar'];
                    File::delete(public_path('images/landingpage_razenstudio/social-media-engagement/tik-tok/'.$gambarName));

                    $gambarExtension = $request->gambar->extension();
                    $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                    $gambar = Image::make($request->gambar);
                    $gambarSize = public_path('images/landingpage_razenstudio/social-media-engagement/tik-tok/'.$gambarName);
                    $gambar->save($gambarSize, 100);
                } else {
                    $gambarName = $get_section_3['gambar'];
                }
            } else {
                $gambarExtension = $request->gambar->extension();
                $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                $gambar = Image::make($request->gambar);
                $gambarSize = public_path('images/landingpage_razenstudio/social-media-engagement/tik-tok/'.$gambarName);
                $gambar->save($gambarSize, 100);
            }
        } else {
            $landingpage_razenstudio_social_media_engagement_tik_tok = new LandingpageRazenstudioSocialMediaEngagementTikTok;

            $gambarExtension = $request->gambar->extension();
            $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
            $gambar = Image::make($request->gambar);
            $gambarSize = public_path('images/landingpage_razenstudio/social-media-engagement/tik-tok/'.$gambarName);
            $gambar->save($gambarSize, 100);
        }


        $array = [
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $gambarName
        ];

        $landingpage_razenstudio_social_media_engagement_tik_tok->section_3 = json_encode($array);
        $landingpage_razenstudio_social_media_engagement_tik_tok->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 3');
        return redirect()->route('razen-studio.admin.social-media-engagement.tik-tok.index');
    }

    public function section_4_store(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-studio.admin.social-media-engagement.tik-tok.index');
        }

        $cek = LandingpageRazenstudioSocialMediaEngagementTikTok::first();
        if($cek)
        {
            $landingpage_razenstudio_social_media_engagement_tik_tok = LandingpageRazenstudioSocialMediaEngagementTikTok::find($cek->id);
            if($landingpage_razenstudio_social_media_engagement_tik_tok->section_4)
            {
                $get_section_4 = json_decode($landingpage_razenstudio_social_media_engagement_tik_tok->section_4, true);

                if ($request->gambar) {
                    $gambarName = $get_section_4['gambar'];
                    File::delete(public_path('images/landingpage_razenstudio/social-media-engagement/tik-tok/'.$gambarName));

                    $gambarExtension = $request->gambar->extension();
                    $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                    $gambar = Image::make($request->gambar);
                    $gambarSize = public_path('images/landingpage_razenstudio/social-media-engagement/tik-tok/'.$gambarName);
                    $gambar->save($gambarSize, 100);
                } else {
                    $gambarName = $get_section_4['gambar'];
                }
            } else {
                $gambarExtension = $request->gambar->extension();
                $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                $gambar = Image::make($request->gambar);
                $gambarSize = public_path('images/landingpage_razenstudio/social-media-engagement/tik-tok/'.$gambarName);
                $gambar->save($gambarSize, 100);
            }
        } else {
            $landingpage_razenstudio_social_media_engagement_tik_tok = new LandingpageRazenstudioSocialMediaEngagementTikTok;

            $gambarExtension = $request->gambar->extension();
            $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
            $gambar = Image::make($request->gambar);
            $gambarSize = public_path('images/landingpage_razenstudio/social-media-engagement/tik-tok/'.$gambarName);
            $gambar->save($gambarSize, 100);
        }


        $array = [
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $gambarName
        ];

        $landingpage_razenstudio_social_media_engagement_tik_tok->section_4 = json_encode($array);
        $landingpage_razenstudio_social_media_engagement_tik_tok->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 4');
        return redirect()->route('razen-studio.admin.social-media-engagement.tik-tok.index');
    }

    public function section_5_store(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'judul' => 'required',
            'deskripsi' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-studio.admin.social-media-engagement.tik-tok.index');
        }

        $cek = LandingpageRazenstudioSocialMediaEngagementTikTok::first();
        if($cek)
        {
            $landingpage_razenstudio_social_media_engagement_tik_tok = LandingpageRazenstudioSocialMediaEngagementTikTok::find($cek->id);
        } else {
            $landingpage_razenstudio_social_media_engagement_tik_tok = new LandingpageRazenstudioSocialMediaEngagementTikTok;
        }
        $array = [
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
        ];

        $landingpage_razenstudio_social_media_engagement_tik_tok->section_5 = json_encode($array);
        $landingpage_razenstudio_social_media_engagement_tik_tok->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 5');
        return redirect()->route('razen-studio.admin.social-media-engagement.tik-tok.index');
    }

    //Section 6 Start
    public function section_6_store(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'judul' => 'required',
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-studio.admin.social-media-engagement.tik-tok.index');
        }

        $cek = LandingpageRazenstudioSocialMediaEngagementTikTok::first();
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
            'konten' => $konten
        ];

        if($cek)
        {
            $landingpage_razenstudio_social_media_engagement_tik_tok = LandingpageRazenstudioSocialMediaEngagementTikTok::find($cek->id);
        } else {
            $landingpage_razenstudio_social_media_engagement_tik_tok = new LandingpageRazenstudioSocialMediaEngagementTikTok;
        }
        $landingpage_razenstudio_social_media_engagement_tik_tok->section_6 = json_encode($array);
        $landingpage_razenstudio_social_media_engagement_tik_tok->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 6');
        return redirect()->route('razen-studio.admin.social-media-engagement.tik-tok.index');
    }

    public function section_6_hapus_satu(Request $request)
    {
        $get = LandingpageRazenstudioSocialMediaEngagementTikTok::first();
        $section6 = json_decode($get->section_6, true);
        $array = [];
        foreach ($section6['konten'] as $value) {
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
            'judul' => $section6['judul'],
            'konten' => $array
        ];

        $landingpage_razenstudio_social_media_engagement_tik_tok = LandingpageRazenstudioSocialMediaEngagementTikTok::find($get->id);
        $landingpage_razenstudio_social_media_engagement_tik_tok->section_6 = json_encode($data);
        $landingpage_razenstudio_social_media_engagement_tik_tok->save();

        return response()->json('berhasil');
    }

    public function section_6_edit(Request $request)
    {
        $get = LandingpageRazenstudioSocialMediaEngagementTikTok::first();
        $section6 = json_decode($get->section_6, true);

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
            foreach ($section6['konten'] as $value) {
                $array_lama[] = [
                    'id' => $value['id'],
                    'judul_konten' => $value['judul_konten'],
                    'deskripsi_konten' => $value['deskripsi_konten'],
                ];
            }

            $data = [
                'judul' => $request->judul,
                'konten' => array_merge($array_lama, $array_baru)
            ];
        } else {

            $array_lama = [];
            foreach ($section6['konten'] as $value) {
                $array_lama[] = [
                    'id' => $value['id'],
                    'judul_konten' => $value['judul_konten'],
                    'deskripsi_konten' => $value['deskripsi_konten'],
                ];
            }

            $data = [
                'judul' => $request->judul,
                'konten' => $array_lama
            ];
        }

        $landingpage_razenstudio_social_media_engagement_tik_tok = LandingpageRazenstudioSocialMediaEngagementTikTok::find($get->id);
        $landingpage_razenstudio_social_media_engagement_tik_tok->section_6 = json_encode($data);
        $landingpage_razenstudio_social_media_engagement_tik_tok->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 6');
        return redirect()->route('razen-studio.admin.social-media-engagement.tik-tok.index');
    }
    //Section 6 End

    public function section_7_store(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'sub_judul' => 'required',
            'judul' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-studio.admin.social-media-engagement.tik-tok.index');
        }

        $cek = LandingpageRazenstudioSocialMediaEngagementTikTok::first();
        if($cek)
        {
            $landingpage_razenstudio_social_media_engagement_tik_tok = LandingpageRazenstudioSocialMediaEngagementTikTok::find($cek->id);
        } else {
            $landingpage_razenstudio_social_media_engagement_tik_tok = new LandingpageRazenstudioSocialMediaEngagementTikTok;
        }
        $array = [
            'sub_judul' => $request->sub_judul,
            'judul' => $request->judul
        ];

        $landingpage_razenstudio_social_media_engagement_tik_tok->section_7 = json_encode($array);
        $landingpage_razenstudio_social_media_engagement_tik_tok->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 7');
        return redirect()->route('razen-studio.admin.social-media-engagement.tik-tok.index');
    }

    public function section_8_store(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-studio.admin.social-media-engagement.tik-tok.index');
        }

        $cek = LandingpageRazenstudioSocialMediaEngagementTikTok::first();
        if($cek)
        {
            $landingpage_razenstudio_social_media_engagement_tik_tok = LandingpageRazenstudioSocialMediaEngagementTikTok::find($cek->id);
            if($landingpage_razenstudio_social_media_engagement_tik_tok->section_8)
            {
                $get_section_8 = json_decode($landingpage_razenstudio_social_media_engagement_tik_tok->section_8, true);

                if ($request->gambar) {
                    $gambarName = $get_section_8['gambar'];
                    File::delete(public_path('images/landingpage_razenstudio/social-media-engagement/tik-tok/'.$gambarName));

                    $gambarExtension = $request->gambar->extension();
                    $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                    $gambar = Image::make($request->gambar);
                    $gambarSize = public_path('images/landingpage_razenstudio/social-media-engagement/tik-tok/'.$gambarName);
                    $gambar->save($gambarSize, 100);
                } else {
                    $gambarName = $get_section_8['gambar'];
                }
            } else {
                $gambarExtension = $request->gambar->extension();
                $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                $gambar = Image::make($request->gambar);
                $gambarSize = public_path('images/landingpage_razenstudio/social-media-engagement/tik-tok/'.$gambarName);
                $gambar->save($gambarSize, 100);
            }
        } else {
            $landingpage_razenstudio_social_media_engagement_tik_tok = new LandingpageRazenstudioSocialMediaEngagementTikTok;

            $gambarExtension = $request->gambar->extension();
            $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
            $gambar = Image::make($request->gambar);
            $gambarSize = public_path('images/landingpage_razenstudio/social-media-engagement/tik-tok/'.$gambarName);
            $gambar->save($gambarSize, 100);
        }


        $array = [
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $gambarName
        ];

        $landingpage_razenstudio_social_media_engagement_tik_tok->section_8 = json_encode($array);
        $landingpage_razenstudio_social_media_engagement_tik_tok->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 8');
        return redirect()->route('razen-studio.admin.social-media-engagement.tik-tok.index');
    }
}
