<?php

namespace App\Http\Controllers\RazenStudio\Admin\VisualBrandingDesign\JasaDesainGrafis;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;
use DB;
use Validator;
use Carbon\Carbon;
use App\Models\RazenStudio\LandingPage\VisualBrandingDesign\JasaDesainGrafis\LandingpageRazenstudioDesainKalender;
use App\Models\RazenStudio\LandingPage\VisualBrandingDesign\JasaDesainGrafis\LandingpageRazenstudioItemDesainKalender;

class DesainKalenderController extends Controller
{
    public function index()
    {
        return view('razen-studio.admin.landing-page.visual-branding-design.jasa-desain-grafis.desain-kalender.index');
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
            return redirect()->route('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kalender.index');
        }

        $cek = LandingpageRazenstudioDesainKalender::first();
        if($cek)
        {
            $landingpage_razenstudio_desain_kalender = LandingpageRazenstudioDesainKalender::find($cek->id);
        } else {
            $landingpage_razenstudio_desain_kalender = new LandingpageRazenstudioDesainKalender;
        }
        $array = [
            'title' => $request->title,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
        ];

        $landingpage_razenstudio_desain_kalender->section_1 = json_encode($array);
        $landingpage_razenstudio_desain_kalender->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 1');
        return redirect()->route('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kalender.index');
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
            return redirect()->route('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kalender.index');
        }

        $cek = LandingpageRazenstudioDesainKalender::first();
        if($cek)
        {
            $landingpage_razenstudio_desain_kalender = LandingpageRazenstudioDesainKalender::find($cek->id);
            if($landingpage_razenstudio_desain_kalender->section_2)
            {
                $get_section_2 = json_decode($landingpage_razenstudio_desain_kalender->section_2, true);

                if ($request->gambar) {
                    $gambarName = $get_section_2['gambar'];
                    File::delete(public_path('images/landingpage_razenstudio/visual-branding-design/jasa-desain-grafis/desain-kalender/'.$gambarName));

                    $gambarExtension = $request->gambar->extension();
                    $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                    $gambar = Image::make($request->gambar);
                    $gambarSize = public_path('images/landingpage_razenstudio/visual-branding-design/jasa-desain-grafis/desain-kalender/'.$gambarName);
                    $gambar->save($gambarSize, 100);
                } else {
                    $gambarName = $get_section_2['gambar'];
                }
            } else {
                $gambarExtension = $request->gambar->extension();
                $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                $gambar = Image::make($request->gambar);
                $gambarSize = public_path('images/landingpage_razenstudio/visual-branding-design/jasa-desain-grafis/desain-kalender/'.$gambarName);
                $gambar->save($gambarSize, 100);
            }
        } else {
            $landingpage_razenstudio_desain_kalender = new LandingpageRazenstudioDesainKalender;

            $gambarExtension = $request->gambar->extension();
            $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
            $gambar = Image::make($request->gambar);
            $gambarSize = public_path('images/landingpage_razenstudio/visual-branding-design/jasa-desain-grafis/desain-kalender/'.$gambarName);
            $gambar->save($gambarSize, 100);
        }

        $array = [
            'sub_judul' => $request->sub_judul,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $gambarName
        ];

        $landingpage_razenstudio_desain_kalender->section_2 = json_encode($array);
        $landingpage_razenstudio_desain_kalender->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 2');
        return redirect()->route('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kalender.index');
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
            return redirect()->route('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kalender.index');
        }

        $cek = LandingpageRazenstudioDesainKalender::first();
        if($cek)
        {
            $landingpage_razenstudio_desain_kalender = LandingpageRazenstudioDesainKalender::find($cek->id);
            if($landingpage_razenstudio_desain_kalender->section_3)
            {
                $get_section_3 = json_decode($landingpage_razenstudio_desain_kalender->section_3, true);

                if ($request->gambar) {
                    $gambarName = $get_section_3['gambar'];
                    File::delete(public_path('images/landingpage_razenstudio/visual-branding-design/jasa-desain-grafis/desain-kalender/'.$gambarName));

                    $gambarExtension = $request->gambar->extension();
                    $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                    $gambar = Image::make($request->gambar);
                    $gambarSize = public_path('images/landingpage_razenstudio/visual-branding-design/jasa-desain-grafis/desain-kalender/'.$gambarName);
                    $gambar->save($gambarSize, 100);
                } else {
                    $gambarName = $get_section_3['gambar'];
                }
            } else {
                $gambarExtension = $request->gambar->extension();
                $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                $gambar = Image::make($request->gambar);
                $gambarSize = public_path('images/landingpage_razenstudio/visual-branding-design/jasa-desain-grafis/desain-kalender/'.$gambarName);
                $gambar->save($gambarSize, 100);
            }
        } else {
            $landingpage_razenstudio_desain_kalender = new LandingpageRazenstudioDesainKalender;

            $gambarExtension = $request->gambar->extension();
            $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
            $gambar = Image::make($request->gambar);
            $gambarSize = public_path('images/landingpage_razenstudio/visual-branding-design/jasa-desain-grafis/desain-kalender/'.$gambarName);
            $gambar->save($gambarSize, 100);
        }

        $array = [
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $gambarName
        ];

        $landingpage_razenstudio_desain_kalender->section_3 = json_encode($array);
        $landingpage_razenstudio_desain_kalender->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 3');
        return redirect()->route('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kalender.index');
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
            return redirect()->route('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kalender.index');
        }

        $cek = LandingpageRazenstudioDesainKalender::first();
        if($cek)
        {
            $landingpage_razenstudio_desain_kalender = LandingpageRazenstudioDesainKalender::find($cek->id);
        } else {
            $landingpage_razenstudio_desain_kalender = new LandingpageRazenstudioDesainKalender;
        }
        $array = [
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
        ];

        $landingpage_razenstudio_desain_kalender->section_4 = json_encode($array);
        $landingpage_razenstudio_desain_kalender->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 4');
        return redirect()->route('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kalender.index');
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
            return redirect()->route('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kalender.index');
        }

        $cek = LandingpageRazenstudioDesainKalender::first();
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
            $landingpage_razenstudio_desain_kalender  = LandingpageRazenstudioDesainKalender::find($cek->id);
        } else {
            $landingpage_razenstudio_desain_kalender  = new LandingpageRazenstudioDesainKalender;
        }
        $landingpage_razenstudio_desain_kalender ->section_5 = json_encode($array);
        $landingpage_razenstudio_desain_kalender ->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 5');
        return redirect()->route('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kalender.index');
    }

    public function section_5_hapus_satu(Request $request)
    {
        $get = LandingpageRazenstudioDesainKalender::first();
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

        $landingpage_razenstudio_desain_kalender  = LandingpageRazenstudioDesainKalender::find($get->id);
        $landingpage_razenstudio_desain_kalender ->section_5 = json_encode($data);
        $landingpage_razenstudio_desain_kalender ->save();

        return response()->json('berhasil');
    }

    public function section_5_edit(Request $request)
    {
        $get = LandingpageRazenstudioDesainKalender::first();
        $section5 = json_decode($get->section_5, true);

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
            foreach ($section5['konten'] as $value) {
                $array_lama[] = [
                    'id' => $value['id'],
                    'judul_konten' => $value['judul_konten'],
                    'deskripsi_konten' => $value['deskripsi_konten'],
                ];
            }

            $data = [
                'judul' => $request->judul,
                'sub_judul' => $request->sub_judul,
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
                'judul' => $request->judul,
                'sub_judul' => $request->sub_judul,
                'konten' => $array_lama
            ];
        }

        $landingpage_razenstudio_desain_kalender  = LandingpageRazenstudioDesainKalender::find($get->id);
        $landingpage_razenstudio_desain_kalender ->section_5 = json_encode($data);
        $landingpage_razenstudio_desain_kalender ->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 5');
        return redirect()->route('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kalender.index');
    }
    //Section 5 End

    public function section_6_store(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'sub_judul' => 'required',
            'judul' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kalender.index');
        }

        $cek = LandingpageRazenstudioDesainKalender::first();
        if($cek)
        {
            $landingpage_razenstudio_desain_kalender = LandingpageRazenstudioDesainKalender::find($cek->id);
        } else {
            $landingpage_razenstudio_desain_kalender = new LandingpageRazenstudioDesainKalender;
        }
        $array = [
            'sub_judul' => $request->sub_judul,
            'judul' => $request->judul
        ];

        $landingpage_razenstudio_desain_kalender->section_6 = json_encode($array);
        $landingpage_razenstudio_desain_kalender->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 6');
        return redirect()->route('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kalender.index');
    }

    public function section_6_item_store(Request $request)
    {
        $data_item_penilaian = [];
        $deskripsi = $request->deskripsi;
        $status = $request->status;

        for ($i=0; $i < count($deskripsi); $i++) {
            $data_item_penilaian[] = [
                'id' => uniqid(),
                'deskripsi' => $deskripsi[$i],
                'status' => $status[$i]
            ];
        }

        $item_penilaian_desain_kalender = new LandingpageRazenstudioItemDesainKalender;
        $item_penilaian_desain_kalender->judul = $request->judul;
        $item_penilaian_desain_kalender->harga = $request->harga;
        $item_penilaian_desain_kalender->item_penilaian = json_encode($data_item_penilaian);
        $item_penilaian_desain_kalender->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 6');
        return redirect()->route('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kalender.index');
    }

    public function section_6_item_hapus(Request $request)
    {
        $feed_instagram = LandingpageRazenstudioItemDesainKalender::find($request->id);
        $feed_instagram->delete();

        return response()->json('berhasil');
    }

    //Section 7 Start
    public function section_7_store(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'sub_judul' => 'required',
            'judul' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kalender.index');
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
            $gambarSize = public_path('images/landingpage_razenstudio/visual-branding-design/jasa-desain-grafis/desain-kalender/'.$gambarName);
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

        $cek = LandingpageRazenstudioDesainKalender::first();
        if($cek)
        {
            $landingpage_razenstudio_desain_kalender = LandingpageRazenstudioDesainKalender::find($cek->id);
        } else {
            $landingpage_razenstudio_desain_kalender = new LandingpageRazenstudioDesainKalender;
        }

        $landingpage_razenstudio_desain_kalender->section_7 = json_encode($array_data);
        $landingpage_razenstudio_desain_kalender->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 7');
        return redirect()->route('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kalender.index');
    }

    public function section_7_edit(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'sub_judul' => 'required',
            'judul' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kalender.index');
        }

        $judul_konten = $request->judul_konten;
        $deskripsi_konten = $request->deskripsi_konten;
        $gambar_konten = $request->gambar_konten;
        $link_konten = $request->link_konten;
        $array_baru = [];
        $array_gambar = [];

        foreach ($request->file('gambar_konten') as $file) {
            $gambarExtension = $file->extension();
            $gambarName = uniqid().'-'.date("ymd").'.'.$gambarExtension;
            $gambar = Image::make($file);
            $gambarSize = public_path('images/landingpage_razenstudio/visual-branding-design/jasa-desain-grafis/desain-kalender/'.$gambarName);
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

        $get = LandingpageRazenstudioDesainKalender::first();
        $section7 = json_decode($get->section_7, true);
        $array_lama = [];

        $array_lama = [];
        foreach ($section7['konten'] as $value) {
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

        $landingpage_razenstudio_desain_kalender = LandingpageRazenstudioDesainKalender::find($get->id);
        $landingpage_razenstudio_desain_kalender->section_7 = json_encode($array_data);
        $landingpage_razenstudio_desain_kalender->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 7');
        return redirect()->route('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kalender.index');
    }

    public function section_7_hapus_satu(Request $request)
    {
        $get = LandingpageRazenstudioDesainKalender::first();
        $section7 = json_decode($get->section_7, true);
        $array_konten = [];
        foreach ($section7['konten'] as $value) {
            if($value['id'] == $request->id)
            {
                File::delete(public_path('images/landingpage_razenstudio/visual-branding-design/jasa-desain-grafis/desain-kalender/'.$value['gambar_konten']));
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
            'sub_judul' => $section7['sub_judul'],
            'judul' => $section7['judul'],
            'konten' => $array_konten
        ];

        $landingpage_razenstudio_desain_kalender = LandingpageRazenstudioDesainKalender::find($get->id);
        $landingpage_razenstudio_desain_kalender->section_7 = json_encode($data);
        $landingpage_razenstudio_desain_kalender->save();

        return response()->json('berhasil');
    }
    //Section 7 End

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
            return redirect()->route('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kalender.index');
        }

        $cek = LandingpageRazenstudioDesainKalender::first();
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
            $landingpage_razenstudio_desain_kalender = LandingpageRazenstudioDesainKalender::find($cek->id);
        } else {
            $landingpage_razenstudio_desain_kalender = new LandingpageRazenstudioDesainKalender;
        }
        $landingpage_razenstudio_desain_kalender->section_8 = json_encode($array);
        $landingpage_razenstudio_desain_kalender->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 8');
        return redirect()->route('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kalender.index');
    }

    public function section_8_hapus_satu(Request $request)
    {
        $get = LandingpageRazenstudioDesainKalender::first();
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

        $landingpage_razenstudio_desain_kalender = LandingpageRazenstudioDesainKalender::find($get->id);
        $landingpage_razenstudio_desain_kalender->section_8 = json_encode($data);
        $landingpage_razenstudio_desain_kalender->save();

        return response()->json('berhasil');
    }

    public function section_8_edit(Request $request)
    {
        $get = LandingpageRazenstudioDesainKalender::first();
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

        $landingpage_razenstudio_desain_kalender = LandingpageRazenstudioDesainKalender::find($get->id);
        $landingpage_razenstudio_desain_kalender->section_8 = json_encode($data);
        $landingpage_razenstudio_desain_kalender->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 8');
        return redirect()->route('razen-studio.admin.visual-branding-design.jasa-desain-grafis.desain-kalender.index');
    }
    //Section 8 End
}
