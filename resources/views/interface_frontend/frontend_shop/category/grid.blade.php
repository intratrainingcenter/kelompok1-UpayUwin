@extends('interface_frontend.frontend_shop.category.additional')

@include('interface_frontend.master_frontend.element.resource_header')
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
            </div>
            <!--/end container-->
        </div>
        <!--=== End Breadcrumbs v4 ===-->

        <!--=== Content Part ===-->
        <div class="content container">
            <div class="row">
                <div class="col-md-3 filter-by-block md-margin-bottom-60">
                    <h1>Filter By</h1>

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
                    </div>
                    <!--/end panel group-->
                    <button type="button" class="btn-u btn-brd btn-brd-hover btn-u-lg btn-u-sea-shop btn-block">Reset</button>
                </div>

                <div class="col-md-9">
                    <div class="row margin-bottom-5">
                        <div class="col-sm-4 result-category">
                            <h2>Voucher</h2>
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
                    </div>
                    <!--/end result category-->

                    <div class="filter-results">
                        <div class="row illustration-v2 margin-bottom-30">
                            @foreach ($categori as $cat)
                            <div class="col-md-4">
                                <div class="product-img product-img-brd">
                                    <a href="{{url('/voucher/'.$cat->id)}}"><img class="full-width img-responsive" src="{{asset('FrontEnd')}}/assets/img/blog/16.jpg"
                                            alt=""></a>
                                </div>
                                <div class="product-description product-description-brd margin-bottom-30">
                                    <div class="overflow-h margin-bottom-5">
                                        <div class="pull-left">
                                            <h4 class="title-price"><a href="{{url('/voucher/'.$cat->id)}}">{{$cat->nama_kategori}}</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <ul class="pagination pagination-v2">
                        <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                        <li><a href="#">1</a></li>
                        <li class="active"><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                    </ul>
                </div>
                <!--/end pagination-->
            </div>
        </div>
        <!--/end row-->
    </div>
    <!--/end container-->
    <!--=== End Content Part ===-->
    @include('interface_frontend.master_frontend.element.footer')
    </div>
    @yield('add_footer')

</body>

</html>