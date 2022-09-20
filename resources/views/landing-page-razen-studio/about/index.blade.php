@php
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioAbout;
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioGalleryAbout;
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioBrand;
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioOfficialPartner;
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioReview;
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioHome;

    $home = LandingpageRazenstudioHome::first();

    $about = LandingpageRazenstudioAbout::first();
    if ($about) {
        $about_section_1 = json_decode($about->section_1, true);
        $about_section_2 = json_decode($about->section_2, true);
        $about_section_3 = json_decode($about->section_3, true);
        $about_section_4 = json_decode($about->section_4, true);
        $about_section_5 = json_decode($about->section_5, true);
        $about_section_6 = json_decode($about->section_6, true);
        $about_section_7 = json_decode($about->section_7, true);
        $about_section_5 = json_decode($about->section_5, true);
    } else {
        $about_section_1 = [];
        $about_section_2 = [];
        $about_section_3 = [];
        $about_section_4 = [];
        $about_section_5 = [];
        $about_section_6 = [];
        $about_section_7 = [];
        $about_section_5 = [];
    }

    $reviews = LandingpageRazenstudioReview::latest()->get();
    $brands= LandingpageRazenstudioBrand::all();
    $partners = LandingpageRazenstudioOfficialPartner::all();
    $cek_gallery = LandingpageRazenstudioGalleryAbout::first();
@endphp
@extends('landing-page-razen-studio.layouts.app')
@section('title', $about_section_1['title'])

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
                <h2 class="section-title-page text-white">{{$about_section_1['judul']}}</h2>
                <p class="mb-5">{{$about_section_1['deskripsi']}}</p>
                <ul class="breadcrumbs-inner list-center display-flex">
                    <li><a class="section-16px-regular font-weight-500 text-decoration-none" href="{{ route('home') }}">Home</a></li>
                    <li>
                        <h4 class="section-16px-regular font-weight-500 text-white">{{$about_section_1['judul']}}</h4>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="flat-counter">
    <div class="container">
        <div class="row mx-n2 mb-5">
            @if ($cek_gallery)
                @php
                    $gallerys = LandingpageRazenstudioGalleryAbout::latest()->get();
                @endphp
                @foreach ($gallerys as $gallery)
                    <div class="col-6 col-md px-2 mb-3">
                        <div class="bg-img-hero" style="background-image: url({{asset('images/landingpage_razenstudio/about/'.$gallery->gambar)}}); height: 30rem;"></div>
                    </div>
                @endforeach
            @endif
        </div>
        <div class="row">
            @foreach ($about_section_2 as $item)
                <div class="col-md-4">
                    <div class="counter-box themesflat-counter hover-up wow fadeInUp" data-wow-delay="0.1s">
                        <h2 class="number-content section-65px-montserrat"><span class="number"
                                data-speed="2000" data-to="{{$item['judul']}}" data-inviewport="yes">{{$item['judul']}}</span></h2>
                        <p>{{$item['deskripsi']}}</p>
                    </div>
                </div>
            @endforeach
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
                        <h4 class="section-45px-montserrat margin-top-15 margin-bottom-20">{{$about_section_3['judul']}}</h4>
                    </div>
                    <p class="section-17px-regular margin-bottom-25">{!! $about_section_3['deskripsi'] !!}</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="about-content-left wow fadeInLeft">
                    <div class="about-post">
                        <img src="{{ asset('images/landingpage_razenstudio/about/'.$about_section_3['gambar']) }}" alt="images">
                        <div class="mark-video">
                            <a href="{{ $about_section_3['link'] }}" class="lightbox-image">
                                <div class="icon"></div>
                            </a>
                        </div>
                        <div class="mark-about-post"></div>
                    </div>
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
                        <h4 class="section-45px-montserrat margin-top-15 margin-bottom-20">{{$about_section_4['judul']}}</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="about-content-right wow fadeInUp" data-wow-delay="0ms"
                    data-wow-duration="1500ms">
                    <p class="section-17px-regular margin-bottom-25">{{$about_section_4['deskripsi']}}</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="flat-brand">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="swiper-container carousel-style-3">
                    <div class="swiper-wrapper">
                        @foreach ($brands as $brand)
                            <div class="swiper-slide">
                                <div class="brand-content">
                                    <img src="{{ asset('images/landingpage_razenstudio/brand/'.$brand->gambar) }}" alt="images">
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
                    <h4 class="section-subtitle">{{$about_section_5['sub_judul']}}</h4>
                    <h2 class="section-45px-montserrat margin-top-15">{{$about_section_5['judul']}}</h2>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="60" data-smobile="60"
                    style="height:60px"></div>
            </div>
            @foreach ($about_section_5['konten'] as $value)
                <div class="col-md-4">
                    <div class="services-box">
                        <div class="wraper-effect"></div>
                        <figure class="font-size-icon">
                            <img style="height: 5rem; width:5rem; padding: -3rem;" src="{{ asset('images/landingpage_razenstudio/about/'.$value['gambar_konten']) }}" alt="SVG">
                        </figure>
                        <div class="services-content">
                            <a href="service-single.html" class="section-22px-montserrat text-dark">{{$value['judul_konten']}}</a>
                            <p class="services-desc">{{$value['deskripsi_konten']}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="flat-about-2nd">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="about-content-left wow fadeInLeft">
                    <div class="about-post">
                        <img src="{{ asset('images/landingpage_razenstudio/about/'.$about_section_6['gambar']) }}" alt="images">
                        <div class="mark-about-post"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="about-content-right wow fadeInUp" data-wow-delay="0ms"
                    data-wow-duration="1500ms">
                    <div class="section-title">
                        <h4 class="section-45px-montserrat margin-top-15 margin-bottom-20">{{$about_section_6['judul']}}</h4>
                    </div>
                    <p class="section-17px-regular margin-bottom-25">{!! $about_section_6['deskripsi'] !!}</p>
                    <div class="button-about margin-top-48 wow fadeInUp" data-wow-delay="600ms"
                        data-wow-duration="1500ms">
                        <a href="{{ route($about_section_6['link']) }}" class="button-footer arrow-btn btn-st btn-style-1">Work With Us</a>
                    </div>
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
                        <h4 class="section-45px-montserrat margin-top-15 margin-bottom-20">{{$about_section_7['judul']}}</h4>
                    </div>
                    <p class="section-17px-regular margin-bottom-25">{!! $about_section_7['deskripsi'] !!}</p>
                    <div class="button-about margin-top-48 wow fadeInUp" data-wow-delay="600ms"
                        data-wow-duration="1500ms">
                        <a href="{{ route($about_section_6['link']) }}" class="button-footer arrow-btn btn-st btn-style-1">Work With Us</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="about-content-left wow fadeInLeft">
                    <div class="about-post">
                        <img src="{{ asset('images/landingpage_razenstudio/about/'.$about_section_7['gambar']) }}" alt="images">
                        <div class="mark-about-post"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="flat-about-2nd">
    <div class="container space-top-1 space-bottom-2">
        <div class="row">
            <div class="col-lg-6 mb-3 mb-lg-0">
                <!-- Card -->
                <div class="card bg-primary text-white overflow-hidden p-5" style="height: 25rem">
                    <div class="w-65 pr-2 justify-content-center">
                        <h2 class="text-white">Cara Kerja</h2>
                        <p class="text-white">Kami akan menjadi konsultan sekaligus partner bisnis dalam menjalankan Digital
                            Marketing.</p>
                        <a class="btn btn-sm btn-light transition-3d-hover" href="#">Lebih Lanjut</a>
                    </div>
                    <div class="position-absolute right-0 bottom-0 w-50 mb-n3 mr-n4">
                        <img class="img-fluid" src="https://gosocial.co.id/assets/img/mockups/img15.webp" alt="Cara Kerja">
                    </div>
                </div>
                <!-- End Card -->
            </div>

            <div class="col-lg-6">
                <!-- Card -->
                <div class="card bg-warning text-white overflow-hidden p-5" style="height: 25rem">
                    <div class="w-65 pr-2">
                        <h2 class="text-white">Portfolio</h2>
                        <p class="text-white">Kami sudah berpengalaman berkolaborasi dengan berbagai klien dan partner.</p>
                        <a class="btn btn-sm btn-light transition-3d-hover" href="https://gosocial.co.id/portfolio">Lihat Portofolio</a>
                    </div>
                    <div class="position-absolute right-0 bottom-0 w-50 mb-n3 mr-n4">
                        <img class="img-fluid" src="https://gosocial.co.id/assets/img/mockups/img12.webp" alt="Portfolio">
                    </div>
                </div>
                <!-- End Card -->
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
