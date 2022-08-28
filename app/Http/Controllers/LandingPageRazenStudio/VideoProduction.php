<?php

namespace App\Http\Controllers\LandingPageRazenStudio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VideoProduction extends Controller
{
    public function video_animasi()
    {
        return view('landing-page-razen-studio.video-production.video-animasi.index');
    }

    public function video_konten_sosmed()
    {
        return view('landing-page-razen-studio.video-production.video-konten-sosmed.index');
    }

    public function video_company_profile()
    {
        return view('landing-page-razen-studio.video-production.video-company-profile.index');
    }
}
