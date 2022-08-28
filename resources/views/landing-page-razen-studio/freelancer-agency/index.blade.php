@extends('landing-page-razen-studio.layouts.app')
@section('title', 'Razen Studio | Freelancer Agency')

@section('css')
<link rel="stylesheet" href="https://gosocial.co.id/assets/vendor/cubeportfolio/css/cubeportfolio.min.css">
<link rel="stylesheet" href="https://gosocial.co.id/assets/vendor/hs-mega-menu/dist/hs-mega-menu.min.css">
<link rel="stylesheet" href="https://gosocial.co.id/assets/vendor/dzsparallaxer/dzsparallaxer.css">
<link rel="stylesheet" href="https://gosocial.co.id/assets/vendor/aos/dist/aos.css">
<link rel="stylesheet" href="https://gosocial.co.id/assets/css/pages/global.css?v.0908">
<link rel="stylesheet" href="https://gosocial.co.id/assets/css/theme.min.css">
@endsection

@section('content')
<section class="flat-title-page back-ground-style">
    <div class="container-fluid">
        <div class="row">
            <div class="breadcrumbs text-center link-style-5 text-white">
                <h2 class="section-title-page text-white">Razen Partner</h2>
                <p class="mb-5">Kami membuka kesempatan kolaborasi agar dapat berkembang bersama untuk membantu semua jenis bisnis di semua industri melalui Digital Marketing.</p>
                <ul class="breadcrumbs-inner list-center display-flex">
                    <li><a class="section-16px-regular font-weight-500" href="{{ route('home') }}">Home</a></li>
                    <li>
                        <h4 class="section-16px-regular font-weight-500 text-white">Razen Partner</h4>
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
                        <h4 class="section-45px-montserrat margin-top-15 margin-bottom-20">Are you Freelancer / Professional / Agency?</h4>
                    </div>
                    <p class="section-17px-regular margin-bottom-25">GoSocial merupakan Creative & Digital Agency Hub sekaligus konsultan Digital Marketing pertama dan terbesar di Indonesia yang berbasis komunitas.
                        <br>
                        Kami mengajak Profesional maupun Agency terbaik di bidangnya untuk berkolaborasi bersama menghasilkan karya yang berkualitas untuk semua tahapan bisnis agar dapat melakukan strategi Digital Marketing yang tepat sasaran.</p>
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
    <div class="bg-light rounded-lg container space-1 space-md-2">
        <div class="card bg-transparent shadow-none">
            <div class="row">
                <div class="col-lg-3 d-none d-lg-block">
                    <div class="dzsparallaxer auto-init height-is-based-on-content use-loading mode-scroll bg-light animation-engine-js under-760 under-500 loaded dzsprx-readyall" data-options="{direction: &quot;reverse&quot;}" style="overflow: visible;">
                        <div data-parallaxanimation="[{property: &quot;transform&quot;, value:&quot; translate3d(0,-0.212552rem,0)&quot;, initial:&quot;4&quot;, mid:&quot;0&quot;, final:&quot;-4&quot;}]" style="transform: translate3d(0px, -0.212552rem, 0px);">
                            <img class="img-fluid rounded-lg shadow-lg ml-lg-5" src="https://gosocial.co.id/assets/img/partner/via-logo-design.jpg" alt="Image Description" height="200" width="200">

                            <!-- SVG Shapes -->
                            <figure class="max-w-15rem w-100 position-absolute bottom-0 left-0 z-index-n1">
                                <div class="mb-n7 ml-n7">
                                    <img style="height: 7rem; width: auto;" src="https://gosocial.co.id/assets/svg/components/dots-5.svg" alt="Image Description">
                                </div>
                            </figure>
                            <!-- End SVG Shapes -->
                        </div>
                    </div>
                </div>

                <div class="col-lg-9">
                    <!-- Card Body -->
                    <div class="card-body h-100 rounded-lg p-0 p-md-4">
                        <!-- SVG Quote -->
                        <figure class="mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="36" height="36" viewBox="0 0 8 8">
                                <path fill="#377dff" d="M3,1.3C2,1.7,1.2,2.7,1.2,3.6c0,0.2,0,0.4,0.1,0.5c0.2-0.2,0.5-0.3,0.9-0.3c0.8,0,1.5,0.6,1.5,1.5c0,0.9-0.7,1.5-1.5,1.5
                      C1.4,6.9,1,6.6,0.7,6.1C0.4,5.6,0.3,4.9,0.3,4.5c0-1.6,0.8-2.9,2.5-3.7L3,1.3z M7.1,1.3c-1,0.4-1.8,1.4-1.8,2.3
                      c0,0.2,0,0.4,0.1,0.5c0.2-0.2,0.5-0.3,0.9-0.3c0.8,0,1.5,0.6,1.5,1.5c0,0.9-0.7,1.5-1.5,1.5c-0.7,0-1.1-0.3-1.4-0.8
                      C4.4,5.6,4.4,4.9,4.4,4.5c0-1.6,0.8-2.9,2.5-3.7L7.1,1.3z"></path>
                            </svg>
                        </figure>
                        <!-- End SVG Quote -->

                        <div class="row">
                            <div class="col-lg-8 mb-3 mb-lg-0">
                                <div class="pr-lg-5">
                                    <blockquote class="font-size-2 font-weight-normal mb-4">Gosocial keren banget! Salut sama tim nya yang asik dan enak diajak kerjasama offline maupun online. Selalu semangat untuk nunggu tiap project nya, sukses terus yaa GoSocial!</blockquote>
                                    <div class="media">
                                        <div class="avatar-xs avatar-circle d-lg-none mr-2">
                                            <img style="height: 7rem; width:auto;" src="https://gosocial.co.id/assets/img/partner/via-logo-design-avatar.jpg" alt="Image Description">
                                        </div>
                                        <div class="media-body">
                                            <span class="text-dark font-weight-bold font-size-2">Via</span>
                                            <span class="font-size-2">— Freelance Logo Designer</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 column-divider-lg">
                                <hr class="d-lg-none">

                                <div class="pl-lg-5">
                                    <span class="h1 text-primary">80%</span>
                                    <p class="font-size-2">Proyek kami merupakan hasil kolaborasi dengan berbagai mitra GoSocial yang ahli dan berpengalaman di bidangnya.</p>
                                    <a class="font-size-2 text-nowrap" href="https://gosocial.co.id/portfolio">Lihat semua portofolio</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Card Body -->
                </div>
            </div>
        </div>
    </div>
</section>

<section class="flat-about-2nd">
    <div class="container space-2">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title wow fadeInDown">
                    <h2 class="section-45px-montserrat margin-top-15">Jenis Kolaborasi</h2>
                    <p class="text-muted">Value kami adalah memberikan kontribusi melalui kolaborasi. Kami siap membantu dan bekerjasama di berbagai hal yang sejalan dengan visi dan misi kami.</p>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="60" data-smobile="60"
                    style="height:60px"></div>
            </div>
        </div>

        <div class="container d-flex justify-content-center">
            <div class="row  d-flex justify-content-center">
                <div class="col-lg-3 col-md-6  col-12">
                    <article class="card shadow-sm transition-3d-hover mx-auto mb-5">
                        <div class="card-header bg-primary text-center rounded-lg-top" style="background-color: #387CFF;">
                        </div>
                        <div class="card-body text-center">
                            <div class="d-block bg-white rounded mx-auto mb-3">
                                <img src="https://gosocial.co.id/assets/svg/partner/agency-partner.svg" alt="Image Description" style="height: 7rem; width:auto;">
                            </div>
                            <div class="mb-3">
                                <h2 class="mb-1">Agency Partner</h2>
                                <small class="d-block text-body font-size-2">Daftarkan Creative / Digital Agency-mu untuk mendapatkan
                                    lebih banyak kesempatan dan pengalaman mengerjakan proyek bersama
                                    kami.<br><br></small>
                            </div>

                            <div class="text-center d-flex justify-content-center">
                                <div class="col-6 col-lg-12">
                                    <a class="btn btn-sm btn-block btn-primary font-size-2" href="#form">Mulai</a>
                                </div>
                            </div>

                        </div>
                    </article>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <article class="card shadow-sm transition-3d-hover mx-auto mb-5">
                        <div class="card-header text-center rounded-lg-top" style="background-color: #8757F3;">
                        </div>
                        <div class="card-body text-center">
                            <div class="d-block bg-white rounded mx-auto mb-3">
                                <img style="height: 7rem; width:auto;" src="https://gosocial.co.id/assets/svg/partner/production-house-partner.svg" alt="Image Description">
                            </div>
                            <div class="mb-3">
                                <h2 class="mb-1">Production House Partner</h2>
                                <small class="d-block text-body font-size-2">Punya tim produksi kreatif? kolaborasi bersama kami untuk
                                    menghasilkan konten terbaik dan berkualitas.<br><br></small>
                            </div>

                            <div class="text-center d-flex justify-content-center">
                                <div class="col-6 col-lg-12">
                                    <a class="btn btn-sm btn-block btn-primary font-size-2" href="#form">Mulai</a>
                                </div>
                            </div>

                        </div>
                    </article>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <article class="card shadow-sm transition-3d-hover mx-auto mb-5">
                        <div class="card-header text-center rounded-lg-top" style="background-color: #FFC14F;">
                        </div>
                        <div class="card-body text-center">
                            <div class="d-block bg-white rounded mx-auto mb-3">
                                <img style="height: 7rem; width:auto;" src="https://gosocial.co.id/assets/svg/partner/freelance-partner.svg" alt="Image Description">
                            </div>
                            <div class="mb-3">
                                <h2 class="mb-1">Freelance Partner</h2>
                                <small class="d-block text-body font-size-2">Punya skill <b>copywriting, desain, pembuatan web</b> atau
                                    <b>digital marketing?</b>
                                    jadilah bagian dari social rangers kami untuk meningkatkan pengalaman serta
                                    relasimu.</small>
                            </div>
                            <div class="text-center d-flex justify-content-center">
                                <div class="col-6 col-lg-12">
                                    <a class="btn btn-sm btn-block btn-primary font-size-2" href="#form">Mulai</a>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <article class="card shadow-sm transition-3d-hover mx-auto mb-5">
                        <div class="card-header text-center rounded-lg-top" style="background-color: #FED500;">
                        </div>
                        <div class="card-body text-center ">
                            <div class="d-block bg-white rounded mx-auto mb-3">
                                <img style="height: 7rem; width:auto;" src="https://gosocial.co.id/assets/svg/partner/influencer.svg" alt="Image Description">
                            </div>
                            <div class="mb-3 ">
                                <h2 class="mb-1">Artist / Talent Partner</h2>
                                <small class="d-block text-body font-size-2">Kamu seorang <b>Artist</b> atau <b>Influencer?</b> kami akan
                                    menghubungkanmu dengan berbagai tawaran kerjasama dari brand ternama.<br><br></small>
                            </div>
                            <div class="text-center d-flex justify-content-center">
                                <div class="col-6 col-lg-12">
                                    <a class="btn btn-sm btn-block btn-primary font-size-2" href="#form">Mulai</a>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>

        <div class="container d-flex justify-content-center">
            <div class="row  d-flex justify-content-center">
                <div class="col-lg-3 col-md-6 col-12">
                    <article class="card shadow-sm transition-3d-hover mx-auto mb-5">
                        <div class="card-header text-center rounded-lg-top" style="background-color: #FED3A4;">
                        </div>
                        <div class="card-body text-center ">
                            <div class="d-block bg-white rounded mx-auto mb-3">
                                <img style="height: 7rem; width:auto;" src="https://gosocial.co.id/assets/svg/partner/event-program.svg" alt="Image Description">
                            </div>
                            <div class="mb-3 ">
                                <h2 class="mb-1">Event / Program</h2>
                                <small class="d-block text-body font-size-2">GoSocial siap membantu mewujudkan kesuksesan event &amp;
                                    program terkait Digital Marketing seperti <b>Event Kampus, Webinar</b> atau <b>Program
                                        Lainnya.</b><br></small>
                            </div>
                            <div class="text-center d-flex justify-content-center">
                                <div class="col-6 col-lg-12">
                                    <a class="btn btn-sm btn-block btn-primary font-size-2" href="#form">Mulai</a>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <article class="card shadow-sm transition-3d-hover mx-auto mb-5">
                        <div class="card-header text-center rounded-lg-top" style="background-color: #4070EA;">
                        </div>
                        <div class="card-body text-center">
                            <div class="d-block bg-white rounded mx-auto mb-3">
                                <img style="height: 7rem; width:auto;" src="https://gosocial.co.id/assets/svg/partner/trainer-consultant.svg" alt="Image Description">
                            </div>
                            <div class="mb-3">
                                <h2 class="mb-1">Digital Marketing Trainer / Consultant</h2>
                                <small class="d-block text-body font-size-2">Punya pengalaman dan rekam jejak dalam Digital Marketing?
                                    kami mencari profesional sebagai konsultan ahli.</small>
                            </div>
                            <div class="text-center d-flex justify-content-center font-size-2">
                                <div class="col-6 col-lg-12">
                                    <a class="btn btn-sm btn-block btn-primary font-size-2" href="#form">Mulai</a>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <article class="card shadow-sm transition-3d-hover mx-auto mb-5">
                        <div class="card-header text-center rounded-lg-top" style="background-color: #D8ECFE;">
                        </div>
                        <div class="card-body text-center">
                            <div class="d-block bg-white rounded mx-auto mb-3">
                                <img style="height: 7rem; width:auto;" src="https://gosocial.co.id/assets/svg/partner/white-label.svg" alt="Image Description">
                            </div>
                            <div class="mb-3">
                                <h2 class="mb-1">White-label Service</h2>
                                <small class="d-block text-body font-size-2">Ingin menawarkan solusi kami dengan merek Anda? daftar
                                    menjadi partner dan dapatkan starter kit untuk reseller.<br><br></small>
                            </div>
                            <div class="text-center d-flex justify-content-center">
                                <div class="col-6 col-lg-12">
                                    <a class="btn btn-sm btn-block btn-primary font-size-2" href="#form">Mulai</a>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="flat-services">
    <div class="container space-2" id="benefit">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title wow fadeInDown">
                    <h4 class="section-subtitle">KEUNTUNGAN BEKERJA SAMA DENGAN GOSOCIAL</h4>
                    <h2 class="section-45px-montserrat margin-top-15">Benefit For Partner</h2>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="60" data-smobile="60"
                    style="height:60px"></div>
            </div>
        </div>

        <div class="row justify-content-lg-center">
            <div class="col-md-6 col-lg-5 mb-3 mb-md-5 mb-lg-7">
                <!-- Icon Blocks -->
                <div class="media pr-lg-5">
                    <figure class="mr-4">
                        <img style="height: 7rem; width: auto;" src="https://gosocial.co.id/assets/svg/icons/icon-18.svg" alt="SVG">
                    </figure>
                    <div class="media-body">
                        <h2>Partner Development</h2>
                        <p>we'll give you more than just improve your knowledge but also experience with Training program, collaboration and cross-promote with other agency, to tell your story from all new perspectives.</p>
                    </div>
                </div>
                <!-- End Icon Blocks -->
            </div>

            <div class="col-md-6 col-lg-5 mb-3 mb-md-5 mb-lg-7">
                <!-- Icon Blocks -->
                <div class="media pl-lg-5">
                    <figure class="mr-4">
                        <img style="height: 7rem; width: auto;" src="https://gosocial.co.id/assets/svg/icons/icon-27.svg" alt="SVG">
                    </figure>
                    <div class="media-body">
                        <h2>Revenue Sharing</h2>
                        <p>Kami akan berkembang bersama.</p>
                    </div>
                </div>
                <!-- End Icon Blocks -->
            </div>

            <div class="w-100"></div>

            <div class="col-md-6 col-lg-5 mb-3 mb-md-5 mb-lg-7">
                <!-- Icon Blocks -->
                <div class="media pr-lg-5">
                    <figure class="mr-4">
                        <img style="height: 7rem; width: auto;" src="https://gosocial.co.id/assets/svg/icons/icon-28.svg" alt="SVG">
                    </figure>
                    <div class="media-body">
                        <h2>Effortless updates</h2>
                        <p>Benefit from automatic updates to all boards any time you need to make a change to your website.</p>
                    </div>
                </div>
                <!-- End Icon Blocks -->
            </div>

            <div class="col-md-6 col-lg-5 mb-3 mb-md-5 mb-lg-7">
                <!-- Icon Blocks -->
                <div class="media pl-lg-5">
                    <figure class="mr-4">
                        <img style="height: 7rem; width: auto;" src="https://gosocial.co.id/assets/svg/icons/icon-45.svg" alt="SVG">
                    </figure>
                    <div class="media-body">
                        <h2>Designing for people</h2>
                        <p>We actively pursue the right balance between functionality and aesthetics, creating delightful experiences.</p>
                    </div>
                </div>
                <!-- End Icon Blocks -->
            </div>

            <div class="w-100"></div>

            <div class="col-md-6 col-lg-5 mb-3 mb-md-5 mb-lg-0">
                <!-- Icon Blocks -->
                <div class="media pr-lg-5">
                    <figure class="mr-4">
                        <img style="height: 7rem; width: auto;" src="https://gosocial.co.id/assets/svg/icons/icon-19.svg" alt="SVG">
                    </figure>
                    <div class="media-body">
                        <h2>Strong empathy</h2>
                        <p>We've user tested our own process by shipping over 1k products for clients.</p>
                    </div>
                </div>
                <!-- End Icon Blocks -->
            </div>

            <div class="col-md-6 col-lg-5">
                <!-- Icon Blocks -->
                <div class="media pl-lg-5">
                    <figure class="mr-4">
                        <img style="height: 7rem; width: auto;" src="https://gosocial.co.id/assets/svg/icons/icon-7.svg" alt="SVG">
                    </figure>
                    <div class="media-body">
                        <h2>Stay curious</h2>
                        <p>We dedicate time for researching and experimentation to increase creativity and imagine new challenges.</p>
                    </div>
                </div>
                <!-- End Icon Blocks -->
            </div>
        </div>
    </div>
</section>

<section class="flat-services">
    <div class="container space-3" id="form">
        <div class="row justify-content-lg-between align-items-lg-center">
            <div class="col-lg-5 mb-7 mb-lg-0">
                <!-- Info -->
                <div class="mb-5">
                    <h1>Saatnya kita berkolaborasi bukan berkompetisi!</h1>
                    <p>Kami percaya bahwa dengan kolaborasi akan membuka kesempatan untuk mendapatkan banyak inspirasi dan pembelajaran.
                        Karena setiap interaksi yang dilakukan dengan seseorang di luar lingkaran dapat mengajari sesuatu yang berharga.
                        Kolaborasi dapat menginspirasi dan membantu berpikir dengan cara baru.</p>
                </div>

                <span class="h3">GoSocial telah dipercaya oleh:</span>

                <div class="media text-body mt-3 mb-3">
                    <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger mt-1 mr-2">
                        <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                    </svg>
                    <div class="media-body font-size-2">
                        Lebih dari 20 Agency Partner.
                    </div>
                </div>
                <div class="media text-body mb-3">
                    <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger mt-1 mr-2">
                        <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                    </svg>
                    <div class="media-body font-size-2">
                        Lebih dari 100 Freelancer &amp; Talent pilihan.
                    </div>
                </div>
                <div class="media text-body mb-3">
                    <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger mt-1 mr-2">
                        <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                    </svg>
                    <div class="media-body font-size-2">
                        Berbagai event maupun program dari Brand hingga Institusi ternama.
                    </div>
                </div>
                <!-- End Info -->
            </div>

            <div class="col-lg-6">
                <!-- Signup Form -->
                <form class="js-validate card card-bordered w-md-85 w-lg-100 mx-md-auto" novalidate="novalidate">
                    <div class="card-header bg-primary text-white text-center py-4 px-5 px-md-6">
                        <span class="font-size-2 text-white mb-0">Gabung menjadi partner kami sekarang! Isi form di bawah ini!</span>
                    </div>

                    <div class="card-body p-md-6">
                        <div class="row">
                            <div class="col-sm-6 mb-3">
                                <!-- Form Group -->
                                <div class="js-form-message form-group">
                                    <label for="firstName" class="input-label font-size-2">First name</label>
                                    <input type="text" class="form-control" name="firstName" id="firstName" placeholder="Nataly" aria-label="Nataly" required="" data-msg="Please enter first your name">
                                </div>
                                <!-- End Form Group -->
                            </div>

                            <div class="col-sm-6 mb-3">
                                <!-- Form Group -->
                                <div class="js-form-message form-group">
                                    <label for="lastName" class="input-label font-size-2">Last name</label>
                                    <input type="text" class="form-control" name="lastName" id="lastName" placeholder="Gaga" aria-label="Gaga" required="" data-msg="Please enter last your name">
                                </div>
                                <!-- End Form Group -->
                            </div>

                            <div class="col-sm-12 mb-3">
                                <!-- Form Group -->
                                <div class="js-form-message form-group">
                                    <label for="emailAddress" class="input-label font-size-2">Email address</label>
                                    <input type="email" class="form-control" name="emailAddress" id="emailAddress" placeholder="nayagaga@pixeel.com" aria-label="alex@pixeel.com" required="" data-msg="Please enter a valid email address">
                                </div>
                                <!-- End Form Group -->
                            </div>

                            <div class="col-sm-6 mb-3">
                                <!-- Form Group -->
                                <div class="js-form-message form-group">
                                    <label for="password" class="input-label font-size-2">Password</label>
                                    <input type="text" class="form-control" name="passowrd" id="password" placeholder="*********" aria-label="*********" required="" data-msg="Your password is invalid. Please try again">
                                </div>
                                <!-- End Form Group -->
                            </div>

                            <div class="col-sm-6 mb-3">
                                <!-- Form Group -->
                                <div class="js-form-message form-group">
                                    <label for="confirmPassword" class="input-label font-size-2">Confirm password</label>
                                    <input type="text" class="form-control" name="confirmPassword" id="confirmPassword" placeholder="*********" aria-label="*********" required="" data-msg="Password does not match the confirm password">
                                </div>
                                <!-- End Form Group -->
                            </div>
                        </div>

                        <!-- Checkbox -->
                        <div class="js-form-message mb-5">
                            <div class="custom-control custom-checkbox d-flex align-items-center text-muted">
                                <input type="checkbox" class="custom-control-input" id="termsCheckboxExample1" name="termsCheckboxExample1" required="" data-msg="Please accept our Terms and Conditions.">
                                <label class="custom-control-label" for="termsCheckboxExample1">
                                    <small>
                                        I agree to the
                                        <a class="link-underline" href="#">Terms and Conditions</a>
                                    </small>
                                </label>
                            </div>
                        </div>
                        <!-- End Checkbox -->

                        <div class="row align-items-center">
                            <div class="col-sm-7 mb-3 mb-sm-0">
                                <p class="font-size-2 text-muted mb-0">Already have an account? <a class="font-weight-bold" href="https://gosocial.co.id/login">Log In</a></p>
                            </div>
                            <div class="col-sm-5 text-sm-right">
                                <button type="submit" class="btn btn-sm btn-primary transition-3d-hover font-size-2">Sign Up <i class="fa fa-angle-right fa-sm ml-1"></i></button>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- End Signup Form -->
            </div>
        </div>
    </div>
</section>

<section class="flat-services">
    <div class="container space-top-2 space-bottom-4">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title wow fadeInDown">
                    <h1 class="text-center mb-9">GoSocial Partner FAQs</h1>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="60" data-smobile="60"
                    style="height:60px"></div>
            </div>
        </div>

        <!-- Basics Accordion -->
        <div id="basicsAccordion">
            <!-- Card -->
            <div class="card shadow-none mb-3">
                <div class="card-header card-collapse" id="basicsHeadingOne">
                    <a class="btn btn-link btn-block d-flex justify-content-between card-btn collapsed bg-white px-0 font-size-3" href="javascript:;" role="button" data-toggle="collapse" data-target="#basicsCollapseOne" aria-expanded="false" aria-controls="basicsCollapseOne">
                        Apakah ada biaya pendaftaran?

                        <span class="card-btn-toggle">
                            <span class="card-btn-toggle-default">+</span>
                            <span class="card-btn-toggle-active">−</span>
                        </span>
                    </a>
                </div>
                <div id="basicsCollapseOne" class="collapse" aria-labelledby="basicsHeadingOne" data-parent="#basicsAccordion">
                    <div class="card-body px-0">
                        <p>Tidak, kami tidak menarik biaya pendaftaran untuk menjadi partner GoSocial.</p>
                        <p>Namun kami sangat selektif dalam memilih mitra yang memiliki visi misi serta memenuhi standard kami yang akan diterima menjadi partner.</p>
                    </div>
                </div>
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="card shadow-none mb-3">
                <div class="card-header card-collapse" id="basicsHeadingTwo">
                    <a class="btn btn-link btn-block d-flex justify-content-between card-btn collapsed bg-white px-0 font-size-3" href="javascript:;" role="button" data-toggle="collapse" data-target="#basicsCollapseTwo" aria-expanded="false" aria-controls="basicsCollapseTwo">
                        Bagaimana cara daftarnya?

                        <span class="card-btn-toggle">
                            <span class="card-btn-toggle-default">+</span>
                            <span class="card-btn-toggle-active">−</span>
                        </span>
                    </a>
                </div>
                <div id="basicsCollapseTwo" class="collapse" aria-labelledby="basicsHeadingTwo" data-parent="#basicsAccordion">
                    <div class="card-body px-0">
                        <p>Kamu bisa langsung register di website kami dan memilih role sebagai Partner.</p>
                        <p>Caranya cukup isi data yang diperlukan, dan tunggu review dari tim kami.</p>
                    </div>
                </div>
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="card shadow-none mb-3">
                <div class="card-header card-collapse" id="basicsHeadingThree">
                    <a class="btn btn-link btn-block d-flex justify-content-between card-btn collapsed bg-white px-0 font-size-3" href="javascript:;" role="button" data-toggle="collapse" data-target="#basicsCollapseThree" aria-expanded="false" aria-controls="basicsCollapseThree">
                        Jika saya sudah bekerja di tempat lain, apakah masih bisa bergabung?

                        <span class="card-btn-toggle">
                            <span class="card-btn-toggle-default">+</span>
                            <span class="card-btn-toggle-active">−</span>
                        </span>
                    </a>
                </div>
                <div id="basicsCollapseThree" class="collapse" aria-labelledby="basicsHeadingThree" data-parent="#basicsAccordion">
                    <div class="card-body px-0">
                        <p>Bisa. Kamu tetap bisa bergabung dengan kami meskipun sudah bekerja di tempat lainnya.</p>
                        <p>Tujuan kami adalah membentuk ekosistem digital marketing yang siap memberikan solusi ke semua kategori bisnis.</p>
                    </div>
                </div>
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="card shadow-none mb-3">
                <div class="card-header card-collapse" id="basicsHeadingFour">
                    <a class="btn btn-link btn-block d-flex justify-content-between card-btn collapsed bg-white px-0 font-size-3" href="javascript:;" role="button" data-toggle="collapse" data-target="#basicsCollapseFour" aria-expanded="false" aria-controls="basicsCollapseFour">
                        Bagaimana untuk sistem pembayarannya?

                        <span class="card-btn-toggle">
                            <span class="card-btn-toggle-default">+</span>
                            <span class="card-btn-toggle-active">−</span>
                        </span>
                    </a>
                </div>
                <div id="basicsCollapseFour" class="collapse" aria-labelledby="basicsHeadingFour" data-parent="#basicsAccordion">
                    <div class="card-body px-0">
                        <p>Kami menyediakan 2 opsi sistem pembayaran untuk partner. Yang pertama adalah kamu bisa mendapatkan benefit setiap bulan di tanggal tertentu (sesuai ketentuan kami).</p>
                        <p>Atau opsi yang kedua adalah kamu bisa mendapatkan benefit setiap selesai mengerjakan project.</p>
                    </div>
                </div>
            </div>
            <!-- End Card -->
        </div>
        <!-- End Basics Accordion -->
    </div>
</section>
<div class="bg-primary">
    <div class="container space-2">
        <div class="row justify-content-lg-between align-items-lg-center text-center text-lg-left">
            <div class="col-lg-5 mb-5 mb-lg-0">
                <h2 class="text-white mb-0">Masih memiliki pertanyaan terkait program partnership?</h2>
            </div>

            <div class="col-lg-5 text-lg-right">
                <a class="btn btn-light btn-wide btn-pill transition-3d-hover mx-1 mb-2 font-size-2" href="https://gosocial.co.id/contact">Hubungi Kami</a>
            </div>
        </div>
    </div>
</div>
<div class="container space-1 mb-10">
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
@endsection
