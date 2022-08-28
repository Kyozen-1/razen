@extends('landing-page-razen-studio.layouts.app')
@section('title', 'Jasa Tambah Followers, Auto Likes, Views #1 di Twitter - Razen Studio')

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
                <h1 class="section-title-page text-white">Twitter - SME Services</h1>
                <p class="mb-5">Solusi untuk meningkatkan interaksi pada akun Instagram.</p>
                <ul class="breadcrumbs-inner list-center display-flex">
                    <li><a class="section-16px-regular font-weight-500" href="{{ route('home') }}">Home</a></li>
                    <li><a class="section-16px-regular font-weight-500" href="{{ route('social-media-engagement') }}">Social Media Engagement</a></li>
                    <li>
                        <h4 class="section-16px-regular font-weight-500 text-white">Twitter - SME Services</h4>
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
                        <h4 class="section-45px-montserrat margin-top-15 margin-bottom-20">Auto Followers Twitter</h4>
                    </div>
                    <p class="section-17px-regular margin-bottom-25">
                        GoSocial menyediakan layanan Auto Followers Twitter, yang berasal dari akun yang dibuat menyerupai akun pengguna aktif Twitter untuk meningkatkan value suatu brand bisnis di Twitter.
                        <br>
                        Selain itu dengan memiliki jumlah followers yang banyak, suatu brand akan lebih dipercaya dan lebih kredibel dimata konsumen.
                        <br>
                        Beli Followers Twitter terpercaya hanya di GoSocial Indonesia!
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
                        <h4 class="section-45px-montserrat margin-top-15 margin-bottom-20">Jasa Trending Topik Twitter</h4>
                    </div>
                    <p class="section-17px-regular margin-bottom-25">
                        Trending topik merupakan salah satu fitur untuk melihat kejadian atau peristiwa yang sedang hangat didalam twitter. Dalam fitur trending topik ini berisikan urutan tweets atau hashtag yang sedang viral pada waktu itu. Semua postingan atau tweet bisa viral melalui fitur trending topik. Namun memang sangat sulit untuk bisa masuk fitur tersebut.
                        <br>
                        Layanan trending topics twitter hadir untuk membantu perusahaan maupun bisnis dalam mempopulerkan suatu event untuk keperluan launching produk, dsb.
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
                    <h2 class="text-white mb-1">Masih ada berbagai layanan lain..</h2>
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

<section class="flat-services">
    <div class="container space-top-1" id="pricing">
        <div class="overflow-hidden space-top-lg-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title wow fadeInDown">
                            <h4 class="section-subtitle">PRICING FOR EVERY NEED</h4>
                            <h2 class="section-45px-montserrat margin-top-15">Paket Harga SME Youtube</h2>
                        </div>
                        <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="60" data-smobile="60"
                            style="height:60px"></div>
                    </div>
                </div>

                <!-- Nav -->
                <div class="text-center">
                    <ul class="nav nav-segment nav-pills scrollbar-horizontal mb-11" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link p-5" id="followers-tab" data-toggle="pill" href="#followers" role="tab" aria-controls="followers" aria-selected="false"><span class="font-size-3">Followers</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link p-5" id="likes-tab" data-toggle="pill" href="#likes" role="tab" aria-controls="likes" aria-selected="false"><span class="font-size-3">Favourites</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active p-5" id="views-tab" data-toggle="pill" href="#views" role="tab" aria-controls="views" aria-selected="true"><span class="font-size-3">Retweets</span></a>
                        </li>
                    </ul>
                </div>
                <!-- End Nav -->

                <!-- Tab Content -->
                <div class="tab-content">

                    <!-- Followers -->
                    <div class="tab-pane fade" id="followers" role="tabpanel" aria-labelledby="followers-tab">
                        <!-- Penjelasan Followers -->
                        <div class="card card-frame card-frame-highlighted mt-n6 mb-8">
                            <div class="card-body">
                                <h2>Followers Instagram</h2>
                                <p style="line-height: normal;">
                                    <small class="font-size-2">Followers merupakan indikator kredibilitas, popularitas, dan kesuksesan branding suatu akun di Social Media. <span class="text-primary d-md-none d-sm-block read-more" data-id="3"><b>Read More</b></span>
                                        <span class="hide-p hide-p-3">
                                            GoSocial menyediakan <b>Jasa Tambah Followers Instagram</b> dengan 2 jenis pilihan akun Followers, kami mengembangkan metode sendiri yang terjamin aman dengan kualitas terbaik yang pernah ada di pasaran.
                                        </span>
                                    </small>
                                </p>
                            </div>
                        </div>

                        <!-- Followers Mix -->
                        <div class="row" id="mix">

                            <div class="col-sm-6 col-lg-4 mb-5">
                                <div class="card shadow h-100">
                                    <!-- Header -->
                                    <div class="card-header border-0 mt-3 justify-content-start" style="margin-bottom: -10px;">
                                            <div class="image-product avatar avatar-xl avatar-circle mr-3" data-toggle="popover" data-trigger="hover" data-placement="right" data-html="true" title="" data-content="<div class='mt-n2'>Layanan tersedia dan dapat dipesan dengan lancar.<br><small class='text-primary'><span class='legend-indicator bg-success'></span>Online - 25-08-2022 03:46 (GMT +7)</small></div>" style="border: 0.1rem solid #00C9A6; cursor: pointer;" data-original-title="<span class='square-icon bg-success'></span>Layanan Normal &amp; Tersedia">
                                            <img class="img-fluid p-2" src="https://gosocial.co.id/storage/images/product_sme/100-followers-mix-1655449265.png" alt="Personal">
                                            <span class="avatar-status avatar-sm-status avatar-success"></span>
                                        </div>
                                        <!-- <div class="image-product avatar avatar-xl avatar-circle mr-3" data-toggle="popover" data-trigger="hover" data-placement="right" data-html="true" title="<span class='square-icon bg-warning'></span>Layanan Terdapat Kendala" data-content="Instagram Followers Indonesia sedikit lebih lambat diproses karena terjadi maintenance di server.<br><small class='text-primary'><span class='legend-indicator bg-warning'></span>3 bulan yang lalu</small>" style="border: 0.1rem solid #F5CA98; cursor: pointer">
                                            <img class="img-fluid p-2" src="https://gosocial.co.id/storage/images/product_sme/100-followers-mix-1655449265.png" alt="Personal">
                                            <span class="avatar-status avatar-sm-status avatar-warning"></span>
                                        </div>
                                        <div class="image-product avatar avatar-xl avatar-circle mr-3" data-toggle="popover" data-trigger="hover" data-placement="right" data-html="true" title="<span class='square-icon bg-danger'></span>Layanan Tidak Tersedia" data-content="Instagram Followers Indonesia sedang tidak tersedia untuk sementara waktu, hubungi kami untuk informasi lebih lanjut!<br><small class='text-primary'><span class='legend-indicator bg-danger'></span>3 bulan yang lalu</small>" style="border: 0.1rem solid #ED4C78; cursor: pointer">
                                            <img class="img-fluid p-2" src="https://gosocial.co.id/storage/images/product_sme/100-followers-mix-1655449265.png" alt="Personal">
                                            <span class="avatar-status avatar-sm-status avatar-danger"></span>
                                        </div> -->
                                        <span>
                                            <span class="h2 d-block" style="margin-bottom: -1px;">Personal</span>
                                            <span class="d-block" style="font-size: 14px;">100 Followers Mix</span>
                                            <div class="d-flex align-self-center align-middle">
                                                <div>
                                                    <!-- <span class="d-block text-muted" style="font-size: 14px;"><s>Rp. 30.000,-</s></span> -->
                                                    <span class="d-block text-danger"><b>Rp. 30.000,-</b></span>
                                                </div>
                                                <!-- <div class="discount-badge discount-badge-red ml-3 mt-2">Disc. 50% <a href="https://www.google.com/" target="_blank"><i class="fas fa-info-circle text-white"></i></a></div> -->
                                            </div>
                                        </span>
                                    </div>
                                    <!-- End Header -->
                                    <hr>
                                    <!-- Body -->
                                    <div class="card-body" style="padding-top: 0.5rem; padding-bottom: 0.7rem;">
                                        <div class="media font-size-1 text-body mb-3">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger mr-2">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"></path>
                                            </svg>
                                            <div class="media-body font-size-2">
                                                Followers Worldwide Terbaik
                                            </div>
                                        </div>
                                        <div class="media font-size-1 text-body mb-3">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger mr-2">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"></path>
                                            </svg>
                                            <div class="media-body font-size-2">
                                                Aman dan Bergaransi 30 Hari
                                            </div>
                                        </div>
                                        <div class="media font-size-1 text-body mb-3">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger mr-2">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"></path>
                                            </svg>
                                            <div class="media-body font-size-2">
                                                Max Order: 100K Followers per Akun
                                            </div>
                                        </div>
                                        <div class="media font-size-1 text-body mb-3">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger mr-2">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"></path>
                                            </svg>
                                            <div class="media-body font-size-2">
                                                1 - 2 Hari Proses Pengerjaan
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Body -->

                                    <div class="card-footer border-0">
                                        <form action="https://gosocial.co.id/sme/order" method="post">
                                            <input type="hidden" name="_token" value="dXltiv9XeKnsrNm0fBB0N65Cb5Ld7dbKsRM6CEcP">
                                            <input type="hidden" name="id_product" value="20">
                                            <button type="submit" class="btn btn-soft-primary btn-block transition-3d-hover font-size-2">Order Sekarang</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4 mb-5">
                                <div class="card shadow h-100">
                                    <!-- Header -->
                                    <div class="card-header border-0 mt-3 justify-content-start" style="margin-bottom: -10px;">
                                            <div class="image-product avatar avatar-xl avatar-circle mr-3" data-toggle="popover" data-trigger="hover" data-placement="right" data-html="true" title="" data-content="<div class='mt-n2'>Layanan tersedia dan dapat dipesan dengan lancar.<br><small class='text-primary'><span class='legend-indicator bg-success'></span>Online - 25-08-2022 03:46 (GMT +7)</small></div>" style="border: 0.1rem solid #00C9A6; cursor: pointer;" data-original-title="<span class='square-icon bg-success'></span>Layanan Normal &amp; Tersedia">
                                            <img class="img-fluid p-2" src="https://gosocial.co.id/storage/images/product_sme/250-followers-mix-1655449245.png" alt="Professional">
                                            <span class="avatar-status avatar-sm-status avatar-success"></span>
                                        </div>
                                        <!-- <div class="image-product avatar avatar-xl avatar-circle mr-3" data-toggle="popover" data-trigger="hover" data-placement="right" data-html="true" title="<span class='square-icon bg-warning'></span>Layanan Terdapat Kendala" data-content="Instagram Followers Indonesia sedikit lebih lambat diproses karena terjadi maintenance di server.<br><small class='text-primary'><span class='legend-indicator bg-warning'></span>3 bulan yang lalu</small>" style="border: 0.1rem solid #F5CA98; cursor: pointer">
                                            <img class="img-fluid p-2" src="https://gosocial.co.id/storage/images/product_sme/250-followers-mix-1655449245.png" alt="Professional">
                                            <span class="avatar-status avatar-sm-status avatar-warning"></span>
                                        </div>
                                        <div class="image-product avatar avatar-xl avatar-circle mr-3" data-toggle="popover" data-trigger="hover" data-placement="right" data-html="true" title="<span class='square-icon bg-danger'></span>Layanan Tidak Tersedia" data-content="Instagram Followers Indonesia sedang tidak tersedia untuk sementara waktu, hubungi kami untuk informasi lebih lanjut!<br><small class='text-primary'><span class='legend-indicator bg-danger'></span>3 bulan yang lalu</small>" style="border: 0.1rem solid #ED4C78; cursor: pointer">
                                            <img class="img-fluid p-2" src="https://gosocial.co.id/storage/images/product_sme/250-followers-mix-1655449245.png" alt="Professional">
                                            <span class="avatar-status avatar-sm-status avatar-danger"></span>
                                        </div> -->
                                        <span>
                                            <span class="h2 d-block" style="margin-bottom: -1px;">Professional</span>
                                            <span class="d-block" style="font-size: 14px;">250 Followers Mix</span>
                                            <div class="d-flex align-self-center align-middle">
                                                <div>
                                                    <!-- <span class="d-block text-muted" style="font-size: 14px;"><s>Rp. 60.000,-</s></span> -->
                                                    <span class="d-block text-danger"><b>Rp. 60.000,-</b></span>
                                                </div>
                                                <!-- <div class="discount-badge discount-badge-red ml-3 mt-2">Disc. 50% <a href="https://www.google.com/" target="_blank"><i class="fas fa-info-circle text-white"></i></a></div> -->
                                            </div>
                                        </span>
                                    </div>
                                    <!-- End Header -->
                                    <hr>
                                    <!-- Body -->
                                    <div class="card-body" style="padding-top: 0.5rem; padding-bottom: 0.7rem;">
                                        <div class="media font-size-1 text-body mb-3">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger mr-2">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"></path>
                                            </svg>
                                            <div class="media-body font-size-2">
                                                Followers Worldwide Terbaik
                                            </div>
                                        </div>
                                        <div class="media font-size-1 text-body mb-3">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger mr-2">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"></path>
                                            </svg>
                                            <div class="media-body font-size-2">
                                                Aman dan Bergaransi 30 Hari
                                            </div>
                                        </div>
                                        <div class="media font-size-1 text-body mb-3">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger mr-2">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"></path>
                                            </svg>
                                            <div class="media-body font-size-2">
                                                Max Order: 100K Followers per Akun
                                            </div>
                                        </div>
                                        <div class="media font-size-1 text-body mb-3">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger mr-2">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"></path>
                                            </svg>
                                            <div class="media-body font-size-2">
                                                2 - 3 Hari Proses Pengerjaan
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Body -->

                                    <div class="card-footer border-0">
                                                                                <form action="https://gosocial.co.id/sme/order" method="post">
                                                                                            <input type="hidden" name="_token" value="dXltiv9XeKnsrNm0fBB0N65Cb5Ld7dbKsRM6CEcP">                                            <input type="hidden" name="id_product" value="21">
                                                <button type="submit" class="btn btn-soft-primary btn-block transition-3d-hover font-size-2">Order Sekarang</button>
                                            </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4 mb-5">
                                <div class="card shadow h-100">
                                    <!-- Header -->
                                    <div class="card-header border-0 mt-3 justify-content-start" style="margin-bottom: -10px;">
                                                                            <div class="image-product avatar avatar-xl avatar-circle mr-3" data-toggle="popover" data-trigger="hover" data-placement="right" data-html="true" title="" data-content="<div class='mt-n2'>Layanan tersedia dan dapat dipesan dengan lancar.<br><small class='text-primary'><span class='legend-indicator bg-success'></span>Online - 25-08-2022 03:46 (GMT +7)</small></div>" style="border: 0.1rem solid #00C9A6; cursor: pointer;" data-original-title="<span class='square-icon bg-success'></span>Layanan Normal &amp; Tersedia">
                                            <img class="img-fluid p-2" src="https://gosocial.co.id/storage/images/product_sme/500-followers-mix-1655449191.png" alt="Selebgram">
                                            <span class="avatar-status avatar-sm-status avatar-success"></span>
                                        </div>
                                        <!-- <div class="image-product avatar avatar-xl avatar-circle mr-3" data-toggle="popover" data-trigger="hover" data-placement="right" data-html="true" title="<span class='square-icon bg-warning'></span>Layanan Terdapat Kendala" data-content="Instagram Followers Indonesia sedikit lebih lambat diproses karena terjadi maintenance di server.<br><small class='text-primary'><span class='legend-indicator bg-warning'></span>3 bulan yang lalu</small>" style="border: 0.1rem solid #F5CA98; cursor: pointer">
                                            <img class="img-fluid p-2" src="https://gosocial.co.id/storage/images/product_sme/500-followers-mix-1655449191.png" alt="Selebgram">
                                            <span class="avatar-status avatar-sm-status avatar-warning"></span>
                                        </div>
                                        <div class="image-product avatar avatar-xl avatar-circle mr-3" data-toggle="popover" data-trigger="hover" data-placement="right" data-html="true" title="<span class='square-icon bg-danger'></span>Layanan Tidak Tersedia" data-content="Instagram Followers Indonesia sedang tidak tersedia untuk sementara waktu, hubungi kami untuk informasi lebih lanjut!<br><small class='text-primary'><span class='legend-indicator bg-danger'></span>3 bulan yang lalu</small>" style="border: 0.1rem solid #ED4C78; cursor: pointer">
                                            <img class="img-fluid p-2" src="https://gosocial.co.id/storage/images/product_sme/500-followers-mix-1655449191.png" alt="Selebgram">
                                            <span class="avatar-status avatar-sm-status avatar-danger"></span>
                                        </div> -->
                                        <span>
                                            <span class="h2 d-block" style="margin-bottom: -1px;">Selebgram</span>
                                            <span class="d-block" style="font-size: 14px;">500 Followers Mix</span>
                                            <div class="d-flex align-self-center align-middle">
                                                <div>
                                                    <!-- <span class="d-block text-muted" style="font-size: 14px;"><s>Rp. 100.000,-</s></span> -->
                                                    <span class="d-block text-danger"><b>Rp. 100.000,-</b></span>
                                                </div>
                                                <!-- <div class="discount-badge discount-badge-red ml-3 mt-2">Disc. 50% <a href="https://www.google.com/" target="_blank"><i class="fas fa-info-circle text-white"></i></a></div> -->
                                            </div>
                                        </span>
                                    </div>
                                    <!-- End Header -->
                                    <hr>
                                    <!-- Body -->
                                    <div class="card-body" style="padding-top: 0.5rem; padding-bottom: 0.7rem;">
                                        <div class="media font-size-1 text-body mb-3">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger mr-2">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"></path>
                                            </svg>
                                            <div class="media-body font-size-2">
                                                Followers Worldwide Terbaik
                                            </div>
                                        </div>
                                        <div class="media font-size-1 text-body mb-3">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger mr-2">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"></path>
                                            </svg>
                                            <div class="media-body font-size-2">
                                                Aman dan Bergaransi 30 Hari
                                            </div>
                                        </div>
                                        <div class="media font-size-1 text-body mb-3">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger mr-2">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"></path>
                                            </svg>
                                            <div class="media-body font-size-2">
                                                Max Order: 100K Followers per Akun
                                            </div>
                                        </div>
                                        <div class="media font-size-1 text-body mb-3">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger mr-2">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"></path>
                                            </svg>
                                            <div class="media-body font-size-2">
                                                3 - 4 Hari Proses Pengerjaan
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Body -->

                                    <div class="card-footer border-0">
                                                                                <form action="https://gosocial.co.id/sme/order" method="post">
                                                                                            <input type="hidden" name="_token" value="dXltiv9XeKnsrNm0fBB0N65Cb5Ld7dbKsRM6CEcP">                                            <input type="hidden" name="id_product" value="22">
                                                <button type="submit" class="btn btn-soft-primary btn-block transition-3d-hover font-size-2">Order Sekarang</button>
                                            </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4 mb-5">
                                <div class="card shadow h-100">
                                    <!-- Header -->
                                    <div class="card-header border-0 mt-3 justify-content-start" style="margin-bottom: -10px;">
                                                                            <div class="image-product avatar avatar-xl avatar-circle mr-3" data-toggle="popover" data-trigger="hover" data-placement="right" data-html="true" title="" data-content="<div class='mt-n2'>Layanan tersedia dan dapat dipesan dengan lancar.<br><small class='text-primary'><span class='legend-indicator bg-success'></span>Online - 25-08-2022 03:46 (GMT +7)</small></div>" style="border: 0.1rem solid #00C9A6; cursor: pointer;" data-original-title="<span class='square-icon bg-success'></span>Layanan Normal &amp; Tersedia">
                                            <img class="img-fluid p-2" src="https://gosocial.co.id/storage/images/product_sme/1000-followers-mix-1655449226.png" alt="Online Shop">
                                            <span class="avatar-status avatar-sm-status avatar-success"></span>
                                        </div>
                                        <!-- <div class="image-product avatar avatar-xl avatar-circle mr-3" data-toggle="popover" data-trigger="hover" data-placement="right" data-html="true" title="<span class='square-icon bg-warning'></span>Layanan Terdapat Kendala" data-content="Instagram Followers Indonesia sedikit lebih lambat diproses karena terjadi maintenance di server.<br><small class='text-primary'><span class='legend-indicator bg-warning'></span>3 bulan yang lalu</small>" style="border: 0.1rem solid #F5CA98; cursor: pointer">
                                            <img class="img-fluid p-2" src="https://gosocial.co.id/storage/images/product_sme/1000-followers-mix-1655449226.png" alt="Online Shop">
                                            <span class="avatar-status avatar-sm-status avatar-warning"></span>
                                        </div>
                                        <div class="image-product avatar avatar-xl avatar-circle mr-3" data-toggle="popover" data-trigger="hover" data-placement="right" data-html="true" title="<span class='square-icon bg-danger'></span>Layanan Tidak Tersedia" data-content="Instagram Followers Indonesia sedang tidak tersedia untuk sementara waktu, hubungi kami untuk informasi lebih lanjut!<br><small class='text-primary'><span class='legend-indicator bg-danger'></span>3 bulan yang lalu</small>" style="border: 0.1rem solid #ED4C78; cursor: pointer">
                                            <img class="img-fluid p-2" src="https://gosocial.co.id/storage/images/product_sme/1000-followers-mix-1655449226.png" alt="Online Shop">
                                            <span class="avatar-status avatar-sm-status avatar-danger"></span>
                                        </div> -->
                                        <span>
                                            <span class="h2 d-block" style="margin-bottom: -1px;">Online Shop</span>
                                            <span class="d-block" style="font-size: 14px;">1000 Followers Mix</span>
                                            <div class="d-flex align-self-center align-middle">
                                                <div>
                                                    <!-- <span class="d-block text-muted" style="font-size: 14px;"><s>Rp. 180.000,-</s></span> -->
                                                    <span class="d-block text-danger"><b>Rp. 180.000,-</b></span>
                                                </div>
                                                <!-- <div class="discount-badge discount-badge-red ml-3 mt-2">Disc. 50% <a href="https://www.google.com/" target="_blank"><i class="fas fa-info-circle text-white"></i></a></div> -->
                                            </div>
                                        </span>
                                    </div>
                                    <!-- End Header -->
                                    <hr>
                                    <!-- Body -->
                                    <div class="card-body" style="padding-top: 0.5rem; padding-bottom: 0.7rem;">
                                        <div class="media font-size-1 text-body mb-3">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger mr-2">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"></path>
                                            </svg>
                                            <div class="media-body font-size-2">
                                                Followers Worldwide Terbaik
                                            </div>
                                        </div>
                                        <div class="media font-size-1 text-body mb-3">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger mr-2">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"></path>
                                            </svg>
                                            <div class="media-body font-size-2">
                                                Aman dan Bergaransi 30 Hari
                                            </div>
                                        </div>
                                        <div class="media font-size-1 text-body mb-3">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger mr-2">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"></path>
                                            </svg>
                                            <div class="media-body font-size-2">
                                                Max Order: 100K Followers per Akun
                                            </div>
                                        </div>
                                        <div class="media font-size-1 text-body mb-3">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger mr-2">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"></path>
                                            </svg>
                                            <div class="media-body font-size-2">
                                                5 - 7 Hari Proses Pengerjaan
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Body -->

                                    <div class="card-footer border-0">
                                                                                <form action="https://gosocial.co.id/sme/order" method="post">
                                                                                            <input type="hidden" name="_token" value="dXltiv9XeKnsrNm0fBB0N65Cb5Ld7dbKsRM6CEcP">                                            <input type="hidden" name="id_product" value="23">
                                                <button type="submit" class="btn btn-soft-primary btn-block transition-3d-hover font-size-2">Order Sekarang</button>
                                            </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4 mb-5">
                                <div class="card shadow h-100">
                                    <!-- Header -->
                                    <div class="card-header border-0 mt-3 justify-content-start" style="margin-bottom: -10px;">
                                                                            <div class="image-product avatar avatar-xl avatar-circle mr-3" data-toggle="popover" data-trigger="hover" data-placement="right" data-html="true" title="" data-content="<div class='mt-n2'>Layanan tersedia dan dapat dipesan dengan lancar.<br><small class='text-primary'><span class='legend-indicator bg-success'></span>Online - 25-08-2022 03:46 (GMT +7)</small></div>" style="border: 0.1rem solid #00C9A6; cursor: pointer;" data-original-title="<span class='square-icon bg-success'></span>Layanan Normal &amp; Tersedia">
                                            <img class="img-fluid p-2" src="https://gosocial.co.id/storage/images/product_sme/2500-followers-mix-1655449211.png" alt="Startup">
                                            <span class="avatar-status avatar-sm-status avatar-success"></span>
                                        </div>
                                        <!-- <div class="image-product avatar avatar-xl avatar-circle mr-3" data-toggle="popover" data-trigger="hover" data-placement="right" data-html="true" title="<span class='square-icon bg-warning'></span>Layanan Terdapat Kendala" data-content="Instagram Followers Indonesia sedikit lebih lambat diproses karena terjadi maintenance di server.<br><small class='text-primary'><span class='legend-indicator bg-warning'></span>3 bulan yang lalu</small>" style="border: 0.1rem solid #F5CA98; cursor: pointer">
                                            <img class="img-fluid p-2" src="https://gosocial.co.id/storage/images/product_sme/2500-followers-mix-1655449211.png" alt="Startup">
                                            <span class="avatar-status avatar-sm-status avatar-warning"></span>
                                        </div>
                                        <div class="image-product avatar avatar-xl avatar-circle mr-3" data-toggle="popover" data-trigger="hover" data-placement="right" data-html="true" title="<span class='square-icon bg-danger'></span>Layanan Tidak Tersedia" data-content="Instagram Followers Indonesia sedang tidak tersedia untuk sementara waktu, hubungi kami untuk informasi lebih lanjut!<br><small class='text-primary'><span class='legend-indicator bg-danger'></span>3 bulan yang lalu</small>" style="border: 0.1rem solid #ED4C78; cursor: pointer">
                                            <img class="img-fluid p-2" src="https://gosocial.co.id/storage/images/product_sme/2500-followers-mix-1655449211.png" alt="Startup">
                                            <span class="avatar-status avatar-sm-status avatar-danger"></span>
                                        </div> -->
                                        <span>
                                            <span class="h2 d-block" style="margin-bottom: -1px;">Startup</span>
                                            <span class="d-block" style="font-size: 14px;">2500 Followers Mix</span>
                                            <div class="d-flex align-self-center align-middle">
                                                <div>
                                                    <!-- <span class="d-block text-muted" style="font-size: 14px;"><s>Rp. 430.000,-</s></span> -->
                                                    <span class="d-block text-danger"><b>Rp. 430.000,-</b></span>
                                                </div>
                                                <!-- <div class="discount-badge discount-badge-red ml-3 mt-2">Disc. 50% <a href="https://www.google.com/" target="_blank"><i class="fas fa-info-circle text-white"></i></a></div> -->
                                            </div>
                                        </span>
                                    </div>
                                    <!-- End Header -->
                                    <hr>
                                    <!-- Body -->
                                    <div class="card-body" style="padding-top: 0.5rem; padding-bottom: 0.7rem;">
                                        <div class="media font-size-1 text-body mb-3">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger mr-2">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"></path>
                                            </svg>
                                            <div class="media-body font-size-2">
                                                Followers Worldwide Terbaik
                                            </div>
                                        </div>
                                        <div class="media font-size-1 text-body mb-3">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger mr-2">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"></path>
                                            </svg>
                                            <div class="media-body font-size-2">
                                                Aman dan Bergaransi 30 Hari
                                            </div>
                                        </div>
                                        <div class="media font-size-1 text-body mb-3">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger mr-2">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"></path>
                                            </svg>
                                            <div class="media-body font-size-2">
                                                Max Order: 100K Followers per Akun
                                            </div>
                                        </div>
                                        <div class="media font-size-1 text-body mb-3">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger mr-2">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"></path>
                                            </svg>
                                            <div class="media-body font-size-2">
                                                8 - 9 Hari Proses Pengerjaan
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Body -->

                                    <div class="card-footer border-0">
                                                                                <form action="https://gosocial.co.id/sme/order" method="post">
                                                                                            <input type="hidden" name="_token" value="dXltiv9XeKnsrNm0fBB0N65Cb5Ld7dbKsRM6CEcP">                                            <input type="hidden" name="id_product" value="24">
                                                <button type="submit" class="btn btn-soft-primary btn-block transition-3d-hover font-size-2">Order Sekarang</button>
                                            </form>
                                    </div>
                                </div>
                            </div>

                            <!-- Kebutuhan Lain -->
                            <div class="col-sm-6 col-lg-4 mb-5">
                                <div class="card bg-dark">
                                    <div class="mt-5">
                                        <figure class="mx-auto text-center">
                                            <img style="height: 7rem; width:auto;" src="https://gosocial.co.id/assets/svg/icons/icon-white-4.svg" alt="SVG">
                                        </figure>
                                        <h2 class="text-white text-center mb-n1">Dapatkan Penawaran Khusus!</h2>
                                        <p class="text-white-70 text-center"><small>Untuk kebutuhan lain diluar paket yang tersedia.</small></p>
                                    </div>
                                    <hr class="opacity-xs my-0 ">
                                    <div class="px-4 pt-2 pb-4 bg-dark">
                                        <div class="d-flex justify-content-start align-items-center font-size-2 text-body mt-2">
                                            <div class="ml-2" style="color: rgba(255, 255, 255, 0.8);">
                                                1. Jumlah order yang lebih besar
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-start align-items-center font-size-2 text-body mt-2">
                                            <div class="ml-2" style="color: rgba(255, 255, 255, 0.8);">
                                                2. Spesifikasi khusus
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-start align-items-center font-size-2 text-body mt-2">
                                            <div class="ml-2" style="color: rgba(255, 255, 255, 0.8);">
                                                3. Lama &amp; proses pengerjaan yang dapat disesuaikan
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-start align-items-center font-size-2 text-body mt-2">
                                            <div class="ml-2" style="color: rgba(255, 255, 255, 0.8);">
                                                4. Kebutuhan Corporate / Perusahaan<br>(perlu kebijakan pembayaran)
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="opacity-xs my-0">
                                    <div class="card-footer border-0 bg-primary px-7 text-center">
                                        <a class="text-white font-weight-bold contact-custom font-size-2" href="https://gosocial.co.id/contact#contact-form">Contact sales</a>
                                    </div>
                                </div>
                            </div>
                            <!-- END Kebutuhan Lain -->
                        </div>
                        <!-- END Followers Mix -->
                    </div>
                    <!-- END Followers -->

                    <!-- Likes -->
                    <div class="tab-pane fade" id="likes" role="tabpanel" aria-labelledby="likes-tab">
                        <!-- Penjelasan Likes -->
                        <div class="card card-frame card-frame-highlighted mt-n6 mb-8">
                            <div class="card-body">
                                <h2>Likes Instagram</h2>
                                <p style="line-height: normal;">
                                    <small class="font-size-2">Likes Instagram adalah bentuk penilaian apakah sebuah konten yang diunggah di Instagram menarik atau tidak menurut pengguna lainnya, algoritma Instagram sekarang akan menampilkan post yang mempunyai metriks likes yang bagus untuk ditampilkan ke pengguna lainnya (non-followers). <span class="text-primary d-md-none d-sm-block read-more" data-id="4"><b>Read More</b></span>
                                        <span class="hide-p hide-p-4">
                                            GoSocial menyediakan <b>Jasa Tambah Likes Instagram</b> yang berasal dari akun aktif Indonesia, bisa digunakan untuk photo, multiple photo, maupun video reels Instagram. Kami mengembangkan metode sendiri yang juga dapat meningkatkan metriks reach &amp; impression organik.
                                        </span>
                                    </small>
                                </p>
                            </div>
                        </div>
                        <!-- Likes Indo -->
                        <div class="row">

                            <div class="col-sm-6 col-lg-4 mb-5">
                                <div class="card shadow h-100">
                                    <!-- Header -->
                                    <div class="card-header border-0 mt-3 justify-content-start" style="margin-bottom: -10px;">
                                                                            <div class="image-product avatar avatar-xl avatar-circle mr-3" data-toggle="popover" data-trigger="hover" data-placement="right" data-html="true" title="" data-content="<div class='mt-n2'>Layanan tersedia dan dapat dipesan dengan lancar.<br><small class='text-primary'><span class='legend-indicator bg-success'></span>Online - 25-08-2022 03:46 (GMT +7)</small></div>" style="border: 0.1rem solid #00C9A6; cursor: pointer;" data-original-title="<span class='square-icon bg-success'></span>Layanan Normal &amp; Tersedia">
                                            <img class="img-fluid p-2" src="https://gosocial.co.id/storage/images/product_sme/100-likes-indonesia-1661400475.png" alt="Lite">
                                            <span class="avatar-status avatar-sm-status avatar-success"></span>
                                        </div>
                                        <!-- <div class="image-product avatar avatar-xl avatar-circle mr-3" data-toggle="popover" data-trigger="hover" data-placement="right" data-html="true" title="<span class='square-icon bg-warning'></span>Layanan Terdapat Kendala" data-content="Instagram Likes Indonesia sedikit lebih lambat diproses karena terjadi maintenance di server.<br><small class='text-primary'><span class='legend-indicator bg-warning'></span>3 bulan yang lalu</small>" style="border: 0.1rem solid #F5CA98; cursor: pointer">
                                            <img class="img-fluid p-2" src="https://gosocial.co.id/storage/images/product_sme/100-likes-indonesia-1655450051.png" alt="Lite">
                                            <span class="avatar-status avatar-sm-status avatar-warning"></span>
                                        </div>
                                        <div class="image-product avatar avatar-xl avatar-circle mr-3" data-toggle="popover" data-trigger="hover" data-placement="right" data-html="true" title="<span class='square-icon bg-danger'></span>Layanan Tidak Tersedia" data-content="Instagram Likes Indonesia sedang tidak tersedia untuk sementara waktu, hubungi kami untuk informasi lebih lanjut!<br><small class='text-primary'><span class='legend-indicator bg-danger'></span>3 bulan yang lalu</small>" style="border: 0.1rem solid #ED4C78; cursor: pointer">
                                            <img class="img-fluid p-2" src="https://gosocial.co.id/storage/images/product_sme/100-likes-indonesia-1655450051.png" alt="Lite">
                                            <span class="avatar-status avatar-sm-status avatar-danger"></span>
                                        </div> -->
                                        <span>
                                            <span class="h2 d-block" style="margin-bottom: -1px;">Lite</span>
                                            <span class="d-block" style="font-size: 14px;">100 Likes Indonesia</span>
                                            <div class="d-flex align-self-center align-middle">
                                                <div>
                                                    <!-- <span class="d-block text-muted" style="font-size: 14px;"><s>Rp. 10.000,-</s></span> -->
                                                    <span class="d-block text-danger"><b>Rp. 10.000,-</b></span>
                                                </div>
                                                <!-- <div class="discount-badge discount-badge-red ml-3 mt-2">Disc. 50% <a href="https://www.google.com/" target="_blank"><i class="fas fa-info-circle text-white"></i></a></div> -->
                                            </div>
                                        </span>
                                    </div>
                                    <!-- End Header -->
                                    <hr>
                                    <!-- Body -->
                                    <div class="card-body" style="padding-top: 0.5rem; padding-bottom: 0.7rem;">
                                        <div class="media font-size-1 text-body mb-3">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger mr-2">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"></path>
                                            </svg>
                                            <div class="media-body font-size-2">
                                                Interaksi dengan Kualitas Terbaik
                                            </div>
                                        </div>
                                        <div class="media font-size-1 text-body mb-3">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger mr-2">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"></path>
                                            </svg>
                                            <div class="media-body font-size-2">
                                                Aman dan Bergaransi 30 Hari
                                            </div>
                                        </div>
                                        <div class="media font-size-1 text-body mb-3">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger mr-2">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"></path>
                                            </svg>
                                            <div class="media-body font-size-2">
                                                Max Order: 10K Likes per Post
                                            </div>
                                        </div>
                                        <div class="media font-size-1 text-body mb-3">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger mr-2">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"></path>
                                            </svg>
                                            <div class="media-body font-size-2">
                                                1 - 2 Hari Proses Pengerjaan
                                            </div>
                                        </div>
                                        <div class="media font-size-1 text-body mb-3">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger mr-2">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"></path>
                                            </svg>
                                            <div class="media-body font-size-2">
                                                Instant Process Available
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Body -->

                                    <div class="card-footer border-0">
                                                                                <form action="https://gosocial.co.id/sme/order" method="post">
                                                                                            <input type="hidden" name="_token" value="dXltiv9XeKnsrNm0fBB0N65Cb5Ld7dbKsRM6CEcP">                                            <input type="hidden" name="id_product" value="8">
                                                <button type="submit" class="btn btn-soft-primary btn-block transition-3d-hover font-size-2">Order Sekarang</button>
                                            </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4 mb-5">
                                <div class="card shadow h-100">
                                    <!-- Header -->
                                    <div class="card-header border-0 mt-3 justify-content-start" style="margin-bottom: -10px;">
                                                                            <div class="image-product avatar avatar-xl avatar-circle mr-3" data-toggle="popover" data-trigger="hover" data-placement="right" data-html="true" title="" data-content="<div class='mt-n2'>Layanan tersedia dan dapat dipesan dengan lancar.<br><small class='text-primary'><span class='legend-indicator bg-success'></span>Online - 25-08-2022 03:46 (GMT +7)</small></div>" style="border: 0.1rem solid #00C9A6; cursor: pointer;" data-original-title="<span class='square-icon bg-success'></span>Layanan Normal &amp; Tersedia">
                                            <img class="img-fluid p-2" src="https://gosocial.co.id/storage/images/product_sme/250-likes-indonesia-1655449871.png" alt="Basic">
                                            <span class="avatar-status avatar-sm-status avatar-success"></span>
                                        </div>
                                        <!-- <div class="image-product avatar avatar-xl avatar-circle mr-3" data-toggle="popover" data-trigger="hover" data-placement="right" data-html="true" title="<span class='square-icon bg-warning'></span>Layanan Terdapat Kendala" data-content="Instagram Likes Indonesia sedikit lebih lambat diproses karena terjadi maintenance di server.<br><small class='text-primary'><span class='legend-indicator bg-warning'></span>3 bulan yang lalu</small>" style="border: 0.1rem solid #F5CA98; cursor: pointer">
                                            <img class="img-fluid p-2" src="https://gosocial.co.id/storage/images/product_sme/250-likes-indonesia-1655449871.png" alt="Basic">
                                            <span class="avatar-status avatar-sm-status avatar-warning"></span>
                                        </div>
                                        <div class="image-product avatar avatar-xl avatar-circle mr-3" data-toggle="popover" data-trigger="hover" data-placement="right" data-html="true" title="<span class='square-icon bg-danger'></span>Layanan Tidak Tersedia" data-content="Instagram Likes Indonesia sedang tidak tersedia untuk sementara waktu, hubungi kami untuk informasi lebih lanjut!<br><small class='text-primary'><span class='legend-indicator bg-danger'></span>3 bulan yang lalu</small>" style="border: 0.1rem solid #ED4C78; cursor: pointer">
                                            <img class="img-fluid p-2" src="https://gosocial.co.id/storage/images/product_sme/250-likes-indonesia-1655449871.png" alt="Basic">
                                            <span class="avatar-status avatar-sm-status avatar-danger"></span>
                                        </div> -->
                                        <span>
                                            <span class="h2 d-block" style="margin-bottom: -1px;">Basic</span>
                                            <span class="d-block" style="font-size: 14px;">250 Likes Indonesia</span>
                                            <div class="d-flex align-self-center align-middle">
                                                <div>
                                                    <!-- <span class="d-block text-muted" style="font-size: 14px;"><s>Rp. 20.000,-</s></span> -->
                                                    <span class="d-block text-danger"><b>Rp. 20.000,-</b></span>
                                                </div>
                                                <!-- <div class="discount-badge discount-badge-red ml-3 mt-2">Disc. 50% <a href="https://www.google.com/" target="_blank"><i class="fas fa-info-circle text-white"></i></a></div> -->
                                            </div>
                                        </span>
                                    </div>
                                    <!-- End Header -->
                                    <hr>
                                    <!-- Body -->
                                    <div class="card-body" style="padding-top: 0.5rem; padding-bottom: 0.7rem;">
                                        <div class="media font-size-1 text-body mb-3">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger mr-2">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"></path>
                                            </svg>
                                            <div class="media-body font-size-2">
                                                Interaksi dengan Kualitas Terbaik
                                            </div>
                                        </div>
                                        <div class="media font-size-1 text-body mb-3">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger mr-2">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"></path>
                                            </svg>
                                            <div class="media-body font-size-2">
                                                Aman dan Bergaransi 30 Hari
                                            </div>
                                        </div>
                                        <div class="media font-size-1 text-body mb-3">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger mr-2">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"></path>
                                            </svg>
                                            <div class="media-body font-size-2">
                                                Max Order: 10K Likes per Post
                                            </div>
                                        </div>
                                        <div class="media font-size-1 text-body mb-3">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger mr-2">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"></path>
                                            </svg>
                                            <div class="media-body font-size-2">
                                                1 - 2 Hari Proses Pengerjaan
                                            </div>
                                        </div>
                                        <div class="media font-size-1 text-body mb-3">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger mr-2">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"></path>
                                            </svg>
                                            <div class="media-body font-size-2">
                                                Instant Process Available
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Body -->

                                    <div class="card-footer border-0">
                                                                                <form action="https://gosocial.co.id/sme/order" method="post">
                                                                                            <input type="hidden" name="_token" value="dXltiv9XeKnsrNm0fBB0N65Cb5Ld7dbKsRM6CEcP">                                            <input type="hidden" name="id_product" value="9">
                                                <button type="submit" class="btn btn-soft-primary btn-block transition-3d-hover font-size-2">Order Sekarang</button>
                                            </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4 mb-5">
                                <div class="card shadow h-100">
                                    <!-- Header -->
                                    <div class="card-header border-0 mt-3 justify-content-start" style="margin-bottom: -10px;">
                                                                            <div class="image-product avatar avatar-xl avatar-circle mr-3" data-toggle="popover" data-trigger="hover" data-placement="right" data-html="true" title="" data-content="<div class='mt-n2'>Layanan tersedia dan dapat dipesan dengan lancar.<br><small class='text-primary'><span class='legend-indicator bg-success'></span>Online - 25-08-2022 03:46 (GMT +7)</small></div>" style="border: 0.1rem solid #00C9A6; cursor: pointer;" data-original-title="<span class='square-icon bg-success'></span>Layanan Normal &amp; Tersedia">
                                            <img class="img-fluid p-2" src="https://gosocial.co.id/storage/images/product_sme/500-likes-indonesia-1655449856.png" alt="Pro+">
                                            <span class="avatar-status avatar-sm-status avatar-success"></span>
                                        </div>
                                        <!-- <div class="image-product avatar avatar-xl avatar-circle mr-3" data-toggle="popover" data-trigger="hover" data-placement="right" data-html="true" title="<span class='square-icon bg-warning'></span>Layanan Terdapat Kendala" data-content="Instagram Likes Indonesia sedikit lebih lambat diproses karena terjadi maintenance di server.<br><small class='text-primary'><span class='legend-indicator bg-warning'></span>3 bulan yang lalu</small>" style="border: 0.1rem solid #F5CA98; cursor: pointer">
                                            <img class="img-fluid p-2" src="https://gosocial.co.id/storage/images/product_sme/500-likes-indonesia-1655449856.png" alt="Pro+">
                                            <span class="avatar-status avatar-sm-status avatar-warning"></span>
                                        </div>
                                        <div class="image-product avatar avatar-xl avatar-circle mr-3" data-toggle="popover" data-trigger="hover" data-placement="right" data-html="true" title="<span class='square-icon bg-danger'></span>Layanan Tidak Tersedia" data-content="Instagram Likes Indonesia sedang tidak tersedia untuk sementara waktu, hubungi kami untuk informasi lebih lanjut!<br><small class='text-primary'><span class='legend-indicator bg-danger'></span>3 bulan yang lalu</small>" style="border: 0.1rem solid #ED4C78; cursor: pointer">
                                            <img class="img-fluid p-2" src="https://gosocial.co.id/storage/images/product_sme/500-likes-indonesia-1655449856.png" alt="Pro+">
                                            <span class="avatar-status avatar-sm-status avatar-danger"></span>
                                        </div> -->
                                        <span>
                                            <span class="h2 d-block" style="margin-bottom: -1px;">Pro+</span>
                                            <span class="d-block" style="font-size: 14px;">500 Likes Indonesia</span>
                                            <div class="d-flex align-self-center align-middle">
                                                <div>
                                                    <!-- <span class="d-block text-muted" style="font-size: 14px;"><s>Rp. 35.000,-</s></span> -->
                                                    <span class="d-block text-danger"><b>Rp. 35.000,-</b></span>
                                                </div>
                                                <!-- <div class="discount-badge discount-badge-red ml-3 mt-2">Disc. 50% <a href="https://www.google.com/" target="_blank"><i class="fas fa-info-circle text-white"></i></a></div> -->
                                            </div>
                                        </span>
                                    </div>
                                    <!-- End Header -->
                                    <hr>
                                    <!-- Body -->
                                    <div class="card-body" style="padding-top: 0.5rem; padding-bottom: 0.7rem;">
                                        <div class="media font-size-1 text-body mb-3">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger mr-2">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"></path>
                                            </svg>
                                            <div class="media-body font-size-2">
                                                Interaksi dengan Kualitas Terbaik
                                            </div>
                                        </div>
                                        <div class="media font-size-1 text-body mb-3">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger mr-2">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"></path>
                                            </svg>
                                            <div class="media-body font-size-2">
                                                Aman dan Bergaransi 30 Hari
                                            </div>
                                        </div>
                                        <div class="media font-size-1 text-body mb-3">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger mr-2">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"></path>
                                            </svg>
                                            <div class="media-body font-size-2">
                                                Max Order: 10K Likes per Post
                                            </div>
                                        </div>
                                        <div class="media font-size-1 text-body mb-3">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger mr-2">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"></path>
                                            </svg>
                                            <div class="media-body font-size-2">
                                                1 - 2 Hari Proses Pengerjaan
                                            </div>
                                        </div>
                                        <div class="media font-size-1 text-body mb-3">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger mr-2">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"></path>
                                            </svg>
                                            <div class="media-body font-size-2">
                                                Instant Process Available
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Body -->

                                    <div class="card-footer border-0">
                                                                                <form action="https://gosocial.co.id/sme/order" method="post">
                                                                                            <input type="hidden" name="_token" value="dXltiv9XeKnsrNm0fBB0N65Cb5Ld7dbKsRM6CEcP">                                            <input type="hidden" name="id_product" value="10">
                                                <button type="submit" class="btn btn-soft-primary btn-block transition-3d-hover font-size-2">Order Sekarang</button>
                                            </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4 mb-5">
                                <div class="card shadow h-100">
                                    <!-- Header -->
                                    <div class="card-header border-0 mt-3 justify-content-start" style="margin-bottom: -10px;">
                                                                            <div class="image-product avatar avatar-xl avatar-circle mr-3" data-toggle="popover" data-trigger="hover" data-placement="right" data-html="true" title="" data-content="<div class='mt-n2'>Layanan tersedia dan dapat dipesan dengan lancar.<br><small class='text-primary'><span class='legend-indicator bg-success'></span>Online - 25-08-2022 03:46 (GMT +7)</small></div>" style="border: 0.1rem solid #00C9A6; cursor: pointer;" data-original-title="<span class='square-icon bg-success'></span>Layanan Normal &amp; Tersedia">
                                            <img class="img-fluid p-2" src="https://gosocial.co.id/storage/images/product_sme/750-likes-indonesia-1655715922.png" alt="Pro Max">
                                            <span class="avatar-status avatar-sm-status avatar-success"></span>
                                        </div>
                                        <!-- <div class="image-product avatar avatar-xl avatar-circle mr-3" data-toggle="popover" data-trigger="hover" data-placement="right" data-html="true" title="<span class='square-icon bg-warning'></span>Layanan Terdapat Kendala" data-content="Instagram Likes Indonesia sedikit lebih lambat diproses karena terjadi maintenance di server.<br><small class='text-primary'><span class='legend-indicator bg-warning'></span>3 bulan yang lalu</small>" style="border: 0.1rem solid #F5CA98; cursor: pointer">
                                            <img class="img-fluid p-2" src="https://gosocial.co.id/storage/images/product_sme/750-likes-indonesia-1655715922.png" alt="Pro Max">
                                            <span class="avatar-status avatar-sm-status avatar-warning"></span>
                                        </div>
                                        <div class="image-product avatar avatar-xl avatar-circle mr-3" data-toggle="popover" data-trigger="hover" data-placement="right" data-html="true" title="<span class='square-icon bg-danger'></span>Layanan Tidak Tersedia" data-content="Instagram Likes Indonesia sedang tidak tersedia untuk sementara waktu, hubungi kami untuk informasi lebih lanjut!<br><small class='text-primary'><span class='legend-indicator bg-danger'></span>3 bulan yang lalu</small>" style="border: 0.1rem solid #ED4C78; cursor: pointer">
                                            <img class="img-fluid p-2" src="https://gosocial.co.id/storage/images/product_sme/750-likes-indonesia-1655715922.png" alt="Pro Max">
                                            <span class="avatar-status avatar-sm-status avatar-danger"></span>
                                        </div> -->
                                        <span>
                                            <span class="h2 d-block" style="margin-bottom: -1px;">Pro Max</span>
                                            <span class="d-block" style="font-size: 14px;">750 Likes Indonesia</span>
                                            <div class="d-flex align-self-center align-middle">
                                                <div>
                                                    <!-- <span class="d-block text-muted" style="font-size: 14px;"><s>Rp. 50.000,-</s></span> -->
                                                    <span class="d-block text-danger"><b>Rp. 50.000,-</b></span>
                                                </div>
                                                <!-- <div class="discount-badge discount-badge-red ml-3 mt-2">Disc. 50% <a href="https://www.google.com/" target="_blank"><i class="fas fa-info-circle text-white"></i></a></div> -->
                                            </div>
                                        </span>
                                    </div>
                                    <!-- End Header -->
                                    <hr>
                                    <!-- Body -->
                                    <div class="card-body" style="padding-top: 0.5rem; padding-bottom: 0.7rem;">
                                        <div class="media font-size-1 text-body mb-3">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger mr-2">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"></path>
                                            </svg>
                                            <div class="media-body font-size-2">
                                                Interaksi dengan Kualitas Terbaik
                                            </div>
                                        </div>
                                        <div class="media font-size-1 text-body mb-3">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger mr-2">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"></path>
                                            </svg>
                                            <div class="media-body font-size-2">
                                                Aman dan Bergaransi 30 Hari
                                            </div>
                                        </div>
                                        <div class="media font-size-1 text-body mb-3">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger mr-2">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"></path>
                                            </svg>
                                            <div class="media-body font-size-2">
                                                Max Order: 10K Likes per Post
                                            </div>
                                        </div>
                                        <div class="media font-size-1 text-body mb-3">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger mr-2">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"></path>
                                            </svg>
                                            <div class="media-body font-size-2">
                                                1 - 2 Hari Proses Pengerjaan
                                            </div>
                                        </div>
                                        <div class="media font-size-1 text-body mb-3">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger mr-2">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"></path>
                                            </svg>
                                            <div class="media-body font-size-2">
                                                Instant Process Available
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Body -->

                                    <div class="card-footer border-0">
                                                                                <form action="https://gosocial.co.id/sme/order" method="post">
                                                                                            <input type="hidden" name="_token" value="dXltiv9XeKnsrNm0fBB0N65Cb5Ld7dbKsRM6CEcP">                                            <input type="hidden" name="id_product" value="11">
                                                <button type="submit" class="btn btn-soft-primary btn-block transition-3d-hover font-size-2">Order Sekarang</button>
                                            </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4 mb-5">
                                <div class="card shadow h-100">
                                    <!-- Header -->
                                    <div class="card-header border-0 mt-3 justify-content-start" style="margin-bottom: -10px;">
                                                                            <div class="image-product avatar avatar-xl avatar-circle mr-3" data-toggle="popover" data-trigger="hover" data-placement="right" data-html="true" title="" data-content="<div class='mt-n2'>Layanan tersedia dan dapat dipesan dengan lancar.<br><small class='text-primary'><span class='legend-indicator bg-success'></span>Online - 25-08-2022 03:46 (GMT +7)</small></div>" style="border: 0.1rem solid #00C9A6; cursor: pointer;" data-original-title="<span class='square-icon bg-success'></span>Layanan Normal &amp; Tersedia">
                                            <img class="img-fluid p-2" src="https://gosocial.co.id/storage/images/product_sme/1000-likes-indonesia-1655711945.png" alt="Extra">
                                            <span class="avatar-status avatar-sm-status avatar-success"></span>
                                        </div>
                                        <!-- <div class="image-product avatar avatar-xl avatar-circle mr-3" data-toggle="popover" data-trigger="hover" data-placement="right" data-html="true" title="<span class='square-icon bg-warning'></span>Layanan Terdapat Kendala" data-content="Instagram Likes Indonesia sedikit lebih lambat diproses karena terjadi maintenance di server.<br><small class='text-primary'><span class='legend-indicator bg-warning'></span>3 bulan yang lalu</small>" style="border: 0.1rem solid #F5CA98; cursor: pointer">
                                            <img class="img-fluid p-2" src="https://gosocial.co.id/storage/images/product_sme/1000-likes-indonesia-1655711945.png" alt="Extra">
                                            <span class="avatar-status avatar-sm-status avatar-warning"></span>
                                        </div>
                                        <div class="image-product avatar avatar-xl avatar-circle mr-3" data-toggle="popover" data-trigger="hover" data-placement="right" data-html="true" title="<span class='square-icon bg-danger'></span>Layanan Tidak Tersedia" data-content="Instagram Likes Indonesia sedang tidak tersedia untuk sementara waktu, hubungi kami untuk informasi lebih lanjut!<br><small class='text-primary'><span class='legend-indicator bg-danger'></span>3 bulan yang lalu</small>" style="border: 0.1rem solid #ED4C78; cursor: pointer">
                                            <img class="img-fluid p-2" src="https://gosocial.co.id/storage/images/product_sme/1000-likes-indonesia-1655711945.png" alt="Extra">
                                            <span class="avatar-status avatar-sm-status avatar-danger"></span>
                                        </div> -->
                                        <span>
                                            <span class="h2 d-block" style="margin-bottom: -1px;">Extra</span>
                                            <span class="d-block" style="font-size: 14px;">1000 Likes Indonesia</span>
                                            <div class="d-flex align-self-center align-middle">
                                                <div>
                                                    <!-- <span class="d-block text-muted" style="font-size: 14px;"><s>Rp. 75.000,-</s></span> -->
                                                    <span class="d-block text-danger"><b>Rp. 75.000,-</b></span>
                                                </div>
                                                <!-- <div class="discount-badge discount-badge-red ml-3 mt-2">Disc. 50% <a href="https://www.google.com/" target="_blank"><i class="fas fa-info-circle text-white"></i></a></div> -->
                                            </div>
                                        </span>
                                    </div>
                                    <!-- End Header -->
                                    <hr>
                                    <!-- Body -->
                                    <div class="card-body" style="padding-top: 0.5rem; padding-bottom: 0.7rem;">
                                        <div class="media font-size-1 text-body mb-3">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger mr-2">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"></path>
                                            </svg>
                                            <div class="media-body font-size-2">
                                                Interaksi dengan Kualitas Terbaik
                                            </div>
                                        </div>
                                        <div class="media font-size-1 text-body mb-3">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger mr-2">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"></path>
                                            </svg>
                                            <div class="media-body font-size-2">
                                                Aman dan Bergaransi 30 Hari
                                            </div>
                                        </div>
                                        <div class="media font-size-1 text-body mb-3">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger mr-2">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"></path>
                                            </svg>
                                            <div class="media-body font-size-2">
                                                Max Order: 10K Likes per Post
                                            </div>
                                        </div>
                                        <div class="media font-size-1 text-body mb-3">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger mr-2">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"></path>
                                            </svg>
                                            <div class="media-body font-size-2">
                                                1 - 2 Hari Proses Pengerjaan
                                            </div>
                                        </div>
                                        <div class="media font-size-1 text-body mb-3">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger mr-2">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"></path>
                                            </svg>
                                            <div class="media-body font-size-2">
                                                Instant Process Available
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Body -->

                                    <div class="card-footer border-0">
                                                                                <form action="https://gosocial.co.id/sme/order" method="post">
                                                                                            <input type="hidden" name="_token" value="dXltiv9XeKnsrNm0fBB0N65Cb5Ld7dbKsRM6CEcP">                                            <input type="hidden" name="id_product" value="12">
                                                <button type="submit" class="btn btn-soft-primary btn-block transition-3d-hover font-size-2">Order Sekarang</button>
                                            </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4 mb-5">
                                <div class="card shadow h-100">
                                    <!-- Header -->
                                    <div class="card-header border-0 mt-3 justify-content-start" style="margin-bottom: -10px;">
                                                                            <div class="image-product avatar avatar-xl avatar-circle mr-3" data-toggle="popover" data-trigger="hover" data-placement="right" data-html="true" title="" data-content="<div class='mt-n2'>Layanan tersedia dan dapat dipesan dengan lancar.<br><small class='text-primary'><span class='legend-indicator bg-success'></span>Online - 25-08-2022 03:46 (GMT +7)</small></div>" style="border: 0.1rem solid #00C9A6; cursor: pointer;" data-original-title="<span class='square-icon bg-success'></span>Layanan Normal &amp; Tersedia">
                                            <img class="img-fluid p-2" src="https://gosocial.co.id/storage/images/product_sme/2000-likes-indonesia-1655711959.png" alt="Ultra">
                                            <span class="avatar-status avatar-sm-status avatar-success"></span>
                                        </div>
                                        <!-- <div class="image-product avatar avatar-xl avatar-circle mr-3" data-toggle="popover" data-trigger="hover" data-placement="right" data-html="true" title="<span class='square-icon bg-warning'></span>Layanan Terdapat Kendala" data-content="Instagram Likes Indonesia sedikit lebih lambat diproses karena terjadi maintenance di server.<br><small class='text-primary'><span class='legend-indicator bg-warning'></span>3 bulan yang lalu</small>" style="border: 0.1rem solid #F5CA98; cursor: pointer">
                                            <img class="img-fluid p-2" src="https://gosocial.co.id/storage/images/product_sme/2000-likes-indonesia-1655711959.png" alt="Ultra">
                                            <span class="avatar-status avatar-sm-status avatar-warning"></span>
                                        </div>
                                        <div class="image-product avatar avatar-xl avatar-circle mr-3" data-toggle="popover" data-trigger="hover" data-placement="right" data-html="true" title="<span class='square-icon bg-danger'></span>Layanan Tidak Tersedia" data-content="Instagram Likes Indonesia sedang tidak tersedia untuk sementara waktu, hubungi kami untuk informasi lebih lanjut!<br><small class='text-primary'><span class='legend-indicator bg-danger'></span>3 bulan yang lalu</small>" style="border: 0.1rem solid #ED4C78; cursor: pointer">
                                            <img class="img-fluid p-2" src="https://gosocial.co.id/storage/images/product_sme/2000-likes-indonesia-1655711959.png" alt="Ultra">
                                            <span class="avatar-status avatar-sm-status avatar-danger"></span>
                                        </div> -->
                                        <span>
                                            <span class="h2 d-block" style="margin-bottom: -1px;">Ultra</span>
                                            <span class="d-block" style="font-size: 14px;">2000 Likes Indonesia</span>
                                            <div class="d-flex align-self-center align-middle">
                                                <div>
                                                    <!-- <span class="d-block text-muted" style="font-size: 14px;"><s>Rp. 120.000,-</s></span> -->
                                                    <span class="d-block text-danger"><b>Rp. 120.000,-</b></span>
                                                </div>
                                                <!-- <div class="discount-badge discount-badge-red ml-3 mt-2">Disc. 50% <a href="https://www.google.com/" target="_blank"><i class="fas fa-info-circle text-white"></i></a></div> -->
                                            </div>
                                        </span>
                                    </div>
                                    <!-- End Header -->
                                    <hr>
                                    <!-- Body -->
                                    <div class="card-body" style="padding-top: 0.5rem; padding-bottom: 0.7rem;">
                                        <div class="media font-size-1 text-body mb-3">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger mr-2">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"></path>
                                            </svg>
                                            <div class="media-body font-size-2">
                                                Interaksi dengan Kualitas Terbaik
                                            </div>
                                        </div>
                                        <div class="media font-size-1 text-body mb-3">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger mr-2">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"></path>
                                            </svg>
                                            <div class="media-body font-size-2">
                                                Aman dan Bergaransi 30 Hari
                                            </div>
                                        </div>
                                        <div class="media font-size-1 text-body mb-3">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger mr-2">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"></path>
                                            </svg>
                                            <div class="media-body font-size-2">
                                                Max Order: 10K Likes per Post
                                            </div>
                                        </div>
                                        <div class="media font-size-1 text-body mb-3">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger mr-2">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"></path>
                                            </svg>
                                            <div class="media-body font-size-2">
                                                2 - 3 Hari Proses Pengerjaan
                                            </div>
                                        </div>
                                        <div class="media font-size-1 text-body mb-3">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger mr-2">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"></path>
                                            </svg>
                                            <div class="media-body font-size-2">
                                                Instant Process Available
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Body -->

                                    <div class="card-footer border-0">
                                                                                <form action="https://gosocial.co.id/sme/order" method="post">
                                                                                            <input type="hidden" name="_token" value="dXltiv9XeKnsrNm0fBB0N65Cb5Ld7dbKsRM6CEcP">                                            <input type="hidden" name="id_product" value="13">
                                                <button type="submit" class="btn btn-soft-primary btn-block transition-3d-hover font-size-2">Order Sekarang</button>
                                            </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4 mb-5">
                                <div class="card shadow h-100">
                                    <!-- Header -->
                                    <div class="card-header border-0 mt-3 justify-content-start" style="margin-bottom: -10px;">
                                                                            <div class="image-product avatar avatar-xl avatar-circle mr-3" data-toggle="popover" data-trigger="hover" data-placement="right" data-html="true" title="" data-content="<div class='mt-n2'>Layanan tersedia dan dapat dipesan dengan lancar.<br><small class='text-primary'><span class='legend-indicator bg-success'></span>Online - 25-08-2022 03:46 (GMT +7)</small></div>" style="border: 0.1rem solid #00C9A6; cursor: pointer;" data-original-title="<span class='square-icon bg-success'></span>Layanan Normal &amp; Tersedia">
                                            <img class="img-fluid p-2" src="https://gosocial.co.id/storage/images/product_sme/2500-likes-indonesia-1655711970.png" alt="Super">
                                            <span class="avatar-status avatar-sm-status avatar-success"></span>
                                        </div>
                                        <!-- <div class="image-product avatar avatar-xl avatar-circle mr-3" data-toggle="popover" data-trigger="hover" data-placement="right" data-html="true" title="<span class='square-icon bg-warning'></span>Layanan Terdapat Kendala" data-content="Instagram Likes Indonesia sedikit lebih lambat diproses karena terjadi maintenance di server.<br><small class='text-primary'><span class='legend-indicator bg-warning'></span>3 bulan yang lalu</small>" style="border: 0.1rem solid #F5CA98; cursor: pointer">
                                            <img class="img-fluid p-2" src="https://gosocial.co.id/storage/images/product_sme/2500-likes-indonesia-1655711970.png" alt="Super">
                                            <span class="avatar-status avatar-sm-status avatar-warning"></span>
                                        </div>
                                        <div class="image-product avatar avatar-xl avatar-circle mr-3" data-toggle="popover" data-trigger="hover" data-placement="right" data-html="true" title="<span class='square-icon bg-danger'></span>Layanan Tidak Tersedia" data-content="Instagram Likes Indonesia sedang tidak tersedia untuk sementara waktu, hubungi kami untuk informasi lebih lanjut!<br><small class='text-primary'><span class='legend-indicator bg-danger'></span>3 bulan yang lalu</small>" style="border: 0.1rem solid #ED4C78; cursor: pointer">
                                            <img class="img-fluid p-2" src="https://gosocial.co.id/storage/images/product_sme/2500-likes-indonesia-1655711970.png" alt="Super">
                                            <span class="avatar-status avatar-sm-status avatar-danger"></span>
                                        </div> -->
                                        <span>
                                            <span class="h2 d-block" style="margin-bottom: -1px;">Super</span>
                                            <span class="d-block" style="font-size: 14px;">2500 Likes Indonesia</span>
                                            <div class="d-flex align-self-center align-middle">
                                                <div>
                                                    <!-- <span class="d-block text-muted" style="font-size: 14px;"><s>Rp. 150.000,-</s></span> -->
                                                    <span class="d-block text-danger"><b>Rp. 150.000,-</b></span>
                                                </div>
                                                <!-- <div class="discount-badge discount-badge-red ml-3 mt-2">Disc. 50% <a href="https://www.google.com/" target="_blank"><i class="fas fa-info-circle text-white"></i></a></div> -->
                                            </div>
                                        </span>
                                    </div>
                                    <!-- End Header -->
                                    <hr>
                                    <!-- Body -->
                                    <div class="card-body" style="padding-top: 0.5rem; padding-bottom: 0.7rem;">
                                        <div class="media font-size-1 text-body mb-3">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger mr-2">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"></path>
                                            </svg>
                                            <div class="media-body font-size-2">
                                                Interaksi dengan Kualitas Terbaik
                                            </div>
                                        </div>
                                        <div class="media font-size-1 text-body mb-3">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger mr-2">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"></path>
                                            </svg>
                                            <div class="media-body font-size-2">
                                                Aman dan Bergaransi 30 Hari
                                            </div>
                                        </div>
                                        <div class="media font-size-1 text-body mb-3">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger mr-2">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"></path>
                                            </svg>
                                            <div class="media-body font-size-2">
                                                Max Order: 10K Likes per Post
                                            </div>
                                        </div>
                                        <div class="media font-size-1 text-body mb-3">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger mr-2">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"></path>
                                            </svg>
                                            <div class="media-body font-size-2">
                                                2 - 3 Hari Proses Pengerjaan
                                            </div>
                                        </div>
                                        <div class="media font-size-1 text-body mb-3">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger mr-2">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"></path>
                                            </svg>
                                            <div class="media-body font-size-2">
                                                Instant Process Available
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Body -->

                                    <div class="card-footer border-0">
                                                                                <form action="https://gosocial.co.id/sme/order" method="post">
                                                                                            <input type="hidden" name="_token" value="dXltiv9XeKnsrNm0fBB0N65Cb5Ld7dbKsRM6CEcP">                                            <input type="hidden" name="id_product" value="14">
                                                <button type="submit" class="btn btn-soft-primary btn-block transition-3d-hover font-size-2">Order Sekarang</button>
                                            </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4 mb-5">
                                <div class="card shadow h-100">
                                    <!-- Header -->
                                    <div class="card-header border-0 mt-3 justify-content-start" style="margin-bottom: -10px;">
                                                                            <div class="image-product avatar avatar-xl avatar-circle mr-3" data-toggle="popover" data-trigger="hover" data-placement="right" data-html="true" title="" data-content="<div class='mt-n2'>Layanan tersedia dan dapat dipesan dengan lancar.<br><small class='text-primary'><span class='legend-indicator bg-success'></span>Online - 25-08-2022 03:46 (GMT +7)</small></div>" style="border: 0.1rem solid #00C9A6; cursor: pointer;" data-original-title="<span class='square-icon bg-success'></span>Layanan Normal &amp; Tersedia">
                                            <img class="img-fluid p-2" src="https://gosocial.co.id/storage/images/product_sme/5000-likes-indonesia-1660894471.png" alt="Hyper">
                                            <span class="avatar-status avatar-sm-status avatar-success"></span>
                                        </div>
                                        <!-- <div class="image-product avatar avatar-xl avatar-circle mr-3" data-toggle="popover" data-trigger="hover" data-placement="right" data-html="true" title="<span class='square-icon bg-warning'></span>Layanan Terdapat Kendala" data-content="Instagram Likes Indonesia sedikit lebih lambat diproses karena terjadi maintenance di server.<br><small class='text-primary'><span class='legend-indicator bg-warning'></span>5 hari yang lalu</small>" style="border: 0.1rem solid #F5CA98; cursor: pointer">
                                            <img class="img-fluid p-2" src="https://gosocial.co.id/storage/images/product_sme/5000-likes-indonesia-1660894471.png" alt="Hyper">
                                            <span class="avatar-status avatar-sm-status avatar-warning"></span>
                                        </div>
                                        <div class="image-product avatar avatar-xl avatar-circle mr-3" data-toggle="popover" data-trigger="hover" data-placement="right" data-html="true" title="<span class='square-icon bg-danger'></span>Layanan Tidak Tersedia" data-content="Instagram Likes Indonesia sedang tidak tersedia untuk sementara waktu, hubungi kami untuk informasi lebih lanjut!<br><small class='text-primary'><span class='legend-indicator bg-danger'></span>5 hari yang lalu</small>" style="border: 0.1rem solid #ED4C78; cursor: pointer">
                                            <img class="img-fluid p-2" src="https://gosocial.co.id/storage/images/product_sme/5000-likes-indonesia-1660894471.png" alt="Hyper">
                                            <span class="avatar-status avatar-sm-status avatar-danger"></span>
                                        </div> -->
                                        <span>
                                            <span class="h2 d-block" style="margin-bottom: -1px;">Hyper</span>
                                            <span class="d-block" style="font-size: 14px;">5000 Likes Indonesia</span>
                                            <div class="d-flex align-self-center align-middle">
                                                <div>
                                                    <!-- <span class="d-block text-muted" style="font-size: 14px;"><s>Rp. 250.000,-</s></span> -->
                                                    <span class="d-block text-danger"><b>Rp. 250.000,-</b></span>
                                                </div>
                                                <!-- <div class="discount-badge discount-badge-red ml-3 mt-2">Disc. 50% <a href="https://www.google.com/" target="_blank"><i class="fas fa-info-circle text-white"></i></a></div> -->
                                            </div>
                                        </span>
                                    </div>
                                    <!-- End Header -->
                                    <hr>
                                    <!-- Body -->
                                    <div class="card-body" style="padding-top: 0.5rem; padding-bottom: 0.7rem;">
                                        <div class="media font-size-1 text-body mb-3">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger mr-2">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"></path>
                                            </svg>
                                            <div class="media-body font-size-2">
                                                Interaksi dengan Kualitas Terbaik
                                            </div>
                                        </div>
                                        <div class="media font-size-1 text-body mb-3">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger mr-2">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"></path>
                                            </svg>
                                            <div class="media-body font-size-2">
                                                Aman dan Bergaransi 30 Hari
                                            </div>
                                        </div>
                                        <div class="media font-size-1 text-body mb-3">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger mr-2">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"></path>
                                            </svg>
                                            <div class="media-body font-size-2">
                                                Max Order: 10K Likes per Post
                                            </div>
                                        </div>
                                        <div class="media font-size-1 text-body mb-3">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger mr-2">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"></path>
                                            </svg>
                                            <div class="media-body font-size-2">
                                                2 - 4 Hari Proses Pengerjaan
                                            </div>
                                        </div>
                                        <div class="media font-size-1 text-body mb-3">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger mr-2">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"></path>
                                            </svg>
                                            <div class="media-body font-size-2">
                                                Instant Process Available
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Body -->

                                    <div class="card-footer border-0">
                                                                                <form action="https://gosocial.co.id/sme/order" method="post">
                                                                                            <input type="hidden" name="_token" value="dXltiv9XeKnsrNm0fBB0N65Cb5Ld7dbKsRM6CEcP">                                            <input type="hidden" name="id_product" value="107">
                                                <button type="submit" class="btn btn-soft-primary btn-block transition-3d-hover font-size-2">Order Sekarang</button>
                                            </form>
                                    </div>
                                </div>
                            </div>

                            <!-- Kebutuhan Lain -->
                            <div class="col-sm-6 col-lg-4 mb-5">
                                <div class="card bg-dark">
                                    <div class="position-absolute right-0 mr-3 mt-3 information-custom">
                                        <i class="fas fa-info-circle" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-html="true" title="" data-content="Diperuntukkan bagi bisnis / perusahaan yang membutuhkan penawaran resmi dengan spesifikasi / ketentuan khusus." data-original-title="Request Penawaran Custom"></i>
                                    </div>
                                    <div class="mt-5">
                                        <figure class="text-center mx-auto">
                                            <img style="height: 7rem; width:auto" src="https://gosocial.co.id/assets/svg/icons/icon-white-4.svg" alt="SVG">
                                        </figure>
                                        <h2 class="text-white text-center mb-n1">Dapatkan Penawaran Khusus!</h2>
                                        <p class="text-white-70 text-center"><small>Untuk kebutuhan lain diluar paket yang tersedia.</small></p>
                                    </div>
                                    <hr class="opacity-xs my-0 ">
                                    <div class="px-4 pt-2 pb-9 bg-dark">
                                        <div class="d-flex justify-content-start align-items-center font-size-1 text-body mt-2">
                                            <div class="ml-2 font-size-2" style="color: rgba(255, 255, 255, 0.8);">
                                                1. Jumlah order yang lebih besar
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-start align-items-center font-size-1 text-body mt-2">
                                            <div class="ml-2 font-size-2" style="color: rgba(255, 255, 255, 0.8);">
                                                2. Spesifikasi khusus
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-start align-items-center font-size-1 text-body mt-2">
                                            <div class="ml-2 font-size-2" style="color: rgba(255, 255, 255, 0.8);">
                                                3. Lama &amp; proses pengerjaan yang dapat disesuaikan
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-start align-items-center font-size-1 text-body mt-2">
                                            <div class="ml-2 font-size-2" style="color: rgba(255, 255, 255, 0.8);">
                                                4. Kebutuhan Corporate / Perusahaan<br>(perlu kebijakan pembayaran)
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="opacity-xs my-0">
                                    <div class="card-footer border-0 bg-primary px-7 text-center">
                                        <a class="text-white font-weight-bold contact-custom font-size-2" href="https://gosocial.co.id/contact#contact-form">Contact sales</a>
                                    </div>
                                </div>
                            </div>
                            <!-- END Kebutuhan Lain -->

                        </div>
                        <!-- END Likes Indo -->
                    </div>
                    <!-- END Likes -->

                    <!-- Views -->
                    <div class="tab-pane fade active show" id="views" role="tabpanel" aria-labelledby="views-tab">
                        <!-- Penjelasan Likes -->
                        <div class="card card-frame card-frame-highlighted mt-n6 mb-8">
                            <div class="card-body">
                                <h2>Views Instagram</h2>
                                <p style="line-height: normal;">
                                    <small class="font-size-2">Fitur view di Instagram berfungsi untuk menghitung jumlah penonton video di Instagram. Dengan ini, pengguna bakal tahu berapa jumlah netizen yang melihat video unggahannya.
                                        Hal ini juga menjadi indikator apakah sebuah video yang diunggah di Instagram telah menjangkau banyak pengguna lainnya atau belum.<span class="text-primary d-md-none d-sm-block read-more" data-id="6"><b>Read More</b></span>
                                        <span class="hide-p hide-p-6">
                                            GoSocial menyediakan <b>Jasa Tambah Views Instagram</b> yang dapat meningkatkan views untuk video reels / post biasa di Instagram, kami mengembangkan metode sendiri yang juga dapat meningkatkan metriks reach &amp; impression juga secara organik.
                                        </span>
                                    </small>
                                </p>
                            </div>
                        </div>

                        <!-- Views Indo -->
                        <div class="row">
                            <div class="col-sm-6 col-lg-4 mb-5">
                                <div class="card shadow h-100">
                                    <!-- Header -->
                                    <div class="card-header border-0 mt-3 justify-content-start" style="margin-bottom: -10px;">
                                                                            <div class="image-product avatar avatar-xl avatar-circle mr-3" data-toggle="popover" data-trigger="hover" data-placement="right" data-html="true" title="" data-content="<div class='mt-n2'>Layanan tersedia dan dapat dipesan dengan lancar.<br><small class='text-primary'><span class='legend-indicator bg-success'></span>Online - 25-08-2022 03:46 (GMT +7)</small></div>" style="border: 0.1rem solid #00C9A6; cursor: pointer;" data-original-title="<span class='square-icon bg-success'></span>Layanan Normal &amp; Tersedia">
                                            <img class="img-fluid p-2" src="https://gosocial.co.id/storage/images/product_sme/500-views-mix-1656421836.png" alt="Pro Max">
                                            <span class="avatar-status avatar-sm-status avatar-success"></span>
                                        </div>
                                        <!-- <div class="image-product avatar avatar-xl avatar-circle mr-3" data-toggle="popover" data-trigger="hover" data-placement="right" data-html="true" title="<span class='square-icon bg-warning'></span>Layanan Terdapat Kendala" data-content="Instagram Likes Indonesia sedikit lebih lambat diproses karena terjadi maintenance di server.<br><small class='text-primary'><span class='legend-indicator bg-warning'></span>3 bulan yang lalu</small>" style="border: 0.1rem solid #F5CA98; cursor: pointer">
                                            <img class="img-fluid p-2" src="https://gosocial.co.id/storage/images/product_sme/500-views-mix-1656421836.png" alt="Pro Max">
                                            <span class="avatar-status avatar-sm-status avatar-warning"></span>
                                        </div>
                                        <div class="image-product avatar avatar-xl avatar-circle mr-3" data-toggle="popover" data-trigger="hover" data-placement="right" data-html="true" title="<span class='square-icon bg-danger'></span>Layanan Tidak Tersedia" data-content="Instagram Likes Indonesia sedang tidak tersedia untuk sementara waktu, hubungi kami untuk informasi lebih lanjut!<br><small class='text-primary'><span class='legend-indicator bg-danger'></span>3 bulan yang lalu</small>" style="border: 0.1rem solid #ED4C78; cursor: pointer">
                                            <img class="img-fluid p-2" src="https://gosocial.co.id/storage/images/product_sme/500-views-mix-1656421836.png" alt="Pro Max">
                                            <span class="avatar-status avatar-sm-status avatar-danger"></span>
                                        </div> -->
                                        <span>
                                            <span class="h2 d-block" style="margin-bottom: -1px;">Pro Max</span>
                                            <span class="d-block" style="font-size: 14px;">500 Views Mix</span>
                                            <div class="d-flex align-self-center align-middle">
                                                <div>
                                                    <!-- <span class="d-block text-muted" style="font-size: 14px;"><s>Rp. 20.000,-</s></span> -->
                                                    <span class="d-block text-danger"><b>Rp. 20.000,-</b></span>
                                                </div>
                                                <!-- <div class="discount-badge discount-badge-red ml-3 mt-2">Disc. 50% <a href="https://www.google.com/" target="_blank"><i class="fas fa-info-circle text-white"></i></a></div> -->
                                            </div>
                                        </span>
                                    </div>
                                    <!-- End Header -->
                                    <hr>
                                    <!-- Body -->
                                    <div class="card-body" style="padding-top: 0.5rem; padding-bottom: 0.7rem;">
                                        <div class="media font-size-1 text-body mb-3">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger mr-2">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"></path>
                                            </svg>
                                            <div class="media-body font-size-2">
                                                Interaksi dengan Kualitas Terbaik
                                            </div>
                                        </div>
                                        <div class="media font-size-1 text-body mb-3">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger mr-2">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"></path>
                                            </svg>
                                            <div class="media-body font-size-2">
                                                Aman dan Bergaransi 30 Hari
                                            </div>
                                        </div>
                                        <div class="media font-size-1 text-body mb-3">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger mr-2">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"></path>
                                            </svg>
                                            <div class="media-body font-size-2">
                                                Max Order: 100K Views per Post
                                            </div>
                                        </div>
                                        <div class="media font-size-1 text-body mb-3">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger mr-2">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"></path>
                                            </svg>
                                            <div class="media-body font-size-2">
                                                1 - 2 Hari Proses Pengerjaan
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Body -->

                                    <div class="card-footer border-0">
                                                                                <form action="https://gosocial.co.id/sme/order" method="post">
                                                                                            <input type="hidden" name="_token" value="dXltiv9XeKnsrNm0fBB0N65Cb5Ld7dbKsRM6CEcP">                                            <input type="hidden" name="id_product" value="25">
                                                <button type="submit" class="btn btn-soft-primary btn-block transition-3d-hover font-size-2">Order Sekarang</button>
                                            </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4 mb-5">
                                <div class="card shadow h-100">
                                    <!-- Header -->
                                    <div class="card-header border-0 mt-3 justify-content-start" style="margin-bottom: -10px;">
                                                                            <div class="image-product avatar avatar-xl avatar-circle mr-3" data-toggle="popover" data-trigger="hover" data-placement="right" data-html="true" title="" data-content="<div class='mt-n2'>Layanan tersedia dan dapat dipesan dengan lancar.<br><small class='text-primary'><span class='legend-indicator bg-success'></span>Online - 25-08-2022 03:46 (GMT +7)</small></div>" style="border: 0.1rem solid #00C9A6; cursor: pointer;" data-original-title="<span class='square-icon bg-success'></span>Layanan Normal &amp; Tersedia">
                                            <img class="img-fluid p-2" src="https://gosocial.co.id/storage/images/product_sme/1000-views-mix-1656421840.png" alt="Extra">
                                            <span class="avatar-status avatar-sm-status avatar-success"></span>
                                        </div>
                                        <!-- <div class="image-product avatar avatar-xl avatar-circle mr-3" data-toggle="popover" data-trigger="hover" data-placement="right" data-html="true" title="<span class='square-icon bg-warning'></span>Layanan Terdapat Kendala" data-content="Instagram Likes Indonesia sedikit lebih lambat diproses karena terjadi maintenance di server.<br><small class='text-primary'><span class='legend-indicator bg-warning'></span>3 bulan yang lalu</small>" style="border: 0.1rem solid #F5CA98; cursor: pointer">
                                            <img class="img-fluid p-2" src="https://gosocial.co.id/storage/images/product_sme/1000-views-mix-1656421840.png" alt="Extra">
                                            <span class="avatar-status avatar-sm-status avatar-warning"></span>
                                        </div>
                                        <div class="image-product avatar avatar-xl avatar-circle mr-3" data-toggle="popover" data-trigger="hover" data-placement="right" data-html="true" title="<span class='square-icon bg-danger'></span>Layanan Tidak Tersedia" data-content="Instagram Likes Indonesia sedang tidak tersedia untuk sementara waktu, hubungi kami untuk informasi lebih lanjut!<br><small class='text-primary'><span class='legend-indicator bg-danger'></span>3 bulan yang lalu</small>" style="border: 0.1rem solid #ED4C78; cursor: pointer">
                                            <img class="img-fluid p-2" src="https://gosocial.co.id/storage/images/product_sme/1000-views-mix-1656421840.png" alt="Extra">
                                            <span class="avatar-status avatar-sm-status avatar-danger"></span>
                                        </div> -->
                                        <span>
                                            <span class="h2 d-block" style="margin-bottom: -1px;">Extra</span>
                                            <span class="d-block" style="font-size: 14px;">1000 Views Mix</span>
                                            <div class="d-flex align-self-center align-middle">
                                                <div>
                                                    <!-- <span class="d-block text-muted" style="font-size: 14px;"><s>Rp. 35.000,-</s></span> -->
                                                    <span class="d-block text-danger"><b>Rp. 35.000,-</b></span>
                                                </div>
                                                <!-- <div class="discount-badge discount-badge-red ml-3 mt-2">Disc. 50% <a href="https://www.google.com/" target="_blank"><i class="fas fa-info-circle text-white"></i></a></div> -->
                                            </div>
                                        </span>
                                    </div>
                                    <!-- End Header -->
                                    <hr>
                                    <!-- Body -->
                                    <div class="card-body" style="padding-top: 0.5rem; padding-bottom: 0.7rem;">
                                        <div class="media font-size-1 text-body mb-3">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger mr-2">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"></path>
                                            </svg>
                                            <div class="media-body font-size-2">
                                                Interaksi dengan Kualitas Terbaik
                                            </div>
                                        </div>
                                        <div class="media font-size-1 text-body mb-3">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger mr-2">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"></path>
                                            </svg>
                                            <div class="media-body font-size-2">
                                                Aman dan Bergaransi 30 Hari
                                            </div>
                                        </div>
                                        <div class="media font-size-1 text-body mb-3">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger mr-2">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"></path>
                                            </svg>
                                            <div class="media-body font-size-2">
                                                Max Order: 100K Views per Post
                                            </div>
                                        </div>
                                        <div class="media font-size-1 text-body mb-3">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger mr-2">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"></path>
                                            </svg>
                                            <div class="media-body font-size-2">
                                                1 - 2 Hari Proses Pengerjaan
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Body -->

                                    <div class="card-footer border-0">
                                                                                <form action="https://gosocial.co.id/sme/order" method="post">
                                                                                            <input type="hidden" name="_token" value="dXltiv9XeKnsrNm0fBB0N65Cb5Ld7dbKsRM6CEcP">                                            <input type="hidden" name="id_product" value="26">
                                                <button type="submit" class="btn btn-soft-primary btn-block transition-3d-hover font-size-2">Order Sekarang</button>
                                            </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4 mb-5">
                                <div class="card shadow h-100">
                                    <!-- Header -->
                                    <div class="card-header border-0 mt-3 justify-content-start" style="margin-bottom: -10px;">
                                                                            <div class="image-product avatar avatar-xl avatar-circle mr-3" data-toggle="popover" data-trigger="hover" data-placement="right" data-html="true" title="" data-content="<div class='mt-n2'>Layanan tersedia dan dapat dipesan dengan lancar.<br><small class='text-primary'><span class='legend-indicator bg-success'></span>Online - 25-08-2022 03:46 (GMT +7)</small></div>" style="border: 0.1rem solid #00C9A6; cursor: pointer;" data-original-title="<span class='square-icon bg-success'></span>Layanan Normal &amp; Tersedia">
                                            <img class="img-fluid p-2" src="https://gosocial.co.id/storage/images/product_sme/2500-views-mix-1656421845.png" alt="Ultra">
                                            <span class="avatar-status avatar-sm-status avatar-success"></span>
                                        </div>
                                        <!-- <div class="image-product avatar avatar-xl avatar-circle mr-3" data-toggle="popover" data-trigger="hover" data-placement="right" data-html="true" title="<span class='square-icon bg-warning'></span>Layanan Terdapat Kendala" data-content="Instagram Likes Indonesia sedikit lebih lambat diproses karena terjadi maintenance di server.<br><small class='text-primary'><span class='legend-indicator bg-warning'></span>3 bulan yang lalu</small>" style="border: 0.1rem solid #F5CA98; cursor: pointer">
                                            <img class="img-fluid p-2" src="https://gosocial.co.id/storage/images/product_sme/2500-views-mix-1656421845.png" alt="Ultra">
                                            <span class="avatar-status avatar-sm-status avatar-warning"></span>
                                        </div>
                                        <div class="image-product avatar avatar-xl avatar-circle mr-3" data-toggle="popover" data-trigger="hover" data-placement="right" data-html="true" title="<span class='square-icon bg-danger'></span>Layanan Tidak Tersedia" data-content="Instagram Likes Indonesia sedang tidak tersedia untuk sementara waktu, hubungi kami untuk informasi lebih lanjut!<br><small class='text-primary'><span class='legend-indicator bg-danger'></span>3 bulan yang lalu</small>" style="border: 0.1rem solid #ED4C78; cursor: pointer">
                                            <img class="img-fluid p-2" src="https://gosocial.co.id/storage/images/product_sme/2500-views-mix-1656421845.png" alt="Ultra">
                                            <span class="avatar-status avatar-sm-status avatar-danger"></span>
                                        </div> -->
                                        <span>
                                            <span class="h2 d-block" style="margin-bottom: -1px;">Ultra</span>
                                            <span class="d-block" style="font-size: 14px;">2500 Views Mix</span>
                                            <div class="d-flex align-self-center align-middle">
                                                <div>
                                                    <!-- <span class="d-block text-muted" style="font-size: 14px;"><s>Rp. 75.000,-</s></span> -->
                                                    <span class="d-block text-danger"><b>Rp. 75.000,-</b></span>
                                                </div>
                                                <!-- <div class="discount-badge discount-badge-red ml-3 mt-2">Disc. 50% <a href="https://www.google.com/" target="_blank"><i class="fas fa-info-circle text-white"></i></a></div> -->
                                            </div>
                                        </span>
                                    </div>
                                    <!-- End Header -->
                                    <hr>
                                    <!-- Body -->
                                    <div class="card-body" style="padding-top: 0.5rem; padding-bottom: 0.7rem;">
                                        <div class="media font-size-1 text-body mb-3">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger mr-2">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"></path>
                                            </svg>
                                            <div class="media-body font-size-2">
                                                Interaksi dengan Kualitas Terbaik
                                            </div>
                                        </div>
                                        <div class="media font-size-1 text-body mb-3">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger mr-2">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"></path>
                                            </svg>
                                            <div class="media-body font-size-2">
                                                Aman dan Bergaransi 30 Hari
                                            </div>
                                        </div>
                                        <div class="media font-size-1 text-body mb-3">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger mr-2">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"></path>
                                            </svg>
                                            <div class="media-body font-size-2">
                                                Max Order: 100K Views per Post
                                            </div>
                                        </div>
                                        <div class="media font-size-1 text-body mb-3">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger mr-2">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"></path>
                                            </svg>
                                            <div class="media-body font-size-2">
                                                1 - 2 Hari Proses Pengerjaan
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Body -->

                                    <div class="card-footer border-0">
                                                                                <form action="https://gosocial.co.id/sme/order" method="post">
                                                                                            <input type="hidden" name="_token" value="dXltiv9XeKnsrNm0fBB0N65Cb5Ld7dbKsRM6CEcP">                                            <input type="hidden" name="id_product" value="27">
                                                <button type="submit" class="btn btn-soft-primary btn-block transition-3d-hover">Order Sekarang</button>
                                            </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4 mb-5">
                                <div class="card shadow h-100">
                                    <!-- Header -->
                                    <div class="card-header border-0 mt-3 justify-content-start" style="margin-bottom: -10px;">
                                                                            <div class="image-product avatar avatar-xl avatar-circle mr-3" data-toggle="popover" data-trigger="hover" data-placement="right" data-html="true" title="" data-content="<div class='mt-n2'>Layanan tersedia dan dapat dipesan dengan lancar.<br><small class='text-primary'><span class='legend-indicator bg-success'></span>Online - 25-08-2022 03:46 (GMT +7)</small></div>" style="border: 0.1rem solid #00C9A6; cursor: pointer;" data-original-title="<span class='square-icon bg-success'></span>Layanan Normal &amp; Tersedia">
                                            <img class="img-fluid p-2" src="https://gosocial.co.id/storage/images/product_sme/5000-views-mix-1656421852.png" alt="Ultra+">
                                            <span class="avatar-status avatar-sm-status avatar-success"></span>
                                        </div>
                                        <!-- <div class="image-product avatar avatar-xl avatar-circle mr-3" data-toggle="popover" data-trigger="hover" data-placement="right" data-html="true" title="<span class='square-icon bg-warning'></span>Layanan Terdapat Kendala" data-content="Instagram Likes Indonesia sedikit lebih lambat diproses karena terjadi maintenance di server.<br><small class='text-primary'><span class='legend-indicator bg-warning'></span>3 bulan yang lalu</small>" style="border: 0.1rem solid #F5CA98; cursor: pointer">
                                            <img class="img-fluid p-2" src="https://gosocial.co.id/storage/images/product_sme/5000-views-mix-1656421852.png" alt="Ultra+">
                                            <span class="avatar-status avatar-sm-status avatar-warning"></span>
                                        </div>
                                        <div class="image-product avatar avatar-xl avatar-circle mr-3" data-toggle="popover" data-trigger="hover" data-placement="right" data-html="true" title="<span class='square-icon bg-danger'></span>Layanan Tidak Tersedia" data-content="Instagram Likes Indonesia sedang tidak tersedia untuk sementara waktu, hubungi kami untuk informasi lebih lanjut!<br><small class='text-primary'><span class='legend-indicator bg-danger'></span>3 bulan yang lalu</small>" style="border: 0.1rem solid #ED4C78; cursor: pointer">
                                            <img class="img-fluid p-2" src="https://gosocial.co.id/storage/images/product_sme/5000-views-mix-1656421852.png" alt="Ultra+">
                                            <span class="avatar-status avatar-sm-status avatar-danger"></span>
                                        </div> -->
                                        <span>
                                            <span class="h2 d-block" style="margin-bottom: -1px;">Ultra+</span>
                                            <span class="d-block" style="font-size: 14px;">5000 Views Mix</span>
                                            <div class="d-flex align-self-center align-middle">
                                                <div>
                                                    <!-- <span class="d-block text-muted" style="font-size: 14px;"><s>Rp. 100.000,-</s></span> -->
                                                    <span class="d-block text-danger"><b>Rp. 100.000,-</b></span>
                                                </div>
                                                <!-- <div class="discount-badge discount-badge-red ml-3 mt-2">Disc. 50% <a href="https://www.google.com/" target="_blank"><i class="fas fa-info-circle text-white"></i></a></div> -->
                                            </div>
                                        </span>
                                    </div>
                                    <!-- End Header -->
                                    <hr>
                                    <!-- Body -->
                                    <div class="card-body" style="padding-top: 0.5rem; padding-bottom: 0.7rem;">
                                        <div class="media font-size-1 text-body mb-3">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger mr-2">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"></path>
                                            </svg>
                                            <div class="media-body font-size-2">
                                                Interaksi dengan Kualitas Terbaik
                                            </div>
                                        </div>
                                        <div class="media font-size-1 text-body mb-3">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger mr-2">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"></path>
                                            </svg>
                                            <div class="media-body font-size-2">
                                                Aman dan Bergaransi 30 Hari
                                            </div>
                                        </div>
                                        <div class="media font-size-1 text-body mb-3">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger mr-2">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"></path>
                                            </svg>
                                            <div class="media-body font-size-2">
                                                Max Order: 100K Views per Post
                                            </div>
                                        </div>
                                        <div class="media font-size-1 text-body mb-3">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger mr-2">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"></path>
                                            </svg>
                                            <div class="media-body font-size-2">
                                                1 - 2 Hari Proses Pengerjaan
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Body -->

                                    <div class="card-footer border-0">
                                                                                <form action="https://gosocial.co.id/sme/order" method="post">
                                                                                            <input type="hidden" name="_token" value="dXltiv9XeKnsrNm0fBB0N65Cb5Ld7dbKsRM6CEcP">                                            <input type="hidden" name="id_product" value="28">
                                                <button type="submit" class="btn btn-soft-primary btn-block transition-3d-hover">Order Sekarang</button>
                                            </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4 mb-5">
                                <div class="card shadow h-100">
                                    <!-- Header -->
                                    <div class="card-header border-0 mt-3 justify-content-start" style="margin-bottom: -10px;">
                                                                            <div class="image-product avatar avatar-xl avatar-circle mr-3" data-toggle="popover" data-trigger="hover" data-placement="right" data-html="true" title="" data-content="<div class='mt-n2'>Layanan tersedia dan dapat dipesan dengan lancar.<br><small class='text-primary'><span class='legend-indicator bg-success'></span>Online - 25-08-2022 03:46 (GMT +7)</small></div>" style="border: 0.1rem solid #00C9A6; cursor: pointer;" data-original-title="<span class='square-icon bg-success'></span>Layanan Normal &amp; Tersedia">
                                            <img class="img-fluid p-2" src="https://gosocial.co.id/storage/images/product_sme/10000-views-mix-1656421863.png" alt="Ultimate">
                                            <span class="avatar-status avatar-sm-status avatar-success"></span>
                                        </div>
                                        <!-- <div class="image-product avatar avatar-xl avatar-circle mr-3" data-toggle="popover" data-trigger="hover" data-placement="right" data-html="true" title="<span class='square-icon bg-warning'></span>Layanan Terdapat Kendala" data-content="Instagram Likes Indonesia sedikit lebih lambat diproses karena terjadi maintenance di server.<br><small class='text-primary'><span class='legend-indicator bg-warning'></span>3 bulan yang lalu</small>" style="border: 0.1rem solid #F5CA98; cursor: pointer">
                                            <img class="img-fluid p-2" src="https://gosocial.co.id/storage/images/product_sme/10000-views-mix-1656421863.png" alt="Ultimate">
                                            <span class="avatar-status avatar-sm-status avatar-warning"></span>
                                        </div>
                                        <div class="image-product avatar avatar-xl avatar-circle mr-3" data-toggle="popover" data-trigger="hover" data-placement="right" data-html="true" title="<span class='square-icon bg-danger'></span>Layanan Tidak Tersedia" data-content="Instagram Likes Indonesia sedang tidak tersedia untuk sementara waktu, hubungi kami untuk informasi lebih lanjut!<br><small class='text-primary'><span class='legend-indicator bg-danger'></span>3 bulan yang lalu</small>" style="border: 0.1rem solid #ED4C78; cursor: pointer">
                                            <img class="img-fluid p-2" src="https://gosocial.co.id/storage/images/product_sme/10000-views-mix-1656421863.png" alt="Ultimate">
                                            <span class="avatar-status avatar-sm-status avatar-danger"></span>
                                        </div> -->
                                        <span>
                                            <span class="h2 d-block" style="margin-bottom: -1px;">Ultimate</span>
                                            <span class="d-block" style="font-size: 14px;">10000 Views Mix</span>
                                            <div class="d-flex align-self-center align-middle">
                                                <div>
                                                    <!-- <span class="d-block text-muted" style="font-size: 14px;"><s>Rp. 125.000,-</s></span> -->
                                                    <span class="d-block text-danger"><b>Rp. 125.000,-</b></span>
                                                </div>
                                                <!-- <div class="discount-badge discount-badge-red ml-3 mt-2">Disc. 50% <a href="https://www.google.com/" target="_blank"><i class="fas fa-info-circle text-white"></i></a></div> -->
                                            </div>
                                        </span>
                                    </div>
                                    <!-- End Header -->
                                    <hr>
                                    <!-- Body -->
                                    <div class="card-body" style="padding-top: 0.5rem; padding-bottom: 0.7rem;">
                                        <div class="media font-size-1 text-body mb-3">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger mr-2">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"></path>
                                            </svg>
                                            <div class="media-body font-size-2">
                                                Interaksi dengan Kualitas Terbaik
                                            </div>
                                        </div>
                                        <div class="media font-size-1 text-body mb-3">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger mr-2">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"></path>
                                            </svg>
                                            <div class="media-body font-size-2">
                                                Aman dan Bergaransi 30 Hari
                                            </div>
                                        </div>
                                        <div class="media font-size-1 text-body mb-3">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger mr-2">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"></path>
                                            </svg>
                                            <div class="media-body font-size-2">
                                                Max Order: 100K Views per Post
                                            </div>
                                        </div>
                                        <div class="media font-size-1 text-body mb-3">
                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger mr-2">
                                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z"></path>
                                            </svg>
                                            <div class="media-body font-size-2">
                                                1 - 2 Hari Proses Pengerjaan
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Body -->

                                    <div class="card-footer border-0">
                                                                                <form action="https://gosocial.co.id/sme/order" method="post">
                                                                                            <input type="hidden" name="_token" value="dXltiv9XeKnsrNm0fBB0N65Cb5Ld7dbKsRM6CEcP">                                            <input type="hidden" name="id_product" value="29">
                                                <button type="submit" class="btn btn-soft-primary btn-block transition-3d-hover font-size-2">Order Sekarang</button>
                                            </form>
                                    </div>
                                </div>
                            </div>

                            <!-- Kebutuhan Lain -->
                            <div class="col-sm-6 col-lg-4 mb-5">
                                <div class="card bg-dark">
                                    <div class="position-absolute right-0 mr-3 mt-3 information-custom">
                                        <i class="fas fa-info-circle" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-html="true" title="" data-content="Diperuntukkan bagi bisnis / perusahaan yang membutuhkan penawaran resmi dengan spesifikasi / ketentuan khusus." data-original-title="Request Penawaran Custom"></i>
                                    </div>
                                    <div class="mt-5">
                                        <figure class="mx-auto text-center">
                                            <img style="height: 7rem; width:auto" src="https://gosocial.co.id/assets/svg/icons/icon-white-4.svg" alt="SVG">
                                        </figure>
                                        <h4 class="text-white text-center mb-n1">Dapatkan Penawaran Khusus!</h4>
                                        <p class="text-white-70 text-center"><small>Untuk kebutuhan lain diluar paket yang tersedia.</small></p>
                                    </div>
                                    <hr class="opacity-xs my-0 ">
                                    <div class="px-4 pt-2 pb-4 bg-dark">
                                        <div class="d-flex justify-content-start align-items-center font-size-1 text-body mt-2">
                                            <div class="ml-2 font-size-2" style="color: rgba(255, 255, 255, 0.8);">
                                                1. Jumlah order yang lebih besar
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-start align-items-center font-size-1 text-body mt-2">
                                            <div class="ml-2 font-size-2" style="color: rgba(255, 255, 255, 0.8);">
                                                2. Spesifikasi khusus
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-start align-items-center font-size-1 text-body mt-2">
                                            <div class="ml-2 font-size-2" style="color: rgba(255, 255, 255, 0.8);">
                                                3. Lama &amp; proses pengerjaan yang dapat disesuaikan
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-start align-items-center font-size-1 text-body mt-2">
                                            <div class="ml-2 font-size-2" style="color: rgba(255, 255, 255, 0.8);">
                                                4. Kebutuhan Corporate / Perusahaan<br>(perlu kebijakan pembayaran)
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="opacity-xs my-0">
                                    <div class="card-footer border-0 bg-primary px-7 text-center">
                                        <a class="text-white font-weight-bold contact-custom font-size-2" href="https://gosocial.co.id/contact#contact-form">Contact sales</a>
                                    </div>
                                </div>
                            </div>
                            <!-- END Kebutuhan Lain -->

                        </div>
                        <!-- END Views Indo -->

                    </div>
                    <!-- END Views -->

                </div>
                <!-- END Tab Content -->
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
