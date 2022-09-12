@extends('razen-studio.admin.layouts.app')
@section('title', 'Admin - Razen Studio | Commercial Photography | Atur')

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
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioCommercialPhotography;
    use App\Models\RazenStudio\LandingPage\CommercialPhotography\LandingpageRazenstudioCommercialPhotographyPaketHarga;

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
@endphp
<div class="page-title-container">
    <div class="row">
    <!-- Title Start -->
    <div class="col-12 col-md-7">
        <h1 class="mb-0 pb-0 display-4" id="title">Commercial Photography - Atur</h1>
        <nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb">
            <ul class="breadcrumb pt-0">
                <li class="breadcrumb-item"><a href="{{ route('razen-studio.admin.dashboard.index') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="#">Landing Page</a></li>
                <li class="breadcrumb-item"><a href="#">Commercial Photography</a></li>
                <li class="breadcrumb-item"><a href="{{ route('razen-studio.admin.commercial-photography.atur.index') }}">Atur</a></li>
            </ul>
        </nav>
    </div>
    <!-- Title End -->
    </div>
</div>

<h2 class="small-title">Commercial Photography</h2>

<div class="card mb-5">
    <div class="card-body">
        <h2 class="small-title">Edit Section 1</h2>
        <div class="row mb-3">
            <div class="col-12">
                <img src="{{ asset('images/landingpage_razenstudio_screenshot/commercial-photography/section_1.png') }}" alt="" class="img-fluid rounded">
            </div>
        </div>
        <form action="{{ route('razen-studio.admin.commercial-photography.atur.section-1.store') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12">
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Title</label>
                        <input type="text" class="form-control" name="title" placeholder="Mengubah title pada page" value="{{$commercial_photography_section_1?$commercial_photography_section_1['title']:'' }}" required>
                    </div>
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Judul</label>
                        <input type="text" class="form-control" name="judul" placeholder="Jasa Foto Produk" value="{{$commercial_photography_section_1?$commercial_photography_section_1['judul']:'' }}" required>
                    </div>
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Deskripsi</label>
                        <textarea name="deskripsi" rows="5" class="form-control" placeholder="Layanan fotografi produk terlengkap mulai dari katalog foto produk makanan, minuman, baju, dll. Didukungan peralatan, model, dan tim yang profesional." required>{{$commercial_photography_section_1 ? $commercial_photography_section_1['deskripsi']:''}}</textarea>
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
                <img src="{{ asset('images/landingpage_razenstudio_screenshot/commercial-photography/section_2.png') }}" alt="" class="img-fluid rounded">
            </div>
        </div>
        <form action="{{ route('razen-studio.admin.commercial-photography.atur.section-2.store') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12 col-md-8">
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Sub Judul</label>
                        <input type="text" class="form-control" name="sub_judul" placeholder="VIDEO COMPANY PROFILE" value="{{$commercial_photography_section_2?$commercial_photography_section_2['sub_judul']:''}}" required>
                    </div>
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Judul</label>
                        <input type="text" class="form-control" name="judul" placeholder="Pentingnya Video Company Profile untuk Branding!" value="{{$commercial_photography_section_2?$commercial_photography_section_2['judul']:'' }}" required>
                    </div>
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Deskripsi</label>
                        <textarea name="deskripsi" rows="5" class="form-control" id="section_2" required>{{$commercial_photography_section_2 ? $commercial_photography_section_2['deskripsi']:''}}</textarea>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="position-relative form-group">
                        <label for="" class="form-label">Gambar</label>
                        @if ($commercial_photography_section_2)
                        <input type="file" class="dropify" name="gambar" data-height="300" data-allowed-file-extensions="png jpg jpeg webp" data-default-file="{{ asset('images/landingpage_razenstudio/commercial-photography/'.$commercial_photography_section_2['gambar']) }}" data-show-errors="true" required>
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
                <img src="{{ asset('images/landingpage_razenstudio_screenshot/commercial-photography/section_3.png') }}" alt="" class="img-fluid rounded">
            </div>
        </div>
        @if ($commercial_photography_section_3 == null)
            <form action="{{ route('razen-studio.admin.commercial-photography.atur.section-3.store') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Judul</label>
                            <input type="text" class="form-control" name="judul" required>
                        </div>
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Deskripsi</label>
                            <textarea name="deskripsi" rows="5" class="form-control" required></textarea>
                        </div>
                        <div class="mb-3 position-relative form-group">
                            <div class="row">
                                <div class="col-6">
                                    <label for="" class="form-label">Tambah Konten Section 3</label>
                                </div>
                                <div class="col-6" style="text-align: right">
                                    <button class="btn btn-icon btn-outline-success waves-effect mr-2 btn_tambah_section3" type="button"><i data-acorn-icon="plus"></i></button>
                                    <button class="btn btn-icon btn-outline-danger waves-effect mr-2 btn_hapus_section3" type="button"><i data-acorn-icon="minus"></i></button>
                                </div>
                            </div>
                        </div>
                        <div id="div_tambah_konten_section3"></div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mb-0">Submit</button>
            </form>
        @endif
        @if ($commercial_photography_section_3 != null)
            <form action="{{ route('razen-studio.admin.commercial-photography.atur.section-3.edit') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    @foreach ($commercial_photography_section_3['konten'] as $item)
                        <div class="col-12 col-md-4 mb-5">
                            <div class="card h-100 border">
                                <button class="btn border-0 btn-icon btn_hapus_data_section3" type="button" value="{{$item['id']}}"><span class="badge rounded-pill bg-primary me-1 position-absolute e-3 t-n2 z-index-1">Hapus</span></button>
                                <img src="{{ asset('images/landingpage_razenstudio/commercial-photography/'.$item['gambar']) }}" class="card-img-top sh-22" alt="card image">
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Judul</label>
                            <input type="text" class="form-control" name="judul" value="{{$commercial_photography_section_3['judul']}}" required>
                        </div>
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Deskripsi</label>
                            <textarea name="deskripsi" rows="5" class="form-control" required>{{$commercial_photography_section_3['deskripsi']}}</textarea>
                        </div>
                        <div class="mb-3 position-relative form-group">
                            <div class="row">
                                <div class="col-6">
                                    <label for="" class="form-label">Tambah Konten Section 4</label>
                                </div>
                                <div class="col-6" style="text-align: right">
                                    <button class="btn btn-icon btn-outline-success waves-effect mr-2 btn_tambah_section3" type="button"><i data-acorn-icon="plus"></i></button>
                                    <button class="btn btn-icon btn-outline-danger waves-effect mr-2 btn_hapus_section3" type="button"><i data-acorn-icon="minus"></i></button>
                                </div>
                            </div>
                        </div>
                        <div id="div_tambah_konten_section3"></div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mb-0">Submit</button>
            </form>
        @endif
    </div>
</div>

<div class="card mb-5">
    <div class="card-body">
        <h2 class="small-title">Edit Section 4</h2>
        <div class="row mb-3">
            <div class="col-12">
                <img src="{{ asset('images/landingpage_razenstudio_screenshot/commercial-photography/section_4.png') }}" alt="" class="img-fluid rounded">
            </div>
        </div>
        @if ($commercial_photography_section_4 == null)
            <form action="{{ route('razen-studio.admin.commercial-photography.atur.section-4.store') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Judul</label>
                            <input type="text" class="form-control" name="judul" placeholder="LANGKAH PENGERJAAN" required>
                        </div>
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Sub Judul</label>
                            <input type="text" class="form-control" name="sub_judul" placeholder="Foto Produk" required>
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
        @if ($commercial_photography_section_4 != null)
            <form action="{{ route('razen-studio.admin.commercial-photography.atur.section-4.edit') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Judul</label>
                            <input type="text" class="form-control" name="judul" value="{{$commercial_photography_section_4['judul']}}" required>
                        </div>
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Sub Judul</label>
                            <input type="text" class="form-control" name="sub_judul" value="{{$commercial_photography_section_4['sub_judul']}}" required>
                        </div>
                        <div class="mb-3 position-relative form-group">
                            <div class="row mb-3">
                                @foreach ($commercial_photography_section_4['konten'] as $item)
                                <div class="col-12 col-md-4 mb-3">
                                    <div class="card h-100 border">
                                        <button class="btn border-0 btn-icon btn_hapus_data_section4" type="button" value="{{$item['id']}}"><span class="badge rounded-pill bg-primary me-1 position-absolute e-3 t-n2 z-index-1">Hapus</span></button>
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
            <div class="col-12">
                <img src="{{ asset('images/landingpage_razenstudio_screenshot/commercial-photography/section_5.png') }}" alt="" class="img-fluid rounded">
            </div>
        </div>
        <form action="{{ route('razen-studio.admin.commercial-photography.atur.section-5.store') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12 col-md-8">
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Judul</label>
                        <input type="text" class="form-control" name="judul" placeholder="Pentingnya Video Company Profile untuk Branding!" value="{{$commercial_photography_section_5?$commercial_photography_section_5['judul']:'' }}" required>
                    </div>
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Deskripsi</label>
                        <textarea name="deskripsi" rows="5" class="form-control" id="section_5" required>{{$commercial_photography_section_5 ? $commercial_photography_section_5['deskripsi']:''}}</textarea>
                    </div>
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Link</label>
                        <input type="text" class="form-control" name="link" placeholder="" value="{{$commercial_photography_section_5?$commercial_photography_section_5['link']:'' }}" required>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="position-relative form-group">
                        <label for="" class="form-label">Gambar</label>
                        @if ($commercial_photography_section_5)
                        <input type="file" class="dropify" name="gambar" data-height="300" data-allowed-file-extensions="png jpg jpeg webp" data-default-file="{{ asset('images/landingpage_razenstudio/commercial-photography/'.$commercial_photography_section_5['gambar']) }}" data-show-errors="true" required>
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
                <img src="{{ asset('images/landingpage_razenstudio_screenshot/commercial-photography/section_6.png') }}" alt="" class="img-fluid rounded">
            </div>
        </div>
        <form class="mb-3" action="{{ route('razen-studio.admin.commercial-photography.atur.section-6.store') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12">
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Sub Judul</label>
                        <input type="text" class="form-control" name="sub_judul" value="{{$commercial_photography_section_6?$commercial_photography_section_6['sub_judul']:'' }}" required>
                    </div>
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Judul</label>
                        <input type="text" class="form-control" name="judul" value="{{$commercial_photography_section_6?$commercial_photography_section_6['judul']:'' }}" required>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mb-0">Submit</button>
        </form>
        @if ($cek_paket_harga)
            <hr>
            @php
                $paket_hargas = LandingpageRazenstudioCommercialPhotographyPaketHarga::all();
            @endphp
            <div class="row">
                @foreach ($paket_hargas as $item)
                    <div class="col-12 col-md-4">
                        <div class="card border">
                            <div class="card-body">
                                {!! $item->deskripsi !!}
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-danger waves-effect waves-light btn_hapus_item_section_6" type="button" data-id="{{$item->id}}">Hapus</button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
        <hr>
        <div class="row mb-3">
            <div class="col-6 justify-content-center align-self-center">
                <label for="" class="form-label">Tambah Item</label>
            </div>
            <div class="col-6" style="text-align: right">
                <button class="btn btn-outline-success waves-effect waves-light" id="btn_modal_section_6" type="button" data-bs-toggle="modal" data-bs-target="#itemSection6"><i data-acorn-icon="plus"></i></button>
            </div>
        </div>
    </div>
</div>

<div class="card mb-5">
    <div class="card-body">
        <h2 class="small-title">Edit Section 7</h2>
        <div class="row mb-3">
            <div class="col-12">
                <img src="{{ asset('images/landingpage_razenstudio_screenshot/commercial-photography/section_7.png') }}" alt="" class="img-fluid rounded">
            </div>
        </div>
        @if ($commercial_photography_section_7 == null)
            <form action="{{ route('razen-studio.admin.commercial-photography.atur.section-7.store') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Judul</label>
                            <input name="judul" class="form-control" placeholder="Portofolio" required>
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
        @if ($commercial_photography_section_7 != null)
            <form action="{{ route('razen-studio.admin.commercial-photography.atur.section-7.edit') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Judul</label>
                            <input name="judul" class="form-control" placeholder="Portofolio" value="{{$commercial_photography_section_7['judul']}}" required>
                        </div>
                        <div class="mb-3 position-relative form-group">
                            <div class="row mb-3">
                                @foreach ($commercial_photography_section_7['konten'] as $item)
                                    <div class="col-12 col-md-4 mb-5">
                                        <div class="card h-100 border">
                                            <button class="btn border-0 btn-icon btn_hapus_gambar_section7" type="button" value="{{$item['id']}}"><span class="badge rounded-pill bg-primary me-1 position-absolute e-3 t-n2 z-index-1">Hapus</span></button>
                                            <img src="{{ asset('images/landingpage_razenstudio/commercial-photography/'.$item['gambar_konten']) }}" class="card-img-top sh-22" alt="card image">
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

<div class="card mb-5">
    <div class="card-body">
        <h2 class="small-title">Edit Section 8</h2>
        <div class="row mb-3">
            <div class="col-12">
                <img src="{{ asset('images/landingpage_razenstudio_screenshot/commercial-photography/section_8.png') }}" alt="" class="img-fluid rounded">
            </div>
        </div>
        @if ($commercial_photography_section_8 == null)
            <form action="{{ route('razen-studio.admin.commercial-photography.atur.section-8.store') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
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
        @if ($commercial_photography_section_8 != null)
            <form action="{{ route('razen-studio.admin.commercial-photography.atur.section-8.edit') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Sub Judul</label>
                            <input type="text" class="form-control" name="sub_judul" placeholder="MENGAPA HARUS KAMI?" value="{{ $commercial_photography_section_8['sub_judul'] }}" required>
                        </div>
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Judul</label>
                            <input name="judul" class="form-control" placeholder="Keuntungan Foto Produk bersama GoSocial" value="{{$commercial_photography_section_8['judul']}}" required>
                        </div>
                        <div class="mb-3 position-relative form-group">
                            <div class="row mb-3">
                                @foreach ($commercial_photography_section_8['konten'] as $item)
                                    <div class="col-12 col-md-4 mb-5">
                                        <div class="card h-100 border">
                                            <button class="btn border-0 btn-icon btn_hapus_gambar_section8" type="button" value="{{$item['id']}}"><span class="badge rounded-pill bg-primary me-1 position-absolute e-3 t-n2 z-index-1">Hapus</span></button>
                                            <img src="{{ asset('images/landingpage_razenstudio/commercial-photography/'.$item['logo_konten']) }}" class="card-img-top sh-22" alt="card image">
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
            <div class="col-12">
                <img src="{{ asset('images/landingpage_razenstudio_screenshot/commercial-photography/section_9.png') }}" alt="" class="img-fluid rounded">
            </div>
        </div>
        <form action="{{ route('razen-studio.admin.commercial-photography.atur.section-9.store') }}" class="mb-3" novalidate="novalidate" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12">
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Sub Judul</label>
                        <input type="text" class="form-control" name="sub_judul" placeholder="Jasa Video Marketing" value="{{$commercial_photography_section_9?$commercial_photography_section_9['sub_judul']:'' }}" required>
                    </div>
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Judul</label>
                        <input type="text" class="form-control" name="judul" placeholder="Jasa Video Marketing" value="{{$commercial_photography_section_9?$commercial_photography_section_9['judul']:'' }}" required>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mb-0">Submit</button>
        </form>
        <form action="{{ route('razen-studio.admin.commercial-photography.atur.section-9.item-1.store') }}" class="mb-3" novalidate="novalidate" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12 col-md-6">
                    <img src="{{ asset('images/landingpage_razenstudio_screenshot/commercial-photography/section_9_item_1.png') }}" alt="" class="img-fluid rounded">
                </div>
                <div class="col-12 col-md-6">
                    <input type="hidden" name="item" value="foto_produk_makanan">
                    @if ($commercial_photography_section_9['item'] != null)
                        @foreach ($commercial_photography_section_9['item'] as $item)
                            @if ($item['item'] == 'foto_produk_makanan')
                                <div class="mb-3 position-relative form-group">
                                    <label for="" class="form-label">Judul</label>
                                    <input type="text" class="form-control" name="judul" value="{{$item['judul']}}" required>
                                </div>
                                <div class="mb-3 position-relative form-group">
                                    <label for="" class="form-label">Deskripsi</label>
                                    <textarea name="deskripsi" rows="5" class="form-control" required>{{$item['deskripsi']}}</textarea>
                                </div>
                                <div class="mb-3 position-relative form-group">
                                    <label for="" class="form-label">Gambar</label>
                                    <input type="file" class="dropify" name="gambar[]" data-height="300" data-allowed-file-extensions="png jpg jpeg webp" data-show-errors="true" multiple required>
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
                            <label for="" class="form-label">Gambar</label>
                            <input type="file" class="dropify" name="gambar[]" id="foto_produk_makanan" data-height="300" data-allowed-file-extensions="png jpg jpeg webp" data-show-errors="true" multiple required>
                        </div>
                        <div class="mb-3 position-relative form-group" style="text-align: right">
                            <button class="btn btn-primary waves-effect waves-light">Submit</button>
                        </div>
                    @endif
                </div>
            </div>
        </form>
        <form action="{{ route('razen-studio.admin.commercial-photography.atur.section-9.item-2.store') }}" class="mb-3" novalidate="novalidate" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12 col-md-6">
                    <img src="{{ asset('images/landingpage_razenstudio_screenshot/commercial-photography/section_9_item_2.png') }}" alt="" class="img-fluid rounded">
                </div>
                <div class="col-12 col-md-6">
                    <input type="hidden" name="item" value="foto_produk_minuman">
                    @if ($commercial_photography_section_9 != null)
                        @foreach ($commercial_photography_section_9['item'] as $item)
                            @if ($item['item'] == 'foto_produk_minuman')
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
                                    <input type="file" class="dropify" name="ikon" data-height="300" data-allowed-file-extensions="png jpg jpeg webp" data-show-errors="true" required>
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
                            <label for="" class="form-label">Gambar</label>
                            <input type="file" class="dropify" name="gambar[]" id="foto_produk_minuman" data-height="300" data-allowed-file-extensions="png jpg jpeg webp" data-show-errors="true" multiple required>
                        </div>
                        <div class="mb-3 position-relative form-group" style="text-align: right">
                            <button class="btn btn-primary waves-effect waves-light">Submit</button>
                        </div>
                    @endif
                </div>
            </div>
        </form>
        <form action="{{ route('razen-studio.admin.commercial-photography.atur.section-9.item-3.store') }}" class="mb-3" novalidate="novalidate" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12 col-md-6">
                    <img src="{{ asset('images/landingpage_razenstudio_screenshot/commercial-photography/section_9_item_3.png') }}" alt="" class="img-fluid rounded">
                </div>
                <div class="col-12 col-md-6">
                    <input type="hidden" name="item" value="foto_produk_baju">
                    @if ($commercial_photography_section_9 != null)
                        @foreach ($commercial_photography_section_9['item'] as $item)
                            @if ($item['item'] == 'foto_produk_baju')
                                <div class="mb-3 position-relative form-group">
                                    <label for="" class="form-label">Judul</label>
                                    <input type="text" class="form-control" name="judul" value="{{$item['judul']}}" required>
                                </div>
                                <div class="mb-3 position-relative form-group">
                                    <label for="" class="form-label">Deskripsi</label>
                                    <textarea name="deskripsi" rows="5" class="form-control" required>{{$item['deskripsi']}}</textarea>
                                </div>
                                <div class="mb-3 position-relative form-group">
                                    <label for="" class="form-label">Gambar</label>
                                    <input type="file" class="dropify" name="gambar[]" data-height="300" data-allowed-file-extensions="png jpg jpeg webp" data-show-errors="true" required>
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
                            <label for="" class="form-label">Gambar</label>
                            <input type="file" class="dropify" name="gambar[]" id="foto_produk_baju" data-height="300" data-allowed-file-extensions="png jpg jpeg webp" data-show-errors="true" multiple required>
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
        <h2 class="small-title">Edit Section 10</h2>
        <div class="row mb-3">
            <div class="col-12">
                <img src="{{ asset('images/landingpage_razenstudio_screenshot/commercial-photography/section_10.png') }}" alt="" class="img-fluid rounded">
            </div>
        </div>
        <form action="{{ route('razen-studio.admin.commercial-photography.atur.section-10.store') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12">
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Sub Judul</label>
                        <input type="text" class="form-control" name="sub_judul" placeholder="OUR LATEST WORK" value="{{$commercial_photography_section_10?$commercial_photography_section_10['sub_judul']:''}}" required>
                    </div>
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Judul</label>
                        <input type="text" class="form-control" name="judul" placeholder="Portofolio" value="{{$commercial_photography_section_10?$commercial_photography_section_10['judul']:'' }}" required>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mb-0">Submit</button>
        </form>
    </div>
</div>

<div class="card mb-5">
    <div class="card-body">
        <h2 class="small-title">Edit Section 11</h2>
        <div class="row mb-3">
            <div class="col-12">
                <img src="{{ asset('images/landingpage_razenstudio_screenshot/commercial-photography/section_11.png') }}" alt="" class="img-fluid rounded">
            </div>
        </div>
        @if ($commercial_photography_section_11 == null)
            <form action="{{ route('razen-studio.admin.commercial-photography.atur.section-11.store') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
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
        @if ($commercial_photography_section_11 != null)
            <form action="{{ route('razen-studio.admin.commercial-photography.atur.section-11.edit') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Sub Judul</label>
                            <input type="text" class="form-control" name="sub_judul" value="{{$commercial_photography_section_11['sub_judul']}}" placeholder="FAQ" required>
                        </div>
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Judul</label>
                            <input type="text" class="form-control" name="judul" value="{{$commercial_photography_section_11['judul']}}" required>
                        </div>
                        <div class="mb-3 position-relative form-group">
                            <div class="row mb-3">
                                @foreach ($commercial_photography_section_11['konten'] as $item)
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

{{-- Modal --}}
<div class="modal fade" id="itemSection6" tabindex="-1" role="dialog" aria-labelledby="itemSection6LabelDefault" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="itemSection6LabelDefault">Tambah Item Section 6</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('razen-studio.admin.commercial-photography.atur.section-6.item.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12 col-md-7">
                            <div class="mb-3 position-relative form-group">
                                <label for="" class="form-label">Deskripsi</label>
                                <textarea name="deskripsi" id="item_section_6_deskripsi" rows="5" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="col-12 col-md-5">
                            <div class="mb-3 position-relative form-group">
                                <label for="" class="form-label">Gambar</label>
                                <input type="file" class="dropify gambar-section-6" name="gambar[]" data-height="300" data-allowed-file-extensions="png jpg jpeg webp" data-show-errors="true" multiple required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button class="btn btn-primary" type="submit">Save</button>
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
    var count_section3 = 1;
    var count_section4 = 1;
    var count_section7 = 1;
    var count_section8 = 1;
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

        CKEDITOR.replace('item_section_6_deskripsi',{
            toolbarGroups: [
                {
                    "name": "basicstyles",
                    "groups": ["basicstyles"]
                },
                {
                    "name": "colors",
                    "groups": [ 'TextColor','BGColor' ]
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

    dynamic_section3(count_section3);
    function dynamic_section3(number)
    {
        var urut = number - 1;
        html = '<div class="row border-top p-3">';
        html += '<div class="col-12">';
        html += '<label class="form-label">Gambar</label>';
        html += '<input type="file" class="dropify" name="gambar[]" data-height="300" data-allowed-file-extensions="png jpg jpeg webp" data-show-errors="true" required>';
        html += '</div>';
        html += '</div>';

        if(number > 1)
        {
            $('#div_tambah_konten_section3').after(html);
            $('.dropify').dropify();
            $('.dropify-wrapper').css('line-height', '3rem');
        }
    }

    $(document).on('click', '.btn_tambah_section3',function(){
        count_section3++;
        dynamic_section3(count_section3);
    });

    $(document).on('click','.btn_hapus_section3',function(){
        var urut = count_section3;
        $('#div_tambah_konten_section3').next('div').remove();
        count_section3--;
        if(count_section3 < 1)
        {
            count_section3 = 1;
        }
    });

    $('.btn_hapus_data_section3').click(function(){
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
                    url: "{{ route('razen-studio.admin.commercial-photography.atur.section-3.hapus.satu') }}",
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
            $('#div_tambah_konten_section4').after(html);
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

    $('.btn_hapus_data_section4').click(function(){
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
                    url: "{{ route('razen-studio.admin.commercial-photography.atur.section-4.hapus.satu') }}",
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

    $('#btn_modal_section_6').click(function(){
        CKEDITOR.instances['item_section_6_deskripsi'].setData('');
        $('.gambar-section-6 .dropify-clear').click();
    });

    $('.btn_hapus_item_section_6').click(function(){
        var id = $(this).attr('data-id');
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
                    url: "{{ route('razen-studio.admin.commercial-photography.atur.section-6.item.hapus') }}",
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
        html = '<div class="row border-top p-3">';
        html += '<div class="col-12">';
        html += '<div class="mb-3 position-relative form-group">';
        html += '<label for="" class="form-label">Judul Konten</label>';
        html += '<input name="judul_konten[]" class="form-control" placeholder="Weekly Report" required>';
        html += '</div>';
        html += '<div class="row">';
        html += '<div class="col-12 col-md-6">';
        html += '<div class="position-relative form-group">';
        html += '<label for="" class="form-label">File Konten</label>';
        html += '<input type="file" class="dropify" name="file_konten[]" data-height="300" data-allowed-file-extensions="pdf" data-show-errors="true" required>';
        html += '</div>';
        html += '</div>';
        html +='<div class="col-12 col-md-6">';
        html += '<div class="position-relative form-group">';
        html += '<label for="" class="form-label">Gambar Konten</label>';
        html += '<input type="file" class="dropify" name="gambar_konten[]" data-height="300" data-allowed-file-extensions="webp png jpg jpeg" data-show-errors="true" required>';
        html += '</div>';
        html += '</div>';
        html += '</div>';
        html += '</div>';
        html += '</div>';

        if(number > 1)
        {
            $('#div_tambah_konten_section7').after(html);
            $('.dropify').dropify();
            $('.dropify-wrapper').css('line-height', '3rem');
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

    $('.btn_hapus_gambar_section7').click(function(){
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
                    url: "{{ route('razen-studio.admin.commercial-photography.atur.section-7.hapus.satu') }}",
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
        html += '<label for="" class="form-label">Logo Konten</label>';
        html += '<input type="file" class="dropify" name="logo_konten[]" data-height="300" data-allowed-file-extensions="svg png jpg jpeg" data-show-errors="true" required>';
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
                    url: "{{ route('razen-studio.admin.commercial-photography.atur.section-8.hapus.satu') }}",
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

    $('#foto_produk_makanan').change(function(){
        var number_of_images = $(this)[0].files.length;
        if (number_of_images > 2) {
            alert(`Upload gambar harus berjumlah 2.`);
            $("#foto_produk_makanan").next(".dropify-clear").trigger("click");
        }
        if(number_of_images < 2)
        {
            alert(`Upload gambar harus berjumlah 2.`);
            $("#foto_produk_makanan").next(".dropify-clear").trigger("click");
        }
    });

    $('#foto_produk_minuman').change(function(){
        var number_of_images = $(this)[0].files.length;
        if (number_of_images > 2) {
            alert(`Upload gambar harus berjumlah 2.`);
            $("#foto_produk_minuman").next(".dropify-clear").trigger("click");
        }
        if(number_of_images < 2)
        {
            alert(`Upload gambar harus berjumlah 2.`);
            $("#foto_produk_minuman").next(".dropify-clear").trigger("click");
        }
    });

    $('#foto_produk_baju').change(function(){
        var number_of_images = $(this)[0].files.length;
        if (number_of_images > 2) {
            alert(`Upload gambar harus berjumlah 2.`);
            $("#foto_produk_baju").next(".dropify-clear").trigger("click");
        }
        if(number_of_images < 2)
        {
            alert(`Upload gambar harus berjumlah 2.`);
            $("#foto_produk_baju").next(".dropify-clear").trigger("click");
        }
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
        html += '<input name="jawaban[]"" class="form-control" required>';
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
                    url: "{{ route('razen-studio.admin.commercial-photography.atur.section-11.hapus.satu') }}",
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
