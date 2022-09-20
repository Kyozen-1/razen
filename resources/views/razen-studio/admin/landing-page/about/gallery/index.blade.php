@extends('razen-studio.admin.layouts.app')
@section('title', 'Admin - Razen Studio | About | Atur')

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
    <link rel="stylesheet" href="{{ asset('acorn/acorn-elearning-portal/css/vendor/glide.core.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('acorn/acorn-elearning-portal/css/vendor/baguetteBox.min.css') }}" />
@endsection

@section('content')
<div class="page-title-container">
    <div class="row">
        <!-- Title Start -->
        <div class="col-12 col-md-7">
            <h1 class="mb-0 pb-0 display-4" id="title">About - Gallery</h1>
            <nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb">
                <ul class="breadcrumb pt-0">
                    <li class="breadcrumb-item"><a href="{{ route('razen-studio.admin.dashboard.index') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="#">Landing Page</a></li>
                    <li class="breadcrumb-item"><a href="#">About</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('razen-studio.admin.about.gallery.index') }}">Gallery</a></li>
                </ul>
            </nav>
        </div>
        <!-- Title End -->
    </div>
</div>

<h2 class="small-title">Gallery</h2>

<div class="card mb-5">
    <div class="card-body">
        <div class="row mb-3">
            <div class="col-6 justify-content-center align-self-center">
                <label for="" class="small-titled">Tambah Gallery</label>
            </div>
            <div class="col-6" style="text-align: right">
                <button class="btn btn-outline-success waves-effect waves-light" id="btn_add_section_2" type="button" data-bs-toggle="modal" data-bs-target="#addGalleryModal">Tambah</button>
            </div>
        </div>
    </div>
</div>

<!-- Standard Gutters Start -->
<section class="scroll-section" id="standardGutters">
    <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4 gallery g-4 mb-5">
        @foreach ($gallerys as $gallery)
            <div class="col">
                <div class="card">
                    <a href="{{ asset('images/landingpage_razenstudio/about/'.$gallery->gambar) }}" class="card hover-img-scale-up">
                        <img class="card-img sh-25 scale" src="{{ asset('images/landingpage_razenstudio/about/'.$gallery->gambar) }}" alt="card image" />
                    </a>
                    <div class="position-relative form-group mt-3" style="text-align: center">
                        <button class="btn btn-primary waves-effect waves-light btn_hapus_gambar" type="button" value="{{$gallery->id}}">Hapus</button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
<!-- Standard Gutters End -->

{{-- Modal --}}
<div class="modal fade" id="addGalleryModal" tabindex="-1" role="dialog" aria-labelledby="modalTitle" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitle">Tambah Gallery</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <span id="form_result"></span>
                <form action="{{ route('razen-studio.admin.about.gallery.store') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="position-relative form-group">
                                <label for="" class="form-label">Gambar</label>
                                <input type="file" class="dropify" name="gambar[]" data-height="300" data-allowed-file-extensions="webp png jpg jpeg" data-show-errors="true" required multiple>
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
    <script src="{{ asset('acorn/acorn-elearning-portal/js/vendor/baguetteBox.min.js') }}"></script>
    <script src="{{ asset('acorn/acorn-elearning-portal/js/pages/blocks.gallery.js') }}"></script>
    <script>
        $(document).ready(function(){
            $('.dropify').dropify();
            $('.dropify-wrapper').css('line-height', '3rem');
        });

        $('.btn_hapus_gambar').click(function(){
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
                        url: "{{ route('razen-studio.admin.about.gallery.hapus-data') }}",
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
