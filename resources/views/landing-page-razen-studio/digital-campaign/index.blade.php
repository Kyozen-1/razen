@extends('landing-page-razen-studio.layouts.app')
@section('title', 'Razen Studio | Digital Campaign')

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
                <h2 class="section-title-page text-white">Jasa Iklan Online</h2>
                <p class="mb-5">Solusi iklan online / digital campaign / advertising dengan digital agency yang terpercaya dan sudah berpengalaman membuat campaign yang sukses.</p>
                <ul class="breadcrumbs-inner list-center display-flex">
                    <li><a class="section-16px-regular font-weight-500" href="{{ route('home') }}">Home</a></li>
                    <li>
                        <h4 class="section-16px-regular font-weight-500 text-white">Jasa Iklan Online</h4>
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
                        <h4 class="section-45px-montserrat margin-top-15 margin-bottom-20">Tingkatkan pembeli dan branding bisnis dengan iklan online yang efektif!</h4>
                    </div>
                    <p class="section-17px-regular margin-bottom-25">Iklan Online atau Digital Advertising merupakan salah satu digital marketing yang harus dilakukan oleh bisnis untuk meningkatkan brand awareness, sales. Tanpa ada orang yang mengetahui sebagus apapun produk / layanan maka tidak akan terjadi pembelian.</p>
                    <ul>
                        <li><p>1. Digital ads dapat menjangkau orang-orang pada waktu yang tepat saat mereka menginginkan apa yang Anda tawarkan.</p></li>
                        <li><p>2. Jasa Iklan Online dari GoSocial akan membantu segala hal terkait teknis maupun strategi iklan anda di berbagai media digital saat ini.</p></li>
                        <li><p>3. Dengan digital ads budget yang dikeluarkan dapat di track dengan detail yang dapat menghasilkan strategi iklan yang efektif dan efisien.</p></li>
                    </ul>
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

<section class="flat-counter">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="counter-box themesflat-counter hover-up wow fadeInUp" data-wow-delay="0.1s">
                    <div class="icon-box">
                        <div class="icon-counter">
                            <span class="icon-guarantee1"></span>
                        </div>
                    </div>
                    <h3 class="section-20px-montserrat font-weight-600 line-height-35">Jangkauan Tertarget</h3>
                    <p>Dengan iklan digital, Anda dapat menentukan siapa target / orang yang akan melihat iklan nantinya seperti lokasi, gender, hobi, preferensi, dsb.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="counter-box themesflat-counter hover-up wow fadeInUp" data-wow-delay="0.4s">
                    <div class="icon-box">
                        <div class="icon-counter">
                            <span class="icon-support1"></span>
                        </div>
                    </div>
                    <h3 class="section-20px-montserrat font-weight-600 line-height-35">Measurable & Lebih Efisien</h3>
                    <p>Iklan digital terbukti jauh lebih murah ketimbang iklan konvensional seperti iklan surat kabar, TV, spanduk dsb karena dapat diukur keberhasilannya.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="counter-box themesflat-counter1 hover-up wow fadeInUp" data-wow-delay="0.8s">
                    <div class="icon-box">
                        <div class="icon-counter">
                            <span class="icon-support1"></span>
                        </div>
                    </div>
                    <h3 class="section-20px-montserrat font-weight-600 line-height-35">Menjangkau Tanpa Batas</h3>
                    <p>Iklan online tidak mengenal batasan geografis. Melalui iklan digital bisnis dapat melebarkan sayap pemasarannya ke seluruh Indonesia bahkan dunia.</p>
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
                                <span class="h2">Apa saja yang dibutuhkan untuk memulai sebuah iklan di media sosial?</span>

                                <span class="card-btn-toggle">
                                    <span class="h4 card-btn-toggle-default">+</span>
                                    <span class="h4 card-btn-toggle-active">−</span>
                                </span>
                            </a>
                        </div>
                        <div id="basicsCollapseOne" class="collapse" aria-labelledby="basicsHeadingOne" data-parent="#basicsAccordion-left" style="">
                            <div class="card-body px-0 m-3">
                                <p>Tenang, GoSocial akan membantu semua dalam menyiapkan aset iklan, mulai dari setup akun, integrasi, dll</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Card -->

                    <!-- Card -->
                    <div class="card shadow-none mb-3">
                        <div class="card-header card-collapse" id="basicsHeadingTwo">
                            <a class="btn btn-link btn-block d-flex justify-content-between card-btn collapsed text-decoration-none text-left px-0 text-left" href="javascript:;" role="button" data-toggle="collapse" data-target="#basicsCollapseTwo" aria-expanded="false" aria-controls="basicsCollapseTwo">
                                <span class="h2">Apakah desain dan konten iklan akan disediakan GoSocial?</span>

                                <span class="card-btn-toggle">
                                    <span class="h4 card-btn-toggle-default">+</span>
                                    <span class="h4 card-btn-toggle-active">−</span>
                                </span>
                            </a>
                        </div>
                        <div id="basicsCollapseTwo" class="collapse" aria-labelledby="basicsHeadingTwo" data-parent="#basicsAccordion-left">
                            <div class="card-body px-0 m-3">
                                <p>Aset iklan, strategi, hingga konten iklan akan disediakan oleh tim GoSocial. Tentunya untuk menyediakan hal tersebut kami membutuhkan data dan dokumen product knowledge dari bisnis Anda.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Card -->

                    <!-- Card -->
                    <div class="card shadow-none mb-3">
                        <div class="card-header card-collapse" id="basicsHeadingThree">
                            <a class="btn btn-link btn-block d-flex justify-content-between card-btn collapsed text-decoration-none text-left px-0" href="javascript:;" role="button" data-toggle="collapse" data-target="#basicsCollapseThree" aria-expanded="false" aria-controls="basicsCollapseThree">
                                <span class="h2">Bagaimana bentuk support dan komunikasi dengan tim GoSocial?</span>

                                <span class="card-btn-toggle">
                                    <span class="h4 card-btn-toggle-default">+</span>
                                    <span class="h4 card-btn-toggle-active">−</span>
                                </span>
                            </a>
                        </div>
                        <div id="basicsCollapseThree" class="collapse" aria-labelledby="basicsHeadingThree" data-parent="#basicsAccordion-left">
                            <div class="card-body px-0 m-3">
                                <p>GoSocial melalui AM kami akan membuat grup untuk komunikasi dengan klien. Support dan komunikasi dapat dilakukan via chat hingga online meeting</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Card -->

                    <!-- Card -->
                    <div class="card shadow-none mb-3">
                        <div class="card-header card-collapse" id="basicsHeadingFour">
                            <a class="btn btn-link btn-block d-flex justify-content-between card-btn collapsed text-decoration-none text-left px-0" href="javascript:;" role="button" data-toggle="collapse" data-target="#basicsCollapseFour" aria-expanded="false" aria-controls="basicsCollapseFour">
                                <span class="h2">Akun saya sering ke-banned, bagaimana solusinya?</span>
                                <span class="card-btn-toggle">
                                    <span class="card-btn-toggle-default h4">+</span>
                                    <span class="card-btn-toggle-active h4">−</span>
                                </span>
                            </a>
                        </div>
                        <div id="basicsCollapseFour" class="collapse" aria-labelledby="basicsHeadingFour" data-parent="#basicsAccordion-left">
                            <div class="card-body px-0 m-3">
                                <p>Tenang, GoSocial bisa menyediakan semua aset iklan termasuk akun iklan. Akun tersebut akan kami pastikan bisa digunkan untuk beriklan dan sesuai dengan ketentuan dari platform iklan</p>
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
<script src="https://gosocial.co.id/assets/vendor/hs-quantity-counter/dist/hs-quantity-counter.min.js"></script>
<script src="https://gosocial.co.id/assets/vendor/slick-carousel/slick/slick.js"></script>
<script src="https://gosocial.co.id/assets/vendor/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
<script src="https://gosocial.co.id/assets/vendor/hs-toggle-switch/dist/hs-toggle-switch.min.js"></script>
<script src="https://gosocial.co.id/assets/vendor/hs-switch/dist/hs-switch-text.min.js"></script>
<script src="https://gosocial.co.id/assets/vendor/@fancyapps/fancybox/dist/jquery.fancybox.min.js"></script>
@endsection
