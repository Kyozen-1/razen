<?php

namespace App\Http\Controllers\LandingPageRazenStudio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RazenStudio\Data\LandingPageDigitalCampaignIklanInstagramTestimoni;
use App\Models\RazenStudio\Data\LandingPageDigitalCampaignIklanFacebookTestimoni;
use App\Models\RazenStudio\Data\LandingPageDigitalCampaignIklanGoogleTestimoni;
use App\Models\RazenStudio\Data\LandingPageDigitalCampaignIklanYoutubeTestimoni;

class PlatformIklanController extends Controller
{
    public function iklan_instagram()
    {
        $testimonis = LandingPageDigitalCampaignIklanInstagramTestimoni::all();
        return view('landing-page-razen-studio.digital-campaign.iklan-instagram.index', [
            'testimonis' => $testimonis
        ]);
    }

    public function iklan_facebook()
    {
        $testimonis = LandingPageDigitalCampaignIklanFacebookTestimoni::all();
        return view('landing-page-razen-studio.digital-campaign.iklan-facebook.index', [
            'testimonis' => $testimonis
        ]);
    }

    public function iklan_google()
    {
        $testimonis = LandingPageDigitalCampaignIklanGoogleTestimoni::all();
        return view('landing-page-razen-studio.digital-campaign.iklan-google.index', [
            'testimonis' => $testimonis
        ]);
    }

    public function iklan_youtube()
    {
        $testimonis = LandingPageDigitalCampaignIklanYoutubeTestimoni::all();
        return view('landing-page-razen-studio.digital-campaign.iklan-youtube.index', [
            'testimonis' => $testimonis
        ]);
    }

    public function iklan_tik_tok()
    {
        return view('landing-page-razen-studio.digital-campaign.iklan-tik-tok.index');
    }
}
