@extends('razen-studio.admin.layouts.app')
@section('title', 'Admin - Razen Studio | Freelancer Agency | Atur')

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
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioFreelancerAgency;

    $freelancer_agency = LandingpageRazenstudioFreelancerAgency::first();
    if ($freelancer_agency) {
        $freelancer_agency_section_1 = json_decode($freelancer_agency->section_1, true);
        $freelancer_agency_section_2 = json_decode($freelancer_agency->section_2, true);
        $freelancer_agency_section_3 = json_decode($freelancer_agency->section_3, true);
        $freelancer_agency_section_4 = json_decode($freelancer_agency->section_4, true);
        $freelancer_agency_section_5 = json_decode($freelancer_agency->section_5, true);
        $freelancer_agency_section_6 = json_decode($freelancer_agency->section_6, true);
        $freelancer_agency_section_7 = json_decode($freelancer_agency->section_7, true);
    } else {
        $freelancer_agency_section_1 = [];
        $freelancer_agency_section_2 = [];
        $freelancer_agency_section_3 = [];
        $freelancer_agency_section_4 = [];
        $freelancer_agency_section_5 = [];
        $freelancer_agency_section_6 = [];
        $freelancer_agency_section_7 = [];
    }
@endphp

<div class="page-title-container">
    <div class="row">
        <!-- Title Start -->
        <div class="col-12 col-md-7">
            <h1 class="mb-0 pb-0 display-4" id="title">Freelancer Agency - Atur</h1>
            <nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb">
                <ul class="breadcrumb pt-0">
                    <li class="breadcrumb-item"><a href="{{ route('razen-studio.admin.dashboard.index') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="#">Landing Page</a></li>
                    <li class="breadcrumb-item"><a href="#">Freelancer Agency</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('razen-studio.admin.freelancer-agency.atur.index') }}">Atur</a></li>
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
                <img src="{{ asset('images/landingpage_razenstudio_screenshot/freelancer-agency/section_1.png') }}" alt="" class="img-fluid rounded">
            </div>
        </div>
        <form action="{{ route('razen-studio.admin.freelancer-agency.atur.section-1.store') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12">
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Title</label>
                        <input type="text" class="form-control" name="title" placeholder="Untuk title pada page" value="{{$freelancer_agency_section_1?$freelancer_agency_section_1['title']:'' }}" required>
                    </div>
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Judul</label>
                        <input type="text" class="form-control" name="judul" placeholder="Social Media Marketing & Management" value="{{$freelancer_agency_section_1?$freelancer_agency_section_1['judul']:'' }}" required>
                    </div>
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Deskripsi</label>
                        <textarea name="deskripsi" rows="5" class="form-control" placeholder="Jasa pengelolaan social media terlengkap satu-satunya di Indonesia..." required>{{$freelancer_agency_section_1 ? $freelancer_agency_section_1['deskripsi']:''}}</textarea>
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
                <img src="{{ asset('images/landingpage_razenstudio_screenshot/freelancer-agency/section_2.png') }}" alt="" class="img-fluid rounded">
            </div>
        </div>
        <form action="{{ route('razen-studio.admin.freelancer-agency.atur.section-2.store') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12 col-md-8">
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Judul</label>
                        <input type="text" class="form-control" name="judul" placeholder="Desain yang bagus?" value="{{$freelancer_agency_section_2?$freelancer_agency_section_2['judul']:'' }}" required>
                    </div>
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Deskripsi</label>
                        <textarea name="deskripsi" rows="5" class="form-control" id="section_2" required>{{$freelancer_agency_section_2 ? $freelancer_agency_section_2['deskripsi']:''}}</textarea>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="position-relative form-group">
                        <label for="" class="form-label">Gambar</label>
                        @if ($freelancer_agency_section_2)
                        <input type="file" class="dropify" name="gambar" data-height="300" data-allowed-file-extensions="png jpg jpeg webp" data-default-file="{{ asset('images/landingpage_razenstudio/freelancer-agency/'.$freelancer_agency_section_2['gambar']) }}" data-show-errors="true" required>
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
                <img src="{{ asset('images/landingpage_razenstudio_screenshot/freelancer-agency/section_3.png') }}" alt="" class="img-fluid rounded">
            </div>
        </div>
        <form action="{{ route('razen-studio.admin.freelancer-agency.atur.section-3.store') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12 col-md-8">
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Nama Reviewer</label>
                        <input type="text" class="form-control" name="nama" value="{{$freelancer_agency_section_3 ? $freelancer_agency_section_3['nama']:''}}">
                    </div>
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Jabatan Reviewer</label>
                        <input type="text" class="form-control" name="jabatan" value="{{$freelancer_agency_section_3 ? $freelancer_agency_section_3['jabatan']:''}}">
                    </div>
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Review</label>
                        <textarea name="review" rows="5" class="form-control" required>{{$freelancer_agency_section_3 ? $freelancer_agency_section_3['review']:''}}</textarea>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="position-relative form-group">
                        <label for="" class="form-label">Gambar</label>
                        @if ($freelancer_agency_section_3)
                        <input type="file" class="dropify" name="gambar" data-height="300" data-allowed-file-extensions="png jpg jpeg webp" data-default-file="{{ asset('images/landingpage_razenstudio/freelancer-agency/'.$freelancer_agency_section_3['gambar']) }}" data-show-errors="true" required>
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
            <div class="col-12 text-center">
                <img src="{{ asset('images/landingpage_razenstudio_screenshot/freelancer-agency/section_4.png') }}" alt="" class="img-fluid rounded">
            </div>
        </div>
        @if ($freelancer_agency_section_4 == null)
            <form action="{{ route('razen-studio.admin.freelancer-agency.atur.section-4.store') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
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
        @if ($freelancer_agency_section_4 != null)
            <form action="{{ route('razen-studio.admin.freelancer-agency.atur.section-4.edit') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Sub Judul</label>
                            <input type="text" class="form-control" name="sub_judul" placeholder="What we do" value="{{ $freelancer_agency_section_4['sub_judul'] }}" required>
                        </div>
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Judul</label>
                            <input name="judul" class="form-control" placeholder="Jasa Digital Marketing" value="{{$freelancer_agency_section_4['judul']}}" required>
                        </div>
                        <div class="mb-3 position-relative form-group">
                            <div class="row mb-3">
                                @foreach ($freelancer_agency_section_4['konten'] as $item)
                                    <div class="col-12 col-md-4 mb-5">
                                        <div class="card h-100 border">
                                            <button class="btn border-0 btn-icon btn_hapus_gambar_section4" type="button" value="{{$item['id']}}"><span class="badge rounded-pill bg-primary me-1 position-absolute e-3 t-n2 z-index-1">Hapus</span></button>
                                            <img src="{{ asset('images/landingpage_razenstudio/freelancer-agency/'.$item['gambar_konten']) }}" class="card-img-top sh-22" alt="card image">
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
                <img src="{{ asset('images/landingpage_razenstudio_screenshot/freelancer-agency/section_5.png') }}" alt="" class="img-fluid rounded">
            </div>
        </div>
        @if ($freelancer_agency_section_5 == null)
            <form action="{{ route('razen-studio.admin.freelancer-agency.atur.section-5.store') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
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
        @if ($freelancer_agency_section_5 != null)
            <form action="{{ route('razen-studio.admin.freelancer-agency.atur.section-5.edit') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Sub Judul</label>
                            <input type="text" class="form-control" name="sub_judul" placeholder="What we do" value="{{ $freelancer_agency_section_5['sub_judul'] }}" required>
                        </div>
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Judul</label>
                            <input name="judul" class="form-control" placeholder="Jasa Digital Marketing" value="{{$freelancer_agency_section_5['judul']}}" required>
                        </div>
                        <div class="mb-3 position-relative form-group">
                            <div class="row mb-3">
                                @foreach ($freelancer_agency_section_5['konten'] as $item)
                                    <div class="col-12 col-md-4 mb-5">
                                        <div class="card h-100 border">
                                            <button class="btn border-0 btn-icon btn_hapus_gambar_section5" type="button" value="{{$item['id']}}"><span class="badge rounded-pill bg-primary me-1 position-absolute e-3 t-n2 z-index-1">Hapus</span></button>
                                            <img src="{{ asset('images/landingpage_razenstudio/freelancer-agency/'.$item['gambar_konten']) }}" class="card-img-top sh-22" alt="card image">
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
            <div class="col-12 text-center">
                <img src="{{ asset('images/landingpage_razenstudio_screenshot/freelancer-agency/section_6.png') }}" alt="" class="img-fluid rounded">
            </div>
        </div>
        <form action="{{ route('razen-studio.admin.freelancer-agency.atur.section-6.store') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12">
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Judul</label>
                        <input type="text" class="form-control" name="judul" placeholder="Social Media Marketing & Management" value="{{$freelancer_agency_section_6?$freelancer_agency_section_6['judul']:'' }}" required>
                    </div>
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Deskripsi</label>
                        <textarea name="deskripsi" id="section_6" rows="5" class="form-control" placeholder="Jasa pengelolaan social media terlengkap satu-satunya di Indonesia..." required>{{$freelancer_agency_section_6 ? $freelancer_agency_section_6['deskripsi']:''}}</textarea>
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
                <img src="{{ asset('images/landingpage_razenstudio_screenshot/freelancer-agency/section_7.png') }}" alt="" class="img-fluid rounded">
            </div>
        </div>
        @if ($freelancer_agency_section_7  == null)
            <form action="{{ route('razen-studio.admin.freelancer-agency.atur.section-7.store') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
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
        @if ($freelancer_agency_section_7  != null)
            <form action="{{ route('razen-studio.admin.freelancer-agency.atur.section-7.edit') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Sub Judul</label>
                            <input type="text" class="form-control" name="sub_judul" value="{{$freelancer_agency_section_7 ['sub_judul']}}" placeholder="FAQ" required>
                        </div>
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Judul</label>
                            <input type="text" class="form-control" name="judul" value="{{$freelancer_agency_section_7 ['judul']}}" required>
                        </div>
                        <div class="mb-3 position-relative form-group">
                            <div class="row mb-3">
                                @foreach ($freelancer_agency_section_7 ['konten'] as $item)
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
        var count_section4 = 1;
        var count_section5 = 1;
        var count_section7 = 1;

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
                        url: "{{ route('razen-studio.admin.freelancer-agency.atur.section-4.hapus.satu') }}",
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
            html += '<label for="" class="form-label">Gambar Konten</label>';
            html += '<input type="file" class="dropify" name="gambar_konten[]" data-height="300" data-allowed-file-extensions="svg png jpg jpeg" data-show-errors="true" required>';
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
                        url: "{{ route('razen-studio.admin.freelancer-agency.atur.section-5.hapus.satu') }}",
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
                        url: "{{ route('razen-studio.admin.freelancer-agency.atur.section-7.hapus.satu') }}",
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
