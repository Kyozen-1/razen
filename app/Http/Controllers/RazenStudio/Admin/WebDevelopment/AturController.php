<?php

namespace App\Http\Controllers\RazenStudio\Admin\WebDevelopment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;
use DB;
use Validator;
use Carbon\Carbon;
use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioWebDevelopment;

class AturController extends Controller
{
    public function index()
    {
        return view('razen-studio.admin.landing-page.web-development.atur.index');
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
            return redirect()->route('razen-studio.admin.web-development.atur.index');
        }

        $cek = LandingpageRazenstudioWebDevelopment::first();
        if($cek)
        {
            $landingpage_razenstudio_web_development = LandingpageRazenstudioWebDevelopment::find($cek->id);
            if($landingpage_razenstudio_web_development->section_1)
            {
                $get_section_1 = json_decode($landingpage_razenstudio_web_development->section_1, true);

                if ($request->gambar) {
                    $gambarName = $get_section_1['gambar'];
                    File::delete(public_path('images/landingpage_razenstudio/web-development/'.$gambarName));

                    $gambarExtension = $request->gambar->extension();
                    $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                    $gambar = Image::make($request->gambar);
                    $gambarSize = public_path('images/landingpage_razenstudio/web-development/'.$gambarName);
                    $gambar->save($gambarSize, 100);
                } else {
                    $gambarName = $get_section_1['gambar'];
                }
            } else {
                $gambarExtension = $request->gambar->extension();
                $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                $gambar = Image::make($request->gambar);
                $gambarSize = public_path('images/landingpage_razenstudio/web-development/'.$gambarName);
                $gambar->save($gambarSize, 100);
            }
        } else {
            $landingpage_razenstudio_web_development = new LandingpageRazenstudioWebDevelopment;

            $gambarExtension = $request->gambar->extension();
            $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
            $gambar = Image::make($request->gambar);
            $gambarSize = public_path('images/landingpage_razenstudio/web-development/'.$gambarName);
            $gambar->save($gambarSize, 100);
        }

        $array = [
            'title' => $request->title,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $gambarName
        ];

        $landingpage_razenstudio_web_development->section_1 = json_encode($array);
        $landingpage_razenstudio_web_development->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 1');
        return redirect()->route('razen-studio.admin.web-development.atur.index');
    }

    public function section_2_store(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'link_youtube' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-studio.admin.web-development.atur.index');
        }

        $cek = LandingpageRazenstudioWebDevelopment::first();
        if($cek)
        {
            $landingpage_razenstudio_web_development = LandingpageRazenstudioWebDevelopment::find($cek->id);
            if($landingpage_razenstudio_web_development->section_2)
            {
                $get_section_2 = json_decode($landingpage_razenstudio_web_development->section_2, true);

                if ($request->gambar_kanan) {
                    $gambarKananName = $get_section_2['gambar_kanan'];
                    File::delete(public_path('images/landingpage_razenstudio/web-development/'.$gambarKananName));

                    $gambarKananExtension = $request->gambar_kanan->extension();
                    $gambarKananName =  uniqid().'-'.date("ymd").'.'.$gambarKananExtension;
                    $gambarKanan = Image::make($request->gambar_kanan);
                    $gambarKananSize = public_path('images/landingpage_razenstudio/web-development/'.$gambarKananName);
                    $gambarKanan->save($gambarKananSize, 100);

                } else {
                    $gambarKananName = $get_section_2['gambar_kanan'];
                }

                if ($request->gambar_bawah) {
                    $gambarBawahName = $get_section_2['gambar_bawah'];
                    File::delete(public_path('images/landingpage_razenstudio/web-development/'.$gambarBawahName));

                    $gambarBawahExtension = $request->gambar_bawah->extension();
                    $gambarBawahName =  uniqid().'-'.date("ymd").'.'.$gambarBawahExtension;
                    $gambarBawah = Image::make($request->gambar_bawah);
                    $gambarBawahSize = public_path('images/landingpage_razenstudio/web-development/'.$gambarBawahName);
                    $gambarBawah->save($gambarBawahSize, 100);
                } else {
                    $gambarBawahName = $get_section_2['gambar_bawah'];
                }
            } else {
                $gambarKananExtension = $request->gambar_kanan->extension();
                $gambarKananName =  uniqid().'-'.date("ymd").'.'.$gambarKananExtension;
                $gambarKanan = Image::make($request->gambar_kanan);
                $gambarKananSize = public_path('images/landingpage_razenstudio/web-development/'.$gambarKananName);
                $gambarKanan->save($gambarKananSize, 100);

                $gambarBawahExtension = $request->gambar_bawah->extension();
                $gambarBawahName =  uniqid().'-'.date("ymd").'.'.$gambarBawahExtension;
                $gambarBawah = Image::make($request->gambar_bawah);
                $gambarBawahSize = public_path('images/landingpage_razenstudio/web-development/'.$gambarBawahName);
                $gambarBawah->save($gambarBawahSize, 100);
            }
        } else {
            $landingpage_razenstudio_web_development = new LandingpageRazenstudioWebDevelopment;

            $gambarKananExtension = $request->gambar_kanan->extension();
            $gambarKananName =  uniqid().'-'.date("ymd").'.'.$gambarKananExtension;
            $gambarKanan = Image::make($request->gambar_kanan);
            $gambarKananSize = public_path('images/landingpage_razenstudio/web-development/'.$gambarKananName);
            $gambarKanan->save($gambarKananSize, 100);

            $gambarBawahExtension = $request->gambar_bawah->extension();
            $gambarBawahName =  uniqid().'-'.date("ymd").'.'.$gambarBawahExtension;
            $gambarBawah = Image::make($request->gambar_bawah);
            $gambarBawahSize = public_path('images/landingpage_razenstudio/web-development/'.$gambarBawahName);
            $gambarBawah->save($gambarBawahSize, 100);
        }

        $array = [
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'link_youtube' => $request->link_youtube,
            'gambar_kanan' => $gambarKananName,
            'gambar_bawah' => $gambarBawahName
        ];

        $landingpage_razenstudio_web_development->section_2 = json_encode($array);
        $landingpage_razenstudio_web_development->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 2');
        return redirect()->route('razen-studio.admin.web-development.atur.index');
    }

    //Section 3 Start
    public function section_3_store(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'sub_judul' => 'required',
            'judul' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-studio.admin.web-development.atur.index');
        }

        $cek = LandingpageRazenstudioWebDevelopment::first();
        if($cek)
        {
            $landingpage_razenstudio_web_development = LandingpageRazenstudioWebDevelopment::find($cek->id);
        } else {
            $landingpage_razenstudio_web_development = new LandingpageRazenstudioWebDevelopment;
        }
        $array = [
            'sub_judul' => $request->sub_judul,
            'judul' => $request->judul,
            'item' => []
        ];

        $landingpage_razenstudio_web_development->section_3 = json_encode($array);
        $landingpage_razenstudio_web_development->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 3');
        return redirect()->route('razen-studio.admin.web-development.atur.index');
    }

    public function section_3_item_1_store(Request $request)
    {
        $cek = LandingpageRazenstudioWebDevelopment::first();
        if($cek)
        {
            $web_development = LandingpageRazenstudioWebDevelopment::find($cek->id);
            $section3 = json_decode($web_development->section_3, true);
            $array_baru = [];
            $array_lama = [];

            if($request->gambar)
            {
                $gambarExtension = $request->gambar->extension();
                $gambarName = uniqid().'-'.date("ymd").'.'.$gambarExtension;
                $gambar = Image::make($request->gambar);
                $gambarSize = public_path('images/landingpage_razenstudio/web-development/'.$gambarName);
                $gambar->save($gambarSize, 60);

                $array_baru[] = [
                    'item' => $request->item,
                    'deskripsi' => $request->deskripsi,
                    'gambar' => $gambarName,
                ];

            } else {
                Alert::error('Gagal Menyimpan!', 'Tidak dapat menyimpan karena tidak ada data');
                return redirect()->route('razen-studio.admin.web-development.atur.index');
            }

            foreach ($section3['item'] as $value) {
                if($value['item'] == 'jasa_pembuatan_landing_page')
                {
                    $current_gambar = $value['gambar'];
                    for ($i=0; $i < count($current_gambar); $i++) {
                        File::delete(public_path('images/landingpage_razenstudio/web-development/'.$current_gambar[$i]));
                    }
                }
                if($value['item'] == 'jasa_pembuatan_website_toko_online')
                {
                    $array_lama[] = [
                        'item' => $value['item'],
                        'deskripsi' => $value['deskripsi'],
                        'gambar' => $value['gambar'],
                    ];
                }
                if($value['item'] == 'jasa_pembuatan_website_perusahaan')
                {
                    $array_lama[] = [
                        'item' => $value['item'],
                        'deskripsi' => $value['deskripsi'],
                        'gambar' => $value['gambar'],
                    ];
                }
            }

            $data = [
                'sub_judul' => $section3['sub_judul'],
                'judul' => $section3['judul'],
                'item' => array_merge($array_lama, $array_baru)
            ];

            $web_development->section_3 = json_encode($data);
            $web_development->save();

            Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 3');
            return redirect()->route('razen-studio.admin.web-development.atur.index');
        } else {
            Alert::error('Gagal Menyimpan!', 'Tidak dapat menyimpan karena tidak ada data');
            return redirect()->route('razen-studio.admin.web-development.atur.index');
        }
    }

    public function section_3_item_2_store(Request $request)
    {
        $cek = LandingpageRazenstudioWebDevelopment::first();
        if($cek)
        {
            $web_development = LandingpageRazenstudioWebDevelopment::find($cek->id);
            $section3 = json_decode($web_development->section_3, true);
            $array_baru = [];
            $array_lama = [];

            if($request->gambar)
            {
                $gambarExtension = $request->gambar->extension();
                $gambarName = uniqid().'-'.date("ymd").'.'.$gambarExtension;
                $gambar = Image::make($request->gambar);
                $gambarSize = public_path('images/landingpage_razenstudio/web-development/'.$gambarName);
                $gambar->save($gambarSize, 60);

                $array_baru[] = [
                    'item' => $request->item,
                    'deskripsi' => $request->deskripsi,
                    'gambar' => $gambarName,
                ];

            } else {
                Alert::error('Gagal Menyimpan!', 'Tidak dapat menyimpan karena tidak ada data');
                return redirect()->route('razen-studio.admin.web-development.atur.index');
            }

            foreach ($section3['item'] as $value) {
                if($value['item'] == 'jasa_pembuatan_landing_page')
                {
                    $array_lama[] = [
                        'item' => $value['item'],
                        'deskripsi' => $value['deskripsi'],
                        'gambar' => $value['gambar'],
                    ];
                }

                if($value['item'] == 'jasa_pembuatan_website_toko_online')
                {
                    $current_gambar = $value['gambar'];
                    for ($i=0; $i < count($current_gambar); $i++) {
                        File::delete(public_path('images/landingpage_razenstudio/web-development/'.$current_gambar[$i]));
                    }
                }

                if($value['item'] == 'jasa_pembuatan_website_perusahaan')
                {
                    $array_lama[] = [
                        'item' => $value['item'],
                        'deskripsi' => $value['deskripsi'],
                        'gambar' => $value['gambar'],
                    ];
                }
            }

            $data = [
                'sub_judul' => $section3['sub_judul'],
                'judul' => $section3['judul'],
                'item' => array_merge($array_lama, $array_baru)
            ];

            $web_development->section_3 = json_encode($data);
            $web_development->save();

            Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 3');
            return redirect()->route('razen-studio.admin.web-development.atur.index');
        } else {
            Alert::error('Gagal Menyimpan!', 'Tidak dapat menyimpan karena tidak ada data');
            return redirect()->route('razen-studio.admin.web-development.atur.index');
        }
    }

    public function section_3_item_3_store(Request $request)
    {
        $cek = LandingpageRazenstudioWebDevelopment::first();
        if($cek)
        {
            $web_development = LandingpageRazenstudioWebDevelopment::find($cek->id);
            $section3 = json_decode($web_development->section_3, true);
            $array_baru = [];
            $array_lama = [];

            if($request->gambar)
            {
                $gambarExtension = $request->gambar->extension();
                $gambarName = uniqid().'-'.date("ymd").'.'.$gambarExtension;
                $gambar = Image::make($request->gambar);
                $gambarSize = public_path('images/landingpage_razenstudio/web-development/'.$gambarName);
                $gambar->save($gambarSize, 60);

                $array_baru[] = [
                    'item' => $request->item,
                    'deskripsi' => $request->deskripsi,
                    'gambar' => $gambarName,
                ];

            } else {
                Alert::error('Gagal Menyimpan!', 'Tidak dapat menyimpan karena tidak ada data');
                return redirect()->route('razen-studio.admin.web-development.atur.index');
            }

            foreach ($section3['item'] as $value) {
                if($value['item'] == 'jasa_pembuatan_landing_page')
                {
                    $array_lama[] = [
                        'item' => $value['item'],
                        'deskripsi' => $value['deskripsi'],
                        'gambar' => $value['gambar'],
                    ];
                }

                if($value['item'] == 'jasa_pembuatan_website_toko_online')
                {
                    $array_lama[] = [
                        'item' => $value['item'],
                        'deskripsi' => $value['deskripsi'],
                        'gambar' => $value['gambar'],
                    ];
                }

                if($value['item'] == 'jasa_pembuatan_website_perusahaan')
                {
                    $current_gambar = $value['gambar'];
                    for ($i=0; $i < count($current_gambar); $i++) {
                        File::delete(public_path('images/landingpage_razenstudio/web-development/'.$current_gambar[$i]));
                    }
                }
            }

            $data = [
                'sub_judul' => $section3['sub_judul'],
                'judul' => $section3['judul'],
                'item' => array_merge($array_lama, $array_baru)
            ];

            $web_development->section_3 = json_encode($data);
            $web_development->save();

            Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 3');
            return redirect()->route('razen-studio.admin.web-development.atur.index');
        } else {
            Alert::error('Gagal Menyimpan!', 'Tidak dapat menyimpan karena tidak ada data');
            return redirect()->route('razen-studio.admin.web-development.atur.index');
        }
    }

    public function section_4_store(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'sub_judul' => 'required',
            'judul' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-studio.admin.web-development.atur.index');
        }

        $cek = LandingpageRazenstudioWebDevelopment::first();
        if($cek)
        {
            $landingpage_razenstudio_web_development = LandingpageRazenstudioWebDevelopment::find($cek->id);
        } else {
            $landingpage_razenstudio_web_development = new LandingpageRazenstudioWebDevelopment;
        }

        $array = [
            'sub_judul' => $request->sub_judul,
            'judul' => $request->judul
        ];

        $landingpage_razenstudio_web_development->section_4 = json_encode($array);
        $landingpage_razenstudio_web_development->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 4');
        return redirect()->route('razen-studio.admin.web-development.atur.index');
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
            return redirect()->route('razen-studio.admin.web-development.atur.index');
        }

        $cek = LandingpageRazenstudioWebDevelopment::first();
        if($cek)
        {
            $landingpage_razenstudio_web_development = LandingpageRazenstudioWebDevelopment::find($cek->id);
            if($landingpage_razenstudio_web_development->section_5)
            {
                $get_section_5 = json_decode($landingpage_razenstudio_web_development->section_5, true);

                if ($request->gambar) {
                    $gambarName = $get_section_5['gambar'];
                    File::delete(public_path('images/landingpage_razenstudio/web-development/'.$gambarName));

                    $gambarExtension = $request->gambar->extension();
                    $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                    $gambar = Image::make($request->gambar);
                    $gambarSize = public_path('images/landingpage_razenstudio/web-development/'.$gambarName);
                    $gambar->save($gambarSize, 100);
                } else {
                    $gambarName = $get_section_5['gambar'];
                }
            } else {
                $gambarExtension = $request->gambar->extension();
                $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                $gambar = Image::make($request->gambar);
                $gambarSize = public_path('images/landingpage_razenstudio/web-development/'.$gambarName);
                $gambar->save($gambarSize, 100);
            }
        } else {
            $landingpage_razenstudio_web_development = new LandingpageRazenstudioWebDevelopment;

            $gambarExtension = $request->gambar->extension();
            $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
            $gambar = Image::make($request->gambar);
            $gambarSize = public_path('images/landingpage_razenstudio/web-development/'.$gambarName);
            $gambar->save($gambarSize, 100);
        }

        $array = [
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $gambarName
        ];

        $landingpage_razenstudio_web_development->section_5 = json_encode($array);
        $landingpage_razenstudio_web_development->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 5');
        return redirect()->route('razen-studio.admin.web-development.atur.index');
    }

    //Section 6 Start
    public function section_6_store(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'sub_judul' => 'required',
            'judul' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-studio.admin.web-development.atur.index');
        }

        $judul_konten = $request->judul_konten;
        $deskripsi_konten = $request->deskripsi_konten;
        $logo_konten = $request->logo_konten;
        $array_konten = [];
        $array_logo = [];

        foreach ($request->file('logo_konten') as $file) {
            $gambarExtension = $file->extension();
            $gambarName = uniqid().'-'.date("ymd").'.'.$gambarExtension;
            $gambar = Image::make($file);
            $gambarSize = public_path('images/landingpage_razenstudio/web-development/'.$gambarName);
            $gambar->save($gambarSize, 60);

            $array_logo[] = $gambarName;
        }

        for ($i=0; $i < count($array_logo); $i++) {
            $array_konten[] = [
                'id' => uniqid(),
                'judul_konten' => $judul_konten[$i],
                'deskripsi_konten' => $deskripsi_konten[$i],
                'logo_konten' => $array_logo[$i]
            ];
        }

        $array_data = [
            'sub_judul' => $request->sub_judul,
            'judul' => $request->judul,
            'konten' => $array_konten
        ];

        $cek = LandingpageRazenstudioWebDevelopment::first();
        if($cek)
        {
            $landingpage_razenstudio_web_development = LandingpageRazenstudioWebDevelopment::find($cek->id);
        } else {
            $landingpage_razenstudio_web_development = new LandingpageRazenstudioWebDevelopment;
        }

        $landingpage_razenstudio_web_development->section_6 = json_encode($array_data);
        $landingpage_razenstudio_web_development->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 6');
        return redirect()->route('razen-studio.admin.web-development.atur.index');
    }

    public function section_6_edit(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'sub_judul' => 'required',
            'judul' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-studio.admin.web-development.atur.index');
        }

        $judul_konten = $request->judul_konten;
        $deskripsi_konten = $request->deskripsi_konten;
        $logo_konten = $request->logo_konten;
        $array_baru = [];
        $array_logo = [];

        foreach ($request->file('logo_konten') as $file) {
            $gambarExtension = $file->extension();
            $gambarName = uniqid().'-'.date("ymd").'.'.$gambarExtension;
            $gambar = Image::make($file);
            $gambarSize = public_path('images/landingpage_razenstudio/web-development/'.$gambarName);
            $gambar->save($gambarSize, 60);

            $array_logo[] = $gambarName;
        }

        for ($i=0; $i < count($array_logo); $i++) {
            $array_baru[] = [
                'id' => uniqid(),
                'judul_konten' => $judul_konten[$i],
                'deskripsi_konten' => $deskripsi_konten[$i],
                'logo_konten' => $array_logo[$i]
            ];
        }

        $get = LandingpageRazenstudioWebDevelopment::first();
        $section6 = json_decode($get->section_6, true);
        $array_lama = [];

        $array_lama = [];
        foreach ($section6['konten'] as $value) {
            $array_lama[] = [
                'id' => $value['id'],
                'judul_konten' => $value['judul_konten'],
                'deskripsi_konten' => $value['deskripsi_konten'],
                'logo_konten' => $value['logo_konten']
            ];
        }

        $array_data = [
            'sub_judul' => $request->sub_judul,
            'judul' => $request->judul,
            'konten' => array_merge($array_lama, $array_baru)
        ];

        $landingpage_razenstudio_web_development = LandingpageRazenstudioWebDevelopment::find($get->id);
        $landingpage_razenstudio_web_development->section_6 = json_encode($array_data);
        $landingpage_razenstudio_web_development->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 6');
        return redirect()->route('razen-studio.admin.web-development.atur.index');
    }

    public function section_6_hapus_satu(Request $request)
    {
        $get = LandingpageRazenstudioWebDevelopment::first();
        $section6 = json_decode($get->section_6, true);
        $array_konten = [];
        foreach ($section6['konten'] as $value) {
            if($value['id'] == $request->id)
            {
                File::delete(public_path('images/landingpage_razenstudio/web-development/'.$value['logo_konten']));
            } else {
                $array_konten[] = [
                    'id' => $value['id'],
                    'judul_konten' => $value['judul_konten'],
                    'deskripsi_konten' => $value['deskripsi_konten'],
                    'logo_konten' => $value['logo_konten']
                ];
            }
        }

        $data = [
            'sub_judul' => $section6['sub_judul'],
            'judul' => $section6['judul'],
            'konten' => $array_konten
        ];

        $landingpage_razenstudio_web_development = LandingpageRazenstudioWebDevelopment::find($get->id);
        $landingpage_razenstudio_web_development->section_6 = json_encode($data);
        $landingpage_razenstudio_web_development->save();

        return response()->json('berhasil');
    }
    //Section 6 End

    public function section_7_store(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'sub_judul' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-studio.admin.web-development.atur.index');
        }

        $cek = LandingpageRazenstudioWebDevelopment::first();
        if($cek)
        {
            $landingpage_razenstudio_web_development = LandingpageRazenstudioWebDevelopment::find($cek->id);
        } else {
            $landingpage_razenstudio_web_development = new LandingpageRazenstudioWebDevelopment;
        }

        $array = [
            'sub_judul' => $request->sub_judul,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi
        ];

        $landingpage_razenstudio_web_development->section_7 = json_encode($array);
        $landingpage_razenstudio_web_development->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 7');
        return redirect()->route('razen-studio.admin.web-development.atur.index');
    }

    //Section 8 Start
    public function section_8_store(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'sub_judul' => 'required',
            'judul' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-studio.admin.web-development.atur.index');
        }

        $cek = LandingpageRazenstudioWebDevelopment::first();
        $pertanyaan = $request->pertanyaan;
        $jawaban = $request->jawaban;

        $konten = [];

        for ($i=0; $i < count($pertanyaan); $i++) {
            $konten[] = [
                'id' => uniqid(),
                'pertanyaan' => $pertanyaan[$i],
                'jawaban' => $jawaban[$i]
            ];
        }

        $array = [
            'sub_judul' => $request->sub_judul,
            'judul' => $request->judul,
            'konten' => $konten
        ];

        if($cek)
        {
            $landingpage_razenstudio_web_development = LandingpageRazenstudioWebDevelopment::find($cek->id);
        } else {
            $landingpage_razenstudio_web_development = new LandingpageRazenstudioWebDevelopment;
        }
        $landingpage_razenstudio_web_development->section_8 = json_encode($array);
        $landingpage_razenstudio_web_development->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 8');
        return redirect()->route('razen-studio.admin.web-development.atur.index');
    }

    public function section_8_hapus_satu(Request $request)
    {
        $get = LandingpageRazenstudioWebDevelopment::first();
        $section8 = json_decode($get->section_8, true);
        $array = [];
        foreach ($section8['konten'] as $value) {
            if($value['id'] != $request->id)
            {
                $array[] = [
                    'id' => $value['id'],
                    'pertanyaan' => $value['pertanyaan'],
                    'jawaban' => $value['jawaban'],
                ];
            }
        }

        $data = [
            'sub_judul' => $section8['sub_judul'],
            'judul' => $section8['judul'],
            'konten' => $array
        ];

        $landingpage_razenstudio_web_development = LandingpageRazenstudioWebDevelopment::find($get->id);
        $landingpage_razenstudio_web_development->section_8 = json_encode($data);
        $landingpage_razenstudio_web_development->save();

        return response()->json('berhasil');
    }

    public function section_8_edit(Request $request)
    {
        $get = LandingpageRazenstudioWebDevelopment::first();
        $section8 = json_decode($get->section_8, true);

        if($request->pertanyaan)
        {
            $pertanyaan_baru = $request->pertanyaan;
            $jawaban_baru = $request->jawaban;

            $array_baru = [];
            for ($i=0; $i < count($pertanyaan_baru); $i++) {
                $array_baru[] = [
                    'id' => uniqid(),
                    'pertanyaan' => $pertanyaan_baru[$i],
                    'jawaban' => $jawaban_baru[$i],
                ];
            }

            $array_lama = [];
            foreach ($section8['konten'] as $value) {
                $array_lama[] = [
                    'id' => $value['id'],
                    'pertanyaan' => $value['pertanyaan'],
                    'jawaban' => $value['jawaban'],
                ];
            }

            $data = [
                'sub_judul' => $request->sub_judul,
                'judul' => $request->judul,
                'konten' => array_merge($array_lama, $array_baru)
            ];
        } else {

            $array_lama = [];
            foreach ($section8['konten'] as $value) {
                $array_lama[] = [
                    'id' => $value['id'],
                    'pertanyaan' => $value['pertanyaan'],
                    'jawaban' => $value['jawaban'],
                ];
            }

            $data = [
                'sub_judul' => $request->sub_judul,
                'judul' => $request->judul,
                'konten' => $array_lama
            ];
        }

        $landingpage_razenstudio_web_development = LandingpageRazenstudioWebDevelopment::find($get->id);
        $landingpage_razenstudio_web_development->section_8 = json_encode($data);
        $landingpage_razenstudio_web_development->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 8');
        return redirect()->route('razen-studio.admin.web-development.atur.index');
    }
    //Section 8 End

    //Section 9 Start
    public function section_9_store(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'judul' => 'required',
            'deskripsi' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-studio.admin.web-development.atur.index');
        }

        $lokasi_konten = $request->lokasi_konten;
        $logo_konten = $request->logo_konten;
        $array_konten = [];
        $array_logo = [];

        foreach ($request->file('logo_konten') as $file) {
            $gambarExtension = $file->extension();
            $gambarName = uniqid().'-'.date("ymd").'.'.$gambarExtension;
            $gambar = Image::make($file);
            $gambarSize = public_path('images/landingpage_razenstudio/web-development/'.$gambarName);
            $gambar->save($gambarSize, 90);

            $array_logo[] = $gambarName;
        }

        for ($i=0; $i < count($array_logo); $i++) {
            $array_konten[] = [
                'id' => uniqid(),
                'lokasi_konten' => $lokasi_konten[$i],
                'logo_konten' => $array_logo[$i]
            ];
        }

        $array_data = [
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'konten' => $array_konten
        ];

        $cek = LandingpageRazenstudioWebDevelopment::first();
        if($cek)
        {
            $landingpage_razenstudio_web_development = LandingpageRazenstudioWebDevelopment::find($cek->id);
        } else {
            $landingpage_razenstudio_web_development = new LandingpageRazenstudioWebDevelopment;
        }

        $landingpage_razenstudio_web_development->section_9 = json_encode($array_data);
        $landingpage_razenstudio_web_development->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 9');
        return redirect()->route('razen-studio.admin.web-development.atur.index');
    }

    public function section_9_edit(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'judul' => 'required',
            'deskripsi' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-studio.admin.web-development.atur.index');
        }

        $lokasi_konten = $request->lokasi_konten;
        $logo_konten = $request->logo_konten;
        $array_baru = [];
        $array_logo = [];

        foreach ($request->file('logo_konten') as $file) {
            $gambarExtension = $file->extension();
            $gambarName = uniqid().'-'.date("ymd").'.'.$gambarExtension;
            $gambar = Image::make($file);
            $gambarSize = public_path('images/landingpage_razenstudio/web-development/'.$gambarName);
            $gambar->save($gambarSize, 90);

            $array_logo[] = $gambarName;
        }

        for ($i=0; $i < count($array_logo); $i++) {
            $array_baru[] = [
                'id' => uniqid(),
                'lokasi_konten' => $lokasi_konten[$i],
                'logo_konten' => $array_logo[$i]
            ];
        }

        $get = LandingpageRazenstudioWebDevelopment::first();
        $section9 = json_decode($get->section_9, true);
        $array_lama = [];

        $array_lama = [];
        foreach ($section9['konten'] as $value) {
            $array_lama[] = [
                'id' => $value['id'],
                'lokasi_konten' => $value['lokasi_konten'],
                'logo_konten' => $value['logo_konten']
            ];
        }

        $array_data = [
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'konten' => array_merge($array_lama, $array_baru)
        ];

        $landingpage_razenstudio_web_development = LandingpageRazenstudioWebDevelopment::find($get->id);
        $landingpage_razenstudio_web_development->section_9 = json_encode($array_data);
        $landingpage_razenstudio_web_development->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 9');
        return redirect()->route('razen-studio.admin.web-development.atur.index');
    }

    public function section_9_hapus_satu(Request $request)
    {
        $get = LandingpageRazenstudioWebDevelopment::first();
        $section9 = json_decode($get->section_9, true);
        $array_konten = [];
        foreach ($section9['konten'] as $value) {
            if($value['id'] == $request->id)
            {
                File::delete(public_path('images/landingpage_razenstudio/web-development/'.$value['logo_konten']));
            } else {
                $array_konten[] = [
                    'id' => $value['id'],
                    'lokasi_konten' => $value['lokasi_konten'],
                    'logo_konten' => $value['logo_konten']
                ];
            }
        }

        $data = [
            'judul' => $section9['judul'],
            'deskripsi' => $section9['deskripsi'],
            'konten' => $array_konten
        ];

        $landingpage_razenstudio_web_development = LandingpageRazenstudioWebDevelopment::find($get->id);
        $landingpage_razenstudio_web_development->section_9 = json_encode($data);
        $landingpage_razenstudio_web_development->save();

        return response()->json('berhasil');
    }
    //Section 9 End

    //Section 10 Start
    public function section_10_store(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'judul' => 'required',
            'deskripsi' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-studio.admin.web-development.atur.index');
        }

        $cek = LandingpageRazenstudioWebDevelopment::first();
        if($cek)
        {
            $landingpage_razenstudio_web_development = LandingpageRazenstudioWebDevelopment::find($cek->id);
            if($landingpage_razenstudio_web_development->section_10)
            {
                $get_section_10 = json_decode($landingpage_razenstudio_web_development->section_10, true);

                if ($request->gambar_kiri) {
                    $gambarKiriName = $get_section_10['gambar_kiri'];
                    File::delete(public_path('images/landingpage_razenstudio/web-development/'.$gambarKiriName));

                    $gambarKiriExtension = $request->gambar_kiri->extension();
                    $gambarKiriName =  uniqid().'-'.date("ymd").'.'.$gambarKiriExtension;
                    $gambarKiri = Image::make($request->gambar_kiri);
                    $gambarKiriSize = public_path('images/landingpage_razenstudio/web-development/'.$gambarKiriName);
                    $gambarKiri->save($gambarKiriSize, 100);

                } else {
                    $gambarKiriName = $get_section_10['gambar_kiri'];
                }

                if ($request->gambar_kanan) {
                    $gambarKananName = $get_section_10['gambar_kanan'];
                    File::delete(public_path('images/landingpage_razenstudio/web-development/'.$gambarKananName));

                    $gambarKananExtension = $request->gambar_kanan->extension();
                    $gambarKananName =  uniqid().'-'.date("ymd").'.'.$gambarKananExtension;
                    $gambarKanan = Image::make($request->gambar_kanan);
                    $gambarKananSize = public_path('images/landingpage_razenstudio/web-development/'.$gambarKananName);
                    $gambarKanan->save($gambarKananSize, 100);
                } else {
                    $gambarKananName = $get_section_10['gambar_kanan'];
                }
            } else {
                $gambarKiriExtension = $request->gambar_kiri->extension();
                $gambarKiriName =  uniqid().'-'.date("ymd").'.'.$gambarKiriExtension;
                $gambarKiri = Image::make($request->gambar_kiri);
                $gambarKiriSize = public_path('images/landingpage_razenstudio/web-development/'.$gambarKiriName);
                $gambarKiri->save($gambarKiriSize, 100);

                $gambarKananExtension = $request->gambar_kanan->extension();
                $gambarKananName =  uniqid().'-'.date("ymd").'.'.$gambarKananExtension;
                $gambarKanan = Image::make($request->gambar_kanan);
                $gambarKananSize = public_path('images/landingpage_razenstudio/web-development/'.$gambarKananName);
                $gambarKanan->save($gambarKananSize, 100);
            }
        } else {
            $landingpage_razenstudio_web_development = new LandingpageRazenstudioWebDevelopment;

            $gambarKiriExtension = $request->gambar_kiri->extension();
            $gambarKiriName =  uniqid().'-'.date("ymd").'.'.$gambarKiriExtension;
            $gambarKiri = Image::make($request->gambar_kiri);
            $gambarKiriSize = public_path('images/landingpage_razenstudio/web-development/'.$gambarKiriName);
            $gambarKiri->save($gambarKiriSize, 100);

            $gambarKananExtension = $request->gambar_kanan->extension();
            $gambarKananName =  uniqid().'-'.date("ymd").'.'.$gambarKananExtension;
            $gambarKanan = Image::make($request->gambar_kanan);
            $gambarKananSize = public_path('images/landingpage_razenstudio/web-development/'.$gambarKananName);
            $gambarKanan->save($gambarKananSize, 100);
        }

        $array = [
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar_kiri' => $gambarKiriName,
            'gambar_kanan' => $gambarKananName
        ];

        $landingpage_razenstudio_web_development->section_10 = json_encode($array);
        $landingpage_razenstudio_web_development->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 10');
        return redirect()->route('razen-studio.admin.web-development.atur.index');
    }
}
