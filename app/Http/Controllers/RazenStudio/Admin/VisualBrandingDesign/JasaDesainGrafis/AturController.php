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
use App\Models\RazenStudio\LandingPage\VisualBrandingDesign\JasaDesainGrafis\LandingpageRazenstudioJasaBrandingDesign;

class AturController extends Controller
{
    public function index()
    {
        return view('razen-studio.admin.landing-page.visual-branding-design.jasa-desain-grafis.atur.index');
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
            return redirect()->route('razen-studio.admin.visual-branding-design.jasa-desain-grafis.atur.index');
        }

        $cek = LandingpageRazenstudioJasaBrandingDesign::first();
        if($cek)
        {
            $landingpage_razenstudio_jasa_branding_design = LandingpageRazenstudioJasaBrandingDesign::find($cek->id);
        } else {
            $landingpage_razenstudio_jasa_branding_design = new LandingpageRazenstudioJasaBrandingDesign;
        }
        $array = [
            'title' => $request->title,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
        ];

        $landingpage_razenstudio_jasa_branding_design->section_1 = json_encode($array);
        $landingpage_razenstudio_jasa_branding_design->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 1');
        return redirect()->route('razen-studio.admin.visual-branding-design.jasa-desain-grafis.atur.index');
    }

    public function section_2_store(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'sub_judul' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required',
            'link' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-studio.admin.visual-branding-design.jasa-desain-grafis.atur.index');
        }

        $cek = LandingpageRazenstudioJasaBrandingDesign::first();
        if($cek)
        {
            $landingpage_razenstudio_jasa_branding_design = LandingpageRazenstudioJasaBrandingDesign::find($cek->id);
            if($landingpage_razenstudio_jasa_branding_design->section_2)
            {
                $get_section_2 = json_decode($landingpage_razenstudio_jasa_branding_design->section_2, true);

                if ($request->gambar) {
                    $gambarName = $get_section_2['gambar'];
                    File::delete(public_path('images/landingpage_razenstudio/visual-branding-design/jasa-desain-grafis/'.$gambarName));

                    $gambarExtension = $request->gambar->extension();
                    $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                    $gambar = Image::make($request->gambar);
                    $gambarSize = public_path('images/landingpage_razenstudio/visual-branding-design/jasa-desain-grafis/'.$gambarName);
                    $gambar->save($gambarSize, 100);
                } else {
                    $gambarName = $get_section_2['gambar'];
                }
            } else {
                $gambarExtension = $request->gambar->extension();
                $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                $gambar = Image::make($request->gambar);
                $gambarSize = public_path('images/landingpage_razenstudio/visual-branding-design/jasa-desain-grafis/'.$gambarName);
                $gambar->save($gambarSize, 100);
            }
        } else {
            $landingpage_razenstudio_jasa_branding_design = new LandingpageRazenstudioJasaBrandingDesign;

            $gambarExtension = $request->gambar->extension();
            $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
            $gambar = Image::make($request->gambar);
            $gambarSize = public_path('images/landingpage_razenstudio/visual-branding-design/jasa-desain-grafis/'.$gambarName);
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
            'sub_judul' => $request->sub_judul,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'link' => $url,
            'gambar' => $gambarName
        ];

        $landingpage_razenstudio_jasa_branding_design->section_2 = json_encode($array);
        $landingpage_razenstudio_jasa_branding_design->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 2');
        return redirect()->route('razen-studio.admin.visual-branding-design.jasa-desain-grafis.atur.index');
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
            return redirect()->route('razen-studio.admin.visual-branding-design.jasa-desain-grafis.atur.index');
        }

        $judul_konten = $request->judul_konten;
        $deskripsi_konten = $request->deskripsi_konten;
        $gambar_konten = $request->gambar_konten;
        $link_konten = $request->link_konten;
        $array_konten = [];
        $array_gambar = [];

        foreach ($request->file('gambar_konten') as $file) {
            $gambarExtension = $file->extension();
            $gambarName = uniqid().'-'.date("ymd").'.'.$gambarExtension;
            $gambar = Image::make($file);
            $gambarSize = public_path('images/landingpage_razenstudio/visual-branding-design/jasa-desain-grafis/'.$gambarName);
            $gambar->save($gambarSize, 60);

            $array_gambar[] = $gambarName;
        }

        for ($i=0; $i < count($array_gambar); $i++) {
            $array_konten[] = [
                'id' => uniqid(),
                'judul_konten' => $judul_konten[$i],
                'deskripsi_konten' => $deskripsi_konten[$i],
                'link_konten' => $link_konten[$i],
                'gambar_konten' => $array_gambar[$i]
            ];
        }

        $array_data = [
            'sub_judul' => $request->sub_judul,
            'judul' => $request->judul,
            'konten' => $array_konten
        ];

        $cek = LandingpageRazenstudioJasaBrandingDesign::first();
        if($cek)
        {
            $landingpage_razenstudio_jasa_branding_design = LandingpageRazenstudioJasaBrandingDesign::find($cek->id);
        } else {
            $landingpage_razenstudio_jasa_branding_design = new LandingpageRazenstudioJasaBrandingDesign;
        }

        $landingpage_razenstudio_jasa_branding_design->section_3 = json_encode($array_data);
        $landingpage_razenstudio_jasa_branding_design->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 3');
        return redirect()->route('razen-studio.admin.visual-branding-design.jasa-desain-grafis.atur.index');
    }

    public function section_3_edit(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'sub_judul' => 'required',
            'judul' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-studio.admin.visual-branding-design.jasa-desain-grafis.atur.index');
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
            $gambarSize = public_path('images/landingpage_razenstudio/visual-branding-design/jasa-desain-grafis/'.$gambarName);
            $gambar->save($gambarSize, 60);

            $array_gambar[] = $gambarName;
        }

        for ($i=0; $i < count($array_gambar); $i++) {
            $array_baru[] = [
                'id' => uniqid(),
                'judul_konten' => $judul_konten[$i],
                'deskripsi_konten' => $deskripsi_konten[$i],
                'link_konten' => $link_konten[$i],
                'gambar_konten' => $array_gambar[$i]
            ];
        }

        $get = LandingpageRazenstudioJasaBrandingDesign::first();
        $section3 = json_decode($get->section_3, true);
        $array_lama = [];

        $array_lama = [];
        foreach ($section3['konten'] as $value) {
            $array_lama[] = [
                'id' => $value['id'],
                'judul_konten' => $value['judul_konten'],
                'deskripsi_konten' => $value['deskripsi_konten'],
                'link_konten' => $value['link_konten'],
                'gambar_konten' => $value['gambar_konten']
            ];
        }

        $array_data = [
            'sub_judul' => $request->sub_judul,
            'judul' => $request->judul,
            'konten' => array_merge($array_lama, $array_baru)
        ];

        $landingpage_razenstudio_jasa_branding_design = LandingpageRazenstudioJasaBrandingDesign::find($get->id);
        $landingpage_razenstudio_jasa_branding_design->section_3 = json_encode($array_data);
        $landingpage_razenstudio_jasa_branding_design->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 3');
        return redirect()->route('razen-studio.admin.visual-branding-design.jasa-desain-grafis.atur.index');
    }

    public function section_3_hapus_satu(Request $request)
    {
        $get = LandingpageRazenstudioJasaBrandingDesign::first();
        $section3 = json_decode($get->section_3, true);
        $array_konten = [];
        foreach ($section3['konten'] as $value) {
            if($value['id'] == $request->id)
            {
                File::delete(public_path('images/landingpage_razenstudio/visual-branding-design/jasa-desain-grafis/'.$value['gambar_konten']));
            } else {
                $array_konten[] = [
                    'id' => $value['id'],
                    'judul_konten' => $value['judul_konten'],
                    'deskripsi_konten' => $value['deskripsi_konten'],
                    'link_konten' => $value['link_konten'],
                    'gambar_konten' => $value['gambar_konten']
                ];
            }
        }

        $data = [
            'sub_judul' => $section3['sub_judul'],
            'judul' => $section3['judul'],
            'konten' => $array_konten
        ];

        $landingpage_razenstudio_jasa_branding_design = LandingpageRazenstudioJasaBrandingDesign::find($get->id);
        $landingpage_razenstudio_jasa_branding_design->section_3 = json_encode($data);
        $landingpage_razenstudio_jasa_branding_design->save();

        return response()->json('berhasil');
    }
    //Section 3 End

    //Section 4 Start
    public function section_4_store(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'sub_judul' => 'required',
            'judul' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-studio.admin.visual-branding-design.jasa-desain-grafis.atur.index');
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
            $gambarSize = public_path('images/landingpage_razenstudio/visual-branding-design/jasa-desain-grafis/'.$gambarName);
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

        $cek = LandingpageRazenstudioJasaBrandingDesign::first();
        if($cek)
        {
            $landingpage_razenstudio_jasa_branding_design = LandingpageRazenstudioJasaBrandingDesign::find($cek->id);
        } else {
            $landingpage_razenstudio_jasa_branding_design = new LandingpageRazenstudioJasaBrandingDesign;
        }

        $landingpage_razenstudio_jasa_branding_design->section_4 = json_encode($array_data);
        $landingpage_razenstudio_jasa_branding_design->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 4');
        return redirect()->route('razen-studio.admin.visual-branding-design.jasa-desain-grafis.atur.index');
    }

    public function section_4_edit(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'sub_judul' => 'required',
            'judul' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-studio.admin.visual-branding-design.jasa-desain-grafis.atur.index');
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
            $gambarSize = public_path('images/landingpage_razenstudio/visual-branding-design/jasa-desain-grafis/'.$gambarName);
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

        $get = LandingpageRazenstudioJasaBrandingDesign::first();
        $section4 = json_decode($get->section_4, true);
        $array_lama = [];

        $array_lama = [];
        foreach ($section4['konten'] as $value) {
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

        $landingpage_razenstudio_jasa_branding_design = LandingpageRazenstudioJasaBrandingDesign::find($get->id);
        $landingpage_razenstudio_jasa_branding_design->section_4 = json_encode($array_data);
        $landingpage_razenstudio_jasa_branding_design->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 4');
        return redirect()->route('razen-studio.admin.visual-branding-design.jasa-desain-grafis.atur.index');
    }

    public function section_4_hapus_satu(Request $request)
    {
        $get = LandingpageRazenstudioJasaBrandingDesign::first();
        $section4 = json_decode($get->section_4, true);
        $array_konten = [];
        foreach ($section4['konten'] as $value) {
            if($value['id'] == $request->id)
            {
                File::delete(public_path('images/landingpage_razenstudio/visual-branding-design/jasa-desain-grafis/'.$value['gambar_konten']));
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
            'sub_judul' => $section4['sub_judul'],
            'judul' => $section4['judul'],
            'konten' => $array_konten
        ];

        $landingpage_razenstudio_jasa_branding_design = LandingpageRazenstudioJasaBrandingDesign::find($get->id);
        $landingpage_razenstudio_jasa_branding_design->section_4 = json_encode($data);
        $landingpage_razenstudio_jasa_branding_design->save();

        return response()->json('berhasil');
    }
    //Section 4 End

    public function section_5_store(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'sub_judul' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-studio.admin.visual-branding-design.jasa-desain-grafis.atur.index');
        }

        $cek = LandingpageRazenstudioJasaBrandingDesign::first();
        if($cek)
        {
            $landingpage_razenstudio_jasa_branding_design = LandingpageRazenstudioJasaBrandingDesign::find($cek->id);
        } else {
            $landingpage_razenstudio_jasa_branding_design = new LandingpageRazenstudioJasaBrandingDesign;
        }
        $array = [
            'sub_judul' => $request->sub_judul,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
        ];

        $landingpage_razenstudio_jasa_branding_design->section_5 = json_encode($array);
        $landingpage_razenstudio_jasa_branding_design->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 5');
        return redirect()->route('razen-studio.admin.visual-branding-design.jasa-desain-grafis.atur.index');
    }
}
