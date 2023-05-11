<?php

namespace App\Http\Controllers\LandingPageRazenStudio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RazenStudio\Data\LandingPageBerandaBiaya;
use App\Models\RazenStudio\Data\LandingPageBerandaKeuntunganBagiBisnis;
use App\Models\RazenStudio\Data\LandingPageBerandaPortofolio;
use App\Models\RazenStudio\Data\LandingPageBerandaTestimoni;

class HomeController extends Controller
{
    public function home()
    {
        $biayas = LandingPageBerandaBiaya::all();
        $keuntungan_bagi_bisnis = LandingPageBerandaKeuntunganBagiBisnis::all();
        $portofolios = LandingPageBerandaPortofolio::all();
        $testimonis = LandingPageBerandaTestimoni::all();
        return view('landing-page-razen-studio.home.index', [
            'biayas' => $biayas,
            'keuntungan_bagi_bisnis' => $keuntungan_bagi_bisnis,
            'portofolios' => $portofolios,
            'testimonis' => $testimonis
        ]);
    }
    public function social_media_engagement()
    {
        return view('landing-page-razen-studio.social-media-engagement.index');
    }
    public function about()
    {
        return view('landing-page-razen-studio.about.index');
    }
    public function blog()
    {
        return view('landing-page-razen-studio.blog.index');
    }
    public function commercial_photography()
    {
        return view('landing-page-razen-studio.commercial-photography.index');
    }
    public function digital_campaign()
    {
        return view('landing-page-razen-studio.digital-campaign.index');
    }
    public function ebook()
    {
        return view('landing-page-razen-studio.ebook.index');
    }
    public function freelancer_agency()
    {
        return view('landing-page-razen-studio.freelancer-agency.index');
    }
    public function help_center()
    {
        return view('landing-page-razen-studio.help-center.index');
    }
    public function how_it_works()
    {
        return view('landing-page-razen-studio.how-it-works.index');
    }
    public function portofolio()
    {
        return view('landing-page-razen-studio.portofolio.index');
    }
    public function razen_studio_academy()
    {
        return view('landing-page-razen-studio.razen-studio-academy.index');
    }
    public function social_media_management()
    {
        return view('landing-page-razen-studio.social-media-management.index');
    }
    public function video_production()
    {
        return view('landing-page-razen-studio.video-production.index');
    }
    public function visual_branding_design()
    {
        return view('landing-page-razen-studio.visual-branding-design.index');
    }
    public function web_development()
    {
        return view('landing-page-razen-studio.web-development.index');
    }
    public function why_razen_studio()
    {
        return view('landing-page-razen-studio.why-razen-studio.index');
    }
    public function jasa_seo()
    {
        return view('landing-page-razen-studio.seo.index');
    }
    public function contact()
    {
        return view('landing-page-razen-studio.contact.index');
    }
}
