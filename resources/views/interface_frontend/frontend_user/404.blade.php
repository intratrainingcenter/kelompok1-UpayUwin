<!DOCTYPE html>
<html oncontextmenu="return false" lang="en">>
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
	<link rel="stylesheet" href="{{asset('FrontEnd/log')}}/assets/css/pages/page_404_error.css">
	<link rel="stylesheet" href="{{asset('FrontEnd/log')}}/assets/css/theme-colors/default.css" id="style_color">
	<link rel="stylesheet" href="{{asset('FrontEnd/log')}}/assets/css/theme-skins/dark.css">
	<link rel="stylesheet" href="{{asset('FrontEnd/log')}}/assets/css/custom.css">
</head>
<body>
	<div class="wrapper">
		@include('interface_frontend.master_frontend.user.header')
		<div class="container content">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="error-v1">
						<span class="error-v1-title">404</span>
						<span>That’s an error!</span>
						<p>
						@if (Auth::check())
						The requested URL was not found on this server. That’s all we know.
						@else
						You must Logged in , to see the content.
						@endif</p>
						<a class="btn-u btn-bordered" href="{{route('index')}}">Back Home</a>
					</div>
				</div>
			</div>
		</div>
		@include('interface_frontend.master_frontend.element.footer')
	</div>
	<script type="{{asset('FrontEnd/log')}}/text/javascript" src="assets/plugins/jquery/jquery.min.js"></script>
	<script type="{{asset('FrontEnd/log')}}/text/javascript" src="assets/plugins/jquery/jquery-migrate.min.js"></script>
	<script type="{{asset('FrontEnd/log')}}/text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script type="{{asset('FrontEnd/log')}}/text/javascript" src="assets/plugins/back-to-top.js"></script>
	<script type="{{asset('FrontEnd/log')}}/text/javascript" src="assets/plugins/smoothScroll.js"></script>
	<script type="{{asset('FrontEnd/log')}}/text/javascript" src="assets/js/custom.js"></script>
	<script type="{{asset('FrontEnd/log')}}/text/javascript" src="assets/js/app.js"></script>
	<script type="{{asset('FrontEnd/log')}}/text/javascript" src="assets/js/plugins/style-switcher.js"></script>
	<script src="{{asset('js/settingwebfrontend.js')}}"></script>
	<script type="{{asset('FrontEnd/log')}}/text/javascript">
		jQuery(document).ready(function() {
			App.init();
			StyleSwitcher.initStyleSwitcher();
		});
	</script>
</body>
</html>
