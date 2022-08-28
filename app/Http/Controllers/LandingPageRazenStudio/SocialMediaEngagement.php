<?php

namespace App\Http\Controllers\LandingPageRazenStudio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SocialMediaEngagement extends Controller
{
    public function instagram()
    {
        return view('landing-page-razen-studio.social-media-engagement.instagram.index');
    }

    public function tik_tok()
    {
        return view('landing-page-razen-studio.social-media-engagement.tik-tok.index');
    }

    public function youtube()
    {
        return view('landing-page-razen-studio.social-media-engagement.youtube.index');
    }

    public function twitter()
    {
        return view('landing-page-razen-studio.social-media-engagement.twitter.index');
    }

    public function facebook()
    {
        return view('landing-page-razen-studio.social-media-engagement.facebook.index');
    }

    public function marketplace()
    {
        return view('landing-page-razen-studio.social-media-engagement.marketplace.index');
    }

    public function google_my_business()
    {
        return view('landing-page-razen-studio.social-media-engagement.google-my-business.index');
    }

    public function playstore()
    {
        return view('landing-page-razen-studio.social-media-engagement.playstore.index');
    }
}
