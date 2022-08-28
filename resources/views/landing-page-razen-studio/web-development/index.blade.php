@extends('landing-page-razen-studio.layouts.app')
@section('title', 'Razen Studio Web Development')

@section('css')
<link rel="stylesheet" href="{{ asset('css/custom_style.css') }}">
<link rel="stylesheet" href="https://gosocial.co.id/assets/css/pages/commercial-photo.css?v.2112">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
                            <a class="section-16px-regular font-weight-500 mr-2 text-white text-decoration-none" href="{{ route('home') }}">Home </a>  <h4 class="section-16px-regular font-weight-500 text-white"> > Jasa Pembuatan Website</h4>
                        </div>
                        <h2 class="title-slider section-65px-montserrat text-white">Jasa Pembuatan Website</h2>
                        <p class="desc-slider">GoSocial menyediakan layanan pembuatan website secara profesional untuk berbagai kebutuhan bisnis mulai dari toko online hingga perusahaan. Dengan jaminan support & maintenance seterusnya. Penggunaan teknologi terbaru yang lebih aman dan mutakhir. Serta desain website yang ekslusif dan terkini. Sekaligus optimasi SEO.</p>
                        <div class="button-slider">
                            <a href="{{ route('contact') }}" class="button-footer arrow-btn btn-st style-2 text-decoration-none">Hubungi Sales</a>
                                {{-- <a href="#"class="button-footer clound-down btn-st border-white">Download CV</a> --}}
                        </div>
                    </div>
                    <div class="content-slider-right">
                        <img src="{{ asset('olux/assets/images/image-slider/img-slider.jpg') }}" alt="images">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="flat-about-2nd">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="about-content-right wow fadeInUp" data-wow-delay="0ms"
                    data-wow-duration="1500ms">
                    <div class="section-title">
                        <h4 class="section-45px-montserrat margin-top-15 margin-bottom-20">Kami Memproduksi Video Promosi / Profil yang Menarik & Informatif!</h4>
                    </div>
                    <p class="section-17px-regular margin-bottom-25">Video merupakan media yang paling efektif untuk melakukan campaign, awareness, dan edukasi pasar karena memadukan antara visual dengan audio, sehingga pesan yang disampaikan akan dengan mudah ditangkap oleh audience atau calon customer potensial Anda.</p>
                    <ul>
                        <li><p>1. Meningkatkan kepercayaan calon konsumen & kredibilitas brand.</p></li>
                        <li><p>2. Meningkatkan jangkauan post dan visibilitas akun pada algoritma pencarian konten.</p></li>
                        <li><p>3. Mendorong peningkatan interaksi organik dengan customer.</p></li>
                    </ul>
                </div>
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
                <div class="about-content-left wow fadeInLeft" style="width: 100% !important; height: auto;">
                    <div class="about-post">
                        <img src="{{ asset('olux/assets/images/image-box/about-post-mystory.jpg') }}" alt="images">
                        <div class="mark-about-post"></div>
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
                    <h4 class="section-subtitle">WEBSITE SEPERTI APA YANG DAPAT DIBUAT?</h4>
                    <h2 class="section-45px-montserrat margin-top-15">Sudah saatnya bikin website sendiri untuk bisnis!</h2>
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
                            <div class="media justify-content-center align-items-center align-items-lg-start">
                                <figure class="mt-2 mr-4">
                                    <img src="https://gosocial.co.id/assets/svg/icons/icon-44.svg" alt="Jasa Pembuatan Landing Page" style="width:100%; height: 7rem;">
                                </figure>
                                <div class="media-body ">
                                    <h4 class="mb-0">Jasa Pembuatan Landing Page</h4>
                                    <div class="mt-2">
                                        <p class="text-body mb-0">Solusi pembuatan landing page yang dioptimasi dengan baik untuk konversi traffic website > leads.</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>

                    <li class="nav-item w-100 mx-0 mb-3">
                        <a class="nav-link p-4" id="pills-two-code-features-example2-tab" data-toggle="pill" href="#pills-two-code-features-example2" role="tab" aria-controls="pills-two-code-features-example2" aria-selected="false">
                            <div class="media align-items-center align-items-lg-start">
                                <figure class="mt-2 mr-4 h-100">
                                    <img style="width:100%; height: 7rem;" src="https://gosocial.co.id/assets/svg/icons/icon-68.svg" alt="Jasa Pembuatan Website Toko Online">
                                </figure>
                                <div class="media-body">
                                    <h4 class="mb-0">Jasa Pembuatan Website Toko Online</h4>
                                    <div class="mt-2">
                                        <p class="text-body mb-0">Solusi pembuatan website online shop dengan berbagai fitur untuk melakukan transaksi online secara langsung.</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>

                    <li class="nav-item w-100 mx-0">
                        <a class="nav-link p-4" id="pills-three-code-features-example2-tab" data-toggle="pill" href="#pills-three-code-features-example2" role="tab" aria-controls="pills-three-code-features-example2" aria-selected="true">
                            <div class="media align-items-center align-items-lg-start">
                                <figure class="mt-2 mr-4">
                                    <img style="width:100%; height: 7rem;" src="https://gosocial.co.id/assets/svg/icons/icon-13.svg" alt="Jasa Pembuatan Website Perusahaan">
                                </figure>
                                <div class="media-body">
                                    <h4 class="mb-0">Jasa Pembuatan Website Perusahaan</h4>
                                    <div class="mt-2">
                                        <p class="text-body mb-0">Solusi pembuatan website company profile untuk menampilkan profil perusahaan atau bisnis secara mendetail.</p>
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
                                <div class="col-sm-12 col-md-12 px-2 mb-3 mb-md-0">
                                    <div class="card-frame rounded-lg img-fluid bg-img-hero" style="background-image: url(https://gosocial.co.id/assets/img/service/web/landing-page.webp); min-height: 50rem;">
                                    </div>
                                </div>
                            </div>

                            <div class="mt-5 mt-md-9">
                                <p>Landing page adalah halaman website yang didesain khusus dengan mindset marketing. Halaman ini bertujuan untuk mengkonversi pengunjung yang mengakses website dari hasil digital campaign atau platform lainnya.</p>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="pills-two-code-features-example2" role="tabpanel" aria-labelledby="pills-two-code-features-example2-tab">
                        <div class="container">
                            <div class="row mx-n2">
                                <div class="col-sm-12 col-md-12 px-2 mb-3 mb-md-0">
                                    <div class="card-frame rounded-lg img-fluid bg-img-hero" style="background-image: url(https://gosocial.co.id/assets/img/service/web/toko-online.webp); min-height: 50rem;">
                                    </div>
                                </div>
                            </div>

                            <div class="mt-5 mt-md-9">
                                <p>Toko online atau ecommerce website merupakan website yang bertujuan untuk menghasilkan profit dan penjualan produk/layanan secara terukur melalui transaksi didalamnya.</p>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="pills-three-code-features-example2" role="tabpanel" aria-labelledby="pills-three-code-features-example2-tab">
                        <div class="container">
                            <div class="row mx-n2">
                                <div class="col-sm-12 col-md-12 px-2 mb-3 mb-md-0">
                                    <div class="card-frame rounded-lg img-fluid bg-img-hero" style="background-image: url(https://gosocial.co.id/assets/img/service/web/company-profile-new.webp); min-height: 50rem;">
                                    </div>
                                </div>
                            </div>

                            <div class="mt-5 mt-md-9">
                                <p>Dengan memiliki website company profile, orang akan lebih mudah mendapatkan informasi terkait dengan perusahaan, sekaligus untuk membangun kredibilitas bagi berbagai pihak, mulai dari klien, mitra bisnis hingga calon investor.</p>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- End Tab Content -->
            </div>
        </div>
    </div>
</section>
<section class="flat-about-2nd">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title wow fadeInDown text-center">
                    <h4 class="section-subtitle">Pilihan Paket</h4>
                    <h2 class="section-45px-montserrat margin-top-15">Harga Jasa Pembuatan Website</h2>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="60" data-smobile="60"
                    style="height:60px"></div>
            </div>
        </div>
        <div class="table-responsive-lg mx-lg-auto wow fadeInDown">
            <table class="table table-striped table-borderless">
                <thead class="text-center">
                    <tr>
                        <th scope="col" class="w-25"></th>
                        <th scope="col" class="w-25">
                            <span class="d-block text-dark h3">Landing Page</span>
                        </th>
                        <th scope="col" class="w-25 border-left border-right">
                            <span class="d-block text-dark h3">Company Profile</span>
                        </th>
                        <th scope="col" class="w-25">
                            <span class="d-block text-dark h3">E-commerce</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-top border-bottom">
                        <th scope="row" class="bg-white h4">Paket Website
                            <small class="text-muted">(One-time Payment)</small>
                        </th>
                        <td class="bg-white text-center">
                            <img class="img-fluid" src="https://gosocial.co.id/assets/svg/service/web/paket-landing-page.svg" alt="Image Description" style="width: 40%;">
                            <div class="d-block">
                                <small class="text-muted">Start from</small><br>
                                <span class="text-primary align-top pricing">Rp.</span>
                                <span class="h2 text-primary">2.000.000</span>
                            </div>
                            <p class="text-muted">Cocok untuk bisnis yang baru mulai go-digital dan butuh web
                                untuk marketing</p>
                        </td>
                        <td class="bg-white text-center border-left border-right">
                            <img class="img-fluid" src="https://gosocial.co.id/assets/svg/service/web/paket-company-profile.svg" alt="Image Description" style="width: 40%;">
                            <div class="d-block">
                                <small class="text-muted">Start from</small><br>
                                <span class="text-primary align-top pricing">Rp.</span>
                                <span class="h2 text-primary">3.500.000</span>
                            </div>
                            <p class="text-muted">Cocok untuk kebutuhan branding perusahaan / brand</p>
                        </td>
                        <td class="bg-white text-center">
                            <img class="img-fluid" src="https://gosocial.co.id/assets/svg/service/web/paket-ecommerce.svg" alt="Image Description" style="width: 40%;">
                            <div class="d-block">
                                <small class="text-muted">Start from</small><br>
                                <span class="text-primary align-top pricing ">Rp.</span>
                                <span class="h2 text-primary">7.500.000</span>
                            </div>
                            <p class="text-muted">Cocok untuk bisnis / brand yang ingin menerima transaksi
                                online</p>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="bg-white h4">
                            Pembuatan Halaman Web
                        </th>
                        <td class="text-center p-3">
                            <p class="text-primary">1 Halaman</p>
                        </td>
                        <td class="text-center border-left border-right p-3">
                            <p class="text-primary">3 Halaman</p>
                        </td>
                        <td class="text-center p-3">
                            <p class="text-primary">7 Halaman</p>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="bg-white h4">
                            Gratis Domain
                        </th>
                        <td class="text-center text-body p-3">
                            <p class="text-primary">.com</p>
                        </td>
                        <td class="text-center border-left border-right p-3">
                            <p class="text-primary">com/.co.id</p>
                        </td>
                        <td class="text-center p-3">
                            <p class="text-primary">com/.id/.co.id</p>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="bg-white h4">
                            Gratis Hosting (Server)
                        </th>
                        <td class="text-center p-3">
                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success">
                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                            </svg>
                        </td>
                        <td class="text-center border-left border-right p-3">
                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success">
                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                            </svg>
                        </td>
                        <td class="text-center p-3">
                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success">
                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                            </svg>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="bg-white h4">
                            SSL (https)
                        </th>
                        <td class="text-center p-3">
                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success">
                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                            </svg>
                        </td>
                        <td class="text-center border-left border-right p-3">
                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success">
                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                            </svg>
                        </td>
                        <td class="text-center p-3">
                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success">
                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                            </svg>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="bg-white h4">
                            Setup Fee
                        </th>
                        <td class="text-center p-3">
                            <span class="p-2 bg-success rounded text-white">Free</span>
                        </td>
                        <td class="text-center border-left border-right p-3">
                            <span class="p-2 bg-success rounded text-white">Free</span>
                        </td>
                        <td class="text-center p-3">
                            <span class="p-2 bg-success rounded text-white">Free</span>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="bg-white h4">
                            Fitur Web
                        </th>
                        <td class="text-center text-body p-3">
                            <p class="text-primary">CMS Basic
                            <p class="text-secondary">
                                <small>- Integrasi Google Analytics
                                    <br>- Integrasi Facebook Pixel
                                </small></p>
                        </td>
                        <td class="text-center border-left border-right p-3">
                            <p class="text-primary">CMS Basic
                            <p class="text-secondary">
                                <small>- SEO Plugin
                                    <br>- Sistem Blog
                                    <br>- Sistem Contact Us
                                </small>
                            </p>
                        </td>
                        <td class="text-center p-3">
                            <p class="text-primary">CMS E-Commerce
                            <p class="text-secondary">
                                <small>- SEO Plugin
                                    <br>- Manajemen Produk &amp; Transaksi
                                    <br>- Integrasi Plugin Pengiriman
                                    <br>- Sistem Contact Us
                                </small>
                            </p>
                        </td>

                    </tr>
                    <tr>
                        <th scope="row" class="bg-white h4">
                            Search Engine Optimization
                        </th>
                        <td class="text-center p-3">
                            <p class="text-primary">SEO Basic</p>
                        </td>
                        <td class="text-center border-left border-right p-3">
                            <p class="text-primary">SEO Basic</p>
                        </td>
                        <td class="text-center p-3">
                            <p class="text-primary">SEO Standard</p>
                        </td>
                    </tr>
                    <tr class="border-bottom">
                        <th scope="row" class="bg-white h4">
                            Lama Pengerjaan
                        </th>
                        <td class="text-center text-body p-3">
                            <p class="text-primary">5 Hari</p>
                        </td>
                        <td class="text-center border-left border-right p-3">
                            <p class="text-primary">10 Hari</p>
                        </td>
                        <td class="text-center p-3">
                            <p class="text-primary">15 Hari</p>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="bg-white p-3"></th>
                        <td class="bg-white text-center p-3">
                            <a type="button" class="btn btn-lg btn-outline-primary text-nowrap transition-3d-hover" href="https://api.whatsapp.com/send?phone=6285159974507&amp;text=Halo%20GoSocial%21%0D%0ASaya%20ingin%20konsultasi%20layanan%20Website%20Landing%20Page" target="_blank">Pilih Paket</a>
                        </td>
                        <td class="bg-white text-center border-left border-right p-3">
                            <a type="button" class="btn btn-lg btn-outline-primary text-nowrap transition-3d-hover" href="https://api.whatsapp.com/send?phone=6285159974507&amp;text=Halo%20GoSocial%21%0D%0ASaya%20ingin%20konsultasi%20layanan%20Website%20Company%20Profile" target="_blank">Pilih Paket</a>
                        </td>
                        <td class="bg-white text-center p-3">
                            <a type="button" class="btn btn-lg btn-outline-primary text-nowrap transition-3d-hover" href="https://api.whatsapp.com/send?phone=6285159974507&amp;text=Halo%20GoSocial%21%0D%0ASaya%20ingin%20konsultasi%20layanan%20Website%20E%20Commerce" target="_blank">Pilih Paket</a>

                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<section class="flat-about-2nd">
    <div class="container">
        <div class="bg-light rounded-lg overflow-hidden space-top-2 space-top-lg-1 pl-5 pl-md-8">
            <div class="row justify-content-lg-between align-items-lg-center no-gutters">
                <div class="col-lg-4">
                    <div class="mb-4 pr-4 pr-lg-0">
                        <h2>Punya kebutuhan diluar paket diatas?</h2>
                        <p>Kami memiliki spesialisasi dalam membuat website bisnis, namun kami juga dapat mengerjakan
                            berbagai permintaan website maupun aplikasi custom.</p>
                    </div>
                    <a class="btn btn-primary btn-lg transition-3d-hover" href="https://gosocial.co.id/contact">Hubungi Kami</a>
                </div>

                <div class="col-lg-7 space-top-1 space-top-sm-2 ml-auto">
                    <div data-aos="fade-up" class="aos-init aos-animate">
                        <img class="img-fluid shadow-lg" src="https://gosocial.co.id/assets/img/service/web/website-aplikasi-custom.webp" alt="Image Description">
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
                    <h4 class="section-subtitle">MENGAPA HARUS KAMI?</h4>
                    <h2 class="section-45px-montserrat margin-top-15">Keuntungan buat website bersama GoSocial</h2>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="60" data-smobile="60"
                    style="height:60px"></div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="counter-box themesflat-counter hover-up wow fadeInUp" data-wow-delay="0.1s">
                    <div class="icon-box">
                        <div class="icon-counter">
                            <span class="icon-guarantee1"></span>
                        </div>
                    </div>
                    <h3 class="section-20px-montserrat font-weight-600 line-height-35">Gratis Domain & Hosting</h3>
                    <p>Seluruh paket sudah termasuk FREE biaya server grade A dan pembuatan domain (TLD) selama 1 tahun.</p>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="counter-box themesflat-counter hover-up wow fadeInUp" data-wow-delay="0.1s">
                    <div class="icon-box">
                        <div class="icon-counter">
                            <span class="icon-guarantee1"></span>
                        </div>
                    </div>
                    <h3 class="section-20px-montserrat font-weight-600 line-height-35">Full Support & Maintenance</h3>
                    <p>Dukungan teknis dan support untuk memastikan pengelolaan website berjalan dengan lancar setelah dibuat.</p>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="counter-box themesflat-counter hover-up wow fadeInUp" data-wow-delay="0.1s">
                    <div class="icon-box">
                        <div class="icon-counter">
                            <span class="icon-guarantee1"></span>
                        </div>
                    </div>
                    <h3 class="section-20px-montserrat font-weight-600 line-height-35">SEO Friendly</h3>
                    <p>Website telah dirancang khusus untuk SEO sehingga dapat meningkatkan rangking pada search engine.</p>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="counter-box themesflat-counter hover-up wow fadeInUp" data-wow-delay="0.1s">
                    <div class="icon-box">
                        <div class="icon-counter">
                            <span class="icon-guarantee1"></span>
                        </div>
                    </div>
                    <h3 class="section-20px-montserrat font-weight-600 line-height-35">Mobile Optimized</h3>
                    <p>Website telah dirancang untuk dapat diakses secara optimal melalui mobile device, dsb.</p>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="counter-box themesflat-counter hover-up wow fadeInUp" data-wow-delay="0.1s">
                    <div class="icon-box">
                        <div class="icon-counter">
                            <span class="icon-guarantee1"></span>
                        </div>
                    </div>
                    <h3 class="section-20px-montserrat font-weight-600 line-height-35">Ide Konten & Copywriting</h3>
                    <p>Tim kami akan membantu menyusun konten dan copywriting website untuk memaksimalkan konversi.</p>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="counter-box themesflat-counter hover-up wow fadeInUp" data-wow-delay="0.1s">
                    <div class="icon-box">
                        <div class="icon-counter">
                            <span class="icon-guarantee1"></span>
                        </div>
                    </div>
                    <h3 class="section-20px-montserrat font-weight-600 line-height-35">Teknologi & Desain Terkini</h3>
                    <p>Hasil kami telah up-to-date terhadap perkembangan teknologi yang lebih efisien dan efektif saat ini</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="flat-portfolio mb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title wow fadeInDown">
                    <h4 class="section-subtitle">FEATURED WORK</h4>
                    <h2 class="section-45px-montserrat margin-top-15">Portofolio</h2>
                    <p>Kami telah membantu berbagai bisnis membuat website baru maupun re-design website lama ke teknologi dan desain yang lebih terkini!</p>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="60" data-smobile="60"
                    style="height:60px"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="portfolio-box wow fadeInUp" data-wow-delay="0.2s">
                    <div class="portfolio-post">
                        <img src="{{ asset('olux/assets/images/image-box/portfolio-post-2.jpg') }}" alt="images">
                    </div>
                    <div class="portfolio-content">
                        <a href="portfolio-single.html" class="mark-item"></a>
                        <div class="title-item link-style-5">
                            <a href="portfolio-single.html" class="section-24px-montserrat">Web
                                Development</a>
                            <p class="margin-top-20">There are many variations of passages of Lorem Ipsum
                                available</p>
                        </div>
                    </div>
                </div>
                <div class="portfolio-box wow fadeInUp" data-wow-delay="0.4s">
                    <div class="portfolio-post">
                        <img src="{{ asset('olux/assets/images/image-box/portfolio-post-3.jpg') }}" alt="images">
                    </div>
                    <div class="portfolio-content">
                        <a href="portfolio-single.html" class="mark-item"></a>
                        <div class="title-item link-style-5">
                            <a href="portfolio-single.html" class="section-24px-montserrat">Web
                                Development</a>
                            <p class="margin-top-20">There are many variations of passages of Lorem Ipsum
                                available</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="portfolio-box active">
                    <div class="portfolio-post">
                        <img src="{{ asset('olux/assets/images/image-box/portfolio-post-1.jpg') }}" alt="images">
                    </div>
                    <div class="portfolio-content">
                        <a href="portfolio-single.html" class="mark-item"></a>
                        <div class="title-item link-style-5">
                            <a href="portfolio-single.html" class="section-24px-montserrat">Web
                                Development</a>
                            <p class="margin-top-20">There are many variations of passages of Lorem Ipsum
                                available</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="portfolio-box">
                    <div class="portfolio-post">
                        <img src="{{ asset('olux/assets/images/image-box/portfolio-post-4.jpg') }}" alt="images">
                    </div>
                    <div class="portfolio-content">
                        <a href="portfolio-single.html" class="mark-item"></a>
                        <div class="title-item link-style-5">
                            <a href="portfolio-single.html" class="section-24px-montserrat">Web
                                Development</a>
                            <p class="margin-top-20">There are many variations of passages of Lorem Ipsum
                                available</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="portfolio-box wow fadeInUp" data-wow-delay="0.2s">
                    <div class="portfolio-post">
                        <img src="{{ asset('olux/assets/images/image-box/portfolio-post-5.jpg') }}" alt="images">
                    </div>
                    <div class="portfolio-content">
                        <a href="portfolio-single.html" class="mark-item"></a>
                        <div class="title-item link-style-5">
                            <a href="portfolio-single.html" class="section-24px-montserrat">Web
                                Development</a>
                            <p class="margin-top-20">There are many variations of passages of Lorem Ipsum
                                available</p>
                        </div>
                    </div>
                </div>
                <div class="portfolio-box wow fadeInUp" data-wow-delay="0.4s">
                    <div class="portfolio-post">
                        <img src="{{ asset('olux/assets/images/image-box/portfolio-post-3.jpg') }}" alt="images">
                    </div>
                    <div class="portfolio-content">
                        <a href="portfolio-single.html" class="mark-item"></a>
                        <div class="title-item link-style-5">
                            <a href="portfolio-single.html" class="section-24px-montserrat">Web
                                Development</a>
                            <p class="margin-top-20">There are many variations of passages of Lorem Ipsum
                                available</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="button-contact-me wow fadeInUp">
                    <a href="{{ route('portofolio') }}" class="button-footer arrow-btn btn-st text-decoration-none">Lihat Semua Portofolio</a>
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
                                <span class="h4">Apa saja yang akan didapatkan dari GoSocial?</span>

                                <span class="card-btn-toggle">
                                    <span class="h4 card-btn-toggle-default">+</span>
                                    <span class="h4 card-btn-toggle-active">−</span>
                                </span>
                            </a>
                        </div>
                        <div id="basicsCollapseOne" class="collapse" aria-labelledby="basicsHeadingOne" data-parent="#basicsAccordion-left" style="">
                            <div class="card-body px-0 m-3">
                                <p>Pembuatan website di GoSocial melalui tahapan web development profesional dengan teknologi dan desain yang terkini, klien akan mendapatkan website sesuai dengan paket dan requirement yang disepakati di awal project.
                                    <br>
                                    Klien juga akan mendapatkan halaman login admin untuk mengelola website melalui Wordpress, dan juga akses ke akun cPanel hosting apabila dibutuhkan.
                                    <br>
                                    Apabila ada fitur maupun hal yang kurang jelas dapat ditanyakan langsung kepada tim kami.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Card -->

                    <!-- Card -->
                    <div class="card shadow-none mb-3">
                        <div class="card-header card-collapse" id="basicsHeadingTwo">
                            <a class="btn btn-link btn-block d-flex justify-content-between card-btn collapsed text-decoration-none text-left px-0 text-left" href="javascript:;" role="button" data-toggle="collapse" data-target="#basicsCollapseTwo" aria-expanded="false" aria-controls="basicsCollapseTwo">
                                <span class="h4">Apa saja yang diperlukan dipersiapkan untuk mulai membuat website?</span>

                                <span class="card-btn-toggle">
                                    <span class="h4 card-btn-toggle-default">+</span>
                                    <span class="h4 card-btn-toggle-active">−</span>
                                </span>
                            </a>
                        </div>
                        <div id="basicsCollapseTwo" class="collapse" aria-labelledby="basicsHeadingTwo" data-parent="#basicsAccordion-left">
                            <div class="card-body px-0 m-3">
                                <p>Detail Bisnis:</p>
                                <ul style="list-style-type: circle;">
                                    <li>
                                        1. Nama Domain (jika belum punya), contoh www.namaweb.com
                                    </li>
                                    <li>
                                        2. Logo dan identitas branding lainnya.
                                    </li>
                                    <li>
                                        3. Deskripsi bisnis / perusahaan meliputi produk, layanan, sejarah, visi misi, dll.
                                    </li>
                                    <li>
                                        4. Alamat & kontak usaha seperti e-mail maupun nomor telepon.
                                    </li>
                                    <li>
                                        5. Legalitas (untuk pendaftaran domain dengan ekstensi .id)
                                    </li>
                                </ul>
                                <p>Konten untuk ditampilkan di website:</p>
                                <ul>
                                    <li>
                                        1. Konten visual seperti: foto / ilustrasi produk, video company profile, dsb.
                                    </li>
                                    <li>
                                        2. Keunggulan layanan / produk dan manfaatnya.
                                    </li>
                                    <li>
                                        3. Testimoni klien / pelanggan (jika ada).
                                    </li>
                                </ul>
                                <p>Strategi Marketing:</p>
                                <ul>
                                    <li>1. Target Market (usia, gender, lokasi).</li>
                                    <li>2. Tujuan mempunyai website (sarana marketing, transaksi, informasi, dsb).</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Card -->

                    <!-- Card -->
                    <div class="card shadow-none mb-3">
                        <div class="card-header card-collapse" id="basicsHeadingThree">
                            <a class="btn btn-link btn-block d-flex justify-content-between card-btn collapsed text-decoration-none text-left px-0" href="javascript:;" role="button" data-toggle="collapse" data-target="#basicsCollapseThree" aria-expanded="false" aria-controls="basicsCollapseThree">
                                <span class="h4">Saya sudah memiliki website sebelumnya, apakah bisa dilanjutkan?</span>

                                <span class="card-btn-toggle">
                                    <span class="h4 card-btn-toggle-default">+</span>
                                    <span class="h4 card-btn-toggle-active">−</span>
                                </span>
                            </a>
                        </div>
                        <div id="basicsCollapseThree" class="collapse" aria-labelledby="basicsHeadingThree" data-parent="#basicsAccordion-left">
                            <div class="card-body px-0 m-3">
                                <p>Kami merekomendasikan untuk melakukan rebuild website kembali dengan teknologi yang lebih baik dan aman saat ini, karena struktur dan juga dokumentasi source code tiap developer berbeda - beda.</p>
                                <p>Namun apabila anda sudah memiliki domain dan server sendiri, kami akan membantu membangun website pada infrastruktur yang sudah ada.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Card -->

                    <!-- Card -->
                    <div class="card shadow-none mb-3">
                        <div class="card-header card-collapse" id="basicsHeadingFour">
                            <a class="btn btn-link btn-block d-flex justify-content-between card-btn collapsed text-decoration-none text-left px-0" href="javascript:;" role="button" data-toggle="collapse" data-target="#basicsCollapseFour" aria-expanded="false" aria-controls="basicsCollapseFour">
                                <span class="h4">Bagaimana jika saya nantinya kesulitan mengelola website?</span>
                                <span class="card-btn-toggle">
                                    <span class="card-btn-toggle-default h4">+</span>
                                    <span class="card-btn-toggle-active h4">−</span>
                                </span>
                            </a>
                        </div>
                        <div id="basicsCollapseFour" class="collapse" aria-labelledby="basicsHeadingFour" data-parent="#basicsAccordion-left">
                            <div class="card-body px-0 m-3">
                                <p>Semua paket pembuatan website di GoSocial sudah termasuk FREE support selama 3 bulan meliputi maintenance bug, update konten, hingga bantuan permasalahan teknis lainnya.
                                </p>
                                <p>
                                    Setelah masa support berakhir, Anda dapat memperpanjang sesuai keinginan dan kebutuhan dari bisnis dengan biaya mulai dari Rp. 100.000,- / bulan.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Card -->

                    <!-- Card -->
                    <div class="card shadow-none mb-3">
                        <div class="card-header card-collapse" id="basicsHeadingFive">
                            <a class="btn btn-link btn-block d-flex justify-content-between card-btn collapsed text-decoration-none text-left px-0" href="javascript:;" role="button" data-toggle="collapse" data-target="#basicsCollapseFive" aria-expanded="false" aria-controls="basicsCollapseFive">
                                <span class="h4">Apakah ada biaya bulanan atau lainnya di kemudian hari?</span>
                                <span class="card-btn-toggle">
                                    <span class="card-btn-toggle-default h4">+</span>
                                    <span class="card-btn-toggle-active h4">−</span>
                                </span>
                            </a>
                        </div>
                        <div id="basicsCollapseFive" class="collapse" aria-labelledby="basicsHeadingFive" data-parent="#basicsAccordion-left">
                            <div class="card-body px-0 m-3">
                                <p>Mempunyai website ibarat memiliki bangunan yang memerlukan biaya overhead / upkeep lain seperti Air & Listrik. Untuk menjalankan website ada biaya server untuk hosting source code website dan juga domain agar website senantiasa dapat diakses pada jaringan internet.
                                    <br>
                                    Namun tidak perlu khawatir! karena paket pembuatan website di GoSocial termasuk biaya server & domain selama 1 tahun!
                                    <br>
                                    Setelah berakhir Anda dapat memperpanjang dengan biaya yang cukup terjangkau mulai dari Rp. 500.000,- per tahun.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Card -->
                </div>
            </div>
            <div class="col-12">
                <div id="basicsAccordion-right">
                    <!-- Card -->
                    <div class="card shadow-none mb-3">
                        <div class="card-header card-collapse" id="basicsHeadingSix">
                            <a class="btn btn-link btn-block d-flex justify-content-between card-btn collapsed text-decoration-none text-left px-0" href="javascript:;" role="button" data-toggle="collapse" data-target="#basicsCollapseSix" aria-expanded="false" aria-controls="basicsCollapseSix">
                                <span class="h4">Apa itu CMS & SEO?</span>

                                <span class="card-btn-toggle">
                                    <span class="h4 card-btn-toggle-default">+</span>
                                    <span class="h4 card-btn-toggle-active">−</span>
                                </span>
                            </a>
                        </div>
                        <div id="basicsCollapseSix" class="collapse" aria-labelledby="basicsHeadingSix" data-parent="#basicsAccordion-right">
                            <div class="card-body px-0 m-3">
                                <p>CMS (Content Management System) adalah sebuah sistem yang memudahkan untuk menambahkan dan update isi konten dari suatu website, kami menggunakan CMS berbasis Wordpress untuk mengelola website.
                                    <br>
                                    SEO (Search Engine Optimization) adalah sebuah metode mengoptimasi website agar berada di halaman 1 (pertama) pencarian Google. Berada di halaman pertama > semakin banyak yang pengunjung web > semakin banyak pelanggan.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Card -->

                    <!-- Card -->
                    <div class="card shadow-none mb-3">
                        <div class="card-header card-collapse" id="basicsHeadingSeven">
                            <a class="btn btn-link btn-block d-flex justify-content-between card-btn collapsed text-decoration-none text-left px-0" href="javascript:;" role="button" data-toggle="collapse" data-target="#basicsCollapseSeven" aria-expanded="false" aria-controls="basicsCollapseSeven">
                                <span class="h4">Bagaimana jika saya butuh fitur tambahan atau custom?</span>

                                <span class="card-btn-toggle">
                                    <span class="card-btn-toggle-default h4">+</span>
                                    <span class="card-btn-toggle-active h4">−</span>
                                </span>
                            </a>
                        </div>
                        <div id="basicsCollapseSeven" class="collapse" aria-labelledby="basicsHeadingSeven" data-parent="#basicsAccordion-right">
                            <div class="card-body px-0 m-3">
                                <p>Tim kami dapat menambahkan fitur-fitur diluar paket diatas sesuai dengan kebutuhan, semua fitur tersedia di addons layanan seperti:
                                </p>
                                <ul>
                                    <li>
                                        Fitur Livechat / WhatsApp
                                    </li>
                                    <li>
                                        E-mail bisnis
                                    </li>
                                    <li>
                                        Halaman / section tambahan
                                    </li>
                                    <li>
                                        Dan berbagai fitur lainnya
                                    </li>
                                </ul>
                                <p>
                                    Jika Anda memiliki kebutuhan website skala enterprise atau dengan berbagai sistem yang kompleks, tim kami akan membuatkan penawaran khusus untuk pembuatan website custom sesuai dengan kebutuhan yang diinginkan.
                                </p>
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
                    <h2 class="section-45px-montserrat margin-top-15">Lokasi</h2>
                    <p class="text-muted">Ingin berdiskusi langsung? tim kami juga dapat bertemu secara langsung di beberapa kota berikut:</p>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="60" data-smobile="60"
                    style="height:60px"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="counter-box themesflat-counter hover-up wow fadeInUp" data-wow-delay="0.1s">
                    <div class="row">
                        <div class="col-6 col-md-4">
                            <div class="icon-box">
                                <div class="icon-counter">
                                    <span class="icon-guarantee1"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-8 justify-content-center align-self-center">
                            <span class="text-muted">Jasa Pembuatan Website</span>
                            <h3 class="section-20px-montserrat font-weight-600 line-height-35">Surabaya</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="counter-box themesflat-counter hover-up wow fadeInUp" data-wow-delay="0.1s">
                    <div class="row">
                        <div class="col-6 col-md-4">
                            <div class="icon-box">
                                <div class="icon-counter">
                                    <span class="icon-guarantee1"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-8 justify-content-center align-self-center">
                            <span class="text-muted">Jasa Pembuatan Website</span>
                            <h3 class="section-20px-montserrat font-weight-600 line-height-35">Jogja</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="counter-box themesflat-counter hover-up wow fadeInUp" data-wow-delay="0.1s">
                    <div class="row">
                        <div class="col-6 col-md-4">
                            <div class="icon-box">
                                <div class="icon-counter">
                                    <span class="icon-guarantee1"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-8 justify-content-center align-self-center">
                            <span class="text-muted">Jasa Pembuatan Website</span>
                            <h3 class="section-20px-montserrat font-weight-600 line-height-35">Jakarta</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="overflow-hidden space-top-lg-3 space-bottom-lg-1">
    <div class="position-relative">
        <div class="container-fluid space-2 space-lg-0">
            <div class="row justify-content-sm-center align-items-lg-center text-center">
                <div class="col-lg-4 d-none d-lg-block">
                    <div data-aos="fade-up" class="aos-init aos-animate">
                        <!-- Device Mockup -->
                        <div class="transform-rotate-3">
                            <div class="device device-ipad">
                                <img class="device-ipad-frame" src="https://gosocial.co.id/assets/svg/components/ipad.svg" alt="Image Description">
                                <img class="device-ipad-screen" src="https://gosocial.co.id/assets/img/service/web/ray-website.webp" alt="Image Description">
                            </div>

                            <figure class="max-w-19rem w-100 position-absolute bottom-0 right-0 z-index-n1 mr-n8 mb-n5">
                                <img class="img-fluid" src="https://gosocial.co.id/assets/svg/components/dots-2.svg" alt="Image Description">
                            </figure>
                        </div>
                        <!-- End Device Mockup -->
                    </div>
                </div>

                <div class="col-sm-8 col-lg-4">
                    <!-- Title -->
                    <div class="mb-5">
                        <h2 class="h1">Jasa Pembuatan Website Profesional</h2>
                        <p>GoSocial merupakan digital agency yang menyediakan layanan jasa pembuatan website
                            profesional. Situs dibuat dengan teknologi terkini yang memperhatikan SEO serta desain yang
                            mampu memberi pengalaman terbaik bagi pengguna.
                        </p>
                    </div>
                    <!-- End Title -->

                    <div>
                        <a href="{{ route('contact') }}" class="btn btn-lg btn-outline-primary">Buat Website</a>
                    </div>
                </div>

                <div class="col-lg-4 d-none d-lg-block">
                    <div data-aos="fade-up" data-aos-delay="200" class="aos-init aos-animate">
                        <!-- Device Mockup -->
                        <div class="max-w-33rem w-100 transform-rotate-2 ml-auto">
                            <div class="device device-iphone-x">
                                <img class="device-iphone-x-frame" src="https://gosocial.co.id/assets/svg/components/iphone-x.svg" alt="Image Description">
                                <img class="device-iphone-x-screen" src="https://gosocial.co.id/assets/img/service/web/ray-mobile.webp" alt="Image Description">
                            </div>

                            <figure class="max-w-19rem w-100 position-absolute top-0 left-0 z-index-n1 mt-n5 ml-n5">
                                <img class="img-fluid" src="https://gosocial.co.id/assets/svg/components/dots-2.svg" alt="Image Description">
                            </figure>
                        </div>
                        <!-- End Device Mockup -->
                    </div>
                </div>
            </div>
        </div>

        <div class="d-none d-lg-block bg-light content-centered-y w-100 h-75 z-index-n1"></div>
    </div>
</div>

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
<script src="https://gosocial.co.id/assets/js/pages/commercial-photo.js?v.0601"></script>
<script src="https://gosocial.co.id/assets/js/pages/commercial-photo-modal.js?v.0601"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
@endsection
