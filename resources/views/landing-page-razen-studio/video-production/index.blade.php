@php
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioVideoProduction;
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioBrand;
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioHome;
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioReview;
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioOfficialPartner;

    $video_production = LandingpageRazenstudioVideoProduction::first();
    $home = LandingpageRazenstudioHome::first();

    $video_production_section_1 = json_decode($video_production->section_1, true);
    $video_production_section_2 = json_decode($video_production->section_2, true);
    $video_production_section_3 = json_decode($video_production->section_3, true);
    $video_production_section_4 = json_decode($video_production->section_4, true);

    $brands= LandingpageRazenstudioBrand::all();
    $reviews = LandingpageRazenstudioReview::latest()->get();
    $partners = LandingpageRazenstudioOfficialPartner::all();
@endphp
@extends('landing-page-razen-studio.layouts.app')
@section('title', $video_production_section_1['title'])
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/steps.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cubeportfolio.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/fontawesome.min.css" integrity="sha512-RvQxwf+3zJuNwl4e0sZjQeX7kUa3o82bDETpgVCH2RiwYSZVDdFJ7N/woNigN/ldyOOoKw8584jM4plQdt8bhA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('content')
<section class="flat-title-page back-ground-style h-100">
    <div class="container-fluid">
        <div class="row">
            <div class="breadcrumbs text-center link-style-5 text-white">
                <h2 class="section-title-page">{{$video_production_section_1['judul']}}</h2>
                <p class="mb-5">{{$video_production_section_1['deskripsi']}}</p>
                <ul class="breadcrumbs-inner list-center display-flex">
                    <li><a class="section-16px-regular font-weight-500" href="{{ route('home') }}">Home</a></li>
                    <li>
                        <h4 class="section-16px-regular font-weight-500">{{$video_production_section_1['judul']}}</h4>
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
                        <h4 class="section-45px-montserrat margin-top-15 margin-bottom-20">{{$video_production_section_2['judul']}}</h4>
                    </div>
                    <p class="section-17px-regular margin-bottom-25">{!!$video_production_section_2['deskripsi']!!}</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="about-content-left wow fadeInLeft">
                    <div class="about-post">
                        <img src="{{ asset('images/landingpage_razenstudio/video-production/'.$video_production_section_2['gambar']) }}" alt="images">
                        <div class="mark-video">
                            <a href="{{$video_production_section_2['link']}}" class="lightbox-image">
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
                    <h2 class="section-45px-montserrat margin-top-15">{{$video_production_section_3['judul']}}</h2>
                    <p class="text-muted">{{$video_production_section_3['deskripsi']}}</p>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="60" data-smobile="60"
                    style="height:60px"></div>
            </div>
        </div>
        <ul class="step step-md step-centered">
            @php
                $i = 1;
            @endphp
            @foreach ($video_production_section_3['konten'] as $item)
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
    <script src="{{ asset('js/jquery.cubeportfolio.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js" integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/fontawesome.min.js" integrity="sha512-j3gF1rYV2kvAKJ0Jo5CdgLgSYS7QYmBVVUjduXdoeBkc4NFV4aSRTi+Rodkiy9ht7ZYEwF+s09S43Z1Y+ujUkA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection
