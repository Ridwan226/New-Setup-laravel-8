@extends('admin.templates.index')
@section('app-css')
<!-- DataTables -->
<link href="{{ asset('member/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('member/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />

<!-- Responsive datatable examples -->
<link href="{{ asset('member/plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

<div class="container-fluid">
  
  
  <div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h4 class="page-title m-0">Data Roles</h4>
                </div>
                <div class="col-md-4 pull-right">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="#">Roles</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Data</li>
                    </ol>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end page-title-box -->
    </div>
  </div> 
  <!-- end page title -->
  



<div class="row">
  <div class="col-6">
      <div class="card m-b-30">
          <div class="card-body">

              <h4 class="mt-0 header-title">List Data Roles</h4>
             

              <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                  <thead>
                  <tr>
                      <th>id</th>
                      <th>Name</th>
                      <th>Action</th>
                  </tr>
                  </thead>


                  <tbody>
                  @forelse ($role as $item)
                  <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>
                      <div class="button-items">
                        <button type="button" class="btn btn-sm btn-primary  waves-light"  data-toggle="modal" data-target="#myModal{{ $item->id }}">Edit</button>
                        <form method="POST"  class="d-inline" id="formsubmit" action="{{ url('administrator/roles/delroles/'.$item->id) }}">@csrf
                          <input type="hidden" value="DELETE" name="_method">
                          <button type="submit" class="btn btn-sm btn-danger  waves-light" id="sa-delete">Delete</button>
                        </form>
                        
                      </div>
                    </td>
                  </tr>
                  @empty
                      <p>Tidak Ada Data</p>
                  @endforelse
                 
                  </tbody>
              </table>

          </div>
      </div>
  </div> <!-- end col -->
  
  
   <!-- sample modal content -->
   @forelse ($role as $item_eedit)
   <div id="myModal{{ $item_eedit->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <form method="post" action="{{ url('administrator/roles/editroles/'. $item_eedit->id ) }}" enctype="multipart/form-data" > {{ csrf_field() }}
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myModalLabel">Edit Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <label>Name Roles</label>
                <input type="text" class="form-control" name="name" required placeholder="Type something" value="{{  $item_eedit->name }}" />
            </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary waves-effect waves-light">Save changes</button>
            </div>
        </div><!-- /.modal-content -->
      </form>
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
@empty
@endforelse
  
  <div class="col-6">
    <div class="card m-b-30">
      <div class="card-body">
      <h4 class="mt-0 header-title">Add Data</h4>
    @include('admin.templates.message')
      
      
      <form method="post" action="{{ url('administrator/roles/addroles') }}" enctype="multipart/form-data" > {{ csrf_field() }}
        <div class="form-group">
            <label>Name Roles</label>
            <input type="text" class="form-control" name="name" required placeholder="Type something"/>
        </div>
        
        <div class="form-group m-b-0">
          <div>
              <button type="submit" class="btn btn-primary waves-effect waves-light">
                  Submit
              </button>
              <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                  Cancel
              </button>
          </div>
      </div>
        
      </form>
      
      
      </div>
    </div>
  </div>
  
</div> <!-- end row -->



  
</div>

@endsection


@section('app-js')

<script>
  //Warning Message
  $('#sa-delete[type=submit]').on('click', function(e) {
    e.preventDefault();
     var $this = $(this);
      var form = event.target.form; // storing the form
     swal({
         title: 'Are you sure?',
         text: "You won't be able to revert this!",
         type: 'warning',
         showCancelButton: true,
         confirmButtonClass: 'btn btn-success',
         cancelButtonClass: 'btn btn-danger m-l-10',
         confirmButtonText: 'Yes, delete it!'
     }).then((result) => {
         if (result.value === true) {
          $this.parent('form').submit();
           
         } else {
          {
          swal(
            'Cancelled',
            'Your imaginary file is safe :)',
            'error',
          )
        }
         }
     })
     });
</script>

 <!-- Required datatable js -->
 <script src="{{ asset('member/plugins/datatables/jquery.dataTables.min.js') }}"></script>
 <script src="{{ asset('member/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
 <!-- Buttons examples -->
 <script src="{{ asset('member/plugins/datatables/dataTables.buttons.min.js') }}"></script>
 <script src="{{ asset('member/plugins/datatables/buttons.bootstrap4.min.js') }}"></script>
 <script src="{{ asset('member/plugins/datatables/jszip.min.j') }}s"></script>
 <script src="{{ asset('member/plugins/datatables/pdfmake.min.js') }}"></script>
 <script src="{{ asset('member/plugins/datatables/vfs_fonts.js') }}"></script>
 <script src="{{ asset('member/plugins/datatables/buttons.html5.min.js') }}"></script>
 <script src="{{ asset('member/plugins/datatables/buttons.print.min.js') }}"></script>
 <script src="{{ asset('member/plugins/datatables/buttons.colVis.min.js') }}"></script>
 <!-- Responsive examples -->
 <script src="{{ asset('member/plugins/datatables/dataTables.responsive.min.js') }}"></script>
 <script src="{{ asset('member/plugins/datatables/responsive.bootstrap4.min.js') }}"></script>

 <!-- Datatable init js -->
 <script src="{{ asset('member/assets/pages/datatables.init.js') }}"></script>       
 
  
  <!-- Parsley js -->
  <script src="{{ asset('member/plugins/parsleyjs/parsley.min.js') }}"></script>


  <script>
      $(document).ready(function() {
          $('form').parsley();
      });
  </script>
  
 


@endsection
