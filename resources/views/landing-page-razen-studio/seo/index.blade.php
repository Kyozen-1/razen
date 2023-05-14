@php
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioSearchEngineOptimization;
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioItemReviewSearchEngineOptimization;
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioBrand;
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioOfficialPartner;
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioReview;
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioHome;

    $home = LandingpageRazenstudioHome::first();

    $search_engine_optimization = LandingpageRazenstudioSearchEngineOptimization::first();
    if ($search_engine_optimization) {
        $search_engine_optimization_section_1 = json_decode($search_engine_optimization->section_1, true);
        $search_engine_optimization_section_2 = json_decode($search_engine_optimization->section_2, true);
        $search_engine_optimization_section_3 = json_decode($search_engine_optimization->section_3, true);
        $search_engine_optimization_section_4 = json_decode($search_engine_optimization->section_4, true);
        $search_engine_optimization_section_5 = json_decode($search_engine_optimization->section_5, true);
        $search_engine_optimization_section_6 = json_decode($search_engine_optimization->section_6, true);
        $search_engine_optimization_section_7 = json_decode($search_engine_optimization->section_7, true);
    } else {
        $search_engine_optimization_section_1 = [];
        $search_engine_optimization_section_2 = [];
        $search_engine_optimization_section_3 = [];
        $search_engine_optimization_section_4 = [];
        $search_engine_optimization_section_5 = [];
        $search_engine_optimization_section_6 = [];
        $search_engine_optimization_section_7 = [];
    }

    $cek_item_review = LandingpageRazenstudioItemReviewSearchEngineOptimization::first();

    $reviews = LandingpageRazenstudioReview::latest()->get();
    $brands= LandingpageRazenstudioBrand::all();
    $partners = LandingpageRazenstudioOfficialPartner::all();
@endphp
@extends('landing-page-razen-studio.layouts.app')
@section('title', $search_engine_optimization_section_1['sub_judul'])

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
<div class="flat-slider container-fuild">
    <div class="row">
        <div class="mark-slide">
            <img src="{{ asset('olux/assets/images/mark-page/mark-icon-slide.png') }}" alt="images">
        </div>
        <div class="swiper-container mainslider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slider-st-1">
                    <div class="content-slider-left text-white">
                        <div class="d-flex">
                            <a class="section-16px-regular font-weight-500 mr-2 text-white text-decoration-none" href="{{ route('home') }}">Home </a>  <h4 class="section-16px-regular font-weight-500 text-white"> > {{$search_engine_optimization_section_1['judul']}}</h4>
                        </div>
                        <h2 class="title-slider section-65px-montserrat text-white">{{$search_engine_optimization_section_1['judul']}}</h2>
                        <p class="desc-slider">{!! $search_engine_optimization_section_1['deskripsi'] !!}.</p>
                    </div>
                    <div class="content-slider-right">
                        <img src="{{ asset('images/landingpage_razenstudio/search-engine-optimization/'.$search_engine_optimization_section_1['gambar']) }}" alt="images">
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
                    <h4 class="section-subtitle">{{$search_engine_optimization_section_2['sub_judul']}}</h4>
                    <h2 class="section-45px-montserrat margin-top-15">{{$search_engine_optimization_section_2['judul']}}</h2>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="60" data-smobile="60"
                    style="height:60px"></div>
            </div>
            @foreach ($search_engine_optimization_section_2['konten'] as $value)
                <div class="col-md-3 mb-5">
                    <div class="counter-box themesflat-counter hover-up wow fadeInUp" data-wow-delay="0.1s">
                        <div class="icon-box">
                            <div class="icon-counter">
                                <img style="height: 5rem; width:5rem; padding: -3rem;" src="{{ asset('images/landingpage_razenstudio/search-engine-optimization/'.$value['logo_konten']) }}">
                            </div>
                        </div>
                        <h3 class="section-20px-montserrat font-weight-600 line-height-35">{{$value['judul_konten']}}</h3>
                        <p>{{$value['deskripsi_konten']}}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

@if ($cek_item_review)
    @php
        $get_reviews = LandingpageRazenstudioItemReviewSearchEngineOptimization::all();
    @endphp
    @foreach ($get_reviews as $review)
        <div class="container space-bottom-2">
            <!-- Card -->
            <a class="card shadow-none text-inherit transition-3d-hover p-4 p-md-7" style="background: {{$review->bg_review}}">
                <div class="row">
                    <div class="col-lg-4 order-lg-2 mb-5 mb-lg-0">
                        <div class="d-flex flex-column h-100">
                            <div class="mb-3">
                                <h2 class="h1">Studi Kasus</h2>
                                <p class="text-body">{{$review->studi_kasus}}</p>
                            </div>
                            @php
                                $r = json_decode($review->review, true);
                            @endphp
                            <!-- Testimonials -->
                            <div class="card shadow-none p-4 mt-auto">
                                <div class="mb-3 text-center">
                                    <img class="mr-auto h-100" src="{{ asset('images/landingpage_razenstudio/search-engine-optimization/'.$r['logo_website']) }}" alt="SVG Logo">
                                </div>

                                <div class="mb-3">
                                    <blockquote class="text-dark font-size-2">{{$r['review']}}
                                    </blockquote>
                                </div>

                                <div class="media">
                                    <div class="avatar avatar-circle mr-3">
                                        <img class="avatar-img" src="{{ asset('images/landingpage_razenstudio/search-engine-optimization/'.$r['foto_reviewer']) }}" alt="Image Description">
                                    </div>
                                    <div class="media-body">
                                        <span class="d-block h5 mb-0">{{$r['nama_reviewer']}}</span>
                                        <small class="d-block text-muted">{{$r['jabatan_reviewer']}}</small>
                                    </div>
                                </div>
                            </div>
                            <!-- End Testimonials -->
                        </div>
                    </div>

                    <div class="col-lg-8 order-lg-1">
                        <!-- Info -->
                        <div class="mb-5">
                            <img class="img-fluid rounded-lg" src="{{ asset('images/landingpage_razenstudio/search-engine-optimization/'.$review->gambar) }}" alt="Image Description">
                        </div>

                        <div class="row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <h2>Goals</h2>
                                <p class="text-body">{{$review->goals}}</p>
                            </div>

                            <div class="col-sm-6">
                                <h2>Result</h2>
                                <p class="text-body">{{$review->result}}</p>
                            </div>
                        </div>
                        <!-- End Info -->
                    </div>
                </div>
            </a>
            <!-- End Card -->
        </div>
    @endforeach
@endif

<section class="flat-services">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title wow fadeInDown">
                    <h4 class="section-45px-montserrat margin-top-15">{{$search_engine_optimization_section_3['judul']}}</h4>
                    <p class="text-muted">{{$search_engine_optimization_section_3['deskripsi']}}</p>
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
            @endphp
            @foreach ($search_engine_optimization_section_3['item'] as $item)
                @php
                    if($item['item'] == 'item_1')
                    {
                        $item_1 = [
                            'harga' => $item['harga'],
                            'deskripsi' => $item['deskripsi'],
                            'mini_text' => $item['mini_text'],
                            'no_wa_konsultasi' => $item['no_wa_konsultasi']
                        ];
                    }

                    if($item['item'] == 'item_2')
                    {
                        $item_2 = [
                            'ikon' => $item['ikon'],
                            'judul' => $item['judul'],
                            'deskripsi' => $item['deskripsi']
                        ];
                    }

                    if($item['item'] == 'item_3')
                    {
                        $item_3 = [
                            'ikon' => $item['ikon'],
                            'judul' => $item['judul'],
                            'deskripsi' => $item['deskripsi']
                        ];
                    }

                    if($item['item'] == 'item_4')
                    {
                        $item_4 = [
                            'ikon' => $item['ikon'],
                            'judul' => $item['judul'],
                            'deskripsi' => $item['deskripsi']
                        ];
                    }

                    if($item['item'] == 'item_5')
                    {
                        $item_5 = [
                            'ikon' => $item['ikon'],
                            'judul' => $item['judul'],
                            'deskripsi' => $item['deskripsi']
                        ];
                    }
                @endphp
            @endforeach
            <div id="stickyBlockStartPoint" class="col-lg-5 mb-9 mb-lg-0">
                <!-- Pricing -->
                <div class="card z-index-2 p-4 p-md-7">
                    <span class="text-dark">
                        <p>Mulai dari</p>
                        <span class="display-4">{{$item_1['harga']}}</span>
                    </span>

                    <hr class="my-4">

                    <div class="mb-5">
                        <p>{{$item_1['deskripsi']}}</p>
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
                                <img style="width: 7rem; height:auto;" src="{{ asset('images/landingpage_razenstudio/search-engine-optimization/'.$item_2['ikon']) }}" alt="SVG">
                            </figure>
                            <h3>{{$item_2['judul']}}</h3>
                            <p>{{$item_2['deskripsi']}}</p>
                            <!-- End Icon Blocks -->
                        </div>
                        <div class="col-sm-6 mb-3">
                            <!-- Icon Blocks -->
                            <figure class="mb-3">
                                <img style="width: 7rem; height:auto;" src="{{ asset('images/landingpage_razenstudio/search-engine-optimization/'.$item_3['ikon']) }}" alt="SVG">
                            </figure>
                            <h3>{{$item_3['judul']}}</h3>
                            <p>{{$item_3['deskripsi']}}</p>
                            <!-- End Icon Blocks -->
                        </div>
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <!-- Icon Blocks -->
                            <figure class="mb-3">
                                <img style="width: 7rem; height:auto;" src="{{ asset('images/landingpage_razenstudio/search-engine-optimization/'.$item_4['ikon']) }}" alt="SVG">
                            </figure>
                            <h3>{{$item_4['judul']}}</h3>
                            <p>{{$item_4['deskripsi']}}</p>
                            <!-- End Icon Blocks -->
                        </div>
                        <div class="col-sm-6">
                            <!-- Icon Blocks -->
                            <figure class="mb-3">
                                <img style="width: 7rem; height:auto;" src="{{ asset('images/landingpage_razenstudio/search-engine-optimization/'.$item_5['ikon']) }}" alt="SVG">
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
        <div class="row">
            <div class="col-md-12">
                <div class="section-title wow fadeInDown">
                    <h4 class="section-subtitle">{{$search_engine_optimization_section_4['judul']}}</h4>
                    <h2 class="section-45px-montserrat margin-top-15">{{$search_engine_optimization_section_4['sub_judul']}}</h2>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="60" data-smobile="60"
                    style="height:60px"></div>
            </div>
        </div>
        <div class=" mx-lg-auto">
            @foreach ($search_engine_optimization_section_4['konten'] as $item)
                <!-- Pricing -->
                <div class="card p-4 mb-3">
                    <div class="row align-items-sm-center">
                        <div class="col-lg-4 mb-3 mb-lg-0 d-flex flex-row align-items-center">
                            <img class="mr-3" src="{{ asset('images/landingpage_razenstudio/search-engine-optimization/'.$item['logo_konten']) }}" alt="Sketch" width="50" height="50">
                            <h4 class="mb-0">{{$item['judul_konten']}}</h4>
                        </div>
                        <div class="col-lg-5 mb-3 mb-sm-0 d-flex justify-content-center">
                            <span class="d-block font-size-2">{{$item['deskripsi_konten']}}</span>
                        </div>
                        <div class="col-sm col-lg-3 text-sm-right">
                            <button type="submit" class="btn btn-lg btn-outline-primary btn-wide transition-3d-hover">{{$item['harga_konten']}}</button>
                        </div>
                    </div>
                </div>
                <!-- End Pricing -->
            @endforeach
        </div>
    </div>
</section>

<section class="flat-counter">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title wow fadeInDown">
                    <h4 class="section-subtitle">{{$search_engine_optimization_section_5['sub_judul']}}</h4>
                    <h2 class="section-45px-montserrat margin-top-15">{{$search_engine_optimization_section_5['judul']}}</h2>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="60" data-smobile="60"
                    style="height:60px"></div>
            </div>
            @foreach ($search_engine_optimization_section_5['konten'] as $value)
                <div class="col-md-4 mb-5">
                    <div class="counter-box themesflat-counter hover-up wow fadeInUp" data-wow-delay="0.1s">
                        <div class="icon-box">
                            <div class="icon-counter">
                                <img style="height: 5rem; width:5rem; padding: -3rem;" src="{{ asset('images/landingpage_razenstudio/search-engine-optimization/'.$value['logo_konten']) }}">
                            </div>
                        </div>
                        <h3 class="section-20px-montserrat font-weight-600 line-height-35">{{$value['judul_konten']}}</h3>
                        <p>{{$value['deskripsi_konten']}}</p>
                    </div>
                </div>
            @endforeach
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
                <blockquote class="font-size-2 text-dark">{{$search_engine_optimization_section_6['deskripsi']}}</blockquote>
            </div>
            <!-- End Blockquote -->

            <!-- Reviewer -->
            <div class="w-lg-50 mx-lg-auto">
                <div class="avatar avatar-circle mb-3">
                    <img class="avatar-img" src="{{ asset('images/landingpage_razenstudio/search-engine-optimization/'.$search_engine_optimization_section_6['gambar']) }}" alt="Image Description">
                </div>
                <h5 class="mb-0">{{$search_engine_optimization_section_6['nama_reviewer']}}</h5>
                <small>{{$search_engine_optimization_section_6['jabatan_reviewer']}}</small>
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
                        @foreach ($testimonis as $testimoni)
                        <div class="swiper-slide">
                            <div class="client-slider-box">
                                <div class="client-user text-center">
                                    <img src="{{ asset('images/landingpage_razenstudio/home/testimoni/'.$testimoni->gambar) }}"
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
                                        <h4 class="name-author section-20px-montserrat">{{$testimoni->nama}}</h4>
                                        <p class="margin-top-11">{{$testimoni->testimoni}}</p>
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

<section class="flat-counter">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title wow fadeInDown">
                    <h4 class="section-subtitle">{{$search_engine_optimization_section_7['sub_judul']}}</h4>
                    <h2 class="section-45px-montserrat margin-top-15">{{$search_engine_optimization_section_7['judul']}}</h2>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="60" data-smobile="60"
                    style="height:60px"></div>
            </div>
        </div>
        <div class="w-lg-85 mx-lg-auto">
            <div class="row">
                @foreach ($search_engine_optimization_section_7['konten'] as $item)
                    <div class="col-md-6 mb-3 mb-md-5">
                        <div class="pr-md-4">
                            <h2>{{$item['pertanyaan']}}</h2>
                            <p>{{$item['jawaban']}}</p>
                        </div>
                    </div>
                @endforeach
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
