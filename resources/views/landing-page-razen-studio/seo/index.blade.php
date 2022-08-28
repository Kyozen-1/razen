@extends('landing-page-razen-studio.layouts.app')
@section('title', 'Razen Studio | SEO')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/custom_style.css') }}">
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
                            <a class="section-16px-regular font-weight-500 mr-2 text-white text-decoration-none" href="{{ route('home') }}">Home </a>  <h4 class="section-16px-regular font-weight-500 text-white"> > Jasa SEO</h4>
                        </div>
                        <h2 class="title-slider section-65px-montserrat text-white">Jasa SEO</h2>
                        <p class="desc-slider">SEO (Search Engine Optimization) merupakan teknik mengoptimalkan website yang membuat website mudah ditemukan oleh pelanggan potensial di Search Engine seperti Google, tanpa iklan.
                            <br>
                            Halaman website yang berada di halaman pertama Google akan meningkatkan traffic organik dan konversi pada website.</p>
                    </div>
                    <div class="content-slider-right">
                        <img src="{{ asset('olux/assets/images/image-slider/img-slider.jpg') }}" alt="images">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="flat-counter">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title wow fadeInDown">
                    <h4 class="section-subtitle">JASA SEO #1 DI INDONESIA</h4>
                    <h2 class="section-45px-montserrat margin-top-15">Apa yang kami lakukan?</h2>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="60" data-smobile="60"
                    style="height:60px"></div>
            </div>
            <div class="col-md-3 mb-5">
                <div class="counter-box themesflat-counter hover-up wow fadeInUp" data-wow-delay="0.1s">
                    <div class="icon-box">
                        <div class="icon-counter">
                            <span class="icon-guarantee1"></span>
                        </div>
                    </div>
                    <h3 class="section-20px-montserrat font-weight-600 line-height-35">Competitive Analysis</h3>
                    <p>Analisa kompetitor dan kata kunci yang berpeluang tinggi untuk menghasilkan strategi yang data-driven.</p>
                </div>
            </div>
            <div class="col-md-3 mb-5">
                <div class="counter-box themesflat-counter hover-up wow fadeInUp" data-wow-delay="0.1s">
                    <div class="icon-box">
                        <div class="icon-counter">
                            <span class="icon-guarantee1"></span>
                        </div>
                    </div>
                    <h3 class="section-20px-montserrat font-weight-600 line-height-35">On-Page SEO</h3>
                    <p>Optimisasi halaman website secara teknis agar lebih mudah di index oleh Search Engine dan diakses pengguna.</p>
                </div>
            </div>
            <div class="col-md-3 mb-5">
                <div class="counter-box themesflat-counter hover-up wow fadeInUp" data-wow-delay="0.1s">
                    <div class="icon-box">
                        <div class="icon-counter">
                            <span class="icon-guarantee1"></span>
                        </div>
                    </div>
                    <h3 class="section-20px-montserrat font-weight-600 line-height-35">Off-Page SEO Campaign</h3>
                    <p>Melakukan campaign untuk meningkatkan kredibilitas website melalui link building, social media shares, dsb.</p>
                </div>
            </div>
            <div class="col-md-3 mb-5">
                <div class="counter-box themesflat-counter hover-up wow fadeInUp" data-wow-delay="0.1s">
                    <div class="icon-box">
                        <div class="icon-counter">
                            <span class="icon-guarantee1"></span>
                        </div>
                    </div>
                    <h3 class="section-20px-montserrat font-weight-600 line-height-35">Rank Improvement</h3>
                    <p>Hasil akan terlihat setelah 3-6 bulan strategi dijalankan, menunggu google melakukan update hasil pencarian.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container space-bottom-2">
    <!-- Card -->
    <a class="card shadow-none bg-soft-success text-inherit transition-3d-hover p-4 p-md-7">
        <div class="row">
            <div class="col-lg-4 order-lg-2 mb-5 mb-lg-0">
                <div class="d-flex flex-column h-100">
                    <div class="mb-3">
                        <h2 class="h1">Studi Kasus</h2>
                        <p class="text-body">GoSocial membantu meningkatkan website travel Tiket Resmi untuk
                            meningkatkan pengunjung web mencapai All-Time-High sejak menggunakan Jasa SEO kami di awal
                            2021.</p>
                    </div>

                    <!-- Testimonials -->
                    <div class="card shadow-none p-4 mt-auto">
                        <div class="mb-3 text-center">
                            <img class="mr-auto h-100" src="https://gosocial.co.id/assets/img/service/seo/logo-tiket-resmi.webp" alt="SVG Logo">
                        </div>

                        <div class="mb-3">
                            <blockquote class="text-dark font-size-2">"Jasa SEO yang ditawarkan sangat berhasil di website kami
                                untuk meningkatkan pengunjung! Terimakasih!"
                            </blockquote>
                        </div>

                        <div class="media">
                            <div class="avatar avatar-circle mr-3">
                                <img class="avatar-img" src="https://gosocial.co.id/assets/img/service/seo/larasati.webp" alt="Image Description">
                            </div>
                            <div class="media-body">
                                <span class="d-block h5 mb-0">Larasati</span>
                                <small class="d-block text-muted">Marketing Tiket Resmi</small>
                            </div>
                        </div>
                    </div>
                    <!-- End Testimonials -->
                </div>
            </div>

            <div class="col-lg-8 order-lg-1">
                <!-- Info -->
                <div class="mb-5">
                    <img class="img-fluid rounded-lg" src="https://gosocial.co.id/assets/img/service/seo/case1.webp" alt="Image Description">
                </div>

                <div class="row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <h2>Goals</h2>
                        <p class="text-body">Grow organic traffic, site impression and keywords to website.</p>
                    </div>

                    <div class="col-sm-6">
                        <h2>Result</h2>
                        <p class="text-body">Increase 140% impression compared to previous period before work with
                            GoSocial.</p>
                    </div>
                </div>
                <!-- End Info -->
            </div>
        </div>
    </a>
    <!-- End Card -->
</div>

<div class="container space-bottom-2">
    <!-- Card -->
    <a class="card shadow-none bg-soft-primary text-inherit transition-3d-hover p-4 p-md-7">
        <div class="row">
            <div class="col-lg-4 mb-5 mb-lg-0">
                <img class="clients mr-auto mb-2" src="https://gosocial.co.id/assets/img/logos/gosocial-logo.png" alt="SVG Logo">
                <div class="d-flex flex-column">

                    <h2 class="h2">Bagaimana kami melakukannya untuk GoSocial sendiri?</h2>
                    <p class="text-body">Kami merupakan Digital Agency atau bisnis yang percaya terhadap peranan penting
                        Search Engine Optimization (SEO), oleh karena itu kami menawarkan solusi yang telah berhasil
                        kami terapkan juga.
                    </p>
                </div>
            </div>

            <div class="col-lg-8">
                <!-- Info -->
                <div class="mb-5">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" class="bg-primary" data-slide-to="0"></li>
                            <li data-target="#carouselExampleIndicators" class="bg-primary" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" class="bg-primary active" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item">
                                <img class="d-block w-100" src="https://gosocial.co.id/assets/img/service/seo/case2.webp" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="https://gosocial.co.id/assets/img/service/seo/case2a.webp" alt="Second slide">
                            </div>
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="https://gosocial.co.id/assets/img/service/seo/case2b.webp" alt="Third slide">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Info -->
        </div>
        <div class="row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <h2>Traffic selalu meningkat sejak launching</h2>
                <p class="text-body">Sejak 2020 data menunjukkan bahwa GoSocial melakukan SEO dengan baik terbukti dari
                    selalu meningkatnya traffic dari waktu ke waktu.</p>
            </div>

            <div class="col-sm-6">
                <h2>Jasa Seo Murah</h2>
                <p class="text-body">Kami berkomitmen membuat layanan digital marketing terutama jasa seo yang dapat
                    terjangkau dan sesuai bagi berbagai skala bisnis mulai UMKM hingga corporate.</p>
            </div>
        </div>
    </a>
    <!-- End Card -->
</div>

<div class="container space-bottom-2">
    <a class="card shadow-none bg-soft-warning text-inherit transition-3d-hover p-4 p-md-7">
        <div class="row">
            <div class="col-lg-4 order-lg-2 mb-5 mb-lg-0">
                <div class="d-flex flex-column h-100">
                    <div class="mb-7">
                        <h2 class="h1">Kuliner Kota</h2>
                        <p class="text-body">Merupakan website yang berisi tentang referensi lengkap ragam kuliner
                            Indonesia, GoSocial membantu SEO pada website tersebut hingga mencapai 200.000
                            pengunjung setiap bulannya.</p>
                    </div>

                    <div class="card shadow-none p-4 mt-auto">
                        <div class="mb-3">
                            <img class="mr-auto" src="https://gosocial.co.id/assets/svg/service/seo/logo-kulinerkota.svg" alt="SVG Logo">
                        </div>

                        <div class="mb-3">
                            <blockquote class="text-dark font-size-2">"Jasa SEO dari GoSocial keren banget, website kami bisa langsung page one dalam 3 bulan saja! Thanks a lot buat tim Gosocial"</blockquote>
                        </div>

                        <div class="media">
                            <div class="avatar avatar-circle mr-3">
                                <img class="avatar-img" src="https://gosocial.co.id/assets/img/service/seo/devi.webp" alt="Image Description">
                            </div>
                            <div class="media-body">
                                <span class="d-block h5 mb-0">Devi</span>
                                <small class="d-block text-muted">Owner KK Group</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-8 order-lg-1">

                <div class="mb-5">
                    <img class="img-fluid rounded" src="https://gosocial.co.id/assets/img/service/seo/case3.webp" alt="Image Description">
                </div>

                <div class="row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <h2>Goals</h2>
                        <p class="text-body">Meningkatkan visibilitas artikel di Google, melalui strategi link building, riset artikel yang paling banyak dicari, dsb.</p>
                    </div>

                    <div class="col-sm-6">
                        <h2>Result</h2>
                        <p class="text-body">200K++ organic traffic setiap bulan, melihat artikel-artikel dari Kuliner Kota.</p>
                    </div>
                </div>
            </div>
        </div>
    </a>
</div>

<section class="flat-services">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title wow fadeInDown">
                    <h2 class="section-45px-montserrat margin-top-15">Berapa Biaya Layanan SEO?</h2>
                    <p class="text-muted">GoSocial menyediakan Jasa SEO Murah dan paling efektif di Indonesia.</p>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="60" data-smobile="60"
                    style="height:60px"></div>
            </div>
        </div>
        <div class="row align-items-lg-center">
            <div id="stickyBlockStartPoint" class="col-lg-5 mb-9 mb-lg-0">
                <!-- Pricing -->
                <div class="card z-index-2 p-4 p-md-7">
                    <span class="text-dark">
                        <p>Mulai dari</p>
                        <span class="display-4">3</span>
                        <span class="font-size-3">Jt</span>
                        <span class="font-size-2">/bulan</span>
                    </span>

                    <hr class="my-4">

                    <div class="mb-5">
                        <p>Mulai tingkatkan ranking website bisnis bersama kami. Konsultasi dengan tim kami terlebih dahulu
                            untuk analisa potensi SEO bagi website Anda.</p>
                    </div>

                    <div class="mb-2">
                        <a class="btn btn-primary btn-pill btn-wide transition-3d-hover font-size-2" href="https://api.whatsapp.com/send?phone=6285159974507&amp;text=Halo%20GoSocial%21%0D%0ASaya%20ingin%20konsultasi%20layanan%20SEO" target="_blank">
                            Konsultasi Sekarang</i>
                        </a>
                    </div>

                    <p class="small">*Durasi kontrak minimal 3 bulan.</p>
                </div>
                <!-- End Pricing -->
            </div>

            <div class="col-lg-7">
                <div class="pl-lg-6">
                    <div class="row">
                        <div class="col-sm-6 mb-3">
                            <!-- Icon Blocks -->
                            <figure class="mb-3">
                                <img style="width: 7rem; height:auto;" src="https://gosocial.co.id/assets/svg/icons/icon-29.svg" alt="SVG">
                            </figure>
                            <h3>Secret Strategy</h3>
                            <p>Kami menggunakan cara khusus yang telah terbukti berhasil menaikkan ranking SEO website.</p>
                            <!-- End Icon Blocks -->
                        </div>
                        <div class="col-sm-6 mb-3">
                            <!-- Icon Blocks -->
                            <figure class="mb-3">
                                <img style="width: 7rem; height:auto;" src="https://gosocial.co.id/assets/svg/icons/icon-30.svg" alt="SVG">
                            </figure>
                            <h3>White-Hat Technique</h3>
                            <p>Metode dan cara yang kami lakukan 100% aman untuk website dan telah teruji berhasil
                                diberbagai klien.</p>
                            <!-- End Icon Blocks -->
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <!-- Icon Blocks -->
                            <figure class="mb-3">
                                <img style="width: 7rem; height:auto;" src="https://gosocial.co.id/assets/svg/icons/icon-32.svg" alt="SVG">
                            </figure>
                            <h3>Konsultasi Gratis</h3>
                            <p>Tidak yakin tentang kebutuhan dan keinginan Anda? diskusi dengan tim kami sekarang juga tanpa
                                biaya!</p>
                            <!-- End Icon Blocks -->
                        </div>
                        <div class="col-sm-6">
                            <!-- Icon Blocks -->
                            <figure class="mb-3">
                                <img style="width: 7rem; height:auto;" src="https://gosocial.co.id/assets/svg/icons/icon-31.svg" alt="SVG">
                            </figure>
                            <h3>Garansi Uang Kembali</h3>
                            <p>Kami akan menjamin peningkatan ranking untuk kata kunci yang sebelumnya tidak pernah muncul.
                            </p>
                            <!-- End Icon Blocks -->
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
                    <h4 class="section-subtitle">LAYANAN PENUNJANG</h4>
                    <h2 class="section-45px-montserrat margin-top-15">Addons</h2>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="60" data-smobile="60"
                    style="height:60px"></div>
            </div>
        </div>
        <div class=" mx-lg-auto">
            <!-- Pricing -->
            <div class="card p-4 mb-3">
                <div class="row align-items-sm-center">
                    <div class="col-lg-4 mb-3 mb-lg-0 d-flex flex-row align-items-center">
                        <img class="mr-3" src="https://gosocial.co.id/assets/img/service/seo/content-writing.webp" alt="Sketch" width="50" height="50">
                        <h4 class="mb-0">Content Writing</h4>
                    </div>
                    <div class="col-lg-5 mb-3 mb-sm-0 d-flex justify-content-center">
                        <span class="d-block font-size-2">Jasa pembuatan / penulisan artikel khusus untuk keperluan SEO maupun marketing blog</span>
                    </div>
                    <div class="col-sm col-lg-3 text-sm-right">
                        <button type="submit" class="btn btn-lg btn-outline-primary btn-wide transition-3d-hover">Mulai dari
                            250Rb</button>
                    </div>
                </div>
            </div>
            <!-- End Pricing -->

            <!-- Pricing -->
            <div class="card p-4 mb-3">
                <div class="row align-items-sm-center">
                    <div class="col-lg-4 mb-3 mb-lg-0 d-flex flex-row align-items-center">
                        <img class=" mr-3" src="https://gosocial.co.id/assets/img/service/seo/content-placement.webp" alt="Sketch" width="50" height="50">
                        <h4 class="mb-0">Content Placement (Backlink)</h4>
                    </div>
                    <div class="col-lg-5 mb-3 mb-sm-0 d-flex justify-content-center">
                        <span class="d-block font-size-2">Jasa link building untuk menambah backlink website di berbagai situs jaringan GoSocial mulai dari blog hingga media besar di Indonesia.</span>
                    </div>
                    <div class="col-sm col-lg-3 text-sm-right">
                        <button type="submit" class="btn btn-lg btn-outline-primary btn-wide transition-3d-hover">Mulai dari
                            250Rb</button>
                    </div>
                </div>
            </div>
            <!-- End Pricing -->
        </div>
    </div>
</section>

<section class="flat-counter">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title wow fadeInDown">
                    <h4 class="section-subtitle">MENGAPA HARUS KAMI?</h4>
                    <h2 class="section-45px-montserrat margin-top-15">Keuntungan Jasa SEO GoSocial</h2>
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
                    <h3 class="section-20px-montserrat font-weight-600 line-height-35">1. More Traffic</h3>
                    <p>Dengan strategi SEO yang tepat, visibilitas website Anda di Google akan meningkat sehingga trafik pun melonjak.</p>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="counter-box themesflat-counter hover-up wow fadeInUp" data-wow-delay="0.1s">
                    <div class="icon-box">
                        <div class="icon-counter">
                            <span class="icon-guarantee1"></span>
                        </div>
                    </div>
                    <h3 class="section-20px-montserrat font-weight-600 line-height-35">2. More Brand Awareness</h3>
                    <p>Berada di halaman pertama Google akan membuat calon customer potensial semakin mengenal brand bisnis Anda.</p>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="counter-box themesflat-counter hover-up wow fadeInUp" data-wow-delay="0.1s">
                    <div class="icon-box">
                        <div class="icon-counter">
                            <span class="icon-guarantee1"></span>
                        </div>
                    </div>
                    <h3 class="section-20px-montserrat font-weight-600 line-height-35">3. More Trust & Authority</h3>
                    <p>Setelah brand dikenal luas, maka bisnis akan mendapatkan kepercayaan penuh dari customer.</p>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="counter-box themesflat-counter hover-up wow fadeInUp" data-wow-delay="0.1s">
                    <div class="icon-box">
                        <div class="icon-counter">
                            <span class="icon-guarantee1"></span>
                        </div>
                    </div>
                    <h3 class="section-20px-montserrat font-weight-600 line-height-35">4. More Leads</h3>
                    <p>Dengan mentarget keyword yang sesuai target market, maka trafik yang masuk dapat dikonversi menjadi customer baru.</p>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="counter-box themesflat-counter hover-up wow fadeInUp" data-wow-delay="0.1s">
                    <div class="icon-box">
                        <div class="icon-counter">
                            <span class="icon-guarantee1"></span>
                        </div>
                    </div>
                    <h3 class="section-20px-montserrat font-weight-600 line-height-35">5. More Revenue</h3>
                    <p>Bertambahnya leads atau calon customer baru dari website, akan membuat revenue bisnis bertambah.</p>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="counter-box themesflat-counter hover-up wow fadeInUp" data-wow-delay="0.1s">
                    <div class="icon-box">
                        <div class="icon-counter">
                            <span class="icon-guarantee1"></span>
                        </div>
                    </div>
                    <h3 class="section-20px-montserrat font-weight-600 line-height-35">6. More Business Growth</h3>
                    <p>Pada akhirnya, bisnis akan bertumbuh seiring pertumbuhan ranking di mesin pencari / Google tanpa biaya iklan, dsb.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="overflow-hidden space-2">
    <div class="position-relative bg-light text-center rounded-lg z-index-2 mx-3 mx-md-11">
        <div class="container space-2">
            <!-- Title -->
            <div class="w-md-80 w-lg-50 text-center mx-md-auto mb-6">
                <div class="mb-3">
                    <div class="position-relative max-w-13rem mx-auto mb-2">
                        <img class="img-fluid" src="https://gosocial.co.id/assets/svg/illustrations/review-rating-shield.svg" alt="Image Description">
                        <span class="position-absolute top-0 right-0 left-0 z-index-2 text-white font-size-2 font-weight-bold mt-2">4.8</span>
                    </div>
                    <span>1,000+ reviews</span>
                </div>
            </div>
            <!-- End Title -->

            <!-- Blockquote -->
            <div class="w-md-80 mx-md-auto mb-6">
                <blockquote class="font-size-2 text-dark">"GoSocial telah membantu kami dalam memberikan strategi
                    digital marketing dengan berbagai cara yang out of the box dan membantu melakukan eksekusinya dengan
                    baik.
                    Hasilnya sekarang Triv lebih dikenal luas oleh banyak customer baru, Good Work!"</blockquote>
            </div>
            <!-- End Blockquote -->

            <!-- Reviewer -->
            <div class="w-lg-50 mx-lg-auto">
                <div class="avatar avatar-circle mb-3">
                    <img class="avatar-img" src="https://gosocial.co.id/assets/img/home/ceo-triv.webp" alt="Image Description">
                </div>
                <h5 class="mb-0">Gabriel Rey</h5>
                <small>CEO Triv Indonesia</small>
            </div>
            <!-- End Reviewer -->
        </div>

        <!-- SVG Shapes -->
        <figure class="position-absolute top-0 left-0 mt-10 ml-10">
            <img src="https://gosocial.co.id/assets/svg/components/abstract-shapes-11.svg" alt="SVG">
        </figure>
        <figure class="max-w-15rem w-100 position-absolute bottom-0 right-0">
            <div class="mb-n7 mr-n7">
                <img class="img-fluid" src="https://gosocial.co.id/assets/svg/components/dots-1.svg" alt="Image Description">
            </div>
        </figure>
        <!-- End SVG Shapes -->
    </div>
</div>

<section class="flat-client mt-10">
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
                    <h4 class="section-subtitle">Pertanyaan Umum</h4>
                    <h2 class="section-45px-montserrat margin-top-15">FAQ</h2>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="60" data-smobile="60"
                    style="height:60px"></div>
            </div>
        </div>
        <div class="w-lg-85 mx-lg-auto">
            <div class="row">
                <div class="col-md-6 mb-3 mb-md-5">
                    <div class="pr-md-4">
                        <h2>Bagaimana sistem Jasa SEO di GoSocial?</h2>
                        <p>GoSocial akan mengoptimasi website sesuai dengan paket yang dipilih. Setelahnya Anda akan
                            mendapatkan laporan monthly report, dan setiap quarter terkait perkembangan proyek SEO yang
                            dijalankan.</p>
                    </div>
                </div>

                <div class="col-md-6 mb-3 mb-md-5">
                    <div class="pl-md-4">
                        <h2>Apa yang perlu disiapkan?</h2>
                        <p>Anda cukup mengisi formulir pemesanan layanan yang berisikan pertanyaan-pertanyaan keadaan
                            website pada saat ini dan tujuan SEO, dari sana tim kami akan menyusun strategi yang sesuai.</p>
                    </div>
                </div>

                <div class="w-100"></div>

                <div class="col-md-6 mb-3 mb-md-5">
                    <div class="pr-md-4">
                        <h2>Berapa lama website muncul di halaman pertama Google?</h2>
                        <p>Banyak faktor yang mempengaruhi hal tersebut, seperti persaingan keyword, keyword difficulty,
                            kompetitor, serta kondisi website. Namun umumnya hasil akan terlihat setelah bulan ketiga sampai
                            keempat.</p>
                    </div>
                </div>

                <div class="col-md-6 mb-3 mb-md-5">
                    <div class="pl-md-4">
                        <h2>Apakah ada garansi uang kembali?</h2>
                        <p>Kami akan menjamin peningkatan dan proses dari waktu ke waktu, namun tidak dapat menjamin akan
                            menjadi peringkat yang pertama hanya melalui sekali kontrak, karena bisa jadi kondisi persaingan
                            menjadi faktor utama sehingga budget yang dikeluarkan harus lebih banyak.</p>
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
        </div>
        <div class="row justify-content-top">
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

@endsection
