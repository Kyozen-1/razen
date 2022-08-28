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
<link rel="stylesheet" href="https://gosocial.co.id/assets/css/pages/sme/instagram.css?v.1808">
@endsection

@section('content')
<section class="flat-title-page back-ground-style">
    <div class="container-fluid">
        <div class="row">
            <div class="breadcrumbs text-center link-style-5 text-white">
                <h1 class="section-title-page text-white">Jasa Video Company Profile</h1>
                <p class="mb-5">Pembuatan Video Company Profile untuk Identitas Perusahaan.</p>
                <ul class="breadcrumbs-inner list-center display-flex">
                    <li><a class="section-16px-regular font-weight-500" href="{{ route('home') }}">Home</a></li>
                    <li><a class="section-16px-regular font-weight-500" href="{{ route('video-production') }}">Video Production</a></li>
                    <li>
                        <h4 class="section-16px-regular font-weight-500 text-white">Jasa Video Company Profile</h4>
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
                        <h4 class="section-subtitle">VIDEO COMPANY PROFILE</h4>
                        <h4 class="section-45px-montserrat margin-top-15 margin-bottom-20">Pentingnya Video Company Profile untuk Branding!</h4>
                    </div>
                    <p class="section-17px-regular margin-bottom-25">
                        Salah satu media promosi yang terbukti efektif sebagai branding perusahaan dengan menunjukan dan mengenalkan identitas perusahaan, visi dan misi, produk yang ditawarkan, hingga jangkauan pemasaran luas yang bisa digunakan sebagai bahan presentasi.
                        <br><br>
                        Kembangkan branding bisnismu dengan Jasa Video Company Profile yang profesional bersama GoSocial.
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="about-content-left wow fadeInLeft">
                    <div class="about-post">
                        <img src="{{ asset('olux/assets/images/image-box/about-post-mystory.jpg') }}" alt="images">
                        <div class="mark-video">
                            <a href="https://www.youtube.com/embed/xC4ze0p0b5Y" class="lightbox-image">
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

<section class="flat-services">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title wow fadeInDown">
                    <h2 class="section-45px-montserrat margin-top-15">How We Work?</h2>
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
                        <h3>Brainstorming</h3>
                        <p>Konsultasi kebutuhan dan biaya dengan tim.</p>
                    </div>
                </div>
            </li>

            <li class="step-item">
                <div class="step-content-wrapper">
                    <span class="step-icon step-icon-soft-primary">2</span>
                    <div class="step-content">
                        <h3>Concept & Brief</h3>
                        <p>Mulai pembuatan konsep berdasarkan brief dari klien.</p>
                    </div>
                </div>
            </li>

            <li class="step-item">
                <div class="step-content-wrapper">
                    <span class="step-icon step-icon-soft-primary">3</span>
                    <div class="step-content">
                        <h3>Production</h3>
                        <p>Tahap produksi video dengan berbagai tahapan kreatif.</p>
                    </div>
                </div>
            </li>

            <li class="step-item">
                <div class="step-content-wrapper">
                    <span class="step-icon step-icon-soft-primary">4</span>
                    <div class="step-content">
                        <h3>Final</h3>
                        <p>Rendering hasil produksi & terima hasil dengan puas.</p>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</section>

<section class="flat-services">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title wow fadeInDown">
                    <h4 class="section-45px-montserrat margin-top-15">Harga Jasa Video Promosi Social Media</h4>
                    <p class="text-muted">Paket Jasa video konten spsial media profesional dan terbaik</p>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="60" data-smobile="60"
                    style="height:60px"></div>
            </div>
        </div>
        <div class="row align-items-lg-center">
            <div id="stickyBlockStartPoint" class="col-lg-5 mb-9 mb-lg-0">
                <!-- Pricing -->
                <div class="card z-index-2 p-4 p-md-7">
                    <span class="text-dark">
                        <p>Mulai dari</p>
                        <span class="display-4">4,5</span>
                        <span class="font-size-3">Jt</span>
                    </span>

                    <hr class="my-4">

                    <div class="mb-5">
                        <p>Konsultasi dengan tim kami terlebih dahulu untuk analisa strategi konten promosi terbaik bagi bisnis Anda.</p>
                    </div>

                    <div class="mb-2">
                        <a class="btn btn-primary btn-pill btn-wide transition-3d-hover font-size-2" href="https://api.whatsapp.com/send?phone=6285159974507&amp;text=Halo%20GoSocial%21%0D%0ASaya%20ingin%20konsultasi%20layanan%20SEO" target="_blank">
                            Konsultasi Sekarang</i>
                        </a>
                    </div>

                    <p class="small">*Konsultasi keperluan Anda dengan tim kami</p>
                </div>
                <!-- End Pricing -->
            </div>

            <div class="col-lg-7">
                <div class="pl-lg-6">
                    <div class="row">
                        <div class="col-sm-6 mb-3">
                            <!-- Icon Blocks -->
                            <figure class="mb-3">
                                <img style="width: 7rem; height:auto;" src="https://gosocial.co.id/assets/svg/icons/icon-29.svg" alt="SVG">
                            </figure>
                            <h3>Studio Kreatif Profesional</h3>
                            <p>GoSocial mempunyai studio sendiri dengan berbagai peralatan dan perlengkapan pendukung.</p>
                            <!-- End Icon Blocks -->
                        </div>
                        <div class="col-sm-6 mb-3">
                            <!-- Icon Blocks -->
                            <figure class="mb-3">
                                <img style="width: 7rem; height:auto;" src="https://gosocial.co.id/assets/svg/icons/icon-30.svg" alt="SVG">
                            </figure>
                            <h3>Creative Thinking</h3>
                            <p>Konsep dan strategi promosi akan dibuat dan disesuaikan sesuai tren dan value produk</p>
                            <!-- End Icon Blocks -->
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <!-- Icon Blocks -->
                            <figure class="mb-3">
                                <img style="width: 7rem; height:auto;" src="https://gosocial.co.id/assets/svg/icons/icon-32.svg" alt="SVG">
                            </figure>
                            <h3>Konsultasi Gratis</h3>
                            <p>Bingung tentang kebutuhan dan keinginan Anda? diskusi dengan tim kami sekarang juga tanpa biaya!</p>
                            <!-- End Icon Blocks -->
                        </div>
                        <div class="col-sm-6">
                            <!-- Icon Blocks -->
                            <figure class="mb-3">
                                <img style="width: 7rem; height:auto;" src="https://gosocial.co.id/assets/svg/icons/icon-31.svg" alt="SVG">
                            </figure>
                            <h3>100++ Video</h3>
                            <p>Podcast, Creative Video, dan strategi lainnya siap untuk memaksimalkan promosi bisnsi Anda!
                            </p>
                            <!-- End Icon Blocks -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="flat-services">
    <div class="container space-2">
        <div class="row mb-5">
            <div class="col-md-12">
                <div class="section-title wow fadeInDown">
                    <h4 class="section-subtitle">OUR LATEST WORK</h4>
                    <h2 class="section-main-title section-45px-montserrat">Portofolio</h2>
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
                                <span class="font-size-2">Bagaimana video explainer dapat membantu bisnis?</span>

                                <span class="card-btn-toggle">
                                    <span class="font-size-2 card-btn-toggle-default">+</span>
                                    <span class="font-size-2 card-btn-toggle-active">−</span>
                                </span>
                            </a>
                        </div>
                        <div id="basicsCollapseOne" class="collapse" aria-labelledby="basicsHeadingOne" data-parent="#basicsAccordion-left" style="">
                            <div class="card-body px-0 m-3">
                                <p>Video animasi explainer (motion graphic) dapat meningkatkan konversi halaman dan menjelaskan lebih baik tentang produk / bisnis Anda. Melalui video, pesan yang disampaikan akan lebih komunikatif dan menarik. Dibandingkan melalui media visual yang statis (grafis).</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Card -->

                    <!-- Card -->
                    <div class="card shadow-none mb-3">
                        <div class="card-header card-collapse" id="basicsHeadingTwo">
                            <a class="btn btn-link btn-block d-flex justify-content-between card-btn px-0 collapsed text-decoration-none" href="javascript:;" role="button" data-toggle="collapse" data-target="#basicsCollapseTwo" aria-expanded="false" aria-controls="basicsCollapseTwo">
                                <span class="font-size-2">Apa jenis video animasi yang dapat dibuat GoSocial</span>

                                <span class="card-btn-toggle">
                                    <span class="font-size-2 card-btn-toggle-default">+</span>
                                    <span class="font-size-2 card-btn-toggle-active">−</span>
                                </span>
                            </a>
                        </div>
                        <div id="basicsCollapseTwo" class="collapse" aria-labelledby="basicsHeadingTwo" data-parent="#basicsAccordion-left" style="">
                            <div class="card-body px-0 m-3">
                                <p>Studio kami berisikan tim profesional & berpengalaman dibidangnya yang dapat membuat berbagai macam gaya / jenis video animasi baik 2D hingga 3D, dari motion graphic maupun white board.
                                    <br> <br>
                                    Anda tidak perlu khawatir tentang hasil yang akan didapatkan, dengan harga yang sangat terjangkau anda sudah mendapat standard video Internasional, karena kami menggunakan success formula yang sudah terbukti memuaskan.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Card -->

                    <!-- Card -->
                    <div class="card shadow-none mb-3">
                        <div class="card-header card-collapse" id="basicsHeadingThree">
                            <a class="btn btn-link btn-block d-flex justify-content-between card-btn px-0 collapsed text-decoration-none" href="javascript:;" role="button" data-toggle="collapse" data-target="#basicsCollapseThree" aria-expanded="false" aria-controls="basicsCollapseThree">
                                <span class="font-size-2">Berapa lama proses pengerjaannya?</span>

                                <span class="card-btn-toggle">
                                    <span class="font-size-2 card-btn-toggle-default">+</span>
                                    <span class="font-size-2 card-btn-toggle-active">−</span>
                                </span>
                            </a>
                        </div>
                        <div id="basicsCollapseThree" class="collapse" aria-labelledby="basicsHeadingThree" data-parent="#basicsAccordion-left" style="">
                            <div class="card-body px-0 m-3">
                                <p>Proses pengerjaan video kami, pada normalnya adalah sesuai dengan pricing list (selama Anda bekerjasama untuk memberikan feedback waktu). Namun jika Anda butuh waktu pengerjaan yang lebih cepat, jangan khawatir kami dapat membantu melalui layanan custom yang akan menyesuaikan dengan kebutuhan Anda.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Card -->

                    <!-- Card -->
                    <div class="card shadow-none mb-3">
                        <div class="card-header card-collapse" id="basicsHeadingFour">
                            <a class="btn btn-link btn-block d-flex justify-content-between card-btn px-0 collapsed text-decoration-none" href="javascript:;" role="button" data-toggle="collapse" data-target="#basicsCollapseFour" aria-expanded="false" aria-controls="basicsCollapseFour">
                                <span class="font-size-2">Kapan saya akan dihubungi setelah mengisi form</span>

                                <span class="card-btn-toggle">
                                    <span class="font-size-2 card-btn-toggle-default">+</span>
                                    <span class="font-size-2 card-btn-toggle-active">−</span>
                                </span>
                            </a>
                        </div>
                        <div id="basicsCollapseFour" class="collapse" aria-labelledby="basicsHeadingFour" data-parent="#basicsAccordion-left" style="">
                            <div class="card-body px-0 m-3">
                                <p>Kami akan merespon form pemesanan / pertanyaan kurang dari 24 jam. Jika lebih daripada itu Anda belum mendapatkan jawaban silahkan hubungi kami melalui Livechat.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Card -->

                    <!-- Card -->
                    <div class="card shadow-none mb-3">
                        <div class="card-header card-collapse" id="basicsHeadingFive">
                            <a class="btn btn-link btn-block d-flex justify-content-between card-btn px-0 collapsed text-decoration-none" href="javascript:;" role="button" data-toggle="collapse" data-target="#basicsCollapseFive" aria-expanded="false" aria-controls="basicsCollapseFive">
                                <span class="font-size-2">Apa saja yang akan didapatkan?</span>

                                <span class="card-btn-toggle">
                                    <span class="font-size-2 card-btn-toggle-default">+</span>
                                    <span class="font-size-2 card-btn-toggle-active">−</span>
                                </span>
                            </a>
                        </div>
                        <div id="basicsCollapseFive" class="collapse" aria-labelledby="basicsHeadingFive" data-parent="#basicsAccordion-left" style="">
                            <div class="card-body px-0 m-3">
                                <p>Anda akan mendapatkan hasil akhir video HD Resolution 1920 x 1080. Tentunya dengan melalui berbagai proses yang kami sebut sebagai Success Formula. Mulai dari script writing, voice over, pembuatan graphic, animation, sound effects, dan background music.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Card -->

                    <!-- Card -->
                    <div class="card shadow-none mb-3">
                        <div class="card-header card-collapse" id="basicsHeadingSix">
                            <a class="btn btn-link btn-block d-flex justify-content-between card-btn px-0 collapsed text-decoration-none" href="javascript:;" role="button" data-toggle="collapse" data-target="#basicsCollapseSix" aria-expanded="false" aria-controls="basicsCollapseSix">
                                <span class="font-size-2">Apakah harga bisa menyesuaikan budget?</span>

                                <span class="card-btn-toggle">
                                    <span class="font-size-2 card-btn-toggle-default">+</span>
                                    <span class="font-size-2 card-btn-toggle-active">−</span>
                                </span>
                            </a>
                        </div>
                        <div id="basicsCollapseSix" class="collapse" aria-labelledby="basicsHeadingSix" data-parent="#basicsAccordion-left" style="">
                            <div class="card-body px-0 m-3">
                                <p>Konsultasikan budget dan kebutuhan dengan tim kami untuk mendapatkan penawaran yang sesuai dengan kebutuhan bisnis.</p>
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
                    <h4 class="section-subtitle">WHAT WE DO?</h4>
                    <h2 class="section-main-title section-45px-montserrat">Pilihan Jenis Video</h2>
                </div>
            </div>
            <div class="col-md-4">
                <div class="latest-new-box grow-up-hover wow fadeInUp" data-wow-delay="0ms"
                    data-wow-duration="1500ms">
                    <div class="about-post">
                        <img src="{{ asset('olux/assets/images/image-box/about-post-mystory.jpg') }}" alt="images">
                        <div class="mark-video">
                            <a href="https://www.youtube.com/embed/xC4ze0p0b5Y" class="lightbox-image">
                                <div class="icon"></div>
                            </a>
                        </div>
                        <div class="mark-about-post"></div>
                    </div>
                    <div class="latest-content">
                        <div class="latest-title margin-bottom-20"><a href="{{ route('video-production.video-animasi') }}"
                                class="section-20px-montserrat">Video Animasi</a>
                                <p>Pembuatan video animasi explainer 2D (motion graphic) yang dapat digunakan media company profile maupun promosi.</p>
                        </div>
                        <div class="latest-readmore"><a href="{{ route('video-production.video-animasi') }}" class="read-more"></a></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="latest-new-box grow-up-hover wow fadeInUp" data-wow-delay="600ms"
                    data-wow-duration="1500ms">
                    <div class="about-post">
                        <img src="{{ asset('olux/assets/images/image-box/about-post-mystory.jpg') }}" alt="images">
                        <div class="mark-video">
                            <a href="https://www.youtube.com/embed/xC4ze0p0b5Y" class="lightbox-image">
                                <div class="icon"></div>
                            </a>
                        </div>
                        <div class="mark-about-post"></div>
                    </div>
                    <div class="latest-content">
                        <div class="latest-title margin-bottom-20"><a href="{{ route('video-production.video-konten-sosmed') }}"
                                class="section-20px-montserrat">Video Konten Sosmed</a>
                                <p>Pembuatan video untuk konten posting maupun promosi di social media seperti Youtube, TikTok, maupun Instagram.</p>
                            </div>
                        <div class="latest-readmore"><a href="{{ route('video-production.video-konten-sosmed') }}" class="read-more"></a></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="latest-new-box grow-up-hover wow fadeInUp" data-wow-delay="600ms"
                    data-wow-duration="1500ms">
                    <div class="about-post">
                        <img src="{{ asset('olux/assets/images/image-box/about-post-mystory.jpg') }}" alt="images">
                        <div class="mark-video">
                            <a href="https://www.youtube.com/embed/xC4ze0p0b5Y" class="lightbox-image">
                                <div class="icon"></div>
                            </a>
                        </div>
                        <div class="mark-about-post"></div>
                    </div>
                    <div class="latest-content">
                        <div class="latest-title margin-bottom-20"><a href="{{ route('video-production.video-company-profile') }}"
                                class="section-20px-montserrat">Video Company Profile</a>
                                <p>Pembuatan video company profile untuk meningkatkan image perusahaan yang mendukung promosi bisnis.</p>
                            </div>
                        <div class="latest-readmore"><a href="{{ route('video-production.video-company-profile') }}" class="read-more"></a></div>
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
@endsection
