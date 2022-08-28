@extends('landing-page-razen-studio.layouts.app')
@section('title', 'Razen Studio | Commercial Photography')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/steps.css') }}">
    <link rel="stylesheet" href="https://gosocial.co.id/assets/css/pages/commercial-photo.css?v.2112">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://gosocial.co.id/assets/vendor/fontawesome/css/all.min.css">
    <style>
        .order-lg-2 {
            -ms-flex-order: 2;
            order: 2;
        }
        .nav-box .nav-link {
            color: #1e2022;
            border-radius: 0.3125rem;
        }
        .nav-box .nav-link.active {
            color: #377dff;
            background-color: #fff;
            box-shadow: 0 12px 15px rgba(140, 152, 164, 0.1);
        }
        .max-w-6rem {
            max-width: 2.5rem;
        }
        .w-100 {
            width: 100% !important;
        }
        .img-fluid {
            max-width: 100%;
            height: auto;
        }
        .media {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: start;
            align-items: flex-start;
        }

        .media-body {
            -ms-flex: 1;
            flex: 1;
        }
        .align-items-lg-start {
            -ms-flex-align: start !important;
            align-items: flex-start !important;
        }

        .card-frame {
            border: 0.0625rem solid rgba(231, 234, 243, 0.7);
            box-shadow: none;
            transition: 0.3s;
        }

        .card-frame-highlighted,
        .card-frame:hover {
            border-color: rgba(55, 125, 255, 0.7);
        }

        .bg-img-hero {
            background-size: cover;
            background-repeat: no-repeat;
            background-position: top center;
        }

        .bg-img-hero-bottom {
            background-size: cover;
            background-repeat: no-repeat;
            background-position: bottom center;
        }

        .bg-img-hero-center {
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
        }

        .bg-img-hero-fixed {
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            background-attachment: fixed;
        }

        .rounded-lg {
            border-radius: 0.75rem !important;
        }

        .rounded-lg-pseudo {
            border-radius: 0.75rem;
        }

        .rounded-lg-pseudo::after,
        .rounded-lg-pseudo::before {
            border-radius: 0.75rem;
        }

        .mb-md-0,
        .my-md-0 {
            margin-bottom: 0 !important;
        }

        .mr-n2,
        .mx-n2 {
            margin-right: -0.5rem !important;
        }

        .mb-n2,
        .my-n2 {
            margin-bottom: -0.5rem !important;
        }

        .ml-n2,
        .mx-n2 {
            margin-left: -0.5rem !important;
        }
        .d-md-block {
            display: block !important;
        }
        .d-none {
            display: none !important;
        }

        .custom-control-input.is-valid~.custom-control-label,
        .was-validated .custom-control-input:valid~.custom-control-label {
            color: #00c9a7;
        }

        .custom-control-input.is-valid~.custom-control-label::before,
        .was-validated .custom-control-input:valid~.custom-control-label::before {
            border-color: #00c9a7;
        }

        .custom-control-input.is-valid:checked~.custom-control-label::before,
        .was-validated .custom-control-input:valid:checked~.custom-control-label::before {
            border-color: #00fcd1;
            background-color: #00fcd1;
        }

        .custom-control-input.is-valid:focus~.custom-control-label::before,
        .was-validated .custom-control-input:valid:focus~.custom-control-label::before {
            box-shadow: 0 0 0 0.2rem rgba(0, 201, 167, 0.25);
        }

        .custom-control-input.is-valid:focus:not(:checked)~.custom-control-label::before,
        .was-validated .custom-control-input:valid:focus:not(:checked)~.custom-control-label::before {
            border-color: #00c9a7;
        }

        /* .custom-control {
            position: relative;
            z-index: 1;
            display: block;
            min-height: 1.6rem;
            padding-left: 1.5rem;
            -webkit-print-color-adjust: exact;
            color-adjust: exact;
        } */

        .custom-control-inline {
            display: -ms-inline-flexbox;
            display: inline-flex;
            margin-right: 1rem;
        }

        .custom-control-input {
            position: absolute;
            left: 0;
            z-index: -1;
            width: 1rem;
            height: 1.3rem;
            opacity: 0;
        }

        .custom-control-input:checked~.custom-control-label::before {
            color: #fff;
            border-color: #377dff;
            background-color: #377dff;
        }

        .custom-control-input:focus~.custom-control-label::before {
            box-shadow: 0 0 10px rgba(55, 125, 255, 0.1);
        }

        .custom-control-input:focus:not(:checked)~.custom-control-label::before {
            border-color: rgba(55, 125, 255, 0.4);
        }

        .custom-control-input:not(:disabled):active~.custom-control-label::before {
            color: #fff;
            background-color: #eaf1ff;
            border-color: #eaf1ff;
        }

        .custom-control-input:disabled~.custom-control-label,
        .custom-control-input[disabled]~.custom-control-label {
            color: #8c98a4;
        }

        .custom-control-input:disabled~.custom-control-label::before,
        .custom-control-input[disabled]~.custom-control-label::before {
            background-color: #f8fafd;
        }

        .custom-control-label {
            position: relative;
            margin-bottom: 0;
            vertical-align: top;
        }

        .custom-control-label::before {
            position: absolute;
            top: 0.3rem;
            left: -1.5rem;
            display: block;
            width: 1rem;
            height: 1rem;
            pointer-events: none;
            content: "";
            background-color: #fff;
            border: #d6dbeb solid 0.0625rem;
        }

        .custom-control-label::after {
            position: absolute;
            top: 0.3rem;
            left: -1.5rem;
            display: block;
            width: 1rem;
            height: 1rem;
            content: "";
            background: no-repeat 50%/50% 50%;
        }

        .custom-checkbox .custom-control-label::before {
            border-radius: 0.25rem;
        }

        .custom-checkbox .custom-control-input:checked~.custom-control-label::after {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26l2.974 2.99L8 2.193z'/%3e%3c/svg%3e");
        }

        .custom-checkbox .custom-control-input:indeterminate~.custom-control-label::before {
            border-color: #377dff;
            background-color: #377dff;
        }

        .custom-checkbox .custom-control-input:indeterminate~.custom-control-label::after {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='4' height='4' viewBox='0 0 4 4'%3e%3cpath stroke='%23fff' d='M0 2h4'/%3e%3c/svg%3e");
        }

        .custom-checkbox .custom-control-input:disabled:checked~.custom-control-label::before {
            background-color: rgba(55, 125, 255, 0.5);
        }

        .custom-checkbox .custom-control-input:disabled:indeterminate~.custom-control-label::before {
            background-color: rgba(55, 125, 255, 0.5);
        }

        .custom-radio .custom-control-label::before {
            border-radius: 50%;
        }

        .custom-radio .custom-control-input:checked~.custom-control-label::after {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23fff'/%3e%3c/svg%3e");
        }

        .custom-radio .custom-control-input:disabled:checked~.custom-control-label::before {
            background-color: rgba(55, 125, 255, 0.5);
        }

        .custom-switch {
            padding-left: 2.25rem;
        }

        .custom-switch .custom-control-label::before {
            left: -2.25rem;
            width: 1.75rem;
            pointer-events: all;
            border-radius: 0.5rem;
        }

        .custom-switch .custom-control-label::after {
            top: 0.425rem;
            left: -2.125rem;
            width: 0.75rem;
            height: 0.75rem;
            background-color: #d6dbeb;
            border-radius: 0.5rem;
            transition: background-color 0.15s ease-in-out,
                border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out,
                -webkit-transform 0.15s ease-in-out;
            transition: transform 0.15s ease-in-out, background-color 0.15s ease-in-out,
                border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            transition: transform 0.15s ease-in-out, background-color 0.15s ease-in-out,
                border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out,
                -webkit-transform 0.15s ease-in-out;
        }

        @media (prefers-reduced-motion: reduce) {
            .custom-switch .custom-control-label::after {
                transition: none;
            }
        }

        .custom-switch .custom-control-input:checked~.custom-control-label::after {
            background-color: #fff;
            -webkit-transform: translateX(0.75rem);
            transform: translateX(0.75rem);
        }

        .custom-switch .custom-control-input:disabled:checked~.custom-control-label::before {
            background-color: rgba(55, 125, 255, 0.5);
        }

        .custom-checkbox .custom-control-input:disabled:checked~.custom-control-label::before {
            border-color: rgba(55, 125, 255, 0);
        }

        .custom-control-label,
        .custom-select {
            cursor: pointer;
        }

        .form-control .custom-control-label {
            width: 100%;
        }
        .custom-control-input:active~.custom-control-label::before,
        .custom-control-input:checked~.custom-control-label::before,
        .custom-control-input:focus~.custom-control-label::before {
            box-shadow: 0 0 0 0 transparent;
        }
        .custom-control-label::before,
        .custom-file-label,
        .custom-select {
            transition: background-color 0.15s ease-in-out,
                border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        @media (prefers-reduced-motion: reduce) {

            .custom-control-label::before,
            .custom-file-label,
            .custom-select {
                transition: none;
            }
        }
        .collapse:not(.show) {
            display: none;
        }
        .card-btn.collapsed .card-btn-toggle-default {
            display: block;
        }

        .card-btn.collapsed .card-btn-toggle-active {
            display: none;
        }
        .step-item.collapse:not(.show) {
            display: none;
        }

        .card-collapse {
            padding: 0;
            transition: 0.3s ease-in-out;
        }

        .card-collapse:hover {
            background-color: #f8fafd;
        }

        .card-collapse .card-body {
            color: #677788;
        }
        .card-btn-toggle {
            display: inline-block;
            color: #377dff;
        }

        .card-btn-toggle-default {
            display: none;
        }

        .card-btn-toggle-active {
            display: block;
        }

        .card-btn.collapsed .card-btn-toggle-default {
            display: block;
        }

        .card-btn.collapsed .card-btn-toggle-active {
            display: none;
        }

        .card>.card-header+.list-group,
        .card>.list-group+.card-footer {
            border-top: 0;
        }
        .card-header {
            padding: 1.5rem 1.5rem;
            margin-bottom: 0;
            background-color: #fff;
            border-bottom: 0.0625rem solid rgba(231, 234, 243, 0.7);
        }

        .card-header:first-child {
            border-radius: 0.75rem 0.75rem 0 0;
        }

        .card-header-tabs {
            margin-right: -0.75rem;
            margin-bottom: -1.5rem;
            margin-left: -0.75rem;
            border-bottom: 0;
        }

        .card-header-pills {
            margin-right: -0.75rem;
            margin-left: -0.75rem;
        }

        .card-group>.card:not(:last-child) .card-header,
        .card-group>.card:not(:last-child) .card-img-top {
            border-top-right-radius: 0;
        }

        .card-group>.card:not(:first-child) .card-header,
        .card-group>.card:not(:first-child) .card-img-top {
            border-top-left-radius: 0;
        }

        .accordion>.card>.card-header {
            border-radius: 0;
            margin-bottom: -0.0625rem;
        }

        .card-header {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: row;
            flex-direction: row;
            -ms-flex-align: center;
            align-items: center;
            -ms-flex-pack: justify;
            justify-content: space-between;
            padding-top: 1rem;
            padding-bottom: 1rem;
        }

        .card-header-title {
            margin-bottom: 0;
        }

        .card-no-gutters>.card-body,
        .card-no-gutters>.card-header {
            padding-right: 0;
            padding-left: 0;
        }

        .card-group-sm-break>.card:first-child .card-header,
        .card-group-sm-break>.card:first-child .card-img-top {
            border-top-left-radius: 0.75rem;
            border-top-right-radius: 0.75rem;
        }

        .card-group-sm-break>.card:last-child .card-header,
        .card-group-sm-break>.card:last-child .card-img-top {
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }

        .card-group-md-break>.card:first-child .card-header,
        .card-group-md-break>.card:first-child .card-img-top {
            border-top-left-radius: 0.75rem;
            border-top-right-radius: 0.75rem;
        }

        .card-group-md-break>.card:last-child .card-header,
        .card-group-md-break>.card:last-child .card-img-top {
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }

        .card-group-lg-break>.card:first-child .card-header,
        .card-group-lg-break>.card:first-child .card-img-top {
            border-top-left-radius: 0.75rem;
            border-top-right-radius: 0.75rem;
        }

        .card-group-lg-break>.card:last-child .card-header,
        .card-group-lg-break>.card:last-child .card-img-top {
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }

        .card-btn {
            color: #1e2022;
            text-align: left;
            white-space: inherit;
            border-radius: 0.75rem;
        }

        .card-btn-toggle {
            display: inline-block;
            color: #377dff;
        }

        .card-btn-toggle-default {
            display: none;
        }

        .card-btn-toggle-active {
            display: block;
        }

        .card-btn.collapsed .card-btn-toggle-default {
            display: block;
        }

        .card-btn.collapsed .card-btn-toggle-active {
            display: none;
        }

        .btn-link {
            font-weight: 400;
            color: #377dff;
            text-decoration: none;
        }

        .btn-link:hover {
            color: #0052ea;
            text-decoration: none;
        }

        .btn-link.focus,
        .btn-link:focus {
            text-decoration: none;
        }

        .btn-link.disabled,
        .btn-link:disabled {
            color: #8c98a4;
            pointer-events: none;
        }

        .btn-link {
            font-weight: 600;
        }

        .btn-block {
            display: block;
            width: 100%;
        }

        .btn-block+.btn-block {
            margin-top: 0.5rem;
        }

        input[type="button"].btn-block,
        input[type="reset"].btn-block,
        input[type="submit"].btn-block {
            width: 100%;
        }

        .pr-0,
        .px-0 {
            padding-right: 0 !important;
        }

        .pb-0,
        .py-0 {
            padding-bottom: 0 !important;
        }

        .pl-0,
        .px-0 {
            padding-left: 0 !important;
        }
        .justify-content-between {
            -ms-flex-pack: justify !important;
            justify-content: space-between !important;
        }
        .card-body {
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            min-height: 1px;
            padding: 1.5rem;
        }
    </style>
@endsection

@section('content')
<section class="flat-title-page back-ground-style">
    <div class="container-fluid">
        <div class="row">
            <div class="breadcrumbs text-center link-style-5 text-white">
                <h2 class="section-title-page">Jasa Foto Produk</h2>
                <p class="mb-5">Layanan fotografi produk terlengkap mulai dari katalog foto produk makanan, minuman, baju, dll. Didukungan peralatan, model, dan tim yang profesional.</p>
                <ul class="breadcrumbs-inner list-center display-flex">
                    <li><a class="section-16px-regular font-weight-500" href="{{ route('home') }}">Home</a></li>
                    <li>
                        <h4 class="section-16px-regular font-weight-500">Jasa Foto Produk</h4>
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
                        <h4 class="section-subtitle">FOTOGRAFI PRODUK #1 DI INDONESIA</h4>
                        <h2 class="section-45px-montserrat margin-top-15 margin-bottom-20">Dapatkan foto terbaik produkmu sebagai identitas digital hanya di GoSocial!</h2>
                    </div>
                    <p class="section-17px-regular margin-bottom-25">Sulit membuat pelanggan percaya dengan produkmu? sudah saatnya punya foto produk original sendiri!</p>
                    <p class="section-17px-regular margin-bottom-25">Memiliki konten orisinil dengan kualitas terbaik meruapakan salah satu faktor yang terpenting dalam bisnis. Dengan memiliki Foto Produk yang profesional calon pelanggan akan lebih percaya terhadap produk dari sebuah merek / brand.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="about-content-left wow fadeInLeft">
                    <div class="about-post">
                        <img src="{{ asset('olux/assets/images/image-box/about-post-mystory.jpg') }}" alt="images">
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
                    <h2 class="section-45px-montserrat margin-top-15">Jasa Foto Produk Terbaik No.1 di Indonesia</h2>
                    <p class="text-muted">Tidak perlu keluar banyak biaya & waktu untuk buat studio foto produk sendiri (peralatan, properti, model, fotografer, stylish, dll). Layanan fotografi produk hadir untuk memudahkan pebisnis UMKM.</p>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="60" data-smobile="60"
                    style="height:60px"></div>
            </div>
            <div class="col-md-12">
                <div class="swiper-container swiper-coverflow style-coverflow ">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide style-coverflow">
                            <img src="{{ asset('olux/assets/images/image-slider/working-project-sl-1.png') }}" alt="images">
                        </div>
                        <div class="swiper-slide style-coverflow">
                            <img src="{{ asset('olux/assets/images/image-slider/working-project-sl-2.png') }}" alt="images">
                        </div>
                        <div class="swiper-slide style-coverflow">
                            <img src="{{ asset('olux/assets/images/image-slider/working-project-sl-3.png') }}" alt="images">
                        </div>
                        <div class="swiper-slide style-coverflow">
                            <img src="{{ asset('olux/assets/images/image-slider/working-project-sl-4.png') }}" alt="images">
                        </div>
                        <div class="swiper-slide style-coverflow">
                            <img src="{{ asset('olux/assets/images/image-slider/working-project-sl-5.png') }}" alt="images">
                        </div>
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
                    <h2 class="section-45px-montserrat margin-top-15">LANGKAH PENGERJAAN</h2>
                    <p class="text-muted">Foto Produk</p>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="60" data-smobile="60"
                    style="height:60px"></div>
            </div>
        </div>
        <ul class="step step-md step-centered">
            <li class="step-item">
                <div class="step-content-wrapper">
                    <span class="step-icon step-icon-soft-primary">1</span>
                    <div class="step-content">
                        <h3>Pilih Paket</h3>
                        <p>Tentukan paket yang sesuai dengan kebutuhan bisnis.</p>
                    </div>
                </div>
            </li>

            <li class="step-item">
                <div class="step-content-wrapper">
                    <span class="step-icon step-icon-soft-primary">2</span>
                    <div class="step-content">
                        <h3>Kirim Brief</h3>
                        <p>Jelaskan keinginan kepada tim agar hasil maksimal.</p>
                    </div>
                </div>
            </li>

            <li class="step-item">
                <div class="step-content-wrapper">
                    <span class="step-icon step-icon-soft-primary">3</span>
                    <div class="step-content">
                        <h3>Kirim Produk</h3>
                        <p>Kirimkan produk ke studio GoSocial yang terdekat.</p>
                    </div>
                </div>
            </li>

            <li class="step-item">
                <div class="step-content-wrapper">
                    <span class="step-icon step-icon-soft-primary">4</span>
                    <div class="step-content">
                        <h3>Proses Foto</h3>
                        <p>Kami akan memotret produk dengan profesional.</p>
                    </div>
                </div>
            </li>

            <li class="step-item">
                <div class="step-content-wrapper">
                    <span class="step-icon step-icon-soft-primary">5</span>
                    <div class="step-content">
                        <h3>Terima Hasil</h3>
                        <p>Hanya hasil terbaik yang akan dikirimkan.</p>
                    </div>
                </div>
            </li>
            <li class="step-item">
                <div class="step-content-wrapper">
                    <span class="step-icon step-icon-soft-primary">6</span>
                    <div class="step-content">
                        <h3>Return</h3>
                        <p>Hanya setelah puas dengan hasil, produk dikembalikan.</p>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</section>

<section class="flat-about-2nd">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="about-content-left wow fadeInLeft">
                    <div class="about-post">
                        <img src="{{ asset('olux/assets/images/image-box/about-post-mystory.jpg') }}" alt="images">
                        <div class="mark-video">
                            <a href="https://www.youtube.com/embed/xC4ze0p0b5Y" class="lightbox-image">
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
                        <h4 class="section-45px-montserrat margin-top-15 margin-bottom-20">Fotografi Produk?</h4>
                    </div>
                    <p class="section-17px-regular margin-bottom-25">Foto produk merupakan salah satu faktor terpenting dalam memasarkan suatu produk. Menurut survey dari Weebly, 75% pembeli pada ecommerce menganggap foto produk sangat memengaruhi keputusan pembelian.</p>
                    <ul>
                        <li><p>1. Merupakan representasi suatu brand/bisnis</p></li>
                        <li><p>2. Meningkatkan kepercayaan calon pembeli</p></li>
                        <li><p>3. Meningkatkan nilai jual</p></li>
                    </ul>
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
                    <h2 class="section-45px-montserrat margin-top-15">Paket Harga</h2>
                    <p class="text-muted">Jasa Foto Produk</p>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="60" data-smobile="60"
                    style="height:60px"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-lg-4 mb-5">
                <!-- Card -->
                <div class="card card-bordered card-hover-shadow h-100">
                    <div class="slideshow-container">
                        <div class="mySlides fades" style="display: block;">
                            <img src="https://gosocial.co.id/assets/img/service/foto-produk/pricing/katalog-1.webp" class="centerproduk p-2 card-img " alt="Foto Produk Katalog 1" style="width:100%;">
                        </div>
                        <div class="mySlides fades" style="display: none;">
                            <img src="https://gosocial.co.id/assets/img/service/foto-produk/pricing/katalog-2.webp" class="centerproduk p-2 card-img " alt="Foto Produk Katalog 2" style="width:100%;">
                        </div>
                        <div class="mySlides fades" style="display: none;">
                            <img src="https://gosocial.co.id/assets/img/service/foto-produk/pricing/katalog-3.webp" class="centerproduk p-2 card-img " alt="Foto Produk Katalog 3" style="width:100%;">
                        </div>
                        <a class="prev ml-2" onclick="plusSlides(-1)">❮</a>
                        <a class="next mr-2" onclick="plusSlides(1)">❯</a>
                        <div class="text-center mt-2">
                            <span class="dot activedot" onclick="currentSlide(1)"></span>
                            <span class="dot" onclick="currentSlide(2)"></span>
                            <span class="dot" onclick="currentSlide(3)"></span>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row m-3">
                            <div class="col-12">
                                <h3 class="mb-2 text-dark">Katalog</h3>
                                <p class="mb-2 h4 text-primary">Rp.25.000,- / Foto</p>
                                <p class="d-block text-body mb-4">Foto produk dengan berbagai pilihan warna background warna polos. Tanpa minimal pembelian</p>
                                <ul class="list-pointer mb-0">
                                    <li class="list-pointer-item my-1 h4">1. Gratis Steaming</li>
                                    <li class="list-pointer-item my-1 h4">2. Gratis penyimpanan file</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="button-readmore">
                            <a class="read-more text-dark text-decoration-none" href="https://api.whatsapp.com/send?phone=6281234566636&amp;text=Halo%20GoSocial%21%0D%0ASaya%20ingin%20memesan%20layanan%20Foto%20Produk%20Katalog" target="_blank" id="pesan_sekarang_katalog">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
                <!-- End Card -->
            </div>

            <div class="col-sm-6 col-lg-4 mb-5">
                <!-- Card -->
                <div class="card card-bordered card-hover-shadow h-100">
                    <div class="slideshow-container">
                        <div class="mySlides2 fades" style="display: block;">
                            <img src="https://gosocial.co.id/assets/img/service/foto-produk/pricing/creative-1.webp" class="centerproduk p-2 card-img" alt="Foto Creative 1" style="width:100%;">
                        </div>
                        <div class="mySlides2 fades" style="display: none;">
                            <img src="https://gosocial.co.id/assets/img/service/foto-produk/pricing/creative-2.webp" class="centerproduk p-2 card-img" alt="Foto Creative 2" style="width:100%;">
                        </div>
                        <div class="mySlides2 fades" style="display: none;">
                            <img src="https://gosocial.co.id/assets/img/service/foto-produk/pricing/creative-3.webp" class="centerproduk p-2 card-img" alt="Foto Creative 3" style="width:100%;">
                        </div>
                        <a class="prev ml-2" onclick="plusSlides2(-1)">❮</a>
                        <a class="next mr-2" onclick="plusSlides2(1)">❯</a>
                        <div class="text-center mt-2">
                            <span class="dot2 activedot" onclick="currentSlide2(1)"></span>
                            <span class="dot2" onclick="currentSlide2(2)"></span>
                            <span class="dot2" onclick="currentSlide2(3)"></span>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row m-3">
                            <div class="col-12">
                                <h3 class="mb-2 text-dark">Katalog</h3>
                                <p class="mb-2 h4 text-primary">Rp.30.000,- / Foto</p>
                                <p class="d-block text-body mb-4">Foto produk dengan berbagai pilihan tema &amp; properti pendukung. Tanpa minimal pembelian</p>
                                <ul class="list-pointer mb-0">
                                    <li class="list-pointer-item my-1 h4">1. Gratis Styling &amp; Steaming</li>
                                    <li class="list-pointer-item my-1 h4">2. Gratis penyimpanan file</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="button-readmore">
                            <a class="read-more text-dark text-decoration-none" href="https://api.whatsapp.com/send?phone=6281234566636&amp;text=Halo%20GoSocial%21%0D%0ASaya%20ingin%20memesan%20layanan%20Foto%20Produk%20Creative" target="_blank" id="pesan_sekarang_creative">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
                <!-- End Card -->
            </div>

            <div class="col-sm-6 col-lg-4 mb-5">
                <!-- Card -->
                <div class="card card-bordered card-hover-shadow h-100">
                    <div class="slideshow-container">
                        <div class="mySlides3 fades" style="display: block;">
                            <img src="https://gosocial.co.id/assets/img/service/foto-produk/pricing/fnb-1.webp" class="centerproduk p-2 card-img" alt="Foto Food and Beverages 1" style="width:100%;">
                        </div>
                        <div class="mySlides3 fades" style="display: none;">
                            <img src="https://gosocial.co.id/assets/img/service/foto-produk/pricing/fnb-2.webp" class="centerproduk p-2 card-img" alt="Foto Food and Beverages 2" style="width:100%;">
                        </div>
                        <div class="mySlides3 fades" style="display: none;">
                            <img src="https://gosocial.co.id/assets/img/service/foto-produk/pricing/fnb-3.webp" class="centerproduk p-2 card-img" alt="Foto Food and Beverages 3" style="width:100%;">
                        </div>
                        <a class="prev ml-2" onclick="plusSlides3(-1)">❮</a>
                        <a class="next mr-2" onclick="plusSlides3(1)">❯</a>
                        <div class="text-center mt-2">
                            <span class="dot3 activedot" onclick="currentSlide3(1)"></span>
                            <span class="dot3" onclick="currentSlide3(2)"></span>
                            <span class="dot3" onclick="currentSlide3(3)"></span>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row m-3">
                            <div class="col-12">
                                <h3 class="mb-2 text-dark">Food and Beverage</h3>
                                <p class="mb-2 h4 text-primary">Rp.50.000,- / Foto</p>
                                <p class="d-block text-body mb-4">Foto produk khusus untuk makanan dengan treatment khusus. Tanpa minimal pembelian.</p>
                                <ul class="list-pointer mb-0">
                                    <li class="list-pointer-item my-1 h4">1. Gratis treatment khusus</li>
                                    <li class="list-pointer-item my-1 h4">2. Gratis penyimpanan file</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer">
                        <div class="button-readmore">
                            <a class="read-more text-dark text-decoration-none" href="https://api.whatsapp.com/send?phone=6281234566636&amp;text=Halo%20GoSocial%21%0D%0ASaya%20ingin%20memesan%20layanan%20Foto%20Produk%20FnB" target="_blank" id="pesan_sekarang_fnb">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
                <!-- End Card -->
            </div>
        </div>
    </div>
</section>

<section class="flat-counter">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title wow fadeInDown">
                    <h2 class="section-45px-montserrat margin-top-15">Download PDF Penawaran</h2>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="60" data-smobile="60"
                    style="height:60px"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="#" class="text-dark text-decoration-none">
                    <div class="counter-box themesflat-counter hover-up wow fadeInUp" data-wow-delay="0.1s">
                        <div class="row">
                            <div class="col-6">
                                <div class="icon-box">
                                    <div class="content-icon">
                                        <h4 class="section-20px-montserrat font-weight-600 line-height-35 mb-4">Pricelist Foto Lengkap</h4>
                                        <span class="h4">Download</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="number-content section-65px-montserrat">
                                    <img src="{{ asset('images/landing-page-utama-icon/6230656.jpg') }}" class="img-responsive">
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#" class="text-dark text-decoration-none">
                    <div class="counter-box themesflat-counter hover-up wow fadeInUp" data-wow-delay="0.1s">
                        <div class="row">
                            <div class="col-6">
                                <div class="icon-box">
                                    <div class="content-icon">
                                        <h4 class="section-20px-montserrat font-weight-600 line-height-35 mb-4">Our Company Profile</h4>
                                        <span class="h4">Download</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="number-content section-65px-montserrat">
                                    <img src="{{ asset('images/landing-page-utama-icon/6230656.jpg') }}" class="img-responsive">
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#" class="text-dark text-decoration-none">
                    <div class="counter-box themesflat-counter hover-up wow fadeInUp" data-wow-delay="0.1s">
                        <div class="row">
                            <div class="col-6">
                                <div class="icon-box">
                                    <div class="content-icon">
                                        <h4 class="section-20px-montserrat font-weight-600 line-height-35 mb-4">Syarat & Ketentuan</h4>
                                        <span class="h4">Download</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="number-content section-65px-montserrat">
                                    <img src="{{ asset('images/landing-page-utama-icon/6230656.jpg') }}" class="img-responsive">
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="flat-services">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title wow fadeInDown">
                    <h4 class="section-subtitle">MENGAPA HARUS KAMI?</h4>
                    <h2 class="section-45px-montserrat margin-top-15">Keuntungan Foto Produk bersama GoSocial</h2>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="60" data-smobile="60"
                    style="height:60px"></div>
            </div>
            <div class="col-md-4">
                <div class="services-box">
                    <div class="wraper-effect"></div>
                    <span class="icon-services icon-development1 font-size-icon"></span>
                    <div class="services-content">
                        <a href="service-single.html" class="section-22px-montserrat text-dark text-decoration-none">Tim Studio Profesional</a>
                        <p class="services-desc">Didukung oleh tim fotografer, stylish, MUA, editor, dll yang terbaik dan berpengalaman di bidangnya.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="services-box">
                    <div class="wraper-effect"></div>
                    <span class="icon-services icon-development1 font-size-icon"></span>
                    <div class="services-content">
                        <a href="service-single.html" class="section-22px-montserrat text-dark text-decoration-none">Peralatan Serba Canggih</a>
                        <p class="services-desc">Dengan perlengkapan studio yang canggih & terkini untuk mendapatkan hasil foto yang maksimal.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="services-box">
                    <div class="wraper-effect"></div>
                    <span class="icon-services icon-development1 font-size-icon"></span>
                    <div class="services-content">
                        <a href="service-single.html" class="section-22px-montserrat text-dark text-decoration-none">1000+ Properti Studio</a>
                        <p class="services-desc">Dengan 1000 lebih set properti dan tema pendukung untuk berbagai jenis produk yang menambah daya tarik.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="services-box">
                    <div class="wraper-effect"></div>
                    <span class="icon-services icon-development1 font-size-icon"></span>
                    <div class="services-content">
                        <a href="service-single.html" class="section-22px-montserrat text-dark text-decoration-none">Berbagai Pilihan Model</a>
                        <p class="services-desc">Pilihan model lokal hingga internasional untuk foto produk dengan model yang merepresentasi image produk.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="services-box">
                    <div class="wraper-effect"></div>
                    <span class="icon-services icon-development1 font-size-icon"></span>
                    <div class="services-content">
                        <a href="service-single.html" class="section-22px-montserrat text-dark text-decoration-none">Final Editing Profesional</a>
                        <p class="services-desc">Setelah jadi foto akan diedit untuk menyesuaikan color grading dan color correction untuk hasil foto yang terbaik.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="services-box">
                    <div class="wraper-effect"></div>
                    <span class="icon-services icon-development1 font-size-icon"></span>
                    <div class="services-content">
                        <a href="service-single.html" class="section-22px-montserrat text-dark text-decoration-none">Garansi Hasil Terbaik</a>
                        <p class="services-desc">Hanya foto terbaik yang telah melalui standar foto produk terbaiklah yang akan kami kirimkan kepada klien.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="flat-client">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title wow fadeInDown text-center">
                    <h4 class="section-subtitle">APA SAJA?</h4>
                    <h2 class="section-45px-montserrat margin-top-15">Jenis Fotografi Produk Populer</h2>
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
                                <figure class="w-100 max-w-6rem mt-2 mr-4">
                                    <img class="img-fluid" src="https://gosocial.co.id/assets/svg/service/foto-produk/foto-produk-makanan.svg" alt="Foto Produk Makanan">
                                </figure>
                                <div class="media-body ">
                                    <h4 class="mb-0">Foto Produk Makanan</h4>
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
                                <figure class="w-100 max-w-6rem mt-2 mr-4 h-100">
                                    <img class="img-fluid" src="https://gosocial.co.id/assets/svg/service/foto-produk/foto-produk-minuman.svg" alt="Foto Produk Minuman">
                                </figure>
                                <div class="media-body">
                                    <h4 class="mb-0">Foto Produk Minuman</h4>
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
                                <figure class="w-100 max-w-6rem mt-2 mr-4">
                                    <img class="img-fluid" src="https://gosocial.co.id/assets/svg/service/foto-produk/foto-produk-baju.svg" alt="Foto Produk Baju">
                                </figure>
                                <div class="media-body">
                                    <h4 class="mb-0">Foto Produk Baju</h4>
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

            <div class="col-lg-8 order-lg-1 align-self-lg-end">
                <!-- Tab Content -->
                <div class="tab-content pr-lg-4">
                    <div class="tab-pane fade active show" id="pills-one-code-features-example2" role="tabpanel" aria-labelledby="pills-one-code-features-example2-tab">
                        <div class="container">
                            <div class="row mx-n2">
                                <div class="col-sm-6 col-md-6 px-2 mb-3 mb-md-0">
                                    <div class="card-frame rounded-lg img-fluid bg-img-hero" style="background-image: url(https://gosocial.co.id/assets/img/service/foto-produk/makanan-1.webp); min-height: 20rem;">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 px-2 mb-3 mb-md-0">
                                    <div class="card-frame rounded-lg img-fluid bg-img-hero" style="background-image: url(https://gosocial.co.id/assets/img/service/foto-produk/makanan-2.webp); min-height: 20rem;">
                                    </div>
                                </div>
                            </div>

                            <div class="mt-5 mt-md-9">
                                <h2>Foto produk makanan untuk bisnis kuliner.</h2>
                                <p>GoSocial dapat membantu bisnis menampilkan foto produk makanan terbaik kepada
                                    konsumen.
                                    Foto tersebut dibuat semenarik mungkin yang menggugah selara konsumen.
                                    Mulai dari detail makanan, hingga bentuk keseluruhan makanan akan direpresentasikan
                                    dengan ciamik.</p>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="pills-two-code-features-example2" role="tabpanel" aria-labelledby="pills-two-code-features-example2-tab">
                        <div class="container">
                            <div class="row mx-n2">
                                <div class="col-sm-6 col-md-6 px-2 mb-3 mb-md-0">
                                    <div class="card-frame rounded-lg img-fluid bg-img-hero" style="background-image: url(https://gosocial.co.id/assets/img/service/foto-produk/minuman-1.webp); min-height: 20rem;">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 px-2 mb-3 mb-md-0">
                                    <div class="card-frame rounded-lg img-fluid bg-img-hero" style="background-image: url(https://gosocial.co.id/assets/img/service/foto-produk/minuman-2.webp); min-height: 20rem;">
                                    </div>
                                </div>
                            </div>

                            <div class="mt-5 mt-md-9">
                                <h2>Foto produk minuman</h5>
                                <p>Mendukung foto produk untuk minuman panas atau dingin maupun minuman dalam kemasan
                                    agar memasarkan produk bisa lebih mudah dengan tampilan foto produk yang menggugah
                                    selera konsumen.</p>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="pills-three-code-features-example2" role="tabpanel" aria-labelledby="pills-three-code-features-example2-tab">
                        <div class="container">
                            <div class="row mx-n2">
                                <div class="col-sm-6 col-md-6 px-2 mb-3 mb-md-0">
                                    <div class="card-frame rounded-lg img-fluid bg-img-hero" style="background-image: url(https://gosocial.co.id/assets/img/service/foto-produk/baju-1.webp); min-height: 20rem;">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 px-2 mb-3 mb-md-0">
                                    <div class="card-frame rounded-lg img-fluid bg-img-hero" style="background-image: url(https://gosocial.co.id/assets/img/service/foto-produk/baju-2.webp); min-height: 20rem;">
                                    </div>
                                </div>
                            </div>

                            <div class="mt-5 mt-md-9">
                                <h2>Foto Produk Baju</h5>
                                <p>GoSocial dapat membantu membuat foto produk fashion seperti kaos, baju baik untuk
                                    pakaian pria, pakaian wanita hingga pakaian anak-anak.</p>
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
                        <div class="swiper-slide">
                            <div class="brand-content">
                                <img src="{{ asset('olux/assets/images/image-slider/brand-1.png') }}" alt="images">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-content">
                                <img src="{{ asset('olux/assets/images/image-slider/brand-2.png') }}" alt="images">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-content">
                                <img src="{{ asset('olux/assets/images/image-slider/brand-3.png') }}" alt="images">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-content">
                                <img src="{{ asset('olux/assets/images/image-slider/brand-4.png') }}" alt="images">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-content">
                                <img src="{{ asset('olux/assets/images/image-slider/brand-5.png') }}" alt="images">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-content">
                                <img src="{{ asset('olux/assets/images/image-slider/brand-6.png') }}" alt="images">
                            </div>
                        </div>
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
                    <h4 class="section-subtitle">OUR LATEST WORK</h4>
                    <h2 class="section-45px-montserrat margin-top-15">Portofolio</h2>
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
                    <h4 class="section-subtitle">TESTIMONIAL</h4>
                    <h2 class="section-title section-45px-montserrat">Apa Kata Mereka?</h2>
                    <button class="clone-btn-prev"></button>
                    <button class="clone-btn-next"></button>
                </div>
            </div>
            <div class="col-md-6">
                <div class="swiper-container sliver-vertical">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="client-slider-box">
                                <div class="client-user">
                                    <img src="{{ asset('olux/assets/images/image-slider/client-slider-box.jpg') }}"
                                        alt="images">
                                </div>
                                <div class="client-content">
                                    <div class="client-user-author">
                                        <h4 class="name-author section-20px-montserrat">Glenn Ardi</h4>
                                        <p class="margin-top-11">"Sejauh ini kami sudah bekerjasama membuat 5 project video dan kerjasama yang dijalin sangat profesional sekali, Good Job!"</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="client-slider-box">
                                <div class="client-user">
                                    <img src="{{ asset('olux/assets/images/image-slider/client-slider-box.jpg') }}"
                                        alt="images">
                                </div>
                                <div class="client-content">
                                    <div class="client-user-author">
                                        <h4 class="name-author section-20px-montserrat">Olivia Willyost</h4>
                                        <p class="margin-top-11">"Terimakasih buat GoSocial yang sudah membantu kami membuatkan video Titip Jual OLX Indonesia."</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="client-slider-box">
                                <div class="client-user">
                                    <img src="{{ asset('olux/assets/images/image-slider/client-slider-box.jpg') }}"
                                        alt="images">
                                </div>
                                <div class="client-content">
                                    <div class="client-user-author">
                                        <h4 class="name-author section-20px-montserrat">Angela Sujadi</h4>
                                        <p class="margin-top-11">"Kerja sama dengan GoSocial itu komunikasinya gampang. Sehingga apa yang kita mau dan konsep itu nyambung, dan hasilnya maksimal."</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="client-slider-box">
                                <div class="client-user">
                                    <img src="{{ asset('olux/assets/images/image-slider/client-slider-box.jpg') }}"
                                        alt="images">
                                </div>
                                <div class="client-content">
                                    <div class="client-user-author">
                                        <h4 class="name-author section-20px-montserrat">Brade Hook</h4>
                                        <p class="margin-top-11">A customer review is a review of a product
                                            or service made by a customer who has purchased and used, or had
                                            experience with, the product or service.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="client-slider-box">
                                <div class="client-user">
                                    <img src="{{ asset('olux/assets/images/image-slider/client-slider-box.jpg') }}"
                                        alt="images">
                                </div>
                                <div class="client-content">
                                    <div class="client-user-author">
                                        <h4 class="name-author section-20px-montserrat">Brade Hook</h4>
                                        <p class="margin-top-11">A customer review is a review of a product
                                            or service made by a customer who has purchased and used, or had
                                            experience with, the product or service.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                    <h4 class="section-subtitle">FAQ</h4>
                    <h2 class="section-45px-montserrat margin-top-15">Frequently Asked Questions</h2>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="60" data-smobile="60"
                    style="height:60px"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div id="basicsAccordion-left">
                    <!-- Card -->
                    <div class="card shadow-none mb-3">
                        <div class="card-header card-collapse" id="basicsHeadingOne">
                            <a class="btn btn-link btn-block d-flex justify-content-between card-btn bg-white px-0 collapsed" href="javascript:;" role="button" data-toggle="collapse" data-target="#basicsCollapseOne" aria-expanded="false" aria-controls="basicsCollapseOne">
                                <span class="h4 text-dark">Apa saja jenis Foto Produk yang ada di Gosocial?</span>

                                <span class="card-btn-toggle">
                                    <span class="h4 card-btn-toggle-default text-dark">+</span>
                                    <span class="h4 card-btn-toggle-active text-dark">−</span>
                                </span>
                            </a>
                        </div>
                        <div id="basicsCollapseOne" class="collapse" aria-labelledby="basicsHeadingOne" data-parent="#basicsAccordion-left" style="">
                            <div class="card-body px-0 m-3">
                                <p>Kami dapat membantu berbagai jenis kebutuhan Foto Produk yang akan ditangani oleh tim
                                    fotografi
                                    yang profesional mulai dari:</p>
                                <ul>
                                    <li>
                                        <p><strong>1. Foto Katalog</strong></p>
                                    </li>
                                    <li>
                                        <p><strong>2. Foto Kreatif</strong></p>
                                    </li>
                                    <li>
                                        <p><strong>3. Foto Food and Beverage</strong></p>
                                    </li>
                                    <li>
                                        <p><strong>4. Foto Produk dengan Model atau Mannequin</strong></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Card -->

                    <!-- Card -->
                    <div class="card shadow-none mb-3">
                        <div class="card-header card-collapse" id="basicsHeadingTwo">
                            <a class="btn btn-link btn-block d-flex justify-content-between card-btn collapsed bg-white px-0" href="javascript:;" role="button" data-toggle="collapse" data-target="#basicsCollapseTwo" aria-expanded="false" aria-controls="basicsCollapseTwo">
                                <span class="h4 text-dark">Foto Produk di Gosocial apa sudah dengan properti foto?</span>

                                <span class="card-btn-toggle">
                                    <span class="h4 card-btn-toggle-default text-dark">+</span>
                                    <span class="h4 card-btn-toggle-active text-dark">−</span>
                                </span>
                            </a>
                        </div>
                        <div id="basicsCollapseTwo" class="collapse" aria-labelledby="basicsHeadingTwo" data-parent="#basicsAccordion-left">
                            <div class="card-body px-0 m-3">
                                <p>Gosocial Indonesia juga menyediakan berbagai properti untuk fotografi yang menarik dengan
                                    lebih dari
                                    1000+ jenis properti.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Card -->

                    <!-- Card -->
                    <div class="card shadow-none mb-3">
                        <div class="card-header card-collapse" id="basicsHeadingThree">
                            <a class="btn btn-link btn-block d-flex justify-content-between card-btn collapsed bg-white px-0" href="javascript:;" role="button" data-toggle="collapse" data-target="#basicsCollapseThree" aria-expanded="false" aria-controls="basicsCollapseThree">
                                <span class="h4 text-dark">Berapa lama proses foto produk di Gosocial?</span>

                                <span class="card-btn-toggle">
                                    <span class="h4 card-btn-toggle-default text-dark">+</span>
                                    <span class="h4 card-btn-toggle-active text-dark">−</span>
                                </span>
                            </a>
                        </div>
                        <div id="basicsCollapseThree" class="collapse" aria-labelledby="basicsHeadingThree" data-parent="#basicsAccordion-left">
                            <div class="card-body px-0 m-3">
                                <p>Estimasi proses foto berkisar 2-3 Hari kerja paling lambat 5 hari kerja sejak produk tiba
                                    di
                                    studio, lama proses menyesuaikan dengan kepadatan proses foto dan antrian yang ada.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Card -->

                    <!-- Card -->
                    <div class="card shadow-none mb-3">
                        <div class="card-header card-collapse" id="basicsHeadingFour">
                            <a class="btn btn-link btn-block d-flex justify-content-between card-btn collapsed bg-white px-0" href="javascript:;" role="button" data-toggle="collapse" data-target="#basicsCollapseFour" aria-expanded="false" aria-controls="basicsCollapseFour">
                                <span class="h4 text-dark">Apakah Gosocial Indonesia menerima penyewaan studio?</span>
                                <span class="card-btn-toggle">
                                    <span class="card-btn-toggle-default text-dark h4">+</span>
                                    <span class="card-btn-toggle-active h4 text-dark">−</span>
                                </span>
                            </a>
                        </div>
                        <div id="basicsCollapseFour" class="collapse" aria-labelledby="basicsHeadingFour" data-parent="#basicsAccordion-left">
                            <div class="card-body px-0 m-3">
                                <p>Gosocial Indonesia menyediakan fasilitas ini dengan harga khusus serta SnK yang berlaku.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Card -->

                    <!-- Card -->
                    <div class="card shadow-none mb-3">
                        <div class="card-header card-collapse" id="basicsHeadingFive">
                            <a class="btn btn-link btn-block d-flex justify-content-between card-btn collapsed bg-white px-0" href="javascript:;" role="button" data-toggle="collapse" data-target="#basicsCollapseFive" aria-expanded="false" aria-controls="basicsCollapseFive">
                                <span class="h4 text-dark">Apakah foto produk di Gosocial bisa on the spot / ditemani / dilihat secara langsung?</span>
                                <span class="card-btn-toggle">
                                    <span class="card-btn-toggle-default text-dark h4">+</span>
                                    <span class="card-btn-toggle-active h4 text-dark">−</span>
                                </span>
                            </a>
                        </div>
                        <div id="basicsCollapseFive" class="collapse" aria-labelledby="basicsHeadingFive" data-parent="#basicsAccordion-left">
                            <div class="card-body px-0 m-3">
                                <p>Proses foto di Gosocial Indonesia tidak dapat didampingi oleh klien / Pemilik. Untuk
                                    hasil akan kami
                                    sampaikan jika proses telah selesai.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Card -->
                </div>
            </div>
            <div class="col-lg-6">
                <div id="basicsAccordion-right">
                    <!-- Card -->
                    <div class="card shadow-none mb-3">
                        <div class="card-header card-collapse" id="basicsHeadingSix">
                            <a class="btn btn-link btn-block d-flex justify-content-between card-btn collapsed bg-white px-0" href="javascript:;" role="button" data-toggle="collapse" data-target="#basicsCollapseSix" aria-expanded="false" aria-controls="basicsCollapseSix">
                                <span class="h4 text-dark">Biaya pengiriman produk dibebankan pada siapa?</span>

                                <span class="card-btn-toggle">
                                    <span class="h4 card-btn-toggle-default text-dark">+</span>
                                    <span class="h4 card-btn-toggle-active text-dark">−</span>
                                </span>
                            </a>
                        </div>
                        <div id="basicsCollapseSix" class="collapse" aria-labelledby="basicsHeadingSix" data-parent="#basicsAccordion-right">
                            <div class="card-body px-0 m-3">
                                <p>Pengiriman produk sepenuhnya dibebankan kepada klien baik pengirimkan atau pengembalian
                                    produk.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Card -->

                    <!-- Card -->
                    <div class="card shadow-none mb-3">
                        <div class="card-header card-collapse" id="basicsHeadingSeven">
                            <a class="btn btn-link btn-block d-flex justify-content-between card-btn collapsed bg-white px-0" href="javascript:;" role="button" data-toggle="collapse" data-target="#basicsCollapseSeven" aria-expanded="false" aria-controls="basicsCollapseSeven">
                                <span class="h4 text-dark">Apabila ada kerusakan atau catat produk bagaimana?</span>

                                <span class="card-btn-toggle">
                                    <span class="card-btn-toggle-default text-dark h4">+</span>
                                    <span class="card-btn-toggle-active h4 text-dark">−</span>
                                </span>
                            </a>
                        </div>
                        <div id="basicsCollapseSeven" class="collapse" aria-labelledby="basicsHeadingSeven" data-parent="#basicsAccordion-right">
                            <div class="card-body px-0 m-3">
                                <p>Kerusakan produk ketika proses pengiriman bukan tanggung jawab dari gosocial, kecuali
                                    kerusakan
                                    produk ketika proses foto dilakukan admin akan menginformasikan dengan klien.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Card -->

                    <!-- Card -->
                    <div class="card shadow-none mb-3">
                        <div class="card-header card-collapse" id="basicsHeadingEight">
                            <a class="btn btn-link btn-block d-flex justify-content-between card-btn collapsed bg-white px-0" href="javascript:;" role="button" data-toggle="collapse" data-target="#basicsCollapseEight" aria-expanded="false" aria-controls="basicsCollapseEight">
                                <span class="h4 text-dark">Bagaimana teknis untuk foto produk di Gosocial Indonesia?</span>

                                <span class="card-btn-toggle">
                                    <span class="card-btn-toggle-default text-dark h4">+</span>
                                    <span class="card-btn-toggle-active h4 text-dark">−</span>
                                </span>
                            </a>
                        </div>
                        <div id="basicsCollapseEight" class="collapse" aria-labelledby="basicsHeadingEight" data-parent="#basicsAccordion-right">
                            <div class="card-body px-0 m-3">
                                <p>Klien menghubungi Account Executive bagian Photo Product, kemudian klien melakukan order
                                    melalui form yang diberikan, dilanjutkan dengan pembayaran, pengiriman produk, proses
                                    foto, dan yang terakhir produk
                                    dikembalikan kepada klien.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Card -->

                    <!-- Card -->
                    <div class="card shadow-none mb-3">
                        <div class="card-header card-collapse" id="basicsHeadingNine">
                            <a class="btn btn-link btn-block d-flex justify-content-between card-btn collapsed bg-white px-0" href="javascript:;" role="button" data-toggle="collapse" data-target="#basicsCollapseNine" aria-expanded="false" aria-controls="basicsCollapseNine">
                                <span class="h4 text-dark">Apakah bisa melakukan proses foto di tempat klien?</span>

                                <span class="card-btn-toggle">
                                    <span class="card-btn-toggle-default text-dark h4">+</span>
                                    <span class="card-btn-toggle-active h4 text-dark">−</span>
                                </span>
                            </a>
                        </div>
                        <div id="basicsCollapseNine" class="collapse" aria-labelledby="basicsHeadingNine" data-parent="#basicsAccordion-right">
                            <div class="card-body px-0 m-3">
                                <p>Untuk saat ini proses foto di tempat klien bisa dilakukan khusus hanya area Surabaya dan
                                    sekitarnya dengan perhitungan harga khusus.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Card -->

                    <!-- Card -->
                    <div class="card shadow-none mb-3">
                        <div class="card-header card-collapse" id="basicsHeadingTen">
                            <a class="btn btn-link btn-block d-flex justify-content-between card-btn collapsed bg-white px-0" href="javascript:;" role="button" data-toggle="collapse" data-target="#basicsCollapseTen" aria-expanded="false" aria-controls="basicsCollapseTen">
                                <span class="h4 text-dark">Bagaimana dengan produk makanan / minuman yang perlu penataan / plating?</span>

                                <span class="card-btn-toggle">
                                    <span class="card-btn-toggle-default text-dark h4">+</span>
                                    <span class="card-btn-toggle-active h4 text-dark">−</span>
                                </span>
                            </a>
                        </div>
                        <div id="basicsCollapseTen" class="collapse" aria-labelledby="basicsHeadingTen" data-parent="#basicsAccordion-right">
                            <div class="card-body px-0 m-3">
                                <p>Proses foto produk makanan akan dilakukan plating oleh tim studio kami dengan
                                    menyesuaikan
                                    panduan dan brief dari klien / pemilik</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Card -->
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
                    <p class="text-muted">Official Partners:</p>
                </div>
                <div class="themesflat-spacer clearfix" data-desktop="47" data-mobile="60" data-smobile="60"
                    style="height:60px"></div>
            </div>
            <div class="col-md-12 justify-content-center">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-3 col-4">
                        <div class="mx-3 client-image">
                            <img class="max-w-11rem max-w-md-13rem mx-auto client-default" src="https://gosocial.co.id/assets/img/home/ocbc_partner.png" alt="Partner OCBC NISP">
                            <img class="max-w-11rem max-w-md-13rem mx-auto client-hover" style="display: none;" src="https://gosocial.co.id/assets/img/home/ocbc_partner.png" alt="Partner OCBC">
                        </div>
                    </div>

                    <div class="col-lg-3 col-4">
                        <a class="mx-3 client-image" href="https://www.bhinneka.com/toko-gosocial-indonesia" target="_blank">
                            <img class="max-w-11rem max-w-md-13rem mx-auto client-default" src="https://gosocial.co.id/assets/img/home/bhinekka_partner.png" alt="Parnter Bhinneka.com" style="">
                            <img class="max-w-11rem max-w-md-13rem mx-auto client-hover" style="display: none;" src="https://gosocial.co.id/assets/img/home/bhinekka_partner.png" alt="Partner Bhinneka">
                        </a>
                    </div>

                    <div class="col-lg-3 col-4">
                        <div class="mx-3 client-image">
                            <img class="max-w-11rem max-w-md-13rem mx-auto client-default" src="https://gosocial.co.id/assets/img/home/crewdible_partner.png" alt="Partner Crewdible">
                            <img class="max-w-11rem max-w-md-13rem mx-auto client-hover" style="display: none;" src="https://gosocial.co.id/assets/img/home/crewdible_partner.png" alt="Partner Crewdible">
                        </div>
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
@endsection
