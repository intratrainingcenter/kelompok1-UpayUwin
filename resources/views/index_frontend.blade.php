<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>Fashion Hub Ecommerce Category Bootstrap Responsive Website Template| Home :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <meta name="keywords" content="Fashion Hub Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
        <!-- Custom Theme files -->
		<link href="{{asset('FrontEnd1')}}/css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
		<link rel="stylesheet" href="{{asset('FrontEnd1')}}/css/owl.carousel.min.css">
    	<!-- Owl-Carousel-CSS -->
		<!-- shop css -->
		<link href="{{asset('FrontEnd1')}}/css/shop.css" type="text/css" rel="stylesheet" media="all">
		<link href="{{asset('FrontEnd1')}}/css/checkout.css" type="text/css" rel="stylesheet" media="all">
		<link href="{{asset('FrontEnd1')}}/css/style.css" type="text/css" rel="stylesheet" media="all">
		<!-- font-awesome icons -->
		<link href="{{asset('FrontEnd1')}}/css/fontawesome-all.min.css" rel="stylesheet">
		<!-- //Custom Theme files -->
		<!-- easy-responsive-tabs css -->
		<link rel="stylesheet" href="{{asset('FrontEnd1')}}/css/easy-responsive-tabs.css" type="text/css" media="all" />
		<!-- online-fonts -->
		<link href="{{asset('FrontEnd1')}}/font/font-googleapis.css" rel="stylesheet">
		<link href="{{asset('FrontEnd1')}}/font/font-googleapis.min.css" rel="stylesheet">
		<!-- //online-fonts -->
	
</head>
<body>
	<!-- header -->
    @include('master_frontend.header')
		
    <!-- product tabs -->
    @yield('content')
    <!-- //product tabs -->
		
    <!-- footer -->
    @include('master_frontend.footer')
    <!-- //footer -->
		<!-- sign up Modal -->
			@include('master_frontend.signup')
		<!-- //signup modal -->
    <!-- signin Modal -->
        @include('master_frontend.signin')
    <!-- signin Modal -->
        <!-- user Modal -->
			@include('master_frontend.detail')
		<!-- //user modal -->
    <!-- js -->
    <script src="{{asset('FrontEnd1')}}/js/jquery-2.2.3.min.js"></script>
    <script>
        $(document).ready(function () {
            <!-- $("#myModal_btn").modal(); -->
        });
    </script>
    <!-- //script for show signin and signup modal -->
    
    @include('master_frontend.livechat.livechat')
    <!-- smooth dropdown -->
    <script>
        $(document).ready(function () {
            $('ul li.dropdown').hover(function () {
                $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(200);
            }, function () {
                $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(200);
            });
        });
    </script>
    <!-- //smooth dropdown -->
    <!-- script for password match -->
    <script>
        window.onload = function () {
            document.getElementById("password1").onchange = validatePassword;
            document.getElementById("password2").onchange = validatePassword;
        }

        function validatePassword() {
            var pass2 = document.getElementById("password2").value;
            var pass1 = document.getElementById("password1").value;
            if (pass1 != pass2)
                document.getElementById("password2").setCustomValidity("Passwords Don't Match");
            else
                document.getElementById("password2").setCustomValidity('');
            //empty string means no validation error
        }
    </script>
    <!-- script for password match -->
    <!-- Banner Responsiveslides -->
    <script src="{{asset('FrontEnd1')}}/js/responsiveslides.min.js"></script>
    <script>
        $(function () {
            // Slideshow 4
            $("#slider3").responsiveSlides({
                auto: false,
                pager: true,
                nav: false,
                speed: 500,
                namespace: "callbacks",
                before: function () {
                    $('.events').append("<li>before event fired.</li>");
                },
                after: function () {
                    $('.events').append("<li>after event fired.</li>");
                }
            });

        });
    </script>
    <!-- // Banner Responsiveslides -->
    <!-- Product slider Owl-Carousel-JavaScript -->
    <script src="{{asset('FrontEnd1')}}/js/owl.carousel.js"></script>
    <script>
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            items: 4,
            loop: false,
            margin: 10,
            autoplay: false,
            autoplayTimeout: 5000,
            autoplayHoverPause: false,
            responsive: {
                320: {
                    items: 1,
                },
                568: {
                    items: 2,
                },
                991: {
                    items: 3,
                },
                1050: {
                    items: 4
                }
            }
        });
    </script>
    <!-- //Product slider Owl-Carousel-JavaScript -->
    <!-- cart-js -->
    <script src="{{asset('FrontEnd1')}}/js/minicart.js">
    </script>
    <script>
        hub.render();

        hub.cart.on('new_checkout', function (evt) {
            var items, len, i;

            if (this.subtotal() > 0) {
                items = this.items();

                for (i = 0, len = items.length; i < len; i++) {}
            }
        });
    </script>
    <!-- //cart-js -->
    <!-- start-smooth-scrolling -->
    <script src="{{asset('FrontEnd1')}}/js/move-top.js"></script>
    <script src="{{asset('FrontEnd1')}}/js/easing.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();

                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- //end-smooth-scrolling -->
    <!-- smooth-scrolling-of-move-up -->
    <script>
        $(document).ready(function () {
            /*
            var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear' 
            };
            */

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <script src="{{asset('FrontEnd1')}}/js/SmoothScroll.min.js"></script>
    <!-- //smooth-scrolling-of-move-up -->
    <!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{asset('FrontEnd1')}}/js/bootstrap.js"></script>
</body>

</html>