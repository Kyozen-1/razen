@php
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioFreelancerAgency;
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioBrand;
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioOfficialPartner;
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioReview;
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioHome;

    $home = LandingpageRazenstudioHome::first();

    $freelancer_agency = LandingpageRazenstudioFreelancerAgency::first();
    if ($freelancer_agency) {
        $freelancer_agency_section_1 = json_decode($freelancer_agency->section_1, true);
        $freelancer_agency_section_2 = json_decode($freelancer_agency->section_2, true);
        $freelancer_agency_section_3 = json_decode($freelancer_agency->section_3, true);
        $freelancer_agency_section_4 = json_decode($freelancer_agency->section_4, true);
        $freelancer_agency_section_5 = json_decode($freelancer_agency->section_5, true);
        $freelancer_agency_section_6 = json_decode($freelancer_agency->section_6, true);
        $freelancer_agency_section_7 = json_decode($freelancer_agency->section_7, true);
    } else {
        $freelancer_agency_section_1 = [];
        $freelancer_agency_section_2 = [];
        $freelancer_agency_section_3 = [];
        $freelancer_agency_section_4 = [];
        $freelancer_agency_section_5 = [];
        $freelancer_agency_section_6 = [];
        $freelancer_agency_section_7 = [];
    }

    $reviews = LandingpageRazenstudioReview::latest()->get();
    $brands= LandingpageRazenstudioBrand::all();
    $partners = LandingpageRazenstudioOfficialPartner::all();
@endphp
@extends('landing-page-razen-studio.layouts.app')
@section('title', $freelancer_agency_section_1['title'])

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
                <h2 class="section-title-page text-white">{{$freelancer_agency_section_1['judul']}}</h2>
                <p class="mb-5">{{$freelancer_agency_section_1['deskripsi']}}</p>
                <ul class="breadcrumbs-inner list-center display-flex">
                    <li><a class="section-16px-regular font-weight-500" href="{{ route('home') }}">Home</a></li>
                    <li>
                        <h4 class="section-16px-regular font-weight-500 text-white">{{$freelancer_agency_section_1['judul']}}</h4>
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
                        <h4 class="section-45px-montserrat margin-top-15 margin-bottom-20">{{$freelancer_agency_section_2['judul']}}</h4>
                    </div>
                    <p class="section-17px-regular margin-bottom-25">{!! $freelancer_agency_section_2['deskripsi'] !!}</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="about-content-left wow fadeInLeft">
                    <div class="about-post">
                        <img src="{{ asset('images/landingpage_razenstudio/freelancer-agency/'.$freelancer_agency_section_2['gambar']) }}" alt="images">
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
                            <img class="img-fluid rounded-lg shadow-lg ml-lg-5" src="{{ asset('images/landingpage_razenstudio/freelancer-agency/'.$freelancer_agency_section_3['gambar']) }}" alt="Image Description" height="200" width="200">

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
                            <div class="col-lg-12 mb-3 mb-lg-0">
                                <div class="pr-lg-5">
                                    <blockquote class="font-size-2 font-weight-normal mb-4">{{$freelancer_agency_section_3['review']}}</blockquote>
                                    <div class="media">
                                        <div class="avatar-xs avatar-circle d-lg-none mr-2">
                                            <img style="height: 7rem; width:auto;" src="{{ asset('images/landingpage_razenstudio/freelancer-agency/'.$freelancer_agency_section_3['gambar']) }}" alt="Image Description">
                                        </div>
                                        <div class="media-body">
                                            <span class="text-dark font-weight-bold font-size-2">{{$freelancer_agency_section_3['nama']}}</span>
                                            <span class="font-size-2">— {{$freelancer_agency_section_3['jabatan']}}</span>
                                        </div>
                                    </div>
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
                    <h2 class="section-45px-montserrat margin-top-15">{{$freelancer_agency_section_4['sub_judul']}}</h2>
                    <p class="text-muted">{{$freelancer_agency_section_4['judul']}}</p>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="60" data-smobile="60"
                    style="height:60px"></div>
            </div>
        </div>

        <div class="container d-flex justify-content-center">
            <div class="row d-flex justify-content-center">
                @foreach ($freelancer_agency_section_4['konten'] as $item)
                    <div class="col-lg-3 col-md-6 col-12">
                        <article class="card shadow-sm transition-3d-hover mx-auto mb-5">
                            <div class="card-header text-center rounded-lg-top" style="background-color: #c4343c;">
                            </div>
                            <div class="card-body text-center">
                                <div class="d-block bg-white rounded mx-auto mb-3">
                                    <img src="{{ asset('images/landingpage_razenstudio/freelancer-agency/'.$item['gambar_konten']) }}" alt="Image Description" style="height: 7rem; width:auto;">
                                </div>
                                <div class="mb-3">
                                    <h2 class="mb-1">{{$item['judul_konten']}}</h2>
                                    <small class="d-block text-body font-size-2">{{$item['deskripsi_konten']}}<br><br></small>
                                </div>

                                <div class="text-center d-flex justify-content-center">
                                    <div class="col-6 col-lg-12">
                                        <a class="btn btn-sm btn-block font-size-2 text-white" style="background-color: #c4343c;" href="#form">Mulai</a>
                                    </div>
                                </div>

                            </div>
                        </article>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<section class="flat-services">
    <div class="container space-2" id="benefit">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title wow fadeInDown">
                    <h4 class="section-subtitle">{{$freelancer_agency_section_5['sub_judul']}}</h4>
                    <h2 class="section-45px-montserrat margin-top-15">{{$freelancer_agency_section_5['judul']}}</h2>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="60" data-smobile="60"
                    style="height:60px"></div>
            </div>
        </div>

        <div class="row justify-content-lg-center">
            @foreach ($freelancer_agency_section_5['konten'] as $item)
                <div class="col-md-6 col-lg-5 mb-3 mb-md-5 mb-lg-7">
                    <!-- Icon Blocks -->
                    <div class="media pr-lg-5">
                        <figure class="mr-4">
                            <img style="height: 7rem; width: auto;" src="{{ asset('images/landingpage_razenstudio/freelancer-agency/'.$item['gambar_konten']) }}" alt="SVG">
                        </figure>
                        <div class="media-body">
                            <h2>{{$item['judul_konten']}}</h2>
                            <p>{{$item['deskripsi_konten']}}</p>
                        </div>
                    </div>
                    <!-- End Icon Blocks -->
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="flat-services">
    <div class="container space-3" id="form">
        <div class="row justify-content-lg-between align-items-lg-center">
            <div class="col-lg-5 mb-7 mb-lg-0">
                <!-- Info -->
                <div class="mb-5">
                    <h1>{{$freelancer_agency_section_6['judul']}}</h1>
                    <p>{!!$freelancer_agency_section_6['deskripsi']!!}</p>
                </div>
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
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title wow fadeInDown">
                    <h4 class="section-subtitle">{{$freelancer_agency_section_7['sub_judul']}}</h4>
                    <h2 class="section-45px-montserrat margin-top-15">{{$freelancer_agency_section_7['judul']}}</h2>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="60" data-smobile="60"
                    style="height:60px"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div id="basicsAccordion-left">
                    @foreach ($freelancer_agency_section_7['konten'] as $item)
                        <!-- Card -->
                        <div class="card shadow-none mb-3">
                            <div class="card-header card-collapse" id="basicsHeading{{$item['id']}}">
                                <a class="btn btn-link btn-block d-flex justify-content-between card-btn px-0 collapsed text-decoration-none" href="javascript:;" role="button" data-toggle="collapse" data-target="#basicsCollapse{{$item['id']}}" aria-expanded="false" aria-controls="basicsCollapse{{$item['id']}}">
                                    <span class="font-size-2">{{$item['pertanyaan']}}</span>

                                    <span class="card-btn-toggle">
                                        <span class="font-size-2 card-btn-toggle-default">+</span>
                                        <span class="font-size-2 card-btn-toggle-active">−</span>
                                    </span>
                                </a>
                            </div>
                            <div id="basicsCollapse{{$item['id']}}" class="collapse" aria-labelledby="basicsHeading{{$item['id']}}" data-parent="#basicsAccordion-left" style="">
                                <div class="card-body px-0 m-3 font-size-3">
                                    {!!$item['jawaban'] !!}
                                </div>
                            </div>
                        </div>
                        <!-- End Card -->
                    @endforeach
                </div>
            </div>
        </div>
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

<section class="flat-services">
    <div class="container space-1">
        <div class="w-lg-75 mt-3 mx-lg-auto">
            <div class="text-center mb-4">
                <span class="divider divider-text h3">Official Partners:</span>
            </div>

            <div class="row d-flex justify-content-center text-center">
                <div class="col-lg-8 col-12">
                    <div class="row d-flex justify-content-center">
                        @foreach ($partners as $partner)
                            <div class="col-lg-3 col-4">
                                <div class="mx-3 client-image">
                                    <img class="client-default" src="{{ asset('images/landingpage_razenstudio/official-partner/'.$partner->gambar) }}" alt="Partner OCBC NISP">
                                    <img class="client-hover" style="display: none;" src="{{ asset('images/landingpage_razenstudio/official-partner/'.$partner->gambar) }}" alt="Partner OCBC">
                                </div>
                            </div>
                        @endforeach
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
@endsection
