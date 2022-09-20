<?php

namespace App\Http\Controllers\RazenStudio\Admin\HowItWork;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;
use DB;
use Validator;
use Carbon\Carbon;
use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioHowItWork;

class AturController extends Controller
{
    public function index()
    {
        return view('razen-studio.admin.landing-page.how-it-works.index');
    }

    public function section_1_store(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'sub_judul' => 'required',
            'judul' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-studio.admin.how-it-works.atur.index');
        }

        $cek = LandingpageRazenstudioHowItWork::first();
        if($cek)
        {
            $landingpage_razenstudio_how_it_works = LandingpageRazenstudioHowItWork::find($cek->id);
            if($landingpage_razenstudio_how_it_works->section_1)
            {
                $get_section_1 = json_decode($landingpage_razenstudio_how_it_works->section_1, true);

                if ($request->gambar) {
                    $gambarName = $get_section_1['gambar'];
                    File::delete(public_path('images/landingpage_razenstudio/how-it-works/'.$gambarName));

                    $gambarExtension = $request->gambar->extension();
                    $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                    $gambar = Image::make($request->gambar);
                    $gambarSize = public_path('images/landingpage_razenstudio/how-it-works/'.$gambarName);
                    $gambar->save($gambarSize, 100);
                } else {
                    $gambarName = $get_section_1['gambar'];
                }
            } else {
                $gambarExtension = $request->gambar->extension();
                $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                $gambar = Image::make($request->gambar);
                $gambarSize = public_path('images/landingpage_razenstudio/how-it-works/'.$gambarName);
                $gambar->save($gambarSize, 100);
            }
        } else {
            $landingpage_razenstudio_how_it_works = new LandingpageRazenstudioHowItWork;

            $gambarExtension = $request->gambar->extension();
            $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
            $gambar = Image::make($request->gambar);
            $gambarSize = public_path('images/landingpage_razenstudio/how-it-works/'.$gambarName);
            $gambar->save($gambarSize, 100);
        }

        $array = [
            'sub_judul' => $request->sub_judul,
            'judul' => $request->judul,
            'gambar' => $gambarName
        ];

        $landingpage_razenstudio_how_it_works->section_1 = json_encode($array);
        $landingpage_razenstudio_how_it_works->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 1');
        return redirect()->route('razen-studio.admin.how-it-works.atur.index');
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
            return redirect()->route('razen-studio.admin.how-it-works.atur.index');
        }

        $cek = LandingpageRazenstudioHowItWork::first();
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
            $landingpage_razenstudio_how_it_works = LandingpageRazenstudioHowItWork::find($cek->id);
        } else {
            $landingpage_razenstudio_how_it_works = new LandingpageRazenstudioHowItWork;
        }
        $landingpage_razenstudio_how_it_works->section_2 = json_encode($array);
        $landingpage_razenstudio_how_it_works->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 2');
        return redirect()->route('razen-studio.admin.how-it-works.atur.index');
    }

    public function section_2_hapus_satu(Request $request)
    {
        $get = LandingpageRazenstudioHowItWork::first();
        $section2 = json_decode($get->section_2, true);
        $array = [];
        foreach ($section2['konten'] as $value) {
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
            'sub_judul' => $section2['sub_judul'],
            'judul' => $section2['judul'],
            'konten' => $array
        ];

        $landingpage_razenstudio_how_it_works = LandingpageRazenstudioHowItWork::find($get->id);
        $landingpage_razenstudio_how_it_works->section_2 = json_encode($data);
        $landingpage_razenstudio_how_it_works->save();

        return response()->json('berhasil');
    }

    public function section_2_edit(Request $request)
    {
        $get = LandingpageRazenstudioHowItWork::first();
        $section2 = json_decode($get->section_2, true);

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
            foreach ($section2['konten'] as $value) {
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
            foreach ($section2['konten'] as $value) {
                $array_lama[] = [
                    'id' => $value['id'],
                    'judul_konten' => $value['judul_konten'],
                    'deskripsi_konten' => $value['deskripsi_konten'],
                ];
            }

            $data = [
                'sub_judul' => $request->sub_judul,
                'judul' => $request->judul,
                'konten' => $array_lama
            ];
        }

        $landingpage_razenstudio_how_it_works = LandingpageRazenstudioHowItWork::find($get->id);
        $landingpage_razenstudio_how_it_works->section_2 = json_encode($data);
        $landingpage_razenstudio_how_it_works->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 2');
        return redirect()->route('razen-studio.admin.how-it-works.atur.index');
    }
    //Section 2 End

    //Section 3 Start
    public function section_3_store(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-studio.admin.how-it-works.atur.index');
        }

        $cek = LandingpageRazenstudioHowItWork::first();
        if($cek)
        {
            $landingpage_razenstudio_how_it_works = LandingpageRazenstudioHowItWork::find($cek->id);
            if($landingpage_razenstudio_how_it_works->section_3)
            {
                $get_section_3 = json_decode($landingpage_razenstudio_how_it_works->section_3, true);

                if ($request->gambar) {
                    $gambarName = $get_section_3['gambar'];
                    File::delete(public_path('images/landingpage_razenstudio/how-it-works/'.$gambarName));

                    $gambarExtension = $request->gambar->extension();
                    $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                    $gambar = Image::make($request->gambar);
                    $gambarSize = public_path('images/landingpage_razenstudio/how-it-works/'.$gambarName);
                    $gambar->save($gambarSize, 100);
                } else {
                    $gambarName = $get_section_3['gambar'];
                }
            } else {
                $gambarExtension = $request->gambar->extension();
                $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                $gambar = Image::make($request->gambar);
                $gambarSize = public_path('images/landingpage_razenstudio/how-it-works/'.$gambarName);
                $gambar->save($gambarSize, 100);
            }
        } else {
            $landingpage_razenstudio_how_it_works = new LandingpageRazenstudioHowItWork;

            $gambarExtension = $request->gambar->extension();
            $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
            $gambar = Image::make($request->gambar);
            $gambarSize = public_path('images/landingpage_razenstudio/how-it-works/'.$gambarName);
            $gambar->save($gambarSize, 100);
        }

        $array = [
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $gambarName,
            'item' => []
        ];

        $landingpage_razenstudio_how_it_works->section_3 = json_encode($array);
        $landingpage_razenstudio_how_it_works->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 3');
        return redirect()->route('razen-studio.admin.how-it-works.atur.index');
    }

    public function section_3_item_1_store(Request $request)
    {
        $cek = LandingpageRazenstudioHowItWork::first();
        if($cek)
        {
            $landingpage_razenstudio_how_it_works = LandingpageRazenstudioHowItWork::find($cek->id);
            $section3 = json_decode($landingpage_razenstudio_how_it_works->section_3, true);
            $array_baru = [];
            $array_lama = [];

            $array_baru[] = [
                'item' => $request->item,
                'angka' => $request->angka,
                'deskripsi' => $request->deskripsi,
            ];

            foreach ($section3['item'] as $value) {
                if($value['item'] == 'item_2')
                {
                    $array_lama[] = [
                        'item' => $value['item'],
                        'angka' => $value['angka'],
                        'deskripsi' => $value['deskripsi'],
                    ];
                }
                if($value['item'] == 'item_3')
                {
                    $array_lama[] = [
                        'item' => $value['item'],
                        'angka' => $value['angka'],
                        'deskripsi' => $value['deskripsi'],
                    ];
                }
                if($value['item'] == 'item_4')
                {
                    $array_lama[] = [
                        'item' => $value['item'],
                        'angka' => $value['angka'],
                        'deskripsi' => $value['deskripsi'],
                    ];
                }
            }

            $data = [
                'judul' => $section3['judul'],
                'deskripsi' => $section3['deskripsi'],
                'gambar' => $section3['gambar'],
                'item' => array_merge($array_lama, $array_baru)
            ];

            $landingpage_razenstudio_how_it_works->section_3 = json_encode($data);
            $landingpage_razenstudio_how_it_works->save();

            Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 3');
            return redirect()->route('razen-studio.admin.how-it-works.atur.index');
        } else {
            Alert::error('Gagal Menyimpan!', 'Tidak dapat menyimpan karena tidak ada data');
            return redirect()->route('razen-studio.admin.how-it-works.atur.index');
        }
    }

    public function section_3_item_2_store(Request $request)
    {
        $cek = LandingpageRazenstudioHowItWork::first();
        if($cek)
        {
            $landingpage_razenstudio_how_it_works = LandingpageRazenstudioHowItWork::find($cek->id);
            $section3 = json_decode($landingpage_razenstudio_how_it_works->section_3, true);
            $array_baru = [];
            $array_lama = [];

            $array_baru[] = [
                'item' => $request->item,
                'angka' => $request->angka,
                'deskripsi' => $request->deskripsi,
            ];

            foreach ($section3['item'] as $value) {
                if($value['item'] == 'item_1')
                {
                    $array_lama[] = [
                        'item' => $value['item'],
                        'angka' => $value['angka'],
                        'deskripsi' => $value['deskripsi'],
                    ];
                }
                if($value['item'] == 'item_3')
                {
                    $array_lama[] = [
                        'item' => $value['item'],
                        'angka' => $value['angka'],
                        'deskripsi' => $value['deskripsi'],
                    ];
                }
                if($value['item'] == 'item_4')
                {
                    $array_lama[] = [
                        'item' => $value['item'],
                        'angka' => $value['angka'],
                        'deskripsi' => $value['deskripsi'],
                    ];
                }
            }

            $data = [
                'judul' => $section3['judul'],
                'deskripsi' => $section3['deskripsi'],
                'gambar' => $section3['gambar'],
                'item' => array_merge($array_lama, $array_baru)
            ];

            $landingpage_razenstudio_how_it_works->section_3 = json_encode($data);
            $landingpage_razenstudio_how_it_works->save();

            Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 3');
            return redirect()->route('razen-studio.admin.how-it-works.atur.index');
        } else {
            Alert::error('Gagal Menyimpan!', 'Tidak dapat menyimpan karena tidak ada data');
            return redirect()->route('razen-studio.admin.how-it-works.atur.index');
        }
    }

    public function section_3_item_3_store(Request $request)
    {
        $cek = LandingpageRazenstudioHowItWork::first();
        if($cek)
        {
            $landingpage_razenstudio_how_it_works = LandingpageRazenstudioHowItWork::find($cek->id);
            $section3 = json_decode($landingpage_razenstudio_how_it_works->section_3, true);
            $array_baru = [];
            $array_lama = [];

            $array_baru[] = [
                'item' => $request->item,
                'angka' => $request->angka,
                'deskripsi' => $request->deskripsi,
            ];

            foreach ($section3['item'] as $value) {
                if($value['item'] == 'item_1')
                {
                    $array_lama[] = [
                        'item' => $value['item'],
                        'angka' => $value['angka'],
                        'deskripsi' => $value['deskripsi'],
                    ];
                }
                if($value['item'] == 'item_2')
                {
                    $array_lama[] = [
                        'item' => $value['item'],
                        'angka' => $value['angka'],
                        'deskripsi' => $value['deskripsi'],
                    ];
                }
                if($value['item'] == 'item_4')
                {
                    $array_lama[] = [
                        'item' => $value['item'],
                        'angka' => $value['angka'],
                        'deskripsi' => $value['deskripsi'],
                    ];
                }
            }

            $data = [
                'judul' => $section3['judul'],
                'deskripsi' => $section3['deskripsi'],
                'gambar' => $section3['gambar'],
                'item' => array_merge($array_lama, $array_baru)
            ];

            $landingpage_razenstudio_how_it_works->section_3 = json_encode($data);
            $landingpage_razenstudio_how_it_works->save();

            Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 3');
            return redirect()->route('razen-studio.admin.how-it-works.atur.index');
        } else {
            Alert::error('Gagal Menyimpan!', 'Tidak dapat menyimpan karena tidak ada data');
            return redirect()->route('razen-studio.admin.how-it-works.atur.index');
        }
    }

    public function section_3_item_4_store(Request $request)
    {
        $cek = LandingpageRazenstudioHowItWork::first();
        if($cek)
        {
            $landingpage_razenstudio_how_it_works = LandingpageRazenstudioHowItWork::find($cek->id);
            $section3 = json_decode($landingpage_razenstudio_how_it_works->section_3, true);
            $array_baru = [];
            $array_lama = [];

            $array_baru[] = [
                'item' => $request->item,
                'angka' => $request->angka,
                'deskripsi' => $request->deskripsi,
            ];

            foreach ($section3['item'] as $value) {
                if($value['item'] == 'item_1')
                {
                    $array_lama[] = [
                        'item' => $value['item'],
                        'angka' => $value['angka'],
                        'deskripsi' => $value['deskripsi'],
                    ];
                }
                if($value['item'] == 'item_2')
                {
                    $array_lama[] = [
                        'item' => $value['item'],
                        'angka' => $value['angka'],
                        'deskripsi' => $value['deskripsi'],
                    ];
                }
                if($value['item'] == 'item_3')
                {
                    $array_lama[] = [
                        'item' => $value['item'],
                        'angka' => $value['angka'],
                        'deskripsi' => $value['deskripsi'],
                    ];
                }
            }

            $data = [
                'judul' => $section3['judul'],
                'deskripsi' => $section3['deskripsi'],
                'gambar' => $section3['gambar'],
                'item' => array_merge($array_lama, $array_baru)
            ];

            $landingpage_razenstudio_how_it_works->section_3 = json_encode($data);
            $landingpage_razenstudio_how_it_works->save();

            Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 3');
            return redirect()->route('razen-studio.admin.how-it-works.atur.index');
        } else {
            Alert::error('Gagal Menyimpan!', 'Tidak dapat menyimpan karena tidak ada data');
            return redirect()->route('razen-studio.admin.how-it-works.atur.index');
        }
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
            return redirect()->route('razen-studio.admin.how-it-works.atur.index');
        }

        $cek = LandingpageRazenstudioHowItWork::first();
        if($cek)
        {
            $landingpage_razenstudio_how_it_works = LandingpageRazenstudioHowItWork::find($cek->id);
        } else {
            $landingpage_razenstudio_how_it_works = new LandingpageRazenstudioHowItWork;
        }

        $array = [
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi
        ];

        $landingpage_razenstudio_how_it_works->section_4 = json_encode($array);
        $landingpage_razenstudio_how_it_works->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 4');
        return redirect()->route('razen-studio.admin.how-it-works.atur.index');
    }

    public function section_5_store(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'judul' => 'required',
            'deskripsi' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-studio.admin.how-it-works.atur.index');
        }

        $cek = LandingpageRazenstudioHowItWork::first();
        if($cek)
        {
            $landingpage_razenstudio_how_it_works = LandingpageRazenstudioHowItWork::find($cek->id);
        } else {
            $landingpage_razenstudio_how_it_works = new LandingpageRazenstudioHowItWork;
        }

        $array = [
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi
        ];

        $landingpage_razenstudio_how_it_works->section_5 = json_encode($array);
        $landingpage_razenstudio_how_it_works->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 5');
        return redirect()->route('razen-studio.admin.how-it-works.atur.index');
    }

    public function section_6_store(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'sub_judul' => 'required',
            'judul' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-studio.admin.how-it-works.atur.index');
        }

        $cek = LandingpageRazenstudioHowItWork::first();
        if($cek)
        {
            $landingpage_razenstudio_how_it_works = LandingpageRazenstudioHowItWork::find($cek->id);
            $section_6 = json_decode($landingpage_razenstudio_how_it_works->section_6, true);
            $section_6_item_1 = $section_6['item_1'];
            $section_6_item_2 = $section_6['item_2'];

            if($section_6_item_1 != null)
            {
                foreach ($section_6_item_1 as $value) {
                    $item_1[] = [
                        'id' => $value['id'],
                        'deskripsi_konten' => $value['deskripsi_konten'],
                    ];
                }
            } else {
                $item_1 = [];
            }

            if($section_6_item_2 != null)
            {
                $item_2 = [
                    'judul' => $section_6_item_2['judul'],
                    'deskripsi' => $section_6_item_2['deskripsi'],
                    'gambar' => $section_6_item_2['gambar']
                ];
            } else {
                $item_2 = [];
            }
        } else {
            $landingpage_razenstudio_how_it_works = new LandingpageRazenstudioHowItWork;
            $item_1 = [];
            $item_2 = [];
        }

        $array = [
            'sub_judul' => $request->sub_judul,
            'judul' => $request->judul,
            'item_1' => $item_1,
            'item_2' => $item_2
        ];

        $landingpage_razenstudio_how_it_works->section_6 = json_encode($array);
        $landingpage_razenstudio_how_it_works->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 6');
        return redirect()->route('razen-studio.admin.how-it-works.atur.index');
    }

    //Section 6 Item 1 Start
    public function section_6_item_1_store(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'deskripsi_konten.*' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-studio.admin.how-it-works.atur.index');
        }
        $cek = LandingpageRazenstudioHowItWork::first();
        $landingpage_razenstudio_how_it_works = LandingpageRazenstudioHowItWork::find($cek->id);
        $section_6 = json_decode($landingpage_razenstudio_how_it_works->section_6, true);
        $section_6_item_2 = $section_6['item_2'];
        $item_1 = [];
        $item_2 = [];

        if($section_6_item_2 != null)
        {
            $item_2 = [
                'judul' => $section_6_item_2['judul'],
                'deskripsi' => $section_6_item_2['deskripsi'],
                'gambar' => $section_6_item_2['gambar']
            ];
        } else {
            $item_2 = [];
        }

        $deskripsi_konten = $request->deskripsi_konten;

        for ($i=0; $i < count($deskripsi_konten); $i++) {
            $item_1[] = [
                'id' => uniqid(),
                'deskripsi_konten' => $deskripsi_konten[$i]
            ];
        }

        $array = [
            'sub_judul' => $section_6['sub_judul'],
            'judul' => $section_6['judul'],
            'item_1' => $item_1,
            'item_2' => $item_2
        ];

        $landingpage_razenstudio_how_it_works->section_6 = json_encode($array);
        $landingpage_razenstudio_how_it_works->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 6 Item 1');
        return redirect()->route('razen-studio.admin.how-it-works.atur.index');
    }

    public function section_6_item_1_hapus_satu(Request $request)
    {
        $get = LandingpageRazenstudioHowItWork::first();
        $section_6 = json_decode($get->section_6, true);
        $array = [];
        foreach ($section_6['item_1'] as $value) {
            if($value['id'] != $request->id)
            {
                $array[] = [
                    'id' => $value['id'],
                    'deskripsi_konten' => $value['deskripsi_konten'],
                ];
            }
        }
        $section_6_item_2 = $section_6['item_2'];
        $item_2 = [];

        if($section_6_item_2 != null)
        {
            $item_2 = [
                'judul' => $section_6_item_2['judul'],
                'deskripsi' => $section_6_item_2['deskripsi'],
                'gambar' => $section_6_item_2['gambar']
            ];
        } else {
            $item_2 = [];
        }

        $data = [
            'sub_judul' => $section_6['sub_judul'],
            'judul' => $section_6['judul'],
            'item_1' => $array,
            'item_2' => $item_2
        ];

        $landingpage_razenstudio_how_it_works = LandingpageRazenstudioHowItWork::find($get->id);
        $landingpage_razenstudio_how_it_works->section_6 = json_encode($data);
        $landingpage_razenstudio_how_it_works->save();

        return response()->json('berhasil');
    }

    public function section_6_item_1_edit(Request $request)
    {
        $get = LandingpageRazenstudioHowItWork::first();
        $section6 = json_decode($get->section_6, true);

        $array_baru = [];
        $deskripsi_konten = $request->deskripsi_konten;
        for ($i=0; $i < count($deskripsi_konten); $i++) {
            $array_baru[] = [
                'id' => uniqid(),
                'deskripsi_konten' => $deskripsi_konten[$i],
            ];
        }

        $array_lama = [];
        foreach ($section6['item_1'] as $value) {
            $array_lama[] = [
                'id' => $value['id'],
                'deskripsi_konten' => $value['deskripsi_konten'],
            ];
        }

        $section_6_item_2 = $section6['item_2'];
        $item_2 = [];

        if($section_6_item_2 != null)
        {
            $item_2 = [
                'judul' => $section_6_item_2['judul'],
                'deskripsi' => $section_6_item_2['deskripsi'],
                'gambar' => $section_6_item_2['gambar']
            ];
        } else {
            $item_2 = [];
        }

        $data = [
            'judul' => $section6['judul'],
            'sub_judul' => $section6['sub_judul'],
            'item_1' => array_merge($array_lama, $array_baru),
            'item_2' => $item_2
        ];

        $landingpage_razenstudio_how_it_works = LandingpageRazenstudioHowItWork::find($get->id);
        $landingpage_razenstudio_how_it_works->section_6 = json_encode($data);
        $landingpage_razenstudio_how_it_works->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 6');
        return redirect()->route('razen-studio.admin.how-it-works.atur.index');
    }
    // Section 6 End

    public function section_6_item_2_store(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'judul' => 'required',
            'deskripsi' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-studio.admin.how-it-works.atur.index');
        }

        $cek = LandingpageRazenstudioHowItWork::first();
        $landingpage_razenstudio_how_it_works = LandingpageRazenstudioHowItWork::find($cek->id);
        $section_6 = json_decode($landingpage_razenstudio_how_it_works->section_6, true);
        $item_2 = [];
        if($section_6['item_2'] != null)
        {
            if ($request->gambar) {
                $gambarName = $section_6['item_2']['gambar'];
                File::delete(public_path('images/landingpage_razenstudio/how-it-works/'.$gambarName));

                $gambarExtension = $request->gambar->extension();
                $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                $gambar = Image::make($request->gambar);
                $gambarSize = public_path('images/landingpage_razenstudio/how-it-works/'.$gambarName);
                $gambar->save($gambarSize, 100);
            } else {
                $gambarName = $section_6['item_2']['gambar'];
            }
        } else {
            $gambarExtension = $request->gambar->extension();
            $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
            $gambar = Image::make($request->gambar);
            $gambarSize = public_path('images/landingpage_razenstudio/how-it-works/'.$gambarName);
            $gambar->save($gambarSize, 100);
        }

        $item_2 = [
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $gambarName
        ];

        $section_6_item_1 = $section_6['item_1'];

        if($section_6_item_1 != null)
        {
            foreach ($section_6_item_1 as $value) {
                $item_1[] = [
                    'id' => $value['id'],
                    'deskripsi_konten' => $value['deskripsi_konten'],
                ];
            }
        } else {
            $item_1 = [];
        }

        $data = [
            'judul' => $section_6['judul'],
            'sub_judul' => $section_6['sub_judul'],
            'item_1' => $item_1,
            'item_2' => $item_2
        ];

        $landingpage_razenstudio_how_it_works->section_6 = json_encode($data);
        $landingpage_razenstudio_how_it_works->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 6');
        return redirect()->route('razen-studio.admin.how-it-works.atur.index');
    }
}
