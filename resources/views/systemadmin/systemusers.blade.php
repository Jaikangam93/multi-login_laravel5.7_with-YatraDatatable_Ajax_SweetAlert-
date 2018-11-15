@extends('layouts.main')

@section('content')

@include('systemadmin.sidebar')
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

      @include('systemadmin.systemusers_modal')
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
          $('.modal-title').text(' Add New User ');

        }

        //Function to ADD Registration 
      $(function(){
        $('#modal-form form').on('submit', function (e) {
          if (!e.isDefaultPrevented())
          {
            var id = $('#id').val();
            if (save_method == 'add') url = "{{ url('systemadmin/systemusers') }}"; 
            //else  url = "{{ url('systemadmin/listsystemusers') . '/' }}" + id;
            $.ajax({
              url : url,
              type : "POST",
                       // data : $('#modal-form form').serialize(),
                       data: new FormData($("#modal-form form")[0]),
                       contentType: false,
                       processData: false,
                       success : function(data) {
                        $('#modal-form').modal('hide');
                        table.ajax.reload();
                        swal({
                          title: 'Success!',
                          text: data.message,
                          type: 'success',
                        })
                      },
                      error : function(data){
                        swal({
                          title: 'Oops...',
                          text: data.message,
                          type: 'error', 
                        })
                      }
                    });
            return false;
          }

        });
      });
      
     

        

        //Function for Delete user 
        function deleteData(id){
          var csrf_token = $('meta[name="csrf-token"]').attr('content');
          swal({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            cancelButtonColor: '#d33',
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete it!'
          }).then(function () {
            $.ajax({
              url : "{{ url('systemadmin/systemusers') }}" + '/' + id,
              type : "POST",
              data : {'_method' : 'DELETE', '_token' : csrf_token},
              success : function(data) {
                table.ajax.reload();
                swal({
                  title: 'Success!',
                  text: data.message,
                  type: 'success',   
                })
              },
              error : function () {
                swal({
                  title: 'Oops...',
                  text: data.message,
                  type: 'error',

                })
              }
            });
          });
        } //Function for Delete user 

        // Function for user change Status 
        function userchangestatus(id){
          var csrf_token = $('meta[name="csrf-token"]').attr('content');
          swal({
            title: 'Are you sure want to change Status?',
            type: 'warning',
            showCancelButton: true,
            cancelButtonColor: '#d33',
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'Yes, Change it!'
          }).then(function () {
            $.ajax({
              url : "{{ url('/systemadmin/userchangestatus') }}" + '/' + id,
              type : "POST",
              data : {'_method' : 'POST', '_token' : csrf_token},
              success : function(data) {
                table.ajax.reload();
                swal({
                  title: 'Success!',
                  text: data.message,
                  type: 'success',  
                })
              },
              error : function () {
                swal({
                  title: 'Oops...',
                  text: data.message,
                  type: 'error',
                })
              }
            });
          });
        }  // close for user change Status 

  </script>


  
</div>
<!-- /main content -->

@endsection