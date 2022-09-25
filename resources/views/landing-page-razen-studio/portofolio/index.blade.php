@php
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioPortofolio;
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioBrand;
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioOfficialPartner;
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioReview;
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioHome;

    $home = LandingpageRazenstudioHome::first();

    $portofolio = LandingpageRazenstudioPortofolio::first();
    if ($portofolio) {
        $portofolio_section_1 = json_decode($portofolio->section_1, true);
        $portofolio_section_2 = json_decode($portofolio->section_2, true);
    } else {
        $portofolio_section_1 = [];
        $portofolio_section_2 = [];
    }

    $reviews = LandingpageRazenstudioReview::latest()->get();
    $brands= LandingpageRazenstudioBrand::all();
    $partners = LandingpageRazenstudioOfficialPartner::all();
@endphp
@extends('landing-page-razen-studio.layouts.app')
@section('title', $portofolio_section_1['title'])

@section('css')
<link rel="stylesheet" href="https://gosocial.co.id/assets/vendor/cubeportfolio/css/cubeportfolio.min.css">
<link rel="stylesheet" href="https://gosocial.co.id/assets/vendor/hs-mega-menu/dist/hs-mega-menu.min.css">
<link rel="stylesheet" href="https://gosocial.co.id/assets/vendor/dzsparallaxer/dzsparallaxer.css">
<link rel="stylesheet" href="https://gosocial.co.id/assets/vendor/aos/dist/aos.css">
<link rel="stylesheet" href="https://gosocial.co.id/assets/css/pages/global.css?v.0908">
<link rel="stylesheet" href="https://gosocial.co.id/assets/css/theme.min.css">
@endsection

@section('content')
<section class="flat-title-page back-ground-style">
    <div class="container-fluid">
        <div class="row">
            <div class="breadcrumbs text-center link-style-5 text-white">
                <h2 class="section-title-page text-white">{{$portofolio_section_1['judul']}}</h2>
                <p class="mb-5">{{$portofolio_section_1['deskripsi']}}</p>
                <ul class="breadcrumbs-inner list-center display-flex">
                    <li><a class="section-16px-regular font-weight-500" href="{{ route('home') }}">Home</a></li>
                    <li>
                        <h4 class="section-16px-regular font-weight-500 text-white">{{$portofolio_section_1['judul']}}</h4>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="flat-about-2nd">
    <div class="container">
        <div id="filterControlsExample3" class="text-center mb-5 mb-md-7 ">
            <a class="font-size-2 cbp-filter-item btn btn-xs btn-soft-secondary btn-pill py-2 px-3 m-1 cbp-filter-item-active" href="javascript:;" data-filter="*">All</a>
            <a class="font-size-2 cbp-filter-item btn btn-xs btn-soft-secondary btn-pill py-2 px-3 m-1" href="javascript:;" data-filter=".foto-produk-creative">Foto Produk Creative</a>
            <a class="font-size-2 cbp-filter-item btn btn-xs btn-soft-secondary btn-pill py-2 px-3 m-1" href="javascript:;" data-filter=".foto-produk-makanan-fnb">Foto Produk Makanan (FnB)</a>
            <a class="font-size-2 cbp-filter-item btn btn-xs btn-soft-secondary btn-pill py-2 px-3 m-1" href="javascript:;" data-filter=".design-logo">Design Logo</a>
            <a class="font-size-2 cbp-filter-item btn btn-xs btn-soft-secondary btn-pill py-2 px-3 m-1" href="javascript:;" data-filter=".foto-katalog">Foto Katalog</a>
            <a class="font-size-2 cbp-filter-item btn btn-xs btn-soft-secondary btn-pill py-2 px-3 m-1" href="javascript:;" data-filter=".digital-campaign">Digital Campaign</a>
            <a class="font-size-2 cbp-filter-item btn btn-xs btn-soft-secondary btn-pill py-2 px-3 m-1" href="javascript:;" data-filter=".foto-makanan">Foto Makanan</a>
            <a class="font-size-2 cbp-filter-item btn btn-xs btn-soft-secondary btn-pill py-2 px-3 m-1" href="javascript:;" data-filter=".foto-model">Foto Model</a>
        </div>
    </div>
</section>

<section class="flat-about-2nd">
    <div class="container space-2">
        <div class="text-center py-6" style="background: url(https://gosocial.co.id/assets/svg/components/abstract-shapes-19.svg) center no-repeat;">
            <h2>{{$portofolio_section_2['judul']}}</h2>
            <p>{!! $portofolio_section_2['deskripsi'] !!}</p>
            <span class="d-block mt-5">
                <a class="btn btn-primary transition-3d-hover font-size-2" href="https://gosocial.co.id/contact">Contact Us</a>
            </span>
        </div>
    </div>
</section>

<section class="flat-services">
    <div class="container space-1">
        <div class="w-lg-75 mt-3 mx-lg-auto">
            <div class="text-center mb-4">
                <span class="divider divider-text h3">Official Partners:</span>
            </div>

            <div class="row d-flex justify-content-center text-center">
                <div class="col-lg-8 col-12">
                    <div class="row d-flex justify-content-center">
                        @foreach ($partners as $partner)
                            <div class="col-lg-3 col-4">
                                <div class="mx-3 client-image">
                                    <img class="client-default" src="{{ asset('images/landingpage_razenstudio/official-partner/'.$partner->gambar) }}" alt="Partner OCBC NISP">
                                    <img class="client-hover" style="display: none;" src="{{ asset('images/landingpage_razenstudio/official-partner/'.$partner->gambar) }}" alt="Partner OCBC">
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('js')
<script src="https://gosocial.co.id/assets/vendor/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
<script src="https://gosocial.co.id/assets/vendor/jquery-countdown/dist/jquery.countdown.min.js"></script>
<script src="https://gosocial.co.id/assets/vendor/hs-header/dist/hs-header.min.js"></script>
<script src="https://gosocial.co.id/assets/vendor/hs-go-to/dist/hs-go-to.min.js"></script>
<script src="https://gosocial.co.id/assets/vendor/hs-unfold/dist/hs-unfold.min.js"></script>
<script src="https://gosocial.co.id/assets/vendor/hs-mega-menu/dist/hs-mega-menu.min.js"></script>
<script src="https://gosocial.co.id/assets/vendor/aos/dist/aos.js"></script>
<script src="https://gosocial.co.id/assets/js/theme.min.js"></script>
<script>
    $(document).on('ready', function() {
        // INITIALIZATION OF CUBEPORTFOLIO
        // =======================================================
        $('.cbp').each(function() {
            var cbp = $.HSCore.components.HSCubeportfolio.init($(this), {
                layoutMode: 'grid',
                filters: '#filterControlsExample3',
                displayTypeSpeed: 0
            });
        });

        // INITIALIZATION OF COUNTDOWNS
        // =======================================================
        $('.js-countdown').each(function() {
            var countdown = $.HSCore.components.HSCountdown.init($(this));
        });

        // INITIALIZATION OF HEADER
        // =======================================================
        var header = new HSHeader($('#header')).init();


        // INITIALIZATION OF MEGA MENU
        // =======================================================
        var megaMenu = new HSMegaMenu($('.js-mega-menu'), {
            desktop: {
                position: 'left'
            }
        }).init();


        // INITIALIZATION OF UNFOLD
        // =======================================================
        var unfold = new HSUnfold('.js-hs-unfold-invoker').init();


        // INITIALIZATION OF SWITCH
        // =======================================================
        $('.js-switch-text').each(function() {
            var switchText = new HSSwitchText($(this), {
                afterChange: function() {
                    ionRangeSlider.data('ionRangeSlider').update({
                        from: $(this)[0].target[0].text
                    });
                }
            }).init();
        });


        // INITIALIZATION OF AOS
        // =======================================================
        AOS.init({
            duration: 650,
            once: true
        });


        // INITIALIZATION OF GO TO
        // =======================================================
        $('.js-go-to').each(function() {
            var goTo = new HSGoTo($(this)).init();
        });
    });
</script>
@endsection
