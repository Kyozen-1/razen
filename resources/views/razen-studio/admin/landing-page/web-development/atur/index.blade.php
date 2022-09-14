@extends('razen-studio.admin.layouts.app')
@section('title', 'Admin - Razen Studio | Web Development | Atur')

@section('css')
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="{{ asset('acorn/acorn-elearning-portal/font/CS-Interface/style.css') }}">
<link rel="stylesheet" href="{{ asset('acorn/acorn-elearning-portal/css/vendor/datatables.min.css') }}" />
<link rel="stylesheet" href="{{ asset('acorn/acorn-elearning-portal/css/vendor/select2.min.css') }}" />
<link rel="stylesheet" href="{{ asset('acorn/acorn-elearning-portal/css/vendor/select2-bootstrap4.min.css') }}" />
<link rel="stylesheet" href="{{ asset('acorn/acorn-elearning-portal/css/vendor/bootstrap-datepicker3.standalone.min.css') }}" />
<link rel="stylesheet" href="{{ asset('acorn/acorn-elearning-portal/css/vendor/tagify.css') }}" />
<link rel="stylesheet" href="{{ asset('acorn/acorn-elearning-portal/css/vendor/dropzone.min.css') }}">
<link rel="stylesheet" href="{{ asset('dropify/css/dropify.min.css') }}">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
<link rel="stylesheet" type="text/css" href="{{ asset('/css/slick.css') }}"/>
@endsection

@section('content')
@php
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioWebDevelopment;

    $web_development = LandingpageRazenstudioWebDevelopment::first();

    $web_development_section_1 = json_decode($web_development->section_1, true);
    $web_development_section_2 = json_decode($web_development->section_2, true);
    $web_development_section_3 = json_decode($web_development->section_3, true);
    $web_development_section_4 = json_decode($web_development->section_4, true);
    $web_development_section_5 = json_decode($web_development->section_5, true);
    $web_development_section_6 = json_decode($web_development->section_6, true);
    $web_development_section_7 = json_decode($web_development->section_7, true);
    $web_development_section_8 = json_decode($web_development->section_8, true);
    $web_development_section_9 = json_decode($web_development->section_9, true);
    $web_development_section_10 = json_decode($web_development->section_10, true);
@endphp

<div class="page-title-container">
    <div class="row">
    <!-- Title Start -->
    <div class="col-12 col-md-7">
        <h1 class="mb-0 pb-0 display-4" id="title">Web Development - Atur</h1>
        <nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb">
            <ul class="breadcrumb pt-0">
                <li class="breadcrumb-item"><a href="{{ route('razen-studio.admin.dashboard.index') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="#">Landing Page</a></li>
                <li class="breadcrumb-item"><a href="#">Web Development</a></li>
                <li class="breadcrumb-item"><a href="{{ route('razen-studio.admin.commercial-photography.atur.index') }}">Atur</a></li>
            </ul>
        </nav>
    </div>
    <!-- Title End -->
    </div>
</div>

<h2 class="small-title">Web Development</h2>

<div class="card mb-5">
    <div class="card-body">
        <h2 class="small-title">Edit Section 1</h2>
        <div class="row mb-3">
            <div class="col-12">
                <img src="{{ asset('images/landingpage_razenstudio_screenshot/web-development/section_1.png') }}" alt="" class="img-fluid rounded">
            </div>
        </div>
        <form action="{{ route('razen-studio.admin.web-development.atur.section-1.store') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12 col-md-7">
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Title</label>
                        <input type="text" class="form-control" name="title" placeholder="Atur title page" value="{{$web_development_section_1?$web_development_section_1['title']:'' }}" required>
                    </div>
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Judul</label>
                        <input type="text" class="form-control" name="judul" placeholder="The First Hub Of" value="{{$web_development_section_1?$web_development_section_1['judul']:'' }}" required>
                    </div>
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Deskripsi</label>
                        <textarea name="deskripsi" rows="5" class="form-control" placeholder="GoSocial merupakan konsultan sekaligus penyedia layanan Jasa Digital Marketing untuk berbagai tahapan bisnis, hasil kolaborasi dari berbagai Agency & Profesional terbaik di Indonesia!" required>{{$web_development_section_1 ? $web_development_section_1['deskripsi']:''}}</textarea>
                    </div>
                </div>
                <div class="col-12 col-md-5">
                    <div class="position-relative form-group">
                        <div class="position-relative form-group">
                            <label for="" class="form-label">Gambar</label>
                            @if ($web_development_section_1)
                            <input type="file" class="dropify" name="gambar" data-height="300" data-allowed-file-extensions="png jpg jpeg webp" data-default-file="{{ asset('images/landingpage_razenstudio/web-development/'.$web_development_section_1['gambar']) }}" data-show-errors="true" required>
                            @else
                            <input type="file" class="dropify" name="gambar" data-height="300" data-allowed-file-extensions="png jpg jpeg webp" data-show-errors="true" required>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mb-0">Submit</button>
        </form>
    </div>
</div>

<div class="card mb-5">
    <div class="card-body">
        <h2 class="small-title">Edit Section 2</h2>
        <div class="row mb-3">
            <div class="col-12">
                <img src="{{ asset('images/landingpage_razenstudio_screenshot/web-development/section_2.png') }}" alt="" class="img-fluid rounded">
            </div>
        </div>
        <form action="{{ route('razen-studio.admin.web-development.atur.section-2.store') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12 col-md-7">
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Judul</label>
                        <input type="text" class="form-control" name="judul" placeholder="Kami Memproduksi Video Promosi / Profil yang Menarik & Informatif!" value="{{$web_development_section_2?$web_development_section_2['judul']:'' }}" required>
                    </div>
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Deskripsi</label>
                        <textarea name="deskripsi" rows="5" class="form-control" id="section_2" placeholder="GoSocial merupakan konsultan sekaligus penyedia layanan Jasa Digital Marketing untuk berbagai tahapan bisnis, hasil kolaborasi dari berbagai Agency & Profesional terbaik di Indonesia!" required>{{$web_development_section_2 ? $web_development_section_2['deskripsi']:''}}</textarea>
                    </div>
                </div>
                <div class="col-12 col-md-5">
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Gambar Kanan</label>
                        @if ($web_development_section_2)
                        <input type="file" class="dropify" name="gambar_kanan" data-height="300" data-allowed-file-extensions="png jpg jpeg webp" data-default-file="{{ asset('images/landingpage_razenstudio/web-development/'.$web_development_section_2['gambar_kanan']) }}" data-show-errors="true" required>
                        @else
                        <input type="file" class="dropify" name="gambar_kanan" data-height="300" data-allowed-file-extensions="png jpg jpeg webp" data-show-errors="true" required>
                        @endif
                    </div>
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Gambar Bawah</label>
                        @if ($web_development_section_2)
                        <input type="file" class="dropify" name="gambar_bawah" data-height="300" data-allowed-file-extensions="png jpg jpeg webp" data-default-file="{{ asset('images/landingpage_razenstudio/web-development/'.$web_development_section_2['gambar_bawah']) }}" data-show-errors="true" required>
                        @else
                        <input type="file" class="dropify" name="gambar_bawah" data-height="300" data-allowed-file-extensions="png jpg jpeg webp" data-show-errors="true" required>
                        @endif
                    </div>
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Link Youtube</label>
                        <input type="text" class="form-control" name="link_youtube" placeholder="Masukan link youtube" value="{{$web_development_section_2?$web_development_section_2['link_youtube']:'' }}" required>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mb-0">Submit</button>
        </form>
    </div>
</div>

<div class="card mb-5">
    <div class="card-body">
        <h2 class="small-title">Edit Section 3</h2>
        <div class="row mb-3">
            <div class="col-12">
                <img src="{{ asset('images/landingpage_razenstudio_screenshot/web-development/section_3.png') }}" alt="" class="img-fluid rounded">
            </div>
        </div>
        <form action="{{ route('razen-studio.admin.web-development.atur.section-3.store') }}" class="mb-3" novalidate="novalidate" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12">
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Sub Judul</label>
                        <input type="text" class="form-control" name="sub_judul" placeholder="Jasa Video Marketing" value="{{$web_development_section_3?$web_development_section_3['sub_judul']:'' }}" required>
                    </div>
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Judul</label>
                        <input type="text" class="form-control" name="judul" placeholder="Jasa Video Marketing" value="{{$web_development_section_3?$web_development_section_3['judul']:'' }}" required>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mb-0">Submit</button>
        </form>
        <form action="{{ route('razen-studio.admin.web-development.atur.section-3.item-1.store') }}" class="mb-3" novalidate="novalidate" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12 col-md-6">
                    <img src="{{ asset('images/landingpage_razenstudio_screenshot/web-development/section_3_item_1.png') }}" alt="" class="img-fluid rounded">
                </div>
                <div class="col-12 col-md-6">
                    <input type="hidden" name="item" value="jasa_pembuatan_landing_page">
                    @if ($web_development_section_3)
                        @if ($web_development_section_3['item'] != null)
                            @foreach ($web_development_section_3['item'] as $item)
                                @if ($item['item'] == 'jasa_pembuatan_landing_page')
                                    <div class="mb-3 position-relative form-group">
                                        <label for="" class="form-label">Deskripsi</label>
                                        <textarea name="deskripsi" rows="5" class="form-control" required>{{$item['deskripsi']}}</textarea>
                                    </div>
                                    <div class="mb-3 position-relative form-group">
                                        <label for="" class="form-label">Gambar</label>
                                        <input type="file" class="dropify" name="gambar" data-height="300" data-allowed-file-extensions="png jpg jpeg webp" data-default-file="{{ asset('images/landingpage_razenstudio/web-development/'.$item['gambar']) }}" data-show-errors="true" required>
                                    </div>
                                    <div class="mb-3 position-relative form-group" style="text-align: right">
                                        <button class="btn btn-primary waves-effect waves-light">Submit</button>
                                    </div>
                                @endif
                            @endforeach
                        @else
                            <div class="mb-3 position-relative form-group">
                                <label for="" class="form-label">Deskripsi</label>
                                <textarea name="deskripsi" rows="5" class="form-control" required></textarea>
                            </div>
                            <div class="mb-3 position-relative form-group">
                                <label for="" class="form-label">Gambar</label>
                                <input type="file" class="dropify" name="gambar" id="foto_produk_makanan" data-height="300" data-allowed-file-extensions="png jpg jpeg webp" data-show-errors="true" required>
                            </div>
                            <div class="mb-3 position-relative form-group" style="text-align: right">
                                <button class="btn btn-primary waves-effect waves-light">Submit</button>
                            </div>
                        @endif
                    @else
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Deskripsi</label>
                            <textarea name="deskripsi" rows="5" class="form-control" required></textarea>
                        </div>
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Gambar</label>
                            <input type="file" class="dropify" name="gambar" id="foto_produk_makanan" data-height="300" data-allowed-file-extensions="png jpg jpeg webp" data-show-errors="true" required>
                        </div>
                        <div class="mb-3 position-relative form-group" style="text-align: right">
                            <button class="btn btn-primary waves-effect waves-light">Submit</button>
                        </div>
                    @endif
                </div>
            </div>
        </form>
        <form action="{{ route('razen-studio.admin.web-development.atur.section-3.item-2.store') }}" class="mb-3" novalidate="novalidate" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12 col-md-6">
                    <img src="{{ asset('images/landingpage_razenstudio_screenshot/web-development/section_3_item_2.png') }}" alt="" class="img-fluid rounded">
                </div>
                <div class="col-12 col-md-6">
                    <input type="hidden" name="item" value="jasa_pembuatan_website_toko_online">
                    @if ($web_development_section_3)
                        @if ($web_development_section_3['item'] != null)
                            @foreach ($web_development_section_3['item'] as $item)
                                @if ($item['item'] == 'jasa_pembuatan_website_toko_online')
                                    <div class="mb-3 position-relative form-group">
                                        <label for="" class="form-label">Deskripsi</label>
                                        <textarea name="deskripsi" rows="5" class="form-control" required>{{$item['deskripsi']}}</textarea>
                                    </div>
                                    <div class="mb-3 position-relative form-group">
                                        <label for="" class="form-label">Gambar</label>
                                        <input type="file" class="dropify" name="gambar" data-height="300" data-allowed-file-extensions="png jpg jpeg webp" data-default-file="{{ asset('images/landingpage_razenstudio/web-development/'.$item['gambar']) }}" data-show-errors="true" required>
                                    </div>
                                    <div class="mb-3 position-relative form-group" style="text-align: right">
                                        <button class="btn btn-primary waves-effect waves-light">Submit</button>
                                    </div>
                                @endif
                            @endforeach
                        @else
                            <div class="mb-3 position-relative form-group">
                                <label for="" class="form-label">Deskripsi</label>
                                <textarea name="deskripsi" rows="5" class="form-control" required></textarea>
                            </div>
                            <div class="mb-3 position-relative form-group">
                                <label for="" class="form-label">Gambar</label>
                                <input type="file" class="dropify" name="gambar" id="foto_produk_makanan" data-height="300" data-allowed-file-extensions="png jpg jpeg webp" data-show-errors="true" required>
                            </div>
                            <div class="mb-3 position-relative form-group" style="text-align: right">
                                <button class="btn btn-primary waves-effect waves-light">Submit</button>
                            </div>
                        @endif
                    @else
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Deskripsi</label>
                            <textarea name="deskripsi" rows="5" class="form-control" required></textarea>
                        </div>
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Gambar</label>
                            <input type="file" class="dropify" name="gambar" id="foto_produk_makanan" data-height="300" data-allowed-file-extensions="png jpg jpeg webp" data-show-errors="true" required>
                        </div>
                        <div class="mb-3 position-relative form-group" style="text-align: right">
                            <button class="btn btn-primary waves-effect waves-light">Submit</button>
                        </div>
                    @endif
                </div>
            </div>
        </form>
        <form action="{{ route('razen-studio.admin.web-development.atur.section-3.item-3.store') }}" class="mb-3" novalidate="novalidate" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12 col-md-6">
                    <img src="{{ asset('images/landingpage_razenstudio_screenshot/web-development/section_3_item_3.png') }}" alt="" class="img-fluid rounded">
                </div>
                <div class="col-12 col-md-6">
                    <input type="hidden" name="item" value="jasa_pembuatan_website_perusahaan">
                        @if ($web_development_section_3)
                            @if ($web_development_section_3['item'] != null)
                            @foreach ($web_development_section_3['item'] as $item)
                                @if ($item['item'] == 'jasa_pembuatan_website_perusahaan')
                                    <div class="mb-3 position-relative form-group">
                                        <label for="" class="form-label">Deskripsi</label>
                                        <textarea name="deskripsi" rows="5" class="form-control" required>{{$item['deskripsi']}}</textarea>
                                    </div>
                                    <div class="mb-3 position-relative form-group">
                                        <label for="" class="form-label">Gambar</label>
                                        <input type="file" class="dropify" name="gambar" data-height="300" data-allowed-file-extensions="png jpg jpeg webp" data-default-file="{{ asset('images/landingpage_razenstudio/web-development/'.$item['gambar']) }}" data-show-errors="true" required>
                                    </div>
                                    <div class="mb-3 position-relative form-group" style="text-align: right">
                                        <button class="btn btn-primary waves-effect waves-light">Submit</button>
                                    </div>
                                @endif
                            @endforeach
                        @else
                            <div class="mb-3 position-relative form-group">
                                <label for="" class="form-label">Deskripsi</label>
                                <textarea name="deskripsi" rows="5" class="form-control" required></textarea>
                            </div>
                            <div class="mb-3 position-relative form-group">
                                <label for="" class="form-label">Gambar</label>
                                <input type="file" class="dropify" name="gambar" id="foto_produk_makanan" data-height="300" data-allowed-file-extensions="png jpg jpeg webp" data-show-errors="true" required>
                            </div>
                            <div class="mb-3 position-relative form-group" style="text-align: right">
                                <button class="btn btn-primary waves-effect waves-light">Submit</button>
                            </div>
                        @endif
                    @else
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Deskripsi</label>
                            <textarea name="deskripsi" rows="5" class="form-control" required></textarea>
                        </div>
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Gambar</label>
                            <input type="file" class="dropify" name="gambar" id="foto_produk_makanan" data-height="300" data-allowed-file-extensions="png jpg jpeg webp" data-show-errors="true" required>
                        </div>
                        <div class="mb-3 position-relative form-group" style="text-align: right">
                            <button class="btn btn-primary waves-effect waves-light">Submit</button>
                        </div>
                    @endif
                </div>
            </div>
        </form>
    </div>
</div>

<div class="card mb-5">
    <div class="card-body">
        <h2 class="small-title">Edit Section 4</h2>
        <div class="row mb-3">
            <div class="col-12 text-center">
                <img src="{{ asset('images/landingpage_razenstudio_screenshot/web-development/section_4.png') }}" alt="" class="img-fluid rounded">
            </div>
        </div>
        <form action="{{ route('razen-studio.admin.web-development.atur.section-4.store') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12">
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Sub Judul</label>
                        <input type="text" class="form-control" name="sub_judul" placeholder="Pilihan Paket" value="{{$web_development_section_4?$web_development_section_4['sub_judul']:'' }}" required>
                    </div>
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Judul</label>
                        <input type="text" class="form-control" name="judul" placeholder="Harga Jasa Pembuatan Website" value="{{$web_development_section_4?$web_development_section_4['judul']:'' }}" required>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mb-0">Submit</button>
        </form>
    </div>
</div>

<div class="card mb-5">
    <div class="card-body">
        <h2 class="small-title">Edit Section 5</h2>
        <div class="row mb-3">
            <div class="col-12">
                <img src="{{ asset('images/landingpage_razenstudio_screenshot/web-development/section_5.png') }}" alt="" class="img-fluid rounded">
            </div>
        </div>
        <form action="{{ route('razen-studio.admin.web-development.atur.section-5.store') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12 col-md-7">
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Judul</label>
                        <input type="text" class="form-control" name="judul" placeholder="Punya kebutuhan diluar paket diatas?" value="{{$web_development_section_5?$web_development_section_5['judul']:'' }}" required>
                    </div>
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Deskripsi</label>
                        <textarea name="deskripsi" rows="5" class="form-control" placeholder="Kami memiliki spesialisasi dalam membuat website bisnis, namun kami juga dapat mengerjakan berbagai permintaan website maupun aplikasi custom." required>{{$web_development_section_5 ? $web_development_section_5['deskripsi']:''}}</textarea>
                    </div>
                </div>
                <div class="col-12 col-md-5">
                    <div class="position-relative form-group">
                        <div class="position-relative form-group">
                            <label for="" class="form-label">Gambar</label>
                            @if ($web_development_section_5)
                            <input type="file" class="dropify" name="gambar" data-height="300" data-allowed-file-extensions="png jpg jpeg webp" data-default-file="{{ asset('images/landingpage_razenstudio/web-development/'.$web_development_section_5['gambar']) }}" data-show-errors="true" required>
                            @else
                            <input type="file" class="dropify" name="gambar" data-height="300" data-allowed-file-extensions="png jpg jpeg webp" data-show-errors="true" required>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mb-0">Submit</button>
        </form>
    </div>
</div>

<div class="card mb-5">
    <div class="card-body">
        <h2 class="small-title">Edit Section 6</h2>
        <div class="row mb-3">
            <div class="col-12">
                <img src="{{ asset('images/landingpage_razenstudio_screenshot/web-development/section_6.png') }}" alt="" class="img-fluid rounded">
            </div>
        </div>
        @if ($web_development_section_6 == null)
            <form action="{{ route('razen-studio.admin.web-development.atur.section-6.store') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Sub Judul</label>
                            <input type="text" class="form-control" name="sub_judul" placeholder="MENGAPA HARUS KAMI?" required>
                        </div>
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Judul</label>
                            <input name="judul" class="form-control" placeholder="Keuntungan Foto Produk bersama GoSocial" required>
                        </div>
                        <div class="mb-3 position-relative form-group">
                            <div class="row">
                                <div class="col-6">
                                    <label for="" class="form-label">Tambah Konten Section 6</label>
                                </div>
                                <div class="col-6" style="text-align: right">
                                    <button class="btn btn-icon btn-outline-success waves-effect mr-2 btn_tambah_section6" type="button"><i data-acorn-icon="plus"></i></button>
                                    <button class="btn btn-icon btn-outline-danger waves-effect mr-2 btn_hapus_section6" type="button"><i data-acorn-icon="minus"></i></button>
                                </div>
                            </div>
                        </div>
                        <div id="div_tambah_konten_section6"></div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mb-0">Submit</button>
            </form>
        @endif
        @if ($web_development_section_6 != null)
            <form action="{{ route('razen-studio.admin.web-development.atur.section-6.edit') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Sub Judul</label>
                            <input type="text" class="form-control" name="sub_judul" placeholder="MENGAPA HARUS KAMI?" value="{{ $web_development_section_6['sub_judul'] }}" required>
                        </div>
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Judul</label>
                            <input name="judul" class="form-control" placeholder="Keuntungan Foto Produk bersama GoSocial" value="{{$web_development_section_6['judul']}}" required>
                        </div>
                        <div class="mb-3 position-relative form-group">
                            <div class="row mb-3">
                                @foreach ($web_development_section_6['konten'] as $item)
                                    <div class="col-12 col-md-4 mb-5">
                                        <div class="card h-100 border">
                                            <button class="btn border-0 btn-icon btn_hapus_gambar_section6" type="button" value="{{$item['id']}}"><span class="badge rounded-pill bg-primary me-1 position-absolute e-3 t-n2 z-index-1">Hapus</span></button>
                                            <img src="{{ asset('images/landingpage_razenstudio/web-development/'.$item['logo_konten']) }}" class="card-img-top sh-22" alt="card image">
                                            <div class="card-body">
                                                <h5 class="heading mb-0">{{$item['judul_konten']}}</h5>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="mb-3 position-relative form-group">
                            <div class="row">
                                <div class="col-6">
                                    <label for="" class="form-label">Tambah Konten Section 6</label>
                                </div>
                                <div class="col-6" style="text-align: right">
                                    <button class="btn btn-icon btn-outline-success waves-effect mr-2 btn_tambah_section6" type="button"><i data-acorn-icon="plus"></i></button>
                                    <button class="btn btn-icon btn-outline-danger waves-effect mr-2 btn_hapus_section6" type="button"><i data-acorn-icon="minus"></i></button>
                                </div>
                            </div>
                        </div>
                        <div id="div_tambah_konten_section6"></div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mb-0">Submit</button>
            </form>
        @endif
    </div>
</div>

<div class="card mb-5">
    <div class="card-body">
        <h2 class="small-title">Edit Section 7</h2>
        <div class="row mb-3">
            <div class="col-12 text-center">
                <img src="{{ asset('images/landingpage_razenstudio_screenshot/web-development/section_7.png') }}" alt="" class="img-fluid rounded">
            </div>
        </div>
        <form action="{{ route('razen-studio.admin.web-development.atur.section-7.store') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12">
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Sub Judul</label>
                        <input type="text" class="form-control" name="sub_judul" placeholder="Pilihan Paket" value="{{$web_development_section_7?$web_development_section_7['sub_judul']:'' }}" required>
                    </div>
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Judul</label>
                        <input type="text" class="form-control" name="judul" placeholder="Harga Jasa Pembuatan Website" value="{{$web_development_section_7?$web_development_section_7['judul']:'' }}" required>
                    </div>
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Deskripsi</label>
                        <textarea name="deskripsi" rows="5" class="form-control" required>{{$web_development_section_7?$web_development_section_7['deskripsi']:'' }}</textarea>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mb-0">Submit</button>
        </form>
    </div>
</div>

<div class="card mb-5">
    <div class="card-body">
        <h2 class="small-title">Edit Section 8</h2>
        <div class="row mb-3">
            <div class="col-12">
                <img src="{{ asset('images/landingpage_razenstudio_screenshot/web-development/section_8.png') }}" alt="" class="img-fluid rounded">
            </div>
        </div>
        @if ($web_development_section_8 == null)
            <form action="{{ route('razen-studio.admin.web-development.atur.section-8.store') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Sub Judul</label>
                            <input type="text" class="form-control" name="sub_judul" placeholder="FAQ" required>
                        </div>
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Judul</label>
                            <input type="text" class="form-control" name="judul" placeholder="Frequently Asked Questions" required>
                        </div>
                        <div class="mb-3 position-relative form-group">
                            <div class="row">
                                <div class="col-6">
                                    <label for="" class="form-label">Tambah Konten Section 8</label>
                                </div>
                                <div class="col-6" style="text-align: right">
                                    <button class="btn btn-icon btn-outline-success waves-effect mr-2 btn_tambah_section8" type="button"><i data-acorn-icon="plus"></i></button>
                                    <button class="btn btn-icon btn-outline-danger waves-effect mr-2 btn_hapus_section8" type="button"><i data-acorn-icon="minus"></i></button>
                                </div>
                            </div>
                        </div>
                        <div id="div_tambah_konten_section8"></div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mb-0">Submit</button>
            </form>
        @endif
        @if ($web_development_section_8 != null)
            <form action="{{ route('razen-studio.admin.web-development.atur.section-8.edit') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Sub Judul</label>
                            <input type="text" class="form-control" name="sub_judul" value="{{$web_development_section_8['sub_judul']}}" placeholder="FAQ" required>
                        </div>
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Judul</label>
                            <input type="text" class="form-control" name="judul" value="{{$web_development_section_8['judul']}}" required>
                        </div>
                        <div class="mb-3 position-relative form-group">
                            <div class="row mb-3">
                                @foreach ($web_development_section_8['konten'] as $item)
                                <div class="col-12 col-md-4 mb-3">
                                    <div class="card h-100 border">
                                        <button class="btn border-0 btn-icon btn_hapus_data_section8" type="button" value="{{$item['id']}}"><span class="badge rounded-pill bg-primary me-1 position-absolute e-3 t-n2 z-index-1">Hapus</span></button>
                                        <div class="card-body">
                                            <h5 class="heading mb-3">{{$item['pertanyaan']}}</h5>
                                            <p>{{$item['jawaban']}}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <label for="" class="form-label">Tambah Konten Section 8</label>
                                </div>
                                <div class="col-6" style="text-align: right">
                                    <button class="btn btn-icon btn-outline-success waves-effect mr-2 btn_tambah_section8" type="button"><i data-acorn-icon="plus"></i></button>
                                    <button class="btn btn-icon btn-outline-danger waves-effect mr-2 btn_hapus_section8" type="button"><i data-acorn-icon="minus"></i></button>
                                </div>
                            </div>
                        </div>
                        <div id="div_tambah_konten_section8"></div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mb-0">Submit</button>
            </form>
        @endif
    </div>
</div>

<div class="card mb-5">
    <div class="card-body">
        <h2 class="small-title">Edit Section 9</h2>
        <div class="row mb-3">
            <div class="col-12">
                <img src="{{ asset('images/landingpage_razenstudio_screenshot/web-development/section_9.png') }}" alt="" class="img-fluid rounded">
            </div>
        </div>
        @if ($web_development_section_9 == null)
            <form action="{{ route('razen-studio.admin.web-development.atur.section-9.store') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Judul</label>
                            <input name="judul" class="form-control" placeholder="Lokasi" required>
                        </div>
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Deskripsi</label>
                            <textarea name="deskripsi" rows="5" class="form-control" required></textarea>
                        </div>
                        <div class="mb-3 position-relative form-group">
                            <div class="row">
                                <div class="col-6">
                                    <label for="" class="form-label">Tambah Konten Section 9</label>
                                </div>
                                <div class="col-6" style="text-align: right">
                                    <button class="btn btn-icon btn-outline-success waves-effect mr-2 btn_tambah_section9" type="button"><i data-acorn-icon="plus"></i></button>
                                    <button class="btn btn-icon btn-outline-danger waves-effect mr-2 btn_hapus_section9" type="button"><i data-acorn-icon="minus"></i></button>
                                </div>
                            </div>
                        </div>
                        <div id="div_tambah_konten_section9"></div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mb-0">Submit</button>
            </form>
        @endif
        @if ($web_development_section_9 != null)
            <form action="{{ route('razen-studio.admin.web-development.atur.section-9.edit') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Judul</label>
                            <input name="judul" class="form-control" placeholder="Lokasi" value="{{$web_development_section_9['judul']}}" required>
                        </div>
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Deskripsi</label>
                            <textarea name="deskripsi" rows="5" class="form-control" required>{{$web_development_section_9['deskripsi']}}</textarea>
                        </div>
                        <div class="mb-3 position-relative form-group">
                            <div class="row mb-3">
                                @foreach ($web_development_section_9['konten'] as $item)
                                    <div class="col-12 col-md-4 mb-5">
                                        <div class="card h-100 border">
                                            <button class="btn border-0 btn-icon btn_hapus_gambar_section9" type="button" value="{{$item['id']}}"><span class="badge rounded-pill bg-primary me-1 position-absolute e-3 t-n2 z-index-1">Hapus</span></button>
                                            <img src="{{ asset('images/landingpage_razenstudio/web-development/'.$item['logo_konten']) }}" class="card-img-top sh-22" alt="card image">
                                            <div class="card-body">
                                                <h5 class="heading mb-0">{{$item['lokasi_konten']}}</h5>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="mb-3 position-relative form-group">
                            <div class="row">
                                <div class="col-6">
                                    <label for="" class="form-label">Tambah Konten Section 9</label>
                                </div>
                                <div class="col-6" style="text-align: right">
                                    <button class="btn btn-icon btn-outline-success waves-effect mr-2 btn_tambah_section9" type="button"><i data-acorn-icon="plus"></i></button>
                                    <button class="btn btn-icon btn-outline-danger waves-effect mr-2 btn_hapus_section9" type="button"><i data-acorn-icon="minus"></i></button>
                                </div>
                            </div>
                        </div>
                        <div id="div_tambah_konten_section9"></div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mb-0">Submit</button>
            </form>
        @endif
    </div>
</div>

<div class="card mb-5">
    <div class="card-body">
        <h2 class="small-title">Edit Section 10</h2>
        <div class="row mb-3">
            <div class="col-12">
                <img src="{{ asset('images/landingpage_razenstudio_screenshot/web-development/section_10.png') }}" alt="" class="img-fluid rounded">
            </div>
        </div>
        <form action="{{ route('razen-studio.admin.web-development.atur.section-10.store') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12 col-md-7">
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Judul</label>
                        <input type="text" class="form-control" name="judul" placeholder="Punya kebutuhan diluar paket diatas?" value="{{$web_development_section_10?$web_development_section_10['judul']:'' }}" required>
                    </div>
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Deskripsi</label>
                        <textarea name="deskripsi" rows="5" class="form-control" placeholder="Kami memiliki spesialisasi dalam membuat website bisnis, namun kami juga dapat mengerjakan berbagai permintaan website maupun aplikasi custom." required>{{$web_development_section_10 ? $web_development_section_10['deskripsi']:''}}</textarea>
                    </div>
                </div>
                <div class="col-12 col-md-5">
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Gambar Kiri</label>
                        @if ($web_development_section_10)
                            <input type="file" class="dropify" name="gambar_kiri" data-height="300" data-allowed-file-extensions="png jpg jpeg webp" data-default-file="{{ asset('images/landingpage_razenstudio/web-development/'.$web_development_section_10['gambar_kiri']) }}" data-show-errors="true" required>
                        @else
                            <input type="file" class="dropify" name="gambar_kiri" data-height="300" data-allowed-file-extensions="png jpg jpeg webp" data-show-errors="true" required>
                        @endif
                    </div>
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Gambar Kanan</label>
                        @if ($web_development_section_10)
                            <input type="file" class="dropify" name="gambar_kanan" data-height="300" data-allowed-file-extensions="png jpg jpeg webp" data-default-file="{{ asset('images/landingpage_razenstudio/web-development/'.$web_development_section_10['gambar_kanan']) }}" data-show-errors="true" required>
                        @else
                            <input type="file" class="dropify" name="gambar_kanan" data-height="300" data-allowed-file-extensions="png jpg jpeg webp" data-show-errors="true" required>
                        @endif
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mb-0">Submit</button>
        </form>
    </div>
</div>
@endsection

@section('js')
<script src="{{ asset('acorn/acorn-elearning-portal/js/vendor/bootstrap-submenu.js') }}"></script>
<script src="{{ asset('acorn/acorn-elearning-portal/js/vendor/datatables.min.js') }}"></script>
<script src="{{ asset('acorn/acorn-elearning-portal/js/cs/scrollspy.js') }}"></script>
<script src="{{ asset('acorn/acorn-elearning-portal/js/vendor/jquery.validate/jquery.validate.min.js') }}"></script>
<script src="{{ asset('acorn/acorn-elearning-portal/js/vendor/jquery.validate/additional-methods.min.js') }}"></script>
<script src="{{ asset('acorn/acorn-elearning-portal/js/vendor/select2.full.min.js') }}"></script>
<script src="{{ asset('acorn/acorn-elearning-portal/js/vendor/datepicker/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('acorn/acorn-elearning-portal/js/vendor/tagify.min.js') }}"></script>
<script src="{{ asset('js/sweetalert.js') }}"></script>
<script src="{{ asset('dropify/js/dropify.min.js') }}"></script>
<script src="{{ asset('acorn/acorn-elearning-portal/js/vendor/dropzone.min.js') }}"></script>
<script src="{{ asset('acorn/acorn-elearning-portal/js/vendor/singleimageupload.js') }}"></script>
<script src="{{ asset('acorn/acorn-elearning-portal/js/cs/dropzone.templates.js') }}"></script>
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
    var count_section6 = 1;
    var count_section8 = 1;
    var count_section9 = 1;

    $(document).ready(function(){
        $('.dropify').dropify();
        $('.dropify-wrapper').css('line-height', '3rem');

        CKEDITOR.replace('section_2',{
            toolbarGroups: [{
                    "name": "basicstyles",
                    "groups": ["basicstyles"]
                },
                {
                    "name": 'clipboard',
                    "groups": ['Undo', 'Paste', 'Cut', 'Copy' ]
                },
                {
                    "name" : 'editing',
                    "groups" : ['Find', 'Replace', 'SelectAll']
                },
                {
                    "name": "paragraph",
                    "groups": ["list", "blocks"]
                },
                {
                    "name": "document",
                    "groups": ["mode"]
                },
                {
                    "name": "styles",
                    "groups": ["styles"]
                }
            ],
            // Remove the redundant buttons from toolbar groups defined above.
            removeButtons: 'Underline,Strike,Subscript,Superscript,Anchor,Source'
        });

        CKEDITOR.config.allowedContent = true;
    });

    dynamic_section6(count_section6);
    function dynamic_section6(number)
    {
        var urut = number - 1;
        html = '<div class="row border-top p-3">';
        html += '<div class="col-12 col-md-7">';
        html += '<div class="mb-3 position-relative form-group">';
        html += '<label for="" class="form-label">Judul Konten</label>';
        html += '<input name="judul_konten[]" class="form-control" placeholder="Social Media Engagement" required>';
        html += '</div>';
        html += '<div class="mb-3 position-relative form-group">';
        html += '<label for="" class="form-label">Deskripsi Konten</label>';
        html += '<textarea name="deskripsi_konten[]" rows="5" class="form-control" placeholder="Meningkatkan interaksi dan kredibilitas brand secara digital di Social Media, Marketplace, dll." required></textarea>';
        html += '</div>';
        html += '</div>';
        html += '<div class="col-12 col-md-5">';
        html += '<div class="position-relative form-group">';
        html += '<label for="" class="form-label">Logo Konten</label>';
        html += '<input type="file" class="dropify" name="logo_konten[]" data-height="300" data-allowed-file-extensions="svg png jpg jpeg" data-show-errors="true" required>';
        html += '</div>';
        html += '</div>';
        html += '</div>';

        if(number > 1)
        {
            $('#div_tambah_konten_section6').after(html);
            $('.dropify').dropify();
            $('.dropify-wrapper').css('line-height', '3rem');
        }
    }

    $(document).on('click', '.btn_tambah_section6',function(){
        count_section6++;
        dynamic_section6(count_section6);
    });

    $(document).on('click','.btn_hapus_section6',function(){
        var urut = count_section6;
        $('#div_tambah_konten_section6').next('div').remove();
        count_section6--;
        if(count_section6 < 1)
        {
            count_section6 = 1;
        }
    });

    $('.btn_hapus_gambar_section6').click(function(){
        var id = $(this).attr('value');
        return new swal({
            title: "Apakah Anda Yakin?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#1976D2",
            confirmButtonText: "Ya"
        }).then((result)=>{
            if(result.value)
            {
                $.ajax({
                    url: "{{ route('razen-studio.admin.web-development.atur.section-6.hapus.satu') }}",
                    method: "POST",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        id:id
                    },
                    dataType: "json",
                    beforeSend: function()
                    {
                        return new swal({
                            title: "Checking...",
                            text: "Harap Menunggu",
                            imageUrl: "{{ asset('/images/preloader.gif') }}",
                            showConfirmButton: false,
                            allowOutsideClick: false
                        });
                    },
                    success: function(data)
                    {
                        window.location.reload();
                    }
                });
            }
        });
    });

    dynamic_section8(count_section8);
    function dynamic_section8(number)
    {
        var urut = number - 1;
        html = '<div class="border-top p-3">';
        html += '<div class="mb-3 position-relative form-group">';
        html += '<label for="" class="form-label">Pertanyaan</label>';
        html += '<input name="pertanyaan[]" class="form-control" required>';
        html += '</div>';
        html += '<div class="mb-3 position-relative form-group">';
        html += '<label for="" class="form-label">Jawaban</label>';
        html += '<input name="jawaban[]"" class="form-control" required>';
        html += '</div>';
        html += '</div>';

        if(number > 1)
        {
            $('#div_tambah_konten_section8').after(html);
        }
    }

    $(document).on('click', '.btn_tambah_section8',function(){
        count_section8++;
        dynamic_section8(count_section8);
    });

    $(document).on('click','.btn_hapus_section8',function(){
        var urut = count_section8;
        $('#div_tambah_konten_section8').next('div').remove();
        count_section8--;
        if(count_section8 < 1)
        {
            count_section8 = 1;
        }
    });

    $('.btn_hapus_data_section8').click(function(){
        var id = $(this).attr('value');
        return new swal({
            title: "Apakah Anda Yakin?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#1976D2",
            confirmButtonText: "Ya"
        }).then((result)=>{
            if(result.value)
            {
                $.ajax({
                    url: "{{ route('razen-studio.admin.web-development.atur.section-8.hapus.satu') }}",
                    method: "POST",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        id:id
                    },
                    dataType: "json",
                    beforeSend: function()
                    {
                        return new swal({
                            title: "Checking...",
                            text: "Harap Menunggu",
                            imageUrl: "{{ asset('/images/preloader.gif') }}",
                            showConfirmButton: false,
                            allowOutsideClick: false
                        });
                    },
                    success: function(data)
                    {
                        window.location.reload();
                    }
                });
            }
        });
    });

    dynamic_section9(count_section9);
    function dynamic_section9(number)
    {
        var urut = number - 1;
        html = '<div class="row border-top p-3">';
        html += '<div class="col-12 col-md-7">';
        html += '<div class="mb-3 position-relative form-group">';
        html += '<label for="" class="form-label">Lokasi Konten</label>';
        html += '<input name="lokasi_konten[]" class="form-control" placeholder="Surabaya" required>';
        html += '</div>';
        html += '</div>';
        html += '<div class="col-12 col-md-5">';
        html += '<div class="position-relative form-group">';
        html += '<label for="" class="form-label">Logo Konten</label>';
        html += '<input type="file" class="dropify" name="logo_konten[]" data-height="300" data-allowed-file-extensions="svg png jpg jpeg" data-show-errors="true" required>';
        html += '</div>';
        html += '</div>';
        html += '</div>';

        if(number > 1)
        {
            $('#div_tambah_konten_section9').after(html);
            $('.dropify').dropify();
            $('.dropify-wrapper').css('line-height', '3rem');
        }
    }

    $(document).on('click', '.btn_tambah_section9',function(){
        count_section9++;
        dynamic_section9(count_section9);
    });

    $(document).on('click','.btn_hapus_section9',function(){
        var urut = count_section9;
        $('#div_tambah_konten_section9').next('div').remove();
        count_section9--;
        if(count_section9 < 1)
        {
            count_section9 = 1;
        }
    });

    $('.btn_hapus_gambar_section9').click(function(){
        var id = $(this).attr('value');
        return new swal({
            title: "Apakah Anda Yakin?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#1976D2",
            confirmButtonText: "Ya"
        }).then((result)=>{
            if(result.value)
            {
                $.ajax({
                    url: "{{ route('razen-studio.admin.web-development.atur.section-9.hapus.satu') }}",
                    method: "POST",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        id:id
                    },
                    dataType: "json",
                    beforeSend: function()
                    {
                        return new swal({
                            title: "Checking...",
                            text: "Harap Menunggu",
                            imageUrl: "{{ asset('/images/preloader.gif') }}",
                            showConfirmButton: false,
                            allowOutsideClick: false
                        });
                    },
                    success: function(data)
                    {
                        window.location.reload();
                    }
                });
            }
        });
    });
</script>
@endsection
