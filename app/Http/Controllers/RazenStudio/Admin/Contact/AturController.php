<?php

namespace App\Http\Controllers\RazenStudio\Admin\Contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;
use DB;
use Validator;
use Carbon\Carbon;
use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioContact;

class AturController extends Controller
{
    public function index()
    {
        return view('razen-studio.admin.landing-page.contact.index');
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
            return redirect()->route('razen-studio.admin.contact.atur.index');
        }

        $cek = LandingpageRazenstudioContact::first();
        if($cek)
        {
            $landingpage_razenstudio_contact = LandingpageRazenstudioContact::find($cek->id);
        } else {
            $landingpage_razenstudio_contact = new LandingpageRazenstudioContact;
        }
        $array = [
            'title' => $request->title,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
        ];

        $landingpage_razenstudio_contact->section_1 = json_encode($array);
        $landingpage_razenstudio_contact->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 1');
        return redirect()->route('razen-studio.admin.contact.atur.index');
    }

    //Section 2 Start
    public function section_2_store(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'judul' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-studio.admin.contact.atur.index');
        }

        $cek = LandingpageRazenstudioContact::first();
        if($cek)
        {
            $landingpage_razenstudio_contact = LandingpageRazenstudioContact::find($cek->id);
            if($landingpage_razenstudio_contact->section_2)
            {
                $gambarExtension = $request->gambar->extension();
                $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                $gambar = Image::make($request->gambar);
                $gambarSize = public_path('images/landingpage_razenstudio/contact/'.$gambarName);
                $gambar->save($gambarSize, 100);

                $section_2 = json_decode($landingpage_razenstudio_contact->section_2, true);
                $array_lama = [];

                foreach ($section_2 as $item) {
                    $array_lama[] = [
                        'id' => $item['id'],
                        'judul' => $item['judul'],
                        'deskripsi' => $item['deskripsi'],
                        'gambar' => $item['gambar']
                    ];
                }

                $array_baru[] = [
                    'id' => uniqid(),
                    'judul' => $request->judul,
                    'deskripsi' => $request->deskripsi,
                    'gambar' => $gambarName
                ];

                $array = array_merge($array_lama, $array_baru);

            } else {
                $gambarExtension = $request->gambar->extension();
                $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                $gambar = Image::make($request->gambar);
                $gambarSize = public_path('images/landingpage_razenstudio/contact/'.$gambarName);
                $gambar->save($gambarSize, 100);

                $array[] = [
                    'id' => uniqid(),
                    'judul' => $request->judul,
                    'deskripsi' => $request->deskripsi,
                    'gambar' => $gambarName,
                ];
            }

        } else {
            $landingpage_razenstudio_contact = new LandingpageRazenstudioContact;

            $gambarExtension = $request->gambar->extension();
            $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
            $gambar = Image::make($request->gambar);
            $gambarSize = public_path('images/landingpage_razenstudio/contact/'.$gambarName);
            $gambar->save($gambarSize, 100);

            $array[] = [
                'id' => uniqid(),
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
                'gambar' => $request->gambarName
            ];
        }

        $landingpage_razenstudio_contact->section_2 = json_encode($array);
        $landingpage_razenstudio_contact->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 2');
        return redirect()->route('razen-studio.admin.contact.atur.index');
    }

    public function section_2_hapus_satu(Request $request)
    {
        $get = LandingpageRazenstudioContact::first();
        $array = [];
        foreach (json_decode($get->section_2) as $value) {
            if($value->id != $request->id)
            {
                $array[] = [
                    'id' => $value->id,
                    'judul' => $value->judul,
                    'deskripsi' => $value->deskripsi,
                    'gambar' => $value->gambar,
                ];
            } else {
                File::delete(public_path('images/landingpage_razenstudio/about/'.$value->gambar));
            }
        }

        $landingpage_razenstudio_contact = LandingpageRazenstudioContact::find($get->id);
        $landingpage_razenstudio_contact->section_2 = json_encode($array);
        $landingpage_razenstudio_contact->save();

        return response()->json('berhasil');
    }
    //Section 2 End

    public function section_3_store(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'judul' => 'required',
            'deskripsi' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-studio.admin.contact.atur.index');
        }

        $cek = LandingpageRazenstudioContact::first();
        if($cek)
        {
            $landingpage_razenstudio_contact = LandingpageRazenstudioContact::find($cek->id);
            $section_3 = json_decode($landingpage_razenstudio_contact->section_3, true);
            $array = [
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
                'konsultasi' => $section_3['konsultasi'],
                'office' => $section_3['office'],
                'studio_learning_center' => $section_3['studio_learning_center']
            ];
        } else {
            $landingpage_razenstudio_contact = new LandingpageRazenstudioContact;
            $array = [
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
                'konsultasi' => [],
                'office' => [],
                'studio_learning_center' => []
            ];
        }

        $landingpage_razenstudio_contact->section_3 = json_encode($array);
        $landingpage_razenstudio_contact->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 3');
        return redirect()->route('razen-studio.admin.contact.atur.index');
    }

    public function section_3_konsultasi_store(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'no_wa' => 'required',
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-studio.admin.contact.atur.index');
        }

        $cek = LandingpageRazenstudioContact::first();
        if($cek)
        {
            $landingpage_razenstudio_contact = LandingpageRazenstudioContact::find($cek->id);
            $section_3 = json_decode($landingpage_razenstudio_contact->section_3, true);
            $konsultasi = [
                'konsultasi' => $request->no_wa
            ];

            $array = [
                'judul' => $section_3['judul'],
                'deskripsi' => $section_3['deskripsi'],
                'konsultasi' => $konsultasi,
                'office' => $section_3['office'],
                'studio_learning_center' => $section_3['studio_learning_center']
            ];

            $landingpage_razenstudio_contact->section_3 = json_encode($array);
            $landingpage_razenstudio_contact->save();

            Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 3 Konsultasi');
            return redirect()->route('razen-studio.admin.contact.atur.index');

        } else {
            Alert::error('Gagal Menyimpan!', 'Silahkan isi form pertama terlebih dahulu!');
            return redirect()->route('razen-studio.admin.contact.atur.index');
        }
    }

    public function section_3_office_store(Request $request)
    {
        $cek = LandingpageRazenstudioContact::first();
        if($cek)
        {
            $nama = $request->nama;
            $alamat = $request->alamat;

            $office_baru = [];

            for ($i=0; $i < count($nama); $i++) {
                $office_baru[] = [
                    'id' => uniqid(),
                    'nama' => $nama[$i],
                    'alamat' => $alamat[$i]
                ];
            }

            $landingpage_razenstudio_contact = LandingpageRazenstudioContact::find($cek->id);
            $section_3 = json_decode($landingpage_razenstudio_contact->section_3, true);
            $cek_office = $section_3['office'];

            if($cek_office)
            {
                $office_lama = [];
                foreach ($cek_office as $value) {
                    $office_lama[] = [
                        'id' => $value['id'],
                        'nama' => $value['nama'],
                        'alamat' => $value['alamat']
                    ];
                }
                $office = array_merge($office_lama, $office_baru);
            } else {
                $office = $office_baru;
            }

            $array = [
                'judul' => $section_3['judul'],
                'deskripsi' => $section_3['deskripsi'],
                'konsultasi' => $section_3['konsultasi'],
                'office' => $office,
                'studio_learning_center' => $section_3['studio_learning_center']
            ];

            $landingpage_razenstudio_contact->section_3 = json_encode($array);
            $landingpage_razenstudio_contact->save();

            Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 3 Office');
            return redirect()->route('razen-studio.admin.contact.atur.index');
        } else {
            Alert::error('Gagal Menyimpan!', 'Silahkan isi form pertama terlebih dahulu!');
            return redirect()->route('razen-studio.admin.contact.atur.index');
        }
    }

    public function section_3_office_hapus_satu(Request $request)
    {
        $get = LandingpageRazenstudioContact::first();
        $section3 = json_decode($get->section_3, true);
        $array = [];
        foreach ($section3['office'] as $value) {
            if($value['id'] != $request->id)
            {
                $array[] = [
                    'id' => $value['id'],
                    'nama' => $value['nama'],
                    'alamat' => $value['alamat'],
                ];
            }
        }

        $data = [
            'judul' => $section3['judul'],
            'deskripsi' => $section3['deskripsi'],
            'konsultasi' => $section3['konsultasi'],
            'office' => $array,
            'studio_learning_center' => $section3['studio_learning_center']
        ];

        $landingpage_razenstudio_contact = LandingpageRazenstudioContact::find($get->id);
        $landingpage_razenstudio_contact->section_3 = json_encode($data);
        $landingpage_razenstudio_contact->save();

        return response()->json('berhasil');
    }

    public function section_3_office_edit(Request $request)
    {
        $get = LandingpageRazenstudioContact::first();
        $section3 = json_decode($get->section_3, true);

        if($request->nama)
        {
            $nama_baru = $request->nama;
            $alamat_baru = $request->alamat;

            $office_baru = [];
            for ($i=0; $i < count($nama_baru); $i++) {
                $office_baru[] = [
                    'id' => uniqid(),
                    'nama' => $nama_baru[$i],
                    'alamat' => $alamat_baru[$i],
                ];
            }

            $office = $section3['office'];
            $office_lama = [];
            foreach ($office as $value) {
                $office_lama[] = [
                    'id' => $value['id'],
                    'nama' => $value['nama'],
                    'alamat' => $value['alamat'],
                ];
            }

            $data = [
                'judul' => $section3['judul'],
                'deskripsi' => $section3['deskripsi'],
                'konsultasi' => $section3['konsultasi'],
                'office' => array_merge($office_lama, $office_baru),
                'studio_learning_center' => $section3['studio_learning_center']
            ];
        } else {
            $office = $section3['office'];
            $office_lama = [];
            foreach ($office as $value) {
                $office_lama[] = [
                    'id' => $value['id'],
                    'nama' => $value['nama'],
                    'alamat' => $value['alamat'],
                ];
            }

            $data = [
                'judul' => $section3['judul'],
                'deskripsi' => $section3['deskripsi'],
                'konsultasi' => $section3['konsultasi'],
                'office' => $office_lama,
                'studio_learning_center' => $section3['studio_learning_center']
            ];
        }

        $landingpage_razenstudio_contact = LandingpageRazenstudioContact::find($get->id);
        $landingpage_razenstudio_contact->section_3 = json_encode($data);
        $landingpage_razenstudio_contact->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 3 Office');
        return redirect()->route('razen-studio.admin.contact.atur.index');
    }

    public function section_3_studio_learning_center_store(Request $request)
    {
        $cek = LandingpageRazenstudioContact::first();
        if($cek)
        {
            $nama = $request->nama;
            $alamat = $request->alamat;

            $studio_learning_center_baru = [];

            for ($i=0; $i < count($nama); $i++) {
                $studio_learning_center_baru[] = [
                    'id' => uniqid(),
                    'nama' => $nama[$i],
                    'alamat' => $alamat[$i]
                ];
            }

            $landingpage_razenstudio_contact = LandingpageRazenstudioContact::find($cek->id);
            $section_3 = json_decode($landingpage_razenstudio_contact->section_3, true);
            $cek_studio_learning_center = $section_3['studio_learning_center'];

            if($cek_studio_learning_center)
            {
                $studio_learning_center_lama = [];
                foreach ($cek_studio_learning_center as $value) {
                    $studio_learning_center_lama[] = [
                        'id' => $value['id'],
                        'nama' => $value['nama'],
                        'alamat' => $value['alamat']
                    ];
                }
                $studio_learning_center = array_merge($studio_learning_center_lama, $studio_learning_center_baru);
            } else {
                $studio_learning_center = $studio_learning_center_baru;
            }

            $array = [
                'judul' => $section_3['judul'],
                'deskripsi' => $section_3['deskripsi'],
                'konsultasi' => $section_3['konsultasi'],
                'office' => $section_3['office'],
                'studio_learning_center' => $studio_learning_center
            ];

            $landingpage_razenstudio_contact->section_3 = json_encode($array);
            $landingpage_razenstudio_contact->save();

            Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 3 Studio Learning Center');
            return redirect()->route('razen-studio.admin.contact.atur.index');
        } else {
            Alert::error('Gagal Menyimpan!', 'Silahkan isi form pertama terlebih dahulu!');
            return redirect()->route('razen-studio.admin.contact.atur.index');
        }
    }

    public function section_3_studio_learning_center_hapus_satu(Request $request)
    {
        $get = LandingpageRazenstudioContact::first();
        $section3 = json_decode($get->section_3, true);
        $array = [];
        foreach ($section3['studio_learning_center'] as $value) {
            if($value['id'] != $request->id)
            {
                $array[] = [
                    'id' => $value['id'],
                    'nama' => $value['nama'],
                    'alamat' => $value['alamat'],
                ];
            }
        }

        $data = [
            'judul' => $section3['judul'],
            'deskripsi' => $section3['deskripsi'],
            'konsultasi' => $section3['konsultasi'],
            'office' => $section3['office'],
            'studio_learning_center' => $array
        ];

        $landingpage_razenstudio_contact = LandingpageRazenstudioContact::find($get->id);
        $landingpage_razenstudio_contact->section_3 = json_encode($data);
        $landingpage_razenstudio_contact->save();

        return response()->json('berhasil');
    }

    public function section_3_studio_learning_center_edit(Request $request)
    {
        $get = LandingpageRazenstudioContact::first();
        $section3 = json_decode($get->section_3, true);

        if($request->nama)
        {
            $nama_baru = $request->nama;
            $alamat_baru = $request->alamat;

            $studio_learning_center_baru = [];
            for ($i=0; $i < count($nama_baru); $i++) {
                $studio_learning_center_baru[] = [
                    'id' => uniqid(),
                    'nama' => $nama_baru[$i],
                    'alamat' => $alamat_baru[$i],
                ];
            }

            $studio_learning_center = $section3['studio_learning_center'];
            $studio_learning_center_lama = [];
            foreach ($studio_learning_center as $value) {
                $studio_learning_center_lama[] = [
                    'id' => $value['id'],
                    'nama' => $value['nama'],
                    'alamat' => $value['alamat'],
                ];
            }

            $data = [
                'judul' => $section3['judul'],
                'deskripsi' => $section3['deskripsi'],
                'konsultasi' => $section3['konsultasi'],
                'office' => $section3['office'],
                'studio_learning_center' => array_merge($studio_learning_center_lama, $studio_learning_center_baru)
            ];
        } else {
            $studio_learning_center = $section3['studio_learning_center'];
            $studio_learning_center_lama = [];
            foreach ($studio_learning_center as $value) {
                $studio_learning_center_lama[] = [
                    'id' => $value['id'],
                    'nama' => $value['nama'],
                    'alamat' => $value['alamat'],
                ];
            }

            $data = [
                'judul' => $section3['judul'],
                'deskripsi' => $section3['deskripsi'],
                'konsultasi' => $section3['konsultasi'],
                'office' => $section3['office'],
                'studio_learning_center' => $studio_learning_center_lama
            ];
        }

        $landingpage_razenstudio_contact = LandingpageRazenstudioContact::find($get->id);
        $landingpage_razenstudio_contact->section_3 = json_encode($data);
        $landingpage_razenstudio_contact->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 3 Studio Learning Center');
        return redirect()->route('razen-studio.admin.contact.atur.index');
    }

    public function section_4_store(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'judul' => 'required',
            'no_wa' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-studio.admin.contact.atur.index');
        }

        $cek = LandingpageRazenstudioContact::first();
        if($cek)
        {
            $landingpage_razenstudio_contact = LandingpageRazenstudioContact::find($cek->id);
        } else {
            $landingpage_razenstudio_contact = new LandingpageRazenstudioContact;
        }
        $array = [
            'judul' => $request->judul,
            'no_wa' => $request->no_wa,
        ];

        $landingpage_razenstudio_contact->section_4 = json_encode($array);
        $landingpage_razenstudio_contact->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 4');
        return redirect()->route('razen-studio.admin.contact.atur.index');
    }
}
