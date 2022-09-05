@extends('razen-studio.admin.layouts.app')
@section('title', 'Admin - Razen Studio | Home | Atur')

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
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioHome;

    $landing_page = LandingpageRazenstudioHome::first();
    $section1 = json_decode($landing_page->section_1, true);
    $section2 = json_decode($landing_page->section_2, true);
    $section3 = json_decode($landing_page->section_3, true);
    $section4 = json_decode($landing_page->section_4, true);
    $section5 = json_decode($landing_page->section_5, true);
    $section6 = json_decode($landing_page->section_6, true);
@endphp
    <!-- Title and Top Buttons Start -->
    <div class="page-title-container">
        <div class="row">
        <!-- Title Start -->
        <div class="col-12 col-md-7">
            <h1 class="mb-0 pb-0 display-4" id="title">Home - Atur</h1>
            <nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb">
                <ul class="breadcrumb pt-0">
                    <li class="breadcrumb-item"><a href="{{ route('razen-studio.admin.dashboard.index') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="#">Landing Page</a></li>
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('razen-studio.admin.home.atur.index') }}">Atur</a></li>
                </ul>
            </nav>
        </div>
        <!-- Title End -->
        </div>
    </div>
    <!-- Title and Top Buttons End -->
    <h2 class="small-title">Atur</h2>
    <!-- Content Start -->
    <div class="card mb-5">
        <div class="card-body">
            <h2 class="small-title">Edit Section 1</h2>
            <div class="row mb-3">
                <div class="col-12">
                    <img src="{{ asset('images/landingpage_razenstudio_screenshot/home/section_1.png') }}" alt="" class="img-fluid rounded">
                </div>
            </div>
            <form action="{{ route('razen-studio.admin.home.atur.section-1.store') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-12 col-md-7">
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Judul</label>
                            <input type="text" class="form-control" name="judul" placeholder="The First Hub Of" value="{{$section1?$section1['judul']:'' }}" required>
                        </div>
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Deskripsi Judul</label>
                            <textarea name="deskripsi_judul" rows="5" class="form-control" placeholder="Social Media & Digital Marketing Agency" required>{{$section1?$section1['deskripsi_judul']:''}}</textarea>
                        </div>
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Deskripsi</label>
                            <textarea name="deskripsi" rows="5" class="form-control" placeholder="GoSocial merupakan konsultan sekaligus penyedia layanan Jasa Digital Marketing untuk berbagai tahapan bisnis, hasil kolaborasi dari berbagai Agency & Profesional terbaik di Indonesia!" required>{{$section1 ? $section1['deskripsi']:''}}</textarea>
                        </div>
                    </div>
                    <div class="col-12 col-md-5">
                        <div class="position-relative form-group">
                            <label for="" class="form-label">Gambar</label>
                            <div class="dropzone dz-clickable" id="gambarSection1">
                                <div class="dz-default dz-message">
                                    <button class="dz-button" type="button">Drop files here to upload</button>
                                </div>
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
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <img src="{{ asset('images/landingpage_razenstudio_screenshot/home/section_2.png') }}" alt="" class="img-fluid rounded">
                </div>
            </div>
            <hr class="mb-5">
            @if ($section2 == null)
                <form action="{{ route('razen-studio.admin.home.atur.section-2.store') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-6">
                            <div class="cta-3">Tambah Form Section 2</div>
                        </div>
                        <div class="col-6" style="text-align: right">
                            <button class="btn btn-icon btn-outline-success waves-effect mr-2 btn_tambah_section2" type="button"><i data-acorn-icon="plus"></i></button>
                            <button class="btn btn-icon btn-outline-danger waves-effect mr-2 btn_hapus_section2" type="button"><i data-acorn-icon="minus"></i></button>
                        </div>
                    </div>
                    <div id="div_form_section2"></div>
                    <button type="submit" class="btn btn-primary mb-0">Submit</button>
                </form>
            @endif
            @if ($section2 != null)
                <div class="row">
                    @foreach ($section2 as $item)
                        <div class="col-12 col-md-4 mb-5">
                            <div class="card h-100 border">
                                <button class="btn border-0 btn-icon btn_hapus_gambar_section2" type="button" value="{{$item['id']}}"><span class="badge rounded-pill bg-primary me-1 position-absolute e-3 t-n2 z-index-1">Hapus</span></button>
                                <img src="{{ asset('images/landingpage_razenstudio/home/'.$item['gambar']) }}" class="card-img-top sh-22" alt="card image">
                                <div class="card-body">
                                    <h5 class="heading mb-0">{{$item['judul']}}</h5>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <form action="{{ route('razen-studio.admin.home.atur.section-2.tambah') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-6">
                            <div class="cta-3">Tambah Form Section 2</div>
                        </div>
                        <div class="col-6" style="text-align: right">
                            <button class="btn btn-icon btn-outline-success waves-effect mr-2 btn_tambah_section2" type="button"><i data-acorn-icon="plus"></i></button>
                            <button class="btn btn-icon btn-outline-danger waves-effect mr-2 btn_hapus_section2" type="button"><i data-acorn-icon="minus"></i></button>
                        </div>
                    </div>
                    <div id="div_form_section2"></div>
                    <button type="submit" class="btn btn-primary mb-0">Submit</button>
                </form>
            @endif
        </div>
    </div>

    <div class="card mb-5">
        <div class="card-body">
            <h2 class="small-title">Edit Section 3</h2>
            <div class="row mb-3">
                <div class="col-12">
                    <img src="{{ asset('images/landingpage_razenstudio_screenshot/home/section_3.png') }}" alt="" class="img-fluid rounded">
                </div>
            </div>
            @if ($section3 == null)
                <form action="{{ route('razen-studio.admin.home.atur.section-3.store') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12 col-md-7">
                            <div class="mb-3 position-relative form-group">
                                <label for="" class="form-label">Sub Judul</label>
                                <input type="text" class="form-control" name="sub_judul" placeholder="About Us" required>
                            </div>
                            <div class="mb-3 position-relative form-group">
                                <label for="" class="form-label">Judul</label>
                                <textarea name="judul" rows="5" class="form-control" placeholder="All-in-one Creative & Digital Agency Hub" required></textarea>
                            </div>
                            <div class="mb-3 position-relative form-group">
                                <label for="" class="form-label">link</label>
                                <input type="text" class="form-control" name="link" placeholder="Masukkan link youtube..." required>
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
                        <div class="col-12 col-md-5">
                            <div class="position-relative form-group">
                                <label for="" class="form-label">Gambar</label>
                                <input type="file" class="dropify" name="gambar" data-height="300" data-allowed-file-extensions="png jpg jpeg" data-show-errors="true" required>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mb-0">Submit</button>
                </form>
            @endif
            @if ($section3 != null)
                <form action="{{ route('razen-studio.admin.home.atur.section-3.edit') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12 col-md-7">
                            <div class="mb-3 position-relative form-group">
                                <label for="" class="form-label">Sub Judul</label>
                                <input type="text" class="form-control" name="sub_judul" placeholder="About Us" value="{{$section3['sub_judul']}}" required>
                            </div>
                            <div class="mb-3 position-relative form-group">
                                <label for="" class="form-label">Judul</label>
                                <textarea name="judul" rows="5" class="form-control" placeholder="All-in-one Creative & Digital Agency Hub" required>{{$section3['judul']}}</textarea>
                            </div>
                            <div class="mb-3 position-relative form-group">
                                <label for="" class="form-label">link</label>
                                <input type="text" class="form-control" name="link" placeholder="Masukkan link youtube..." value="{{$section3['link']}}" required>
                            </div>
                            <div class="mb-3 position-relative form-group">
                                <div class="row mb-3">
                                    @foreach ($section3['konten'] as $item)
                                    <div class="col-12 col-md-6">
                                        <div class="card h-100 border">
                                            <button class="btn border-0 btn-icon btn_hapus_data_section3" type="button" value="{{$item['id']}}"><span class="badge rounded-pill bg-primary me-1 position-absolute e-3 t-n2 z-index-1">Hapus</span></button>
                                            <div class="card-body">
                                                <h5 class="heading mb-0">{{$item['judul_konten']}}</h5>
                                                <p>{{$item['deskripsi_konten']}}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                </div>
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
                        <div class="col-12 col-md-5">
                            <div class="position-relative form-group">
                                <label for="" class="form-label">Gambar</label>
                                <input type="file" class="dropify" name="gambar" data-height="300" data-allowed-file-extensions="png jpg jpeg" data-show-errors="true" data-default-file="{{ asset('images/landingpage_razenstudio/home/'.$section3['gambar']) }}" required>
                            </div>
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
                    <img src="{{ asset('images/landingpage_razenstudio_screenshot/home/section_4.png') }}" alt="" class="img-fluid rounded">
                </div>
            </div>
            @if ($section4 == null)
                <form action="{{ route('razen-studio.admin.home.atur.section-4.store') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
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
                                <label for="" class="form-label">Deskripsi</label>
                                <textarea name="deskripsi" rows="5" class="form-control" placeholder="Layanan terlengkap dan terbaik untuk segala kebutuhan bisnis dalam melakukan Digital Marketing." required></textarea>
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
            @if ($section4 != null)
                <form action="{{ route('razen-studio.admin.home.atur.section-4.edit') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3 position-relative form-group">
                                <label for="" class="form-label">Sub Judul</label>
                                <input type="text" class="form-control" name="sub_judul" placeholder="What we do" value="{{ $section4['sub_judul'] }}" required>
                            </div>
                            <div class="mb-3 position-relative form-group">
                                <label for="" class="form-label">Judul</label>
                                <input name="judul" class="form-control" placeholder="Jasa Digital Marketing" value="{{$section4['judul']}}" required>
                            </div>
                            <div class="mb-3 position-relative form-group">
                                <label for="" class="form-label">Deskripsi</label>
                                <textarea name="deskripsi" rows="5" class="form-control" placeholder="Layanan terlengkap dan terbaik untuk segala kebutuhan bisnis dalam melakukan Digital Marketing." required>{{$section4['deskripsi']}}</textarea>
                            </div>
                            <div class="mb-3 position-relative form-group">
                                <div class="row mb-3">
                                    @foreach ($section4['konten'] as $item)
                                        <div class="col-12 col-md-4 mb-5">
                                            <div class="card h-100 border">
                                                <button class="btn border-0 btn-icon btn_hapus_gambar_section4" type="button" value="{{$item['id']}}"><span class="badge rounded-pill bg-primary me-1 position-absolute e-3 t-n2 z-index-1">Hapus</span></button>
                                                <img src="{{ asset('images/landingpage_razenstudio/home/'.$item['logo_konten']) }}" class="card-img-top sh-22" alt="card image">
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
                <div class="col-12">
                    <img src="{{ asset('images/landingpage_razenstudio_screenshot/home/section_5.png') }}" alt="" class="img-fluid rounded">
                </div>
            </div>
            <form action="{{ route('razen-studio.admin.home.atur.section-5.store') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Judul</label>
                            <input name="judul" class="form-control" placeholder="Mengapa Harus Razen Studio?" value="{{$section5['judul']}}" required>
                        </div>
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Deskripsi</label>
                            <textarea name="deskripsi" rows="5" class="form-control" placeholder="GoSocial merupakan satu-satunya Konsultan Digital Marketing sekaligus Agency pertama yang berbasis Hub dalam menyediakan layanan." required>{{$section5['deskripsi']}}</textarea>
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
                    <img src="{{ asset('images/landingpage_razenstudio_screenshot/home/section_6.png') }}" alt="" class="img-fluid rounded">
                </div>
            </div>
            <form action="{{ route('razen-studio.admin.home.atur.section-6.store') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Judul</label>
                            <input name="judul" class="form-control" placeholder="Portofolio" value="{{$section6 ? $section6['judul'] : ''}}" required>
                        </div>
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Deskripsi</label>
                            <textarea name="deskripsi" rows="5" class="form-control" placeholder="Beberapa contoh hasil pekerjaan yang telah kami lakukan sebelumnya." required>{{$section6 ? $section6['deskripsi'] : ''}}</textarea>
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
                    <img src="{{ asset('images/landingpage_razenstudio_screenshot/home/section_7.png') }}" alt="" class="img-fluid rounded">
                </div>
            </div>
            <form action="{{ route('razen-studio.admin.home.atur.section-7.store') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Judul</label>
                            <input name="judul" class="form-control" placeholder="Relied On By Brand, Trusted By Personal, And Loved By Small-Medium Enterprise, Everywhere!" value="{{$landing_page->section_7}}" required>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mb-0">Submit</button>
            </form>
        </div>
    </div>
    <!-- Content End -->
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
{{-- <script src="js/forms/controls.dropzone.js"></script> --}}
<script>
    var count_section2 = 1;
    var count_section3 = 1;
    var count_section4 = 1;
    new Dropzone('#gambarSection1', {
        url: "{{ route('razen-studio.admin.home.atur.section-1.store.gambar-section1') }}",
        acceptedFiles: '.jpeg,.jpg,.png',
        thumbnailWidth: 160,
        previewTemplate: DropzoneTemplates.previewTemplate,
        addRemoveLinks: true,
        maxFilesize: 10,
        maxFiles:1,
        headers: {
            'X-CSRF-TOKEN': "{{ csrf_token() }}"
        },
        removedfile: function(file)
        {
            var name = file.upload.filename;
            $.ajax({
                type: 'POST',
                url: "{{ route('razen-studio.admin.home.atur.section-1.hapus.gambar-section1') }}",
                data: { "_token": "{{ csrf_token() }}", name: name},
                success: function (data){
                    console.log("File has been successfully removed!!");
                },
                error: function(e) {
                    console.log(e);
                }});
                var fileRef;
                return (fileRef = file.previewElement) != null ?
                fileRef.parentNode.removeChild(file.previewElement) : void 0;
        },
        success: function (file, response) {
            console.log(file);
        },
        init: function () {
            let myDropzone = this;
            $.ajax({
                url: "{{ route('razen-studio.admin.home.atur.section-1.lihat-gambar-section1') }}",
                type: 'get',
                dataType: 'json',
                success: function(data){
                    if(data.result)
                    {
                        var mockFile = { name: data.result.name, size: data.result.size };
                        myDropzone.displayExistingFile(mockFile, data.result.path);
                    }
                }
            });
            this.hiddenFileInput.removeAttribute('multiple');
            this.on("maxfilesexceeded", function (file) {
                this.removeAllFiles();
                this.addFile(file);
            });
        },
        removedfile: function(file) {
            file.previewElement.remove();
            var name = file.previewElement.filename;
            $.ajax({
                type: 'POST',
                url: "{{ route('razen-studio.admin.home.atur.section-1.hapus.gambar-section1') }}",
                data: { "_token": "{{ csrf_token() }}", name: name},
                success: function (data){
                    console.log("File has been successfully removed!!");
                },
                error: function(e) {
                    console.log(e);
                }});
                var fileRef;
                return (fileRef = file.previewElement) != null ?
                fileRef.parentNode.removeChild(file.previewElement) : void 0;
        }
    });
    $(document).ready(function(){
        $('.dropify').dropify();
        $('.dropify-wrapper').css('line-height', '3rem');
    });

    dynamic_section2(count_section2);
    function dynamic_section2(number)
    {
        var urut = number - 1;
        html ='<div class="row row_form_section2 mb-3">';
        html +='<div class="col-12 col-md-7">';
        html +='<div class="mb-3 position-relative form-group">';
        html +='<label for="" class="form-label">Judul</label>';
        html +='<input type="text" class="form-control" name="judul[]" placeholder="Strategy Planning & Execution" required>';
        html +='</div>';
        html +='</div>';
        html +='<div class="col-12 col-md-5">';
        html +='<div class="position-relative form-group">';
        html +='<label for="" class="form-label">Gambar</label>';
        html +='<input type="file" class="dropify" name="gambar[]" data-height="300" data-allowed-file-extensions="png jpg jpeg" data-show-errors="true" required>';
        html +='</div>';
        html +='</div>';
        html +='</div>';
        if(number > 1)
        {
            $('#div_form_section2').after(html);
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
        $('#div_form_section2').next('div').remove();
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
                    url: "{{ route('razen-studio.admin.home.atur.section-2.hapus.satu') }}",
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

    dynamic_section3(count_section3);
    function dynamic_section3(number)
    {
        var urut = number - 1;
        html = '<div class="border-top p-3">';
        html += '<div class="mb-3 position-relative form-group">';
        html += '<label for="" class="form-label">Judul Konten</label>';
        html += '<textarea name="judul_konten[]" rows="5" class="form-control" placeholder="Industry-leading Consultant" required></textarea>';
        html += '</div>';
        html += '<div class="mb-3 position-relative form-group">';
        html += '<label for="" class="form-label">Deskripsi Konten</label>';
        html += '<textarea name="deskripsi_konten[]" rows="5" class="form-control" placeholder="Tidak hanya menyediakan solusi strategi & layanan, kami terus melakukan riset dan inovasi terhadap perkembangan teknologi serta mengembangkan teknologi sendiri untuk menunjang hal tersebut." required></textarea>';
        html += '</div>';
        html += '</div>';

        if(number > 1)
        {
            $('#div_tambah_konten_section3').after(html);
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
                    url: "{{ route('razen-studio.admin.home.atur.section-3.hapus.satu') }}",
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
        html += '<label for="" class="form-label">Link Konten</label>';
        html += '<input name="link_konten[]" class="form-control" placeholder="Masukkan link page..." required>';
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
                    url: "{{ route('razen-studio.admin.home.atur.section-4.hapus.satu') }}",
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
