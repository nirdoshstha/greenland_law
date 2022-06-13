@extends('layouts.backend')

@section('title')
{{$panel}} | Admin
@endsection

@section('content')
<style>
    <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('assets/backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/backend/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
</style>
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">{{$panel}} Details</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
          </ol>

        </div><!-- /.col -->

      </div><!-- /.row -->
      @include('admin.includes.flash_message')
    </div><!-- /.container-fluid -->
  </div>


  <div class="container">
    <div class="row">
        <div class="col-12">
            <table id="dataTable" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S.N</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>User Role</th>
                  <th>Ban Unban</th>
                  <th>Created Date</th>
                  <th>Updated By</th>
                  <th>Updated Date</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                        @foreach ($data as $datas )

                        <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$datas->name}}</td>
                        <td>{{$datas->email}}</td>
                        <td>
                            @if ($datas->user_role==2)
                                <button class="btn btn-success btn-sm">Admin</button>
                            @elseif ($datas->user_role==1)
                            <button class="btn btn-primary btn-sm">Manager</button>

                            @elseif ($datas->user_role==0)
                            <button class="btn btn-warning btn-sm">Client</button>
                            @endif
                        </td>
                        <td>
                            @if ($datas->ban_unban==0)
                                <button class="btn btn-success btn-sm">Unban</button>
                            @else
                                <button class="btn btn-danger btn-sm">Banned</button>
                            @endif
                        </td>
                        <td>{{$datas->created_at->format("Y-m-d")}}<br/><small>({{$datas->created_at->diffForHumans()}})</small></td>
                        <td>{{$datas->updated_by}}</td>
                        <td>{{$datas->updated_at->format("Y-m-d")}} <br/><small>({{$datas->updated_at->diffForHumans()}})</small></td>
                        <td class="d-flex justify-content-center">
                            <a href="{{route($base_route.'edit',[$datas->id])}}" class="btn btn-primary btn-sm mr-2">Edit</a>
                            <form action="{{route($base_route.'destroy',[$datas->id])}}" method="POST">
                                @csrf
                                @method('delete')
                                <a href="#" class="btn btn-danger btn-sm delete-confirm">Delete</a>
                            </form>
                        </td>
                        </tr>
                        @endforeach

                </tbody>

              </table>
        </div>
    </div>
</div>


@endsection

@section('script')
<!-- DataTables  & Plugins -->
<script src="{{asset('assets/backend/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/backend/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('assets/backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/backend/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('assets/backend/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $('.delete-confirm').click(function(){
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
          }).then((result) => {
            if (result.isConfirmed) {
               $(this).closest("form").submit();
            }
          })
    })
</script>


<script>
    $(function () {
        $("#dataTable").DataTable({
          "responsive": true, "lengthChange": false, "autoWidth": false,
          "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      });
    </script>

@endsection
