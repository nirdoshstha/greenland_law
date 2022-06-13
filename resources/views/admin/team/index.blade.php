@extends('layouts.backend')

@section('title')
{{$panel}} | Admin
@endsection

@section('content')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">{{$panel}} Details</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">

          <li class="breadcrumb-item active"><a href="{{route($base_route.'create')}}" class="btn btn-success"><i class="fas fa-plus"></i> {{$panel}} Page</a></li>
          </ol>

        </div><!-- /.col -->

      </div><!-- /.row -->
      @include('admin.includes.flash_message')
    </div><!-- /.container-fluid -->
  </div>


  <div class="container">
    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                    <th style="width: 5%">S.n</th>
                    <th style="width: 20%">Name</th>
                    <th style="width: 20%">Designation</th>
                    <th style="width: 25%">Description</th>
                    <th style="width: 20%">Images</th>
                    <th style="width: 10%">Status</th>
                    <th style="width: 15%">Action</th>
                </tr>
            </thead>
                <tbody>
                    @foreach ($data as $index=> $datas)
                        <tr>
                        <td>{{++$index}}</td>
                        <td>{{$datas->name}}</td>
                        <td>{{$datas->designation}}</td>
                        <td>{!!$datas->description!!}</td>
                        <td>
                            @if($datas->image)
                          <img src="{{asset($img_path.$datas->image)}}" width="100"></td>
                          @else
                           {{'No Image'}}
                      @endif
                        </td>
                        <td><input type="checkbox" {{$datas->status=='1'?'checked':''}}></td>

                        <td class="d-flex justify-content-between">
                        <a href="{{route($base_route.'edit',[$datas->id])}}" class="mr-3"><i class="fas fa-edit text-success"></i></a>
                        <form action="{{route($base_route.'destroy',[$datas->id])}}" method="POST">
                            @csrf
                            @method('delete')
                        <button type="button" class="delete-confirm" style="border: none"><i class="fas fa-trash text-danger"></i></button>
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

@endsection
