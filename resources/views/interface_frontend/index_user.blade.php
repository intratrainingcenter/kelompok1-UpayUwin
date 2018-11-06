@if (Auth::check())
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Profile Settings | Unify - Responsive Website Template</title>
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
	<link rel="stylesheet" href="{{asset('FrontEnd/log')}}/assets/plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{asset('FrontEnd/log')}}/assets/css/style.css">
	<!-- CSS Header and Footer -->
	<link rel="stylesheet" href="{{asset('FrontEnd/log')}}/assets/css/headers/header-default.css">
	<link rel="stylesheet" href="{{asset('FrontEnd/log')}}/assets/css/footers/footer-v1.css">
	<!-- CSS Implementing Plugins -->
	<link rel="stylesheet" href="{{asset('FrontEnd/log')}}/assets/plugins/animate.css">
	<link rel="stylesheet" href="{{asset('FrontEnd/log')}}/assets/plugins/line-icons/line-icons.css">
	<link rel="stylesheet" href="{{asset('FrontEnd/log')}}/assets/plugins/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{asset('FrontEnd/log')}}/assets/plugins/scrollbar/css/jquery.mCustomScrollbar.css">
	<link rel="stylesheet" href="{{asset('FrontEnd/log')}}/assets/plugins/sky-forms-pro/skyforms/css/sky-forms.css">
	<link rel="stylesheet" href="{{asset('FrontEnd/log')}}/assets/plugins/sky-forms-pro/skyforms/custom/custom-sky-forms.css">
	<!-- CSS Page Style -->
	<link rel="stylesheet" href="{{asset('FrontEnd/log')}}/assets/css/pages/profile.css">
	<!-- CSS Theme -->
	<link rel="stylesheet" href="{{asset('FrontEnd/log')}}/assets/css/theme-colors/default.css" id="style_color">
	<link rel="stylesheet" href="{{asset('FrontEnd/log')}}/assets/css/theme-skins/dark.css">
	<!-- CSS Customization -->
	<link rel="stylesheet" href="{{asset('FrontEnd/log')}}/assets/css/custom.css">
</head>

<body>
	<div class="wrapper">
		<!--=== Header ===-->
        @include('interface_frontend.master_frontend.user.header')
		<!--=== End Header ===-->
        <div class="container content profile">
			<div class="row">
				<!--Left Sidebar-->
				<div class="col-md-3 md-margin-bottom-40">
					<img class="img-responsive profile-img margin-bottom-20" src="{{asset('images')}}/anonymous-user.png" alt="">

					<ul class="list-group sidebar-nav-v1 margin-bottom-40" id="sidebar-nav-1">
						<li class="list-group-item {{ Request::is('setting') ? 'active' : '' }}">
							<a href="{{route('setting')}}"><i class="fa fa-user"></i> Profile</a>
						</li>
						<li class="list-group-item {{ Request::is('frontend/chat') ? 'active' : '' }}">
							<a href="{{route('chat')}}"><i class="fa fa-comments-o"></i> Customer Service</a>
						</li>
						<li class="list-group-item {{ Request::is('frontend/history') ? 'active' : '' }}">
							<a href="{{route('history')}}"><i class="fa fa-history"></i> History</a>
						</li>
						<li class="list-group-item">
							<a href="page_profile_history.html"><i class="fa fa-power-off"></i> Logout</a>
						</li>
					</ul>

					<hr>

					<div class="margin-bottom-50"></div>

					<!--Datepicker-->
					<form action="#" id="sky-form2" class="sky-form">
						<div id="inline-start"></div>
					</form>
					<!--End Datepicker-->
				</div>
				<!--End Left Sidebar-->

					<!-- Profile Content -->
					@yield('content')
					<!-- End Profile Content -->
			</div><!--/end row-->
		</div>
            <!--=== End Profile ===-->

		
	</div><!--/wrapper-->

	<!-- JS Global Compulsory -->
	<script type="text/javascript" src="{{asset('FrontEnd/log')}}/assets/plugins/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="{{asset('FrontEnd/log')}}/assets/plugins/jquery/jquery-migrate.min.js"></script>
	<script type="text/javascript" src="{{asset('FrontEnd/log')}}/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!-- JS Implementing Plugins -->
	<script type="text/javascript" src="{{asset('FrontEnd/log')}}/assets/plugins/back-to-top.js"></script>
	<script type="text/javascript" src="{{asset('FrontEnd/log')}}/assets/plugins/smoothScroll.js"></script>
	<script type="text/javascript" src="{{asset('FrontEnd/log')}}/assets/plugins/sky-forms-pro/skyforms/js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="{{asset('FrontEnd/log')}}/assets/plugins/sky-forms-pro/skyforms/js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="{{asset('FrontEnd/log')}}/assets/plugins/sky-forms-pro/skyforms/js/jquery.maskedinput.min.js"></script>
	<script type="text/javascript" src="{{asset('FrontEnd/log')}}/assets/plugins/scrollbar/js/jquery.mCustomScrollbar.concat.min.js"></script>
	<!-- JS Customization -->
	<script type="text/javascript" src="{{asset('FrontEnd/log')}}/assets/js/custom.js"></script>
	<!-- JS Page Level -->
	<script type="text/javascript" src="{{asset('FrontEnd/log')}}/assets/js/app.js"></script>
	<script type="text/javascript" src="{{asset('FrontEnd/log')}}/assets/js/forms/reg.js"></script>
	<script type="text/javascript" src="{{asset('FrontEnd/log')}}/assets/js/forms/checkout.js"></script>
	<script type="text/javascript" src="{{asset('FrontEnd/log')}}/assets/js/plugins/datepicker.js"></script>
	<script type="text/javascript" src="{{asset('FrontEnd/log')}}/assets/js/plugins/style-switcher.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function() {
			App.init();
			App.initScrollBar();
			RegForm.initRegForm();
			Datepicker.initDatepicker();
			CheckoutForm.initCheckoutForm();
			StyleSwitcher.initStyleSwitcher();
		});
	</script>
	<!--=== Footer Version 1 ===-->
	@include('interface_frontend.master_frontend.user.footer')
		<!--=== End Footer Version 1 ===-->

</body>
</html>

@else
    @include('interface_frontend.frontend_user.404')
@endif
