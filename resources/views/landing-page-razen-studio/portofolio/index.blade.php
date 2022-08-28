@extends('landing-page-razen-studio.layouts.app')
@section('title', 'Razen Studio | Portofolio')

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
                <h2 class="section-title-page text-white">Portofolio GoSocial</h2>
                <p class="mb-5">Kualitas terbaik pada setiap hasil project dan kolaborasi yang telah kami kerjakan.</p>
                <ul class="breadcrumbs-inner list-center display-flex">
                    <li><a class="section-16px-regular font-weight-500" href="{{ route('home') }}">Home</a></li>
                    <li>
                        <h4 class="section-16px-regular font-weight-500 text-white">Portofolio</h4>
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
            <h2>Start your project with GoSocial</h2>
            <p>If you’ve got a brief, we’d love to see it and talk it through with you.<br>
                If you haven’t, get in touch to see if we are a good fit for you.</p>
            <span class="d-block mt-5">
                <a class="btn btn-primary transition-3d-hover font-size-2" href="https://gosocial.co.id/contact">Contact Us</a>
            </span>
        </div>
    </div>
</section>

<section class="flat-services">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title wow fadeInDown">
                    <p class="text-muted">Official Partners:</p>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="60" data-smobile="60"
                    style="height:60px"></div>
            </div>
            <div class="col-md-12 justify-content-center">
                <div class="row d-flex justify-content-center text-center">
                    <div class="col-lg-3 col-4">
                        <div class="mx-3 client-image">
                            <img class="max-w-11rem max-w-md-13rem mx-auto client-default" src="https://gosocial.co.id/assets/img/home/ocbc_partner.png" alt="Partner OCBC NISP">
                            <img class="max-w-11rem max-w-md-13rem mx-auto client-hover" style="display: none;" src="https://gosocial.co.id/assets/img/home/ocbc_partner.png" alt="Partner OCBC">
                        </div>
                    </div>

                    <div class="col-lg-3 col-4">
                        <a class="mx-3 client-image" href="https://www.bhinneka.com/toko-gosocial-indonesia" target="_blank">
                            <img class="max-w-11rem max-w-md-13rem mx-auto client-default" src="https://gosocial.co.id/assets/img/home/bhinekka_partner.png" alt="Parnter Bhinneka.com" style="">
                            <img class="max-w-11rem max-w-md-13rem mx-auto client-hover" style="display: none;" src="https://gosocial.co.id/assets/img/home/bhinekka_partner.png" alt="Partner Bhinneka">
                        </a>
                    </div>

                    <div class="col-lg-3 col-4">
                        <div class="mx-3 client-image">
                            <img class="max-w-11rem max-w-md-13rem mx-auto client-default" src="https://gosocial.co.id/assets/img/home/crewdible_partner.png" alt="Partner Crewdible">
                            <img class="max-w-11rem max-w-md-13rem mx-auto client-hover" style="display: none;" src="https://gosocial.co.id/assets/img/home/crewdible_partner.png" alt="Partner Crewdible">
                        </div>
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
