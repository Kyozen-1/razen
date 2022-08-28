@extends('landing-page-razen-studio.layouts.app')
@section('title', 'Razen Studio | Social Media Management')

@section('css')
<link rel="stylesheet" href="{{ asset('css/custom_style.css') }}">
<link rel="stylesheet" href="https://gosocial.co.id/assets/css/pages/commercial-photo.css?v.2112">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@endsection

@section('content')
<section class="flat-title-page back-ground-style">
    <div class="container-fluid">
        <div class="row">
            <div class="breadcrumbs text-center link-style-5 text-white">
                <h2 class="section-title-page text-white">Social Media Marketing & Management</h2>
                <p class="mb-5">Jasa pengelolaan social media terlengkap satu-satunya di Indonesia. Mulai dari pembuatan konten, strategi campaign, marketing hingga manajemen secara profesional.</p>
                <ul class="breadcrumbs-inner list-center display-flex">
                    <li><a class="section-16px-regular font-weight-500 text-decoration-none" href="{{ route('home') }}">Home</a></li>
                    <li>
                        <h4 class="section-16px-regular font-weight-500 text-white">Social Media Marketing & Management</h4>
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
                        <h4 class="section-subtitle">SMM #1 DI INDONESIA</h4>
                        <h4 class="section-45px-montserrat margin-top-15 margin-bottom-20">Miliki tim admin sosmed yang profesional tanpa ribet!</h4>
                    </div>
                    <p class="section-17px-regular margin-bottom-25">Saatnya membuat bisnis makin dikenal melalui social media. Tanpa perlu kehilangan banyak waktu, biaya dan pikiran dengan bekerjasama bersama Social Media Agency terbaik di Indonesia yang sudah dipercaya 1000+ klien.</p>
                    <ul>
                        <li><p>1. Konsultasi dan perencanaan marketing melalui social media yang terbaik untuk bisnis bersama dengan ahlinya.</p></li>
                        <li><p>2. Miliki tim profesional seperti tim in-house tanpa beban biaya perekrutan, training, gaji dll.</p></li>
                        <li><p>3. Kontrak dan biaya disesuaikan dengan kebutuhan bisnis.</p></li>
                    </ul>
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
                        <h4 class="section-45px-montserrat margin-top-15 margin-bottom-20">Mengapa harus manajemen social media bersama GoSocial?</h4>
                    </div>
                    <p class="section-17px-regular margin-bottom-25">From nothing to everything! Lebih dari sekedar mengelola, kami mengurus semuanya mulai dari strategi, pembuatan konten, campaign, hingga evaluasi untuk mencapai goal yang telah ditentukan.</p>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div class="counter-box themesflat-counter hover-up wow fadeInUp" data-wow-delay="0.1s">
                            <div class="number-content h2"><span class="number"
                                    data-speed="2000" data-to="300" data-inviewport="yes">300</span>+</div>
                            <p>Akun social media telah kami bantu untuk meningkatkan kualitas konten, desain, dll.</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="counter-box themesflat-counter hover-up wow fadeInUp" data-wow-delay="0.1s">
                            <div class="number-content h2"><span class="number"
                                    data-speed="2000" data-to="7" data-inviewport="yes">7</span>+tahun</div>
                            <p>Tahun pengalaman tim yang ahli dalam digital marketing terutama social media.</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="counter-box themesflat-counter hover-up wow fadeInUp" data-wow-delay="0.1s">
                            <div class="number-content h2"><span class="number"
                                    data-speed="2000" data-to="90" data-inviewport="yes">90</span>%</div>
                            <p>Klien kami puas dan melakukan perpanjangan kontrak secara berkala.</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="counter-box themesflat-counter hover-up wow fadeInUp" data-wow-delay="0.1s">
                            <div class="number-content h2">All-in-one</div>
                            <p>Tidak hanya sekedar desain feed / konten, layanan kami mencangkup semua aspek.</p>
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

<section class="flat-list-services">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="list-services-box grow-up-hover wow fadeInUp" data-wow-delay="0ms"
                    data-wow-duration="1500ms">
                    <div class="post-services">
                        <img src="{{ asset('olux/assets/images/image-box/services-post-1.jpg') }}" class="grow-up-hover"
                            alt="images">
                        <div class="icon-item-services">
                            <span class="icon-services icon-ux-interface1 font-size-icon active"></span>
                        </div>
                    </div>
                    <div class="content-services">
                        <div class="content-services-inner">
                            <a href="service-single.html" class="section-20px-montserrat text-decoration-none text-dark">Meningkatkan Brand Awareness</a>
                            <p class="section-17px-regular margin-top-10">Dengan pengelolaan social media yang tepat, value dari brand akan semakin meningkat.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="list-services-box grow-up-hover wow fadeInUp" data-wow-delay="0ms"
                    data-wow-duration="1500ms">
                    <div class="post-services">
                        <img src="{{ asset('olux/assets/images/image-box/services-post-1.jpg') }}" class="grow-up-hover"
                            alt="images">
                        <div class="icon-item-services">
                            <span class="icon-services icon-ux-interface1 font-size-icon active"></span>
                        </div>
                    </div>
                    <div class="content-services">
                        <div class="content-services-inner">
                            <a href="service-single.html" class="section-20px-montserrat text-decoration-none text-dark">Meningkatkan Target Pasar</a>
                            <p class="section-17px-regular margin-top-10">Strategi marketing dapat diatur agar bisnis dapat menjangkau calon konsumen potensial.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="list-services-box grow-up-hover wow fadeInUp" data-wow-delay="0ms"
                    data-wow-duration="1500ms">
                    <div class="post-services">
                        <img src="{{ asset('olux/assets/images/image-box/services-post-1.jpg') }}" class="grow-up-hover"
                            alt="images">
                        <div class="icon-item-services">
                            <span class="icon-services icon-ux-interface1 font-size-icon active"></span>
                        </div>
                    </div>
                    <div class="content-services">
                        <div class="content-services-inner">
                            <a href="service-single.html" class="section-20px-montserrat text-decoration-none text-dark">Meningkatkan Sales & Profit</a>
                            <p class="section-17px-regular margin-top-10">Dengan strategi yang efektif & efisien, pelanggan potensial akan lebih mudah dikonversi.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="list-services-box grow-up-hover wow fadeInUp" data-wow-delay="0ms"
                    data-wow-duration="1500ms">
                    <div class="post-services">
                        <img src="{{ asset('olux/assets/images/image-box/services-post-1.jpg') }}" class="grow-up-hover"
                            alt="images">
                        <div class="icon-item-services">
                            <span class="icon-services icon-ux-interface1 font-size-icon active"></span>
                        </div>
                    </div>
                    <div class="content-services">
                        <div class="content-services-inner">
                            <a href="service-single.html" class="section-20px-montserrat text-decoration-none text-dark">Meningkatkan Engagement Rate</a>
                            <p class="section-17px-regular margin-top-10">Banyaknya interaksi merupakan indikator kesuksesan dalam mengelola social media.</p>
                        </div>
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
                <div class="about-content-right wow fadeInUp" data-wow-delay="0ms"
                    data-wow-duration="1500ms">
                    <div class="section-title">
                        <h4 class="section-subtitle">APAKAH ITU?</h4>
                        <h4 class="section-45px-montserrat margin-top-15 margin-bottom-20">Social Media Marketing</h4>
                    </div>
                    <p class="section-17px-regular margin-bottom-25">Merupakan sebuah bentuk strategi pemasaran digital melalui platform media sosial untuk mempromosikan produk/layanan bisnis kepada audience baik di Instagram, Facebook, TikTok, Twitter, Youtube, dsb.</p>
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

<section class="flat-counter">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title wow fadeInDown">
                    <h4 class="section-45px-montserrat margin-top-15">Perbedaan setelah vs sebelum dikelola GoSocial</h4>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="60" data-smobile="60"
                    style="height:60px"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3 mb-md-0">
                <img class="img-fluid transition-zoom-hover rounded-lg" src="https://gosocial.co.id/assets/img/service/smm/perbedaan-1.webp" alt="">
            </div>

            <div class="col-md-6">
                <img class="img-fluid transition-zoom-hover rounded-lg" src="https://gosocial.co.id/assets/img/service/smm/perbedaan-2.webp" alt="">
            </div>
        </div>
    </div>
</section>

<section class="flat-client">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title wow fadeInDown text-center">
                    <h2 class="section-45px-montserrat margin-top-15">Pilih Harga Social Media Management</h2>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="60" data-smobile="60"
                    style="height:60px"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mb-5">
                <ul class="nav nav-box" role="tablist">
                    <li class="nav-item w-100 mx-0 mb-3 d-flex justify-content-center align-self-center">
                        <a class="nav-link p-4 active" id="pills-one-code-features-example2-tab" data-toggle="pill" href="#pills-one-code-features-example2" role="tab" aria-controls="pills-one-code-features-example2" aria-selected="false">
                            <div class="media justify-content-center align-items-center align-items-lg-start">
                                <figure class="mt-2 mr-4">
                                    <img src="https://gosocial.co.id/assets/svg/icons/icon-44.svg" alt="Jasa Pembuatan Landing Page" style="width:100%; height: 7rem;">
                                </figure>
                            </div>
                        </a>
                        <a class="nav-link p-4" id="pills-two-code-features-example2-tab" data-toggle="pill" href="#pills-two-code-features-example2" role="tab" aria-controls="pills-two-code-features-example2" aria-selected="false">
                            <div class="media align-items-center align-items-lg-start">
                                <figure class="mt-2 mr-4 h-100">
                                    <img style="width:100%; height: 7rem;" src="https://gosocial.co.id/assets/svg/icons/icon-68.svg" alt="Jasa Pembuatan Website Toko Online">
                                </figure>
                            </div>
                        </a>
                        <a class="nav-link p-4" id="pills-three-code-features-example2-tab" data-toggle="pill" href="#pills-three-code-features-example2" role="tab" aria-controls="pills-three-code-features-example2" aria-selected="true">
                            <div class="media align-items-center align-items-lg-start">
                                <figure class="mt-2 mr-4">
                                    <img style="width:100%; height: 7rem;" src="https://gosocial.co.id/assets/svg/icons/icon-13.svg" alt="Jasa Pembuatan Website Perusahaan">
                                </figure>
                            </div>
                        </a>
                        <a class="nav-link p-4" id="pills-four-code-features-example2-tab" data-toggle="pill" href="#pills-four-code-features-example2" role="tab" aria-controls="pills-four-code-features-example2" aria-selected="true">
                            <div class="media align-items-center align-items-lg-start">
                                <figure class="mt-2 mr-4">
                                    <img style="width:100%; height: 7rem;" src="https://gosocial.co.id/assets/svg/icons/icon-13.svg" alt="Jasa Pembuatan Website Perusahaan">
                                </figure>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- End Nav -->
            </div>

            <div class="col-12 order-lg-1 align-self-lg-end">
                <!-- Tab Content -->
                <div class="tab-content pr-lg-4">
                    <div class="tab-pane fade active show" id="pills-one-code-features-example2" role="tabpanel" aria-labelledby="pills-one-code-features-example2-tab">
                        <div class="container">
                            <div class="row mx-n2">
                                <div class="col-sm-12 col-md-12 px-2 mb-3 mb-md-0">
                                    <table class="table table-striped table-borderless">
                                        <thead class="text-center">
                                            <tr>
                                                <th scope="col" class="w-25"></th>
                                                <th scope="col" class="w-25">
                                                    <span class="d-block text-dark h3">Half Plan</span>
                                                </th>
                                                <th scope="col" class="w-25 border-left border-right">
                                                    <span class="d-block text-dark h3">Full Plan</span>
                                                </th>
                                                <th scope="col" class="w-25">
                                                    <span class="d-block text-dark h3">Advance Plan</span>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="border-top border-bottom">
                                                <th scope="row" class="bg-white h4">Paket SMM Instagram
                                                    <small class="text-muted">(Minimal Kontrak 3 Bulan)</small>
                                                </th>
                                                <td class="bg-white text-center">
                                                    <img class="img-fluid" src="https://gosocial.co.id/assets/svg/service/web/paket-landing-page.svg" alt="Image Description" style="width: 40%;">
                                                    <div class="d-block">
                                                        <small class="text-muted">Biaya per bulan</small><br>
                                                        <span class="text-primary align-top pricing">Rp.</span>
                                                        <span class="h2 text-primary">3.000.000</span>
                                                    </div>
                                                    <p class="text-muted">Cocok untuk bisnis yang baru mulai branding di media sosial</p>
                                                </td>
                                                <td class="bg-white text-center border-left border-right">
                                                    <img class="img-fluid" src="https://gosocial.co.id/assets/svg/service/web/paket-company-profile.svg" alt="Image Description" style="width: 40%;">
                                                    <div class="d-block">
                                                        <small class="text-muted">Biaya per bulan</small><br>
                                                        <span class="text-primary align-top pricing">Rp.</span>
                                                        <span class="h2 text-primary">5.500.000</span>
                                                    </div>
                                                    <p class="text-muted">Cocok untuk kebutuhan branding perusahaan / brand</p>
                                                </td>
                                                <td class="bg-white text-center">
                                                    <img class="img-fluid" src="https://gosocial.co.id/assets/svg/service/web/paket-ecommerce.svg" alt="Image Description" style="width: 40%;">
                                                    <div class="d-block">
                                                        <small class="text-muted">Biaya per bulan</small><br>
                                                        <span class="text-primary align-top pricing ">Rp.</span>
                                                        <span class="h2 text-primary">8.500.000</span>
                                                    </div>
                                                    <p class="text-muted">Cocok untuk bisnis / brand yang ingin lebih dekat dengan audiens</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="bg-white h4">
                                                    Digital Activ. Analysis
                                                </th>
                                                <td class="text-center">
                                                    <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success">
                                                        <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                                                    </svg>
                                                </td>
                                                <td class="text-center border-left border-right">
                                                    <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success">
                                                        <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                                                    </svg>
                                                </td>
                                                <td class="text-center">
                                                    <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success">
                                                        <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                                                    </svg>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="bg-white h4">
                                                    Social Media Plan and Strategies
                                                </th>
                                                <td class="text-center text-body p-3">
                                                    <p class="text-primary">Monthly</p>
                                                </td>
                                                <td class="text-center border-left border-right p-3">
                                                    <p class="text-primary">Weekly</p>
                                                </td>
                                                <td class="text-center p-3">
                                                    <p class="text-primary">Weekly</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="bg-white h4">
                                                    Channel
                                                </th>
                                                <td class="text-center text-body p-3">
                                                    <p class="text-primary">Instagram & Facebook Fanpage (Mirroring Content)</p>
                                                </td>
                                                <td class="text-center border-left border-right p-3">
                                                    <p class="text-primary">Instagram & Facebook Fanpage (Mirroring Content)</p>
                                                </td>
                                                <td class="text-center p-3">
                                                    <p class="text-primary">Instagram & Facebook Fanpage (Mirroring Content)</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="bg-white h4">
                                                    Grand Design
                                                </th>
                                                <td class="text-center text-body p-3">
                                                    <p class="text-primary">1 Opsi</p>
                                                </td>
                                                <td class="text-center border-left border-right p-3">
                                                    <p class="text-primary">2 Opsi</p>
                                                </td>
                                                <td class="text-center p-3">
                                                    <p class="text-primary">3 Opsi</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="bg-white h4">
                                                    Posting Quota / Minggu
                                                </th>
                                                <td class="text-center text-body p-3">
                                                    <p class="text-primary">3 Post</p>
                                                    <p class="text-muted">- 2 Single Feed <br> - 1 Carousel</p>
                                                </td>
                                                <td class="text-center text-body p-3">
                                                    <p class="text-primary">5 Post</p>
                                                    <p class="text-muted">- 3 Single Feed <br> - 2 Carousel</p>
                                                </td>
                                                <td class="text-center text-body p-3">
                                                    <p class="text-primary">7 Post</p>
                                                    <p class="text-muted">- 4 Single Feed <br> - 3 Carousel</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="bg-white h4">
                                                    D-Day Post
                                                </th>
                                                <td class="text-center text-body p-3">
                                                    <p class="text-primary">1 Quota Desain / week</p>
                                                </td>
                                                <td class="text-center border-left border-right p-3">
                                                    <p class="text-primary">2 Quota Desain / week</p>
                                                </td>
                                                <td class="text-center p-3">
                                                    <p class="text-primary">3 Quota Desain / week</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="bg-white h4">
                                                    Photoshoot
                                                </th>
                                                <td class="text-center">
                                                    <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger">
                                                        <path fill="currentColor" d="M12,2C17.53,2 22,6.47 22,12C22,17.53 17.53,22 12,22C6.47,22 2,17.53 2,12C2,6.47 6.47,2 12,2M15.59,7L12,10.59L8.41,7L7,8.41L10.59,12L7,15.59L8.41,17L12,13.41L15.59,17L17,15.59L13.41,12L17,8.41L15.59,7Z" />
                                                    </svg>
                                                </td>
                                                <td class="text-center border-left border-right">
                                                    <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger">
                                                        <path fill="currentColor" d="M12,2C17.53,2 22,6.47 22,12C22,17.53 17.53,22 12,22C6.47,22 2,17.53 2,12C2,6.47 6.47,2 12,2M15.59,7L12,10.59L8.41,7L7,8.41L10.59,12L7,15.59L8.41,17L12,13.41L15.59,17L17,15.59L13.41,12L17,8.41L15.59,7Z" />
                                                    </svg>
                                                </td>
                                                <td class="text-center">
                                                    <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success">
                                                        <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                                                    </svg>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="bg-white h4">
                                                    Minor Revision
                                                </th>
                                                <td class="text-center text-body p-3">
                                                    <p class="text-primary">2 Revision / Media Plan</p>
                                                </td>
                                                <td class="text-center border-left border-right p-3">
                                                    <p class="text-primary">3 Revision / Media Plan</p>
                                                </td>
                                                <td class="text-center p-3">
                                                    <p class="text-primary">5 Revision / Media Plan</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="bg-white h4">
                                                    Minor Revision
                                                </th>
                                                <td class="text-center text-body p-3">
                                                    <p class="text-primary">Indo</p>
                                                </td>
                                                <td class="text-center border-left border-right p-3">
                                                    <p class="text-primary">Indo</p>
                                                </td>
                                                <td class="text-center p-3">
                                                    <p class="text-primary">Indo/English</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="bg-white h4">
                                                    Hashtag Research
                                                </th>
                                                <td class="text-center">
                                                    <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success">
                                                        <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                                                    </svg>
                                                </td>
                                                <td class="text-center border-left border-right">
                                                    <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success">
                                                        <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                                                    </svg>
                                                </td>
                                                <td class="text-center">
                                                    <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success">
                                                        <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                                                    </svg>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="bg-white h4">
                                                    Monitoring Time
                                                </th>
                                                <td class="text-center text-body p-3">
                                                    <p class="text-primary">Monday - Friday, 09.00 – 16.00</p>
                                                </td>
                                                <td class="text-center border-left border-right p-3">
                                                    <p class="text-primary">Monday - Friday, 09.00 – 16.00</p>
                                                </td>
                                                <td class="text-center p-3">
                                                    <p class="text-primary">Monday - Friday, 09.00 – 16.00</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="bg-white h4">
                                                    Scheduling Post
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
                                                    Report
                                                </th>
                                                <td class="text-center p-3">
                                                    <span class="p-2 bg-success rounded text-white">Monthly</span>
                                                </td>
                                                <td class="text-center border-left border-right p-3">
                                                    <span class="p-2 bg-success rounded text-white">Monthly</span>
                                                </td>
                                                <td class="text-center p-3">
                                                    <span class="p-2 bg-success rounded text-white">Monthly</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="bg-white h4">
                                                    Ads Management
                                                </th>
                                                <td class="text-center">
                                                    <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger">
                                                        <path fill="currentColor" d="M12,2C17.53,2 22,6.47 22,12C22,17.53 17.53,22 12,22C6.47,22 2,17.53 2,12C2,6.47 6.47,2 12,2M15.59,7L12,10.59L8.41,7L7,8.41L10.59,12L7,15.59L8.41,17L12,13.41L15.59,17L17,15.59L13.41,12L17,8.41L15.59,7Z" />
                                                    </svg>
                                                </td>
                                                <td class="text-center border-left border-right">
                                                    <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger">
                                                        <path fill="currentColor" d="M12,2C17.53,2 22,6.47 22,12C22,17.53 17.53,22 12,22C6.47,22 2,17.53 2,12C2,6.47 6.47,2 12,2M15.59,7L12,10.59L8.41,7L7,8.41L10.59,12L7,15.59L8.41,17L12,13.41L15.59,17L17,15.59L13.41,12L17,8.41L15.59,7Z" />
                                                    </svg>
                                                </td>
                                                <td class="text-center">
                                                    <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success">
                                                        <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                                                    </svg>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="bg-white h4">
                                                    Report
                                                </th>
                                                <td class="text-center p-3">
                                                    <span class="p-2 bg-success rounded text-white">Up to 100 Followers / month</span>
                                                </td>
                                                <td class="text-center border-left border-right p-3">
                                                    <span class="p-2 bg-success rounded text-white">Up to 250 Followers / month</span>
                                                </td>
                                                <td class="text-center p-3">
                                                    <span class="p-2 bg-success rounded text-white">Up to 500 Followers / month</span>
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
                            <div class="position-relative z-index-2 text-center mt-10">
                                <div class="d-inline-block font-size-2 border bg-white text-center rounded-pill py-3 px-4">
                                    Ingin paket yang lebih atau custom? <a class="d-block d-sm-inline-block font-weight-bold ml-sm-3" href="https://api.whatsapp.com/send?phone=6285159974507&amp;text=Halo%20GoSocial%21%0D%0ASaya%20ingin%20konsultasi%20layanan%20Social%20Media%20Management%20Custom" target="_blank">Dapatkan Penawaran Khusus</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="pills-two-code-features-example2" role="tabpanel" aria-labelledby="pills-two-code-features-example2-tab">
                        <div class="container">
                            <div class="row mx-n2">
                                <div class="col-sm-12 col-md-12 px-2 mb-3 mb-md-0">
                                    <table class="table table-striped table-borderless">
                                        <thead class="text-center">
                                            <tr>
                                                <th scope="col" class="w-25"></th>
                                                <th scope="col" class="w-25">
                                                    <span class="d-block text-dark h3">Half Plan</span>
                                                </th>
                                                <th scope="col" class="w-25 border-left border-right">
                                                    <span class="d-block text-dark h3">Full Plan</span>
                                                </th>
                                                <th scope="col" class="w-25">
                                                    <span class="d-block text-dark h3">Advance Plan</span>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="border-top border-bottom">
                                                <th scope="row" class="bg-white h4">Paket SMM Facebook
                                                    <small class="text-muted">(Minimal Kontrak 3 Bulan)</small>
                                                </th>
                                                <td class="bg-white text-center">
                                                    <img class="img-fluid" src="https://gosocial.co.id/assets/svg/service/web/paket-landing-page.svg" alt="Image Description" style="width: 40%;">
                                                    <div class="d-block">
                                                        <small class="text-muted">Biaya per bulan</small><br>
                                                        <span class="text-primary align-top pricing">Rp.</span>
                                                        <span class="h2 text-primary">3.000.000</span>
                                                    </div>
                                                    <p class="text-muted">Cocok untuk bisnis yang baru mulai branding di media sosial</p>
                                                </td>
                                                <td class="bg-white text-center border-left border-right">
                                                    <img class="img-fluid" src="https://gosocial.co.id/assets/svg/service/web/paket-company-profile.svg" alt="Image Description" style="width: 40%;">
                                                    <div class="d-block">
                                                        <small class="text-muted">Biaya per bulan</small><br>
                                                        <span class="text-primary align-top pricing">Rp.</span>
                                                        <span class="h2 text-primary">5.500.000</span>
                                                    </div>
                                                    <p class="text-muted">Cocok untuk kebutuhan branding perusahaan / brand</p>
                                                </td>
                                                <td class="bg-white text-center">
                                                    <img class="img-fluid" src="https://gosocial.co.id/assets/svg/service/web/paket-ecommerce.svg" alt="Image Description" style="width: 40%;">
                                                    <div class="d-block">
                                                        <small class="text-muted">Biaya per bulan</small><br>
                                                        <span class="text-primary align-top pricing ">Rp.</span>
                                                        <span class="h2 text-primary">8.500.000</span>
                                                    </div>
                                                    <p class="text-muted">Cocok untuk bisnis / brand yang ingin lebih dekat dengan audiens</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="bg-white h4">
                                                    Digital Activ. Analysis
                                                </th>
                                                <td class="text-center">
                                                    <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success">
                                                        <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                                                    </svg>
                                                </td>
                                                <td class="text-center border-left border-right">
                                                    <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success">
                                                        <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                                                    </svg>
                                                </td>
                                                <td class="text-center">
                                                    <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success">
                                                        <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                                                    </svg>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="bg-white h4">
                                                    Social Media Plan and Strategies
                                                </th>
                                                <td class="text-center text-body p-3">
                                                    <p class="text-primary">Monthly</p>
                                                </td>
                                                <td class="text-center border-left border-right p-3">
                                                    <p class="text-primary">Weekly</p>
                                                </td>
                                                <td class="text-center p-3">
                                                    <p class="text-primary">Weekly</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="bg-white h4">
                                                    Channel
                                                </th>
                                                <td class="text-center text-body p-3">
                                                    <p class="text-primary">Instagram & Facebook Fanpage (Mirroring Content)</p>
                                                </td>
                                                <td class="text-center border-left border-right p-3">
                                                    <p class="text-primary">Instagram & Facebook Fanpage (Mirroring Content)</p>
                                                </td>
                                                <td class="text-center p-3">
                                                    <p class="text-primary">Instagram & Facebook Fanpage (Mirroring Content)</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="bg-white h4">
                                                    Grand Design
                                                </th>
                                                <td class="text-center text-body p-3">
                                                    <p class="text-primary">1 Opsi</p>
                                                </td>
                                                <td class="text-center border-left border-right p-3">
                                                    <p class="text-primary">2 Opsi</p>
                                                </td>
                                                <td class="text-center p-3">
                                                    <p class="text-primary">3 Opsi</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="bg-white h4">
                                                    Posting Quota / Minggu
                                                </th>
                                                <td class="text-center text-body p-3">
                                                    <p class="text-primary">3 Post</p>
                                                    <p class="text-muted">- 2 Single Feed <br> - 1 Carousel</p>
                                                </td>
                                                <td class="text-center text-body p-3">
                                                    <p class="text-primary">5 Post</p>
                                                    <p class="text-muted">- 3 Single Feed <br> - 2 Carousel</p>
                                                </td>
                                                <td class="text-center text-body p-3">
                                                    <p class="text-primary">7 Post</p>
                                                    <p class="text-muted">- 4 Single Feed <br> - 3 Carousel</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="bg-white h4">
                                                    D-Day Post
                                                </th>
                                                <td class="text-center text-body p-3">
                                                    <p class="text-primary">1 Quota Desain / week</p>
                                                </td>
                                                <td class="text-center border-left border-right p-3">
                                                    <p class="text-primary">2 Quota Desain / week</p>
                                                </td>
                                                <td class="text-center p-3">
                                                    <p class="text-primary">3 Quota Desain / week</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="bg-white h4">
                                                    Photoshoot
                                                </th>
                                                <td class="text-center">
                                                    <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger">
                                                        <path fill="currentColor" d="M12,2C17.53,2 22,6.47 22,12C22,17.53 17.53,22 12,22C6.47,22 2,17.53 2,12C2,6.47 6.47,2 12,2M15.59,7L12,10.59L8.41,7L7,8.41L10.59,12L7,15.59L8.41,17L12,13.41L15.59,17L17,15.59L13.41,12L17,8.41L15.59,7Z" />
                                                    </svg>
                                                </td>
                                                <td class="text-center border-left border-right">
                                                    <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger">
                                                        <path fill="currentColor" d="M12,2C17.53,2 22,6.47 22,12C22,17.53 17.53,22 12,22C6.47,22 2,17.53 2,12C2,6.47 6.47,2 12,2M15.59,7L12,10.59L8.41,7L7,8.41L10.59,12L7,15.59L8.41,17L12,13.41L15.59,17L17,15.59L13.41,12L17,8.41L15.59,7Z" />
                                                    </svg>
                                                </td>
                                                <td class="text-center">
                                                    <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success">
                                                        <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                                                    </svg>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="bg-white h4">
                                                    Minor Revision
                                                </th>
                                                <td class="text-center text-body p-3">
                                                    <p class="text-primary">2 Revision / Media Plan</p>
                                                </td>
                                                <td class="text-center border-left border-right p-3">
                                                    <p class="text-primary">3 Revision / Media Plan</p>
                                                </td>
                                                <td class="text-center p-3">
                                                    <p class="text-primary">5 Revision / Media Plan</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="bg-white h4">
                                                    Minor Revision
                                                </th>
                                                <td class="text-center text-body p-3">
                                                    <p class="text-primary">Indo</p>
                                                </td>
                                                <td class="text-center border-left border-right p-3">
                                                    <p class="text-primary">Indo</p>
                                                </td>
                                                <td class="text-center p-3">
                                                    <p class="text-primary">Indo/English</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="bg-white h4">
                                                    Hashtag Research
                                                </th>
                                                <td class="text-center">
                                                    <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success">
                                                        <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                                                    </svg>
                                                </td>
                                                <td class="text-center border-left border-right">
                                                    <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success">
                                                        <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                                                    </svg>
                                                </td>
                                                <td class="text-center">
                                                    <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success">
                                                        <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                                                    </svg>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="bg-white h4">
                                                    Monitoring Time
                                                </th>
                                                <td class="text-center text-body p-3">
                                                    <p class="text-primary">Monday - Friday, 09.00 – 16.00</p>
                                                </td>
                                                <td class="text-center border-left border-right p-3">
                                                    <p class="text-primary">Monday - Friday, 09.00 – 16.00</p>
                                                </td>
                                                <td class="text-center p-3">
                                                    <p class="text-primary">Monday - Friday, 09.00 – 16.00</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="bg-white h4">
                                                    Scheduling Post
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
                                                    Report
                                                </th>
                                                <td class="text-center p-3">
                                                    <span class="p-2 bg-success rounded text-white">Monthly</span>
                                                </td>
                                                <td class="text-center border-left border-right p-3">
                                                    <span class="p-2 bg-success rounded text-white">Monthly</span>
                                                </td>
                                                <td class="text-center p-3">
                                                    <span class="p-2 bg-success rounded text-white">Monthly</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="bg-white h4">
                                                    Ads Management
                                                </th>
                                                <td class="text-center">
                                                    <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger">
                                                        <path fill="currentColor" d="M12,2C17.53,2 22,6.47 22,12C22,17.53 17.53,22 12,22C6.47,22 2,17.53 2,12C2,6.47 6.47,2 12,2M15.59,7L12,10.59L8.41,7L7,8.41L10.59,12L7,15.59L8.41,17L12,13.41L15.59,17L17,15.59L13.41,12L17,8.41L15.59,7Z" />
                                                    </svg>
                                                </td>
                                                <td class="text-center border-left border-right">
                                                    <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger">
                                                        <path fill="currentColor" d="M12,2C17.53,2 22,6.47 22,12C22,17.53 17.53,22 12,22C6.47,22 2,17.53 2,12C2,6.47 6.47,2 12,2M15.59,7L12,10.59L8.41,7L7,8.41L10.59,12L7,15.59L8.41,17L12,13.41L15.59,17L17,15.59L13.41,12L17,8.41L15.59,7Z" />
                                                    </svg>
                                                </td>
                                                <td class="text-center">
                                                    <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success">
                                                        <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                                                    </svg>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="bg-white h4">
                                                    Report
                                                </th>
                                                <td class="text-center p-3">
                                                    <span class="p-2 bg-success rounded text-white">Up to 100 Followers / month</span>
                                                </td>
                                                <td class="text-center border-left border-right p-3">
                                                    <span class="p-2 bg-success rounded text-white">Up to 250 Followers / month</span>
                                                </td>
                                                <td class="text-center p-3">
                                                    <span class="p-2 bg-success rounded text-white">Up to 500 Followers / month</span>
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
                            <div class="position-relative z-index-2 text-center mt-10">
                                <div class="d-inline-block font-size-2 border bg-white text-center rounded-pill py-3 px-4">
                                    Ingin paket yang lebih atau custom? <a class="d-block d-sm-inline-block font-weight-bold ml-sm-3" href="https://api.whatsapp.com/send?phone=6285159974507&amp;text=Halo%20GoSocial%21%0D%0ASaya%20ingin%20konsultasi%20layanan%20Social%20Media%20Management%20Custom" target="_blank">Dapatkan Penawaran Khusus</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="pills-three-code-features-example2" role="tabpanel" aria-labelledby="pills-three-code-features-example2-tab">
                        <div class="container">
                            <div class="row mx-n2">
                                <div class="col-sm-12 col-md-12 px-2 mb-3 mb-md-0">
                                    <div class="row position-relative z-index-2 mx-n2 mb-5">
                                        <div class="col-sm-6 col-md-4 px-2 mb-3">
                                            <div class="card" style="height: 30rem !important;">
                                                <!-- Header -->
                                                <div class="card-header text-center">
                                                    <span class="d-block h2">Podcast</span>
                                                    <span class="d-block mb-2">
                                                        <span class="text-dark align-top">Rp</span>
                                                        <span class="font-size-5 text-dark font-weight-bold mr-n2">
                                                            <span id="pricingCountYoutube1" data-hs-toggle-switch-item-options="{
                                                            "min": 42,
                                                            "max": 32
                                                            }">3,5</span>
                                                        </span>
                                                        <span class="font-size-1">Jt</span>
                                                    </span>
                                                </div>
                                                <!-- End Header -->

                                                <!-- Body -->
                                                <div class="card-body">
                                                    <div class="media font-size-1 text-body">
                                                        <div class="media-body h4 mb-2">
                                                            1. Tema dan ide konten
                                                        </div>
                                                    </div>
                                                    <div class="media font-size-1 text-body">
                                                        <div class="media-body h4 mb-2">
                                                            2. Sudah termasuk biaya studio GoSocial
                                                        </div>
                                                    </div>
                                                    <div class="media font-size-1 text-body">
                                                        <div class="media-body h4 mb-2">
                                                            3. Format Output : 16:9 atau 3:4 Full High Definition
                                                        </div>
                                                    </div>
                                                    <div class="media font-size-1 text-body">
                                                        <div class="media-body h4 mb-2">
                                                            4. 2x Minor Revision
                                                        </div>
                                                    </div>
                                                    <div class="media font-size-1 text-body">
                                                        <div class="media-body h4 mb-2">
                                                            5. Durasi video 15-30 menit
                                                        </div>
                                                    </div>
                                                    <div class="media font-size-1 text-body">
                                                        <div class="media-body h4 mb-2">
                                                            6. Optimasi konten di YouTube
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Body -->

                                                <div class="card-footer border-0">
                                                    <a type="button" class="btn btn-soft-primary btn-block transition-3d-hover" href="https://api.whatsapp.com/send?phone=6285159974507&amp;text=Halo%20GoSocial%21%0D%0ASaya%20ingin%20konsultasi%20layanan%20Social%20Media%20Management%20Youtube%20Podcast%20Plan" target="_blank">Pilih Paket</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-md-4 px-2 mb-3">
                                            <div class="card bg-primary text-white h-100 shadow-primary-lg">
                                                <!-- Header -->
                                                <div class="card-header border-0 bg-primary text-white text-center">
                                                    <span class="d-block h3 text-white">Custom</span>
                                                    <span class="d-block mb-2">
                                                        <span class="text-white align-top">Rp</span>
                                                        <span class="font-size-4 text-white font-weight-bold mr-n2">
                                                            <span id="pricingCountYoutube2" data-hs-toggle-switch-item-options="{
                                                            "min": 64,
                                                            "max": 54
                                                            }">3,5</span>
                                                        </span>
                                                        <span class="font-size-1">Jt</span>
                                                    </span>
                                                </div>
                                                <!-- End Header -->
                                                <div class="border-top opacity-xs"></div>
                                                <!-- Body -->
                                                <div class="card-body">
                                                    <div class="media font-size-1">
                                                        <div class="media-body h3 text-white mb-2">
                                                            1. Custom bentuk konten (bisa strategi dari GoSocial)
                                                        </div>
                                                    </div>
                                                    <div class="media font-size-1">
                                                        <div class="media-body h3 text-white mb-2">
                                                            2. Sudah termasuk biaya studio GoSocial
                                                        </div>
                                                    </div>
                                                    <div class="media font-size-1">
                                                        <div class="media-body h3 text-white mb-2">
                                                            3. Format Output : 16:9 atau 3:4 Full High Definition
                                                        </div>
                                                    </div>
                                                    <div class="media font-size-1">
                                                        <div class="media-body h3 text-white mb-2">
                                                            4. 2x Minor Revision
                                                        </div>
                                                    </div>
                                                    <div class="media font-size-1">
                                                        <div class="media-body h3 text-white mb-2">
                                                            5. Durasi video custom
                                                        </div>
                                                    </div>
                                                    <div class="media font-size-1">
                                                        <div class="media-body h3 text-white mb-2">
                                                            6. Optimasi konten di YouTube
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Body -->

                                                <div class="card-footer border-0 bg-primary text-white">
                                                    <a type="button" class="btn btn-light text-primary btn-block transition-3d-hover" href="https://api.whatsapp.com/send?phone=6285159974507&amp;text=Halo%20GoSocial%21%0D%0ASaya%20ingin%20konsultasi%20layanan%20Social%20Media%20Management%20Youtube%20Custom%20Plan" target="_blank">Pilih Paket</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-md-4 px-2 mb-3">
                                            <div class="card h-100">
                                                <!-- Header -->
                                                <div class="card-header text-center">
                                                    <span class="d-block h3">Monolog</span>
                                                    <span class="d-block mb-2">
                                                        <span class="text-dark align-top">Rp</span>
                                                        <span class="font-size-4 text-dark font-weight-bold mr-n2">
                                                            <span id="pricingCountYoutube3" data-hs-toggle-switch-item-options="{
                                                            "min": 89,
                                                            "max": 79
                                                            }">2,75</span>
                                                        </span>
                                                        <span class="font-size-1">Jt</span>
                                                    </span>
                                                </div>
                                                <!-- End Header -->

                                                <!-- Body -->
                                                <div class="card-body">
                                                    <div class="media font-size-1 text-body">
                                                        <div class="media-body h3 mb-2">
                                                            1. Tema dan ide konten
                                                        </div>
                                                    </div>
                                                    <div class="media font-size-1 text-body">
                                                        <div class="media-body h3 mb-2">
                                                            2. Sudah termasuk biaya studio GoSocial
                                                        </div>
                                                    </div>
                                                    <div class="media font-size-1 text-body">
                                                        <div class="media-body h3 mb-2">
                                                            3. Format Output : 16:9 atau 3:4 Full High Definition
                                                        </div>
                                                    </div>
                                                    <div class="media font-size-1 text-body">
                                                        <div class="media-body h3 mb-2">
                                                            4. 2x Minor Revision
                                                        </div>
                                                    </div>
                                                    <div class="media font-size-1 text-body">
                                                        <div class="media-body h3 mb-2">
                                                            5. Durasi video 5-10 menit
                                                        </div>
                                                    </div>
                                                    <div class="media font-size-1 text-body">
                                                        <div class="media-body h3 mb-2">
                                                            6. Optimasi konten di YouTube
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Body -->

                                                <div class="card-footer border-0">
                                                    <a type="button" class="btn btn-soft-primary btn-block transition-3d-hover" href="https://api.whatsapp.com/send?phone=6285159974507&amp;text=Halo%20GoSocial%21%0D%0ASaya%20ingin%20konsultasi%20layanan%20Social%20Media%20Management%20Youtube%20Monolog%20Plan" target="_blank">Pilih Paket</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="position-relative z-index-2 text-center mt-10">
                                <div class="d-inline-block font-size-2 border bg-white text-center rounded-pill py-3 px-4">
                                    Ingin paket yang lebih atau custom? <a class="d-block d-sm-inline-block font-weight-bold ml-sm-3" href="https://api.whatsapp.com/send?phone=6285159974507&amp;text=Halo%20GoSocial%21%0D%0ASaya%20ingin%20konsultasi%20layanan%20Social%20Media%20Management%20Custom" target="_blank">Dapatkan Penawaran Khusus</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="pills-four-code-features-example2" role="tabpanel" aria-labelledby="pills-four-code-features-example2-tab">
                        <div class="container">
                            <div class="row mx-n2">
                                <div class="col-sm-12 col-md-12 px-2 mb-3 mb-md-0">
                                    <table class="table table-striped table-borderless">
                                        <thead class="text-center">
                                            <tr>
                                                <th scope="col" class="w-25"></th>
                                                <th scope="col" class="w-25">
                                                    <span class="d-block text-dark h3">Half Plan</span>
                                                </th>
                                                <th scope="col" class="w-25 border-left border-right">
                                                    <span class="d-block text-dark h3">Full Plan</span>
                                                </th>
                                                <th scope="col" class="w-25">
                                                    <span class="d-block text-dark h3">Advance Plan</span>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="border-top border-bottom">
                                                <th scope="row" class="bg-white h4">Paket SMM TikTok
                                                    <small class="text-muted">(Minimal Kontrak 3 Bulan)</small>
                                                </th>
                                                <td class="bg-white text-center">
                                                    <img class="img-fluid" src="https://gosocial.co.id/assets/svg/service/web/paket-landing-page.svg" alt="Image Description" style="width: 40%;">
                                                    <div class="d-block">
                                                        <small class="text-muted">Biaya per bulan</small><br>
                                                        <span class="text-primary align-top pricing">Rp.</span>
                                                        <span class="h2 text-primary">2.950.000</span>
                                                    </div>
                                                    <p class="text-muted">Cocok untuk bisnis yang baru mulai branding di media sosial</p>
                                                </td>
                                                <td class="bg-white text-center border-left border-right">
                                                    <img class="img-fluid" src="https://gosocial.co.id/assets/svg/service/web/paket-company-profile.svg" alt="Image Description" style="width: 40%;">
                                                    <div class="d-block">
                                                        <small class="text-muted">Biaya per bulan</small><br>
                                                        <span class="text-primary align-top pricing">Rp.</span>
                                                        <span class="h2 text-primary">4.450.000</span>
                                                    </div>
                                                    <p class="text-muted">Cocok untuk kebutuhan branding perusahaan / brand</p>
                                                </td>
                                                <td class="bg-white text-center">
                                                    <img class="img-fluid" src="https://gosocial.co.id/assets/svg/service/web/paket-ecommerce.svg" alt="Image Description" style="width: 40%;">
                                                    <div class="d-block">
                                                        <small class="text-muted">Biaya per bulan</small><br>
                                                        <span class="text-primary align-top pricing ">Rp.</span>
                                                        <span class="h2 text-primary">5.750.000</span>
                                                    </div>
                                                    <p class="text-muted">Cocok untuk bisnis / brand yang ingin lebih dekat dengan audiens</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="bg-white h4">
                                                    Digital Activ. Analysis
                                                </th>
                                                <td class="text-center">
                                                    <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success">
                                                        <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                                                    </svg>
                                                </td>
                                                <td class="text-center border-left border-right">
                                                    <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success">
                                                        <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                                                    </svg>
                                                </td>
                                                <td class="text-center">
                                                    <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success">
                                                        <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                                                    </svg>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="bg-white h4">
                                                    Social Media Plan and Strategies
                                                </th>
                                                <td class="text-center text-body p-3">
                                                    <p class="text-primary">Weekly</p>
                                                </td>
                                                <td class="text-center border-left border-right p-3">
                                                    <p class="text-primary">Weekly</p>
                                                </td>
                                                <td class="text-center p-3">
                                                    <p class="text-primary">Weekly</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="bg-white h4">
                                                    Posting Quota / Minggu
                                                </th>
                                                <td class="text-center text-body p-3">
                                                    <p class="text-primary">2 Video</p>
                                                </td>
                                                <td class="text-center text-body p-3">
                                                    <p class="text-primary">3 Video</p>
                                                </td>
                                                <td class="text-center text-body p-3">
                                                    <p class="text-primary">4 Video</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="bg-white h4">
                                                    Free Talent
                                                </th>
                                                <td class="text-center text-body p-3">
                                                    <p class="text-primary">1 Talent / Month</p>
                                                </td>
                                                <td class="text-center border-left border-right p-3">
                                                    <p class="text-primary">2 Talent / Month</p>
                                                </td>
                                                <td class="text-center p-3">
                                                    <p class="text-primary">3 Talent / Month</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="bg-white h4">
                                                    Minor Revision / Bulan
                                                </th>
                                                <td class="text-center text-body p-3">
                                                    <p class="text-primary">2 Revisi</p>
                                                </td>
                                                <td class="text-center border-left border-right p-3">
                                                    <p class="text-primary">3 Revisi</p>
                                                </td>
                                                <td class="text-center p-3">
                                                    <p class="text-primary">5 Revisi</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="bg-white h4">
                                                    Caption Copywriting
                                                </th>
                                                <td class="text-center text-body p-3">
                                                    <p class="text-primary">Indo</p>
                                                </td>
                                                <td class="text-center border-left border-right p-3">
                                                    <p class="text-primary">Indo</p>
                                                </td>
                                                <td class="text-center p-3">
                                                    <p class="text-primary">Indo/English</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="bg-white h4">
                                                    Viral Content Research
                                                </th>
                                                <td class="text-center">
                                                    <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success">
                                                        <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                                                    </svg>
                                                </td>
                                                <td class="text-center border-left border-right">
                                                    <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success">
                                                        <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                                                    </svg>
                                                </td>
                                                <td class="text-center">
                                                    <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success">
                                                        <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                                                    </svg>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="bg-white h4">
                                                    Report
                                                </th>
                                                <td class="text-center p-3">
                                                    <span class="p-2 bg-success rounded text-white">Monthly</span>
                                                </td>
                                                <td class="text-center border-left border-right p-3">
                                                    <span class="p-2 bg-success rounded text-white">Monthly</span>
                                                </td>
                                                <td class="text-center p-3">
                                                    <span class="p-2 bg-success rounded text-white">Monthly</span>
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
                            <div class="position-relative z-index-2 text-center mt-10">
                                <div class="d-inline-block font-size-2 border bg-white text-center rounded-pill py-3 px-4">
                                    Ingin paket yang lebih atau custom? <a class="d-block d-sm-inline-block font-weight-bold ml-sm-3" href="https://api.whatsapp.com/send?phone=6285159974507&amp;text=Halo%20GoSocial%21%0D%0ASaya%20ingin%20konsultasi%20layanan%20Social%20Media%20Management%20Custom" target="_blank">Dapatkan Penawaran Khusus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Tab Content -->
            </div>
        </div>
    </div>
</section>

<section class="flat-list-services">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title wow fadeInDown text-center">
                    <h4 class="section-subtitle">FEATURED CASE STUDIES</h4>
                    <h4 class="section-45px-montserrat margin-top-15">Kami telah membantu berbagai jenis bisnis mengembangkan akun Social Media, melalui strategi terkini yang teruji.</h4>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="60" data-smobile="60"
                    style="height:60px"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="list-services-box grow-up-hover wow fadeInUp" data-wow-delay="0ms"
                    data-wow-duration="1500ms">
                    <div class="post-services">
                        <img src="{{ asset('olux/assets/images/image-box/services-post-1.jpg') }}" class="grow-up-hover"
                            alt="images">
                        <div class="icon-item-services">
                            <span class="icon-services icon-ux-interface1 font-size-icon active"></span>
                        </div>
                    </div>
                    <div class="content-services">
                        <div class="content-services-inner">
                            <a href="service-single.html" class="section-20px-montserrat text-dark text-decoration-none">Triv: Instagram, Youtube & TikTok </a>
                            <p class="section-17px-regular margin-top-10">Mulai Dari Peningkatan Kualitas desain dan konten video, isi konten, hingga mengelola campaign Digital</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="list-services-box grow-up-hover wow fadeInUp" data-wow-delay="0ms"
                    data-wow-duration="1500ms">
                    <div class="post-services">
                        <img src="{{ asset('olux/assets/images/image-box/services-post-1.jpg') }}" class="grow-up-hover"
                            alt="images">
                        <div class="icon-item-services">
                            <span class="icon-services icon-ux-interface1 font-size-icon active"></span>
                        </div>
                    </div>
                    <div class="content-services">
                        <div class="content-services-inner">
                            <a href="service-single.html" class="section-20px-montserrat text-dark text-decoration-none">Triv: Instagram, Youtube & TikTok </a>
                            <p class="section-17px-regular margin-top-10">Mulai Dari Peningkatan Kualitas desain dan konten video, isi konten, hingga mengelola campaign Digital</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="list-services-box grow-up-hover wow fadeInUp" data-wow-delay="0ms"
                    data-wow-duration="1500ms">
                    <div class="post-services">
                        <img src="{{ asset('olux/assets/images/image-box/services-post-1.jpg') }}" class="grow-up-hover"
                            alt="images">
                        <div class="icon-item-services">
                            <span class="icon-services icon-ux-interface1 font-size-icon active"></span>
                        </div>
                    </div>
                    <div class="content-services">
                        <div class="content-services-inner">
                            <a href="service-single.html" class="section-20px-montserrat text-dark text-decoration-none">Triv: Instagram, Youtube & TikTok </a>
                            <p class="section-17px-regular margin-top-10">Mulai Dari Peningkatan Kualitas desain dan konten video, isi konten, hingga mengelola campaign Digital</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="list-services-box grow-up-hover wow fadeInUp" data-wow-delay="0ms"
                    data-wow-duration="1500ms">
                    <div class="post-services">
                        <img src="{{ asset('olux/assets/images/image-box/services-post-1.jpg') }}" class="grow-up-hover"
                            alt="images">
                        <div class="icon-item-services">
                            <span class="icon-services icon-ux-interface1 font-size-icon active"></span>
                        </div>
                    </div>
                    <div class="content-services">
                        <div class="content-services-inner">
                            <a href="service-single.html" class="section-20px-montserrat text-dark text-decoration-none">Triv: Instagram, Youtube & TikTok </a>
                            <p class="section-17px-regular margin-top-10">Mulai Dari Peningkatan Kualitas desain dan konten video, isi konten, hingga mengelola campaign Digital</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="list-services-box grow-up-hover wow fadeInUp" data-wow-delay="0ms"
                    data-wow-duration="1500ms">
                    <div class="post-services">
                        <img src="{{ asset('olux/assets/images/image-box/services-post-1.jpg') }}" class="grow-up-hover"
                            alt="images">
                        <div class="icon-item-services">
                            <span class="icon-services icon-ux-interface1 font-size-icon active"></span>
                        </div>
                    </div>
                    <div class="content-services">
                        <div class="content-services-inner">
                            <a href="service-single.html" class="section-20px-montserrat text-dark text-decoration-none">Triv: Instagram, Youtube & TikTok </a>
                            <p class="section-17px-regular margin-top-10">Mulai Dari Peningkatan Kualitas desain dan konten video, isi konten, hingga mengelola campaign Digital</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="list-services-box grow-up-hover wow fadeInUp" data-wow-delay="0ms"
                    data-wow-duration="1500ms">
                    <div class="post-services">
                        <img src="{{ asset('olux/assets/images/image-box/services-post-1.jpg') }}" class="grow-up-hover"
                            alt="images">
                        <div class="icon-item-services">
                            <span class="icon-services icon-ux-interface1 font-size-icon active"></span>
                        </div>
                    </div>
                    <div class="content-services">
                        <div class="content-services-inner">
                            <a href="service-single.html" class="section-20px-montserrat text-dark text-decoration-none">Triv: Instagram, Youtube & TikTok </a>
                            <p class="section-17px-regular margin-top-10">Mulai Dari Peningkatan Kualitas desain dan konten video, isi konten, hingga mengelola campaign Digital</p>
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

<section class="flat-counter">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title wow fadeInDown">
                    <h4 class="section-subtitle">SOLUSI PEMBUATAN KONTEN SOSMED TERLENGKAP</h4>
                    <h2 class="section-45px-montserrat margin-top-15">Konten seperti apa yang akan didapatkan?</h2>
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
                    <h3 class="section-20px-montserrat font-weight-600 line-height-35">Informasi Produk & Layanan</h3>
                    <p>Menyajikan informasi terkait sebuah produk yang ditawarkan oleh bisnis dengan tampilan yang menarik dan menjual sesuai branding di bisnis.</p>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="counter-box themesflat-counter hover-up wow fadeInUp" data-wow-delay="0.1s">
                    <div class="icon-box">
                        <div class="icon-counter">
                            <span class="icon-guarantee1"></span>
                        </div>
                    </div>
                    <h3 class="section-20px-montserrat font-weight-600 line-height-35">Konten Edukasi & Storytelling</h3>
                    <p>Edukasi audiens dengan konten yang relevan untuk menambah pengetahuan terkait produk maupun layanan yang ditawarkan.</p>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="counter-box themesflat-counter hover-up wow fadeInUp" data-wow-delay="0.1s">
                    <div class="icon-box">
                        <div class="icon-counter">
                            <span class="icon-guarantee1"></span>
                        </div>
                    </div>
                    <h3 class="section-20px-montserrat font-weight-600 line-height-35">Konten Promosi</h3>
                    <p>Strategi pemasaran yang didistribusikan dengan konten yang mampu menarik pemirsa dengan tepat sasaran, dan mendorong mereka menjadi konsumen.</p>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="counter-box themesflat-counter hover-up wow fadeInUp" data-wow-delay="0.1s">
                    <div class="icon-box">
                        <div class="icon-counter">
                            <span class="icon-guarantee1"></span>
                        </div>
                    </div>
                    <h3 class="section-20px-montserrat font-weight-600 line-height-35">Konten Giveaway / Kuis</h3>
                    <p>Teknik menawarkan hadiah kepada audiens, sambil meminta mereka melakukan interaksi seperti menyukai, dan membagikan konten dari brand.</p>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="counter-box themesflat-counter hover-up wow fadeInUp" data-wow-delay="0.1s">
                    <div class="icon-box">
                        <div class="icon-counter">
                            <span class="icon-guarantee1"></span>
                        </div>
                    </div>
                    <h3 class="section-20px-montserrat font-weight-600 line-height-35">Testimonial & Review</h3>
                    <p>Konten yang berisi opini pihak ketiga terkait sebuah brand untuk meyakinkan calon konsumen lain terhadap sebuah produk maupun layanan.</p>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="counter-box themesflat-counter hover-up wow fadeInUp" data-wow-delay="0.1s">
                    <div class="icon-box">
                        <div class="icon-counter">
                            <span class="icon-guarantee1"></span>
                        </div>
                    </div>
                    <h3 class="section-20px-montserrat font-weight-600 line-height-35">Story, Video & Lainnya</h3>
                    <p>Tidak hanya dalam bentuk gambar, konten yang akan didapatkan juga berupa video yang lebih menarik baik secara audio maupun visual.</p>
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
                                <span class="h4">Jasa apa yang ditawarkan GoSocial?</span>

                                <span class="card-btn-toggle">
                                    <span class="h4 card-btn-toggle-default">+</span>
                                    <span class="h4 card-btn-toggle-active">−</span>
                                </span>
                            </a>
                        </div>
                        <div id="basicsCollapseOne" class="collapse" aria-labelledby="basicsHeadingOne" data-parent="#basicsAccordion-left" style="">
                            <div class="card-body px-0 m-3">
                                <p>Jasa yang kami tawarkan adalah jasa pembuatan konten Sosial media Instagram baik itu berupa konten feed, ig story, caption, maupun hashtag. Kami bantu Anda untuk bisa meningkatkan interaksi Instagram anda dengan follower Anda.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Card -->

                    <!-- Card -->
                    <div class="card shadow-none mb-3">
                        <div class="card-header card-collapse" id="basicsHeadingTwo">
                            <a class="btn btn-link btn-block d-flex justify-content-between card-btn collapsed text-decoration-none text-left px-0 text-left" href="javascript:;" role="button" data-toggle="collapse" data-target="#basicsCollapseTwo" aria-expanded="false" aria-controls="basicsCollapseTwo">
                                <span class="h4">Siapa yang posting hasil desain dari GoSocial?</span>

                                <span class="card-btn-toggle">
                                    <span class="h4 card-btn-toggle-default">+</span>
                                    <span class="h4 card-btn-toggle-active">−</span>
                                </span>
                            </a>
                        </div>
                        <div id="basicsCollapseTwo" class="collapse" aria-labelledby="basicsHeadingTwo" data-parent="#basicsAccordion-left">
                            <div class="card-body px-0 m-3">
                                <p>Jasa yang kami berikan sudah termasuk untuk scheduling post di Akun Instagram Anda. Kami menjaga 100% kerahasiaan akun dan data. Namun, Anda bisa untuk tidak menggunakan jasa ini. Jika Anda ingin menjaga privasi akun.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Card -->

                    <!-- Card -->
                    <div class="card shadow-none mb-3">
                        <div class="card-header card-collapse" id="basicsHeadingThree">
                            <a class="btn btn-link btn-block d-flex justify-content-between card-btn collapsed text-decoration-none text-left px-0" href="javascript:;" role="button" data-toggle="collapse" data-target="#basicsCollapseThree" aria-expanded="false" aria-controls="basicsCollapseThree">
                                <span class="h4">Bagaimana sistem pembayaran untuk layanan SMM?</span>

                                <span class="card-btn-toggle">
                                    <span class="h4 card-btn-toggle-default">+</span>
                                    <span class="h4 card-btn-toggle-active">−</span>
                                </span>
                            </a>
                        </div>
                        <div id="basicsCollapseThree" class="collapse" aria-labelledby="basicsHeadingThree" data-parent="#basicsAccordion-left">
                            <div class="card-body px-0 m-3">
                                <p>Sistem pembayaran melalui transfer bank maksimal dalam jangka waktu 3 hari setelah invoice dikirim. Pembayaran dapat dibagi menjadi beberapa kali term untuk meringankan cashflow perusahaan Anda.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Card -->

                    <!-- Card -->
                    <div class="card shadow-none mb-3">
                        <div class="card-header card-collapse" id="basicsHeadingFour">
                            <a class="btn btn-link btn-block d-flex justify-content-between card-btn collapsed text-decoration-none text-left px-0" href="javascript:;" role="button" data-toggle="collapse" data-target="#basicsCollapseFour" aria-expanded="false" aria-controls="basicsCollapseFour">
                                <span class="h4">Untuk foto konten apakah dari saya atau GoSocial?</span>
                                <span class="card-btn-toggle">
                                    <span class="card-btn-toggle-default h4">+</span>
                                    <span class="card-btn-toggle-active h4">−</span>
                                </span>
                            </a>
                        </div>
                        <div id="basicsCollapseFour" class="collapse" aria-labelledby="basicsHeadingFour" data-parent="#basicsAccordion-left">
                            <div class="card-body px-0 m-3">
                                <p>Untuk foto produk, Anda yang harus menyiapkan karena jasa ini belum termasuk foto produk. Anda bisa mengirim file foto melalui email, telegram atau whatsapp.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Card -->

                    <!-- Card -->
                    <div class="card shadow-none mb-3">
                        <div class="card-header card-collapse" id="basicsHeadingFive">
                            <a class="btn btn-link btn-block d-flex justify-content-between card-btn collapsed text-decoration-none text-left px-0" href="javascript:;" role="button" data-toggle="collapse" data-target="#basicsCollapseFive" aria-expanded="false" aria-controls="basicsCollapseFive">
                                <span class="h4">Apa saja akses yang diperlukan GoSocial?</span>
                                <span class="card-btn-toggle">
                                    <span class="card-btn-toggle-default h4">+</span>
                                    <span class="card-btn-toggle-active h4">−</span>
                                </span>
                            </a>
                        </div>
                        <div id="basicsCollapseFive" class="collapse" aria-labelledby="basicsHeadingFive" data-parent="#basicsAccordion-left">
                            <div class="card-body px-0 m-3">
                                <p>
                                    Untuk mengelola social media Facebook, kami membutuhkan akses fanspage dengan diangkat menjadi admin di Fanpage Anda. Tidak perlu memberikan akses masuk ke Facebook pribadi.
                                    <br>
                                    Untuk mengelola social media Instagram, nantinya kami dapat diangkat menjadi admin Fanpage dan diberikan akses login Instagramnya.
                                </p>
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
                                <span class="h4">Apa yang membedakan layanan dari GoSocial dengan Agency lain?</span>

                                <span class="card-btn-toggle">
                                    <span class="h4 card-btn-toggle-default">+</span>
                                    <span class="h4 card-btn-toggle-active">−</span>
                                </span>
                            </a>
                        </div>
                        <div id="basicsCollapseSix" class="collapse" aria-labelledby="basicsHeadingSix" data-parent="#basicsAccordion-right">
                            <div class="card-body px-0 m-3">
                                <p>
                                    GoSocial adalah perusahaan layanan media sosial yang memahami dan selalu up to date terhadap algoritma media sosial sehingga kami dapat memberikan solusi pengembangan merek di media sosial secara organik.
                                    <br>
                                    Tidak hanya itu saja kami juga akan membantu Anda dalam melakukan riset konten giveaway & influencer yang tepat untuk brand Anda.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Card -->

                    <!-- Card -->
                    <div class="card shadow-none mb-3">
                        <div class="card-header card-collapse" id="basicsHeadingSeven">
                            <a class="btn btn-link btn-block d-flex justify-content-between card-btn collapsed text-decoration-none text-left px-0" href="javascript:;" role="button" data-toggle="collapse" data-target="#basicsCollapseSeven" aria-expanded="false" aria-controls="basicsCollapseSeven">
                                <span class="h4">Saya belum memiliki akun Social Media. Apakah bisa dibantu?</span>

                                <span class="card-btn-toggle">
                                    <span class="card-btn-toggle-default h4">+</span>
                                    <span class="card-btn-toggle-active h4">−</span>
                                </span>
                            </a>
                        </div>
                        <div id="basicsCollapseSeven" class="collapse" aria-labelledby="basicsHeadingSeven" data-parent="#basicsAccordion-right">
                            <div class="card-body px-0 m-3">
                                <p>Tentu bisa. Kami akan buatkan Fanpage usaha Anda melalui akun Facebook kami, kemudian Anda akan kami angkat menjadi admin Fanpage, dengan akses tersebut Anda bisa melakukan pengubahan apapun pada Fanpage. Untuk Instagram, Anda perlu menginformasikan alamat email Anda.</p>
                            </div>
                        </div>
                    </div>

                    <div class="card shadow-none mb-3">
                        <div class="card-header card-collapse" id="basicsHeadingSeven">
                            <a class="btn btn-link btn-block d-flex justify-content-between card-btn collapsed text-decoration-none text-left px-0" href="javascript:;" role="button" data-toggle="collapse" data-target="#basicsCollapseSeven" aria-expanded="false" aria-controls="basicsCollapseSeven">
                                <span class="h4">Apakah ada kontak untuk konsultasi lebih lanjut?</span>

                                <span class="card-btn-toggle">
                                    <span class="card-btn-toggle-default h4">+</span>
                                    <span class="card-btn-toggle-active h4">−</span>
                                </span>
                            </a>
                        </div>
                        <div id="basicsCollapseSeven" class="collapse" aria-labelledby="basicsHeadingSeven" data-parent="#basicsAccordion-right">
                            <div class="card-body px-0 m-3">
                                <p>Kami melayani konsultasi terkait Social Media secara gratis. Silahkan hubungi Admin Account Executive kami melalui nomor dibawah:</p>
                                <ul>
                                    <li><p>Whatsapp : +62 8515 9974 507 (AE WhatsApp)</p></li>
                                    <li><p>Email : hello@gosocial.co.id</p></li>
                                </ul>
                                <p>Atau dapat menggunakan layanan Form Kontak kami dihalaman Hubungi Kami.</p>
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
