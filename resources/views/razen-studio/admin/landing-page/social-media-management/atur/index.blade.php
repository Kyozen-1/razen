@extends('razen-studio.admin.layouts.app')
@section('title', 'Admin - Razen Studio | Social Media Management | Atur')

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
@endsection

@section('content')
@php
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioSocialMediaManagement;

    $social_media_management = LandingpageRazenstudioSocialMediaManagement::first();
    if ($social_media_management) {
        $social_media_management_section_1 = json_decode($social_media_management->section_1, true);
        $social_media_management_section_2 = json_decode($social_media_management->section_2, true);
        $social_media_management_section_3 = json_decode($social_media_management->section_3, true);
        $social_media_management_section_4 = json_decode($social_media_management->section_4, true);
        $social_media_management_section_5 = json_decode($social_media_management->section_5, true);
        $social_media_management_section_6 = json_decode($social_media_management->section_6, true);
        $social_media_management_section_7 = json_decode($social_media_management->section_7, true);
        $social_media_management_section_8 = json_decode($social_media_management->section_8, true);
        $social_media_management_section_9 = json_decode($social_media_management->section_9, true);
        $social_media_management_section_10 = json_decode($social_media_management->section_10, true);
    } else {
        $social_media_management_section_1 = [];
        $social_media_management_section_2 = [];
        $social_media_management_section_3 = [];
        $social_media_management_section_4 = [];
        $social_media_management_section_5 = [];
        $social_media_management_section_6 = [];
        $social_media_management_section_7 = [];
        $social_media_management_section_8 = [];
        $social_media_management_section_9 = [];
        $social_media_management_section_10 = [];
    }
@endphp

<div class="page-title-container">
    <div class="row">
        <!-- Title Start -->
        <div class="col-12 col-md-7">
            <h1 class="mb-0 pb-0 display-4" id="title">Social Media Management - Atur</h1>
            <nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb">
                <ul class="breadcrumb pt-0">
                    <li class="breadcrumb-item"><a href="{{ route('razen-studio.admin.dashboard.index') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="#">Landing Page</a></li>
                    <li class="breadcrumb-item"><a href="#">Social Media Management</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('razen-studio.admin.social-media-management.atur.index') }}">Atur</a></li>
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
                <img src="{{ asset('images/landingpage_razenstudio_screenshot/social-media-management/section_1.png') }}" alt="" class="img-fluid rounded">
            </div>
        </div>
        <form action="{{ route('razen-studio.admin.social-media-management.atur.section-1.store') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12">
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Title</label>
                        <input type="text" class="form-control" name="title" placeholder="Untuk title pada page" value="{{$social_media_management_section_1?$social_media_management_section_1['title']:'' }}" required>
                    </div>
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Judul</label>
                        <input type="text" class="form-control" name="judul" placeholder="Social Media Marketing & Management" value="{{$social_media_management_section_1?$social_media_management_section_1['judul']:'' }}" required>
                    </div>
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Deskripsi</label>
                        <textarea name="deskripsi" rows="5" class="form-control" placeholder="Jasa pengelolaan social media terlengkap satu-satunya di Indonesia..." required>{{$social_media_management_section_1 ? $social_media_management_section_1['deskripsi']:''}}</textarea>
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
                <img src="{{ asset('images/landingpage_razenstudio_screenshot/social-media-management/section_2.png') }}" alt="" class="img-fluid rounded">
            </div>
        </div>
        <form action="{{ route('razen-studio.admin.social-media-management.atur.section-2.store') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12 col-md-8">
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Sub Judul</label>
                        <input type="text" class="form-control" name="sub_judul" placeholder="SMM #1 DI INDONESIA" value="{{$social_media_management_section_2?$social_media_management_section_2['judul']:'' }}" required>
                    </div>
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Judul</label>
                        <input type="text" class="form-control" name="judul" placeholder="Miliki tim admin..." value="{{$social_media_management_section_2?$social_media_management_section_2['judul']:'' }}" required>
                    </div>
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Deskripsi</label>
                        <textarea name="deskripsi" rows="5" class="form-control" id="section_2" required>{{$social_media_management_section_2 ? $social_media_management_section_2['deskripsi']:''}}</textarea>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="position-relative form-group">
                        <label for="" class="form-label">Gambar</label>
                        @if ($social_media_management_section_2)
                        <input type="file" class="dropify" name="gambar" data-height="300" data-allowed-file-extensions="png jpg jpeg webp" data-default-file="{{ asset('images/landingpage_razenstudio/social-media-management/'.$social_media_management_section_2['gambar']) }}" data-show-errors="true" required>
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
            <div class="col-12 text-center">
                <img src="{{ asset('images/landingpage_razenstudio_screenshot/social-media-management/section_3.png') }}" alt="" class="img-fluid rounded">
            </div>
        </div>
        <form action="{{ route('razen-studio.admin.social-media-management.atur.section-3.store') }}" class="mb-3" novalidate="novalidate" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12 col-md-7">
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Judul</label>
                        <input type="text" class="form-control" name="judul" placeholder="Jasa Video Marketing" value="{{$social_media_management_section_3?$social_media_management_section_3['judul']:'' }}" required>
                    </div>
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Deskripsi</label>
                        <textarea name="deskripsi" rows="5" class="form-control" required>{{$social_media_management_section_3?$social_media_management_section_3['deskripsi']:'' }}</textarea>
                    </div>
                </div>
                <div class="col-12 col-md-5">
                    <div class="position-relative form-group">
                        <label for="" class="form-label">Gambar</label>
                        @if ($social_media_management_section_3)
                        <input type="file" class="dropify" name="gambar" data-height="300" data-allowed-file-extensions="png jpg jpeg webp" data-default-file="{{ asset('images/landingpage_razenstudio/social-media-management/'.$social_media_management_section_3['gambar']) }}" data-show-errors="true" required>
                        @else
                        <input type="file" class="dropify" name="gambar" data-height="300" data-allowed-file-extensions="png jpg jpeg webp" data-show-errors="true" required>
                        @endif
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mb-0">Submit</button>
        </form>
        <form action="{{ route('razen-studio.admin.social-media-management.atur.section-3.item-1.store') }}" class="mb-3" novalidate="novalidate" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12 col-md-6">
                    <img src="{{ asset('images/landingpage_razenstudio_screenshot/visual-branding-design/jasa-desain-grafis/section_6_item_1.png') }}" alt="" class="img-fluid rounded">
                </div>
                <div class="col-12 col-md-6">
                    <input type="hidden" name="item" value="item_1">
                    @if ($social_media_management_section_3)
                        @if ($social_media_management_section_3['item'] != null)
                            @foreach ($social_media_management_section_3['item'] as $item)
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
        <form action="{{ route('razen-studio.admin.social-media-management.atur.section-3.item-2.store') }}" class="mb-3" novalidate="novalidate" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12 col-md-6">
                    <img src="{{ asset('images/landingpage_razenstudio_screenshot/visual-branding-design/jasa-desain-grafis/section_6_item_2.png') }}" alt="" class="img-fluid rounded">
                </div>
                <div class="col-12 col-md-6">
                    <input type="hidden" name="item" value="item_2">
                    @if ($social_media_management_section_3)
                        @if ($social_media_management_section_3['item'] != null)
                            @foreach ($social_media_management_section_3['item'] as $item)
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
        <form action="{{ route('razen-studio.admin.social-media-management.atur.section-3.item-3.store') }}" class="mb-3" novalidate="novalidate" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12 col-md-6">
                    <img src="{{ asset('images/landingpage_razenstudio_screenshot/visual-branding-design/jasa-desain-grafis/section_6_item_3.png') }}" alt="" class="img-fluid rounded">
                </div>
                <div class="col-12 col-md-6">
                    <input type="hidden" name="item" value="item_3">
                    @if ($social_media_management_section_3)
                        @if ($social_media_management_section_3['item'] != null)
                            @foreach ($social_media_management_section_3['item'] as $item)
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
        <form action="{{ route('razen-studio.admin.social-media-management.atur.section-3.item-4.store') }}" class="mb-3" novalidate="novalidate" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12 col-md-6">
                    <img src="{{ asset('images/landingpage_razenstudio_screenshot/visual-branding-design/jasa-desain-grafis/section_6_item_4.png') }}" alt="" class="img-fluid rounded">
                </div>
                <div class="col-12 col-md-6">
                    <input type="hidden" name="item" value="item_4">
                    @if ($social_media_management_section_3)
                        @if ($social_media_management_section_3['item'] != null)
                            @foreach ($social_media_management_section_3['item'] as $item)
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
                <img src="{{ asset('images/landingpage_razenstudio_screenshot/social-media-management/section_4.png') }}" alt="" class="img-fluid rounded">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-6 justify-content-center align-self-center">
                <label for="" class="small-titled">Tambah Item Section 4</label>
            </div>
            <div class="col-6" style="text-align: right">
                <button class="btn btn-outline-success waves-effect waves-light" id="btn_add_section_4" type="button" data-bs-toggle="modal" data-bs-target="#addSection4Modal">Tambah</button>
            </div>
        </div>
        <div class="row mb-3">
            @if ($social_media_management_section_4 != null)
            @foreach ($social_media_management_section_4 as $item)
                <div class="col-12 col-md-4 mb-4">
                    <div class="card border h-100">
                        <img src="{{ asset('images/landingpage_razenstudio/social-media-management/'.$item['gambar']) }}" class="card-img-top sh-22" alt="card image">
                        <div class="card-body pb-0">
                            <div class="h5 heading mb-0 lh-1-5 sh-8 sh-md-6 clamp-line">{{$item['judul']}}</div>
                            <p>{!!$item['deskripsi']!!}</p>
                        </div>
                        <div class="card-footer">
                            <div class="position-relative form-group" style="text-align: right">
                                <button class="btn btn-primary waves-effect waves-light btn_hapus_satu_item_section_4" type="button" value="{{$item['id']}}">Hapus</button>
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
        <h2 class="small-title">Edit Section 5</h2>
        <div class="row mb-3">
            <div class="col-12">
                <img src="{{ asset('images/landingpage_razenstudio_screenshot/social-media-management/section_5.png') }}" alt="" class="img-fluid rounded">
            </div>
        </div>
        <form action="{{ route('razen-studio.admin.social-media-management.atur.section-5.store') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12 col-md-8">
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Sub Judul</label>
                        <input type="text" class="form-control" name="sub_judul" placeholder="APAKAH ITU?" value="{{$social_media_management_section_5?$social_media_management_section_5['sub_judul']:'' }}" required>
                    </div>
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Judul</label>
                        <input type="text" class="form-control" name="judul" placeholder="Social Media Marketing" value="{{$social_media_management_section_5?$social_media_management_section_5['judul']:'' }}" required>
                    </div>
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Deskripsi</label>
                        <textarea name="deskripsi" rows="5" class="form-control" id="section_5" required>{{$social_media_management_section_5 ? $social_media_management_section_5['deskripsi']:''}}</textarea>
                    </div>
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Link</label>
                        <input type="text" class="form-control" name="link" placeholder="" value="{{$social_media_management_section_5?$social_media_management_section_5['link']:'' }}" required>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="position-relative form-group">
                        <label for="" class="form-label">Gambar</label>
                        @if ($social_media_management_section_5)
                        <input type="file" class="dropify" name="gambar" data-height="300" data-allowed-file-extensions="png jpg jpeg webp" data-default-file="{{ asset('images/landingpage_razenstudio/social-media-management/'.$social_media_management_section_5['gambar']) }}" data-show-errors="true" required>
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
        <h2 class="small-title">Edit Section 6</h2>
        <div class="row mb-3">
            <div class="col-12 text-center">
                <img src="{{ asset('images/landingpage_razenstudio_screenshot/social-media-management/section_6.png') }}" alt="" class="img-fluid rounded">
            </div>
        </div>
        <form action="{{ route('razen-studio.admin.social-media-management.atur.section-6.store') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
                <div class="col-12">
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Judul</label>
                        <input type="text" class="form-control" name="judul" placeholder="Social Media Marketing" value="{{$social_media_management_section_6?$social_media_management_section_6['judul']:'' }}" required>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="position-relative form-group">
                        <label for="" class="form-label">Gambar Before</label>
                        @if ($social_media_management_section_6)
                        <input type="file" class="dropify" name="gambar_before" data-height="300" data-allowed-file-extensions="png jpg jpeg webp" data-default-file="{{ asset('images/landingpage_razenstudio/social-media-management/'.$social_media_management_section_6['gambar_before']) }}" data-show-errors="true" required>
                        @else
                        <input type="file" class="dropify" name="gambar_before" data-height="300" data-allowed-file-extensions="png jpg jpeg webp" data-show-errors="true" required>
                        @endif
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="position-relative form-group">
                        <label for="" class="form-label">Gambar After</label>
                        @if ($social_media_management_section_6)
                        <input type="file" class="dropify" name="gambar_after" data-height="300" data-allowed-file-extensions="png jpg jpeg webp" data-default-file="{{ asset('images/landingpage_razenstudio/social-media-management/'.$social_media_management_section_6['gambar_after']) }}" data-show-errors="true" required>
                        @else
                        <input type="file" class="dropify" name="gambar_after" data-height="300" data-allowed-file-extensions="png jpg jpeg webp" data-show-errors="true" required>
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
                <img src="{{ asset('images/landingpage_razenstudio_screenshot/social-media-management/section_7.png') }}" alt="" class="img-fluid rounded">
            </div>
        </div>
        <form action="{{ route('razen-studio.admin.social-media-management.atur.section-7.store') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
                <div class="col-12">
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Judul</label>
                        <input type="text" class="form-control" name="judul" placeholder="Social Media Marketing" value="{{$social_media_management_section_7?$social_media_management_section_7['judul']:'' }}" required>
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
            <div class="col-12 text-center">
                <img src="{{ asset('images/landingpage_razenstudio_screenshot/social-media-management/section_8.png') }}" alt="" class="img-fluid rounded">
            </div>
        </div>
        @if ($social_media_management_section_8 == null)
            <form action="{{ route('razen-studio.admin.social-media-management.atur.section-8.store') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
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
        @if ($social_media_management_section_8 != null)
            <form action="{{ route('razen-studio.admin.social-media-management.atur.section-8.edit') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Sub Judul</label>
                            <input type="text" class="form-control" name="sub_judul" placeholder="What we do" value="{{ $social_media_management_section_8['sub_judul'] }}" required>
                        </div>
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Judul</label>
                            <input name="judul" class="form-control" placeholder="Jasa Digital Marketing" value="{{$social_media_management_section_8['judul']}}" required>
                        </div>
                        <div class="mb-3 position-relative form-group">
                            <div class="row mb-3">
                                @foreach ($social_media_management_section_8['konten'] as $item)
                                    <div class="col-12 col-md-4 mb-5">
                                        <div class="card h-100 border">
                                            <button class="btn border-0 btn-icon btn_hapus_gambar_section8" type="button" value="{{$item['id']}}"><span class="badge rounded-pill bg-primary me-1 position-absolute e-3 t-n2 z-index-1">Hapus</span></button>
                                            <img src="{{ asset('images/landingpage_razenstudio/social-media-management/'.$item['gambar_konten']) }}" class="card-img-top sh-22" alt="card image">
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
            <div class="col-12 text-center">
                <img src="{{ asset('images/landingpage_razenstudio_screenshot/social-media-management/section_9.png') }}" alt="" class="img-fluid rounded">
            </div>
        </div>
        @if ($social_media_management_section_9 == null)
            <form action="{{ route('razen-studio.admin.social-media-management.atur.section-9.store') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
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
        @if ($social_media_management_section_9 != null)
            <form action="{{ route('razen-studio.admin.social-media-management.atur.section-9.edit') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Sub Judul</label>
                            <input type="text" class="form-control" name="sub_judul" placeholder="What we do" value="{{ $social_media_management_section_9['sub_judul'] }}" required>
                        </div>
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Judul</label>
                            <input name="judul" class="form-control" placeholder="Jasa Digital Marketing" value="{{$social_media_management_section_9['judul']}}" required>
                        </div>
                        <div class="mb-3 position-relative form-group">
                            <div class="row mb-3">
                                @foreach ($social_media_management_section_9['konten'] as $item)
                                    <div class="col-12 col-md-4 mb-5">
                                        <div class="card h-100 border">
                                            <button class="btn border-0 btn-icon btn_hapus_gambar_section9" type="button" value="{{$item['id']}}"><span class="badge rounded-pill bg-primary me-1 position-absolute e-3 t-n2 z-index-1">Hapus</span></button>
                                            <img src="{{ asset('images/landingpage_razenstudio/social-media-management/'.$item['logo_konten']) }}" class="card-img-top sh-22" alt="card image">
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
            <div class="col-12 text-center">
                <img src="{{ asset('images/landingpage_razenstudio_screenshot/social-media-management/section_10.png') }}" alt="" class="img-fluid rounded">
            </div>
        </div>
        @if ($social_media_management_section_10  == null)
            <form action="{{ route('razen-studio.admin.social-media-management.atur.section-10.store') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
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
        @if ($social_media_management_section_10  != null)
            <form action="{{ route('razen-studio.admin.social-media-management.atur.section-10.edit') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Sub Judul</label>
                            <input type="text" class="form-control" name="sub_judul" value="{{$social_media_management_section_10 ['sub_judul']}}" placeholder="FAQ" required>
                        </div>
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Judul</label>
                            <input type="text" class="form-control" name="judul" value="{{$social_media_management_section_10 ['judul']}}" required>
                        </div>
                        <div class="mb-3 position-relative form-group">
                            <div class="row mb-3">
                                @foreach ($social_media_management_section_10 ['konten'] as $item)
                                <div class="col-12 col-md-4 mb-3">
                                    <div class="card h-100 border">
                                        <button class="btn border-0 btn-icon btn_hapus_data_section10" type="button" value="{{$item['id']}}"><span class="badge rounded-pill bg-primary me-1 position-absolute e-3 t-n2 z-index-1">Hapus</span></button>
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

{{-- Modal --}}
<div class="modal fade" id="addSection4Modal" tabindex="-1" role="dialog" aria-labelledby="modalTitle" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitle">Add Item Section 4</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <span id="form_result"></span>
                <form action="{{ route('razen-studio.admin.social-media-management.atur.section-4.store') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12 col-md-7">
                            <div class="mb-3 position-relative form-group">
                                <label for="" class="form-label">Judul</label>
                                <input type="text" class="form-control" name="judul" placeholder="Instagram" required>
                            </div>
                            <div class="mb-3 position-relative form-group">
                                <label for="" class="form-label">Deskripsi</label>
                                <textarea name="deskripsi" id="section_4" rows="5" class="form-control" required></textarea>
                            </div>
                        </div>
                        <div class="col-12 col-md-5">
                            <div class="position-relative form-group">
                                <label for="" class="form-label">Gambar</label>
                                <input type="file" class="dropify" name="gambar" data-height="300" data-allowed-file-extensions="png jpg jpeg" data-show-errors="true" required>
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
    <script>
        var count_section8 = 1;
        var count_section9 = 1;
        var count_section10 = 1;

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

            CKEDITOR.replace('section_4',{
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

            CKEDITOR.replace('section_5',{
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

        $('.btn_hapus_satu_item_section_4').click(function(){
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
                        url: "{{ route('razen-studio.admin.social-media-management.atur.section-4.hapus.satu') }}",
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
            html += '<label for="" class="form-label">Gambar Konten</label>';
            html += '<input type="file" class="dropify" name="gambar_konten[]" data-height="300" data-allowed-file-extensions="svg png jpg jpeg" data-show-errors="true" required>';
            html += '</div>';
            html += '</div>';
            html += '</div>';

            if(number > 1)
            {
                $('#div_tambah_konten_section8').after(html);
                $('.dropify').dropify();
                $('.dropify-wrapper').css('line-height', '3rem');
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

        $('.btn_hapus_gambar_section8').click(function(){
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
                        url: "{{ route('razen-studio.admin.social-media-management.atur.section-8.hapus.satu') }}",
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
                        url: "{{ route('razen-studio.admin.social-media-management.atur.section-9.hapus.satu') }}",
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
                $('#div_tambah_konten_section10').after(html);
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

        $('.btn_hapus_data_section10').click(function(){
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
                        url: "{{ route('razen-studio.admin.social-media-management.atur.section-10.hapus.satu') }}",
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

