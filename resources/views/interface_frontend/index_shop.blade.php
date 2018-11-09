<!DOCTYPE html>
<html lang="en">
<head>
    <title class="tittle"></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="address" id="address" content="">
    <meta name="phone" id="phone" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="">
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
    </div><!--/end container-->
    <!--=== End Content Part ===-->

            <!--=== Shop Suvbscribe ===-->
            @include('interface_frontend.master_frontend.shop.subscribe')
            <!--=== End Shop Suvbscribe ===-->


</div><!--/wrapper-->

<!-- JS Global Compulsory -->
<script src="{{asset('FrontEnd')}}/assets/plugins/jquery/jquery.min.js"></script>
<script src="{{asset('FrontEnd')}}/assets/plugins/jquery/jquery-migrate.min.js"></script>
<script src="{{asset('FrontEnd')}}/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- JS Implementing Plugins -->
<script src="{{asset('FrontEnd')}}/assets/plugins/back-to-top.js"></script>
<script src="{{asset('FrontEnd')}}/assets/plugins/smoothScroll.js"></script>
<script src="{{asset('FrontEnd')}}/assets/plugins/noUiSlider/jquery.nouislider.full.min.js"></script>
<script src="{{asset('FrontEnd')}}/assets/plugins/scrollbar/js/jquery.mCustomScrollbar.concat.min.js"></script>
<!-- Master Slider -->
<script src="{{asset('FrontEnd')}}/assets/plugins/master-slider/quick-start/masterslider/masterslider.min.js"></script>
<script src="{{asset('FrontEnd')}}/assets/plugins/master-slider/quick-start/masterslider/jquery.easing.min.js"></script>
<!-- JS Customization -->
<script src="{{asset('FrontEnd')}}/assets/js/custom.js"></script>
<!-- JS Page Level -->
<script src="{{asset('FrontEnd')}}/assets/js/shop.app.js"></script>
<script src="{{asset('FrontEnd')}}/assets/js/plugins/mouse-wheel.js"></script>
<script type="text/javascript">
$(document).ready(function () {
  $.ajax({
    type: 'GET',
    url: '{{ URL::route("settingweb") }}',
    data: {
      _method: 'GET'
    },
  }).done(function (data) {
    console.log(data);
    $(".tittle").text(data.tittle);
    $("meta[name='address']").attr("content", data.address);
    $("meta[name='phone']").attr("content", data.phone);
    $(".address").text(data.address);
    $(".phone").text(data.phone);
    $("link[rel=icon]").attr("href","{{asset('backend/img')}}"/+ data.logo);
    $(".imageecommerce").attr("src","{{asset('backend/img')}}"/+ data.logo);
  }).fail(function (data) {
    console.log(data);
  })
});
</script>
<!--=== Footer v4 ===-->
@include('interface_frontend.master_frontend.element.footer')
    <!--=== End Footer v4 ===-->
@yield('add_footer')
</body>
</html>
