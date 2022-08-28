@extends('landing-page-razen-studio.layouts.app')
@section('title', 'Razen Studio - Your Trusted Branding Design Studio')

@section('css')
<link rel="stylesheet" href="https://gosocial.co.id/assets/vendor/cubeportfolio/css/cubeportfolio.min.css">
<link rel="stylesheet" href="https://gosocial.co.id/assets/vendor/hs-mega-menu/dist/hs-mega-menu.min.css">
<link rel="stylesheet" href="https://gosocial.co.id/assets/vendor/dzsparallaxer/dzsparallaxer.css">
<link rel="stylesheet" href="https://gosocial.co.id/assets/vendor/aos/dist/aos.css">
<link rel="stylesheet" href="https://gosocial.co.id/assets/css/pages/global.css?v.0908">
<link rel="stylesheet" href="https://gosocial.co.id/assets/css/theme.min.css">
@endsection

@section('content')
    <div class="flat-slider container-fuild">
        <div class="row">
            <div class="widget-social-header">
                <div class="container-fluid">
                    <ul class="widget-social-footer-item text-center">
                        <li><a href="#">Fb.</a></li>
                        <li><a href="#">Be.</a></li>
                        <li><a href="#">Tw.</a></li>
                        <li><a href="#">In.</a></li>
                    </ul>
                </div>
            </div>
            <div class="mark-slide">
                <img src="{{ asset('olux/assets/images/mark-page/mark-icon-slide') }}.png" alt="images">
            </div>
            <div class="swiper-container mainslider">
                <div class="swiper-wrapper">
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
                <div class="col-md-4">
                    <div class="counter-box themesflat-counter hover-up wow fadeInUp" data-wow-delay="0.1s">
                        <div class="icon-box">
                            <div class="icon-counter">
                                <span class="icon-guarantee1"></span>
                            </div>
                            <div class="content-icon">
                                <h3 class="section-20px-montserrat font-weight-600 line-height-35">Strategy Planning & Execution</h3>
                            </div>
                        </div>
                        <div class="number-content section-65px-montserrat">
                            <img src="{{ asset('images/landing-page-utama-icon/6230656.jpg') }}" class="img-responsive">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="counter-box themesflat-counter hover-up wow fadeInUp" data-wow-delay="0.4s">
                        <div class="icon-box">
                            <div class="icon-counter">
                                <span class="icon-support1"></span>
                            </div>
                            <div class="content-icon">
                                <h3 class="section-20px-montserrat font-weight-600 line-height-35">Digital Platform Handling</h3>
                            </div>
                        </div>
                        <div class="number-content section-65px-montserrat">
                            <img src="{{ asset('images/landing-page-utama-icon/6230656.jpg') }}" class="img-responsive">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="counter-box themesflat-counter1 hover-up wow fadeInUp" data-wow-delay="0.8s">
                        <div class="icon-box">
                            <div class="icon-counter">
                                <span class="icon-guarantee"></span>
                            </div>
                            <div class="content-icon">
                                <h3 class="section-20px-montserrat font-weight-600 line-height-35">Set & Achive Goals Together</h3>
                            </div>
                        </div>
                        <div class="number-content section-65px-montserrat">
                            <img src="{{ asset('images/landing-page-utama-icon/6230656.jpg') }}" class="img-responsive">
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
                <div class="col-md-6">
                    <div class="about-content-right wow fadeInUp" data-wow-delay="0ms"
                        data-wow-duration="1500ms">
                        <div class="section-title">
                            <h4 class="section-subtitle">About Us</h4>
                            <h2 class="section-45px-montserrat margin-top-15 margin-bottom-20">All-in-one Creative &
                                Digital Agency Hub</h2>
                        </div>
                    </div>
                    <div class="about-client-content-box wow fadeInRight">
                        <div class="swiper-container mainslider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="client-box">
                                        <h3 class="content-client font-weight-400 margin-bottom-30">Kami menghadirkan layanan terbaik bersama dengan berbagai profesional terbaik dibidangnya! freelancer, digital agency, creative agency, production house, software house, dll.</h3>
                                        <div class="client-info">
                                            <div class="client-info-inner link-style-5">
                                                <h3 class="section-16px-regular font-weight-700">Collaborative Partnership</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="client-box">
                                        <h3 class="content-client font-weight-400 margin-bottom-30">Tidak hanya menyediakan solusi strategi & layanan, kami terus melakukan riset dan inovasi terhadap perkembangan teknologi serta mengembangkan teknologi sendiri untuk menunjang hal tersebut.</h3>
                                        <div class="client-info">
                                            <div class="client-info-inner link-style-5">
                                                <h3 class="section-16px-regular font-weight-700">Industry-leading Consultant</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                        <h4 class="section-subtitle">What we do</h4>
                        <h2 class="section-45px-montserrat margin-top-15">Jasa Digital Marketing</h2>
                        <p class="text-muted">Layanan terlengkap dan terbaik untuk segala kebutuhan bisnis dalam melakukan Digital Marketing.</p>
                    </div>
                    <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="60" data-smobile="60"
                        style="height:60px"></div>
                </div>
                <div class="col-md-4">
                    <div class="services-box active">
                        <div class="wraper-effect active"></div>
                        <span class="icon-services icon-development1 font-size-icon active"></span>
                        <div class="services-content">
                            <a href="service-single.html" class="section-22px-montserrat">Social Media Engagement</a>
                            <p class="services-desc">Meningkatkan interaksi dan kredibilitas brand secara digital di Social Media, Marketplace, dll.</p>
                            <a href="service-single.html" class="read-more"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="services-box active">
                        <div class="wraper-effect active"></div>
                        <span class="icon-services icon-branding1 font-size-icon active"></span>
                        <div class="services-content">
                            <a href="service-single.html" class="section-22px-montserrat">Branding Design</a>
                            <p class="services-desc">Pembuatan desain grafis visual meliputi Logo, Packaging, Stationery hingga konten Social Media, Website dsb.</p>
                            <a href="service-single.html" class="read-more"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="services-box active">
                        <div class="wraper-effect active"></div>
                        <span class="icon-services icon-advertising1 font-size-icon active"></span>
                        <div class="services-content">
                            <a href="service-single.html" class="section-22px-montserrat"> Video Production</a>
                            <p class="services-desc">
                                Pembuatan video animasi, promosi, company profile hingga konten Social Media (Tiktok, IG Reels & Youtube).</p>
                            <a href="service-single.html" class="read-more"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="services-box active">
                        <div class="wraper-effect active"></div>
                        <span class="icon-services icon-webpage1 font-size-icon active"></span>
                        <div class="services-content">
                            <a href="service-single.html" class="section-22px-montserrat">Commercial Photography</a>
                            <p class="services-desc">Pembuatan foto produk komersial untuk katalog & konten branding secara digital.</p>
                            <a href="service-single.html" class="read-more"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="services-box active">
                        <div class="wraper-effect active"></div>
                        <span class="icon-services icon-development1 font-size-icon active"></span>
                        <div class="services-content">
                            <a href="service-single.html" class="section-22px-montserrat">Digital Campaign</a>
                            <p class="services-desc">Pembuatan dan manajemen strategi iklan digital meliputi Social Media Ads dan Search Engine Marketing (SEM).</p>
                            <a href="service-single.html" class="read-more"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="services-box active">
                        <div class="wraper-effect active"></div>
                        <span class="icon-services icon-advertising1 font-size-icon active"></span>
                        <div class="services-content">
                            <a href="service-single.html" class="section-22px-montserrat"> Social Media Management</a>
                            <p class="services-desc">
                                Pengelolaan dan manajemen akun Social Media menggunakan data-driven strategy.</p>
                            <a href="service-single.html" class="read-more"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="services-box active">
                        <div class="wraper-effect active"></div>
                        <span class="icon-services icon-web-programming1 font-size-icon active"></span>
                        <div class="services-content">
                            <a href="service-single.html" class="section-22px-montserrat">Web Development</a>
                            <p class="services-desc">Fusce consectetur erat id enim elementum
                                tincidunt. Vestibulum accumsan elementum leo, et viverra justo ultricies ac.</p>
                            <a href="service-single.html" class="read-more"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="services-box active">
                        <div class="wraper-effect active"></div>
                        <span class="icon-services icon-development1 font-size-icon active"></span>
                        <div class="services-content">
                            <a href="service-single.html" class="section-22px-montserrat">Search Engine Optimization</a>
                            <p class="services-desc">Optimasi website untuk meningkatkan traffic organik di Search Engine.</p>
                            <a href="service-single.html" class="read-more"></a>
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
                        <h2 class="section-45px-montserrat margin-top-15">Mengapa Harus Razen Studio?</h2>
                        <p class="text-muted">GoSocial merupakan satu-satunya Konsultan Digital Marketing sekaligus Agency pertama yang berbasis Hub dalam menyediakan layanan.</p>
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
                <h2>Portofolio</h2>
                <p>Beberapa contoh hasil pekerjaan yang telah kami lakukan sebelumnya.</p>
            </div>
        </div>
    </div>

    <section class="flat-client">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="client-content-box wow fadeInUp">
                        <h4 class="section-title section-45px-montserrat">Relied On By Brand, Trusted By Personal, And Loved By Small-Medium Enterprise, Everywhere!</h4>
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
@endsection
