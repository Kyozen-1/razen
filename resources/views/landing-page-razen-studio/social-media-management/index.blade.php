@php
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioSocialMediaManagement;
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioBrand;
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioOfficialPartner;
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioReview;
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioHome;

    $home = LandingpageRazenstudioHome::first();

    $social_media_management = LandingpageRazenstudioSocialMediaManagement::first();
    if ($social_media_management) {
        $social_media_management_section_1 = json_decode($social_media_management->section_1, true);
        $social_media_management_section_2 = json_decode($social_media_management->section_2, true);
        $social_media_management_section_3 = json_decode($social_media_management->section_3, true);
        $social_media_management_section_4 = json_decode($social_media_management->section_4, true);
        $social_media_management_section_5 = json_decode($social_media_management->section_5, true);
        $social_media_management_section_6 = json_decode($social_media_management->section_6, true);
        $social_media_management_section_7 = json_decode($social_media_management->section_7, true);
        $social_media_management_section_8 = json_decode($social_media_management->section_8, true);
        $social_media_management_section_9 = json_decode($social_media_management->section_9, true);
        $social_media_management_section_10 = json_decode($social_media_management->section_10, true);
    } else {
        $social_media_management_section_1 = [];
        $social_media_management_section_2 = [];
        $social_media_management_section_3 = [];
        $social_media_management_section_4 = [];
        $social_media_management_section_5 = [];
        $social_media_management_section_6 = [];
        $social_media_management_section_7 = [];
        $social_media_management_section_8 = [];
        $social_media_management_section_9 = [];
        $social_media_management_section_10 = [];
    }

    $reviews = LandingpageRazenstudioReview::latest()->get();
    $brands= LandingpageRazenstudioBrand::all();
    $partners = LandingpageRazenstudioOfficialPartner::all();
@endphp
@extends('landing-page-razen-studio.layouts.app')
@section('title', $social_media_management_section_1['title'])

@section('css')
<link rel="stylesheet" href="https://gosocial.co.id/assets/vendor/cubeportfolio/css/cubeportfolio.min.css">
<link rel="stylesheet" href="https://gosocial.co.id/assets/vendor/hs-mega-menu/dist/hs-mega-menu.min.css">
<link rel="stylesheet" href="https://gosocial.co.id/assets/vendor/dzsparallaxer/dzsparallaxer.css">
<link rel="stylesheet" href="https://gosocial.co.id/assets/vendor/aos/dist/aos.css">
<link rel="stylesheet" href="https://gosocial.co.id/assets/css/pages/global.css?v.0908">
<link rel="stylesheet" href="https://gosocial.co.id/assets/css/theme.min.css">
<link rel="stylesheet" href="https://gosocial.co.id/assets/vendor/@fancyapps/fancybox/dist/jquery.fancybox.min.css">
<link rel="stylesheet" href="https://gosocial.co.id/assets/vendor/slick-carousel/slick/slick.css">
<link rel="stylesheet" href="https://gosocial.co.id/assets/css/pages/digital-campaign/digital-campaign.css?v.2812">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/fontawesome.min.css" integrity="sha512-RvQxwf+3zJuNwl4e0sZjQeX7kUa3o82bDETpgVCH2RiwYSZVDdFJ7N/woNigN/ldyOOoKw8584jM4plQdt8bhA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('content')
<section class="flat-title-page back-ground-style h-100">
    <div class="container-fluid">
        <div class="row">
            <div class="breadcrumbs text-center link-style-5 text-white">
                <h2 class="section-title-page text-white">{{$social_media_management_section_1['judul']}}</h2>
                <p class="mb-5">{{$social_media_management_section_1['deskripsi']}}</p>
                <ul class="breadcrumbs-inner list-center display-flex">
                    <li><a class="section-16px-regular font-weight-500 text-decoration-none" href="{{ route('home') }}">Home</a></li>
                    <li>
                        <h4 class="section-16px-regular font-weight-500 text-white">{{$social_media_management_section_1['judul']}}</h4>
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
                        <img src="{{ asset('images/landingpage_razenstudio/social-media-management/'.$social_media_management_section_2['gambar']) }}" alt="images">
                        <div class="mark-about-post"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="about-content-right wow fadeInUp" data-wow-delay="0ms"
                    data-wow-duration="1500ms">
                    <div class="section-title">
                        <h4 class="section-subtitle">{{$social_media_management_section_2['sub_judul']}}</h4>
                        <h4 class="section-45px-montserrat margin-top-15 margin-bottom-20">{{$social_media_management_section_2['judul']}}</h4>
                    </div>
                    <p class="section-17px-regular margin-bottom-25">{!!$social_media_management_section_2['deskripsi']!!}</p>
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
                        <h4 class="section-45px-montserrat margin-top-15 margin-bottom-20">{{$social_media_management_section_3['judul']}}</h4>
                    </div>
                    <p class="section-17px-regular margin-bottom-25">{{$social_media_management_section_3['deskripsi']}}</p>
                </div>
                @php
                    $item_1 = [];
                    $item_2 = [];
                    $item_3 = [];
                    $item_4 = [];
                    foreach ($social_media_management_section_3['item'] as $value) {
                        if($value['item'] == 'item_1')
                        {
                            $item_1 = [
                                'item' => $value['item'],
                                'angka' => $value['angka'],
                                'deskripsi' => $value['deskripsi']
                            ];
                        }
                        if($value['item'] == 'item_2')
                        {
                            $item_2 = [
                                'item' => $value['item'],
                                'angka' => $value['angka'],
                                'deskripsi' => $value['deskripsi']
                            ];
                        }
                        if($value['item'] == 'item_3')
                        {
                            $item_3 = [
                                'item' => $value['item'],
                                'angka' => $value['angka'],
                                'deskripsi' => $value['deskripsi']
                            ];
                        }
                        if($value['item'] == 'item_4')
                        {
                            $item_4 = [
                                'item' => $value['item'],
                                'angka' => $value['angka'],
                                'deskripsi' => $value['deskripsi']
                            ];
                        }
                    }
                @endphp
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div class="counter-box themesflat-counter hover-up wow fadeInUp" data-wow-delay="0.1s">
                            <div class="number-content h2"><span class="number"
                                    data-speed="2000" data-to="{{$item_1['angka']}}" data-inviewport="yes">{{$item_1['angka']}}</span>+</div>
                            <p>{{$item_1['deskripsi']}}</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="counter-box themesflat-counter hover-up wow fadeInUp" data-wow-delay="0.1s">
                            <div class="number-content h2"><span class="number"
                                    data-speed="2000" data-to="{{$item_2['angka']}}" data-inviewport="yes">{{$item_2['angka']}}</span>+tahun</div>
                            <p>{{$item_2['deskripsi']}}</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="counter-box themesflat-counter hover-up wow fadeInUp" data-wow-delay="0.1s">
                            <div class="number-content h2"><span class="number"
                                    data-speed="2000" data-to="{{$item_3['angka']}}" data-inviewport="yes">{{$item_3['angka']}}</span>%</div>
                            <p>{{$item_3['deskripsi']}}</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="counter-box themesflat-counter hover-up wow fadeInUp" data-wow-delay="0.1s">
                            <div class="number-content h2"><span class="number"
                                data-speed="2000" data-to="{{$item_4['angka']}}" data-inviewport="yes">{{$item_4['angka']}}</span>%</div>
                        <p>{{$item_4['deskripsi']}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="about-content-left wow fadeInLeft">
                    <div class="about-post">
                        <img src="{{ asset('images/landingpage_razenstudio/social-media-management/'.$social_media_management_section_3['gambar']) }}" alt="images">
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
            @foreach ($social_media_management_section_4 as $item)
                <div class="col-md-3">
                    <div class="list-services-box grow-up-hover wow fadeInUp" data-wow-delay="0ms"
                        data-wow-duration="1500ms">
                        <div class="post-services">
                            <img src="{{ asset('images/landingpage_razenstudio/social-media-management/'.$item['gambar']) }}" class="grow-up-hover"
                                alt="images">
                        </div>
                        <div class="content-services">
                            <div class="content-services-inner">
                                <a href="#" class="section-20px-montserrat text-decoration-none text-dark">{{$item['judul']}}</a>
                                <p class="section-17px-regular margin-top-10">{!! $item['deskripsi'] !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
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
                        <h4 class="section-subtitle">{{$social_media_management_section_5['judul']}}</h4>
                        <h4 class="section-45px-montserrat margin-top-15 margin-bottom-20">{{$social_media_management_section_5['judul']}}</h4>
                    </div>
                    <p class="section-17px-regular margin-bottom-25">{!!$social_media_management_section_5['deskripsi']!!}</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="about-content-left wow fadeInLeft">
                    <div class="about-post">
                        <img src="{{ asset('images/landingpage_razenstudio/social-media-management/'.$social_media_management_section_5['gambar']) }}" alt="images">
                        <div class="mark-video">
                            <a href="{{$social_media_management_section_5['link']}}" class="lightbox-image">
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
                    <h4 class="section-45px-montserrat margin-top-15">{{$social_media_management_section_6['judul']}}</h4>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="60" data-smobile="60"
                    style="height:60px"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3 mb-md-0">
                <img class="img-fluid transition-zoom-hover rounded-lg" src="{{ asset('images/landingpage_razenstudio/social-media-management/'.$social_media_management_section_6['gambar_before']) }}" alt="">
            </div>

            <div class="col-md-6">
                <img class="img-fluid transition-zoom-hover rounded-lg" src="{{ asset('images/landingpage_razenstudio/social-media-management/'.$social_media_management_section_6['gambar_after']) }}" alt="">
            </div>
        </div>
    </div>
</section>

<section class="flat-client">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title wow fadeInDown text-center">
                    <h2 class="section-45px-montserrat margin-top-15">{{$social_media_management_section_7['judul']}}</h2>
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
                                                    <p class="text-primary">Monday - Friday, 09.00 ??? 16.00</p>
                                                </td>
                                                <td class="text-center border-left border-right p-3">
                                                    <p class="text-primary">Monday - Friday, 09.00 ??? 16.00</p>
                                                </td>
                                                <td class="text-center p-3">
                                                    <p class="text-primary">Monday - Friday, 09.00 ??? 16.00</p>
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
                                                    <p class="text-primary">Monday - Friday, 09.00 ??? 16.00</p>
                                                </td>
                                                <td class="text-center border-left border-right p-3">
                                                    <p class="text-primary">Monday - Friday, 09.00 ??? 16.00</p>
                                                </td>
                                                <td class="text-center p-3">
                                                    <p class="text-primary">Monday - Friday, 09.00 ??? 16.00</p>
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
                    <h4 class="section-subtitle">{{$social_media_management_section_8['sub_judul']}}</h4>
                    <h4 class="section-45px-montserrat margin-top-15">{{$social_media_management_section_8['judul']}}</h4>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="60" data-smobile="60"
                    style="height:60px"></div>
            </div>
        </div>
        <div class="row">
            @foreach ($social_media_management_section_8['konten'] as $value)
                <div class="col-md-4">
                    <div class="list-services-box grow-up-hover wow fadeInUp" data-wow-delay="0ms"
                        data-wow-duration="1500ms">
                        <div class="post-services">
                            <img src="{{ asset('images/landingpage_razenstudio/social-media-management/'.$value['gambar_konten']) }}" class="grow-up-hover"
                                alt="images">
                        </div>
                        <div class="content-services">
                            <div class="content-services-inner">
                                <a href="#" class="section-20px-montserrat text-dark text-decoration-none">{{$value['judul_konten']}} </a>
                                <p class="section-17px-regular margin-top-10">{{$value['deskripsi_konten']}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
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
                        @foreach ($brands as $brand)
                            <div class="swiper-slide">
                                <div class="brand-content">
                                    <img src="{{ asset('images/landingpage_razenstudio/brand/'.$brand->gambar) }}" alt="images">
                                </div>
                            </div>
                        @endforeach
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
                    <h4 class="section-subtitle">{{$social_media_management_section_9['sub_judul']}}</h4>
                    <h2 class="section-45px-montserrat margin-top-15">{{$social_media_management_section_9['judul']}}</h2>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="60" data-smobile="60"
                    style="height:60px"></div>
            </div>
            @foreach ($social_media_management_section_9['konten'] as $value)
                <div class="col-md-4 mb-5">
                    <div class="counter-box themesflat-counter hover-up wow fadeInUp" data-wow-delay="0.1s">
                        <div class="icon-box">
                            <div class="icon-counter">
                                <img style="height: 5rem; width:5rem; padding: -3rem;" src="{{ asset('images/landingpage_razenstudio/social-media-management/'.$value['logo_konten']) }}">
                            </div>
                        </div>
                        <h3 class="section-20px-montserrat font-weight-600 line-height-35">{{$value['judul_konten']}}</h3>
                        <p>{!!$value['deskripsi_konten']!!}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="flat-client">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="client-content-box wow fadeInUp">
                    <h4 class="section-title section-45px-montserrat">{{$home->section_7}}</h4>
                    <button class="clone-btn-prev"></button>
                    <button class="clone-btn-next"></button>
                </div>
            </div>
            <div class="col-md-6">
                <div class="swiper-container sliver-vertical">
                    <div class="swiper-wrapper">
                        @foreach ($reviews as $review)
                        <div class="swiper-slide">
                            <div class="client-slider-box">
                                <div class="client-user text-center">
                                    <img src="{{ asset('images/landingpage_razenstudio/reviewer/'.$review->gambar) }}"
                                        alt="images">
                                    <ul class="list-inline small mt-3">
                                        <li class="list-inline-item mx-0">
                                            <i class="fas fa-star h4 text-warning"></i>
                                        </li>
                                        <li class="list-inline-item mx-0">
                                            <i class="fas fa-star h4 text-warning"></i>
                                        </li>
                                        <li class="list-inline-item mx-0">
                                            <i class="fas fa-star h4 text-warning"></i>
                                        </li>
                                        <li class="list-inline-item mx-0">
                                            <i class="fas fa-star h4 text-warning"></i>
                                        </li>
                                        <li class="list-inline-item mx-0">
                                            <i class="fas fa-star h4 text-warning"></i>
                                        </li>
                                    </ul>
                                </div>
                                <div class="client-content">
                                    <div class="client-user-author">
                                        <h4 class="name-author section-20px-montserrat">{{$review->nama}}</h4>
                                        <p class="margin-top-11">{{$review->ulasan}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
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
                    <h4 class="section-subtitle">{{$social_media_management_section_10['sub_judul']}}</h4>
                    <h2 class="section-45px-montserrat margin-top-15">{{$social_media_management_section_10['judul']}}</h2>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="60" data-smobile="60"
                    style="height:60px"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div id="basicsAccordion-left">
                    @foreach ($social_media_management_section_10['konten'] as $item)
                        <!-- Card -->
                        <div class="card shadow-none mb-3">
                            <div class="card-header card-collapse" id="basicsHeading{{$item['id']}}">
                                <a class="btn btn-link btn-block d-flex justify-content-between card-btn px-0 collapsed text-decoration-none" href="javascript:;" role="button" data-toggle="collapse" data-target="#basicsCollapse{{$item['id']}}" aria-expanded="false" aria-controls="basicsCollapse{{$item['id']}}">
                                    <span class="font-size-2">{{$item['pertanyaan']}}</span>

                                    <span class="card-btn-toggle">
                                        <span class="font-size-2 card-btn-toggle-default">+</span>
                                        <span class="font-size-2 card-btn-toggle-active">???</span>
                                    </span>
                                </a>
                            </div>
                            <div id="basicsCollapse{{$item['id']}}" class="collapse" aria-labelledby="basicsHeading{{$item['id']}}" data-parent="#basicsAccordion-left" style="">
                                <div class="card-body px-0 m-3">
                                    {!! $item['jawaban'] !!}
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
<script src="https://gosocial.co.id/assets/vendor/hs-quantity-counter/dist/hs-quantity-counter.min.js"></script>
<script src="https://gosocial.co.id/assets/vendor/slick-carousel/slick/slick.js"></script>
<script src="https://gosocial.co.id/assets/vendor/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
<script src="https://gosocial.co.id/assets/vendor/hs-toggle-switch/dist/hs-toggle-switch.min.js"></script>
<script src="https://gosocial.co.id/assets/vendor/hs-switch/dist/hs-switch-text.min.js"></script>
<script src="https://gosocial.co.id/assets/vendor/@fancyapps/fancybox/dist/jquery.fancybox.min.js"></script>
<script src="https://gosocial.co.id/assets/js/pages/digital-campaign/instagram.js?v.2906"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js" integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/fontawesome.min.js" integrity="sha512-j3gF1rYV2kvAKJ0Jo5CdgLgSYS7QYmBVVUjduXdoeBkc4NFV4aSRTi+Rodkiy9ht7ZYEwF+s09S43Z1Y+ujUkA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection
