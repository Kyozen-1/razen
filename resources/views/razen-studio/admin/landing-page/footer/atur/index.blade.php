@extends('razen-studio.admin.layouts.app')
@section('title', 'Admin - Razen Studio | Footer | Atur')

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
    use App\Models\RazenStudio\LandingPage\LandingpageRazenstudioFooter;

    $data = LandingpageRazenstudioFooter::first();
    $solution = json_decode($data->solution, true);
    $company = json_decode($data->company, true);
    $get_in_touch = json_decode($data->get_in_touch, true);
@endphp
<!-- Title and Top Buttons Start -->
<div class="page-title-container">
    <div class="row">
    <!-- Title Start -->
    <div class="col-12 col-md-7">
        <h1 class="mb-0 pb-0 display-4" id="title">Footer - Atur</h1>
        <nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb">
            <ul class="breadcrumb pt-0">
                <li class="breadcrumb-item"><a href="{{ route('razen-studio.admin.dashboard.index') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="#">Landing Page</a></li>
                <li class="breadcrumb-item"><a href="#">Footer</a></li>
                <li class="breadcrumb-item"><a href="{{ route('razen-studio.admin.landing-page.footer.index') }}">Atur</a></li>
            </ul>
        </nav>
    </div>
    <!-- Title End -->
    </div>
</div>
<!-- Title and Top Buttons End -->
<h2 class="small-title">Atur</h2>
<div class="card mb-5">
    <div class="card-body">
        <h2 class="small-title">Edit Footer</h2>
        <div class="row mb-3">
            <div class="col-12">
                <img src="{{ asset('images/landingpage_razenstudio_screenshot/footer/footer_1.png') }}" alt="" class="img-fluid rounded">
            </div>
        </div>
    </div>
</div>
<div class="card mb-5">
    <div class="card-body">
        <h2 class="small-title">Edit Deskripsi</h2>
        <div class="row">
            <div class="col-12 col-md-5">
                <img src="{{ asset('images/landingpage_razenstudio_screenshot/footer/footer_deskripsi.png') }}" alt="" class="img-fluid rounded">
            </div>
            <div class="col-12 col-md-7">
                <form action="{{ route('razen-studio.admin.landing-page.footer.deskripsi') }}" method="POST" class="tooltip-label-end" novalidate>
                    @csrf
                    <div class="mb-3 position-relative form-group">
                        <label for="" class="form-label">Deskripsi</label>
                        <textarea name="deskripsi" id="deskripsi" rows="5" class="form-control" placeholder="Razen Group merupakan konsultan sekaligus Creative & Digital Agency Hub No.1 di Indonesia yang bertujuan membantu bisnis dalam melakukan Digital Marketing yang sukses di berbagai platform." required>{{$data ? $data->deskripsi : ''}}</textarea>
                    </div>
                    <div class="mb-3 position-relative form-group">
                        <button type="submit" class="btn btn-primary mb-0">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="card mb-5">
    <div class="card-body">
        <h2 class="small-title">Edit Solution</h2>
        <div class="row">
            <div class="col-12 col-md-5">
                <img src="{{ asset('images/landingpage_razenstudio_screenshot/footer/footer_solution.png') }}" alt="" class="img-fluid rounded">
            </div>
            <div class="col-12 col-md-7">
                <div class="row mb-5">
                    <div class="col-12">
                        <section class="scroll-section" id="basicItems">
                        <div class="d-flex justify-content-between">
                            <h2 class="small-title">Solution Item</h2>
                        </div>
                        <div class="scroll-out">
                            <div class="scroll-by-count" data-count="4">
                                @foreach ($solution as $item)
                                    <div class="card mb-2">
                                        <a href="#" class="row g-0 sh-10">
                                            <div class="col">
                                                <div class="card-body d-flex flex-column pt-0 pb-0 h-100 justify-content-center">
                                                    <div class="row">
                                                        <div class="col-8 justify-content-center align-self-center">
                                                            <div>{{$item ? $item['judul'] : ''}}</div>
                                                        </div>
                                                        <div class="col-4 justify-content-center align-self-center" style="text-align: right">
                                                            <button type="button" class="btn btn-link text-decoration-none btn-outline-danger text-danger btn_hapus_solution_data" value="{{$item ? $item['id'] : ''}}">Hapus</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        </section>
                    </div>
                </div>
                <hr>
                <div class="row mb-5">
                    <div class="col-8 justify-content-center align-self-center">
                        <label for="" class="control-label">Tambah Item Solution</label>
                    </div>
                    <div class="col-4 justify-content-center align-self-center">
                        <button class="btn btn-outline-success waves-effect waves-light mr-2 btn_tambah_solution" type="button">Tambah</button>
                        <button class="btn btn-outline-danger waves-effect waves-light mr-2 btn_hapus_solution" type="button">Hapus</button>
                    </div>
                </div>
                @if ($solution == null)
                    <form action="{{ route('razen-studio.admin.landing-page.footer.solution.store') }}" method="POST" class="tooltip-label-end" novalidate>
                        @csrf
                        <div id="div_tambah_solution"></div>
                        <div class="mb-3 position-relative form-group">
                            <button type="submit" class="btn btn-primary mb-0">Submit</button>
                        </div>
                    </form>
                @else
                    <form action="{{ route('razen-studio.admin.landing-page.footer.solution.tambah') }}" method="POST" class="tooltip-label-end" novalidate>
                        @csrf
                        <div id="div_tambah_solution"></div>
                        <div class="mb-3 position-relative form-group">
                            <button type="submit" class="btn btn-primary mb-0">Submit</button>
                        </div>
                    </form>
                @endif
            </div>
        </div>
    </div>
</div>
<div class="card mb-5">
    <div class="card-body">
        <h2 class="small-title">Edit Company</h2>
        <div class="row">
            <div class="col-12 col-md-5">
                <img src="{{ asset('images/landingpage_razenstudio_screenshot/footer/footer_company.png') }}" alt="" class="img-fluid rounded">
            </div>
            <div class="col-12 col-md-7">
                <div class="row mb-5">
                    <div class="col-12">
                        <section class="scroll-section" id="basicItems">
                        <div class="d-flex justify-content-between">
                            <h2 class="small-title">Company Item</h2>
                        </div>
                        <div class="scroll-out">
                            <div class="scroll-by-count" data-count="4">
                                @if ($company)
                                    @foreach ($company as $item)
                                        <div class="card mb-2">
                                            <a href="#" class="row g-0 sh-10">
                                                <div class="col">
                                                    <div class="card-body d-flex flex-column pt-0 pb-0 h-100 justify-content-center">
                                                        <div class="row">
                                                            <div class="col-8 justify-content-center align-self-center">
                                                                <div>{{$item ? $item['judul'] : ''}}</div>
                                                            </div>
                                                            <div class="col-4 justify-content-center align-self-center" style="text-align: right">
                                                                <button type="button" class="btn btn-link text-decoration-none btn-outline-danger text-danger btn_hapus_company_data" value="{{$item ? $item['id'] : ''}}">Hapus</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        </section>
                    </div>
                </div>
                <hr>
                <div class="row mb-5">
                    <div class="col-8 justify-content-center align-self-center">
                        <label for="" class="control-label">Tambah Item Company</label>
                    </div>
                    <div class="col-4 justify-content-center align-self-center">
                        <button class="btn btn-outline-success waves-effect waves-light mr-2 btn_tambah_company" type="button">Tambah</button>
                        <button class="btn btn-outline-danger waves-effect waves-light mr-2 btn_hapus_company" type="button">Hapus</button>
                    </div>
                </div>
                @if ($company == null)
                    <form action="{{ route('razen-studio.admin.landing-page.footer.company.store') }}" method="POST" class="tooltip-label-end" novalidate>
                        @csrf
                        <div id="div_tambah_company"></div>
                        <div class="mb-3 position-relative form-group">
                            <button type="submit" class="btn btn-primary mb-0">Submit</button>
                        </div>
                    </form>
                @else
                    <form action="{{ route('razen-studio.admin.landing-page.footer.company.tambah') }}" method="POST" class="tooltip-label-end" novalidate>
                        @csrf
                        <div id="div_tambah_company"></div>
                        <div class="mb-3 position-relative form-group">
                            <button type="submit" class="btn btn-primary mb-0">Submit</button>
                        </div>
                    </form>
                @endif
            </div>
        </div>
    </div>
</div>
<div class="card mb-5">
    <div class="card-body">
        <h2 class="small-title">Edit Get In Touch</h2>
        <div class="row">
            <div class="col-12 col-md-5">
                <img src="{{ asset('images/landingpage_razenstudio_screenshot/footer/footer_get_in_touch.png') }}" alt="" class="img-fluid rounded">
            </div>
            <div class="col-12 col-md-7">
                <div class="row mb-5">
                    <div class="col-12">
                        <section class="scroll-section" id="basicItems">
                        <div class="d-flex justify-content-between">
                            <h2 class="small-title">Get In Touch Item</h2>
                        </div>
                        <div class="scroll-out">
                            <div class="scroll-by-count" data-count="4">
                                @if ($get_in_touch)
                                    @foreach ($get_in_touch as $item)
                                        <div class="card mb-2">
                                            <a href="#" class="row g-0 sh-10">
                                                <div class="col">
                                                    <div class="card-body d-flex flex-column pt-0 pb-0 h-100 justify-content-center">
                                                        <div class="row">
                                                            <div class="col-8 justify-content-center align-self-center">
                                                                <div>{{$item ? $item['data'] : ''}}</div>
                                                            </div>
                                                            <div class="col-4 justify-content-center align-self-center" style="text-align: right">
                                                                <button type="button" class="btn btn-link text-decoration-none btn-outline-danger text-danger btn_hapus_get_in_touch_data" value="{{$item ? $item['id'] : ''}}">Hapus</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        </section>
                    </div>
                </div>
                <hr>
                <div class="row mb-5">
                    <div class="col-8 justify-content-center align-self-center">
                        <label for="" class="control-label">Tambah Item Get In Touch</label>
                    </div>
                    <div class="col-4 justify-content-center align-self-center">
                        <button class="btn btn-outline-success waves-effect waves-light mr-2 btn_tambah_get_in_touch" type="button">Tambah</button>
                        <button class="btn btn-outline-danger waves-effect waves-light mr-2 btn_hapus_get_in_touch" type="button">Hapus</button>
                    </div>
                </div>
                @if ($get_in_touch == null)
                    <form action="{{ route('razen-studio.admin.landing-page.footer.get-in-touch.store') }}" class="tooltip-label-end" method="POST" novalidate>
                        @csrf
                        <div id="div_tambah_get_in_touch"></div>
                        <div class="mb-3 position-relative form-group">
                            <button type="submit" class="btn btn-primary mb-0">Submit</button>
                        </div>
                    </form>
                @else
                    <form action="{{ route('razen-studio.admin.landing-page.footer.get-in-touch.tambah') }}" class="tooltip-label-end" method="POST" novalidate>
                        @csrf
                        <div id="div_tambah_get_in_touch"></div>
                        <div class="mb-3 position-relative form-group">
                            <button type="submit" class="btn btn-primary mb-0">Submit</button>
                        </div>
                    </form>
                @endif
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
{{-- <script src="js/forms/controls.dropzone.js"></script> --}}
<script>
    var count_solution = 1;
    var count_company = 1;
    var count_get_in_touch = 1;

    dynamic_solution(count_solution);
    function dynamic_solution(number)
    {
        var urut = number - 1;
        html = '<div class="border-top p-3">';
        html += '<div class="mb-3 position-relative form-group">';
        html += '<label for="" class="form-label">Judul</label>';
        html += '<input type="text" class="form-control" name="judul[]" required>';
        html += '</div>';
        html += '<div class="mb-3 position-relative form-group">';
        html += '<label for="" class="form-label">Link</label>';
        html += '<input type="text" class="form-control" name="link[]" required>';
        html += '</div>';
        html += '</div>';

        if(number > 1)
        {
            $('#div_tambah_solution').after(html);
        }
    }

    $(document).on('click', '.btn_tambah_solution',function(){
        count_solution++;
        dynamic_solution(count_solution);
    });

    $(document).on('click','.btn_hapus_solution',function(){
        var urut = count_solution;
        $('#div_tambah_solution').next('div').remove();
        count_solution--;
        if(count_solution < 1)
        {
            count_solution = 1;
        }
    });

    $('.btn_hapus_solution_data').click(function(){
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
                    url: "{{ route('razen-studio.admin.landing-page.footer.solution.hapus.satu') }}",
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

    dynamic_company(count_company);
    function dynamic_company(number)
    {
        var urut = number - 1;
        html = '<div class="border-top p-3">';
        html += '<div class="mb-3 position-relative form-group">';
        html += '<label for="" class="form-label">Judul</label>';
        html += '<input type="text" class="form-control" name="judul[]" required>';
        html += '</div>';
        html += '<div class="mb-3 position-relative form-group">';
        html += '<label for="" class="form-label">Link</label>';
        html += '<input type="text" class="form-control" name="link[]" required>';
        html += '</div>';
        html += '</div>';

        if(number > 1)
        {
            $('#div_tambah_company').after(html);
        }
    }

    $(document).on('click', '.btn_tambah_company',function(){
        count_company++;
        dynamic_company(count_company);
    });

    $(document).on('click','.btn_hapus_company',function(){
        var urut = count_company;
        $('#div_tambah_company').next('div').remove();
        count_company--;
        if(count_company < 1)
        {
            count_company = 1;
        }
    });

    $('.btn_hapus_company_data').click(function(){
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
                    url: "{{ route('razen-studio.admin.landing-page.footer.company.hapus.satu') }}",
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

    dynamic_get_in_touch(count_get_in_touch);
    function dynamic_get_in_touch(number)
    {
        var urut = number - 1;
        html = '<div class="border-top p-3">';
        html += '<div class="mb-3 position-relative form-group">';
        html += '<label for="" class="control-label">Tipe Data</label>';
        html += '<select name="tipe_data[]"class="form-control tipe-data" required>';
        html += '<option value="">--- Pilih Tipe Data ---</option>';
        html += '<option value="telepon">Telepon</option>';
        html += '<option value="email">Email</option>';
        html += '<option value="alamat">Alamat</option>';
        html += '</select>';
        html += '</div>';
        html += '<div class="mb-3 position-relative form-group">';
        html += '<label for="" class="form-label">Data</label>';
        html += '<input type="text" class="form-control" name="data[]" required>';
        html += '</div>';
        html += '</div>';

        if(number > 1)
        {
            $('#div_tambah_get_in_touch').after(html);
            $('.tipe-data').select2();
        }
    }

    $(document).on('click', '.btn_tambah_get_in_touch',function(){
        count_get_in_touch++;
        dynamic_get_in_touch(count_get_in_touch);
    });

    $(document).on('click','.btn_hapus_get_in_touch',function(){
        var urut = count_get_in_touch;
        $('#div_tambah_get_in_touch').next('div').remove();
        count_get_in_touch--;
        if(count_get_in_touch < 1)
        {
            count_get_in_touch = 1;
        }
    });

    $('.btn_hapus_get_in_touch_data').click(function(){
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
                    url: "{{ route('razen-studio.admin.landing-page.footer.get-in-touch.hapus.satu') }}",
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
