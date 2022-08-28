@extends('landing-page-razen-studio.layouts.app')
@section('title', 'Jasa Tambah Followers, Auto Likes, Views #1 di Instagram - Razen Studio')

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
@endsection

@section('content')
<section class="flat-title-page back-ground-style">
    <div class="container-fluid">
        <div class="row">
            <div class="breadcrumbs text-center link-style-5 text-white">
                <h1 class="section-title-page text-white">Jasa Iklan Instagram</h1>
                <p class="mb-5">Solusi pembuatan dan pengelolaan campaign digital untuk Instagram Ads.</p>
                <ul class="breadcrumbs-inner list-center display-flex">
                    <li><a class="section-16px-regular font-weight-500" href="{{ route('home') }}">Home</a></li>
                    <li><a class="section-16px-regular font-weight-500" href="{{ route('digital-campaign') }}">Digital Campaign</a></li>
                    <li>
                        <h4 class="section-16px-regular font-weight-500 text-white">Jasa Iklan Instagram</h4>
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
                        <img src="{{ asset('olux/assets/images/image-box/about-post-mystory.jpg') }}" alt="images">
                        <div class="mark-about-post"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="about-content-right wow fadeInUp" data-wow-delay="0ms"
                    data-wow-duration="1500ms">
                    <div class="section-title">
                        <h4 class="section-45px-montserrat margin-top-15 margin-bottom-20">Pentingnya Iklan Instagram untuk Bisnis!</h4>
                    </div>
                    <p class="section-17px-regular margin-bottom-25">
                        Instagram merupakan satu platform social media terbesar dengan jumlah pengguna aktif lebih dari 98 Juta orang di Indonesia. Jasa Iklan Instagram sangat cocok untuk bisnis dalam mengembangkan marketing di dunia digital.
                        <br><br>
                        GoSocial menyediakan layanan Jasa Iklan Instagram untuk mengatur strategi, budget, hingga pengelolaan campaign iklan di Instagram untuk beragam kebutuhan bisnis seperti meningkatkan brand awareness, meningkatkan sales, dan sebagainya.
                    </p>
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
                        <h4 class="section-45px-montserrat margin-top-15 margin-bottom-20">Manfaat Instagram Ads</h4>
                    </div>
                    <p class="section-17px-regular margin-bottom-25">
                        Instagram Ads sangat membantu para pebisnis online untuk memasarkan produknya. Banyak pengguna Instagram yang tertarik melakukan pembelian setelah melihat iklan di Instagram. Tentunya hal ini dapat membantu meningkatkan perkembangan sebuah bisnis.
                        <br><br>
                        Berikut adalah keuntungan lain dari Iklan Instagram:
                        <br><br>
                        1. Meningkatkan Brand Awareness
                        <br>
                        2. Menjangkau target audiens dengan mudah dan lebih luas
                        <br>
                        3. Target promosi yang lebih efektif dan efisien
                        <br>
                        4. Membantu meningkatkan konversi penjualan
                    </p>
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
    <div class="container space-1">
        <div class="w-lg-85 mx-lg-auto">
            <div class="card bg-danger text-white overflow-hidden p-5">
                <div class="row justify-content-md-start align-items-md-center text-center text-md-left">
                    <div class="col-md-6 offset-md-3 mb-3 mb-md-0">
                        <h3 class="text-white font-size-3 mb-1">Layanan lain untuk Digital Campaign</h3>
                        <p class="text-white-70 font-size-2 mb-0">Dapatkan beragam layanan iklan lainnya untuk menunjang branding bisnismu hanya di GoSocial.</p>
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
                    <h2 class="section-45px-montserrat margin-top-15">Tahapan Iklan IG Ads</h2>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="60" data-smobile="60"
                    style="height:60px"></div>
            </div>
        </div>
        <ul class="step step-md step-centered">
            <li class="step-item">
                <div class="step-content-wrapper">
                    <span class="step-icon step-icon-soft-primary">1</span>
                    <div class="step-content">
                        <h3>Budget Iklan</h3>
                        <p>Tentukan budget iklan yang sesuai dengan kebutuhan bisnis.</p>
                    </div>
                </div>
            </li>

            <li class="step-item">
                <div class="step-content-wrapper">
                    <span class="step-icon step-icon-soft-primary">2</span>
                    <div class="step-content">
                        <h3>Strategy & Analysis</h3>
                        <p>Diskusi dengan tim terkait analisis market serta target iklan.</p>
                    </div>
                </div>
            </li>

            <li class="step-item">
                <div class="step-content-wrapper">
                    <span class="step-icon step-icon-soft-primary">3</span>
                    <div class="step-content">
                        <h3>Ads Setup</h3>
                        <p>Penyusunan strategi, setup media plan dan integrasi iklan.</p>
                    </div>
                </div>
            </li>

            <li class="step-item">
                <div class="step-content-wrapper">
                    <span class="step-icon step-icon-soft-primary">4</span>
                    <div class="step-content">
                        <h3>Run Ads</h3>
                        <p>Iklan dijalankan sesuai dengan plan dan strategi yang ditentukan.</p>
                    </div>
                </div>
            </li>

            <li class="step-item">
                <div class="step-content-wrapper">
                    <span class="step-icon step-icon-soft-primary">5</span>
                    <div class="step-content">
                        <h3>Report</h3>
                        <p>Monitoring dan report berdasarkan performa hasil iklan yang berjalan.</p>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</section>

<section class="flat-services">
    <div class="container space-2">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title wow fadeInDown">
                    <h2 class="section-45px-montserrat margin-top-15">Apa saja yang akan didapatkan?</h2>
                    <p class="text-muted">Solusi terlengkap untuk memulai campaign Instagram ads secepatnya</p>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="60" data-smobile="60"
                    style="height:60px"></div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 mb-7">
                <!-- Icon Blocks -->
                <div class="text-center px-lg-3">
                    <figure class="max-w-10rem mx-auto mb-4">
                        <img class="img-fluid" src="https://gosocial.co.id/assets/svg/icons/icon-45.svg" alt="SVG">
                    </figure>
                    <h2>Free Image Creative</h2>
                    <p>Kami menyediakan desain kreatif dengan kualitas terbaik dan sesuai dengan target iklan Instagram.</p>
                </div>
                <!-- End Icon Blocks -->
            </div>

            <div class="col-md-4 mb-7">
                <!-- Icon Blocks -->
                <div class="text-center px-lg-3">
                    <figure class="max-w-10rem mx-auto mb-4">
                        <img class="img-fluid" src="https://gosocial.co.id/assets/svg/icons/icon-36.svg" alt="SVG">
                    </figure>
                    <h2>Free Caption Ads</h2>
                    <p>Seluruh copywriting atau penggunaan caption pada iklan akan kami rancang sesuai dengan target market.</p>
                </div>
                <!-- End Icon Blocks -->
            </div>

            <div class="col-md-4 mb-7">
                <!-- Icon Blocks -->
                <div class="text-center px-lg-3">
                    <figure class="max-w-10rem mx-auto mb-4">
                        <img class="img-fluid" src="https://gosocial.co.id/assets/svg/icons/icon-14.svg" alt="SVG">
                    </figure>
                    <h2>Free Strategy &amp; Analyst</h2>
                    <p>Kami akan membuatkan strategi dan analisis untuk mengoptimalkan serta mencapai tujuan iklan.</p>
                </div>
                <!-- End Icon Blocks -->
            </div>
        </div>

        <img class="img-fluid d-none d-md-block w-75 mx-auto mb-7" src="https://gosocial.co.id/assets/svg/components/three-pointers.svg" alt="SVG Arrow">

        <!-- Title -->
        <div class="w-md-60 w-lg-50 text-center mx-auto mb-7">
            <p class="text-dark"><span class="font-weight-bold">Buat iklan Instagram sekarang juga!.</span> Bersama tim ahli dari GoSocial.</p>
        </div>
        <!-- End Title -->

        <!-- Browser Mockup -->
        <div class="position-relative">
            <div class="device d-none d-sm-block mb-3 mb-sm-0 aos-init">
                <img class="img-fluid" src="https://gosocial.co.id/assets/svg/components/macbook.svg" alt="Image Description">
                <img class="device-macbook-screen" src="https://gosocial.co.id/assets/img/service/digital-campaign/instagram/ads-manager-dashboard.webp" alt="Instagram Ads Manager Dashboard">
            </div>
        </div>
        <!-- End Browser Mockup -->

        <div class="w-100 w-md-40 w-lg-40 text-center mx-auto mt-5">
            <p class="font-size-1"><b>Disclaimer:</b> GoSocial tidak dapat menjamin peningkatan langsung terhadap penjualan, karena terdapat banyak faktor selain dari iklan.</p>
        </div>
    </div>
</section>

<section class="flat-services">
    <div class="container space-2">
        <div class="row">
            <div class="col-12">
                <div class="section-title wow fadeInDown">
                    <h4 class="section-subtitle">Pricing</h4>
                    <h2 class="section-45px-montserrat margin-top-15">Paket Harga Iklan Instagram.</h2>
                    <p class="text-muted">Paket iklan akan disesuaikan dengan budget iklan yang akan dikeluarkan setiap bulannya.</p>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="60" data-smobile="60"
                    style="height:60px"></div>
            </div>
        </div>
    </div>
</section>

<section class="flat-services">
    <div class="container space-2">
        <div class="row">
            <div class="col-md-4 mb-7 mb-md-0 justify-content-center align-self-center">
                <!-- Contacts -->
                <div class="media">
                    <figure class="w-100 max-w-15rem mr-4">
                        <img class="img-fluid" src="https://gosocial.co.id/assets/svg/icons/icon-7.svg" alt="SVG">
                    </figure>
                    <div class="media-body">
                        <h4 class="mb-1 font-size-4">Full Support &amp; Profesional</h4>
                        <p class="font-size-2 mb-0">Full support oleh tim profesional yang telah berpengalaman lebih dari 5 tahun.</p>
                    </div>
                </div>
                <!-- End Contacts -->
            </div>

            <div class="col-md-4 mb-7 mb-md-0 justify-content-center align-self-center">
                <!-- Contacts -->
                <div class="media">
                    <figure class="w-100 max-w-15rem mr-4">
                        <img class="img-fluid" src="https://gosocial.co.id/assets/svg/icons/icon-31.svg" alt="SVG">
                    </figure>
                    <div class="media-body">
                        <h4 class="mb-1 font-size-4">Biaya Jasa Termurah</h4>
                        <p class="font-size-2 mb-0">Solusi kami lebih terjangkau dan efisien dibading melakukannya sendiri.</p>
                    </div>
                </div>
                <!-- End Contacts -->
            </div>

            <div class="col-md-4 justify-content-center align-self-center">
                <!-- Contacts -->
                <div class="media">
                    <figure class="w-100 max-w-15rem mr-4">
                        <img class="img-fluid" src="https://gosocial.co.id/assets/svg/icons/icon-27.svg" alt="SVG">
                    </figure>
                    <div class="media-body">
                        <h4 class="mb-1 font-size-4">135+ Klien</h4>
                        <p class="font-size-2 mb-0">135 lebih bisnis telah mempercayai kami untuk menangani campaign mereka.</p>
                    </div>
                </div>
                <!-- End Contacts -->
            </div>
        </div>
    </div>
</section>

<section class="flat-services">
    <div class="container space-2 space-top-lg-2">
        <div class="row">
            <div class="col-12">
                <div class="section-title wow fadeInDown">
                    <h4 class="section-subtitle">Layanan Pendukung</h4>
                    <h2 class="section-45px-montserrat margin-top-15">Addons Instagram Ads.</h2>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="60" data-smobile="60"
                    style="height:60px"></div>
            </div>
        </div>

        <div class="w-lg-100 mx-lg-auto">
            <!-- Pricing -->
            <div class="card p-5 mb-3">
                <div class="row align-items-sm-center">
                    <div class="col-lg-4 mb-3 mb-lg-0 d-flex flex-row align-items-center">
                        <img class="mr-3" src="https://gosocial.co.id/assets/svg/service/digital-campaign/addon-1.svg" alt="Shopee Collaborative Ads" width="50" height="50">
                        <h2 class="mb-0">Shopee Collaborative Ads</h2>
                    </div>
                    <div class="col-lg-5 mb-3 mb-sm-0 d-flex justify-content-center">
                        <span class="d-block font-size-2">Dengan Iklan Kolaboratif Shopee maka iklanmu dapat langsung terintegrasi dengan akun shopee.</span>
                    </div>
                    <div class="col-sm col-lg-3 text-sm-right">
                        <button type="submit" class="btn btn-sm btn-outline-primary btn-wide transition-3d-hover font-size-2">Mulai dari
                            1.5Jt</button>
                    </div>
                </div>
            </div>
            <!-- End Pricing -->

            <!-- Pricing -->
            <div class="card p-5 mb-3">
                <div class="row align-items-sm-center">
                    <div class="col-lg-4 mb-3 mb-lg-0 d-flex flex-row align-items-center">
                        <img class=" mr-3" src="https://gosocial.co.id/assets/svg/service/digital-campaign/addon-2.svg" alt="Landing Page Website" width="50" height="50">
                        <h2 class="mb-0">Landing Page Website</h2>
                    </div>
                    <div class="col-lg-5 mb-3 mb-sm-0 d-flex justify-content-center">
                        <span class="d-block font-size-2">Gunakan Landing Page Website untuk meningkatkan kepercayaan pelanggan terhadap brandmu.</span>
                    </div>
                    <div class="col-sm col-lg-3 text-sm-right">
                        <button type="submit" class="btn btn-sm btn-outline-primary btn-wide transition-3d-hove font-size-2">Mulai dari
                            2Jt</button>
                    </div>
                </div>
            </div>
            <!-- End Pricing -->

            <!-- Pricing -->
            <div class="card p-5 mb-3">
                <div class="row align-items-sm-center">
                    <div class="col-lg-4 mb-3 mb-lg-0 d-flex flex-row align-items-center">
                        <img class=" mr-3" src="https://gosocial.co.id/assets/svg/service/digital-campaign/addon-3.svg" alt="Video Creative Ads" width="50" height="50">
                        <h2 class="mb-0">Video Creative Ads</h4>
                    </div>
                    <div class="col-lg-5 mb-3 mb-sm-0 d-flex justify-content-center">
                        <span class="d-block font-size-2">Video Creative Ads dalam bentuk Feed dan Story (15 Detik, Inc. Concept).</span>
                    </div>
                    <div class="col-sm col-lg-3 text-sm-right">
                        <button type="submit" class="btn btn-sm btn-outline-primary btn-wide transition-3d-hover font-size-2">Mulai dari
                            1.5Jt</button>
                    </div>
                </div>
            </div>
            <!-- End Pricing -->

            <!-- Pricing -->
            <div class="card p-5 mb-3">
                <div class="row align-items-sm-center">
                    <div class="col-lg-4 mb-3 mb-lg-0 d-flex flex-row align-items-center">
                        <img class=" mr-3" src="https://gosocial.co.id/assets/svg/service/digital-campaign/addon-4.svg" alt="Image Creative Ads" width="50" height="50">
                        <h1 class="mb-0">Image Creative Ads</h1>
                    </div>
                    <div class="col-lg-5 mb-3 mb-sm-0 d-flex justify-content-center">
                        <span class="d-block font-size-2">Gambar Iklan produk dan brandmu untuk menambah jangkauan iklan (Feed &amp; Story).</span>
                    </div>
                    <div class="col-sm col-lg-3 text-sm-right">
                        <button type="submit" class="btn btn-sm btn-outline-primary btn-wide transition-3d-hover font-size-2">Mulai dari
                            250Rb</button>
                    </div>
                </div>
            </div>
            <!-- End Pricing -->
        </div>
        <div class="w-lg-100 mx-lg-auto" id="addons-div" style="">
            <!-- Pricing -->
            <div class="card p-4 mb-3">
                <div class="row align-items-sm-center">
                    <div class="col-lg-4 mb-3 mb-lg-0 d-flex flex-row align-items-center">
                        <img class=" mr-3" src="https://gosocial.co.id/assets/svg/service/digital-campaign/addon-5.svg" alt="Carousel Creative Ads" width="50" height="50">
                        <h2 class="mb-0">Carousel Creative Ads</h2>
                    </div>
                    <div class="col-lg-5 mb-3 mb-sm-0 d-flex justify-content-center">
                        <span class="d-block font-size-2">Gambar produk dan brandmu dalam bentuk Carousel maksimal 10 gambar. (Untuk 3 Feed &amp; Story)</span>
                    </div>
                    <div class="col-sm col-lg-3 text-sm-right">
                        <button type="submit" class="btn btn-sm btn-outline-primary btn-wide transition-3d-hover font-size-2">Mulai dari
                            500Rb</button>
                    </div>
                </div>
            </div>
            <!-- End Pricing -->

            <!-- Pricing -->
            <div class="card p-4 mb-3">
                <div class="row align-items-sm-center">
                    <div class="col-lg-4 mb-3 mb-lg-0 d-flex flex-row align-items-center">
                        <img class=" mr-3" src="https://gosocial.co.id/assets/svg/service/digital-campaign/addon-6.svg" alt="Setup Facebook Pixel" width="50" height="50">
                        <h2 class="mb-0">Setup Facebook Pixel</h2>
                    </div>
                    <div class="col-lg-5 mb-3 mb-sm-0 d-flex justify-content-center">
                        <span class="d-block font-size-2">Setup Layanan Facebook Pixel untuk mendapatkan rekam jejak pengguna website.</span>
                    </div>
                    <div class="col-sm col-lg-3 text-sm-right">
                        <button type="submit" class="btn btn-sm btn-outline-primary btn-wide transition-3d-hover font-size-2">Mulai dari
                            1Jt</button>
                    </div>
                </div>
            </div>
            <!-- End Pricing -->

            <!-- Pricing -->
            <div class="card p-4 mb-3">
                <div class="row align-items-sm-center">
                    <div class="col-lg-4 mb-3 mb-lg-0 d-flex flex-row align-items-center">
                        <img class=" mr-3" src="https://gosocial.co.id/assets/svg/service/digital-campaign/addon-7.svg" alt="Setup Google Analytics &amp; Tag Manager" width="50" height="50">
                        <h2 class="mb-0">Setup Google Analytics &amp; Tag Manager</h4>
                    </div>
                    <div class="col-lg-5 mb-3 mb-sm-0 d-flex justify-content-center">
                        <span class="d-block font-size-2">Setup Layanan Google Analytics dan Tag Manager untuk menganalisis kunjungan pengguna website.</span>
                    </div>
                    <div class="col-sm col-lg-3 text-sm-right">
                        <button type="submit" class="btn btn-sm btn-outline-primary btn-wide transition-3d-hover font-size-2">Mulai dari
                            1Jt</button>
                    </div>
                </div>
            </div>
            <!-- End Pricing -->
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
            <div class="col-12">
                <div id="basicsAccordion-left">
                    <!-- Card -->
                    <div class="card shadow-none mb-3">
                        <div class="card-header card-collapse" id="basicsHeadingOne">
                            <a class="btn btn-link btn-block d-flex justify-content-between card-btn px-0 collapsed text-decoration-none" href="javascript:;" role="button" data-toggle="collapse" data-target="#basicsCollapseOne" aria-expanded="false" aria-controls="basicsCollapseOne">
                                <span class="font-size-2">Bagaimana cara pemesanan iklan?</span>

                                <span class="card-btn-toggle">
                                    <span class="font-size-2 card-btn-toggle-default">+</span>
                                    <span class="font-size-2 card-btn-toggle-active">−</span>
                                </span>
                            </a>
                        </div>
                        <div id="basicsCollapseOne" class="collapse" aria-labelledby="basicsHeadingOne" data-parent="#basicsAccordion-left" style="">
                            <div class="card-body px-0 m-3">
                                <p>
                                    Pertama, pilih paket yang sesuai dengan kebutuhan Anda. Lalu isi form pemesanan digital campaign / iklan online, dan tunggu tim kami menghubungi Anda dalam waktu kurang dari 1×24 jam.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Card -->

                    <!-- Card -->
                    <div class="card shadow-none mb-3">
                        <div class="card-header card-collapse" id="basicsHeadingTwo">
                            <a class="btn btn-link btn-block d-flex justify-content-between card-btn px-0 collapsed text-decoration-none" href="javascript:;" role="button" data-toggle="collapse" data-target="#basicsCollapseTwo" aria-expanded="false" aria-controls="basicsCollapseTwo">
                                <span class="font-size-2">Apa yang harus dipersiapkan untuk iklan?</span>

                                <span class="card-btn-toggle">
                                    <span class="font-size-2 card-btn-toggle-default">+</span>
                                    <span class="font-size-2 card-btn-toggle-active">−</span>
                                </span>
                            </a>
                        </div>
                        <div id="basicsCollapseTwo" class="collapse" aria-labelledby="basicsHeadingTwo" data-parent="#basicsAccordion-left" style="">
                            <div class="card-body px-0 m-3">
                                <p>
                                    Jika anda memilih paket yang belum termasuk desain / konten maka Anda harus menyediakan gambar promosi untuk memulai iklan.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Card -->

                    <!-- Card -->
                    <div class="card shadow-none mb-3">
                        <div class="card-header card-collapse" id="basicsHeadingThree">
                            <a class="btn btn-link btn-block d-flex justify-content-between card-btn px-0 collapsed text-decoration-none" href="javascript:;" role="button" data-toggle="collapse" data-target="#basicsCollapseThree" aria-expanded="false" aria-controls="basicsCollapseThree">
                                <span class="font-size-2">Bagaimana proses iklannya?</span>

                                <span class="card-btn-toggle">
                                    <span class="font-size-2 card-btn-toggle-default">+</span>
                                    <span class="font-size-2 card-btn-toggle-active">−</span>
                                </span>
                            </a>
                        </div>
                        <div id="basicsCollapseThree" class="collapse" aria-labelledby="basicsHeadingThree" data-parent="#basicsAccordion-left" style="">
                            <div class="card-body px-0 m-3">
                                <p>
                                    Kami akan memahami brief dari form pemesanan yang Anda isi untuk memahami produk & target market.
                                    <br><br>
                                    Setelah itu kami akan membuat proposal iklan disertai dengan estimasi target yang akan dicapai, jika Anda setuju maka iklan akan mulai dijalankan.
                                    <br><br>
                                    Selama iklan / campaign berlangsung kami akan terus memantau terus agar iklan berjalan dengan baik tanpa masalah. Dan akan mengirimkan report berkala kepada Anda.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Card -->

                    <!-- Card -->
                    <div class="card shadow-none mb-3">
                        <div class="card-header card-collapse" id="basicsHeadingFour">
                            <a class="btn btn-link btn-block d-flex justify-content-between card-btn px-0 collapsed text-decoration-none" href="javascript:;" role="button" data-toggle="collapse" data-target="#basicsCollapseFour" aria-expanded="false" aria-controls="basicsCollapseFour">
                                <span class="font-size-2">Apa saja produk yang bisa diiklankan?</span>

                                <span class="card-btn-toggle">
                                    <span class="font-size-2 card-btn-toggle-default">+</span>
                                    <span class="font-size-2 card-btn-toggle-active">−</span>
                                </span>
                            </a>
                        </div>
                        <div id="basicsCollapseFour" class="collapse" aria-labelledby="basicsHeadingFour" data-parent="#basicsAccordion-left" style="">
                            <div class="card-body px-0 m-3">
                                <p>
                                    Kami menerima segala jenis produk selain produk yang dilarang oleh platform dimana tempat iklan akan dijalankan dan hal-hal yang melanggar hukum.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Card -->

                    <!-- Card -->
                    <div class="card shadow-none mb-3">
                        <div class="card-header card-collapse" id="basicsHeadingFive">
                            <a class="btn btn-link btn-block d-flex justify-content-between card-btn px-0 collapsed text-decoration-none" href="javascript:;" role="button" data-toggle="collapse" data-target="#basicsCollapseFive" aria-expanded="false" aria-controls="basicsCollapseFive">
                                <span class="font-size-2">Apakah ditengah jalan iklan bisa dibatalkan / direvisi?</span>

                                <span class="card-btn-toggle">
                                    <span class="font-size-2 card-btn-toggle-default">+</span>
                                    <span class="font-size-2 card-btn-toggle-active">−</span>
                                </span>
                            </a>
                        </div>
                        <div id="basicsCollapseFive" class="collapse" aria-labelledby="basicsHeadingFive" data-parent="#basicsAccordion-left" style="">
                            <div class="card-body px-0 m-3">
                                <p>
                                    Maaf kami tidak dapat membatalkan iklan yang sudah disetujui, namun kami dapat melakukan revisi apabila iklan / campaign yang dijalankan tidak berjalan dengan baik atau ada perubahan.
                                </p>
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
                    <h4 class="section-subtitle">OUR SERVICES</h4>
                    <h2 class="section-45px-montserrat margin-top-15">Pilihan Platform Iklan</h2>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="60" data-smobile="60"
                    style="height:60px"></div>
            </div>
            <div class="col-md-4">
                <div class="services-box active">
                    <div class="wraper-effect active"></div>
                    <span class="icon-services icon-development1 font-size-icon active"></span>
                    <div class="services-content">
                        <a href="{{ route('digital-campaign.iklan-instagram') }}" class="section-22px-montserrat">Iklan Instagram</a>
                        <p class="services-desc">Layanan pembuatan strategi dan pengelolaan iklan untuk social media Instagram.</p>
                        <a href="{{ route('digital-campaign.iklan-instagram') }}" class="read-more"></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="services-box active">
                    <div class="wraper-effect active"></div>
                    <span class="icon-services icon-branding1 font-size-icon active"></span>
                    <div class="services-content">
                        <a href="{{ route('digital-campaign.iklan-facebook') }}" class="section-22px-montserrat">Iklan Facebook</a>
                        <p class="services-desc">Layanan pembuatan strategi dan pengelolaan iklan untuk social media Facebook.</p>
                        <a href="{{ route('digital-campaign.iklan-facebook') }}" class="read-more"></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="services-box active">
                    <div class="wraper-effect active"></div>
                    <span class="icon-services icon-advertising1 font-size-icon active"></span>
                    <div class="services-content">
                        <a href="{{ route('digital-campaign.iklan-google') }}" class="section-22px-montserrat">Iklan Google</a>
                        <p class="services-desc">Layanan pembuatan strategi dan pengelolaan iklan SEM (search engine marketing) di Google.</p>
                        <a href="{{ route('digital-campaign.iklan-google') }}" class="read-more"></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="services-box active">
                    <div class="wraper-effect active"></div>
                    <span class="icon-services icon-webpage1 font-size-icon active"></span>
                    <div class="services-content">
                        <a href="{{ route('digital-campaign.iklan-youtube') }}" class="section-22px-montserrat">Iklan Youtube</a>
                        <p class="services-desc">Layanan pembuatan strategi dan pengelolaan iklan pada platform Youtube.</p>
                        <a href="{{ route('digital-campaign.iklan-youtube') }}" class="read-more"></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="services-box active">
                    <div class="wraper-effect active"></div>
                    <span class="icon-services icon-development1 font-size-icon active"></span>
                    <div class="services-content">
                        <a href="{{ route('digital-campaign.iklan-tik-tok') }}" class="section-22px-montserrat">Iklan Tik Tok</a>
                        <p class="services-desc">Layanan pembuatan strategi dan pengelolaan iklan pada platform TikTok.</p>
                        <a href="{{ route('digital-campaign.iklan-tik-tok') }}" class="read-more"></a>
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
                    <p class="text-muted">Official Partners:</p>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="60" data-smobile="60"
                    style="height:60px"></div>
            </div>
            <div class="col-md-12 justify-content-center text-center">
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
@endsection
