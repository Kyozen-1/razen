@php
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioWhyRazenStudio;
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioBrand;
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioOfficialPartner;
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioReview;
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioHome;

    $home = LandingpageRazenstudioHome::first();

    $why_razen_studio = LandingpageRazenstudioWhyRazenStudio::first();
    if ($why_razen_studio) {
        $why_razen_studio_section_1 = json_decode($why_razen_studio->section_1, true);
        $why_razen_studio_section_2 = json_decode($why_razen_studio->section_2, true);
        $why_razen_studio_section_3 = json_decode($why_razen_studio->section_3, true);
        $why_razen_studio_section_4 = json_decode($why_razen_studio->section_4, true);
        $why_razen_studio_section_5 = json_decode($why_razen_studio->section_5, true);
        $why_razen_studio_section_6 = json_decode($why_razen_studio->section_6, true);
    } else {
        $why_razen_studio_section_1 = [];
        $why_razen_studio_section_2 = [];
        $why_razen_studio_section_3 = [];
        $why_razen_studio_section_4 = [];
        $why_razen_studio_section_5 = [];
        $why_razen_studio_section_6 = [];
    }

    $reviews = LandingpageRazenstudioReview::latest()->get();
    $brands= LandingpageRazenstudioBrand::all();
    $partners = LandingpageRazenstudioOfficialPartner::all();
@endphp

@extends('landing-page-razen-studio.layouts.app')
@section('title', $why_razen_studio_section_1['title'])

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
                <h2 class="section-title-page text-white">{{$why_razen_studio_section_1['judul']}}</h2>
                <ul class="breadcrumbs-inner list-center display-flex">
                    <li><a class="section-16px-regular font-weight-500" href="{{ route('home') }}">Home</a></li>
                    <li>
                        <h4 class="section-16px-regular font-weight-500 text-white">{{$why_razen_studio_section_1['judul']}}</h4>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="flat-about-2nd">
    <div class="container space-2 space-lg-3">
        <div class="row align-items-lg-center">
            <div class="col-lg-5 order-lg-2 mb-7 mb-lg-0">
                <div class="mb-5">
                    {!!$why_razen_studio_section_2['deskripsi']!!}
                </div>
                <!-- End Info -->
            </div>

            <div class="col-lg-7 order-lg-1">
                <!-- Card Block -->
                <div class="pr-lg-4 aos-init aos-animate" data-aos="fade-up">
                <div class="card shadow-none bg-soft-primary text-indigo text-center w-lg-75 overflow-hidden pt-9 px-5 mx-lg-auto">
                    <div class="px-5 mb-5">
                    <h3>{{$why_razen_studio_section_2['judul']}}</h3>
                    </div>

                    <!-- Device Mockup -->
                    <div class="device device-half-iphone-x w-85 mx-auto">
                    <img class="device-half-iphone-x-frame" src="https://gosocial.co.id/assets/svg/components/half-iphone-x.svg" alt="Iphone X Mockup">
                    <img class="device-half-iphone-x-screen" src="{{ asset('images/landingpage_razenstudio/why-razen-studio/'.$why_razen_studio_section_2['gambar']) }}" alt="Login Apps GoSocial">
                    </div>
                    <!-- End Device Mockup -->
                </div>
                </div>
                <!-- End Card Block -->
            </div>
        </div>
    </div>
</section>

<section class="flat-services">
    <div class="w-lg-85 mx-lg-auto">
        <div class="card overflow-hidden p-5">
            <div class="row justify-content-md-start align-items-md-center text-center text-md-left">
            <div class="col-md-8 col-lg-5 offset-lg-3 mb-3 mb-md-0">
                <h3 class="font-size-3 text-indigo mb-0">{{$why_razen_studio_section_3['judul']}}</h3>
            </div>

            <div class="col-md-4 text-md-right">
                <a class="btn btn-danger transition-3d-hover font-size-3" href="{{ route('how-it-works') }}">How it Works</a>
            </div>
            </div>

            <!-- SVG Component -->
            <figure class="w-35 position-absolute top-0 left-0 mt-n11 ml-n11">
                <img class="img-fluid" src="https://gosocial.co.id/assets/svg/components/half-circle-2.svg" alt="Circle Component">
            </figure>
            <!-- End SVG Component -->
        </div>
    </div>
</section>

<section class="flat-services">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title wow fadeInDown">
                    <h2 class="section-45px-montserrat margin-top-15">{{$why_razen_studio_section_4['sub_judul']}}</h2>
                    <p class="text-muted">{{$why_razen_studio_section_4['judul']}}</p>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="60" data-smobile="60"
                    style="height:60px"></div>
            </div>
        </div>
        <div class="table-responsive-lg w-lg-75 mx-lg-auto">
            <table class="table table-striped table-borderless">
                <thead class="text-center">
                    <tr>
                        <th scope="col" class="w-40"></th>
                        <th scope="col" class="w-20 align-middle">
                            <span class="text-dark h2">In-House</span>
                            <small class="d-block text-body h5">Mengelola tim internal sendiri</small>
                        </th>
                        <th scope="col" class="w-20 border-left border-right align-middle">
                            <span class="text-dark h2">Freelance / Agency</span>
                            <small class="d-block text-body h5">Outsource ke freelancer / agency lain</small>
                        </th>
                        <th scope="col" class="w-20 align-middle">
                            <span class="text-dark h2">Digital Agency Hub</span>
                            <small class="d-block text-body h5">Bekerjasama dengan<span class="badge badge-primary badge-pill ml-1">GoSocial</span></small>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-top border-bottom">
                        <th scope="row" class="bg-white text-dark pt-5 pb-3 px-4 mb-0 font-size-2">Biaya</th>
                        <td class="bg-white"></td>
                        <td class="bg-white border-left border-right"></td>
                        <td class="bg-white"></td>
                    </tr>
                    <tr>
                        <th scope="row" class="font-size-1 py-3 px-4 font-size-2">Fixed Cost</th>
                        <td class="text-center p-3">
                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger">
                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                            </svg>
                        </td>
                        <td class="text-center border-left border-right p-3">
                            <span class="badge badge-soft-primary badge-pill font-weight-normal py-2 px-3 font-size-1">Tidak perlu</span>
                        </td>
                        <td class="text-center p-3">
                            <span class="badge badge-soft-primary badge-pill font-weight-normal py-2 px-3 font-size-1">Tidak perlu</span>
                        </td>
                    </tr>
                    <tr id="scrol-more">
                        <th scope="row" class="font-size-1 py-3 px-4 font-size-2">Biaya Rekrutmen &amp; Training</th>
                        <td class="text-center text-body p-3">
                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger">
                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                            </svg>
                        </td>
                        <td class="text-center border-left border-right p-3">
                            <span class="badge badge-soft-primary badge-pill font-weight-normal py-2 px-3 font-size-1">Tidak perlu</span>
                        </td>
                        <td class="text-center p-3">
                            <span class="badge badge-soft-primary badge-pill font-weight-normal py-2 px-3 font-size-1">Tidak perlu</span>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="font-size-1 py-3 px-4 align-middle font-size-2 align-middle">Harga</th>
                        <td class="text-center text-body p-3">
                            <span class="badge badge-soft-primary badge-pill font-weight-normal py-2 px-3"></span>
                        </td>
                        <td class="text-center text-body border-left border-right py-3 px-4 align-middle align-middle">
                            <span class="badge badge-soft-danger badge-pill font-weight-normal py-2 px-3 font-size-1">Tidak ada standard
                            </span>
                        </td>
                        <td class="text-center p-3 align-middle align-middle">
                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success mr-2">
                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                            </svg>
                            <p class="small font-size-2">sudah disesuaikan dengan level bisnis</p>
                        </td>
                    </tr>
                    <tr class="border-bottom">
                        <th scope="row" class="bg-white text-dark pt-5 pb-3 px-4 mb-0 font-size-2">Keuntungan Bagi Bisnis</th>
                        <td class="bg-white"></td>
                        <td class="bg-white border-left border-right"></td>
                        <td class="bg-white"></td>
                    </tr>
                    <tr>
                        <th scope="row" class="font-size-1 py-3 px-4 font-size-2">Efisiensi Biaya Tim</th>
                        <td class="text-center p-3">
                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger">
                                <path fill="currentColor" d="M12,2C17.53,2 22,6.47 22,12C22,17.53 17.53,22 12,22C6.47,22 2,17.53 2,12C2,6.47 6.47,2 12,2M15.59,7L12,10.59L8.41,7L7,8.41L10.59,12L7,15.59L8.41,17L12,13.41L15.59,17L17,15.59L13.41,12L17,8.41L15.59,7Z" />
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
                        <th scope="row" class="font-size-1 py-3 px-4 align-middle font-size-2">Bisnis bisa fokus pada kompetensi utamanya</th>
                        <td class="text-center text-body p-3 align-middle">
                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger">
                                <path fill="currentColor" d="M12,2C17.53,2 22,6.47 22,12C22,17.53 17.53,22 12,22C6.47,22 2,17.53 2,12C2,6.47 6.47,2 12,2M15.59,7L12,10.59L8.41,7L7,8.41L10.59,12L7,15.59L8.41,17L12,13.41L15.59,17L17,15.59L13.41,12L17,8.41L15.59,7Z" />
                            </svg>
                        </td>
                        <td class="text-center border-left border-right p-3 align-middle">
                            <span class="badge badge-soft-danger badge-pill font-weight-normal py-2 px-3 font-size-1">Perlu ada yang mengatur
                            </span>
                        </td>
                        <td class="text-center p-3 align-middle font-size-2">
                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success mr-2">
                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                            </svg>
                            <p class="small font-size-2">kami akan menjadi konsultan sekaligus partner eksekusi</p>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="font-size-1 py-3 px-4 align-middle font-size-2">Kualitas Hasil Pekerjaan</th>
                        <td class="text-center text-body p-3">
                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger mr-2">
                                <path fill="currentColor" d="M12,2C17.53,2 22,6.47 22,12C22,17.53 17.53,22 12,22C6.47,22 2,17.53 2,12C2,6.47 6.47,2 12,2M15.59,7L12,10.59L8.41,7L7,8.41L10.59,12L7,15.59L8.41,17L12,13.41L15.59,17L17,15.59L13.41,12L17,8.41L15.59,7Z" />
                            </svg>
                            <p class="small font-size-2">Semakin profesional maka fixed cost semakin besar</p>
                        </td>
                        <td class="text-center border-left border-right p-3">
                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger mr-2">
                                <path fill="currentColor" d="M12,2C17.53,2 22,6.47 22,12C22,17.53 17.53,22 12,22C6.47,22 2,17.53 2,12C2,6.47 6.47,2 12,2M15.59,7L12,10.59L8.41,7L7,8.41L10.59,12L7,15.59L8.41,17L12,13.41L15.59,17L17,15.59L13.41,12L17,8.41L15.59,7Z" />
                            </svg>
                            <p class="small font-size-2">Sulit mengetahui apakah hasil dengan harga sebanding</p>
                        </td>
                        <td class="text-center p-3">
                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success mr-2">
                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                            </svg>
                            <p class="small font-size-2">Proses dan hasil sudah distandarisasi</p>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="font-size-1 py-3 px-4 align-middle font-size-2">Menguasai tools &amp; teknologi terkini dalam Digital Marketing</th>
                        <td class="text-center text-body p-3 align-middle">
                            <span class="badge badge-soft-danger badge-pill font-weight-normal py-2 px-3 font-size-1">Belum tentu
                            </span>
                        </td>
                        <td class="text-center border-left border-right p-3 align-middle">
                            <span class="badge badge-soft-danger badge-pill font-weight-normal py-2 px-3 font-size-1">Belum tentu
                            </span>
                        </td>
                        <td class="text-center p-3 align-middle">
                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success mr-2">
                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                            </svg>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="font-size-1 py-3 px-4 align-middle font-size-2">Dukungan aplikasi untuk melihat dan manajemen proyek</th>
                        <td class="text-center text-body p-3">
                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger mr-2">
                                <path fill="currentColor" d="M12,2C17.53,2 22,6.47 22,12C22,17.53 17.53,22 12,22C6.47,22 2,17.53 2,12C2,6.47 6.47,2 12,2M15.59,7L12,10.59L8.41,7L7,8.41L10.59,12L7,15.59L8.41,17L12,13.41L15.59,17L17,15.59L13.41,12L17,8.41L15.59,7Z" />
                            </svg>
                        </td>
                        <td class="text-center border-left border-right p-3">
                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-danger mr-2">
                                <path fill="currentColor" d="M12,2C17.53,2 22,6.47 22,12C22,17.53 17.53,22 12,22C6.47,22 2,17.53 2,12C2,6.47 6.47,2 12,2M15.59,7L12,10.59L8.41,7L7,8.41L10.59,12L7,15.59L8.41,17L12,13.41L15.59,17L17,15.59L13.41,12L17,8.41L15.59,7Z" />
                            </svg>
                        </td>
                        <td class="text-center p-3">
                            <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-success mr-2">
                                <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                            </svg>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="bg-white p-3"></th>
                        <td class="bg-white text-center p-3">
                        </td>
                        <td class="bg-white text-center border-left border-right p-3">
                        </td>
                        <td class="bg-white text-center p-3">
                            <a href="https://gosocial.co.id/contact" target="_blank" type="button" class="btn btn-sm btn-primary text-nowrap transition-3d-hover font-size-2">Contact Us</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<section class="flat-services">
    <div class="position-relative bg-danger overflow-hidden">
        <div class="container space-top-2 space-top-lg-3 position-relative z-index-2">
            <!-- Title -->
            <div class="w-md-80 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
                <h1 class="text-white">{{$why_razen_studio_section_5['sub_judul']}}</h1>
                <h3 class="text-white">{{$why_razen_studio_section_5['judul']}}</h3>
            </div>
            <!-- End Title -->

            <!-- Icon Blocks -->
            <div class="w-lg-80 mx-lg-auto mb-11">
                <div class="row mb-9">
                    @foreach ($why_razen_studio_section_5['konten'] as $item)
                        <div class="col-6 col-md-4 mb-7">
                            <!-- Icon Block -->
                            <span class="d-block text-white font-size-2 mb-3">
                                <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                                </svg>
                            </span>
                            <h4 class="text-white font-size-2 mb-3">{{$item['judul_konten']}}</h4>
                            <p class="text-white-70">{{$item['deskripsi_konten']}}</p>
                            <!-- End Icon Block -->
                        </div>
                    @endforeach
                </div>

                <!-- Buttons -->
                <div class="text-center">
                    <div class="mb-3">
                        <a class="btn btn-sm btn-light btn-wide transition-3d-hover font-size-2" href="{{ route('home') }}">Lihat Layanan</a>
                        <small class="d-block d-sm-inline-block text-white-70 my-3 my-sm-0 mx-sm-3 font-size-1">atau</small>
                        <a class="btn btn-sm btn-indigo btn-wide transition-3d-hover font-size-2" href="{{ route('contact') }}">Konsultasi Sekarang</a>
                    </div>
                    <p class="small text-white-70">*Gratis konsultasi terkait permasalahan Digital Marketing.</p>
                </div>
                <!-- End Buttons -->
            </div>
                <!-- End Icon Blocks -->

            <div class="w-85 w-md-75 w-lg-65 text-center mx-auto">
                <img class="img-fluid" src="https://gosocial.co.id/assets/svg/illustrations/ai-creation.svg" alt="AI Creation">
            </div>
        </div>

        <!-- SVG Background Shape -->
        <figure class="w-35 position-absolute top-0 right-0">
            <div class="mt-n11 mr-n11">
                <img class="img-fluid" src="https://gosocial.co.id/assets/svg/components/half-circle-3.svg" alt="Half Circle 3 Component">
            </div>
        </figure>
        <figure class="w-25 position-absolute bottom-0 left-0">
            <div class="mb-n11 ml-n11">
                <img class="img-fluid" src="https://gosocial.co.id/assets/svg/components/half-circle-2.svg" alt="Half Circle 2 Component">
            </div>
        </figure>
        <!-- End SVG Background Shape -->
    </div>
    <div class="container space-2 space-lg-3">
        <!-- Title -->
        <div class="w-md-80 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
            <h2>{{$why_razen_studio_section_6['sub_judul']}}</h2>
            <p>{{$why_razen_studio_section_6['judul']}}</p>
        </div>
        <!-- End Title -->
        @php
            $tracking_project = [];
            $easy_collaboration = [];
            $tools_integrations = [];
            foreach ($why_razen_studio_section_6['item'] as $value) {
                if($value['item'] == 'tracking_project')
                {
                    $tracking_project = [
                        'item' => $value['item'],
                        'gambar' => $value['gambar']
                    ];
                }
                if($value['item'] == 'easy_collaboration')
                {
                    $easy_collaboration = [
                        'item' => $value['item'],
                        'gambar' => $value['gambar']
                    ];
                }
                if($value['item'] == 'tools_integrations')
                {
                    $tools_integrations = [
                        'item' => $value['item'],
                        'gambar' => $value['gambar']
                    ];
                }
            }
        @endphp
        <div class="row">
            <div class="col-lg-5 order-lg-2 mb-7 mb-lg-0">
                <!-- Nav -->
                <ul class="nav nav-box" role="tablist">
                    <li class="nav-item w-100 mx-0 mb-3">
                        <a class="nav-link p-4 transition-3d-hover" id="pills-one-code-features-example2-tab" data-toggle="pill" href="#pills-one-code-features-example2" role="tab" aria-controls="pills-one-code-features-example2" aria-selected="false">
                            <div class="media align-items-center align-items-lg-start">
                                <figure class="mt-2 mr-4">
                                    <img style="width:100%; height: 7rem;" src="https://gosocial.co.id/assets/svg/icons/icon-11.svg" alt="Tracking Project">
                                </figure>
                                <div class="media-body">
                                    <h3 class="h4 mb-0">Tracking Project</h3>
                                    <div class="d-none d-lg-block mt-2">
                                        <p class="text-body mb-0">Klien dapat melihat sejauh mana eksekusi dan perkembangan project.</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>

                    <li class="nav-item w-100 mx-0 mb-3">
                        <a class="nav-link p-4 transition-3d-hover" id="pills-two-code-features-example2-tab" data-toggle="pill" href="#pills-two-code-features-example2" role="tab" aria-controls="pills-two-code-features-example2" aria-selected="false">
                            <div class="media align-items-center align-items-lg-start">
                                <figure class="mt-2 mr-4">
                                    <img style="width:100%; height: 7rem;" src="https://gosocial.co.id/assets/svg/icons/icon-29.svg" alt="SVG">
                                </figure>
                                <div class="media-body">
                                    <h3 class="h4 mb-0">Easy Collaboration</h3>
                                    <div class="d-none d-lg-block mt-2">
                                        <p class="text-body mb-0">Memudahkan kolaborasi antar tim dan stakeholder yang terlibat dalam project.</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>

                    <li class="nav-item w-100 mx-0">
                        <a class="nav-link p-4 transition-3d-hover active" id="pills-three-code-features-example2-tab" data-toggle="pill" href="#pills-three-code-features-example2" role="tab" aria-controls="pills-three-code-features-example2" aria-selected="true">
                            <div class="media align-items-center align-items-lg-start">
                                <figure class="mt-2 mr-4">
                                    <img style="width:100%; height: 7rem;" src="https://gosocial.co.id/assets/svg/icons/icon-51.svg" alt="Tools Integration">
                                </figure>
                                <div class="media-body">
                                    <h3 class="h4 mb-0">Tools Integration</h3>
                                    <div class="d-none d-lg-block mt-2">
                                        <p class="text-body mb-0">Terintegrasi dengan berbagai tools yang dapat meningkatkan produktivitas.</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- End Nav -->
            </div>

            <div class="col-lg-7 order-lg-1 align-self-lg-end">
                <!-- Tab Content -->
                <div class="tab-content pr-lg-4">
                    <div class="tab-pane fade" id="pills-one-code-features-example2" role="tabpanel" aria-labelledby="pills-one-code-features-example2-tab">
                        <!-- Device Mockup -->
                        <div class="device">
                            <img class="img-fluid" src="{{ asset('images/landingpage_razenstudio/why-razen-studio/'.$tracking_project['gambar']) }}" alt="Platform GoSocial">
                        </div>
                        <!-- End Device Mockup -->
                    </div>

                    <div class="tab-pane fade" id="pills-two-code-features-example2" role="tabpanel" aria-labelledby="pills-two-code-features-example2-tab">
                        <div class="device">
                            <img class="img-fluid" src="{{ asset('images/landingpage_razenstudio/why-razen-studio/'.$easy_collaboration['gambar']) }}" alt="Platforem GoSocial 2">
                        </div>
                    </div>

                    <div class="tab-pane fade active show" id="pills-three-code-features-example2" role="tabpanel" aria-labelledby="pills-three-code-features-example2-tab">
                        <!-- Device Mockup -->
                        <div class="device-wrapper">
                            <div class="device">
                                <img class="img-fluid" src="{{ asset('images/landingpage_razenstudio/why-razen-studio/'.$tools_integrations['gambar']) }}" alt="Platform GoSocial 3">
                            </div>
                        </div>
                        <!-- End Device Mockup -->
                    </div>
                </div>
                <!-- End Tab Content -->
            </div>
        </div>
    </div>
</section>

<section class="flat-services">
    <div class="bg-danger">
        <div class="container space-2">
            <div class="row justify-content-lg-between align-items-lg-center text-center text-lg-left">
                <div class="col-lg-5 mb-5 mb-lg-0">
                    <h2 class="text-white mb-0">Lihat berbagai hasil pekerjaan yang telah kami lakukan sebelumnya</h2>
                </div>

                <div class="col-lg-5 text-lg-right">
                    <a class="btn btn-light btn-wide btn-pill transition-3d-hover mx-1 mb-2" href="{{ route('portofolio') }}">Lihat Portofolio</a>
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
@endsection
