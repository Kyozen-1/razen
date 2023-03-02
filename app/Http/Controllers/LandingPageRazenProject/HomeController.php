<?php

namespace App\Http\Controllers\LandingPageRazenProject;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;
use DB;
use Validator;
use DataTables;
use Carbon\Carbon;
use Auth;
use App\Models\RazenProject\Admin\MasterMediaSosial;
use App\Models\RazenProject\Admin\PivotProfilRazenProjectMediaSosial;
use App\Models\RazenProject\Admin\ProfilRazenProject;

class HomeController extends Controller
{
    public function home()
    {
        $profil = ProfilRazenProject::first();

        $cek_facebook = PivotProfilRazenProjectMediaSosial::where('master_media_sosial_id', 2)->first();
        if($cek_facebook)
        {
            $facebook = [
                'status' => 'ada',
                'tautan' => $cek_facebook->tautan
            ];
        } else {
            $facebook = [
                'status' => 'tidak ada',
                'tautan' => ''
            ];
        }

        $cek_twitter = PivotProfilRazenProjectMediaSosial::where('master_media_sosial_id', 3)->first();
        if($cek_twitter)
        {
            $twitter = [
                'status' => 'ada',
                'tautan' => $cek_twitter->tautan
            ];
        } else {
            $twitter = [
                'status' => 'tidak ada',
                'tautan' => ''
            ];
        }

        $cek_instagram = PivotProfilRazenProjectMediaSosial::where('master_media_sosial_id', 4)->first();
        if($cek_instagram)
        {
            $instagram = [
                'status' => 'ada',
                'tautan' => $cek_instagram->tautan
            ];
        } else {
            $instagram = [
                'status' => 'tidak ada',
                'tautan' => ''
            ];
        }

        $cek_youtube = PivotProfilRazenProjectMediaSosial::where('master_media_sosial_id', 5)->first();
        if($cek_youtube)
        {
            $youtube = [
                'status' => 'ada',
                'tautan' => $cek_youtube->tautan
            ];
        } else {
            $youtube = [
                'status' => 'tidak ada',
                'tautan' => ''
            ];
        }

        return view('landing-page-razen-project.index', [
            'profil' => $profil,
            'facebook' => $facebook,
            'twitter' => $twitter,
            'instagram' => $instagram,
            'youtube' => $youtube
        ]);
    }
}
