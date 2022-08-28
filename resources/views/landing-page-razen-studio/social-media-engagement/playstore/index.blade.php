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
                <h1 class="section-title-page text-white">Playstore/Appstore - SME Services</h1>
                <p class="mb-5">Solusi untuk meningkatkan review pada aplikasi di PlayStore/AppStore</p>
                <ul class="breadcrumbs-inner list-center display-flex">
                    <li><a class="section-16px-regular font-weight-500" href="{{ route('home') }}">Home</a></li>
                    <li><a class="section-16px-regular font-weight-500" href="{{ route('social-media-engagement') }}">Social Media Engagement</a></li>
                    <li>
                        <h4 class="section-16px-regular font-weight-500 text-white">Playstore/Appstore - SME Services</h4>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<div class="position-relative bg-danger overflow-hidden">
    <div class="container position-relative z-index-2 space-lg-2 space-1 mb-lg-5 mb-2">
        <div class="row justify-content-center mb-3">
            <!-- Video Block -->
            <div class="col-lg-6">
                <div class="position-relative ">
                    <div id="youTubeVideoPlayerExample2" class="video-player">
                        <!-- Thumbnail -->
                        <img class="img-fluid video-player-preview rounded-lg" src="https://gosocial.co.id/assets/img/service/sme/sme-video.webp" alt="Beli Followers Instagram">
                        <!-- END Thumbnail -->
                        <!-- Video Iframe -->
                        <div class="embed-responsive embed-responsive-16by9 rounded-lg">
                            <div id="youTubeVideoIframeExample2"></div>
                        </div>
                        <!-- End Video Iframe -->
                    </div>
                </div>
            </div>
            <!-- END Video Block -->
        </div>
        <div class="row justify-content-center  text-white">
            <div class="col-lg-8 text-center">
                <h2 class="mb-3 text-white">Apa itu Social Media Engagement?</h2>
                <p>Merupakan layanan ekslusif di GoSocial untuk meningkatkan kredibilitas maupun visibilitas konten brand dengan cara meningkatkan interaksi pada berbagai platform digital.</p>
                <a class="btn btn-light btn-sm text-danger transition-3d-hover ml-3 mt-3 font-size-2" href="{{ route('social-media-engagement') }}"><i class="fa fa-info-circle mr-2"></i> Pengertian Engagement</a>
            </div>
        </div>
    </div>


    <!-- SVG Shapes -->
    <figure class="position-absolute top-0 left-0 w-60">
        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1246 1078">
            <g opacity=".4">
                <linearGradient id="doubleEllipseTopLeftID1" gradientUnits="userSpaceOnUse" x1="2073.5078" y1="1.7251" x2="2273.4375" y2="1135.5818" gradientTransform="matrix(-1 0 0 1 2600 0)">
                    <stop class="stop-color-primary-lighter" offset="0.4976" style="stop-color:#d11002"></stop>
                    <stop class="stop-color-primary" offset="1" style="stop-color:#c8343c"></stop>
                </linearGradient>
                <polygon fill="url(#doubleEllipseTopLeftID1)" points="519.8,0.6 0,0.6 0,1078 863.4,1078   "></polygon>
                <linearGradient id="doubleEllipseTopLeftID2" gradientUnits="userSpaceOnUse" x1="1717.1648" y1="3.779560e-05" x2="1717.1648" y2="644.0417" gradientTransform="matrix(-1 0 0 1 2600 0)">
                    <stop class="stop-color-primary-lighter" offset="1.577052e-06" style="stop-color:#d11002"></stop>
                    <stop class="stop-color-primary" offset="1" style="stop-color:#c8343c"></stop>
                </linearGradient>
                <polygon fill="url(#doubleEllipseTopLeftID2)" points="519.7,0 1039.4,0.6 1246,639.1 725.2,644   "></polygon>
            </g>
        </svg>
    </figure>
    <figure class="position-absolute right-0 bottom-0 left-0 mb-n1">
        <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1920 100.1">
            <path fill="#fff" d="M0,0c0,0,934.4,93.4,1920,0v100.1H0L0,0z"></path>
        </svg>
    </figure>
    <!-- End SVG Shapes -->
</div>

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
                        <h4 class="section-45px-montserrat margin-top-15 margin-bottom-20">Jasa Review Aplikasi</h4>
                    </div>
                    <p class="section-17px-regular margin-bottom-25">
                        GoSocial menyediakan Jasa Review / Ulasan untuk Aplikasi pada Playstore dan Appstore, berasal dari akun pengguna Playstore dan Appstore Indonesia yang aktif sebagai kontributor.
                        <br>
                        Semakin banyak review yang dimiliki oleh suatu aplikasi maka akan meningkatkan kepercayaan pengguna sehingga akan meningkatkan traffic organik aplikasi.
                        <br>
                        Layanan ini dibuat khusus untuk aplikasi dalam meningkatkan kredibilitas serta ranking di halaman pencarian Playstore dan Appstore.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container space-2">
    <div class="w-lg-85 mx-lg-auto">
        <div class="card bg-danger text-white overflow-hidden p-4">
            <!-- SVG Component -->
            <figure class="w-lg-25 w-100 content-centered-y-lg mt-lg-0 mt-n8 mb-lg-0 mb-2 ml-lg-n4 ml-0 text-center">
                <img class="img-fluid w-lg-100 w-75 mt-lg-0 mt-n5 mb-lg-0 mb-2" src="https://gosocial.co.id/assets/svg/service/sme/engagement.svg" alt="Layanan lain">
            </figure>
            <!-- End SVG Component -->

            <div class="row justify-content-md-start align-items-md-center text-center text-md-left">
                <div class="col-md-6 offset-md-3 mb-3 mb-md-0">
                    <h2 class="text-white mb-1">Berbagai layanan lainnya untuk Instagram</h2>
                    <p class="text-white-70 mb-0 font-size-2">Beragam layanan interaksi untuk meningkatkan branding bisnis &amp;
                        performa Instagram tersedia disini.</p>
                </div>
                <div class="col-md-3 text-md-right">
                    <a class="btn btn-light transition-3d-hover show_pricing font-size-2 text-dark">Lihat Paket</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container space-2">
    <div class="row align-items-lg-center">
        <div class="col-lg-6 mb-7 mb-lg-0">
            <div class="mb-5">
                <h2 class="mb-3">Keuntungan memiliki banyak ulasan positif di Playstore/Appstore.</h2>
                <p>
                    Review sangat berpengaruh besar terhadap kepercayaan atau branding aplikasi di Playstore/Appstore, semakin banyak dan positif hasil ulasan maka semakin membangun kepercayaan dari calon pengguna aplikasi.
                    <br>
                    Selain itu banyak sekali keuntungan yang akan didapat ketika aplikasi memiliki review/ulasan yang banyak dan positif di Playstore/Appstore, diantaranya:
                </p>
            </div>

            <!-- Info -->
            <div class="media pb-3">
                <span class="icon icon-xs icon-soft-indigo icon-circle mr-3">
                    <i class="fas fa-check"></i>
                </span>
                <div class="media-body">
                    <p class="text-dark mb-0">Dengan kredibilitas yang tinggi akan membantu menaikan jumlah pengguna yang memakai aplikasi</p>
                </div>
            </div>
            <div class="media py-3">
                <span class="icon icon-xs icon-soft-indigo icon-circle mr-3">
                    <i class="fas fa-check"></i>
                </span>
                <div class="media-body">
                    <p class="text-dark mb-0">Membantu meningkatkan ranking/urutan aplikasi di Playstore/Appstore menjadi yang tertinggi</p>
                </div>
            </div>
            <div class="media pt-3">
                <span class="icon icon-xs icon-soft-indigo icon-circle mr-3">
                    <i class="fas fa-check"></i>
                </span>
                <div class="media-body">
                    <p class="text-dark mb-0">Meningkatkan branding dari aplikasi yang dibangun</p>
                </div>
            </div>
            <!-- End Info -->
        </div>

        <div class="col-lg-6">
            <!-- Card Block -->
            <div class="pl-lg-4">
                <div class="card shadow-none bg-soft-primary text-indigo text-center w-lg-100 overflow-hidden pt-9 px-5">
                    <div class="px-5 mb-5">
                        <h3>Investasi 1x untuk bangun value aplikasi di Playstore/Appstore</h3>
                    </div>

                    <!--
           <div class="w-75 mx-auto">
            <img src="https://gosocial.co.id/assets/svg/service/sme/profile-google.svg" alt="Image Description">
          </div> -->
                    <!-- Device Mockup -->
                    <div class="device device-half-iphone-x w-85 mx-auto">
                        <img class="device-half-iphone-x-frame" src="https://gosocial.co.id/assets/svg/components/half-iphone-x.svg" alt="Iphone Apps">
                        <img class="device-half-iphone-x-screen" src="https://gosocial.co.id/assets/img/service/sme/profile-google.webp" alt="Google My Business">
                    </div>
                    <!-- End Device Mockup -->
                </div>
            </div>
            <!-- End Card Block -->
        </div>
    </div>
</div>

<section class="flat-services">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title wow fadeInDown">
                    <h2 class="section-45px-montserrat margin-top-15">Langkah Order</h2>
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
                        <h3>Pilih Paket</h3>
                        <p>Pilih layanan sesuai dengan kebutuhan.</p>
                    </div>
                </div>
            </li>

            <li class="step-item">
                <div class="step-content-wrapper">
                    <span class="step-icon step-icon-soft-primary">2</span>
                    <div class="step-content">
                        <h3>Isi Data</h3>
                        <p>Masukkan URL tujuan pada form pemesanan.</p>
                    </div>
                </div>
            </li>

            <li class="step-item">
                <div class="step-content-wrapper">
                    <span class="step-icon step-icon-soft-primary">3</span>
                    <div class="step-content">
                        <h3>Bayar</h3>
                        <p>Checkout & bayar sesuai dengan invoice di email.</p>
                    </div>
                </div>
            </li>

            <li class="step-item">
                <div class="step-content-wrapper">
                    <span class="step-icon step-icon-soft-primary">4</span>
                    <div class="step-content">
                        <h3>Proses</h3>
                        <p>Proses akan di infokan melalui client area.</p>
                    </div>
                </div>
            </li>

            <li class="step-item">
                <div class="step-content-wrapper">
                    <span class="step-icon step-icon-soft-primary">5</span>
                    <div class="step-content">
                        <h3>Selesai</h3>
                        <p>Notifikasi akan dikirim ke email ketika selesai.</p>
                    </div>
                </div>
            </li>
        </ul>
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

<section class="flat-counter">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title wow fadeInDown">
                    <h2 class="section-45px-montserrat margin-top-15">Keunggulan Layanan SME</h2>
                    <p class="text-muted">Mulai dari peningkatan trust hingga meningkatkan ranking didalam algoritma konten untuk meningkatkan visibilitas secara organik.</p>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="60" data-smobile="60"
                    style="height:60px"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="counter-box themesflat-counter hover-up wow fadeInUp" data-wow-delay="0.1s">
                    <div class="icon-box">
                        <div class="icon-counter">
                            <span class="icon-guarantee1"></span>
                        </div>
                    </div>
                    <h3 class="section-20px-montserrat font-weight-600 line-height-35">Meningkatkan Trust & Visibilitas Akun</h3>
                    <p>Tambahan interaksi yang diberikan akan meningkatkan kredibilitas dan jangkauan konten secara organik.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="counter-box themesflat-counter hover-up wow fadeInUp" data-wow-delay="0.1s">
                    <div class="icon-box">
                        <div class="icon-counter">
                            <span class="icon-guarantee1"></span>
                        </div>
                    </div>
                    <h3 class="section-20px-montserrat font-weight-600 line-height-35">Cara Aman & Mudah Tambah Engagement</h3>
                    <p>Diproses dengan cara resmi yang legal & aman. Hanya membutuhkan URL/username saja (tanpa password).</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="counter-box themesflat-counter hover-up wow fadeInUp" data-wow-delay="0.1s">
                    <div class="icon-box">
                        <div class="icon-counter">
                            <span class="icon-guarantee1"></span>
                        </div>
                    </div>
                    <h3 class="section-20px-montserrat font-weight-600 line-height-35">Quality #1 For Business</h3>
                    <p>Layanan yang terjamin kualitasnya, karena kami mengembangkan teknologi dan akun sendiri yang menyerupai akun real/asli.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="counter-box themesflat-counter hover-up wow fadeInUp" data-wow-delay="0.1s">
                    <div class="icon-box">
                        <div class="icon-counter">
                            <span class="icon-guarantee1"></span>
                        </div>
                    </div>
                    <h3 class="section-20px-montserrat font-weight-600 line-height-35">Easy Order</h3>
                    <p>Dengan dukungan platform serba otomatis untuk melakukan order, pembayaran, tracking project, dan support secara mudah.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container space-1">
    <div class="w-lg-75 mt-3 mx-lg-auto">
        <div class="text-center mb-4">
            <span class="divider divider-text">Official Partners:</span>
        </div>

        <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8 col-12">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-3 col-4">
                        <div class="mx-3 client-image">
                            <img class="max-w-11rem max-w-md-13rem mx-auto client-default" src="https://gosocial.co.id/assets/img/home/ocbc_partner.png" alt="Partner OCBC NISP">
                            <img class="max-w-11rem max-w-md-13rem mx-auto client-hover" style="display: none;" src="https://gosocial.co.id/assets/img/home/ocbc_partner.png" alt="Partner OCBC">
                        </div>
                    </div>

                    <div class="col-lg-3 col-4">
                        <a class="mx-3 client-image" href="https://www.bhinneka.com/toko-gosocial-indonesia" target="_blank">
                            <img class="max-w-11rem max-w-md-13rem mx-auto client-default" src="https://gosocial.co.id/assets/img/home/bhinekka_partner.png" alt="Parnter Bhinneka.com">
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
</div>
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
