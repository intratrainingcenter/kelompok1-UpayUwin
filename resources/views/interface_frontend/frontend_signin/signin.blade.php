<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<title>Login 2 | Unify - Responsive Website Template</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('FrontEnd')}}/favicon.ico">

	<!-- Web Fonts -->
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,700&amp;subset=cyrillic,latin">

	<!-- CSS Global Compulsory -->
	<link rel="stylesheet" href="{{asset('FrontEnd/log')}}/assets/plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{asset('FrontEnd/log')}}/assets/css/style.css">

	<!-- CSS Implementing Plugins -->
	<link rel="stylesheet" href="{{asset('FrontEnd/log')}}/assets/plugins/animate.css">
	<link rel="stylesheet" href="{{asset('FrontEnd/log')}}/assets/plugins/line-icons/line-icons.css">
	<link rel="stylesheet" href="{{asset('FrontEnd/log')}}/assets/plugins/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{asset('FrontEnd/log')}}/assets/plugins/brand-buttons/brand-buttons.css">

	<!-- CSS Page Style -->
	<link rel="stylesheet" href="{{asset('FrontEnd/log')}}/assets/css/pages/page_log_reg_v4.css">

	<!-- CSS Theme -->
	<link rel="stylesheet" href="{{asset('FrontEnd/log')}}/assets/css/theme-colors/blue.css">

	<!-- CSS Customization -->
	<link rel="stylesheet" href="{{asset('FrontEnd/log')}}/assets/css/custom.css">
</head>
<body>

	<!--=== Content Part ===-->
	<div class="container-fluid">
		<div class="row equal-height-columns">
			<div class="col-md-6 col-sm-6 hidden-xs image-block equal-height-column"></div>

			<div class="col-md-6 col-sm-6 form-block equal-height-column">
				<a href="index.html">
					<img src="{{asset('FrontEnd/log')}}/assets/img/themes/logo1-blue.png" alt="">
				</a>
				<h2 class="margin-bottom-30">Login To Your Account</h2>
				<form action="{{route('login')}}" method="POST">
					@csrf
					<div class="login-block">
						<div class="input-group margin-bottom-20">
							<span class="input-group-addon rounded-left"><i class="icon-user color-blue"></i></span>
							<input type="email" class="form-control rounded-right" name="email" placeholder="Email">
						</div>

						<div class="input-group margin-bottom-20">
							<span class="input-group-addon rounded-left"><i class="icon-lock color-blue"></i></span>
							<input type="password" class="form-control rounded-right" name="password" placeholder="Password">
						</div>

						<div class="row margin-bottom-70">
							<div class="col-md-12">
								<button type="submit" class="btn-u btn-u-blue btn-block rounded">Sign In</button>
							</div>
						</div>

						<div class="social-login text-center">
							<p>Dont have an account? <a href="{{route('signup')}}">Create New</a></p>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div><!--/container-->
	<!--=== End Content Part ===-->

	<!--=== Sticky Footer ===-->
	 @include('interface_frontend.master_frontend.log.footer')
	<!--=== End Sticky Footer ===-->

	<!-- JS Global Compulsory -->
	<script src="{{asset('FrontEnd/log')}}/assets/plugins/jquery/jquery.min.js"></script>
	<script src="{{asset('FrontEnd/log')}}/assets/plugins/jquery/jquery-migrate.min.js"></script>
	<script src="{{asset('FrontEnd/log')}}/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

	<!-- JS Implementing Plugins -->
	<script src="{{asset('FrontEnd/log')}}/assets/plugins/back-to-top.js"></script>
	<script src="{{asset('FrontEnd/log')}}/assets/plugins/backstretch/jquery.backstretch.min.js"></script>

	<!-- JS Customization -->
	<script src="{{asset('FrontEnd/log')}}/assets/js/custom.js"></script>

	<!-- JS Page Level -->
	<script src="{{asset('FrontEnd/log')}}/assets/js/app.js"></script>
	<script>
		jQuery(document).ready(function() {
			App.init();
		});
	</script>
	<script>
		$(".image-block").backstretch([
			"{{asset('FrontEnd/log')}}/assets/img/bg/img11.jpg",
			"{{asset('FrontEnd/log')}}/assets/img/bg/img5.jpg",
			], {
				fade: 1000,
				duration: 7000
			});
	</script>
<!--[if lt IE 9]>
	<script src="assets/plugins/respond.js"></script>
	<script src="assets/plugins/html5shiv.js"></script>
	<script src="assets/plugins/placeholder-IE-fixes.js"></script>
	<![endif]-->
</body>
</html>
