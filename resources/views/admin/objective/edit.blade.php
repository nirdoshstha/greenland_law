@extends('layouts.backend',['page'=>'edit'])

@section('title')
Edit About us Page | Admin
@endsection

@section('content')
<div class="content-header">
    <div class="container">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Edit {{$panel}} Page</h1>
        </div><!-- /.col -->
        <div class="col-sm-6 ">
            <a href="{{route($base_route.'index')}}" class="btn btn-info btn-md float-right ml-2"><i class="fas fa-list"></i> List</a>
            <a href="{{route($base_route.'create')}}" class="btn btn-success btn-md float-right"><i class="fas fa-pencil-alt"></i> Create</a>

        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>


  <div class="container-fluid">
  {{--  <form action="{{route('about.update',[$aboutus->id])}}" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    {{method_field('PUT')}}  --}}
    {{Form::model($data, ['route' => [$base_route.'update', $data->id], 'method'=>'put','files'=>'true'])}}
    @include($view_path.'includes.main_form')

{{--  </form>  --}}
{!! Form::close() !!}
</div>

@endsection

@section('script')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<script>
    $("#title").keyup(function(){
        let title = $(this).val();
        let slug = title.toLowerCase().replace(/ /g, '-').replace(/[^\w-]+/g, '');
        $("#slug").val(slug);
    });
</script>
@endsection
