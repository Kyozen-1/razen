@extends('landing-page-razen-studio.layouts.app')
@section('title', 'Razen Studio | About')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/custom_style.css') }}">
@endsection

@section('content')
<section class="flat-title-page back-ground-style">
    <div class="container-fluid">
        <div class="row">
            <div class="breadcrumbs text-center link-style-5 text-white">
                <h2 class="section-title-page text-white">Tentang GoSocial</h2>
                <p class="mb-5">GoSocial merupakan Creative & Digital Agency Hub sekaligus Digital Consultant yang <br> membantu bisnis dari berbagai ukuran mulai dari bisnis rumahan, UMKM, bisnis rintisan (startup) hingga Corporate melakukan Digital Marketing.</p>
                <ul class="breadcrumbs-inner list-center display-flex">
                    <li><a class="section-16px-regular font-weight-500" href="{{ route('home') }}">Home</a></li>
                    <li>
                        <h4 class="section-16px-regular font-weight-500 text-white">About</h4>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="flat-counter">
    <div class="container">
        <div class="row mx-n2 mb-5">
            <div class="col-6 col-md px-2 mb-3">
                <div class="bg-img-hero" style="background-image: url(https://gosocial.co.id/assets/img/about/foto-tim-1.webp); height: 30rem;"></div>
            </div>
            <div class="col-md-3 d-none d-md-block px-2 mb-3">
                <div class="bg-img-hero" style="background-image: url(https://gosocial.co.id/assets/img/about/foto-tim-2.webp); height: 30rem;"></div>
            </div>
            <div class="col-6 col-md px-2 mb-3">
                <div class="bg-img-hero" style="background-image: url(https://gosocial.co.id/assets/img/about/foto-tim-3.webp); height: 30rem;"></div>
            </div>

            <div class="w-100"></div>

            <div class="col-6 col-md px-2 mb-3 mb-md-0">
                <div class="bg-img-hero" style="background-image: url(https://gosocial.co.id/assets/img/about/foto-tim-4.webp); height: 30rem;"></div>
            </div>
            <div class="col-md-4 d-none d-md-block px-2 mb-3 mb-md-0">
                <div class="bg-img-hero" style="background-image: url(https://gosocial.co.id/assets/img/about/foto-tim-5.webp); height: 30rem;"></div>
            </div>
            <div class="col-6 col-md px-2">
                <div class="bg-img-hero" style="background-image: url(https://gosocial.co.id/assets/img/about/foto-tim-6.webp); height: 30rem;"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="counter-box themesflat-counter hover-up wow fadeInUp" data-wow-delay="0.1s">
                    <h2 class="number-content section-65px-montserrat"><span class="number"
                            data-speed="2000" data-to="7" data-inviewport="yes">7</span></h2>
                    <p>Tahun pengalaman tim dalam industri digital.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="counter-box themesflat-counter hover-up wow fadeInUp" data-wow-delay="0.4s">
                    <h2 class="number-content section-65px-montserrat"><span class="number"
                            data-speed="2000" data-to="1.000" data-inviewport="yes">1.000</span>+</h2>
                    <p>Lebih dari 1.000 klien telah percaya kepada kami.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="counter-box themesflat-counter1 hover-up wow fadeInUp" data-wow-delay="0.8s">
                    <h2 class="number-content section-65px-montserrat"><span class="number"
                            data-speed="2000" data-to="152" data-inviewport="yes">152</span></h2>
                    <p>Jumlah Social Rangers yang kini ada di GoSocial (per Des 2021).</p>
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
                        <h4 class="section-45px-montserrat margin-top-15 margin-bottom-20">We Want to Grow With You</h4>
                    </div>
                    <p class="section-17px-regular margin-bottom-25">GoSocial dimulai dari sebuah kolaborasi-kolaborasi proyek kreatif digital sejak tahun 2015, karena memiliki visi yang sama untuk dapat membantu lebih banyak bisnis di Indonesia akhirnya terwujudlah sebuah Social Media & Digital Marketing Agency yang mengedepankan Data-Driven Strategy.</p>
                    <p class="section-17px-regular margin-bottom-25">Dibawah PT. Nusa Digital Media, kami menawarkan pengalaman baru dalam melakukan Outsourcing kepada Digital / Creative Agency dimana kami telah mengumpulkan dan menyeleksi berbagai profesional serta agency terbaik di bidangnya untuk bergabung bersama menciptakan layanan yang berkualitas.</p>
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

<section class="flat-about-2nd">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="about-content-right wow fadeInUp" data-wow-delay="0ms"
                    data-wow-duration="1500ms">
                    <div class="section-title">
                        <h4 class="section-45px-montserrat margin-top-15 margin-bottom-20">Our Mission is being the catalyst between business and digital</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="about-content-right wow fadeInUp" data-wow-delay="0ms"
                    data-wow-duration="1500ms">
                    <p class="section-17px-regular margin-bottom-25">Sejak 2020, kami telah membantu berbagai bisnis menghadapi krisis pandemi COVID-19 yang membuat transformasi digital merupakan hal yang harus dilakukan agar bisnis tetap bertahan. Kami percaya bahwa solusi digital seharusnya dibuat tidak hanya berdasarkan pengalaman dan kreatifitas saja, melainkan harus sejalan dengan strategi bisnis yang berdasarkan data dan perkembangan teknologi.</p>
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
                    <h4 class="section-subtitle">COMPANY VALUES</h4>
                    <h2 class="section-45px-montserrat margin-top-15">Sejak 2020, kami telah membantu lebih dari 1000 bisnis menjalankan Digital Marketing yang terukur!</h2>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="60" data-smobile="60"
                    style="height:60px"></div>
            </div>
            <div class="col-md-4">
                <div class="services-box">
                    <div class="wraper-effect"></div>
                    <span class="icon-services icon-development1 font-size-icon"></span>
                    <div class="services-content">
                        <a href="service-single.html" class="section-22px-montserrat text-dark">Value-centric</a>
                        <p class="services-desc">Kami mengkombinasikan strategi data-driven dan juga growth hack sebagai solusi bisnis mendapatkan value maksimal melalui Digital Marketing.</p>
                        <a href="service-single.html" class="read-more"></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="services-box">
                    <div class="wraper-effect"></div>
                    <span class="icon-services icon-advertising1 font-size-icon"></span>
                    <div class="services-content">
                        <a href="service-single.html" class="section-22px-montserrat text-dark">Hire & Develop The Best</a>
                        <p class="services-desc">
                            Kami memilih tim & mitra dengan sangat hati-hati. Di belakang kami terdapat talenta berbakat yang memiliki ide-ide cemerlang yang siap membantu Anda.</p>
                        <a href="service-single.html" class="read-more"></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="services-box">
                    <div class="wraper-effect"></div>
                    <span class="icon-services icon-webpage1 font-size-icon"></span>
                    <div class="services-content">
                        <a href="service-single.html" class="section-22px-montserrat text-dark">Tech Savvy</a>
                        <p class="services-desc">Kami selalu up-to-date terhadap perkembangan algoritma & teknologi terbaru untuk memaksimalkan strategi dan hasil yang diraih.</p>
                        <a href="service-single.html" class="read-more"></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="services-box">
                    <div class="wraper-effect"></div>
                    <span class="icon-services icon-development1 font-size-icon"></span>
                    <div class="services-content">
                        <a href="service-single.html" class="section-22px-montserrat text-dark">Valuable Investment & Cost Efficiency</a>
                        <p class="services-desc">Strategi dan eksekusi Digital Marketing yang baik akan membantu mengefisiensikan biaya marketing serta menghasilkan profit yang maksimal bagi bisnis.</p>
                        <a href="service-single.html" class="read-more"></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="services-box">
                    <div class="wraper-effect"></div>
                    <span class="icon-services icon-advertising1 font-size-icon"></span>
                    <div class="services-content">
                        <a href="service-single.html" class="section-22px-montserrat text-dark">Grow Together</a>
                        <p class="services-desc">
                            Kami adalah rumah bagi mitra freelancer profesional, agency, dan industri kreatif di Indonesia yang memiliki visi untuk membantu bisnis memaksimalkan potensi melalui Digital Marketing.</p>
                        <a href="service-single.html" class="read-more"></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="services-box">
                    <div class="wraper-effect"></div>
                    <span class="icon-services icon-web-programming1 font-size-icon"></span>
                    <div class="services-content">
                        <a href="service-single.html" class="section-22px-montserrat text-dark">High Experience</a>
                        <p class="services-desc">Kami memiliki pengalaman lebih dari 7 tahun membantu 1.000+ bisnis di Indonesia dan 24 negara lainnya melipatgandakan penjualan, meluaskan jangkauan, dan mengembangkan bisnis.</p>
                        <a href="service-single.html" class="read-more"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="flat-services">
    <div class="container">
        <div class="w-lg-85 mx-lg-auto">
            <!-- Card -->
            <div class="card p-5">
                <div class="row align-items-md-center">
                    <div class="col-md-9 mb-5 mb-md-0">
                        <h1>Apa saja yang kami lakukan?</h1>
                        <p>Mulai dari konsultasi, perencanaan hingga eksekusi!</p>

                        <!-- List -->
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="media font-size-2 text-body mb-2">
                                    <div class="media-body">
                                        Digital Marketing Checkup
                                    </div>
                                </div>
                                <div class="media font-size-2 text-body mb-2">
                                    <div class="media-body">
                                        Competitive Landscape Analysis
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="media font-size-2 text-body mb-2">
                                    <div class="media-body">
                                        Insight &amp; Recommendation
                                    </div>
                                </div>
                                <div class="media font-size-2 text-body mb-2">
                                    <div class="media-body">
                                        Digital Platform Handling <span class="badge badge-soft-secondary badge-pill ml-1">All-in-one</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End List -->
                    </div>

                    <div class="col-md-3 column-divider-md">
                        <div class="pl-md-2">
                            <h1>Included</h1>
                            <p>Sistem untuk mengelola dan tracking project.</p>
                            <a class="font-size-1 font-weight-bold" href="https://gosocial.co.id/coming-soon">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Card -->
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
                        <h4 class="section-45px-montserrat margin-top-15 margin-bottom-20">Like having your own digital marketing branch</h4>
                    </div>
                    <p class="section-17px-regular margin-bottom-25">Dengan bekerja bersama kami bisnis Anda seperti memiliki sebuah divisi khusus untuk Digital Marketing yang berisikan tim ahli yang sudah berpengalaman, tanpa perlu memikirkan biaya rekrutmen hingga fixed cost serta pusingnya mengelola tim secara in house.</p>
                    <div class="button-about margin-top-48 wow fadeInUp" data-wow-delay="600ms"
                        data-wow-duration="1500ms">
                        <a href="{{ route('blog') }}" class="button-footer arrow-btn btn-st btn-style-1">Work With Us</a>
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
                        <h4 class="section-45px-montserrat margin-top-15 margin-bottom-20">Data-driven & Tech Savvy</h4>
                    </div>
                    <p class="section-17px-regular margin-bottom-25">Dengan bekerja bersama GoSocial bisnis tidak perlu memikirkan lagi bagaimana cara melakukan digital marketing dengan strategi menggunakan tools dan teknologi terbaru yang terbaik dengan biaya yang efisien.</p>
                    <div class="button-about margin-top-48 wow fadeInUp" data-wow-delay="600ms"
                        data-wow-duration="1500ms">
                        <a href="{{ route('blog') }}" class="button-footer arrow-btn btn-st btn-style-1">GoSocial vs Solusi Lainnya</a>
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

<section class="flat-about-2nd">
    <div class="container space-top-1 space-bottom-2">
        <div class="row">
            <div class="col-lg-6 mb-3 mb-lg-0">
                <!-- Card -->
                <div class="card bg-primary text-white overflow-hidden p-5" style="height: 25rem">
                    <div class="w-65 pr-2 justify-content-center">
                        <h2 class="text-white">Cara Kerja</h2>
                        <p class="text-white">Kami akan menjadi konsultan sekaligus partner bisnis dalam menjalankan Digital
                            Marketing.</p>
                        <a class="btn btn-sm btn-light transition-3d-hover" href="https://gosocial.co.id/how-it-works">Lebih Lanjut</a>
                    </div>
                    <div class="position-absolute right-0 bottom-0 w-50 mb-n3 mr-n4">
                        <img class="img-fluid" src="https://gosocial.co.id/assets/img/mockups/img15.webp" alt="Cara Kerja">
                    </div>
                </div>
                <!-- End Card -->
            </div>

            <div class="col-lg-6">
                <!-- Card -->
                <div class="card bg-warning text-white overflow-hidden p-5" style="height: 25rem">
                    <div class="w-65 pr-2">
                        <h2 class="text-white">Portfolio</h2>
                        <p class="text-white">Kami sudah berpengalaman berkolaborasi dengan berbagai klien dan partner.</p>
                        <a class="btn btn-sm btn-light transition-3d-hover" href="https://gosocial.co.id/portfolio">Lihat Portofolio</a>
                    </div>
                    <div class="position-absolute right-0 bottom-0 w-50 mb-n3 mr-n4">
                        <img class="img-fluid" src="https://gosocial.co.id/assets/img/mockups/img12.webp" alt="Portfolio">
                    </div>
                </div>
                <!-- End Card -->
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

@endsection
