<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<head>
    <title>Shop UI | Unify - Responsive Website Template</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">

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

    <!--=== Slider ===-->
        @include('interface_frontend.master_frontend.element.slider')
    <!--=== End Slider ===-->

    <!--=== Product Content ===-->
    <div class="container content-md">
        <!--=== Illustration v1 ===-->
            @include('interface_frontend.master_frontend.element.promo')
        <!--=== End Illustration v1 ===-->

        <div class="heading heading-v1 margin-bottom-20">
            <h2>Featured products</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed odio elit, ultrices vel cursus sed, placerat ut leo. Phasellus in magna erat. Etiam gravida convallis augue non tincidunt. Nunc lobortis dapibus neque quis lacinia. Nam dapibus tellus sit amet odio venenatis</p>
        </div>

            <!--=== Illustration v2 ===-->
                @include('interface_frontend.master_frontend.shop.featured') 
            <!--=== End Illustration v2 ===-->

                <!--=== Illustration v3 ===-->
                    @include('interface_frontend.master_frontend.element.illustration')
                <!--=== End Illustration v3 ===-->

                    <div class="heading heading-v1 margin-bottom-40">
                        <h2>Latest products</h2>
                    </div>

                        <!--=== Illustration v2 ===-->
                            @include('interface_frontend.master_frontend.shop.quick_review') 
                        <!--=== End Illustration v2 ===-->
    </div>
    <!--=== End Product Content ===-->

    <!--=== Twitter-Block ===-->
        @include('interface_frontend.master_frontend.element.twitter')
    <!--=== End Twitter-Block ===-->

    <div class="container">
            <!--=== Product Service ===-->
                @include('interface_frontend.master_frontend.element.service')
            <!--=== End Product Service ===-->
        
                <!--=== Illustration v4 ===-->
                    @include('interface_frontend.master_frontend.shop.category')
                <!--=== End Illustration v4 ===-->
    </div><!--/end cotnainer-->

    <!--=== Collection Banner ===-->
        @include('interface_frontend.master_frontend.element.collection')
    <!--=== End Collection Banner ===-->

        <!--=== Sponsors ===-->
                @include('interface_frontend.master_frontend.element.sponsors')
        <!--=== End Sponsors ===-->

            <!--=== Shop Suvbscribe ===-->
                @include('interface_frontned.master_frontend.shop.subscribe')
            <!--=== End Shop Suvbscribe ===-->

    <!--=== Footer v4 ===-->
    @include('interface_frontend.master_frontend.element.footer')
    <!--=== End Footer v4 ===-->
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
        App.init();
        App.initScrollBar();
        App.initParallaxBg();
        OwlCarousel.initOwlCarousel();
        RevolutionSlider.initRSfullWidth();
});
</script>
<!--[if lt IE 9]>
    <script src="assets/plugins/respond.js"></script>
    <script src="assets/plugins/html5shiv.js"></script>
    <script src="assets/js/plugins/placeholder-IE-fixes.js"></script>
<![endif]-->

</body>
</html> 