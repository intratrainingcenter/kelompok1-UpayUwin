<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html oncontextmenu="return false" lang="zxx">
<head>
    <title class="tittle"></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <meta name="address" id="address" content="">
    <meta name="phone" id="phone" content="">
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
		<link href="//fonts.googleapis.com/css?family=Elsie+Swash+Caps:400,900" rel="stylesheet">
		<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
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
    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModal1" aria-hidden="true">
        <div class="agilemodal-dialog modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body  pt-3 pb-5 px-sm-5">
                    <div class="row">
                        <div class="col-md-6 align-self-center">
                            <img src="{{asset('FrontEnd1')}}/images/p3.png" class="img-fluid" alt="login_image" />
                        </div>
                        <div class="col-md-6">
                            <form action="{{ route('login') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Email</label>
                                    <input type="email" class="form-control" placeholder="" name="email" required="">
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Password</label>
                                    <input type="password" class="form-control" placeholder=" " name="password" required="">
                                </div>
                                <div class="right-w3l">
                                    <input type="submit" class="form-control" value="Login">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- signin Modal -->
    <!-- js -->
    <script src="{{asset('FrontEnd1')}}/js/jquery-2.2.3.min.js"></script>
    <script>
        $(document).ready(function () {
            <!-- $("#myModal_btn").modal(); -->
        });
    </script>
    <!-- //script for show signin and signup modal -->
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
    <script type="text/javascript">
    $(document).ready(function () {
      $.ajax({
        type: 'GET',
        url: '{{ URL::route("settingweb") }}',
        data: {
          _method: 'GET'
        },
      }).done(function (data) {
        console.log("data");
        $(".tittle").text(data.tittle);
        $("meta[name='address']").attr("content", data.address);
        $("meta[name='phone']").attr("content", data.phone);
        $("link[rel=icon]").attr("href","{{asset('backend/img')}}/"+ data.logo);
      }).fail(function (data) {
        console.log(data);
      })
    });
    </script>
</body>

</html>
