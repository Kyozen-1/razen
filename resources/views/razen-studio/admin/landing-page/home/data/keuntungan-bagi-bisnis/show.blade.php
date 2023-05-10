@extends('razen-studio.admin.layouts.app')
@section('title', 'Admin - Razen Studio | Admin | Landing Page | Home | Data | Keuntungan Bagi Bisnis | Detail')

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
                    <li class="breadcrumb-item"><a href="#">Detail</a></li>
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
            <div class="row mb-3">
                <div class="col-6" style="justify-content: center; align-self: center;">
                    <label for="" class="small-title">Detail Data</label>
                </div>
                <div class="col-6" style="text-align:right">
                    <a href="{{ route('razen-studio.admin.home.data.keuntungan-bagi-bisnis.index') }}" class="btn btn-danger btn-icon waves-effect waves-light"><i class="fas fa-arrow-left"></i></a>
                </div>
            </div>
            <div class="row mb-3 position-relative form-group">
                <div class="col-4">
                    <label for="" class="form-label">Nama</label>
                </div>
                <div class="col-8">
                    <input type="text" class="form-control" value="{{$data->nama}}" disabled>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-12 col-md-4 border p-5">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="small-title">In House</h2>
                            @php
                                $in_house = json_decode($data->in_house, true);

                                if($in_house['status'] == '1')
                                {
                                    $status = 'Ya';
                                } else if ($in_house['status'] == '0'){
                                    $status = 'Tidak';
                                } else if ($in_house['status'] == 'Belum Tentu')
                                {
                                    $status = 'Belum Tentu';
                                }

                                if($in_house['status_keterangan'] == '1')
                                {
                                    $status_keterangan = 'Ada';
                                } else {
                                    $status_keterangan = 'Tidak Ada';
                                }

                                if(array_key_exists('keterangan',$in_house))
                                {
                                    $keterangan = $in_house['keterangan'];
                                } else {
                                    $keterangan = 'Tidak ada';
                                }
                            @endphp
                            <p>
                                Status: {{$status}}<br>
                                Status Keterangan: {{$status_keterangan}}<br>
                                Keterangan: {{$keterangan}}<br>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 border p-5">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="small-title">Freelance / Agency</h2>
                            @php
                                $freelance = json_decode($data->freelance, true);

                                if($freelance['status_keterangan'] == '1')
                                {
                                    $status_keterangan = 'Ada';
                                } else {
                                    $status_keterangan = 'Tidak ada';
                                }

                                if(array_key_exists('keterangan',$freelance))
                                {
                                    $keterangan = $freelance['keterangan'];
                                } else {
                                    $keterangan = 'Tidak ada';
                                }
                            @endphp
                            <p>
                                Status: {{$freelance['status']}}<br>
                                Status Keterangan: {{$status_keterangan}}<br>
                                Keterangan: {{$keterangan}}<br>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 border p-5">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="small-title">Digital Agency Hub</h2>
                            @php
                                $digital_agency_hub = json_decode($data->digital_agency_hub, true);

                                if($digital_agency_hub['status_keterangan'] == '1')
                                {
                                    $status_keterangan = 'Ya';
                                } else {
                                    $status_keterangan = 'Tidak';
                                }
                                if(array_key_exists('keterangan',$digital_agency_hub))
                                {
                                    $keterangan = $digital_agency_hub['keterangan'];
                                } else {
                                    $keterangan = 'Tidak ada';
                                }
                            @endphp
                            <p>
                                Status: {{$digital_agency_hub['status']}}<br>
                                Status Keterangan: {{$status_keterangan}}<br>
                                Keterangan: {{$keterangan}}<br>
                            </p>
                        </div>
                    </div>
                </div>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js" integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/fontawesome.min.js" integrity="sha512-j3gF1rYV2kvAKJ0Jo5CdgLgSYS7QYmBVVUjduXdoeBkc4NFV4aSRTi+Rodkiy9ht7ZYEwF+s09S43Z1Y+ujUkA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection
