<?php

namespace App\Http\Controllers\RazenStudio\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;
use DB;
use Validator;
use Carbon\Carbon;
use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioHome;

class HomeAturController extends Controller
{
    public function index()
    {
        return view('razen-studio.admin.landing-page.home.atur.index');
    }
    //Section 1 Start
    public function section_1_store(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'judul' => 'required',
            'deskripsi_judul' => 'required',
            'deskripsi' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-studio.admin.home.atur.index');
        }

        $cek = LandingpageRazenstudioHome::first();
        if($cek)
        {
            $landingpage_razenstudio_home = LandingpageRazenstudioHome::find($cek->id);
        } else {
            $landingpage_razenstudio_home = new LandingpageRazenstudioHome;
        }
        $array = [
            'judul' => $request->judul,
            'deskripsi_judul' => $request->deskripsi_judul,
            'deskripsi' => $request->deskripsi,
        ];

        $landingpage_razenstudio_home->section_1 = json_encode($array);
        $landingpage_razenstudio_home->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 1');
        return redirect()->route('razen-studio.admin.home.atur.index');
    }

    public function lihat_gambar_section1()
    {
        $directory = 'images/landingpage_razenstudio/home';
        $file_info = [];
        $file_ext = array('png','jpg','jpeg');

        $data = LandingpageRazenstudioHome::first();
        if(!$data->gambar_section1)
        {
            return response()->json(['error' => 'not available image']);
        }
        $file_path = File::allFiles(public_path($directory));
        foreach ($file_path as $file) {
            $filename = $file->getFileName();
            $size = $file->getSize();
            $file_info = [
                'name' => $filename,
                'size' => $size,
                'path' => asset($directory.'/'.$filename)
            ];
        }

        return response()->json(['result' => $file_info]);
    }

    public function section_1_store_gambar_section1(Request $request)
    {
        $cek = LandingpageRazenstudioHome::first();
        if($cek)
        {
            $landingpage_razenstudio_home = LandingpageRazenstudioHome::find($cek->id);
        } else {
            $landingpage_razenstudio_home = new LandingpageRazenstudioHome;
        }

        $gambarExtension = $request->file->extension();
        $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
        $gambar = Image::make($request->file);
        $gambarSize = public_path('images/landingpage_razenstudio/home/'.$gambarName);
        $gambar->save($gambarSize, 100);

        $landingpage_razenstudio_home->gambar_section1 = $gambarName;
        $landingpage_razenstudio_home->save();
    }

    public function section_1_hapus_gambar_section1(Request $request)
    {
        $data = LandingpageRazenstudioHome::first();
        $gambarName = $data->gambar_section1;
        File::delete(public_path('images/landingpage_razenstudio/home/'.$gambarName));
        $update_data = LandingpageRazenstudioHome::find($data->id);
        $update_data->gambar_section1 = null;
        $update_data->save();
    }
    //Section 1 End

    //Section 2 Start
    public function section_2_store(Request $request)
    {
        $judul = $request->judul;

        $cek = LandingpageRazenstudioHome::first();
        if($cek)
        {
            foreach ($request->file('gambar') as $file) {
                $gambarExtension = $file->extension();
                $gambarName = uniqid().'-'.date("ymd").'.'.$gambarExtension;
                $gambar = Image::make($file);
                $gambarSize = public_path('images/landingpage_razenstudio/home/'.$gambarName);
                $gambar->save($gambarSize, 60);

                $data[] = $gambarName;
            }

            for ($i=0; $i < count($data); $i++) {
                $array[] = [
                    'id' => uniqid(),
                    'judul' => $judul[$i],
                    'gambar' => $data[$i]
                ];
            }

            $landingpage_razenstudio_home = LandingpageRazenstudioHome::find($cek->id);
            $landingpage_razenstudio_home->section_2 = json_encode($array);
            $landingpage_razenstudio_home->save();

        } else {
            $landingpage_razenstudio_home = new LandingpageRazenstudioHome;
            $landingpage_razenstudio_home->section_2 = json_encode($array);
            $landingpage_razenstudio_home->save();
        }

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 2');
        return redirect()->route('razen-studio.admin.home.atur.index');
    }

    public function section_2_hapus_satu(Request $request)
    {
        $get = LandingpageRazenstudioHome::first();
        $array = [];
        foreach (json_decode($get->section_2) as $value) {
            if($value->id == $request->id)
            {
                File::delete(public_path('images/landingpage_razenstudio/home/'.$value->gambar));
            } else {
                $array[] = [
                    'id' => $value->id,
                    'judul' => $value->judul,
                    'gambar' => $value->gambar
                ];
            }
        }

        $landingpage_razenstudio_home = LandingpageRazenstudioHome::find($get->id);
        $landingpage_razenstudio_home->section_2 = json_encode($array);
        $landingpage_razenstudio_home->save();

        return response()->json('berhasil');
    }

    public function section_2_tambah(Request $request)
    {
        $cek = LandingpageRazenstudioHome::first();
        $judul = $request->judul;

        foreach ($request->file('gambar') as $file) {
            $gambarExtension = $file->extension();
            $gambarName = uniqid().'-'.date("ymd").'.'.$gambarExtension;
            $gambar = Image::make($file);
            $gambarSize = public_path('images/landingpage_razenstudio/home/'.$gambarName);
            $gambar->save($gambarSize, 60);

            $data[] = $gambarName;
        }

        for ($i=0; $i < count($data); $i++) {
            $array1[] = [
                'id' => uniqid(),
                'judul' => $judul[$i],
                'gambar' => $data[$i]
            ];
        }

        foreach (json_decode($cek->section_2) as $value) {
            $array2[] = [
                'id' => $value->id,
                'judul' => $value->judul,
                'gambar' => $value->gambar
            ];
        }

        $array = array_merge($array1, $array2);

        $landingpage_razenstudio_home = LandingpageRazenstudioHome::find($cek->id);
        $landingpage_razenstudio_home->section_2 = json_encode($array);
        $landingpage_razenstudio_home->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 2');
        return redirect()->route('razen-studio.admin.home.atur.index');
    }
    //Section 2 End

    //Section 3 Start
    public function section_3_store(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'sub_judul' => 'required',
            'judul' => 'required',
            'gambar' => 'required | mimes:jpg, png, jpeg',
            'link' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-studio.admin.home.atur.index');
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

        $cek = LandingpageRazenstudioHome::first();
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

        $gambarExtension = $request->gambar->extension();
        $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
        $gambar = Image::make($request->gambar);
        $gambarSize = public_path('images/landingpage_razenstudio/home/'.$gambarName);
        $gambar->save($gambarSize, 100);

        $array = [
            'sub_judul' => $request->sub_judul,
            'judul' => $request->judul,
            'gambar' => $gambarName,
            'url' => $url,
            'konten' => $konten
        ];

        if($cek)
        {
            $landingpage_razenstudio_home = LandingpageRazenstudioHome::find($cek->id);
        } else {
            $landingpage_razenstudio_home = new LandingpageRazenstudioHome;
        }
        $landingpage_razenstudio_home->section_3 = json_encode($array);
        $landingpage_razenstudio_home->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 3');
        return redirect()->route('razen-studio.admin.home.atur.index');
    }

    public function section_3_hapus_satu(Request $request)
    {
        $get = LandingpageRazenstudioHome::first();
        $section3 = json_decode($get->section_3, true);
        $array = [];
        foreach ($section3['konten'] as $value) {
            if($value['id'] != $request->id)
            {
                $array[] = [
                    'id' => $value['id'],
                    'judul_konten' => $value['judul_konten'],
                    'deskripsi_konten' => $value['deskripsi_konten']
                ];
            }
        }

        $data = [
            'sub_judul' => $section3['sub_judul'],
            'judul' => $section3['judul'],
            'gambar' => $section3['gambar'],
            'link' => $section3['link'],
            'konten' => $array
        ];

        $landingpage_razenstudio_home = LandingpageRazenstudioHome::find($get->id);
        $landingpage_razenstudio_home->section_3 = json_encode($data);
        $landingpage_razenstudio_home->save();

        return response()->json('berhasil');
    }

    public function section_3_edit(Request $request)
    {
        $get = LandingpageRazenstudioHome::first();
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
                    'deskripsi_konten' => $deskripsi_konten_baru[$i]
                ];
            }

            $array_lama = [];
            foreach ($section3['konten'] as $value) {
                $array_lama[] = [
                    'id' => $value['id'],
                    'judul_konten' => $value['judul_konten'],
                    'deskripsi_konten' => $value['deskripsi_konten']
                ];
            }

            if($request->gambar)
            {
                File::delete(public_path('images/landingpage_razenstudio/home/'.$section3['gambar']));

                $gambarExtension = $request->gambar->extension();
                $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                $gambar = Image::make($request->gambar);
                $gambarSize = public_path('images/landingpage_razenstudio/home/'.$gambarName);
                $gambar->save($gambarSize, 100);
            } else {
                $gambarName = $section3['gambar'];
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

            $data = [
                'sub_judul' => $request->sub_judul,
                'judul' => $request->judul,
                'gambar' => $gambarName,
                'link' => $url,
                'konten' => array_merge($array_lama, $array_baru)
            ];
        } else {

            $array_lama = [];
            foreach ($section3['konten'] as $value) {
                $array_lama[] = [
                    'id' => $value['id'],
                    'judul_konten' => $value['judul_konten'],
                    'deskripsi_konten' => $value['deskripsi_konten']
                ];
            }

            if($request->gambar)
            {
                File::delete(public_path('images/landingpage_razenstudio/home/'.$section3['gambar']));

                $gambarExtension = $request->gambar->extension();
                $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                $gambar = Image::make($request->gambar);
                $gambarSize = public_path('images/landingpage_razenstudio/home/'.$gambarName);
                $gambar->save($gambarSize, 100);
            } else {
                $gambarName = $section3['gambar'];
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

            $data = [
                'sub_judul' => $request->sub_judul,
                'judul' => $request->judul,
                'gambar' => $gambarName,
                'link' => $url,
                'konten' => $array_lama
            ];
        }

        $landingpage_razenstudio_home = LandingpageRazenstudioHome::find($get->id);
        $landingpage_razenstudio_home->section_3 = json_encode($data);
        $landingpage_razenstudio_home->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 3');
        return redirect()->route('razen-studio.admin.home.atur.index');
    }

    //Section 4 Start
    public function section_4_store(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'sub_judul' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-studio.admin.home.atur.index');
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
            $gambarSize = public_path('images/landingpage_razenstudio/home/'.$gambarName);
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
            'deskripsi' => $request->deskripsi,
            'konten' => $array_konten
        ];

        $cek = LandingpageRazenstudioHome::first();
        if($cek)
        {
            $landingpage_razenstudio_home = LandingpageRazenstudioHome::find($cek->id);
        } else {
            $landingpage_razenstudio_home = new LandingpageRazenstudioHome;
        }

        $landingpage_razenstudio_home->section_4 = json_encode($array_data);
        $landingpage_razenstudio_home->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 4');
        return redirect()->route('razen-studio.admin.home.atur.index');
    }

    public function section_4_edit(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'sub_judul' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-studio.admin.home.atur.index');
        }

        $array_baru = [];
        $array_logo = [];

        if($request->judul_konten && $request->deskripsi_konten && $request->link_konten && $request->logo_konten)
        {
            $judul_konten = $request->judul_konten;
            $deskripsi_konten = $request->deskripsi_konten;
            $link_konten = $request->link_konten;
            $logo_konten = $request->logo_konten;

            foreach ($request->file('logo_konten') as $file) {
                $gambarExtension = $file->extension();
                $gambarName = uniqid().'-'.date("ymd").'.'.$gambarExtension;
                $gambar = Image::make($file);
                $gambarSize = public_path('images/landingpage_razenstudio/home/'.$gambarName);
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
        }

        $get = LandingpageRazenstudioHome::first();
        $section4 = json_decode($get->section_4, true);
        $array_lama = [];

        $array_lama = [];
        foreach ($section4['konten'] as $value) {
            $array_lama[] = [
                'id' => $value['id'],
                'judul_konten' => $value['judul_konten'],
                'deskripsi_konten' => $value['deskripsi_konten'],
                'link_konten' => $value['link_konten'],
                'logo_konten' => $value['logo_konten']
            ];
        }

        $konten = [];
        if(empty($array_baru))
        {
            $konten = $array_lama;
        } else {
            $konten = array_merge($array_lama, $array_baru);
        }

        $array_data = [
            'sub_judul' => $request->sub_judul,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'konten' => $konten
        ];

        $landingpage_razenstudio_home = LandingpageRazenstudioHome::find($get->id);
        $landingpage_razenstudio_home->section_4 = json_encode($array_data);
        $landingpage_razenstudio_home->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 4');
        return redirect()->route('razen-studio.admin.home.atur.index');
    }

    public function section_4_hapus_satu(Request $request)
    {
        $get = LandingpageRazenstudioHome::first();
        $section4 = json_decode($get->section_4, true);
        $array_konten = [];
        foreach ($section4['konten'] as $value) {
            if($value['id'] == $request->id)
            {
                File::delete(public_path('images/landingpage_razenstudio/home/'.$value['logo_konten']));
            } else {
                $array_konten[] = [
                    'id' => $value['id'],
                    'judul_konten' => $value['judul'],
                    'deskripsi_konten' => $value['deskripsi_konten'],
                    'link_konten' => $value['link_konten'],
                    'logo_konten' => $value['logo_konten']
                ];
            }
        }

        $data = [
            'sub_judul' => $section4['sub_judul'],
            'judul' => $section4['judul'],
            'deskripsi' => $section4['deskripsi'],
            'konten' => $array_konten
        ];

        $landingpage_razenstudio_home = LandingpageRazenstudioHome::find($get->id);
        $landingpage_razenstudio_home->section_4 = json_encode($data);
        $landingpage_razenstudio_home->save();

        return response()->json('berhasil');
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
            return redirect()->route('razen-studio.admin.home.atur.index');
        }

        $array_data = [
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
        ];

        $cek = LandingpageRazenstudioHome::first();

        if($cek)
        {
            $landingpage_razenstudio_home = LandingpageRazenstudioHome::find($cek->id);
        } else {
            $landingpage_razenstudio_home = new LandingpageRazenstudioHome;
        }

        $landingpage_razenstudio_home->section_5 = json_encode($array_data);
        $landingpage_razenstudio_home->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 5');
        return redirect()->route('razen-studio.admin.home.atur.index');
    }
    //Section 5 End

    //Section 6 Start
    public function section_6_store(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'judul' => 'required',
            'deskripsi' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-studio.admin.home.atur.index');
        }

        $array_data = [
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
        ];

        $cek = LandingpageRazenstudioHome::first();

        if($cek)
        {
            $landingpage_razenstudio_home = LandingpageRazenstudioHome::find($cek->id);
        } else {
            $landingpage_razenstudio_home = new LandingpageRazenstudioHome;
        }

        $landingpage_razenstudio_home->section_6 = json_encode($array_data);
        $landingpage_razenstudio_home->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 6');
        return redirect()->route('razen-studio.admin.home.atur.index');
    }
    //Section 6 End

    //Section 7 Start
    public function section_7_store(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'judul' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-studio.admin.home.atur.index');
        }

        $cek = LandingpageRazenstudioHome::first();

        if($cek)
        {
            $landingpage_razenstudio_home = LandingpageRazenstudioHome::find($cek->id);
        } else {
            $landingpage_razenstudio_home = new LandingpageRazenstudioHome;
        }

        $landingpage_razenstudio_home->section_7 = $request->judul;
        $landingpage_razenstudio_home->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 7');
        return redirect()->route('razen-studio.admin.home.atur.index');
    }
    //Section 7 End
}
