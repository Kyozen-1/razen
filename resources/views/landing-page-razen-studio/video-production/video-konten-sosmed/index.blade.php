@php
    use App\Models\RazenStudio\LandingPage\VideoProduction\LandingpageRazenstudioVideoProductionVideoKontenSosmed;
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioBrand;
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioHome;
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioReview;
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioOfficialPartner;
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioVideoProduction;

    $video_production = LandingpageRazenstudioVideoProduction::first();
    $video_production_section_1 = json_decode($video_production->section_1, true);
    $video_production_section_4 = json_decode($video_production->section_4, true);

    $video_konten_sosmed = LandingpageRazenstudioVideoProductionVideoKontenSosmed::first();
    $home = LandingpageRazenstudioHome::first();

    $video_konten_sosmed_section_1 = json_decode($video_konten_sosmed->section_1, true);
    $video_konten_sosmed_section_2 = json_decode($video_konten_sosmed->section_2, true);
    $video_konten_sosmed_section_3 = json_decode($video_konten_sosmed->section_3, true);
    $video_konten_sosmed_section_4 = json_decode($video_konten_sosmed->section_4, true);
    $video_konten_sosmed_section_5 = json_decode($video_konten_sosmed->section_5, true);
    $video_konten_sosmed_section_6 = json_decode($video_konten_sosmed->section_6, true);
    $video_konten_sosmed_section_7 = json_decode($video_konten_sosmed->section_7, true);

    $brands= LandingpageRazenstudioBrand::all();
    $reviews = LandingpageRazenstudioReview::latest()->get();
    $partners = LandingpageRazenstudioOfficialPartner::all();
@endphp
@extends('landing-page-razen-studio.layouts.app')
@section('title', $video_konten_sosmed_section_1['title'])

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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/fontawesome.min.css" integrity="sha512-RvQxwf+3zJuNwl4e0sZjQeX7kUa3o82bDETpgVCH2RiwYSZVDdFJ7N/woNigN/ldyOOoKw8584jM4plQdt8bhA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('content')
<section class="flat-title-page back-ground-style h-100">
    <div class="container-fluid">
        <div class="row">
            <div class="breadcrumbs text-center link-style-5 text-white">
                <h1 class="section-title-page text-white">{{$video_konten_sosmed_section_1['judul']}}</h1>
                <p class="mb-5">{{$video_konten_sosmed_section_1['deskripsi']}}</p>
                <ul class="breadcrumbs-inner list-center display-flex">
                    <li><a class="section-16px-regular font-weight-500" href="{{ route('home') }}">Home</a></li>
                    <li><a class="section-16px-regular font-weight-500" href="{{ route('video-production') }}">{{$video_production_section_1['judul']}}</a></li>
                    <li>
                        <h4 class="section-16px-regular font-weight-500 text-white">{{$video_konten_sosmed_section_1['judul']}}</h4>
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
                        <h4 class="section-subtitle">{{$video_konten_sosmed_section_2['sub_judul']}}</h4>
                        <h4 class="section-45px-montserrat margin-top-15 margin-bottom-20">{{$video_konten_sosmed_section_2['judul']}}</h4>
                    </div>
                    <p class="section-17px-regular margin-bottom-25">
                        {!! $video_konten_sosmed_section_2['deskripsi'] !!}
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="about-content-left wow fadeInLeft">
                    <div class="about-post">
                        <img src="{{ asset('images/landingpage_razenstudio/video-production/video-konten-sosmed/'.$video_konten_sosmed_section_2['gambar']) }}" alt="images">
                        <div class="mark-video">
                            <a href="{{$video_konten_sosmed_section_2['link']}}" class="lightbox-image">
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
                <div class="about-content-left wow fadeInLeft">
                    <div class="about-post">
                        <img src="{{ asset('images/landingpage_razenstudio/video-production/video-konten-sosmed/'.$video_konten_sosmed_section_3['gambar']) }}" alt="images">
                        <div class="mark-video">
                            <a href="{{$video_konten_sosmed_section_3['link']}}" class="lightbox-image">
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
                        <h4 class="section-45px-montserrat margin-top-15 margin-bottom-20">{{$video_konten_sosmed_section_3['judul']}}</h4>
                    </div>
                    <p class="section-17px-regular margin-bottom-25">
                        {!! $video_konten_sosmed_section_3['deskripsi'] !!}
                    </p>
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
                    <h2 class="section-45px-montserrat margin-top-15">{{$video_konten_sosmed_section_4['judul']}}</h2>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="60" data-smobile="60"
                    style="height:60px"></div>
            </div>
        </div>
        <ul class="step step-md step-centered">
            @php
                $i = 1;
            @endphp
            @foreach ($video_konten_sosmed_section_4['konten'] as $item)
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
                    <h4 class="section-45px-montserrat margin-top-15">{{$video_konten_sosmed_section_5['judul']}}</h4>
                    <p class="text-muted">{{$video_konten_sosmed_section_5['deskripsi']}}</p>
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
            @foreach ($video_konten_sosmed_section_5['item'] as $item)
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
                                <img style="width: 7rem; height:auto;" src="{{ asset('images/landingpage_razenstudio/video-production/video-konten-sosmed/'.$item_2['ikon']) }}" alt="SVG">
                            </figure>
                            <h3>{{$item_2['judul']}}</h3>
                            <p>{{$item_2['deskripsi']}}</p>
                            <!-- End Icon Blocks -->
                        </div>
                        <div class="col-sm-6 mb-3">
                            <!-- Icon Blocks -->
                            <figure class="mb-3">
                                <img style="width: 7rem; height:auto;" src="{{ asset('images/landingpage_razenstudio/video-production/video-konten-sosmed/'.$item_3['ikon']) }}" alt="SVG">
                            </figure>
                            <h3>{{$item_3['judul']}}</h3>
                            <p>{{$item_3['deskripsi']}}</p>
                            <!-- End Icon Blocks -->
                        </div>
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <!-- Icon Blocks -->
                            <figure class="mb-3">
                                <img style="width: 7rem; height:auto;" src="{{ asset('images/landingpage_razenstudio/video-production/video-konten-sosmed/'.$item_4['ikon']) }}" alt="SVG">
                            </figure>
                            <h3>{{$item_4['judul']}}</h3>
                            <p>{{$item_4['deskripsi']}}</p>
                            <!-- End Icon Blocks -->
                        </div>
                        <div class="col-sm-6">
                            <!-- Icon Blocks -->
                            <figure class="mb-3">
                                <img style="width: 7rem; height:auto;" src="{{ asset('images/landingpage_razenstudio/video-production/video-konten-sosmed/'.$item_5['ikon']) }}" alt="SVG">
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

<section class="flat-services">
    <div class="container space-2">
        <div class="row mb-5">
            <div class="col-md-12">
                <div class="section-title wow fadeInDown">
                    <h4 class="section-subtitle">{{$video_konten_sosmed_section_6['sub_judul']}}</h4>
                    <h2 class="section-main-title section-45px-montserrat">{{$video_konten_sosmed_section_6['judul']}}</h2>
                </div>
            </div>
        </div>

        <!-- ==== Portofolio Card List ==== -->
        <div class="row">
            @foreach ($video_konten_sosmed_section_6['konten'] as $item)
                <div class="col-4 my-3">
                    <a class="card text-body transition-3d-hover js-fancybox" href="javascript:;" data-hs-fancybox-options="{
                        &quot;src&quot;: &quot;//youtu.be/0Xw-9fcAuuo&quot;,
                        &quot;caption&quot;: &quot;Fakta! Pelanggaran Affiliator Binary Option Dari Perspektif Hukum | Triv Indonesia #AADC&quot;,
                        &quot;speed&quot;: 700,
                        &quot;buttons&quot;: [&quot;fullScreen&quot;, &quot;close&quot;],
                        &quot;vimeo&quot;: {
                            &quot;autoplay&quot;: 1
                        }
                    }">
                        <img class="card-img-top" src="{{ asset('images/landingpage_razenstudio/video-production/video-konten-sosmed/'.$item['gambar_konten']) }}" alt="Image Description">
                        <div class="card-body text-center">
                            <h2 class="text-dark">{{$item['judul_konten']}}</h2>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        <!-- ==== END Portofolio Card List ==== -->
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
                    <h4 class="section-subtitle">{{$video_konten_sosmed_section_7['sub_judul']}}</h4>
                    <h2 class="section-45px-montserrat margin-top-15">{{$video_konten_sosmed_section_7['judul']}}</h2>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="60" data-smobile="60"
                    style="height:60px"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div id="basicsAccordion-left">
                    @foreach ($video_konten_sosmed_section_7['konten'] as $item)
                        <!-- Card -->
                        <div class="card shadow-none mb-3">
                            <div class="card-header card-collapse" id="basicsHeadingOne">
                                <a class="btn btn-link btn-block d-flex justify-content-between card-btn px-0 collapsed text-decoration-none" href="javascript:;" role="button" data-toggle="collapse" data-target="#basicsCollapseOne" aria-expanded="false" aria-controls="basicsCollapseOne">
                                    <span class="font-size-2">{{$item['pertanyaan']}}</span>

                                    <span class="card-btn-toggle">
                                        <span class="font-size-2 card-btn-toggle-default">+</span>
                                        <span class="font-size-2 card-btn-toggle-active">−</span>
                                    </span>
                                </a>
                            </div>
                            <div id="basicsCollapseOne" class="collapse" aria-labelledby="basicsHeadingOne" data-parent="#basicsAccordion-left" style="">
                                <div class="card-body px-0 m-3">
                                    <p>{{$item['jawaban']}}</p>
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
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title wow fadeInDown">
                    <h4 class="section-subtitle">WHAT WE DO?</h4>
                    <h2 class="section-main-title section-45px-montserrat">Pilihan Jenis Video</h2>
                </div>
            </div>
            @foreach ($video_production_section_4 as $item)
                <div class="col-md-4">
                    <div class="latest-new-box grow-up-hover wow fadeInUp" data-wow-delay="0ms"
                        data-wow-duration="1500ms">
                        <div class="about-post">
                            <img src="{{ asset('images/landingpage_razenstudio/video-production/'.$item['gambar']) }}" alt="images">
                            <div class="mark-video">
                                <a href="{{$item['link_youtube']}}" class="lightbox-image">
                                    <div class="icon"></div>
                                </a>
                            </div>
                            <div class="mark-about-post"></div>
                        </div>
                        <div class="latest-content">
                            <div class="latest-title margin-bottom-20"><a href="{{ route($item['link_page']) }}"
                                    class="section-20px-montserrat">{{$item['judul']}}</a>
                                    <p>{{$item['deskripsi']}}</p>
                            </div>
                            <div class="latest-readmore"><a href="{{ route($item['link_page']) }}" class="read-more"></a></div>
                        </div>
                    </div>
                </div>
            @endforeach
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js" integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/fontawesome.min.js" integrity="sha512-j3gF1rYV2kvAKJ0Jo5CdgLgSYS7QYmBVVUjduXdoeBkc4NFV4aSRTi+Rodkiy9ht7ZYEwF+s09S43Z1Y+ujUkA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection
