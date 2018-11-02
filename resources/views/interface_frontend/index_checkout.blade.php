<!DOCTYPE html>
<html lang="en">
<head>
    <title>Check Out | Unify - Responsive Website Template</title>
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
    <link rel="stylesheet" href="{{asset('FrontEnd')}}/assets/plugins/jquery-steps/css/custom-jquery.steps.css">
    <link rel="stylesheet" href="{{asset('FrontEnd')}}/assets/plugins/scrollbar/css/jquery.mCustomScrollbar.css">
    <!-- CSS Customization -->
    <link rel="stylesheet" href="{{asset('FrontEnd')}}/assets/css/custom.css">
</head>	
<body class="header-fixed">
<div class="wrapper">
    <!--=== Header v5 ===-->   
    @include('interface_frontend.master_frontend.element.header')
        <!--=== End Header v5 ===-->

    <!--=== Breadcrumbs v4 ===-->
    <div class="breadcrumbs-v4">
        <div class="container">
            <span class="page-name">Check Out</span>
            <h1>Maecenas <span class="shop-green">enim</span> sapien</h1>
            <ul class="breadcrumb-v4-in">
                <li><a href="index.html">Home</a></li>
                <li><a href="">Product</a></li>
                <li class="active">Shopping Cart</li>
            </ul>
        </div><!--/end container-->
    </div> 
    <!--=== End Breadcrumbs v4 ===-->

    <!--=== Content Medium Part ===-->
    <div class="content-md margin-bottom-30">
        @yield('content')
    </div>
    <!--=== End Content Medium Part ===-->     

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
<script src="{{asset('FrontEnd')}}/assets/plugins/jquery-steps/build/jquery.steps.js"></script>
<script src="{{asset('FrontEnd')}}/assets/plugins/scrollbar/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="{{asset('FrontEnd')}}/assets/plugins/sky-forms-pro/skyforms/js/jquery.validate.min.js"></script>
<!-- JS Customization -->
<script src="{{asset('FrontEnd')}}/assets/js/custom.js"></script>
<!-- JS Page Level -->           
<script src="{{asset('FrontEnd')}}/assets/js/shop.app.js"></script>
<script src="{{asset('FrontEnd')}}/assets/js/forms/page_login.js"></script>
<script src="{{asset('FrontEnd')}}/assets/js/plugins/stepWizard.js"></script>
<script src="{{asset('FrontEnd')}}/assets/js/forms/product-quantity.js"></script>
<!-- Cart Ajax -->
<script src="{{asset('FrontEnd')}}/cart/cart.js"></script>
<script> var frontend = "{{asset('FrontEnd')}}"; </script>
<script>
    jQuery(document).ready(function() {
        App.init();
        Login.initLogin();
        App.initScrollBar();        
        StepWizard.initStepWizard();
});

</script>

</body>
</html> 