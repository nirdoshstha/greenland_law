@extends('layouts.backend')

@section('title')
    {{$panel}} Create | Admin
@endsection


@section('content')
<div class="content-header">
    <div class="container">
      <div class="row mb-1">
        <div class="col-sm-6">
          <h1 class="m-0">Add {{$panel}} Details</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <a href="{{route($base_route.'index')}}" class="btn btn-info btn-md float-right ml-2"><i class="fas fa-list"></i> List</a>
          @if (session('status'))
          <div class="alert alert-success" role="alert">
              {{ session('status') }}
          </div>
      @endif
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

<div class="container">

    {{--  <form action="{{route('about.store')}}" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}  --}}

        {{Form::open(['route' => $base_route.'store', 'method' => 'post', 'files'=>'true'])}}
            @include($view_path.'includes.main_form')
        {!! Form::close() !!}
{{--  </form>  --}}

</div>
@endsection


@section('script')
<script>
    $("#title").keyup(function(){
        let title = $(this).val();
        let slug = title.toLowerCase().replace(/ /g, '-').replace(/[^\w-]+/g, '');
        $("#slug").val(slug);
    });
</script>

@endsection
