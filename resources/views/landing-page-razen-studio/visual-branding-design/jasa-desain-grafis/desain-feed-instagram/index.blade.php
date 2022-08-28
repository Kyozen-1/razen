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
                <h1 class="section-title-page text-white">Jasa Desain Feed Instagram</h1>
                <p class="mb-5">Layanan jasa desain konten atau feed Instagram berkualitas dan dikerjakan oleh tim yang profesional.</p>
                <ul class="breadcrumbs-inner list-center display-flex">
                    <li><a class="section-16px-regular font-weight-500" href="{{ route('home') }}">Home</a></li>
                    <li><a class="section-16px-regular font-weight-500" href="{{ route('visual-branding-design') }}">Visual Branding & Design</a></li>
                    <li><a class="section-16px-regular font-weight-500" href="{{ route('visual-branding-design.jasa-desain-grafis.index') }}">Jasa Desain Grafis</a></li>
                    <li>
                        <h4 class="section-16px-regular font-weight-500 text-white">JJasa Desain Feed Instagram</h4>
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
                        <h4 class="section-subtitle">TINGKATKAN KUALITAS SOCIAL MEDIA BISNISMU</h4>
                        <h4 class="section-45px-montserrat margin-top-15 margin-bottom-20">Desain Konten Instagram</h4>
                    </div>
                    <p class="section-17px-regular margin-bottom-25">
                        Dengan memiliki Feed Instagram yang profesional dapat membantu bisnis untuk lebih dipercaya dan menunjang promosi melalui Sosial Media.
                        <br>
                        Kami dapat membantu dalam membuat feed sosial media terlihat profesional, Pembuatan konten sosial media yang berkualitas akan membantu menguatkan brand engagement.
                        <br>
                        Mulai branding bisnis anda dengan membuat feed sosial media profesional bersama tim berpengalaman dan profesional di GoSocial.
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
                        <h4 class="section-45px-montserrat margin-top-15 margin-bottom-20">Jasa Desain Feed Instagram</h4>
                    </div>
                    <p class="section-17px-regular margin-bottom-25">
                        Instagram Feed atau tampilan halaman Instagram merupakan personality sebuah brand karena keseluruhan feed adalah visualisasi pertama dari suatu brand / seseorang di mata audiens dan sangat berarti.
                        <br> <br>
                        Karena itu, Instagram Feed harus dibangun dengan strategi yang lebih mendalam dan desain visual yang menarik agar audience terus membuka akun Anda.
                        <br><br>
                        Hal ini tentu sulit bagi orang yang awam dengan Social Media maupun Desain Grafis. Oleh sebab itu layanan kami hadir membantu mengatasi hal tersebut.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="flat-services">
    <div class="container space-1 space-bottom-2">
        <div class="w-lg-85 mx-lg-auto">
            <div class="card bg-danger text-white overflow-hidden p-5">
                <div class="row justify-content-md-start align-items-md-center text-center text-md-left">
                    <div class="col-md-6 offset-md-3 mb-3 mb-md-0">
                        <h3 class="text-white font-size-2 mb-1">Layanan Lain untuk Branding &amp; Design</h3>
                        <p class="text-white-70 font-size-2 mb-0">Dapatkan layanan berbagai Jasa Visual Branding &amp; Design lainnya hanya
                            di GoSocial.</p>
                    </div>
                    <div class="col-md-3 text-md-right">
                        <a class="btn btn-light transition-3d-hover font-size-2" href="{{ route('visual-branding-design') }}">Lihat
                            Paket</a>
                    </div>
                </div>

                <!-- SVG Component -->
                <figure class="w-25 d-none d-md-block content-centered-y ml-n4">
                    <img class="img-fluid" src="https://gosocial.co.id/assets/svg/service/desain/lainnya.svg" alt="Jasa Desain Grafis Lainnya">
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
                    <h4 class="section-subtitle">THE PRODUCTION PROCESS</h4>
                    <h2 class="section-45px-montserrat margin-top-15">Desain Feed Instagram</h2>
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
                        <h3>Design Consultation</h3>
                        <p>Tentukan paket yang sesuai dengan kebutuhan desain dari bisnis.</p>
                    </div>
                </div>
            </li>

            <li class="step-item">
                <div class="step-content-wrapper">
                    <span class="step-icon step-icon-soft-primary">2</span>
                    <div class="step-content">
                        <h3>Filling Creative Brief</h3>
                        <p>Jelaskan keinginan desain kepada tim melalui brief agar hasil maksimal.</p>
                    </div>
                </div>
            </li>

            <li class="step-item">
                <div class="step-content-wrapper">
                    <span class="step-icon step-icon-soft-primary">3</span>
                    <div class="step-content">
                        <h3>Concept & Design Creation</h3>
                        <p>Tim akan mulai membuat konsep visual desain secara profesional.</p>
                    </div>
                </div>
            </li>

            <li class="step-item">
                <div class="step-content-wrapper">
                    <span class="step-icon step-icon-soft-primary">4</span>
                    <div class="step-content">
                        <h3>Share Your Feedback</h3>
                        <p>Berikan masukkan, perbaikan/revisi terhadap hasil desain.</p>
                    </div>
                </div>
            </li>

            <li class="step-item">
                <div class="step-content-wrapper">
                    <span class="step-icon step-icon-soft-primary">5</span>
                    <div class="step-content">
                        <h3>Finalize Your Design</h3>
                        <p>Dapatkan hasil desain grafis yang terbaik bersama kami.</p>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</section>

<section class="flat-services">
    <div class="container space-2 space-top-lg-3">
        <div class="container pb-4">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title wow fadeInDown">
                        <h4 class="section-subtitle">PAKET & HARGA</h4>
                        <h2 class="section-45px-montserrat margin-top-15">Feed Konten Instagram</h2>
                    </div>
                    <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="60" data-smobile="60"
                        style="height:60px"></div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6 col-lg-4 mb-5">
                    <!-- Pricing -->
                    <div class="card shadow-lg h-100">
                        <!-- Header -->
                        <div class="card-header border-0 text-center mt-2">
                            <span class="d-block h2 mb-0">Starter Plan</span>
                        </div>
                        <!-- End Header -->

                        <!-- Body -->
                        <div class="card-body">
                            <div class="mb-3 text-center">
                                <span class="h3 font-size-3 text-primary">Rp. <span class="h1 font-size-4 text-primary">550</span>.000</span>
                            </div>
                            <div class="media font-size-1 text-body mb-3 mt-5">
                                <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success mt-1 mr-2">
                                        <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                                    </svg>
                                <div class="media-body font-size-2">
                                    10 Desain Post
                                </div>
                            </div>
                            <div class="media font-size-1 text-body mb-3">
                                <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success mt-1 mr-2">
                                        <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                                    </svg>
                                <div class="media-body font-size-2">
                                    5 Desain Story
                                </div>
                            </div>
                            <div class="media font-size-1 text-body mb-3">
                                <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger mt-1 mb-2">
                                        <path fill="currentColor" d="M12,2C17.53,2 22,6.47 22,12C22,17.53 17.53,22 12,22C6.47,22 2,17.53 2,12C2,6.47 6.47,2 12,2M15.59,7L12,10.59L8.41,7L7,8.41L10.59,12L7,15.59L8.41,17L12,13.41L15.59,17L17,15.59L13.41,12L17,8.41L15.59,7Z" />
                                    </svg>
                                <div class="media-body font-size-2">
                                    Desain Icon Highlight
                                </div>
                            </div>
                            <div class="media font-size-1 text-body mb-3">
                                <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success mt-1 mr-2">
                                        <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                                    </svg>
                                <div class="media-body font-size-2">
                                    Revisi Minor 3x
                                </div>
                            </div>
                            <div class="media font-size-1 text-body mb-3">
                                <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success mt-1 mr-2">
                                        <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                                    </svg>
                                <div class="media-body font-size-2">
                                    Export JPG / PNG
                                </div>
                            </div>
                            <div class="media font-size-1 text-body mb-3">
                                <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger mt-1 mr-2">
                                    <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                                </svg>
                                <div class="media-body font-size-2">
                                    Source File
                                </div>
                            </div>
                            <div class="media font-size-1 text-body mb-3">
                                <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success mt-1 mr-2">
                                        <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                                    </svg>
                                <div class="media-body font-size-2">
                                    Brief konten dari klien
                                </div>
                            </div>
                            <div class="media font-size-1 text-body mb-3">
                                <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success mt-1 mr-2">
                                        <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                                    </svg>
                                <div class="media-body font-size-2">
                                    Maksimal Request 7 hari sejak pembayaran dilakukan
                                </div>
                            </div>
                        </div>
                        <!-- End Body -->

                        <div class="card-footer border-0">
                            <a href="https://api.whatsapp.com/send?phone=6281234566636&amp;text=Halo%20GoSocial%21%0D%0ASaya%20ingin%20memesan%20layanan%20Feed%20Konten%20Sosial%20Media%20-%20Starter%20Plan%20-%20Rp.%20550.000" target="_blank" type="button" class="btn btn-soft-primary btn-block transition-3d-hover font-size-2">Order Sekarang</a>
                        </div>
                    </div>
                    <!-- End Pricing -->
                </div>

                <div class="col-sm-6 col-lg-4 mb-5">
                    <!-- Pricing -->
                    <div class="position-relative">
                        <div class="card shadow-lg h-100">
                            <!-- Header -->
                            <div class="card-header border-0 text-center mt-2">
                                <span class="d-block h3 mb-0">Standard Plan</span>
                            </div>
                            <!-- End Header -->

                            <!-- Body -->
                            <div class="card-body">
                                <div class="mb-3 text-center">
                                    <span class="h3 font-size-3 text-primary">Rp. <span class="h1 font-size-4 text-primary">850</span>.000</span>
                                </div>
                            <div class="media font-size-1 text-body mb-3 mt-5">
                                <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success mt-1 mr-2">
                                        <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                                    </svg>
                                <div class="media-body font-size-2">
                                    20 Desain Post
                                </div>
                            </div>
                            <div class="media font-size-1 text-body mb-3">
                                <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success mt-1 mr-2">
                                        <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                                    </svg>
                                <div class="media-body font-size-2">
                                    10 Desain Story
                                </div>
                            </div>
                            <div class="media font-size-1 text-body mb-3">
                                <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success mt-1 mb-2">
                                    <path fill="currentColor" d="M12,2C17.53,2 22,6.47 22,12C22,17.53 17.53,22 12,22C6.47,22 2,17.53 2,12C2,6.47 6.47,2 12,2M15.59,7L12,10.59L8.41,7L7,8.41L10.59,12L7,15.59L8.41,17L12,13.41L15.59,17L17,15.59L13.41,12L17,8.41L15.59,7Z" />
                                </svg>
                                <div class="media-body font-size-2">
                                    Desain Icon Highlight (maksimal 3)
                                </div>
                            </div>
                            <div class="media font-size-1 text-body mb-3">
                                <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success mt-1 mr-2">
                                        <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                                    </svg>
                                <div class="media-body font-size-2">
                                    Revisi Minor 3x
                                </div>
                            </div>
                            <div class="media font-size-1 text-body mb-3">
                                <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success mt-1 mr-2">
                                        <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                                    </svg>
                                <div class="media-body font-size-2">
                                    Export JPG / PNG
                                </div>
                            </div>
                            <div class="media font-size-1 text-body mb-3">
                                <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger mt-1 mr-2">
                                    <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                                </svg>
                                <div class="media-body font-size-2">
                                    Source File
                                </div>
                            </div>
                            <div class="media font-size-1 text-body mb-3">
                                <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success mt-1 mr-2">
                                        <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                                    </svg>
                                <div class="media-body font-size-2">
                                    Brief konten dari klien
                                </div>
                            </div>
                            <div class="media font-size-1 text-body mb-3">
                                <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success mt-1 mr-2">
                                        <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                                    </svg>
                                <div class="media-body font-size-2">
                                    Maksimal Request 14 hari sejak pembayaran dilakukan
                                </div>
                            </div>
                            </div>
                            <!-- End Body -->

                            <div class="card-footer border-0">
                                <a href="https://api.whatsapp.com/send?phone=6281234566636&amp;text=Halo%20GoSocial%21%0D%0ASaya%20ingin%20memesan%20layanan%20Feed%20Konten%20Sosial%20Media%20-%20Standard%20%20Plan%20-%20Rp.%20850.000" target="_blank" type="button" class="btn btn-soft-primary btn-block transition-3d-hover font-size-2">Order Sekarang</a>
                            </div>
                        </div>

                        <!-- SVG Elements -->
                        <figure class="max-w-15rem w-100 position-absolute top-0 right-0 z-index-n1">
                            <div class="mt-n7 mr-lg-n7">
                                <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 260 260" xml:space="preserve">
                                    <circle fill="#ffc107" cx="130" cy="130" r="130"></circle>
                                </svg>
                            </div>
                        </figure>
                        <!-- End SVG Elements -->
                    </div>
                    <!-- End Pricing -->
                </div>

                <div class="col-sm-6 col-lg-4 mb-5">
                    <!-- Pricing -->
                    <div class="card shadow-lg h-100">
                        <!-- Header -->
                        <div class="card-header border-0 text-center mt-2">
                            <span class="d-block h2 mb-0">Custom Plan</span>
                        </div>
                        <!-- End Header -->

                        <!-- Body -->
                        <div class="card-body">
                            <div class="mb-3 text-center">
                                <span class="h4 text-primary"><span class="h2 text-primary">Custom</span></span>
                            </div>
                            <div class="media font-size-1 text-body mb-3 mt-5">
                                <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success mt-1 mr-2">
                                        <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                                    </svg>
                                <div class="media-body font-size-2">
                                    Custom Desain Post
                                </div>
                            </div>
                            <div class="media font-size-1 text-body mb-3">
                                <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success mt-1 mr-2">
                                        <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                                    </svg>
                                <div class="media-body font-size-2">
                                    Custom Desain Story
                                </div>
                            </div>
                            <div class="media font-size-1 text-body mb-3">
                                <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger mt-1 mb-2">
                                        <path fill="currentColor" d="M12,2C17.53,2 22,6.47 22,12C22,17.53 17.53,22 12,22C6.47,22 2,17.53 2,12C2,6.47 6.47,2 12,2M15.59,7L12,10.59L8.41,7L7,8.41L10.59,12L7,15.59L8.41,17L12,13.41L15.59,17L17,15.59L13.41,12L17,8.41L15.59,7Z" />
                                    </svg>
                                <div class="media-body font-size-2">
                                    Desain Icon Highlight
                                </div>
                            </div>
                            <div class="media font-size-1 text-body mb-3">
                                <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success mt-1 mr-2">
                                        <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                                    </svg>
                                <div class="media-body font-size-2">
                                    Revisi Minor 3x
                                </div>
                            </div>
                            <div class="media font-size-1 text-body mb-3">
                                <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success mt-1 mr-2">
                                        <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                                    </svg>
                                <div class="media-body font-size-2">
                                    Export JPG / PNG
                                </div>
                            </div>
                            <div class="media font-size-1 text-body mb-3">
                                <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success mt-1 mr-2">
                                        <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                                    </svg>
                                <div class="media-body font-size-2">
                                    Source File
                                </div>
                            </div>
                            <div class="media font-size-1 text-body mb-3">
                                <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success mt-1 mr-2">
                                        <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                                    </svg>
                                <div class="media-body font-size-2">
                                    Brief konten dari klien
                                </div>
                            </div>
                            <div class="media font-size-1 text-body mb-3">
                                <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success mt-1 mr-2">
                                        <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                                    </svg>
                                <div class="media-body font-size-2">
                                    Maksimal Request 14 hari sejak pembayaran dilakukan
                                </div>
                            </div>
                        </div>
                        <!-- End Body -->

                        <div class="card-footer border-0">
                            <a href="https://api.whatsapp.com/send?phone=6281234566636&amp;text=Halo%20GoSocial%21%0D%0ASaya%20ingin%20memesan%20layanan%20Feed%20Konten%20Sosial%20Media%20-%20Custom" target="_blank" type="button" class="btn btn-soft-primary btn-block transition-3d-hover font-size-2">Order Sekarang</a>
                        </div>
                    </div>
                    <!-- End Pricing -->

                    <!-- SVG Elements -->
                    <figure class="max-w-19rem w-100 position-absolute bottom-0 right-0 z-index-n1">
                        <div class="mb-n7 ml-lg-n7">
                            <img class="img-fluid" src="https://gosocial.co.id/assets/svg/components/dots-2.svg" alt="Image Description">
                        </div>
                    </figure>
                    <!-- End SVG Elements -->
                </div>
            </div>
        </div>
    </div>
</section>

<section class="flat-counter">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-12">
                <div class="section-title wow fadeInDown">
                    <h4 class="section-subtitle">MENGAPA HARUS KAMI??</h4>
                    <h2 class="section-main-title section-45px-montserrat">Keuntungan Jasa Desain dari GoSocial</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-5">
                <div class="counter-box themesflat-counter hover-up wow fadeInUp" data-wow-delay="0.1s">
                    <div class="icon-box">
                        <div class="icon-counter">
                            <span class="icon-guarantee1"></span>
                        </div>
                    </div>
                    <h3 class="section-20px-montserrat font-weight-600 line-height-35">Berbagai Alternatif Pilihan</h3>
                    <p>Dapatkan berbagai alternatif pilihan desain agar hasil akhir sesuai dengan brand & keinginan Anda.</p>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="counter-box themesflat-counter hover-up wow fadeInUp" data-wow-delay="0.1s">
                    <div class="icon-box">
                        <div class="icon-counter">
                            <span class="icon-guarantee1"></span>
                        </div>
                    </div>
                    <h3 class="section-20px-montserrat font-weight-600 line-height-35">Unique Design</h3>
                    <p>Hasil dijamin original & premium licensed, hak lisensi / copyrights sepenuhnya adalah milik klien.</p>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="counter-box themesflat-counter hover-up wow fadeInUp" data-wow-delay="0.1s">
                    <div class="icon-box">
                        <div class="icon-counter">
                            <span class="icon-guarantee1"></span>
                        </div>
                    </div>
                    <h3 class="section-20px-montserrat font-weight-600 line-height-35">Professional Designer</h3>
                    <p>Dikerjakan oleh desainer pilihan dari GoSocial, tidak perlu pusing mencari freelancer atau rekrut tim sendiri</p>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="counter-box themesflat-counter hover-up wow fadeInUp" data-wow-delay="0.1s">
                    <div class="icon-box">
                        <div class="icon-counter">
                            <span class="icon-guarantee1"></span>
                        </div>
                    </div>
                    <h3 class="section-20px-montserrat font-weight-600 line-height-35">1 Years Cloud Storage</h3>
                    <p>Takut hasil desain hilang? tenang, layanan kami sudah termasuk gratis penyimpanan file Anda selama 1 tahun.</p>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="counter-box themesflat-counter hover-up wow fadeInUp" data-wow-delay="0.1s">
                    <div class="icon-box">
                        <div class="icon-counter">
                            <span class="icon-guarantee1"></span>
                        </div>
                    </div>
                    <h3 class="section-20px-montserrat font-weight-600 line-height-35">Handcrafted Design Process</h3>
                    <p>Melalui standar proses desain profesional, kami akan mengerjakan desain sesuai identitas brand Anda.</p>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="counter-box themesflat-counter hover-up wow fadeInUp" data-wow-delay="0.1s">
                    <div class="icon-box">
                        <div class="icon-counter">
                            <span class="icon-guarantee1"></span>
                        </div>
                    </div>
                    <h3 class="section-20px-montserrat font-weight-600 line-height-35">Master File</h3>
                    <p>Dapatkan master files berupa .psd .ai .eps maupun font dan tone color yang digunakan dalam desain tersebut.</p>
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
                                <span class="font-size-2">Apa saja jenis desain yang dapat dikerjakan GoSocial?</span>

                                <span class="card-btn-toggle">
                                    <span class="font-size-2 card-btn-toggle-default">+</span>
                                    <span class="font-size-2 card-btn-toggle-active">−</span>
                                </span>
                            </a>
                        </div>
                        <div id="basicsCollapseOne" class="collapse" aria-labelledby="basicsHeadingOne" data-parent="#basicsAccordion-left" style="">
                            <div class="card-body px-0 m-3">
                                <p>
                                    Kami dapat membantu berbagai jenis kebutuhan desain grafis yang akan ditangani oleh tim desain yang profesional mulai dari:
                                    <br> <br>
                                    1. Kebutuhan Bisnis seperti pembuatan logo, brosur, logo / flyer / leaflet, dsb.
                                    <br>
                                    2. Stationery seperti kartu nama, kop surat, buku menu, dsb
                                    <br>
                                    3. Social Media seperti desain post / konten (infografis, peringatan, promo) untuk Instagram, Facebook, Youtube dsb.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Card -->

                    <!-- Card -->
                    <div class="card shadow-none mb-3">
                        <div class="card-header card-collapse" id="basicsHeadingTwo">
                            <a class="btn btn-link btn-block d-flex justify-content-between card-btn px-0 collapsed text-decoration-none" href="javascript:;" role="button" data-toggle="collapse" data-target="#basicsCollapseTwo" aria-expanded="false" aria-controls="basicsCollapseTwo">
                                <span class="font-size-2">Apa yang didapat pada paket bundling</span>

                                <span class="card-btn-toggle">
                                    <span class="font-size-2 card-btn-toggle-default">+</span>
                                    <span class="font-size-2 card-btn-toggle-active">−</span>
                                </span>
                            </a>
                        </div>
                        <div id="basicsCollapseTwo" class="collapse" aria-labelledby="basicsHeadingTwo" data-parent="#basicsAccordion-left" style="">
                            <div class="card-body px-0 m-3">
                                <p>
                                    Paket bundling adalah layanan terlengkap yang cocok untuk semua macam bisnis. Yang akan didapatkan pada paket ini adalah:
                                    <br> <br>
                                    1. Desain Logo
                                    <br>
                                    2. Desain Bebas = Anda bebas request desain yang dibutuhkan bisnis anda seperti (Brosur, logo, dsb)
                                    <br>
                                    3. Desain Sosmed = Pembuatan konten (infografis, perayaan, dsb) / post untuk Instagram & Facebook.
                                    <br>
                                    4. Grand Design Sosmed = Pembuatan grand desain konten (master file) yang dapat anda ubah sendiri sesuai kebutuhan.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Card -->

                    <!-- Card -->
                    <div class="card shadow-none mb-3">
                        <div class="card-header card-collapse" id="basicsHeadingThree">
                            <a class="btn btn-link btn-block d-flex justify-content-between card-btn px-0 collapsed text-decoration-none" href="javascript:;" role="button" data-toggle="collapse" data-target="#basicsCollapseThree" aria-expanded="false" aria-controls="basicsCollapseThree">
                                <span class="font-size-2">Berapa lama proses pengerjaan desain?</span>

                                <span class="card-btn-toggle">
                                    <span class="font-size-2 card-btn-toggle-default">+</span>
                                    <span class="font-size-2 card-btn-toggle-active">−</span>
                                </span>
                            </a>
                        </div>
                        <div id="basicsCollapseThree" class="collapse" aria-labelledby="basicsHeadingThree" data-parent="#basicsAccordion-left" style="">
                            <div class="card-body px-0 m-3">
                                <p>Lama pengerjaan akan menyesuaikan dengan timeline sesuai dengan paket yang berlaku. Namun apabila Anda membutuhkan waktu desain yang lebih cepat, Anda dapat memesan paket custom yang sesuai dengan kebutuhan Anda.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Card -->

                    <!-- Card -->
                    <div class="card shadow-none mb-3">
                        <div class="card-header card-collapse" id="basicsHeadingFour">
                            <a class="btn btn-link btn-block d-flex justify-content-between card-btn px-0 collapsed text-decoration-none" href="javascript:;" role="button" data-toggle="collapse" data-target="#basicsCollapseFour" aria-expanded="false" aria-controls="basicsCollapseFour">
                                <span class="font-size-2">Apa yang perlu saya sediakan?</span>

                                <span class="card-btn-toggle">
                                    <span class="font-size-2 card-btn-toggle-default">+</span>
                                    <span class="font-size-2 card-btn-toggle-active">−</span>
                                </span>
                            </a>
                        </div>
                        <div id="basicsCollapseFour" class="collapse" aria-labelledby="basicsHeadingFour" data-parent="#basicsAccordion-left" style="">
                            <div class="card-body px-0 m-3">
                                <p>Layanan kami sebenarnya anti ribet, Anda tinggal terima jadi saja. Namun agar hasil yang didapatkan maksimal dan sesuai dengan yang diharapkan, maka kami membutuhkan informasi tentang produk / bisnis Anda maupun referensi desain yang diinginkan *jika ada.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Card -->

                    <!-- Card -->
                    <div class="card shadow-none mb-3">
                        <div class="card-header card-collapse" id="basicsHeadingFive">
                            <a class="btn btn-link btn-block d-flex justify-content-between card-btn px-0 collapsed text-decoration-none" href="javascript:;" role="button" data-toggle="collapse" data-target="#basicsCollapseFive" aria-expanded="false" aria-controls="basicsCollapseFive">
                                <span class="font-size-2">Apakah bisa request tambahan revisi?</span>

                                <span class="card-btn-toggle">
                                    <span class="font-size-2 card-btn-toggle-default">+</span>
                                    <span class="font-size-2 card-btn-toggle-active">−</span>
                                </span>
                            </a>
                        </div>
                        <div id="basicsCollapseFive" class="collapse" aria-labelledby="basicsHeadingFive" data-parent="#basicsAccordion-left" style="">
                            <div class="card-body px-0 m-3">
                                <p>Desain yang kami buat, telah kami maksimalkan agar sesuai dengan keinginan di awal. Namun apabila anda masih kurang puas / kurang sesuai dengan hasil yang diberikan, addons tersedia untuk membantu Anda.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Card -->

                    <!-- Card -->
                    <div class="card shadow-none mb-3">
                        <div class="card-header card-collapse" id="basicsHeadingSix">
                            <a class="btn btn-link btn-block d-flex justify-content-between card-btn px-0 collapsed text-decoration-none" href="javascript:;" role="button" data-toggle="collapse" data-target="#basicsCollapseSix" aria-expanded="false" aria-controls="basicsCollapseSix">
                                <span class="font-size-2">Apa lisensi yang akan saya dapat?</span>

                                <span class="card-btn-toggle">
                                    <span class="font-size-2 card-btn-toggle-default">+</span>
                                    <span class="font-size-2 card-btn-toggle-active">−</span>
                                </span>
                            </a>
                        </div>
                        <div id="basicsCollapseSix" class="collapse" aria-labelledby="basicsHeadingSix" data-parent="#basicsAccordion-left" style="">
                            <div class="card-body px-0 m-3">
                                <p>Desain yang kami buat adalah original untuk Anda / jika ada menggunakan elemen yang sudah berlisensi premium, Anda akan mendapatkan copyrights penuh lisensi desain sesuai paket yang dipesan.
                                    <br> <br>
                                    Jika anda membutuhkan lisensi yang lebih besar / untuk distribusi yang lebih dari yang di paket. Silahkan hubungi kami untuk upgrade lisensi agar tidak terdapat masalah copyrights.</p>
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
