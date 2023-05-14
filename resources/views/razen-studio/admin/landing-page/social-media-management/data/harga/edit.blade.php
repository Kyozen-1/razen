@extends('razen-studio.admin.layouts.app')
@section('title', 'Admin - Razen Studio | Admin | Landing Page | Web Development | Data | Harga')

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
            <form action="{{ route('razen-studio.admin.social-media-management.data.harga.update', ['id' => $id]) }}" novalidate="novalidate" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                    <div class="col-6" style="justify-content: center; align-self: center;">
                        <label for="" class="small-title">Edit Data</label>
                    </div>
                    <div class="col-6" style="text-align:right">
                        <a href="{{ route('razen-studio.admin.social-media-management.data.harga.index') }}" class="btn btn-danger btn-icon waves-effect waves-light"><i class="fas fa-arrow-left"></i></a>
                    </div>
                </div>
                <div class="mb-3 position-relative form-group">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{$data->nama}}" required>
                </div>
                <div class="mb-3 position-relative form-group">
                    <label for="ikon" class="form-label">Ikon</label>
                    <input type="file" class="dropify" name="ikon" data-height="150" data-allowed-file-extensions="png jpg jpeg webp" data-show-errors="true" data-default-file="{{ asset('images/landingpage_razenstudio/social-media-management/harga/'.$data->ikon) }}" required>
                </div>
                <div class="mb-3 position-relative form-group">
                    <label for="mode_inputan" class="form-label">Mode Inputan</label>
                    <select name="mode_inputan" id="mode_inputan" class="form-control" required>
                        <option value="">--- Pilih Mode ---</option>
                        <option value="table">Table</option>
                        <option value="card">Card</option>
                    </select>
                </div>
                <div class="mb-3 position-relative form-group" id="div_inputan">
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
            $('.dropify').dropify();
        });

        $('#mode_inputan').change(function(){
            var value = $(this).val();
            if(value == 'table')
            {
                $('#div_inputan').empty();
                var inputan = $(`<div class="row mb-3">
                        <div class="col-6">
                            <div class="cta-3">Tambah Inputan Table</div>
                        </div>
                        <div class="col-6" style="text-align: right">
                            <button class="btn btn-icon btn-outline-success waves-effect mr-2 btn_tambah_table" type="button"><i class="fas fa-plus"></i></button>
                            <button class="btn btn-icon btn-outline-danger waves-effect mr-2 btn_hapus_table" type="button"><i class="fas fa-minus"></i></button>
                        </div>
                    </div>
                    <div id="div_form_table"></div>`);
                $('#div_inputan').html(inputan);
            } else if(value == 'card')
            {
                $('#div_inputan').empty();
                var inputan = $(`<div class="row mb-3">
                        <div class="col-6">
                            <div class="cta-3">Tambah Inputan Card</div>
                        </div>
                        <div class="col-6" style="text-align: right">
                            <button class="btn btn-icon btn-outline-success waves-effect mr-2 btn_tambah_card" type="button"><i class="fas fa-plus"></i></button>
                            <button class="btn btn-icon btn-outline-danger waves-effect mr-2 btn_hapus_card" type="button"><i class="fas fa-minus"></i></button>
                        </div>
                    </div>
                    <div id="div_form_card"></div>`);
                $('#div_inputan').html(inputan);
            } else {
                $('#div_inputan').empty();
            }
        });

        var count_table = 0;
        dynamic_table(count_table);
        function dynamic_table(number)
        {
            var urut = number - 1;
            html = '<div class="border shadpw p-3 mb-3">';
                html += '<div class="form-group row">';
                    html += '<div class="col-12">';
                        html += '<h3>';
                            html += '<span class="sw-4 sh-4 me-1 mb-1 d-inline-block bg-info d-flex justify-content-center align-items-center rounded-xl">'+number+'</span>';
                        html += '</h3>';
                    html += '</div>';
                html += '</div>';
                html += '<div class="position-relative mb-3 form-group row">';
                    html += '<label class="col-md-3 col-form-label">Nama</label>'
                    html += '<div class="col-md-9">'
                        html += '<input type="text" class="form-control" name="data['+urut+'][nama]" required>';
                    html += '</div>';
                html += '</div>';
                html += '<div class="position-relative mb-3 form-group">';
                    html += '<h2 class="small-title">Kolom Half Plan</h2>';
                    html += '<div class="row">';
                        html += '<div class="col-md-4 col-6">';
                            html += '<label for="" class="form-label">Status Inputan</label>';
                            html += '<select name="data['+urut+'][half_plan][status_inputan]" class="form-control data_half_plan_status_inputan" data-id="'+urut+'" required>';
                                html += '<option value="">--- Pilih ---</option>';
                                html += '<option value="tulisan">Tulisan</option>';
                                html += '<option value="ikon">Ikon</option>';
                            html += '</select>';
                        html += '</div>';
                        html += '<div class="col-md-8 col-6" id="col_half_plan_inputan_'+urut+'">';
                        html += '</div>';
                    html += '</div>';
                html += '</div>';
                html += '<div class="position-relative mb-3 form-group">';
                    html += '<h2 class="small-title">Kolom Full Plan</h2>';
                    html += '<div class="row">';
                        html += '<div class="col-md-4 col-6">';
                            html += '<label for="" class="form-label">Status Inputan</label>';
                            html += '<select name="data['+urut+'][full_plan][status_inputan]" class="form-control data_full_plan_status_inputan" data-id="'+urut+'" required>';
                                html += '<option value="">--- Pilih ---</option>';
                                html += '<option value="tulisan">Tulisan</option>';
                                html += '<option value="ikon">Ikon</option>';
                            html += '</select>';
                        html += '</div>';
                        html += '<div class="col-md-8 col-6" id="col_full_plan_inputan_'+urut+'">';
                        html += '</div>';
                    html += '</div>';
                html += '</div>';
                html += '<div class="position-relative mb-3 form-group">';
                    html += '<h2 class="small-title">Kolom Advance Plan</h2>';
                    html += '<div class="row">';
                        html += '<div class="col-md-4 col-6">';
                            html += '<label for="" class="form-label">Status Inputan</label>';
                            html += '<select name="data['+urut+'][advance_plan][status_inputan]" class="form-control data_advance_plan_status_inputan" data-id="'+urut+'" required>';
                                html += '<option value="">--- Pilih ---</option>';
                                html += '<option value="tulisan">Tulisan</option>';
                                html += '<option value="ikon">Ikon</option>';
                            html += '</select>';
                        html += '</div>';
                        html += '<div class="col-md-8 col-6" id="col_advance_plan_inputan_'+urut+'">';
                        html += '</div>';
                    html += '</div>';
                html += '</div>';
            html += '</div>';

            if(number >= 1)
            {
                $('#div_form_table').after(html);
            }
        }

        $(document).on('click', '.btn_tambah_table',function(){
            count_table++;
            dynamic_table(count_table);
        });

        $(document).on('click','.btn_hapus_table',function(){
            count_table--;
            if(count_table < 0)
            {
                count_table = 0;
            }
            $('#div_form_table').next('div').remove();
        });

        $(document).on('change', '.data_half_plan_status_inputan', function(){
            var id = $(this).attr('data-id');
            var value = $(this).val();

            if(value == 'tulisan')
            {
                $('#col_half_plan_inputan_'+id).empty();
                var inputan = $('<label class="form-label">Inputan</label>'+
                '<textarea name="data['+id+'][half_plan][inputan]" id="data_'+id+'_half_plan_inputan" class="form-control" rows="5" required></textarea>');
                $('#col_half_plan_inputan_'+id).html(inputan);

                CKEDITOR.replace('data_'+id+'_half_plan_inputan');
                CKEDITOR.config.allowedContent = true;

            } else if(value == 'ikon')
            {
                $('#col_half_plan_inputan_'+id).empty();

                var inputan = $('<label class="form-label">Inputan</label>'+
                '<select name="data['+id+'][half_plan][inputan]" class="form-control" required>'+
                    '<option value="">--- Pilih ---</option>'+
                    '<option value="Ya">Ya</option>'+
                    '<option value="Tidak">Tidak</option>'+
                    '</select>');

                $('#col_half_plan_inputan_'+id).html(inputan);
            } else {
                $('#col_half_plan_inputan_'+id).empty();
            }
        });

        $(document).on('change', '.data_full_plan_status_inputan', function(){
            var id = $(this).attr('data-id');
            var value = $(this).val();

            if(value == 'tulisan')
            {
                $('#col_full_plan_inputan_'+id).empty();
                var inputan = $('<label class="form-label">Inputan</label>'+
                '<textarea name="data['+id+'][full_plan][inputan]" id="data_'+id+'_full_plan_inputan" class="form-control" rows="5" required></textarea>');
                $('#col_full_plan_inputan_'+id).html(inputan);

                CKEDITOR.replace('data_'+id+'_full_plan_inputan');
                CKEDITOR.config.allowedContent = true;

            } else if(value == 'ikon')
            {
                $('#col_full_plan_inputan_'+id).empty();

                var inputan = $('<label class="form-label">Inputan</label>'+
                '<select name="data['+id+'][full_plan][inputan]" class="form-control" required>'+
                    '<option value="">--- Pilih ---</option>'+
                    '<option value="Ya">Ya</option>'+
                    '<option value="Tidak">Tidak</option>'+
                    '</select>');

                $('#col_full_plan_inputan_'+id).html(inputan);
            } else {
                $('#col_full_plan_inputan_'+id).empty();
            }
        });

        $(document).on('change', '.data_advance_plan_status_inputan', function(){
            var id = $(this).attr('data-id');
            var value = $(this).val();

            if(value == 'tulisan')
            {
                $('#col_advance_plan_inputan_'+id).empty();
                var inputan = $('<label class="form-label">Inputan</label>'+
                '<textarea name="data['+id+'][advance_plan][inputan]" id="data_'+id+'_advance_plan_inputan" class="form-control" rows="5" required></textarea>');
                $('#col_advance_plan_inputan_'+id).html(inputan);

                CKEDITOR.replace('data_'+id+'_advance_plan_inputan');
                CKEDITOR.config.allowedContent = true;

            } else if(value == 'ikon')
            {
                $('#col_advance_plan_inputan_'+id).empty();

                var inputan = $('<label class="form-label">Inputan</label>'+
                '<select name="data['+id+'][advance_plan][inputan]" class="form-control" required>'+
                    '<option value="">--- Pilih ---</option>'+
                    '<option value="Ya">Ya</option>'+
                    '<option value="Tidak">Tidak</option>'+
                    '</select>');

                $('#col_advance_plan_inputan_'+id).html(inputan);
            } else {
                $('#col_advance_plan_inputan_'+id).empty();
            }
        });

        var count_card = 0;
        dynamic_card(count_card);
        function dynamic_card(number)
        {
            var urut = number - 1;
            html = '<div class="border shadow p-3 mb-3">';
                html += '<div class="form-group row">';
                    html += '<div class="col-12">';
                        html += '<h3>';
                            html += '<span class="sw-4 sh-4 me-1 mb-1 d-inline-block bg-info d-flex justify-content-center align-items-center rounded-xl">'+number+'</span>';
                        html += '</h3>';
                    html += '</div>';
                html += '</div>';
                html += '<div class="position-relative mb-3 form-group row">';
                    html += '<label class="col-md-3 col-form-label">Judul</label>';
                    html += '<div class="col-md-9">';
                        html += '<input type="text" class="form-control" name="data['+urut+'][judul]" required>';
                    html += '</div>';
                html += '</div>';
                html += '<div class="position-relative mb-3 form-group row">';
                    html += '<label class="col-md-3 col-form-label">Harga</label>';
                    html += '<div class="col-md-9">';
                        html += '<input type="text" class="form-control" name="data['+urut+'][harga]" required>';
                    html += '</div>';
                html += '</div>';
                html += '<div class="position-relative mb-3 form-group row">';
                    html += '<label class="col-md-3 col-form-label">Deskripsi</label>';
                    html += '<div class="col-md-9">';
                        html += '<textarea name="data['+urut+'][deskripsi]" id="data_'+urut+'_deskripsi" rows="5" class="form-control"></textarea>';
                    html += '</div>';
                html += '</div>';
            html += '</div>';

            if(number >= 1)
            {
                $('#div_form_card').after(html);

                CKEDITOR.replace('data_'+urut+'_deskripsi');
                CKEDITOR.config.allowedContent = true;
            }
        }

        $(document).on('click', '.btn_tambah_card',function(){
            count_card++;
            dynamic_card(count_card);
        });

        $(document).on('click','.btn_hapus_card',function(){
            count_card--;
            if(count_card < 0)
            {
                count_card = 0;
            }
            $('#div_form_card').next('div').remove();
        });
    </script>
@endsection
