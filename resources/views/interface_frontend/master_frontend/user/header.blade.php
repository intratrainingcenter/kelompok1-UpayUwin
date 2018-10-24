<div class="header">
			<div class="container">
				<!-- Logo -->
				<a class="logo" href="{{ route('index')}}">
					<img src="{{asset('FrontEnd/log')}}/assets/img/logo1-default.png" alt="Logo">
				</a>
				<!-- End Logo -->

				<!-- Topbar -->
				<div class="topbar">
					<ul class="loginbar pull-right">
                    @if (Auth::check())
						<li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}</a>
                        </li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                    @else
                        <li><a href="{{route('LoginUser')}}">
                                    Login</a>
                            </li>
                    @endif
					</ul>
				</div>
				<!-- End Topbar -->

				<!-- Toggle get grouped for better mobile display -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="fa fa-bars"></span>
				</button>
				<!-- End Toggle -->
			</div><!--/end container-->

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse mega-menu navbar-responsive-collapse">
				<div class="container">
					<ul class="nav navbar-nav">
						<!-- Home -->
						<li>
						</li>
						<!-- End Home -->

					</ul>
				</div><!--/end container-->
			</div><!--/navbar-collapse-->
		</div>