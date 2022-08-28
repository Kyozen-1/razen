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
                <h1 class="section-title-page text-white">Jasa Video Animasi</h1>
                <p class="mb-5">Jasa Pembuatan Video Animasi Explainer (Motion Graphic) 2D & 3D</p>
                <ul class="breadcrumbs-inner list-center display-flex">
                    <li><a class="section-16px-regular font-weight-500" href="{{ route('home') }}">Home</a></li>
                    <li><a class="section-16px-regular font-weight-500" href="{{ route('video-production') }}">Video Production</a></li>
                    <li>
                        <h4 class="section-16px-regular font-weight-500 text-white">Jasa Video Animasi</h4>
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
                        <h4 class="section-subtitle">VIDEO ANIMASI</h4>
                        <h4 class="section-45px-montserrat margin-top-15 margin-bottom-20">Pentingnya Video Animasi Sebagai Sarana Komunikasi</h4>
                    </div>
                    <p class="section-17px-regular margin-bottom-25">
                        Video Animasi dapat digunakan untuk sarana menjelaskan fitur atau keunggulan suatu produk, lebih sering disebut sebagai explainer video.
                        <br><br>
                        Memiliki explainer video dengan kualitas terbaik merupakan salah satu branding yang penting dalam bisnis. Dengan menggunakan Jasa Video Animasi yang profesional dan terpercaya terbukti efektif untuk membuat sebuah promosi menjadi lebih menarik dan menyenangkan
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
                        <h3>Script</h3>
                        <p>Mulai penulisan naskah / alur cerita animasi.</p>
                    </div>
                </div>
            </li>

            <li class="step-item">
                <div class="step-content-wrapper">
                    <span class="step-icon step-icon-soft-primary">3</span>
                    <div class="step-content">
                        <h3>Storyboard</h3>
                        <p>Pembuatan storyboard video animasi full color.</p>
                    </div>
                </div>
            </li>

            <li class="step-item">
                <div class="step-content-wrapper">
                    <span class="step-icon step-icon-soft-primary">4</span>
                    <div class="step-content">
                        <h3>Voice Over</h3>
                        <p>Perekaman suara pengisi naskah / voice over.</p>
                    </div>
                </div>
            </li>

            <li class="step-item">
                <div class="step-content-wrapper">
                    <span class="step-icon step-icon-soft-primary">5</span>
                    <div class="step-content">
                        <h3>Animasi</h3>
                        <p>Tahap animasi, background musik dan sound effect.</p>
                    </div>
                </div>
            </li>

            <li class="step-item">
                <div class="step-content-wrapper">
                    <span class="step-icon step-icon-soft-primary">6</span>
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
    <div class="container space-2" id="pricing">
        <div class="row mb-5">
            <div class="col-md-12">
                <div class="section-title wow fadeInDown">
                    <h4 class="section-subtitle">Pilihan Paket</h4>
                    <h2 class="section-main-title section-45px-montserrat">Harga Jasa Video Animasi</h2>
                </div>
            </div>
        </div>

        <!-- Table -->
        <div class="table-responsive-lg mx-lg-auto">
            <table class="table table-striped table-borderless">
                <thead class="text-center">
                    <tr>
                        <th scope="col" class="w-25"></th>
                        <th scope="col" class="w-25">
                            <span class="d-block text-dark h3">Standard</span>
                        </th>
                        <th scope="col" class="w-25 border-left border-right">
                            <span class="d-block text-dark h3">Premium</span>
                        </th>
                        <th scope="col" class="w-25">
                            <span class="d-block text-dark h3">Ultimate</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-top border-bottom">
                        <th scope="row" class="bg-white text-dark pt-5 pb-3 px-4 mb-0 font-size-2">
                            <b>
                                Paket Video Animasi
                                <br>
                                Explainer 2D
                            </b>
                        </th>
                        <td class="bg-white text-center">
                            <div class="position-relative">
                                <div id="youTubeVideoPricing1" class="video-player bg-dark rounded-lg">
                                    <img class="img-fluid video-player-preview rounded" src="https://gosocial.co.id/assets/img/service/video/animasi/pricing1.webp" alt="Penjelasan engagement dan cara terbaru meningkatkannya">
                                    <a class="js-fancybox video-player-btn video-player-centered shadow-soft rounded-circle" href="javascript:;" data-hs-fancybox-options="{
             &quot;src&quot;: &quot;//youtube.com/-CM687tA_us&quot;,
             &quot;caption&quot;: &quot;Video Animasi Standart - Oleca&quot;,
             &quot;speed&quot;: 700,
             &quot;buttons&quot;: [&quot;fullScreen&quot;, &quot;close&quot;],
             &quot;vimeo&quot;: {
               &quot;autoplay&quot;: 1
             }
           }">
                                    </a>
                                    <div class="embed-responsive embed-responsive-16by9 rounded-lg">
                                        <div id="youTubeIframePricing1"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-block mt-2">
                                <small class="text-muted font-size-2">Start from</small><br>
                                <span class="text-primary align-top pricing font-size-2">Rp.</span>
                                <span class="h2 text-primary">4.500.000</span>
                            </div>
                        </td>
                        <td class="bg-white text-center border-left border-right">
                            <div class="position-relative">
                                <div id="youTubeVideoPricing2" class="video-player bg-dark rounded-lg">
                                    <img class="img-fluid video-player-preview rounded" src="https://gosocial.co.id/assets/img/service/video/animasi/pricing2.webp" alt="Penjelasan engagement dan cara terbaru meningkatkannya">
                                    <a class="js-fancybox video-player-btn video-player-centered shadow-soft rounded-circle" href="javascript:;" data-hs-fancybox-options="{
             &quot;src&quot;: &quot;//youtube.com/ze2sY9HaKKM&quot;,
             &quot;caption&quot;: &quot;Video Animasi Premium - Perawatku.id&quot;,
             &quot;speed&quot;: 700,
             &quot;buttons&quot;: [&quot;fullScreen&quot;, &quot;close&quot;],
             &quot;vimeo&quot;: {
               &quot;autoplay&quot;: 1
             }
           }">
                                    </a>
                                    <div class="embed-responsive embed-responsive-16by9 rounded-lg">
                                        <div id="youTubeIframePricing2"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-block mt-2">
                                <small class="text-muted font-size-2">Start from</small><br>
                                <span class="text-primary align-top pricing font-size-2">Rp.</span>
                                <span class="h2 text-primary">7.500.000</span>
                            </div>
                        </td>
                        <td class="bg-white text-center">
                            <div class="position-relative">
                                <div id="youTubeVideoPricing3" class="video-player bg-dark rounded-lg">
                                    <img class="img-fluid video-player-preview rounded" src="https://gosocial.co.id/assets/img/service/video/animasi/pricing3.webp" alt="Penjelasan engagement dan cara terbaru meningkatkannya">
                                    <a class="js-fancybox video-player-btn video-player-centered shadow-soft rounded-circle" href="javascript:;" data-hs-fancybox-options="{
             &quot;src&quot;: &quot;//youtube.com/PeMjlLYPyMg&quot;,
             &quot;caption&quot;: &quot;Video Animasi Premium - Flimty&quot;,
             &quot;speed&quot;: 700,
             &quot;buttons&quot;: [&quot;fullScreen&quot;, &quot;close&quot;],
             &quot;vimeo&quot;: {
               &quot;autoplay&quot;: 1
             }
           }">
                                    </a>
                                    <div class="embed-responsive embed-responsive-16by9 rounded-lg">
                                        <div id="youTubeIframePricing3"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-block mt-2">
                                <small class="text-muted font-size-2">Start from</small><br>
                                <span class="text-primary align-top pricing font-size-2">Rp.</span>
                                <span class="h2 text-primary">Custom</span>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="font-size-2 py-3 px-4">
                            Durasi Video
                        </th>
                        <td class="text-center p-3">
                            <span class="text-primary font-size-2">30 Detik</span>
                        </td>
                        <td class="text-center border-left border-right p-3">
                            <span class="text-primary font-size-2">60 Detik</span>
                        </td>
                        <td class="text-center p-3">
                            <span class="text-primary font-size-2">60 Detik++</span>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="font-size-2 py-3 px-4">
                            Full HD 1080p
                        </th>
                        <td class="text-center p-3">
                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success mr-2">
                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                            </svg>
                        </td>
                        <td class="text-center border-left border-right p-3">
                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success mr-2">
                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                            </svg>
                        </td>
                        <td class="text-center p-3">
                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success mr-2">
                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                            </svg>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="font-size-2 py-3 px-4">
                            Voice Over (Male / Female)
                        </th>
                        <td class="text-center p-3">
                            <span class="text-primary font-size-2">Maks. 60 Kata (Indo)</span>
                        </td>
                        <td class="text-center border-left border-right p-3">
                            <span class="text-primary font-size-2">Maks. 120 Kata (Indo)</span>
                        </td>
                        <td class="text-center p-3">
                            <span class="text-primary font-size-2">Custom (English/Indo)</span>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="font-size-2 py-3 px-4">
                            Premium Script
                        </th>
                        <td class="text-center p-3">
                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger">
                                <path fill="currentColor" d="M12,2C17.53,2 22,6.47 22,12C22,17.53 17.53,22 12,22C6.47,22 2,17.53 2,12C2,6.47 6.47,2 12,2M15.59,7L12,10.59L8.41,7L7,8.41L10.59,12L7,15.59L8.41,17L12,13.41L15.59,17L17,15.59L13.41,12L17,8.41L15.59,7Z" />
                            </svg>
                        </td>
                        <td class="text-center border-left border-right p-3">
                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success mr-2">
                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                            </svg>
                        </td>
                        <td class="text-center p-3">
                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success mr-2">
                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                            </svg>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="font-size-2 py-3 px-4">
                            Full Color Storyboard
                        </th>
                        <td class="text-center p-3">
                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success mr-2">
                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                            </svg>
                        </td>
                        <td class="text-center border-left border-right p-3">
                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success mr-2">
                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                            </svg>
                        </td>
                        <td class="text-center p-3">
                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success mr-2">
                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                            </svg>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="font-size-2 py-3 px-4">
                            Desain Karakter
                        </th>
                        <td class="text-center p-3">
                            <span class="text-primary font-size-2">Maks. 2</span>
                        </td>
                        <td class="text-center border-left border-right p-3">
                            <span class="text-primary font-size-2">3 - 5 Karakter</span>
                        </td>
                        <td class="text-center p-3">
                            <span class="text-primary font-size-2">Custom</span>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="font-size-2 py-3 px-4">
                            Revisi
                        </th>
                        <td class="text-center p-3">
                            <span class="text-primary font-size-2">3x</span>
                        </td>
                        <td class="text-center border-left border-right p-3">
                            <span class="text-primary font-size-2">3x</span>
                        </td>
                        <td class="text-center p-3">
                            <span class="text-primary font-size-2">Custom</span>
                        </td>
                    </tr>
                    <tr class="border-bottom">
                    <th scope="row" class="font-size-2 py-3 px-4">
                            Backsound &amp; Sound Effect
                        </th>
                        <td class="text-center p-3">
                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success mr-2">
                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                            </svg>
                        </td>
                        <td class="text-center border-left border-right p-3">
                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success mr-2">
                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                            </svg>
                        </td>
                        <td class="text-center p-3">
                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success mr-2">
                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                            </svg>
                        </td>
                    </tr>
                    <tr class="border-bottom">
                        <th scope="row" class="font-size-2 py-3 px-4">
                            Lama Pengerjaan
                        </th>
                        <td class="text-center text-body p-3">
                            <span class="text-primary font-size-2">3 Minggu</span>
                        </td>
                        <td class="text-center border-left border-right p-3">
                            <span class="text-primary font-size-2">1 Bulan</span>
                        </td>
                        <td class="text-center p-3">
                            <span class="text-primary font-size-2">Custom</span>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="bg-white p-3"></th>
                        <td class="bg-white text-center p-3">
                            <a type="button" href="https://api.whatsapp.com/send?phone=6281234566636&amp;text=Halo%20GoSocial%21%0D%0ASaya%20ingin%20memesan%20layanan%20Video%20Animasi%20Standard" target="_blank" class="btn btn-sm btn-outline-primary text-nowrap transition-3d-hover font-size-2">Pilih Paket</a>
                        </td>
                        <td class="bg-white text-center border-left border-right p-3">
                            <a type="button" href="https://api.whatsapp.com/send?phone=6281234566636&amp;text=Halo%20GoSocial%21%0D%0ASaya%20ingin%20memesan%20layanan%20Video%20Animasi%20Premium" target="_blank" class="btn btn-sm btn-outline-primary text-nowrap transition-3d-hover font-size-2">Pilih Paket</a>
                        </td>
                        <td class="bg-white text-center p-3">
                            <a type="button" href="https://api.whatsapp.com/send?phone=6281234566636&amp;text=Halo%20GoSocial%21%0D%0ASaya%20ingin%20memesan%20layanan%20Video%20Animasi%20Custom" target="_blank" class="btn btn-sm btn-outline-primary text-nowrap transition-3d-hover font-size-2">Pilih Paket</a>

                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- End Table -->
    </div>
</section>

<section class="flat-services">
    <div class="container space-2">
        <div class="row mb-5">
            <div class="col-md-12">
                <div class="section-title wow fadeInDown">
                    <h4 class="section-subtitle">OUR LATEST WORK</h4>
                    <h2 class="section-main-title section-45px-montserrat">Portofolio</h2>
                    <p class="text-muted">Kami telah membantu berbagai bisnis di lebih dari 34 negara dunia membuat video animasi terbaiknya.</p>
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
                    <h4 class="section-subtitle">Weekly Report</h4>
                    <h2 class="section-main-title section-45px-montserrat">Tidak perlu khawatir! tim kami akan mengirim laporan update pengerjaan video setiap minggunya.</h2>
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
                    <h3 class="section-20px-montserrat font-weight-600 line-height-35">Weekly Report</h3>
                    <p>Tidak perlu khawatir! tim kami akan mengirim laporan update pengerjaan video setiap minggunya.</p>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="counter-box themesflat-counter hover-up wow fadeInUp" data-wow-delay="0.1s">
                    <div class="icon-box">
                        <div class="icon-counter">
                            <span class="icon-guarantee1"></span>
                        </div>
                    </div>
                    <h3 class="section-20px-montserrat font-weight-600 line-height-35">Professional Voice Over</h3>
                    <p>Bekerjasama dengan berbagai voice talent terbaik baik untuk bahasa Indonesia, English, dll.</p>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="counter-box themesflat-counter hover-up wow fadeInUp" data-wow-delay="0.1s">
                    <div class="icon-box">
                        <div class="icon-counter">
                            <span class="icon-guarantee1"></span>
                        </div>
                    </div>
                    <h3 class="section-20px-montserrat font-weight-600 line-height-35">Premium Scriptwriting</h3>
                    <p>Video yang bagus saja tidak cukup, Layanan sudah termasuk pembuatan naskah cerita / alur yang menarik.</p>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="counter-box themesflat-counter hover-up wow fadeInUp" data-wow-delay="0.1s">
                    <div class="icon-box">
                        <div class="icon-counter">
                            <span class="icon-guarantee1"></span>
                        </div>
                    </div>
                    <h3 class="section-20px-montserrat font-weight-600 line-height-35">Full Color Storyboard</h3>
                    <p>Pembuatan Storyboard full frame, yang disertai ilustrasi berwarna melalui proses Digital Drawing.</p>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="counter-box themesflat-counter hover-up wow fadeInUp" data-wow-delay="0.1s">
                    <div class="icon-box">
                        <div class="icon-counter">
                            <span class="icon-guarantee1"></span>
                        </div>
                    </div>
                    <h3 class="section-20px-montserrat font-weight-600 line-height-35">Premium Licensed Sound & Music</h3>
                    <p>Sound effect dan background musik yang digunakan berlisensi resmi dan merupakan sound premium.</p>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="counter-box themesflat-counter hover-up wow fadeInUp" data-wow-delay="0.1s">
                    <div class="icon-box">
                        <div class="icon-counter">
                            <span class="icon-guarantee1"></span>
                        </div>
                    </div>
                    <h3 class="section-20px-montserrat font-weight-600 line-height-35">High-end Motion Techniques</h3>
                    <p>Video dibuat dengan teknik animasi terbaik menggunakan software After Effect profesional.</p>
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
                                <span class="font-size-2">Bagaimana video animasi dapat membantu bisnis?</span>

                                <span class="card-btn-toggle">
                                    <span class="font-size-2 card-btn-toggle-default">+</span>
                                    <span class="font-size-2 card-btn-toggle-active">−</span>
                                </span>
                            </a>
                        </div>
                        <div id="basicsCollapseOne" class="collapse" aria-labelledby="basicsHeadingOne" data-parent="#basicsAccordion-left" style="">
                            <div class="card-body px-0 m-3">
                                <p>Video animasi dapat membantu bisnis anda dalam menjelaskan lebih baik mengenai produk / jasa yang anda sediakan melalui video animasi yang komunikatif dan menarik.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Card -->

                    <!-- Card -->
                    <div class="card shadow-none mb-3">
                        <div class="card-header card-collapse" id="basicsHeadingTwo">
                            <a class="btn btn-link btn-block d-flex justify-content-between card-btn px-0 collapsed text-decoration-none" href="javascript:;" role="button" data-toggle="collapse" data-target="#basicsCollapseTwo" aria-expanded="false" aria-controls="basicsCollapseTwo">
                                <span class="font-size-2">Apa jenis video animasi yang dapat dibuat oleh GoSocial?</span>

                                <span class="card-btn-toggle">
                                    <span class="font-size-2 card-btn-toggle-default">+</span>
                                    <span class="font-size-2 card-btn-toggle-active">−</span>
                                </span>
                            </a>
                        </div>
                        <div id="basicsCollapseTwo" class="collapse" aria-labelledby="basicsHeadingTwo" data-parent="#basicsAccordion-left" style="">
                            <div class="card-body px-0 m-3">
                                <p>Studio kami diisi oleh tim profesional yang akan selalu berusaha untuk menyediakan keberagaman dalam video animasi yang dibutuhkan oleh pasar, kami memiliki strategi khusus untuk menghasilkan banyak jenis video yang dibutuhkan sesuai dengan kebutuhan, dapat dipastikan bahwa kami ahli dalam bidangnya untuk pembuatan video animasi 2D maupun 3D dari motion graphic maupun whiteboard.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Card -->

                    <!-- Card -->
                    <div class="card shadow-none mb-3">
                        <div class="card-header card-collapse" id="basicsHeadingThree">
                            <a class="btn btn-link btn-block d-flex justify-content-between card-btn px-0 collapsed text-decoration-none" href="javascript:;" role="button" data-toggle="collapse" data-target="#basicsCollapseThree" aria-expanded="false" aria-controls="basicsCollapseThree">
                                <span class="font-size-2">Berapa lama proses pembuatan video?</span>

                                <span class="card-btn-toggle">
                                    <span class="font-size-2 card-btn-toggle-default">+</span>
                                    <span class="font-size-2 card-btn-toggle-active">−</span>
                                </span>
                            </a>
                        </div>
                        <div id="basicsCollapseThree" class="collapse" aria-labelledby="basicsHeadingThree" data-parent="#basicsAccordion-left" style="">
                            <div class="card-body px-0 m-3">
                                <p>Untuk 30 - 60 detik dapat kami kerjakan selama 3 minggu sampai 1 bulan, dan untuk video yang berdurasi diatas 60 detik dan memerlukan animasi yang lebih kompleks maka kami memerlukan kolaborasi tambahan dengan tim dan memerlukan waktu yang lebih panjang dan dapat disesuaikan dengan kebutuhan anda.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Card -->

                    <!-- Card -->
                    <div class="card shadow-none mb-3">
                        <div class="card-header card-collapse" id="basicsHeadingFour">
                            <a class="btn btn-link btn-block d-flex justify-content-between card-btn px-0 collapsed text-decoration-none" href="javascript:;" role="button" data-toggle="collapse" data-target="#basicsCollapseFour" aria-expanded="false" aria-controls="basicsCollapseFour">
                                <span class="font-size-2">Apakah dapat memilih voice over dalam video?</span>

                                <span class="card-btn-toggle">
                                    <span class="font-size-2 card-btn-toggle-default">+</span>
                                    <span class="font-size-2 card-btn-toggle-active">−</span>
                                </span>
                            </a>
                        </div>
                        <div id="basicsCollapseFour" class="collapse" aria-labelledby="basicsHeadingFour" data-parent="#basicsAccordion-left" style="">
                            <div class="card-body px-0 m-3">
                                <p>Ya, anda dapat memilih voice over Pria atau Wanita sesuai dengan kebutuhan dan produk/jasa yang disediakan.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Card -->

                    <!-- Card -->
                    <div class="card shadow-none mb-3">
                        <div class="card-header card-collapse" id="basicsHeadingFive">
                            <a class="btn btn-link btn-block d-flex justify-content-between card-btn px-0 collapsed text-decoration-none" href="javascript:;" role="button" data-toggle="collapse" data-target="#basicsCollapseFive" aria-expanded="false" aria-controls="basicsCollapseFive">
                                <span class="font-size-2">Apakah ada revisi?</span>

                                <span class="card-btn-toggle">
                                    <span class="font-size-2 card-btn-toggle-default">+</span>
                                    <span class="font-size-2 card-btn-toggle-active">−</span>
                                </span>
                            </a>
                        </div>
                        <div id="basicsCollapseFive" class="collapse" aria-labelledby="basicsHeadingFive" data-parent="#basicsAccordion-left" style="">
                            <div class="card-body px-0 m-3">
                                <p>Ya kami menyediakan revisi untuk semua paket yang kami sediakan, untuk memastikan bahwa video yang kami produksi sesuai dengan kebutuhan dan berkualitas.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Card -->

                    <!-- Card -->
                    <div class="card shadow-none mb-3">
                        <div class="card-header card-collapse" id="basicsHeadingSix">
                            <a class="btn btn-link btn-block d-flex justify-content-between card-btn px-0 collapsed text-decoration-none" href="javascript:;" role="button" data-toggle="collapse" data-target="#basicsCollapseSix" aria-expanded="false" aria-controls="basicsCollapseSix">
                                <span class="font-size-2">Apa saja yang akan didapatkan?</span>

                                <span class="card-btn-toggle">
                                    <span class="font-size-2 card-btn-toggle-default">+</span>
                                    <span class="font-size-2 card-btn-toggle-active">−</span>
                                </span>
                            </a>
                        </div>
                        <div id="basicsCollapseSix" class="collapse" aria-labelledby="basicsHeadingSix" data-parent="#basicsAccordion-left" style="">
                            <div class="card-body px-0 m-3">
                                <p>Video akan berdurasi 30-60 detik (atau lebih ) sesuai dengan paket yang anda pilih dan video akan memiliki Full HD Resolution 1920 x 1080 dengan keseluruhan hak milik video sehingga anda dapat menggunakan video di media mana saja yang anda perlukan.</p>
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
