@extends('razen-studio.admin.layouts.app')
@section('title', 'Admin - Razen Studio | Social Media Engagement | Atur')

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
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioSocialMediaEngagement;
    $landing_page = LandingpageRazenstudioSocialMediaEngagement::first();
    $section1 = json_decode($landing_page->section_1, true);
    $section2 = json_decode($landing_page->section_2, true);
    $section3 = json_decode($landing_page->section_3, true);
    $section4 = json_decode($landing_page->section_4, true);
    $section5 = json_decode($landing_page->section_5, true);
    $section6 = json_decode($landing_page->section_6, true);
@endphp
<div class="page-title-container">
    <div class="row">
    <!-- Title Start -->
    <div class="col-12 col-md-7">
        <h1 class="mb-0 pb-0 display-4" id="title">Social Media Engegament - Atur</h1>
        <nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb">
            <ul class="breadcrumb pt-0">
                <li class="breadcrumb-item"><a href="{{ route('razen-studio.admin.dashboard.index') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="#">Landing Page</a></li>
                <li class="breadcrumb-item"><a href="#">Social Media Engagement</a></li>
                <li class="breadcrumb-item"><a href="{{ route('razen-studio.admin.social-media-engagement.atur.index') }}">Atur</a></li>
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
                <img src="{{ asset('images/landingpage_razenstudio_screenshot/social-media-engagement/section_1.png') }}" alt="" class="img-fluid rounded">
            </div>
        </div>
        <form action="{{ route('razen-studio.admin.social-media-engagement.atur.section-1.store') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12">
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Judul</label>
                        <input type="text" class="form-control" name="judul" placeholder="Social Media Engagement" value="{{$section1?$section1['judul']:'' }}" required>
                    </div>
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Deskripsi</label>
                        <textarea name="deskripsi" rows="5" class="form-control" placeholder="Solusi untuk meningkatkan interaksi pada platform digital" required>{{$section1 ? $section1['deskripsi']:''}}</textarea>
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
                <img src="{{ asset('images/landingpage_razenstudio_screenshot/social-media-engagement/section_2.png') }}" alt="" class="img-fluid rounded">
            </div>
        </div>
        <form action="{{ route('razen-studio.admin.social-media-engagement.atur.section-2.store') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12 col-md-7">
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Judul</label>
                        <input type="text" class="form-control" name="judul" placeholder="Pengertian Engagement" value="{{$section2['judul']}}" required>
                    </div>
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Deskripsi</label>
                        <textarea name="deskripsi" rows="5" class="form-control" id="section_2" required>{{$section2['deskripsi']}}</textarea>
                    </div>
                </div>
                <div class="col-12 col-md-5">
                    <div class="position-relative form-group">
                        <label for="" class="form-label">Gambar</label>
                        @if ($section2)
                        <input type="file" class="dropify" name="gambar" data-height="300" data-allowed-file-extensions="png jpg jpeg" data-default-file="{{ asset('images/landingpage_razenstudio/social-media-engagement/'.$section2['gambar']) }}" data-show-errors="true" required>
                        @else
                        <input type="file" class="dropify" name="gambar" data-height="300" data-allowed-file-extensions="png jpg jpeg" data-show-errors="true" required>
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
                <img src="{{ asset('images/landingpage_razenstudio_screenshot/social-media-engagement/section_3.png') }}" alt="" class="img-fluid rounded">
            </div>
        </div>
        <form action="{{ route('razen-studio.admin.social-media-engagement.atur.section-3.store') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12 col-md-7">
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Judul</label>
                        <input type="text" class="form-control" name="judul" placeholder="Pentingnya Engagement Rate" value="{{$section3? $section3['judul'] : ''}}" required>
                    </div>
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Deskripsi</label>
                        <textarea name="deskripsi" rows="5" class="form-control" id="section_3" required>{{$section3? $section3['deskripsi'] : ''}}</textarea>
                    </div>
                </div>
                <div class="col-12 col-md-5">
                    <div class="position-relative form-group">
                        <label for="" class="form-label">Gambar</label>
                        @if ($section3)
                        <input type="file" class="dropify" name="gambar" data-height="300" data-allowed-file-extensions="png jpg jpeg" data-default-file="{{ asset('images/landingpage_razenstudio/social-media-engagement/'.$section3['gambar']) }}" data-show-errors="true" required>
                        @else
                        <input type="file" class="dropify" name="gambar" data-height="300" data-allowed-file-extensions="png jpg jpeg" data-show-errors="true" required>
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
                <img src="{{ asset('images/landingpage_razenstudio_screenshot/social-media-engagement/section_4.png') }}" alt="" class="img-fluid rounded">
            </div>
        </div>
        <form action="{{ route('razen-studio.admin.social-media-engagement.atur.section-4.store') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12 col-md-7">
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Judul</label>
                        <input type="text" class="form-control" name="judul" placeholder="Cara terbaru meningkatkan Engagement di Social Media" value="{{$section4? $section4['judul'] : ''}}" required>
                    </div>
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Deskripsi</label>
                        <textarea name="deskripsi" rows="5" class="form-control" id="section_4" required>{{$section4? $section4['deskripsi'] : ''}}</textarea>
                    </div>
                </div>
                <div class="col-12 col-md-5">
                    <div class="position-relative form-group">
                        <label for="" class="form-label">Gambar</label>
                        @if ($section4)
                        <input type="file" class="dropify" name="gambar" data-height="300" data-allowed-file-extensions="png jpg jpeg" data-default-file="{{ asset('images/landingpage_razenstudio/social-media-engagement/'.$section4['gambar']) }}" data-show-errors="true" required>
                        @else
                        <input type="file" class="dropify" name="gambar" data-height="300" data-allowed-file-extensions="png jpg jpeg" data-show-errors="true" required>
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
        <h2 class="small-title">Edit Section 5</h2>
        <div class="row mb-3">
            <div class="col-12">
                <img src="{{ asset('images/landingpage_razenstudio_screenshot/social-media-engagement/section_5.png') }}" alt="" class="img-fluid rounded">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-6 justify-content-center align-self-center">
                <label for="" class="small-titled">Tambah Item Section 5</label>
            </div>
            <div class="col-6" style="text-align: right">
                <button class="btn btn-outline-success waves-effect waves-light" id="btn_add_section_5" type="button" data-bs-toggle="modal" data-bs-target="#addSection5Modal">Tambah</button>
            </div>
        </div>
        <div class="row mb-3">
            @if ($section5 != null)
            @foreach ($section5 as $item)
                <div class="col-12 col-md-4 mb-4">
                    <div class="card border h-100">
                        <img src="{{ asset('images/landingpage_razenstudio/social-media-engagement/'.$item['gambar']) }}" class="card-img-top sh-22" alt="card image">
                        <div class="card-body pb-0">
                                <div class="h5 heading mb-0 lh-1-5 sh-8 sh-md-6 clamp-line">{{$item['judul']}}</div>
                            <div class="row">
                                <div class="col-6 col-md-4">
                                    <span class="text-muted">Mulai Dari:</span>
                                </div>
                                <div class="col-6 col-md-8">
                                    <h2 class="small-title">Rp. {{number_format($item['harga'], 2)}}</h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <ul>
                                        @foreach ($item['item_penilaian'] as $i)
                                            <li>{{$i['item']}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="position-relative form-group" style="text-align: right">
                                <button class="btn btn-primary waves-effect waves-light btn_hapus_satu_item_section_5" type="button" value="{{$item['id']}}">Hapus</button>
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
        <h2 class="small-title">Edit Section 6</h2>
        <div class="row mb-3">
            <div class="col-12">
                <img src="{{ asset('images/landingpage_razenstudio_screenshot/social-media-engagement/section_6.png') }}" alt="" class="img-fluid rounded">
            </div>
        </div>
        @if ($section6 == null)
            <form action="{{ route('razen-studio.admin.social-media-engagement.atur.section-6.store') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Judul</label>
                            <input type="text" class="form-control" name="judul" placeholder="Keunggulan Layanan SME" required>
                        </div>
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Deskripsi</label>
                            <textarea name="deskripsi" rows="5" class="form-control" placeholder="Mulai dari peningkatan trust hingga meningkatkan ranking didalam algoritma konten untuk meningkatkan visibilitas secara organik." required></textarea>
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
        @if ($section6 != null)
            <form action="{{ route('razen-studio.admin.social-media-engagement.atur.section-6.edit') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Judul</label>
                            <input type="text" class="form-control" name="judul" placeholder="About Us" value="{{$section6['judul']}}" required>
                        </div>
                        <div class="mb-3 position-relative form-group">
                            <label for="" class="form-label">Deskripsi</label>
                            <textarea name="deskripsi" rows="5" class="form-control" placeholder="Mulai dari peningkatan trust hingga meningkatkan ranking didalam algoritma konten untuk meningkatkan visibilitas secara organik." required>{{$section6['deskripsi']}}</textarea>
                        </div>
                        <div class="mb-3 position-relative form-group">
                            <div class="row mb-3">
                                @foreach ($section6['konten'] as $item)
                                <div class="col-12 col-md-4">
                                    <div class="card h-100 border">
                                        <button class="btn border-0 btn-icon btn_hapus_data_section6" type="button" value="{{$item['id']}}"><span class="badge rounded-pill bg-primary me-1 position-absolute e-3 t-n2 z-index-1">Hapus</span></button>
                                        <div class="card-body">
                                            <div class="row mb-3">
                                                <div class="col-12">
                                                    <img src="{{ asset('images/landingpage_razenstudio/social-media-engagement/'.$item['gambar_konten']) }}" alt="" style="height: 5rem; width: 5rem;">
                                                </div>
                                            </div>
                                            <h5 class="heading mb-3">{{$item['judul_konten']}}</h5>
                                            <p>{{$item['deskripsi_konten']}}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            </div>
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

{{-- Modal --}}
<div class="modal fade" id="addSection5Modal" tabindex="-1" role="dialog" aria-labelledby="modalTitle" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitle">Add Item Section 5</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <span id="form_result"></span>
                <form action="{{ route('razen-studio.admin.social-media-engagement.atur.section-5.store') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12 col-md-7">
                            <div class="mb-3 position-relative form-group">
                                <label for="" class="form-label">Judul</label>
                                <input type="text" class="form-control" name="judul" placeholder="Instagram" required>
                            </div>
                            <div class="mb-3 position-relative form-group">
                                <label for="" class="form-label">Harga</label>
                                <input type="number" class="form-control" name="harga" placeholder="10000" required>
                            </div>
                            <div class="mb-3 position-relative form-group">
                                <label for="" class="form-label">Link</label>
                                <input type="text" class="form-control" name="link" placeholder="social-media-engagement.instagram" required>
                            </div>
                            <div class="row mb-3">
                                <div class="col-6 justify-content-center align-self-center">
                                    <label for="" class="form-label">Tambah Item Penilaian</label>
                                </div>
                                <div class="col-6" style="text-align: right">
                                    <button class="btn btn-outline-success waves-effect waves-light mr-2 btn_tambah_item_penilaian" type="button"><i data-acorn-icon="plus"></i></button>
                                    <button class="btn btn-outline-danger waves-effect waves-light mr-2 btn_hapus_item_penilaian" type="button"><i data-acorn-icon="minus"></i></button>
                                </div>
                            </div>
                            <div id="div_item_penilaian"></div>
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
    var count_item_section_5 = 1;
    var count_section6 = 1;
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
        CKEDITOR.config.allowedContent = true;
    });

    dynamic_item_section5(count_item_section_5);
    function dynamic_item_section5(number)
    {
        var urut = number - 1;

        html = '<div class="border-top p-3 item-penilaian">';
        html += '<div class="mb-3 position-relative form-group">';
        html += '<label for="" class="control-label">Item Penilaian</label>';
        html += '<input type="text" class="form-control" name="item_penilaian[]" required>';
        html += '</div>';
        html += '</div>';

        if(number > 1)
        {
            $('#div_item_penilaian').after(html)
        }
    }

    $(document).on('click', '.btn_tambah_item_penilaian',function(){
        count_item_section_5++;
        dynamic_item_section5(count_item_section_5);
    });

    $(document).on('click','.btn_hapus_item_penilaian',function(){
        var urut = count_item_section_5;
        $('#div_item_penilaian').next('div').remove();
        count_item_section_5--;
        if(count_item_section_5 < 1)
        {
            count_item_section_5 = 1;
        }
    });

    $('#btn_add_section_5').click(function(){
        $('.item-penilaian').remove();
    });

    $('.btn_hapus_satu_item_section_5').click(function(){
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
                    url: "{{ route('razen-studio.admin.social-media-engagement.atur.section-5.hapus.satu') }}",
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

    dynamic_section6(count_section6);
    function dynamic_section6(number)
    {
        var urut = number - 1;
        html = '<div class="border-top p-3">';
        html += '<div class="mb-3 position-relative form-group">';
        html += '<label for="" class="form-label">Judul Konten</label>';
        html += '<textarea name="judul_konten[]" rows="5" class="form-control" placeholder="Meningkatkan Trust & Visibilitas Akun" required></textarea>';
        html += '</div>';
        html += '<div class="mb-3 position-relative form-group">';
        html += '<label for="" class="form-label">Deskripsi Konten</label>';
        html += '<textarea name="deskripsi_konten[]" rows="5" class="form-control" placeholder="Tambahan interaksi yang diberikan akan meningkatkan kredibilitas dan jangkauan konten secara organik." required></textarea>';
        html += '</div>';
        html += '<div class="mb-3 postion-relative form-group">';
        html += '<label for="" class="form-label">Gambar</label>';
        html += '<input type="file" class="dropify" name="gambar[]" data-height="300" data-allowed-file-extensions="png jpg jpeg" data-show-errors="true" required>';
        html += '</div>';
        html += '</div>';

        if(number > 1)
        {
            $('#div_tambah_konten_section6').after(html);
            $('.dropify').dropify();
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

    $('.btn_hapus_data_section6').click(function(){
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
                    url: "{{ route('razen-studio.admin.social-media-engagement.atur.section-6.hapus.satu') }}",
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
