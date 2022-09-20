@extends('razen-studio.admin.layouts.app')
@section('title', 'Admin - Razen Studio | How It Work | Atur')

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
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioHowItWork;

    $how_it_work = LandingpageRazenstudioHowItWork::first();
    if ($how_it_work) {
        $how_it_work_section_1 = json_decode($how_it_work->section_1, true);
        $how_it_work_section_2 = json_decode($how_it_work->section_2, true);
        $how_it_work_section_3 = json_decode($how_it_work->section_3, true);
        $how_it_work_section_4 = json_decode($how_it_work->section_4, true);
        $how_it_work_section_5 = json_decode($how_it_work->section_5, true);
        $how_it_work_section_6 = json_decode($how_it_work->section_6, true);
    } else {
        $how_it_work_section_1 = [];
        $how_it_work_section_2 = [];
        $how_it_work_section_3 = [];
        $how_it_work_section_4 = [];
        $how_it_work_section_5 = [];
        $how_it_work_section_6 = [];
    }
@endphp

<div class="page-title-container">
    <div class="row">
        <!-- Title Start -->
        <div class="col-12 col-md-7">
            <h1 class="mb-0 pb-0 display-4" id="title">How It Works - Atur</h1>
            <nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb">
                <ul class="breadcrumb pt-0">
                    <li class="breadcrumb-item"><a href="{{ route('razen-studio.admin.dashboard.index') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="#">Landing Page</a></li>
                    <li class="breadcrumb-item"><a href="#">How It Works</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('razen-studio.admin.how-it-works.atur.index') }}">Atur</a></li>
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
                <img src="{{ asset('images/landingpage_razenstudio_screenshot/how-it-works/section_1.png') }}" alt="" class="img-fluid rounded">
            </div>
        </div>
        <form action="{{ route('razen-studio.admin.how-it-works.atur.section-1.store') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12 col-md-8">
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Sub Judul</label>
                        <input type="text" class="form-control" name="sub_judul" placeholder="Desain yang bagus?" value="{{$how_it_work_section_1?$how_it_work_section_1['sub_judul']:'' }}" required>
                    </div>
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Judul</label>
                        <input type="text" class="form-control" name="judul" placeholder="Desain yang bagus?" value="{{$how_it_work_section_1?$how_it_work_section_1['judul']:'' }}" required>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="position-relative form-group">
                        <label for="" class="form-label">Gambar</label>
                        @if ($how_it_work_section_1)
                        <input type="file" class="dropify" name="gambar" data-height="300" data-allowed-file-extensions="png jpg jpeg webp" data-default-file="{{ asset('images/landingpage_razenstudio/how-it-works/'.$how_it_work_section_1['gambar']) }}" data-show-errors="true" required>
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
            <div class="col-12">
                <img src="{{ asset('images/landingpage_razenstudio_screenshot/how-it-works/section_2.png') }}" alt="" class="img-fluid rounded">
            </div>
        </div>
        @if ($how_it_work_section_2 == null)
            <form action="{{ route('razen-studio.admin.how-it-works.atur.section-2.store') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Sub Judul</label>
                            <input type="text" class="form-control" name="sub_judul" placeholder="how it works" required>
                        </div>
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Judul</label>
                            <input type="text" class="form-control" name="judul" placeholder="Desain Logo" required>
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
        @if ($how_it_work_section_2 != null)
            <form action="{{ route('razen-studio.admin.how-it-works.atur.section-2.edit') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Sub Judul</label>
                            <input type="text" class="form-control" name="sub_judul" value="{{$how_it_work_section_2['sub_judul']}}" required>
                        </div>
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Judul</label>
                            <input type="text" class="form-control" name="judul" value="{{$how_it_work_section_2['judul']}}" required>
                        </div>
                        <div class="mb-3 position-relative form-group">
                            <div class="row mb-3">
                                @foreach ($how_it_work_section_2['konten'] as $item)
                                <div class="col-12 col-md-4 mb-3">
                                    <div class="card h-100 border">
                                        <button class="btn border-0 btn-icon btn_hapus_data_section2" type="button" value="{{$item['id']}}"><span class="badge rounded-pill bg-primary me-1 position-absolute e-3 t-n2 z-index-1">Hapus</span></button>
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
        <h2 class="small-title">Edit Section 3</h2>
        <div class="row mb-3">
            <div class="col-12 text-center">
                <img src="{{ asset('images/landingpage_razenstudio_screenshot/how-it-works/section_3.png') }}" alt="" class="img-fluid rounded">
            </div>
        </div>
        <form action="{{ route('razen-studio.admin.how-it-works.atur.section-3.store') }}" class="mb-3" novalidate="novalidate" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12 col-md-7">
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Judul</label>
                        <input type="text" class="form-control" name="judul" placeholder="Jasa Video Marketing" value="{{$how_it_work_section_3?$how_it_work_section_3['judul']:'' }}" required>
                    </div>
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Deskripsi</label>
                        <textarea name="deskripsi" rows="5" class="form-control" required>{{$how_it_work_section_3?$how_it_work_section_3['deskripsi']:'' }}</textarea>
                    </div>
                </div>
                <div class="col-12 col-md-5">
                    <div class="position-relative form-group">
                        <label for="" class="form-label">Gambar</label>
                        @if ($how_it_work_section_3)
                        <input type="file" class="dropify" name="gambar" data-height="300" data-allowed-file-extensions="png jpg jpeg webp" data-default-file="{{ asset('images/landingpage_razenstudio/how-it-works/'.$how_it_work_section_3['gambar']) }}" data-show-errors="true" required>
                        @else
                        <input type="file" class="dropify" name="gambar" data-height="300" data-allowed-file-extensions="png jpg jpeg webp" data-show-errors="true" required>
                        @endif
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mb-0">Submit</button>
        </form>
        <form action="{{ route('razen-studio.admin.how-it-works.atur.section-3.item-1.store') }}" class="mb-3" novalidate="novalidate" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12 col-md-6">
                    <img src="{{ asset('images/landingpage_razenstudio_screenshot/visual-branding-design/jasa-desain-grafis/section_6_item_1.png') }}" alt="" class="img-fluid rounded">
                </div>
                <div class="col-12 col-md-6">
                    <input type="hidden" name="item" value="item_1">
                    @if ($how_it_work_section_3)
                        @if ($how_it_work_section_3['item'] != null)
                            @foreach ($how_it_work_section_3['item'] as $item)
                                @if ($item['item'] == 'item_1')
                                    <div class="mb-3 positive-relative form-group">
                                        <label for="" class="form-label">Angka</label>
                                        <input type="number" name="angka" class="form-control" required value="{{$item['angka']}}">
                                    </div>
                                    <div class="mb-3 position-relative form-group">
                                        <label for="" class="form-label">Deskripsi</label>
                                        <textarea name="deskripsi" rows="5" class="form-control" required>{{$item['deskripsi']}}</textarea>
                                    </div>
                                    <div class="mb-3 position-relative form-group" style="text-align: right">
                                        <button class="btn btn-primary waves-effect waves-light">Submit</button>
                                    </div>
                                @endif
                            @endforeach
                        @else
                            <div class="mb-3 positive-relative form-group">
                                <label for="" class="form-label">Angka</label>
                                <input type="number" name="angka" class="form-control" required>
                            </div>
                            <div class="mb-3 position-relative form-group">
                                <label for="" class="form-label">Deskripsi</label>
                                <textarea name="deskripsi" rows="5" class="form-control" required></textarea>
                            </div>
                            <div class="mb-3 position-relative form-group" style="text-align: right">
                                <button class="btn btn-primary waves-effect waves-light">Submit</button>
                            </div>
                        @endif
                    @else
                        <div class="mb-3 positive-relative form-group">
                            <label for="" class="form-label">Angka</label>
                            <input type="number" name="angka" class="form-control" required>
                        </div>
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Deskripsi</label>
                            <textarea name="deskripsi" rows="5" class="form-control" required></textarea>
                        </div>
                        <div class="mb-3 position-relative form-group" style="text-align: right">
                            <button class="btn btn-primary waves-effect waves-light">Submit</button>
                        </div>
                    @endif
                </div>
            </div>
        </form>
        <form action="{{ route('razen-studio.admin.how-it-works.atur.section-3.item-2.store') }}" class="mb-3" novalidate="novalidate" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12 col-md-6">
                    <img src="{{ asset('images/landingpage_razenstudio_screenshot/visual-branding-design/jasa-desain-grafis/section_6_item_2.png') }}" alt="" class="img-fluid rounded">
                </div>
                <div class="col-12 col-md-6">
                    <input type="hidden" name="item" value="item_2">
                    @if ($how_it_work_section_3)
                        @if ($how_it_work_section_3['item'] != null)
                            @foreach ($how_it_work_section_3['item'] as $item)
                                @if ($item['item'] == 'item_2')
                                    <div class="mb-3 positive-relative form-group">
                                        <label for="" class="form-label">Angka</label>
                                        <input type="number" name="angka" class="form-control" required value="{{$item['angka']}}">
                                    </div>
                                    <div class="mb-3 position-relative form-group">
                                        <label for="" class="form-label">Deskripsi</label>
                                        <textarea name="deskripsi" rows="5" class="form-control" required>{{$item['deskripsi']}}</textarea>
                                    </div>
                                    <div class="mb-3 position-relative form-group" style="text-align: right">
                                        <button class="btn btn-primary waves-effect waves-light">Submit</button>
                                    </div>
                                @endif
                            @endforeach
                        @else
                            <div class="mb-3 positive-relative form-group">
                                <label for="" class="form-label">Angka</label>
                                <input type="number" name="angka" class="form-control" required>
                            </div>
                            <div class="mb-3 position-relative form-group">
                                <label for="" class="form-label">Deskripsi</label>
                                <textarea name="deskripsi" rows="5" class="form-control" required></textarea>
                            </div>
                            <div class="mb-3 position-relative form-group" style="text-align: right">
                                <button class="btn btn-primary waves-effect waves-light">Submit</button>
                            </div>
                        @endif
                    @else
                        <div class="mb-3 positive-relative form-group">
                            <label for="" class="form-label">Angka</label>
                            <input type="number" name="angka" class="form-control" required>
                        </div>
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Deskripsi</label>
                            <textarea name="deskripsi" rows="5" class="form-control" required></textarea>
                        </div>
                        <div class="mb-3 position-relative form-group" style="text-align: right">
                            <button class="btn btn-primary waves-effect waves-light">Submit</button>
                        </div>
                    @endif
                </div>
            </div>
        </form>
        <form action="{{ route('razen-studio.admin.how-it-works.atur.section-3.item-3.store') }}" class="mb-3" novalidate="novalidate" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12 col-md-6">
                    <img src="{{ asset('images/landingpage_razenstudio_screenshot/visual-branding-design/jasa-desain-grafis/section_6_item_3.png') }}" alt="" class="img-fluid rounded">
                </div>
                <div class="col-12 col-md-6">
                    <input type="hidden" name="item" value="item_3">
                    @if ($how_it_work_section_3)
                        @if ($how_it_work_section_3['item'] != null)
                            @foreach ($how_it_work_section_3['item'] as $item)
                                @if ($item['item'] == 'item_3')
                                    <div class="mb-3 positive-relative form-group">
                                        <label for="" class="form-label">Angka</label>
                                        <input type="number" name="angka" class="form-control" required value="{{$item['angka']}}">
                                    </div>
                                    <div class="mb-3 position-relative form-group">
                                        <label for="" class="form-label">Deskripsi</label>
                                        <textarea name="deskripsi" rows="5" class="form-control" required>{{$item['deskripsi']}}</textarea>
                                    </div>
                                    <div class="mb-3 position-relative form-group" style="text-align: right">
                                        <button class="btn btn-primary waves-effect waves-light">Submit</button>
                                    </div>
                                @endif
                            @endforeach
                        @else
                            <div class="mb-3 positive-relative form-group">
                                <label for="" class="form-label">Angka</label>
                                <input type="number" name="angka" class="form-control" required>
                            </div>
                            <div class="mb-3 position-relative form-group">
                                <label for="" class="form-label">Deskripsi</label>
                                <textarea name="deskripsi" rows="5" class="form-control" required></textarea>
                            </div>
                            <div class="mb-3 position-relative form-group" style="text-align: right">
                                <button class="btn btn-primary waves-effect waves-light">Submit</button>
                            </div>
                        @endif
                    @else
                        <div class="mb-3 positive-relative form-group">
                            <label for="" class="form-label">Angka</label>
                            <input type="number" name="angka" class="form-control" required>
                        </div>
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Deskripsi</label>
                            <textarea name="deskripsi" rows="5" class="form-control" required></textarea>
                        </div>
                        <div class="mb-3 position-relative form-group" style="text-align: right">
                            <button class="btn btn-primary waves-effect waves-light">Submit</button>
                        </div>
                    @endif
                </div>
            </div>
        </form>
        <form action="{{ route('razen-studio.admin.how-it-works.atur.section-3.item-4.store') }}" class="mb-3" novalidate="novalidate" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12 col-md-6">
                    <img src="{{ asset('images/landingpage_razenstudio_screenshot/visual-branding-design/jasa-desain-grafis/section_6_item_4.png') }}" alt="" class="img-fluid rounded">
                </div>
                <div class="col-12 col-md-6">
                    <input type="hidden" name="item" value="item_4">
                    @if ($how_it_work_section_3)
                        @if ($how_it_work_section_3['item'] != null)
                            @foreach ($how_it_work_section_3['item'] as $item)
                                @if ($item['item'] == 'item_4')
                                    <div class="mb-3 positive-relative form-group">
                                        <label for="" class="form-label">Angka</label>
                                        <input type="number" name="angka" class="form-control" required value="{{$item['angka']}}">
                                    </div>
                                    <div class="mb-3 position-relative form-group">
                                        <label for="" class="form-label">Deskripsi</label>
                                        <textarea name="deskripsi" rows="5" class="form-control" required>{{$item['deskripsi']}}</textarea>
                                    </div>
                                    <div class="mb-3 position-relative form-group" style="text-align: right">
                                        <button class="btn btn-primary waves-effect waves-light">Submit</button>
                                    </div>
                                @endif
                            @endforeach
                        @else
                            <div class="mb-3 positive-relative form-group">
                                <label for="" class="form-label">Angka</label>
                                <input type="number" name="angka" class="form-control" required>
                            </div>
                            <div class="mb-3 position-relative form-group">
                                <label for="" class="form-label">Deskripsi</label>
                                <textarea name="deskripsi" rows="5" class="form-control" required></textarea>
                            </div>
                            <div class="mb-3 position-relative form-group" style="text-align: right">
                                <button class="btn btn-primary waves-effect waves-light">Submit</button>
                            </div>
                        @endif
                    @else
                        <div class="mb-3 positive-relative form-group">
                            <label for="" class="form-label">Angka</label>
                            <input type="number" name="angka" class="form-control" required>
                        </div>
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Deskripsi</label>
                            <textarea name="deskripsi" rows="5" class="form-control" required></textarea>
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
                <img src="{{ asset('images/landingpage_razenstudio_screenshot/how-it-works/section_4.png') }}" alt="" class="img-fluid rounded">
            </div>
        </div>
        <form action="{{ route('razen-studio.admin.how-it-works.atur.section-4.store') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12">
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Judul</label>
                        <input type="text" class="form-control" name="judul" placeholder="Desain yang bagus?" value="{{$how_it_work_section_4?$how_it_work_section_4['judul']:'' }}" required>
                    </div>
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Deskripsi</label>
                        <textarea name="deskripsi" rows="5" class="form-control" required>{{$how_it_work_section_4 ? $how_it_work_section_4['deskripsi']:''}}</textarea>
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
                <img src="{{ asset('images/landingpage_razenstudio_screenshot/how-it-works/section_5.png') }}" alt="" class="img-fluid rounded">
            </div>
        </div>
        <form action="{{ route('razen-studio.admin.how-it-works.atur.section-5.store') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12">
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Judul</label>
                        <input type="text" class="form-control" name="judul" placeholder="Desain yang bagus?" value="{{$how_it_work_section_5?$how_it_work_section_5['judul']:'' }}" required>
                    </div>
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Deskripsi</label>
                        <textarea name="deskripsi" rows="5" class="form-control" required>{{$how_it_work_section_5 ? $how_it_work_section_5['deskripsi']:''}}</textarea>
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
                <img src="{{ asset('images/landingpage_razenstudio_screenshot/how-it-works/section_6.png') }}" alt="" class="img-fluid rounded">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-12">
                <form action="{{ route('razen-studio.admin.how-it-works.atur.section-6.store') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3 position-relative form-group">
                                <label for="" class="form-label">Sub Judul</label>
                                <input type="text" class="form-control" name="sub_judul" placeholder="Desain yang bagus?" value="{{$how_it_work_section_6?$how_it_work_section_6['sub_judul']:'' }}" required>
                            </div>
                            <div class="mb-3 position-relative form-group">
                                <label for="" class="form-label">Judul</label>
                                <input type="text" class="form-control" name="judul" placeholder="Desain yang bagus?" value="{{$how_it_work_section_6?$how_it_work_section_6['judul']:'' }}" required>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mb-0">Submit</button>
                </form>
            </div>
        </div>
        <hr>
        <div class="row mb-3">
            <div class="col-12 col-md-6">
                @if ($how_it_work_section_6 != null)
                    @if ($how_it_work_section_6['item_1'] == null)
                        <form action="{{ route('razen-studio.admin.how-it-works.atur.section-6.item-1.store') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-3 position-relative form-group">
                                        <div class="row">
                                            <div class="col-6">
                                                <label for="" class="form-label">Tambah Konten Section 6 Item 1</label>
                                            </div>
                                            <div class="col-6" style="text-align: right">
                                                <button class="btn btn-icon btn-outline-success waves-effect mr-2 btn_tambah_section6_item_1" type="button"><i data-acorn-icon="plus"></i></button>
                                                <button class="btn btn-icon btn-outline-danger waves-effect mr-2 btn_hapus_section6_item_1" type="button"><i data-acorn-icon="minus"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="div_tambah_konten_section6_item_1"></div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mb-0">Submit</button>
                        </form>
                    @else
                        <form action="{{ route('razen-studio.admin.how-it-works.atur.section-6.item-1.edit') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-3 position-relative form-group">
                                        <div class="row mb-3">
                                            @foreach ($how_it_work_section_6['item_1'] as $item)
                                                <div class="col-12 col-md-4 mb-3">
                                                    <div class="card h-100 border">
                                                        <button class="btn border-0 btn-icon btn_hapus_data_section6_item_1" type="button" value="{{$item['id']}}"><span class="badge rounded-pill bg-primary me-1 position-absolute e-3 t-n2 z-index-1">Hapus</span></button>
                                                        <div class="card-body">
                                                            <p>{{$item['deskripsi_konten']}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label for="" class="form-label">Tambah Konten Section 6 Item 1</label>
                                            </div>
                                            <div class="col-6" style="text-align: right">
                                                <button class="btn btn-icon btn-outline-success waves-effect mr-2 btn_tambah_section6_item_1" type="button"><i data-acorn-icon="plus"></i></button>
                                                <button class="btn btn-icon btn-outline-danger waves-effect mr-2 btn_hapus_section6_item_1" type="button"><i data-acorn-icon="minus"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="div_tambah_konten_section6_item_1"></div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mb-0">Submit</button>
                        </form>
                    @endif
                @endif
            </div>
            <div class="col-12 col-md-6">
                @if ($how_it_work_section_6 != null)
                    <form action="{{ route('razen-studio.admin.how-it-works.atur.section-6.item-2.store') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-12 col-md-8">
                                @php
                                    $section_6_item_2 = $how_it_work_section_6['item_2'];
                                    if($section_6_item_2 != null)
                                    {
                                        $judul = $section_6_item_2['judul'];
                                        $deskripsi = $section_6_item_2['deskripsi'];
                                        $gambar = $section_6_item_2['gambar'];
                                    } else {
                                        $judul = '';
                                        $deskripsi = '';
                                        $gambar = '';
                                    }
                                @endphp
                                <div class="mb-3 position-relative form-group">
                                    <label for="" class="form-label">Judul</label>
                                    <input type="text" value="{{$judul}}" class="form-control" name="judul" placeholder="Desain yang bagus?"  required>
                                </div>
                                <div class="mb-3 position-relative form-group">
                                    <label for="" class="form-label">Deskripsi</label>
                                    <textarea name="deskripsi" rows="5" class="form-control" required>{{$deskripsi}}</textarea>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="position-relative form-group">
                                    <label for="" class="form-label">Gambar</label>
                                    @if ($how_it_work_section_6['item_2'] != null)
                                    <input type="file" class="dropify" name="gambar" data-height="300" data-allowed-file-extensions="png jpg jpeg webp" data-default-file="{{ asset('images/landingpage_razenstudio/how-it-works/'.$gambar) }}" data-show-errors="true" required>
                                    @else
                                    <input type="file" class="dropify" name="gambar" data-height="300" data-allowed-file-extensions="png jpg jpeg webp" data-show-errors="true" required>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mb-0">Submit</button>
                    </form>
                @endif
            </div>
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
        var count_section6_item_1 = 1;
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

            CKEDITOR.config.allowedContent = true;
        });

        dynamic_section2(count_section2);
        function dynamic_section2(number)
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
                $('#div_tambah_konten_section2').after(html);
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

        $('.btn_hapus_data_section2').click(function(){
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
                        url: "{{ route('razen-studio.admin.how-it-works.atur.section-2.hapus.satu') }}",
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

        dynamic_section6_item_1(count_section6_item_1);
        function dynamic_section6_item_1(number)
        {
            var urut = number - 1;
            html = '<div class="border-top p-3">';
            html += '<div class="mb-3 position-relative form-group">';
            html += '<label for="" class="form-label">Deskripsi Konten</label>';
            html += '<input name="deskripsi_konten[]"" class="form-control" placeholder="Digital Marketing...." required>';
            html += '</div>';
            html += '</div>';

            if(number > 1)
            {
                $('#div_tambah_konten_section6_item_1').after(html);
            }
        }

        $(document).on('click', '.btn_tambah_section6_item_1',function(){
            count_section6_item_1++;
            dynamic_section6_item_1(count_section6_item_1);
        });

        $(document).on('click','.btn_hapus_section6_item_1',function(){
            var urut = count_section6_item_1;
            $('#div_tambah_konten_section6_item_1').next('div').remove();
            count_section6_item_1--;
            if(count_section6_item_1 < 1)
            {
                count_section6_item_1 = 1;
            }
        });

        $('.btn_hapus_data_section6_item_1').click(function(){
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
                        url: "{{ route('razen-studio.admin.how-it-works.atur.section-6.item-1.hapus.satu') }}",
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
