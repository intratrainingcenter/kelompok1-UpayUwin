<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Product List | Unify - Responsive Website Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="shortcut icon" href="favicon.ico">
    <link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin'>
    <link rel="stylesheet" href="{{asset('FrontEnd')}}/assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('FrontEnd')}}/assets/css/shop.style.css">
    <link rel="stylesheet" href="{{asset('FrontEnd')}}/assets/css/headers/header-v5.css">
    <link rel="stylesheet" href="{{asset('FrontEnd')}}/assets/css/footers/footer-v4.css">
    <link rel="stylesheet" href="{{asset('FrontEnd')}}/assets/plugins/animate.css">    
    <link rel="stylesheet" href="{{asset('FrontEnd')}}/assets/plugins/line-icons/line-icons.css">
    <link rel="stylesheet" href="{{asset('FrontEnd')}}/assets/plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('FrontEnd')}}/assets/plugins/noUiSlider/jquery.nouislider.css">
    <link rel="stylesheet" href="{{asset('FrontEnd')}}/assets/plugins/scrollbar/css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="{{asset('FrontEnd')}}/assets/css/custom.css">
    @yield('add_header')
</head> 
<body class="header-fixed">
<div class="wrapper">
    @include('interface_frontend.master_frontend.element.header')
        <div class="breadcrumbs-v4">
            <div class="container">
                <span class="page-name">Product Filter Page</span>
                <h1>Maecenas <span class="shop-green">enim</span> sapien</h1>
                <ul class="breadcrumb-v4-in">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li><a href="{{url('/item')}}">Item</a></li>
                    <li class="active" id="active"></li>
                </ul>
            </div>
        </div> 
    <div class="content container">
        @yield('content')
    </div>
        @include('interface_frontend.master_frontend.shop.subscribe')
</div>
<script src="{{asset('FrontEnd')}}/assets/plugins/jquery/jquery.min.js"></script>
<script src="{{asset('FrontEnd')}}/assets/plugins/jquery/jquery-migrate.min.js"></script>
<script src="{{asset('FrontEnd')}}/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="{{asset('FrontEnd')}}/assets/plugins/back-to-top.js"></script>
<script src="{{asset('FrontEnd')}}/assets/plugins/smoothScroll.js"></script>
<script src="{{asset('FrontEnd')}}/assets/plugins/noUiSlider/jquery.nouislider.full.min.js"></script>
<script src="{{asset('FrontEnd')}}/assets/plugins/scrollbar/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="{{asset('FrontEnd')}}/assets/plugins/master-slider/quick-start/masterslider/masterslider.min.js"></script>
<script src="{{asset('FrontEnd')}}/assets/plugins/master-slider/quick-start/masterslider/jquery.easing.min.js"></script>
<script src="{{asset('FrontEnd')}}/assets/js/custom.js"></script>
<script src="{{asset('FrontEnd')}}/assets/js/shop.app.js"></script>
<script src="{{asset('FrontEnd')}}/assets/js/plugins/mouse-wheel.js"></script>
@include('interface_frontend.master_frontend.element.footer')
@yield('add_footer')
</body>
</html> 