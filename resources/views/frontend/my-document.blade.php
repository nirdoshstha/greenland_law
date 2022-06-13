@extends('layouts.frontend')

@section('title')
My Document | Frontend
@endsection

@section('content')
<div class="content-header">
    <div class="container py-5">
      <div class="row mb-2">
        <div class="col-sm-10 mx-auto">
          <h2 class="m-0">My Document Details</h2>
        </div><!-- /.col -->
        {{-- <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active"> </li>

        </ol>

        </div><!-- /.col --> --}}
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

    <section class="section-introduct m-0 p-0">
        <div class="container">
            <div class="row">
              <div class="col-md-12 text-center">
                <h1 data-aos="zoom-in">My Document Details</h1>
                <div class="divider" data-aos="fade-right"></div>
                {{--  <p data-aos="zoom-in">What our valuable clients have to say</p>  --}}
              </div>
            </div>
        </div>
    </section>

  <div class="container py-5">
    <div class="row">
        <div class="col-md-12 mx-auto">
            <table class="table table-striped table-hover table-borderless" id="example">
                <thead class="table-borderless">
                    <tr style="background:#2A8BFF;" class="text-white">
                    <th style="width: 5%">S.NO</th>
                    <th style="width: 20%">Client ID/Name</th>
                    <th style="width: 30%">Company Name</th>
                    <th style="width: 30%">Document Name</th>
                    <th style="width: 15%">Image</th>
                </tr>
            </thead>
                <tbody>
                    @foreach ($mydocument as $mydocuments )

                        <tr>
                        <td>{{$mydocuments->id}}</td>
                        <td>{{$mydocuments->user->name}}</td>
                        <td>{{$mydocuments->company_name}}</td>
                        <td>{{$mydocuments->dname}}</td>
                        <td><a href="{{url('uploads/mydocument/'.$mydocuments->image)}}" target="_blank"><button class="btn btn-main px-3 py-2"><i class="fas fa-download"></i> Download</button></a></td>

                        </tr>
                    @endforeach

                </tbody>
            </table>
            <div class="d-flex justify-content-center"> </div>

        </div>
    </div>
</div>


@endsection

@section('script')
<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
@endsection
