<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>{{config('app.name')}} </title>




  

  <!-- Font Awesome Icons -->
  asset
  <link rel="stylesheet" href="{{ asset('plugins/font-awesome/css/font-awesome.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }} ">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
    
  @yield('nav')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
    @yield('mainsidebar')

  <!-- Content Wrapper. Contains page content -->
 
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
@yield('content')
  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-sm-none d-md-block">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2015 - {{ date('Y') }} <a href="seokenya.co.ke">SEO KENYA</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->




<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="  {{asset('plugins/jquery/jquery.min.js ')}}"></script>
<!-- Bootstrap -->
<script src=" {{asset('plugins/bootstrap/js/bootstrap.bundle.min.js ')}}"></script>
<!-- AdminLTE App -->
<script src=" {{asset('dist/js/adminlte.js ')}}"></script>

<!-- OPTIONAL SCRIPTS -->
<script src=" {{asset('dist/js/demo.js ')}}"></script>

<!-- PAGE PLUGINS -->
<!-- SparkLine -->
<script src=" {{asset('plugins/sparkline/jquery.sparkline.min.js ')}}"></script>
<!-- jVectorMap -->
<script src=" {{asset('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js ')}}"></script>
<script src=" {{asset('plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<!-- SlimScroll 1.3.0 -->
<script src=" {{asset('plugins/slimScroll/jquery.slimscroll.min.js ')}}"></script>
<!-- ChartJS 1.0.2 -->
<script src=" {{asset('plugins/chartjs-old/Chart.min.js ')}}"></script>

<!-- PAGE SCRIPTS -->
<script src=" {{asset('dist/js/pages/dashboard2.js ')}}"></script>

<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE -->
<script src="{{ asset('dist/js/adminlte.js') }}"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('dist/js/demo.js') }}"></script>
<script src="{{ asset('dist/js/pages/dashboard3.js') }}"></script>

</body>
</html>
