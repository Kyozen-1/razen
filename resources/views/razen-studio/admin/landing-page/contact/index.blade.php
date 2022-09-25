@extends('razen-studio.admin.layouts.app')
@section('title', 'Admin - Razen Studio | Contact | Atur')

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
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioContact;

    $contact = LandingpageRazenstudioContact::first();
    if ($contact) {
        $contact_section_1 = json_decode($contact->section_1, true);
        $contact_section_2 = json_decode($contact->section_2, true);
        $contact_section_3 = json_decode($contact->section_3, true);
        $contact_section_4 = json_decode($contact->section_4, true);
    } else {
        $contact_section_1 = [];
        $contact_section_2 = [];
        $contact_section_3 = [];
        $contact_section_4 = [];
    }
@endphp

<div class="page-title-container">
    <div class="row">
        <!-- Title Start -->
        <div class="col-12 col-md-7">
            <h1 class="mb-0 pb-0 display-4" id="title">Contact - Atur</h1>
            <nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb">
                <ul class="breadcrumb pt-0">
                    <li class="breadcrumb-item"><a href="{{ route('razen-studio.admin.dashboard.index') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="#">Landing Page</a></li>
                    <li class="breadcrumb-item"><a href="#">Contact</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('razen-studio.admin.contact.atur.index') }}">Atur</a></li>
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
                <img src="{{ asset('images/landingpage_razenstudio_screenshot/contact/section_1.png') }}" alt="" class="img-fluid rounded">
            </div>
        </div>
        <form action="{{ route('razen-studio.admin.contact.atur.section-1.store') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12">
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Title</label>
                        <input type="text" class="form-control" name="title" placeholder="Untuk title pada page" value="{{$contact_section_1?$contact_section_1['title']:'' }}" required>
                    </div>
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Judul</label>
                        <input type="text" class="form-control" name="judul" placeholder="Social Media Marketing & Management" value="{{$contact_section_1?$contact_section_1['judul']:'' }}" required>
                    </div>
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Deskripsi</label>
                        <textarea name="deskripsi" rows="5" class="form-control" placeholder="Jasa pengelolaan social media terlengkap satu-satunya di Indonesia..." required>{{$contact_section_1 ? $contact_section_1['deskripsi']:''}}</textarea>
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
                <img src="{{ asset('images/landingpage_razenstudio_screenshot/contact/section_2.png') }}" alt="" class="img-fluid rounded">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-6 justify-content-center align-self-center">
                <label for="" class="small-titled">Tambah Item Section 2</label>
            </div>
            <div class="col-6" style="text-align: right">
                <button class="btn btn-outline-success waves-effect waves-light" id="btn_add_section_2" type="button" data-bs-toggle="modal" data-bs-target="#addSection2Modal">Tambah</button>
            </div>
        </div>
        <div class="row mb-3">
            @if ($contact_section_2 != null)
            @foreach ($contact_section_2 as $item)
                <div class="col-12 col-md-4 mb-4">
                    <div class="card border h-100">
                        <div class="card-body pb-0">
                            <div class="h5 heading mb-0 lh-1-5 sh-8 sh-md-6 clamp-line">{{$item['judul']}}</div>
                            <p>{!!$item['deskripsi']!!}</p>
                        </div>
                        <div class="card-footer">
                            <div class="position-relative form-group" style="text-align: right">
                                <button class="btn btn-primary waves-effect waves-light btn_hapus_satu_item_section_2" type="button" value="{{$item['id']}}">Hapus</button>
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
            <div class="col-12 text-center">
                <img src="{{ asset('images/landingpage_razenstudio_screenshot/contact/section_3.png') }}" alt="" class="img-fluid rounded">
            </div>
        </div>
        <form action="{{ route('razen-studio.admin.contact.atur.section-3.store') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12">
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Judul</label>
                        <input type="text" class="form-control" name="judul" placeholder="Get in touch" value="{{$contact_section_3?$contact_section_3['judul']:'' }}" required>
                    </div>
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Deskripsi</label>
                        <textarea name="deskripsi" rows="5" class="form-control" placeholder="Kami akan sangat senang..." required>{{$contact_section_3 ? $contact_section_3['deskripsi']:''}}</textarea>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mb-0">Submit</button>
        </form>
        <hr>
        <h2 class="small-title">Edit Section 3 Konsultasi</h2>
        <form action="{{ route('razen-studio.admin.contact.atur.section-3.konsultasi.store') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12">
                    <div class="mb-3 position-relative form-group">
                        @php
                            $konsultasi = $contact_section_3['konsultasi'];
                        @endphp
                        <label for="" class="form-label">No Whatsapp Official</label>
                        <input type="number" class="form-control" name="no_wa" placeholder="ex: 6281234567891" value="{{$konsultasi['konsultasi']?$konsultasi['konsultasi']:'' }}" required>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mb-0">Submit</button>
        </form>
        <hr>
        <h2 class="small-title">Edit Section 3 Office</h2>
        @if ($contact_section_3  != null)
            @if ($contact_section_3['office'] == null)
                <form action="{{ route('razen-studio.admin.contact.atur.section-3.office.store') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3 position-relative form-group">
                                <div class="row">
                                    <div class="col-6">
                                        <label for="" class="form-label">Tambah Konten Section 3 Office</label>
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
            @else
                <form action="{{ route('razen-studio.admin.contact.atur.section-3.office.edit') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3 position-relative form-group">
                                <div class="row mb-3">
                                    @php
                                        $offices = $contact_section_3['office'];
                                    @endphp
                                    @foreach ($offices as $office)
                                        <div class="col-12 col-md-4 mb-3">
                                            <div class="card h-100 border">
                                                <button class="btn border-0 btn-icon btn_hapus_data_section3" type="button" value="{{$office['id']}}"><span class="badge rounded-pill bg-primary me-1 position-absolute e-3 t-n2 z-index-1">Hapus</span></button>
                                                <div class="card-body">
                                                    <h5 class="heading mb-3">{{$office['nama']}}</h5>
                                                    <p>{{$office['alamat']}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <label for="" class="form-label">Tambah Konten Section 3 Office</label>
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
                <hr>
            @if ($contact_section_3['studio_learning_center'] == null)
                <form action="{{ route('razen-studio.admin.contact.atur.section-3.studio-learning-center.store') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3 position-relative form-group">
                                <div class="row">
                                    <div class="col-6">
                                        <label for="" class="form-label">Tambah Konten Section 3 Studio / Learning Center</label>
                                    </div>
                                    <div class="col-6" style="text-align: right">
                                        <button class="btn btn-icon btn-outline-success waves-effect mr-2 btn_tambah_section3_learning_center" type="button"><i data-acorn-icon="plus"></i></button>
                                        <button class="btn btn-icon btn-outline-danger waves-effect mr-2 btn_hapus_section3_learning_center" type="button"><i data-acorn-icon="minus"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div id="div_tambah_konten_section3_learning_center"></div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mb-0">Submit</button>
                </form>
            @else
                <form action="{{ route('razen-studio.admin.contact.atur.section-3.studio-learning-center.edit') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3 position-relative form-group">
                                <div class="row mb-3">
                                    @php
                                        $studio_learning_centers = $contact_section_3['studio_learning_center'];
                                    @endphp
                                    @foreach ($studio_learning_centers as $studio_learning_center)
                                        <div class="col-12 col-md-4 mb-3">
                                            <div class="card h-100 border">
                                                <button class="btn border-0 btn-icon btn_hapus_data_section3_learning_center" type="button" value="{{$studio_learning_center['id']}}"><span class="badge rounded-pill bg-primary me-1 position-absolute e-3 t-n2 z-index-1">Hapus</span></button>
                                                <div class="card-body">
                                                    <h5 class="heading mb-3">{{$studio_learning_center['nama']}}</h5>
                                                    <p>{{$studio_learning_center['alamat']}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <label for="" class="form-label">Tambah Konten Section 3 Studio Learning Center</label>
                                    </div>
                                    <div class="col-6" style="text-align: right">
                                        <button class="btn btn-icon btn-outline-success waves-effect mr-2 btn_tambah_section3_learning_center" type="button"><i data-acorn-icon="plus"></i></button>
                                        <button class="btn btn-icon btn-outline-danger waves-effect mr-2 btn_hapus_section3_learning_center" type="button"><i data-acorn-icon="minus"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div id="div_tambah_konten_section3_learning_center"></div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mb-0">Submit</button>
                </form>
            @endif
        @endif
    </div>
</div>


<div class="card mb-5">
    <div class="card-body">
        <h2 class="small-title">Edit Section 4</h2>
        <div class="row mb-3">
            <div class="col-12">
                <img src="{{ asset('images/landingpage_razenstudio_screenshot/contact/section_4.png') }}" alt="" class="img-fluid rounded">
            </div>
        </div>
        <form action="{{ route('razen-studio.admin.contact.atur.section-4.store') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12">
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Judul</label>
                        <input type="text" class="form-control" name="judul" placeholder="Konsultasi gratis dengan tim..." value="{{$contact_section_4?$contact_section_4['judul']:'' }}" required>
                    </div>
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">No Wa</label>
                        <input type="text" class="form-control" name="no_wa" placeholder="ex: 6281218828" value="{{$contact_section_4?$contact_section_4['no_wa']:'' }}" required>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mb-0">Submit</button>
        </form>
    </div>
</div>
{{-- Modal --}}
<div class="modal fade" id="addSection2Modal" tabindex="-1" role="dialog" aria-labelledby="modalTitle" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitle">Add Item Section 2</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <span id="form_result"></span>
                <form action="{{ route('razen-studio.admin.contact.atur.section-2.store') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12 col-md-7">
                            <div class="mb-3 position-relative form-group">
                                <label for="" class="form-label">Judul</label>
                                <input type="text" class="form-control" name="judul" placeholder="7" required>
                            </div>
                            <div class="mb-3 position-relative form-group">
                                <label for="" class="form-label">Deskripsi</label>
                                <textarea name="deskripsi" id="section_2" rows="5" class="form-control" required></textarea>
                            </div>
                        </div>
                        <div class="col-12 col-md-5">
                            <input type="file" class="dropify" name="gambar" data-height="300" data-allowed-file-extensions="png jpg jpeg webp" data-show-errors="true" required>
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
        var count_section3 = 1;
        var count_section3_learning_center = 1;
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

        $('.btn_hapus_satu_item_section_2').click(function(){
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
                        url: "{{ route('razen-studio.admin.contact.atur.section-2.hapus.satu') }}",
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
            html += '<label for="" class="form-label">Nama</label>';
            html += '<input name="nama[]" class="form-control" required>';
            html += '</div>';
            html += '<div class="mb-3 position-relative form-group">';
            html += '<label for="" class="form-label">Alamat</label>';
            html += '<textarea name="alamat[]"" class="form-control" rows="5" required></textarea>';
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
                        url: "{{ route('razen-studio.admin.contact.atur.section-3.office.hapus.satu') }}",
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

        dynamic_section3_learning_center(count_section3_learning_center);
        function dynamic_section3_learning_center(number)
        {
            var urut = number - 1;
            html = '<div class="border-top p-3">';
            html += '<div class="mb-3 position-relative form-group">';
            html += '<label for="" class="form-label">Nama</label>';
            html += '<input name="nama[]" class="form-control" required>';
            html += '</div>';
            html += '<div class="mb-3 position-relative form-group">';
            html += '<label for="" class="form-label">Alamat</label>';
            html += '<textarea name="alamat[]"" class="form-control" rows="5" required></textarea>';
            html += '</div>';
            html += '</div>';

            if(number > 1)
            {
                $('#div_tambah_konten_section3_learning_center').after(html);
            }
        }

        $(document).on('click', '.btn_tambah_section3_learning_center',function(){
            count_section3_learning_center++;
            dynamic_section3_learning_center(count_section3_learning_center);
        });

        $(document).on('click','.btn_hapus_section3_learning_center',function(){
            var urut = count_section3_learning_center;
            $('#div_tambah_konten_section3_learning_center').next('div').remove();
            count_section3_learning_center--;
            if(count_section3_learning_center < 1)
            {
                count_section3_learning_center = 1;
            }
        });

        $('.btn_hapus_data_section3_learning_center').click(function(){
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
                        url: "{{ route('razen-studio.admin.contact.atur.section-3.studio-learning-center.hapus.satu') }}",
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
