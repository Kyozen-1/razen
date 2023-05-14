@extends('razen-studio.admin.layouts.app')
@section('title', 'Admin - Razen Studio | Admin | Landing Page | Social Media Management | Data | Harga')

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
            <h1 class="mb-0 pb-0 display-4" id="title">Harga</h1>
            <nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb">
                <ul class="breadcrumb pt-0">
                    <li class="breadcrumb-item"><a href="{{ route('razen-studio.admin.dashboard.index') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="#">Landing Page</a></li>
                    <li class="breadcrumb-item"><a href="#">Social Media Management</a></li>
                    <li class="breadcrumb-item"><a href="#">Data</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('razen-studio.admin.social-media-management.data.harga.index') }}">Harga</a></li>
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
                    <a href="{{ route('razen-studio.admin.social-media-management.data.harga.index') }}" class="btn btn-danger btn-icon waves-effect waves-light"><i class="fas fa-arrow-left"></i></a>
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
            <div class="row mb-3 position-relative form-group">
                <div class="col-4">
                    <label for="" class="form-label">Mode Inputan</label>
                </div>
                <div class="col-8">
                    <input type="text" class="form-control" value="{{$data->mode_inputan}}" disabled>
                </div>
            </div>
            <div class="row mb-3 position-relative form-group">
                <div class="col-4">
                    <label for="" class="form-label">Ikon</label>
                </div>
                <div class="col-8">
                    <img src="{{ asset('images/landingpage_razenstudio/social-media-management/harga/'.$data->ikon) }}" alt="" class="img-responsive">
                </div>
            </div>

            <div class="row">
                @if ($data->mode_inputan == 'table')
                    <div class="col-12">
                        <table class="data-table w-100 table-bordered">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Half Plan</th>
                                    <th>Full Plan</th>
                                    <th>Advance Plan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $items = json_decode($data->data, true);
                                @endphp
                                @foreach ($items as $item)
                                    <tr class="text-center">
                                        <td>{{$item['nama']}}</td>
                                        @if ($item['half_plan']['status_inputan'] == 'tulisan')
                                            <td>{!! $item['half_plan']['inputan'] !!}</td>
                                        @elseif ($item['half_plan']['status_inputan'] == 'ikon')
                                            <td>{{ $item['half_plan']['inputan'] }}</td>
                                        @endif
                                        @if ($item['full_plan']['status_inputan'] == 'tulisan')
                                            <td>{!! $item['full_plan']['inputan'] !!}</td>
                                        @elseif ($item['full_plan']['status_inputan'] == 'ikon')
                                            <td>{{ $item['full_plan']['inputan'] }}</td>
                                        @endif
                                        @if ($item['advance_plan']['status_inputan'] == 'tulisan')
                                            <td>{!! $item['advance_plan']['inputan'] !!}</td>
                                        @elseif ($item['advance_plan']['status_inputan'] == 'ikon')
                                            <td>{{ $item['advance_plan']['inputan'] }}</td>
                                        @endif
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
                @if ($data->mode_inputan == 'card')
                    @php
                        $items = json_decode($data->data, true);
                    @endphp
                    @foreach ($items as $item)
                        <div class="col-12 col-md-4 border">
                            <div class="card">
                                <div class="card-header row">
                                    <div class="col-6 text-left">
                                        <h5>{{$item['judul']}}</h5>
                                    </div>
                                    <div class="col-6" style="text-align: right">
                                        <h5>Rp. {{$item['harga']}} jt</h5>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">
                                        {!!$item['deskripsi']!!}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
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
