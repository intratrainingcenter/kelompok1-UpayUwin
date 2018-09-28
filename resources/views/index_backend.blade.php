<!DOCTYPE html>
<html oncontextmenu="return false" dir="ltr" lang="en">
    {{-- oncontextmenu="return false" for disable inspect element with mouse --}}
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('template/backend/matrix-admin-bt4/assets/images/favicon.png')}}">
    <title>Matrix Template - The Ultimate Multipurpose admin template</title>
    <!-- Custom CSS -->
    <link href="{{asset('template/backend/matrix-admin-bt4/assets/libs/flot/css/float-chart.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('template/backend/matrix-admin-bt4/dist/css/style.min.css')}}" rel="stylesheet">
    @yield('css')
</head>

<body oncontextmenu="return false" onkeydown="return false;" onmousedown="return false;">
   {{-- oncontextmenu="return false" onkeydown="return false;" onmousedown="return false;" for disable inspect element with mouse --}}
   
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
   
    <div id="main-wrapper">
       
        <header class="topbar" data-navbarbg="skin5">
            @include('master_backend.topnav')
        </header>
    
        <aside class="left-sidebar" data-sidebarbg="skin5">
            @include('master_backend.sidebar')
        </aside>
       
        <div class="page-wrapper">
          
             @yield('content')
          
            <footer class="footer text-center">
                All Rights Reserved by Matrix-admin. Designed and Developed by <a href="https://wrappixel.com">WrapPixel</a>.
            </footer>
            
        </div>

    </div>
   
    @yield('js')

    <script src="{{asset('template/backend/matrix-admin-bt4/assets/libs/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset('template/backend/matrix-admin-bt4/assets/libs/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('template/backend/matrix-admin-bt4/assets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('template/backend/matrix-admin-bt4/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')}}"></script>
    <script src="{{asset('template/backend/matrix-admin-bt4/assets/extra-libs/sparkline/sparkline.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{asset('template/backend/matrix-admin-bt4/dist/js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{asset('template/backend/matrix-admin-bt4/dist/js/sidebarmenu.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{asset('template/backend/matrix-admin-bt4/dist/js/custom.min.js')}}"></script>
    <!--This page JavaScript -->
    <!-- <script src="../../dist/js/pages/dashboards/dashboard1.js"></script> -->
    <!-- Charts js Files -->
    <script src="{{asset('template/backend/matrix-admin-bt4/assets/libs/flot/excanvas.js')}}"></script>
    <script src="{{asset('template/backend/matrix-admin-bt4/assets/libs/flot/jquery.flot.js')}}"></script>
    <script src="{{asset('template/backend/matrix-admin-bt4/assets/libs/flot/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('template/backend/matrix-admin-bt4/assets/libs/flot/jquery.flot.time.js')}}"></script>
    <script src="{{asset('template/backend/matrix-admin-bt4/assets/libs/flot/jquery.flot.stack.js')}}"></script>
    <script src="{{asset('template/backend/matrix-admin-bt4/assets/libs/flot/jquery.flot.crosshair.js')}}"></script>
    <script src="{{asset('template/backend/matrix-admin-bt4/assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js')}}"></script>
    <script src="{{asset('matrix-admin-bt4/dist/js/pages/chart/chart-page-init.js')}}"></script>

</body>

</html>