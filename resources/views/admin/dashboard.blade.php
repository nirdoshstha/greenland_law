@extends('layouts.backend')

@section('title')
Admin | Dashboard
@endsection

@section('content')
<style>
    <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('assets/backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/backend/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
</style>
<div class="container">
    <div class="row">
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3>
                @php
                $users = App\Models\User::where('id','>=','1')->get();
                $usercount = $users->count();
                @endphp

                {{$usercount}}
              </h3>

              <p>Total User Registration</p>
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
              <h3>
              @php
              $mydocument = App\Models\Mydocument::where('id','>=','1')->get();
              $totaldocs = $mydocument->count();
              @endphp
              {{$totaldocs}}
               </h3>

              <p>Total Client Document</p>
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
              <h3>
                @php
                  $portfolio =App\Models\Portfolio::where('id','>=','1')->get();
                  $portfoliocount=$portfolio->count();
                @endphp
                {{$portfoliocount}}
              </h3>

              <p>Total Our Portfolio</p>
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
              <h3>
              @php
               $team = App\Models\Ourteam::where('id','>=','1')->get();
               $teamCount = $team->count();
               @endphp
               {{$teamCount}}
              </h3>
              <p>Our Team Member</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
    </div>
</div>


<div class="row">
    <div class="col-12">
        <table id="dataTable" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>S.N</th>
              <th>Name</th>
              <th>Email</th>
              <th>User Role</th>
              <th>Ban/Unban</th>
              <th>Created Date</th>
              <th>Updated By</th>
              <th>Updated Date</th>

            </tr>
            </thead>
            <tbody>
                    @foreach ($user as $users )

                    <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$users->name}}</td>
                    <td>{{$users->email}}</td>
                    <td>
                        @if ($users->user_role==2)
                            <button class="btn btn-success btn-sm">Admin</button>
                        @elseif ($users->user_role==1)
                        <button class="btn btn-primary btn-sm">Manager</button>

                        @elseif ($users->user_role==0)
                        <button class="btn btn-warning btn-sm">Client</button>
                        @endif
                    </td>
                    <td>
                        @if ($users->ban_unban==0)
                            <button class="btn btn-success btn-sm">Unban</button>
                        @else
                            <button class="btn btn-danger btn-sm">Banned</button>
                        @endif
                    </td>
                    <td>{{$users->created_at->format("Y-m-d")}}<br/><small>({{$users->created_at->diffForHumans()}})</small></td>
                    <td>{{$users->updated_by}}</td>
                    <td>{{$users->updated_at->format("Y-m-d")}} <br/><small>({{$users->updated_at->diffForHumans()}})</small></td>

                    </tr>
                    @endforeach

            </tbody>

          </table>
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

<script>
    $(function () {
        $("#dataTable").DataTable({
          "responsive": true, "lengthChange": false, "autoWidth": false,
          "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      });
    </script>
@endsection
