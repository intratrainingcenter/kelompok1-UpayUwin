<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Pages | Unify - Responsive Website Template</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
    <link rel="shortcut icon" href="{{asset('FrontEnd')}}/favicon.ico">
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,700&amp;subset=cyrillic,latin">
	<link rel="stylesheet" href="{{asset('FrontEnd/log')}}/assets/plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{asset('FrontEnd/log')}}/assets/css/style.css">
	<link rel="stylesheet" href="{{asset('FrontEnd/log')}}/assets/plugins/animate.css">
	<link rel="stylesheet" href="{{asset('FrontEnd/log')}}/assets/plugins/line-icons/line-icons.css">
	<link rel="stylesheet" href="{{asset('FrontEnd/log')}}/assets/plugins/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{asset('FrontEnd/log')}}/assets/plugins/brand-buttons/brand-buttons.css">
	<link rel="stylesheet" href="{{asset('FrontEnd/log')}}/assets/css/pages/page_log_reg_v4.css">
	<link rel="stylesheet" href="{{asset('FrontEnd/log')}}/assets/css/theme-colors/blue.css">
	<link rel="stylesheet" href="{{asset('FrontEnd/log')}}/assets/css/custom.css">
</head>
<body>
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
	</div>
	 @include('interface_frontend.master_frontend.log.footer')
	<script src="{{asset('FrontEnd/log')}}/assets/plugins/jquery/jquery.min.js"></script>
	<script src="{{asset('FrontEnd/log')}}/assets/plugins/jquery/jquery-migrate.min.js"></script>
	<script src="{{asset('FrontEnd/log')}}/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="{{asset('FrontEnd/log')}}/assets/plugins/back-to-top.js"></script>
	<script src="{{asset('FrontEnd/log')}}/assets/plugins/backstretch/jquery.backstretch.min.js"></script>
	<script src="{{asset('FrontEnd/log')}}/assets/js/custom.js"></script>
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
</body>
</html>
