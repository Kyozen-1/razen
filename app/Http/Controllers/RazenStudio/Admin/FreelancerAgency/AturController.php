<?php

namespace App\Http\Controllers\RazenStudio\Admin\FreelancerAgency;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;
use DB;
use Validator;
use Carbon\Carbon;
use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioFreelancerAgency;


class AturController extends Controller
{
    public function index()
    {
        return view('razen-studio.admin.landing-page.freelancer-agency.index');
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
            return redirect()->route('razen-studio.admin.freelancer-agency.atur.index');
        }

        $cek = LandingpageRazenstudioFreelancerAgency::first();
        if($cek)
        {
            $landingpage_razenstudio_freelancer_agency = LandingpageRazenstudioFreelancerAgency::find($cek->id);
        } else {
            $landingpage_razenstudio_freelancer_agency = new LandingpageRazenstudioFreelancerAgency;
        }
        $array = [
            'title' => $request->title,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
        ];

        $landingpage_razenstudio_freelancer_agency->section_1 = json_encode($array);
        $landingpage_razenstudio_freelancer_agency->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 1');
        return redirect()->route('razen-studio.admin.freelancer-agency.atur.index');
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
            return redirect()->route('razen-studio.admin.freelancer-agency.atur.index');
        }

        $cek = LandingpageRazenstudioFreelancerAgency::first();
        if($cek)
        {
            $landingpage_razenstudio_freelancer_agency = LandingpageRazenstudioFreelancerAgency::find($cek->id);
            if($landingpage_razenstudio_freelancer_agency->section_2)
            {
                $get_section_2 = json_decode($landingpage_razenstudio_freelancer_agency->section_2, true);

                if ($request->gambar) {
                    $gambarName = $get_section_2['gambar'];
                    File::delete(public_path('images/landingpage_razenstudio/freelancer-agency/'.$gambarName));

                    $gambarExtension = $request->gambar->extension();
                    $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                    $gambar = Image::make($request->gambar);
                    $gambarSize = public_path('images/landingpage_razenstudio/freelancer-agency/'.$gambarName);
                    $gambar->save($gambarSize, 100);
                } else {
                    $gambarName = $get_section_2['gambar'];
                }
            } else {
                $gambarExtension = $request->gambar->extension();
                $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                $gambar = Image::make($request->gambar);
                $gambarSize = public_path('images/landingpage_razenstudio/freelancer-agency/'.$gambarName);
                $gambar->save($gambarSize, 100);
            }
        } else {
            $landingpage_razenstudio_freelancer_agency = new LandingpageRazenstudioFreelancerAgency;

            $gambarExtension = $request->gambar->extension();
            $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
            $gambar = Image::make($request->gambar);
            $gambarSize = public_path('images/landingpage_razenstudio/freelancer-agency/'.$gambarName);
            $gambar->save($gambarSize, 100);
        }

        $array = [
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $gambarName
        ];

        $landingpage_razenstudio_freelancer_agency->section_2 = json_encode($array);
        $landingpage_razenstudio_freelancer_agency->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 2');
        return redirect()->route('razen-studio.admin.freelancer-agency.atur.index');
    }

    public function section_3_store(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'nama' => 'required',
            'jabatan' => 'required',
            'review' => 'required',
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-studio.admin.freelancer-agency.atur.index');
        }

        $cek = LandingpageRazenstudioFreelancerAgency::first();
        if($cek)
        {
            $landingpage_razenstudio_freelancer_agency = LandingpageRazenstudioFreelancerAgency::find($cek->id);
            if($landingpage_razenstudio_freelancer_agency->section_3)
            {
                $get_section_3 = json_decode($landingpage_razenstudio_freelancer_agency->section_3, true);

                if ($request->gambar) {
                    $gambarName = $get_section_3['gambar'];
                    File::delete(public_path('images/landingpage_razenstudio/freelancer-agency/'.$gambarName));

                    $gambarExtension = $request->gambar->extension();
                    $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                    $gambar = Image::make($request->gambar);
                    $gambarSize = public_path('images/landingpage_razenstudio/freelancer-agency/'.$gambarName);
                    $gambar->save($gambarSize, 100);
                } else {
                    $gambarName = $get_section_3['gambar'];
                }
            } else {
                $gambarExtension = $request->gambar->extension();
                $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                $gambar = Image::make($request->gambar);
                $gambarSize = public_path('images/landingpage_razenstudio/freelancer-agency/'.$gambarName);
                $gambar->save($gambarSize, 100);
            }
        } else {
            $landingpage_razenstudio_freelancer_agency = new LandingpageRazenstudioFreelancerAgency;

            $gambarExtension = $request->gambar->extension();
            $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
            $gambar = Image::make($request->gambar);
            $gambarSize = public_path('images/landingpage_razenstudio/freelancer-agency/'.$gambarName);
            $gambar->save($gambarSize, 100);
        }

        $array = [
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'review' => $request->review,
            'gambar' => $gambarName
        ];

        $landingpage_razenstudio_freelancer_agency->section_3 = json_encode($array);
        $landingpage_razenstudio_freelancer_agency->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 3');
        return redirect()->route('razen-studio.admin.freelancer-agency.atur.index');
    }

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
            return redirect()->route('razen-studio.admin.freelancer-agency.atur.index');
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
            $gambarSize = public_path('images/landingpage_razenstudio/freelancer-agency/'.$gambarName);
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

        $cek = LandingpageRazenstudioFreelancerAgency::first();
        if($cek)
        {
            $landingpage_razenstudio_freelancer_agency  = LandingpageRazenstudioFreelancerAgency::find($cek->id);
        } else {
            $landingpage_razenstudio_freelancer_agency  = new LandingpageRazenstudioFreelancerAgency;
        }

        $landingpage_razenstudio_freelancer_agency ->section_4 = json_encode($array_data);
        $landingpage_razenstudio_freelancer_agency ->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 4');
        return redirect()->route('razen-studio.admin.freelancer-agency.atur.index');
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
            return redirect()->route('razen-studio.admin.freelancer-agency.atur.index');
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
            $gambarSize = public_path('images/landingpage_razenstudio/freelancer-agency/'.$gambarName);
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

        $get = LandingpageRazenstudioFreelancerAgency::first();
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

        $landingpage_razenstudio_freelancer_agency  = LandingpageRazenstudioFreelancerAgency::find($get->id);
        $landingpage_razenstudio_freelancer_agency ->section_4 = json_encode($array_data);
        $landingpage_razenstudio_freelancer_agency ->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 4');
        return redirect()->route('razen-studio.admin.freelancer-agency.atur.index');
    }

    public function section_4_hapus_satu(Request $request)
    {
        $get = LandingpageRazenstudioFreelancerAgency::first();
        $section4 = json_decode($get->section_4, true);
        $array_konten = [];
        foreach ($section4['konten'] as $value) {
            if($value['id'] == $request->id)
            {
                File::delete(public_path('images/landingpage_razenstudio/freelancer-agency/'.$value['gambar_konten']));
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

        $landingpage_razenstudio_freelancer_agency  = LandingpageRazenstudioFreelancerAgency::find($get->id);
        $landingpage_razenstudio_freelancer_agency ->section_4 = json_encode($data);
        $landingpage_razenstudio_freelancer_agency ->save();

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
            return redirect()->route('razen-studio.admin.freelancer-agency.atur.index');
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
            $gambarSize = public_path('images/landingpage_razenstudio/freelancer-agency/'.$gambarName);
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

        $cek = LandingpageRazenstudioFreelancerAgency::first();
        if($cek)
        {
            $landingpage_razenstudio_freelancer_agency  = LandingpageRazenstudioFreelancerAgency::find($cek->id);
        } else {
            $landingpage_razenstudio_freelancer_agency  = new LandingpageRazenstudioFreelancerAgency;
        }

        $landingpage_razenstudio_freelancer_agency ->section_5 = json_encode($array_data);
        $landingpage_razenstudio_freelancer_agency ->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 5');
        return redirect()->route('razen-studio.admin.freelancer-agency.atur.index');
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
            return redirect()->route('razen-studio.admin.freelancer-agency.atur.index');
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
            $gambarSize = public_path('images/landingpage_razenstudio/freelancer-agency/'.$gambarName);
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

        $get = LandingpageRazenstudioFreelancerAgency::first();
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

        $landingpage_razenstudio_freelancer_agency  = LandingpageRazenstudioFreelancerAgency::find($get->id);
        $landingpage_razenstudio_freelancer_agency ->section_5 = json_encode($array_data);
        $landingpage_razenstudio_freelancer_agency ->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 5');
        return redirect()->route('razen-studio.admin.freelancer-agency.atur.index');
    }

    public function section_5_hapus_satu(Request $request)
    {
        $get = LandingpageRazenstudioFreelancerAgency::first();
        $section5 = json_decode($get->section_5, true);
        $array_konten = [];
        foreach ($section5['konten'] as $value) {
            if($value['id'] == $request->id)
            {
                File::delete(public_path('images/landingpage_razenstudio/freelancer-agency/'.$value['gambar_konten']));
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

        $landingpage_razenstudio_freelancer_agency  = LandingpageRazenstudioFreelancerAgency::find($get->id);
        $landingpage_razenstudio_freelancer_agency ->section_5 = json_encode($data);
        $landingpage_razenstudio_freelancer_agency ->save();

        return response()->json('berhasil');
    }
    //Section 5 End

    public function section_6_store(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'judul' => 'required',
            'deskripsi' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-studio.admin.freelancer-agency.atur.index');
        }

        $cek = LandingpageRazenstudioFreelancerAgency::first();
        if($cek)
        {
            $landingpage_razenstudio_freelancer_agency = LandingpageRazenstudioFreelancerAgency::find($cek->id);
        } else {
            $landingpage_razenstudio_freelancer_agency = new LandingpageRazenstudioFreelancerAgency;
        }
        $array = [
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
        ];

        $landingpage_razenstudio_freelancer_agency->section_6 = json_encode($array);
        $landingpage_razenstudio_freelancer_agency->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 6');
        return redirect()->route('razen-studio.admin.freelancer-agency.atur.index');
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
            return redirect()->route('razen-studio.admin.freelancer-agency.atur.index');
        }

        $cek = LandingpageRazenstudioFreelancerAgency::first();
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
            $landingpage_razenstudio_freelancer_agency = LandingpageRazenstudioFreelancerAgency::find($cek->id);
        } else {
            $landingpage_razenstudio_freelancer_agency = new LandingpageRazenstudioFreelancerAgency;
        }
        $landingpage_razenstudio_freelancer_agency->section_7 = json_encode($array);
        $landingpage_razenstudio_freelancer_agency->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 7');
        return redirect()->route('razen-studio.admin.freelancer-agency.atur.index');
    }

    public function section_7_hapus_satu(Request $request)
    {
        $get = LandingpageRazenstudioFreelancerAgency::first();
        $section7 = json_decode($get->section_7, true);
        $array = [];
        foreach ($section7['konten'] as $value) {
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
            'sub_judul' => $section7['sub_judul'],
            'judul' => $section7['judul'],
            'konten' => $array
        ];

        $landingpage_razenstudio_freelancer_agency = LandingpageRazenstudioFreelancerAgency::find($get->id);
        $landingpage_razenstudio_freelancer_agency->section_7 = json_encode($data);
        $landingpage_razenstudio_freelancer_agency->save();

        return response()->json('berhasil');
    }

    public function section_7_edit(Request $request)
    {
        $get = LandingpageRazenstudioFreelancerAgency::first();
        $section7 = json_decode($get->section_7, true);

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
            foreach ($section7['konten'] as $value) {
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
            foreach ($section7['konten'] as $value) {
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

        $landingpage_razenstudio_freelancer_agency = LandingpageRazenstudioFreelancerAgency::find($get->id);
        $landingpage_razenstudio_freelancer_agency->section_7 = json_encode($data);
        $landingpage_razenstudio_freelancer_agency->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 7');
        return redirect()->route('razen-studio.admin.freelancer-agency.atur.index');
    }
    //Section 7 End
}
