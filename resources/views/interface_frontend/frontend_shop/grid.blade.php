<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<head>
    <title>Product Grid | Unify - Responsive Website Template</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Web Fonts -->
    <link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin'>

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="{{asset('FrontEnd')}}/assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('FrontEnd')}}/assets/css/shop.style.css">
    
    <!-- CSS Header and Footer -->
    <link rel="stylesheet" href="{{asset('FrontEnd')}}/assets/css/headers/header-v5.css">
    <link rel="stylesheet" href="{{asset('FrontEnd')}}/assets/css/footers/footer-v4.css">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="{{asset('FrontEnd')}}/assets/plugins/animate.css">    
    <link rel="stylesheet" href="{{asset('FrontEnd')}}/assets/plugins/line-icons/line-icons.css">
    <link rel="stylesheet" href="{{asset('FrontEnd')}}/assets/plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('FrontEnd')}}/assets/plugins/noUiSlider/jquery.nouislider.css">
    <link rel="stylesheet" href="{{asset('FrontEnd')}}/assets/plugins/scrollbar/css/jquery.mCustomScrollbar.css">
    
    <!-- CSS Customization -->
    <link rel="stylesheet" href="{{asset('FrontEnd')}}/assets/css/custom.css">
</head> 

<body class="header-fixed">
<div class="wrapper">
    <!--=== Header v5 ===-->   
    @include('interface_frontend.master_frontend.element.header')
        <!--=== End Header v5 ===-->

    <!--=== Breadcrumbs v4 ===-->
    <div class="breadcrumbs-v4">
        <div class="container">
            <span class="page-name">Product Filter Page</span>
            <h1>Maecenas <span class="shop-green">enim</span> sapien</h1>
            <ul class="breadcrumb-v4-in">
                <li><a href="index.html">Home</a></li>
                <li><a href="">Product</a></li>
                <li class="active">Product Filter Page</li>
            </ul>
        </div><!--/end container-->
    </div> 
    <!--=== End Breadcrumbs v4 ===-->

    <!--=== Content Part ===-->
    <div class="content container">
        <div class="row">
            <div class="col-md-3 filter-by-block md-margin-bottom-60">
                <h1>Filter By</h1>
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                    Brands
                                    <i class="fa fa-angle-down"></i>
                                </a>
                            </h2>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <ul class="list-unstyled checkbox-list">
                                    <li>
                                        <label class="checkbox">
                                            <input type="checkbox" name="checkbox" checked />
                                            <i></i>
                                            Calvin Klein
                                            <small><a href="#">(23)</a></small>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="checkbox">
                                            <input type="checkbox" name="checkbox" checked />
                                            <i></i>
                                            Gucci
                                            <small><a href="#">(4)</a></small>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="checkbox">
                                            <input type="checkbox" name="checkbox" />
                                            <i></i>
                                            Adidas
                                            <small><a href="#">(11)</a></small>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="checkbox">
                                            <input type="checkbox" name="checkbox" />
                                            <i></i>
                                            Puma
                                            <small><a href="#">(3)</a></small>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="checkbox">
                                            <input type="checkbox" name="checkbox" />
                                            <i></i>
                                            Zara
                                            <small><a href="#">(87)</a></small>
                                        </label>
                                    </li>
                                </ul>        
                            </div>
                        </div>
                    </div>
                </div><!--/end panel group-->

                <div class="panel-group" id="accordion-v2">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion-v2" href="#collapseTwo">
                                    Categories
                                    <i class="fa fa-angle-down"></i>
                                </a>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <ul class="list-unstyled checkbox-list">
                                    <li>
                                        <label class="checkbox">
                                            <input type="checkbox" name="checkbox" checked />
                                            <i></i>
                                            Clothes
                                            <small><a href="#">(23)</a></small>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="checkbox">
                                            <input type="checkbox" name="checkbox" checked />
                                            <i></i>
                                            Glasses
                                            <small><a href="#">(4)</a></small>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="checkbox">
                                            <input type="checkbox" name="checkbox" />
                                            <i></i>
                                            Shoes
                                            <small><a href="#">(11)</a></small>
                                        </label>
                                    </li>
                                </ul>        
                            </div>
                        </div>
                    </div>
                </div><!--/end panel group-->

                <div class="panel-group" id="accordion-v3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion-v3" href="#collapseThree">
                                    Size
                                    <i class="fa fa-angle-down"></i>
                                </a>
                            </h2>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <ul class="list-unstyled checkbox-list">
                                    <li>
                                        <label class="checkbox">
                                            <input type="checkbox" name="checkbox" />
                                            <i></i>
                                            S
                                            <small><a href="#">(23)</a></small>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="checkbox">
                                            <input type="checkbox" name="checkbox" checked />
                                            <i></i>
                                            M
                                            <small><a href="#">(4)</a></small>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="checkbox">
                                            <input type="checkbox" name="checkbox" />
                                            <i></i>
                                            L
                                            <small><a href="#">(11)</a></small>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="checkbox">
                                            <input type="checkbox" name="checkbox" />
                                            <i></i>
                                            XL
                                            <small><a href="#">(3)</a></small>
                                        </label>
                                    </li>
                                </ul>        
                            </div>
                        </div>
                    </div>
                </div><!--/end panel group-->

                <div class="panel-group" id="accordion-v4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion-v4" href="#collapseFour">
                                    Price
                                    <i class="fa fa-angle-down"></i>
                                </a>
                            </h2>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <div class="slider-snap"></div>
                                <p class="slider-snap-text">
                                    <span class="slider-snap-value-lower"></span>
                                    <span class="slider-snap-value-upper"></span>
                                </p>    
                            </div>
                        </div>
                    </div>
                </div><!--/end panel group-->

                <div class="panel-group" id="accordion-v5">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion-v5" href="#collapseFive">
                                    Color
                                    <i class="fa fa-angle-down"></i>
                                </a>
                            </h2>
                        </div>
                        <div id="collapseFive" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <ul class="list-inline product-color-list">
                                    <li><a href="#"><img src="{{asset('FrontEnd')}}/assets/img/colors/01.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="{{asset('FrontEnd')}}/assets/img/colors/02.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="{{asset('FrontEnd')}}/assets/img/colors/03.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="{{asset('FrontEnd')}}/assets/img/colors/04.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="{{asset('FrontEnd')}}/assets/img/colors/05.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="{{asset('FrontEnd')}}/assets/img/colors/06.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="{{asset('FrontEnd')}}/assets/img/colors/07.jpg" alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div><!--/end panel group-->

                <div class="panel-group margin-bottom-30" id="accordion-v6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion-v6" href="#collapseSix">
                                    Rating
                                    <i class="fa fa-angle-down"></i>
                                </a>
                            </h2>
                        </div>
                        <div id="collapseSix" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <div class="stars-ratings stars-ratings-label">
                                    <input type="radio" name="stars-rating" id="stars-rating-5">
                                    <label for="stars-rating-5"><i class="fa fa-star"></i></label>
                                    <input type="radio" name="stars-rating" id="stars-rating-4">
                                    <label for="stars-rating-4"><i class="fa fa-star"></i></label>
                                    <input type="radio" name="stars-rating" id="stars-rating-3">
                                    <label for="stars-rating-3"><i class="fa fa-star"></i></label>
                                    <input type="radio" name="stars-rating" id="stars-rating-2">
                                    <label for="stars-rating-2"><i class="fa fa-star"></i></label>
                                    <input type="radio" name="stars-rating" id="stars-rating-1">
                                    <label for="stars-rating-1"><i class="fa fa-star"></i></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/end panel group-->
                <button type="button" class="btn-u btn-brd btn-brd-hover btn-u-lg btn-u-sea-shop btn-block">Reset</button>
            </div>

            <div class="col-md-9">
                <div class="row margin-bottom-5">
                    <div class="col-sm-4 result-category">
                        <h2>Men</h2>
                        <small class="shop-bg-red badge-results">45 Results</small>
                    </div>
                    <div class="col-sm-8">
                        <ul class="list-inline clear-both">
                            <li class="grid-list-icons">
                                <a href="shop-ui-filter-list.html"><i class="fa fa-th-list"></i></a>
                                <a href="shop-ui-filter-grid.html"><i class="fa fa-th"></i></a>
                            </li>
                            <li class="sort-list-btn">
                                <h3>Sort By :</h3>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                        Popularity <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">All</a></li>
                                        <li><a href="#">Best Sales</a></li>
                                        <li><a href="#">Top Last Week Sales</a></li>
                                        <li><a href="#">New Arrived</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="sort-list-btn">
                                <h3>Show :</h3>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                        20 <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">All</a></li>
                                        <li><a href="#">10</a></li>
                                        <li><a href="#">5</a></li>
                                        <li><a href="#">3</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>    
                </div><!--/end result category-->

                <div class="filter-results">
                    <div class="row illustration-v2 margin-bottom-30">
                        <div class="col-md-4">
                            <div class="product-img product-img-brd">
                                <a href="#"><img class="full-width img-responsive" src="{{asset('FrontEnd')}}/assets/img/blog/16.jpg" alt=""></a>
                                <a class="product-review" href="shop-ui-inner.html">Quick review</a>
                                <a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                <div class="shop-rgba-dark-green rgba-banner">New</div>
                            </div> 
                            <div class="product-description product-description-brd margin-bottom-30">
                                <div class="overflow-h margin-bottom-5">
                                    <div class="pull-left">
                                        <h4 class="title-price"><a href="shop-ui-inner.html">Double-breasted</a></h4>
                                        <span class="gender text-uppercase">Men</span>
                                        <span class="gender">Suits - Blazers</span>
                                    </div>    
                                    <div class="product-price">
                                        <span class="title-price">$60.00</span>
                                        <span class="title-price line-through">$95.00</span>
                                    </div>
                                </div>    
                                <ul class="list-inline product-ratings">
                                    <li><i class="rating-selected fa fa-star"></i></li>
                                    <li><i class="rating-selected fa fa-star"></i></li>
                                    <li><i class="rating-selected fa fa-star"></i></li>
                                    <li><i class="rating fa fa-star"></i></li>
                                    <li><i class="rating fa fa-star"></i></li>
                                    <li class="like-icon"><a data-original-title="Add to wishlist" data-toggle="tooltip" data-placement="left" class="tooltips" href="#"><i class="fa fa-heart"></i></a></li>
                                </ul>    
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="product-img product-img-brd">
                                <a href="#"><img class="full-width img-responsive" src="{{asset('FrontEnd')}}/assets/img/blog/17.jpg" alt=""></a>
                                <a class="product-review" href="shop-ui-inner.html">Quick review</a>
                                <a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </div> 
                            <div class="product-description product-description-brd margin-bottom-30">
                                <div class="overflow-h margin-bottom-5">
                                    <div class="pull-left">
                                        <h4 class="title-price"><a href="shop-ui-inner.html">Double-breasted</a></h4>
                                        <span class="gender text-uppercase">Men</span>
                                        <span class="gender">Suits - Blazers</span>
                                    </div>    
                                    <div class="product-price">
                                        <span class="title-price">$60.00</span>
                                        <span class="title-price line-through">$95.00</span>
                                    </div>
                                </div>    
                                <ul class="list-inline product-ratings">
                                    <li><i class="rating-selected fa fa-star"></i></li>
                                    <li><i class="rating-selected fa fa-star"></i></li>
                                    <li><i class="rating-selected fa fa-star"></i></li>
                                    <li><i class="rating fa fa-star"></i></li>
                                    <li><i class="rating fa fa-star"></i></li>
                                    <li class="like-icon"><a data-original-title="Add to wishlist" data-toggle="tooltip" data-placement="left" class="tooltips" href="#"><i class="fa fa-heart"></i></a></li>
                                </ul>    
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="product-img product-img-brd">
                                <a href="#"><img class="full-width img-responsive" src="{{asset('FrontEnd')}}/assets/img/blog/18.jpg" alt=""></a>
                                <a class="product-review" href="shop-ui-inner.html">Quick review</a>
                                <a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </div> 
                            <div class="product-description product-description-brd margin-bottom-30">
                                <div class="overflow-h margin-bottom-5">
                                    <div class="pull-left">
                                        <h4 class="title-price"><a href="shop-ui-inner.html">Double-breasted</a></h4>
                                        <span class="gender text-uppercase">Men</span>
                                        <span class="gender">Suits - Blazers</span>
                                    </div>    
                                    <div class="product-price">
                                        <span class="title-price">$95.00</span>
                                    </div>
                                </div>    
                                <ul class="list-inline product-ratings">
                                    <li><i class="rating-selected fa fa-star"></i></li>
                                    <li><i class="rating-selected fa fa-star"></i></li>
                                    <li><i class="rating-selected fa fa-star"></i></li>
                                    <li><i class="rating fa fa-star"></i></li>
                                    <li><i class="rating fa fa-star"></i></li>
                                    <li class="like-icon"><a data-original-title="Add to wishlist" data-toggle="tooltip" data-placement="left" class="tooltips" href="#"><i class="fa fa-heart"></i></a></li>
                                </ul>    
                            </div>
                        </div>
                    </div>

                    <div class="row illustration-v2 margin-bottom-30">    
                        <div class="col-md-4">
                            <div class="product-img product-img-brd">
                                <a href="#"><img class="full-width img-responsive" src="{{asset('FrontEnd')}}/assets/img/blog/21.jpg" alt=""></a>
                                <a class="product-review" href="shop-ui-inner.html">Quick review</a>
                                <a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </div>
                            <div class="product-description product-description-brd margin-bottom-30">
                                <div class="overflow-h margin-bottom-5">
                                    <div class="pull-left">
                                        <h4 class="title-price"><a href="shop-ui-inner.html">Double-breasted</a></h4>
                                        <span class="gender text-uppercase">Men</span>
                                        <span class="gender">Suits - Blazers</span>
                                    </div>    
                                    <div class="product-price">
                                        <span class="title-price">$95.00</span>
                                    </div>
                                </div>    
                                <ul class="list-inline product-ratings">
                                    <li><i class="rating-selected fa fa-star"></i></li>
                                    <li><i class="rating-selected fa fa-star"></i></li>
                                    <li><i class="rating-selected fa fa-star"></i></li>
                                    <li><i class="rating fa fa-star"></i></li>
                                    <li><i class="rating fa fa-star"></i></li>
                                    <li class="like-icon"><a data-original-title="Add to wishlist" data-toggle="tooltip" data-placement="left" class="tooltips" href="#"><i class="fa fa-heart"></i></a></li>
                                </ul>    
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="product-img product-img-brd">
                                <a href="#"><img class="full-width img-responsive" src="{{asset('FrontEnd')}}/assets/img/blog/22.jpg" alt=""></a>
                                <a class="product-review" href="shop-ui-inner.html">Quick review</a>
                                <a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </div> 
                            <div class="product-description product-description-brd margin-bottom-30">
                                <div class="overflow-h margin-bottom-5">
                                    <div class="pull-left">
                                        <h4 class="title-price"><a href="shop-ui-inner.html">Double-breasted</a></h4>
                                        <span class="gender text-uppercase">Men</span>
                                        <span class="gender">Suits - Blazers</span>
                                    </div>    
                                    <div class="product-price">
                                        <span class="title-price">$60.00</span>
                                        <span class="title-price line-through">$95.00</span>
                                    </div>
                                </div>    
                                <ul class="list-inline product-ratings">
                                    <li><i class="rating-selected fa fa-star"></i></li>
                                    <li><i class="rating-selected fa fa-star"></i></li>
                                    <li><i class="rating-selected fa fa-star"></i></li>
                                    <li><i class="rating fa fa-star"></i></li>
                                    <li><i class="rating fa fa-star"></i></li>
                                    <li class="like-icon"><a data-original-title="Add to wishlist" data-toggle="tooltip" data-placement="left" class="tooltips" href="#"><i class="fa fa-heart"></i></a></li>
                                </ul>    
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="product-img product-img-brd">
                                <a href="#"><img class="full-width img-responsive" src="{{asset('FrontEnd')}}/assets/img/blog/23.jpg" alt=""></a>
                                <a class="product-review" href="shop-ui-inner.html">Quick review</a>
                                <a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                <div class="shop-rgba-red rgba-banner">Out of stock</div>
                            </div> 
                            <div class="product-description product-description-brd">
                                <div class="overflow-h margin-bottom-5">
                                    <div class="pull-left">
                                        <h4 class="title-price"><a href="shop-ui-inner.html">Double-breasted</a></h4>
                                        <span class="gender text-uppercase">Men</span>
                                        <span class="gender">Suits - Blazers</span>
                                    </div>    
                                    <div class="product-price">
                                        <span class="title-price">$95.00</span>
                                    </div>
                                </div>    
                                <ul class="list-inline product-ratings">
                                    <li><i class="rating-selected fa fa-star"></i></li>
                                    <li><i class="rating-selected fa fa-star"></i></li>
                                    <li><i class="rating-selected fa fa-star"></i></li>
                                    <li><i class="rating fa fa-star"></i></li>
                                    <li><i class="rating fa fa-star"></i></li>
                                    <li class="like-icon"><a data-original-title="Add to wishlist" data-toggle="tooltip" data-placement="left" class="tooltips" href="#"><i class="fa fa-heart"></i></a></li>
                                </ul>    
                            </div>
                        </div>
                    </div>

                    <div class="row illustration-v2">
                        <div class="col-md-4">
                            <div class="product-img product-img-brd">
                                <a href="#"><img class="full-width img-responsive" src="{{asset('FrontEnd')}}/assets/img/blog/16.jpg" alt=""></a>
                                <a class="product-review" href="shop-ui-inner.html">Quick review</a>
                                <a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                <div class="shop-rgba-dark-green rgba-banner">New</div>
                            </div> 
                            <div class="product-description product-description-brd margin-bottom-30">
                                <div class="overflow-h margin-bottom-5">
                                    <div class="pull-left">
                                        <h4 class="title-price"><a href="shop-ui-inner.html">Double-breasted</a></h4>
                                        <span class="gender text-uppercase">Men</span>
                                        <span class="gender">Suits - Blazers</span>
                                    </div>    
                                    <div class="product-price">
                                        <span class="title-price">$60.00</span>
                                        <span class="title-price line-through">$95.00</span>
                                    </div>
                                </div>    
                                <ul class="list-inline product-ratings">
                                    <li><i class="rating-selected fa fa-star"></i></li>
                                    <li><i class="rating-selected fa fa-star"></i></li>
                                    <li><i class="rating-selected fa fa-star"></i></li>
                                    <li><i class="rating fa fa-star"></i></li>
                                    <li><i class="rating fa fa-star"></i></li>
                                    <li class="like-icon"><a data-original-title="Add to wishlist" data-toggle="tooltip" data-placement="left" class="tooltips" href="#"><i class="fa fa-heart"></i></a></li>
                                </ul>    
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="product-img product-img-brd">
                                <a href="#"><img class="full-width img-responsive" src="{{asset('FrontEnd')}}/assets/img/blog/17.jpg" alt=""></a>
                                <a class="product-review" href="shop-ui-inner.html">Quick review</a>
                                <a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </div> 
                            <div class="product-description product-description-brd margin-bottom-30">
                                <div class="overflow-h margin-bottom-5">
                                    <div class="pull-left">
                                        <h4 class="title-price"><a href="shop-ui-inner.html">Double-breasted</a></h4>
                                        <span class="gender text-uppercase">Men</span>
                                        <span class="gender">Suits - Blazers</span>
                                    </div>    
                                    <div class="product-price">
                                        <span class="title-price">$60.00</span>
                                        <span class="title-price line-through">$95.00</span>
                                    </div>
                                </div>    
                                <ul class="list-inline product-ratings">
                                    <li><i class="rating-selected fa fa-star"></i></li>
                                    <li><i class="rating-selected fa fa-star"></i></li>
                                    <li><i class="rating-selected fa fa-star"></i></li>
                                    <li><i class="rating fa fa-star"></i></li>
                                    <li><i class="rating fa fa-star"></i></li>
                                    <li class="like-icon"><a data-original-title="Add to wishlist" data-toggle="tooltip" data-placement="left" class="tooltips" href="#"><i class="fa fa-heart"></i></a></li>
                                </ul>    
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="product-img product-img-brd">
                                <a href="#"><img class="full-width img-responsive" src="{{asset('FrontEnd')}}/assets/img/blog/18.jpg" alt=""></a>
                                <a class="product-review" href="shop-ui-inner.html">Quick review</a>
                                <a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </div> 
                            <div class="product-description product-description-brd margin-bottom-30">
                                <div class="overflow-h margin-bottom-5">
                                    <div class="pull-left">
                                        <h4 class="title-price"><a href="shop-ui-inner.html">Double-breasted</a></h4>
                                        <span class="gender text-uppercase">Men</span>
                                        <span class="gender">Suits - Blazers</span>
                                    </div>    
                                    <div class="product-price">
                                        <span class="title-price">$95.00</span>
                                    </div>
                                </div>    
                                <ul class="list-inline product-ratings">
                                    <li><i class="rating-selected fa fa-star"></i></li>
                                    <li><i class="rating-selected fa fa-star"></i></li>
                                    <li><i class="rating-selected fa fa-star"></i></li>
                                    <li><i class="rating fa fa-star"></i></li>
                                    <li><i class="rating fa fa-star"></i></li>
                                    <li class="like-icon"><a data-original-title="Add to wishlist" data-toggle="tooltip" data-placement="left" class="tooltips" href="#"><i class="fa fa-heart"></i></a></li>
                                </ul>    
                            </div>
                        </div>
                    </div>
                </div><!--/end filter resilts-->

                <div class="text-center">
                    <ul class="pagination pagination-v2">
                        <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                        <li><a href="#">1</a></li>
                        <li class="active"><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                    </ul>                                                            
                </div><!--/end pagination-->
            </div>
        </div><!--/end row-->
    </div><!--/end container-->    
    <!--=== End Content Part ===-->

    <!--=== Shop Suvbscribe ===-->
    <div class="shop-subscribe">
        <div class="container">
            <div class="row">
                <div class="col-md-8 md-margin-bottom-20">
                    <h2>subscribe to our weekly <strong>newsletter</strong></h2>
                </div>  
                <div class="col-md-4">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Email your email...">
                        <span class="input-group-btn">
                            <button class="btn" type="button"><i class="fa fa-envelope-o"></i></button>
                        </span>
                    </div>    
                </div>
            </div>
        </div><!--/end container-->
    </div>
    <!--=== End Shop Suvbscribe ===-->

    <!--=== Footer v4 ===-->
    @include('interface_frontend.master_frontend.element.footer')
    <!--=== End Footer v4 ===-->
</div><!--/wrapper-->

<!-- JS Global Compulsory -->
<script src="{{asset('FrontEnd')}}/assets/plugins/jquery/jquery.min.js"></script>
<script src="{{asset('FrontEnd')}}/assets/plugins/jquery/jquery-migrate.min.js"></script>
<script src="{{asset('FrontEnd')}}/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- JS Implementing Plugins -->
<script src="{{asset('FrontEnd')}}/assets/plugins/back-to-top.js"></script>
<script src="{{asset('FrontEnd')}}/assets/plugins/smoothScroll.js"></script>
<script src="{{asset('FrontEnd')}}/assets/plugins/noUiSlider/jquery.nouislider.full.min.js"></script>
<script src="{{asset('FrontEnd')}}/assets/plugins/scrollbar/js/jquery.mCustomScrollbar.concat.min.js"></script>
<!-- JS Customization -->
<script src="{{asset('FrontEnd')}}/assets/js/custom.js"></script>
<!-- JS Page Level -->           
<script src="{{asset('FrontEnd')}}/assets/js/shop.app.js"></script>
<script src="{{asset('FrontEnd')}}/assets/js/plugins/mouse-wheel.js"></script>
<script>
    jQuery(document).ready(function() {
        App.init();
        App.initScrollBar();        
        MouseWheel.initMouseWheel();
    });
</script>
<!--[if lt IE 9]>
    <script src="assets/plugins/respond.js"></script>
    <script src="assets/plugins/html5shiv.js"></script>
    <script src="assets/js/plugins/placeholder-IE-fixes.js"></script>    
<![endif]-->
<!--[if lt IE 10]>
    <script src="assets/plugins/sky-forms-pro/skyforms/js/jquery.placeholder.min.js"></script>
<![endif]-->

</body>
</html> 