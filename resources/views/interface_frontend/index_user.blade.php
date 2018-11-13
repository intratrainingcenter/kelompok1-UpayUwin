@if (Auth::check())
<!DOCTYPE html>
<html oncontextmenu="return false" lang="en">
<head>
	<title class="tittle"></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="address" id="address" content="">
	<meta name="phone" id="phone" content="">
	<link rel="icon" type="image/png" sizes="16x16" href="">
	<link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin'>
	<link rel="stylesheet" href="{{asset('FrontEnd/log')}}/assets/plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{asset('FrontEnd/log')}}/assets/css/style.css">
	<link rel="stylesheet" href="{{asset('FrontEnd/log')}}/assets/css/headers/header-default.css">
	<link rel="stylesheet" href="{{asset('FrontEnd/log')}}/assets/css/footers/footer-v1.css">
	<link rel="stylesheet" href="{{asset('FrontEnd/log')}}/assets/plugins/animate.css">
	<link rel="stylesheet" href="{{asset('FrontEnd/log')}}/assets/plugins/line-icons/line-icons.css">
	<link rel="stylesheet" href="{{asset('FrontEnd/log')}}/assets/plugins/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{asset('FrontEnd/log')}}/assets/plugins/scrollbar/css/jquery.mCustomScrollbar.css">
	<link rel="stylesheet" href="{{asset('FrontEnd/log')}}/assets/plugins/sky-forms-pro/skyforms/css/sky-forms.css">
	<link rel="stylesheet" href="{{asset('FrontEnd/log')}}/assets/plugins/sky-forms-pro/skyforms/custom/custom-sky-forms.css">
	<link rel="stylesheet" href="{{asset('FrontEnd/log')}}/assets/css/pages/profile.css">
	<link rel="stylesheet" href="{{asset('FrontEnd/log')}}/assets/css/theme-colors/default.css" id="style_color">
	<link rel="stylesheet" href="{{asset('FrontEnd/log')}}/assets/css/theme-skins/dark.css">
	<link rel="stylesheet" href="{{asset('FrontEnd/log')}}/assets/css/custom.css">
</head>

<body>
	<div class="wrapper">
		@include('interface_frontend.master_frontend.user.header')
		<div class="container content profile">
			<div class="row">
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
					</ul>
					<hr>
					<div class="margin-bottom-50"></div>
					<form action="#" id="sky-form2" class="sky-form">
						<div id="inline-start"></div>
					</form>
				</div>
					@yield('content')
			</div>
		</div>
	</div>

	<script type="text/javascript" src="{{asset('FrontEnd/log')}}/assets/plugins/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="{{asset('FrontEnd/log')}}/assets/plugins/jquery/jquery-migrate.min.js"></script>
	<script type="text/javascript" src="{{asset('FrontEnd/log')}}/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="{{asset('FrontEnd/log')}}/assets/plugins/back-to-top.js"></script>
	<script type="text/javascript" src="{{asset('FrontEnd/log')}}/assets/plugins/smoothScroll.js"></script>
	<script type="text/javascript" src="{{asset('FrontEnd/log')}}/assets/plugins/sky-forms-pro/skyforms/js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="{{asset('FrontEnd/log')}}/assets/plugins/sky-forms-pro/skyforms/js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="{{asset('FrontEnd/log')}}/assets/plugins/sky-forms-pro/skyforms/js/jquery.maskedinput.min.js"></script>
	<script type="text/javascript" src="{{asset('FrontEnd/log')}}/assets/plugins/scrollbar/js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script type="text/javascript" src="{{asset('FrontEnd/log')}}/assets/js/custom.js"></script>
	<script type="text/javascript" src="{{asset('FrontEnd/log')}}/assets/js/app.js"></script>
	<script type="text/javascript" src="{{asset('FrontEnd/log')}}/assets/js/forms/reg.js"></script>
	<script type="text/javascript" src="{{asset('FrontEnd/log')}}/assets/js/forms/checkout.js"></script>
	<script type="text/javascript" src="{{asset('FrontEnd/log')}}/assets/js/plugins/datepicker.js"></script>
	<script type="text/javascript" src="{{asset('FrontEnd/log')}}/assets/js/plugins/style-switcher.js"></script>
	<script src="{{asset('js/settingwebfrontend.js')}}"></script>
	@include('interface_frontend.master_frontend.element.footer')
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
</body>
</html>
@else
    @include('interface_frontend.frontend_user.404')
@endif
