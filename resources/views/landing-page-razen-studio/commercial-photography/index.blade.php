@php
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioCommercialPhotography;
    use App\Models\RazenStudio\LandingPage\CommercialPhotography\LandingpageRazenstudioCommercialPhotographyPaketHarga;
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioBrand;
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioHome;
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioReview;
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioOfficialPartner;

    $home = LandingpageRazenstudioHome::first();
    $commercial_photography = LandingpageRazenstudioCommercialPhotography::first();
    $commercial_photography_section_1 = json_decode($commercial_photography->section_1, true);
    $commercial_photography_section_2 = json_decode($commercial_photography->section_2, true);
    $commercial_photography_section_3 = json_decode($commercial_photography->section_3, true);
    $commercial_photography_section_4 = json_decode($commercial_photography->section_4, true);
    $commercial_photography_section_5 = json_decode($commercial_photography->section_5, true);
    $commercial_photography_section_6 = json_decode($commercial_photography->section_6, true);
    $commercial_photography_section_7 = json_decode($commercial_photography->section_7, true);
    $commercial_photography_section_8 = json_decode($commercial_photography->section_8, true);
    $commercial_photography_section_9 = json_decode($commercial_photography->section_9, true);
    $commercial_photography_section_10 = json_decode($commercial_photography->section_10, true);
    $commercial_photography_section_11 = json_decode($commercial_photography->section_11, true);

    $cek_paket_harga = LandingpageRazenstudioCommercialPhotographyPaketHarga::first();

    $brands= LandingpageRazenstudioBrand::all();
    $reviews = LandingpageRazenstudioReview::latest()->get();
    $partners = LandingpageRazenstudioOfficialPartner::all();
@endphp
@extends('landing-page-razen-studio.layouts.app')
@section('title', $commercial_photography_section_1['title'])

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/steps.css') }}">
    <link rel="stylesheet" href="https://gosocial.co.id/assets/css/pages/commercial-photo.css?v.2112">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://gosocial.co.id/assets/vendor/fontawesome/css/all.min.css">
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
            <div class="breadcrumbs text-center link-style-5">
                <h2 class="section-title-page text-white">{{$commercial_photography_section_1['judul']}}</h2>
                <p class="mb-5 text-white">{{$commercial_photography_section_1['deskripsi']}}</p>
                <ul class="breadcrumbs-inner list-center display-flex">
                    <li><a class="section-16px-regular font-weight-500" href="{{ route('home') }}">Home</a></li>
                    <li>
                        <h4 class="section-16px-regular font-weight-500 text-white">{{$commercial_photography_section_1['judul']}}</h4>
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
                        <h4 class="section-subtitle">{{$commercial_photography_section_2['sub_judul']}}</h4>
                        <h2 class="section-45px-montserrat margin-top-15 margin-bottom-20">{{$commercial_photography_section_2['judul']}}</h2>
                    </div>
                    <p class="section-17px-regular margin-bottom-25">{!! $commercial_photography_section_2['deskripsi'] !!}</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="about-content-left wow fadeInLeft">
                    <div class="about-post">
                        <img src="{{ asset('images/landingpage_razenstudio/commercial-photography/'.$commercial_photography_section_2['gambar']) }}" alt="images">
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
                    <h2 class="section-45px-montserrat margin-top-15">{{$commercial_photography_section_3['judul']}}</h2>
                    <p class="text-muted">{{$commercial_photography_section_3['deskripsi']}}</p>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="60" data-smobile="60"
                    style="height:60px"></div>
            </div>
            <div class="col-md-12">
                <div class="swiper-container swiper-coverflow style-coverflow ">
                    <div class="swiper-wrapper">
                        @foreach ($commercial_photography_section_3['konten'] as $item)
                            <div class="swiper-slide style-coverflow">
                                <img src="{{ asset('images/landingpage_razenstudio/commercial-photography/'.$item['gambar']) }}" alt="images">
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-button-next slider-coverflow-btn"></div>
                    <div class="swiper-button-prev slider-coverflow-btn"></div>
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
                    <h2 class="section-45px-montserrat margin-top-15">{{$commercial_photography_section_4['judul']}}</h2>
                    <p class="text-muted">{{$commercial_photography_section_4['sub_judul']}}</p>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="60" data-smobile="60"
                    style="height:60px"></div>
            </div>
        </div>
        <ul class="step step-md step-centered">
            @php
                $i = 1;
            @endphp
            @foreach ($commercial_photography_section_4['konten'] as $item)
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

<section class="flat-about-2nd">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="about-content-left wow fadeInLeft">
                    <div class="about-post">
                        <img src="{{ asset('images/landingpage_razenstudio/commercial-photography/'.$commercial_photography_section_5['gambar']) }}" alt="images">
                        <div class="mark-video">
                            <a href="{{$commercial_photography_section_5['link']}}" class="lightbox-image">
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
                        <h4 class="section-45px-montserrat margin-top-15 margin-bottom-20">{{$commercial_photography_section_5['judul']}}</h4>
                    </div>
                    <p class="section-17px-regular margin-bottom-25">{!! $commercial_photography_section_5['deskripsi'] !!}</p>
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
                    <h2 class="section-45px-montserrat margin-top-15">{{$commercial_photography_section_6['sub_judul']}}</h2>
                    <p class="text-muted">{{$commercial_photography_section_6['judul']}}</p>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="60" data-smobile="60"
                    style="height:60px"></div>
            </div>
        </div>
        <div class="row">
            @if ($cek_paket_harga)
                @php
                    $paket_hargas = LandingpageRazenstudioCommercialPhotographyPaketHarga::all();
                @endphp
                @php
                    $number = 1;
                @endphp
                @foreach ($paket_hargas as $paket_harga)
                    @php
                        $n = $number++;
                    @endphp
                    <div class="col-sm-6 col-lg-4 mb-5">
                        <!-- Card -->
                        <div class="card card-bordered card-hover-shadow h-100">
                            <div class="slideshow-container">
                                @php
                                    $gambar = json_decode($paket_harga->gambar, true);
                                @endphp
                                @for ($i = 0; $i < count($gambar); $i++)
                                    <div class="mySlides{{$n}} fades" @if($i == 0) style="display: block;" @else style="display: none;" @endif>
                                        <img src="{{ asset('images/landingpage_razenstudio/commercial-photography/'.$gambar[$i]) }}" class="centerproduk p-2 card-img " alt="Foto Produk Katalog 1" style="width:100%;">
                                    </div>
                                @endfor
                                <a class="prev ml-2" onclick="plusSlides{{$n}}(-1)">❮</a>
                                <a class="next mr-2" onclick="plusSlides{{$n}}(1)">❯</a>
                                <div class="text-center mt-2">
                                    @for ($j = 0; $j < count($gambar); $j++)
                                        <span class="dot{{$n}} @if($j == 0) activedot @endif" onclick="currentSlide{{$n}}(+= 1)"></span>
                                    @endfor
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row m-3">
                                    <div class="col-12">
                                        {!! $paket_harga->deskripsi !!}
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="card-footer">
                                <div class="button-readmore">
                                    <a class="read-more text-dark text-decoration-none" href="https://api.whatsapp.com/send?phone=6281234566636&amp;text=Halo%20GoSocial%21%0D%0ASaya%20ingin%20memesan%20layanan%20Foto%20Produk%20Katalog" target="_blank" id="pesan_sekarang_katalog">Pesan Sekarang</a>
                                </div>
                            </div> --}}
                        </div>
                        <!-- End Card -->
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</section>

<section class="flat-counter">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title wow fadeInDown">
                    <h2 class="section-45px-montserrat margin-top-15">{{$commercial_photography_section_7['judul']}}</h2>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="60" data-smobile="60"
                    style="height:60px"></div>
            </div>
        </div>
        <div class="row">
            @foreach ($commercial_photography_section_7['konten'] as $item)
                <div class="col-md-4">
                    <a href="{{ asset('images/landingpage_razenstudio/commercial-photography/file/'.$item['file_konten']) }}" class="text-dark text-decoration-none">
                        <div class="counter-box themesflat-counter hover-up wow fadeInUp" data-wow-delay="0.1s">
                            <div class="row">
                                <div class="col-6">
                                    <div class="icon-box">
                                        <div class="content-icon">
                                            <h4 class="section-20px-montserrat font-weight-600 line-height-35 mb-4">{{$item['judul_konten']}}</h4>
                                            <span class="h4">Download</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="number-content section-65px-montserrat">
                                        <img src="{{ asset('images/landingpage_razenstudio/commercial-photography/'.$item['gambar_konten']) }}" class="img-responsive">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="flat-services">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title wow fadeInDown">
                    <h4 class="section-subtitle">{{$commercial_photography_section_8['sub_judul']}}</h4>
                    <h2 class="section-45px-montserrat margin-top-15">{{$commercial_photography_section_8['judul']}}</h2>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="60" data-smobile="60"
                    style="height:60px"></div>
            </div>
            @foreach ($commercial_photography_section_8['konten'] as $item)
                <div class="col-md-4">
                    <div class="services-box">
                        <div class="wraper-effect"></div>
                        <figure class="font-size-icon">
                            <img style="height: 5rem; width:5rem; padding: -3rem;" src="{{ asset('images/landingpage_razenstudio/commercial-photography/'.$item['logo_konten']) }}" alt="SVG">
                        </figure>
                        <div class="services-content">
                            <a href="service-single.html" class="section-22px-montserrat text-dark text-decoration-none">{{$item['judul_konten']}}</a>
                            <p class="services-desc">{{$item['deskripsi_konten']}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="flat-client">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title wow fadeInDown text-center">
                    <h4 class="section-subtitle">{{$commercial_photography_section_9['sub_judul']}}</h4>
                    <h2 class="section-45px-montserrat margin-top-15">{{$commercial_photography_section_9['judul']}}</h2>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="60" data-smobile="60"
                    style="height:60px"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 order-lg-2 mb-7 mb-lg-0">
                <!-- Nav -->
                <ul class="nav nav-box" role="tablist">
                    <li class="nav-item w-100 mx-0 mb-3">
                        <a class="nav-link p-4 active" id="pills-one-code-features-example2-tab" data-toggle="pill" href="#pills-one-code-features-example2" role="tab" aria-controls="pills-one-code-features-example2" aria-selected="false">
                            <div class="media align-items-center align-items-lg-start">
                                <figure class="w-100 max-w-15rem mt-2 mr-4">
                                    <img class="img-fluid" src="https://gosocial.co.id/assets/svg/service/foto-produk/foto-produk-makanan.svg" alt="Foto Produk Makanan">
                                </figure>
                                <div class="media-body ">
                                    <h2 class="mb-0">Foto Produk Makanan</h2>
                                    <div class="d-none d-lg-block mt-2">
                                        <p class="text-body mb-0">Jasa fotografi makanan / food photography.</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>

                    <li class="nav-item w-100 mx-0 mb-3">
                        <a class="nav-link p-4" id="pills-two-code-features-example2-tab" data-toggle="pill" href="#pills-two-code-features-example2" role="tab" aria-controls="pills-two-code-features-example2" aria-selected="false">
                            <div class="media align-items-center align-items-lg-start">
                                <figure class="w-100 max-w-15rem mt-2 mr-4 h-100">
                                    <img class="img-fluid" src="https://gosocial.co.id/assets/svg/service/foto-produk/foto-produk-minuman.svg" alt="Foto Produk Minuman">
                                </figure>
                                <div class="media-body">
                                    <h2 class="mb-0">Foto Produk Minuman</h2>
                                    <div class="d-none d-lg-block mt-2">
                                        <p class="text-body mb-0">Jasa fotografi minuman dalam kemasan maupun luar
                                            kemasan.</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>

                    <li class="nav-item w-100 mx-0">
                        <a class="nav-link p-4" id="pills-three-code-features-example2-tab" data-toggle="pill" href="#pills-three-code-features-example2" role="tab" aria-controls="pills-three-code-features-example2" aria-selected="true">
                            <div class="media align-items-center align-items-lg-start">
                                <figure class="w-100 max-w-15rem mt-2 mr-4">
                                    <img class="img-fluid" src="https://gosocial.co.id/assets/svg/service/foto-produk/foto-produk-baju.svg" alt="Foto Produk Baju">
                                </figure>
                                <div class="media-body">
                                    <h2 class="mb-0">Foto Produk Baju</h2>
                                    <div class="d-none d-lg-block mt-2">
                                        <p class="text-body mb-0">Jasa foto produk pakaian seperti kaos, baju, kemeja,
                                            dsb.</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- End Nav -->
            </div>
            @php
                $item_1 = [];
                $gambar_item_1 = [];
                $item_2 = [];
                $gambar_item_2 = [];
                $item_3 = [];
                $gambar_item_3 = [];
            @endphp
            @foreach ($commercial_photography_section_9['item'] as $item)
                @php
                    if($item['item'] == 'foto_produk_makanan')
                    {
                        $item_1 = [
                            'item' => $item['item'],
                            'judul' => $item['judul'],
                            'deskripsi' => $item['deskripsi'],
                        ];
                        $gambar_item_1 = $item['gambar'];
                    }

                    if($item['item'] == 'foto_produk_minuman')
                    {
                        $item_2 = [
                            'item' => $item['item'],
                            'judul' => $item['judul'],
                            'deskripsi' => $item['deskripsi'],
                        ];
                        $gambar_item_2 = $item['gambar'];
                    }

                    if($item['item'] == 'foto_produk_baju')
                    {
                        $item_3 = [
                            'item' => $item['item'],
                            'judul' => $item['judul'],
                            'deskripsi' => $item['deskripsi'],
                        ];

                        $gambar_item_3 = $item['gambar'];
                    }
                @endphp
            @endforeach
            <div class="col-lg-8 order-lg-1 align-self-lg-end">
                <!-- Tab Content -->
                <div class="tab-content pr-lg-4">
                    <div class="tab-pane fade active show" id="pills-one-code-features-example2" role="tabpanel" aria-labelledby="pills-one-code-features-example2-tab">
                        <div class="container">
                            <div class="row mx-n2">
                                @for ($i = 0; $i < count($gambar_item_1); $i++)
                                    <div class="col-sm-6 col-md-6 px-2 mb-3 mb-md-0">
                                        <div class="card-frame rounded-lg img-fluid bg-img-hero" style="background-image: url({{asset('images/landingpage_razenstudio/commercial-photography/'.$gambar_item_1[$i])}}); min-height: 20rem;"></div>
                                    </div>
                                @endfor
                            </div>

                            <div class="mt-5 mt-md-9">
                                <h1>{{$item_1['judul']}}</h1>
                                <p>{{$item_1['deskripsi']}}</p>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="pills-two-code-features-example2" role="tabpanel" aria-labelledby="pills-two-code-features-example2-tab">
                        <div class="container">
                            <div class="row mx-n2">
                                @for ($i = 0; $i < count($gambar_item_2); $i++)
                                    <div class="col-sm-6 col-md-6 px-2 mb-3 mb-md-0">
                                        <div class="card-frame rounded-lg img-fluid bg-img-hero" style="background-image: url({{asset('images/landingpage_razenstudio/commercial-photography/'.$gambar_item_2[$i])}}); min-height: 20rem;"></div>
                                    </div>
                                @endfor
                            </div>

                            <div class="mt-5 mt-md-9">
                                <h1>{{$item_2['judul']}}</h5>
                                <p>{{$item_2['deskripsi']}}</p>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="pills-three-code-features-example2" role="tabpanel" aria-labelledby="pills-three-code-features-example2-tab">
                        <div class="container">
                            <div class="row mx-n2">
                                @for ($i = 0; $i < count($gambar_item_3); $i++)
                                    <div class="col-sm-6 col-md-6 px-2 mb-3 mb-md-0">
                                        <div class="card-frame rounded-lg img-fluid bg-img-hero" style="background-image: url({{asset('images/landingpage_razenstudio/commercial-photography/'.$gambar_item_3[$i])}}); min-height: 20rem;"></div>
                                    </div>
                                @endfor
                            </div>

                            <div class="mt-5 mt-md-9">
                                <h1>{{$item_3['judul']}}</h5>
                                <p>{{$item_3['deskripsi']}}</p>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- End Tab Content -->
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
                    <h4 class="section-subtitle">{{$commercial_photography_section_10['sub_judul']}}</h4>
                    <h2 class="section-45px-montserrat margin-top-15">{{$commercial_photography_section_10['judul']}}</h2>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="60" data-smobile="60"
                    style="height:60px"></div>
            </div>
            <div class="col-md-4">
                <div class="services-box">
                    <div class="wraper-effect"></div>
                    <span class="icon-services icon-development1 font-size-icon"></span>
                    <div class="services-content">
                        <a href="service-single.html" class="section-22px-montserrat text-dark text-decoration-none">Instagram</a>
                        <p class="services-desc">Embed Foto Instagram</p>
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
                                        <img src="{{ asset('images/landingpage_razenstudio/commercial-photography/testimoni/'.$testimoni->gambar) }}"
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
                    <h4 class="section-subtitle">{{$commercial_photography_section_11['sub_judul']}}</h4>
                    <h2 class="section-45px-montserrat margin-top-15">{{$commercial_photography_section_11['judul']}}</h2>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="60" data-smobile="60"
                    style="height:60px"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div id="basicsAccordion-left">
                    @foreach ($commercial_photography_section_11['konten'] as $item)
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://gosocial.co.id/assets/js/pages/commercial-photo.js?v.0601"></script>
<script src="https://gosocial.co.id/assets/js/pages/commercial-photo-modal.js?v.0601"></script>
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
