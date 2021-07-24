

<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{URL::to('assets2/images/favicon.png')}}">
    <title>SYSTEM LARAVEL</title>
    <!-- Custom CSS -->
    <link href="{{URL::to('assets2/libs/flot/css/float-chart.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{URL::to('assets2/libs/jquery-steps/jquery.steps.css')}}" rel="stylesheet">
    <link href="{{URL::to('assets2/libs/jquery-steps/steps.css')}}" rel="stylesheet">
    <link href="{{URL::to('dist/css/style.min.css')}}" rel="stylesheet">

</head>

<body>
    
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div id="main-wrapper">
        <!-- navbar -->
        @include('header.navbar')
        <!-- menu sidebar -->
        @yield('menu')
        @yield('contant')
        <footer class="footer text-center">
            All Rights Reserved by Soeng Souy<a href="https://soengsouy.com">KH</a>.
        </footer>
    </div>
    <!-- All Jquery -->
    <!-- ============================================================== -->

    <script src="{{URL::to('assets2/libs/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{URL::to('assets2/libs/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{URL::to('assets2/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{URL::to('assets2/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')}}"></script>
    <script src="{{URL::to('assets2/extra-libs/sparkline/sparkline.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{URL::to('dist/js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{URL::to('dist/js/sidebarmenu.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{URL::to('dist/js/custom.min.js')}}"></script>
    <!--This page JavaScript -->
    <!-- <script src="../../dist/js/pages/dashboards/dashboard1.js"></script> -->
    <!-- Charts js Files -->
    <script src="{{URL::to('assets2/libs/flot/excanvas.js')}}"></script>
    <script src="{{URL::to('assets2/libs/flot/jquery.flot.js')}}"></script>
    <script src="{{URL::to('assets2/libs/flot/jquery.flot.pie.js')}}"></script>
    <script src="{{URL::to('assets2/libs/flot/jquery.flot.time.js')}}"></script>
    <script src="{{URL::to('assets2/libs/flot/jquery.flot.stack.js')}}"></script>
    <script src="{{URL::to('assets2/libs/flot/jquery.flot.crosshair.js')}}"></script>
    <script src="{{URL::to('assets2/libs/flot.tooltip/js/jquery.flot.tooltip.min.js')}}"></script>
    <script src="{{URL::to('dist/js/pages/chart/chart-page-init.js')}}"></script>

</body>

</html>