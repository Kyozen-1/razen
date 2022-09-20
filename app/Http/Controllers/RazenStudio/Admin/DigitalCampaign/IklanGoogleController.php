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
use App\Models\RazenStudio\LandingPage\DigitalCampaign\LandingpageRazenstudioIklanGoogle;

class IklanGoogleController extends Controller
{
    public function index()
    {
        return view('razen-studio.admin.landing-page.digital-campaign.iklan-google.index');
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
            return redirect()->route('razen-studio.admin.digital-campaign.iklan-google.index');
        }

        $cek = LandingpageRazenstudioIklanGoogle::first();
        if($cek)
        {
            $landingpage_razenstudio_iklan_google = LandingpageRazenstudioIklanGoogle::find($cek->id);
        } else {
            $landingpage_razenstudio_iklan_google = new LandingpageRazenstudioIklanGoogle;
        }
        $array = [
            'title' => $request->title,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
        ];

        $landingpage_razenstudio_iklan_google->section_1 = json_encode($array);
        $landingpage_razenstudio_iklan_google->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 1');
        return redirect()->route('razen-studio.admin.digital-campaign.iklan-google.index');
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
            return redirect()->route('razen-studio.admin.digital-campaign.iklan-google.index');
        }

        $cek = LandingpageRazenstudioIklanGoogle::first();
        if($cek)
        {
            $landingpage_razenstudio_iklan_google = LandingpageRazenstudioIklanGoogle::find($cek->id);
            if($landingpage_razenstudio_iklan_google->section_2)
            {
                $get_section_2 = json_decode($landingpage_razenstudio_iklan_google->section_2, true);

                if ($request->gambar) {
                    $gambarName = $get_section_2['gambar'];
                    File::delete(public_path('images/landingpage_razenstudio/digital-campaign/iklan-google/'.$gambarName));

                    $gambarExtension = $request->gambar->extension();
                    $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                    $gambar = Image::make($request->gambar);
                    $gambarSize = public_path('images/landingpage_razenstudio/digital-campaign/iklan-google/'.$gambarName);
                    $gambar->save($gambarSize, 100);
                } else {
                    $gambarName = $get_section_2['gambar'];
                }
            } else {
                $gambarExtension = $request->gambar->extension();
                $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                $gambar = Image::make($request->gambar);
                $gambarSize = public_path('images/landingpage_razenstudio/digital-campaign/iklan-google/'.$gambarName);
                $gambar->save($gambarSize, 100);
            }
        } else {
            $landingpage_razenstudio_iklan_google = new LandingpageRazenstudioIklanGoogle;

            $gambarExtension = $request->gambar->extension();
            $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
            $gambar = Image::make($request->gambar);
            $gambarSize = public_path('images/landingpage_razenstudio/digital-campaign/iklan-google/'.$gambarName);
            $gambar->save($gambarSize, 100);
        }

        $array = [
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $gambarName
        ];

        $landingpage_razenstudio_iklan_google->section_2 = json_encode($array);
        $landingpage_razenstudio_iklan_google->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 2');
        return redirect()->route('razen-studio.admin.digital-campaign.iklan-google.index');
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
            return redirect()->route('razen-studio.admin.digital-campaign.iklan-google.index');
        }

        $cek = LandingpageRazenstudioIklanGoogle::first();
        if($cek)
        {
            $landingpage_razenstudio_iklan_google = LandingpageRazenstudioIklanGoogle::find($cek->id);
            if($landingpage_razenstudio_iklan_google->section_3)
            {
                $get_section_3 = json_decode($landingpage_razenstudio_iklan_google->section_3, true);

                if ($request->gambar) {
                    $gambarName = $get_section_3['gambar'];
                    File::delete(public_path('images/landingpage_razenstudio/digital-campaign/iklan-google/'.$gambarName));

                    $gambarExtension = $request->gambar->extension();
                    $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                    $gambar = Image::make($request->gambar);
                    $gambarSize = public_path('images/landingpage_razenstudio/digital-campaign/iklan-google/'.$gambarName);
                    $gambar->save($gambarSize, 100);
                } else {
                    $gambarName = $get_section_3['gambar'];
                }
            } else {
                $gambarExtension = $request->gambar->extension();
                $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                $gambar = Image::make($request->gambar);
                $gambarSize = public_path('images/landingpage_razenstudio/digital-campaign/iklan-google/'.$gambarName);
                $gambar->save($gambarSize, 100);
            }
        } else {
            $landingpage_razenstudio_iklan_google = new LandingpageRazenstudioIklanGoogle;

            $gambarExtension = $request->gambar->extension();
            $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
            $gambar = Image::make($request->gambar);
            $gambarSize = public_path('images/landingpage_razenstudio/digital-campaign/iklan-google/'.$gambarName);
            $gambar->save($gambarSize, 100);
        }

        $array = [
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $gambarName
        ];

        $landingpage_razenstudio_iklan_google->section_3 = json_encode($array);
        $landingpage_razenstudio_iklan_google->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 3');
        return redirect()->route('razen-studio.admin.digital-campaign.iklan-google.index');
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
            return redirect()->route('razen-studio.admin.digital-campaign.iklan-google.index');
        }

        $cek = LandingpageRazenstudioIklanGoogle::first();
        if($cek)
        {
            $landingpage_razenstudio_iklan_google = LandingpageRazenstudioIklanGoogle::find($cek->id);
        } else {
            $landingpage_razenstudio_iklan_google = new LandingpageRazenstudioIklanGoogle;
        }
        $array = [
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
        ];

        $landingpage_razenstudio_iklan_google->section_4 = json_encode($array);
        $landingpage_razenstudio_iklan_google->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 4');
        return redirect()->route('razen-studio.admin.digital-campaign.iklan-google.index');
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
            return redirect()->route('razen-studio.admin.digital-campaign.iklan-google.index');
        }

        $cek = LandingpageRazenstudioIklanGoogle::first();
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
            $landingpage_razenstudio_iklan_google  = LandingpageRazenstudioIklanGoogle::find($cek->id);
        } else {
            $landingpage_razenstudio_iklan_google  = new LandingpageRazenstudioIklanGoogle;
        }
        $landingpage_razenstudio_iklan_google ->section_5 = json_encode($array);
        $landingpage_razenstudio_iklan_google ->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 5');
        return redirect()->route('razen-studio.admin.digital-campaign.iklan-google.index');
    }

    public function section_5_hapus_satu(Request $request)
    {
        $get = LandingpageRazenstudioIklanGoogle::first();
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

        $landingpage_razenstudio_iklan_google  = LandingpageRazenstudioIklanGoogle::find($get->id);
        $landingpage_razenstudio_iklan_google ->section_5 = json_encode($data);
        $landingpage_razenstudio_iklan_google ->save();

        return response()->json('berhasil');
    }

    public function section_5_edit(Request $request)
    {
        $get = LandingpageRazenstudioIklanGoogle::first();
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

        $landingpage_razenstudio_iklan_google  = LandingpageRazenstudioIklanGoogle::find($get->id);
        $landingpage_razenstudio_iklan_google ->section_5 = json_encode($data);
        $landingpage_razenstudio_iklan_google ->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 5');
        return redirect()->route('razen-studio.admin.digital-campaign.iklan-google.index');
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
            return redirect()->route('razen-studio.admin.digital-campaign.iklan-google.index');
        }

        $cek = LandingpageRazenstudioIklanGoogle::first();
        if($cek)
        {
            $landingpage_razenstudio_iklan_google = LandingpageRazenstudioIklanGoogle::find($cek->id);
        } else {
            $landingpage_razenstudio_iklan_google = new LandingpageRazenstudioIklanGoogle;
        }
        $array = [
            'sub_judul' => $request->sub_judul,
            'judul' => $request->judul,
            'item' => []
        ];

        $landingpage_razenstudio_iklan_google->section_6 = json_encode($array);
        $landingpage_razenstudio_iklan_google->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 6');
        return redirect()->route('razen-studio.admin.digital-campaign.iklan-google.index');
    }

    public function section_6_item_1_store(Request $request)
    {
        $cek = LandingpageRazenstudioIklanGoogle::first();
        if($cek)
        {
            $iklan_google = LandingpageRazenstudioIklanGoogle::find($cek->id);
            $section6 = json_decode($iklan_google->section_6, true);
            $array_baru = [];
            $array_lama = [];

            if($request->gambar)
            {
                $gambarExtension = $request->gambar->extension();
                $gambarName = uniqid().'-'.date("ymd").'.'.$gambarExtension;
                $gambar = Image::make($request->gambar);
                $gambarSize = public_path('images/landingpage_razenstudio/digital-campaign/iklan-google/'.$gambarName);
                $gambar->save($gambarSize, 60);

                $array_baru[] = [
                    'item' => $request->item,
                    'deskripsi' => $request->deskripsi,
                    'gambar' => $gambarName,
                ];

            } else {
                Alert::error('Gagal Menyimpan!', 'Tidak dapat menyimpan karena tidak ada data');
                return redirect()->route('razen-studio.admin.digital-campaign.iklan-google.index');
            }

            foreach ($section6['item'] as $value) {
                if($value['item'] == 'google_search_ads')
                {
                    $current_gambar = $value['gambar'];
                    for ($i=0; $i < count($current_gambar); $i++) {
                        File::delete(public_path('images/landingpage_razenstudio/digital-campaign/iklan-google/'.$current_gambar[$i]));
                    }
                }
                if($value['item'] == 'google_display_ads')
                {
                    $array_lama[] = [
                        'item' => $value['item'],
                        'deskripsi' => $value['deskripsi'],
                        'gambar' => $value['gambar'],
                    ];
                }
                if($value['item'] == 'google_discovery_ads')
                {
                    $array_lama[] = [
                        'item' => $value['item'],
                        'deskripsi' => $value['deskripsi'],
                        'gambar' => $value['gambar'],
                    ];
                }
            }

            $data = [
                'sub_judul' => $section6['sub_judul'],
                'judul' => $section6['judul'],
                'item' => array_merge($array_lama, $array_baru)
            ];

            $iklan_google->section_6 = json_encode($data);
            $iklan_google->save();

            Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 6');
            return redirect()->route('razen-studio.admin.digital-campaign.iklan-google.index');
        } else {
            Alert::error('Gagal Menyimpan!', 'Tidak dapat menyimpan karena tidak ada data');
            return redirect()->route('razen-studio.admin.digital-campaign.iklan-google.index');
        }
    }

    public function section_6_item_2_store(Request $request)
    {
        $cek = LandingpageRazenstudioIklanGoogle::first();
        if($cek)
        {
            $iklan_google = LandingpageRazenstudioIklanGoogle::find($cek->id);
            $section6 = json_decode($iklan_google->section_6, true);
            $array_baru = [];
            $array_lama = [];

            if($request->gambar)
            {
                $gambarExtension = $request->gambar->extension();
                $gambarName = uniqid().'-'.date("ymd").'.'.$gambarExtension;
                $gambar = Image::make($request->gambar);
                $gambarSize = public_path('images/landingpage_razenstudio/digital-campaign/iklan-google/'.$gambarName);
                $gambar->save($gambarSize, 60);

                $array_baru[] = [
                    'item' => $request->item,
                    'deskripsi' => $request->deskripsi,
                    'gambar' => $gambarName,
                ];

            } else {
                Alert::error('Gagal Menyimpan!', 'Tidak dapat menyimpan karena tidak ada data');
                return redirect()->route('razen-studio.admin.digital-campaign.iklan-google.index');
            }

            foreach ($section6['item'] as $value) {
                if($value['item'] == 'google_search_ads')
                {
                    $array_lama[] = [
                        'item' => $value['item'],
                        'deskripsi' => $value['deskripsi'],
                        'gambar' => $value['gambar'],
                    ];
                }

                if($value['item'] == 'google_display_ads')
                {
                    $current_gambar = $value['gambar'];
                    for ($i=0; $i < count($current_gambar); $i++) {
                        File::delete(public_path('images/landingpage_razenstudio/digital-campaign/iklan-google/'.$current_gambar[$i]));
                    }
                }

                if($value['item'] == 'google_discovery_ads')
                {
                    $array_lama[] = [
                        'item' => $value['item'],
                        'deskripsi' => $value['deskripsi'],
                        'gambar' => $value['gambar'],
                    ];
                }
            }

            $data = [
                'sub_judul' => $section6['sub_judul'],
                'judul' => $section6['judul'],
                'item' => array_merge($array_lama, $array_baru)
            ];

            $iklan_google->section_6 = json_encode($data);
            $iklan_google->save();

            Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 6');
            return redirect()->route('razen-studio.admin.digital-campaign.iklan-google.index');
        } else {
            Alert::error('Gagal Menyimpan!', 'Tidak dapat menyimpan karena tidak ada data');
            return redirect()->route('razen-studio.admin.digital-campaign.iklan-google.index');
        }
    }

    public function section_6_item_3_store(Request $request)
    {
        $cek = LandingpageRazenstudioIklanGoogle::first();
        if($cek)
        {
            $iklan_google = LandingpageRazenstudioIklanGoogle::find($cek->id);
            $section6 = json_decode($iklan_google->section_6, true);
            $array_baru = [];
            $array_lama = [];

            if($request->gambar)
            {
                $gambarExtension = $request->gambar->extension();
                $gambarName = uniqid().'-'.date("ymd").'.'.$gambarExtension;
                $gambar = Image::make($request->gambar);
                $gambarSize = public_path('images/landingpage_razenstudio/digital-campaign/iklan-google/'.$gambarName);
                $gambar->save($gambarSize, 60);

                $array_baru[] = [
                    'item' => $request->item,
                    'deskripsi' => $request->deskripsi,
                    'gambar' => $gambarName,
                ];

            } else {
                Alert::error('Gagal Menyimpan!', 'Tidak dapat menyimpan karena tidak ada data');
                return redirect()->route('razen-studio.admin.digital-campaign.iklan-google.index');
            }

            foreach ($section6['item'] as $value) {
                if($value['item'] == 'google_search_ads')
                {
                    $array_lama[] = [
                        'item' => $value['item'],
                        'deskripsi' => $value['deskripsi'],
                        'gambar' => $value['gambar'],
                    ];
                }

                if($value['item'] == 'google_display_ads')
                {
                    $array_lama[] = [
                        'item' => $value['item'],
                        'deskripsi' => $value['deskripsi'],
                        'gambar' => $value['gambar'],
                    ];
                }

                if($value['item'] == 'google_discovery_ads')
                {
                    $current_gambar = $value['gambar'];
                    for ($i=0; $i < count($current_gambar); $i++) {
                        File::delete(public_path('images/landingpage_razenstudio/digital-campaign/iklan-google/'.$current_gambar[$i]));
                    }
                }
            }

            $data = [
                'sub_judul' => $section6['sub_judul'],
                'judul' => $section6['judul'],
                'item' => array_merge($array_lama, $array_baru)
            ];

            $iklan_google->section_6 = json_encode($data);
            $iklan_google->save();

            Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 6');
            return redirect()->route('razen-studio.admin.digital-campaign.iklan-google.index');
        } else {
            Alert::error('Gagal Menyimpan!', 'Tidak dapat menyimpan karena tidak ada data');
            return redirect()->route('razen-studio.admin.digital-campaign.iklan-google.index');
        }
    }

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
            return redirect()->route('razen-studio.admin.digital-campaign.iklan-google.index');
        }

        $cek = LandingpageRazenstudioIklanGoogle::first();
        if($cek)
        {
            $landingpage_razenstudio_iklan_google = LandingpageRazenstudioIklanGoogle::find($cek->id);
            $section7 = json_decode($landingpage_razenstudio_iklan_google->section_7, true);
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
            $landingpage_razenstudio_iklan_google = new LandingpageRazenstudioIklanGoogle;
            $array_data = [];
        }
        $array = [
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'item' => $array_data
        ];

        $landingpage_razenstudio_iklan_google->section_7 = json_encode($array);
        $landingpage_razenstudio_iklan_google->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 7');
        return redirect()->route('razen-studio.admin.digital-campaign.iklan-google.index');
    }

    public function section_7_item_1_store(Request $request)
    {
        $cek = LandingpageRazenstudioIklanGoogle::first();
        if($cek)
        {
            $iklan_google = LandingpageRazenstudioIklanGoogle::find($cek->id);
            $section7 = json_decode($iklan_google->section_7, true);
            $array_baru = [];
            $array_lama = [];

            if($request->ikon)
            {
                $ikonExtension = $request->ikon->extension();
                $ikonName =  uniqid().'-'.date("ymd").'.'.$ikonExtension;
                $ikon = Image::make($request->ikon);
                $ikonSize = public_path('images/landingpage_razenstudio/digital-campaign/iklan-google/'.$ikonName);
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

            $iklan_google->section_7 = json_encode($data);
            $iklan_google->save();

            Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 7');
            return redirect()->route('razen-studio.admin.digital-campaign.iklan-google.index');
        } else {
            Alert::error('Gagal Menyimpan!', 'Tidak dapat menyimpan karena tidak ada data');
            return redirect()->route('razen-studio.admin.digital-campaign.iklan-google.index');
        }
    }

    public function section_7_item_2_store(Request $request)
    {
        $cek = LandingpageRazenstudioIklanGoogle::first();
        if($cek)
        {
            $iklan_google = LandingpageRazenstudioIklanGoogle::find($cek->id);
            $section7 = json_decode($iklan_google->section_7, true);
            $array_baru = [];
            $array_lama = [];

            if($request->ikon)
            {
                $ikonExtension = $request->ikon->extension();
                $ikonName =  uniqid().'-'.date("ymd").'.'.$ikonExtension;
                $ikon = Image::make($request->ikon);
                $ikonSize = public_path('images/landingpage_razenstudio/digital-campaign/iklan-google/'.$ikonName);
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
                        File::delete(public_path('images/landingpage_razenstudio/digital-campaign/iklan-google/'.$value['ikon']));
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

            $iklan_google->section_7 = json_encode($data);
            $iklan_google->save();

            Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 7');
            return redirect()->route('razen-studio.admin.digital-campaign.iklan-google.index');
        } else {
            Alert::error('Gagal Menyimpan!', 'Tidak dapat menyimpan karena tidak ada data');
            return redirect()->route('razen-studio.admin.digital-campaign.iklan-google.index');
        }
    }

    public function section_7_item_3_store(Request $request)
    {
        $cek = LandingpageRazenstudioIklanGoogle::first();
        if($cek)
        {
            $iklan_google = LandingpageRazenstudioIklanGoogle::find($cek->id);
            $section7 = json_decode($iklan_google->section_7, true);
            $array_baru = [];
            $array_lama = [];

            if($request->ikon)
            {
                $ikonExtension = $request->ikon->extension();
                $ikonName =  uniqid().'-'.date("ymd").'.'.$ikonExtension;
                $ikon = Image::make($request->ikon);
                $ikonSize = public_path('images/landingpage_razenstudio/digital-campaign/iklan-google/'.$ikonName);
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
                        File::delete(public_path('images/landingpage_razenstudio/digital-campaign/iklan-google/'.$value['ikon']));
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

            $iklan_google->section_7 = json_encode($data);
            $iklan_google->save();

            Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 7');
            return redirect()->route('razen-studio.admin.digital-campaign.iklan-google.index');
        } else {
            Alert::error('Gagal Menyimpan!', 'Tidak dapat menyimpan karena tidak ada data');
            return redirect()->route('razen-studio.admin.digital-campaign.iklan-google.index');
        }
    }

    public function section_7_item_4_store(Request $request)
    {
        $cek = LandingpageRazenstudioIklanGoogle::first();
        if($cek)
        {
            $iklan_google = LandingpageRazenstudioIklanGoogle::find($cek->id);
            $section7 = json_decode($iklan_google->section_7, true);
            $array_baru = [];
            $array_lama = [];

            if($request->gambar)
            {
                $gambarExtension = $request->gambar->extension();
                $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                $gambar = Image::make($request->gambar);
                $gambarSize = public_path('images/landingpage_razenstudio/digital-campaign/iklan-google/'.$gambarName);
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
                        File::delete(public_path('images/landingpage_razenstudio/digital-campaign/iklan-google/'.$value['gambar']));
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

            $iklan_google->section_7 = json_encode($data);
            $iklan_google->save();

            Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 7');
            return redirect()->route('razen-studio.admin.digital-campaign.iklan-google.index');
        } else {
            Alert::error('Gagal Menyimpan!', 'Tidak dapat menyimpan karena tidak ada data');
            return redirect()->route('razen-studio.admin.digital-campaign.iklan-google.index');
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
            return redirect()->route('razen-studio.admin.digital-campaign.iklan-google.index');
        }

        $cek = LandingpageRazenstudioIklanGoogle::first();
        if($cek)
        {
            $landingpage_razenstudio_iklan_google = LandingpageRazenstudioIklanGoogle::find($cek->id);
        } else {
            $landingpage_razenstudio_iklan_google = new LandingpageRazenstudioIklanGoogle;
        }
        $array = [
            'sub_judul' => $request->sub_judul,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
        ];

        $landingpage_razenstudio_iklan_google->section_8 = json_encode($array);
        $landingpage_razenstudio_iklan_google->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 8');
        return redirect()->route('razen-studio.admin.digital-campaign.iklan-google.index');
    }

    //Section 9 Start
    public function section_9_store(Request $request)
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
            $gambarSize = public_path('images/landingpage_razenstudio/digital-campaign/iklan-google/'.$gambarName);
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

        $cek = LandingpageRazenstudioIklanGoogle::first();
        if($cek)
        {
            $landingpage_razenstudio_iklan_google  = LandingpageRazenstudioIklanGoogle::find($cek->id);
        } else {
            $landingpage_razenstudio_iklan_google  = new LandingpageRazenstudioIklanGoogle;
        }

        $landingpage_razenstudio_iklan_google ->section_9 = json_encode($array_konten);
        $landingpage_razenstudio_iklan_google ->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 9');
        return redirect()->route('razen-studio.admin.digital-campaign.iklan-google.index');
    }

    public function section_9_edit(Request $request)
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
            $gambarSize = public_path('images/landingpage_razenstudio/digital-campaign/iklan-google/'.$gambarName);
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

        $get = LandingpageRazenstudioIklanGoogle::first();
        $section9 = json_decode($get->section_9, true);
        $array_lama = [];

        $array_lama = [];
        foreach ($section9 as $value) {
            $array_lama[] = [
                'id' => $value['id'],
                'judul_konten' => $value['judul_konten'],
                'deskripsi_konten' => $value['deskripsi_konten'],
                'logo_konten' => $value['logo_konten']
            ];
        }

        $landingpage_razenstudio_iklan_google  = LandingpageRazenstudioIklanGoogle::find($get->id);
        $landingpage_razenstudio_iklan_google ->section_9 = json_encode(array_merge($array_lama, $array_baru));
        $landingpage_razenstudio_iklan_google ->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 9');
        return redirect()->route('razen-studio.admin.digital-campaign.iklan-google.index');
    }

    public function section_9_hapus_satu(Request $request)
    {
        $get = LandingpageRazenstudioIklanGoogle::first();
        $section9 = json_decode($get->section_9, true);
        $array_konten = [];
        foreach ($section9 as $value) {
            if($value['id'] == $request->id)
            {
                File::delete(public_path('images/landingpage_razenstudio/digital-campaign/iklan-google/'.$value['logo_konten']));
            } else {
                $array_konten[] = [
                    'id' => $value['id'],
                    'judul_konten' => $value['judul_konten'],
                    'deskripsi_konten' => $value['deskripsi_konten'],
                    'logo_konten' => $value['logo_konten']
                ];
            }
        }

        $landingpage_razenstudio_iklan_google  = LandingpageRazenstudioIklanGoogle::find($get->id);
        $landingpage_razenstudio_iklan_google->section_9 = json_encode($array_konten);
        $landingpage_razenstudio_iklan_google->save();

        return response()->json('berhasil');
    }
    //Section 9 End

    //Section 10 Start
    public function section_10_store(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'sub_judul' => 'required',
            'judul' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-studio.admin.digital-campaign.iklan-google.index');
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
            $gambarSize = public_path('images/landingpage_razenstudio/digital-campaign/iklan-google/'.$gambarName);
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

        $cek = LandingpageRazenstudioIklanGoogle::first();
        if($cek)
        {
            $landingpage_razenstudio_iklan_google  = LandingpageRazenstudioIklanGoogle::find($cek->id);
        } else {
            $landingpage_razenstudio_iklan_google  = new LandingpageRazenstudioIklanGoogle;
        }

        $landingpage_razenstudio_iklan_google ->section_10 = json_encode($array_data);
        $landingpage_razenstudio_iklan_google ->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 10');
        return redirect()->route('razen-studio.admin.digital-campaign.iklan-google.index');
    }

    public function section_10_edit(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'sub_judul' => 'required',
            'judul' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-studio.admin.digital-campaign.iklan-google.index');
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
            $gambarSize = public_path('images/landingpage_razenstudio/digital-campaign/iklan-google/'.$gambarName);
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

        $get = LandingpageRazenstudioIklanGoogle::first();
        $section10 = json_decode($get->section_10, true);
        $array_lama = [];

        $array_lama = [];
        foreach ($section10['konten'] as $value) {
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

        $landingpage_razenstudio_iklan_google  = LandingpageRazenstudioIklanGoogle::find($get->id);
        $landingpage_razenstudio_iklan_google ->section_10 = json_encode($array_data);
        $landingpage_razenstudio_iklan_google ->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 10');
        return redirect()->route('razen-studio.admin.digital-campaign.iklan-google.index');
    }

    public function section_10_hapus_satu(Request $request)
    {
        $get = LandingpageRazenstudioIklanGoogle::first();
        $section10 = json_decode($get->section_10, true);
        $array_konten = [];
        foreach ($section10['konten'] as $value) {
            if($value['id'] == $request->id)
            {
                File::delete(public_path('images/landingpage_razenstudio/digital-campaign/iklan-google/'.$value['logo_konten']));
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
            'sub_judul' => $section10['sub_judul'],
            'judul' => $section10['judul'],
            'konten' => $array_konten
        ];

        $landingpage_razenstudio_iklan_google  = LandingpageRazenstudioIklanGoogle::find($get->id);
        $landingpage_razenstudio_iklan_google ->section_10 = json_encode($data);
        $landingpage_razenstudio_iklan_google ->save();

        return response()->json('berhasil');
    }
    //Section 10 End

    //Section 11 Start
    public function section_11_store(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'sub_judul' => 'required',
            'judul' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-studio.admin.digital-campaign.iklan-google.index');
        }

        $cek = LandingpageRazenstudioIklanGoogle::first();
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
            $landingpage_razenstudio_iklan_google = LandingpageRazenstudioIklanGoogle::find($cek->id);
        } else {
            $landingpage_razenstudio_iklan_google = new LandingpageRazenstudioIklanGoogle;
        }
        $landingpage_razenstudio_iklan_google->section_11 = json_encode($array);
        $landingpage_razenstudio_iklan_google->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 11');
        return redirect()->route('razen-studio.admin.digital-campaign.iklan-google.index');
    }

    public function section_11_hapus_satu(Request $request)
    {
        $get = LandingpageRazenstudioIklanGoogle::first();
        $section11 = json_decode($get->section_11, true);
        $array = [];
        foreach ($section11['konten'] as $value) {
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
            'sub_judul' => $section11['sub_judul'],
            'judul' => $section11['judul'],
            'konten' => $array
        ];

        $landingpage_razenstudio_iklan_google = LandingpageRazenstudioIklanGoogle::find($get->id);
        $landingpage_razenstudio_iklan_google->section_11 = json_encode($data);
        $landingpage_razenstudio_iklan_google->save();

        return response()->json('berhasil');
    }

    public function section_11_edit(Request $request)
    {
        $get = LandingpageRazenstudioIklanGoogle::first();
        $section11 = json_decode($get->section_11, true);

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
            foreach ($section11['konten'] as $value) {
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
            foreach ($section11['konten'] as $value) {
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

        $landingpage_razenstudio_iklan_google = LandingpageRazenstudioIklanGoogle::find($get->id);
        $landingpage_razenstudio_iklan_google->section_11 = json_encode($data);
        $landingpage_razenstudio_iklan_google->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 11');
        return redirect()->route('razen-studio.admin.digital-campaign.iklan-google.index');
    }
    //Section 11 End
}