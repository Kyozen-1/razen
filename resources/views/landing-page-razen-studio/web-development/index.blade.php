@php
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioWebDevelopment;
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioBrand;
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioHome;
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioReview;
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioOfficialPartner;

    $web_development = LandingpageRazenstudioWebDevelopment::first();

    $web_development_section_1 = json_decode($web_development->section_1, true);
    $web_development_section_2 = json_decode($web_development->section_2, true);
    $web_development_section_3 = json_decode($web_development->section_3, true);
    $web_development_section_4 = json_decode($web_development->section_4, true);
    $web_development_section_5 = json_decode($web_development->section_5, true);
    $web_development_section_6 = json_decode($web_development->section_6, true);
    $web_development_section_7 = json_decode($web_development->section_7, true);
    $web_development_section_8 = json_decode($web_development->section_8, true);
    $web_development_section_9 = json_decode($web_development->section_9, true);
    $web_development_section_10 = json_decode($web_development->section_10, true);

    $home = LandingpageRazenstudioHome::first();
    $brands= LandingpageRazenstudioBrand::all();
    $reviews = LandingpageRazenstudioReview::latest()->get();
    $partners = LandingpageRazenstudioOfficialPartner::all();
@endphp
@extends('landing-page-razen-studio.layouts.app')
@section('title', $web_development_section_1['title'])

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/steps.css') }}">
    <link rel="stylesheet" href="https://gosocial.co.id/assets/css/pages/commercial-photo.css?v.2112">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://gosocial.co.id/assets/vendor/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="https://gosocial.co.id/assets/vendor/cubeportfolio/css/cubeportfolio.min.css">
    <link rel="stylesheet" href="https://gosocial.co.id/assets/vendor/hs-mega-menu/dist/hs-mega-menu.min.css">
    <link rel="stylesheet" href="https://gosocial.co.id/assets/vendor/dzsparallaxer/dzsparallaxer.css">
    <link rel="stylesheet" href="https://gosocial.co.id/assets/vendor/aos/dist/aos.css">
    <link rel="stylesheet" href="https://gosocial.co.id/assets/css/pages/global.css?v.0908">
    <link rel="stylesheet" href="https://gosocial.co.id/assets/css/theme.min.css">
    <link rel="stylesheet" href="https://gosocial.co.id/assets/vendor/@fancyapps/fancybox/dist/jquery.fancybox.min.css">
    <link rel="stylesheet" href="https://gosocial.co.id/assets/vendor/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="https://gosocial.co.id/assets/css/pages/sme/instagram.css?v.1808">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/fontawesome.min.css" integrity="sha512-RvQxwf+3zJuNwl4e0sZjQeX7kUa3o82bDETpgVCH2RiwYSZVDdFJ7N/woNigN/ldyOOoKw8584jM4plQdt8bhA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                            <a class="section-16px-regular font-weight-500 mr-2 text-white text-decoration-none" href="{{ route('home') }}">Home </a>  <h4 class="section-16px-regular font-weight-500 text-white"> > {{$web_development_section_1['judul']}}</h4>
                        </div>
                        <h2 class="title-slider section-65px-montserrat text-white">{{$web_development_section_1['judul']}}</h2>
                        <p class="desc-slider">{{$web_development_section_1['deskripsi']}}</p>
                        <div class="button-slider">
                            <a href="{{ route('contact') }}" class="button-footer arrow-btn btn-st style-2 text-decoration-none">Hubungi Sales</a>
                                {{-- <a href="#"class="button-footer clound-down btn-st border-white">Download CV</a> --}}
                        </div>
                    </div>
                    <div class="content-slider-right">
                        <img src="{{ asset('images/landingpage_razenstudio/web-development/'.$web_development_section_1['gambar']) }}" alt="images">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="flat-about-2nd">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="about-content-right wow fadeInUp" data-wow-delay="0ms"
                    data-wow-duration="1500ms">
                    <div class="section-title">
                        <h4 class="section-45px-montserrat margin-top-15 margin-bottom-20">{{$web_development_section_2['judul']}}</h4>
                    </div>
                    <p class="section-17px-regular margin-bottom-25">
                        {!! $web_development_section_2['deskripsi'] !!}
                    </p>
                </div>
                <div class="about-content-left wow fadeInLeft">
                    <div class="about-post">
                        <img src="{{ asset('images/landingpage_razenstudio/web-development/'.$web_development_section_2['gambar_bawah']) }}" alt="images">
                        <div class="mark-video">
                            <a href="{{$web_development_section_2['link_youtube']}}" class="lightbox-image">
                                <div class="icon"></div>
                            </a>
                        </div>
                        <div class="mark-about-post"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="about-content-left wow fadeInLeft" style="width: 100% !important; height: auto;">
                    <div class="about-post">
                        <img src="{{ asset('images/landingpage_razenstudio/web-development/'.$web_development_section_2['gambar_kanan']) }}" alt="images">
                        <div class="mark-about-post"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="flat-client">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title wow fadeInDown text-center">
                    <h4 class="section-subtitle">{{$web_development_section_3['sub_judul']}}</h4>
                    <h2 class="section-45px-montserrat margin-top-15">{{$web_development_section_3['judul']}}</h2>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="60" data-smobile="60"
                    style="height:60px"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 order-lg-2 mb-7 mb-lg-0">
                <!-- Nav -->
                <ul class="nav nav-box" role="tablist">
                    <li class="nav-item w-100 mx-0 mb-3">
                        <a class="nav-link p-4 active" id="pills-one-code-features-example2-tab" data-toggle="pill" href="#pills-one-code-features-example2" role="tab" aria-controls="pills-one-code-features-example2" aria-selected="false">
                            <div class="media justify-content-center align-items-center align-items-lg-start">
                                <figure class="mt-2 mr-4">
                                    <img src="https://gosocial.co.id/assets/svg/icons/icon-44.svg" alt="Jasa Pembuatan Landing Page" style="width:100%; height: 7rem;">
                                </figure>
                                <div class="media-body ">
                                    <h4 class="mb-0">Jasa Pembuatan Landing Page</h4>
                                    <div class="mt-2">
                                        <p class="text-body mb-0">Solusi pembuatan landing page yang dioptimasi dengan baik untuk konversi traffic website > leads.</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>

                    <li class="nav-item w-100 mx-0 mb-3">
                        <a class="nav-link p-4" id="pills-two-code-features-example2-tab" data-toggle="pill" href="#pills-two-code-features-example2" role="tab" aria-controls="pills-two-code-features-example2" aria-selected="false">
                            <div class="media align-items-center align-items-lg-start">
                                <figure class="mt-2 mr-4 h-100">
                                    <img style="width:100%; height: 7rem;" src="https://gosocial.co.id/assets/svg/icons/icon-68.svg" alt="Jasa Pembuatan Website Toko Online">
                                </figure>
                                <div class="media-body">
                                    <h4 class="mb-0">Jasa Pembuatan Website Toko Online</h4>
                                    <div class="mt-2">
                                        <p class="text-body mb-0">Solusi pembuatan website online shop dengan berbagai fitur untuk melakukan transaksi online secara langsung.</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>

                    <li class="nav-item w-100 mx-0">
                        <a class="nav-link p-4" id="pills-three-code-features-example2-tab" data-toggle="pill" href="#pills-three-code-features-example2" role="tab" aria-controls="pills-three-code-features-example2" aria-selected="true">
                            <div class="media align-items-center align-items-lg-start">
                                <figure class="mt-2 mr-4">
                                    <img style="width:100%; height: 7rem;" src="https://gosocial.co.id/assets/svg/icons/icon-13.svg" alt="Jasa Pembuatan Website Perusahaan">
                                </figure>
                                <div class="media-body">
                                    <h4 class="mb-0">Jasa Pembuatan Website Perusahaan</h4>
                                    <div class="mt-2">
                                        <p class="text-body mb-0">Solusi pembuatan website company profile untuk menampilkan profil perusahaan atau bisnis secara mendetail.</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- End Nav -->
            </div>

            <div class="col-lg-8 order-lg-1 align-self-lg-end">
                @php
                    $item_1 = [];
                    $item_2 = [];
                    $item_3 = [];

                    foreach ($web_development_section_3['item'] as $item) {
                        if($item['item'] == 'jasa_pembuatan_landing_page')
                        {
                            $item_1 = [
                                'gambar' => $item['gambar'],
                                'deskripsi' => $item['deskripsi']
                            ];
                        }

                        if($item['item'] == 'jasa_pembuatan_website_toko_online')
                        {
                            $item_2 = [
                                'gambar' => $item['gambar'],
                                'deskripsi' => $item['deskripsi']
                            ];
                        }

                        if($item['item'] == 'jasa_pembuatan_website_perusahaan')
                        {
                            $item_3 = [
                                'gambar' => $item['gambar'],
                                'deskripsi' => $item['deskripsi']
                            ];
                        }
                    }
                @endphp
                <!-- Tab Content -->
                <div class="tab-content pr-lg-4">
                    <div class="tab-pane fade active show" id="pills-one-code-features-example2" role="tabpanel" aria-labelledby="pills-one-code-features-example2-tab">
                        <div class="container">
                            <div class="row mx-n2">
                                <div class="col-sm-12 col-md-12 px-2 mb-3 mb-md-0">
                                    <div class="card-frame rounded-lg img-fluid bg-img-hero" style="background-image: url({{asset('images/landingpage_razenstudio/web-development/'.$item_1['gambar'])}}); min-height: 50rem;">
                                    </div>
                                </div>
                            </div>

                            <div class="mt-5 mt-md-9">
                                <p>{{$item_1['deskripsi']}}</p>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="pills-two-code-features-example2" role="tabpanel" aria-labelledby="pills-two-code-features-example2-tab">
                        <div class="container">
                            <div class="row mx-n2">
                                <div class="col-sm-12 col-md-12 px-2 mb-3 mb-md-0">
                                    <div class="card-frame rounded-lg img-fluid bg-img-hero" style="background-image: url({{asset('images/landingpage_razenstudio/web-development/'.$item_2['gambar'])}}); min-height: 50rem;">
                                    </div>
                                </div>
                            </div>

                            <div class="mt-5 mt-md-9">
                                <p>{{$item_2['deskripsi']}}</p>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="pills-three-code-features-example2" role="tabpanel" aria-labelledby="pills-three-code-features-example2-tab">
                        <div class="container">
                            <div class="row mx-n2">
                                <div class="col-sm-12 col-md-12 px-2 mb-3 mb-md-0">
                                    <div class="card-frame rounded-lg img-fluid bg-img-hero" style="background-image: url({{asset('images/landingpage_razenstudio/web-development/'.$item_3['gambar'])}}); min-height: 50rem;">
                                    </div>
                                </div>
                            </div>

                            <div class="mt-5 mt-md-9">
                                <p>{{$item_3['deskripsi']}}</p>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- End Tab Content -->
            </div>
        </div>
    </div>
</section>

<section class="flat-about-2nd">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title wow fadeInDown text-center">
                    <h4 class="section-subtitle">{{$web_development_section_4['sub_judul']}}</h4>
                    <h2 class="section-45px-montserrat margin-top-15">{{$web_development_section_4['judul']}}</h2>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="60" data-smobile="60"
                    style="height:60px"></div>
            </div>
        </div>
        <div class="table-responsive-lg mx-lg-auto wow fadeInDown">
            <table class="table table-striped table-borderless">
                <thead class="text-center">
                    <tr>
                        <th scope="col" class="w-25"></th>
                        <th scope="col" class="w-25">
                            <span class="d-block text-dark h3">Landing Page</span>
                        </th>
                        <th scope="col" class="w-25 border-left border-right">
                            <span class="d-block text-dark h3">Company Profile</span>
                        </th>
                        <th scope="col" class="w-25">
                            <span class="d-block text-dark h3">E-commerce</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-top border-bottom">
                        <th scope="row" class="bg-white h4">Paket Website
                            <small class="text-muted">(One-time Payment)</small>
                        </th>
                        <td class="bg-white text-center">
                            <img class="img-fluid" src="https://gosocial.co.id/assets/svg/service/web/paket-landing-page.svg" alt="Image Description" style="width: 40%;">
                            <div class="d-block">
                                <small class="text-muted">Start from</small><br>
                                <span class="text-primary align-top pricing">Rp.</span>
                                <span class="h2 text-primary">2.000.000</span>
                            </div>
                            <p class="text-muted">Cocok untuk bisnis yang baru mulai go-digital dan butuh web
                                untuk marketing</p>
                        </td>
                        <td class="bg-white text-center border-left border-right">
                            <img class="img-fluid" src="https://gosocial.co.id/assets/svg/service/web/paket-company-profile.svg" alt="Image Description" style="width: 40%;">
                            <div class="d-block">
                                <small class="text-muted">Start from</small><br>
                                <span class="text-primary align-top pricing">Rp.</span>
                                <span class="h2 text-primary">3.500.000</span>
                            </div>
                            <p class="text-muted">Cocok untuk kebutuhan branding perusahaan / brand</p>
                        </td>
                        <td class="bg-white text-center">
                            <img class="img-fluid" src="https://gosocial.co.id/assets/svg/service/web/paket-ecommerce.svg" alt="Image Description" style="width: 40%;">
                            <div class="d-block">
                                <small class="text-muted">Start from</small><br>
                                <span class="text-primary align-top pricing ">Rp.</span>
                                <span class="h2 text-primary">7.500.000</span>
                            </div>
                            <p class="text-muted">Cocok untuk bisnis / brand yang ingin menerima transaksi
                                online</p>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="bg-white h4">
                            Pembuatan Halaman Web
                        </th>
                        <td class="text-center p-3">
                            <p class="text-primary">1 Halaman</p>
                        </td>
                        <td class="text-center border-left border-right p-3">
                            <p class="text-primary">3 Halaman</p>
                        </td>
                        <td class="text-center p-3">
                            <p class="text-primary">7 Halaman</p>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="bg-white h4">
                            Gratis Domain
                        </th>
                        <td class="text-center text-body p-3">
                            <p class="text-primary">.com</p>
                        </td>
                        <td class="text-center border-left border-right p-3">
                            <p class="text-primary">com/.co.id</p>
                        </td>
                        <td class="text-center p-3">
                            <p class="text-primary">com/.id/.co.id</p>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="bg-white h4">
                            Gratis Hosting (Server)
                        </th>
                        <td class="text-center p-3">
                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success">
                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                            </svg>
                        </td>
                        <td class="text-center border-left border-right p-3">
                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success">
                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                            </svg>
                        </td>
                        <td class="text-center p-3">
                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success">
                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                            </svg>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="bg-white h4">
                            SSL (https)
                        </th>
                        <td class="text-center p-3">
                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success">
                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                            </svg>
                        </td>
                        <td class="text-center border-left border-right p-3">
                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success">
                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                            </svg>
                        </td>
                        <td class="text-center p-3">
                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success">
                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                            </svg>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="bg-white h4">
                            Setup Fee
                        </th>
                        <td class="text-center p-3">
                            <span class="p-2 bg-success rounded text-white">Free</span>
                        </td>
                        <td class="text-center border-left border-right p-3">
                            <span class="p-2 bg-success rounded text-white">Free</span>
                        </td>
                        <td class="text-center p-3">
                            <span class="p-2 bg-success rounded text-white">Free</span>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="bg-white h4">
                            Fitur Web
                        </th>
                        <td class="text-center text-body p-3">
                            <p class="text-primary">CMS Basic
                            <p class="text-secondary">
                                <small>- Integrasi Google Analytics
                                    <br>- Integrasi Facebook Pixel
                                </small></p>
                        </td>
                        <td class="text-center border-left border-right p-3">
                            <p class="text-primary">CMS Basic
                            <p class="text-secondary">
                                <small>- SEO Plugin
                                    <br>- Sistem Blog
                                    <br>- Sistem Contact Us
                                </small>
                            </p>
                        </td>
                        <td class="text-center p-3">
                            <p class="text-primary">CMS E-Commerce
                            <p class="text-secondary">
                                <small>- SEO Plugin
                                    <br>- Manajemen Produk &amp; Transaksi
                                    <br>- Integrasi Plugin Pengiriman
                                    <br>- Sistem Contact Us
                                </small>
                            </p>
                        </td>

                    </tr>
                    <tr>
                        <th scope="row" class="bg-white h4">
                            Search Engine Optimization
                        </th>
                        <td class="text-center p-3">
                            <p class="text-primary">SEO Basic</p>
                        </td>
                        <td class="text-center border-left border-right p-3">
                            <p class="text-primary">SEO Basic</p>
                        </td>
                        <td class="text-center p-3">
                            <p class="text-primary">SEO Standard</p>
                        </td>
                    </tr>
                    <tr class="border-bottom">
                        <th scope="row" class="bg-white h4">
                            Lama Pengerjaan
                        </th>
                        <td class="text-center text-body p-3">
                            <p class="text-primary">5 Hari</p>
                        </td>
                        <td class="text-center border-left border-right p-3">
                            <p class="text-primary">10 Hari</p>
                        </td>
                        <td class="text-center p-3">
                            <p class="text-primary">15 Hari</p>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="bg-white p-3"></th>
                        <td class="bg-white text-center p-3">
                            <a type="button" class="btn btn-lg btn-outline-primary text-nowrap transition-3d-hover" href="https://api.whatsapp.com/send?phone=6285159974507&amp;text=Halo%20GoSocial%21%0D%0ASaya%20ingin%20konsultasi%20layanan%20Website%20Landing%20Page" target="_blank">Pilih Paket</a>
                        </td>
                        <td class="bg-white text-center border-left border-right p-3">
                            <a type="button" class="btn btn-lg btn-outline-primary text-nowrap transition-3d-hover" href="https://api.whatsapp.com/send?phone=6285159974507&amp;text=Halo%20GoSocial%21%0D%0ASaya%20ingin%20konsultasi%20layanan%20Website%20Company%20Profile" target="_blank">Pilih Paket</a>
                        </td>
                        <td class="bg-white text-center p-3">
                            <a type="button" class="btn btn-lg btn-outline-primary text-nowrap transition-3d-hover" href="https://api.whatsapp.com/send?phone=6285159974507&amp;text=Halo%20GoSocial%21%0D%0ASaya%20ingin%20konsultasi%20layanan%20Website%20E%20Commerce" target="_blank">Pilih Paket</a>

                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<section class="flat-about-2nd">
    <div class="container">
        <div class="bg-light rounded-lg overflow-hidden space-top-2 space-top-lg-1 pl-5 pl-md-8">
            <div class="row justify-content-lg-between align-items-lg-center no-gutters">
                <div class="col-lg-4">
                    <div class="mb-4 pr-4 pr-lg-0">
                        <h2>{{$web_development_section_5['judul']}}</h2>
                        <p>{{$web_development_section_5['deskripsi']}}</p>
                    </div>
                    <a class="btn btn-danger btn-lg transition-3d-hover p-3" href="{{ route('contact') }}">Hubungi Kami</a>
                </div>

                <div class="col-lg-7 space-top-1 space-top-sm-2 ml-auto">
                    <div data-aos="fade-up" class="aos-init aos-animate">
                        <img class="img-fluid shadow-lg" src="{{ asset('images/landingpage_razenstudio/web-development/'.$web_development_section_5['gambar']) }}" alt="Image Description">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="flat-counter">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title wow fadeInDown">
                    <h4 class="section-subtitle">{{$web_development_section_6['sub_judul']}}</h4>
                    <h2 class="section-45px-montserrat margin-top-15">{{$web_development_section_6['judul']}}</h2>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="60" data-smobile="60"
                    style="height:60px"></div>
            </div>
            @foreach ($web_development_section_6['konten'] as $item)
                <div class="col-md-4 mb-5">
                    <div class="counter-box themesflat-counter hover-up wow fadeInUp" data-wow-delay="0.1s">
                        <div class="icon-box">
                            <div class="icon-counter">
                                <img style="height: 5rem; width:5rem; padding: -3rem;" src="{{ asset('images/landingpage_razenstudio/web-development/'.$item['logo_konten']) }}">
                            </div>
                        </div>
                        <h3 class="section-20px-montserrat font-weight-600 line-height-35">{{$item['judul_konten']}}</h3>
                        <p>{{$item['deskripsi_konten']}}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="flat-portfolio mb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title wow fadeInDown">
                    <h4 class="section-subtitle">{{$web_development_section_7['sub_judul']}}</h4>
                    <h2 class="section-45px-montserrat margin-top-15">{{$web_development_section_7['judul']}}</h2>
                    <p>{{$web_development_section_7['deskripsi']}}</p>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="60" data-smobile="60"
                    style="height:60px"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="portfolio-box wow fadeInUp" data-wow-delay="0.2s">
                    <div class="portfolio-post">
                        <img src="{{ asset('olux/assets/images/image-box/portfolio-post-2.jpg') }}" alt="images">
                    </div>
                    <div class="portfolio-content">
                        <a href="portfolio-single.html" class="mark-item"></a>
                        <div class="title-item link-style-5">
                            <a href="portfolio-single.html" class="section-24px-montserrat">Web
                                Development</a>
                            <p class="margin-top-20">There are many variations of passages of Lorem Ipsum
                                available</p>
                        </div>
                    </div>
                </div>
                <div class="portfolio-box wow fadeInUp" data-wow-delay="0.4s">
                    <div class="portfolio-post">
                        <img src="{{ asset('olux/assets/images/image-box/portfolio-post-3.jpg') }}" alt="images">
                    </div>
                    <div class="portfolio-content">
                        <a href="portfolio-single.html" class="mark-item"></a>
                        <div class="title-item link-style-5">
                            <a href="portfolio-single.html" class="section-24px-montserrat">Web
                                Development</a>
                            <p class="margin-top-20">There are many variations of passages of Lorem Ipsum
                                available</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="portfolio-box active">
                    <div class="portfolio-post">
                        <img src="{{ asset('olux/assets/images/image-box/portfolio-post-1.jpg') }}" alt="images">
                    </div>
                    <div class="portfolio-content">
                        <a href="portfolio-single.html" class="mark-item"></a>
                        <div class="title-item link-style-5">
                            <a href="portfolio-single.html" class="section-24px-montserrat">Web
                                Development</a>
                            <p class="margin-top-20">There are many variations of passages of Lorem Ipsum
                                available</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="portfolio-box">
                    <div class="portfolio-post">
                        <img src="{{ asset('olux/assets/images/image-box/portfolio-post-4.jpg') }}" alt="images">
                    </div>
                    <div class="portfolio-content">
                        <a href="portfolio-single.html" class="mark-item"></a>
                        <div class="title-item link-style-5">
                            <a href="portfolio-single.html" class="section-24px-montserrat">Web
                                Development</a>
                            <p class="margin-top-20">There are many variations of passages of Lorem Ipsum
                                available</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="portfolio-box wow fadeInUp" data-wow-delay="0.2s">
                    <div class="portfolio-post">
                        <img src="{{ asset('olux/assets/images/image-box/portfolio-post-5.jpg') }}" alt="images">
                    </div>
                    <div class="portfolio-content">
                        <a href="portfolio-single.html" class="mark-item"></a>
                        <div class="title-item link-style-5">
                            <a href="portfolio-single.html" class="section-24px-montserrat">Web
                                Development</a>
                            <p class="margin-top-20">There are many variations of passages of Lorem Ipsum
                                available</p>
                        </div>
                    </div>
                </div>
                <div class="portfolio-box wow fadeInUp" data-wow-delay="0.4s">
                    <div class="portfolio-post">
                        <img src="{{ asset('olux/assets/images/image-box/portfolio-post-3.jpg') }}" alt="images">
                    </div>
                    <div class="portfolio-content">
                        <a href="portfolio-single.html" class="mark-item"></a>
                        <div class="title-item link-style-5">
                            <a href="portfolio-single.html" class="section-24px-montserrat">Web
                                Development</a>
                            <p class="margin-top-20">There are many variations of passages of Lorem Ipsum
                                available</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="button-contact-me wow fadeInUp">
                    <a href="{{ route('portofolio') }}" class="button-footer arrow-btn btn-st text-decoration-none">Lihat Semua Portofolio</a>
                </div>
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

<section class="flat-services">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title wow fadeInDown">
                    <h4 class="section-subtitle">{{$web_development_section_8['sub_judul']}}</h4>
                    <h2 class="section-45px-montserrat margin-top-15">{{$web_development_section_8['judul']}}</h2>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="60" data-smobile="60"
                    style="height:60px"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div id="basicsAccordion-left">
                    @foreach ($web_development_section_8['konten'] as $item)
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
                                    <p>{{$item['jawaban']}}</p>
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

<section class="flat-counter">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title wow fadeInDown">
                    <h2 class="section-45px-montserrat margin-top-15">{{$web_development_section_9['judul']}}</h2>
                    <p class="text-muted">{{$web_development_section_9['deskripsi']}}</p>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="60" data-smobile="60"
                    style="height:60px"></div>
            </div>
        </div>
        <div class="row">
            @foreach ($web_development_section_9['konten'] as $item)
                <div class="col-md-4">
                    <div class="counter-box themesflat-counter hover-up wow fadeInUp" data-wow-delay="0.1s">
                        <div class="row">
                            <div class="col-6 col-md-4">
                                <div class="icon-box">
                                    <div class="icon-counter">
                                        <img style="height: 5rem; width:5rem;" src="{{ asset('images/landingpage_razenstudio/web-development/'.$item['logo_konten']) }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-8 justify-content-center align-self-center">
                                <span class="text-muted">Jasa Pembuatan Website</span>
                                <h3 class="section-20px-montserrat font-weight-600 line-height-35">{{$item['lokasi_konten']}}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<div class="overflow-hidden space-top-lg-3 space-bottom-lg-1">
    <div class="position-relative">
        <div class="container-fluid space-2 space-lg-0">
            <div class="row justify-content-sm-center align-items-lg-center text-center">
                <div class="col-lg-4 d-none d-lg-block">
                    <div data-aos="fade-up" class="aos-init aos-animate">
                        <!-- Device Mockup -->
                        <div class="transform-rotate-3">
                            <div class="device device-ipad">
                                <img class="device-ipad-frame" src="https://gosocial.co.id/assets/svg/components/ipad.svg" alt="Image Description">
                                <img class="device-ipad-screen" src="{{ asset('images/landingpage_razenstudio/web-development/'.$web_development_section_10['gambar_kiri']) }}" alt="Image Description">
                            </div>

                            <figure class="max-w-19rem w-100 position-absolute bottom-0 right-0 z-index-n1 mr-n8 mb-n5">
                                <img class="img-fluid" src="https://gosocial.co.id/assets/svg/components/dots-2.svg" alt="Image Description">
                            </figure>
                        </div>
                        <!-- End Device Mockup -->
                    </div>
                </div>

                <div class="col-sm-8 col-lg-4">
                    <!-- Title -->
                    <div class="mb-5">
                        <h2 class="h1">{{$web_development_section_10['judul']}}</h2>
                        <p>{{$web_development_section_10['deskripsi']}}</p>
                    </div>
                    <!-- End Title -->

                    <div>
                        <a href="{{ route('contact') }}" class="btn btn-lg btn-outline-primary">Buat Website</a>
                    </div>
                </div>

                <div class="col-lg-4 d-none d-lg-block">
                    <div data-aos="fade-up" data-aos-delay="200" class="aos-init aos-animate">
                        <!-- Device Mockup -->
                        <div class="max-w-33rem w-100 transform-rotate-2 ml-auto">
                            <div class="device device-iphone-x">
                                <img class="device-iphone-x-frame" src="https://gosocial.co.id/assets/svg/components/iphone-x.svg" alt="Image Description">
                                <img class="device-iphone-x-screen" src="{{ asset('images/landingpage_razenstudio/web-development/'.$web_development_section_10['gambar_kanan']) }}" alt="Image Description">
                            </div>

                            <figure class="max-w-19rem w-100 position-absolute top-0 left-0 z-index-n1 mt-n5 ml-n5">
                                <img class="img-fluid" src="https://gosocial.co.id/assets/svg/components/dots-2.svg" alt="Image Description">
                            </figure>
                        </div>
                        <!-- End Device Mockup -->
                    </div>
                </div>
            </div>
        </div>

        <div class="d-none d-lg-block bg-light content-centered-y w-100 h-75 z-index-n1"></div>
    </div>
</div>

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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://gosocial.co.id/assets/js/pages/commercial-photo.js?v.0601"></script>
<script src="https://gosocial.co.id/assets/js/pages/commercial-photo-modal.js?v.0601"></script>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js" integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/fontawesome.min.js" integrity="sha512-j3gF1rYV2kvAKJ0Jo5CdgLgSYS7QYmBVVUjduXdoeBkc4NFV4aSRTi+Rodkiy9ht7ZYEwF+s09S43Z1Y+ujUkA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection
