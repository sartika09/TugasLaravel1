<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>perpustakaan</title>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/fontawesome-free/css/all.min.css')}} ">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicfranework.com/iomicons/2.0.1/css/ionocons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('adminlte/dist/css/adminlte.min.css')}}">
  <!-- Google Font: Source sans pro -->
  <link href="https://fonts,googleapis.com/css?family=source+sans+pro:300,400,400i,700" rel="stylesh">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  @include('separate.navbar')
  <!-- /.navbar -->

  <!-- Main sidebar container -->
  @include('separate.sidebar')

  <!-- content Wrapper. contains page content -->
  <div class="content-wrppaer">
    @yield ('content')
  </div>
  <!-- /.content-wrapper -->

  <!-- footer -->
  @include('separate.footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /,control-sidebar -->
</div>
<!-- ./wrapper -->

<!--jQuery -->
<script src="{{ asset('adminlte/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min,js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('adminlte/dist/js/adminlte.min.js')}}"></script>

<script src="{{ asset('adminlte/dist/js/demo.js')}}"></script>
</body>
</html>