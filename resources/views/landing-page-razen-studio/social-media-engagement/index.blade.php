@extends('landing-page-razen-studio.layouts.app')
@section('title', 'Razen Studio | Social Media Engagement')

@section('content')
@php
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioSocialMediaEngagement;
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioBrand;
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioOfficialPartner;

    $landing_page = LandingpageRazenstudioSocialMediaEngagement::first();
    $section1 = json_decode($landing_page->section_1, true);
    $section2 = json_decode($landing_page->section_2, true);
    $section3 = json_decode($landing_page->section_3, true);
    $section4 = json_decode($landing_page->section_4, true);
    $section5 = json_decode($landing_page->section_5, true);
    $section6 = json_decode($landing_page->section_6, true);

    $brands= LandingpageRazenstudioBrand::all();
    $partners = LandingpageRazenstudioOfficialPartner::all();
@endphp
    <section class="flat-title-page back-ground-style h-100">
        <div class="container-fluid">
            <div class="row">
                <div class="breadcrumbs text-center link-style-5 text-white">
                    <h2 class="section-title-page">{{$section1 ? $section1['judul'] : ''}}</h2>
                    <p class="mb-5">{{$section1 ? $section1['deskripsi'] : ''}}</p>
                    <ul class="breadcrumbs-inner list-center display-flex">
                        <li><a class="section-16px-regular font-weight-500" href="{{ route('home') }}">Home</a></li>
                        <li>
                            <h4 class="section-16px-regular font-weight-500">{{$section1 ? $section1['judul'] : ''}}</h4>
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
                            <img src="{{ asset('images/landingpage_razenstudio/social-media-engagement/'.$section2['gambar']) }}" alt="images">
                            <div class="mark-about-post"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about-content-right wow fadeInUp" data-wow-delay="0ms"
                        data-wow-duration="1500ms">
                        <div class="section-title">
                            <h4 class="section-45px-montserrat margin-top-15 margin-bottom-20">{{$section2 ? $section2['judul'] : ''}}</h4>
                        </div>
                        {!!$section2 ? $section2['deskripsi'] : ''!!}
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
                            <h4 class="section-45px-montserrat margin-top-15 margin-bottom-20">{{$section3['judul']}}</h4>
                        </div>
                        {!! $section3['deskripsi'] !!}
                        <div class="button-about margin-top-48 wow fadeInUp" data-wow-delay="600ms"
                            data-wow-duration="1500ms">
                            <a href="{{ route('blog') }}" class="button-footer arrow-btn btn-st btn-style-1">Cara Mengetahui Engagement Rate</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about-content-left wow fadeInLeft">
                        <div class="about-post">
                            <img src="{{ asset('images/landingpage_razenstudio/social-media-engagement/'.$section3['gambar']) }}" alt="images">
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
                            <img src="{{ asset('images/landingpage_razenstudio/social-media-engagement/'.$section4['gambar']) }}" alt="images">
                            <div class="mark-about-post"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about-content-right wow fadeInUp" data-wow-delay="0ms"
                        data-wow-duration="1500ms">
                        <div class="section-title">
                            <h4 class="section-45px-montserrat margin-top-15 margin-bottom-20">{{$section4['judul']}}</h4>
                        </div>
                        {!! $section4['deskripsi'] !!}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="flat-list-services">
        <div class="container">
            <div class="row">
                @foreach ($section5 as $item)
                    <div class="col-md-4">
                        <div class="list-services-box grow-up-hover wow fadeInUp" data-wow-delay="0ms"
                            data-wow-duration="1500ms">
                            <div class="post-services">
                                <img src="{{ asset('images/landingpage_razenstudio/social-media-engagement/'.$item['gambar']) }}" class="grow-up-hover"
                                    alt="images">
                                {{-- <div class="icon-item-services">
                                    <span class="icon-services icon-ux-interface1 font-size-icon active"></span>
                                </div> --}}
                            </div>
                            <div class="content-services">
                                <div class="content-services-inner">
                                    <div class="text-center">
                                        <a href="{{ route($item['link']) }}" class="section-20px-montserrat">{{$item['judul']}}</a>
                                        <p class="text-muted">Mulai dari:</p>
                                        <h2>Rp. {{number_format($item['harga'], 2)}}</h2>
                                    </div>
                                    <ul class="mt-5">
                                        <li>
                                            @foreach ($item['item_penilaian'] as $i)
                                                <div class="d-flex mb-2">
                                                    <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success">
                                                        <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                                                    </svg> <p class="text-muted">{{$i['item']}}</p>
                                                </div>
                                            @endforeach
                                        </li>
                                    </ul>
                                </div>
                                <div class="button-readmore">
                                    <a href="{{ route($item['link']) }}" class="read-more">Daftar Harga</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="flat-counter">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title wow fadeInDown">
                        <h2 class="section-45px-montserrat margin-top-15">{{$section6['judul']}}</h2>
                        <p class="text-muted">{{$section6['deskripsi']}}</p>
                    </div>
                    <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="60" data-smobile="60"
                        style="height:60px"></div>
                </div>
            </div>
            <div class="row">
                @foreach ($section6['konten'] as $item)
                    <div class="col-md-3">
                        <div class="counter-box themesflat-counter hover-up wow fadeInUp" data-wow-delay="0.1s">
                            <div class="icon-box">
                                <div class="icon-counter">
                                    <img style="height: 5rem; width:5rem; padding: -3rem;" src="{{ asset('images/landingpage_razenstudio/social-media-engagement/'.$item['gambar_konten']) }}">
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
