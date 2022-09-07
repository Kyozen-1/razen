<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes(['register' => false, 'login' => false]);

Route::get('razen/login','Auth\RazenLoginController@showLoginForm')->name('razen.login');
Route::post('razen/login', 'Auth\RazenLoginController@login')->name('razen.login.submit');
Route::get('razen/logout/', 'Auth\RazenLoginController@logout')->name('razen.logout');

Route::get('razen-studio/login','Auth\RazenStudioLoginController@showLoginForm')->name('razen-studio.login');
Route::post('razen-studio/login', 'Auth\RazenStudioLoginController@login')->name('razen-studio.login.submit');
Route::get('razen-studio/logout/', 'Auth\RazenStudioLoginController@logout')->name('razen-studio.logout');

// Route::get('/', function () {
//     return view('landing-page-utama.home.index');
// });

Route::get('/', 'LandingPageRazenStudio\HomeController@home')->name('home');

Route::get('/service/social-media-engagement', 'LandingPageRazenStudio\HomeController@social_media_engagement')->name('social-media-engagement');
Route::get('/service/social-media-engagement/instagram', 'LandingPageRazenStudio\SocialMediaEngagement@instagram')->name('social-media-engagement.instagram');
Route::get('/service/social-media-engagement/tik-tok', 'LandingPageRazenStudio\SocialMediaEngagement@tik_tok')->name('social-media-engagement.tik-tok');
Route::get('/service/social-media-engagement/youtube', 'LandingPageRazenStudio\SocialMediaEngagement@youtube')->name('social-media-engagement.youtube');
Route::get('/service/social-media-engagement/twitter', 'LandingPageRazenStudio\SocialMediaEngagement@twitter')->name('social-media-engagement.twitter');
Route::get('/service/social-media-engagement/facebook', 'LandingPageRazenStudio\SocialMediaEngagement@facebook')->name('social-media-engagement.facebook');
Route::get('/service/social-media-engagement/market-place', 'LandingPageRazenStudio\SocialMediaEngagement@marketplace')->name('social-media-engagement.market-place');
Route::get('/service/social-media-engagement/google-my-business', 'LandingPageRazenStudio\SocialMediaEngagement@google_my_business')->name('social-media-engagement.google-my-business');
Route::get('/service/social-media-engagement/playstore', 'LandingPageRazenStudio\SocialMediaEngagement@playstore')->name('social-media-engagement.playstore');

Route::get('/service/visual-branding-design', 'LandingPageRazenStudio\HomeController@visual_branding_design')->name('visual-branding-design');
Route::get('/service/visual-branding-design/jasa-desain-grafis', 'LandingPageRazenStudio\JasaDesainGrafis@index')->name('visual-branding-design.jasa-desain-grafis.index');
Route::get('/service/visual-branding-design/jasa-desain-grafis/desain-logo', 'LandingPageRazenStudio\JasaDesainGrafis@desain_logo')->name('visual-branding-design.jasa-desain-grafis.desain-logo');
Route::get('/service/visual-branding-design/jasa-desain-grafis/desain-promosi-digital', 'LandingPageRazenStudio\JasaDesainGrafis@desain_promosi_digital')->name('visual-branding-design.jasa-desain-grafis.desain-promosi-digital');
Route::get('/service/visual-branding-design/jasa-desain-grafis/desain-feed-instagram', 'LandingPageRazenStudio\JasaDesainGrafis@desain_feed_instagram')->name('visual-branding-design.jasa-desain-grafis.desain-feed-instagram');
Route::get('/service/visual-branding-design/jasa-desain-grafis/desain-branding-fit', 'LandingPageRazenStudio\JasaDesainGrafis@desain_branding_fit')->name('visual-branding-design.jasa-desain-grafis.desain-branding-fit');
Route::get('/service/visual-branding-design/jasa-desain-grafis/desain-kartu-nama', 'LandingPageRazenStudio\JasaDesainGrafis@desain_kartu_nama')->name('visual-branding-design.jasa-desain-grafis.desain-kartu-nama');
Route::get('/service/visual-branding-design/jasa-desain-grafis/desain-spanduk-banner', 'LandingPageRazenStudio\JasaDesainGrafis@desain_spanduk_banner')->name('visual-branding-design.jasa-desain-grafis.desain-spanduk-banner');
Route::get('/service/visual-branding-design/jasa-desain-grafis/desain-brosur', 'LandingPageRazenStudio\JasaDesainGrafis@desain_brosur')->name('visual-branding-design.jasa-desain-grafis.desain-brosur');
Route::get('/service/visual-branding-design/jasa-desain-grafis/desain-kemasan', 'LandingPageRazenStudio\JasaDesainGrafis@desain_kemasan')->name('visual-branding-design.jasa-desain-grafis.desain-kemasan');
Route::get('/service/visual-branding-design/jasa-desain-grafis/desain-label-produk', 'LandingPageRazenStudio\JasaDesainGrafis@desain_label_produk')->name('visual-branding-design.jasa-desain-grafis.desain-label-produk');
Route::get('/service/visual-branding-design/jasa-desain-grafis/desain-stempel', 'LandingPageRazenStudio\JasaDesainGrafis@desain_stempel')->name('visual-branding-design.jasa-desain-grafis.desain-stempel');
Route::get('/service/visual-branding-design/jasa-desain-grafis/desain-kalender', 'LandingPageRazenStudio\JasaDesainGrafis@desain_kalender')->name('visual-branding-design.jasa-desain-grafis.desain-kalender');
Route::get('/service/visual-branding-design/jasa-desain-grafis/desain-branding-event', 'LandingPageRazenStudio\JasaDesainGrafis@desain_branding_event')->name('visual-branding-design.jasa-desain-grafis.desain-branding-event');
Route::get('/service/visual-branding-design/jasa-desain-grafis/desain-amplop', 'LandingPageRazenStudio\JasaDesainGrafis@desain_amplop')->name('visual-branding-design.jasa-desain-grafis.desain-amplop');
Route::get('/service/visual-branding-design/jasa-desain-grafis/desain-kop-surat', 'LandingPageRazenStudio\JasaDesainGrafis@desain_kop_surat')->name('visual-branding-design.jasa-desain-grafis.desain-kop-surat');
Route::get('/service/visual-branding-design/jasa-desain-grafis/desain-merchandise', 'LandingPageRazenStudio\JasaDesainGrafis@desain_merchandise')->name('visual-branding-design.jasa-desain-grafis.desain-merchandise');

Route::get('/service/video-production', 'LandingPageRazenStudio\HomeController@video_production')->name('video-production');
Route::get('/service/video-production/video-animasi', 'LandingPageRazenStudio\VideoProduction@video_animasi')->name('video-production.video-animasi');
Route::get('/service/video-production/video-konten-sosmed', 'LandingPageRazenStudio\VideoProduction@video_konten_sosmed')->name('video-production.video-konten-sosmed');
Route::get('/service/video-production/video-company-profile', 'LandingPageRazenStudio\VideoProduction@video_company_profile')->name('video-production.video-company-profile');

Route::get('/service/digital-campaign', 'LandingPageRazenStudio\HomeController@digital_campaign')->name('digital-campaign');
Route::get('/service/digital-campaign/iklan-instagram', 'LandingPageRazenStudio\PlatformIklanController@iklan_instagram')->name('digital-campaign.iklan-instagram');
Route::get('/service/digital-campaign/iklan-facebook', 'LandingPageRazenStudio\PlatformIklanController@iklan_facebook')->name('digital-campaign.iklan-facebook');
Route::get('/service/digital-campaign/iklan-google', 'LandingPageRazenStudio\PlatformIklanController@iklan_google')->name('digital-campaign.iklan-google');
Route::get('/service/digital-campaign/iklan-youtube', 'LandingPageRazenStudio\PlatformIklanController@iklan_youtube')->name('digital-campaign.iklan-youtube');
Route::get('/service/digital-campaign/iklan-tik-tok', 'LandingPageRazenStudio\PlatformIklanController@iklan_tik_tok')->name('digital-campaign.iklan-tik-tok');

Route::get('/service/commercial-photography', 'LandingPageRazenStudio\HomeController@commercial_photography')->name('commercial-photography');
Route::get('/service/social-media-management', 'LandingPageRazenStudio\HomeController@social_media_management')->name('social-media-management');
Route::get('/service/web-development', 'LandingPageRazenStudio\HomeController@web_development')->name('web-development');
Route::get('/service/jasa-seo', 'LandingPageRazenStudio\HomeController@jasa_seo')->name('jasa-seo');
Route::get('about', 'LandingPageRazenStudio\HomeController@about')->name('about');
Route::get('how-it-works', 'LandingPageRazenStudio\HomeController@how_it_works')->name('how-it-works');
Route::get('portofolio', 'LandingPageRazenStudio\HomeController@portofolio')->name('portofolio');
Route::get('why-razen-studio', 'LandingPageRazenStudio\HomeController@why_razen_studio')->name('why-razen-studio');
Route::get('help-center', 'LandingPageRazenStudio\HomeController@help_center')->name('help-center');
Route::get('blog', 'LandingPageRazenStudio\HomeController@blog')->name('blog');
Route::get('ebook', 'LandingPageRazenStudio\HomeController@ebook')->name('ebook');
Route::get('razen-studio-academy', 'LandingPageRazenStudio\HomeController@razen-studio-academy')->name('razen-studio-academy');
Route::get('freelancer-agency', 'LandingPageRazenStudio\HomeController@freelancer_agency')->name('freelancer-agency');
Route::get('contact', 'LandingPageRazenStudio\HomeController@contact')->name('contact');

include('razen-studio.php');
include('razen.php');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
