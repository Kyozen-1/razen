<?php

namespace App\Http\Controllers\RazenStudio\Admin\SearchEngineOptimization;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;
use DB;
use Validator;
use Carbon\Carbon;
use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioSearchEngineOptimization;
use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioItemReviewSearchEngineOptimization;

class AturController extends Controller
{
    public function index()
    {
        return view('razen-studio.admin.landing-page.search-engine-optimization.atur.index');
    }

    public function section_1_store(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'sub_judul' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-studio.admin.search-engine-optimization.atur.index');
        }

        $cek = LandingpageRazenstudioSearchEngineOptimization::first();
        if($cek)
        {
            $landingpage_razenstudio_search_engine_optimization = LandingpageRazenstudioSearchEngineOptimization::find($cek->id);
            if($landingpage_razenstudio_search_engine_optimization->section_1)
            {
                $get_section_1 = json_decode($landingpage_razenstudio_search_engine_optimization->section_1, true);

                if ($request->gambar) {
                    $gambarName = $get_section_1['gambar'];
                    File::delete(public_path('images/landingpage_razenstudio/search-engine-optimization/'.$gambarName));

                    $gambarExtension = $request->gambar->extension();
                    $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                    $gambar = Image::make($request->gambar);
                    $gambarSize = public_path('images/landingpage_razenstudio/search-engine-optimization/'.$gambarName);
                    $gambar->save($gambarSize, 100);
                } else {
                    $gambarName = $get_section_1['gambar'];
                }
            } else {
                $gambarExtension = $request->gambar->extension();
                $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                $gambar = Image::make($request->gambar);
                $gambarSize = public_path('images/landingpage_razenstudio/search-engine-optimization/'.$gambarName);
                $gambar->save($gambarSize, 100);
            }
        } else {
            $landingpage_razenstudio_search_engine_optimization = new LandingpageRazenstudioSearchEngineOptimization;

            $gambarExtension = $request->gambar->extension();
            $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
            $gambar = Image::make($request->gambar);
            $gambarSize = public_path('images/landingpage_razenstudio/search-engine-optimization/'.$gambarName);
            $gambar->save($gambarSize, 100);
        }

        $array = [
            'sub_judul' => $request->sub_judul,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $gambarName
        ];

        $landingpage_razenstudio_search_engine_optimization->section_1 = json_encode($array);
        $landingpage_razenstudio_search_engine_optimization->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 1');
        return redirect()->route('razen-studio.admin.search-engine-optimization.atur.index');
    }

    //Section 2 Start
    public function section_2_store(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'sub_judul' => 'required',
            'judul' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-studio.admin.search-engine-optimization.atur.index');
        }

        $judul_konten = $request->judul_konten;
        $deskripsi_konten = $request->deskripsi_konten;
        $logo_konten = $request->logo_konten;
        $array_konten = [];
        $array_gambar = [];

        foreach ($request->file('logo_konten') as $file) {
            $gambarExtension = $file->extension();
            $gambarName = uniqid().'-'.date("ymd").'.'.$gambarExtension;
            $gambar = Image::make($file);
            $gambarSize = public_path('images/landingpage_razenstudio/search-engine-optimization/'.$gambarName);
            $gambar->save($gambarSize, 60);

            $array_gambar[] = $gambarName;
        }

        for ($i=0; $i < count($array_gambar); $i++) {
            $array_konten[] = [
                'id' => uniqid(),
                'judul_konten' => $judul_konten[$i],
                'deskripsi_konten' => $deskripsi_konten[$i],
                'logo_konten' => $array_gambar[$i]
            ];
        }

        $array_data = [
            'sub_judul' => $request->sub_judul,
            'judul' => $request->judul,
            'konten' => $array_konten
        ];

        $cek = LandingpageRazenstudioSearchEngineOptimization::first();
        if($cek)
        {
            $landingpage_razenstudio_search_engine_optimization  = LandingpageRazenstudioSearchEngineOptimization::find($cek->id);
        } else {
            $landingpage_razenstudio_search_engine_optimization  = new LandingpageRazenstudioSearchEngineOptimization;
        }

        $landingpage_razenstudio_search_engine_optimization ->section_2 = json_encode($array_data);
        $landingpage_razenstudio_search_engine_optimization ->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 2');
        return redirect()->route('razen-studio.admin.search-engine-optimization.atur.index');
    }

    public function section_2_edit(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'sub_judul' => 'required',
            'judul' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-studio.admin.search-engine-optimization.atur.index');
        }

        $judul_konten = $request->judul_konten;
        $deskripsi_konten = $request->deskripsi_konten;
        $logo_konten = $request->logo_konten;
        $array_baru = [];
        $array_gambar = [];

        foreach ($request->file('logo_konten') as $file) {
            $gambarExtension = $file->extension();
            $gambarName = uniqid().'-'.date("ymd").'.'.$gambarExtension;
            $gambar = Image::make($file);
            $gambarSize = public_path('images/landingpage_razenstudio/search-engine-optimization/'.$gambarName);
            $gambar->save($gambarSize, 60);

            $array_gambar[] = $gambarName;
        }

        for ($i=0; $i < count($array_gambar); $i++) {
            $array_baru[] = [
                'id' => uniqid(),
                'judul_konten' => $judul_konten[$i],
                'deskripsi_konten' => $deskripsi_konten[$i],
                'logo_konten' => $array_gambar[$i]
            ];
        }

        $get = LandingpageRazenstudioSearchEngineOptimization::first();
        $section2 = json_decode($get->section_2, true);
        $array_lama = [];

        $array_lama = [];
        foreach ($section2['konten'] as $value) {
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

        $landingpage_razenstudio_search_engine_optimization  = LandingpageRazenstudioSearchEngineOptimization::find($get->id);
        $landingpage_razenstudio_search_engine_optimization ->section_2 = json_encode($array_data);
        $landingpage_razenstudio_search_engine_optimization ->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 2');
        return redirect()->route('razen-studio.admin.search-engine-optimization.atur.index');
    }

    public function section_2_hapus_satu(Request $request)
    {
        $get = LandingpageRazenstudioSearchEngineOptimization::first();
        $section2 = json_decode($get->section_2, true);
        $array_konten = [];
        foreach ($section2['konten'] as $value) {
            if($value['id'] == $request->id)
            {
                File::delete(public_path('images/landingpage_razenstudio/search-engine-optimization/'.$value['logo_konten']));
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
            'sub_judul' => $section2['sub_judul'],
            'judul' => $section2['judul'],
            'konten' => $array_konten
        ];

        $landingpage_razenstudio_search_engine_optimization  = LandingpageRazenstudioSearchEngineOptimization::find($get->id);
        $landingpage_razenstudio_search_engine_optimization ->section_2 = json_encode($data);
        $landingpage_razenstudio_search_engine_optimization ->save();

        return response()->json('berhasil');
    }
    //Section 2 End

    public function item_store(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'studi_kasus' => 'required',
            'goals' => 'required',
            'result' => 'required',
            'review' => 'required',
            'nama_reviewer' => 'required',
            'jabatan_reviewer' => 'required',
            'bg_review' => 'required',
            'gambar' => 'required',
            'logo_website' => 'required',
            'foto_reviewer' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-studio.admin.search-engine-optimization.atur.index');
        }

        $gambarExtension = $request->gambar->extension();
        $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
        $gambar = Image::make($request->gambar);
        $gambarSize = public_path('images/landingpage_razenstudio/search-engine-optimization/'.$gambarName);
        $gambar->save($gambarSize, 100);

        $logoWebsiteExtension = $request->logo_website->extension();
        $logoWebsiteName =  uniqid().'-'.date("ymd").'.'.$logoWebsiteExtension;
        $logoWebsite = Image::make($request->logo_website);
        $logoWebsiteSize = public_path('images/landingpage_razenstudio/search-engine-optimization/'.$logoWebsiteName);
        $logoWebsite->save($logoWebsiteSize, 100);

        $fotoReviewerExtension = $request->foto_reviewer->extension();
        $fotoReviewerName =  uniqid().'-'.date("ymd").'.'.$fotoReviewerExtension;
        $fotoReviewer = Image::make($request->foto_reviewer);
        $fotoReviewerSize = public_path('images/landingpage_razenstudio/search-engine-optimization/'.$fotoReviewerName);
        $fotoReviewer->save($fotoReviewerSize, 100);

        $review = [
            'review' => $request->review,
            'nama_reviewer' => $request->nama_reviewer,
            'jabatan_reviewer' => $request->jabatan_reviewer,
            'logo_website' => $logoWebsiteName,
            'foto_reviewer' => $fotoReviewerName,
        ];

        $item_review = new LandingpageRazenstudioItemReviewSearchEngineOptimization;
        $item_review->studi_kasus = $request->studi_kasus;
        $item_review->goals = $request->goals;
        $item_review->result = $request->result;
        $item_review->gambar = $gambarName;
        $item_review->bg_review = $request->bg_review;
        $item_review->review = json_encode($review);
        $item_review->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 1');
        return redirect()->route('razen-studio.admin.search-engine-optimization.atur.index');
    }

    public function item_hapus_satu(Request $request)
    {
        $get = LandingpageRazenstudioItemReviewSearchEngineOptimization::find($request->id);
        $review = json_decode($get->review, true);

        File::delete(public_path('images/landingpage_razenstudio/search-engine-optimization/'.$get->gambar));
        File::delete(public_path('images/landingpage_razenstudio/search-engine-optimization/'.$review['logo_website']));
        File::delete(public_path('images/landingpage_razenstudio/search-engine-optimization/'.$review['foto_reviewer']));

        $get->delete();
        return response()->json('berhasil');
    }

    //Section 3 Start
    public function section_3_store(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'judul' => 'required',
            'deskripsi' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-studio.admin.search-engine-optimization.atur.index');
        }

        $cek = LandingpageRazenstudioSearchEngineOptimization::first();
        if($cek)
        {
            $landingpage_razenstudio_desain_promosi_digital = LandingpageRazenstudioSearchEngineOptimization::find($cek->id);
            $section3 = json_decode($landingpage_razenstudio_desain_promosi_digital->section_3, true);
            $array_item = [];
            if($section3 != null)
            {
                foreach ($section3['item'] as $value) {
                    if($value['item'] == 'item_1')
                    {
                        $array_item[] = [
                            'item' => $value['item'],
                            'harga' => $value['harga'],
                            'deskripsi' => $value['deskripsi'],
                            'no_wa_konsultasi' => $value['no_wa_konsultasi'],
                            'mini_text' => $value['mini_text'],
                        ];
                    }
                    if($value['item'] == 'item_2')
                    {
                        $array_item[] = [
                            'item' => $value['item'],
                            'judul' => $value['judul'],
                            'deskripsi' => $value['deskripsi'],
                            'ikon' => $value['ikon'],
                        ];
                    }
                    if($value['item'] == 'item_3')
                    {
                        $array_item[] = [
                            'item' => $value['item'],
                            'judul' => $value['judul'],
                            'deskripsi' => $value['deskripsi'],
                            'ikon' => $value['ikon'],
                        ];
                    }
                    if($value['item'] == 'item_4')
                    {
                        $array_item[] = [
                            'item' => $value['item'],
                            'judul' => $value['judul'],
                            'deskripsi' => $value['deskripsi'],
                            'ikon' => $value['ikon'],
                        ];
                    }
                    if($value['item'] == 'item_5')
                    {
                        $array_item[] = [
                            'item' => $value['item'],
                            'judul' => $value['judul'],
                            'deskripsi' => $value['deskripsi'],
                            'ikon' => $value['ikon'],
                        ];
                    }
                }
            }
            $array = [
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
                'item' => $array_item
            ];
        } else {
            $landingpage_razenstudio_desain_promosi_digital = new LandingpageRazenstudioSearchEngineOptimization;

            $array = [
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
                'item' => []
            ];
        }
        $landingpage_razenstudio_desain_promosi_digital->section_3 = json_encode($array);
        $landingpage_razenstudio_desain_promosi_digital->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 3');
        return redirect()->route('razen-studio.admin.search-engine-optimization.atur.index');
    }

    public function section_3_item_1_store(Request $request)
    {
        $cek = LandingpageRazenstudioSearchEngineOptimization::first();
        if($cek)
        {
            $video_konten_sosmed = LandingpageRazenstudioSearchEngineOptimization::find($cek->id);
            $section3 = json_decode($video_konten_sosmed->section_3, true);
            $array_baru = [];
            $array_lama = [];

            $array_baru[] = [
                'item' => $request->item,
                'harga' => $request->harga,
                'deskripsi' => $request->deskripsi,
                'no_wa_konsultasi' => $request->no_wa_konsultasi,
                'mini_text' => $request->mini_text,
            ];

            foreach ($section3['item'] as $value) {
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
                'judul' => $section3['judul'],
                'deskripsi' => $section3['deskripsi'],
                'item' => array_merge($array_lama, $array_baru)
            ];

            $video_konten_sosmed->section_3 = json_encode($data);
            $video_konten_sosmed->save();

            Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 3');
            return redirect()->route('razen-studio.admin.search-engine-optimization.atur.index');
        } else {
            Alert::error('Gagal Menyimpan!', 'Tidak dapat menyimpan karena tidak ada data');
            return redirect()->route('razen-studio.admin.search-engine-optimization.atur.index');
        }
    }

    public function section_3_item_2_store(Request $request)
    {
        $cek = LandingpageRazenstudioSearchEngineOptimization::first();
        if($cek)
        {
            $video_konten_sosmed = LandingpageRazenstudioSearchEngineOptimization::find($cek->id);
            $section3 = json_decode($video_konten_sosmed->section_3, true);
            $array_baru = [];
            $array_lama = [];

            if($request->ikon)
            {
                $ikonExtension = $request->ikon->extension();
                $ikonName =  uniqid().'-'.date("ymd").'.'.$ikonExtension;
                $ikon = Image::make($request->ikon);
                $ikonSize = public_path('images/landingpage_razenstudio/search-engine-optimization/'.$ikonName);
                $ikon->save($ikonSize, 100);

                $array_baru[] = [
                    'item' => $request->item,
                    'judul' => $request->judul,
                    'deskripsi' => $request->deskripsi,
                    'ikon' => $ikonName,
                ];
            }

            foreach ($section3['item'] as $value) {
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
                        File::delete(public_path('images/landingpage_razenstudio/search-engine-optimization/'.$value['ikon']));
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
                    'judul' => $section3['judul'],
                    'deskripsi' => $section3['deskripsi'],
                    'item' => array_merge($array_lama, $array_baru)
                ];
            } else {
                $data = [
                    'judul' => $section3['judul'],
                    'deskripsi' => $section3['deskripsi'],
                    'item' => $array_lama
                ];
            }

            $video_konten_sosmed->section_3 = json_encode($data);
            $video_konten_sosmed->save();

            Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 3');
            return redirect()->route('razen-studio.admin.search-engine-optimization.atur.index');
        } else {
            Alert::error('Gagal Menyimpan!', 'Tidak dapat menyimpan karena tidak ada data');
            return redirect()->route('razen-studio.admin.search-engine-optimization.atur.index');
        }
    }

    public function section_3_item_3_store(Request $request)
    {
        $cek = LandingpageRazenstudioSearchEngineOptimization::first();
        if($cek)
        {
            $video_konten_sosmed = LandingpageRazenstudioSearchEngineOptimization::find($cek->id);
            $section3 = json_decode($video_konten_sosmed->section_3, true);
            $array_baru = [];
            $array_lama = [];

            if($request->ikon)
            {
                $ikonExtension = $request->ikon->extension();
                $ikonName =  uniqid().'-'.date("ymd").'.'.$ikonExtension;
                $ikon = Image::make($request->ikon);
                $ikonSize = public_path('images/landingpage_razenstudio/search-engine-optimization/'.$ikonName);
                $ikon->save($ikonSize, 100);

                $array_baru[] = [
                    'item' => $request->item,
                    'judul' => $request->judul,
                    'deskripsi' => $request->deskripsi,
                    'ikon' => $ikonName,
                ];
            }

            foreach ($section3['item'] as $value) {
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
                        File::delete(public_path('images/landingpage_razenstudio/search-engine-optimization/'.$value['ikon']));
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
                    'judul' => $section3['judul'],
                    'deskripsi' => $section3['deskripsi'],
                    'item' => array_merge($array_lama, $array_baru)
                ];
            } else {
                $data = [
                    'judul' => $section3['judul'],
                    'deskripsi' => $section3['deskripsi'],
                    'item' => $array_lama
                ];
            }

            $video_konten_sosmed->section_3 = json_encode($data);
            $video_konten_sosmed->save();

            Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 3');
            return redirect()->route('razen-studio.admin.search-engine-optimization.atur.index');
        } else {
            Alert::error('Gagal Menyimpan!', 'Tidak dapat menyimpan karena tidak ada data');
            return redirect()->route('razen-studio.admin.search-engine-optimization.atur.index');
        }
    }

    public function section_3_item_4_store(Request $request)
    {
        $cek = LandingpageRazenstudioSearchEngineOptimization::first();
        if($cek)
        {
            $video_konten_sosmed = LandingpageRazenstudioSearchEngineOptimization::find($cek->id);
            $section3 = json_decode($video_konten_sosmed->section_3, true);
            $array_baru = [];
            $array_lama = [];

            if($request->ikon)
            {
                $ikonExtension = $request->ikon->extension();
                $ikonName =  uniqid().'-'.date("ymd").'.'.$ikonExtension;
                $ikon = Image::make($request->ikon);
                $ikonSize = public_path('images/landingpage_razenstudio/search-engine-optimization/'.$ikonName);
                $ikon->save($ikonSize, 100);

                $array_baru[] = [
                    'item' => $request->item,
                    'judul' => $request->judul,
                    'deskripsi' => $request->deskripsi,
                    'ikon' => $ikonName,
                ];
            }

            foreach ($section3['item'] as $value) {
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
                        File::delete(public_path('images/landingpage_razenstudio/search-engine-optimization/'.$value['ikon']));
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
                    'judul' => $section3['judul'],
                    'deskripsi' => $section3['deskripsi'],
                    'item' => array_merge($array_lama, $array_baru)
                ];
            } else {
                $data = [
                    'judul' => $section3['judul'],
                    'deskripsi' => $section3['deskripsi'],
                    'item' => $array_lama
                ];
            }

            $video_konten_sosmed->section_3 = json_encode($data);
            $video_konten_sosmed->save();

            Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 3');
            return redirect()->route('razen-studio.admin.search-engine-optimization.atur.index');
        } else {
            Alert::error('Gagal Menyimpan!', 'Tidak dapat menyimpan karena tidak ada data');
            return redirect()->route('razen-studio.admin.search-engine-optimization.atur.index');
        }
    }

    public function section_3_item_5_store(Request $request)
    {
        $cek = LandingpageRazenstudioSearchEngineOptimization::first();
        if($cek)
        {
            $video_konten_sosmed = LandingpageRazenstudioSearchEngineOptimization::find($cek->id);
            $section3 = json_decode($video_konten_sosmed->section_3, true);
            $array_baru = [];
            $array_lama = [];

            if($request->ikon)
            {
                $ikonExtension = $request->ikon->extension();
                $ikonName =  uniqid().'-'.date("ymd").'.'.$ikonExtension;
                $ikon = Image::make($request->ikon);
                $ikonSize = public_path('images/landingpage_razenstudio/search-engine-optimization/'.$ikonName);
                $ikon->save($ikonSize, 100);

                $array_baru[] = [
                    'item' => $request->item,
                    'judul' => $request->judul,
                    'deskripsi' => $request->deskripsi,
                    'ikon' => $ikonName,
                ];
            }

            foreach ($section3['item'] as $value) {
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
                        File::delete(public_path('images/landingpage_razenstudio/search-engine-optimization/'.$value['ikon']));
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
                    'judul' => $section3['judul'],
                    'deskripsi' => $section3['deskripsi'],
                    'item' => array_merge($array_lama, $array_baru)
                ];
            } else {
                $data = [
                    'judul' => $section3['judul'],
                    'deskripsi' => $section3['deskripsi'],
                    'item' => $array_lama
                ];
            }

            $video_konten_sosmed->section_3 = json_encode($data);
            $video_konten_sosmed->save();

            Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 3');
            return redirect()->route('razen-studio.admin.search-engine-optimization.atur.index');
        } else {
            Alert::error('Gagal Menyimpan!', 'Tidak dapat menyimpan karena tidak ada data');
            return redirect()->route('razen-studio.admin.search-engine-optimization.atur.index');
        }
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
            return redirect()->route('razen-studio.admin.search-engine-optimization.atur.index');
        }

        $judul_konten = $request->judul_konten;
        $deskripsi_konten = $request->deskripsi_konten;
        $logo_konten = $request->logo_konten;
        $harga_konten = $request->harga_konten;
        $array_konten = [];
        $array_logo = [];

        foreach ($request->file('logo_konten') as $file) {
            $gambarExtension = $file->extension();
            $gambarName = uniqid().'-'.date("ymd").'.'.$gambarExtension;
            $gambar = Image::make($file);
            $gambarSize = public_path('images/landingpage_razenstudio/search-engine-optimization/'.$gambarName);
            $gambar->save($gambarSize, 60);

            $array_logo[] = $gambarName;
        }

        for ($i=0; $i < count($array_logo); $i++) {
            $array_konten[] = [
                'id' => uniqid(),
                'judul_konten' => $judul_konten[$i],
                'deskripsi_konten' => $deskripsi_konten[$i],
                'harga_konten' => $harga_konten[$i],
                'logo_konten' => $array_logo[$i]
            ];
        }

        $array_data = [
            'sub_judul' => $request->sub_judul,
            'judul' => $request->judul,
            'konten' => $array_konten
        ];

        $cek = LandingpageRazenstudioSearchEngineOptimization::first();
        if($cek)
        {
            $landingpage_razenstudio_search_engine_optimization  = LandingpageRazenstudioSearchEngineOptimization::find($cek->id);
        } else {
            $landingpage_razenstudio_search_engine_optimization  = new LandingpageRazenstudioSearchEngineOptimization;
        }

        $landingpage_razenstudio_search_engine_optimization->section_4 = json_encode($array_data);
        $landingpage_razenstudio_search_engine_optimization->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 4');
        return redirect()->route('razen-studio.admin.search-engine-optimization.atur.index');
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
            return redirect()->route('razen-studio.admin.search-engine-optimization.atur.index');
        }

        $judul_konten = $request->judul_konten;
        $deskripsi_konten = $request->deskripsi_konten;
        $logo_konten = $request->logo_konten;
        $harga_konten = $request->harga_konten;
        $array_baru = [];
        $array_logo = [];

        foreach ($request->file('logo_konten') as $file) {
            $gambarExtension = $file->extension();
            $gambarName = uniqid().'-'.date("ymd").'.'.$gambarExtension;
            $gambar = Image::make($file);
            $gambarSize = public_path('images/landingpage_razenstudio/search-engine-optimization/'.$gambarName);
            $gambar->save($gambarSize, 60);

            $array_logo[] = $gambarName;
        }

        for ($i=0; $i < count($array_logo); $i++) {
            $array_baru[] = [
                'id' => uniqid(),
                'judul_konten' => $judul_konten[$i],
                'deskripsi_konten' => $deskripsi_konten[$i],
                'harga_konten' => $harga_konten[$i],
                'logo_konten' => $array_logo[$i]
            ];
        }

        $get = LandingpageRazenstudioSearchEngineOptimization::first();
        $section4 = json_decode($get->section_4, true);
        $array_lama = [];

        $array_lama = [];
        foreach ($section4['konten'] as $value) {
            $array_lama[] = [
                'id' => $value['id'],
                'judul_konten' => $value['judul_konten'],
                'deskripsi_konten' => $value['deskripsi_konten'],
                'harga_konten' => $value['harga_konten'],
                'logo_konten' => $value['logo_konten']
            ];
        }

        $array_data = [
            'sub_judul' => $request->sub_judul,
            'judul' => $request->judul,
            'konten' => array_merge($array_lama, $array_baru)
        ];

        $landingpage_razenstudio_search_engine_optimization  = LandingpageRazenstudioSearchEngineOptimization::find($get->id);
        $landingpage_razenstudio_search_engine_optimization ->section_4 = json_encode($array_data);
        $landingpage_razenstudio_search_engine_optimization ->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 4');
        return redirect()->route('razen-studio.admin.search-engine-optimization.atur.index');
    }

    public function section_4_hapus_satu(Request $request)
    {
        $get = LandingpageRazenstudioSearchEngineOptimization::first();
        $section4 = json_decode($get->section_4, true);
        $array_konten = [];
        foreach ($section4['konten'] as $value) {
            if($value['id'] == $request->id)
            {
                File::delete(public_path('images/landingpage_razenstudio/search-engine-optimization/'.$value['logo_konten']));
            } else {
                $array_konten[] = [
                    'id' => $value['id'],
                    'judul_konten' => $value['judul_konten'],
                    'deskripsi_konten' => $value['deskripsi_konten'],
                    'harga_konten' => $value['harga_konten'],
                    'logo_konten' => $value['logo_konten']
                ];
            }
        }

        $data = [
            'sub_judul' => $section4['sub_judul'],
            'judul' => $section4['judul'],
            'konten' => $array_konten
        ];

        $landingpage_razenstudio_search_engine_optimization  = LandingpageRazenstudioSearchEngineOptimization::find($get->id);
        $landingpage_razenstudio_search_engine_optimization ->section_4 = json_encode($data);
        $landingpage_razenstudio_search_engine_optimization ->save();

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
            return redirect()->route('razen-studio.admin.search-engine-optimization.atur.index');
        }

        $judul_konten = $request->judul_konten;
        $deskripsi_konten = $request->deskripsi_konten;
        $logo_konten = $request->logo_konten;
        $array_konten = [];
        $array_gambar = [];

        foreach ($request->file('logo_konten') as $file) {
            $gambarExtension = $file->extension();
            $gambarName = uniqid().'-'.date("ymd").'.'.$gambarExtension;
            $gambar = Image::make($file);
            $gambarSize = public_path('images/landingpage_razenstudio/search-engine-optimization/'.$gambarName);
            $gambar->save($gambarSize, 60);

            $array_gambar[] = $gambarName;
        }

        for ($i=0; $i < count($array_gambar); $i++) {
            $array_konten[] = [
                'id' => uniqid(),
                'judul_konten' => $judul_konten[$i],
                'deskripsi_konten' => $deskripsi_konten[$i],
                'logo_konten' => $array_gambar[$i]
            ];
        }

        $array_data = [
            'sub_judul' => $request->sub_judul,
            'judul' => $request->judul,
            'konten' => $array_konten
        ];

        $cek = LandingpageRazenstudioSearchEngineOptimization::first();
        if($cek)
        {
            $landingpage_razenstudio_search_engine_optimization  = LandingpageRazenstudioSearchEngineOptimization::find($cek->id);
        } else {
            $landingpage_razenstudio_search_engine_optimization  = new LandingpageRazenstudioSearchEngineOptimization;
        }

        $landingpage_razenstudio_search_engine_optimization ->section_5 = json_encode($array_data);
        $landingpage_razenstudio_search_engine_optimization ->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 5');
        return redirect()->route('razen-studio.admin.search-engine-optimization.atur.index');
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
            return redirect()->route('razen-studio.admin.search-engine-optimization.atur.index');
        }

        $judul_konten = $request->judul_konten;
        $deskripsi_konten = $request->deskripsi_konten;
        $logo_konten = $request->logo_konten;
        $array_baru = [];
        $array_gambar = [];

        foreach ($request->file('logo_konten') as $file) {
            $gambarExtension = $file->extension();
            $gambarName = uniqid().'-'.date("ymd").'.'.$gambarExtension;
            $gambar = Image::make($file);
            $gambarSize = public_path('images/landingpage_razenstudio/search-engine-optimization/'.$gambarName);
            $gambar->save($gambarSize, 60);

            $array_gambar[] = $gambarName;
        }

        for ($i=0; $i < count($array_gambar); $i++) {
            $array_baru[] = [
                'id' => uniqid(),
                'judul_konten' => $judul_konten[$i],
                'deskripsi_konten' => $deskripsi_konten[$i],
                'logo_konten' => $array_gambar[$i]
            ];
        }

        $get = LandingpageRazenstudioSearchEngineOptimization::first();
        $section5 = json_decode($get->section_5, true);
        $array_lama = [];

        $array_lama = [];
        foreach ($section5['konten'] as $value) {
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

        $landingpage_razenstudio_search_engine_optimization  = LandingpageRazenstudioSearchEngineOptimization::find($get->id);
        $landingpage_razenstudio_search_engine_optimization ->section_5 = json_encode($array_data);
        $landingpage_razenstudio_search_engine_optimization ->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 5');
        return redirect()->route('razen-studio.admin.search-engine-optimization.atur.index');
    }

    public function section_5_hapus_satu(Request $request)
    {
        $get = LandingpageRazenstudioSearchEngineOptimization::first();
        $section5 = json_decode($get->section_5, true);
        $array_konten = [];
        foreach ($section5['konten'] as $value) {
            if($value['id'] == $request->id)
            {
                File::delete(public_path('images/landingpage_razenstudio/search-engine-optimization/'.$value['logo_konten']));
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
            'sub_judul' => $section5['sub_judul'],
            'judul' => $section5['judul'],
            'konten' => $array_konten
        ];

        $landingpage_razenstudio_search_engine_optimization  = LandingpageRazenstudioSearchEngineOptimization::find($get->id);
        $landingpage_razenstudio_search_engine_optimization ->section_5 = json_encode($data);
        $landingpage_razenstudio_search_engine_optimization ->save();

        return response()->json('berhasil');
    }
    //Section 5 End

    public function section_6_store(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'nama_reviewer' => 'required',
            'jabatan_reviewer' => 'required',
            'deskripsi' => 'required',
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-studio.admin.search-engine-optimization.atur.index');
        }

        $cek = LandingpageRazenstudioSearchEngineOptimization::first();
        if($cek)
        {
            $landingpage_razenstudio_search_engine_optimization = LandingpageRazenstudioSearchEngineOptimization::find($cek->id);
            if($landingpage_razenstudio_search_engine_optimization->section_6)
            {
                $get_section_6 = json_decode($landingpage_razenstudio_search_engine_optimization->section_6, true);

                if ($request->gambar) {
                    $gambarName = $get_section_6['gambar'];
                    File::delete(public_path('images/landingpage_razenstudio/search-engine-optimization/'.$gambarName));

                    $gambarExtension = $request->gambar->extension();
                    $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                    $gambar = Image::make($request->gambar);
                    $gambarSize = public_path('images/landingpage_razenstudio/search-engine-optimization/'.$gambarName);
                    $gambar->save($gambarSize, 100);
                } else {
                    $gambarName = $get_section_6['gambar'];
                }
            } else {
                $gambarExtension = $request->gambar->extension();
                $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                $gambar = Image::make($request->gambar);
                $gambarSize = public_path('images/landingpage_razenstudio/search-engine-optimization/'.$gambarName);
                $gambar->save($gambarSize, 100);
            }
        } else {
            $landingpage_razenstudio_search_engine_optimization = new LandingpageRazenstudioSearchEngineOptimization;

            $gambarExtension = $request->gambar->extension();
            $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
            $gambar = Image::make($request->gambar);
            $gambarSize = public_path('images/landingpage_razenstudio/search-engine-optimization/'.$gambarName);
            $gambar->save($gambarSize, 100);
        }

        $array = [
            'nama_reviewer' => $request->nama_reviewer,
            'jabatan_reviewer' => $request->jabatan_reviewer,
            'deskripsi' => $request->deskripsi,
            'gambar' => $gambarName
        ];

        $landingpage_razenstudio_search_engine_optimization->section_6 = json_encode($array);
        $landingpage_razenstudio_search_engine_optimization->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 6');
        return redirect()->route('razen-studio.admin.search-engine-optimization.atur.index');
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
            return redirect()->route('razen-studio.admin.search-engine-optimization.atur.index');
        }

        $cek = LandingpageRazenstudioSearchEngineOptimization::first();
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
            $landingpage_razenstudio_search_engine_optimization = LandingpageRazenstudioSearchEngineOptimization::find($cek->id);
        } else {
            $landingpage_razenstudio_search_engine_optimization = new LandingpageRazenstudioSearchEngineOptimization;
        }
        $landingpage_razenstudio_search_engine_optimization->section_7 = json_encode($array);
        $landingpage_razenstudio_search_engine_optimization->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 7');
        return redirect()->route('razen-studio.admin.search-engine-optimization.atur.index');
    }

    public function section_7_hapus_satu(Request $request)
    {
        $get = LandingpageRazenstudioSearchEngineOptimization::first();
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

        $landingpage_razenstudio_search_engine_optimization = LandingpageRazenstudioSearchEngineOptimization::find($get->id);
        $landingpage_razenstudio_search_engine_optimization->section_7 = json_encode($data);
        $landingpage_razenstudio_search_engine_optimization->save();

        return response()->json('berhasil');
    }

    public function section_7_edit(Request $request)
    {
        $get = LandingpageRazenstudioSearchEngineOptimization::first();
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

        $landingpage_razenstudio_search_engine_optimization = LandingpageRazenstudioSearchEngineOptimization::find($get->id);
        $landingpage_razenstudio_search_engine_optimization->section_7 = json_encode($data);
        $landingpage_razenstudio_search_engine_optimization->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 7');
        return redirect()->route('razen-studio.admin.search-engine-optimization.atur.index');
    }
    //Section 7 End
}
