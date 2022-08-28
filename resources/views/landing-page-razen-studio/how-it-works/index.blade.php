@extends('landing-page-razen-studio.layouts.app')
@section('title', 'Razen Studio | How It Works')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/custom_style.css') }}">
    <link rel="stylesheet" href="https://gosocial.co.id/assets/vendor/dzsparallaxer/dzsparallaxer.css">
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
            <img src="{{ asset('olux/assets/images/mark-page/mark-icon-slide.png') }}" alt="images">
        </div>
        <div class="swiper-container mainslider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slider-st-1">
                    <div class="content-slider-left text-white">
                        <div class="d-flex">
                            <a class="section-16px-regular font-weight-500 mr-2 text-white text-decoration-none" href="{{ route('home') }}">Home </a>  <h4 class="section-16px-regular font-weight-500 text-white"> > Cara Kerja GoSocial</h4>
                        </div>
                        <h2 class="title-slider section-65px-montserrat text-white">We take care
                            all of your
                            digital marketing
                            problems!</h2>
                    </div>
                    <div class="content-slider-right">
                        <img src="{{ asset('olux/assets/images/image-slider/img-slider.jpg') }}" alt="images">
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
                    <h4 class="section-subtitle">HOW IT WORKS</h4>
                    <h2 class="section-45px-montserrat margin-top-15">Bagaimana kami membantu?</h2>
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
                        <h3>Industry-leading solution</h3>
                        <p>Kami akan memberikan saran dan strategi Digital Marketing sesuai target bisnis melalui data-driven strategy dan juga metode growth hack dengan teknologi terkini.</p>
                    </div>
                </div>
            </li>

            <li class="step-item">
                <div class="step-content-wrapper">
                    <span class="step-icon step-icon-soft-primary">2</span>
                    <div class="step-content">
                        <h3>Project Management</h3>
                        <p>Setelah itu kami akan mengelola tim yang berisikan talent & profesional terbaik di bidangnya untuk mengeksekusi strategi yang telah dibuat.</p>
                    </div>
                </div>
            </li>

            <li class="step-item">
                <div class="step-content-wrapper">
                    <span class="step-icon step-icon-soft-primary">3</span>
                    <div class="step-content">
                        <h3>Accelerate your business</h3>
                        <p>Segera setelah Digital Marketing bisnis Anda dikelola oleh tim kami, bisnis akan dengan mudah melipatgandakan penjualan, meluaskan jangkauan, dan berkembang.</p>
                    </div>
                </div>
            </li>
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
                        <h4 class="section-45px-montserrat margin-top-15 margin-bottom-20">Biaya & effort minimum serasa memiliki konsultan ahli dan tim in-house sendiri.</h4>
                    </div>
                    <p class="section-17px-regular margin-bottom-25">Di tahapan manapun bisnis Anda sekarang, mulai dari bisnis rumahan, perusahaan rintisan (startup), umkm, hingga perusahaan publik maupun multi nasional sekalipun pasti merekrut dan mengelola tim bukan hal yang mudah , serahkan semua pada ahlinya.</p>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div class="counter-box themesflat-counter hover-up wow fadeInUp" data-wow-delay="0.1s">
                            <div class="number-content h2"><span class="number"
                                    data-speed="2000" data-to="1000" data-inviewport="yes">1000</span>+</div>
                            <p>Bisnis telah mempercayakan berbagai urusan Digital Marketing kepada kami sejak tahun 2020.</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="counter-box themesflat-counter hover-up wow fadeInUp" data-wow-delay="0.1s">
                            <div class="number-content h2"><span class="number"
                                    data-speed="2000" data-to="20" data-inviewport="yes">20</span>+</div>
                            <p>Creative Agency, Digital Agency, Talent Agency, Production House, dsb telah bekerjasama dengan kami.</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="counter-box themesflat-counter hover-up wow fadeInUp" data-wow-delay="0.1s">
                            <div class="number-content h2"><span class="number"
                                    data-speed="2000" data-to="50" data-inviewport="yes">50</span>%</div>
                            <p>Lebih hemat anggaran, dibanding melakukan trial & error sendiri.</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="counter-box themesflat-counter hover-up wow fadeInUp" data-wow-delay="0.1s">
                            <div class="number-content h2"><span class="number"
                                    data-speed="2000" data-to="130" data-inviewport="yes">130</span>+</div>
                            <p>Freelancer profesional telah menjalin kerjasama dan siap mengerjakan project bersama kami.</p>
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
                    <h2 class="section-45px-montserrat margin-top-15">We Are Tech-Savvy & Data-Driven</h2>
                    <p class="section-17px-regular margin-bottom-25">Tim kami sudah ahli dan berpengalaman dengan teknologi serta berbagai tools Digital Marketing terkini yang dapat menunjang strategi berkelanjutan.</p>
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
                    <h3 class="text-white mb-1">Siap melakukan Digital Marketing?</h3>
                    <p class="text-white-70 mb-0">Kami akan dengan senang hati berdiskusi untuk menemukan solusi yang terbaik bagi bisnis Anda.</p>
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
                    <h4 class="section-subtitle">OUR SERVICES</h4>
                    <h2 class="section-45px-montserrat margin-top-15">Solusi lengkap untuk berbagai tahapan dan segmen bisnis!</h2>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="60" data-smobile="60"
                    style="height:60px"></div>
            </div>
        </div>
        <div class="row justify-content-lg-center align-items-md-center">
            <div class="col-md-5 mb-7 mb-md-0">
                <!-- Features -->
                <div class="media mb-4">
                    <span class="text-danger mr-3">
                        <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                        </svg>
                    </span>
                    <div class="media-body text-dark h2">
                        Digital Marketing Checkup
                    </div>
                </div>
                <div class="media mb-4">
                    <span class="text-danger mr-3">
                        <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                        </svg>
                    </span>
                    <div class="media-body text-dark h2">
                        Competitive Landscape Analysis
                    </div>
                </div>
                <div class="media mb-4">
                    <span class="text-danger mr-3">
                        <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                        </svg>
                    </span>
                    <div class="media-body text-dark h2">
                        Insight &amp; Recommendation
                    </div>
                </div>
                <div class="media mb-4">
                    <span class="text-danger mr-3">
                        <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                        </svg>
                    </span>
                    <div class="media-body text-dark h2">
                        Digital Strategy &amp; Planning
                    </div>
                </div>
                <div class="media mb-4">
                    <span class="text-danger mr-3">
                        <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                        </svg>
                    </span>
                    <div class="media-body text-dark h2">
                        Content Production
                    </div>
                </div>
                <div class="media mb-4">
                    <span class="text-danger mr-3">
                        <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                        </svg>
                    </span>
                    <div class="media-body text-dark h2">
                        Digital Platform Handling
                    </div>
                </div>
                <div class="media mb-4">
                    <span class="text-danger mr-3">
                        <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                        </svg>
                    </span>
                    <div class="media-body text-dark h2">
                        Weekly or Monthly Report
                    </div>
                </div>
                <!-- End Features -->
            </div>

            <div class="col-md-7 col-lg-5">
                <div class="position-relative">
                    <!-- Card -->
                    <div class="card">
                        <div class="card-body">
                            <figure class="mb-4">
                                <img src="https://gosocial.co.id/assets/svg/icons/icon-14.svg" alt="SVG" style="height: 10rem; width:auto;">
                            </figure>
                            <h1>Mulai dari konsultasi, perencanaan hingga eksekusi!</h1>
                            <p>Kami telah mengumpulkan berbagai ahli di bidangnya untuk mengatasi semua permasalahan dan tantangan dalam melakukan digital marketing.</p>
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
<script src="https://gosocial.co.id/assets/js/theme.min.js"></script>
@endsection
