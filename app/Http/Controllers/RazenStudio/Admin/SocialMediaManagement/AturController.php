<?php

namespace App\Http\Controllers\RazenStudio\Admin\SocialMediaManagement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;
use DB;
use Validator;
use Carbon\Carbon;
use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioSocialMediaManagement;

class AturController extends Controller
{
    public function index()
    {
        return view('razen-studio.admin.landing-page.social-media-management.atur.index');
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
            return redirect()->route('razen-studio.admin.social-media-management.atur.index');
        }

        $cek = LandingpageRazenstudioSocialMediaManagement::first();
        if($cek)
        {
            $landingpage_razenstudio_social_media_management = LandingpageRazenstudioSocialMediaManagement::find($cek->id);
        } else {
            $landingpage_razenstudio_social_media_management = new LandingpageRazenstudioSocialMediaManagement;
        }
        $array = [
            'title' => $request->title,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
        ];

        $landingpage_razenstudio_social_media_management->section_1 = json_encode($array);
        $landingpage_razenstudio_social_media_management->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 1');
        return redirect()->route('razen-studio.admin.social-media-management.atur.index');
    }

    public function section_2_store(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'sub_judul' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-studio.admin.social-media-management.atur.index');
        }

        $cek = LandingpageRazenstudioSocialMediaManagement::first();
        if($cek)
        {
            $landingpage_razenstudio_social_media_management = LandingpageRazenstudioSocialMediaManagement::find($cek->id);
            if($landingpage_razenstudio_social_media_management->section_2)
            {
                $get_section_2 = json_decode($landingpage_razenstudio_social_media_management->section_2, true);

                if ($request->gambar) {
                    $gambarName = $get_section_2['gambar'];
                    File::delete(public_path('images/landingpage_razenstudio/social-media-management/'.$gambarName));

                    $gambarExtension = $request->gambar->extension();
                    $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                    $gambar = Image::make($request->gambar);
                    $gambarSize = public_path('images/landingpage_razenstudio/social-media-management/'.$gambarName);
                    $gambar->save($gambarSize, 100);
                } else {
                    $gambarName = $get_section_2['gambar'];
                }
            } else {
                $gambarExtension = $request->gambar->extension();
                $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                $gambar = Image::make($request->gambar);
                $gambarSize = public_path('images/landingpage_razenstudio/social-media-management/'.$gambarName);
                $gambar->save($gambarSize, 100);
            }
        } else {
            $landingpage_razenstudio_social_media_management = new LandingpageRazenstudioSocialMediaManagement;

            $gambarExtension = $request->gambar->extension();
            $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
            $gambar = Image::make($request->gambar);
            $gambarSize = public_path('images/landingpage_razenstudio/social-media-management/'.$gambarName);
            $gambar->save($gambarSize, 100);
        }

        $array = [
            'sub_judul' => $request->sub_judul,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $gambarName
        ];

        $landingpage_razenstudio_social_media_management->section_2 = json_encode($array);
        $landingpage_razenstudio_social_media_management->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 2');
        return redirect()->route('razen-studio.admin.social-media-management.atur.index');
    }

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
            return redirect()->route('razen-studio.admin.social-media-management.atur.index');
        }

        $cek = LandingpageRazenstudioSocialMediaManagement::first();
        if($cek)
        {
            $landingpage_razenstudio_social_media_management = LandingpageRazenstudioSocialMediaManagement::find($cek->id);
            if($landingpage_razenstudio_social_media_management->section_3)
            {
                $get_section_3 = json_decode($landingpage_razenstudio_social_media_management->section_3, true);

                if ($request->gambar) {
                    $gambarName = $get_section_3['gambar'];
                    File::delete(public_path('images/landingpage_razenstudio/social-media-management/'.$gambarName));

                    $gambarExtension = $request->gambar->extension();
                    $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                    $gambar = Image::make($request->gambar);
                    $gambarSize = public_path('images/landingpage_razenstudio/social-media-management/'.$gambarName);
                    $gambar->save($gambarSize, 100);
                } else {
                    $gambarName = $get_section_3['gambar'];
                }
            } else {
                $gambarExtension = $request->gambar->extension();
                $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                $gambar = Image::make($request->gambar);
                $gambarSize = public_path('images/landingpage_razenstudio/social-media-management/'.$gambarName);
                $gambar->save($gambarSize, 100);
            }
        } else {
            $landingpage_razenstudio_social_media_management = new LandingpageRazenstudioSocialMediaManagement;

            $gambarExtension = $request->gambar->extension();
            $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
            $gambar = Image::make($request->gambar);
            $gambarSize = public_path('images/landingpage_razenstudio/social-media-management/'.$gambarName);
            $gambar->save($gambarSize, 100);
        }

        $array = [
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $gambarName,
            'item' => []
        ];

        $landingpage_razenstudio_social_media_management->section_3 = json_encode($array);
        $landingpage_razenstudio_social_media_management->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 3');
        return redirect()->route('razen-studio.admin.social-media-management.atur.index');
    }

    public function section_3_item_1_store(Request $request)
    {
        $cek = LandingpageRazenstudioSocialMediaManagement::first();
        if($cek)
        {
            $landingpage_razenstudio_social_media_management = LandingpageRazenstudioSocialMediaManagement::find($cek->id);
            $section3 = json_decode($landingpage_razenstudio_social_media_management->section_3, true);
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

            $landingpage_razenstudio_social_media_management->section_3 = json_encode($data);
            $landingpage_razenstudio_social_media_management->save();

            Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 3');
            return redirect()->route('razen-studio.admin.social-media-management.atur.index');
        } else {
            Alert::error('Gagal Menyimpan!', 'Tidak dapat menyimpan karena tidak ada data');
            return redirect()->route('razen-studio.admin.social-media-management.atur.index');
        }
    }

    public function section_3_item_2_store(Request $request)
    {
        $cek = LandingpageRazenstudioSocialMediaManagement::first();
        if($cek)
        {
            $landingpage_razenstudio_social_media_management = LandingpageRazenstudioSocialMediaManagement::find($cek->id);
            $section3 = json_decode($landingpage_razenstudio_social_media_management->section_3, true);
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

            $landingpage_razenstudio_social_media_management->section_3 = json_encode($data);
            $landingpage_razenstudio_social_media_management->save();

            Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 3');
            return redirect()->route('razen-studio.admin.social-media-management.atur.index');
        } else {
            Alert::error('Gagal Menyimpan!', 'Tidak dapat menyimpan karena tidak ada data');
            return redirect()->route('razen-studio.admin.social-media-management.atur.index');
        }
    }

    public function section_3_item_3_store(Request $request)
    {
        $cek = LandingpageRazenstudioSocialMediaManagement::first();
        if($cek)
        {
            $landingpage_razenstudio_social_media_management = LandingpageRazenstudioSocialMediaManagement::find($cek->id);
            $section3 = json_decode($landingpage_razenstudio_social_media_management->section_3, true);
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

            $landingpage_razenstudio_social_media_management->section_3 = json_encode($data);
            $landingpage_razenstudio_social_media_management->save();

            Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 3');
            return redirect()->route('razen-studio.admin.social-media-management.atur.index');
        } else {
            Alert::error('Gagal Menyimpan!', 'Tidak dapat menyimpan karena tidak ada data');
            return redirect()->route('razen-studio.admin.social-media-management.atur.index');
        }
    }

    public function section_3_item_4_store(Request $request)
    {
        $cek = LandingpageRazenstudioSocialMediaManagement::first();
        if($cek)
        {
            $landingpage_razenstudio_social_media_management = LandingpageRazenstudioSocialMediaManagement::find($cek->id);
            $section3 = json_decode($landingpage_razenstudio_social_media_management->section_3, true);
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

            $landingpage_razenstudio_social_media_management->section_3 = json_encode($data);
            $landingpage_razenstudio_social_media_management->save();

            Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 3');
            return redirect()->route('razen-studio.admin.social-media-management.atur.index');
        } else {
            Alert::error('Gagal Menyimpan!', 'Tidak dapat menyimpan karena tidak ada data');
            return redirect()->route('razen-studio.admin.social-media-management.atur.index');
        }
    }

    //Section 4 Start
    public function section_4_store(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'judul' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-studio.admin.social-media-management.atur.index');
        }

        $gambarExtension = $request->gambar->extension();
        $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
        $gambar = Image::make($request->gambar);
        $gambarSize = public_path('images/landingpage_razenstudio/social-media-management/'.$gambarName);
        $gambar->save($gambarSize, 100);

        $cek = LandingpageRazenstudioSocialMediaManagement::first();
        if($cek)
        {
            $landingpage_razenstudio_social_media_management = LandingpageRazenstudioSocialMediaManagement::find($cek->id);
            if($landingpage_razenstudio_social_media_management->section_4)
            {
                $section_4 = json_decode($landingpage_razenstudio_social_media_management->section_4, true);
                $array_lama = [];

                foreach ($section_4 as $item) {
                    $array_lama[] = [
                        'id' => $item['id'],
                        'judul' => $item['judul'],
                        'deskripsi' => $item['deskripsi'],
                        'gambar' => $item['gambar'],
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
                $array[] = [
                    'id' => uniqid(),
                    'judul' => $request->judul,
                    'deskripsi' => $request->deskripsi,
                    'gambar' => $gambarName
                ];
            }

        } else {
            $landingpage_razenstudio_social_media_management = new LandingpageRazenstudioSocialMediaManagement;
            $array[] = [
                'id' => uniqid(),
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
                'gambar' => $gambarName,
            ];
        }

        $landingpage_razenstudio_social_media_management->section_4 = json_encode($array);
        $landingpage_razenstudio_social_media_management->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 4');
        return redirect()->route('razen-studio.admin.social-media-management.atur.index');
    }

    public function section_4_hapus_satu(Request $request)
    {
        $get = LandingpageRazenstudioSocialMediaManagement::first();
        $array = [];
        foreach (json_decode($get->section_4) as $value) {
            if($value->id != $request->id)
            {
                $array[] = [
                    'id' => $value->id,
                    'judul' => $value->judul,
                    'deskripsi' => $value->deskripsi,
                    'gambar' => $value->gambar,
                ];
            } else {
                File::delete(public_path('images/landingpage_razenstudio/social-media-management/'.$value->gambar));
            }
        }

        $landingpage_razenstudio_footer = LandingpageRazenstudioSocialMediaManagement::find($get->id);
        $landingpage_razenstudio_footer->section_4 = json_encode($array);
        $landingpage_razenstudio_footer->save();

        return response()->json('berhasil');
    }
    //Section 4 End

    public function section_5_store(Request $request)
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
            return redirect()->route('razen-studio.admin.social-media-management.atur.index');
        }

        $cek = LandingpageRazenstudioSocialMediaManagement::first();
        if($cek)
        {
            $landingpage_razenstudio_social_media_management = LandingpageRazenstudioSocialMediaManagement::find($cek->id);
            if($landingpage_razenstudio_social_media_management->section_5)
            {
                $get_section_5 = json_decode($landingpage_razenstudio_social_media_management->section_5, true);

                if ($request->gambar) {
                    $gambarName = $get_section_5['gambar'];
                    File::delete(public_path('images/landingpage_razenstudio/social-media-management/'.$gambarName));

                    $gambarExtension = $request->gambar->extension();
                    $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                    $gambar = Image::make($request->gambar);
                    $gambarSize = public_path('images/landingpage_razenstudio/social-media-management/'.$gambarName);
                    $gambar->save($gambarSize, 100);
                } else {
                    $gambarName = $get_section_5['gambar'];
                }
            } else {
                $gambarExtension = $request->gambar->extension();
                $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                $gambar = Image::make($request->gambar);
                $gambarSize = public_path('images/landingpage_razenstudio/social-media-management/'.$gambarName);
                $gambar->save($gambarSize, 100);
            }
        } else {
            $landingpage_razenstudio_social_media_management = new LandingpageRazenstudioSocialMediaManagement;

            $gambarExtension = $request->gambar->extension();
            $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
            $gambar = Image::make($request->gambar);
            $gambarSize = public_path('images/landingpage_razenstudio/social-media-management/'.$gambarName);
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

        $landingpage_razenstudio_social_media_management->section_5 = json_encode($array);
        $landingpage_razenstudio_social_media_management->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 5');
        return redirect()->route('razen-studio.admin.social-media-management.atur.index');
    }

    public function section_6_store(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'judul' => 'required',
            'gambar_before' => 'required',
            'gambar_after' => 'required',
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-studio.admin.social-media-management.atur.index');
        }

        $cek = LandingpageRazenstudioSocialMediaManagement::first();
        if($cek)
        {
            $landingpage_razenstudio_social_media_management = LandingpageRazenstudioSocialMediaManagement::find($cek->id);
            if($landingpage_razenstudio_social_media_management->section_6)
            {
                $get_section_6 = json_decode($landingpage_razenstudio_social_media_management->section_6, true);

                if ($request->gambar_before) {
                    $gambarBeforeName = $get_section_6['gambar_before'];
                    File::delete(public_path('images/landingpage_razenstudio/social-media-management/'.$gambarBeforeName));

                    $gambarBeforeExtension = $request->gambar_before->extension();
                    $gambarBeforeName =  uniqid().'-'.date("ymd").'.'.$gambarBeforeExtension;
                    $gambarBefore = Image::make($request->gambar_before);
                    $gambarBeforeSize = public_path('images/landingpage_razenstudio/social-media-management/'.$gambarBeforeName);
                    $gambarBefore->save($gambarBeforeSize, 100);
                } else {
                    $gambarBeforeName = $get_section_6['gambar_before'];
                }

                if ($request->gambar_after) {
                    $gambarAfterName = $get_section_6['gambar_after'];
                    File::delete(public_path('images/landingpage_razenstudio/social-media-management/'.$gambarAfterName));

                    $gambarAfterExtension = $request->gambar_after->extension();
                    $gambarAfterName =  uniqid().'-'.date("ymd").'.'.$gambarAfterExtension;
                    $gambarAfter = Image::make($request->gambar_after);
                    $gambarAfterSize = public_path('images/landingpage_razenstudio/social-media-management/'.$gambarAfterName);
                    $gambarAfter->save($gambarAfterSize, 100);
                } else {
                    $gambarAfterName = $get_section_6['gambar_after'];
                }
            } else {
                $gambarBeforeExtension = $request->gambar_before->extension();
                $gambarBeforeName =  uniqid().'-'.date("ymd").'.'.$gambarBeforeExtension;
                $gambarBefore = Image::make($request->gambar_before);
                $gambarBeforeSize = public_path('images/landingpage_razenstudio/social-media-management/'.$gambarBeforeName);
                $gambarBefore->save($gambarBeforeSize, 100);

                $gambarAfterExtension = $request->gambar_after->extension();
                $gambarAfterName =  uniqid().'-'.date("ymd").'.'.$gambarAfterExtension;
                $gambarAfter = Image::make($request->gambar_after);
                $gambarAfterSize = public_path('images/landingpage_razenstudio/social-media-management/'.$gambarAfterName);
                $gambarAfter->save($gambarAfterSize, 100);
            }
        } else {
            $landingpage_razenstudio_social_media_management = new LandingpageRazenstudioSocialMediaManagement;

            $gambarBeforeExtension = $request->gambar_before->extension();
            $gambarBeforeName =  uniqid().'-'.date("ymd").'.'.$gambarBeforeExtension;
            $gambarBefore = Image::make($request->gambar_before);
            $gambarBeforeSize = public_path('images/landingpage_razenstudio/social-media-management/'.$gambarBeforeName);
            $gambarBefore->save($gambarBeforeSize, 100);

            $gambarAfterExtension = $request->gambar_after->extension();
            $gambarAfterName =  uniqid().'-'.date("ymd").'.'.$gambarAfterExtension;
            $gambarAfter = Image::make($request->gambar_after);
            $gambarAfterSize = public_path('images/landingpage_razenstudio/social-media-management/'.$gambarAfterName);
            $gambarAfter->save($gambarAfterSize, 100);
        }

        $array = [
            'judul' => $request->judul,
            'gambar_before' => $gambarBeforeName,
            'gambar_after' => $gambarAfterName,
        ];

        $landingpage_razenstudio_social_media_management->section_6 = json_encode($array);
        $landingpage_razenstudio_social_media_management->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 6');
        return redirect()->route('razen-studio.admin.social-media-management.atur.index');
    }

    public function section_7_store(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'judul' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-studio.admin.social-media-management.atur.index');
        }

        $cek = LandingpageRazenstudioSocialMediaManagement::first();
        if($cek)
        {
            $landingpage_razenstudio_social_media_management = LandingpageRazenstudioSocialMediaManagement::find($cek->id);
        } else {
            $landingpage_razenstudio_social_media_management = new LandingpageRazenstudioSocialMediaManagement;
        }
        $array = [
            'judul' => $request->judul
        ];

        $landingpage_razenstudio_social_media_management->section_7 = json_encode($array);
        $landingpage_razenstudio_social_media_management->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 7');
        return redirect()->route('razen-studio.admin.social-media-management.atur.index');
    }

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
            return redirect()->route('razen-studio.admin.social-media-management.atur.index');
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
            $gambarSize = public_path('images/landingpage_razenstudio/social-media-management/'.$gambarName);
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

        $cek = LandingpageRazenstudioSocialMediaManagement::first();
        if($cek)
        {
            $landingpage_razenstudio_social_media_management  = LandingpageRazenstudioSocialMediaManagement::find($cek->id);
        } else {
            $landingpage_razenstudio_social_media_management  = new LandingpageRazenstudioSocialMediaManagement;
        }

        $landingpage_razenstudio_social_media_management ->section_8 = json_encode($array_data);
        $landingpage_razenstudio_social_media_management ->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 8');
        return redirect()->route('razen-studio.admin.social-media-management.atur.index');
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
            return redirect()->route('razen-studio.admin.social-media-management.atur.index');
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
            $gambarSize = public_path('images/landingpage_razenstudio/social-media-management/'.$gambarName);
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

        $get = LandingpageRazenstudioSocialMediaManagement::first();
        $section8 = json_decode($get->section_8, true);
        $array_lama = [];

        $array_lama = [];
        foreach ($section8['konten'] as $value) {
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

        $landingpage_razenstudio_social_media_management  = LandingpageRazenstudioSocialMediaManagement::find($get->id);
        $landingpage_razenstudio_social_media_management ->section_8 = json_encode($array_data);
        $landingpage_razenstudio_social_media_management ->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 8');
        return redirect()->route('razen-studio.admin.social-media-management.atur.index');
    }

    public function section_8_hapus_satu(Request $request)
    {
        $get = LandingpageRazenstudioSocialMediaManagement::first();
        $section8 = json_decode($get->section_8, true);
        $array_konten = [];
        foreach ($section8['konten'] as $value) {
            if($value['id'] == $request->id)
            {
                File::delete(public_path('images/landingpage_razenstudio/social-media-management/'.$value['gambar_konten']));
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
            'sub_judul' => $section8['sub_judul'],
            'judul' => $section8['judul'],
            'konten' => $array_konten
        ];

        $landingpage_razenstudio_social_media_management  = LandingpageRazenstudioSocialMediaManagement::find($get->id);
        $landingpage_razenstudio_social_media_management ->section_8 = json_encode($data);
        $landingpage_razenstudio_social_media_management ->save();

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
            return redirect()->route('razen-studio.admin.social-media-management.atur.index');
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
            $gambarSize = public_path('images/landingpage_razenstudio/social-media-management/'.$gambarName);
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

        $cek = LandingpageRazenstudioSocialMediaManagement::first();
        if($cek)
        {
            $landingpage_razenstudio_social_media_management  = LandingpageRazenstudioSocialMediaManagement::find($cek->id);
        } else {
            $landingpage_razenstudio_social_media_management  = new LandingpageRazenstudioSocialMediaManagement;
        }

        $landingpage_razenstudio_social_media_management ->section_9 = json_encode($array_data);
        $landingpage_razenstudio_social_media_management ->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 9');
        return redirect()->route('razen-studio.admin.social-media-management.atur.index');
    }

    public function section_9_edit(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'sub_judul' => 'required',
            'judul' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-studio.admin.social-media-management.atur.index');
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
            $gambarSize = public_path('images/landingpage_razenstudio/social-media-management/'.$gambarName);
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

        $get = LandingpageRazenstudioSocialMediaManagement::first();
        $section9 = json_decode($get->section_9, true);
        $array_lama = [];

        $array_lama = [];
        foreach ($section9['konten'] as $value) {
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

        $landingpage_razenstudio_social_media_management  = LandingpageRazenstudioSocialMediaManagement::find($get->id);
        $landingpage_razenstudio_social_media_management ->section_9 = json_encode($array_data);
        $landingpage_razenstudio_social_media_management ->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 9');
        return redirect()->route('razen-studio.admin.social-media-management.atur.index');
    }

    public function section_9_hapus_satu(Request $request)
    {
        $get = LandingpageRazenstudioSocialMediaManagement::first();
        $section9 = json_decode($get->section_9, true);
        $array_konten = [];
        foreach ($section9['konten'] as $value) {
            if($value['id'] == $request->id)
            {
                File::delete(public_path('images/landingpage_razenstudio/social-media-management/'.$value['logo_konten']));
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
            'sub_judul' => $section9['sub_judul'],
            'judul' => $section9['judul'],
            'konten' => $array_konten
        ];

        $landingpage_razenstudio_social_media_management  = LandingpageRazenstudioSocialMediaManagement::find($get->id);
        $landingpage_razenstudio_social_media_management ->section_9 = json_encode($data);
        $landingpage_razenstudio_social_media_management ->save();

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
            return redirect()->route('razen-studio.admin.social-media-management.atur.index');
        }

        $cek = LandingpageRazenstudioSocialMediaManagement::first();
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
            $landingpage_razenstudio_social_media_management = LandingpageRazenstudioSocialMediaManagement::find($cek->id);
        } else {
            $landingpage_razenstudio_social_media_management = new LandingpageRazenstudioSocialMediaManagement;
        }
        $landingpage_razenstudio_social_media_management->section_10 = json_encode($array);
        $landingpage_razenstudio_social_media_management->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 10');
        return redirect()->route('razen-studio.admin.social-media-management.atur.index');
    }

    public function section_10_hapus_satu(Request $request)
    {
        $get = LandingpageRazenstudioSocialMediaManagement::first();
        $section10 = json_decode($get->section_10, true);
        $array = [];
        foreach ($section10['konten'] as $value) {
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
            'sub_judul' => $section10['sub_judul'],
            'judul' => $section10['judul'],
            'konten' => $array
        ];

        $landingpage_razenstudio_social_media_management = LandingpageRazenstudioSocialMediaManagement::find($get->id);
        $landingpage_razenstudio_social_media_management->section_10 = json_encode($data);
        $landingpage_razenstudio_social_media_management->save();

        return response()->json('berhasil');
    }

    public function section_10_edit(Request $request)
    {
        $get = LandingpageRazenstudioSocialMediaManagement::first();
        $section10 = json_decode($get->section_10, true);

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
            foreach ($section10['konten'] as $value) {
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
            foreach ($section10['konten'] as $value) {
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

        $landingpage_razenstudio_social_media_management = LandingpageRazenstudioSocialMediaManagement::find($get->id);
        $landingpage_razenstudio_social_media_management->section_10 = json_encode($data);
        $landingpage_razenstudio_social_media_management->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 10');
        return redirect()->route('razen-studio.admin.social-media-management.atur.index');
    }
    //Section 10 End
}
