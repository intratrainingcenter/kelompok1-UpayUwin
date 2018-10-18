<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<head>
    <title>Product Details | Unify - Responsive Website Template</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('FrontEnd')}}/favicon.ico">

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
    <link rel="stylesheet" href="{{asset('FrontEnd')}}/assets/plugins/sky-forms-pro/skyforms/css/sky-forms.css">
    <link rel="stylesheet" href="{{asset('FrontEnd')}}/assets/plugins/sky-forms-pro/skyforms/custom/custom-sky-forms.css">
    <link rel="stylesheet" href="{{asset('FrontEnd')}}/assets/plugins/master-slider/quick-start/masterslider/style/masterslider.css">
    <link rel='stylesheet' href="{{asset('FrontEnd')}}/assets/plugins/master-slider/quick-start/masterslider/skins/default/style.css">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="{{asset('FrontEnd')}}/assets/css/custom.css">
</head>

<body class="header-fixed">
    <div class="wrapper">
        <!--=== Header v5 ===-->
        @include('interface_frontend.master_frontend.element.header')
        <!--=== End Header v5 ===-->

        <!--=== Shop Product ===-->
            @yield('content')
        <!--=== End Shop Product ===-->

            <!--=== Shop Suvbscribe ===-->
            @include('interface_frontend.master_frontend.shop.subscribe')
            <!--=== End Shop Suvbscribe ===-->

        <!--=== Footer v4 ===-->
        @include('interface_frontend.master_frontend.element.footer')
        <!--=== End Footer v4 ===-->
    </div>
    <!--/wrapper-->

    <!-- JS Global Compulsory -->
    <script src="{{asset('FrontEnd')}}/assets/plugins/jquery/jquery.min.js"></script>
    <script src="{{asset('FrontEnd')}}/assets/plugins/jquery/jquery-migrate.min.js"></script>
    <script src="{{asset('FrontEnd')}}/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- JS Implementing Plugins -->
    <script src="{{asset('FrontEnd')}}/assets/plugins/back-to-top.js"></script>
    <script src="{{asset('FrontEnd')}}/assets/plugins/smoothScroll.js"></script>
    <script src="{{asset('FrontEnd')}}/assets/plugins/owl-carousel/owl-carousel/owl.carousel.js"></script>
    <script src="{{asset('FrontEnd')}}/assets/plugins/scrollbar/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- Master Slider -->
    <script src="{{asset('FrontEnd')}}/assets/plugins/master-slider/quick-start/masterslider/masterslider.min.js"></script>
    <script src="{{asset('FrontEnd')}}/assets/plugins/master-slider/quick-start/masterslider/jquery.easing.min.js"></script>
    <!-- JS Customization -->
    <script src="{{asset('FrontEnd')}}/assets/js/custom.js"></script>
    <!-- JS Page Level -->
    <script src="{{asset('FrontEnd')}}/assets/js/shop.app.js"></script>
    <script src="{{asset('FrontEnd')}}/assets/js/plugins/owl-carousel.js"></script>
    <script src="{{asset('FrontEnd')}}/assets/js/plugins/master-slider.js"></script>
    <script src="{{asset('FrontEnd')}}/assets/js/forms/product-quantity.js"></script>
    <script>
        jQuery(document).ready(function () {
            App.init();
            App.initScrollBar();
            OwlCarousel.initOwlCarousel();
            MasterSliderShowcase2.initMasterSliderShowcase2();
        });

    </script>

    <!--[if lt IE 9]>
    <script src="assets/plugins/respond.js"></script>
    <script src="assets/plugins/html5shiv.js"></script>
    <script src="assets/js/plugins/placeholder-IE-fixes.js"></script>    
<![endif]-->

</body>

</html>
