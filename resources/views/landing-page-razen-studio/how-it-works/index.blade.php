@php
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioHowItWork;
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioBrand;
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioOfficialPartner;
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioReview;
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioHome;

    $home = LandingpageRazenstudioHome::first();

    $how_it_work = LandingpageRazenstudioHowItWork::first();
    if ($how_it_work) {
        $how_it_work_section_1 = json_decode($how_it_work->section_1, true);
        $how_it_work_section_2 = json_decode($how_it_work->section_2, true);
        $how_it_work_section_3 = json_decode($how_it_work->section_3, true);
        $how_it_work_section_4 = json_decode($how_it_work->section_4, true);
        $how_it_work_section_5 = json_decode($how_it_work->section_5, true);
        $how_it_work_section_6 = json_decode($how_it_work->section_6, true);
    } else {
        $how_it_work_section_1 = [];
        $how_it_work_section_2 = [];
        $how_it_work_section_3 = [];
        $how_it_work_section_4 = [];
        $how_it_work_section_5 = [];
        $how_it_work_section_6 = [];
    }

    $reviews = LandingpageRazenstudioReview::latest()->get();
    $brands= LandingpageRazenstudioBrand::all();
    $partners = LandingpageRazenstudioOfficialPartner::all();
@endphp

@extends('landing-page-razen-studio.layouts.app')
@section('title', 'Razen Studio | How It Works')

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
    <link rel="stylesheet" href="https://gosocial.co.id/assets/vendor/dzsparallaxer/dzsparallaxer.css">
@endsection

@section('content')
<div class="flat-slider container-fuild">
    <div class="row">
        <div class="mark-slide">
            <img src="{{ asset('olux/assets/images/mark-page/mark-icon-slide.png') }}" alt="images">
        </div>
        <div class="swiper-container mainslider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slider-st-1">
                    <div class="content-slider-left text-white">
                        <div class="d-flex">
                            <a class="section-16px-regular font-weight-500 mr-2 text-white text-decoration-none" href="{{ route('home') }}">Home </a>  <h4 class="section-16px-regular font-weight-500 text-white"> > {{$how_it_work_section_1['sub_judul']}}</h4>
                        </div>
                        <h2 class="title-slider section-65px-montserrat text-white">{!! $how_it_work_section_1['judul'] !!}</h2>
                    </div>
                    <div class="content-slider-right">
                        <img src="{{ asset('images/landingpage_razenstudio/how-it-works/'.$how_it_work_section_1['gambar']) }}" alt="images">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="flat-services">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title wow fadeInDown">
                    <h4 class="section-subtitle">{{$how_it_work_section_2['sub_judul']}}</h4>
                    <h2 class="section-45px-montserrat margin-top-15">{{$how_it_work_section_2['judul']}}</h2>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="60" data-smobile="60"
                    style="height:60px"></div>
            </div>
        </div>
        <ul class="step step-md step-centered">
            @php
                $i = 1;
            @endphp
            @foreach ($how_it_work_section_2['konten'] as $item)
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

<section class="flat-about-2nd">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="about-content-right wow fadeInUp" data-wow-delay="0ms"
                    data-wow-duration="1500ms">
                    <div class="section-title">
                        <h4 class="section-45px-montserrat margin-top-15 margin-bottom-20">{{$how_it_work_section_3['judul']}}</h4>
                    </div>
                    <p class="section-17px-regular margin-bottom-25">{!! $how_it_work_section_3['deskripsi'] !!}</p>
                </div>
                @php
                    $item_1 = [];
                    $item_2 = [];
                    $item_3 = [];
                    $item_4 = [];

                    foreach ($how_it_work_section_3['item'] as $value) {
                        if($value['item']  == 'item_1')
                        {
                            $item_1 = [
                                'item' => $value['item'],
                                'angka' => $value['angka'],
                                'deskripsi' => $value['deskripsi'],
                            ];
                        }

                        if($value['item']  == 'item_2')
                        {
                            $item_2 = [
                                'item' => $value['item'],
                                'angka' => $value['angka'],
                                'deskripsi' => $value['deskripsi'],
                            ];
                        }

                        if($value['item']  == 'item_3')
                        {
                            $item_3 = [
                                'item' => $value['item'],
                                'angka' => $value['angka'],
                                'deskripsi' => $value['deskripsi'],
                            ];
                        }

                        if($value['item']  == 'item_4')
                        {
                            $item_4 = [
                                'item' => $value['item'],
                                'angka' => $value['angka'],
                                'deskripsi' => $value['deskripsi'],
                            ];
                        }
                    }
                @endphp
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div class="counter-box themesflat-counter hover-up wow fadeInUp" data-wow-delay="0.1s">
                            <div class="number-content h2"><span class="number"
                                    data-speed="2000" data-to="{{$item_1['angka']}}" data-inviewport="yes">{{$item_1['angka']}}</span>+</div>
                            <p>{{$item_1['deskripsi']}}</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="counter-box themesflat-counter hover-up wow fadeInUp" data-wow-delay="0.1s">
                            <div class="number-content h2"><span class="number"
                                    data-speed="2000" data-to="{{$item_2['angka']}}" data-inviewport="yes">{{$item_2['angka']}}</span>+</div>
                            <p>{{$item_2['deskripsi']}}</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="counter-box themesflat-counter hover-up wow fadeInUp" data-wow-delay="0.1s">
                            <div class="number-content h2"><span class="number"
                                    data-speed="2000" data-to="{{$item_3['angka']}}" data-inviewport="yes">{{$item_3['angka']}}</span>%</div>
                            <p>{{$item_3['deskripsi']}}</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="counter-box themesflat-counter hover-up wow fadeInUp" data-wow-delay="0.1s">
                            <div class="number-content h2"><span class="number"
                                    data-speed="2000" data-to="{{$item_4['angka']}}" data-inviewport="yes">{{$item_4['angka']}}</span>+</div>
                            <p>{{$item_4['deskripsi']}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="about-content-left wow fadeInLeft">
                    <div class="about-post">
                        <img src="{{ asset('olux/assets/images/image-box/about-post-mystory.jpg') }}" alt="images">
                        <div class="mark-about-post"></div>
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
                    <h2 class="section-45px-montserrat margin-top-15">{{$how_it_work_section_4['judul']}}</h2>
                    <p class="section-17px-regular margin-bottom-25">{{$how_it_work_section_4['deskripsi']}}</p>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="60" data-smobile="60"
                    style="height:60px"></div>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <div class="w-lg-85 mx-lg-auto">
        <div class="card bg-primary text-white overflow-hidden p-4">
            <div class="row justify-content-md-start align-items-md-center text-center text-md-left">
                <div class="col-md-6 offset-md-3 mb-3 mb-md-0">
                    <h3 class="text-white mb-1">{{$how_it_work_section_5['judul']}}</h3>
                    <p class="text-white-70 mb-0">{{$how_it_work_section_5['deskripsi']}}</p>
                </div>
                <div class="col-md-3 text-md-right">
                    <a class="btn btn-light transition-3d-hover" href="https://gosocial.co.id/contact">Hubungi Kami</a>
                </div>
            </div>

            <!-- SVG Component -->
            <figure class="w-25 d-none d-md-block content-centered-y ml-n4">
                <img class="img-fluid" src="https://gosocial.co.id/assets/svg/illustrations/communication.svg" alt="Image Description">
            </figure>
            <!-- End SVG Component -->
        </div>
    </div>
</div>

<section class="flat-services mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title wow fadeInDown">
                    <h4 class="section-subtitle">{{$how_it_work_section_6['sub_judul']}}</h4>
                    <h2 class="section-45px-montserrat margin-top-15">{{$how_it_work_section_6['judul']}}</h2>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="60" data-smobile="60"
                    style="height:60px"></div>
            </div>
        </div>
        @php
            $section_6_item_1 = $how_it_work_section_6['item_1'];
            $section_6_item_2 = $how_it_work_section_6['item_2'];
        @endphp
        <div class="row justify-content-lg-center align-items-md-center">
            <div class="col-md-5 mb-7 mb-md-0">
                <!-- Features -->
                @foreach ($section_6_item_1 as $item)
                    <div class="media mb-4">
                        <span class="text-danger mr-3">
                            <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                            </svg>
                        </span>
                        <div class="media-body text-dark h2">
                            {{$item['deskripsi_konten']}}
                        </div>
                    </div>
                @endforeach
                <!-- End Features -->
            </div>

            <div class="col-md-7 col-lg-5">
                <div class="position-relative">
                    <!-- Card -->
                    <div class="card">
                        <div class="card-body">
                            <figure class="mb-4">
                                <img src="{{ asset('images/landingpage_razenstudio/how-it-works/'.$section_6_item_2['gambar']) }}" alt="SVG" style="height: 10rem; width:auto;">
                            </figure>
                            <h1>{{$section_6_item_2['judul']}}</h1>
                            <p>{{$section_6_item_2['deskripsi']}}</p>
                        </div>
                    </div>
                    <!-- End Card -->

                    <!-- SVG Elements -->
                    <figure class="max-w-19rem w-100 position-absolute bottom-0 right-0 z-index-n1">
                        <div class="mb-n7 mr-n7">
                            <img class="img-fluid" src="https://gosocial.co.id/assets/svg/components/dots-2.svg" alt="Image Description">
                        </div>
                    </figure>
                    <!-- End SVG Elements -->
                </div>
            </div>
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
