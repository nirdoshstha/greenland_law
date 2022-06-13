@extends('layouts.manager')

@section('title')
Manager Dashboard |Manager Dashboard
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h2 class="text-center">15</h2>

              <p class="text-center">Total Clients</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3 class="text-center">53<sup style="font-size: 20px"></sup></h3>

              <p class="text-center">Total Documents</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h3>44</h3>

              <p>Total Mail</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
              <h3>65</h3>

              <p>Unique Visitors</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
    </div>
        <div class="px-3"><h4>My Document Details</h4>
        @if (session('status'))
            <div class="alert alert-success">
            {{session('status')}}
            </div>
        @endif
        </div>
        <div class="card-body">
        <table id="example" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>S.N</th>
                    <th>Client Name/ID</th>
                    <th>Document Name</th>
                    <th>Document</th>

                </tr>
            </thead>
            <tbody>

                @foreach ($mydocument as $mydocuments )

                <tr>
                    <td>{{$mydocuments->id}}</td>
                    <td>{{$mydocuments->user->name}}</td>
                    <td>{{$mydocuments->dname}}</td>
                    <td><a href="{{url('uploads/mydocument/'.$mydocuments->image)}}" target="_blank"><span class="badge rounded-pill bg-success"><i class="fas fa-download text-warning p-2"></i>Download </span></a></td>

                </tr>
                @endforeach

            </tbody>
        </table>
        {{-- <div class="text-center mt-3 mx-auto">{{$mydocument->Links('pagination::bootstrap-4')}}</div> --}}
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
