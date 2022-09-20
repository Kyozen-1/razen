@extends('razen-studio.admin.layouts.app')
@section('title', 'Admin - Razen Studio | Digital Campaign | Iklan Google')

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
    use App\Models\RazenStudio\LandingPage\DigitalCampaign\LandingpageRazenstudioIklanGoogle;

    $iklan_google = LandingpageRazenstudioIklanGoogle::first();
    if ($iklan_google) {
        $iklan_google_section_1 = json_decode($iklan_google->section_1, true);
        $iklan_google_section_2 = json_decode($iklan_google->section_2, true);
        $iklan_google_section_3 = json_decode($iklan_google->section_3, true);
        $iklan_google_section_4 = json_decode($iklan_google->section_4, true);
        $iklan_google_section_5 = json_decode($iklan_google->section_5, true);
        $iklan_google_section_6 = json_decode($iklan_google->section_6, true);
        $iklan_google_section_7 = json_decode($iklan_google->section_7, true);
        $iklan_google_section_8 = json_decode($iklan_google->section_8, true);
        $iklan_google_section_9 = json_decode($iklan_google->section_9, true);
        $iklan_google_section_10 = json_decode($iklan_google->section_10, true);
        $iklan_google_section_11 = json_decode($iklan_google->section_11, true);
    } else {
        $iklan_google_section_1 = [];
        $iklan_google_section_2 = [];
        $iklan_google_section_3 = [];
        $iklan_google_section_4 = [];
        $iklan_google_section_5 = [];
        $iklan_google_section_6 = [];
        $iklan_google_section_7 = [];
        $iklan_google_section_8 = [];
        $iklan_google_section_9 = [];
        $iklan_google_section_10 = [];
        $iklan_google_section_11 = [];
    }
@endphp

<div class="page-title-container">
    <div class="row">
        <!-- Title Start -->
        <div class="col-12 col-md-7">
            <h1 class="mb-0 pb-0 display-4" id="title">Digital Campaign - Iklan Google</h1>
            <nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb">
                <ul class="breadcrumb pt-0">
                    <li class="breadcrumb-item"><a href="{{ route('razen-studio.admin.dashboard.index') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="#">Landing Page</a></li>
                    <li class="breadcrumb-item"><a href="#">Digital Campaign</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('razen-studio.admin.digital-campaign.iklan-google.index') }}">Iklan Google</a></li>
                </ul>
            </nav>
        </div>
        <!-- Title End -->
    </div>
</div>

<h2 class="small-title">Iklan Google</h2>

<div class="card mb-5">
    <div class="card-body">
        <h2 class="small-title">Edit Section 1</h2>
        <div class="row mb-3">
            <div class="col-12">
                <img src="{{ asset('images/landingpage_razenstudio_screenshot/digital-campaign/iklan-google/section_1.png') }}" alt="" class="img-fluid rounded">
            </div>
        </div>
        <form action="{{ route('razen-studio.admin.digital-campaign.iklan-google.section-1.store') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12">
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Title</label>
                        <input type="text" class="form-control" name="title" placeholder="Untuk title pada page" value="{{$iklan_google_section_1?$iklan_google_section_1['title']:'' }}" required>
                    </div>
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Judul</label>
                        <input type="text" class="form-control" name="judul" placeholder="Jasa Desain Logo" value="{{$iklan_google_section_1?$iklan_google_section_1['judul']:'' }}" required>
                    </div>
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Deskripsi</label>
                        <textarea name="deskripsi" rows="5" class="form-control" placeholder="Layanan jasa desain logo berkualitas yang dikerjakan oleh tim desainer profesional." required>{{$iklan_google_section_1 ? $iklan_google_section_1['deskripsi']:''}}</textarea>
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
                <img src="{{ asset('images/landingpage_razenstudio_screenshot/digital-campaign/iklan-google/section_2.png') }}" alt="" class="img-fluid rounded">
            </div>
        </div>
        <form action="{{ route('razen-studio.admin.digital-campaign.iklan-google.section-2.store') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12 col-md-8">
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Judul</label>
                        <input type="text" class="form-control" name="judul" placeholder="Desain yang bagus?" value="{{$iklan_google_section_2?$iklan_google_section_2['judul']:'' }}" required>
                    </div>
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Deskripsi</label>
                        <textarea name="deskripsi" rows="5" class="form-control" id="section_2" required>{{$iklan_google_section_2 ? $iklan_google_section_2['deskripsi']:''}}</textarea>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="position-relative form-group">
                        <label for="" class="form-label">Gambar</label>
                        @if ($iklan_google_section_2)
                        <input type="file" class="dropify" name="gambar" data-height="300" data-allowed-file-extensions="png jpg jpeg webp" data-default-file="{{ asset('images/landingpage_razenstudio/digital-campaign/iklan-google/'.$iklan_google_section_2['gambar']) }}" data-show-errors="true" required>
                        @else
                        <input type="file" class="dropify" name="gambar" data-height="300" data-allowed-file-extensions="png jpg jpeg webp" data-show-errors="true" required>
                        @endif
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
                <img src="{{ asset('images/landingpage_razenstudio_screenshot/digital-campaign/iklan-google/section_3.png') }}" alt="" class="img-fluid rounded">
            </div>
        </div>
        <form action="{{ route('razen-studio.admin.digital-campaign.iklan-google.section-3.store') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12 col-md-8">
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Judul</label>
                        <input type="text" class="form-control" name="judul" placeholder="Desain yang bagus?" value="{{$iklan_google_section_3?$iklan_google_section_3['judul']:'' }}" required>
                    </div>
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Deskripsi</label>
                        <textarea name="deskripsi" rows="5" class="form-control" id="section_3" required>{{$iklan_google_section_3 ? $iklan_google_section_3['deskripsi']:''}}</textarea>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="position-relative form-group">
                        <label for="" class="form-label">Gambar</label>
                        @if ($iklan_google_section_3)
                        <input type="file" class="dropify" name="gambar" data-height="300" data-allowed-file-extensions="png jpg jpeg webp" data-default-file="{{ asset('images/landingpage_razenstudio/digital-campaign/iklan-google/'.$iklan_google_section_3['gambar']) }}" data-show-errors="true" required>
                        @else
                        <input type="file" class="dropify" name="gambar" data-height="300" data-allowed-file-extensions="png jpg jpeg webp" data-show-errors="true" required>
                        @endif
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mb-0">Submit</button>
        </form>
    </div>
</div>

<div class="card mb-5">
    <div class="card-body">
        <h2 class="small-title">Edit Section 4</h2>
        <div class="row mb-3">
            <div class="col-12">
                <img src="{{ asset('images/landingpage_razenstudio_screenshot/digital-campaign/iklan-google/section_4.png') }}" alt="" class="img-fluid rounded">
            </div>
        </div>
        <form action="{{ route('razen-studio.admin.digital-campaign.iklan-google.section-4.store') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12">
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Judul</label>
                        <input type="text" class="form-control" name="judul" placeholder="Desain yang bagus?" value="{{$iklan_google_section_4?$iklan_google_section_4['judul']:'' }}" required>
                    </div>
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Deskripsi</label>
                        <textarea name="deskripsi" rows="5" class="form-control" required>{{$iklan_google_section_4 ? $iklan_google_section_4['deskripsi']:''}}</textarea>
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
                <img src="{{ asset('images/landingpage_razenstudio_screenshot/digital-campaign/iklan-google/section_5.png') }}" alt="" class="img-fluid rounded">
            </div>
        </div>
        @if ($iklan_google_section_5 == null)
            <form action="{{ route('razen-studio.admin.digital-campaign.iklan-google.section-5.store') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Judul</label>
                            <input type="text" class="form-control" name="judul" placeholder="Desain Logo" required>
                        </div>
                        <div class="mb-3 position-relative form-group">
                            <div class="row">
                                <div class="col-6">
                                    <label for="" class="form-label">Tambah Konten Section 5</label>
                                </div>
                                <div class="col-6" style="text-align: right">
                                    <button class="btn btn-icon btn-outline-success waves-effect mr-2 btn_tambah_section5" type="button"><i data-acorn-icon="plus"></i></button>
                                    <button class="btn btn-icon btn-outline-danger waves-effect mr-2 btn_hapus_section5" type="button"><i data-acorn-icon="minus"></i></button>
                                </div>
                            </div>
                        </div>
                        <div id="div_tambah_konten_section5"></div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mb-0">Submit</button>
            </form>
        @endif
        @if ($iklan_google_section_5 != null)
            <form action="{{ route('razen-studio.admin.digital-campaign.iklan-google.section-5.edit') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Judul</label>
                            <input type="text" class="form-control" name="judul" value="{{$iklan_google_section_5['judul']}}" required>
                        </div>
                        <div class="mb-3 position-relative form-group">
                            <div class="row mb-3">
                                @foreach ($iklan_google_section_5['konten'] as $item)
                                <div class="col-12 col-md-4 mb-3">
                                    <div class="card h-100 border">
                                        <button class="btn border-0 btn-icon btn_hapus_data_section5" type="button" value="{{$item['id']}}"><span class="badge rounded-pill bg-primary me-1 position-absolute e-3 t-n2 z-index-1">Hapus</span></button>
                                        <div class="card-body">
                                            <h5 class="heading mb-3">{{$item['judul_konten']}}</h5>
                                            <p>{{$item['deskripsi_konten']}}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <label for="" class="form-label">Tambah Konten Section 5</label>
                                </div>
                                <div class="col-6" style="text-align: right">
                                    <button class="btn btn-icon btn-outline-success waves-effect mr-2 btn_tambah_section5" type="button"><i data-acorn-icon="plus"></i></button>
                                    <button class="btn btn-icon btn-outline-danger waves-effect mr-2 btn_hapus_section5" type="button"><i data-acorn-icon="minus"></i></button>
                                </div>
                            </div>
                        </div>
                        <div id="div_tambah_konten_section5"></div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mb-0">Submit</button>
            </form>
        @endif
    </div>
</div>

<div class="card mb-5">
    <div class="card-body">
        <h2 class="small-title">Edit Section 6</h2>
        <div class="row mb-3">
            <div class="col-12">
                <img src="{{ asset('images/landingpage_razenstudio_screenshot/digital-campaign/iklan-google/section_6.png') }}" alt="" class="img-fluid rounded">
            </div>
        </div>
        <form action="{{ route('razen-studio.admin.digital-campaign.iklan-google.section-6.store') }}" class="mb-3" novalidate="novalidate" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12">
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Sub Judul</label>
                        <input type="text" class="form-control" name="sub_judul" placeholder="Jasa Video Marketing" value="{{$iklan_google_section_6?$iklan_google_section_6['sub_judul']:'' }}" required>
                    </div>
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Judul</label>
                        <input type="text" class="form-control" name="judul" placeholder="Jasa Video Marketing" value="{{$iklan_google_section_6?$iklan_google_section_6['judul']:'' }}" required>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mb-0">Submit</button>
        </form>
        <form action="{{ route('razen-studio.admin.digital-campaign.iklan-google.section-6.item-1.store') }}" class="mb-3" novalidate="novalidate" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12 col-md-6">
                    <img src="{{ asset('images/landingpage_razenstudio_screenshot/web-development/section_3_item_1.png') }}" alt="" class="img-fluid rounded">
                </div>
                <div class="col-12 col-md-6">
                    <input type="hidden" name="item" value="google_search_ads">
                    @if ($iklan_google_section_6)
                        @if ($iklan_google_section_6['item'] != null)
                            @foreach ($iklan_google_section_6['item'] as $item)
                                @if ($item['item'] == 'google_search_ads')
                                    <div class="mb-3 position-relative form-group">
                                        <label for="" class="form-label">Deskripsi</label>
                                        <textarea name="deskripsi" rows="5" class="form-control" required>{{$item['deskripsi']}}</textarea>
                                    </div>
                                    <div class="mb-3 position-relative form-group">
                                        <label for="" class="form-label">Gambar</label>
                                        <input type="file" class="dropify" name="gambar" data-height="300" data-allowed-file-extensions="png jpg jpeg webp" data-default-file="{{ asset('images/landingpage_razenstudio/digital-campaign/iklan-google/'.$item['gambar']) }}" data-show-errors="true" required>
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
        <form action="{{ route('razen-studio.admin.digital-campaign.iklan-google.section-6.item-2.store') }}" class="mb-3" novalidate="novalidate" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12 col-md-6">
                    <img src="{{ asset('images/landingpage_razenstudio_screenshot/web-development/section_3_item_2.png') }}" alt="" class="img-fluid rounded">
                </div>
                <div class="col-12 col-md-6">
                    <input type="hidden" name="item" value="google_display_ads">
                    @if ($iklan_google_section_6)
                        @if ($iklan_google_section_6['item'] != null)
                            @foreach ($iklan_google_section_6['item'] as $item)
                                @if ($item['item'] == 'google_display_ads')
                                    <div class="mb-3 position-relative form-group">
                                        <label for="" class="form-label">Deskripsi</label>
                                        <textarea name="deskripsi" rows="5" class="form-control" required>{{$item['deskripsi']}}</textarea>
                                    </div>
                                    <div class="mb-3 position-relative form-group">
                                        <label for="" class="form-label">Gambar</label>
                                        <input type="file" class="dropify" name="gambar" data-height="300" data-allowed-file-extensions="png jpg jpeg webp" data-default-file="{{ asset('images/landingpage_razenstudio/digital-campaign/iklan-google/'.$item['gambar']) }}" data-show-errors="true" required>
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
        <form action="{{ route('razen-studio.admin.digital-campaign.iklan-google.section-6.item-3.store') }}" class="mb-3" novalidate="novalidate" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12 col-md-6">
                    <img src="{{ asset('images/landingpage_razenstudio_screenshot/web-development/section_3_item_3.png') }}" alt="" class="img-fluid rounded">
                </div>
                <div class="col-12 col-md-6">
                    <input type="hidden" name="item" value="google_discovery_ads">
                        @if ($iklan_google_section_6)
                            @if ($iklan_google_section_6['item'] != null)
                            @foreach ($iklan_google_section_6['item'] as $item)
                                @if ($item['item'] == 'google_discovery_ads')
                                    <div class="mb-3 position-relative form-group">
                                        <label for="" class="form-label">Deskripsi</label>
                                        <textarea name="deskripsi" rows="5" class="form-control" required>{{$item['deskripsi']}}</textarea>
                                    </div>
                                    <div class="mb-3 position-relative form-group">
                                        <label for="" class="form-label">Gambar</label>
                                        <input type="file" class="dropify" name="gambar" data-height="300" data-allowed-file-extensions="png jpg jpeg webp" data-default-file="{{ asset('images/landingpage_razenstudio/digital-campaign/iklan-google/'.$item['gambar']) }}" data-show-errors="true" required>
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
        <h2 class="small-title">Edit Section 7</h2>
        <div class="row mb-3">
            <div class="col-12">
                <img src="{{ asset('images/landingpage_razenstudio_screenshot/digital-campaign/iklan-google/section_7.png') }}" alt="" class="img-fluid rounded">
            </div>
        </div>
        <form class="mb-3" action="{{ route('razen-studio.admin.digital-campaign.iklan-google.section-7.store') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12">
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Judul</label>
                        <input type="text" class="form-control" name="judul" placeholder="Jasa Video Marketing" value="{{$iklan_google_section_7?$iklan_google_section_7['judul']:'' }}" required>
                    </div>
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Deskripsi</label>
                        <textarea name="deskripsi" rows="5" class="form-control" required>{{$iklan_google_section_7 ? $iklan_google_section_7['deskripsi']:''}}</textarea>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mb-0">Submit</button>
        </form>
        <form class="mb-3" action="{{ route('razen-studio.admin.digital-campaign.iklan-google.section-7.item-1.store') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12 col-md-4">
                    <img src="{{ asset('images/landingpage_razenstudio_screenshot/digital-campaign/iklan-instagram/section_6_item_1.png') }}" alt="" class="img-fluid rounded">
                </div>
                <div class="col-12 col-md-8">
                    <input type="hidden" name="item" value="item_1">
                    @if ($iklan_google_section_7 != null)
                        @foreach ($iklan_google_section_7['item'] as $item)
                            @if ($item['item'] == 'item_1')
                                <div class="mb-3 position-relative form-group">
                                    <label for="" class="form-label">Judul</label>
                                    <input type="text" class="form-control" name="judul" value="{{$item['judul']}}" required>
                                </div>
                                <div class="mb-3 position-relative form-group">
                                    <label for="" class="form-label">Deskripsi</label>
                                    <textarea name="deskripsi" rows="5" class="form-control" required>{{$item['deskripsi']}}</textarea>
                                </div>
                                <div class="mb-3 position-relative form-group">
                                    <label for="" class="form-label">Ikon</label>
                                    <input type="file" class="dropify" name="ikon" data-height="300" data-allowed-file-extensions="png jpg jpeg webp" data-default-file="{{ asset('images/landingpage_razenstudio/digital-campaign/iklan-google/'.$item['ikon']) }}" data-show-errors="true" required>
                                </div>
                                <div class="mb-3 position-relative form-group" style="text-align: right">
                                    <button class="btn btn-primary waves-effect waves-light">Submit</button>
                                </div>
                            @endif
                        @endforeach
                    @else
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Judul</label>
                            <input type="text" class="form-control" name="judul" required>
                        </div>
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Deskripsi</label>
                            <textarea name="deskripsi" rows="5" class="form-control" required></textarea>
                        </div>
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Ikon</label>
                            <input type="file" class="dropify" name="ikon" data-height="300" data-allowed-file-extensions="png jpg jpeg webp" data-show-errors="true" required>
                        </div>
                        <div class="mb-3 position-relative form-group" style="text-align: right">
                            <button class="btn btn-primary waves-effect waves-light">Submit</button>
                        </div>
                    @endif
                </div>
            </div>
        </form>
        <form action="{{ route('razen-studio.admin.digital-campaign.iklan-google.section-7.item-2.store') }}" class="mb-3" novalidate="novalidate" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12 col-md-4">
                    <img src="{{ asset('images/landingpage_razenstudio_screenshot/digital-campaign/iklan-instagram/section_6_item_2.png') }}" alt="" class="img-fluid rounded">
                </div>
                <div class="col-12 col-md-8">
                    <input type="hidden" name="item" value="item_2">
                    @if ($iklan_google_section_7 != null)
                        @foreach ($iklan_google_section_7['item'] as $item)
                            @if ($item['item'] == 'item_2')
                                <div class="mb-3 position-relative form-group">
                                    <label for="" class="form-label">Judul</label>
                                    <input type="text" class="form-control" name="judul" value="{{$item['judul']}}" required>
                                </div>
                                <div class="mb-3 position-relative form-group">
                                    <label for="" class="form-label">Deskripsi</label>
                                    <textarea name="deskripsi" rows="5" class="form-control" required>{{$item['deskripsi']}}</textarea>
                                </div>
                                <div class="mb-3 position-relative form-group">
                                    <label for="" class="form-label">Ikon</label>
                                    <input type="file" class="dropify" name="ikon" data-height="300" data-allowed-file-extensions="png jpg jpeg webp" data-default-file="{{ asset('images/landingpage_razenstudio/digital-campaign/iklan-google/'.$item['ikon']) }}" data-show-errors="true" required>
                                </div>
                                <div class="mb-3 position-relative form-group" style="text-align: right">
                                    <button class="btn btn-primary waves-effect waves-light">Submit</button>
                                </div>
                            @endif
                        @endforeach
                    @else
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Judul</label>
                            <input type="text" class="form-control" name="judul" required>
                        </div>
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Deskripsi</label>
                            <textarea name="deskripsi" rows="5" class="form-control" required></textarea>
                        </div>
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Ikon</label>
                            <input type="file" class="dropify" name="ikon" data-height="300" data-allowed-file-extensions="png jpg jpeg webp" data-show-errors="true" required>
                        </div>
                        <div class="mb-3 position-relative form-group" style="text-align: right">
                            <button class="btn btn-primary waves-effect waves-light">Submit</button>
                        </div>
                    @endif
                </div>
            </div>
        </form>
        <form action="{{ route('razen-studio.admin.digital-campaign.iklan-google.section-7.item-3.store') }}" class="mb-3" novalidate="novalidate" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12 col-md-4">
                    <img src="{{ asset('images/landingpage_razenstudio_screenshot/digital-campaign/iklan-instagram/section_6_item_3.png') }}" alt="" class="img-fluid rounded">
                </div>
                <div class="col-12 col-md-8">
                    <input type="hidden" name="item" value="item_3">
                    @if ($iklan_google_section_7 != null)
                        @foreach ($iklan_google_section_7['item'] as $item)
                            @if ($item['item'] == 'item_3')
                                <div class="mb-3 position-relative form-group">
                                    <label for="" class="form-label">Judul</label>
                                    <input type="text" class="form-control" name="judul" value="{{$item['judul']}}" required>
                                </div>
                                <div class="mb-3 position-relative form-group">
                                    <label for="" class="form-label">Deskripsi</label>
                                    <textarea name="deskripsi" rows="5" class="form-control" required>{{$item['deskripsi']}}</textarea>
                                </div>
                                <div class="mb-3 position-relative form-group">
                                    <label for="" class="form-label">Ikon</label>
                                    <input type="file" class="dropify" name="ikon" data-height="300" data-allowed-file-extensions="png jpg jpeg webp" data-default-file="{{ asset('images/landingpage_razenstudio/digital-campaign/iklan-google/'.$item['ikon']) }}" data-show-errors="true" required>
                                </div>
                                <div class="mb-3 position-relative form-group" style="text-align: right">
                                    <button class="btn btn-primary waves-effect waves-light">Submit</button>
                                </div>
                            @endif
                        @endforeach
                    @else
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Judul</label>
                            <input type="text" class="form-control" name="judul" required>
                        </div>
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Deskripsi</label>
                            <textarea name="deskripsi" rows="5" class="form-control" required></textarea>
                        </div>
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Ikon</label>
                            <input type="file" class="dropify" name="ikon" data-height="300" data-allowed-file-extensions="png jpg jpeg webp" data-show-errors="true" required>
                        </div>
                        <div class="mb-3 position-relative form-group" style="text-align: right">
                            <button class="btn btn-primary waves-effect waves-light">Submit</button>
                        </div>
                    @endif
                </div>
            </div>
        </form>
        <form action="{{ route('razen-studio.admin.digital-campaign.iklan-google.section-7.item-4.store') }}" class="mb-3" novalidate="novalidate" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12 col-md-4">
                    <img src="{{ asset('images/landingpage_razenstudio_screenshot/digital-campaign/iklan-google/section_7_item_4.png') }}" alt="" class="img-fluid rounded">
                </div>
                <div class="col-12 col-md-8">
                    <input type="hidden" name="item" value="item_4">
                    @if ($iklan_google_section_7 != null)
                        @foreach ($iklan_google_section_7['item'] as $item)
                            @if ($item['item'] == 'item_4')
                                <div class="mb-3 position-relative form-group">
                                    <label for="" class="form-label">Judul</label>
                                    <input type="text" class="form-control" name="judul" value="{{$item['judul']}}" required>
                                </div>
                                <div class="mb-3 position-relative form-group">
                                    <label for="" class="form-label">Gambar</label>
                                    <input type="file" class="dropify" name="gambar" data-height="300" data-allowed-file-extensions="png jpg jpeg webp" data-default-file="{{ asset('images/landingpage_razenstudio/digital-campaign/iklan-google/'.$item['gambar']) }}" data-show-errors="true" required>
                                </div>
                                <div class="mb-3 position-relative form-group">
                                    <label for="" class="form-label">Disklaimer</label>
                                    <textarea name="disklaimer" rows="5" class="form-control" required>{{$item['disklaimer']}}</textarea>
                                </div>
                                <div class="mb-3 position-relative form-group" style="text-align: right">
                                    <button class="btn btn-primary waves-effect waves-light">Submit</button>
                                </div>
                            @endif
                        @endforeach
                    @else
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Judul</label>
                            <input type="text" class="form-control" name="judul" required>
                        </div>
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Gambar</label>
                            <input type="file" class="dropify" name="gambar" data-height="300" data-allowed-file-extensions="png jpg jpeg webp" data-show-errors="true" required>
                        </div>
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Disklaimer</label>
                            <textarea name="disklaimer" rows="5" class="form-control" required></textarea>
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
        <h2 class="small-title">Edit Section 8</h2>
        <div class="row mb-3">
            <div class="col-12">
                <img src="{{ asset('images/landingpage_razenstudio_screenshot/digital-campaign/iklan-google/section_8.png') }}" alt="" class="img-fluid rounded">
            </div>
        </div>
        <form action="{{ route('razen-studio.admin.digital-campaign.iklan-google.section-8.store') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12">
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Sub Judul</label>
                        <input type="text" class="form-control" name="sub_judul" placeholder="Pricing" value="{{$iklan_google_section_8?$iklan_google_section_8['sub_judul']:'' }}" required>
                    </div>
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Judul</label>
                        <input type="text" class="form-control" name="judul" placeholder="Paket Harga Iklan Instagram" value="{{$iklan_google_section_8?$iklan_google_section_8['judul']:'' }}" required>
                    </div>
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Deskripsi</label>
                        <textarea name="deskripsi" rows="5" class="form-control" placeholder="Paket iklan akan disesuaikan dengan budget iklan yang akan dikeluarkan setiap bulannya.." required>{{$iklan_google_section_8 ? $iklan_google_section_8['deskripsi']:''}}</textarea>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mb-0">Submit</button>
        </form>
    </div>
</div>

<div class="card mb-5">
    <div class="card-body">
        <h2 class="small-title">Edit Section 9</h2>
        <div class="row mb-3">
            <div class="col-12">
                <img src="{{ asset('images/landingpage_razenstudio_screenshot/digital-campaign/iklan-google/section_9.png') }}" alt="" class="img-fluid rounded">
            </div>
        </div>
        @if ($iklan_google_section_9 == null)
            <form action="{{ route('razen-studio.admin.digital-campaign.iklan-google.section-9.store') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-12">
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
        @if ($iklan_google_section_9 != null)
            <form action="{{ route('razen-studio.admin.digital-campaign.iklan-google.section-9.edit') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="mb-3 position-relative form-group">
                            <div class="row mb-3">
                                @foreach ($iklan_google_section_9 as $item)
                                    <div class="col-12 col-md-4 mb-5">
                                        <div class="card h-100 border">
                                            <button class="btn border-0 btn-icon btn_hapus_gambar_section9" type="button" value="{{$item['id']}}"><span class="badge rounded-pill bg-primary me-1 position-absolute e-3 t-n2 z-index-1">Hapus</span></button>
                                            <img src="{{ asset('images/landingpage_razenstudio/digital-campaign/iklan-google/'.$item['logo_konten']) }}" class="card-img-top sh-22" alt="card image">
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
                <img src="{{ asset('images/landingpage_razenstudio_screenshot/digital-campaign/iklan-google/section_10.png') }}" alt="" class="img-fluid rounded">
            </div>
        </div>
        @if ($iklan_google_section_10 == null)
            <form action="{{ route('razen-studio.admin.digital-campaign.iklan-google.section-10.store') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Sub Judul</label>
                            <input type="text" class="form-control" name="sub_judul" placeholder="What we do" required>
                        </div>
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Judul</label>
                            <input name="judul" class="form-control" placeholder="Jasa Digital Marketing" required>
                        </div>
                        <div class="mb-3 position-relative form-group">
                            <div class="row">
                                <div class="col-6">
                                    <label for="" class="form-label">Tambah Konten Section 10</label>
                                </div>
                                <div class="col-6" style="text-align: right">
                                    <button class="btn btn-icon btn-outline-success waves-effect mr-2 btn_tambah_section10" type="button"><i data-acorn-icon="plus"></i></button>
                                    <button class="btn btn-icon btn-outline-danger waves-effect mr-2 btn_hapus_section10" type="button"><i data-acorn-icon="minus"></i></button>
                                </div>
                            </div>
                        </div>
                        <div id="div_tambah_konten_section10"></div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mb-0">Submit</button>
            </form>
        @endif
        @if ($iklan_google_section_10 != null)
            <form action="{{ route('razen-studio.admin.digital-campaign.iklan-google.section-10.edit') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Sub Judul</label>
                            <input type="text" class="form-control" name="sub_judul" placeholder="What we do" value="{{ $iklan_google_section_10['sub_judul'] }}" required>
                        </div>
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Judul</label>
                            <input name="judul" class="form-control" placeholder="Jasa Digital Marketing" value="{{$iklan_google_section_10['judul']}}" required>
                        </div>
                        <div class="mb-3 position-relative form-group">
                            <div class="row mb-3">
                                @foreach ($iklan_google_section_10['konten'] as $item)
                                    <div class="col-12 col-md-4 mb-5">
                                        <div class="card h-100 border">
                                            <button class="btn border-0 btn-icon btn_hapus_gambar_section10" type="button" value="{{$item['id']}}"><span class="badge rounded-pill bg-primary me-1 position-absolute e-3 t-n2 z-index-1">Hapus</span></button>
                                            <img src="{{ asset('images/landingpage_razenstudio/digital-campaign/iklan-google/'.$item['logo_konten']) }}" class="card-img-top sh-22" alt="card image">
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
                                    <label for="" class="form-label">Tambah Konten Section 10</label>
                                </div>
                                <div class="col-6" style="text-align: right">
                                    <button class="btn btn-icon btn-outline-success waves-effect mr-2 btn_tambah_section10" type="button"><i data-acorn-icon="plus"></i></button>
                                    <button class="btn btn-icon btn-outline-danger waves-effect mr-2 btn_hapus_section10" type="button"><i data-acorn-icon="minus"></i></button>
                                </div>
                            </div>
                        </div>
                        <div id="div_tambah_konten_section10"></div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mb-0">Submit</button>
            </form>
        @endif
    </div>
</div>

<div class="card mb-5">
    <div class="card-body">
        <h2 class="small-title">Edit Section 11</h2>
        <div class="row mb-3">
            <div class="col-12">
                <img src="{{ asset('images/landingpage_razenstudio_screenshot/digital-campaign/iklan-google/section_11.png') }}" alt="" class="img-fluid rounded">
            </div>
        </div>
        @if ($iklan_google_section_11  == null)
            <form action="{{ route('razen-studio.admin.digital-campaign.iklan-google.section-11.store') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
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
                                    <label for="" class="form-label">Tambah Konten Section 11</label>
                                </div>
                                <div class="col-6" style="text-align: right">
                                    <button class="btn btn-icon btn-outline-success waves-effect mr-2 btn_tambah_section11" type="button"><i data-acorn-icon="plus"></i></button>
                                    <button class="btn btn-icon btn-outline-danger waves-effect mr-2 btn_hapus_section11" type="button"><i data-acorn-icon="minus"></i></button>
                                </div>
                            </div>
                        </div>
                        <div id="div_tambah_konten_section11"></div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mb-0">Submit</button>
            </form>
        @endif
        @if ($iklan_google_section_11  != null)
            <form action="{{ route('razen-studio.admin.digital-campaign.iklan-google.section-11.edit') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Sub Judul</label>
                            <input type="text" class="form-control" name="sub_judul" value="{{$iklan_google_section_11 ['sub_judul']}}" placeholder="FAQ" required>
                        </div>
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Judul</label>
                            <input type="text" class="form-control" name="judul" value="{{$iklan_google_section_11 ['judul']}}" required>
                        </div>
                        <div class="mb-3 position-relative form-group">
                            <div class="row mb-3">
                                @foreach ($iklan_google_section_11 ['konten'] as $item)
                                <div class="col-12 col-md-4 mb-3">
                                    <div class="card h-100 border">
                                        <button class="btn border-0 btn-icon btn_hapus_data_section11" type="button" value="{{$item['id']}}"><span class="badge rounded-pill bg-primary me-1 position-absolute e-3 t-n2 z-index-1">Hapus</span></button>
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
                                    <label for="" class="form-label">Tambah Konten Section 11</label>
                                </div>
                                <div class="col-6" style="text-align: right">
                                    <button class="btn btn-icon btn-outline-success waves-effect mr-2 btn_tambah_section11" type="button"><i data-acorn-icon="plus"></i></button>
                                    <button class="btn btn-icon btn-outline-danger waves-effect mr-2 btn_hapus_section11" type="button"><i data-acorn-icon="minus"></i></button>
                                </div>
                            </div>
                        </div>
                        <div id="div_tambah_konten_section11"></div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mb-0">Submit</button>
            </form>
        @endif
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
        var count_section5 = 1;
        var count_section9 = 1;
        var count_section10 = 1;
        var count_section11 = 1;

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

            CKEDITOR.replace('section_3',{
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

        dynamic_section5(count_section5);
        function dynamic_section5(number)
        {
            var urut = number - 1;
            html = '<div class="border-top p-3">';
            html += '<div class="mb-3 position-relative form-group">';
            html += '<label for="" class="form-label">Judul Konten</label>';
            html += '<input name="judul_konten[]" class="form-control" placeholder="Pilih Paket" required>';
            html += '</div>';
            html += '<div class="mb-3 position-relative form-group">';
            html += '<label for="" class="form-label">Deskripsi Konten</label>';
            html += '<input name="deskripsi_konten[]"" class="form-control" placeholder="Pilih layanan sesuai dengan kebutuhan." required>';
            html += '</div>';
            html += '</div>';

            if(number > 1)
            {
                $('#div_tambah_konten_section5').after(html);
            }
        }

        $(document).on('click', '.btn_tambah_section5',function(){
            count_section5++;
            dynamic_section5(count_section5);
        });

        $(document).on('click','.btn_hapus_section5',function(){
            var urut = count_section5;
            $('#div_tambah_konten_section5').next('div').remove();
            count_section5--;
            if(count_section5 < 1)
            {
                count_section5 = 1;
            }
        });

        $('.btn_hapus_data_section5').click(function(){
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
                        url: "{{ route('razen-studio.admin.digital-campaign.iklan-google.section-5.hapus.satu') }}",
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
                        url: "{{ route('razen-studio.admin.digital-campaign.iklan-google.section-9.hapus.satu') }}",
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

        dynamic_section10(count_section10);
        function dynamic_section10(number)
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
            html += '<div class="mb-3 position-relative form-group">';
            html += '<label for="" class="form-label">Harga Konten</label>';
            html += '<input name="harga_konten[]" class="form-control" placeholder="Mulai dari 1.5 Jt" required>';
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
                $('#div_tambah_konten_section10').after(html);
                $('.dropify').dropify();
                $('.dropify-wrapper').css('line-height', '3rem');
            }
        }

        $(document).on('click', '.btn_tambah_section10',function(){
            count_section10++;
            dynamic_section10(count_section10);
        });

        $(document).on('click','.btn_hapus_section10',function(){
            var urut = count_section10;
            $('#div_tambah_konten_section10').next('div').remove();
            count_section10--;
            if(count_section10 < 1)
            {
                count_section10 = 1;
            }
        });

        $('.btn_hapus_gambar_section10').click(function(){
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
                        url: "{{ route('razen-studio.admin.digital-campaign.iklan-google.section-10.hapus.satu') }}",
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

        dynamic_section11(count_section11);
        function dynamic_section11(number)
        {
            var urut = number - 1;
            html = '<div class="border-top p-3">';
            html += '<div class="mb-3 position-relative form-group">';
            html += '<label for="" class="form-label">Pertanyaan</label>';
            html += '<input name="pertanyaan[]" class="form-control" required>';
            html += '</div>';
            html += '<div class="mb-3 position-relative form-group">';
            html += '<label for="" class="form-label">Jawaban</label>';
            html += '<textarea name="jawaban[]"" class="form-control" rows="5" required></textarea>';
            html += '</div>';
            html += '</div>';

            if(number > 1)
            {
                $('#div_tambah_konten_section11').after(html);
            }
        }

        $(document).on('click', '.btn_tambah_section11',function(){
            count_section11++;
            dynamic_section11(count_section11);
        });

        $(document).on('click','.btn_hapus_section11',function(){
            var urut = count_section11;
            $('#div_tambah_konten_section11').next('div').remove();
            count_section11--;
            if(count_section11 < 1)
            {
                count_section11 = 1;
            }
        });

        $('.btn_hapus_data_section11').click(function(){
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
                        url: "{{ route('razen-studio.admin.digital-campaign.iklan-google.section-11.hapus.satu') }}",
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
