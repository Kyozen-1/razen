<?php

namespace App\Http\Controllers\RazenStudio\Admin\VideoProduction;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;
use DB;
use Validator;
use Carbon\Carbon;
use App\Models\RazenStudio\LandingPage\VideoProduction\LandingpageRazenstudioVideoProductionVideoAnimasi;

class VideoAnimasiController extends Controller
{
    public function index()
    {
        return view('razen-studio.admin.landing-page.video-production.video-animasi.index');
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
            return redirect()->route('razen-studio.admin.video-production.video-animasi.index');
        }

        $cek = LandingpageRazenstudioVideoProductionVideoAnimasi::first();
        if($cek)
        {
            $landingpage_razenstudio_video_animasi = LandingpageRazenstudioVideoProductionVideoAnimasi::find($cek->id);
        } else {
            $landingpage_razenstudio_video_animasi = new LandingpageRazenstudioVideoProductionVideoAnimasi;
        }
        $array = [
            'title' => $request->title,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
        ];

        $landingpage_razenstudio_video_animasi->section_1 = json_encode($array);
        $landingpage_razenstudio_video_animasi->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 1');
        return redirect()->route('razen-studio.admin.video-production.video-animasi.index');
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
            return redirect()->route('razen-studio.admin.video-production.video-animasi.index');
        }

        $cek = LandingpageRazenstudioVideoProductionVideoAnimasi::first();
        if($cek)
        {
            $landingpage_razenstudio_video_animasi = LandingpageRazenstudioVideoProductionVideoAnimasi::find($cek->id);
            if($landingpage_razenstudio_video_animasi->section_2)
            {
                $get_section_2 = json_decode($landingpage_razenstudio_video_animasi->section_2, true);

                if ($request->gambar) {
                    $gambarName = $get_section_2['gambar'];
                    File::delete(public_path('images/landingpage_razenstudio/video-production/video-animasi/'.$gambarName));

                    $gambarExtension = $request->gambar->extension();
                    $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                    $gambar = Image::make($request->gambar);
                    $gambarSize = public_path('images/landingpage_razenstudio/video-production/video-animasi/'.$gambarName);
                    $gambar->save($gambarSize, 100);
                } else {
                    $gambarName = $get_section_2['gambar'];
                }
            } else {
                $gambarExtension = $request->gambar->extension();
                $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                $gambar = Image::make($request->gambar);
                $gambarSize = public_path('images/landingpage_razenstudio/video-production/video-animasi/'.$gambarName);
                $gambar->save($gambarSize, 100);
            }
        } else {
            $landingpage_razenstudio_video_animasi = new LandingpageRazenstudioVideoProductionVideoAnimasi;

            $gambarExtension = $request->gambar->extension();
            $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
            $gambar = Image::make($request->gambar);
            $gambarSize = public_path('images/landingpage_razenstudio/video-production/video-animasi/'.$gambarName);
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

        $landingpage_razenstudio_video_animasi->section_2 = json_encode($array);
        $landingpage_razenstudio_video_animasi->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 2');
        return redirect()->route('razen-studio.admin.video-production.video-animasi.index');
    }

    //Section 3 Start
    public function section_3_store(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'judul' => 'required',
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-studio.admin.video-production.video-animasi.index');
        }

        $cek = LandingpageRazenstudioVideoProductionVideoAnimasi::first();
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
            $landingpage_razenstudio_video_animasi = LandingpageRazenstudioVideoProductionVideoAnimasi::find($cek->id);
        } else {
            $landingpage_razenstudio_video_animasi = new LandingpageRazenstudioVideoProductionVideoAnimasi;
        }
        $landingpage_razenstudio_video_animasi->section_3 = json_encode($array);
        $landingpage_razenstudio_video_animasi->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 3');
        return redirect()->route('razen-studio.admin.video-production.video-animasi.index');
    }

    public function section_3_hapus_satu(Request $request)
    {
        $get = LandingpageRazenstudioVideoProductionVideoAnimasi::first();
        $section3 = json_decode($get->section_3, true);
        $array = [];
        foreach ($section3['konten'] as $value) {
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
            'judul' => $section3['judul'],
            'konten' => $array
        ];

        $landingpage_razenstudio_video_animasi = LandingpageRazenstudioVideoProductionVideoAnimasi::find($get->id);
        $landingpage_razenstudio_video_animasi->section_3 = json_encode($data);
        $landingpage_razenstudio_video_animasi->save();

        return response()->json('berhasil');
    }

    public function section_3_edit(Request $request)
    {
        $get = LandingpageRazenstudioVideoProductionVideoAnimasi::first();
        $section3 = json_decode($get->section_3, true);

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
            foreach ($section3['konten'] as $value) {
                $array_lama[] = [
                    'id' => $value['id'],
                    'judul_konten' => $value['judul_konten'],
                    'deskripsi_konten' => $value['deskripsi_konten'],
                ];
            }

            $data = [
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
                'konten' => array_merge($array_lama, $array_baru)
            ];
        } else {

            $array_lama = [];
            foreach ($section3['konten'] as $value) {
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

        $landingpage_razenstudio_video_animasi = LandingpageRazenstudioVideoProductionVideoAnimasi::find($get->id);
        $landingpage_razenstudio_video_animasi->section_3 = json_encode($data);
        $landingpage_razenstudio_video_animasi->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 3');
        return redirect()->route('razen-studio.admin.video-production.video-animasi.index');
    }
    //Section 3 End

    public function section_4_store(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'sub_judul' => 'required',
            'judul' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-studio.admin.video-production.video-animasi.index');
        }

        $cek = LandingpageRazenstudioVideoProductionVideoAnimasi::first();
        if($cek)
        {
            $landingpage_razenstudio_video_animasi = LandingpageRazenstudioVideoProductionVideoAnimasi::find($cek->id);
        } else {
            $landingpage_razenstudio_video_animasi = new LandingpageRazenstudioVideoProductionVideoAnimasi;
        }
        $array = [
            'sub_judul' => $request->sub_judul,
            'judul' => $request->judul
        ];

        $landingpage_razenstudio_video_animasi->section_4 = json_encode($array);
        $landingpage_razenstudio_video_animasi->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 4');
        return redirect()->route('razen-studio.admin.video-production.video-animasi.index');
    }

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
            return redirect()->route('razen-studio.admin.video-production.video-animasi.index');
        }

        $cek = LandingpageRazenstudioVideoProductionVideoAnimasi::first();
        if($cek)
        {
            $landingpage_razenstudio_video_animasi = LandingpageRazenstudioVideoProductionVideoAnimasi::find($cek->id);
        } else {
            $landingpage_razenstudio_video_animasi = new LandingpageRazenstudioVideoProductionVideoAnimasi;
        }
        $array = [
            'sub_judul' => $request->sub_judul,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi
        ];

        $landingpage_razenstudio_video_animasi->section_5 = json_encode($array);
        $landingpage_razenstudio_video_animasi->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 5');
        return redirect()->route('razen-studio.admin.video-production.video-animasi.index');
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
            return redirect()->route('razen-studio.admin.video-production.video-animasi.index');
        }

        $cek = LandingpageRazenstudioVideoProductionVideoAnimasi::first();

        foreach ($request->file('icon_konten') as $file) {
            $iconKontenExtension = $file->extension();
            $iconKontenName = uniqid().'-'.date("ymd").'.'.$iconKontenExtension;
            $iconKonten = Image::make($file);
            $iconKontenSize = public_path('images/landingpage_razenstudio/video-production/video-animasi/'.$iconKontenName);
            $iconKonten->save($iconKontenSize, 60);

            $data[] = $iconKontenName;
        }

        $judul_konten = $request->judul_konten;
        $deskripsi_konten = $request->deskripsi_konten;

        $konten = [];

        for ($i=0; $i < count($data); $i++) {
            $konten[] = [
                'id' => uniqid(),
                'judul_konten' => $judul_konten[$i],
                'deskripsi_konten' => $deskripsi_konten[$i],
                'icon_konten' => $data[$i]
            ];
        }

        $array = [
            'sub_judul' => $request->sub_judul,
            'judul' => $request->judul,
            'konten' => $konten
        ];

        if($cek)
        {
            $landingpage_razenstudio_video_animasi = LandingpageRazenstudioVideoProductionVideoAnimasi::find($cek->id);
        } else {
            $landingpage_razenstudio_video_animasi = new LandingpageRazenstudioVideoProductionVideoAnimasi;
        }
        $landingpage_razenstudio_video_animasi->section_6 = json_encode($array);
        $landingpage_razenstudio_video_animasi->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 6');
        return redirect()->route('razen-studio.admin.video-production.video-animasi.index');
    }

    public function section_6_hapus_satu(Request $request)
    {
        $get = LandingpageRazenstudioVideoProductionVideoAnimasi::first();
        $section6 = json_decode($get->section_6, true);
        $array = [];
        foreach ($section6['konten'] as $value) {
            if($value['id'] != $request->id)
            {
                $array[] = [
                    'id' => $value['id'],
                    'judul_konten' => $value['judul_konten'],
                    'deskripsi_konten' => $value['deskripsi_konten'],
                    'icon_konten' => $value['icon_konten']
                ];
            } else {
                File::delete(public_path('images/landingpage_razenstudio/video-production/video-animasi/'.$value['icon_konten']));
            }
        }

        $data = [
            'sub_judul' => $section6['sub_judul'],
            'judul' => $section6['judul'],
            'konten' => $array
        ];

        $landingpage_razenstudio_video_animasi = LandingpageRazenstudioVideoProductionVideoAnimasi::find($get->id);
        $landingpage_razenstudio_video_animasi->section_6 = json_encode($data);
        $landingpage_razenstudio_video_animasi->save();

        return response()->json('berhasil');
    }

    public function section_6_edit(Request $request)
    {
        $get = LandingpageRazenstudioVideoProductionVideoAnimasi::first();
        $section6 = json_decode($get->section_6, true);

        if($request->judul_konten)
        {
            foreach ($request->file('icon_konten') as $file) {
                $iconKontenExtension = $file->extension();
                $iconKontenName = uniqid().'-'.date("ymd").'.'.$iconKontenExtension;
                $iconKonten = Image::make($file);
                $iconKontenSize = public_path('images/landingpage_razenstudio/video-production/video-animasi/'.$iconKontenName);
                $iconKonten->save($iconKontenSize, 60);

                $iconKontenBaru[] = $iconKontenName;
            }

            $judul_konten_baru = $request->judul_konten;
            $deskripsi_konten_baru = $request->deskripsi_konten;

            $array_baru = [];
            for ($i=0; $i < count($iconKontenBaru); $i++) {
                $array_baru[] = [
                    'id' => uniqid(),
                    'judul_konten' => $judul_konten_baru[$i],
                    'deskripsi_konten' => $deskripsi_konten_baru[$i],
                    'icon_konten' => $iconKontenBaru[$i]
                ];
            }

            $array_lama = [];
            foreach ($section6['konten'] as $value) {
                $array_lama[] = [
                    'id' => $value['id'],
                    'judul_konten' => $value['judul_konten'],
                    'deskripsi_konten' => $value['deskripsi_konten'],
                    'icon_konten' => $value['icon_konten'],
                ];
            }

            $data = [
                'sub_judul' => $request->sub_judul,
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
                    'icon_konten' => $value['icon_konten'],
                ];
            }

            $data = [
                'sub_judul' => $request->sub_judul,
                'judul' => $request->judul,
                'konten' => $array_lama
            ];
        }

        $landingpage_razenstudio_video_animasi = LandingpageRazenstudioVideoProductionVideoAnimasi::find($get->id);
        $landingpage_razenstudio_video_animasi->section_6 = json_encode($data);
        $landingpage_razenstudio_video_animasi->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 6');
        return redirect()->route('razen-studio.admin.video-production.video-animasi.index');
    }
    //Section 6 End

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
            return redirect()->route('razen-studio.admin.video-production.video-animasi.index');
        }

        $cek = LandingpageRazenstudioVideoProductionVideoAnimasi::first();
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
            $landingpage_razenstudio_video_animasi = LandingpageRazenstudioVideoProductionVideoAnimasi::find($cek->id);
        } else {
            $landingpage_razenstudio_video_animasi = new LandingpageRazenstudioVideoProductionVideoAnimasi;
        }
        $landingpage_razenstudio_video_animasi->section_7 = json_encode($array);
        $landingpage_razenstudio_video_animasi->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 7');
        return redirect()->route('razen-studio.admin.video-production.video-animasi.index');
    }

    public function section_7_hapus_satu(Request $request)
    {
        $get = LandingpageRazenstudioVideoProductionVideoAnimasi::first();
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

        $landingpage_razenstudio_video_animasi = LandingpageRazenstudioVideoProductionVideoAnimasi::find($get->id);
        $landingpage_razenstudio_video_animasi->section_7 = json_encode($data);
        $landingpage_razenstudio_video_animasi->save();

        return response()->json('berhasil');
    }

    public function section_7_edit(Request $request)
    {
        $get = LandingpageRazenstudioVideoProductionVideoAnimasi::first();
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

        $landingpage_razenstudio_video_animasi = LandingpageRazenstudioVideoProductionVideoAnimasi::find($get->id);
        $landingpage_razenstudio_video_animasi->section_7 = json_encode($data);
        $landingpage_razenstudio_video_animasi->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 7');
        return redirect()->route('razen-studio.admin.video-production.video-animasi.index');
    }
    //Section 7 End
}
