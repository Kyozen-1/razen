<?php

namespace App\Http\Controllers\RazenStudio\Admin\VisualBrandingDesign;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;
use DB;
use Validator;
use Carbon\Carbon;
use App\Models\RazenStudio\LandingPage\VisualBrandingDesign\LandingpageRazenstudioVisualBrandingDesign;

class AturController extends Controller
{
    public function index()
    {
        return view('razen-studio.admin.landing-page.visual-branding-design.atur.index');
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
            return redirect()->route('razen-studio.admin.visual-branding-design.atur.index');
        }

        $cek = LandingpageRazenstudioVisualBrandingDesign::first();
        if($cek)
        {
            $landingpage_razenstudio_visual_branding_design = LandingpageRazenstudioVisualBrandingDesign::find($cek->id);
        } else {
            $landingpage_razenstudio_visual_branding_design = new LandingpageRazenstudioVisualBrandingDesign;
        }
        $array = [
            'title' => $request->title,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
        ];

        $landingpage_razenstudio_visual_branding_design->section_1 = json_encode($array);
        $landingpage_razenstudio_visual_branding_design->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 1');
        return redirect()->route('razen-studio.admin.visual-branding-design.atur.index');
    }

    public function section_2_store(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'sub_judul' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-studio.admin.visual-branding-design.atur.index');
        }

        $cek = LandingpageRazenstudioVisualBrandingDesign::first();
        if($cek)
        {
            $landingpage_razenstudio_visual_branding_design = LandingpageRazenstudioVisualBrandingDesign::find($cek->id);
            if($landingpage_razenstudio_visual_branding_design->section_2)
            {
                $get_section_2 = json_decode($landingpage_razenstudio_visual_branding_design->section_2, true);

                if ($request->gambar) {
                    $gambarName = $get_section_2['gambar'];
                    File::delete(public_path('images/landingpage_razenstudio/visual-branding-design/'.$gambarName));

                    $gambarExtension = $request->gambar->extension();
                    $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                    $gambar = Image::make($request->gambar);
                    $gambarSize = public_path('images/landingpage_razenstudio/visual-branding-design/'.$gambarName);
                    $gambar->save($gambarSize, 100);
                } else {
                    $gambarName = $get_section_2['gambar'];
                }
            } else {
                $gambarExtension = $request->gambar->extension();
                $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                $gambar = Image::make($request->gambar);
                $gambarSize = public_path('images/landingpage_razenstudio/visual-branding-design/'.$gambarName);
                $gambar->save($gambarSize, 100);
            }
        } else {
            $landingpage_razenstudio_visual_branding_design = new LandingpageRazenstudioVisualBrandingDesign;

            $gambarExtension = $request->gambar->extension();
            $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
            $gambar = Image::make($request->gambar);
            $gambarSize = public_path('images/landingpage_razenstudio/visual-branding-design/'.$gambarName);
            $gambar->save($gambarSize, 100);
        }

        $array = [
            'sub_judul' => $request->sub_judul,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $gambarName
        ];

        $landingpage_razenstudio_visual_branding_design->section_2 = json_encode($array);
        $landingpage_razenstudio_visual_branding_design->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 2');
        return redirect()->route('razen-studio.admin.visual-branding-design.atur.index');
    }

    //Section 3 Start
    public function section_3_store(Request $request)
    {
        $cek = LandingpageRazenstudioVisualBrandingDesign::first();
        $data = [];
        $array = [];

        $judul = $request->judul;
        $harga = $request->harga;
        $deskripsi = $request->deskripsi;
        $link_page = $request->link_page;

        foreach ($request->file('gambar') as $file) {
            $gambarExtension = $file->extension();
            $gambarName = uniqid().'-'.date("ymd").'.'.$gambarExtension;
            $gambar = Image::make($file);
            $gambarSize = public_path('images/landingpage_razenstudio/visual-branding-design/'.$gambarName);
            $gambar->save($gambarSize, 60);

            $data[] = $gambarName;
        }

        for ($i=0; $i < count($data); $i++) {
            $array[] = [
                'id' => uniqid(),
                'judul' => $judul[$i],
                'harga' => $harga[$i],
                'deskripsi' => $deskripsi[$i],
                'link_page' => $link_page[$i],
                'gambar' => $data[$i]
            ];
        }

        if($cek)
        {
            $landingpage_razenstudio_visual_branding_design = LandingpageRazenstudioVisualBrandingDesign::find($cek->id);
        } else {
            $landingpage_razenstudio_visual_branding_design = new LandingpageRazenstudioVisualBrandingDesign;
        }
        $landingpage_razenstudio_visual_branding_design->section_3 = json_encode($array);
        $landingpage_razenstudio_visual_branding_design->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 3');
        return redirect()->route('razen-studio.admin.visual-branding-design.atur.index');
    }

    public function section_3_hapus_satu(Request $request)
    {
        $get = LandingpageRazenstudioVisualBrandingDesign::first();
        $section3 = json_decode($get->section_3, true);
        $array = [];
        foreach ($section3 as $value) {
            if($value['id'] != $request->id)
            {
                $array[] = [
                    'id' => $value['id'],
                    'judul' => $value['judul'],
                    'harga' => $value['harga'],
                    'deskripsi' => $value['deskripsi'],
                    'link_page' => $value['link_page'],
                    'gambar' => $value['gambar']
                ];
            } else {
                File::delete(public_path('images/landingpage_razenstudio/visual-branding-design/'.$value['gambar']));
            }
        }

        $landingpage_razenstudio_visual_branding_design = LandingpageRazenstudioVisualBrandingDesign::find($get->id);
        $landingpage_razenstudio_visual_branding_design->section_3 = json_encode($array);
        $landingpage_razenstudio_visual_branding_design->save();

        return response()->json('berhasil');
    }

    public function section_3_edit(Request $request)
    {
        $get = LandingpageRazenstudioVisualBrandingDesign::first();
        $section3 = json_decode($get->section_3, true);

        if($request->judul)
        {
            $dataBaru = [];
            $array_baru = [];

            $judul = $request->judul;
            $harga = $request->harga;
            $deskripsi = $request->deskripsi;
            $link_page = $request->link_page;

            foreach ($request->file('gambar') as $file) {
                $gambarExtension = $file->extension();
                $gambarName = uniqid().'-'.date("ymd").'.'.$gambarExtension;
                $gambar = Image::make($file);
                $gambarSize = public_path('images/landingpage_razenstudio/visual-branding-design/'.$gambarName);
                $gambar->save($gambarSize, 60);

                $dataBaru[] = $gambarName;
            }

            for ($i=0; $i < count($dataBaru); $i++) {
                $array_baru[] = [
                    'id' => uniqid(),
                    'judul' => $judul[$i],
                    'harga' => $harga[$i],
                    'deskripsi' => $deskripsi[$i],
                    'link_page' => $link_page[$i],
                    'gambar' => $dataBaru[$i]
                ];
            }

            $array_lama = [];
            foreach ($section3 as $value) {
                $array_lama[] = [
                    'id' => $value['id'],
                    'judul' => $value['judul'],
                    'harga' => $value['harga'],
                    'deskripsi' => $value['deskripsi'],
                    'link_page' => $value['link_page'],
                    'gambar' => $value['gambar'],
                ];
            }

            $array = array_merge($array_lama, $array_baru);

        } else {

            $array_lama = [];
            foreach ($section3 as $value) {
                $array_lama[] = [
                    'id' => $value['id'],
                    'judul' => $value['judul'],
                    'harga' => $value['harga'],
                    'deskripsi' => $value['deskripsi'],
                    'link_page' => $value['link_page'],
                    'gambar' => $value['gambar'],
                ];
            }

            $array = $array_lama;
        }

        $landingpage_razenstudio_visual_branding_design = LandingpageRazenstudioVisualBrandingDesign::find($get->id);
        $landingpage_razenstudio_visual_branding_design->section_3 = json_encode($array);
        $landingpage_razenstudio_visual_branding_design->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 3');
        return redirect()->route('razen-studio.admin.visual-branding-design.atur.index');
    }

    //Section 4 Start
    public function section_4_store(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'judul' => 'required',
            'deskripsi' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-studio.admin.visual-branding-design.atur.index');
        }

        $cek = LandingpageRazenstudioVisualBrandingDesign::first();
        if($cek)
        {
            $landingpage_razenstudio_visual_branding_design = LandingpageRazenstudioVisualBrandingDesign::find($cek->id);
        } else {
            $landingpage_razenstudio_visual_branding_design = new LandingpageRazenstudioVisualBrandingDesign;
        }
        $array = [
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'item' => []
        ];

        $landingpage_razenstudio_visual_branding_design->section_4 = json_encode($array);
        $landingpage_razenstudio_visual_branding_design->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 4');
        return redirect()->route('razen-studio.admin.visual-branding-design.atur.index');
    }

    public function section_4_item_1_store(Request $request)
    {
        $cek = LandingpageRazenstudioVisualBrandingDesign::first();
        if($cek)
        {
            $landingpage_razenstudio_visual_branding_design = LandingpageRazenstudioVisualBrandingDesign::find($cek->id);
            $section4 = json_decode($landingpage_razenstudio_visual_branding_design->section_4, true);
            $array_baru = [];
            $array_lama = [];

            $array_baru[] = [
                'item' => $request->item,
                'harga' => $request->harga,
                'deskripsi' => $request->deskripsi,
                'no_wa_konsultasi' => $request->no_wa_konsultasi,
                'mini_text' => $request->mini_text,
            ];

            foreach ($section4['item'] as $value) {
                if($value['item'] == 'item_2')
                {
                    $array_lama[] = [
                        'item' => $value['item'],
                        'judul' => $value['judul'],
                        'deskripsi' => $value['deskripsi'],
                        'ikon' => $value['ikon'],
                    ];
                }
                if($value['item'] == 'item_3')
                {
                    $array_lama[] = [
                        'item' => $value['item'],
                        'judul' => $value['judul'],
                        'deskripsi' => $value['deskripsi'],
                        'ikon' => $value['ikon'],
                    ];
                }
                if($value['item'] == 'item_4')
                {
                    $array_lama[] = [
                        'item' => $value['item'],
                        'judul' => $value['judul'],
                        'deskripsi' => $value['deskripsi'],
                        'ikon' => $value['ikon'],
                    ];
                }
                if($value['item'] == 'item_5')
                {
                    $array_lama[] = [
                        'item' => $value['item'],
                        'judul' => $value['judul'],
                        'deskripsi' => $value['deskripsi'],
                        'ikon' => $value['ikon'],
                    ];
                }
            }

            $data = [
                'judul' => $section4['judul'],
                'deskripsi' => $section4['deskripsi'],
                'item' => array_merge($array_lama, $array_baru)
            ];

            $landingpage_razenstudio_visual_branding_design->section_4 = json_encode($data);
            $landingpage_razenstudio_visual_branding_design->save();

            Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 4');
            return redirect()->route('razen-studio.admin.visual-branding-design.atur.index');
        } else {
            Alert::error('Gagal Menyimpan!', 'Tidak dapat menyimpan karena tidak ada data');
            return redirect()->route('razen-studio.admin.visual-branding-design.atur.index');
        }
    }

    public function section_4_item_2_store(Request $request)
    {
        $cek = LandingpageRazenstudioVisualBrandingDesign::first();
        if($cek)
        {
            $landingpage_razenstudio_visual_branding_design = LandingpageRazenstudioVisualBrandingDesign::find($cek->id);
            $section4 = json_decode($landingpage_razenstudio_visual_branding_design->section_4, true);
            $array_baru = [];
            $array_lama = [];

            if($request->ikon)
            {
                $ikonExtension = $request->ikon->extension();
                $ikonName =  uniqid().'-'.date("ymd").'.'.$ikonExtension;
                $ikon = Image::make($request->ikon);
                $ikonSize = public_path('images/landingpage_razenstudio/visual-branding-design/'.$ikonName);
                $ikon->save($ikonSize, 100);

                $array_baru[] = [
                    'item' => $request->item,
                    'judul' => $request->judul,
                    'deskripsi' => $request->deskripsi,
                    'ikon' => $ikonName,
                ];
            }

            foreach ($section4['item'] as $value) {
                if($value['item'] == 'item_1')
                {
                    $array_lama[] = [
                        'item' => $value['item'],
                        'harga' => $value['harga'],
                        'deskripsi' => $value['deskripsi'],
                        'no_wa_konsultasi' => $value['no_wa_konsultasi'],
                        'mini_text' => $value['mini_text'],
                    ];
                }
                if($value['item'] == 'item_2')
                {
                    if($request->ikon)
                    {
                        File::delete(public_path('images/landingpage_razenstudio/visual-branding-design/'.$value['ikon']));
                    } else {
                        $array_lama[] = [
                            'item' => $value['item'],
                            'judul' => $request->judul,
                            'deskripsi' => $request->deskripsi,
                            'ikon' => $value['ikon'],
                        ];
                    }
                }
                if($value['item'] == 'item_3')
                {
                    $array_lama[] = [
                        'item' => $value['item'],
                        'judul' => $value['judul'],
                        'deskripsi' => $value['deskripsi'],
                        'ikon' => $value['ikon'],
                    ];
                }
                if($value['item'] == 'item_4')
                {
                    $array_lama[] = [
                        'item' => $value['item'],
                        'judul' => $value['judul'],
                        'deskripsi' => $value['deskripsi'],
                        'ikon' => $value['ikon'],
                    ];
                }
                if($value['item'] == 'item_5')
                {
                    $array_lama[] = [
                        'item' => $value['item'],
                        'judul' => $value['judul'],
                        'deskripsi' => $value['deskripsi'],
                        'ikon' => $value['ikon'],
                    ];
                }
            }

            if($request->ikon)
            {
                $data = [
                    'judul' => $section4['judul'],
                    'deskripsi' => $section4['deskripsi'],
                    'item' => array_merge($array_lama, $array_baru)
                ];
            } else {
                $data = [
                    'judul' => $section4['judul'],
                    'deskripsi' => $section4['deskripsi'],
                    'item' => $array_lama
                ];
            }

            $landingpage_razenstudio_visual_branding_design->section_4 = json_encode($data);
            $landingpage_razenstudio_visual_branding_design->save();

            Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 4');
            return redirect()->route('razen-studio.admin.visual-branding-design.atur.index');
        } else {
            Alert::error('Gagal Menyimpan!', 'Tidak dapat menyimpan karena tidak ada data');
            return redirect()->route('razen-studio.admin.visual-branding-design.atur.index');
        }
    }

    public function section_4_item_3_store(Request $request)
    {
        $cek = LandingpageRazenstudioVisualBrandingDesign::first();
        if($cek)
        {
            $landingpage_razenstudio_visual_branding_design = LandingpageRazenstudioVisualBrandingDesign::find($cek->id);
            $section4 = json_decode($landingpage_razenstudio_visual_branding_design->section_4, true);
            $array_baru = [];
            $array_lama = [];

            if($request->ikon)
            {
                $ikonExtension = $request->ikon->extension();
                $ikonName =  uniqid().'-'.date("ymd").'.'.$ikonExtension;
                $ikon = Image::make($request->ikon);
                $ikonSize = public_path('images/landingpage_razenstudio/visual-branding-design/'.$ikonName);
                $ikon->save($ikonSize, 100);

                $array_baru[] = [
                    'item' => $request->item,
                    'judul' => $request->judul,
                    'deskripsi' => $request->deskripsi,
                    'ikon' => $ikonName,
                ];
            }

            foreach ($section4['item'] as $value) {
                if($value['item'] == 'item_1')
                {
                    $array_lama[] = [
                        'item' => $value['item'],
                        'harga' => $value['harga'],
                        'deskripsi' => $value['deskripsi'],
                        'no_wa_konsultasi' => $value['no_wa_konsultasi'],
                        'mini_text' => $value['mini_text'],
                    ];
                }
                if($value['item'] == 'item_2')
                {
                    $array_lama[] = [
                        'item' => $value['item'],
                        'judul' => $value['judul'],
                        'deskripsi' => $value['deskripsi'],
                        'ikon' => $value['ikon'],
                    ];
                }
                if($value['item'] == 'item_3')
                {
                    if($request->ikon)
                    {
                        File::delete(public_path('images/landingpage_razenstudio/visual-branding-design/'.$value['ikon']));
                    } else {
                        $array_lama[] = [
                            'item' => $value['item'],
                            'judul' => $request->judul,
                            'deskripsi' => $request->deskripsi,
                            'ikon' => $value['ikon'],
                        ];
                    }
                }
                if($value['item'] == 'item_4')
                {
                    $array_lama[] = [
                        'item' => $value['item'],
                        'judul' => $value['judul'],
                        'deskripsi' => $value['deskripsi'],
                        'ikon' => $value['ikon'],
                    ];
                }
                if($value['item'] == 'item_5')
                {
                    $array_lama[] = [
                        'item' => $value['item'],
                        'judul' => $value['judul'],
                        'deskripsi' => $value['deskripsi'],
                        'ikon' => $value['ikon'],
                    ];
                }
            }

            if($request->ikon)
            {
                $data = [
                    'judul' => $section4['judul'],
                    'deskripsi' => $section4['deskripsi'],
                    'item' => array_merge($array_lama, $array_baru)
                ];
            } else {
                $data = [
                    'judul' => $section4['judul'],
                    'deskripsi' => $section4['deskripsi'],
                    'item' => $array_lama
                ];
            }

            $landingpage_razenstudio_visual_branding_design->section_4 = json_encode($data);
            $landingpage_razenstudio_visual_branding_design->save();

            Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 4');
            return redirect()->route('razen-studio.admin.visual-branding-design.atur.index');
        } else {
            Alert::error('Gagal Menyimpan!', 'Tidak dapat menyimpan karena tidak ada data');
            return redirect()->route('razen-studio.admin.visual-branding-design.atur.index');
        }
    }

    public function section_4_item_4_store(Request $request)
    {
        $cek = LandingpageRazenstudioVisualBrandingDesign::first();
        if($cek)
        {
            $landingpage_razenstudio_visual_branding_design = LandingpageRazenstudioVisualBrandingDesign::find($cek->id);
            $section4 = json_decode($landingpage_razenstudio_visual_branding_design->section_4, true);
            $array_baru = [];
            $array_lama = [];

            if($request->ikon)
            {
                $ikonExtension = $request->ikon->extension();
                $ikonName =  uniqid().'-'.date("ymd").'.'.$ikonExtension;
                $ikon = Image::make($request->ikon);
                $ikonSize = public_path('images/landingpage_razenstudio/visual-branding-design/'.$ikonName);
                $ikon->save($ikonSize, 100);

                $array_baru[] = [
                    'item' => $request->item,
                    'judul' => $request->judul,
                    'deskripsi' => $request->deskripsi,
                    'ikon' => $ikonName,
                ];
            }

            foreach ($section4['item'] as $value) {
                if($value['item'] == 'item_1')
                {
                    $array_lama[] = [
                        'item' => $value['item'],
                        'harga' => $value['harga'],
                        'deskripsi' => $value['deskripsi'],
                        'no_wa_konsultasi' => $value['no_wa_konsultasi'],
                        'mini_text' => $value['mini_text'],
                    ];
                }
                if($value['item'] == 'item_2')
                {
                    $array_lama[] = [
                        'item' => $value['item'],
                        'judul' => $value['judul'],
                        'deskripsi' => $value['deskripsi'],
                        'ikon' => $value['ikon'],
                    ];
                }
                if($value['item'] == 'item_3')
                {
                    $array_lama[] = [
                        'item' => $value['item'],
                        'judul' => $value['judul'],
                        'deskripsi' => $value['deskripsi'],
                        'ikon' => $value['ikon'],
                    ];
                }
                if($value['item'] == 'item_4')
                {
                    if($request->ikon)
                    {
                        File::delete(public_path('images/landingpage_razenstudio/visual-branding-design/'.$value['ikon']));
                    } else {
                        $array_lama[] = [
                            'item' => $value['item'],
                            'judul' => $request->judul,
                            'deskripsi' => $request->deskripsi,
                            'ikon' => $value['ikon'],
                        ];
                    }
                }
                if($value['item'] == 'item_5')
                {
                    $array_lama[] = [
                        'item' => $value['item'],
                        'judul' => $value['judul'],
                        'deskripsi' => $value['deskripsi'],
                        'ikon' => $value['ikon'],
                    ];
                }
            }

            if($request->ikon)
            {
                $data = [
                    'judul' => $section4['judul'],
                    'deskripsi' => $section4['deskripsi'],
                    'item' => array_merge($array_lama, $array_baru)
                ];
            } else {
                $data = [
                    'judul' => $section4['judul'],
                    'deskripsi' => $section4['deskripsi'],
                    'item' => $array_lama
                ];
            }

            $landingpage_razenstudio_visual_branding_design->section_4 = json_encode($data);
            $landingpage_razenstudio_visual_branding_design->save();

            Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 4');
            return redirect()->route('razen-studio.admin.visual-branding-design.atur.index');
        } else {
            Alert::error('Gagal Menyimpan!', 'Tidak dapat menyimpan karena tidak ada data');
            return redirect()->route('razen-studio.admin.visual-branding-design.atur.index');
        }
    }

    public function section_4_item_5_store(Request $request)
    {
        $cek = LandingpageRazenstudioVisualBrandingDesign::first();
        if($cek)
        {
            $landingpage_razenstudio_visual_branding_design = LandingpageRazenstudioVisualBrandingDesign::find($cek->id);
            $section4 = json_decode($landingpage_razenstudio_visual_branding_design->section_4, true);
            $array_baru = [];
            $array_lama = [];

            if($request->ikon)
            {
                $ikonExtension = $request->ikon->extension();
                $ikonName =  uniqid().'-'.date("ymd").'.'.$ikonExtension;
                $ikon = Image::make($request->ikon);
                $ikonSize = public_path('images/landingpage_razenstudio/visual-branding-design/'.$ikonName);
                $ikon->save($ikonSize, 100);

                $array_baru[] = [
                    'item' => $request->item,
                    'judul' => $request->judul,
                    'deskripsi' => $request->deskripsi,
                    'ikon' => $ikonName,
                ];
            }

            foreach ($section4['item'] as $value) {
                if($value['item'] == 'item_1')
                {
                    $array_lama[] = [
                        'item' => $value['item'],
                        'harga' => $value['harga'],
                        'deskripsi' => $value['deskripsi'],
                        'no_wa_konsultasi' => $value['no_wa_konsultasi'],
                        'mini_text' => $value['mini_text'],
                    ];
                }
                if($value['item'] == 'item_2')
                {
                    $array_lama[] = [
                        'item' => $value['item'],
                        'judul' => $value['judul'],
                        'deskripsi' => $value['deskripsi'],
                        'ikon' => $value['ikon'],
                    ];
                }
                if($value['item'] == 'item_3')
                {
                    $array_lama[] = [
                        'item' => $value['item'],
                        'judul' => $value['judul'],
                        'deskripsi' => $value['deskripsi'],
                        'ikon' => $value['ikon'],
                    ];
                }
                if($value['item'] == 'item_4')
                {
                    $array_lama[] = [
                        'item' => $value['item'],
                        'judul' => $value['judul'],
                        'deskripsi' => $value['deskripsi'],
                        'ikon' => $value['ikon'],
                    ];
                }
                if($value['item'] == 'item_5')
                {
                    if($request->ikon)
                    {
                        File::delete(public_path('images/landingpage_razenstudio/visual-branding-design/'.$value['ikon']));
                    } else {
                        $array_lama[] = [
                            'item' => $value['item'],
                            'judul' => $request->judul,
                            'deskripsi' => $request->deskripsi,
                            'ikon' => $value['ikon'],
                        ];
                    }
                }
            }

            if($request->ikon)
            {
                $data = [
                    'judul' => $section4['judul'],
                    'deskripsi' => $section4['deskripsi'],
                    'item' => array_merge($array_lama, $array_baru)
                ];
            } else {
                $data = [
                    'judul' => $section4['judul'],
                    'deskripsi' => $section4['deskripsi'],
                    'item' => $array_lama
                ];
            }

            $landingpage_razenstudio_visual_branding_design->section_4 = json_encode($data);
            $landingpage_razenstudio_visual_branding_design->save();

            Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 4');
            return redirect()->route('razen-studio.admin.visual-branding-design.atur.index');
        } else {
            Alert::error('Gagal Menyimpan!', 'Tidak dapat menyimpan karena tidak ada data');
            return redirect()->route('razen-studio.admin.visual-branding-design.atur.index');
        }
    }
    //Section 4 End

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
            return redirect()->route('razen-studio.admin.visual-branding-design.atur.index');
        }

        $cek = LandingpageRazenstudioVisualBrandingDesign::first();
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
            $landingpage_razenstudio_visual_branding_design = LandingpageRazenstudioVisualBrandingDesign::find($cek->id);
        } else {
            $landingpage_razenstudio_visual_branding_design = new LandingpageRazenstudioVisualBrandingDesign;
        }
        $landingpage_razenstudio_visual_branding_design->section_5 = json_encode($array);
        $landingpage_razenstudio_visual_branding_design->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 5');
        return redirect()->route('razen-studio.admin.visual-branding-design.atur.index');
    }

    public function section_5_hapus_satu(Request $request)
    {
        $get = LandingpageRazenstudioVisualBrandingDesign::first();
        $section5 = json_decode($get->section_5, true);
        $array = [];
        foreach ($section5['konten'] as $value) {
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
            'sub_judul' => $section5['sub_judul'],
            'judul' => $section5['judul'],
            'konten' => $array
        ];

        $landingpage_razenstudio_visual_branding_design = LandingpageRazenstudioVisualBrandingDesign::find($get->id);
        $landingpage_razenstudio_visual_branding_design->section_5 = json_encode($data);
        $landingpage_razenstudio_visual_branding_design->save();

        return response()->json('berhasil');
    }

    public function section_5_edit(Request $request)
    {
        $get = LandingpageRazenstudioVisualBrandingDesign::first();
        $section5 = json_decode($get->section_5, true);

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
            foreach ($section5['konten'] as $value) {
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
            foreach ($section5['konten'] as $value) {
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

        $landingpage_razenstudio_visual_branding_design = LandingpageRazenstudioVisualBrandingDesign::find($get->id);
        $landingpage_razenstudio_visual_branding_design->section_5 = json_encode($data);
        $landingpage_razenstudio_visual_branding_design->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 5');
        return redirect()->route('razen-studio.admin.visual-branding-design.atur.index');
    }
    //Section 5 End
}
