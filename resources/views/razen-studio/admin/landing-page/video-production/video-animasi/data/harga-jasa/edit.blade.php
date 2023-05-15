@extends('razen-studio.admin.layouts.app')
@section('title', 'Admin - Razen Studio | Admin | Landing Page | Video Production | Video Animasi | Data | Harga Jasa')

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
                    <li class="breadcrumb-item"><a href="#">Video Production</a></li>
                    <li class="breadcrumb-item"><a href="#">Video Animasi</a></li>
                    <li class="breadcrumb-item"><a href="#">Data</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('razen-studio.admin.video-production.video-animasi.data.harga-jasa.index') }}">Harga Website</a></li>
                    <li class="breadcrumb-item"><a href="#">Edit</a></li>
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
            <form action="{{ route('razen-studio.admin.video-production.video-animasi.data.harga-jasa.update', ['id' => $id]) }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                    <div class="col-6" style="justify-content: center; align-self: center;">
                        <label for="" class="small-title">Tambah Data</label>
                    </div>
                    <div class="col-6" style="text-align:right">
                        <a href="{{ route('razen-studio.admin.video-production.video-animasi.data.harga-jasa.index') }}" class="btn btn-danger btn-icon waves-effect waves-light"><i class="fas fa-arrow-left"></i></a>
                    </div>
                </div>
                <div class="mb-3 position-relative form-group">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{$data->nama}}" required>
                </div>
                <div class="mb-3 position-relative form-group p-3 border">
                    <h2 class="small-title">Kolom Standard</h2>
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <label for="" class="form-label">Status Inputan</label>
                            <select name="standard[status_inputan]" id="standard_status_inputan" class="form-control" required>
                                <option value="">--- Pilih ---</option>
                                <option value="tulisan" @if($standard['status_inputan'] == 'tulisan') selected @endif>Tulisan</option>
                                <option value="ikon" @if($standard['status_inputan'] == 'ikon') selected @endif>Ikon</option>
                            </select>
                        </div>
                        <div class="col-12 col-md-8" id="col_standard_inputan">
                            @if ($standard['status_inputan'] == 'tulisan')
                                <label class="form-label">Inputan</label>
                                <textarea name="standard[inputan]" id="standard_inputan" class="form-control" rows="5" required>{{$standard['inputan']}}</textarea>
                            @endif

                            @if ($standard['status_inputan'] == 'ikon')
                                <label class="form-label">Inputan</label>
                                <select name="standard[inputan]" class="form-control" required>
                                    <option value="">--- Pilih ---</option>
                                    <option value="Ya" @if($standard['inputan'] == 'Ya') selected @endif>Ya</option>
                                    <option value="Tidak" @if($standard['inputan'] == 'Tidak') selected @endif>Tidak</option>
                                </select>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="mb-3 position-relative form-group p-3 border">
                    <h2 class="small-title">Kolom Premium</h2>
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <label for="" class="form-label">Status Inputan</label>
                            <select name="premium[status_inputan]" id="premium_status_inputan" class="form-control" required>
                                <option value="">--- Pilih ---</option>
                                <option value="tulisan" @if($premium['status_inputan'] == 'tulisan') selected @endif>Tulisan</option>
                                <option value="ikon" @if($premium['status_inputan'] == 'ikon') selected @endif>Ikon</option>
                            </select>
                        </div>
                        <div class="col-12 col-md-8" id="col_premium_inputan">
                            @if ($premium['status_inputan'] == 'tulisan')
                                <label class="form-label">Inputan</label>
                                <textarea name="premium[inputan]" id="premium_inputan" class="form-control" rows="5" required>{{$premium['inputan']}}</textarea>
                            @endif

                            @if ($premium['status_inputan'] == 'ikon')
                                <label class="form-label">Inputan</label>
                                <select name="premium[inputan]" class="form-control" required>
                                    <option value="">--- Pilih ---</option>
                                    <option value="Ya" @if($premium['inputan'] == 'Ya') selected @endif>Ya</option>
                                    <option value="Tidak" @if($premium['inputan'] == 'Tidak') selected @endif>Tidak</option>
                                </select>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="mb-3 position-relative form-group p-3 border">
                    <h2 class="small-title">Kolom Ultimate</h2>
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <label for="" class="form-label">Status Inputan</label>
                            <select name="ultimate[status_inputan]" id="ultimate_status_inputan" class="form-control" required>
                                <option value="">--- Pilih ---</option>
                                <option value="tulisan" @if($ultimate['status_inputan'] == 'tulisan') selected @endif>Tulisan</option>
                                <option value="ikon" @if($ultimate['status_inputan'] == 'ikon') selected @endif>Ikon</option>
                            </select>
                        </div>
                        <div class="col-12 col-md-8" id="col_ultimate_inputan">
                            @if ($ultimate['status_inputan'] == 'tulisan')
                                <label class="form-label">Inputan</label>
                                <textarea name="ultimate[inputan]" id="ultimate_inputan" class="form-control" rows="5" required>{{$ultimate['inputan']}}</textarea>
                            @endif

                            @if ($ultimate['status_inputan'] == 'ikon')
                                <label class="form-label">Inputan</label>
                                <select name="ultimate[inputan]" class="form-control" required>
                                    <option value="">--- Pilih ---</option>
                                    <option value="Ya" @if($ultimate['inputan'] == 'Ya') selected @endif>Ya</option>
                                    <option value="Tidak" @if($ultimate['inputan'] == 'Tidak') selected @endif>Tidak</option>
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
            CKEDITOR.replace('standard_inputan');
            CKEDITOR.replace('premium_inputan');
            CKEDITOR.replace('ultimate_inputan');
            CKEDITOR.config.allowedContent = true;
        });

        $('#standard_status_inputan').change(function(){
            var value = $(this).val();

            if(value == 'tulisan')
            {
                $('#col_standard_inputan').empty();
                var inputan = $(`<label class="form-label">Inputan</label>
                                <textarea name="standard[inputan]" id="standard_inputan" class="form-control" rows="5" required></textarea>`);

                $('#col_standard_inputan').html(inputan);

                CKEDITOR.replace('standard_inputan');
                CKEDITOR.config.allowedContent = true;

            } else if( value == 'ikon') {
                $('#col_standard_inputan').empty();
                var inputan = $(`<label class="form-label">Inputan</label>
                                <select name="standard[inputan]" class="form-control" required>
                                    <option value="">--- Pilih ---</option>
                                    <option value="Ya">Ya</option>
                                    <option value="Tidak">Tidak</option>
                                </select>`);
                $('#col_standard_inputan').html(inputan);
            } else {
                $('#col_standard_inputan').empty();
            }
        });

        $('#premium_status_inputan').change(function(){
            var value = $(this).val();

            if(value == 'tulisan')
            {
                $('#col_premium_inputan').empty();
                var inputan = $(`<label class="form-label">Inputan</label>
                                <textarea name="premium[inputan]" id="premium_inputan" class="form-control" rows="5" required></textarea>`);

                $('#col_premium_inputan').html(inputan);

                CKEDITOR.replace('premium_inputan');
                CKEDITOR.config.allowedContent = true;

            } else if( value == 'ikon') {
                $('#col_premium_inputan').empty();
                var inputan = $(`<label class="form-label">Inputan</label>
                                <select name="premium[inputan]" class="form-control" required>
                                    <option value="">--- Pilih ---</option>
                                    <option value="Ya">Ya</option>
                                    <option value="Tidak">Tidak</option>
                                </select>`);
                $('#col_premium_inputan').html(inputan);
            } else {
                $('#col_premium_inputan').empty();
            }
        });

        $('#ultimate_status_inputan').change(function(){
            var value = $(this).val();

            if(value == 'tulisan')
            {
                $('#col_ultimate_inputan').empty();
                var inputan = $(`<label class="form-label">Inputan</label>
                                <textarea name="ultimate[inputan]" id="ultimate_inputan" class="form-control" rows="5" required></textarea>`);

                $('#col_ultimate_inputan').html(inputan);

                CKEDITOR.replace('ultimate_inputan');
                CKEDITOR.config.allowedContent = true;

            } else if( value == 'ikon') {
                $('#col_ultimate_inputan').empty();
                var inputan = $(`<label class="form-label">Inputan</label>
                                <select name="ultimate[inputan]" class="form-control" required>
                                    <option value="">--- Pilih ---</option>
                                    <option value="Ya">Ya</option>
                                    <option value="Tidak">Tidak</option>
                                </select>`);
                $('#col_ultimate_inputan').html(inputan);
            } else {
                $('#col_ultimate_inputan').empty();
            }
        });
    </script>
@endsection
