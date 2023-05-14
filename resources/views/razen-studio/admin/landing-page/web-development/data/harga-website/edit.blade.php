@extends('razen-studio.admin.layouts.app')
@section('title', 'Admin - Razen Studio | Admin | Landing Page | Web Development | Data | Harga Website')

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
            <h1 class="mb-0 pb-0 display-4" id="title">Harga Website</h1>
            <nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb">
                <ul class="breadcrumb pt-0">
                    <li class="breadcrumb-item"><a href="{{ route('razen-studio.admin.dashboard.index') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="#">Landing Page</a></li>
                    <li class="breadcrumb-item"><a href="#">Web Development</a></li>
                    <li class="breadcrumb-item"><a href="#">Data</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('razen-studio.admin.web-development.data.harga-website.index') }}">Harga Website</a></li>
                    <li class="breadcrumb-item"><a href="#">Tambah</a></li>
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
            <form action="{{ route('razen-studio.admin.web-development.data.harga-website.update', ['id' => $id]) }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                    <div class="col-6" style="justify-content: center; align-self: center;">
                        <label for="" class="small-title">Tambah Data</label>
                    </div>
                    <div class="col-6" style="text-align:right">
                        <a href="{{ route('razen-studio.admin.web-development.data.harga-website.index') }}" class="btn btn-danger btn-icon waves-effect waves-light"><i class="fas fa-arrow-left"></i></a>
                    </div>
                </div>
                <div class="mb-3 position-relative form-group">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{$data->nama}}" required>
                </div>
                <div class="mb-3 position-relative form-group p-3 border">
                    <h2 class="small-title">Kolom Landing Page</h2>
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <label for="" class="form-label">Status Inputan</label>
                            <select name="landing_page[status_inputan]" id="landing_page_status_inputan" class="form-control" required>
                                <option value="">--- Pilih ---</option>
                                <option value="tulisan" @if($landing_page['status_inputan'] == 'tulisan') selected @endif>Tulisan</option>
                                <option value="ikon" @if($landing_page['status_inputan'] == 'ikon') selected @endif>Ikon</option>
                            </select>
                        </div>
                        <div class="col-12 col-md-8" id="col_landing_page_inputan">
                            @if ($landing_page['status_inputan'] == 'tulisan')
                                <label class="form-label">Inputan</label>
                                <textarea name="landing_page[inputan]" id="landing_page_inputan" class="form-control" rows="5" required>{{$landing_page['inputan']}}</textarea>
                            @endif

                            @if ($landing_page['status_inputan'] == 'ikon')
                                <label class="form-label">Inputan</label>
                                <select name="landing_page[inputan]" class="form-control" required>
                                    <option value="">--- Pilih ---</option>
                                    <option value="Ya" @if($landing_page['inputan'] == 'Ya') selected @endif>Ya</option>
                                    <option value="Tidak" @if($landing_page['inputan'] == 'Tidak') selected @endif>Tidak</option>
                                </select>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="mb-3 position-relative form-group p-3 border">
                    <h2 class="small-title">Kolom Company Profile</h2>
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <label for="" class="form-label">Status Inputan</label>
                            <select name="company_profile[status_inputan]" id="company_profile_status_inputan" class="form-control" required>
                                <option value="">--- Pilih ---</option>
                                <option value="tulisan" @if($company_profile['status_inputan'] == 'tulisan') selected @endif>Tulisan</option>
                                <option value="ikon" @if($company_profile['status_inputan'] == 'ikon') selected @endif>Ikon</option>
                            </select>
                        </div>
                        <div class="col-12 col-md-8" id="col_company_profile_inputan">
                            @if ($company_profile['status_inputan'] == 'tulisan')
                                <label class="form-label">Inputan</label>
                                <textarea name="company_profile[inputan]" id="company_profile_inputan" class="form-control" rows="5" required>{{$company_profile['inputan']}}</textarea>
                            @endif

                            @if ($company_profile['status_inputan'] == 'ikon')
                                <label class="form-label">Inputan</label>
                                <select name="company_profile[inputan]" class="form-control" required>
                                    <option value="">--- Pilih ---</option>
                                    <option value="Ya" @if($company_profile['inputan'] == 'Ya') selected @endif>Ya</option>
                                    <option value="Tidak" @if($company_profile['inputan'] == 'Tidak') selected @endif>Tidak</option>
                                </select>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="mb-3 position-relative form-group p-3 border">
                    <h2 class="small-title">Kolom E-Commerce</h2>
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <label for="" class="form-label">Status Inputan</label>
                            <select name="e_commerce[status_inputan]" id="e_commerce_status_inputan" class="form-control" required>
                                <option value="">--- Pilih ---</option>
                                <option value="tulisan" @if($e_commerce['status_inputan'] == 'tulisan') selected @endif>Tulisan</option>
                                <option value="ikon" @if($e_commerce['status_inputan'] == 'ikon') selected @endif>Ikon</option>
                            </select>
                        </div>
                        <div class="col-12 col-md-8" id="col_e_commerce_inputan">
                            @if ($e_commerce['status_inputan'] == 'tulisan')
                                <label class="form-label">Inputan</label>
                                <textarea name="e_commerce[inputan]" id="e_commerce_inputan" class="form-control" rows="5" required>{{$e_commerce['inputan']}}</textarea>
                            @endif

                            @if ($e_commerce['status_inputan'] == 'ikon')
                                <label class="form-label">Inputan</label>
                                <select name="e_commerce[inputan]" class="form-control" required>
                                    <option value="">--- Pilih ---</option>
                                    <option value="Ya" @if($e_commerce['inputan'] == 'Ya') selected @endif>Ya</option>
                                    <option value="Tidak" @if($e_commerce['inputan'] == 'Tidak') selected @endif>Tidak</option>
                                </select>
                            @endif
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
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
        $(document).ready(function(){
            CKEDITOR.replace('landing_page_inputan');
            CKEDITOR.replace('company_profile_inputan');
            CKEDITOR.replace('e_commerce_inputan');
            CKEDITOR.config.allowedContent = true;
        });

        $('#landing_page_status_inputan').change(function(){
            var value = $(this).val();

            if(value == 'tulisan')
            {
                $('#col_landing_page_inputan').empty();
                var inputan = $(`<label class="form-label">Inputan</label>
                                <textarea name="landing_page[inputan]" id="landing_page_inputan" class="form-control" rows="5" required></textarea>`);

                $('#col_landing_page_inputan').html(inputan);

                CKEDITOR.replace('landing_page_inputan');
                CKEDITOR.config.allowedContent = true;

            } else if( value == 'ikon') {
                $('#col_landing_page_inputan').empty();
                var inputan = $(`<label class="form-label">Inputan</label>
                                <select name="landing_page[inputan]" class="form-control" required>
                                    <option value="">--- Pilih ---</option>
                                    <option value="Ya">Ya</option>
                                    <option value="Tidak">Tidak</option>
                                </select>`);
                $('#col_landing_page_inputan').html(inputan);
            } else {
                $('#col_landing_page_inputan').empty();
            }
        });

        $('#company_profile_status_inputan').change(function(){
            var value = $(this).val();

            if(value == 'tulisan')
            {
                $('#col_company_profile_inputan').empty();
                var inputan = $(`<label class="form-label">Inputan</label>
                                <textarea name="company_profile[inputan]" id="company_profile_inputan" class="form-control" rows="5" required></textarea>`);

                $('#col_company_profile_inputan').html(inputan);

                CKEDITOR.replace('company_profile_inputan');
                CKEDITOR.config.allowedContent = true;

            } else if( value == 'ikon') {
                $('#col_company_profile_inputan').empty();
                var inputan = $(`<label class="form-label">Inputan</label>
                                <select name="company_profile[inputan]" class="form-control" required>
                                    <option value="">--- Pilih ---</option>
                                    <option value="Ya">Ya</option>
                                    <option value="Tidak">Tidak</option>
                                </select>`);
                $('#col_company_profile_inputan').html(inputan);
            } else {
                $('#col_company_profile_inputan').empty();
            }
        });

        $('#e_commerce_status_inputan').change(function(){
            var value = $(this).val();

            if(value == 'tulisan')
            {
                $('#col_e_commerce_inputan').empty();
                var inputan = $(`<label class="form-label">Inputan</label>
                                <textarea name="e_commerce[inputan]" id="e_commerce_inputan" class="form-control" rows="5" required></textarea>`);

                $('#col_e_commerce_inputan').html(inputan);

                CKEDITOR.replace('e_commerce_inputan');
                CKEDITOR.config.allowedContent = true;

            } else if( value == 'ikon') {
                $('#col_e_commerce_inputan').empty();
                var inputan = $(`<label class="form-label">Inputan</label>
                                <select name="e_commerce[inputan]" class="form-control" required>
                                    <option value="">--- Pilih ---</option>
                                    <option value="Ya">Ya</option>
                                    <option value="Tidak">Tidak</option>
                                </select>`);
                $('#col_e_commerce_inputan').html(inputan);
            } else {
                $('#col_e_commerce_inputan').empty();
            }
        });
    </script>
@endsection
