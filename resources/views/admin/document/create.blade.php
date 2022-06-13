@extends('layouts.backend')

@section('title')
    {{$panel}} | Admin
@endsection

@section('content')
<style>
    .select2-container--default .select2-selection--single .select2-selection__rendered {
        color: #444;
        line-height: 18px !important;
    }
</style>
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

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="//cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<script>
    $(document).ready(function() {
        $('.select2').select2();
    });
</script>

@endsection
