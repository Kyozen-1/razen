@extends('razen.layouts.app')
@section('title', 'Razen | Manajemen Akun - Razen Studio')

@section('css')
<link rel="stylesheet" href="{{ asset('acorn/acorn-elearning-portal/css/vendor/datatables.min.css') }}" />
<link rel="stylesheet" href="{{ asset('acorn/acorn-elearning-portal/css/vendor/select2.min.css') }}" />
<link rel="stylesheet" href="{{ asset('acorn/acorn-elearning-portal/css/vendor/select2-bootstrap4.min.css') }}" />
<link rel="stylesheet" href="{{ asset('acorn/acorn-elearning-portal/css/vendor/bootstrap-datepicker3.standalone.min.css') }}" />
<link rel="stylesheet" href="{{ asset('acorn/acorn-elearning-portal/css/vendor/tagify.css') }}" />
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
                        <h1 class="mb-0 pb-0 display-4" id="title">Manajemen Akun - Razen Studio</h1>
                        <nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb">
                            <ul class="breadcrumb pt-0">
                            <li class="breadcrumb-item"><a href="{{ route('razen.dashboard.index') }}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('manajemen-akun.razen-studio.index') }}">Manajemen Akun - Razen Studio</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!-- Title End -->
                </div>
            </div>
            <!-- Title and Top Buttons End -->

            <!-- Content Start -->
            <div class="data-table-rows slim">
                <!-- Table Start -->
                <div class="data-table-responsive-wrapper">
                    <table id="manajemenAkunRazenStudioTable" class="data-table nowrap w-100">
                        <thead>
                            <tr>
                                <th class="text-muted text-small text-uppercase">No</th>
                                <th class="text-muted text-small text-uppercase">Name</th>
                                <th class="text-muted text-small text-uppercase">Email</th>
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
                            <form id="razenStudioForm" class="tooltip-label-end" novalidate>
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">Nama</label>
                                    <input name="name" id="name" type="text" class="form-control" required/>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Email</label>
                                    <input name="email" id="email" type="email" class="form-control" required/>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Password</label>
                                    <input name="password" id="password" type="password" class="form-control" required/>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary" id="addEditConfirmButton">Add</button>
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
    id="detailModal"
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
                    <label for="detail_name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="detail_name" disabled>
                </div>
                <div class="form-group mb-3">
                    <label for="detail_email" class="form-label">Email</label>
                    <input type="text" class="form-control" id="detail_email" disabled>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
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
<script>
    $(document).ready(function(){
        var dataTables = $('#manajemenAkunRazenStudioTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{ route('manajemen-akun.razen-studio.index') }}",
            },
            columns:[
                {
                    data: 'DT_RowIndex'
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'email',
                    name: 'email'
                },
                {
                    data: 'aksi',
                    name: 'aksi',
                    orderable: false
                },
            ]
        });
    });
    $('#razenStudioForm').on('submit', function(e){
        e.preventDefault();
        $.ajax({
            url: "{{ route('manajemen-akun.razen-studio.store') }}",
            method: "POST",
            data: $(this).serialize(),
            dataType: "json",
            success: function(data)
            {
                if(data.error)
                {
                    Swal.fire({
                        icon: 'error',
                        title: data.error,
                        showConfirmButton: true
                    });
                }
                if(data.success)
                {
                    Swal.fire({
                        icon: 'success',
                        title: data.success,
                        showConfirmButton: true
                    });
                }
            }
        });
    });

    $(document).on('click', '.detail', function(){
        var id = $(this).attr('id');
        $.ajax({
            url: "{{ url('/razen/manajemen-akun/razen-studio/detail') }}" + '/' + id,
            dataType: "json",
            success: function(data)
            {
                $('#detail-title').text('Detail Data');
                $('#detail_name').val(data.result.name);
                $('#detail_email').val(data.result.email);
                $('#detailModal').modal('show');
            }
        });
    });

    $(document).on('click', '.change-password', function(){
        var id = $(this).attr('id');
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
                    url: "{{ route('manajemen-akun.razen-studio.change-password') }}",
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
                        if(data.errors)
                        {
                            Swal.fire({
                                icon: 'errors',
                                title: data.errors,
                                showConfirmButton: true
                            });
                        }
                        if(data.success)
                        {
                            $('#manajemenAkunRazenStudioTable').DataTable().ajax.reload();
                            Swal.fire({
                                icon: 'success',
                                title: data.success,
                                showConfirmButton: true
                            });
                        }
                    }
                });
            }
        });
    });

    $(document).on('click', '.delete', function(){
        var id = $(this).attr('id');
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
                    url: "{{ route('manajemen-akun.razen-studio.destroy') }}",
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
                        if(data.errors)
                        {
                            Swal.fire({
                                icon: 'errors',
                                title: data.errors,
                                showConfirmButton: true
                            });
                        }
                        if(data.success)
                        {
                            $('#manajemenAkunRazenStudioTable').DataTable().ajax.reload();
                            Swal.fire({
                                icon: 'success',
                                title: data.success,
                                showConfirmButton: true
                            });
                        }
                    }
                });
            }
        });
    });
</script>
@endsection
