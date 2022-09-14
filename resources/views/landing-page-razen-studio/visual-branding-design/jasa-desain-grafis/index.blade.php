@extends('landing-page-razen-studio.layouts.app')
@section('title', 'Razen Studio | Visual Branding Design | Jasa Desain Grafis')

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
<section class="flat-title-page back-ground-style h-100">
    <div class="container-fluid">
        <div class="row">
            <div class="breadcrumbs text-center link-style-5 text-white">
                <h1 class="section-title-page text-white">Jasa Desain Grafis</h1>
                <p class="mb-5">Pilihan layanan jasa desain berkualitas & profesional yang dikerjakan oleh tim desainer pilihan untuk meningkatkan branding bisnis secara visual dengan style terkini.</p>
                <ul class="breadcrumbs-inner list-center display-flex">
                    <li><a class="section-16px-regular font-weight-500" href="{{ route('home') }}">Home</a></li>
                    <li><a class="section-16px-regular font-weight-500" href="{{ route('visual-branding-design') }}">Visual Branding & Design</a></li>
                    <li>
                        <h4 class="section-16px-regular font-weight-500 text-white">Jasa Desain Grafis</h4>
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
                        <h4 class="section-subtitle">APA PENTINGNYA</h4>
                        <h4 class="section-45px-montserrat margin-top-15 margin-bottom-20">Desain yang bagus?</h4>
                    </div>
                    <p class="section-17px-regular margin-bottom-25">
                        Salah satu cara pertama yang harus di lakukan bisnis untuk mulai melakukan Branding Digital adalah membuat desain brand yang bagus secara visual dan memiliki makna sesuai value bisnis, supaya bisnis dapat dengan mudah dikenali.
                        <br><br>
                        1. Meningkatkan value sebuah brand.
                        <br>
                        2. Merupakan brand identity suatu bisnis.
                        <br>
                        3. Meningkatkan nilai jual.
                    </p>
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
                    <h4 class="section-subtitle">LAYANAN DESAIN TERLENGKAP</h4>
                    <h2 class="section-main-title section-45px-montserrat">Pilihan Jasa Branding & Desain Lainnya</h2>
                </div>
            </div>
        </div>

        <div class="row mx-n2">
            <div class="col-sm-6 col-lg-4 px-3 pb-6 mb-3">
                <!-- Icon Blocks -->
                <div class="card text-center h-100 transition-3d-hover">
                    <div class="card-body">
                        <img class="img-fluid rounded" src="https://gosocial.co.id/assets/img/service/desain-grafis/mockup-logo.webp" alt="SVG">
                        <h2 class="mt-3">Desain Logo</h2>
                        <p class="font-size-2 text-body mb-0">
                            Buat logo sebagai langkah awal membuat identitas brand sebuah bisnis agar mudah dikenali oleh calon customer.</p>
                    </div>
                    <div class="card-footer border-0 pt-0">
                        <a class="btn btn-sm btn-outline-primary transition-3d-hover font-size-2" href="{{ route('visual-branding-design.jasa-desain-grafis.desain-logo') }}">Selengkapnya</a>
                    </div>
                </div>
                <!-- End Icon Blocks -->
            </div>

            <div class="col-sm-6 col-lg-4 px-3 pb-6 mb-3">
                <!-- Icon Blocks -->
                <div class="card text-center h-100 transition-3d-hover">
                    <div class="card-body">
                        <img class="img-fluid rounded" src="https://gosocial.co.id/assets/img/service/desain-grafis/mockup-promosi-digital.webp" alt="SVG">
                        <h2 class="mt-3">Desain Promosi Digital</h2>
                        <p class="font-size-2 text-body mb-0">
                            Pembuatan desain untuk kebutuhan konten promosi digital seperti banner iklan untuk berbagai platform.</p>
                    </div>
                    <div class="card-footer border-0 pt-0">
                        <a class="btn btn-sm btn-outline-primary transition-3d-hover font-size-2" href="{{ route('visual-branding-design.jasa-desain-grafis.desain-promosi-digital') }}">Selengkapnya</a>
                    </div>
                </div>
                <!-- End Icon Blocks -->
            </div>
            <div class="col-sm-6 col-lg-4 px-3 pb-6 mb-3">
                <!-- Icon Blocks -->
                <div class="card text-center h-100 transition-3d-hover">
                    <div class="card-body">
                        <img class="img-fluid rounded" src="https://gosocial.co.id/assets/img/service/desain-grafis/mockup-sosmed.webp" alt="SVG">
                        <h2 class="mt-3">Desain Feed Instagram</h2>
                        <p class="font-size-2 text-body mb-0">
                            Pembuatan desain feed yang profesional dan terkini untuk konten Social Media Instagram, dsb.</p>
                    </div>
                    <div class="card-footer border-0 pt-0">
                        <a class="btn btn-sm btn-outline-primary transition-3d-hover font-size-2" href="{{ route('visual-branding-design.jasa-desain-grafis.desain-feed-instagram') }}">Selengkapnya</a>
                    </div>
                </div>
                <!-- End Icon Blocks -->
            </div>

            <!-- 3 Desain Grafis: Foto Produk, Desain UI/UX, Desain Ilustrasi 2D/3D -->
            <!-- <div class="col-sm-6 col-lg-4 px-3 pb-6 mb-3">
                <div class="card text-center h-100 transition-3d-hover">
                    <div class="card-body">
                        <img class="img-fluid rounded" src="https://gosocial.co.id/assets/img/service/desain-grafis/mockup-brandingkit.webp" alt="SVG">
                        <h2 class="mt-3">Foto Produk</h2>
                        <p class="font-size-2 text-body mb-0">
                            Pembuatan foto produk berstandard studio profesional untuk menunjang branding visual dari suatu produk.</p>
                    </div>
                    <div class="card-footer border-0 pt-0">
                        <a class="btn btn-sm btn-outline-primary transition-3d-hover font-size-2" href="https://gosocial.co.id/service/branding-design/jasa-desain-grafis/desain-branding-kit">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 px-3 pb-6 mb-3">
                <div class="card text-center h-100 transition-3d-hover">
                    <div class="card-body">
                        <img class="img-fluid rounded" src="https://gosocial.co.id/assets/img/service/desain-grafis/mockup-kartunama.webp" alt="SVG">
                        <h2 class="mt-3">Desain UI/UX</h2>
                        <p class="font-size-2 text-body mb-0">
                            Pembuatan desain UI/UX untuk membuat tampilan desain website, desktop & mobile app yang profesional.</p>
                    </div>
                    <div class="card-footer border-0 pt-0">
                        <a class="btn btn-sm btn-outline-primary transition-3d-hover font-size-2" href="https://gosocial.co.id/service/branding-design/jasa-desain-grafis/desain-kartu-nama">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 px-3 pb-6 mb-sm-3">
                <div class="card text-center h-100 transition-3d-hover">
                    <div class="card-body">
                        <img class="img-fluid rounded" src="https://gosocial.co.id/assets/img/service/desain-grafis/mockup-banner.webp" alt="SVG">
                        <h2 class="mt-3">Desain Ilustrasi 2D/3D</h2>
                        <p class="font-size-2 text-body mb-0">
                            Pembuatan desain untuk konten promosi campaign digital yang profesional dan menarik.</p>
                    </div>
                    <div class="card-footer border-0 pt-0">
                        <a class="btn btn-sm btn-outline-primary transition-3d-hover font-size-2" href="https://gosocial.co.id/service/branding-design/jasa-desain-grafis/desain-banner">Selengkapnya</a>
                    </div>
                </div>
            </div> -->
            <!-- 3 Desain Grafis: Foto Produk, Desain UI/UX, Desain Ilustrasi 2D/3D -->

            <div class="col-sm-6 col-lg-4 px-3 pb-6 mb-3">
                <!-- Icon Blocks -->
                <div class="card text-center h-100 transition-3d-hover">
                    <div class="card-body">
                        <img class="img-fluid rounded" src="https://gosocial.co.id/assets/img/service/desain-grafis/mockup-brandingkit.webp" alt="SVG">
                        <h2 class="mt-3">Desain Branding Kit</h2>
                        <p class="font-size-2 text-body mb-0">
                            Pembuatan konsep desain untuk segala macam keperluan branding bisnis secara offline.</p>
                    </div>
                    <div class="card-footer border-0 pt-0">
                        <a class="btn btn-sm btn-outline-primary transition-3d-hover font-size-2" href="{{ route('visual-branding-design.jasa-desain-grafis.desain-branding-fit') }}">Selengkapnya</a>
                    </div>
                </div>
                <!-- End Icon Blocks -->
            </div>

            <div class="col-sm-6 col-lg-4 px-3 pb-6 mb-3">
                <!-- Icon Blocks -->
                <div class="card text-center h-100 transition-3d-hover">
                    <div class="card-body">
                        <img class="img-fluid rounded" src="https://gosocial.co.id/assets/img/service/desain-grafis/mockup-kartunama.webp" alt="SVG">
                        <h2 class="mt-3">Desain Kartu Nama</h2>
                        <p class="font-size-2 text-body mb-0">
                            Pembuatan desain kartu nama sebagai personal branding yang eksklusif dan profesional.</p>
                    </div>
                    <div class="card-footer border-0 pt-0">
                        <a class="btn btn-sm btn-outline-primary transition-3d-hover font-size-2" href="{{ route('visual-branding-design.jasa-desain-grafis.desain-kartu-nama') }}">Selengkapnya</a>
                    </div>
                </div>
                <!-- End Icon Blocks -->
            </div>

            <div class="col-sm-6 col-lg-4 px-3 pb-6 mb-sm-3">
                <!-- Icon Blocks -->
                <div class="card text-center h-100 transition-3d-hover">
                    <div class="card-body">
                        <img class="img-fluid rounded" src="https://gosocial.co.id/assets/img/service/desain-grafis/mockup-banner.webp" alt="SVG">
                        <h2 class="mt-3">Desain Spanduk &amp; Banner</h2>
                        <p class="font-size-2 text-body mb-0">
                            Pembuatan desain Banner, Spanduk dan Baliho yang menarik untuk media promosi OOH (Out of Home).</p>
                    </div>
                    <div class="card-footer border-0 pt-0">
                        <a class="btn btn-sm btn-outline-primary transition-3d-hover font-size-2" href="{{ route('visual-branding-design.jasa-desain-grafis.desain-spanduk-banner') }}">Selengkapnya</a>
                    </div>
                </div>
                <!-- End Icon Blocks -->
            </div>
            <div class="col-sm-6 col-lg-4 px-3 pb-6 mb-3">
                <!-- Icon Blocks -->
                <div class="card text-center h-100 transition-3d-hover">
                    <div class="card-body">
                        <img class="img-fluid rounded" src="https://gosocial.co.id/assets/img/service/desain-grafis/mockup-brosur.webp" alt="SVG">
                        <h2 class="mt-3">Desain Brosur</h2>
                        <p class="font-size-2 text-body mb-0">
                            Pembuatan desain brosur sebagai media informasi dan penawaran mengenai produk atau jasa yang ditawarkan.</p>
                    </div>
                    <div class="card-footer border-0 pt-0">
                        <a class="btn btn-sm btn-outline-primary transition-3d-hover font-size-2" href="{{ route('visual-branding-design.jasa-desain-grafis.desain-brosur') }}">Selengkapnya</a>
                    </div>
                </div>
                <!-- End Icon Blocks -->
            </div>

            <div class="col-sm-6 col-lg-4 px-3 pb-6 mb-3">
                <!-- Icon Blocks -->
                <div class="card text-center h-100 transition-3d-hover">
                    <div class="card-body">
                        <img class="img-fluid rounded" src="https://gosocial.co.id/assets/img/service/desain-grafis/mockup-packaging.webp" alt="SVG">
                        <h2 class="mt-3">Desain Kemasan</h2>
                        <p class="font-size-2 text-body mb-0">
                            Pembuatan desain kemasan produk &amp; packaging untuk kebutuhan branding bisnis yang memiliki produk.</p>
                    </div>
                    <div class="card-footer border-0 pt-0">
                        <a class="btn btn-sm btn-outline-primary transition-3d-hover font-size-2" href="{{ route('visual-branding-design.jasa-desain-grafis.desain-kemasan') }}">Selengkapnya</a>
                    </div>
                </div>
                <!-- End Icon Blocks -->
            </div>

            <div class="col-sm-6 col-lg-4 px-3 pb-6 mb-sm-3">
                <!-- Icon Blocks -->
                <div class="card text-center h-100 transition-3d-hover">
                    <div class="card-body">
                        <img class="img-fluid rounded" src="https://gosocial.co.id/assets/img/service/desain-grafis/mockup-labeltag.webp" alt="SVG">
                        <h2 class="mt-3">Desain Label Produk</h2>
                        <p class="font-size-2 text-body mb-0">
                            Pembuatan desain label sebagai pendukung kemasan produk / packaging agar lebih profesional.</p>
                    </div>
                    <div class="card-footer border-0 pt-0">
                        <a class="btn btn-sm btn-outline-primary transition-3d-hover font-size-2" href="{{ route('visual-branding-design.jasa-desain-grafis.desain-label-produk') }}">Selengkapnya</a>
                    </div>
                </div>
                <!-- End Icon Blocks -->
            </div>

            <div class="col-sm-6 col-lg-4 px-3 pb-6 mb-3">
                <!-- Icon Blocks -->
                <div class="card text-center h-100 transition-3d-hover">
                    <div class="card-body">
                        <img class="img-fluid rounded" src="https://gosocial.co.id/assets/img/service/desain-grafis/mockup-stamp.webp" alt="SVG">
                        <h2 class="mt-3">Desain Stempel</h2>
                        <p class="font-size-2 text-body mb-0">
                            Pembuatan desain stempel berisi tulisan yang memuat nama dan logo suatu institusi atau perusahaan.</p>
                    </div>
                    <div class="card-footer border-0 pt-0">
                        <a class="btn btn-sm btn-outline-primary transition-3d-hover font-size-2" href="{{ route('visual-branding-design.jasa-desain-grafis.desain-stempel') }}">Selengkapnya</a>
                    </div>
                </div>
                <!-- End Icon Blocks -->
            </div>

            <div class="col-sm-6 col-lg-4 px-3 pb-6 mb-3">
                <!-- Icon Blocks -->
                <div class="card text-center h-100 transition-3d-hover">
                    <div class="card-body">
                        <img class="img-fluid rounded" src="https://gosocial.co.id/assets/img/service/desain-grafis/mockup-calendar.webp" alt="SVG">
                        <h2 class="mt-3">Desain Kalender</h2>
                        <p class="font-size-2 text-body mb-0">
                            Pembuatan desain kalender tahunan yang unik, keren dan elegan untuk membuat merchandise kalender lebih menarik.</p>
                    </div>
                    <div class="card-footer border-0 pt-0">
                        <a class="btn btn-sm btn-outline-primary transition-3d-hover font-size-2" href="{{ route('visual-branding-design.jasa-desain-grafis.desain-kalender') }}">Selengkapnya</a>
                    </div>
                </div>
                <!-- End Icon Blocks -->
            </div>

            <div class="col-sm-6 col-lg-4 px-3 pb-6 mb-sm-3">
                <!-- Icon Blocks -->
                <div class="card text-center h-100 transition-3d-hover">
                    <div class="card-body">
                        <img class="img-fluid rounded" src="https://gosocial.co.id/assets/img/service/desain-grafis/mockup-sertifikat.webp" alt="SVG">
                        <h2 class="mt-3">Desain Branding Event</h2>
                        <p class="font-size-2 text-body mb-0">
                            Pembuatan desain branding event, seminar, maupun acara kampus atau instansi meliputi ID card, sertifikat, dan piagam.</p>
                    </div>
                    <div class="card-footer border-0 pt-0">
                        <a class="btn btn-sm btn-outline-primary transition-3d-hover font-size-2" href="{{ route('visual-branding-design.jasa-desain-grafis.desain-branding-event') }}">Selengkapnya</a>
                    </div>
                </div>
                <!-- End Icon Blocks -->
            </div>

            <div class="col-sm-6 col-lg-4 px-3 pb-6 mb-3">
                <!-- Icon Blocks -->
                <div class="card text-center h-100 transition-3d-hover">
                    <div class="card-body">
                        <img class="img-fluid rounded" src="https://gosocial.co.id/assets/img/service/desain-grafis/mockup-amplop.webp" alt="SVG">
                        <h2 class="mt-3">Desain Amplop</h2>
                        <p class="font-size-2 text-body mb-0">
                            Pembuatan desain amplop untuk menambah profesionalitas ketika mengirim surat atau dokumen bisnis.</p>
                    </div>
                    <div class="card-footer border-0 pt-0">
                        <a class="btn btn-sm btn-outline-primary transition-3d-hover font-size-2" href="{{ route('visual-branding-design.jasa-desain-grafis.desain-amplop') }}">Selengkapnya</a>
                    </div>
                </div>
                <!-- End Icon Blocks -->
            </div>

            <div class="col-sm-6 col-lg-4 px-3 pb-6 mb-3">
                <!-- Icon Blocks -->
                <div class="card text-center h-100 transition-3d-hover">
                    <div class="card-body">
                        <img class="img-fluid rounded" src="https://gosocial.co.id/assets/img/service/desain-grafis/mockup-kopsurat.webp" alt="SVG">
                        <h2 class="mt-3">Desain Kop Surat</h2>
                        <p class="font-size-2 text-body mb-0">
                            Pembuatan desain kop surat yang profesional sebagai identitas pada lembaga, organisasi, badan, atau instansi.</p>
                    </div>
                    <div class="card-footer border-0 pt-0">
                        <a class="btn btn-sm btn-outline-primary transition-3d-hover font-size-2" href="{{ route('visual-branding-design.jasa-desain-grafis.desain-kop-surat') }}">Selengkapnya</a>
                    </div>
                </div>
                <!-- End Icon Blocks -->
            </div>

            <div class="col-sm-6 col-lg-4 px-3 pb-6 mb-sm-3">
                <!-- Icon Blocks -->
                <div class="card text-center h-100 transition-3d-hover">
                    <div class="card-body">
                        <img class="img-fluid rounded" src="https://gosocial.co.id/assets/img/service/desain-grafis/mockup-mug.webp" alt="SVG">
                        <h2 class="mt-3">Desain Merchandise</h2>
                        <p class="font-size-2 text-body mb-0">
                            Pembuatan konsep desain merchandise seperti cangkir, payung, bolpoin untuk kebutuhan branding bisnis.</p>
                    </div>
                    <div class="card-footer border-0 pt-0">
                        <a class="btn btn-sm btn-outline-primary transition-3d-hover font-size-2" href="{{ route('visual-branding-design.jasa-desain-grafis.desain-merchandise') }}">Selengkapnya</a>
                    </div>
                </div>
                <!-- End Icon Blocks -->
            </div>
        </div>
        <!-- Info -->
        <div class="text-center">
            <div class="d-inline-block font-size-1 border bg-white text-center rounded-pill py-3 px-4 font-size-2">
                Belum tahu jasa desain yang dibutuhkan?<a class="d-block d-sm-inline-block font-weight-bold ml-sm-3 font-size-2" href="{{ route('contact') }}">Konsultasi sekarang juga!</a>
            </div>
        </div>
        <!-- End Info -->
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
                            <img style="height: 5rem; width:5rem; padding: -3rem;" src="https://repo_razen.test/images/landingpage_razenstudio/social-media-engagement/6317d470a1881-220907.png">
                        </div>
                    </div>
                    <h3 class="section-20px-montserrat font-weight-600 line-height-35">Desain Terkini</h3>
                    <p>Studio desain GoSocial selalu mengikuti trend terkini dengan desain yang profesional & persuasif.</p>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="counter-box themesflat-counter hover-up wow fadeInUp" data-wow-delay="0.1s">
                    <div class="icon-box">
                        <div class="icon-counter">
                            <img style="height: 5rem; width:5rem; padding: -3rem;" src="https://repo_razen.test/images/landingpage_razenstudio/social-media-engagement/6317d470a1881-220907.png">
                        </div>
                    </div>
                    <h3 class="section-20px-montserrat font-weight-600 line-height-35">Hemat Waktu & Biaya</h3>
                    <p>Tidak perlu membuang waktu & biaya untuk merekrut creative designer serta menyediakan peralatan yang mahal.</p>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="counter-box themesflat-counter hover-up wow fadeInUp" data-wow-delay="0.1s">
                    <div class="icon-box">
                        <div class="icon-counter">
                            <img style="height: 5rem; width:5rem; padding: -3rem;" src="https://repo_razen.test/images/landingpage_razenstudio/social-media-engagement/6317d470a1881-220907.png">
                        </div>
                    </div>
                    <h3 class="section-20px-montserrat font-weight-600 line-height-35">Talented Designer</h3>
                    <p>Dikerjakan oleh tim desainer kami yang profesional, tidak perlu pusing untuk mengelola tim desainer sendiri.</p>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="counter-box themesflat-counter hover-up wow fadeInUp" data-wow-delay="0.1s">
                    <div class="icon-box">
                        <div class="icon-counter">
                            <span class="icon-guarantee1"></span>
                        </div>
                    </div>
                    <h3 class="section-20px-montserrat font-weight-600 line-height-35">Hasil Original</h3>
                    <p>Hasil desain dijamin original bukan plagiarisme, lisensi dan hak cipta sepenuhnya diserahkan kepada klien.</p>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="counter-box themesflat-counter hover-up wow fadeInUp" data-wow-delay="0.1s">
                    <div class="icon-box">
                        <div class="icon-counter">
                            <span class="icon-guarantee1"></span>
                        </div>
                    </div>
                    <h3 class="section-20px-montserrat font-weight-600 line-height-35">Proses Desain Cepat</h3>
                    <p>Dapatkan hasil desain dalam hitungan hari, tersedia juga addons layanan "express" agar diprioritaskan.</p>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="counter-box themesflat-counter hover-up wow fadeInUp" data-wow-delay="0.1s">
                    <div class="icon-box">
                        <div class="icon-counter">
                            <span class="icon-guarantee1"></span>
                        </div>
                    </div>
                    <h3 class="section-20px-montserrat font-weight-600 line-height-35">File Master Lengkap</h3>
                    <p>Dapatkan juga file master design untuk keperluan cetak dengan ukuran besar dan memudahkan perubahan desain.</p>
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
                    <h4 class="section-subtitle">OUR LATEST WORK</h4>
                    <h2 class="section-45px-montserrat margin-top-15">Portofolio</h2>
                    <p class="mb-5">Ribuan bisnis di Indonesia telah menggunakan jasa desain grafis kami.</p>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="60" data-smobile="60"
                    style="height:60px"></div>
            </div>
            <div class="col-md-4">
                <div class="services-box">
                    <div class="wraper-effect"></div>
                    <span class="icon-services icon-development1 font-size-icon"></span>
                    <div class="services-content">
                        <a href="service-single.html" class="section-22px-montserrat text-dark text-decoration-none">Instagram</a>
                        <p class="services-desc">Embed Foto Instagram</p>
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
                        <h4 class="section-subtitle">DESIGN AGENCY NO.1 DI INDONESIA</h4>
                        <h4 class="section-45px-montserrat margin-top-15 margin-bottom-20">All-In-One Graphic Design Solution To Show Up Your Brand Identity!</h4>
                    </div>
                    <p class="section-17px-regular margin-bottom-25">Mulai dari pembuatan Desain Logo, Desain Branding Kit, Desain Stationery, hingga Desain Konten Digital / Social Media dengan harga terjangkau untuk semua tahapan bisnis dan dikerjakan oleh tim desainer grafis yang Profesional.</p>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div class="counter-box themesflat-counter hover-up wow fadeInUp" data-wow-delay="0.1s">
                            <div class="number-content h2"><span class="number"
                                    data-speed="2000" data-to="100" data-inviewport="yes">100</span>+ logo</div>
                            <p>Kami telah membantu lebih dari 100 bisnis membuat logo yang bermakna.</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="counter-box themesflat-counter hover-up wow fadeInUp" data-wow-delay="0.1s">
                            <div class="number-content h2"><span class="number"
                                    data-speed="2000" data-to="150" data-inviewport="yes">150</span>+ social media</div>
                            <p>Kami telah membantu ratusan desain konten feed maupun promosi akun di social media.</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="counter-box themesflat-counter hover-up wow fadeInUp" data-wow-delay="0.1s">
                            <div class="number-content h2"><span class="number"
                                    data-speed="2000" data-to="95" data-inviewport="yes">95</span>%</div>
                            <p>Klien kami puas akan hasil jasa desain yang diberikan oleh GoSocial.</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="counter-box themesflat-counter hover-up wow fadeInUp" data-wow-delay="0.1s">
                            <div class="number-content h2"><span class="number"
                                    data-speed="2000" data-to="2" data-inviewport="yes">2</span>tahun</div>
                            <p>Kami berpengalaman lebih dari 2 tahun membantu branding visual bisnis.</p>
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
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title wow fadeInDown">
                    <h2 class="section-45px-montserrat margin-top-15">THE PRODUCTION PROCESS</h2>
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
