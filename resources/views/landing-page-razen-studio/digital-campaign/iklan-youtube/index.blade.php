@php
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioDigitalCampaign;
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioBrand;
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioOfficialPartner;
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioReview;
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioHome;
    use App\Models\RazenStudio\LandingPage\DigitalCampaign\LandingpageRazenstudioIklanYoutube;

    $home = LandingpageRazenstudioHome::first();

    $digital_campaign = LandingpageRazenstudioDigitalCampaign::first();
    $digital_campaign_section_1 = json_decode($digital_campaign->section_1, true);
    $digital_campaign_section_3 = json_decode($digital_campaign->section_3, true);

    $iklan_youtube = LandingpageRazenstudioIklanYoutube::first();
    if ($iklan_youtube) {
        $iklan_youtube_section_1 = json_decode($iklan_youtube->section_1, true);
        $iklan_youtube_section_2 = json_decode($iklan_youtube->section_2, true);
        $iklan_youtube_section_3 = json_decode($iklan_youtube->section_3, true);
        $iklan_youtube_section_4 = json_decode($iklan_youtube->section_4, true);
        $iklan_youtube_section_5 = json_decode($iklan_youtube->section_5, true);
        $iklan_youtube_section_6 = json_decode($iklan_youtube->section_6, true);
        $iklan_youtube_section_7 = json_decode($iklan_youtube->section_7, true);
        $iklan_youtube_section_8 = json_decode($iklan_youtube->section_8, true);
        $iklan_youtube_section_9 = json_decode($iklan_youtube->section_9, true);
    } else {
        $iklan_youtube_section_1 = [];
        $iklan_youtube_section_2 = [];
        $iklan_youtube_section_3 = [];
        $iklan_youtube_section_4 = [];
        $iklan_youtube_section_5 = [];
        $iklan_youtube_section_6 = [];
        $iklan_youtube_section_7 = [];
        $iklan_youtube_section_8 = [];
        $iklan_youtube_section_9 = [];
    }

    $reviews = LandingpageRazenstudioReview::latest()->get();
    $brands= LandingpageRazenstudioBrand::all();
    $partners = LandingpageRazenstudioOfficialPartner::all();
@endphp
@extends('landing-page-razen-studio.layouts.app')
@section('title', $iklan_youtube_section_1['title'])

@section('css')
<link rel="stylesheet" href="https://gosocial.co.id/assets/vendor/cubeportfolio/css/cubeportfolio.min.css">
<link rel="stylesheet" href="https://gosocial.co.id/assets/vendor/hs-mega-menu/dist/hs-mega-menu.min.css">
<link rel="stylesheet" href="https://gosocial.co.id/assets/vendor/dzsparallaxer/dzsparallaxer.css">
<link rel="stylesheet" href="https://gosocial.co.id/assets/vendor/aos/dist/aos.css">
<link rel="stylesheet" href="https://gosocial.co.id/assets/css/pages/global.css?v.0908">
<link rel="stylesheet" href="https://gosocial.co.id/assets/css/theme.min.css">
<link rel="stylesheet" href="https://gosocial.co.id/assets/vendor/@fancyapps/fancybox/dist/jquery.fancybox.min.css">
<link rel="stylesheet" href="https://gosocial.co.id/assets/vendor/slick-carousel/slick/slick.css">
<link rel="stylesheet" href="https://gosocial.co.id/assets/css/pages/digital-campaign/digital-campaign.css?v.2812">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/fontawesome.min.css" integrity="sha512-RvQxwf+3zJuNwl4e0sZjQeX7kUa3o82bDETpgVCH2RiwYSZVDdFJ7N/woNigN/ldyOOoKw8584jM4plQdt8bhA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('content')
<section class="flat-title-page back-ground-style h-100">
    <div class="container-fluid">
        <div class="row">
            <div class="breadcrumbs text-center link-style-5 text-white">
                <h1 class="section-title-page text-white">{{$iklan_youtube_section_1['judul']}}</h1>
                <p class="mb-5">{{$iklan_youtube_section_1['deskripsi']}}</p>
                <ul class="breadcrumbs-inner list-center display-flex">
                    <li><a class="section-16px-regular font-weight-500" href="{{ route('home') }}">Home</a></li>
                    <li><a class="section-16px-regular font-weight-500" href="{{ route('digital-campaign') }}">{{$digital_campaign_section_1['judul']}}</a></li>
                    <li>
                        <h4 class="section-16px-regular font-weight-500 text-white">{{$iklan_youtube_section_1['judul']}}</h4>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="flat-about-2nd">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="about-content-left wow fadeInLeft">
                    <div class="about-post">
                        <img src="{{ asset('images/landingpage_razenstudio/digital-campaign/iklan-youtube/'.$iklan_youtube_section_2['gambar']) }}" alt="images">
                        <div class="mark-about-post"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="about-content-right wow fadeInUp" data-wow-delay="0ms"
                    data-wow-duration="1500ms">
                    <div class="section-title">
                        <h4 class="section-45px-montserrat margin-top-15 margin-bottom-20">{{$iklan_youtube_section_2['judul']}}</h4>
                    </div>
                    <p class="section-17px-regular margin-bottom-25">{!! $iklan_youtube_section_2['deskripsi'] !!}</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="flat-about-2nd">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="about-content-right wow fadeInUp" data-wow-delay="0ms"
                    data-wow-duration="1500ms">
                    <div class="section-title">
                        <h4 class="section-45px-montserrat margin-top-15 margin-bottom-20">{{$iklan_youtube_section_3['judul']}}</h4>
                    </div>
                    <p class="section-17px-regular margin-bottom-25">{!! $iklan_youtube_section_3['deskripsi'] !!}</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="about-content-left wow fadeInLeft">
                    <div class="about-post">
                        <img src="{{ asset('images/landingpage_razenstudio/digital-campaign/iklan-youtube/'.$iklan_youtube_section_3['gambar']) }}" alt="images">
                        <div class="mark-about-post"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="flat-services">
    <div class="container space-1">
        <div class="w-lg-85 mx-lg-auto">
            <div class="card bg-danger text-white overflow-hidden p-5">
                <div class="row justify-content-md-start align-items-md-center text-center text-md-left">
                    <div class="col-md-6 offset-md-3 mb-3 mb-md-0">
                        <h3 class="text-white font-size-3 mb-1">{{$iklan_youtube_section_4['judul']}}</h3>
                        <p class="text-white-70 font-size-2 mb-0">{{$iklan_youtube_section_4['deskripsi']}}</p>
                    </div>
                    <div class="col-md-3 text-md-right">
                        <a class="btn btn-light transition-3d-hover font-size-2" href="{{ route('digital-campaign') }}">Lihat Paket</a>
                    </div>
                </div>

                <!-- SVG Component -->
                <figure class="w-25 d-none d-md-block content-centered-y ml-n4">
                    <img class="img-fluid" src="https://gosocial.co.id/assets/svg/service/digital-campaign/digital-campaign.svg" alt="Layanan lain">
                </figure>
                <!-- End SVG Component -->
            </div>
        </div>
    </div>
</section>

<section class="flat-services">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title wow fadeInDown">
                    <h2 class="section-45px-montserrat margin-top-15">{{$iklan_youtube_section_5['judul']}}</h2>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="60" data-smobile="60"
                    style="height:60px"></div>
            </div>
        </div>
        <ul class="step step-md step-centered">
            @php
                $i = 1;
            @endphp
            @foreach ($iklan_youtube_section_5['konten'] as $item)
            <li class="step-item">
                <div class="step-content-wrapper">
                    <span class="step-icon step-icon-soft-primary">{{$i++}}</span>
                    <div class="step-content">
                        <h3>{{$item['judul_konten']}}</h3>
                        <p>{{$item['deskripsi_konten']}}</p>
                    </div>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
</section>

<section class="flat-services">
    <div class="container ">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title wow fadeInDown">
                    <h4 class="section-subtitle">Apa Saja?</h4>
                    <h2 class="section-45px-montserrat margin-top-15">Jenis Jasa Iklan Youtube</h2>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="60" data-smobile="60"
                    style="height:60px"></div>
            </div>
        </div>

        <div class="row mx-n2 mb-3">
            @foreach ($iklan_youtube_section_6 as $item)
                <div class="col-sm-6 col-12 px-2 mb-3">
                    <!-- Card -->
                    <div class="card card-frame h-100">
                        <img class="img-fluid m-1" src="{{ asset('images/landingpage_razenstudio/digital-campaign/iklan-youtube/'.$item['gambar_konten']) }}" alt="">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-1">
                                <h4 class="d-block text-dark font-weight-bold font-size-3">{{$item['judul_konten']}}</h4>
                            </div>
                            <span class="d-block text-body font-size-2">{{$item['deskripsi_konten']}}</span>
                        </div>
                    </div>
                    <!-- End Card -->
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="flat-services">
    <div class="container space-2">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title wow fadeInDown">
                    <h2 class="section-45px-montserrat margin-top-15">{{$iklan_youtube_section_7['judul']}}</h2>
                    <p class="text-muted">{{$iklan_youtube_section_7['deskripsi']}}</p>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="60" data-smobile="60"
                    style="height:60px"></div>
            </div>
        </div>

        <div class="row">
            @php
                $item_1 = [];
                $item_2 = [];
                $item_3 = [];
                $item_4 = [];

                foreach ($iklan_youtube_section_7['item'] as $value) {
                    if($value['item'] == 'item_1')
                    {
                        $item_1 = [
                            'ikon' => $value['ikon'],
                            'item' => $value['item'],
                            'judul' => $value['judul'],
                            'deskripsi' => $value['deskripsi'],
                        ];
                    }

                    if($value['item'] == 'item_2')
                    {
                        $item_2 = [
                            'ikon' => $value['ikon'],
                            'item' => $value['item'],
                            'judul' => $value['judul'],
                            'deskripsi' => $value['deskripsi'],
                        ];
                    }

                    if($value['item'] == 'item_3')
                    {
                        $item_3 = [
                            'ikon' => $value['ikon'],
                            'item' => $value['item'],
                            'judul' => $value['judul'],
                            'deskripsi' => $value['deskripsi'],
                        ];
                    }

                    if($value['item'] == 'item_4')
                    {
                        $item_4 = [
                            'gambar' => $value['gambar'],
                            'item' => $value['item'],
                            'judul' => $value['judul'],
                            'disklaimer' => $value['disklaimer'],
                        ];
                    }
                }
            @endphp
            <div class="col-md-4 mb-7">
                <!-- Icon Blocks -->
                <div class="text-center px-lg-3">
                    <figure class="max-w-10rem mx-auto mb-4">
                        <img class="img-fluid" src="{{ asset('images/landingpage_razenstudio/digital-campaign/iklan-youtube/'.$item_1['ikon']) }}" alt="SVG">
                    </figure>
                    <h2>{{$item_1['judul']}}</h2>
                    <p>{{$item_1['deskripsi']}}</p>
                </div>
                <!-- End Icon Blocks -->
            </div>

            <div class="col-md-4 mb-7">
                <!-- Icon Blocks -->
                <div class="text-center px-lg-3">
                    <figure class="max-w-10rem mx-auto mb-4">
                        <img class="img-fluid" src="{{ asset('images/landingpage_razenstudio/digital-campaign/iklan-youtube/'.$item_2['ikon']) }}" alt="SVG">
                    </figure>
                    <h2>{{$item_2['judul']}}</h3>
                    <p>{{$item_2['deskripsi']}}</p>
                </div>
                <!-- End Icon Blocks -->
            </div>

            <div class="col-md-4 mb-7">
                <!-- Icon Blocks -->
                <div class="text-center px-lg-3">
                    <figure class="max-w-10rem mx-auto mb-4">
                        <img class="img-fluid" src="{{ asset('images/landingpage_razenstudio/digital-campaign/iklan-youtube/'.$item_3['ikon']) }}" alt="SVG">
                    </figure>
                    <h2>{{$item_3['judul']}}</h2>
                    <p>{{$item_3['deskripsi']}}</p>
                </div>
                <!-- End Icon Blocks -->
            </div>
        </div>

        <img class="img-fluid d-none d-md-block w-75 mx-auto mb-7" src="https://gosocial.co.id/assets/svg/components/three-pointers.svg" alt="SVG Arrow">

        <!-- Browser Mockup -->
        <div class="position-relative">
            <div class="mb-3 mb-sm-0 d-flex align-items-center justify-content-center">
                <img class="img-fluid" src="{{ asset('images/landingpage_razenstudio/digital-campaign/iklan-youtube/'.$item_4['gambar']) }}" alt="Image Description">
            </div>
        </div>
        <!-- End Browser Mockup -->

        <!-- Title -->
        <div class="w-md-60 w-lg-50 text-center mx-auto mt-7">
            <p class="text-dark">{{$item_4['judul']}}</p>
        </div>
        <!-- End Title -->

        <div class="w-100 w-md-40 w-lg-40 text-center mx-auto mt-2">
            <p class="font-size-1"><b>Disclaimer:</b> {{$item_4['disklaimer']}}</p>
        </div>
    </div>
</section>

<section class="flat-services">
    <div class="container space-2">
        <div class="row">
            <div class="col-12">
                <div class="section-title wow fadeInDown">
                    <h4 class="section-subtitle">{{$iklan_youtube_section_8['sub_judul']}}</h4>
                    <h2 class="section-45px-montserrat margin-top-15">{{$iklan_youtube_section_8['judul']}}</h2>
                    <p class="text-muted">{{$iklan_youtube_section_8['deskripsi']}}</p>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="60" data-smobile="60"
                    style="height:60px"></div>
            </div>
        </div>
    </div>
</section>

<section class="flat-client">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="client-content-box wow fadeInUp">
                    <h4 class="section-title section-45px-montserrat">{{$home->section_7}}</h4>
                    <button class="clone-btn-prev"></button>
                    <button class="clone-btn-next"></button>
                </div>
            </div>
            <div class="col-md-6">
                <div class="swiper-container sliver-vertical">
                    <div class="swiper-wrapper">
                        @foreach ($testimonis as $testimoni)
                            <div class="swiper-slide">
                                <div class="client-slider-box">
                                    <div class="client-user text-center">
                                        <img src="{{ asset('images/landingpage_razenstudio/digital-campaign/iklan-youtube/testimoni/'.$testimoni->gambar) }}"
                                            alt="images">
                                        <ul class="list-inline small mt-3">
                                            <li class="list-inline-item mx-0">
                                                <i class="fas fa-star h4 text-warning"></i>
                                            </li>
                                            <li class="list-inline-item mx-0">
                                                <i class="fas fa-star h4 text-warning"></i>
                                            </li>
                                            <li class="list-inline-item mx-0">
                                                <i class="fas fa-star h4 text-warning"></i>
                                            </li>
                                            <li class="list-inline-item mx-0">
                                                <i class="fas fa-star h4 text-warning"></i>
                                            </li>
                                            <li class="list-inline-item mx-0">
                                                <i class="fas fa-star h4 text-warning"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="client-content">
                                        <div class="client-user-author">
                                            <h4 class="name-author section-20px-montserrat">{{$testimoni->nama}}</h4>
                                            <p class="margin-top-11">{{$testimoni->testimoni}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="flat-services">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title wow fadeInDown">
                    <h4 class="section-subtitle">{{$iklan_youtube_section_9['sub_judul']}}</h4>
                    <h2 class="section-45px-montserrat margin-top-15">{{$iklan_youtube_section_9['judul']}}</h2>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="60" data-smobile="60"
                    style="height:60px"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div id="basicsAccordion-left">
                    @foreach ($iklan_youtube_section_9['konten'] as $item)
                        <!-- Card -->
                        <div class="card shadow-none mb-3">
                            <div class="card-header card-collapse" id="basicsHeading{{$item['id']}}">
                                <a class="btn btn-link btn-block d-flex justify-content-between card-btn px-0 collapsed text-decoration-none" href="javascript:;" role="button" data-toggle="collapse" data-target="#basicsCollapse{{$item['id']}}" aria-expanded="false" aria-controls="basicsCollapse{{$item['id']}}">
                                    <span class="font-size-2">{{$item['pertanyaan']}}</span>

                                    <span class="card-btn-toggle">
                                        <span class="font-size-2 card-btn-toggle-default">+</span>
                                        <span class="font-size-2 card-btn-toggle-active">−</span>
                                    </span>
                                </a>
                            </div>
                            <div id="basicsCollapse{{$item['id']}}" class="collapse" aria-labelledby="basicsHeading{{$item['id']}}" data-parent="#basicsAccordion-left" style="">
                                <div class="card-body px-0 m-3">
                                    {!! $item['jawaban'] !!}
                                </div>
                            </div>
                        </div>
                        <!-- End Card -->
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<section class="flat-services">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title wow fadeInDown">
                    <h4 class="section-subtitle">{{$digital_campaign_section_3['sub_judul']}}</h4>
                    <h2 class="section-45px-montserrat margin-top-15">{{$digital_campaign_section_3['sub_judul']}}</h2>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="60" data-smobile="60"
                    style="height:60px"></div>
            </div>
            @foreach ($digital_campaign_section_3['konten'] as $item)
                <div class="col-md-4">
                    <div class="services-box active">
                        <div class="wraper-effect active"></div>
                        <figure class="font-size-icon">
                            <img style="height: 5rem; width:5rem; padding: -3rem;" src="{{ asset('images/landingpage_razenstudio/digital-campaign/'.$item['logo_konten']) }}" alt="SVG">
                        </figure>
                        <div class="services-content">
                            <a href="{{ route($item['link_konten']) }}" class="section-22px-montserrat">{{$item['judul_konten']}}</a>
                            <p class="services-desc">{{$item['deskripsi_konten']}}</p>
                            <a href="{{ route($item['link_konten']) }}" class="read-more"></a>
                        </div>
                    </div>
                </div>
            @endforeach
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
<script src="https://gosocial.co.id/assets/vendor/hs-quantity-counter/dist/hs-quantity-counter.min.js"></script>
<script src="https://gosocial.co.id/assets/vendor/slick-carousel/slick/slick.js"></script>
<script src="https://gosocial.co.id/assets/vendor/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
<script src="https://gosocial.co.id/assets/vendor/hs-toggle-switch/dist/hs-toggle-switch.min.js"></script>
<script src="https://gosocial.co.id/assets/vendor/hs-switch/dist/hs-switch-text.min.js"></script>
<script src="https://gosocial.co.id/assets/vendor/@fancyapps/fancybox/dist/jquery.fancybox.min.js"></script>
<script src="https://gosocial.co.id/assets/js/pages/digital-campaign/instagram.js?v.2906"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js" integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/fontawesome.min.js" integrity="sha512-j3gF1rYV2kvAKJ0Jo5CdgLgSYS7QYmBVVUjduXdoeBkc4NFV4aSRTi+Rodkiy9ht7ZYEwF+s09S43Z1Y+ujUkA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection
