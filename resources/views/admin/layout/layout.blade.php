<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>@yield('title') </title>

    <!-- Bootstrap -->
    <link href="{{asset('admin-theme/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('/admin-theme/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('admin-theme/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{asset('admin-theme/vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{asset('admin-theme/vendors/jqvmap/dist/jqvmap.min.css')}}" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{asset('admin-theme/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('admin-theme/build/css/custom.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin-theme/build/css/custom.css')}}" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
     @include('admin.layout.sidebar')
     @include('admin.layout.header')

     <div class="right_col" role="main">
          @yield('content')
        </div>
 
      </div>
    </div>

    <!-- jQuery -->
    <script src="{{asset('admin-theme/vendors/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('admin-theme/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset('admin-theme/vendors/fastclick/lib/fastclick.js')}}"></script>
    <!-- NProgress -->
    <script src="{{asset('admin-theme/vendors/nprogress/nprogress.js')}}"></script>
    <!-- Chart.js -->
    <script src="{{asset('admin-theme/vendors/Chart.js/dist/Chart.min.js')}}"></script>
    <!-- gauge.js -->
    <script src="{{asset('admin-theme/vendors/gauge.js/dist/gauge.min.js')}}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{asset('admin-theme/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
    <!-- iCheck -->
    <script src="{{asset('admin-theme/vendors/iCheck/icheck.min.js')}}"></script>
    <!-- Skycons -->
    <script src="{{asset('admin-theme/vendors/skycons/skycons.js')}}"></script>
    <!-- Flot -->
    <script src="{{asset('admin-theme/vendors/Flot/jquery.flot.js')}}"></script>
    <script src="{{asset('admin-theme/vendors/Flot/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('admin-theme/vendors/Flot/jquery.flot.time.js')}}"></script>
    <script src="{{asset('admin-theme/vendors/Flot/jquery.flot.stack.js')}}"></script>
    <script src="{{asset('admin-theme/vendors/Flot/jquery.flot.resize.js')}}"></script>
    <!-- Flot plugins -->
    <script src="{{asset('admin-theme/vendors/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
    <script src="{{asset('admin-theme/vendors/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
    <script src="{{asset('admin-theme/vendors/flot.curvedlines/curvedLines.js')}}"></script>
    <!-- DateJS -->
    <script src="{{asset('admin-theme/vendors/DateJS/build/date.js')}}"></script>
    <!-- JQVMap -->
    <script src="{{asset('admin-theme/vendors/jqvmap/dist/jquery.vmap.js')}}"></script>
    <script src="{{asset('admin-theme/vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
    <script src="{{asset('admin-theme/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{asset('admin-theme/vendors/moment/min/moment.min.js')}}"></script>
    <script src="{{asset('admin-theme/vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{asset('admin-theme/build/js/custom.min.js')}}"></script>
    @stack('footer-script')
  </body>
</html>
