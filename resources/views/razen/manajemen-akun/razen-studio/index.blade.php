@extends('razen.layouts.app')
@section('title', 'Razen | Manajemen Akun - Razen Studio')
@section('subheader', 'Manajemen Akun - Razen Studio')

@section('css')
<link rel="stylesheet" href="{{ asset('acorn/acorn-elearning-portal/css/vendor/datatables.min.css') }}" />
@endsection

@section('content')
    <!-- Content Start -->
    <div class="data-table-rows slim">
        <!-- Controls Start -->
        <div class="row">
          <!-- Search Start -->
          <div class="col-sm-12 col-md-5 col-lg-3 col-xxl-2 mb-1">
            <div class="d-inline-block float-md-start me-1 mb-1 search-input-container w-100 shadow bg-foreground">
              <input class="form-control datatable-search" placeholder="Search" data-datatable="#datatableRowsAjax" />
              <span class="search-magnifier-icon">
                <i data-acorn-icon="search"></i>
              </span>
              <span class="search-delete-icon d-none">
                <i data-acorn-icon="close"></i>
              </span>
            </div>
          </div>
          <!-- Search End -->

          <div class="col-sm-12 col-md-7 col-lg-9 col-xxl-10 text-end mb-1">
            <div class="d-inline-block me-0 me-sm-3 float-start float-md-none">
              <!-- Add Button Start -->
              <button
                class="btn btn-icon btn-icon-only btn-foreground-alternate shadow add-datatable"
                data-bs-delay="0"
                data-bs-toggle="tooltip"
                data-bs-placement="top"
                title="Add"
                type="button"
              >
                <i data-acorn-icon="plus"></i>
              </button>
              <!-- Add Button End -->

              <!-- Edit Button Start -->
              <button
                class="btn btn-icon btn-icon-only btn-foreground-alternate shadow edit-datatable disabled"
                data-bs-delay="0"
                data-bs-toggle="tooltip"
                data-bs-placement="top"
                title="Edit"
                type="button"
              >
                <i data-acorn-icon="edit"></i>
              </button>
              <!-- Edit Button End -->

              <!-- Delete Button Start -->
              <button
                class="btn btn-icon btn-icon-only btn-foreground-alternate shadow disabled delete-datatable"
                data-bs-delay="0"
                data-bs-toggle="tooltip"
                data-bs-placement="top"
                title="Delete"
                type="button"
              >
                <i data-acorn-icon="bin"></i>
              </button>
              <!-- Delete Button End -->
            </div>
            <div class="d-inline-block">
              <!-- Print Button Start -->
              <button
                class="btn btn-icon btn-icon-only btn-foreground-alternate shadow datatable-print"
                data-bs-delay="0"
                data-datatable="#datatableRowsAjax"
                data-bs-toggle="tooltip"
                data-bs-placement="top"
                title="Print"
                type="button"
              >
                <i data-acorn-icon="print"></i>
              </button>
              <!-- Print Button End -->

              <!-- Export Dropdown Start -->
              <div class="d-inline-block datatable-export" data-datatable="#datatableRowsAjax">
                <button class="btn p-0" data-bs-toggle="dropdown" type="button" data-bs-offset="0,3">
                  <span
                    class="btn btn-icon btn-icon-only btn-foreground-alternate shadow dropdown"
                    data-bs-delay="0"
                    data-bs-placement="top"
                    data-bs-toggle="tooltip"
                    title="Export"
                  >
                    <i data-acorn-icon="download"></i>
                  </span>
                </button>
                <div class="dropdown-menu shadow dropdown-menu-end">
                  <button class="dropdown-item export-copy" type="button">Copy</button>
                  <button class="dropdown-item export-excel" type="button">Excel</button>
                  <button class="dropdown-item export-cvs" type="button">Cvs</button>
                </div>
              </div>
              <!-- Export Dropdown End -->

              <!-- Length Start -->
              <div class="dropdown-as-select d-inline-block datatable-length" data-datatable="#datatableRowsAjax" data-childSelector="span">
                <button class="btn p-0 shadow" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-bs-offset="0,3">
                  <span
                    class="btn btn-foreground-alternate dropdown-toggle"
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    data-bs-delay="0"
                    title="Item Count"
                  >
                    10 Items
                  </span>
                </button>
                <div class="dropdown-menu shadow dropdown-menu-end">
                  <a class="dropdown-item" href="#">5 Items</a>
                  <a class="dropdown-item active" href="#">10 Items</a>
                  <a class="dropdown-item" href="#">20 Items</a>
                </div>
              </div>
              <!-- Length End -->
            </div>
          </div>
        </div>
        <!-- Controls End -->

        <!-- Table Start -->
        <div class="data-table-responsive-wrapper">
          <table id="datatableRowsAjax" class="data-table nowrap w-100">
            <thead>
              <tr>
                <th class="text-muted text-small text-uppercase">Name</th>
                <th class="text-muted text-small text-uppercase">Sales</th>
                <th class="text-muted text-small text-uppercase">Stock</th>
                <th class="text-muted text-small text-uppercase">Category</th>
                <th class="text-muted text-small text-uppercase">Tag</th>
                <th class="empty">&nbsp;</th>
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
              <form>
                <div class="mb-3">
                  <label class="form-label">Name</label>
                  <input name="Name" type="text" class="form-control" />
                </div>
                <div class="mb-3">
                  <label class="form-label">Sales</label>
                  <input name="Sales" type="number" class="form-control" />
                </div>
                <div class="mb-3">
                  <label class="form-label">Stock</label>
                  <input name="Stock" type="number" class="form-control" />
                </div>
                <div class="mb-3">
                  <label class="form-label">Category</label>
                  <div class="form-check">
                    <input type="radio" id="category1" name="Category" value="Whole Wheat" class="form-check-input" />
                    <label class="form-check-label" for="category1">Whole Wheat</label>
                  </div>
                  <div class="form-check">
                    <input type="radio" id="category2" name="Category" value="Sourdough" class="form-check-input" />
                    <label class="form-check-label" for="category2">Sourdough</label>
                  </div>
                  <div class="form-check">
                    <input type="radio" id="category3" name="Category" value="Multigrain" class="form-check-input" />
                    <label class="form-check-label" for="category3">Multigrain</label>
                  </div>
                </div>
                <div class="mb-3">
                  <label class="form-label">Tag</label>
                  <div class="form-check">
                    <input type="radio" id="tag1" name="Tag" value="New" class="form-check-input" />
                    <label class="form-check-label" for="tag1">New</label>
                  </div>
                  <div class="form-check">
                    <input type="radio" id="tag2" name="Tag" value="Sale" class="form-check-input" />
                    <label class="form-check-label" for="tag2">Sale</label>
                  </div>
                  <div class="form-check">
                    <input type="radio" id="tag3" name="Tag" value="Done" class="form-check-input" />
                    <label class="form-check-label" for="tag3">Done</label>
                  </div>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Cancel</button>
              <button type="button" class="btn btn-primary" id="addEditConfirmButton">Add</button>
            </div>
          </div>
        </div>
      </div>
      <!-- Add Edit Modal End -->
@endsection

@section('js')
<script src="{{ asset('acorn/acorn-elearning-portal/js/vendor/bootstrap-submenu.js') }}"></script>

<script src="{{ asset('acorn/acorn-elearning-portal/js/vendor/datatables.min.js') }}"></script>
<script src="{{ asset('acorn/acorn-elearning-portal/js/vendor/mousetrap.min.js') }}"></script>
<script src="{{ asset('acorn/acorn-elearning-portal/js/cs/datatable.extend.js') }}"></script>

<script src="{{ asset('acorn/acorn-elearning-portal/js/plugins/datatable.ajax.js') }}"></script>

<script>
    // $('.add-datatable').click(function(){
    //     $('#addEditModal').modal('show');
    // })
</script>
@endsection
