<?php

namespace App\Http\Controllers\RazenStudio\Admin\WhyRazenStudio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;
use DB;
use Validator;
use Carbon\Carbon;
use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioWhyRazenStudio;

class AturController extends Controller
{
    public function index()
    {
        return view('razen-studio.admin.landing-page.why-razen-studio.index');
    }

    public function section_1_store(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'title' => 'required',
            'judul' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-studio.admin.why-razen-studio.atur.index');
        }

        $cek = LandingpageRazenstudioWhyRazenStudio::first();
        if($cek)
        {
            $landingpage_razenstudio_why_razen_studio = LandingpageRazenstudioWhyRazenStudio::find($cek->id);
        } else {
            $landingpage_razenstudio_why_razen_studio = new LandingpageRazenstudioWhyRazenStudio;
        }
        $array = [
            'title' => $request->title,
            'judul' => $request->judul
        ];

        $landingpage_razenstudio_why_razen_studio->section_1 = json_encode($array);
        $landingpage_razenstudio_why_razen_studio->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 1');
        return redirect()->route('razen-studio.admin.why-razen-studio.atur.index');
    }

    public function section_2_store(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-studio.admin.why-razen-studio.atur.index');
        }

        $cek = LandingpageRazenstudioWhyRazenStudio::first();
        if($cek)
        {
            $landingpage_razenstudio_jasa_branding_design = LandingpageRazenstudioWhyRazenStudio::find($cek->id);
            if($landingpage_razenstudio_jasa_branding_design->section_2)
            {
                $get_section_2 = json_decode($landingpage_razenstudio_jasa_branding_design->section_2, true);

                if ($request->gambar) {
                    $gambarName = $get_section_2['gambar'];
                    File::delete(public_path('images/landingpage_razenstudio/why-razen-studio/'.$gambarName));

                    $gambarExtension = $request->gambar->extension();
                    $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                    $gambar = Image::make($request->gambar);
                    $gambarSize = public_path('images/landingpage_razenstudio/why-razen-studio/'.$gambarName);
                    $gambar->save($gambarSize, 100);
                } else {
                    $gambarName = $get_section_2['gambar'];
                }
            } else {
                $gambarExtension = $request->gambar->extension();
                $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                $gambar = Image::make($request->gambar);
                $gambarSize = public_path('images/landingpage_razenstudio/why-razen-studio/'.$gambarName);
                $gambar->save($gambarSize, 100);
            }
        } else {
            $landingpage_razenstudio_jasa_branding_design = new LandingpageRazenstudioWhyRazenStudio;

            $gambarExtension = $request->gambar->extension();
            $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
            $gambar = Image::make($request->gambar);
            $gambarSize = public_path('images/landingpage_razenstudio/why-razen-studio/'.$gambarName);
            $gambar->save($gambarSize, 100);
        }

        $array = [
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $gambarName
        ];

        $landingpage_razenstudio_jasa_branding_design->section_2 = json_encode($array);
        $landingpage_razenstudio_jasa_branding_design->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 2');
        return redirect()->route('razen-studio.admin.why-razen-studio.atur.index');
    }

    public function section_3_store(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'judul' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-studio.admin.why-razen-studio.atur.index');
        }

        $cek = LandingpageRazenstudioWhyRazenStudio::first();
        if($cek)
        {
            $landingpage_razenstudio_why_razen_studio = LandingpageRazenstudioWhyRazenStudio::find($cek->id);
        } else {
            $landingpage_razenstudio_why_razen_studio = new LandingpageRazenstudioWhyRazenStudio;
        }
        $array = [
            'judul' => $request->judul
        ];

        $landingpage_razenstudio_why_razen_studio->section_3 = json_encode($array);
        $landingpage_razenstudio_why_razen_studio->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 3');
        return redirect()->route('razen-studio.admin.why-razen-studio.atur.index');
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
            return redirect()->route('razen-studio.admin.why-razen-studio.atur.index');
        }

        $cek = LandingpageRazenstudioWhyRazenStudio::first();
        if($cek)
        {
            $landingpage_razenstudio_why_razen_studio = LandingpageRazenstudioWhyRazenStudio::find($cek->id);
        } else {
            $landingpage_razenstudio_why_razen_studio = new LandingpageRazenstudioWhyRazenStudio;
        }
        $array = [
            'sub_judul' => $request->sub_judul,
            'judul' => $request->judul
        ];

        $landingpage_razenstudio_why_razen_studio->section_4 = json_encode($array);
        $landingpage_razenstudio_why_razen_studio->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 4');
        return redirect()->route('razen-studio.admin.why-razen-studio.atur.index');
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
            return redirect()->route('razen-studio.admin.why-razen-studio.atur.index');
        }

        $cek = LandingpageRazenstudioWhyRazenStudio::first();
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
            'sub_judul' => $request->sub_judul,
            'judul' => $request->judul,
            'konten' => $konten
        ];

        if($cek)
        {
            $landingpage_razenstudio_why_razen_studio = LandingpageRazenstudioWhyRazenStudio::find($cek->id);
        } else {
            $landingpage_razenstudio_why_razen_studio = new LandingpageRazenstudioWhyRazenStudio;
        }
        $landingpage_razenstudio_why_razen_studio->section_5 = json_encode($array);
        $landingpage_razenstudio_why_razen_studio->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 5');
        return redirect()->route('razen-studio.admin.why-razen-studio.atur.index');
    }

    public function section_5_hapus_satu(Request $request)
    {
        $get = LandingpageRazenstudioWhyRazenStudio::first();
        $section5 = json_decode($get->section_5, true);
        $array = [];
        foreach ($section5['konten'] as $value) {
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
            'sub_judul' => $section5['sub_judul'],
            'judul' => $section5['judul'],
            'konten' => $array
        ];

        $landingpage_razenstudio_why_razen_studio = LandingpageRazenstudioWhyRazenStudio::find($get->id);
        $landingpage_razenstudio_why_razen_studio->section_5 = json_encode($data);
        $landingpage_razenstudio_why_razen_studio->save();

        return response()->json('berhasil');
    }

    public function section_5_edit(Request $request)
    {
        $get = LandingpageRazenstudioWhyRazenStudio::first();
        $section5 = json_decode($get->section_5, true);

        if($request->judul)
        {
            $judul_baru = $request->judul_konten;
            $deskripsi_baru = $request->deskripsi_konten;

            $array_baru = [];
            for ($i=0; $i < count($judul_baru); $i++) {
                $array_baru[] = [
                    'id' => uniqid(),
                    'judul_konten' => $judul_baru[$i],
                    'deskripsi_konten' => $deskripsi_baru[$i],
                ];
            }

            $array_lama = [];
            foreach ($section5['konten'] as $value) {
                $array_lama[] = [
                    'id' => $value['id'],
                    'judul_konten' => $value['judul_konten'],
                    'deskripsi_konten' => $value['deskripsi_konten'],
                ];
            }

            $data = [
                'sub_judul' => $request->sub_judul,
                'judul' => $request->judul,
                'konten' => array_merge($array_lama, $array_baru)
            ];
        } else {

            $array_lama = [];
            foreach ($section5['konten'] as $value) {
                $array_lama[] = [
                    'id' => $value['id'],
                    'judul_konten' => $value['judul_konten'],
                    'deskripsi_konten' => $value['deskripsi_konten'],
                ];
            }

            $data = [
                'sub_judul' => $request->sub_judul,
                'judul' => $request->judul,
                'konten' => $array_lama
            ];
        }

        $landingpage_razenstudio_why_razen_studio = LandingpageRazenstudioWhyRazenStudio::find($get->id);
        $landingpage_razenstudio_why_razen_studio->section_5 = json_encode($data);
        $landingpage_razenstudio_why_razen_studio->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 5');
        return redirect()->route('razen-studio.admin.why-razen-studio.atur.index');
    }
    //Section 5 End

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
            return redirect()->route('razen-studio.admin.why-razen-studio.atur.index');
        }

        $cek = LandingpageRazenstudioWhyRazenStudio::first();
        if($cek)
        {
            $landingpage_razenstudio_why_razen_studio = LandingpageRazenstudioWhyRazenStudio::find($cek->id);
            $section6 = json_decode($landingpage_razenstudio_why_razen_studio->section_6, true);
            $array = [];
            if($section6)
            {
                foreach ($section6['item'] as $value) {
                    if($value['item'] == 'tracking_project')
                    {
                        $array [] = [
                            'item' => $value['item'],
                            'deskripsi' => $value['deskripsi'],
                            'gambar' => $value['gambar'],
                        ];
                    }

                    if($value['item'] == 'easy_collaboration')
                    {
                        $array [] = [
                            'item' => $value['item'],
                            'deskripsi' => $value['deskripsi'],
                            'gambar' => $value['gambar'],
                        ];
                    }

                    if($value['item'] == 'tools_integration')
                    {
                        $array [] = [
                            'item' => $value['item'],
                            'deskripsi' => $value['deskripsi'],
                            'gambar' => $value['gambar'],
                        ];
                    }
                }
            } else {
                $array = [
                    'sub_judul' => $request->sub_judul,
                    'judul' => $request->judul,
                    'item' => []
                ];
            }
        } else {
            $landingpage_razenstudio_why_razen_studio = new LandingpageRazenstudioWhyRazenStudio;
            $array = [
                'sub_judul' => $request->sub_judul,
                'judul' => $request->judul,
                'item' => []
            ];
        }

        $landingpage_razenstudio_why_razen_studio->section_6 = json_encode($array);
        $landingpage_razenstudio_why_razen_studio->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 6');
        return redirect()->route('razen-studio.admin.why-razen-studio.atur.index');
    }

    public function section_6_item_1_store(Request $request)
    {
        $cek = LandingpageRazenstudioWhyRazenStudio::first();
        if($cek)
        {
            $web_development = LandingpageRazenstudioWhyRazenStudio::find($cek->id);
            $section6 = json_decode($web_development->section_6, true);
            $array_baru = [];
            $array_lama = [];

            if($request->gambar)
            {
                $gambarExtension = $request->gambar->extension();
                $gambarName = uniqid().'-'.date("ymd").'.'.$gambarExtension;
                $gambar = Image::make($request->gambar);
                $gambarSize = public_path('images/landingpage_razenstudio/why-razen-studio/'.$gambarName);
                $gambar->save($gambarSize, 60);

                $array_baru[] = [
                    'item' => $request->item,
                    'gambar' => $gambarName,
                ];

            } else {
                Alert::error('Gagal Menyimpan!', 'Tidak dapat menyimpan karena tidak ada data');
                return redirect()->route('razen-studio.admin.why-razen-studio.atur.index');
            }

            foreach ($section6['item'] as $value) {
                if($value['item'] == 'tracking_project')
                {
                    File::delete(public_path('images/landingpage_razenstudio/why-razen-studio/'.$value['gambar']));
                }
                if($value['item'] == 'easy_collaboration')
                {
                    $array_lama[] = [
                        'item' => $value['item'],
                        'gambar' => $value['gambar'],
                    ];
                }
                if($value['item'] == 'tools_integration')
                {
                    $array_lama[] = [
                        'item' => $value['item'],
                        'gambar' => $value['gambar'],
                    ];
                }
            }

            $data = [
                'sub_judul' => $section6['sub_judul'],
                'judul' => $section6['judul'],
                'item' => array_merge($array_lama, $array_baru)
            ];

            $web_development->section_6 = json_encode($data);
            $web_development->save();

            Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 6');
            return redirect()->route('razen-studio.admin.why-razen-studio.atur.index');
        } else {
            Alert::error('Gagal Menyimpan!', 'Tidak dapat menyimpan karena tidak ada data');
            return redirect()->route('razen-studio.admin.why-razen-studio.atur.index');
        }
    }

    public function section_6_item_2_store(Request $request)
    {
        $cek = LandingpageRazenstudioWhyRazenStudio::first();
        if($cek)
        {
            $web_development = LandingpageRazenstudioWhyRazenStudio::find($cek->id);
            $section6 = json_decode($web_development->section_6, true);
            $array_baru = [];
            $array_lama = [];

            if($request->gambar)
            {
                $gambarExtension = $request->gambar->extension();
                $gambarName = uniqid().'-'.date("ymd").'.'.$gambarExtension;
                $gambar = Image::make($request->gambar);
                $gambarSize = public_path('images/landingpage_razenstudio/why-razen-studio/'.$gambarName);
                $gambar->save($gambarSize, 60);

                $array_baru[] = [
                    'item' => $request->item,
                    'gambar' => $gambarName,
                ];

            } else {
                Alert::error('Gagal Menyimpan!', 'Tidak dapat menyimpan karena tidak ada data');
                return redirect()->route('razen-studio.admin.why-razen-studio.atur.index');
            }

            foreach ($section6['item'] as $value) {
                if($value['item'] == 'tracking_project')
                {
                    $array_lama[] = [
                        'item' => $value['item'],
                        'gambar' => $value['gambar'],
                    ];
                }

                if($value['item'] == 'easy_collaboration')
                {
                    File::delete(public_path('images/landingpage_razenstudio/why-razen-studio/'.$value['gambar']));
                }

                if($value['item'] == 'tools_integration')
                {
                    $array_lama[] = [
                        'item' => $value['item'],
                        'gambar' => $value['gambar'],
                    ];
                }
            }

            $data = [
                'sub_judul' => $section6['sub_judul'],
                'judul' => $section6['judul'],
                'item' => array_merge($array_lama, $array_baru)
            ];

            $web_development->section_6 = json_encode($data);
            $web_development->save();

            Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 6');
            return redirect()->route('razen-studio.admin.why-razen-studio.atur.index');
        } else {
            Alert::error('Gagal Menyimpan!', 'Tidak dapat menyimpan karena tidak ada data');
            return redirect()->route('razen-studio.admin.why-razen-studio.atur.index');
        }
    }

    public function section_6_item_3_store(Request $request)
    {
        $cek = LandingpageRazenstudioWhyRazenStudio::first();
        if($cek)
        {
            $web_development = LandingpageRazenstudioWhyRazenStudio::find($cek->id);
            $section6 = json_decode($web_development->section_6, true);
            $array_baru = [];
            $array_lama = [];

            if($request->gambar)
            {
                $gambarExtension = $request->gambar->extension();
                $gambarName = uniqid().'-'.date("ymd").'.'.$gambarExtension;
                $gambar = Image::make($request->gambar);
                $gambarSize = public_path('images/landingpage_razenstudio/why-razen-studio/'.$gambarName);
                $gambar->save($gambarSize, 60);

                $array_baru[] = [
                    'item' => $request->item,
                    'gambar' => $gambarName,
                ];

            } else {
                Alert::error('Gagal Menyimpan!', 'Tidak dapat menyimpan karena tidak ada data');
                return redirect()->route('razen-studio.admin.why-razen-studio.atur.index');
            }

            foreach ($section6['item'] as $value) {
                if($value['item'] == 'tracking_project')
                {
                    $array_lama[] = [
                        'item' => $value['item'],
                        'gambar' => $value['gambar'],
                    ];
                }

                if($value['item'] == 'easy_collaboration')
                {
                    $array_lama[] = [
                        'item' => $value['item'],
                        'gambar' => $value['gambar'],
                    ];
                }

                if($value['item'] == 'tools_integration')
                {
                    File::delete(public_path('images/landingpage_razenstudio/why-razen-studio/'.$value['gambar']));
                }
            }

            $data = [
                'sub_judul' => $section6['sub_judul'],
                'judul' => $section6['judul'],
                'item' => array_merge($array_lama, $array_baru)
            ];

            $web_development->section_6 = json_encode($data);
            $web_development->save();

            Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 6');
            return redirect()->route('razen-studio.admin.why-razen-studio.atur.index');
        } else {
            Alert::error('Gagal Menyimpan!', 'Tidak dapat menyimpan karena tidak ada data');
            return redirect()->route('razen-studio.admin.why-razen-studio.atur.index');
        }
    }
}
