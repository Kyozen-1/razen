@php
    use App\Models\RazenStudio\LandingPage\VisualBrandingDesign\LandingpageRazenstudioVisualBrandingDesign;
    use App\Models\RazenStudio\LandingPage\VisualBrandingDesign\JasaDesainGrafis\LandingpageRazenstudioJasaBrandingDesign;
    use App\Models\RazenStudio\LandingPage\VisualBrandingDesign\JasaDesainGrafis\LandingpageRazenstudioDesainLabelProduk;
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioBrand;
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioHome;
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioReview;
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioOfficialPartner;

    $landing_page = LandingpageRazenstudioHome::first();

    $visual_branding_design = LandingpageRazenstudioVisualBrandingDesign::first();
    $visual_branding_design_section_1 = json_decode($visual_branding_design->section_1, true);

    $jasa_branding_design = LandingpageRazenstudioJasaBrandingDesign::first();
    $jasa_branding_design_section_1 = json_decode($jasa_branding_design->section_1, true);

    $desain_label_produk = LandingpageRazenstudioDesainLabelProduk::first();
    $desain_label_produk_section_1 = json_decode($desain_label_produk->section_1, true);
    $desain_label_produk_section_2 = json_decode($desain_label_produk->section_2, true);
    $desain_label_produk_section_3 = json_decode($desain_label_produk->section_3, true);
    $desain_label_produk_section_4 = json_decode($desain_label_produk->section_4, true);
    $desain_label_produk_section_5 = json_decode($desain_label_produk->section_5, true);
    $desain_label_produk_section_6 = json_decode($desain_label_produk->section_6, true);
    $desain_label_produk_section_7 = json_decode($desain_label_produk->section_7, true);
    $desain_label_produk_section_8 = json_decode($desain_label_produk->section_8, true);

    $home = LandingpageRazenstudioHome::first();
    $brands= LandingpageRazenstudioBrand::all();
    $reviews = LandingpageRazenstudioReview::latest()->get();
    $partners = LandingpageRazenstudioOfficialPartner::all();
@endphp

@extends('landing-page-razen-studio.layouts.app')
@section('title', $desain_label_produk_section_1['title'])

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
                <h1 class="section-title-page text-white">{{$desain_label_produk_section_1['judul']}}</h1>
                <p class="mb-5">{{$desain_label_produk_section_1['deskripsi']}}</p>
                <ul class="breadcrumbs-inner list-center display-flex">
                    <li><a class="section-16px-regular font-weight-500" href="{{ route('home') }}">Home</a></li>
                    <li><a class="section-16px-regular font-weight-500" href="{{ route('visual-branding-design') }}">{{$visual_branding_design_section_1['judul']}}</a></li>
                    <li><a class="section-16px-regular font-weight-500" href="{{ route('visual-branding-design.jasa-desain-grafis.index') }}">{{$jasa_branding_design_section_1['judul']}}</a></li>
                    <li>
                        <h4 class="section-16px-regular font-weight-500 text-white">{{$desain_label_produk_section_1['judul']}}</h4>
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
                        <h4 class="section-subtitle">{{$desain_label_produk_section_2['sub_judul']}}</h4>
                        <h4 class="section-45px-montserrat margin-top-15 margin-bottom-20">{{$desain_label_produk_section_2['judul']}}</h4>
                    </div>
                    <p class="section-17px-regular margin-bottom-25">
                        {!! $desain_label_produk_section_2['deskripsi'] !!}
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="about-content-left wow fadeInLeft">
                    <div class="about-post">
                        <img src="{{ asset('images/landingpage_razenstudio/visual-branding-design/jasa-desain-grafis/desain-label-produk/'.$desain_label_produk_section_2['gambar']) }}" alt="images">
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
                <div class="about-content-left wow fadeInLeft">
                    <div class="about-post">
                        <img src="{{ asset('images/landingpage_razenstudio/visual-branding-design/jasa-desain-grafis/desain-label-produk/'.$desain_label_produk_section_3['gambar']) }}" alt="images">
                        <div class="mark-about-post"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="about-content-right wow fadeInUp" data-wow-delay="0ms"
                    data-wow-duration="1500ms">
                    <div class="section-title">
                        <h4 class="section-45px-montserrat margin-top-15 margin-bottom-20">{{$desain_label_produk_section_3['judul']}}</h4>
                    </div>
                    <p class="section-17px-regular margin-bottom-25">
                        {!!$desain_label_produk_section_3['deskripsi']!!}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="flat-services">
    <div class="container space-1 space-bottom-2">
        <div class="w-lg-85 mx-lg-auto">
            <div class="card bg-danger text-white overflow-hidden p-5">
                <div class="row justify-content-md-start align-items-md-center text-center text-md-left">
                    <div class="col-md-6 offset-md-3 mb-3 mb-md-0">
                        <h3 class="text-white font-size-2 mb-1">{{$desain_label_produk_section_4['judul']}}</h3>
                        <p class="text-white-70 font-size-2 mb-0">{{$desain_label_produk_section_4['deskripsi']}}</p>
                    </div>
                    <div class="col-md-3 text-md-right">
                        <a class="btn btn-light transition-3d-hover font-size-2" href="{{ route('visual-branding-design') }}">Lihat
                            Paket</a>
                    </div>
                </div>

                <!-- SVG Component -->
                <figure class="w-25 d-none d-md-block content-centered-y ml-n4">
                    <img class="img-fluid" src="https://gosocial.co.id/assets/svg/service/desain/lainnya.svg" alt="Jasa Desain Grafis Lainnya">
                </figure>
                <!-- End SVG Component -->
            </div>
        </div>
    </div>
</section>

<section class="flat-services">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title wow fadeInDown">
                    <h4 class="section-subtitle">{{$desain_label_produk_section_5['sub_judul']}}</h4>
                    <h2 class="section-45px-montserrat margin-top-15">{{$desain_label_produk_section_5['judul']}}</h2>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="60" data-smobile="60"
                    style="height:60px"></div>
            </div>
        </div>
        <ul class="step step-md step-centered">
            @php
                $i = 1;
            @endphp
            @foreach ($desain_label_produk_section_5['konten'] as $item)
                <li class="step-item">
                    <div class="step-content-wrapper">
                        <span class="step-icon step-icon-soft-primary">{{$i++}}</span>
                        <div class="step-content">
                            <h3>{{$item['judul_konten']}}</h3>
                            <p>{{$item['deskripsi_konten']}}</p>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</section>
<section class="flat-services">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title wow fadeInDown">
                    <h4 class="section-45px-montserrat margin-top-15">{{$desain_label_produk_section_6['judul']}}</h4>
                    <p class="text-muted">{{$desain_label_produk_section_6['deskripsi']}}</p>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="60" data-smobile="60"
                    style="height:60px"></div>
            </div>
        </div>
        <div class="row align-items-lg-center">
            @php
                $item_1 = [];
                $item_2 = [];
                $item_3 = [];
                $item_4 = [];
                $item_5 = [];

                foreach ($desain_label_produk_section_6['item'] as $value) {
                    if ($value['item'] == 'item_1')
                    {
                        $item_1 = [
                            'item' => $value['item'],
                            'harga' => $value['harga'],
                            'deskripsi' => $value['deskripsi'],
                            'mini_text' => $value['mini_text'],
                            'no_wa_konsultasi' => $value['no_wa_konsultasi'],
                        ];
                    }

                    if($value['item'] == 'item_2')
                    {
                        $item_2 = [
                            'item' => $value['item'],
                            'ikon' => $value['ikon'],
                            'judul' => $value['judul'],
                            'deskripsi' => $value['deskripsi'],
                        ];
                    }

                    if($value['item'] == 'item_3')
                    {
                        $item_3 = [
                            'item' => $value['item'],
                            'ikon' => $value['ikon'],
                            'judul' => $value['judul'],
                            'deskripsi' => $value['deskripsi'],
                        ];
                    }


                    if($value['item'] == 'item_4')
                    {
                        $item_4 = [
                            'item' => $value['item'],
                            'ikon' => $value['ikon'],
                            'judul' => $value['judul'],
                            'deskripsi' => $value['deskripsi'],
                        ];
                    }

                    if($value['item'] == 'item_5')
                    {
                        $item_5 = [
                            'item' => $value['item'],
                            'ikon' => $value['ikon'],
                            'judul' => $value['judul'],
                            'deskripsi' => $value['deskripsi'],
                        ];
                    }
                }
            @endphp
            <div id="stickyBlockStartPoint" class="col-lg-5 mb-9 mb-lg-0">
                <!-- Pricing -->
                <div class="card z-index-2 p-4 p-md-7">
                    <span class="text-dark">
                        <p>Mulai dari</p>
                        <span class="display-4">Rp. {{$item_1['harga']}}</span>
                    </span>

                    <hr class="my-4">

                    <div class="mb-5">
                        <p>{!!$item_1['deskripsi']!!}</p>
                    </div>

                    <div class="mb-2">
                        <a class="btn btn-primary btn-pill btn-wide transition-3d-hover font-size-2" href="https://api.whatsapp.com/send?phone={{$item_1['no_wa_konsultasi']}}&amp;text=Halo%20GoSocial%21%0D%0ASaya%20ingin%20konsultasi%20layanan%20SEO" target="_blank">
                            Konsultasi Sekarang</i>
                        </a>
                    </div>

                    <p class="small">{{$item_1['mini_text']}}</p>
                </div>
                <!-- End Pricing -->
            </div>

            <div class="col-lg-7">
                <div class="pl-lg-6">
                    <div class="row">
                        <div class="col-sm-6 mb-3">
                            <!-- Icon Blocks -->
                            <figure class="mb-3">
                                <img style="width: 7rem; height:auto;" src="{{ asset('images/landingpage_razenstudio/visual-branding-design/jasa-desain-grafis/desain-label-produk/'.$item_2['ikon']) }}" alt="SVG">
                            </figure>
                            <h3>{{$item_2['judul']}}</h3>
                            <p>{{$item_2['deskripsi']}}</p>
                            <!-- End Icon Blocks -->
                        </div>
                        <div class="col-sm-6 mb-3">
                            <!-- Icon Blocks -->
                            <figure class="mb-3">
                                <img style="width: 7rem; height:auto;" src="{{ asset('images/landingpage_razenstudio/visual-branding-design/jasa-desain-grafis/desain-label-produk/'.$item_2['ikon']) }}" alt="SVG">
                            </figure>
                            <h3>{{$item_3['judul']}}</h3>
                            <p>{{$item_3['deskripsi']}}</p>
                            <!-- End Icon Blocks -->
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <!-- Icon Blocks -->
                            <figure class="mb-3">
                                <img style="width: 7rem; height:auto;" src="{{ asset('images/landingpage_razenstudio/visual-branding-design/jasa-desain-grafis/desain-label-produk/'.$item_3['ikon']) }}" alt="SVG">
                            </figure>
                            <h3>{{$item_4['judul']}}</h3>
                            <p>{{$item_4['deskripsi']}}</p>
                            <!-- End Icon Blocks -->
                        </div>
                        <div class="col-sm-6">
                            <!-- Icon Blocks -->
                            <figure class="mb-3">
                                <img style="width: 7rem; height:auto;" src="{{ asset('images/landingpage_razenstudio/visual-branding-design/jasa-desain-grafis/desain-label-produk/'.$item_4['ikon']) }}" alt="SVG">
                            </figure>
                            <h3>{{$item_5['judul']}}</h3>
                            <p>{{$item_5['deskripsi']}}
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
        <div class="row mb-5">
            <div class="col-md-12">
                <div class="section-title wow fadeInDown">
                    <h4 class="section-subtitle">{{$desain_label_produk_section_7['sub_judul']}}</h4>
                    <h2 class="section-main-title section-45px-montserrat">{{$desain_label_produk_section_7['judul']}}</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($desain_label_produk_section_7['konten'] as $item)
                <div class="col-md-4 mb-5">
                    <div class="counter-box themesflat-counter hover-up wow fadeInUp" data-wow-delay="0.1s">
                        <div class="icon-box">
                            <div class="icon-counter">
                                <img style="height: 5rem; width:5rem; padding: -3rem;" src="{{ asset('images/landingpage_razenstudio/visual-branding-design/jasa-desain-grafis/desain-label-produk/'.$item['gambar_konten']) }}">
                            </div>
                        </div>
                        <h3 class="section-20px-montserrat font-weight-600 line-height-35">{{$item['judul_konten']}}</h3>
                        <p>{{$item['deskripsi_konten']}}</p>
                    </div>
                </div>
            @endforeach
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

<section class="flat-client">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="client-content-box wow fadeInUp">
                    <h4 class="section-title section-45px-montserrat">{{$landing_page->section_7}}</h4>
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
                    <h4 class="section-subtitle">{{$desain_label_produk_section_8['sub_judul']}}</h4>
                    <h2 class="section-45px-montserrat margin-top-15">{{$desain_label_produk_section_8['judul']}}</h2>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="60" data-smobile="60"
                    style="height:60px"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div id="basicsAccordion-left">
                    @foreach ($desain_label_produk_section_8['konten'] as $item)
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
@endsection
