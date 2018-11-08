<!DOCTYPE html>
<html lang="en">
<head>
	<title>Regsitration Pages | Unify - Responsive Website Template</title>
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
	<link rel="stylesheet" href="{{asset('FrontEnd/log')}}/assets/css/pages/page_log_reg_v4.css">
	<link rel="stylesheet" href="{{asset('FrontEnd/log')}}/assets/css/custom.css">
</head>
<body>
	<div class="container-fluid">
		<div class="row equal-height-columns">
			<div class="col-md-6 col-sm-6 hidden-xs image-block equal-height-column"></div>
			<div class="col-md-6 col-sm-6 form-block equal-height-column">
				<div class="reg-block">
					<a href="index.html">
						<img src="{{asset('FrontEnd/log')}}/assets/img/themes/logo1-default.png" alt="">
					</a>
					<h2 class="margin-bottom-30">Create new account</h2>
					<form action="{{route('regis')}}" method="post">
                            @csrf
					<div class="input-group margin-bottom-20">
						<span class="input-group-addon rounded-left"><i class="icon-user color-green"></i></span>
						<input type="text" name="name" class="form-control rounded-right" placeholder="Username" required autocomplete="off">
					</div>

					<div class="input-group margin-bottom-20">
						<span class="input-group-addon rounded-left"><i class="icon-envelope color-green"></i></span>
						<input type="email" name="email" class="form-control rounded-right" placeholder="Your email" required autocomplete="off">
					</div>

					<div class="input-group margin-bottom-30">
						<span class="input-group-addon rounded-left"><i class="icon-lock color-green"></i></span>
						<input type="password" name="password" class="form-control rounded-right" placeholder="Password" required autocomplete="off">
					</div>

					<div class="input-group margin-bottom-30">
						<span class="input-group-addon rounded-left"><i class="icon-lock color-green"></i></span>
						<input type="password" name="confirm_password" class="form-control rounded-right" placeholder="Confirm Password" required autocomplete="off">
					</div>

					<div class="checkbox margin-bottom-30">
						<label>
							<input type="checkbox" required> I agree to terms &amp; conditions
						</label>

					</div>

					<button type="submit" class="btn-u btn-block rounded">Create new</button>
					</form>
					<div class="social-login text-center">
							<p>Already have an account? <a href="{{route('LoginUser')}}">Login</a></p>
						</div>
				</div>
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
			"{{asset('FrontEnd/log')}}/assets/img/bg/img6.jpg",
			"{{asset('FrontEnd/log')}}/assets/img/bg/img5.jpg",
			], {
				fade: 1000,
				duration: 7000
			});
	</script>
</body>
</html>
