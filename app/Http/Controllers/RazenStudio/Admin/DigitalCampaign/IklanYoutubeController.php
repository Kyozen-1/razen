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
use App\Models\RazenStudio\LandingPage\DigitalCampaign\LandingpageRazenstudioIklanYoutube;

class IklanYoutubeController extends Controller
{
    public function index()
    {
        return view('razen-studio.admin.landing-page.digital-campaign.iklan-youtube.index');
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
            return redirect()->route('razen-studio.admin.digital-campaign.iklan-youtube.index');
        }

        $cek = LandingpageRazenstudioIklanYoutube::first();
        if($cek)
        {
            $landingpage_razenstudio_iklan_youtube = LandingpageRazenstudioIklanYoutube::find($cek->id);
        } else {
            $landingpage_razenstudio_iklan_youtube = new LandingpageRazenstudioIklanYoutube;
        }
        $array = [
            'title' => $request->title,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
        ];

        $landingpage_razenstudio_iklan_youtube->section_1 = json_encode($array);
        $landingpage_razenstudio_iklan_youtube->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 1');
        return redirect()->route('razen-studio.admin.digital-campaign.iklan-youtube.index');
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
            return redirect()->route('razen-studio.admin.digital-campaign.iklan-youtube.index');
        }

        $cek = LandingpageRazenstudioIklanYoutube::first();
        if($cek)
        {
            $landingpage_razenstudio_iklan_youtube = LandingpageRazenstudioIklanYoutube::find($cek->id);
            if($landingpage_razenstudio_iklan_youtube->section_2)
            {
                $get_section_2 = json_decode($landingpage_razenstudio_iklan_youtube->section_2, true);

                if ($request->gambar) {
                    $gambarName = $get_section_2['gambar'];
                    File::delete(public_path('images/landingpage_razenstudio/digital-campaign/iklan-youtube/'.$gambarName));

                    $gambarExtension = $request->gambar->extension();
                    $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                    $gambar = Image::make($request->gambar);
                    $gambarSize = public_path('images/landingpage_razenstudio/digital-campaign/iklan-youtube/'.$gambarName);
                    $gambar->save($gambarSize, 100);
                } else {
                    $gambarName = $get_section_2['gambar'];
                }
            } else {
                $gambarExtension = $request->gambar->extension();
                $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                $gambar = Image::make($request->gambar);
                $gambarSize = public_path('images/landingpage_razenstudio/digital-campaign/iklan-youtube/'.$gambarName);
                $gambar->save($gambarSize, 100);
            }
        } else {
            $landingpage_razenstudio_iklan_youtube = new LandingpageRazenstudioIklanYoutube;

            $gambarExtension = $request->gambar->extension();
            $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
            $gambar = Image::make($request->gambar);
            $gambarSize = public_path('images/landingpage_razenstudio/digital-campaign/iklan-youtube/'.$gambarName);
            $gambar->save($gambarSize, 100);
        }

        $array = [
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $gambarName
        ];

        $landingpage_razenstudio_iklan_youtube->section_2 = json_encode($array);
        $landingpage_razenstudio_iklan_youtube->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 2');
        return redirect()->route('razen-studio.admin.digital-campaign.iklan-youtube.index');
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
            return redirect()->route('razen-studio.admin.digital-campaign.iklan-youtube.index');
        }

        $cek = LandingpageRazenstudioIklanYoutube::first();
        if($cek)
        {
            $landingpage_razenstudio_iklan_youtube = LandingpageRazenstudioIklanYoutube::find($cek->id);
            if($landingpage_razenstudio_iklan_youtube->section_3)
            {
                $get_section_3 = json_decode($landingpage_razenstudio_iklan_youtube->section_3, true);

                if ($request->gambar) {
                    $gambarName = $get_section_3['gambar'];
                    File::delete(public_path('images/landingpage_razenstudio/digital-campaign/iklan-youtube/'.$gambarName));

                    $gambarExtension = $request->gambar->extension();
                    $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                    $gambar = Image::make($request->gambar);
                    $gambarSize = public_path('images/landingpage_razenstudio/digital-campaign/iklan-youtube/'.$gambarName);
                    $gambar->save($gambarSize, 100);
                } else {
                    $gambarName = $get_section_3['gambar'];
                }
            } else {
                $gambarExtension = $request->gambar->extension();
                $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                $gambar = Image::make($request->gambar);
                $gambarSize = public_path('images/landingpage_razenstudio/digital-campaign/iklan-youtube/'.$gambarName);
                $gambar->save($gambarSize, 100);
            }
        } else {
            $landingpage_razenstudio_iklan_youtube = new LandingpageRazenstudioIklanYoutube;

            $gambarExtension = $request->gambar->extension();
            $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
            $gambar = Image::make($request->gambar);
            $gambarSize = public_path('images/landingpage_razenstudio/digital-campaign/iklan-youtube/'.$gambarName);
            $gambar->save($gambarSize, 100);
        }

        $array = [
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $gambarName
        ];

        $landingpage_razenstudio_iklan_youtube->section_3 = json_encode($array);
        $landingpage_razenstudio_iklan_youtube->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 3');
        return redirect()->route('razen-studio.admin.digital-campaign.iklan-youtube.index');
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
            return redirect()->route('razen-studio.admin.digital-campaign.iklan-youtube.index');
        }

        $cek = LandingpageRazenstudioIklanYoutube::first();
        if($cek)
        {
            $landingpage_razenstudio_iklan_youtube = LandingpageRazenstudioIklanYoutube::find($cek->id);
        } else {
            $landingpage_razenstudio_iklan_youtube = new LandingpageRazenstudioIklanYoutube;
        }
        $array = [
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
        ];

        $landingpage_razenstudio_iklan_youtube->section_4 = json_encode($array);
        $landingpage_razenstudio_iklan_youtube->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 4');
        return redirect()->route('razen-studio.admin.digital-campaign.iklan-youtube.index');
    }

    //Section 5 Start
    public function section_5_store(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'judul' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-studio.admin.digital-campaign.iklan-youtube.index');
        }

        $cek = LandingpageRazenstudioIklanYoutube::first();
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
            $landingpage_razenstudio_iklan_youtube  = LandingpageRazenstudioIklanYoutube::find($cek->id);
        } else {
            $landingpage_razenstudio_iklan_youtube  = new LandingpageRazenstudioIklanYoutube;
        }
        $landingpage_razenstudio_iklan_youtube ->section_5 = json_encode($array);
        $landingpage_razenstudio_iklan_youtube ->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 5');
        return redirect()->route('razen-studio.admin.digital-campaign.iklan-youtube.index');
    }

    public function section_5_hapus_satu(Request $request)
    {
        $get = LandingpageRazenstudioIklanYoutube::first();
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
            'judul' => $section5['judul'],
            'konten' => $array
        ];

        $landingpage_razenstudio_iklan_youtube  = LandingpageRazenstudioIklanYoutube::find($get->id);
        $landingpage_razenstudio_iklan_youtube ->section_5 = json_encode($data);
        $landingpage_razenstudio_iklan_youtube ->save();

        return response()->json('berhasil');
    }

    public function section_5_edit(Request $request)
    {
        $get = LandingpageRazenstudioIklanYoutube::first();
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
                'konten' => $array_lama
            ];
        }

        $landingpage_razenstudio_iklan_youtube  = LandingpageRazenstudioIklanYoutube::find($get->id);
        $landingpage_razenstudio_iklan_youtube ->section_5 = json_encode($data);
        $landingpage_razenstudio_iklan_youtube ->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 5');
        return redirect()->route('razen-studio.admin.digital-campaign.iklan-youtube.index');
    }
    //Section 5 End

    //Section 6 Start
    public function section_6_store(Request $request)
    {
        $judul_konten = $request->judul_konten;
        $deskripsi_konten = $request->deskripsi_konten;
        $gambar_konten = $request->gambar_konten;
        $array_konten = [];
        $array_logo = [];

        foreach ($request->file('gambar_konten') as $file) {
            $gambarExtension = $file->extension();
            $gambarName = uniqid().'-'.date("ymd").'.'.$gambarExtension;
            $gambar = Image::make($file);
            $gambarSize = public_path('images/landingpage_razenstudio/digital-campaign/iklan-youtube/'.$gambarName);
            $gambar->save($gambarSize, 60);

            $array_logo[] = $gambarName;
        }

        for ($i=0; $i < count($array_logo); $i++) {
            $array_konten[] = [
                'id' => uniqid(),
                'judul_konten' => $judul_konten[$i],
                'deskripsi_konten' => $deskripsi_konten[$i],
                'gambar_konten' => $array_logo[$i]
            ];
        }

        $cek = LandingpageRazenstudioIklanYoutube::first();
        if($cek)
        {
            $landingpage_razenstudio_iklan_youtube  = LandingpageRazenstudioIklanYoutube::find($cek->id);
        } else {
            $landingpage_razenstudio_iklan_youtube  = new LandingpageRazenstudioIklanYoutube;
        }

        $landingpage_razenstudio_iklan_youtube ->section_6 = json_encode($array_konten);
        $landingpage_razenstudio_iklan_youtube ->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 6');
        return redirect()->route('razen-studio.admin.digital-campaign.iklan-youtube.index');
    }

    public function section_6_edit(Request $request)
    {
        $judul_konten = $request->judul_konten;
        $deskripsi_konten = $request->deskripsi_konten;
        $gambar_konten = $request->gambar_konten;
        $array_baru = [];
        $array_logo = [];

        foreach ($request->file('gambar_konten') as $file) {
            $gambarExtension = $file->extension();
            $gambarName = uniqid().'-'.date("ymd").'.'.$gambarExtension;
            $gambar = Image::make($file);
            $gambarSize = public_path('images/landingpage_razenstudio/digital-campaign/iklan-youtube/'.$gambarName);
            $gambar->save($gambarSize, 60);

            $array_logo[] = $gambarName;
        }

        for ($i=0; $i < count($array_logo); $i++) {
            $array_baru[] = [
                'id' => uniqid(),
                'judul_konten' => $judul_konten[$i],
                'deskripsi_konten' => $deskripsi_konten[$i],
                'gambar_konten' => $array_logo[$i]
            ];
        }

        $get = LandingpageRazenstudioIklanYoutube::first();
        $section6 = json_decode($get->section_6, true);
        $array_lama = [];

        $array_lama = [];
        foreach ($section6 as $value) {
            $array_lama[] = [
                'id' => $value['id'],
                'judul_konten' => $value['judul_konten'],
                'deskripsi_konten' => $value['deskripsi_konten'],
                'gambar_konten' => $value['gambar_konten']
            ];
        }

        $landingpage_razenstudio_iklan_youtube  = LandingpageRazenstudioIklanYoutube::find($get->id);
        $landingpage_razenstudio_iklan_youtube ->section_6 = json_encode(array_merge($array_lama, $array_baru));
        $landingpage_razenstudio_iklan_youtube ->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 6');
        return redirect()->route('razen-studio.admin.digital-campaign.iklan-youtube.index');
    }

    public function section_6_hapus_satu(Request $request)
    {
        $get = LandingpageRazenstudioIklanYoutube::first();
        $section6 = json_decode($get->section_6, true);
        $array_konten = [];
        foreach ($section6 as $value) {
            if($value['id'] == $request->id)
            {
                File::delete(public_path('images/landingpage_razenstudio/digital-campaign/iklan-youtube/'.$value['gambar_konten']));
            } else {
                $array_konten[] = [
                    'id' => $value['id'],
                    'judul_konten' => $value['judul_konten'],
                    'deskripsi_konten' => $value['deskripsi_konten'],
                    'gambar_konten' => $value['gambar_konten']
                ];
            }
        }

        $landingpage_razenstudio_iklan_youtube  = LandingpageRazenstudioIklanYoutube::find($get->id);
        $landingpage_razenstudio_iklan_youtube->section_6 = json_encode($array_konten);
        $landingpage_razenstudio_iklan_youtube->save();

        return response()->json('berhasil');
    }
    //Section 6 End

    //Section 7 Start
    public function section_7_store(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'judul' => 'required',
            'deskripsi' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-studio.admin.digital-campaign.iklan-youtube.index');
        }

        $cek = LandingpageRazenstudioIklanYoutube::first();
        if($cek)
        {
            $landingpage_razenstudio_iklan_youtube = LandingpageRazenstudioIklanYoutube::find($cek->id);
            $section7 = json_decode($landingpage_razenstudio_iklan_youtube->section_7, true);
            $array_lama = [];

            if($section7)
            {
                foreach ($section7['item'] as $value) {
                    if($value['item'] == 'item_1')
                    {
                        $array_lama[] = [
                            'item' => $value['item'],
                            'judul' => $value['judul'],
                            'deskripsi' => $value['deskripsi'],
                            'ikon' => $value['ikon'],
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
                            'disklaimer' => $value['disklaimer'],
                            'gambar' => $value['gambar'],
                        ];
                    }
                }
                $array_data = $array_lama;
            } else {
                $array_data = $array_lama;
            }
        } else {
            $landingpage_razenstudio_iklan_youtube = new LandingpageRazenstudioIklanYoutube;
            $array_data = [];
        }
        $array = [
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'item' => $array_data
        ];

        $landingpage_razenstudio_iklan_youtube->section_7 = json_encode($array);
        $landingpage_razenstudio_iklan_youtube->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 7');
        return redirect()->route('razen-studio.admin.digital-campaign.iklan-youtube.index');
    }

    public function section_7_item_1_store(Request $request)
    {
        $cek = LandingpageRazenstudioIklanYoutube::first();
        if($cek)
        {
            $iklan_youtube = LandingpageRazenstudioIklanYoutube::find($cek->id);
            $section7 = json_decode($iklan_youtube->section_7, true);
            $array_baru = [];
            $array_lama = [];

            if($request->ikon)
            {
                $ikonExtension = $request->ikon->extension();
                $ikonName =  uniqid().'-'.date("ymd").'.'.$ikonExtension;
                $ikon = Image::make($request->ikon);
                $ikonSize = public_path('images/landingpage_razenstudio/digital-campaign/iklan-youtube/'.$ikonName);
                $ikon->save($ikonSize, 100);

                $array_baru[] = [
                    'item' => $request->item,
                    'judul' => $request->judul,
                    'deskripsi' => $request->deskripsi,
                    'ikon' => $ikonName,
                ];
            }

            foreach ($section7['item'] as $value) {
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
                        'disklaimer' => $value['disklaimer'],
                        'gambar' => $value['gambar'],
                    ];
                }
            }

            $data = [
                'judul' => $section7['judul'],
                'deskripsi' => $section7['deskripsi'],
                'item' => array_merge($array_lama, $array_baru)
            ];

            $iklan_youtube->section_7 = json_encode($data);
            $iklan_youtube->save();

            Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 7');
            return redirect()->route('razen-studio.admin.digital-campaign.iklan-youtube.index');
        } else {
            Alert::error('Gagal Menyimpan!', 'Tidak dapat menyimpan karena tidak ada data');
            return redirect()->route('razen-studio.admin.digital-campaign.iklan-youtube.index');
        }
    }

    public function section_7_item_2_store(Request $request)
    {
        $cek = LandingpageRazenstudioIklanYoutube::first();
        if($cek)
        {
            $iklan_youtube = LandingpageRazenstudioIklanYoutube::find($cek->id);
            $section7 = json_decode($iklan_youtube->section_7, true);
            $array_baru = [];
            $array_lama = [];

            if($request->ikon)
            {
                $ikonExtension = $request->ikon->extension();
                $ikonName =  uniqid().'-'.date("ymd").'.'.$ikonExtension;
                $ikon = Image::make($request->ikon);
                $ikonSize = public_path('images/landingpage_razenstudio/digital-campaign/iklan-youtube/'.$ikonName);
                $ikon->save($ikonSize, 100);

                $array_baru[] = [
                    'item' => $request->item,
                    'judul' => $request->judul,
                    'deskripsi' => $request->deskripsi,
                    'ikon' => $ikonName,
                ];
            }

            foreach ($section7['item'] as $value) {
                if($value['item'] == 'item_1')
                {
                    $array_lama[] = [
                        'item' => $value['item'],
                        'judul' => $value['judul'],
                        'deskripsi' => $value['deskripsi'],
                        'ikon' => $value['ikon'],
                    ];
                }
                if($value['item'] == 'item_2')
                {
                    if($request->ikon)
                    {
                        File::delete(public_path('images/landingpage_razenstudio/digital-campaign/iklan-youtube/'.$value['ikon']));
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
                        'disklaimer' => $value['disklaimer'],
                        'gambar' => $value['gambar'],
                    ];
                }
            }

            if($request->ikon)
            {
                $data = [
                    'judul' => $section7['judul'],
                    'deskripsi' => $section7['deskripsi'],
                    'item' => array_merge($array_lama, $array_baru)
                ];
            } else {
                $data = [
                    'judul' => $section7['judul'],
                    'deskripsi' => $section7['deskripsi'],
                    'item' => $array_lama
                ];
            }

            $iklan_youtube->section_7 = json_encode($data);
            $iklan_youtube->save();

            Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 7');
            return redirect()->route('razen-studio.admin.digital-campaign.iklan-youtube.index');
        } else {
            Alert::error('Gagal Menyimpan!', 'Tidak dapat menyimpan karena tidak ada data');
            return redirect()->route('razen-studio.admin.digital-campaign.iklan-youtube.index');
        }
    }

    public function section_7_item_3_store(Request $request)
    {
        $cek = LandingpageRazenstudioIklanYoutube::first();
        if($cek)
        {
            $iklan_youtube = LandingpageRazenstudioIklanYoutube::find($cek->id);
            $section7 = json_decode($iklan_youtube->section_7, true);
            $array_baru = [];
            $array_lama = [];

            if($request->ikon)
            {
                $ikonExtension = $request->ikon->extension();
                $ikonName =  uniqid().'-'.date("ymd").'.'.$ikonExtension;
                $ikon = Image::make($request->ikon);
                $ikonSize = public_path('images/landingpage_razenstudio/digital-campaign/iklan-youtube/'.$ikonName);
                $ikon->save($ikonSize, 100);

                $array_baru[] = [
                    'item' => $request->item,
                    'judul' => $request->judul,
                    'deskripsi' => $request->deskripsi,
                    'ikon' => $ikonName,
                ];
            }

            foreach ($section7['item'] as $value) {
                if($value['item'] == 'item_1')
                {
                    $array_lama[] = [
                        'item' => $value['item'],
                        'judul' => $value['judul'],
                        'deskripsi' => $value['deskripsi'],
                        'ikon' => $value['ikon'],
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
                        File::delete(public_path('images/landingpage_razenstudio/digital-campaign/iklan-youtube/'.$value['ikon']));
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
                        'disklaimer' => $value['disklaimer'],
                        'gambar' => $value['gambar'],
                    ];
                }
            }

            if($request->ikon)
            {
                $data = [
                    'judul' => $section7['judul'],
                    'deskripsi' => $section7['deskripsi'],
                    'item' => array_merge($array_lama, $array_baru)
                ];
            } else {
                $data = [
                    'judul' => $section7['judul'],
                    'deskripsi' => $section7['deskripsi'],
                    'item' => $array_lama
                ];
            }

            $iklan_youtube->section_7 = json_encode($data);
            $iklan_youtube->save();

            Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 7');
            return redirect()->route('razen-studio.admin.digital-campaign.iklan-youtube.index');
        } else {
            Alert::error('Gagal Menyimpan!', 'Tidak dapat menyimpan karena tidak ada data');
            return redirect()->route('razen-studio.admin.digital-campaign.iklan-youtube.index');
        }
    }

    public function section_7_item_4_store(Request $request)
    {
        $cek = LandingpageRazenstudioIklanYoutube::first();
        if($cek)
        {
            $iklan_youtube = LandingpageRazenstudioIklanYoutube::find($cek->id);
            $section7 = json_decode($iklan_youtube->section_7, true);
            $array_baru = [];
            $array_lama = [];

            if($request->gambar)
            {
                $gambarExtension = $request->gambar->extension();
                $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                $gambar = Image::make($request->gambar);
                $gambarSize = public_path('images/landingpage_razenstudio/digital-campaign/iklan-youtube/'.$gambarName);
                $gambar->save($gambarSize, 100);

                $array_baru[] = [
                    'item' => $request->item,
                    'judul' => $request->judul,
                    'disklaimer' => $request->disklaimer,
                    'gambar' => $gambarName,
                ];
            }

            foreach ($section7['item'] as $value) {
                if($value['item'] == 'item_1')
                {
                    $array_lama[] = [
                        'item' => $value['item'],
                        'judul' => $value['judul'],
                        'deskripsi' => $value['deskripsi'],
                        'ikon' => $value['ikon'],
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
                    if($request->gambar)
                    {
                        File::delete(public_path('images/landingpage_razenstudio/digital-campaign/iklan-youtube/'.$value['gambar']));
                    } else {
                        $array_lama[] = [
                            'item' => $value['item'],
                            'judul' => $value['judul'],
                            'disklaimer' => $value['disklaimer'],
                            'gambar' => $value['gambar'],
                        ];
                    }
                }
            }

            if($request->gambar)
            {
                $data = [
                    'judul' => $section7['judul'],
                    'deskripsi' => $section7['deskripsi'],
                    'item' => array_merge($array_lama, $array_baru)
                ];
            } else {
                $data = [
                    'judul' => $section7['judul'],
                    'deskripsi' => $section7['deskripsi'],
                    'item' => $array_lama
                ];
            }

            $iklan_youtube->section_7 = json_encode($data);
            $iklan_youtube->save();

            Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 7');
            return redirect()->route('razen-studio.admin.digital-campaign.iklan-youtube.index');
        } else {
            Alert::error('Gagal Menyimpan!', 'Tidak dapat menyimpan karena tidak ada data');
            return redirect()->route('razen-studio.admin.digital-campaign.iklan-youtube.index');
        }
    }
    //Section 7 End

    public function section_8_store(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'sub_judul' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-studio.admin.digital-campaign.iklan-youtube.index');
        }

        $cek = LandingpageRazenstudioIklanYoutube::first();
        if($cek)
        {
            $landingpage_razenstudio_iklan_youtube = LandingpageRazenstudioIklanYoutube::find($cek->id);
        } else {
            $landingpage_razenstudio_iklan_youtube = new LandingpageRazenstudioIklanYoutube;
        }
        $array = [
            'sub_judul' => $request->sub_judul,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
        ];

        $landingpage_razenstudio_iklan_youtube->section_8 = json_encode($array);
        $landingpage_razenstudio_iklan_youtube->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 8');
        return redirect()->route('razen-studio.admin.digital-campaign.iklan-youtube.index');
    }

    //Section 9 Start
    public function section_9_store(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'sub_judul' => 'required',
            'judul' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-studio.admin.digital-campaign.iklan-youtube.index');
        }

        $cek = LandingpageRazenstudioIklanYoutube::first();
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
            $landingpage_razenstudio_iklan_youtube = LandingpageRazenstudioIklanYoutube::find($cek->id);
        } else {
            $landingpage_razenstudio_iklan_youtube = new LandingpageRazenstudioIklanYoutube;
        }
        $landingpage_razenstudio_iklan_youtube->section_9 = json_encode($array);
        $landingpage_razenstudio_iklan_youtube->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 9');
        return redirect()->route('razen-studio.admin.digital-campaign.iklan-youtube.index');
    }

    public function section_9_hapus_satu(Request $request)
    {
        $get = LandingpageRazenstudioIklanYoutube::first();
        $section9 = json_decode($get->section_9, true);
        $array = [];
        foreach ($section9['konten'] as $value) {
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
            'sub_judul' => $section9['sub_judul'],
            'judul' => $section9['judul'],
            'konten' => $array
        ];

        $landingpage_razenstudio_iklan_youtube = LandingpageRazenstudioIklanYoutube::find($get->id);
        $landingpage_razenstudio_iklan_youtube->section_9 = json_encode($data);
        $landingpage_razenstudio_iklan_youtube->save();

        return response()->json('berhasil');
    }

    public function section_9_edit(Request $request)
    {
        $get = LandingpageRazenstudioIklanYoutube::first();
        $section9 = json_decode($get->section_9, true);

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
            foreach ($section9['konten'] as $value) {
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
            foreach ($section9['konten'] as $value) {
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

        $landingpage_razenstudio_iklan_youtube = LandingpageRazenstudioIklanYoutube::find($get->id);
        $landingpage_razenstudio_iklan_youtube->section_9 = json_encode($data);
        $landingpage_razenstudio_iklan_youtube->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 9');
        return redirect()->route('razen-studio.admin.digital-campaign.iklan-youtube.index');
    }
    //Section 9 End
}
