<?php

namespace App\Http\Controllers\RazenStudio\Admin\About;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;
use DB;
use Validator;
use Carbon\Carbon;
use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioAbout;

class AturController extends Controller
{
    public function index()
    {
        return view('razen-studio.admin.landing-page.about.atur.index');
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
            return redirect()->route('razen-studio.admin.about.atur.index');
        }

        $cek = LandingpageRazenstudioAbout::first();
        if($cek)
        {
            $landingpage_razenstudio_about = LandingpageRazenstudioAbout::find($cek->id);
        } else {
            $landingpage_razenstudio_about = new LandingpageRazenstudioAbout;
        }
        $array = [
            'title' => $request->title,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
        ];

        $landingpage_razenstudio_about->section_1 = json_encode($array);
        $landingpage_razenstudio_about->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 1');
        return redirect()->route('razen-studio.admin.about.atur.index');
    }

    //Section 2 Start
    public function section_2_store(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'judul' => 'required',
            'deskripsi' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-studio.admin.about.atur.index');
        }

        $cek = LandingpageRazenstudioAbout::first();
        if($cek)
        {
            $landingpage_razenstudio_about = LandingpageRazenstudioAbout::find($cek->id);
            if($landingpage_razenstudio_about->section_2)
            {
                $section_2 = json_decode($landingpage_razenstudio_about->section_2, true);
                $array_lama = [];

                foreach ($section_2 as $item) {
                    $array_lama[] = [
                        'id' => $item['id'],
                        'judul' => $item['judul'],
                        'deskripsi' => $item['deskripsi'],
                    ];
                }

                $array_baru[] = [
                    'id' => uniqid(),
                    'judul' => $request->judul,
                    'deskripsi' => $request->deskripsi
                ];

                $array = array_merge($array_lama, $array_baru);

            } else {
                $array[] = [
                    'id' => uniqid(),
                    'judul' => $request->judul,
                    'deskripsi' => $request->deskripsi,
                ];
            }

        } else {
            $landingpage_razenstudio_about = new LandingpageRazenstudioAbout;
            $array[] = [
                'id' => uniqid(),
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
            ];
        }

        $landingpage_razenstudio_about->section_2 = json_encode($array);
        $landingpage_razenstudio_about->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 2');
        return redirect()->route('razen-studio.admin.about.atur.index');
    }

    public function section_2_hapus_satu(Request $request)
    {
        $get = LandingpageRazenstudioAbout::first();
        $array = [];
        foreach (json_decode($get->section_2) as $value) {
            if($value->id != $request->id)
            {
                $array[] = [
                    'id' => $value->id,
                    'judul' => $value->judul,
                    'deskripsi' => $value->deskripsi,
                ];
            }
        }

        $landingpage_razenstudio_footer = LandingpageRazenstudioAbout::find($get->id);
        $landingpage_razenstudio_footer->section_2 = json_encode($array);
        $landingpage_razenstudio_footer->save();

        return response()->json('berhasil');
    }
    //Section 2 End

    public function section_3_store(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'judul' => 'required',
            'deskripsi' => 'required',
            'link' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-studio.admin.about.atur.index');
        }

        $cek = LandingpageRazenstudioAbout::first();
        if($cek)
        {
            $landingpage_razenstudio_jasa_branding_design = LandingpageRazenstudioAbout::find($cek->id);
            if($landingpage_razenstudio_jasa_branding_design->section_3)
            {
                $get_section_3 = json_decode($landingpage_razenstudio_jasa_branding_design->section_3, true);

                if ($request->gambar) {
                    $gambarName = $get_section_3['gambar'];
                    File::delete(public_path('images/landingpage_razenstudio/about/'.$gambarName));

                    $gambarExtension = $request->gambar->extension();
                    $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                    $gambar = Image::make($request->gambar);
                    $gambarSize = public_path('images/landingpage_razenstudio/about/'.$gambarName);
                    $gambar->save($gambarSize, 100);
                } else {
                    $gambarName = $get_section_3['gambar'];
                }
            } else {
                $gambarExtension = $request->gambar->extension();
                $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                $gambar = Image::make($request->gambar);
                $gambarSize = public_path('images/landingpage_razenstudio/about/'.$gambarName);
                $gambar->save($gambarSize, 100);
            }
        } else {
            $landingpage_razenstudio_jasa_branding_design = new LandingpageRazenstudioAbout;

            $gambarExtension = $request->gambar->extension();
            $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
            $gambar = Image::make($request->gambar);
            $gambarSize = public_path('images/landingpage_razenstudio/about/'.$gambarName);
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

        $landingpage_razenstudio_jasa_branding_design->section_3 = json_encode($array);
        $landingpage_razenstudio_jasa_branding_design->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 3');
        return redirect()->route('razen-studio.admin.about.atur.index');
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
            return redirect()->route('razen-studio.admin.about.atur.index');
        }

        $cek = LandingpageRazenstudioAbout::first();
        if($cek)
        {
            $landingpage_razenstudio_about = LandingpageRazenstudioAbout::find($cek->id);
        } else {
            $landingpage_razenstudio_about = new LandingpageRazenstudioAbout;
        }
        $array = [
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
        ];

        $landingpage_razenstudio_about->section_4 = json_encode($array);
        $landingpage_razenstudio_about->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 4');
        return redirect()->route('razen-studio.admin.about.atur.index');
    }

    //Section 5 Start
    public function section_5_store(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'sub_judul' => 'required',
            'judul' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-studio.admin.about.atur.index');
        }

        $judul_konten = $request->judul_konten;
        $deskripsi_konten = $request->deskripsi_konten;
        $gambar_konten = $request->gambar_konten;
        $array_konten = [];
        $array_gambar = [];

        foreach ($request->file('gambar_konten') as $file) {
            $gambarExtension = $file->extension();
            $gambarName = uniqid().'-'.date("ymd").'.'.$gambarExtension;
            $gambar = Image::make($file);
            $gambarSize = public_path('images/landingpage_razenstudio/about/'.$gambarName);
            $gambar->save($gambarSize, 60);

            $array_gambar[] = $gambarName;
        }

        for ($i=0; $i < count($array_gambar); $i++) {
            $array_konten[] = [
                'id' => uniqid(),
                'judul_konten' => $judul_konten[$i],
                'deskripsi_konten' => $deskripsi_konten[$i],
                'gambar_konten' => $array_gambar[$i]
            ];
        }

        $array_data = [
            'sub_judul' => $request->sub_judul,
            'judul' => $request->judul,
            'konten' => $array_konten
        ];

        $cek = LandingpageRazenstudioAbout::first();
        if($cek)
        {
            $landingpage_razenstudio_about  = LandingpageRazenstudioAbout::find($cek->id);
        } else {
            $landingpage_razenstudio_about  = new LandingpageRazenstudioAbout;
        }

        $landingpage_razenstudio_about ->section_5 = json_encode($array_data);
        $landingpage_razenstudio_about ->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 5');
        return redirect()->route('razen-studio.admin.about.atur.index');
    }

    public function section_5_edit(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'sub_judul' => 'required',
            'judul' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-studio.admin.about.atur.index');
        }

        $judul_konten = $request->judul_konten;
        $deskripsi_konten = $request->deskripsi_konten;
        $gambar_konten = $request->gambar_konten;
        $array_baru = [];
        $array_gambar = [];

        foreach ($request->file('gambar_konten') as $file) {
            $gambarExtension = $file->extension();
            $gambarName = uniqid().'-'.date("ymd").'.'.$gambarExtension;
            $gambar = Image::make($file);
            $gambarSize = public_path('images/landingpage_razenstudio/about/'.$gambarName);
            $gambar->save($gambarSize, 60);

            $array_gambar[] = $gambarName;
        }

        for ($i=0; $i < count($array_gambar); $i++) {
            $array_baru[] = [
                'id' => uniqid(),
                'judul_konten' => $judul_konten[$i],
                'deskripsi_konten' => $deskripsi_konten[$i],
                'gambar_konten' => $array_gambar[$i]
            ];
        }

        $get = LandingpageRazenstudioAbout::first();
        $section5 = json_decode($get->section_5, true);
        $array_lama = [];

        $array_lama = [];
        foreach ($section5['konten'] as $value) {
            $array_lama[] = [
                'id' => $value['id'],
                'judul_konten' => $value['judul_konten'],
                'deskripsi_konten' => $value['deskripsi_konten'],
                'gambar_konten' => $value['gambar_konten']
            ];
        }

        $array_data = [
            'sub_judul' => $request->sub_judul,
            'judul' => $request->judul,
            'konten' => array_merge($array_lama, $array_baru)
        ];

        $landingpage_razenstudio_about  = LandingpageRazenstudioAbout::find($get->id);
        $landingpage_razenstudio_about ->section_5 = json_encode($array_data);
        $landingpage_razenstudio_about ->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 5');
        return redirect()->route('razen-studio.admin.about.atur.index');
    }

    public function section_5_hapus_satu(Request $request)
    {
        $get = LandingpageRazenstudioAbout::first();
        $section5 = json_decode($get->section_5, true);
        $array_konten = [];
        foreach ($section5['konten'] as $value) {
            if($value['id'] == $request->id)
            {
                File::delete(public_path('images/landingpage_razenstudio/about/'.$value['gambar_konten']));
            } else {
                $array_konten[] = [
                    'id' => $value['id'],
                    'judul_konten' => $value['judul_konten'],
                    'deskripsi_konten' => $value['deskripsi_konten'],
                    'gambar_konten' => $value['gambar_konten']
                ];
            }
        }

        $data = [
            'sub_judul' => $section5['sub_judul'],
            'judul' => $section5['judul'],
            'konten' => $array_konten
        ];

        $landingpage_razenstudio_about  = LandingpageRazenstudioAbout::find($get->id);
        $landingpage_razenstudio_about ->section_5 = json_encode($data);
        $landingpage_razenstudio_about ->save();

        return response()->json('berhasil');
    }
    //Section 5 End

    public function section_6_store(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'judul' => 'required',
            'deskripsi' => 'required',
            'link' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-studio.admin.about.atur.index');
        }

        $cek = LandingpageRazenstudioAbout::first();
        if($cek)
        {
            $landingpage_razenstudio_jasa_branding_design = LandingpageRazenstudioAbout::find($cek->id);
            if($landingpage_razenstudio_jasa_branding_design->section_6)
            {
                $get_section_6 = json_decode($landingpage_razenstudio_jasa_branding_design->section_6, true);

                if ($request->gambar) {
                    $gambarName = $get_section_6['gambar'];
                    File::delete(public_path('images/landingpage_razenstudio/about/'.$gambarName));

                    $gambarExtension = $request->gambar->extension();
                    $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                    $gambar = Image::make($request->gambar);
                    $gambarSize = public_path('images/landingpage_razenstudio/about/'.$gambarName);
                    $gambar->save($gambarSize, 100);
                } else {
                    $gambarName = $get_section_6['gambar'];
                }
            } else {
                $gambarExtension = $request->gambar->extension();
                $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                $gambar = Image::make($request->gambar);
                $gambarSize = public_path('images/landingpage_razenstudio/about/'.$gambarName);
                $gambar->save($gambarSize, 100);
            }
        } else {
            $landingpage_razenstudio_jasa_branding_design = new LandingpageRazenstudioAbout;

            $gambarExtension = $request->gambar->extension();
            $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
            $gambar = Image::make($request->gambar);
            $gambarSize = public_path('images/landingpage_razenstudio/about/'.$gambarName);
            $gambar->save($gambarSize, 100);
        }

        $array = [
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'link' => $request->link,
            'gambar' => $gambarName
        ];

        $landingpage_razenstudio_jasa_branding_design->section_6 = json_encode($array);
        $landingpage_razenstudio_jasa_branding_design->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 6');
        return redirect()->route('razen-studio.admin.about.atur.index');
    }

    public function section_7_store(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'judul' => 'required',
            'deskripsi' => 'required',
            'link' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-studio.admin.about.atur.index');
        }

        $cek = LandingpageRazenstudioAbout::first();
        if($cek)
        {
            $landingpage_razenstudio_jasa_branding_design = LandingpageRazenstudioAbout::find($cek->id);
            if($landingpage_razenstudio_jasa_branding_design->section_7)
            {
                $get_section_7 = json_decode($landingpage_razenstudio_jasa_branding_design->section_7, true);

                if ($request->gambar) {
                    $gambarName = $get_section_7['gambar'];
                    File::delete(public_path('images/landingpage_razenstudio/about/'.$gambarName));

                    $gambarExtension = $request->gambar->extension();
                    $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                    $gambar = Image::make($request->gambar);
                    $gambarSize = public_path('images/landingpage_razenstudio/about/'.$gambarName);
                    $gambar->save($gambarSize, 100);
                } else {
                    $gambarName = $get_section_7['gambar'];
                }
            } else {
                $gambarExtension = $request->gambar->extension();
                $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                $gambar = Image::make($request->gambar);
                $gambarSize = public_path('images/landingpage_razenstudio/about/'.$gambarName);
                $gambar->save($gambarSize, 100);
            }
        } else {
            $landingpage_razenstudio_jasa_branding_design = new LandingpageRazenstudioAbout;

            $gambarExtension = $request->gambar->extension();
            $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
            $gambar = Image::make($request->gambar);
            $gambarSize = public_path('images/landingpage_razenstudio/about/'.$gambarName);
            $gambar->save($gambarSize, 100);
        }

        $array = [
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'link' => $request->link,
            'gambar' => $gambarName
        ];

        $landingpage_razenstudio_jasa_branding_design->section_7 = json_encode($array);
        $landingpage_razenstudio_jasa_branding_design->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 7');
        return redirect()->route('razen-studio.admin.about.atur.index');
    }

}
