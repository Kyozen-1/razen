@extends('landing-page-razen-studio.layouts.app')
@section('title', 'Razen Studio | Visual Branding Design')

@section('css')
<link rel="stylesheet" href="{{ asset('css/custom_style.css') }}">
@endsection

@section('content')
<section class="flat-title-page back-ground-style">
    <div class="container-fluid">
        <div class="row">
            <div class="breadcrumbs text-center link-style-5 text-white">
                <h2 class="section-title-page text-white">Visual Branding & Design</h2>
                <p class="mb-5">Berbagai layanan branding produk hingga corporate branding mulai yang lengkap.</p>
                <ul class="breadcrumbs-inner list-center display-flex">
                    <li><a class="section-16px-regular font-weight-500 text-decoration-none" href="{{ route('home') }}">Home</a></li>
                    <li>
                        <h4 class="section-16px-regular font-weight-500 text-white">Visual Branding & Design</h4>
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
                        <h4 class="section-subtitle">KONSULTAN & JASA BRANDING #1 DI INDONESIA</h4>
                        <h2 class="section-45px-montserrat margin-top-15 margin-bottom-20">Branding lebih dari identitas</h2>
                    </div>
                    <p class="section-17px-regular margin-bottom-25">Branding adalah bagaimana bisnis menunjukkan identitas sekaligus kesan pertama yang akan dilihat orang ketika mereka melihat sebuah merek atau produk.</p>
                    <p class="section-17px-regular margin-bottom-25">Karena hal tersebut, penting bagi bisnis untuk memiliki branding visual yang merepresentasikan identitas suatu perusahaan dan produk, agar meninggalkan kesan yang berdampak terhadap calon pelanggan.</p>
                    <p class="section-17px-regular margin-bottom-25">Layanan jasa branding GoSocial hadir untuk membantu bisnis maupun produk mengembangkan brand image yang kuat!.</p>
                    <div class="button-about margin-top-48 wow fadeInUp" data-wow-delay="600ms"
                        data-wow-duration="1500ms">
                        <a href="{{ route('visual-branding-design.jasa-desain-grafis.index') }}" class="button-footer arrow-btn btn-st btn-style-1">Let's Craft Your Identity!</a>
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
        <div class="row" style="margin-bottom: 5rem">
            <div class="col-md-12">
                <div class="section-title wow fadeInDown">
                    <h4 class="section-subtitle">WHAT WE DO?</h4>
                    <h2 class="section-main-title section-45px-montserrat">Pilihan Layanan Branding</h2>
                </div>
            </div>
            <div class="col-md-4">
                <div class="latest-new-box grow-up-hover wow fadeInUp" data-wow-delay="0ms"
                    data-wow-duration="1500ms">
                    <div class="about-post">
                        <img src="{{ asset('olux/assets/images/image-box/about-post-mystory.jpg') }}" alt="images">
                        <div class="mark-about-post"></div>
                    </div>
                    <div class="latest-content">
                        <div class="latest-title margin-bottom-20">
                            <a href="#" class="section-20px-montserrat text-dark">Digital Brand Activation</a>
                            <p class="text-danger">(Mulai dari 1 Juta)</p>
                            <p>Layanan terlengkap untuk memulai branding produk maupun bisnis secara digital, menangani segala hal yang berkaitan dengan strategi merek digital.</p>
                        </div>
                        <div class="latest-readmore"><a href="#" class="read-more"></a></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="latest-new-box grow-up-hover wow fadeInUp" data-wow-delay="600ms"
                    data-wow-duration="1500ms">
                    <div class="about-post">
                        <img src="{{ asset('olux/assets/images/image-box/about-post-mystory.jpg') }}" alt="images">
                        <div class="mark-about-post"></div>
                    </div>
                    <div class="latest-content">
                        <div class="latest-title margin-bottom-20"><a href="{{ route('visual-branding-design.jasa-desain-grafis.index') }}"
                                class="section-20px-montserrat text-dark">Jasa Desain Grafis</a>
                                <p class="text-danger">(Mulai dari 50 ribu)</p>
                                <p>Layanan desain brand identity yang merupakan aspek-aspek visual yang menjadi identitas atau citra visual dari sebuah brand. Meliputi (Logo, Font, Warna, Branding Kit, dsb).</p>
                            </div>
                        <div class="latest-readmore"><a href="{{ route('visual-branding-design.jasa-desain-grafis.index') }}" class="read-more"></a></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="latest-new-box grow-up-hover wow fadeInUp" data-wow-delay="600ms"
                    data-wow-duration="1500ms">
                    <div class="about-post">
                        <img src="{{ asset('olux/assets/images/image-box/about-post-mystory.jpg') }}" alt="images">
                        <div class="mark-about-post"></div>
                    </div>
                    <div class="latest-content">
                        <div class="latest-title margin-bottom-20"><a href="{{ route('commercial-photography') }}"
                                class="section-20px-montserrat text-dark">Jasa Foto Produk</a>
                                <p class="text-danger">(Mulai dari 25 ribu)</p>
                                <p>Layanan foto produk membuat produk terlihat lebih menarik hingga dapat meningkatkan kepercayaan calon pembeli dan nilai jual sekaligus identitas suatu merek.</p>
                            </div>
                        <div class="latest-readmore"><a href="{{ route('commercial-photography') }}" class="read-more"></a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="button-contact-me wow fadeInDown">
                    <a href="{{ route('contact', ['id'=>1]) }}" class="button-footer arrow-btn btn-st text-decoration-none">Punya kebutuhan lain?</a>
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
                    <h2 class="section-45px-montserrat margin-top-15">Harga Jasa Desain</h2>
                    <p class="text-muted">Paket Jasa Desain profesional dan terbaik dengan biaya termurah.</p>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="60" data-smobile="60"
                    style="height:60px"></div>
            </div>
        </div>

        <div class="row align-items-lg-center">
            <div class="col-lg-5 mb-9 mb-lg-0">
                <!-- Pricing -->
                <div class="card z-index-2 p-4 p-md-7">
                    <span class="text-dark">
                        <p>Mulai dari</p>
                        <span class="display-4">Rp. 1</span>
                        <span class="font-size-3">Jt</span>
                    </span>

                    <hr class="my-4">

                    <div class="mb-5">
                        <p>Konsultasi dengan tim kami terlebih dahulu untuk analisa strategi promosi terbaik bagi bisnis Anda.</p>
                    </div>

                    <div class="mb-2">
                        <a class="btn btn-primary btn-pill btn-lg transition-3d-hover" href="{{ route('contact') }}">
                            Konsultasi Sekarang</i>
                        </a>
                    </div>

                    <p class="small">*Konsultasi keperluan Anda dengan tim kami</p>
                </div>
                <!-- End Pricing -->
            </div>

            <div class="col-lg-7">
                <div class="pl-lg-6">
                    <div class="row">
                        <div class="col-sm-6 mb-3">
                            <!-- Icon Blocks -->
                            <figure class="mb-3">
                                <img src="https://gosocial.co.id/assets/svg/icons/icon-7.svg" alt="SVG" style="width: 10rem; height:auto;">
                            </figure>
                            <h4>Full Support &amp; Profesional</h4>
                            <p>Full support oleh tim profesional yang telah berpengalaman lebih dari 5 tahun.</p>
                            <!-- End Icon Blocks -->
                        </div>
                        <div class="col-sm-6 mb-3">
                            <!-- Icon Blocks -->
                            <figure class="mb-3">
                                <img style="width: 10rem; height:auto;" src="https://gosocial.co.id/assets/svg/icons/icon-24.svg" alt="SVG">
                            </figure>
                            <h4>Unique Design</h4>
                            <p>Hasil dijamin original &amp; premium licensed, hak lisensi / copyrights sepenuhnya adalah milik klien.</p>
                            <!-- End Icon Blocks -->
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <!-- Icon Blocks -->
                            <figure class="mb-3">
                                <img style="width: 10rem; height:auto;" src="https://gosocial.co.id/assets/svg/icons/icon-62.svg" alt="SVG">
                            </figure>
                            <h4>Konsultasi Gratis</h4>
                            <p>Tidak yakin tentang kebutuhan dan keinginan Anda? diskusi dengan tim kami sekarang juga tanpa biaya!</p>
                            <!-- End Icon Blocks -->
                        </div>
                        <div class="col-sm-6">
                            <!-- Icon Blocks -->
                            <figure class="mb-3">
                                <img style="width: 10rem; height:auto;" src="https://gosocial.co.id/assets/svg/icons/icon-27.svg" alt="SVG">
                            </figure>
                            <h4>300+ Klien</h4>
                            <p>300 lebih bisnis telah mempercayai kami untuk menangani kebutuhan desain mereka.</p>
                            <!-- End Icon Blocks -->
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
                                <span class="h2">Apa saja jenis desain yang dapat dikerjakan GoSocial?</span>

                                <span class="card-btn-toggle justify-content-center align-self-center">
                                    <span class="h3 card-btn-toggle-default">+</span>
                                    <span class="h3 card-btn-toggle-active">−</span>
                                </span>
                            </a>
                        </div>
                        <div id="basicsCollapseOne" class="collapse" aria-labelledby="basicsHeadingOne" data-parent="#basicsAccordion-left" style="">
                            <div class="card-body px-0 m-3">
                                <p>Kami dapat membantu berbagai jenis kebutuhan desain grafis yang akan ditangani oleh tim desain yang profesional mulai dari:</p>
                                <ul>
                                    <li><p>1. Kebutuhan Bisnis seperti pembuatan logo, brosur, logo / flyer / leaflet, dsb.</p></li>
                                    <li><p>2. Stationery seperti kartu nama, kop surat, buku menu, dsb.</p></li>
                                    <li><p>3. Social Media seperti desain post / konten (infografis, peringatan, promo) untuk Instagram, Facebook, Youtube dsb.</p></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Card -->

                    <!-- Card -->
                    <div class="card shadow-none mb-3">
                        <div class="card-header card-collapse" id="basicsHeadingTwo">
                            <a class="btn btn-link btn-block d-flex justify-content-between card-btn collapsed text-decoration-none text-left px-0 text-left" href="javascript:;" role="button" data-toggle="collapse" data-target="#basicsCollapseTwo" aria-expanded="false" aria-controls="basicsCollapseTwo">
                                <span class="h2">Apa yang didapat pada paket bundling?</span>

                                <span class="card-btn-toggle justify-content-center align-self-center">
                                    <span class="h3 card-btn-toggle-default">+</span>
                                    <span class="h3 card-btn-toggle-active">−</span>
                                </span>
                            </a>
                        </div>
                        <div id="basicsCollapseTwo" class="collapse" aria-labelledby="basicsHeadingTwo" data-parent="#basicsAccordion-left">
                            <div class="card-body px-0 m-3">
                                <p>Paket bundling adalah layanan terlengkap yang cocok untuk semua macam bisnis. Yang akan didapatkan pada paket ini adalah:</p>
                                <ul style="list-style-type: circle;">
                                    <li>
                                        1. Desain logo
                                    </li>
                                    <li>
                                        2. Desain Bebas = Anda bebas request desain yang dibutuhkan bisnis anda seperti (Brosur, logo, dsb).
                                    </li>
                                    <li>
                                        3. Desain Sosmed = Pembuatan konten (infografis, perayaan, dsb) / post untuk Instagram & Facebook.
                                    </li>
                                    <li>
                                        4. Grand Design Sosmed = Pembuatan grand desain konten (master file) yang dapat anda ubah sendiri sesuai kebutuhan.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Card -->

                    <!-- Card -->
                    <div class="card shadow-none mb-3">
                        <div class="card-header card-collapse" id="basicsHeadingThree">
                            <a class="btn btn-link btn-block d-flex justify-content-between card-btn collapsed text-decoration-none text-left px-0" href="javascript:;" role="button" data-toggle="collapse" data-target="#basicsCollapseThree" aria-expanded="false" aria-controls="basicsCollapseThree">
                                <span class="h2">Berapa lama proses pengerjaan desain?</span>

                                <span class="card-btn-toggle justify-content-center align-self-center">
                                    <span class="h3 card-btn-toggle-default">+</span>
                                    <span class="h3 card-btn-toggle-active">−</span>
                                </span>
                            </a>
                        </div>
                        <div id="basicsCollapseThree" class="collapse" aria-labelledby="basicsHeadingThree" data-parent="#basicsAccordion-left">
                            <div class="card-body px-0 m-3">
                                <p>Lama pengerjaan akan menyesuaikan dengan timeline sesuai dengan paket yang berlaku. Namun apabila Anda membutuhkan waktu desain yang lebih cepat, Anda dapat memesan paket custom yang sesuai dengan kebutuhan Anda.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Card -->

                    <!-- Card -->
                    <div class="card shadow-none mb-3">
                        <div class="card-header card-collapse" id="basicsHeadingFour">
                            <a class="btn btn-link btn-block d-flex justify-content-between card-btn collapsed text-decoration-none text-left px-0" href="javascript:;" role="button" data-toggle="collapse" data-target="#basicsCollapseFour" aria-expanded="false" aria-controls="basicsCollapseFour">
                                <span class="h2">Apa yang perlu saya sediakan?</span>
                                <span class="card-btn-toggle justify-content-center align-self-center">
                                    <span class="card-btn-toggle-default h3">+</span>
                                    <span class="card-btn-toggle-active h3">−</span>
                                </span>
                            </a>
                        </div>
                        <div id="basicsCollapseFour" class="collapse" aria-labelledby="basicsHeadingFour" data-parent="#basicsAccordion-left">
                            <div class="card-body px-0 m-3">
                                <p>Layanan kami sebenarnya anti ribet, Anda tinggal terima jadi saja. Namun agar hasil yang didapatkan maksimal dan sesuai dengan yang diharapkan, maka kami membutuhkan informasi tentang produk / bisnis Anda maupun referensi desain yang diinginkan *jika ada.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Card -->

                    <!-- Card -->
                    <div class="card shadow-none mb-3">
                        <div class="card-header card-collapse" id="basicsHeadingFive">
                            <a class="btn btn-link btn-block d-flex justify-content-between card-btn collapsed text-decoration-none text-left px-0" href="javascript:;" role="button" data-toggle="collapse" data-target="#basicsCollapseFive" aria-expanded="false" aria-controls="basicsCollapseFive">
                                <span class="h2">Apakah bisa request tambahan revisi?</span>
                                <span class="card-btn-toggle justify-content-center align-self-center">
                                    <span class="card-btn-toggle-default h3">+</span>
                                    <span class="card-btn-toggle-active h3">−</span>
                                </span>
                            </a>
                        </div>
                        <div id="basicsCollapseFive" class="collapse" aria-labelledby="basicsHeadingFive" data-parent="#basicsAccordion-left">
                            <div class="card-body px-0 m-3">
                                <p>Desain yang kami buat, telah kami maksimalkan agar sesuai dengan keinginan di awal. Namun apabila anda masih kurang puas / kurang sesuai dengan hasil yang diberikan, addons tersedia untuk membantu Anda.</p>
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
                                <span class="h2">Apa lisensi yang akan saya dapat?</span>

                                <span class="card-btn-toggle justify-content-center align-self-center">
                                    <span class="h3 card-btn-toggle-default">+</span>
                                    <span class="h3 card-btn-toggle-active">−</span>
                                </span>
                            </a>
                        </div>
                        <div id="basicsCollapseSix" class="collapse" aria-labelledby="basicsHeadingSix" data-parent="#basicsAccordion-right">
                            <div class="card-body px-0 m-3">
                                <p>Desain yang kami buat adalah original untuk Anda / jika ada menggunakan elemen yang sudah berlisensi premium, Anda akan mendapatkan copyrights penuh lisensi desain sesuai paket yang dipesan.</p>
                                <p>Jika anda membutuhkan lisensi yang lebih besar / untuk distribusi yang lebih dari yang di paket. Silahkan hubungi kami untuk upgrade lisensi agar tidak terdapat masalah copyrights.</p>
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
