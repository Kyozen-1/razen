@extends('landing-page-razen-studio.layouts.app')
@section('title', 'Razen Studio - Your Trusted Branding Design Studio')

@section('css')
<link rel="stylesheet" href="https://gosocial.co.id/assets/vendor/cubeportfolio/css/cubeportfolio.min.css">
<link rel="stylesheet" href="https://gosocial.co.id/assets/vendor/hs-mega-menu/dist/hs-mega-menu.min.css">
<link rel="stylesheet" href="https://gosocial.co.id/assets/vendor/dzsparallaxer/dzsparallaxer.css">
<link rel="stylesheet" href="https://gosocial.co.id/assets/vendor/aos/dist/aos.css">
<link rel="stylesheet" href="https://gosocial.co.id/assets/css/pages/global.css?v.0908">
<link rel="stylesheet" href="https://gosocial.co.id/assets/css/theme.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/fontawesome.min.css" integrity="sha512-RvQxwf+3zJuNwl4e0sZjQeX7kUa3o82bDETpgVCH2RiwYSZVDdFJ7N/woNigN/ldyOOoKw8584jM4plQdt8bhA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('content')
@php
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioHome;
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioReview;
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioBrand;
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioOfficialPartner;

    $landing_page = LandingpageRazenstudioHome::first();
    $section1 = json_decode($landing_page->section_1, true);
    $section2 = json_decode($landing_page->section_2, true);
    $section3 = json_decode($landing_page->section_3, true);
    $section4 = json_decode($landing_page->section_4, true);
    $section5 = json_decode($landing_page->section_5, true);
    $section6 = json_decode($landing_page->section_6, true);

    $reviews = LandingpageRazenstudioReview::latest()->get();
    $brands= LandingpageRazenstudioBrand::all();
    $partners = LandingpageRazenstudioOfficialPartner::all();
@endphp
    <div class="flat-slider container-fuild">
        <div class="row">
            <div class="mark-slide">
                <img src="{{ asset('olux/assets/images/mark-page/mark-icon-slide') }}.png" alt="images">
            </div>
            <div class="swiper-container mainslider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide slider-st-1">
                        <div class="content-slider-left text-white">
                            <h3 class="sub-title-slider section-24px-montserrat text-white">{{$section1?$section1['judul']:'' }}</h3>
                            <h2 class="title-slider section-65px-montserrat text-white">{{$section1?$section1['deskripsi_judul']:'' }}</h2>
                            <p class="desc-slider">{{$section1?$section1['deskripsi']:'' }}</p>
                            <div class="button-slider">
                            <a href="{{ route('contact') }}" class="button-footer arrow-btn btn-st style-2">Konsultasi Sekarang!</a>
                                {{-- <a href="#" class="button-footer clound-down btn-st border-white">Download CV</a> --}}
                            </div>
                        </div>
                        <div class="content-slider-right">
                            <img src="{{ asset('images/landingpage_razenstudio/home/'.$landing_page->gambar_section1) }}" alt="images">
                        </div>
                    </div>
                    <div class="swiper-slide slider-st-1">
                        <div class="content-slider-left text-white">
                            <h3 class="sub-title-slider section-24px-montserrat text-white">THE FIRST HUB OF</h3>
                            <h2 class="title-slider section-65px-montserrat text-white">Social Media & Digital Marketing Agency</h2>
                            <p class="desc-slider">GoSocial merupakan konsultan sekaligus penyedia layanan Jasa Digital Marketing untuk berbagai tahapan bisnis, hasil kolaborasi dari berbagai Agency & Profesional terbaik di Indonesia!</p>
                            <div class="button-slider">
                                <a href="{{ route('contact') }}" class="button-footer arrow-btn btn-st style-2">Konsultasi Sekarang!</a>
                                {{-- <a href="#" class="button-footer clound-down btn-st border-white">Download CV</a> --}}
                            </div>
                        </div>
                        <div class="content-slider-right">
                            <img src="{{ asset('olux/assets/images/image-slider/img-slider.jpg') }}" alt="images">
                        </div>
                    </div>
                    <div class="swiper-slide slider-st-1">
                        <div class="content-slider-left text-white">
                            <h3 class="sub-title-slider section-24px-montserrat text-white">THE FIRST HUB OF</h3>
                            <h2 class="title-slider section-65px-montserrat text-white">Social Media & Digital Marketing Agency</h2>
                            <p class="desc-slider">GoSocial merupakan konsultan sekaligus penyedia layanan Jasa Digital Marketing untuk berbagai tahapan bisnis, hasil kolaborasi dari berbagai Agency & Profesional terbaik di Indonesia!</p>
                            <div class="button-slider">
                                <a href="{{ route('contact') }}" class="button-footer arrow-btn btn-st style-2">Konsultasi Sekarang!</a>
                                {{-- <a href="#" class="button-footer clound-down btn-st border-white">Download CV</a> --}}
                            </div>
                        </div>
                        <div class="content-slider-right">
                            <img src="{{ asset('olux/assets/images/image-slider/img-slider.jpg') }}" alt="images">
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="main-slide-button">
                <button class="clone-main-btn-prev"></button>
                <button class="clone-main-btn-next"></button>
            </div> --}}
        </div>
    </div>

    <section class="flat-counter">
        <div class="container">
            <div class="row">
                @if ($section2 != null)
                    @foreach ($section2 as $item)
                        <div class="col-md-4">
                            <div class="counter-box themesflat-counter hover-up wow fadeInUp" data-wow-delay="0.1s">
                                <div class="icon-box">
                                    <div class="content-icon">
                                        <h3 class="section-20px-montserrat font-weight-600 line-height-35">{{$item['judul']}}</h3>
                                    </div>
                                </div>
                                <div class="number-content section-65px-montserrat">
                                    <img src="{{ asset('images/landingpage_razenstudio/home/'.$item['gambar']) }}" class="img-responsive">
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>

    <section class="flat-about-2nd">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="about-content-left wow fadeInLeft">
                        <div class="about-post">
                            <img src="{{ asset('images/landingpage_razenstudio/home/'.$section3['gambar']) }}" alt="images">
                            <div class="mark-video">
                                <a href="{{$section3['link']}}" class="lightbox-image">
                                    <div class="icon"></div>
                                </a>
                            </div>
                            <div class="mark-about-post"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about-content-right wow fadeInUp" data-wow-delay="0ms"
                        data-wow-duration="1500ms">
                        <div class="section-title">
                            <h4 class="section-subtitle">{{$section3['sub_judul']}}</h4>
                            <h2 class="section-45px-montserrat margin-top-15 margin-bottom-20">{{$section3['judul']}}</h2>
                        </div>
                    </div>
                    <div class="about-client-content-box wow fadeInRight">
                        <div class="swiper-container mainslider">
                            <div class="swiper-wrapper">
                                @foreach ($section3['konten'] as $item)
                                    <div class="swiper-slide">
                                        <div class="client-box">
                                            <h3 class="content-client font-weight-400 margin-bottom-30">{{$item['deskripsi_konten']}}</h3>
                                            <div class="client-info">
                                                <div class="client-info-inner link-style-5">
                                                    <h3 class="section-16px-regular font-weight-700">{{$item['judul_konten']}}</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="team-button">
                                <button id="button-team-prev"></button>
                                <button id="button-team-next"></button>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
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
                        <h4 class="section-subtitle">{{$section4['sub_judul']}}</h4>
                        <h2 class="section-45px-montserrat margin-top-15">{{$section4['judul']}}</h2>
                        <p class="text-muted">{{$section4['deskripsi']}}</p>
                    </div>
                    <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="60" data-smobile="60"
                        style="height:60px"></div>
                </div>
                @foreach ($section4['konten'] as $item)
                    <div class="col-md-4">
                        <div class="services-box active">
                            <div class="wraper-effect active"></div>
                            <figure class="font-size-icon">
                                <img style="height: 5rem; width:5rem; padding: -3rem;" src="{{ asset('images/landingpage_razenstudio/home/'.$item['logo_konten']) }}" alt="SVG">
                            </figure>
                            <div class="services-content">
                                <a href="{{ $item['link_konten'] ? route($item['link_konten']) : '' }}" class="section-22px-montserrat">{{$item['judul_konten']}}</a>
                                <p class="services-desc">{{$item['deskripsi_konten']}}</p>
                                <a href="{{ $item['link_konten'] ? route($item['link_konten']) : '' }}" class="read-more"></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="flat-services">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title wow fadeInDown">
                        <h2 class="section-45px-montserrat margin-top-15">{{$section5['judul']}}</h2>
                        <p class="text-muted">{{$section5['deskripsi']}}</p>
                    </div>
                    <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="60" data-smobile="60"
                        style="height:60px"></div>
                </div>
                <div class="col-md-12">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th scope="col" class="w-40"></th>
                                <th scope="col" class="w-20 align-middle">
                                    <span class="text-dark h2">In-House</span>
                                    <small class="d-block text-body h5">Mengelola tim internal sendiri</small>
                                </th>
                                <th scope="col" class="w-20 border-left border-right align-middle text-center">
                                    <span class="text-dark h2">Freelance / Agency</span>
                                    <small class="d-block text-body h5">Outsource ke freelancer / agency lain</small>
                                </th>
                                <th scope="col" class="w-20 align-middle text-center">
                                    <span class="text-dark h2">Digital Agency Hub</span>
                                    <small class="d-block text-body h5">Bekerjasama dengan<span class="badge badge-primary badge-pill ml-1">GoSocial</span></small>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-top border-bottom">
                                <th scope="row" class="bg-white text-dark pt-5 pb-3 px-4 mb-0 font-size-2">Biaya</th>
                                <td class="bg-white"></td>
                                <td class="bg-white border-left border-right"></td>
                                <td class="bg-white"></td>
                            </tr>
                            <tr>
                                <td scope="row" class="font-size-1 py-3 px-4 font-size-2">Fixed Cost</td>
                                <td class="text-center p-3">
                                    <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger">
                                        <path fill="currentColor" d="M14,2A8,8 0 0,0 6,10A8,8 0 0,0 14,18A8,8 0 0,0 22,10A8,8 0 0,0 14,2M4.93,5.82C3.08,7.34 2,9.61 2,12A8,8 0 0,0 10,20C10.64,20 11.27,19.92 11.88,19.77C10.12,19.38 8.5,18.5 7.17,17.29C5.22,16.25 4,14.21 4,12C4,11.7 4.03,11.41 4.07,11.11C4.03,10.74 4,10.37 4,10C4,8.56 4.32,7.13 4.93,5.82M18.09,6.08L19.5,7.5L13,14L9.21,10.21L10.63,8.79L13,11.17" />
                                    </svg>
                                </td>
                                <td class="text-center border-left border-right p-3">
                                    <span class="badge badge-soft-primary badge-pill font-weight-normal py-2 px-3 font-size-1">Tidak perlu</span>
                                </td>
                                <td class="text-center p-3">
                                    <span class="badge badge-soft-primary badge-pill font-weight-normal py-2 px-3 font-size-1">Tidak perlu</span>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row" class="font-size-1 py-3 px-4 font-size-2">Biaya Rekrutmen & Training</td>
                                <td class="text-center text-body p-3">
                                    <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger">
                                        <path fill="currentColor" d="M14,2A8,8 0 0,0 6,10A8,8 0 0,0 14,18A8,8 0 0,0 22,10A8,8 0 0,0 14,2M4.93,5.82C3.08,7.34 2,9.61 2,12A8,8 0 0,0 10,20C10.64,20 11.27,19.92 11.88,19.77C10.12,19.38 8.5,18.5 7.17,17.29C5.22,16.25 4,14.21 4,12C4,11.7 4.03,11.41 4.07,11.11C4.03,10.74 4,10.37 4,10C4,8.56 4.32,7.13 4.93,5.82M18.09,6.08L19.5,7.5L13,14L9.21,10.21L10.63,8.79L13,11.17" />
                                    </svg>
                                </td>
                                <td class="text-center border-left border-right p-3">
                                    <span class="badge badge-soft-primary badge-pill font-weight-normal py-2 px-3 font-size-1">Tidak perlu</span>
                                </td>
                                <td class="text-center p-3">
                                    <span class="badge badge-soft-primary badge-pill font-weight-normal py-2 px-3 font-size-1">Tidak perlu</span>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row" class="font-size-1 py-3 px-4 align-middle font-size-2 align-middle">Harga</td>
                                <td></td>
                                <td class="text-center text-body border-left border-right py-3 px-4 align-middle align-middle">
                                    <span class="badge badge-soft-danger badge-pill font-weight-normal py-2 px-3 font-size-1">Tidak ada standard</span>
                                </td>
                                <td class="justify-content-center align-self-center text-center">
                                    <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success mr-2">
                                        <path fill="currentColor" d="M14,2A8,8 0 0,0 6,10A8,8 0 0,0 14,18A8,8 0 0,0 22,10A8,8 0 0,0 14,2M4.93,5.82C3.08,7.34 2,9.61 2,12A8,8 0 0,0 10,20C10.64,20 11.27,19.92 11.88,19.77C10.12,19.38 8.5,18.5 7.17,17.29C5.22,16.25 4,14.21 4,12C4,11.7 4.03,11.41 4.07,11.11C4.03,10.74 4,10.37 4,10C4,8.56 4.32,7.13 4.93,5.82M18.09,6.08L19.5,7.5L13,14L9.21,10.21L10.63,8.79L13,11.17" />
                                    </svg>
                                    <p class="small font-size-2">sudah disesuaikan dengan level bisnis</p>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row" class="bg-white text-dark pt-5 pb-3 px-4 mb-0 font-size-2">Keuntungan Bagi Bisnis</th>
                                <td class="bg-white"></td>
                                <td class="bg-white border-left border-right"></td>
                                <td class="bg-white"></td>
                            </tr>
                            <tr>
                                <td scope="row" class="font-size-1 py-3 px-4 font-size-2">Efisiensi Biaya Tim</td>
                                <td class="text-center p-3">
                                    <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger">
                                        <path fill="currentColor" d="M12,2C17.53,2 22,6.47 22,12C22,17.53 17.53,22 12,22C6.47,22 2,17.53 2,12C2,6.47 6.47,2 12,2M15.59,7L12,10.59L8.41,7L7,8.41L10.59,12L7,15.59L8.41,17L12,13.41L15.59,17L17,15.59L13.41,12L17,8.41L15.59,7Z" />
                                    </svg>
                                </td>
                                <td class="text-center border-left border-right p-3">
                                    <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success">
                                        <path fill="currentColor" d="M14,2A8,8 0 0,0 6,10A8,8 0 0,0 14,18A8,8 0 0,0 22,10A8,8 0 0,0 14,2M4.93,5.82C3.08,7.34 2,9.61 2,12A8,8 0 0,0 10,20C10.64,20 11.27,19.92 11.88,19.77C10.12,19.38 8.5,18.5 7.17,17.29C5.22,16.25 4,14.21 4,12C4,11.7 4.03,11.41 4.07,11.11C4.03,10.74 4,10.37 4,10C4,8.56 4.32,7.13 4.93,5.82M18.09,6.08L19.5,7.5L13,14L9.21,10.21L10.63,8.79L13,11.17" />
                                    </svg>
                                </td>
                                <td class="text-center p-3">
                                    <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success">
                                        <path fill="currentColor" d="M14,2A8,8 0 0,0 6,10A8,8 0 0,0 14,18A8,8 0 0,0 22,10A8,8 0 0,0 14,2M4.93,5.82C3.08,7.34 2,9.61 2,12A8,8 0 0,0 10,20C10.64,20 11.27,19.92 11.88,19.77C10.12,19.38 8.5,18.5 7.17,17.29C5.22,16.25 4,14.21 4,12C4,11.7 4.03,11.41 4.07,11.11C4.03,10.74 4,10.37 4,10C4,8.56 4.32,7.13 4.93,5.82M18.09,6.08L19.5,7.5L13,14L9.21,10.21L10.63,8.79L13,11.17" />
                                    </svg>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row" class="font-size-1 py-3 px-4 align-middle font-size-2">Bisnis bisa fokus pada kompetensi utamanya</td>
                                <td class="text-center text-body p-3 align-middle">
                                    <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger">
                                        <path fill="currentColor" d="M12,2C17.53,2 22,6.47 22,12C22,17.53 17.53,22 12,22C6.47,22 2,17.53 2,12C2,6.47 6.47,2 12,2M15.59,7L12,10.59L8.41,7L7,8.41L10.59,12L7,15.59L8.41,17L12,13.41L15.59,17L17,15.59L13.41,12L17,8.41L15.59,7Z" />
                                    </svg>
                                </td>
                                <td class="text-center border-left border-right p-3 align-middle">
                                    <span class="badge badge-soft-danger badge-pill font-weight-normal py-2 px-3 font-size-1">Perlu ada yang mengatur</span>
                                </td>
                                <td class="text-center p-3 align-middle font-size-2">
                                    <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success mr-2">
                                        <path fill="currentColor" d="M14,2A8,8 0 0,0 6,10A8,8 0 0,0 14,18A8,8 0 0,0 22,10A8,8 0 0,0 14,2M4.93,5.82C3.08,7.34 2,9.61 2,12A8,8 0 0,0 10,20C10.64,20 11.27,19.92 11.88,19.77C10.12,19.38 8.5,18.5 7.17,17.29C5.22,16.25 4,14.21 4,12C4,11.7 4.03,11.41 4.07,11.11C4.03,10.74 4,10.37 4,10C4,8.56 4.32,7.13 4.93,5.82M18.09,6.08L19.5,7.5L13,14L9.21,10.21L10.63,8.79L13,11.17" />
                                    </svg>
                                    <p class="small font-size-2">kami akan menjadi konsultan sekaligus partner eksekusi</p>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row" class="font-size-1 py-3 px-4 align-middle font-size-2">Kualitas Hasil Pekerjaan</td>
                                <td class="text-center text-body p-3">
                                    <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger mr-2">
                                        <path fill="currentColor" d="M12,2C17.53,2 22,6.47 22,12C22,17.53 17.53,22 12,22C6.47,22 2,17.53 2,12C2,6.47 6.47,2 12,2M15.59,7L12,10.59L8.41,7L7,8.41L10.59,12L7,15.59L8.41,17L12,13.41L15.59,17L17,15.59L13.41,12L17,8.41L15.59,7Z" />
                                    </svg>
                                    <p class="small font-size-2">Semakin profesional maka fixed cost semakin besar</p>
                                </td>
                                <td class="text-center border-left border-right p-3">
                                    <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger mr-2">
                                        <path fill="currentColor" d="M12,2C17.53,2 22,6.47 22,12C22,17.53 17.53,22 12,22C6.47,22 2,17.53 2,12C2,6.47 6.47,2 12,2M15.59,7L12,10.59L8.41,7L7,8.41L10.59,12L7,15.59L8.41,17L12,13.41L15.59,17L17,15.59L13.41,12L17,8.41L15.59,7Z" />
                                    </svg>
                                    <p class="small font-size-2">Sulit mengetahui apakah hasil dengan harga sebanding</p>
                                </td>
                                <td class="text-center p-3">
                                    <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success mr-2">
                                        <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                                    </svg>
                                    <p class="small font-size-2">Proses dan hasil sudah distandarisasi</p>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row" class="font-size-1 py-3 px-4 align-middle font-size-2">Menguasai tools & teknologi terkini dalam Digital Marketing</td>
                                <td class="text-center text-body p-3 align-middle">
                                    <span class="badge badge-soft-danger badge-pill font-weight-normal py-2 px-3 font-size-1">Belum tentu
                                    </span>
                                </td>
                                <td class="text-center border-left border-right p-3 align-middle">
                                    <span class="badge badge-soft-danger badge-pill font-weight-normal py-2 px-3 font-size-1">Belum tentu
                                    </span>
                                </td>
                                <td class="text-center p-3 align-middle">
                                    <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success mr-2">
                                        <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                                    </svg>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row" class="font-size-1 py-3 px-4 align-middle font-size-2">Dukungan aplikasi untuk melihat dan manajemen proyek</th>
                                <td class="text-center text-body p-3">
                                    <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger mr-2">
                                        <path fill="currentColor" d="M12,2C17.53,2 22,6.47 22,12C22,17.53 17.53,22 12,22C6.47,22 2,17.53 2,12C2,6.47 6.47,2 12,2M15.59,7L12,10.59L8.41,7L7,8.41L10.59,12L7,15.59L8.41,17L12,13.41L15.59,17L17,15.59L13.41,12L17,8.41L15.59,7Z" />
                                    </svg>
                                </td>
                                <td class="text-center border-left border-right p-3">
                                    <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger mr-2">
                                        <path fill="currentColor" d="M12,2C17.53,2 22,6.47 22,12C22,17.53 17.53,22 12,22C6.47,22 2,17.53 2,12C2,6.47 6.47,2 12,2M15.59,7L12,10.59L8.41,7L7,8.41L10.59,12L7,15.59L8.41,17L12,13.41L15.59,17L17,15.59L13.41,12L17,8.41L15.59,7Z" />
                                    </svg>
                                </td>
                                <td class="text-center p-3">
                                    <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success mr-2">
                                        <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                                    </svg>
                                </td>
                                <tr>
                                    <td colspan="3"></td>
                                    <td class="text-center"><a class="btn btn-primary waves-effect waves-light font-size-2" href="#">Contact Us</a></td>
                                </tr>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <div class="bg-light overflow-hidden">
        <div class="container-xl space-2">
            <!-- Title -->
            <div class="w-md-80 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
                <h2>{{$section6['judul']}}</h2>
                <p>{{$section6['deskripsi']}}</p>
            </div>
        </div>
    </div>

    <section class="flat-client">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="client-content-box wow fadeInUp">
                        <h4 class="section-title section-45px-montserrat">{{$landing_page->section_7}}</h4>
                        <button class="clone-btn-prev"></button>
                        <button class="clone-btn-next"></button>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="swiper-container sliver-vertical">
                        <div class="swiper-wrapper">
                            @foreach ($reviews as $review)
                            <div class="swiper-slide">
                                <div class="client-slider-box">
                                    <div class="client-user text-center">
                                        <img src="{{ asset('images/landingpage_razenstudio/reviewer/'.$review->gambar) }}"
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
                                            <h4 class="name-author section-20px-montserrat">{{$review->nama}}</h4>
                                            <p class="margin-top-11">{{$review->ulasan}}</p>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js" integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/fontawesome.min.js" integrity="sha512-j3gF1rYV2kvAKJ0Jo5CdgLgSYS7QYmBVVUjduXdoeBkc4NFV4aSRTi+Rodkiy9ht7ZYEwF+s09S43Z1Y+ujUkA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection
