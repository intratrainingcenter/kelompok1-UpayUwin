<div class="header">
			<div class="container">
				<a class="logo" href="{{ route('index')}}">
					<h1 class="nameecommerce"></h1>
				</a>
				<div class="topbar">
					<ul class="loginbar pull-right">
						<li><a href="{{route('index')}}">
										Home </a>
								</li>
						<li>|
						</li>
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
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="fa fa-bars"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse mega-menu navbar-responsive-collapse">
				<div class="container">
					<ul class="nav navbar-nav">
						<li>
						</li>
					</ul>
				</div>
			</div>
		</div>
