@php
    use App\Models\RazenStudio\LandingPage\VideoProduction\LandingpageRazenstudioVideoProductionVideoAnimasi;
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioBrand;
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioHome;
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioReview;
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioOfficialPartner;
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioVideoProduction;

    $video_production = LandingpageRazenstudioVideoProduction::first();
    $video_production_section_1 = json_decode($video_production->section_1, true);
    $video_production_section_4 = json_decode($video_production->section_4, true);

    $video_animasi = LandingpageRazenstudioVideoProductionVideoAnimasi::first();
    $home = LandingpageRazenstudioHome::first();


    $video_animasi_section_1 = json_decode($video_animasi->section_1, true);
    $video_animasi_section_2 = json_decode($video_animasi->section_2, true);
    $video_animasi_section_3 = json_decode($video_animasi->section_3, true);
    $video_animasi_section_4 = json_decode($video_animasi->section_4, true);
    $video_animasi_section_5 = json_decode($video_animasi->section_5, true);
    $video_animasi_section_6 = json_decode($video_animasi->section_6, true);
    $video_animasi_section_7 = json_decode($video_animasi->section_7, true);

    $brands= LandingpageRazenstudioBrand::all();
    $reviews = LandingpageRazenstudioReview::latest()->get();
    $partners = LandingpageRazenstudioOfficialPartner::all();
@endphp
@extends('landing-page-razen-studio.layouts.app')
@section('title', $video_animasi_section_1['title'])

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
                <h1 class="section-title-page text-white">{{$video_animasi_section_1['judul']}}</h1>
                <p class="mb-5">{{$video_animasi_section_1['deskripsi']}}</p>
                <ul class="breadcrumbs-inner list-center display-flex">
                    <li><a class="section-16px-regular font-weight-500" href="{{ route('home') }}">Home</a></li>
                    <li><a class="section-16px-regular font-weight-500" href="{{ route('video-production') }}">{{$video_production_section_1['judul']}}</a></li>
                    <li>
                        <h4 class="section-16px-regular font-weight-500 text-white">{{$video_animasi_section_1['judul']}}</h4>
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
                        <h4 class="section-subtitle">{{$video_animasi_section_2['sub_judul']}}</h4>
                        <h4 class="section-45px-montserrat margin-top-15 margin-bottom-20">{{$video_animasi_section_2['judul']}}</h4>
                    </div>
                    <p class="section-17px-regular margin-bottom-25">
                        {!! $video_animasi_section_2['deskripsi'] !!}
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="about-content-left wow fadeInLeft">
                    <div class="about-post">
                        <img src="{{ asset('images/landingpage_razenstudio/video-production/video-animasi/'.$video_animasi_section_2['gambar']) }}" alt="images">
                        <div class="mark-video">
                            <a href="{{$video_animasi_section_2['link']}}" class="lightbox-image">
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

<section class="flat-services">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title wow fadeInDown">
                    <h2 class="section-45px-montserrat margin-top-15">{{$video_animasi_section_3['judul']}}</h2>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="60" data-smobile="60"
                    style="height:60px"></div>
            </div>
        </div>
        <ul class="step step-md step-centered">
            @php
                $i = 1;
            @endphp
            @foreach ($video_animasi_section_3['konten'] as $item)
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
    <div class="container space-2" id="pricing">
        <div class="row mb-5">
            <div class="col-md-12">
                <div class="section-title wow fadeInDown">
                    <h4 class="section-subtitle">{{$video_animasi_section_4['sub_judul']}}</h4>
                    <h2 class="section-main-title section-45px-montserrat">{{$video_animasi_section_4['judul']}}</h2>
                </div>
            </div>
        </div>

        <!-- Table -->
        <div class="table-responsive-lg mx-lg-auto">
            <table class="table table-striped table-borderless">
                <thead class="text-center">
                    <tr>
                        <th scope="col" class="w-25"></th>
                        <th scope="col" class="w-25">
                            <span class="d-block text-dark h3">Standard</span>
                        </th>
                        <th scope="col" class="w-25 border-left border-right">
                            <span class="d-block text-dark h3">Premium</span>
                        </th>
                        <th scope="col" class="w-25">
                            <span class="d-block text-dark h3">Ultimate</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($harga_jasas as $harga_jasa)
                        <tr class="border-top border-bottom">
                            <th scope="row" class="bg-white h4">{{$harga_jasa->nama}}</th>
                            <td class="bg-white text-center">
                                @php
                                    $standard = json_decode($harga_jasa->standard, true);
                                @endphp
                                @if ($standard['status_inputan'] == 'tulisan')
                                    {!! $standard['inputan'] !!}
                                @endif

                                @if ($standard['status_inputan'] == 'ikon')
                                    @if ($standard['inputan'] == 'Ya')
                                        <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success">
                                            <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                                        </svg>
                                    @endif

                                    @if ($standard['inputan'] == 'Tidak')
                                        <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger">
                                            <path fill="currentColor" d="M12,2C17.53,2 22,6.47 22,12C22,17.53 17.53,22 12,22C6.47,22 2,17.53 2,12C2,6.47 6.47,2 12,2M15.59,7L12,10.59L8.41,7L7,8.41L10.59,12L7,15.59L8.41,17L12,13.41L15.59,17L17,15.59L13.41,12L17,8.41L15.59,7Z" />
                                        </svg>
                                    @endif
                                @endif
                            </td>
                            <td class="bg-white text-center">
                                @php
                                    $premium = json_decode($harga_jasa->premium, true);
                                @endphp
                                @if ($premium['status_inputan'] == 'tulisan')
                                    {!! $premium['inputan'] !!}
                                @endif

                                @if ($premium['status_inputan'] == 'ikon')
                                    @if ($premium['inputan'] == 'Ya')
                                        <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success">
                                            <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                                        </svg>
                                    @endif

                                    @if ($premium['inputan'] == 'Tidak')
                                        <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger">
                                            <path fill="currentColor" d="M12,2C17.53,2 22,6.47 22,12C22,17.53 17.53,22 12,22C6.47,22 2,17.53 2,12C2,6.47 6.47,2 12,2M15.59,7L12,10.59L8.41,7L7,8.41L10.59,12L7,15.59L8.41,17L12,13.41L15.59,17L17,15.59L13.41,12L17,8.41L15.59,7Z" />
                                        </svg>
                                    @endif
                                @endif
                            </td>
                            <td class="bg-white text-center">
                                @php
                                    $ultimate = json_decode($harga_jasa->ultimate, true);
                                @endphp
                                @if ($ultimate['status_inputan'] == 'tulisan')
                                    {!! $ultimate['inputan'] !!}
                                @endif

                                @if ($ultimate['status_inputan'] == 'ikon')
                                    @if ($ultimate['inputan'] == 'Ya')
                                        <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success">
                                            <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                                        </svg>
                                    @endif

                                    @if ($ultimate['inputan'] == 'Tidak')
                                        <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger">
                                            <path fill="currentColor" d="M12,2C17.53,2 22,6.47 22,12C22,17.53 17.53,22 12,22C6.47,22 2,17.53 2,12C2,6.47 6.47,2 12,2M15.59,7L12,10.59L8.41,7L7,8.41L10.59,12L7,15.59L8.41,17L12,13.41L15.59,17L17,15.59L13.41,12L17,8.41L15.59,7Z" />
                                        </svg>
                                    @endif
                                @endif
                            </td>
                        </tr>
                    @endforeach
                    <tr>
                        <th scope="row" class="bg-white p-3"></th>
                        <td class="bg-white text-center p-3">
                            <a type="button" href="https://api.whatsapp.com/send?phone=6281234566636&amp;text=Halo%20GoSocial%21%0D%0ASaya%20ingin%20memesan%20layanan%20Video%20Animasi%20Standard" target="_blank" class="btn btn-sm btn-outline-primary text-nowrap transition-3d-hover font-size-2">Pilih Paket</a>
                        </td>
                        <td class="bg-white text-center border-left border-right p-3">
                            <a type="button" href="https://api.whatsapp.com/send?phone=6281234566636&amp;text=Halo%20GoSocial%21%0D%0ASaya%20ingin%20memesan%20layanan%20Video%20Animasi%20Premium" target="_blank" class="btn btn-sm btn-outline-primary text-nowrap transition-3d-hover font-size-2">Pilih Paket</a>
                        </td>
                        <td class="bg-white text-center p-3">
                            <a type="button" href="https://api.whatsapp.com/send?phone=6281234566636&amp;text=Halo%20GoSocial%21%0D%0ASaya%20ingin%20memesan%20layanan%20Video%20Animasi%20Custom" target="_blank" class="btn btn-sm btn-outline-primary text-nowrap transition-3d-hover font-size-2">Pilih Paket</a>

                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- End Table -->
    </div>
</section>

<section class="flat-services">
    <div class="container space-2">
        <div class="row mb-5">
            <div class="col-md-12">
                <div class="section-title wow fadeInDown">
                    <h4 class="section-subtitle">{{$video_animasi_section_5['sub_judul']}}</h4>
                    <h2 class="section-main-title section-45px-montserrat">{{$video_animasi_section_5['judul']}}</h2>
                    <p class="text-muted">{{$video_animasi_section_5['deskripsi']}}</p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($portofolios as $portofolio)
                <div class="col-md-4 col-12">
                    <div class="card">
                        <a href="{{$portofolio->link}}" target="blank">
                            <img class="card-img-top img-fluid" src="{{ asset('images/razen-studio/portofolio-video-animasi/'.$portofolio->gambar) }}" alt="Card image cap">
                            <div class="card-body text-center">
                                <h4 class="card-title">{{$portofolio->nama}}</h4>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="flat-counter">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-12">
                <div class="section-title wow fadeInDown">
                    <h4 class="section-subtitle">{{$video_animasi_section_6['sub_judul']}}</h4>
                    <h2 class="section-main-title section-45px-montserrat">{{$video_animasi_section_6['judul']}}</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($video_animasi_section_6['konten'] as $item)
            <div class="col-md-4 mb-5">
                <div class="counter-box themesflat-counter hover-up wow fadeInUp" data-wow-delay="0.1s">
                    <div class="icon-box">
                        <div class="icon-counter">
                            <img style="height: 5rem; width:5rem; padding: -3rem;" src="{{ asset('images/landingpage_razenstudio/video-production/video-animasi/'.$item['icon_konten']) }}" alt="SVG">
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
                                        <img src="{{ asset('images/landingpage_razenstudio/video-production/video-animasi/testimoni/'.$testimoni->gambar) }}"
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

<section class="flat-services">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title wow fadeInDown">
                    <h4 class="section-subtitle">{{$video_animasi_section_7['sub_judul']}}</h4>
                    <h2 class="section-45px-montserrat margin-top-15">{{$video_animasi_section_7['judul']}}</h2>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="60" data-smobile="60"
                    style="height:60px"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div id="basicsAccordion-left">
                    <!-- Card -->
                    @foreach ($video_animasi_section_7['konten'] as $item)
                    <div class="card shadow-none mb-3">
                        <div class="card-header card-collapse" id="heading{{$item['id']}}">
                            <a class="btn btn-link btn-block d-flex justify-content-between card-btn px-0 collapsed text-decoration-none" href="javascript:;" role="button" data-toggle="collapse" data-target="#{{$item['id']}}" aria-expanded="false" aria-controls="{{$item['id']}}">
                                <span class="font-size-2">{{$item['pertanyaan']}}</span>

                                <span class="card-btn-toggle">
                                    <span class="font-size-2 card-btn-toggle-default">+</span>
                                    <span class="font-size-2 card-btn-toggle-active">−</span>
                                </span>
                            </a>
                        </div>
                        <div id="{{$item['id']}}" class="collapse" aria-labelledby="heading{{$item['id']}}" data-parent="#basicsAccordion-left" style="">
                            <div class="card-body px-0 m-3">
                                <p>{{$item['pertanyaan']}}</p>
                            </div>
                        </div>
                    </div>
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
