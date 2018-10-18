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
                            <li><a href="#">Account</a></li>
                            <li><a href="shop-ui-login.html">Login</a> | <a href="shop-ui-register.html">Register</a></li>
                        </ul>
                    </div>
                </div>
            </div><!--/container-->
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
                    <!-- Shopping Cart -->
                    <ul class="list-inline shop-badge badge-lists badge-icons pull-right">
                        <li>
                            <a href="#"><i class="fa fa-shopping-cart"></i></a>
                            <span class="badge badge-sea rounded-x">3</span>
                            <ul class="list-unstyled badge-open mCustomScrollbar" data-mcs-theme="minimal-dark">
                                <li>
                                    <img src="{{asset('FrontEnd')}}/assets/img/thumb/05.jpg" alt="">
                                    <button type="button" class="close">×</button>
                                    <div class="overflow-h">
                                        <span>Black Glasses</span>
                                        <small>1 x $400.00</small>
                                    </div>    
                                </li>
                                <li>
                                    <img src="{{asset('FrontEnd')}}/assets/img/thumb/02.jpg" alt="">
                                    <button type="button" class="close">×</button>
                                    <div class="overflow-h">
                                        <span>Black Glasses</span>
                                        <small>1 x $400.00</small>
                                    </div>    
                                </li>
                                <li>
                                    <img src="{{asset('FrontEnd')}}/assets/img/thumb/03.jpg" alt="">
                                    <button type="button" class="close">×</button>
                                    <div class="overflow-h">
                                        <span>Black Glasses</span>
                                        <small>1 x $400.00</small>
                                    </div>    
                                </li>
                                <li class="subtotal">
                                    <div class="overflow-h margin-bottom-10">
                                        <span>Subtotal</span>
                                        <span class="pull-right subtotal-cost">$1200.00</span>
                                    </div>
                                    <div class="row">    
                                        <div class="col-xs-6">
                                            <a href="shop-ui-inner.html" class="btn-u btn-brd btn-brd-hover btn-u-sea-shop btn-block">View Cart</a>
                                        </div>
                                        <div class="col-xs-6">
                                            <a href="shop-ui-add-to-cart.html" class="btn-u btn-u-sea-shop btn-block">Checkout</a>
                                        </div>
                                    </div>        
                                </li>    
                            </ul>
                        </li>
                    </ul>
                    <!-- End Shopping Cart -->

                    <!-- Nav Menu -->
                    <ul class="nav navbar-nav">
                        <!-- Pages -->
                        <li class="active">
                            <a href="javascript:void(0);">
                                Home
                            </a>
                        </li>
                        <!-- End Pages -->

                        <!-- Promotion -->
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">
                                Promotion
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-submenu">
                                    <a href="javascript:void(0);">Jeans</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Skinny Jeans</a></li>
                                        <li><a href="#">Bootcut Jeans</a></li>
                                        <li><a href="#">Straight Cut Jeans</a></li>
                                    </ul>    
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="javascript:void(0);">Shoes</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Sandals</a></li>
                                        <li><a href="#">Heels</a></li>
                                    </ul>    
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
                                                    <button type="button" class="btn-u btn-u-dark">Check Now</button>
                                                </div>
                                                <div class="col-md-3 col-sm-4 col-xs-4 md-margin-bottom-30">
                                                    <a href="#"><img class="product-offers img-responsive" src="{{asset('FrontEnd')}}/assets/img/blog/01.jpg" alt=""></a>
                                                </div>
                                                <div class="col-md-3 col-sm-4 col-xs-4 sm-margin-bottom-30">
                                                    <a href="#"><img class="product-offers img-responsive" src="{{asset('FrontEnd')}}/assets/img/blog/02.jpg" alt=""></a>
                                                </div>
                                                <div class="col-md-3 col-sm-4 col-xs-4">
                                                    <a href="#"><img class="product-offers img-responsive" src="{{asset('FrontEnd')}}/assets/img/blog/03.jpg" alt=""></a>
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
                                                    <h3 class="mega-menu-heading">Clothe</h3>
                                                    <ul class="list-unstyled style-list">
                                                        <li><a href="#">New in</a></li>
                                                        <li><a href="#">Coats &amp; Jackets</a></li>
                                                        <li><a href="#">Jeans</a></li>
                                                        <li><a href="#">Dresses</a></li>
                                                        <li><a href="#">Shorts</a> <span class="label label-danger-shop">New</span></li>
                                                        <li><a href="#">Skirts</a></li>
                                                        <li><a href="#">T-Shirts</a></li>
                                                    </ul>
                                                    <h3 class="mega-menu-heading">Shoes</h3>
                                                    <ul class="list-unstyled style-list">
                                                        <li><a href="#">Boots</a></li>
                                                        <li><a href="#">FLats</a></li>
                                                        <li><a href="#">Heels</a></li>
                                                        <li><a href="#">Sandals</a></li>
                                                        <li><a href="#">Sports</a></li>
                                                    </ul>
                                                </div>

                                                <div class="col-md-2 col-sm-6">
                                                    <h3 class="mega-menu-heading">Accessories</h3>
                                                    <ul class="list-unstyled style-list">
                                                        <li><a href="#">All accessories</a></li>
                                                        <li><a href="#">Bags &amp; Purses</a></li>
                                                        <li><a href="#">Scarvs &amp; Hats</a></li>
                                                        <li><a href="#">Jewellery</a></li>
                                                        <li><a href="#">Fragrance &amp; Beauty</a></li>
                                                    </ul>
                                                    <h3 class="mega-menu-heading">Lingerie</h3>
                                                    <ul class="list-unstyled style-list">
                                                        <li><a href="#">Linger</a> <span class="label label-danger-shop">New</span></li>
                                                        <li><a href="#">Slippers</a></li>
                                                    </ul>
                                                    <h3 class="mega-menu-heading">Nightwear</h3>
                                                    <ul class="list-unstyled style-list">
                                                        <li><a href="#">Nightwear</a></li>
                                                        <li><a href="#">Socks</a></li>
                                                        <li><a href="#">Tights</a></li>
                                                    </ul>
                                                </div>

                                                <div class="col-md-2 col-sm-6">
                                                    <h3 class="mega-menu-heading">Mixed</h3>
                                                    <ul class="list-unstyled style-list">
                                                        <li><a href="#">New in</a></li>
                                                        <li><a href="#">Coats &amp; Jackets</a> <span class="label label-danger-shop">New</span></li>
                                                        <li><a href="#">Jeans</a></li>
                                                        <li><a href="#">Dresses</a></li>
                                                        <li><a href="#">Shorts</a></li>
                                                        <li><a href="#">Skirts</a></li>
                                                        <li><a href="#">T-shirts</a></li>
                                                        <li><a href="#">Boots</a></li>
                                                        <li><a href="#">Flats</a></li>
                                                        <li><a href="#">Heels</a></li>
                                                        <li><a href="#">Sandals</a></li>
                                                        <li><a href="#">Sports</a></li>
                                                        <li><a href="#">Socks</a></li>
                                                        <li><a href="#">Tights</a></li>
                                                    </ul>
                                                </div>        

                                                <div class="col-md-2 col-sm-6">
                                                    <h3 class="mega-menu-heading">Clothe</h3>
                                                    <ul class="list-unstyled style-list">
                                                        <li><a href="#">New in</a></li>
                                                        <li><a href="#">Coats &amp; Jackets</a></li>
                                                        <li><a href="#">Jeans</a></li>
                                                        <li><a href="#">Dresses</a></li>
                                                        <li><a href="#">Shorts</a> <span class="label label-danger-shop">New</span></li>
                                                        <li><a href="#">Skirts</a></li>
                                                        <li><a href="#">T-shirts</a></li>
                                                    </ul>
                                                    <h3 class="mega-menu-heading">Shoes</h3>
                                                    <ul class="list-unstyled style-list">
                                                        <li><a href="#">Boots</a></li>
                                                        <li><a href="#">Flats</a></li>
                                                        <li><a href="#">Heels</a></li>
                                                        <li><a href="#">Sandals</a></li>
                                                        <li><a href="#">Sports</a></li>
                                                    </ul>
                                                </div>

                                                <div class="col-md-2 col-sm-6">
                                                    <h3 class="mega-menu-heading">Accessories</h3>
                                                    <ul class="list-unstyled style-list">
                                                        <li><a href="#">All accessories</a></li>
                                                        <li><a href="#">Bags &amp; Purses</a></li>
                                                        <li><a href="#">Scarvs &amp; Hats</a></li>
                                                        <li><a href="#">Jewellery</a></li>
                                                        <li><a href="#">Fragrance &amp; Beauty</a></li>
                                                    </ul>
                                                    <h3 class="mega-menu-heading">Lingerie</h3>
                                                    <ul class="list-unstyled style-list">
                                                        <li><a href="#">Linger</a> <span class="label label-danger-shop">New</span></li>
                                                        <li><a href="#">Slippers</a></li>
                                                    </ul>
                                                    <h3 class="mega-menu-heading">Nightwear</h3>
                                                    <ul class="list-unstyled style-list">
                                                        <li><a href="#">Nightwear</a></li>
                                                        <li><a href="#">Socks</a></li>
                                                        <li><a href="#">Tights</a></li>
                                                    </ul>
                                                </div>

                                                <div class="col-md-2 col-sm-6">
                                                    <h3 class="mega-menu-heading">Mixed</h3>
                                                    <ul class="list-unstyled style-list">
                                                        <li><a href="#">New in</a></li>
                                                        <li><a href="#">Coats &amp; Jackets</a> <span class="label label-danger-shop">New</span></li>
                                                        <li><a href="#">Jeans</a></li>
                                                        <li><a href="#">Dresses</a></li>
                                                        <li><a href="#">Shorts</a></li>
                                                        <li><a href="#">Skirts</a></li>
                                                        <li><a href="#">T-shirts</a></li>
                                                        <li><a href="#">Boots</a></li>
                                                        <li><a href="#">Flats</a></li>
                                                        <li><a href="#">Heels</a></li>
                                                        <li><a href="#">Sandals</a></li>
                                                        <li><a href="#">Sports</a></li>
                                                        <li><a href="#">Socks</a></li>
                                                        <li><a href="#">Tights</a> <span class="label label-danger-shop">New</span></li>
                                                    </ul>
                                                </div>
                                            </div><!--/end row-->
                                        </div><!--/end container-->
                                    </div><!--/end mega menu content-->  
                                </li>
                            </ul><!--/end dropdown-menu-->
                        </li>
                        <!-- End Books -->
                        
                        <!-- Main Demo -->
                        <li><a href="../index.html">CONTACT US</a></li>
                        <!-- Main Demo -->
                    </ul>
                    <!-- End Nav Menu -->
                </div>
            </div>    
        </div>            
        <!-- End Navbar -->
    </div>
    