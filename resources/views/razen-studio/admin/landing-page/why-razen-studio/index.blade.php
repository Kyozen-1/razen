@extends('razen-studio.admin.layouts.app')
@section('title', 'Admin - Razen Studio | Why Razen Studio | Atur')

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
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioWhyRazenStudio;

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
@endphp

<div class="page-title-container">
    <div class="row">
        <!-- Title Start -->
        <div class="col-12 col-md-7">
            <h1 class="mb-0 pb-0 display-4" id="title">Why Razen Studio - Atur</h1>
            <nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb">
                <ul class="breadcrumb pt-0">
                    <li class="breadcrumb-item"><a href="{{ route('razen-studio.admin.dashboard.index') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="#">Landing Page</a></li>
                    <li class="breadcrumb-item"><a href="#">Why Razen Studio</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('razen-studio.admin.why-razen-studio.atur.index') }}">Atur</a></li>
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
                <img src="{{ asset('images/landingpage_razenstudio_screenshot/why-razen-studio/section_1.png') }}" alt="" class="img-fluid rounded">
            </div>
        </div>
        <form action="{{ route('razen-studio.admin.why-razen-studio.atur.section-1.store') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12">
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Title</label>
                        <input type="text" class="form-control" name="title" placeholder="Untuk title pada page" value="{{$why_razen_studio_section_1?$why_razen_studio_section_1['title']:'' }}" required>
                    </div>
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Judul</label>
                        <input type="text" class="form-control" name="judul" placeholder="Social Media Marketing & Management" value="{{$why_razen_studio_section_1?$why_razen_studio_section_1['judul']:'' }}" required>
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
                <img src="{{ asset('images/landingpage_razenstudio_screenshot/why-razen-studio/section_2.png') }}" alt="" class="img-fluid rounded">
            </div>
        </div>
        <form action="{{ route('razen-studio.admin.why-razen-studio.atur.section-2.store') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12 col-md-8">
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Judul</label>
                        <input type="text" class="form-control" name="judul" placeholder="Desain yang bagus?" value="{{$why_razen_studio_section_2?$why_razen_studio_section_2['judul']:'' }}" required>
                    </div>
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Deskripsi</label>
                        <textarea name="deskripsi" rows="5" class="form-control" id="section_2" required>{{$why_razen_studio_section_2 ? $why_razen_studio_section_2['deskripsi']:''}}</textarea>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="position-relative form-group">
                        <label for="" class="form-label">Gambar</label>
                        @if ($why_razen_studio_section_2)
                        <input type="file" class="dropify" name="gambar" data-height="300" data-allowed-file-extensions="png jpg jpeg webp" data-default-file="{{ asset('images/landingpage_razenstudio/why-razen-studio/'.$why_razen_studio_section_2['gambar']) }}" data-show-errors="true" required>
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
                <img src="{{ asset('images/landingpage_razenstudio_screenshot/why-razen-studio/section_3.png') }}" alt="" class="img-fluid rounded">
            </div>
        </div>
        <form action="{{ route('razen-studio.admin.why-razen-studio.atur.section-3.store') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12">
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Judul</label>
                        <input type="text" class="form-control" name="judul" placeholder="Social Media Marketing & Management" value="{{$why_razen_studio_section_3?$why_razen_studio_section_3['judul']:'' }}" required>
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
                <img src="{{ asset('images/landingpage_razenstudio_screenshot/why-razen-studio/section_4.png') }}" alt="" class="img-fluid rounded">
            </div>
        </div>
        <form action="{{ route('razen-studio.admin.why-razen-studio.atur.section-4.store') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12">
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Sub Judul</label>
                        <input type="text" class="form-control" name="sub_judul" placeholder="Mengapa ..." value="{{$why_razen_studio_section_4?$why_razen_studio_section_4['sub_judul']:'' }}" required>
                    </div>
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Judul</label>
                        <input type="text" class="form-control" name="judul" placeholder="GoSocial merupa..." value="{{$why_razen_studio_section_4?$why_razen_studio_section_4['judul']:'' }}" required>
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
            <div class="col-12 text-center">
                <img src="{{ asset('images/landingpage_razenstudio_screenshot/why-razen-studio/section_5.png') }}" alt="" class="img-fluid rounded">
            </div>
        </div>
        @if ($why_razen_studio_section_5  == null)
            <form action="{{ route('razen-studio.admin.why-razen-studio.atur.section-5.store') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
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
        @if ($why_razen_studio_section_5  != null)
            <form action="{{ route('razen-studio.admin.why-razen-studio.atur.section-5.edit') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Sub Judul</label>
                            <input type="text" class="form-control" name="sub_judul" value="{{$why_razen_studio_section_5 ['sub_judul']}}" placeholder="FAQ" required>
                        </div>
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Judul</label>
                            <input type="text" class="form-control" name="judul" value="{{$why_razen_studio_section_5 ['judul']}}" required>
                        </div>
                        <div class="mb-3 position-relative form-group">
                            <div class="row mb-3">
                                @foreach ($why_razen_studio_section_5 ['konten'] as $item)
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
                <img src="{{ asset('images/landingpage_razenstudio_screenshot/why-razen-studio/section_6.png') }}" alt="" class="img-fluid rounded">
            </div>
        </div>
        <form action="{{ route('razen-studio.admin.why-razen-studio.atur.section-6.store') }}" class="mb-3" novalidate="novalidate" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12">
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Sub Judul</label>
                        <input type="text" class="form-control" name="sub_judul" placeholder="Jasa Video Marketing" value="{{$why_razen_studio_section_6?$why_razen_studio_section_6['sub_judul']:'' }}" required>
                    </div>
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Judul</label>
                        <input type="text" class="form-control" name="judul" placeholder="Jasa Video Marketing" value="{{$why_razen_studio_section_6?$why_razen_studio_section_6['judul']:'' }}" required>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mb-0">Submit</button>
        </form>
        <form action="{{ route('razen-studio.admin.why-razen-studio.atur.section-6.item-1.store') }}" class="mb-3" novalidate="novalidate" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12 col-md-6">
                    <img src="{{ asset('images/landingpage_razenstudio_screenshot/why-razen-studio/section_6_item_1.png') }}" alt="" class="img-fluid rounded">
                </div>
                <div class="col-12 col-md-6">
                    <input type="hidden" name="item" value="tracking_project">
                    @if ($why_razen_studio_section_6)
                        @if ($why_razen_studio_section_6['item'] != null)
                            @foreach ($why_razen_studio_section_6['item'] as $item)
                                @if ($item['item'] == 'tracking_project')
                                    <div class="mb-3 position-relative form-group">
                                        <label for="" class="form-label">Gambar</label>
                                        <input type="file" class="dropify" name="gambar" data-height="300" data-allowed-file-extensions="png jpg jpeg webp" data-default-file="{{ asset('images/landingpage_razenstudio/why-razen-studio/'.$item['gambar']) }}" data-show-errors="true" required>
                                    </div>
                                    <div class="mb-3 position-relative form-group" style="text-align: right">
                                        <button class="btn btn-primary waves-effect waves-light">Submit</button>
                                    </div>
                                @endif
                            @endforeach
                        @else
                            <div class="mb-3 position-relative form-group">
                                <label for="" class="form-label">Gambar</label>
                                <input type="file" class="dropify" name="gambar" data-height="300" data-allowed-file-extensions="png jpg jpeg webp" data-show-errors="true" required>
                            </div>
                            <div class="mb-3 position-relative form-group" style="text-align: right">
                                <button class="btn btn-primary waves-effect waves-light">Submit</button>
                            </div>
                        @endif
                    @else
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Gambar</label>
                            <input type="file" class="dropify" name="gambar" data-height="300" data-allowed-file-extensions="png jpg jpeg webp" data-show-errors="true" required>
                        </div>
                        <div class="mb-3 position-relative form-group" style="text-align: right">
                            <button class="btn btn-primary waves-effect waves-light">Submit</button>
                        </div>
                    @endif
                </div>
            </div>
        </form>
        <form action="{{ route('razen-studio.admin.why-razen-studio.atur.section-6.item-2.store') }}" class="mb-3" novalidate="novalidate" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12 col-md-6">
                    <img src="{{ asset('images/landingpage_razenstudio_screenshot/why-razen-studio/section_6_item_2.png') }}" alt="" class="img-fluid rounded">
                </div>
                <div class="col-12 col-md-6">
                    <input type="hidden" name="item" value="easy_collaboration">
                    @if ($why_razen_studio_section_6)
                        @if ($why_razen_studio_section_6['item'] != null)
                            @foreach ($why_razen_studio_section_6['item'] as $item)
                                @if ($item['item'] == 'easy_collaboration')
                                    <div class="mb-3 position-relative form-group">
                                        <label for="" class="form-label">Gambar</label>
                                        <input type="file" class="dropify" name="gambar" data-height="300" data-allowed-file-extensions="png jpg jpeg webp" data-default-file="{{ asset('images/landingpage_razenstudio/why-razen-studio/'.$item['gambar']) }}" data-show-errors="true" required>
                                    </div>
                                    <div class="mb-3 position-relative form-group" style="text-align: right">
                                        <button class="btn btn-primary waves-effect waves-light">Submit</button>
                                    </div>
                                @endif
                            @endforeach
                        @else
                            <div class="mb-3 position-relative form-group">
                                <label for="" class="form-label">Gambar</label>
                                <input type="file" class="dropify" name="gambar" data-height="300" data-allowed-file-extensions="png jpg jpeg webp" data-show-errors="true" required>
                            </div>
                            <div class="mb-3 position-relative form-group" style="text-align: right">
                                <button class="btn btn-primary waves-effect waves-light">Submit</button>
                            </div>
                        @endif
                    @else
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Gambar</label>
                            <input type="file" class="dropify" name="gambar" data-height="300" data-allowed-file-extensions="png jpg jpeg webp" data-show-errors="true" required>
                        </div>
                        <div class="mb-3 position-relative form-group" style="text-align: right">
                            <button class="btn btn-primary waves-effect waves-light">Submit</button>
                        </div>
                    @endif
                </div>
            </div>
        </form>
        <form action="{{ route('razen-studio.admin.why-razen-studio.atur.section-6.item-3.store') }}" class="mb-3" novalidate="novalidate" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12 col-md-6">
                    <img src="{{ asset('images/landingpage_razenstudio_screenshot/why-razen-studio/section_6_item_3.png') }}" alt="" class="img-fluid rounded">
                </div>
                <div class="col-12 col-md-6">
                    <input type="hidden" name="item" value="tools_integrations">
                        @if ($why_razen_studio_section_6)
                            @if ($why_razen_studio_section_6['item'] != null)
                            @foreach ($why_razen_studio_section_6['item'] as $item)
                                @if ($item['item'] == 'tools_integrations')
                                    <div class="mb-3 position-relative form-group">
                                        <label for="" class="form-label">Gambar</label>
                                        <input type="file" class="dropify" name="gambar" data-height="300" data-allowed-file-extensions="png jpg jpeg webp" data-default-file="{{ asset('images/landingpage_razenstudio/why-razen-studio/'.$item['gambar']) }}" data-show-errors="true" required>
                                    </div>
                                    <div class="mb-3 position-relative form-group" style="text-align: right">
                                        <button class="btn btn-primary waves-effect waves-light">Submit</button>
                                    </div>
                                @endif
                            @endforeach
                        @else
                            <div class="mb-3 position-relative form-group">
                                <label for="" class="form-label">Gambar</label>
                                <input type="file" class="dropify" name="gambar" data-height="300" data-allowed-file-extensions="png jpg jpeg webp" data-show-errors="true" required>
                            </div>
                            <div class="mb-3 position-relative form-group" style="text-align: right">
                                <button class="btn btn-primary waves-effect waves-light">Submit</button>
                            </div>
                        @endif
                    @else
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Gambar</label>
                            <input type="file" class="dropify" name="gambar" data-height="300" data-allowed-file-extensions="png jpg jpeg webp" data-show-errors="true" required>
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
        var count_section5 = 1;
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

        dynamic_section5(count_section5);
        function dynamic_section5(number)
        {
            var urut = number - 1;
            html = '<div class="border-top p-3">';
            html += '<div class="mb-3 position-relative form-group">';
            html += '<label for="" class="form-label">Judul</label>';
            html += '<input name="judul_konten[]" class="form-control" required>';
            html += '</div>';
            html += '<div class="mb-3 position-relative form-group">';
            html += '<label for="" class="form-label">Deskripsi</label>';
            html += '<textarea name="deskripsi_konten[]"" class="form-control" rows="5" required></textarea>';
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
                        url: "{{ route('razen-studio.admin.why-razen-studio.atur.section-5.hapus.satu') }}",
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
