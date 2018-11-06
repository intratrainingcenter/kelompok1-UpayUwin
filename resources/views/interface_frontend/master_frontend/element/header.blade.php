<!--=== Header v5 ===-->
<div class="header-v5 header-static">
    <!-- Topbar v3 -->
    <div class="topbar-v3">
        <div class="search-open">
            <div class="container">
                <input type="text" class="form-control" placeholder="Search">
                <div class="search-close"><i class="icon-close"></i></div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                
                </div>
                <div class="col-sm-6">
                    <ul class="list-inline right-topbar pull-right">
                        <li>@if (Auth::check())
                        <a href="{{route('setting')}}">Account ( {{ Auth::user()->name }} {{ Auth::user()->id }} )</a>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            @else
                            <a href="{{route('LoginUser')}}">Login</a>
                            | 
                            <a href="{{route('signup')}}">Register</a>
                            @endif
                           
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--/container-->
    </div>
    <!-- End Topbar v3 -->

    <!-- Navbar -->
    <div class="navbar navbar-default mega-menu" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">
                    <img id="logo-header" src="{{asset('FrontEnd')}}/assets/img/logo.png" alt="Logo">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-responsive-collapse">
                @if (Auth::check())
                <!-- Shopping Cart -->
                <ul class="list-inline shop-badge badge-lists badge-icons pull-right">
                    <li>
                        <a href="#"><i class="fa fa-shopping-cart"></i></a>
                        <span class="badge badge-sea rounded-x" id="count_cart"></span>
                        <ul class="list-unstyled badge-open mCustomScrollbar" data-mcs-theme="minimal-dark" id="minicart">
                            <!-- Minicart Ajax -->
                        </ul>
                    </li>
                </ul>
                <!-- End Shopping Cart -->
                @endif

                <!-- Nav Menu -->
                <ul class="nav navbar-nav">
                        <!-- Pages -->
                        <li class="active">
                            <a href="{{route('index')}}">
                                Home
                            </a>
                        </li>
                        <!-- End Pages -->

                        <!-- Promotion -->
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">
                                Vouchers
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-submenu">
                                    <a href="javascript:void(0);">PC Games</a>
                                     
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="javascript:void(0);">Mobile Games</a>
                                     
                                </li>
                            </ul>
                        </li>
                        <!-- End Promotion -->

                        <!-- Gifts -->
                        <li class="dropdown mega-menu-fullwidth">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">
                                Items
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="mega-menu-content">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-3 col-sm-12 col-xs-12 md-margin-bottom-30">
                                                    <h3 class="mega-menu-heading">Rare,Epic, Legendary and Unique Items Available</h3>
                                                    <p>Various of Rare - Legendary items, with attractive price, can you get here. purchase it now before it runs out.</p>
                                                    <a href="{{route('item')}}"><button type="button" class="btn-u btn-u-dark">Check Now</button></a>
                                                </div>
                                                <div class="col-md-3 col-sm-4 col-xs-4 md-margin-bottom-30">
                                                    <a href="#"><img class="product-offers img-responsive" src="{{asset('images')}}/GustDragon.jpg" alt=""></a>
                                                </div>
                                                <div class="col-md-3 col-sm-4 col-xs-4 sm-margin-bottom-30">
                                                    <a href="#"><img class="product-offers img-responsive" src="{{asset('images')}}/maneater.jpg" alt=""></a>
                                                </div>
                                                <div class="col-md-3 col-sm-4 col-xs-4">
                                                    <a href="#"><img class="product-offers img-responsive" src="{{asset('images')}}/pwcostume.jpg" alt=""></a>
                                                </div>
                                            </div><!--/end row-->
                                        </div><!--/end container-->
                                    </div><!--/end mega menu content-->  
                                </li>
                            </ul><!--/end dropdown-menu-->
                        </li>
                        <!-- End Gifts -->

                        <!-- Books -->
                        <li class="dropdown mega-menu-fullwidth">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">
                                Games
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="mega-menu-content">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-2 col-sm-6">
                                                    <h3 class="mega-menu-heading">Vouchers</h3>
                                                    <ul class="list-unstyled style-list">
                                                        <li><a href="#">PUBG Mobile</a></li>
                                                        <li><a href="#">LytoGame</a></li>
                                                        <li><a href="#">Gemscool</a> <span class="label label-danger-shop">SOLD</span></li>
                                                        <li><a href="#">Megaxus</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-2 col-sm-6">
                                                    <h3 class="mega-menu-heading">Key / Code</h3>
                                                    <ul class="list-unstyled style-list">
                                                        <li><a href="#">Google Play</a></li>
                                                        <li><a href="#">Steam Key</a></li>
                                                        <li><a href="#">UniPin</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-2 col-sm-6">
                                                    <h3 class="mega-menu-heading">Items</h3>
                                                    <ul class="list-unstyled style-list">
                                                        <li><a href="#">Closers Online</a></li>
                                                        <li><a href="#">Dragon Nest</a> <span class="label label-danger-shop">Hot</span></li>
                                                        <li><a href="#">Dota 2</a></li>
                                                        <li><a href="#">Elsword</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-2 col-sm-6">
                                                    <h3 class="mega-menu-heading">Gold &amp; Balance</h3>
                                                    <ul class="list-unstyled style-list">
                                                        <li><a href="#">Closers Online</a></li>
                                                        <li><a href="#">Dragon Nest</a> <span class="label label-danger-shop">Hot</span></li>
                                                        <li><a href="#">Lost Saga</a></li>
                                                        <li><a href="#">Elsword</a></li>
                                                        <li><a href="#">RF Online</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-2 col-sm-6">
                                                    <h3 class="mega-menu-heading">RankedUp Account</h3>
                                                    <ul class="list-unstyled style-list">
                                                        <li><a href="#">Dragon Nest</a> <span class="label label-danger-shop">Hot</span></li>
                                                        <li><a href="#">7 Knights</a></li>
                                                        <li><a href="#">Closers Online</a></li>
                                                        <li><a href="#">Lost Saga</a></li>
                                                        <li><a href="#">Elsword</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-2 col-sm-6">
                                                    <h3 class="mega-menu-heading">Joki Account</h3>
                                                    <ul class="list-unstyled style-list">
                                                        <li><a href="#">PUBG</a></li>
                                                        <li><a href="#">Arena Of Valor</a></li>
                                                        <li><a href="#">Omnyoji Arena</a></li>
                                                        <li><a href="#">Dragon Nest</a></li>
                                                        <li><a href="#">Closers Online</a></li>
                                                        <li><a href="#">Elsword</a></li>
                                                    </ul>
                                                </div>

                                                
                                            </div><!--/end row-->
                                        </div><!--/end container-->
                                    </div><!--/end mega menu content-->  
                                </li>
                            </ul><!--/end dropdown-menu-->
                        </li>
                        <!-- End Books -->
                        
                        
                    </ul>
                <!-- End Nav Menu -->
            </div>
        </div>
    </div>
    <!-- End Navbar -->
</div>
