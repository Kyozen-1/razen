@extends('razen-studio.admin.layouts.app')
@section('title', 'Admin - Razen Studio | Official Partner | Atur')

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
<div class="container">
    <div class="row">
        <div class="col">
            <!-- Title and Top Buttons Start -->
            <div class="page-title-container">
                <div class="row">
                    <!-- Title Start -->
                    <div class="col-12 col-md-7">
                        <h1 class="mb-0 pb-0 display-4" id="title">Official Partner | Atur</h1>
                        <nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb">
                            <ul class="breadcrumb pt-0">
                                <li class="breadcrumb-item"><a href="{{ route('razen-studio.admin.dashboard.index') }}">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="#">Landing Page</a></li>
                                <li class="breadcrumb-item"><a href="#">Official Partner</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('razen-studio.admin.landing-page.official-partner.index') }}">Atur</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!-- Title End -->
                </div>
            </div>
            <!-- Title and Top Buttons End -->

            <!-- Content Start -->
            <div class="data-table-rows slim">
                <div class="row mb-5">
                    <div class="col-12" style="text-align: right">
                        <button class="btn btn-primary waves-light waves-effect" type="button" data-toggle="modal" data-target="#addEditModal" id="create">Tambah</button>
                    </div>
                </div>
                <!-- Table Start -->
                <div class="data-table-responsive-wrapper">
                    <table id="officialPartnerTable" class="data-table nowrap w-100">
                        <thead>
                            <tr>
                                <th class="text-muted text-small text-uppercase">No</th>
                                <th class="text-muted text-small text-uppercase">Nama</th>
                                <th class="text-muted text-small text-uppercase">Gambar</th>
                                <th class="text-muted text-small text-uppercase">Aksi</th>
                            </tr>
                        </thead>
                    </table>
                </div>
                <!-- Table End -->
            </div>
            <!-- Content End -->

            <!-- Add Edit Modal Start -->
            <div class="modal modal-right fade" id="addEditModal" tabindex="-1" role="dialog" aria-labelledby="modalTitle" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalTitle">Add New</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <span id="form_result"></span>
                            <form id="officialPartnerForm" class="tooltip-label-end" novalidate enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">Nama</label>
                                    <input name="nama" id="nama" type="text" class="form-control" required/>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Gambar</label>
                                    <input type="file" class="dropify" name="gambar" id="gambar" data-height="300" data-allowed-file-extensions="png jpg jpeg" data-show-errors="true" required>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Cancel</button>
                            <input type="hidden" name="aksi" id="aksi" value="Save">
                            <input type="hidden" name="hidden_id" id="hidden_id">
                            <button type="submit" class="btn btn-primary" id="aksi_button">Add</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
            <!-- Add Edit Modal End -->
        </div>
    </div>
</div>

<div
    class="modal fade modal-close-out"
    id="detail"
    tabindex="-1"
    role="dialog"
    aria-labelledby="detailModalLabel"
    aria-hidden="true"
>
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="detail-title">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-group mb-3">
                    <label for="detail_nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="detail_nama" disabled>
                </div>
                <div class="form-group mb-3 text-center">
                    <img src="" alt="" class="img-fluid rounded" id="detail_gambar">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="confirm" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirm">Konfirmasi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h4 class="text-center" style="margin: 0;">Apakah anda yakin menghapus?</h4>
            </div>
            <div class="modal-footer">
                <button type="button" name="ok_button" id="ok_button" class="btn btn-danger waves-effect width-md waves-light">Ok</button>
                <button class="btn btn-primary waves-effect width-md waves-light" type="button" data-bs-dismiss="modal">Batal</button>
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
<script>
    $(document).ready(function(){
        $('.dropify').dropify();
        $('.dropify-wrapper').css('line-height', '3rem');
        var dataTables = $('#officialPartnerTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{ route('razen-studio.admin.landing-page.official-partner.index') }}",
            },
            columns:[
                {
                    data: 'DT_RowIndex'
                },
                {
                    data: 'nama',
                    name: 'nama'
                },
                {
                    data: 'gambar',
                    name: 'gambar'
                },
                {
                    data: 'aksi',
                    name: 'aksi',
                    orderable: false
                },
            ]
        });
    });

    $(document).on('click', '.detail', function(){
        var id = $(this).attr('id');
        $.ajax({
            url: "{{ url('/razen-studio/admin/landing-page/official-partner/detail') }}"+'/'+id,
            dataType: "json",
            success: function(data)
            {
                $('#detail-title').text('Detail Data');
                $('#detail_nama').val(data.result.nama);
                $('#detail_gambar').attr('src', "{{ asset('images/landingpage_razenstudio/official-partner') }}" + '/' + data.result.gambar);
                $('#detail').modal('show');
            }
        });
    });

    $('#create').click(function(){
        $('#officialPartnerForm')[0].reset();
        $('.dropify-clear').click();
        $('#aksi_button').text('Save');
        $('#aksi_button').prop('disabled', false);
        $('.modal-title').text('Add Data');
        $('#aksi_button').val('Save');
        $('#aksi').val('Save');
        $('#form_result').html('');
        $('#addEditModal').modal('show');
    });

    $('#officialPartnerForm').on('submit', function(e){
        e.preventDefault();
        if($('#aksi').val() == 'Save')
        {
            $.ajax({
                url: "{{ route('razen-studio.admin.landing-page.official-partner.store') }}",
                method: "POST",
                data: new FormData(this),
                dataType: "json",
                contentType: false,
                cache: false,
                processData: false,
                beforeSend: function()
                {
                    $('#aksi_button').text('Menyimpan...');
                    $('#aksi_button').prop('disabled', true);
                },
                success: function(data)
                {
                    var html = '';
                    if(data.errors)
                    {
                        html = '<div class="alert alert-danger">'+data.errors+'</div>';
                        $('#aksi_button').prop('disabled', false);
                        $('#officialPartnerForm')[0].reset();
                        $('.dropify-clear').click();
                        $('#aksi_button').text('Save');
                        $('#officialPartnerTable').DataTable().ajax.reload();
                    }
                    if(data.success)
                    {
                        html = '<div class="alert alert-success">'+data.success+'</div>';
                        $('#aksi_button').prop('disabled', false);
                        $('#officialPartnerForm')[0].reset();
                        $('.dropify-clear').click();
                        $('#aksi_button').text('Save');
                        $('#officialPartnerTable').DataTable().ajax.reload();
                    }

                    $('#form_result').html(html);
                }
            });
        }
        if($('#aksi').val() == 'Edit')
        {
            $.ajax({
                url: "{{ route('razen-studio.admin.landing-page.official-partner.update') }}",
                method: "POST",
                data: new FormData(this),
                dataType: "json",
                contentType: false,
                cache: false,
                processData: false,
                beforeSend: function(){
                    $('#aksi_button').text('Mengubah...');
                    $('#aksi_button').prop('disabled', true);
                },
                success: function(data)
                {
                    var html = '';
                    if(data.errors)
                    {
                        html = '<div class="alert alert-danger">'+data.errors+'</div>';
                        $('#aksi_button').text('Save');
                    }
                    if(data.success)
                    {
                        // html = '<div class="alert alert-success">'+ data.success +'</div>';
                        $('#officialPartnerForm')[0].reset();
                        $('.dropify-clear').click();
                        $('#aksi_button').prop('disabled', false);
                        $('#aksi_button').text('Save');
                        $('#officialPartnerTable').DataTable().ajax.reload();
                        $('#addEditModal').modal('hide');
                        Swal.fire({
                            icon: 'success',
                            title: 'Berhasil di ubah',
                            showConfirmButton: true
                        });
                    }

                    $('#form_result').html(html);
                }
            });
        }
    });

    $(document).on('click', '.edit', function(){
        var id = $(this).attr('id');
        $('#form_result').html('');
        $.ajax({
            url: "{{ url('/razen-studio/admin/landing-page/official-partner/edit') }}"+'/'+id,
            dataType: "json",
            success: function(data)
            {
                $('#nama').val(data.result.nama);
                var lokasi_gambar = "{{ asset('images/landingpage_razenstudio/official-partner') }}"+'/'+data.result.gambar;
                var fileDropperGambar = $("#gambar").dropify();
                fileDropperGambar = fileDropperGambar.data('dropify');
                fileDropperGambar.resetPreview();
                fileDropperGambar.clearElement();
                fileDropperGambar.settings['defaultFile'] = lokasi_gambar;
                fileDropperGambar.destroy();
                fileDropperGambar.init();
                $('#hidden_id').val(id);
                $('.modal-title').text('Edit Data');
                $('#aksi_button').text('Edit');
                $('#aksi_button').prop('disabled', false);
                $('#aksi_button').val('Edit');
                $('#aksi').val('Edit');
                $('#addEditModal').modal('show');
            }
        });
    });
    var user_id;
    $(document).on('click', '.delete', function(){
        user_id = $(this).attr('id');
        $('.modal-title').text('Konfirmasi');
        $('#ok_button').prop('disabled', false);
        $('#confirmModal').modal('show');
        $('#ok_button').text('Ok');
    });

    $('#ok_button').click(function(){
        $.ajax({
            url: "{{ url('/razen-studio/admin/landing-page/official-partner/destroy') }}"+'/'+user_id,
            beforeSend: function(){
                $('#ok_button').text('Deleting....');
                $('#ok_button').prop('disabled', true);
            },
            success: function(data)
            {
                $('#ok_button').prop('disabled', false);
                $('#confirmModal').modal('hide');
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil di hapus',
                    showConfirmButton: true
                });
                $('#officialPartnerTable').DataTable().ajax.reload();
            }
        });
    });
</script>
@endsection
