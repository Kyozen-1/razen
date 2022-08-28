<?php

namespace App\Http\Controllers\LandingPageRazenStudio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PlatformIklanController extends Controller
{
    public function iklan_instagram()
    {
        return view('landing-page-razen-studio.digital-campaign.iklan-instagram.index');
    }

    public function iklan_facebook()
    {
        return view('landing-page-razen-studio.digital-campaign.iklan-facebook.index');
    }

    public function iklan_google()
    {
        return view('landing-page-razen-studio.digital-campaign.iklan-google.index');
    }

    public function iklan_youtube()
    {
        return view('landing-page-razen-studio.digital-campaign.iklan-youtube.index');
    }

    public function iklan_tik_tok()
    {
        return view('landing-page-razen-studio.digital-campaign.iklan-tik-tok.index');
    }
}
