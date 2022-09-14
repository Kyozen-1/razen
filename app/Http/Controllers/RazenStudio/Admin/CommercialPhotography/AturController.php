<?php

namespace App\Http\Controllers\RazenStudio\Admin\CommercialPhotography;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;
use DB;
use Validator;
use Carbon\Carbon;
use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioCommercialPhotography;
use App\Models\RazenStudio\LandingPage\CommercialPhotography\LandingpageRazenstudioCommercialPhotographyPaketHarga;

class AturController extends Controller
{
    public function index()
    {
        return view('razen-studio.admin.landing-page.commercial-photography.atur.index');
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
            return redirect()->route('razen-studio.admin.commercial-photography.atur.index');
        }

        $cek = LandingpageRazenstudioCommercialPhotography::first();
        if($cek)
        {
            $landingpage_razenstudio_commercial_photography = LandingpageRazenstudioCommercialPhotography::find($cek->id);
        } else {
            $landingpage_razenstudio_commercial_photography = new LandingpageRazenstudioCommercialPhotography;
        }
        $array = [
            'title' => $request->title,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
        ];

        $landingpage_razenstudio_commercial_photography->section_1 = json_encode($array);
        $landingpage_razenstudio_commercial_photography->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 1');
        return redirect()->route('razen-studio.admin.commercial-photography.atur.index');
    }

    public function section_2_store(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'sub_judul' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-studio.admin.commercial-photography.atur.index');
        }

        $cek = LandingpageRazenstudioCommercialPhotography::first();
        if($cek)
        {
            $landingpage_razenstudio_commercial_photography = LandingpageRazenstudioCommercialPhotography::find($cek->id);
            if($landingpage_razenstudio_commercial_photography->section_2)
            {
                $get_section_2 = json_decode($landingpage_razenstudio_commercial_photography->section_2, true);

                if ($request->gambar) {
                    $gambarName = $get_section_2['gambar'];
                    File::delete(public_path('images/landingpage_razenstudio/commercial-photography/'.$gambarName));

                    $gambarExtension = $request->gambar->extension();
                    $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                    $gambar = Image::make($request->gambar);
                    $gambarSize = public_path('images/landingpage_razenstudio/commercial-photography/'.$gambarName);
                    $gambar->save($gambarSize, 100);
                } else {
                    $gambarName = $get_section_2['gambar'];
                }
            } else {
                $gambarExtension = $request->gambar->extension();
                $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                $gambar = Image::make($request->gambar);
                $gambarSize = public_path('images/landingpage_razenstudio/commercial-photography/'.$gambarName);
                $gambar->save($gambarSize, 100);
            }
        } else {
            $landingpage_razenstudio_commercial_photography = new LandingpageRazenstudioCommercialPhotography;

            $gambarExtension = $request->gambar->extension();
            $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
            $gambar = Image::make($request->gambar);
            $gambarSize = public_path('images/landingpage_razenstudio/commercial-photography/'.$gambarName);
            $gambar->save($gambarSize, 100);
        }

        $array = [
            'sub_judul' => $request->sub_judul,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $gambarName
        ];

        $landingpage_razenstudio_commercial_photography->section_2 = json_encode($array);
        $landingpage_razenstudio_commercial_photography->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 2');
        return redirect()->route('razen-studio.admin.commercial-photography.atur.index');
    }

    //Section 3 Start
    public function section_3_store(Request $request)
    {
        $cek = LandingpageRazenstudioCommercialPhotography::first();
        $dataGambar = [];
        $data = [];

        foreach ($request->file('gambar') as $file) {
            $gambarExtension = $file->extension();
            $gambarName = uniqid().'-'.date("ymd").'.'.$gambarExtension;
            $gambar = Image::make($file);
            $gambarSize = public_path('images/landingpage_razenstudio/commercial-photography/'.$gambarName);
            $gambar->save($gambarSize, 60);

            $dataGambar[] = $gambarName;
        }

        for ($i=0; $i < count($dataGambar); $i++) {
            $data[] = [
                'id' => uniqid(),
                'gambar' => $dataGambar[$i]
            ];
        }

        $array = [
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'konten' => $data
        ];

        if($cek)
        {
            $landingpage_razenstudio_commercial_photography  = LandingpageRazenstudioCommercialPhotography::find($cek->id);
        } else {
            $landingpage_razenstudio_commercial_photography  = new LandingpageRazenstudioCommercialPhotography;
        }
        $landingpage_razenstudio_commercial_photography ->section_3 = json_encode($array);
        $landingpage_razenstudio_commercial_photography ->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 3');
        return redirect()->route('razen-studio.admin.commercial-photography.atur.index');
    }

    public function section_3_hapus_satu(Request $request)
    {
        $get = LandingpageRazenstudioCommercialPhotography::first();
        $section3 = json_decode($get->section_3, true);
        $data = [];
        foreach ($section3['konten'] as $value) {
            if($value['id'] != $request->id)
            {
                $data[] = [
                    'id' => $value['id'],
                    'gambar' => $value['gambar']
                ];
            } else {
                File::delete(public_path('images/landingpage_razenstudio/commercial-photography/'.$value['gambar']));
            }
        }

        $array = [
            'judul' => $section3['judul'],
            'deskripsi' => $section3['deskripsi'],
            'konten' => $data
        ];

        $landingpage_razenstudio_commercial_photography  = LandingpageRazenstudioCommercialPhotography::find($get->id);
        $landingpage_razenstudio_commercial_photography ->section_3 = json_encode($array);
        $landingpage_razenstudio_commercial_photography ->save();

        return response()->json('berhasil');
    }

    public function section_3_edit(Request $request)
    {
        $get = LandingpageRazenstudioCommercialPhotography::first();
        $section3 = json_decode($get->section_3, true);

        if($request->gambar)
        {
            $dataBaru = [];
            $array_baru = [];

            foreach ($request->file('gambar') as $file) {
                $gambarExtension = $file->extension();
                $gambarName = uniqid().'-'.date("ymd").'.'.$gambarExtension;
                $gambar = Image::make($file);
                $gambarSize = public_path('images/landingpage_razenstudio/commercial-photography/'.$gambarName);
                $gambar->save($gambarSize, 60);

                $dataBaru[] = $gambarName;
            }

            for ($i=0; $i < count($dataBaru); $i++) {
                $array_baru[] = [
                    'id' => uniqid(),
                    'gambar' => $dataBaru[$i]
                ];
            }

            $array_lama = [];
            foreach ($section3['konten'] as $value) {
                $array_lama[] = [
                    'id' => $value['id'],
                    'gambar' => $value['gambar'],
                ];
            }

            $array = [
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
                'konten' => array_merge($array_lama, $array_baru)
            ];

        } else {

            $array_lama = [];
            foreach ($section3 as $value) {
                $array_lama[] = [
                    'id' => $value['id'],
                    'gambar' => $value['gambar'],
                ];
            }

            $array = [
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
                'konten' => $array_lama
            ];
        }

        $landingpage_razenstudio_commercial_photography  = LandingpageRazenstudioCommercialPhotography::find($get->id);
        $landingpage_razenstudio_commercial_photography ->section_3 = json_encode($array);
        $landingpage_razenstudio_commercial_photography ->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 3');
        return redirect()->route('razen-studio.admin.commercial-photography.atur.index');
    }

    //Section 4 Start
    public function section_4_store(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'judul' => 'required',
            'sub_judul' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-studio.admin.commercial-photography.atur.index');
        }

        $cek = LandingpageRazenstudioCommercialPhotography::first();
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
            'sub_judul' => $request->sub_judul,
            'konten' => $konten
        ];

        if($cek)
        {
            $landingpage_razenstudio_commercial_photography  = LandingpageRazenstudioCommercialPhotography::find($cek->id);
        } else {
            $landingpage_razenstudio_commercial_photography  = new LandingpageRazenstudioCommercialPhotography;
        }
        $landingpage_razenstudio_commercial_photography ->section_4 = json_encode($array);
        $landingpage_razenstudio_commercial_photography ->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 4');
        return redirect()->route('razen-studio.admin.commercial-photography.atur.index');
    }

    public function section_4_hapus_satu(Request $request)
    {
        $get = LandingpageRazenstudioCommercialPhotography::first();
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
            'sub_judul' => $section4['sub_judul'],
            'konten' => $array
        ];

        $landingpage_razenstudio_commercial_photography  = LandingpageRazenstudioCommercialPhotography::find($get->id);
        $landingpage_razenstudio_commercial_photography ->section_4 = json_encode($data);
        $landingpage_razenstudio_commercial_photography ->save();

        return response()->json('berhasil');
    }

    public function section_4_edit(Request $request)
    {
        $get = LandingpageRazenstudioCommercialPhotography::first();
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
                'sub_judul' => $request->sub_judul,
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
                'sub_judul' => $request->sub_judul,
                'konten' => $array_lama
            ];
        }

        $landingpage_razenstudio_commercial_photography  = LandingpageRazenstudioCommercialPhotography::find($get->id);
        $landingpage_razenstudio_commercial_photography ->section_4 = json_encode($data);
        $landingpage_razenstudio_commercial_photography ->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 4');
        return redirect()->route('razen-studio.admin.commercial-photography.atur.index');
    }
    //Section 4 End

    public function section_5_store(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'judul' => 'required',
            'deskripsi' => 'required',
            'link' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-studio.admin.commercial-photography.atur.index');
        }

        $cek = LandingpageRazenstudioCommercialPhotography::first();
        if($cek)
        {
            $landingpage_razenstudio_commercial_photography = LandingpageRazenstudioCommercialPhotography::find($cek->id);
            if($landingpage_razenstudio_commercial_photography->section_5)
            {
                $get_section_5 = json_decode($landingpage_razenstudio_commercial_photography->section_5, true);

                if ($request->gambar) {
                    $gambarName = $get_section_5['gambar'];
                    File::delete(public_path('images/landingpage_razenstudio/commercial-photography/'.$gambarName));

                    $gambarExtension = $request->gambar->extension();
                    $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                    $gambar = Image::make($request->gambar);
                    $gambarSize = public_path('images/landingpage_razenstudio/commercial-photography/'.$gambarName);
                    $gambar->save($gambarSize, 100);
                } else {
                    $gambarName = $get_section_5['gambar'];
                }
            } else {
                $gambarExtension = $request->gambar->extension();
                $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                $gambar = Image::make($request->gambar);
                $gambarSize = public_path('images/landingpage_razenstudio/commercial-photography/'.$gambarName);
                $gambar->save($gambarSize, 100);
            }
        } else {
            $landingpage_razenstudio_commercial_photography = new LandingpageRazenstudioCommercialPhotography;

            $gambarExtension = $request->gambar->extension();
            $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
            $gambar = Image::make($request->gambar);
            $gambarSize = public_path('images/landingpage_razenstudio/commercial-photography/'.$gambarName);
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

        $landingpage_razenstudio_commercial_photography->section_5 = json_encode($array);
        $landingpage_razenstudio_commercial_photography->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 5');
        return redirect()->route('razen-studio.admin.commercial-photography.atur.index');
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
            return redirect()->route('razen-studio.admin.commercial-photography.atur.index');
        }

        $cek = LandingpageRazenstudioCommercialPhotography::first();
        if($cek)
        {
            $landingpage_razenstudio_commercial_photography = LandingpageRazenstudioCommercialPhotography::find($cek->id);
        } else {
            $landingpage_razenstudio_commercial_photography = new LandingpageRazenstudioCommercialPhotography;
        }
        $array = [
            'sub_judul' => $request->sub_judul,
            'judul' => $request->judul
        ];

        $landingpage_razenstudio_commercial_photography->section_6 = json_encode($array);
        $landingpage_razenstudio_commercial_photography->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 6');
        return redirect()->route('razen-studio.admin.commercial-photography.atur.index');
    }

    public function section_6_item_store(Request $request)
    {
        $dataGambar = [];
        foreach ($request->file('gambar') as $file) {
            $gambarExtension = $file->extension();
            $gambarName = uniqid().'-'.date("ymd").'.'.$gambarExtension;
            $gambar = Image::make($file);
            $gambarSize = public_path('images/landingpage_razenstudio/commercial-photography/'.$gambarName);
            $gambar->save($gambarSize, 60);

            $dataGambar[] = $gambarName;
        }

        $paket_harga = new LandingpageRazenstudioCommercialPhotographyPaketHarga;
        $paket_harga->deskripsi = $request->deskripsi;
        $paket_harga->gambar = json_encode($dataGambar);
        $paket_harga->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 6');
        return redirect()->route('razen-studio.admin.commercial-photography.atur.index');
    }

    public function section_6_item_hapus(Request $request)
    {
        $paket_harga = LandingpageRazenstudioCommercialPhotographyPaketHarga::find($request->id);

        $gambar = json_decode($paket_harga->gambar, true);

        for ($i=0; $i < count($gambar); $i++) {
            File::delete(public_path('images/landingpage_razenstudio/commercial-photography/'.$gambar[$i]));
        }

        $paket_harga->delete();

        return response()->json('berhasil');
    }

    //Section 7 Start
    public function section_7_store(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'judul' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-studio.admin.commercial-photography.atur.index');
        }

        $cek =  LandingpageRazenstudioCommercialPhotography::first();

        foreach ($request->file('gambar_konten') as $file) {
            $gambarKontenExtension = $file->extension();
            $gambarKontenName = uniqid().'-'.date("ymd").'.'.$gambarKontenExtension;
            $gambarKonten = Image::make($file);
            $gambarKontenSize = public_path('images/landingpage_razenstudio/commercial-photography/'.$gambarKontenName);
            $gambarKonten->save($gambarKontenSize, 60);

            $data[] = $gambarKontenName;
        }
        foreach ($request->file('file_konten') as $file) {
            $fileExtension = $file->extension();
            $fileName = uniqid().'-'.date("ymd").'.'.$fileExtension;
            $file->move(public_path('images/landingpage_razenstudio/commercial-photography/file/'), $fileName);

            $data_file[] = $fileName;
        }

        $judul_konten = $request->judul_konten;

        $konten = [];

        for ($i=0; $i < count($data); $i++) {
            $konten[] = [
                'id' => uniqid(),
                'judul_konten' => $judul_konten[$i],
                'file_konten' => $data_file[$i],
                'gambar_konten' => $data[$i]
            ];
        }

        $array = [
            'judul' => $request->judul,
            'konten' => $konten
        ];

        if($cek)
        {
            $landingpage_razenstudio_commercial_photography =  LandingpageRazenstudioCommercialPhotography::find($cek->id);
        } else {
            $landingpage_razenstudio_commercial_photography = new  LandingpageRazenstudioCommercialPhotography;
        }
        $landingpage_razenstudio_commercial_photography->section_7 = json_encode($array);
        $landingpage_razenstudio_commercial_photography->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 7');
        return redirect()->route('razen-studio.admin.commercial-photography.atur.index');
    }

    public function section_7_hapus_satu(Request $request)
    {
        $get =  LandingpageRazenstudioCommercialPhotography::first();
        $section7 = json_decode($get->section_7, true);
        $array = [];
        foreach ($section7['konten'] as $value) {
            if($value['id'] != $request->id)
            {
                $array[] = [
                    'id' => $value['id'],
                    'judul_konten' => $value['judul_konten'],
                    'gambar_konten' => $value['gambar_konten'],
                    'file_konten' => $value['file_konten'],
                ];
            } else {
                File::delete(public_path('images/landingpage_razenstudio/commercial-photography/'.$value['gambar_konten']));
                File::delete(public_path('images/landingpage_razenstudio/commercial-photography/file/'.$value['file_konten']));
            }
        }

        $data = [
            'judul' => $section7['judul'],
            'konten' => $array
        ];

        $landingpage_razenstudio_commercial_photography =  LandingpageRazenstudioCommercialPhotography::find($get->id);
        $landingpage_razenstudio_commercial_photography->section_7 = json_encode($data);
        $landingpage_razenstudio_commercial_photography->save();

        return response()->json('berhasil');
    }

    public function section_7_edit(Request $request)
    {
        $get =  LandingpageRazenstudioCommercialPhotography::first();
        $section7 = json_decode($get->section_7, true);

        if($request->judul_konten)
        {
            foreach ($request->file('gambar_konten') as $file) {
                $gambarKontenExtension = $file->extension();
                $gambarKontenName = uniqid().'-'.date("ymd").'.'.$gambarKontenExtension;
                $gambarKonten = Image::make($file);
                $gambarKontenSize = public_path('images/landingpage_razenstudio/commercial-photography/'.$gambarKontenName);
                $gambarKonten->save($gambarKontenSize, 60);

                $gambarKontenBaru[] = $gambarKontenName;
            }

            foreach ($request->file('file_konten') as $file) {
                $fileExtension = $file->extension();
                $fileName = uniqid().'-'.date("ymd").'.'.$fileExtension;
                $file->move(public_path('images/landingpage_razenstudio/commercial-photography/file/'), $fileName);

                $dataFileBaru[] = $fileName;
            }

            $judul_konten_baru = $request->judul_konten;

            $array_baru = [];
            for ($i=0; $i < count($gambarKontenBaru); $i++) {
                $array_baru[] = [
                    'id' => uniqid(),
                    'judul_konten' => $judul_konten_baru[$i],
                    'gambar_konten' => $gambarKontenBaru[$i],
                    'file_konten' => $dataFileBaru[$i]
                ];
            }

            $array_lama = [];
            foreach ($section7['konten'] as $value) {
                $array_lama[] = [
                    'id' => $value['id'],
                    'judul_konten' => $value['judul_konten'],
                    'gambar_konten' => $value['gambar_konten'],
                    'file_konten' => $value['file_konten']
                ];
            }

            $data = [
                'judul' => $request->judul,
                'konten' => array_merge($array_lama, $array_baru)
            ];
        } else {
            $array_lama = [];
            foreach ($section7['konten'] as $value) {
                $array_lama[] = [
                    'id' => $value['id'],
                    'judul_konten' => $value['judul_konten'],
                    'gambar_konten' => $value['gambar_konten'],
                    'file_konten' => $value['file_konten']
                ];
            }

            $data = [
                'judul' => $request->judul,
                'konten' => $array_lama
            ];
        }

        $landingpage_razenstudio_commercial_photography =  LandingpageRazenstudioCommercialPhotography::find($get->id);
        $landingpage_razenstudio_commercial_photography->section_7 = json_encode($data);
        $landingpage_razenstudio_commercial_photography->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 7');
        return redirect()->route('razen-studio.admin.commercial-photography.atur.index');
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
            return redirect()->route('razen-studio.admin.commercial-photography.atur.index');
        }

        $judul_konten = $request->judul_konten;
        $deskripsi_konten = $request->deskripsi_konten;
        $logo_konten = $request->logo_konten;
        $array_konten = [];
        $array_logo = [];

        foreach ($request->file('logo_konten') as $file) {
            $gambarExtension = $file->extension();
            $gambarName = uniqid().'-'.date("ymd").'.'.$gambarExtension;
            $gambar = Image::make($file);
            $gambarSize = public_path('images/landingpage_razenstudio/commercial-photography/'.$gambarName);
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

        $array_data = [
            'sub_judul' => $request->sub_judul,
            'judul' => $request->judul,
            'konten' => $array_konten
        ];

        $cek = LandingpageRazenstudioCommercialPhotography::first();
        if($cek)
        {
            $landingpage_razenstudio_commercial_photography = LandingpageRazenstudioCommercialPhotography::find($cek->id);
        } else {
            $landingpage_razenstudio_commercial_photography = new LandingpageRazenstudioCommercialPhotography;
        }

        $landingpage_razenstudio_commercial_photography->section_8 = json_encode($array_data);
        $landingpage_razenstudio_commercial_photography->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 8');
        return redirect()->route('razen-studio.admin.commercial-photography.atur.index');
    }

    public function section_8_edit(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'sub_judul' => 'required',
            'judul' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-studio.admin.commercial-photography.atur.index');
        }

        $judul_konten = $request->judul_konten;
        $deskripsi_konten = $request->deskripsi_konten;
        $logo_konten = $request->logo_konten;
        $array_baru = [];
        $array_logo = [];

        foreach ($request->file('logo_konten') as $file) {
            $gambarExtension = $file->extension();
            $gambarName = uniqid().'-'.date("ymd").'.'.$gambarExtension;
            $gambar = Image::make($file);
            $gambarSize = public_path('images/landingpage_razenstudio/commercial-photography/'.$gambarName);
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

        $get = LandingpageRazenstudioCommercialPhotography::first();
        $section8 = json_decode($get->section_8, true);
        $array_lama = [];

        $array_lama = [];
        foreach ($section8['konten'] as $value) {
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

        $landingpage_razenstudio_commercial_photography = LandingpageRazenstudioCommercialPhotography::find($get->id);
        $landingpage_razenstudio_commercial_photography->section_8 = json_encode($array_data);
        $landingpage_razenstudio_commercial_photography->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 8');
        return redirect()->route('razen-studio.admin.commercial-photography.atur.index');
    }

    public function section_8_hapus_satu(Request $request)
    {
        $get = LandingpageRazenstudioCommercialPhotography::first();
        $section8 = json_decode($get->section_8, true);
        $array_konten = [];
        foreach ($section8['konten'] as $value) {
            if($value['id'] == $request->id)
            {
                File::delete(public_path('images/landingpage_razenstudio/commercial-photography/'.$value['logo_konten']));
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
            'sub_judul' => $section8['sub_judul'],
            'judul' => $section8['judul'],
            'konten' => $array_konten
        ];

        $landingpage_razenstudio_commercial_photography = LandingpageRazenstudioCommercialPhotography::find($get->id);
        $landingpage_razenstudio_commercial_photography->section_8 = json_encode($data);
        $landingpage_razenstudio_commercial_photography->save();

        return response()->json('berhasil');
    }
    //Section 8 End

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
            return redirect()->route('razen-studio.admin.commercial-photography.atur.index');
        }

        $cek = LandingpageRazenstudioCommercialPhotography::first();
        if($cek)
        {
            $landingpage_razenstudio_commercial_photography = LandingpageRazenstudioCommercialPhotography::find($cek->id);
        } else {
            $landingpage_razenstudio_commercial_photography = new LandingpageRazenstudioCommercialPhotography;
        }
        $array = [
            'sub_judul' => $request->sub_judul,
            'judul' => $request->judul,
            'item' => []
        ];

        $landingpage_razenstudio_commercial_photography->section_9 = json_encode($array);
        $landingpage_razenstudio_commercial_photography->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 9');
        return redirect()->route('razen-studio.admin.commercial-photography.atur.index');
    }

    public function section_9_item_1_store(Request $request)
    {
        $cek = LandingpageRazenstudioCommercialPhotography::first();
        if($cek)
        {
            $commercial_photography = LandingpageRazenstudioCommercialPhotography::find($cek->id);
            $section9 = json_decode($commercial_photography->section_9, true);
            $array_baru = [];
            $array_lama = [];

            if($request->gambar)
            {
                foreach ($request->file('gambar') as $file) {
                    $gambarExtension = $file->extension();
                    $gambarName = uniqid().'-'.date("ymd").'.'.$gambarExtension;
                    $gambar = Image::make($file);
                    $gambarSize = public_path('images/landingpage_razenstudio/commercial-photography/'.$gambarName);
                    $gambar->save($gambarSize, 60);

                    $gambarBaru[] = $gambarName;
                }

                $array_baru[] = [
                    'item' => $request->item,
                    'judul' => $request->judul,
                    'deskripsi' => $request->deskripsi,
                    'gambar' => $gambarBaru,
                ];

            } else {
                Alert::error('Gagal Menyimpan!', 'Tidak dapat menyimpan karena tidak ada data');
                return redirect()->route('razen-studio.admin.commercial-photography.atur.index');
            }

            foreach ($section9['item'] as $value) {
                if($value['item'] == 'foto_produk_makanan')
                {
                    $current_gambar = $value['gambar'];
                    for ($i=0; $i < count($current_gambar); $i++) {
                        File::delete(public_path('images/landingpage_razenstudio/commercial-photography/'.$current_gambar[$i]));
                    }
                }
                if($value['item'] == 'foto_produk_minuman')
                {
                    $array_lama[] = [
                        'item' => $value['item'],
                        'judul' => $value['judul'],
                        'deskripsi' => $value['deskripsi'],
                        'gambar' => $value['gambar'],
                    ];
                }
                if($value['item'] == 'foto_produk_baju')
                {
                    $array_lama[] = [
                        'item' => $value['item'],
                        'judul' => $value['judul'],
                        'deskripsi' => $value['deskripsi'],
                        'gambar' => $value['gambar'],
                    ];
                }
            }

            $data = [
                'sub_judul' => $section9['sub_judul'],
                'judul' => $section9['judul'],
                'item' => array_merge($array_lama, $array_baru)
            ];

            $commercial_photography->section_9 = json_encode($data);
            $commercial_photography->save();

            Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 9');
            return redirect()->route('razen-studio.admin.commercial-photography.atur.index');
        } else {
            Alert::error('Gagal Menyimpan!', 'Tidak dapat menyimpan karena tidak ada data');
            return redirect()->route('razen-studio.admin.commercial-photography.atur.index');
        }
    }

    public function section_9_item_2_store(Request $request)
    {
        $cek = LandingpageRazenstudioCommercialPhotography::first();
        if($cek)
        {
            $commercial_photography = LandingpageRazenstudioCommercialPhotography::find($cek->id);
            $section9 = json_decode($commercial_photography->section_9, true);
            $array_baru = [];
            $array_lama = [];

            if($request->gambar)
            {
                foreach ($request->file('gambar') as $file) {
                    $gambarExtension = $file->extension();
                    $gambarName = uniqid().'-'.date("ymd").'.'.$gambarExtension;
                    $gambar = Image::make($file);
                    $gambarSize = public_path('images/landingpage_razenstudio/commercial-photography/'.$gambarName);
                    $gambar->save($gambarSize, 60);

                    $gambarBaru[] = $gambarName;
                }

                $array_baru[] = [
                    'item' => $request->item,
                    'judul' => $request->judul,
                    'deskripsi' => $request->deskripsi,
                    'gambar' => $gambarBaru,
                ];

            } else {
                Alert::error('Gagal Menyimpan!', 'Tidak dapat menyimpan karena tidak ada data');
                return redirect()->route('razen-studio.admin.commercial-photography.atur.index');
            }

            foreach ($section9['item'] as $value) {
                if($value['item'] == 'foto_produk_makanan')
                {
                    $array_lama[] = [
                        'item' => $value['item'],
                        'judul' => $value['judul'],
                        'deskripsi' => $value['deskripsi'],
                        'gambar' => $value['gambar'],
                    ];
                }

                if($value['item'] == 'foto_produk_minuman')
                {
                    $current_gambar = $value['gambar'];
                    for ($i=0; $i < count($current_gambar); $i++) {
                        File::delete(public_path('images/landingpage_razenstudio/commercial-photography/'.$current_gambar[$i]));
                    }
                }

                if($value['item'] == 'foto_produk_baju')
                {
                    $array_lama[] = [
                        'item' => $value['item'],
                        'judul' => $value['judul'],
                        'deskripsi' => $value['deskripsi'],
                        'gambar' => $value['gambar'],
                    ];
                }
            }

            $data = [
                'sub_judul' => $section9['sub_judul'],
                'judul' => $section9['judul'],
                'item' => array_merge($array_lama, $array_baru)
            ];

            $commercial_photography->section_9 = json_encode($data);
            $commercial_photography->save();

            Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 9');
            return redirect()->route('razen-studio.admin.commercial-photography.atur.index');
        } else {
            Alert::error('Gagal Menyimpan!', 'Tidak dapat menyimpan karena tidak ada data');
            return redirect()->route('razen-studio.admin.commercial-photography.atur.index');
        }
    }

    public function section_9_item_3_store(Request $request)
    {
        $cek = LandingpageRazenstudioCommercialPhotography::first();
        if($cek)
        {
            $commercial_photography = LandingpageRazenstudioCommercialPhotography::find($cek->id);
            $section9 = json_decode($commercial_photography->section_9, true);
            $array_baru = [];
            $array_lama = [];

            if($request->gambar)
            {
                foreach ($request->file('gambar') as $file) {
                    $gambarExtension = $file->extension();
                    $gambarName = uniqid().'-'.date("ymd").'.'.$gambarExtension;
                    $gambar = Image::make($file);
                    $gambarSize = public_path('images/landingpage_razenstudio/commercial-photography/'.$gambarName);
                    $gambar->save($gambarSize, 60);

                    $gambarBaru[] = $gambarName;
                }

                $array_baru[] = [
                    'item' => $request->item,
                    'judul' => $request->judul,
                    'deskripsi' => $request->deskripsi,
                    'gambar' => $gambarBaru,
                ];

            } else {
                Alert::error('Gagal Menyimpan!', 'Tidak dapat menyimpan karena tidak ada data');
                return redirect()->route('razen-studio.admin.commercial-photography.atur.index');
            }

            foreach ($section9['item'] as $value) {
                if($value['item'] == 'foto_produk_makanan')
                {
                    $array_lama[] = [
                        'item' => $value['item'],
                        'judul' => $value['judul'],
                        'deskripsi' => $value['deskripsi'],
                        'gambar' => $value['gambar'],
                    ];
                }

                if($value['item'] == 'foto_produk_minuman')
                {
                    $array_lama[] = [
                        'item' => $value['item'],
                        'judul' => $value['judul'],
                        'deskripsi' => $value['deskripsi'],
                        'gambar' => $value['gambar'],
                    ];
                }

                if($value['item'] == 'foto_produk_baju')
                {
                    $current_gambar = $value['gambar'];
                    for ($i=0; $i < count($current_gambar); $i++) {
                        File::delete(public_path('images/landingpage_razenstudio/commercial-photography/'.$current_gambar[$i]));
                    }
                }
            }

            $data = [
                'sub_judul' => $section9['sub_judul'],
                'judul' => $section9['judul'],
                'item' => array_merge($array_lama, $array_baru)
            ];

            $commercial_photography->section_9 = json_encode($data);
            $commercial_photography->save();

            Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 9');
            return redirect()->route('razen-studio.admin.commercial-photography.atur.index');
        } else {
            Alert::error('Gagal Menyimpan!', 'Tidak dapat menyimpan karena tidak ada data');
            return redirect()->route('razen-studio.admin.commercial-photography.atur.index');
        }
    }

    public function section_10_store(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'sub_judul' => 'required',
            'judul' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-studio.admin.commercial-photography.atur.index');
        }

        $cek = LandingpageRazenstudioCommercialPhotography::first();
        if($cek)
        {
            $landingpage_razenstudio_commercial_photography = LandingpageRazenstudioCommercialPhotography::find($cek->id);
        } else {
            $landingpage_razenstudio_commercial_photography = new LandingpageRazenstudioCommercialPhotography;
        }
        $array = [
            'sub_judul' => $request->sub_judul,
            'judul' => $request->judul
        ];

        $landingpage_razenstudio_commercial_photography->section_10 = json_encode($array);
        $landingpage_razenstudio_commercial_photography->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 10');
        return redirect()->route('razen-studio.admin.commercial-photography.atur.index');
    }

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
            return redirect()->route('razen-studio.admin.commercial-photography.atur.index');
        }

        $cek = LandingpageRazenstudioCommercialPhotography::first();
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
            $landingpage_razenstudio_commercial_photography = LandingpageRazenstudioCommercialPhotography::find($cek->id);
        } else {
            $landingpage_razenstudio_commercial_photography = new LandingpageRazenstudioCommercialPhotography;
        }
        $landingpage_razenstudio_commercial_photography->section_11 = json_encode($array);
        $landingpage_razenstudio_commercial_photography->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 11');
        return redirect()->route('razen-studio.admin.commercial-photography.atur.index');
    }

    public function section_11_hapus_satu(Request $request)
    {
        $get = LandingpageRazenstudioCommercialPhotography::first();
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

        $landingpage_razenstudio_commercial_photography = LandingpageRazenstudioCommercialPhotography::find($get->id);
        $landingpage_razenstudio_commercial_photography->section_11 = json_encode($data);
        $landingpage_razenstudio_commercial_photography->save();

        return response()->json('berhasil');
    }

    public function section_11_edit(Request $request)
    {
        $get = LandingpageRazenstudioCommercialPhotography::first();
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

        $landingpage_razenstudio_commercial_photography = LandingpageRazenstudioCommercialPhotography::find($get->id);
        $landingpage_razenstudio_commercial_photography->section_11 = json_encode($data);
        $landingpage_razenstudio_commercial_photography->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 11');
        return redirect()->route('razen-studio.admin.commercial-photography.atur.index');
    }
    //Section 11 End
}
