<!DOCTYPE html>
<html lang="en">
<head>
	<title>404 Error Page | Unify - Responsive Website Template</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="shortcut icon" href="{{asset('FrontEnd')}}/favicon.ico">
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
						<a class="btn-u btn-bordered" href="index.html">Back Home</a>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-v1">
			<div class="footer">
				<div class="container">
					<div class="row">
						<div class="col-md-3 md-margin-bottom-40">
							<a href="index.html"><img id="logo-footer" class="footer-logo" src="assets/img/logo2-default.png" alt=""></a>
							<p>About Unify dolor sit amet, consectetur adipiscing elit. Maecenas eget nisl id libero tincidunt sodales.</p>
							<p>Duis eleifend fermentum ante ut aliquam. Cras mi risus, dignissim sed adipiscing ut, placerat non arcu.</p>
						</div>
						<div class="col-md-3 md-margin-bottom-40">
							<div class="posts">
								<div class="headline"><h2>Latest Posts</h2></div>
								<ul class="list-unstyled latest-list">
									<li>
										<a href="#">Incredible content</a>
										<small>May 8, 2014</small>
									</li>
									<li>
										<a href="#">Best shoots</a>
										<small>June 23, 2014</small>
									</li>
									<li>
										<a href="#">New Terms and Conditions</a>
										<small>September 15, 2014</small>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-md-3 md-margin-bottom-40">
							<div class="headline"><h2>Useful Links</h2></div>
							<ul class="list-unstyled link-list">
								<li><a href="#">About us</a><i class="fa fa-angle-right"></i></li>
								<li><a href="#">Portfolio</a><i class="fa fa-angle-right"></i></li>
								<li><a href="#">Latest jobs</a><i class="fa fa-angle-right"></i></li>
								<li><a href="#">Community</a><i class="fa fa-angle-right"></i></li>
								<li><a href="#">Contact us</a><i class="fa fa-angle-right"></i></li>
							</ul>
						</div>
						<div class="col-md-3 map-img md-margin-bottom-40">
							<div class="headline"><h2>Contact Us</h2></div>
							<address class="md-margin-bottom-40">
								25, Lorem Lis Street, Orange <br />
								California, US <br />
								Phone: 800 123 3456 <br />
								Fax: 800 123 3456 <br />
								Email: <a href="mailto:info@anybiz.com" class="">info@anybiz.com</a>
							</address>
						</div>
					</div>
				</div>
			</div>
			<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<p>
								2016 &copy; All Rights Reserved.
								<a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a>
							</p>
						</div>
						<div class="col-md-6">
							<ul class="footer-socials list-inline">
								<li>
									<a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook">
										<i class="fa fa-facebook"></i>
									</a>
								</li>
								<li>
									<a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Skype">
										<i class="fa fa-skype"></i>
									</a>
								</li>
								<li>
									<a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Google Plus">
										<i class="fa fa-google-plus"></i>
									</a>
								</li>
								<li>
									<a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Linkedin">
										<i class="fa fa-linkedin"></i>
									</a>
								</li>
								<li>
									<a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Pinterest">
										<i class="fa fa-pinterest"></i>
									</a>
								</li>
								<li>
									<a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter">
										<i class="fa fa-twitter"></i>
									</a>
								</li>
								<li>
									<a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Dribbble">
										<i class="fa fa-dribbble"></i>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script type="{{asset('FrontEnd/log')}}/text/javascript" src="assets/plugins/jquery/jquery.min.js"></script>
	<script type="{{asset('FrontEnd/log')}}/text/javascript" src="assets/plugins/jquery/jquery-migrate.min.js"></script>
	<script type="{{asset('FrontEnd/log')}}/text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script type="{{asset('FrontEnd/log')}}/text/javascript" src="assets/plugins/back-to-top.js"></script>
	<script type="{{asset('FrontEnd/log')}}/text/javascript" src="assets/plugins/smoothScroll.js"></script>
	<script type="{{asset('FrontEnd/log')}}/text/javascript" src="assets/js/custom.js"></script>
	<script type="{{asset('FrontEnd/log')}}/text/javascript" src="assets/js/app.js"></script>
	<script type="{{asset('FrontEnd/log')}}/text/javascript" src="assets/js/plugins/style-switcher.js"></script>
	<script type="{{asset('FrontEnd/log')}}/text/javascript">
		jQuery(document).ready(function() {
			App.init();
			StyleSwitcher.initStyleSwitcher();
		});
	</script>
</body>
</html>
