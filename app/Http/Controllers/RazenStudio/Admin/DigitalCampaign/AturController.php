<?php

namespace App\Http\Controllers\RazenStudio\Admin\DigitalCampaign;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;
use DB;
use Validator;
use Carbon\Carbon;
use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioDigitalCampaign;

class AturController extends Controller
{
    public function index()
    {
        return view('razen-studio.admin.landing-page.digital-campaign.atur.index');
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
            return redirect()->route('razen-studio.admin.digital-campaign.atur.index');
        }

        $cek = LandingpageRazenstudioDigitalCampaign::first();
        if($cek)
        {
            $landingpage_razenstudio_digital_campaign = LandingpageRazenstudioDigitalCampaign::find($cek->id);
        } else {
            $landingpage_razenstudio_digital_campaign = new LandingpageRazenstudioDigitalCampaign;
        }
        $array = [
            'title' => $request->title,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
        ];

        $landingpage_razenstudio_digital_campaign->section_1 = json_encode($array);
        $landingpage_razenstudio_digital_campaign->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 1');
        return redirect()->route('razen-studio.admin.digital-campaign.atur.index');
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
            return redirect()->route('razen-studio.admin.digital-campaign.atur.index');
        }

        $cek = LandingpageRazenstudioDigitalCampaign::first();
        if($cek)
        {
            $landingpage_razenstudio_digital_campaign = LandingpageRazenstudioDigitalCampaign::find($cek->id);
            if($landingpage_razenstudio_digital_campaign->section_2)
            {
                $get_section_2 = json_decode($landingpage_razenstudio_digital_campaign->section_2, true);

                if ($request->gambar) {
                    $gambarName = $get_section_2['gambar'];
                    File::delete(public_path('images/landingpage_razenstudio/digital-campaign/'.$gambarName));

                    $gambarExtension = $request->gambar->extension();
                    $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                    $gambar = Image::make($request->gambar);
                    $gambarSize = public_path('images/landingpage_razenstudio/digital-campaign/'.$gambarName);
                    $gambar->save($gambarSize, 100);
                } else {
                    $gambarName = $get_section_2['gambar'];
                }
            } else {
                $gambarExtension = $request->gambar->extension();
                $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                $gambar = Image::make($request->gambar);
                $gambarSize = public_path('images/landingpage_razenstudio/digital-campaign/'.$gambarName);
                $gambar->save($gambarSize, 100);
            }
        } else {
            $landingpage_razenstudio_digital_campaign = new LandingpageRazenstudioDigitalCampaign;

            $gambarExtension = $request->gambar->extension();
            $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
            $gambar = Image::make($request->gambar);
            $gambarSize = public_path('images/landingpage_razenstudio/digital-campaign/'.$gambarName);
            $gambar->save($gambarSize, 100);
        }

        $array = [
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $gambarName
        ];

        $landingpage_razenstudio_digital_campaign->section_2 = json_encode($array);
        $landingpage_razenstudio_digital_campaign->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 2');
        return redirect()->route('razen-studio.admin.digital-campaign.atur.index');
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
            return redirect()->route('razen-studio.admin.digital-campaign.atur.index');
        }

        $judul_konten = $request->judul_konten;
        $deskripsi_konten = $request->deskripsi_konten;
        $link_konten = $request->link_konten;
        $logo_konten = $request->logo_konten;
        $array_konten = [];
        $array_logo = [];

        foreach ($request->file('logo_konten') as $file) {
            $gambarExtension = $file->extension();
            $gambarName = uniqid().'-'.date("ymd").'.'.$gambarExtension;
            $gambar = Image::make($file);
            $gambarSize = public_path('images/landingpage_razenstudio/digital-campaign/'.$gambarName);
            $gambar->save($gambarSize, 60);

            $array_logo[] = $gambarName;
        }

        for ($i=0; $i < count($array_logo); $i++) {
            $array_konten[] = [
                'id' => uniqid(),
                'judul_konten' => $judul_konten[$i],
                'deskripsi_konten' => $deskripsi_konten[$i],
                'link_konten' => $link_konten[$i],
                'logo_konten' => $array_logo[$i]
            ];
        }

        $array_data = [
            'sub_judul' => $request->sub_judul,
            'judul' => $request->judul,
            'konten' => $array_konten
        ];

        $cek = LandingpageRazenstudioDigitalCampaign::first();
        if($cek)
        {
            $landingpage_razenstudio_digital_campaign  = LandingpageRazenstudioDigitalCampaign::find($cek->id);
        } else {
            $landingpage_razenstudio_digital_campaign  = new LandingpageRazenstudioDigitalCampaign;
        }

        $landingpage_razenstudio_digital_campaign ->section_3 = json_encode($array_data);
        $landingpage_razenstudio_digital_campaign ->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 3');
        return redirect()->route('razen-studio.admin.digital-campaign.atur.index');
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
            return redirect()->route('razen-studio.admin.digital-campaign.atur.index');
        }

        $judul_konten = $request->judul_konten;
        $deskripsi_konten = $request->deskripsi_konten;
        $link_konten = $request->link_konten;
        $logo_konten = $request->logo_konten;
        $array_baru = [];
        $array_logo = [];

        foreach ($request->file('logo_konten') as $file) {
            $gambarExtension = $file->extension();
            $gambarName = uniqid().'-'.date("ymd").'.'.$gambarExtension;
            $gambar = Image::make($file);
            $gambarSize = public_path('images/landingpage_razenstudio/digital-campaign/'.$gambarName);
            $gambar->save($gambarSize, 60);

            $array_logo[] = $gambarName;
        }

        for ($i=0; $i < count($array_logo); $i++) {
            $array_baru[] = [
                'id' => uniqid(),
                'judul_konten' => $judul_konten[$i],
                'deskripsi_konten' => $deskripsi_konten[$i],
                'link_konten' => $link_konten[$i],
                'logo_konten' => $array_logo[$i]
            ];
        }

        $get = LandingpageRazenstudioDigitalCampaign::first();
        $section3 = json_decode($get->section_3, true);
        $array_lama = [];

        $array_lama = [];
        foreach ($section3['konten'] as $value) {
            $array_lama[] = [
                'id' => $value['id'],
                'judul_konten' => $value['judul_konten'],
                'deskripsi_konten' => $value['deskripsi_konten'],
                'link_konten' => $value['link_konten'],
                'logo_konten' => $value['logo_konten']
            ];
        }

        $array_data = [
            'sub_judul' => $request->sub_judul,
            'judul' => $request->judul,
            'konten' => array_merge($array_lama, $array_baru)
        ];

        $landingpage_razenstudio_digital_campaign  = LandingpageRazenstudioDigitalCampaign::find($get->id);
        $landingpage_razenstudio_digital_campaign ->section_3 = json_encode($array_data);
        $landingpage_razenstudio_digital_campaign ->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 3');
        return redirect()->route('razen-studio.admin.digital-campaign.atur.index');
    }

    public function section_3_hapus_satu(Request $request)
    {
        $get = LandingpageRazenstudioDigitalCampaign::first();
        $section3 = json_decode($get->section_3, true);
        $array_konten = [];
        foreach ($section3['konten'] as $value) {
            if($value['id'] == $request->id)
            {
                File::delete(public_path('images/landingpage_razenstudio/digital-campaign/'.$value['logo_konten']));
            } else {
                $array_konten[] = [
                    'id' => $value['id'],
                    'judul_konten' => $value['judul_konten'],
                    'deskripsi_konten' => $value['deskripsi_konten'],
                    'link_konten' => $value['link_konten'],
                    'logo_konten' => $value['logo_konten']
                ];
            }
        }

        $data = [
            'sub_judul' => $section3['sub_judul'],
            'judul' => $section3['judul'],
            'konten' => $array_konten
        ];

        $landingpage_razenstudio_digital_campaign  = LandingpageRazenstudioDigitalCampaign::find($get->id);
        $landingpage_razenstudio_digital_campaign ->section_3 = json_encode($data);
        $landingpage_razenstudio_digital_campaign ->save();

        return response()->json('berhasil');
    }
    //Section 3 End

    //Section 4 Start
    public function section_4_store(Request $request)
    {
        $judul_konten = $request->judul_konten;
        $deskripsi_konten = $request->deskripsi_konten;
        $logo_konten = $request->logo_konten;
        $array_konten = [];
        $array_logo = [];

        foreach ($request->file('logo_konten') as $file) {
            $gambarExtension = $file->extension();
            $gambarName = uniqid().'-'.date("ymd").'.'.$gambarExtension;
            $gambar = Image::make($file);
            $gambarSize = public_path('images/landingpage_razenstudio/digital-campaign/'.$gambarName);
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

        $cek = LandingpageRazenstudioDigitalCampaign::first();
        if($cek)
        {
            $landingpage_razenstudio_digital_campaign  = LandingpageRazenstudioDigitalCampaign::find($cek->id);
        } else {
            $landingpage_razenstudio_digital_campaign  = new LandingpageRazenstudioDigitalCampaign;
        }

        $landingpage_razenstudio_digital_campaign ->section_4 = json_encode($array_konten);
        $landingpage_razenstudio_digital_campaign ->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 4');
        return redirect()->route('razen-studio.admin.digital-campaign.atur.index');
    }

    public function section_4_edit(Request $request)
    {
        $judul_konten = $request->judul_konten;
        $deskripsi_konten = $request->deskripsi_konten;
        $logo_konten = $request->logo_konten;
        $array_baru = [];
        $array_logo = [];

        foreach ($request->file('logo_konten') as $file) {
            $gambarExtension = $file->extension();
            $gambarName = uniqid().'-'.date("ymd").'.'.$gambarExtension;
            $gambar = Image::make($file);
            $gambarSize = public_path('images/landingpage_razenstudio/digital-campaign/'.$gambarName);
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

        $get = LandingpageRazenstudioDigitalCampaign::first();
        $section4 = json_decode($get->section_4, true);
        $array_lama = [];

        $array_lama = [];
        foreach ($section4 as $value) {
            $array_lama[] = [
                'id' => $value['id'],
                'judul_konten' => $value['judul_konten'],
                'deskripsi_konten' => $value['deskripsi_konten'],
                'logo_konten' => $value['logo_konten']
            ];
        }

        $landingpage_razenstudio_digital_campaign  = LandingpageRazenstudioDigitalCampaign::find($get->id);
        $landingpage_razenstudio_digital_campaign ->section_4 = json_encode(array_merge($array_lama, $array_baru));
        $landingpage_razenstudio_digital_campaign ->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 4');
        return redirect()->route('razen-studio.admin.digital-campaign.atur.index');
    }

    public function section_4_hapus_satu(Request $request)
    {
        $get = LandingpageRazenstudioDigitalCampaign::first();
        $section4 = json_decode($get->section_4, true);
        $array_konten = [];
        foreach ($section4 as $value) {
            if($value['id'] == $request->id)
            {
                File::delete(public_path('images/landingpage_razenstudio/digital-campaign/'.$value['logo_konten']));
            } else {
                $array_konten[] = [
                    'id' => $value['id'],
                    'judul_konten' => $value['judul_konten'],
                    'deskripsi_konten' => $value['deskripsi_konten'],
                    'logo_konten' => $value['logo_konten']
                ];
            }
        }

        $landingpage_razenstudio_digital_campaign  = LandingpageRazenstudioDigitalCampaign::find($get->id);
        $landingpage_razenstudio_digital_campaign->section_4 = json_encode($array_konten);
        $landingpage_razenstudio_digital_campaign->save();

        return response()->json('berhasil');
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
            return redirect()->route('razen-studio.admin.digital-campaign.atur.index');
        }

        $cek = LandingpageRazenstudioDigitalCampaign::first();
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
            $landingpage_razenstudio_digital_campaign = LandingpageRazenstudioDigitalCampaign::find($cek->id);
        } else {
            $landingpage_razenstudio_digital_campaign = new LandingpageRazenstudioDigitalCampaign;
        }
        $landingpage_razenstudio_digital_campaign->section_5 = json_encode($array);
        $landingpage_razenstudio_digital_campaign->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 5');
        return redirect()->route('razen-studio.admin.digital-campaign.atur.index');
    }

    public function section_5_hapus_satu(Request $request)
    {
        $get = LandingpageRazenstudioDigitalCampaign::first();
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

        $landingpage_razenstudio_digital_campaign = LandingpageRazenstudioDigitalCampaign::find($get->id);
        $landingpage_razenstudio_digital_campaign->section_5 = json_encode($data);
        $landingpage_razenstudio_digital_campaign->save();

        return response()->json('berhasil');
    }

    public function section_5_edit(Request $request)
    {
        $get = LandingpageRazenstudioDigitalCampaign::first();
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

        $landingpage_razenstudio_digital_campaign = LandingpageRazenstudioDigitalCampaign::find($get->id);
        $landingpage_razenstudio_digital_campaign->section_5 = json_encode($data);
        $landingpage_razenstudio_digital_campaign->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 5');
        return redirect()->route('razen-studio.admin.digital-campaign.atur.index');
    }
    //Section 5 End
}
