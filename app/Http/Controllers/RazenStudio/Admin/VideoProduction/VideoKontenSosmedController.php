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
use App\Models\RazenStudio\LandingPage\VideoProduction\LandingpageRazenstudioVideoProductionVideoKontenSosmed;

class VideoKontenSosmedController extends Controller
{
    public function index()
    {
        return view('razen-studio.admin.landing-page.video-production.video-konten-sosmed.index');
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
            return redirect()->route('razen-studio.admin.video-production.video-konten-sosmed.index');
        }

        $cek = LandingpageRazenstudioVideoProductionVideoKontenSosmed::first();
        if($cek)
        {
            $landingpage_razenstudio_video_konten_sosmed = LandingpageRazenstudioVideoProductionVideoKontenSosmed::find($cek->id);
        } else {
            $landingpage_razenstudio_video_konten_sosmed = new LandingpageRazenstudioVideoProductionVideoKontenSosmed;
        }
        $array = [
            'title' => $request->title,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
        ];

        $landingpage_razenstudio_video_konten_sosmed->section_1 = json_encode($array);
        $landingpage_razenstudio_video_konten_sosmed->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 1');
        return redirect()->route('razen-studio.admin.video-production.video-konten-sosmed.index');
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
            return redirect()->route('razen-studio.admin.video-production.video-konten-sosmed.index');
        }

        $cek = LandingpageRazenstudioVideoProductionVideoKontenSosmed::first();
        if($cek)
        {
            $landingpage_razenstudio_video_konten_sosmed = LandingpageRazenstudioVideoProductionVideoKontenSosmed::find($cek->id);
            if($landingpage_razenstudio_video_konten_sosmed->section_2)
            {
                $get_section_2 = json_decode($landingpage_razenstudio_video_konten_sosmed->section_2, true);

                if ($request->gambar) {
                    $gambarName = $get_section_2['gambar'];
                    File::delete(public_path('images/landingpage_razenstudio/video-production/video-konten-sosmed/'.$gambarName));

                    $gambarExtension = $request->gambar->extension();
                    $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                    $gambar = Image::make($request->gambar);
                    $gambarSize = public_path('images/landingpage_razenstudio/video-production/video-konten-sosmed/'.$gambarName);
                    $gambar->save($gambarSize, 100);
                } else {
                    $gambarName = $get_section_2['gambar'];
                }
            } else {
                $gambarExtension = $request->gambar->extension();
                $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                $gambar = Image::make($request->gambar);
                $gambarSize = public_path('images/landingpage_razenstudio/video-production/video-konten-sosmed/'.$gambarName);
                $gambar->save($gambarSize, 100);
            }
        } else {
            $landingpage_razenstudio_video_konten_sosmed = new LandingpageRazenstudioVideoProductionVideoKontenSosmed;

            $gambarExtension = $request->gambar->extension();
            $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
            $gambar = Image::make($request->gambar);
            $gambarSize = public_path('images/landingpage_razenstudio/video-production/video-konten-sosmed/'.$gambarName);
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

        $landingpage_razenstudio_video_konten_sosmed->section_2 = json_encode($array);
        $landingpage_razenstudio_video_konten_sosmed->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 2');
        return redirect()->route('razen-studio.admin.video-production.video-konten-sosmed.index');
    }

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
            return redirect()->route('razen-studio.admin.video-production.video-konten-sosmed.index');
        }

        $cek = LandingpageRazenstudioVideoProductionVideoKontenSosmed::first();
        if($cek)
        {
            $landingpage_razenstudio_video_konten_sosmed = LandingpageRazenstudioVideoProductionVideoKontenSosmed::find($cek->id);
            if($landingpage_razenstudio_video_konten_sosmed->section_3)
            {
                $get_section_3 = json_decode($landingpage_razenstudio_video_konten_sosmed->section_3, true);

                if ($request->gambar) {
                    $gambarName = $get_section_3['gambar'];
                    File::delete(public_path('images/landingpage_razenstudio/video-production/video-konten-sosmed/'.$gambarName));

                    $gambarExtension = $request->gambar->extension();
                    $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                    $gambar = Image::make($request->gambar);
                    $gambarSize = public_path('images/landingpage_razenstudio/video-production/video-konten-sosmed/'.$gambarName);
                    $gambar->save($gambarSize, 100);
                } else {
                    $gambarName = $get_section_3['gambar'];
                }
            } else {
                $gambarExtension = $request->gambar->extension();
                $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                $gambar = Image::make($request->gambar);
                $gambarSize = public_path('images/landingpage_razenstudio/video-production/video-konten-sosmed/'.$gambarName);
                $gambar->save($gambarSize, 100);
            }
        } else {
            $landingpage_razenstudio_video_konten_sosmed = new LandingpageRazenstudioVideoProductionVideoKontenSosmed;

            $gambarExtension = $request->gambar->extension();
            $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
            $gambar = Image::make($request->gambar);
            $gambarSize = public_path('images/landingpage_razenstudio/video-production/video-konten-sosmed/'.$gambarName);
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

        $landingpage_razenstudio_video_konten_sosmed->section_3 = json_encode($array);
        $landingpage_razenstudio_video_konten_sosmed->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 3');
        return redirect()->route('razen-studio.admin.video-production.video-konten-sosmed.index');
    }

    //Section 4 Start
    public function section_4_store(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'judul' => 'required',
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-studio.admin.video-production.video-konten-sosmed.index');
        }

        $cek = LandingpageRazenstudioVideoProductionVideoKontenSosmed::first();
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
            $landingpage_razenstudio_video_konten_sosmed = LandingpageRazenstudioVideoProductionVideoKontenSosmed::find($cek->id);
        } else {
            $landingpage_razenstudio_video_konten_sosmed = new LandingpageRazenstudioVideoProductionVideoKontenSosmed;
        }
        $landingpage_razenstudio_video_konten_sosmed->section_4 = json_encode($array);
        $landingpage_razenstudio_video_konten_sosmed->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 4');
        return redirect()->route('razen-studio.admin.video-production.video-konten-sosmed.index');
    }

    public function section_4_hapus_satu(Request $request)
    {
        $get = LandingpageRazenstudioVideoProductionVideoKontenSosmed::first();
        $section4 = json_decode($get->section_4, true);
        $array = [];
        foreach ($section4['konten'] as $value) {
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
            'judul' => $section4['judul'],
            'konten' => $array
        ];

        $landingpage_razenstudio_video_konten_sosmed = LandingpageRazenstudioVideoProductionVideoKontenSosmed::find($get->id);
        $landingpage_razenstudio_video_konten_sosmed->section_4 = json_encode($data);
        $landingpage_razenstudio_video_konten_sosmed->save();

        return response()->json('berhasil');
    }

    public function section_4_edit(Request $request)
    {
        $get = LandingpageRazenstudioVideoProductionVideoKontenSosmed::first();
        $section4 = json_decode($get->section_4, true);

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
            foreach ($section4['konten'] as $value) {
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
            foreach ($section4['konten'] as $value) {
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

        $landingpage_razenstudio_video_konten_sosmed = LandingpageRazenstudioVideoProductionVideoKontenSosmed::find($get->id);
        $landingpage_razenstudio_video_konten_sosmed->section_4 = json_encode($data);
        $landingpage_razenstudio_video_konten_sosmed->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 4');
        return redirect()->route('razen-studio.admin.video-production.video-konten-sosmed.index');
    }
    //Section 4 End

    //Section 5 Start
    public function section_5_store(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'judul' => 'required',
            'deskripsi' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-studio.admin.video-production.video-konten-sosmed.index');
        }

        $cek = LandingpageRazenstudioVideoProductionVideoKontenSosmed::first();
        if($cek)
        {
            $landingpage_razenstudio_video_konten_sosmed = LandingpageRazenstudioVideoProductionVideoKontenSosmed::find($cek->id);
        } else {
            $landingpage_razenstudio_video_konten_sosmed = new LandingpageRazenstudioVideoProductionVideoKontenSosmed;
        }
        $array = [
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'item' => []
        ];

        $landingpage_razenstudio_video_konten_sosmed->section_5 = json_encode($array);
        $landingpage_razenstudio_video_konten_sosmed->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 5');
        return redirect()->route('razen-studio.admin.video-production.video-konten-sosmed.index');
    }

    public function section_5_item_1_store(Request $request)
    {
        $cek = LandingpageRazenstudioVideoProductionVideoKontenSosmed::first();
        if($cek)
        {
            $video_konten_sosmed = LandingpageRazenstudioVideoProductionVideoKontenSosmed::find($cek->id);
            $section5 = json_decode($video_konten_sosmed->section_5, true);
            $array_baru = [];
            $array_lama = [];

            $array_baru[] = [
                'item' => $request->item,
                'harga' => $request->harga,
                'deskripsi' => $request->deskripsi,
                'no_wa_konsultasi' => $request->no_wa_konsultasi,
                'mini_text' => $request->mini_text,
            ];

            foreach ($section5['item'] as $value) {
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
                'judul' => $section5['judul'],
                'deskripsi' => $section5['deskripsi'],
                'item' => array_merge($array_lama, $array_baru)
            ];

            $video_konten_sosmed->section_5 = json_encode($data);
            $video_konten_sosmed->save();

            Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 5');
            return redirect()->route('razen-studio.admin.video-production.video-konten-sosmed.index');
        } else {
            Alert::error('Gagal Menyimpan!', 'Tidak dapat menyimpan karena tidak ada data');
            return redirect()->route('razen-studio.admin.video-production.video-konten-sosmed.index');
        }
    }

    public function section_5_item_2_store(Request $request)
    {
        $cek = LandingpageRazenstudioVideoProductionVideoKontenSosmed::first();
        if($cek)
        {
            $video_konten_sosmed = LandingpageRazenstudioVideoProductionVideoKontenSosmed::find($cek->id);
            $section5 = json_decode($video_konten_sosmed->section_5, true);
            $array_baru = [];
            $array_lama = [];

            if($request->ikon)
            {
                $ikonExtension = $request->ikon->extension();
                $ikonName =  uniqid().'-'.date("ymd").'.'.$ikonExtension;
                $ikon = Image::make($request->ikon);
                $ikonSize = public_path('images/landingpage_razenstudio/video-production/video-konten-sosmed/'.$ikonName);
                $ikon->save($ikonSize, 100);

                $array_baru[] = [
                    'item' => $request->item,
                    'judul' => $request->judul,
                    'deskripsi' => $request->deskripsi,
                    'ikon' => $ikonName,
                ];
            }

            foreach ($section5['item'] as $value) {
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
                        File::delete(public_path('images/landingpage_razenstudio/video-production/video-konten-sosmed/'.$value['ikon']));
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
                    'judul' => $section5['judul'],
                    'deskripsi' => $section5['deskripsi'],
                    'item' => array_merge($array_lama, $array_baru)
                ];
            } else {
                $data = [
                    'judul' => $section5['judul'],
                    'deskripsi' => $section5['deskripsi'],
                    'item' => $array_lama
                ];
            }

            $video_konten_sosmed->section_5 = json_encode($data);
            $video_konten_sosmed->save();

            Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 5');
            return redirect()->route('razen-studio.admin.video-production.video-konten-sosmed.index');
        } else {
            Alert::error('Gagal Menyimpan!', 'Tidak dapat menyimpan karena tidak ada data');
            return redirect()->route('razen-studio.admin.video-production.video-konten-sosmed.index');
        }
    }

    public function section_5_item_3_store(Request $request)
    {
        $cek = LandingpageRazenstudioVideoProductionVideoKontenSosmed::first();
        if($cek)
        {
            $video_konten_sosmed = LandingpageRazenstudioVideoProductionVideoKontenSosmed::find($cek->id);
            $section5 = json_decode($video_konten_sosmed->section_5, true);
            $array_baru = [];
            $array_lama = [];

            if($request->ikon)
            {
                $ikonExtension = $request->ikon->extension();
                $ikonName =  uniqid().'-'.date("ymd").'.'.$ikonExtension;
                $ikon = Image::make($request->ikon);
                $ikonSize = public_path('images/landingpage_razenstudio/video-production/video-konten-sosmed/'.$ikonName);
                $ikon->save($ikonSize, 100);

                $array_baru[] = [
                    'item' => $request->item,
                    'judul' => $request->judul,
                    'deskripsi' => $request->deskripsi,
                    'ikon' => $ikonName,
                ];
            }

            foreach ($section5['item'] as $value) {
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
                        File::delete(public_path('images/landingpage_razenstudio/video-production/video-konten-sosmed/'.$value['ikon']));
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
                    'judul' => $section5['judul'],
                    'deskripsi' => $section5['deskripsi'],
                    'item' => array_merge($array_lama, $array_baru)
                ];
            } else {
                $data = [
                    'judul' => $section5['judul'],
                    'deskripsi' => $section5['deskripsi'],
                    'item' => $array_lama
                ];
            }

            $video_konten_sosmed->section_5 = json_encode($data);
            $video_konten_sosmed->save();

            Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 5');
            return redirect()->route('razen-studio.admin.video-production.video-konten-sosmed.index');
        } else {
            Alert::error('Gagal Menyimpan!', 'Tidak dapat menyimpan karena tidak ada data');
            return redirect()->route('razen-studio.admin.video-production.video-konten-sosmed.index');
        }
    }

    public function section_5_item_4_store(Request $request)
    {
        $cek = LandingpageRazenstudioVideoProductionVideoKontenSosmed::first();
        if($cek)
        {
            $video_konten_sosmed = LandingpageRazenstudioVideoProductionVideoKontenSosmed::find($cek->id);
            $section5 = json_decode($video_konten_sosmed->section_5, true);
            $array_baru = [];
            $array_lama = [];

            if($request->ikon)
            {
                $ikonExtension = $request->ikon->extension();
                $ikonName =  uniqid().'-'.date("ymd").'.'.$ikonExtension;
                $ikon = Image::make($request->ikon);
                $ikonSize = public_path('images/landingpage_razenstudio/video-production/video-konten-sosmed/'.$ikonName);
                $ikon->save($ikonSize, 100);

                $array_baru[] = [
                    'item' => $request->item,
                    'judul' => $request->judul,
                    'deskripsi' => $request->deskripsi,
                    'ikon' => $ikonName,
                ];
            }

            foreach ($section5['item'] as $value) {
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
                        File::delete(public_path('images/landingpage_razenstudio/video-production/video-konten-sosmed/'.$value['ikon']));
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
                    'judul' => $section5['judul'],
                    'deskripsi' => $section5['deskripsi'],
                    'item' => array_merge($array_lama, $array_baru)
                ];
            } else {
                $data = [
                    'judul' => $section5['judul'],
                    'deskripsi' => $section5['deskripsi'],
                    'item' => $array_lama
                ];
            }

            $video_konten_sosmed->section_5 = json_encode($data);
            $video_konten_sosmed->save();

            Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 5');
            return redirect()->route('razen-studio.admin.video-production.video-konten-sosmed.index');
        } else {
            Alert::error('Gagal Menyimpan!', 'Tidak dapat menyimpan karena tidak ada data');
            return redirect()->route('razen-studio.admin.video-production.video-konten-sosmed.index');
        }
    }

    public function section_5_item_5_store(Request $request)
    {
        $cek = LandingpageRazenstudioVideoProductionVideoKontenSosmed::first();
        if($cek)
        {
            $video_konten_sosmed = LandingpageRazenstudioVideoProductionVideoKontenSosmed::find($cek->id);
            $section5 = json_decode($video_konten_sosmed->section_5, true);
            $array_baru = [];
            $array_lama = [];

            if($request->ikon)
            {
                $ikonExtension = $request->ikon->extension();
                $ikonName =  uniqid().'-'.date("ymd").'.'.$ikonExtension;
                $ikon = Image::make($request->ikon);
                $ikonSize = public_path('images/landingpage_razenstudio/video-production/video-konten-sosmed/'.$ikonName);
                $ikon->save($ikonSize, 100);

                $array_baru[] = [
                    'item' => $request->item,
                    'judul' => $request->judul,
                    'deskripsi' => $request->deskripsi,
                    'ikon' => $ikonName,
                ];
            }

            foreach ($section5['item'] as $value) {
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
                        File::delete(public_path('images/landingpage_razenstudio/video-production/video-konten-sosmed/'.$value['ikon']));
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
                    'judul' => $section5['judul'],
                    'deskripsi' => $section5['deskripsi'],
                    'item' => array_merge($array_lama, $array_baru)
                ];
            } else {
                $data = [
                    'judul' => $section5['judul'],
                    'deskripsi' => $section5['deskripsi'],
                    'item' => $array_lama
                ];
            }

            $video_konten_sosmed->section_5 = json_encode($data);
            $video_konten_sosmed->save();

            Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 5');
            return redirect()->route('razen-studio.admin.video-production.video-konten-sosmed.index');
        } else {
            Alert::error('Gagal Menyimpan!', 'Tidak dapat menyimpan karena tidak ada data');
            return redirect()->route('razen-studio.admin.video-production.video-konten-sosmed.index');
        }
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
            return redirect()->route('razen-studio.admin.video-production.video-konten-sosmed.index');
        }

        $cek =  LandingpageRazenstudioVideoProductionVideoKontenSosmed::first();

        foreach ($request->file('gambar_konten') as $file) {
            $gambarKontenExtension = $file->extension();
            $gambarKontenName = uniqid().'-'.date("ymd").'.'.$gambarKontenExtension;
            $gambarKonten = Image::make($file);
            $gambarKontenSize = public_path('images/landingpage_razenstudio/video-production/video-konten-sosmed/'.$gambarKontenName);
            $gambarKonten->save($gambarKontenSize, 60);

            $data[] = $gambarKontenName;
        }

        $judul_konten = $request->judul_konten;

        $konten = [];

        for ($i=0; $i < count($data); $i++) {
            $konten[] = [
                'id' => uniqid(),
                'judul_konten' => $judul_konten[$i],
                'gambar_konten' => $data[$i]
            ];
        }

        $array = [
            'sub_judul' => $request->sub_judul,
            'judul' => $request->judul,
            'konten' => $konten
        ];

        if($cek)
        {
            $landingpage_razenstudio_video_konten_sosmed =  LandingpageRazenstudioVideoProductionVideoKontenSosmed::find($cek->id);
        } else {
            $landingpage_razenstudio_video_konten_sosmed = new  LandingpageRazenstudioVideoProductionVideoKontenSosmed;
        }
        $landingpage_razenstudio_video_konten_sosmed->section_6 = json_encode($array);
        $landingpage_razenstudio_video_konten_sosmed->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 6');
        return redirect()->route('razen-studio.admin.video-production.video-konten-sosmed.index');
    }

    public function section_6_hapus_satu(Request $request)
    {
        $get =  LandingpageRazenstudioVideoProductionVideoKontenSosmed::first();
        $section6 = json_decode($get->section_6, true);
        $array = [];
        foreach ($section6['konten'] as $value) {
            if($value['id'] != $request->id)
            {
                $array[] = [
                    'id' => $value['id'],
                    'judul_konten' => $value['judul_konten'],
                    'gambar_konten' => $value['gambar_konten']
                ];
            } else {
                File::delete(public_path('images/landingpage_razenstudio/video-production/video-konten-sosmed/'.$value['gambar_konten']));
            }
        }

        $data = [
            'sub_judul' => $section6['sub_judul'],
            'judul' => $section6['judul'],
            'konten' => $array
        ];

        $landingpage_razenstudio_video_konten_sosmed =  LandingpageRazenstudioVideoProductionVideoKontenSosmed::find($get->id);
        $landingpage_razenstudio_video_konten_sosmed->section_6 = json_encode($data);
        $landingpage_razenstudio_video_konten_sosmed->save();

        return response()->json('berhasil');
    }

    public function section_6_edit(Request $request)
    {
        $get =  LandingpageRazenstudioVideoProductionVideoKontenSosmed::first();
        $section6 = json_decode($get->section_6, true);

        if($request->judul_konten)
        {
            foreach ($request->file('gambar_konten') as $file) {
                $gambarKontenExtension = $file->extension();
                $gambarKontenName = uniqid().'-'.date("ymd").'.'.$gambarKontenExtension;
                $gambarKonten = Image::make($file);
                $gambarKontenSize = public_path('images/landingpage_razenstudio/video-production/video-konten-sosmed/'.$gambarKontenName);
                $gambarKonten->save($gambarKontenSize, 60);

                $gambarKontenBaru[] = $gambarKontenName;
            }

            $judul_konten_baru = $request->judul_konten;

            $array_baru = [];
            for ($i=0; $i < count($gambarKontenBaru); $i++) {
                $array_baru[] = [
                    'id' => uniqid(),
                    'judul_konten' => $judul_konten_baru[$i],
                    'gambar_konten' => $gambarKontenBaru[$i]
                ];
            }

            $array_lama = [];
            foreach ($section6['konten'] as $value) {
                $array_lama[] = [
                    'id' => $value['id'],
                    'judul_konten' => $value['judul_konten'],
                    'gambar_konten' => $value['gambar_konten'],
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
                    'gambar_konten' => $value['gambar_konten'],
                ];
            }

            $data = [
                'sub_judul' => $request->sub_judul,
                'judul' => $request->judul,
                'konten' => $array_lama
            ];
        }

        $landingpage_razenstudio_video_konten_sosmed =  LandingpageRazenstudioVideoProductionVideoKontenSosmed::find($get->id);
        $landingpage_razenstudio_video_konten_sosmed->section_6 = json_encode($data);
        $landingpage_razenstudio_video_konten_sosmed->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 6');
        return redirect()->route('razen-studio.admin.video-production.video-konten-sosmed.index');
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
            return redirect()->route('razen-studio.admin.video-production.video-konten-sosmed.index');
        }

        $cek = LandingpageRazenstudioVideoProductionVideoKontenSosmed::first();
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
            $landingpage_razenstudio_video_animasi = LandingpageRazenstudioVideoProductionVideoKontenSosmed::find($cek->id);
        } else {
            $landingpage_razenstudio_video_animasi = new LandingpageRazenstudioVideoProductionVideoKontenSosmed;
        }
        $landingpage_razenstudio_video_animasi->section_7 = json_encode($array);
        $landingpage_razenstudio_video_animasi->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 7');
        return redirect()->route('razen-studio.admin.video-production.video-konten-sosmed.index');
    }

    public function section_7_hapus_satu(Request $request)
    {
        $get = LandingpageRazenstudioVideoProductionVideoKontenSosmed::first();
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

        $landingpage_razenstudio_video_animasi = LandingpageRazenstudioVideoProductionVideoKontenSosmed::find($get->id);
        $landingpage_razenstudio_video_animasi->section_7 = json_encode($data);
        $landingpage_razenstudio_video_animasi->save();

        return response()->json('berhasil');
    }

    public function section_7_edit(Request $request)
    {
        $get = LandingpageRazenstudioVideoProductionVideoKontenSosmed::first();
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

        $landingpage_razenstudio_video_animasi = LandingpageRazenstudioVideoProductionVideoKontenSosmed::find($get->id);
        $landingpage_razenstudio_video_animasi->section_7 = json_encode($data);
        $landingpage_razenstudio_video_animasi->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 7');
        return redirect()->route('razen-studio.admin.video-production.video-konten-sosmed.index');
    }
    //Section 7 End
}
