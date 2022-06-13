<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('backend/plugins/fontawesome-free/css/all.min.css')}}">
  <link rel="stylesheet" href="{{asset('backend/dist/css/adminlte.min.css')}}">
  <!--Data Table Css-->
<link rel="stylesheet" href="{{asset('backend/dist/css/jquery.dataTables.min.css')}}">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="backend/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
 @include('layouts.inc.backend-top-navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('layouts.inc.manager-side-navbar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        @yield('content')
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @include('layouts.inc.backend-footer')


  <!-- Control Sidebar -->
  {{-- <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside> --}}
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->



<!-- jQuery -->
<script src="{{asset('backend/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('backend/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('backend/dist/js/adminlte.js')}}"></script>
<script src="{{asset('backend/dist/js/jquery-3.5.1.js')}}"></script>
<script src="{{asset('backend/dist/js/jquery.dataTables.min.js')}}"></script>
@yield('script')

</body>
</html>
