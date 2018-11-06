<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <title class="tittle"></title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="address" id="address" content="">
    <meta name="phone" id="phone" content="">

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="16x16" href="">

    <!-- Web Fonts -->
    <link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin'>
    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="{{asset('FrontEnd')}}/assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('FrontEnd')}}/assets/css/shop.style.css">

    <!-- CSS Header and Footer -->
    <link rel="stylesheet" href="{{asset('FrontEnd')}}/assets/css/headers/header-v5.css">
    <link rel="stylesheet" href="{{asset('FrontEnd')}}/assets/css/footers/footer-v4.css">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="{{asset('FrontEnd')}}/assets/plugins/animate.css">
    <link rel="stylesheet" href="{{asset('FrontEnd')}}/assets/plugins/line-icons/line-icons.css">
    <link rel="stylesheet" href="{{asset('FrontEnd')}}/assets/plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('FrontEnd')}}/assets/plugins/scrollbar/css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="{{asset('FrontEnd')}}/assets/plugins/owl-carousel/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="{{asset('FrontEnd')}}/assets/plugins/revolution-slider/rs-plugin/css/settings.css">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="{{asset('FrontEnd')}}/assets/css/custom.css">
</head>

<body class="header-fixed">
<div class="wrapper">
        <!--=== Header v5 ===-->
            @include('interface_frontend.master_frontend.element.header')
        <!--=== End Header v5 ===-->

            <!-- Content -->
                @yield('content')
            <!-- End Content -->


</div><!--/wrapper-->

<!-- JS Global Compulsory -->
<script src="{{asset('FrontEnd')}}/assets/plugins/jquery/jquery.min.js"></script>
<script src="{{asset('FrontEnd')}}/assets/plugins/jquery/jquery-migrate.min.js"></script>
<script src="{{asset('FrontEnd')}}/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- JS Implementing Plugins -->
<script src="{{asset('FrontEnd')}}/assets/plugins/back-to-top.js"></script>
<script src="{{asset('FrontEnd')}}/assets/plugins/smoothScroll.js"></script>
<script src="{{asset('FrontEnd')}}/assets/plugins/jquery.parallax.js"></script>
<script src="{{asset('FrontEnd')}}/assets/plugins/owl-carousel/owl-carousel/owl.carousel.js"></script>
<script src="{{asset('FrontEnd')}}/assets/plugins/scrollbar/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="{{asset('FrontEnd')}}/assets/plugins/revolution-slider/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="{{asset('FrontEnd')}}/assets/plugins/revolution-slider/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<!-- JS Customization -->
<script src="{{asset('FrontEnd')}}/assets/js/custom.js"></script>
<!-- JS Page Level -->
<script src="{{asset('FrontEnd')}}/assets/js/shop.app.js"></script>
<script src="{{asset('FrontEnd')}}/assets/js/plugins/owl-carousel.js"></script>
<script src="{{asset('FrontEnd')}}/assets/js/plugins/revolution-slider.js"></script>
<script>
    jQuery(document).ready(function() {

        console.log( "ready!" );
        App.init();
        App.initScrollBar();
        App.initParallaxBg();
        OwlCarousel.initOwlCarousel();
        RevolutionSlider.initRSfullWidth();
});
</script>
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
    $("link[rel=icon]").attr("href","{{asset('backend/img')}}/"+ data.logo);
    $(".imageecommerce").attr("src","{{asset('backend/img')}}/"+ data.logo);
  }).fail(function (data) {
    console.log(data);
  })
});
</script>
        <!--=== Footer v4 ===-->
        @include('interface_frontend.master_frontend.element.footer')
        <!--=== End Footer v4 ===-->

</body>
</html>
