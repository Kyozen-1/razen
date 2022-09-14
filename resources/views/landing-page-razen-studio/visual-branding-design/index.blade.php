@php
    use App\Models\RazenStudio\LandingPage\VisualBrandingDesign\LandingpageRazenstudioVisualBrandingDesign;
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioBrand;
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioHome;
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioReview;
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioOfficialPartner;

    $visual_branding_design = LandingpageRazenstudioVisualBrandingDesign::first();
    $home = LandingpageRazenstudioHome::first();

    $visual_branding_design_section_1 = json_decode($visual_branding_design->section_1, true);
    $visual_branding_design_section_2 = json_decode($visual_branding_design->section_2, true);
    $visual_branding_design_section_3 = json_decode($visual_branding_design->section_3, true);
    $visual_branding_design_section_4 = json_decode($visual_branding_design->section_4, true);
    $visual_branding_design_section_5 = json_decode($visual_branding_design->section_5, true);

    $brands= LandingpageRazenstudioBrand::all();
    $reviews = LandingpageRazenstudioReview::latest()->get();
    $partners = LandingpageRazenstudioOfficialPartner::all();
@endphp
@extends('landing-page-razen-studio.layouts.app')
@section('title', $visual_branding_design_section_1['title'])

@section('css')
<link rel="stylesheet" href="{{ asset('css/custom_style.css') }}">
@endsection

@section('content')
<section class="flat-title-page back-ground-style h-100">
    <div class="container-fluid">
        <div class="row">
            <div class="breadcrumbs text-center link-style-5 text-white">
                <h2 class="section-title-page text-white">{{$visual_branding_design_section_1['judul']}}</h2>
                <p class="mb-5">{{$visual_branding_design_section_1['deskripsi']}}</p>
                <ul class="breadcrumbs-inner list-center display-flex">
                    <li><a class="section-16px-regular font-weight-500 text-decoration-none" href="{{ route('home') }}">Home</a></li>
                    <li>
                        <h4 class="section-16px-regular font-weight-500 text-white">{{$visual_branding_design_section_1['judul']}}</h4>
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
                        <h4 class="section-subtitle">{{$visual_branding_design_section_2['sub_judul']}}</h4>
                        <h2 class="section-45px-montserrat margin-top-15 margin-bottom-20">{{$visual_branding_design_section_2['judul']}}</h2>
                    </div>
                    <p class="section-17px-regular margin-bottom-25">{!!$visual_branding_design_section_2['deskripsi']!!}</p>
                    <div class="button-about margin-top-48 wow fadeInUp" data-wow-delay="600ms"
                        data-wow-duration="1500ms">
                        <a href="{{ route('visual-branding-design.jasa-desain-grafis.index') }}" class="button-footer arrow-btn btn-st btn-style-1">Ayo Membuat Design!</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="about-content-left wow fadeInLeft">
                    <div class="about-post">
                        <img src="{{ asset('images/landingpage_razenstudio/visual-branding-design/'.$visual_branding_design_section_2['gambar']) }}" alt="images">
                        <div class="mark-about-post"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="flat-services">
    <div class="container">
        <div class="row" style="margin-bottom: 5rem">
            <div class="col-md-12">
                <div class="section-title wow fadeInDown">
                    <h4 class="section-subtitle">WHAT WE DO?</h4>
                    <h2 class="section-main-title section-45px-montserrat">Pilihan Layanan Branding</h2>
                </div>
            </div>
            @foreach ($visual_branding_design_section_3 as $item)
                <div class="col-md-4">
                    <div class="latest-new-box grow-up-hover wow fadeInUp" data-wow-delay="0ms"
                        data-wow-duration="1500ms">
                        <div class="about-post">
                            <img src="{{ asset('images/landingpage_razenstudio/visual-branding-design/'.$item['gambar']) }}" alt="images">
                            <div class="mark-about-post"></div>
                        </div>
                        <div class="latest-content">
                            <div class="latest-title margin-bottom-20">
                                @if ($item['link_page'] == '#')
                                <a href="#" class="section-20px-montserrat text-dark">{{$item['judul']}}</a>
                                @else
                                <a href="{{route($item['link_page'])}}" class="section-20px-montserrat text-dark">{{$item['judul']}}</a>
                                @endif
                                <p class="text-danger">{{$item['harga']}}</p>
                                <p>{{$item['deskripsi']}}</p>
                            </div>
                            @if ($item['link_page'] == '#')
                                <div class="latest-readmore"><a href="#" class="read-more"></a></div>
                            @else
                                <div class="latest-readmore"><a href="{{route($item['link_page'])}}" class="read-more"></a></div>
                            @endif
                        </div>
                    </div>
            </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="button-contact-me wow fadeInDown">
                    <a href="{{ route('contact', ['id'=>1]) }}" class="button-footer arrow-btn btn-st text-decoration-none">Punya kebutuhan lain?</a>
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
                    <h4 class="section-45px-montserrat margin-top-15">{{$visual_branding_design_section_4['judul']}}</h4>
                    <p class="text-muted">{{$visual_branding_design_section_4['deskripsi']}}</p>
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
            @foreach ($visual_branding_design_section_4['item'] as $item)
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
                                <img style="width: 7rem; height:auto;" src="{{ asset('images/landingpage_razenstudio/visual-branding-design/'.$item_2['ikon']) }}" alt="SVG">
                            </figure>
                            <h3>{{$item_2['judul']}}</h3>
                            <p>{{$item_2['deskripsi']}}</p>
                            <!-- End Icon Blocks -->
                        </div>
                        <div class="col-sm-6 mb-3">
                            <!-- Icon Blocks -->
                            <figure class="mb-3">
                                <img style="width: 7rem; height:auto;" src="{{ asset('images/landingpage_razenstudio/visual-branding-design/'.$item_3['ikon']) }}" alt="SVG">
                            </figure>
                            <h3>{{$item_3['judul']}}</h3>
                            <p>{{$item_3['deskripsi']}}</p>
                            <!-- End Icon Blocks -->
                        </div>
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <!-- Icon Blocks -->
                            <figure class="mb-3">
                                <img style="width: 7rem; height:auto;" src="{{ asset('images/landingpage_razenstudio/visual-branding-design/'.$item_4['ikon']) }}" alt="SVG">
                            </figure>
                            <h3>{{$item_4['judul']}}</h3>
                            <p>{{$item_4['deskripsi']}}</p>
                            <!-- End Icon Blocks -->
                        </div>
                        <div class="col-sm-6">
                            <!-- Icon Blocks -->
                            <figure class="mb-3">
                                <img style="width: 7rem; height:auto;" src="{{ asset('images/landingpage_razenstudio/visual-branding-design/'.$item_5['ikon']) }}" alt="SVG">
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
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title wow fadeInDown">
                    <h4 class="section-subtitle">{{$visual_branding_design_section_5 ['sub_judul']}}</h4>
                    <h2 class="section-45px-montserrat margin-top-15">{{$visual_branding_design_section_5 ['judul']}}</h2>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="60" data-smobile="60"
                    style="height:60px"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div id="basicsAccordion-left">
                    @foreach ($visual_branding_design_section_5 ['konten'] as $item)
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
                                    {!!$item['jawaban']!!}
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
