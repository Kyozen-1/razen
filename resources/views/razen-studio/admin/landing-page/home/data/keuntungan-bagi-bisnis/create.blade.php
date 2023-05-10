@extends('razen-studio.admin.layouts.app')
@section('title', 'Admin - Razen Studio | Admin | Landing Page | Home | Data | Keuntungan Bagi Bisnis | Create')

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/fontawesome.min.css" integrity="sha512-RvQxwf+3zJuNwl4e0sZjQeX7kUa3o82bDETpgVCH2RiwYSZVDdFJ7N/woNigN/ldyOOoKw8584jM4plQdt8bhA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('content')
    <!-- Title and Top Buttons Start -->
    <div class="page-title-container">
        <div class="row">
        <!-- Title Start -->
        <div class="col-12 col-md-7">
            <h1 class="mb-0 pb-0 display-4" id="title">Keuntungan Bagi Bisnis</h1>
            <nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb">
                <ul class="breadcrumb pt-0">
                    <li class="breadcrumb-item"><a href="{{ route('razen-studio.admin.dashboard.index') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="#">Landing Page</a></li>
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Data</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('razen-studio.admin.home.data.keuntungan-bagi-bisnis.index') }}">Keuntungan Bagi Bisnis</a></li>
                    <li class="breadcrumb-item"><a href="#">Create</a></li>
                </ul>
            </nav>
        </div>
        <!-- Title End -->
        </div>
    </div>
    <!-- Title and Top Buttons End -->
    <h2 class="small-title">Atur</h2>
    <!-- Content Start -->

    <div class="card">
        <div class="card-body">
            <form action="{{ route('razen-studio.admin.home.data.keuntungan-bagi-bisnis.store') }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                    <div class="col-6" style="justify-content: center; align-self: center;">
                        <label for="" class="small-title">Tambah Data</label>
                    </div>
                    <div class="col-6" style="text-align:right">
                        <a href="{{ route('razen-studio.admin.home.data.keuntungan-bagi-bisnis.index') }}" class="btn btn-danger btn-icon waves-effect waves-light"><i class="fas fa-arrow-left"></i></a>
                    </div>
                </div>
                <div class="mb-3 position-relative form-group">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" required>
                </div>
                <div class="mb-3 position-relative form-group p-3 border">
                    <h2 class="small-title">In House</h2>
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <label for="" class="form-label">Status In House</label>
                            <select name="in_house[status]" id="" class="form-control" required>
                                <option value="">--- Pilih ---</option>
                                <option value="1">Ya</option>
                                <option value="0">Tidak</option>
                                <option value="Belum Tentu">Belum Tentu</option>
                            </select>
                        </div>
                        <div class="col-12 col-md-4">
                            <label for="" class="form-label">Status Keterangan</label>
                            <select name="in_house[status_keterangan]" id="in_house_status_keterangan" class="form-control" required>
                                <option value="">--- Pilih ---</option>
                                <option value="1">Ya</option>
                                <option value="0">Tidak</option>
                            </select>
                        </div>
                        <div class="col-12 col-md-4" id="col_in_house_keterangan">
                        </div>
                    </div>
                </div>
                <div class="mb-3 position-relative form-group p-3 border">
                    <h2 class="small-title">FREELANCE / AGENCY</h2>
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <label for="" class="form-label">Status FREELANCE / AGENCY</label>
                            <select name="freelance[status]" id="" class="form-control" required>
                                <option value="">--- Pilih ---</option>
                                <option value="Ya">Ya</option>
                                <option value="Tidak">Tidak</option>
                                <option value="Belum Tentu">Belum Tentu</option>
                                <option value="Perlu ada yang mengatur">Perlu ada yang mengatur</option>
                            </select>
                        </div>
                        <div class="col-12 col-md-4">
                            <label for="" class="form-label">Status Keterangan</label>
                            <select name="freelance[status_keterangan]" id="freelance_status_keterangan" class="form-control" required>
                                <option value="">--- Pilih ---</option>
                                <option value="1">Ya</option>
                                <option value="0">Tidak</option>
                            </select>
                        </div>
                        <div class="col-12 col-md-4" id="col_freelance_keterangan">
                        </div>
                    </div>
                </div>

                <div class="mb-3 position-relative form-group p-3 border">
                    <h2 class="small-title">DIGITAL AGENCY HUB</h2>
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <label for="" class="form-label">Status DIGITAL AGENCY HUB</label>
                            <select name="digital_agency_hub[status]" id="" class="form-control" required>
                                <option value="">--- Pilih ---</option>
                                <option value="Ya">Ya</option>
                                <option value="Tidak perlu">Tidak perlu</option>
                            </select>
                        </div>
                        <div class="col-12 col-md-4">
                            <label for="" class="form-label">Status Keterangan</label>
                            <select name="digital_agency_hub[status_keterangan]" id="digital_agency_hub_status_keterangan" class="form-control" required>
                                <option value="">--- Pilih ---</option>
                                <option value="1">Ya</option>
                                <option value="0">Tidak</option>
                            </select>
                        </div>
                        <div class="col-12 col-md-4" id="col_digital_agency_hub_keterangan">
                        </div>
                    </div>
                </div>
                <div class="mb-3 position-relative form-group">
                    <div class="col-12" style="text-align: right">
                        <div class="mb-3 position-relative form-group">
                            <button class="btn btn-primary waves-effect waves-light">Simpan</button>
                        </div>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js" integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/fontawesome.min.js" integrity="sha512-j3gF1rYV2kvAKJ0Jo5CdgLgSYS7QYmBVVUjduXdoeBkc4NFV4aSRTi+Rodkiy9ht7ZYEwF+s09S43Z1Y+ujUkA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function(){
            $('.dropify').dropify();
            $('.dropify-wrapper').css('line-height', '3rem');
        });

        $('#in_house_status_keterangan').change(function(){
            var value = $(this).val();

            if(value == '1')
            {
                html = $(`<label for="" class="form-label">Keterangan</label>
                            <textarea name="in_house[keterangan]" rows="5" class="form-control" required></textarea>`);

                $('#col_in_house_keterangan').html(html);
            } else {
                $('#col_in_house_keterangan').empty();
            }
        });

        $('#freelance_status_keterangan').change(function(){
            var value = $(this).val();

            if(value == '1')
            {
                html = $(`<label for="" class="form-label">Keterangan</label>
                            <textarea name="freelance[keterangan]" rows="5" class="form-control" required></textarea>`);

                $('#col_freelance_keterangan').html(html);
            } else {
                $('#col_freelance_keterangan').empty();
            }
        });

        $('#digital_agency_hub_status_keterangan').change(function(){
            var value = $(this).val();

            if(value == '1')
            {
                html = $(`<label for="" class="form-label">Keterangan</label>
                            <textarea name="digital_agency_hub[keterangan]" rows="5" class="form-control" required></textarea>`);

                $('#col_digital_agency_hub_keterangan').html(html);
            } else {
                $('#col_digital_agency_hub_keterangan').empty();
            }
        });
    </script>
@endsection
