@extends('razen-studio.admin.layouts.app')
@section('title', 'Admin - Razen Studio | Search Engine Optimization | Atur')

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
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioSearchEngineOptimization;
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioItemReviewSearchEngineOptimization;

    $search_engine_optimization = LandingpageRazenstudioSearchEngineOptimization::first();
    if ($search_engine_optimization) {
        $search_engine_optimization_section_1 = json_decode($search_engine_optimization->section_1, true);
        $search_engine_optimization_section_2 = json_decode($search_engine_optimization->section_2, true);
        $search_engine_optimization_section_3 = json_decode($search_engine_optimization->section_3, true);
        $search_engine_optimization_section_4 = json_decode($search_engine_optimization->section_4, true);
        $search_engine_optimization_section_5 = json_decode($search_engine_optimization->section_5, true);
        $search_engine_optimization_section_6 = json_decode($search_engine_optimization->section_6, true);
        $search_engine_optimization_section_7 = json_decode($search_engine_optimization->section_7, true);
    } else {
        $search_engine_optimization_section_1 = [];
        $search_engine_optimization_section_2 = [];
        $search_engine_optimization_section_3 = [];
        $search_engine_optimization_section_4 = [];
        $search_engine_optimization_section_5 = [];
        $search_engine_optimization_section_6 = [];
        $search_engine_optimization_section_7 = [];
    }

    $cek_item_review = LandingpageRazenstudioItemReviewSearchEngineOptimization::first();
@endphp

<div class="page-title-container">
    <div class="row">
        <!-- Title Start -->
        <div class="col-12 col-md-7">
            <h1 class="mb-0 pb-0 display-4" id="title">Search Engine Optimization - Atur</h1>
            <nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb">
                <ul class="breadcrumb pt-0">
                    <li class="breadcrumb-item"><a href="{{ route('razen-studio.admin.dashboard.index') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="#">Landing Page</a></li>
                    <li class="breadcrumb-item"><a href="#">Search Engine Optimization</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('razen-studio.admin.search-engine-optimization.atur.index') }}">Atur</a></li>
                </ul>
            </nav>
        </div>
        <!-- Title End -->
    </div>
</div>

<h2 class="small-title">Atur</h2>

<div class="card mb-5">
    <div class="card-body">
        <h2 class="small-title">Edit Section 1</h2>
        <div class="row mb-3">
            <div class="col-12">
                <img src="{{ asset('images/landingpage_razenstudio_screenshot/search-engine-optimization/section_1.png') }}" alt="" class="img-fluid rounded">
            </div>
        </div>
        <form action="{{ route('razen-studio.admin.search-engine-optimization.atur.section-1.store') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12 col-md-8">
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Sub Judul</label>
                        <input type="text" class="form-control" name="sub_judul" placeholder="Desain yang bagus?" value="{{$search_engine_optimization_section_1?$search_engine_optimization_section_1['sub_judul']:'' }}" required>
                    </div>
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Judul</label>
                        <input type="text" class="form-control" name="judul" placeholder="Desain yang bagus?" value="{{$search_engine_optimization_section_1?$search_engine_optimization_section_1['judul']:'' }}" required>
                    </div>
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Deskripsi</label>
                        <textarea name="deskripsi" rows="5" class="form-control" id="section_1" required>{{$search_engine_optimization_section_1 ? $search_engine_optimization_section_1['deskripsi']:''}}</textarea>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="position-relative form-group">
                        <label for="" class="form-label">Gambar</label>
                        @if ($search_engine_optimization_section_1)
                        <input type="file" class="dropify" name="gambar" data-height="300" data-allowed-file-extensions="png jpg jpeg webp" data-default-file="{{ asset('images/landingpage_razenstudio/search-engine-optimization/'.$search_engine_optimization_section_1['gambar']) }}" data-show-errors="true" required>
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
        <h2 class="small-title">Edit Section 2</h2>
        <div class="row mb-3">
            <div class="col-12 text-center">
                <img src="{{ asset('images/landingpage_razenstudio_screenshot/search-engine-optimization/section_2.png') }}" alt="" class="img-fluid rounded">
            </div>
        </div>
        @if ($search_engine_optimization_section_2 == null)
            <form action="{{ route('razen-studio.admin.search-engine-optimization.atur.section-2.store') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
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
                                    <label for="" class="form-label">Tambah Konten Section 2</label>
                                </div>
                                <div class="col-6" style="text-align: right">
                                    <button class="btn btn-icon btn-outline-success waves-effect mr-2 btn_tambah_section2" type="button"><i data-acorn-icon="plus"></i></button>
                                    <button class="btn btn-icon btn-outline-danger waves-effect mr-2 btn_hapus_section2" type="button"><i data-acorn-icon="minus"></i></button>
                                </div>
                            </div>
                        </div>
                        <div id="div_tambah_konten_section2"></div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mb-0">Submit</button>
            </form>
        @endif
        @if ($search_engine_optimization_section_2 != null)
            <form action="{{ route('razen-studio.admin.search-engine-optimization.atur.section-2.edit') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Sub Judul</label>
                            <input type="text" class="form-control" name="sub_judul" placeholder="What we do" value="{{ $search_engine_optimization_section_2['sub_judul'] }}" required>
                        </div>
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Judul</label>
                            <input name="judul" class="form-control" placeholder="Jasa Digital Marketing" value="{{$search_engine_optimization_section_2['judul']}}" required>
                        </div>
                        <div class="mb-3 position-relative form-group">
                            <div class="row mb-3">
                                @foreach ($search_engine_optimization_section_2['konten'] as $item)
                                    <div class="col-12 col-md-4 mb-5">
                                        <div class="card h-100 border">
                                            <button class="btn border-0 btn-icon btn_hapus_gambar_section2" type="button" value="{{$item['id']}}"><span class="badge rounded-pill bg-primary me-1 position-absolute e-3 t-n2 z-index-1">Hapus</span></button>
                                            <img src="{{ asset('images/landingpage_razenstudio/search-engine-optimization/'.$item['logo_konten']) }}" class="card-img-top sh-22" alt="card image">
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
                                    <label for="" class="form-label">Tambah Konten Section 2</label>
                                </div>
                                <div class="col-6" style="text-align: right">
                                    <button class="btn btn-icon btn-outline-success waves-effect mr-2 btn_tambah_section2" type="button"><i data-acorn-icon="plus"></i></button>
                                    <button class="btn btn-icon btn-outline-danger waves-effect mr-2 btn_hapus_section2" type="button"><i data-acorn-icon="minus"></i></button>
                                </div>
                            </div>
                        </div>
                        <div id="div_tambah_konten_section2"></div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mb-0">Submit</button>
            </form>
        @endif
    </div>
</div>

<div class="card mb-5">
    <div class="card-body">
        <h2 class="small-title">Edit Section Item Review</h2>
        <div class="row mb-3">
            <div class="col-12">
                <img src="{{ asset('images/landingpage_razenstudio_screenshot/search-engine-optimization/item_review.png') }}" alt="" class="img-fluid rounded">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-6 justify-content-center align-self-center">
                <label for="" class="small-titled">Tambah Item Review</label>
            </div>
            <div class="col-6" style="text-align: right">
                <button class="btn btn-outline-success waves-effect waves-light" id="btn_add_section_3" type="button" data-bs-toggle="modal" data-bs-target="#addSection3Modal">Tambah</button>
            </div>
        </div>
        <div class="row mb-3">
            @if ($cek_item_review)
                @php
                    $reviews = LandingpageRazenstudioItemReviewSearchEngineOptimization::all();
                @endphp
                @foreach ($reviews as $review)
                    <div class="col-12 col-md-4 mb-4">
                        <div class="card border h-100">
                            <img src="{{ asset('images/landingpage_razenstudio/search-engine-optimization/'.$review->gambar) }}" class="card-img-top sh-22" alt="card image">
                            <div class="card-body pb-0">
                                <p>
                                    <b>Studi Kasus: </b>
                                    <br>
                                    {{$review->studi_kasus}}
                                </p>
                                <p>
                                    <b>Goals: </b>
                                    <br>
                                    {!!$review->goals!!}
                                </p>
                                <p>
                                    <b>Result: </b>
                                    <br>
                                    {!!$review->result!!}
                                </p>
                            </div>
                            <div class="card-footer">
                                <div class="position-relative form-group" style="text-align: right">
                                    <button class="btn btn-primary waves-effect waves-light btn_hapus_satu_item_review" type="button" value="{{$review->id}}">Hapus</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</div>

<div class="card mb-5">
    <div class="card-body">
        <h2 class="small-title">Edit Section 3</h2>
        <div class="row mb-3">
            <div class="col-12">
                <img src="{{ asset('images/landingpage_razenstudio_screenshot/search-engine-optimization/section_3.png') }}" alt="" class="img-fluid rounded">
            </div>
        </div>
        <form class="mb-3" action="{{ route('razen-studio.admin.search-engine-optimization.atur.section-3.store') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12">
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Judul</label>
                        <input type="text" class="form-control" name="judul" placeholder="Jasa Video Marketing" value="{{$search_engine_optimization_section_3?$search_engine_optimization_section_3['judul']:'' }}" required>
                    </div>
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Deskripsi</label>
                        <textarea name="deskripsi" rows="5" class="form-control" required>{{$search_engine_optimization_section_3 ? $search_engine_optimization_section_3['deskripsi']:''}}</textarea>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mb-0">Submit</button>
        </form>
        <form class="mb-3" action="{{ route('razen-studio.admin.search-engine-optimization.atur.section-3.item-1.store') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12 col-md-4">
                    <img src="{{ asset('images/landingpage_razenstudio_screenshot/video-production/video-konten-sosmed/item_1.png') }}" alt="" class="img-fluid rounded">
                </div>
                <div class="col-12 col-md-8">
                    <input type="hidden" name="item" value="item_1">
                    @if ($search_engine_optimization_section_3 != null)
                        @foreach ($search_engine_optimization_section_3['item'] as $item)
                            @if ($item['item'] == 'item_1')
                                <div class="mb-3 position-relative form-group">
                                    <label for="harga" class="form-label">Harga</label>
                                    <input type="text" class="form-control" name="harga" value="{{$item['harga']}}" required>
                                </div>
                                <div class="mb-3 position-relative form-group">
                                    <label for="" class="form-label">Deskripsi</label>
                                    <textarea name="deskripsi" rows="5" class="form-control" required>{{$item['deskripsi']}}</textarea>
                                </div>
                                <div class="mb-3 position-relative form-group">
                                    <label for="" class="form-label">No. Whatsapp Konsultasi</label>
                                    <input type="text" class="form-control" name="no_wa_konsultasi" value="{{$item['no_wa_konsultasi']}}" required>
                                </div>
                                <div class="mb-3 position-relative form-group">
                                    <label for="" class="form-label">Mini Text</label>
                                    <textarea name="mini_text" rows="5" class="form-control" required>{{$item['mini_text']}}</textarea>
                                </div>
                                <div class="mb-3 position-relative form-group" style="text-align: right">
                                    <button class="btn btn-primary waves-effect waves-light">Submit</button>
                                </div>
                            @endif
                        @endforeach
                    @else
                        <div class="mb-3 position-relative form-group">
                            <label for="harga" class="form-label">Harga</label>
                            <input type="text" class="form-control" name="harga" required>
                        </div>
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Deskripsi</label>
                            <textarea name="deskripsi" rows="5" class="form-control" required></textarea>
                        </div>
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">No. Whatsapp Konsultasi</label>
                            <input type="text" class="form-control" name="no_wa_konsultasi" required>
                        </div>
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Mini Text</label>
                            <textarea name="mini_text" rows="5" class="form-control" required></textarea>
                        </div>
                        <div class="mb-3 position-relative form-group" style="text-align: right">
                            <button class="btn btn-primary waves-effect waves-light">Submit</button>
                        </div>
                    @endif
                </div>
            </div>
        </form>
        <form action="{{ route('razen-studio.admin.search-engine-optimization.atur.section-3.item-2.store') }}" class="mb-3" novalidate="novalidate" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12 col-md-4">
                    <img src="{{ asset('images/landingpage_razenstudio_screenshot/video-production/video-konten-sosmed/item_2.png') }}" alt="" class="img-fluid rounded">
                </div>
                <div class="col-12 col-md-8">
                    <input type="hidden" name="item" value="item_2">
                    @if ($search_engine_optimization_section_3 != null)
                        @foreach ($search_engine_optimization_section_3['item'] as $item)
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
                                    <input type="file" class="dropify" name="ikon" data-height="300" data-allowed-file-extensions="png jpg jpeg webp" data-default-file="{{ asset('images/landingpage_razenstudio/search-engine-optimization/'.$item['ikon']) }}" data-show-errors="true" required>
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
        <form action="{{ route('razen-studio.admin.search-engine-optimization.atur.section-3.item-3.store') }}" class="mb-3" novalidate="novalidate" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12 col-md-4">
                    <img src="{{ asset('images/landingpage_razenstudio_screenshot/video-production/video-konten-sosmed/item_3.png') }}" alt="" class="img-fluid rounded">
                </div>
                <div class="col-12 col-md-8">
                    <input type="hidden" name="item" value="item_3">
                    @if ($search_engine_optimization_section_3 != null)
                        @foreach ($search_engine_optimization_section_3['item'] as $item)
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
                                    <input type="file" class="dropify" name="ikon" data-height="300" data-allowed-file-extensions="png jpg jpeg webp" data-default-file="{{ asset('images/landingpage_razenstudio/search-engine-optimization/'.$item['ikon']) }}" data-show-errors="true" required>
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
        <form action="{{ route('razen-studio.admin.search-engine-optimization.atur.section-3.item-4.store') }}" class="mb-3" novalidate="novalidate" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12 col-md-4">
                    <img src="{{ asset('images/landingpage_razenstudio_screenshot/video-production/video-konten-sosmed/item_4.png') }}" alt="" class="img-fluid rounded">
                </div>
                <div class="col-12 col-md-8">
                    <input type="hidden" name="item" value="item_4">
                    @if ($search_engine_optimization_section_3 != null)
                        @foreach ($search_engine_optimization_section_3['item'] as $item)
                            @if ($item['item'] == 'item_4')
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
                                    <input type="file" class="dropify" name="ikon" data-height="300" data-allowed-file-extensions="png jpg jpeg webp" data-default-file="{{ asset('images/landingpage_razenstudio/search-engine-optimization/'.$item['ikon']) }}" data-show-errors="true" required>
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
        <form action="{{ route('razen-studio.admin.search-engine-optimization.atur.section-3.item-5.store') }}" class="mb-3" novalidate="novalidate" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12 col-md-4">
                    <img src="{{ asset('images/landingpage_razenstudio_screenshot/video-production/video-konten-sosmed/item_5.png') }}" alt="" class="img-fluid rounded">
                </div>
                <div class="col-12 col-md-8">
                    <input type="hidden" name="item" value="item_5">
                    @if ($search_engine_optimization_section_3 != null)
                        @foreach ($search_engine_optimization_section_3['item'] as $item)
                            @if ($item['item'] == 'item_5')
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
                                    <input type="file" class="dropify" name="ikon" data-height="300" data-allowed-file-extensions="png jpg jpeg webp" data-default-file="{{ asset('images/landingpage_razenstudio/search-engine-optimization/'.$item['ikon']) }}" data-show-errors="true" required>
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
    </div>
</div>

<div class="card mb-5">
    <div class="card-body">
        <h2 class="small-title">Edit Section 4</h2>
        <div class="row mb-3">
            <div class="col-12">
                <img src="{{ asset('images/landingpage_razenstudio_screenshot/search-engine-optimization/section_4.png') }}" alt="" class="img-fluid rounded">
            </div>
        </div>
        @if ($search_engine_optimization_section_4 == null)
            <form action="{{ route('razen-studio.admin.search-engine-optimization.atur.section-4.store') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
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
                                    <label for="" class="form-label">Tambah Konten Section 4</label>
                                </div>
                                <div class="col-6" style="text-align: right">
                                    <button class="btn btn-icon btn-outline-success waves-effect mr-2 btn_tambah_section4" type="button"><i data-acorn-icon="plus"></i></button>
                                    <button class="btn btn-icon btn-outline-danger waves-effect mr-2 btn_hapus_section4" type="button"><i data-acorn-icon="minus"></i></button>
                                </div>
                            </div>
                        </div>
                        <div id="div_tambah_konten_section4"></div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mb-0">Submit</button>
            </form>
        @endif
        @if ($search_engine_optimization_section_4 != null)
            <form action="{{ route('razen-studio.admin.search-engine-optimization.atur.section-4.edit') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Sub Judul</label>
                            <input type="text" class="form-control" name="sub_judul" placeholder="What we do" value="{{ $search_engine_optimization_section_4['sub_judul'] }}" required>
                        </div>
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Judul</label>
                            <input name="judul" class="form-control" placeholder="Jasa Digital Marketing" value="{{$search_engine_optimization_section_4['judul']}}" required>
                        </div>
                        <div class="mb-3 position-relative form-group">
                            <div class="row mb-3">
                                @foreach ($search_engine_optimization_section_4['konten'] as $item)
                                    <div class="col-12 col-md-4 mb-5">
                                        <div class="card h-100 border">
                                            <button class="btn border-0 btn-icon btn_hapus_gambar_section4" type="button" value="{{$item['id']}}"><span class="badge rounded-pill bg-primary me-1 position-absolute e-3 t-n2 z-index-1">Hapus</span></button>
                                            <img src="{{ asset('images/landingpage_razenstudio/search-engine-optimization/'.$item['logo_konten']) }}" class="card-img-top sh-22" alt="card image">
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
                                    <label for="" class="form-label">Tambah Konten Section 4</label>
                                </div>
                                <div class="col-6" style="text-align: right">
                                    <button class="btn btn-icon btn-outline-success waves-effect mr-2 btn_tambah_section4" type="button"><i data-acorn-icon="plus"></i></button>
                                    <button class="btn btn-icon btn-outline-danger waves-effect mr-2 btn_hapus_section4" type="button"><i data-acorn-icon="minus"></i></button>
                                </div>
                            </div>
                        </div>
                        <div id="div_tambah_konten_section4"></div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mb-0">Submit</button>
            </form>
        @endif
    </div>
</div>

<div class="card mb-5">
    <div class="card-body">
        <h2 class="small-title">Edit Section 5</h2>
        <div class="row mb-3">
            <div class="col-12 text-center">
                <img src="{{ asset('images/landingpage_razenstudio_screenshot/search-engine-optimization/section_5.png') }}" alt="" class="img-fluid rounded">
            </div>
        </div>
        @if ($search_engine_optimization_section_5 == null)
            <form action="{{ route('razen-studio.admin.search-engine-optimization.atur.section-5.store') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
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
        @if ($search_engine_optimization_section_5 != null)
            <form action="{{ route('razen-studio.admin.search-engine-optimization.atur.section-5.edit') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Sub Judul</label>
                            <input type="text" class="form-control" name="sub_judul" placeholder="What we do" value="{{ $search_engine_optimization_section_5['sub_judul'] }}" required>
                        </div>
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Judul</label>
                            <input name="judul" class="form-control" placeholder="Jasa Digital Marketing" value="{{$search_engine_optimization_section_5['judul']}}" required>
                        </div>
                        <div class="mb-3 position-relative form-group">
                            <div class="row mb-3">
                                @foreach ($search_engine_optimization_section_5['konten'] as $item)
                                    <div class="col-12 col-md-4 mb-5">
                                        <div class="card h-100 border">
                                            <button class="btn border-0 btn-icon btn_hapus_gambar_section5" type="button" value="{{$item['id']}}"><span class="badge rounded-pill bg-primary me-1 position-absolute e-3 t-n2 z-index-1">Hapus</span></button>
                                            <img src="{{ asset('images/landingpage_razenstudio/search-engine-optimization/'.$item['logo_konten']) }}" class="card-img-top sh-22" alt="card image">
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
                <img src="{{ asset('images/landingpage_razenstudio_screenshot/search-engine-optimization/section_6.png') }}" alt="" class="img-fluid rounded">
            </div>
        </div>
        <form action="{{ route('razen-studio.admin.search-engine-optimization.atur.section-6.store') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12 col-md-8">
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Nama Reviewer</label>
                        <input type="text" class="form-control" name="nama_reviewer" value="{{$search_engine_optimization_section_6?$search_engine_optimization_section_6['nama_reviewer']:'' }}" required>
                    </div>
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Jabatan Reviewer</label>
                        <input type="text" class="form-control" name="jabatan_reviewer" value="{{$search_engine_optimization_section_6?$search_engine_optimization_section_6['jabatan_reviewer']:'' }}" required>
                    </div>
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Deskripsi</label>
                        <textarea name="deskripsi" rows="5" class="form-control" id="section_6" required>{{$search_engine_optimization_section_6 ? $search_engine_optimization_section_6['deskripsi']:''}}</textarea>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="position-relative form-group">
                        <label for="" class="form-label">Gambar</label>
                        @if ($search_engine_optimization_section_6)
                        <input type="file" class="dropify" name="gambar" data-height="300" data-allowed-file-extensions="png jpg jpeg webp" data-default-file="{{ asset('images/landingpage_razenstudio/search-engine-optimization/'.$search_engine_optimization_section_6['gambar']) }}" data-show-errors="true" required>
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
        <h2 class="small-title">Edit Section 7</h2>
        <div class="row mb-3">
            <div class="col-12 text-center">
                <img src="{{ asset('images/landingpage_razenstudio_screenshot/search-engine-optimization/section_7.png') }}" alt="" class="img-fluid rounded">
            </div>
        </div>
        @if ($search_engine_optimization_section_7  == null)
            <form action="{{ route('razen-studio.admin.search-engine-optimization.atur.section-7.store') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
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
                                    <label for="" class="form-label">Tambah Konten Section 7</label>
                                </div>
                                <div class="col-6" style="text-align: right">
                                    <button class="btn btn-icon btn-outline-success waves-effect mr-2 btn_tambah_section7" type="button"><i data-acorn-icon="plus"></i></button>
                                    <button class="btn btn-icon btn-outline-danger waves-effect mr-2 btn_hapus_section7" type="button"><i data-acorn-icon="minus"></i></button>
                                </div>
                            </div>
                        </div>
                        <div id="div_tambah_konten_section7"></div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mb-0">Submit</button>
            </form>
        @endif
        @if ($search_engine_optimization_section_7  != null)
            <form action="{{ route('razen-studio.admin.search-engine-optimization.atur.section-7.edit') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Sub Judul</label>
                            <input type="text" class="form-control" name="sub_judul" value="{{$search_engine_optimization_section_7 ['sub_judul']}}" placeholder="FAQ" required>
                        </div>
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Judul</label>
                            <input type="text" class="form-control" name="judul" value="{{$search_engine_optimization_section_7 ['judul']}}" required>
                        </div>
                        <div class="mb-3 position-relative form-group">
                            <div class="row mb-3">
                                @foreach ($search_engine_optimization_section_7 ['konten'] as $item)
                                <div class="col-12 col-md-4 mb-3">
                                    <div class="card h-100 border">
                                        <button class="btn border-0 btn-icon btn_hapus_data_section7" type="button" value="{{$item['id']}}"><span class="badge rounded-pill bg-primary me-1 position-absolute e-3 t-n2 z-index-1">Hapus</span></button>
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
                                    <label for="" class="form-label">Tambah Konten Section 7</label>
                                </div>
                                <div class="col-6" style="text-align: right">
                                    <button class="btn btn-icon btn-outline-success waves-effect mr-2 btn_tambah_section7" type="button"><i data-acorn-icon="plus"></i></button>
                                    <button class="btn btn-icon btn-outline-danger waves-effect mr-2 btn_hapus_section7" type="button"><i data-acorn-icon="minus"></i></button>
                                </div>
                            </div>
                        </div>
                        <div id="div_tambah_konten_section7"></div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mb-0">Submit</button>
            </form>
        @endif
    </div>
</div>

{{-- Modal --}}
<div class="modal fade" id="addSection3Modal" tabindex="-1" role="dialog" aria-labelledby="modalTitle" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitle">Add Item Section 4</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <span id="form_result"></span>
                <form action="{{ route('razen-studio.admin.search-engine-optimization.atur.item.store') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12 col-md-7">
                            <div class="mb-3 position-relative form-group">
                                <label for="" class="form-label">Studi Kasus</label>
                                <textarea name="studi_kasus" rows="5" class="form-control" required></textarea>
                            </div>
                            <div class="mb-3 position-relative form-group">
                                <label for="" class="form-label">Goals</label>
                                <textarea name="goals" rows="5" class="form-control" required></textarea>
                            </div>
                            <div class="mb-3 position-relative form-group">
                                <label for="" class="form-label">Result</label>
                                <textarea name="result" rows="5" class="form-control" required></textarea>
                            </div>
                        </div>
                        <div class="col-12 col-md-5">
                            <div class="position-relative form-group">
                                <label for="" class="form-label">Gambar</label>
                                <input type="file" class="dropify" name="gambar" data-height="300" data-allowed-file-extensions="webp png jpg jpeg" data-show-errors="true" required>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-12 col-md-7">
                            <div class="mb-3 position-relative form-group">
                                <label for="" class="form-label">Review</label>
                                <textarea name="review" rows="5" class="form-control" required></textarea>
                            </div>
                            <div class="mb-3 position-relative form-group">
                                <label for="" class="form-label">Nama Reviewer</label>
                                <input type="text" class="form-control" name="nama_reviewer" required>
                            </div>
                            <div class="mb-3 position-relative form-group">
                                <label for="" class="form-label">Jabatan Reviewer</label>
                                <input type="text" class="form-control" name="jabatan_reviewer" required>
                            </div>
                        </div>
                        <div class="col-12 col-md-5">
                            <div class="mb-3 position-relative form-group">
                                <label for="" class="form-label">Logo Website</label>
                                <input type="file" class="dropify" name="logo_website" data-height="300" data-allowed-file-extensions="webp png jpg jpeg" data-show-errors="true" required>
                            </div>
                            <div class="mb-3 position-relative form-group">
                                <label for="" class="form-label">Foto Reviewer</label>
                                <input type="file" class="dropify" name="foto_reviewer" data-height="300" data-allowed-file-extensions="webp png jpg jpeg" data-show-errors="true" required>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3 position-relative form-group">
                                <label for="" class="form-label">Background Color</label>
                                <input type="color" name="bg_review" class="form-control form-control-color" required>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-light" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-outline-primary">Submit</button>
            </div>
        </form>
        </div>
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
        var count_section2 = 1;
        var count_section4 = 1;
        var count_section5 = 1;
        var count_section7 = 1;

        $(document).ready(function(){
            $('.dropify').dropify();
            $('.dropify-wrapper').css('line-height', '3rem');

            CKEDITOR.replace('section_1',{
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

            CKEDITOR.replace('section_6',{
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

        dynamic_section2(count_section2);
        function dynamic_section2(number)
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
                $('#div_tambah_konten_section2').after(html);
                $('.dropify').dropify();
                $('.dropify-wrapper').css('line-height', '3rem');
            }
        }

        $(document).on('click', '.btn_tambah_section2',function(){
            count_section2++;
            dynamic_section2(count_section2);
        });

        $(document).on('click','.btn_hapus_section2',function(){
            var urut = count_section2;
            $('#div_tambah_konten_section2').next('div').remove();
            count_section2--;
            if(count_section2 < 1)
            {
                count_section2 = 1;
            }
        });

        $('.btn_hapus_gambar_section2').click(function(){
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
                        url: "{{ route('razen-studio.admin.search-engine-optimization.atur.section-2.hapus.satu') }}",
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

        $('.btn_hapus_satu_item_review').click(function(){
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
                        url: "{{ route('razen-studio.admin.search-engine-optimization.atur.item.hapus.satu') }}",
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

        dynamic_section4(count_section4);
        function dynamic_section4(number)
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
                $('#div_tambah_konten_section4').after(html);
                $('.dropify').dropify();
                $('.dropify-wrapper').css('line-height', '3rem');
            }
        }

        $(document).on('click', '.btn_tambah_section4',function(){
            count_section4++;
            dynamic_section4(count_section4);
        });

        $(document).on('click','.btn_hapus_section4',function(){
            var urut = count_section4;
            $('#div_tambah_konten_section4').next('div').remove();
            count_section4--;
            if(count_section4 < 1)
            {
                count_section4 = 1;
            }
        });

        $('.btn_hapus_gambar_section4').click(function(){
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
                        url: "{{ route('razen-studio.admin.search-engine-optimization.atur.section-4.hapus.satu') }}",
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

        dynamic_section5(count_section5);
        function dynamic_section5(number)
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
                $('#div_tambah_konten_section5').after(html);
                $('.dropify').dropify();
                $('.dropify-wrapper').css('line-height', '3rem');
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

        $('.btn_hapus_gambar_section5').click(function(){
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
                        url: "{{ route('razen-studio.admin.search-engine-optimization.atur.section-5.hapus.satu') }}",
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

        dynamic_section7(count_section7);
        function dynamic_section7(number)
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
                $('#div_tambah_konten_section7').after(html);
            }
        }

        $(document).on('click', '.btn_tambah_section7',function(){
            count_section7++;
            dynamic_section7(count_section7);
        });

        $(document).on('click','.btn_hapus_section7',function(){
            var urut = count_section7;
            $('#div_tambah_konten_section7').next('div').remove();
            count_section7--;
            if(count_section7 < 1)
            {
                count_section7 = 1;
            }
        });

        $('.btn_hapus_data_section7').click(function(){
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
                        url: "{{ route('razen-studio.admin.search-engine-optimization.atur.section-7.hapus.satu') }}",
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
