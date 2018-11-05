@extends('layouts.main')

@section('content')

@include('admin.sidebar')
<!-- Main content --> 
<div class="content-wrapper">

  <!-- Page header -->
  <div class="page-header page-header-default">
                    <div class="page-header-content">
                        <div class="page-title">
                            <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Admin </span> - List System Users</h4>
                        </div>

                        <div class="heading-elements">
                            <a onclick="addForm()" class="btn btn-success  btn-labeled heading-btn"  ><b><i class="icon-user-plus"></i></b>  Add New User</a> 
                        </div>
                    </div>

                    <div class="breadcrumb-line">
                        <ul class="breadcrumb">
                            <li><a href="index.html"><i class="icon-home2 position-left"></i> Home</a></li>
                            <li class="active">List System Users </li>
                        </ul>

                        <ul class="breadcrumb-elements">
                            <li><a href="#"><i class="icon-comment-discussion position-left"></i> Support</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="icon-gear position-left"></i>
                                    Settings
                                    <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="#"><i class="icon-user-lock"></i> Account security</a></li>
                                    <li><a href="#"><i class="icon-statistics"></i> Analytics</a></li>
                                    <li><a href="#"><i class="icon-accessibility"></i> Accessibility</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#"><i class="icon-gear"></i> All settings</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
  </div>
  <!-- /page header -->

  <!-- Content area -->
  <div class="content">

      <!-- Column controlled child rows -->
      <div class="panel panel-flat">
        <!-- Heading of the Panel --> 
        <div class="panel-heading">
          <h5 class="panel-title">List of System Users</h5>
          <div class="heading-elements">
            <ul class="icons-list">
              <li><a data-action="collapse"></a></li>
              <li><a data-action="reload"></a></li>
              <li><a data-action="close"></a></li>
            </ul>
          </div>
        </div>
        <!-- close the Heading of the Panel -->
        <!-- Open the Body --> 
        <div class="panel-body">
          <div style="overflow-x:hidden;">
            <table id="contact-table" class="table table-striped">
              <thead>
                <tr>
                  <th>Name </th> 
                  <th>Role</th>
                  <th>Location</th>
                  <th>Email</th>
                  <th>Status</th>
                  <th>Action </th>
                </tr>
              </thead>
              <tbody></tbody>
            </table>
          </div>
        </div>
        <!-- Close the panel Body -->
      </div>
      <!-- /column controlled child rows -->

      @include('admin.systemusers_modal')
      @include('partials.footer')
  </div>
  <!-- /content area -->

  <!-- Open the Script for Datatable and Sweet Alert -->
  <script src="{{ asset('ajax/dataTables/js/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('ajax/dataTables/js/dataTables.bootstrap.min.js') }}"></script> 
  <script src="{{ asset('ajax/sweetalert2/sweetalert2.min.js') }}"></script>
  <!-- Close the Script -->

  <!-- Script to list the table data in the Table -->
  <script type="text/javascript">
    var table = $('#contact-table').DataTable({
    processing: true,
    serverSide: true,
    ajax: "{{ route('api.managesystemusers') }}",
    columns: [
          {data: 'name', name: 'name'},
          {data: 'role', name: 'role'},
          {data: 'location', name: 'location'},
          {data: 'email', name: 'email'}, 
          {data: 'status', name: 'status', orderable: false, searchable: false},
          {data: 'action', name: 'action', orderable: false, searchable: false}
          ]
    });
  </script>
  <!-- Close the Script of the table -->


  <script type="text/javascript">
        function addForm() {
          save_method = "add";
          $('input[name=_method]').val('POST');
          $('#modal-form').modal('show');
          $('#modal-form form')[0].reset();
          $('.modal-title').text('Add New System User ');
        }
  </script>

  
</div>
<!-- /main content -->

@endsection