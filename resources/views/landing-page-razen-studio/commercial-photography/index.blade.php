@php
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioCommercialPhotography;
    use App\Models\RazenStudio\LandingPage\CommercialPhotography\LandingpageRazenstudioCommercialPhotographyPaketHarga;
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioBrand;
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioHome;
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioReview;
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioOfficialPartner;

    $home = LandingpageRazenstudioHome::first();
    $commercial_photography = LandingpageRazenstudioCommercialPhotography::first();
    $commercial_photography_section_1 = json_decode($commercial_photography->section_1, true);
    $commercial_photography_section_2 = json_decode($commercial_photography->section_2, true);
    $commercial_photography_section_3 = json_decode($commercial_photography->section_3, true);
    $commercial_photography_section_4 = json_decode($commercial_photography->section_4, true);
    $commercial_photography_section_5 = json_decode($commercial_photography->section_5, true);
    $commercial_photography_section_6 = json_decode($commercial_photography->section_6, true);
    $commercial_photography_section_7 = json_decode($commercial_photography->section_7, true);
    $commercial_photography_section_8 = json_decode($commercial_photography->section_8, true);
    $commercial_photography_section_9 = json_decode($commercial_photography->section_9, true);
    $commercial_photography_section_10 = json_decode($commercial_photography->section_10, true);
    $commercial_photography_section_11 = json_decode($commercial_photography->section_11, true);

    $cek_paket_harga = LandingpageRazenstudioCommercialPhotographyPaketHarga::first();
    $paket_hargas = LandingpageRazenstudioCommercialPhotographyPaketHarga::all();
@endphp
@extends('landing-page-razen-studio.layouts.app')
@section('title', $commercial_photography_section_1['title'])

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
@endsection

@section('content')
<section class="flat-title-page back-ground-style h-100">
    <div class="container-fluid">
        <div class="row">
            <div class="breadcrumbs text-center link-style-5">
                <h2 class="section-title-page text-white">{{$commercial_photography_section_1['judul']}}</h2>
                <p class="mb-5 text-white">{{$commercial_photography_section_1['deskripsi']}}</p>
                <ul class="breadcrumbs-inner list-center display-flex">
                    <li><a class="section-16px-regular font-weight-500" href="{{ route('home') }}">Home</a></li>
                    <li>
                        <h4 class="section-16px-regular font-weight-500 text-white">{{$commercial_photography_section_1['judul']}}</h4>
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
                <div class="about-content-right wow fadeInUp" data-wow-delay="0ms"
                    data-wow-duration="1500ms">
                    <div class="section-title">
                        <h4 class="section-subtitle">{{$commercial_photography_section_2['sub_judul']}}</h4>
                        <h2 class="section-45px-montserrat margin-top-15 margin-bottom-20">{{$commercial_photography_section_2['judul']}}</h2>
                    </div>
                    <p class="section-17px-regular margin-bottom-25">{!! $commercial_photography_section_2['deskripsi'] !!}</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="about-content-left wow fadeInLeft">
                    <div class="about-post">
                        <img src="{{ asset('images/landingpage_razenstudio/commercial-photography/'.$commercial_photography_section_2['gambar']) }}" alt="images">
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
                    <h2 class="section-45px-montserrat margin-top-15">{{$commercial_photography_section_3['judul']}}</h2>
                    <p class="text-muted">{{$commercial_photography_section_3['deskripsi']}}</p>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="60" data-smobile="60"
                    style="height:60px"></div>
            </div>
            <div class="col-md-12">
                <div class="swiper-container swiper-coverflow style-coverflow ">
                    <div class="swiper-wrapper">
                        @foreach ($commercial_photography_section_3['konten'] as $item)
                            <div class="swiper-slide style-coverflow">
                                <img src="{{ asset('images/landingpage_razenstudio/commercial-photography/'.$item['gambar']) }}" alt="images">
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-button-next slider-coverflow-btn"></div>
                    <div class="swiper-button-prev slider-coverflow-btn"></div>
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
                    <h2 class="section-45px-montserrat margin-top-15">{{$commercial_photography_section_4['judul']}}</h2>
                    <p class="text-muted">{{$commercial_photography_section_4['sub_judul']}}</p>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="60" data-smobile="60"
                    style="height:60px"></div>
            </div>
        </div>
        <ul class="step step-md step-centered">
            @php
                $i = 1;
            @endphp
            @foreach ($commercial_photography_section_4['konten'] as $item)
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
                <div class="about-content-left wow fadeInLeft">
                    <div class="about-post">
                        <img src="{{ asset('images/landingpage_razenstudio/commercial-photography/'.$commercial_photography_section_5['gambar']) }}" alt="images">
                        <div class="mark-video">
                            <a href="{{$commercial_photography_section_5['link']}}" class="lightbox-image">
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
                        <h4 class="section-45px-montserrat margin-top-15 margin-bottom-20">{{$commercial_photography_section_5['judul']}}</h4>
                    </div>
                    <p class="section-17px-regular margin-bottom-25">{!! $commercial_photography_section_5['deskripsi'] !!}</p>
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
                    <h2 class="section-45px-montserrat margin-top-15">Paket Harga</h2>
                    <p class="text-muted">Jasa Foto Produk</p>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="60" data-smobile="60"
                    style="height:60px"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-lg-4 mb-5">
                <!-- Card -->
                <div class="card card-bordered card-hover-shadow h-100">
                    <div class="slideshow-container">
                        <div class="mySlides fades" style="display: block;">
                            <img src="https://gosocial.co.id/assets/img/service/foto-produk/pricing/katalog-1.webp" class="centerproduk p-2 card-img " alt="Foto Produk Katalog 1" style="width:100%;">
                        </div>
                        <div class="mySlides fades" style="display: none;">
                            <img src="https://gosocial.co.id/assets/img/service/foto-produk/pricing/katalog-2.webp" class="centerproduk p-2 card-img " alt="Foto Produk Katalog 2" style="width:100%;">
                        </div>
                        <div class="mySlides fades" style="display: none;">
                            <img src="https://gosocial.co.id/assets/img/service/foto-produk/pricing/katalog-3.webp" class="centerproduk p-2 card-img " alt="Foto Produk Katalog 3" style="width:100%;">
                        </div>
                        <a class="prev ml-2" onclick="plusSlides(-1)">❮</a>
                        <a class="next mr-2" onclick="plusSlides(1)">❯</a>
                        <div class="text-center mt-2">
                            <span class="dot activedot" onclick="currentSlide(1)"></span>
                            <span class="dot" onclick="currentSlide(2)"></span>
                            <span class="dot" onclick="currentSlide(3)"></span>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row m-3">
                            <div class="col-12">
                                <h1 class="mb-2 text-dark">Katalog</h1>
                                <p class="mb-2 h3 text-danger">Rp.25.000,- / Foto</p>
                                <p class="d-block text-body mb-4">Foto produk dengan berbagai pilihan warna background warna polos. Tanpa minimal pembelian</p>
                                <ul class="list-pointer mb-0">
                                    <li class="list-pointer-item my-1 h3">1. Gratis Steaming</li>
                                    <li class="list-pointer-item my-1 h3">2. Gratis penyimpanan file</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="card-footer">
                        <div class="button-readmore">
                            <a class="read-more text-dark text-decoration-none" href="https://api.whatsapp.com/send?phone=6281234566636&amp;text=Halo%20GoSocial%21%0D%0ASaya%20ingin%20memesan%20layanan%20Foto%20Produk%20Katalog" target="_blank" id="pesan_sekarang_katalog">Pesan Sekarang</a>
                        </div>
                    </div> --}}
                </div>
                <!-- End Card -->
            </div>

            <div class="col-sm-6 col-lg-4 mb-5">
                <!-- Card -->
                <div class="card card-bordered card-hover-shadow h-100">
                    <div class="slideshow-container">
                        <div class="mySlides2 fades" style="display: block;">
                            <img src="https://gosocial.co.id/assets/img/service/foto-produk/pricing/creative-1.webp" class="centerproduk p-2 card-img" alt="Foto Creative 1" style="width:100%;">
                        </div>
                        <div class="mySlides2 fades" style="display: none;">
                            <img src="https://gosocial.co.id/assets/img/service/foto-produk/pricing/creative-2.webp" class="centerproduk p-2 card-img" alt="Foto Creative 2" style="width:100%;">
                        </div>
                        <div class="mySlides2 fades" style="display: none;">
                            <img src="https://gosocial.co.id/assets/img/service/foto-produk/pricing/creative-3.webp" class="centerproduk p-2 card-img" alt="Foto Creative 3" style="width:100%;">
                        </div>
                        <a class="prev ml-2" onclick="plusSlides2(-1)">❮</a>
                        <a class="next mr-2" onclick="plusSlides2(1)">❯</a>
                        <div class="text-center mt-2">
                            <span class="dot2 activedot" onclick="currentSlide2(1)"></span>
                            <span class="dot2" onclick="currentSlide2(2)"></span>
                            <span class="dot2" onclick="currentSlide2(3)"></span>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row m-3">
                            <div class="col-12">
                                <h1 class="mb-2 text-dark">Katalog</h1>
                                <p class="mb-2 h3 text-danger">Rp.30.000,- / Foto</p>
                                <p class="d-block text-body mb-4">Foto produk dengan berbagai pilihan tema &amp; properti pendukung. Tanpa minimal pembelian</p>
                                <ul class="list-pointer mb-0">
                                    <li class="list-pointer-item my-1 h3">1. Gratis Styling &amp; Steaming</li>
                                    <li class="list-pointer-item my-1 h3">2. Gratis penyimpanan file</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="card-footer">
                        <div class="button-readmore">
                            <a class="read-more text-dark text-decoration-none" href="https://api.whatsapp.com/send?phone=6281234566636&amp;text=Halo%20GoSocial%21%0D%0ASaya%20ingin%20memesan%20layanan%20Foto%20Produk%20Creative" target="_blank" id="pesan_sekarang_creative">Pesan Sekarang</a>
                        </div>
                    </div> --}}
                </div>
                <!-- End Card -->
            </div>

            <div class="col-sm-6 col-lg-4 mb-5">
                <!-- Card -->
                <div class="card card-bordered card-hover-shadow h-100">
                    <div class="slideshow-container">
                        <div class="mySlides3 fades" style="display: block;">
                            <img src="https://gosocial.co.id/assets/img/service/foto-produk/pricing/fnb-1.webp" class="centerproduk p-2 card-img" alt="Foto Food and Beverages 1" style="width:100%;">
                        </div>
                        <div class="mySlides3 fades" style="display: none;">
                            <img src="https://gosocial.co.id/assets/img/service/foto-produk/pricing/fnb-2.webp" class="centerproduk p-2 card-img" alt="Foto Food and Beverages 2" style="width:100%;">
                        </div>
                        <div class="mySlides3 fades" style="display: none;">
                            <img src="https://gosocial.co.id/assets/img/service/foto-produk/pricing/fnb-3.webp" class="centerproduk p-2 card-img" alt="Foto Food and Beverages 3" style="width:100%;">
                        </div>
                        <a class="prev ml-2" onclick="plusSlides3(-1)">❮</a>
                        <a class="next mr-2" onclick="plusSlides3(1)">❯</a>
                        <div class="text-center mt-2">
                            <span class="dot3 activedot" onclick="currentSlide3(1)"></span>
                            <span class="dot3" onclick="currentSlide3(2)"></span>
                            <span class="dot3" onclick="currentSlide3(3)"></span>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row m-3">
                            <div class="col-12">
                                <h1 class="mb-2 text-dark">Food and Beverage</h1>
                                <p class="mb-2 h3 text-danger">Rp.50.000,- / Foto</p>
                                <p class="d-block text-body mb-4">Foto produk khusus untuk makanan dengan treatment khusus. Tanpa minimal pembelian.</p>
                                <ul class="list-pointer mb-0">
                                    <li class="list-pointer-item my-1 h3">1. Gratis treatment khusus</li>
                                    <li class="list-pointer-item my-1 h3">2. Gratis penyimpanan file</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="card-footer">
                        <div class="button-readmore">
                            <a class="read-more text-dark text-decoration-none" href="https://api.whatsapp.com/send?phone=6281234566636&amp;text=Halo%20GoSocial%21%0D%0ASaya%20ingin%20memesan%20layanan%20Foto%20Produk%20FnB" target="_blank" id="pesan_sekarang_fnb">Pesan Sekarang</a>
                        </div>
                    </div> --}}
                </div>
                <!-- End Card -->
            </div>
        </div>
    </div>
</section>

<section class="flat-counter">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title wow fadeInDown">
                    <h2 class="section-45px-montserrat margin-top-15">Download PDF Penawaran</h2>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="60" data-smobile="60"
                    style="height:60px"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="#" class="text-dark text-decoration-none">
                    <div class="counter-box themesflat-counter hover-up wow fadeInUp" data-wow-delay="0.1s">
                        <div class="row">
                            <div class="col-6">
                                <div class="icon-box">
                                    <div class="content-icon">
                                        <h4 class="section-20px-montserrat font-weight-600 line-height-35 mb-4">Pricelist Foto Lengkap</h4>
                                        <span class="h4">Download</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="number-content section-65px-montserrat">
                                    <img src="{{ asset('images/landing-page-utama-icon/6230656.jpg') }}" class="img-responsive">
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#" class="text-dark text-decoration-none">
                    <div class="counter-box themesflat-counter hover-up wow fadeInUp" data-wow-delay="0.1s">
                        <div class="row">
                            <div class="col-6">
                                <div class="icon-box">
                                    <div class="content-icon">
                                        <h4 class="section-20px-montserrat font-weight-600 line-height-35 mb-4">Our Company Profile</h4>
                                        <span class="h4">Download</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="number-content section-65px-montserrat">
                                    <img src="{{ asset('images/landing-page-utama-icon/6230656.jpg') }}" class="img-responsive">
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#" class="text-dark text-decoration-none">
                    <div class="counter-box themesflat-counter hover-up wow fadeInUp" data-wow-delay="0.1s">
                        <div class="row">
                            <div class="col-6">
                                <div class="icon-box">
                                    <div class="content-icon">
                                        <h4 class="section-20px-montserrat font-weight-600 line-height-35 mb-4">Syarat & Ketentuan</h4>
                                        <span class="h4">Download</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="number-content section-65px-montserrat">
                                    <img src="{{ asset('images/landing-page-utama-icon/6230656.jpg') }}" class="img-responsive">
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="flat-services">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title wow fadeInDown">
                    <h4 class="section-subtitle">MENGAPA HARUS KAMI?</h4>
                    <h2 class="section-45px-montserrat margin-top-15">Keuntungan Foto Produk bersama GoSocial</h2>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="60" data-smobile="60"
                    style="height:60px"></div>
            </div>
            <div class="col-md-4">
                <div class="services-box">
                    <div class="wraper-effect"></div>
                    <figure class="font-size-icon">
                        <img style="height: 5rem; width:5rem; padding: -3rem;" src="{{ asset('images/landingpage_razenstudio/home/6315278e12ff4-220905.png') }}" alt="SVG">
                    </figure>
                    <div class="services-content">
                        <a href="service-single.html" class="section-22px-montserrat text-dark text-decoration-none">Tim Studio Profesional</a>
                        <p class="services-desc">Didukung oleh tim fotografer, stylish, MUA, editor, dll yang terbaik dan berpengalaman di bidangnya.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="services-box">
                    <div class="wraper-effect"></div>
                    <figure class="font-size-icon">
                        <img style="height: 5rem; width:5rem; padding: -3rem;" src="{{ asset('images/landingpage_razenstudio/home/6315278e12ff4-220905.png') }}" alt="SVG">
                    </figure>
                    <div class="services-content">
                        <a href="service-single.html" class="section-22px-montserrat text-dark text-decoration-none">Peralatan Serba Canggih</a>
                        <p class="services-desc">Dengan perlengkapan studio yang canggih & terkini untuk mendapatkan hasil foto yang maksimal.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="services-box">
                    <div class="wraper-effect"></div>
                    <figure class="font-size-icon">
                        <img style="height: 5rem; width:5rem; padding: -3rem;" src="{{ asset('images/landingpage_razenstudio/home/6315278e12ff4-220905.png') }}" alt="SVG">
                    </figure>
                    <div class="services-content">
                        <a href="service-single.html" class="section-22px-montserrat text-dark text-decoration-none">1000+ Properti Studio</a>
                        <p class="services-desc">Dengan 1000 lebih set properti dan tema pendukung untuk berbagai jenis produk yang menambah daya tarik.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="services-box">
                    <div class="wraper-effect"></div>
                    <span class="icon-services icon-development1 font-size-icon"></span>
                    <div class="services-content">
                        <a href="service-single.html" class="section-22px-montserrat text-dark text-decoration-none">Berbagai Pilihan Model</a>
                        <p class="services-desc">Pilihan model lokal hingga internasional untuk foto produk dengan model yang merepresentasi image produk.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="services-box">
                    <div class="wraper-effect"></div>
                    <span class="icon-services icon-development1 font-size-icon"></span>
                    <div class="services-content">
                        <a href="service-single.html" class="section-22px-montserrat text-dark text-decoration-none">Final Editing Profesional</a>
                        <p class="services-desc">Setelah jadi foto akan diedit untuk menyesuaikan color grading dan color correction untuk hasil foto yang terbaik.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="services-box">
                    <div class="wraper-effect"></div>
                    <span class="icon-services icon-development1 font-size-icon"></span>
                    <div class="services-content">
                        <a href="service-single.html" class="section-22px-montserrat text-dark text-decoration-none">Garansi Hasil Terbaik</a>
                        <p class="services-desc">Hanya foto terbaik yang telah melalui standar foto produk terbaiklah yang akan kami kirimkan kepada klien.</p>
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
                    <h4 class="section-subtitle">APA SAJA?</h4>
                    <h2 class="section-45px-montserrat margin-top-15">Jenis Fotografi Produk Populer</h2>
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
                            <div class="media align-items-center align-items-lg-start">
                                <figure class="w-100 max-w-15rem mt-2 mr-4">
                                    <img class="img-fluid" src="https://gosocial.co.id/assets/svg/service/foto-produk/foto-produk-makanan.svg" alt="Foto Produk Makanan">
                                </figure>
                                <div class="media-body ">
                                    <h2 class="mb-0">Foto Produk Makanan</h2>
                                    <div class="d-none d-lg-block mt-2">
                                        <p class="text-body mb-0">Jasa fotografi makanan / food photography.</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>

                    <li class="nav-item w-100 mx-0 mb-3">
                        <a class="nav-link p-4" id="pills-two-code-features-example2-tab" data-toggle="pill" href="#pills-two-code-features-example2" role="tab" aria-controls="pills-two-code-features-example2" aria-selected="false">
                            <div class="media align-items-center align-items-lg-start">
                                <figure class="w-100 max-w-15rem mt-2 mr-4 h-100">
                                    <img class="img-fluid" src="https://gosocial.co.id/assets/svg/service/foto-produk/foto-produk-minuman.svg" alt="Foto Produk Minuman">
                                </figure>
                                <div class="media-body">
                                    <h2 class="mb-0">Foto Produk Minuman</h2>
                                    <div class="d-none d-lg-block mt-2">
                                        <p class="text-body mb-0">Jasa fotografi minuman dalam kemasan maupun luar
                                            kemasan.</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>

                    <li class="nav-item w-100 mx-0">
                        <a class="nav-link p-4" id="pills-three-code-features-example2-tab" data-toggle="pill" href="#pills-three-code-features-example2" role="tab" aria-controls="pills-three-code-features-example2" aria-selected="true">
                            <div class="media align-items-center align-items-lg-start">
                                <figure class="w-100 max-w-15rem mt-2 mr-4">
                                    <img class="img-fluid" src="https://gosocial.co.id/assets/svg/service/foto-produk/foto-produk-baju.svg" alt="Foto Produk Baju">
                                </figure>
                                <div class="media-body">
                                    <h2 class="mb-0">Foto Produk Baju</h2>
                                    <div class="d-none d-lg-block mt-2">
                                        <p class="text-body mb-0">Jasa foto produk pakaian seperti kaos, baju, kemeja,
                                            dsb.</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- End Nav -->
            </div>

            <div class="col-lg-8 order-lg-1 align-self-lg-end">
                <!-- Tab Content -->
                <div class="tab-content pr-lg-4">
                    <div class="tab-pane fade active show" id="pills-one-code-features-example2" role="tabpanel" aria-labelledby="pills-one-code-features-example2-tab">
                        <div class="container">
                            <div class="row mx-n2">
                                <div class="col-sm-6 col-md-6 px-2 mb-3 mb-md-0">
                                    <div class="card-frame rounded-lg img-fluid bg-img-hero" style="background-image: url(https://gosocial.co.id/assets/img/service/foto-produk/makanan-1.webp); min-height: 20rem;">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 px-2 mb-3 mb-md-0">
                                    <div class="card-frame rounded-lg img-fluid bg-img-hero" style="background-image: url(https://gosocial.co.id/assets/img/service/foto-produk/makanan-2.webp); min-height: 20rem;">
                                    </div>
                                </div>
                            </div>

                            <div class="mt-5 mt-md-9">
                                <h1>Foto produk makanan untuk bisnis kuliner.</h1>
                                <p>GoSocial dapat membantu bisnis menampilkan foto produk makanan terbaik kepada
                                    konsumen.
                                    Foto tersebut dibuat semenarik mungkin yang menggugah selara konsumen.
                                    Mulai dari detail makanan, hingga bentuk keseluruhan makanan akan direpresentasikan
                                    dengan ciamik.</p>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="pills-two-code-features-example2" role="tabpanel" aria-labelledby="pills-two-code-features-example2-tab">
                        <div class="container">
                            <div class="row mx-n2">
                                <div class="col-sm-6 col-md-6 px-2 mb-3 mb-md-0">
                                    <div class="card-frame rounded-lg img-fluid bg-img-hero" style="background-image: url(https://gosocial.co.id/assets/img/service/foto-produk/minuman-1.webp); min-height: 20rem;">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 px-2 mb-3 mb-md-0">
                                    <div class="card-frame rounded-lg img-fluid bg-img-hero" style="background-image: url(https://gosocial.co.id/assets/img/service/foto-produk/minuman-2.webp); min-height: 20rem;">
                                    </div>
                                </div>
                            </div>

                            <div class="mt-5 mt-md-9">
                                <h1>Foto produk minuman</h5>
                                <p>Mendukung foto produk untuk minuman panas atau dingin maupun minuman dalam kemasan
                                    agar memasarkan produk bisa lebih mudah dengan tampilan foto produk yang menggugah
                                    selera konsumen.</p>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="pills-three-code-features-example2" role="tabpanel" aria-labelledby="pills-three-code-features-example2-tab">
                        <div class="container">
                            <div class="row mx-n2">
                                <div class="col-sm-6 col-md-6 px-2 mb-3 mb-md-0">
                                    <div class="card-frame rounded-lg img-fluid bg-img-hero" style="background-image: url(https://gosocial.co.id/assets/img/service/foto-produk/baju-1.webp); min-height: 20rem;">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 px-2 mb-3 mb-md-0">
                                    <div class="card-frame rounded-lg img-fluid bg-img-hero" style="background-image: url(https://gosocial.co.id/assets/img/service/foto-produk/baju-2.webp); min-height: 20rem;">
                                    </div>
                                </div>
                            </div>

                            <div class="mt-5 mt-md-9">
                                <h1>Foto Produk Baju</h5>
                                <p>GoSocial dapat membantu membuat foto produk fashion seperti kaos, baju baik untuk
                                    pakaian pria, pakaian wanita hingga pakaian anak-anak.</p>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- End Tab Content -->
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
                        <div class="swiper-slide">
                            <div class="brand-content">
                                <img src="{{ asset('olux/assets/images/image-slider/brand-1.png') }}" alt="images">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-content">
                                <img src="{{ asset('olux/assets/images/image-slider/brand-2.png') }}" alt="images">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-content">
                                <img src="{{ asset('olux/assets/images/image-slider/brand-3.png') }}" alt="images">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-content">
                                <img src="{{ asset('olux/assets/images/image-slider/brand-4.png') }}" alt="images">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-content">
                                <img src="{{ asset('olux/assets/images/image-slider/brand-5.png') }}" alt="images">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-content">
                                <img src="{{ asset('olux/assets/images/image-slider/brand-6.png') }}" alt="images">
                            </div>
                        </div>
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
                    <h4 class="section-subtitle">OUR LATEST WORK</h4>
                    <h2 class="section-45px-montserrat margin-top-15">Portofolio</h2>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="60" data-smobile="60"
                    style="height:60px"></div>
            </div>
            <div class="col-md-4">
                <div class="services-box">
                    <div class="wraper-effect"></div>
                    <span class="icon-services icon-development1 font-size-icon"></span>
                    <div class="services-content">
                        <a href="service-single.html" class="section-22px-montserrat text-dark text-decoration-none">Instagram</a>
                        <p class="services-desc">Embed Foto Instagram</p>
                    </div>
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
                    <h4 class="section-subtitle">TESTIMONIAL</h4>
                    <h2 class="section-title section-45px-montserrat">Apa Kata Mereka?</h2>
                    <button class="clone-btn-prev"></button>
                    <button class="clone-btn-next"></button>
                </div>
            </div>
            <div class="col-md-6">
                <div class="swiper-container sliver-vertical">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="client-slider-box">
                                <div class="client-user">
                                    <img src="{{ asset('olux/assets/images/image-slider/client-slider-box.jpg') }}"
                                        alt="images">
                                </div>
                                <div class="client-content">
                                    <div class="client-user-author">
                                        <h4 class="name-author section-20px-montserrat">Glenn Ardi</h4>
                                        <p class="margin-top-11">"Sejauh ini kami sudah bekerjasama membuat 5 project video dan kerjasama yang dijalin sangat profesional sekali, Good Job!"</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="client-slider-box">
                                <div class="client-user">
                                    <img src="{{ asset('olux/assets/images/image-slider/client-slider-box.jpg') }}"
                                        alt="images">
                                </div>
                                <div class="client-content">
                                    <div class="client-user-author">
                                        <h4 class="name-author section-20px-montserrat">Olivia Willyost</h4>
                                        <p class="margin-top-11">"Terimakasih buat GoSocial yang sudah membantu kami membuatkan video Titip Jual OLX Indonesia."</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="client-slider-box">
                                <div class="client-user">
                                    <img src="{{ asset('olux/assets/images/image-slider/client-slider-box.jpg') }}"
                                        alt="images">
                                </div>
                                <div class="client-content">
                                    <div class="client-user-author">
                                        <h4 class="name-author section-20px-montserrat">Angela Sujadi</h4>
                                        <p class="margin-top-11">"Kerja sama dengan GoSocial itu komunikasinya gampang. Sehingga apa yang kita mau dan konsep itu nyambung, dan hasilnya maksimal."</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="client-slider-box">
                                <div class="client-user">
                                    <img src="{{ asset('olux/assets/images/image-slider/client-slider-box.jpg') }}"
                                        alt="images">
                                </div>
                                <div class="client-content">
                                    <div class="client-user-author">
                                        <h4 class="name-author section-20px-montserrat">Brade Hook</h4>
                                        <p class="margin-top-11">A customer review is a review of a product
                                            or service made by a customer who has purchased and used, or had
                                            experience with, the product or service.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="client-slider-box">
                                <div class="client-user">
                                    <img src="{{ asset('olux/assets/images/image-slider/client-slider-box.jpg') }}"
                                        alt="images">
                                </div>
                                <div class="client-content">
                                    <div class="client-user-author">
                                        <h4 class="name-author section-20px-montserrat">Brade Hook</h4>
                                        <p class="margin-top-11">A customer review is a review of a product
                                            or service made by a customer who has purchased and used, or had
                                            experience with, the product or service.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                    <h4 class="section-subtitle">FAQ</h4>
                    <h2 class="section-45px-montserrat margin-top-15">Frequently Asked Questions</h2>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="60" data-smobile="60"
                    style="height:60px"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div id="basicsAccordion-left">
                    <!-- Card -->
                    <div class="card shadow-none mb-3">
                        <div class="card-header card-collapse" id="basicsHeadingOne">
                            <a class="btn btn-link btn-block d-flex justify-content-between card-btn bg-white px-0 collapsed" href="javascript:;" role="button" data-toggle="collapse" data-target="#basicsCollapseOne" aria-expanded="false" aria-controls="basicsCollapseOne">
                                <span class="h4 text-dark">Apa saja jenis Foto Produk yang ada di Gosocial?</span>

                                <span class="card-btn-toggle">
                                    <span class="h4 card-btn-toggle-default text-dark">+</span>
                                    <span class="h4 card-btn-toggle-active text-dark">−</span>
                                </span>
                            </a>
                        </div>
                        <div id="basicsCollapseOne" class="collapse" aria-labelledby="basicsHeadingOne" data-parent="#basicsAccordion-left" style="">
                            <div class="card-body px-0 m-3">
                                <p>Kami dapat membantu berbagai jenis kebutuhan Foto Produk yang akan ditangani oleh tim
                                    fotografi
                                    yang profesional mulai dari:</p>
                                <ul>
                                    <li>
                                        <p><strong>1. Foto Katalog</strong></p>
                                    </li>
                                    <li>
                                        <p><strong>2. Foto Kreatif</strong></p>
                                    </li>
                                    <li>
                                        <p><strong>3. Foto Food and Beverage</strong></p>
                                    </li>
                                    <li>
                                        <p><strong>4. Foto Produk dengan Model atau Mannequin</strong></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Card -->

                    <!-- Card -->
                    <div class="card shadow-none mb-3">
                        <div class="card-header card-collapse" id="basicsHeadingTwo">
                            <a class="btn btn-link btn-block d-flex justify-content-between card-btn collapsed bg-white px-0" href="javascript:;" role="button" data-toggle="collapse" data-target="#basicsCollapseTwo" aria-expanded="false" aria-controls="basicsCollapseTwo">
                                <span class="h4 text-dark">Foto Produk di Gosocial apa sudah dengan properti foto?</span>

                                <span class="card-btn-toggle">
                                    <span class="h4 card-btn-toggle-default text-dark">+</span>
                                    <span class="h4 card-btn-toggle-active text-dark">−</span>
                                </span>
                            </a>
                        </div>
                        <div id="basicsCollapseTwo" class="collapse" aria-labelledby="basicsHeadingTwo" data-parent="#basicsAccordion-left">
                            <div class="card-body px-0 m-3">
                                <p>Gosocial Indonesia juga menyediakan berbagai properti untuk fotografi yang menarik dengan
                                    lebih dari
                                    1000+ jenis properti.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Card -->

                    <!-- Card -->
                    <div class="card shadow-none mb-3">
                        <div class="card-header card-collapse" id="basicsHeadingThree">
                            <a class="btn btn-link btn-block d-flex justify-content-between card-btn collapsed bg-white px-0" href="javascript:;" role="button" data-toggle="collapse" data-target="#basicsCollapseThree" aria-expanded="false" aria-controls="basicsCollapseThree">
                                <span class="h4 text-dark">Berapa lama proses foto produk di Gosocial?</span>

                                <span class="card-btn-toggle">
                                    <span class="h4 card-btn-toggle-default text-dark">+</span>
                                    <span class="h4 card-btn-toggle-active text-dark">−</span>
                                </span>
                            </a>
                        </div>
                        <div id="basicsCollapseThree" class="collapse" aria-labelledby="basicsHeadingThree" data-parent="#basicsAccordion-left">
                            <div class="card-body px-0 m-3">
                                <p>Estimasi proses foto berkisar 2-3 Hari kerja paling lambat 5 hari kerja sejak produk tiba
                                    di
                                    studio, lama proses menyesuaikan dengan kepadatan proses foto dan antrian yang ada.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Card -->

                    <!-- Card -->
                    <div class="card shadow-none mb-3">
                        <div class="card-header card-collapse" id="basicsHeadingFour">
                            <a class="btn btn-link btn-block d-flex justify-content-between card-btn collapsed bg-white px-0" href="javascript:;" role="button" data-toggle="collapse" data-target="#basicsCollapseFour" aria-expanded="false" aria-controls="basicsCollapseFour">
                                <span class="h4 text-dark">Apakah Gosocial Indonesia menerima penyewaan studio?</span>
                                <span class="card-btn-toggle">
                                    <span class="card-btn-toggle-default text-dark h4">+</span>
                                    <span class="card-btn-toggle-active h4 text-dark">−</span>
                                </span>
                            </a>
                        </div>
                        <div id="basicsCollapseFour" class="collapse" aria-labelledby="basicsHeadingFour" data-parent="#basicsAccordion-left">
                            <div class="card-body px-0 m-3">
                                <p>Gosocial Indonesia menyediakan fasilitas ini dengan harga khusus serta SnK yang berlaku.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Card -->

                    <!-- Card -->
                    <div class="card shadow-none mb-3">
                        <div class="card-header card-collapse" id="basicsHeadingFive">
                            <a class="btn btn-link btn-block d-flex justify-content-between card-btn collapsed bg-white px-0" href="javascript:;" role="button" data-toggle="collapse" data-target="#basicsCollapseFive" aria-expanded="false" aria-controls="basicsCollapseFive">
                                <span class="h4 text-dark">Apakah foto produk di Gosocial bisa on the spot / ditemani / dilihat secara langsung?</span>
                                <span class="card-btn-toggle">
                                    <span class="card-btn-toggle-default text-dark h4">+</span>
                                    <span class="card-btn-toggle-active h4 text-dark">−</span>
                                </span>
                            </a>
                        </div>
                        <div id="basicsCollapseFive" class="collapse" aria-labelledby="basicsHeadingFive" data-parent="#basicsAccordion-left">
                            <div class="card-body px-0 m-3">
                                <p>Proses foto di Gosocial Indonesia tidak dapat didampingi oleh klien / Pemilik. Untuk
                                    hasil akan kami
                                    sampaikan jika proses telah selesai.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Card -->
                </div>
            </div>
            <div class="col-lg-6">
                <div id="basicsAccordion-right">
                    <!-- Card -->
                    <div class="card shadow-none mb-3">
                        <div class="card-header card-collapse" id="basicsHeadingSix">
                            <a class="btn btn-link btn-block d-flex justify-content-between card-btn collapsed bg-white px-0" href="javascript:;" role="button" data-toggle="collapse" data-target="#basicsCollapseSix" aria-expanded="false" aria-controls="basicsCollapseSix">
                                <span class="h4 text-dark">Biaya pengiriman produk dibebankan pada siapa?</span>

                                <span class="card-btn-toggle">
                                    <span class="h4 card-btn-toggle-default text-dark">+</span>
                                    <span class="h4 card-btn-toggle-active text-dark">−</span>
                                </span>
                            </a>
                        </div>
                        <div id="basicsCollapseSix" class="collapse" aria-labelledby="basicsHeadingSix" data-parent="#basicsAccordion-right">
                            <div class="card-body px-0 m-3">
                                <p>Pengiriman produk sepenuhnya dibebankan kepada klien baik pengirimkan atau pengembalian
                                    produk.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Card -->

                    <!-- Card -->
                    <div class="card shadow-none mb-3">
                        <div class="card-header card-collapse" id="basicsHeadingSeven">
                            <a class="btn btn-link btn-block d-flex justify-content-between card-btn collapsed bg-white px-0" href="javascript:;" role="button" data-toggle="collapse" data-target="#basicsCollapseSeven" aria-expanded="false" aria-controls="basicsCollapseSeven">
                                <span class="h4 text-dark">Apabila ada kerusakan atau catat produk bagaimana?</span>

                                <span class="card-btn-toggle">
                                    <span class="card-btn-toggle-default text-dark h4">+</span>
                                    <span class="card-btn-toggle-active h4 text-dark">−</span>
                                </span>
                            </a>
                        </div>
                        <div id="basicsCollapseSeven" class="collapse" aria-labelledby="basicsHeadingSeven" data-parent="#basicsAccordion-right">
                            <div class="card-body px-0 m-3">
                                <p>Kerusakan produk ketika proses pengiriman bukan tanggung jawab dari gosocial, kecuali
                                    kerusakan
                                    produk ketika proses foto dilakukan admin akan menginformasikan dengan klien.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Card -->

                    <!-- Card -->
                    <div class="card shadow-none mb-3">
                        <div class="card-header card-collapse" id="basicsHeadingEight">
                            <a class="btn btn-link btn-block d-flex justify-content-between card-btn collapsed bg-white px-0" href="javascript:;" role="button" data-toggle="collapse" data-target="#basicsCollapseEight" aria-expanded="false" aria-controls="basicsCollapseEight">
                                <span class="h4 text-dark">Bagaimana teknis untuk foto produk di Gosocial Indonesia?</span>

                                <span class="card-btn-toggle">
                                    <span class="card-btn-toggle-default text-dark h4">+</span>
                                    <span class="card-btn-toggle-active h4 text-dark">−</span>
                                </span>
                            </a>
                        </div>
                        <div id="basicsCollapseEight" class="collapse" aria-labelledby="basicsHeadingEight" data-parent="#basicsAccordion-right">
                            <div class="card-body px-0 m-3">
                                <p>Klien menghubungi Account Executive bagian Photo Product, kemudian klien melakukan order
                                    melalui form yang diberikan, dilanjutkan dengan pembayaran, pengiriman produk, proses
                                    foto, dan yang terakhir produk
                                    dikembalikan kepada klien.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Card -->

                    <!-- Card -->
                    <div class="card shadow-none mb-3">
                        <div class="card-header card-collapse" id="basicsHeadingNine">
                            <a class="btn btn-link btn-block d-flex justify-content-between card-btn collapsed bg-white px-0" href="javascript:;" role="button" data-toggle="collapse" data-target="#basicsCollapseNine" aria-expanded="false" aria-controls="basicsCollapseNine">
                                <span class="h4 text-dark">Apakah bisa melakukan proses foto di tempat klien?</span>

                                <span class="card-btn-toggle">
                                    <span class="card-btn-toggle-default text-dark h4">+</span>
                                    <span class="card-btn-toggle-active h4 text-dark">−</span>
                                </span>
                            </a>
                        </div>
                        <div id="basicsCollapseNine" class="collapse" aria-labelledby="basicsHeadingNine" data-parent="#basicsAccordion-right">
                            <div class="card-body px-0 m-3">
                                <p>Untuk saat ini proses foto di tempat klien bisa dilakukan khusus hanya area Surabaya dan
                                    sekitarnya dengan perhitungan harga khusus.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Card -->

                    <!-- Card -->
                    <div class="card shadow-none mb-3">
                        <div class="card-header card-collapse" id="basicsHeadingTen">
                            <a class="btn btn-link btn-block d-flex justify-content-between card-btn collapsed bg-white px-0" href="javascript:;" role="button" data-toggle="collapse" data-target="#basicsCollapseTen" aria-expanded="false" aria-controls="basicsCollapseTen">
                                <span class="h4 text-dark">Bagaimana dengan produk makanan / minuman yang perlu penataan / plating?</span>

                                <span class="card-btn-toggle">
                                    <span class="card-btn-toggle-default text-dark h4">+</span>
                                    <span class="card-btn-toggle-active h4 text-dark">−</span>
                                </span>
                            </a>
                        </div>
                        <div id="basicsCollapseTen" class="collapse" aria-labelledby="basicsHeadingTen" data-parent="#basicsAccordion-right">
                            <div class="card-body px-0 m-3">
                                <p>Proses foto produk makanan akan dilakukan plating oleh tim studio kami dengan
                                    menyesuaikan
                                    panduan dan brief dari klien / pemilik</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Card -->
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
                    <p class="text-muted">Official Partners:</p>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="60" data-smobile="60"
                    style="height:60px"></div>
            </div>
            <div class="col-md-12 justify-content-center">
                <div class="row d-flex justify-content-center">
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
@endsection
