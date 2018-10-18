@extends('interface_frontend.index_voucher')
@section('content')
<div class="shop-product">
            <!-- Breadcrumbs v5 -->
            <div class="container">
                <ul class="breadcrumb-v5">
                    <li><a href="index.html"><i class="fa fa-home"></i></a></li>
                    <li><a href="#">Products</a></li>
                    <li class="active">New</li>
                </ul>
            </div>
            <!-- End Breadcrumbs v5 -->

            <div class="container">
                <div class="row">
                    <div class="col-md-6 md-margin-bottom-50">
                        <div class="ms-showcase2-template">
                            <!-- Master Slider -->
                            <div class="master-slider ms-skin-default" id="masterslider">
                                <div class="ms-slide">
                                    <img class="ms-brd" src="{{asset('FrontEnd')}}/assets/img/blank.gif" data-src="{{asset('FrontEnd')}}/assets/img/blog/28.jpg"
                                        alt="lorem ipsum dolor sit">
                                </div>
                                <div class="ms-slide">
                                    <img src="{{asset('FrontEnd')}}/assets/img/blank.gif" data-src="{{asset('FrontEnd')}}/assets/img/blog/29.jpg"
                                        alt="lorem ipsum dolor sit">
                                </div>
                                <div class="ms-slide">
                                    <img src="{{asset('FrontEnd')}}/assets/img/blank.gif" data-src="{{asset('FrontEnd')}}/assets/img/blog/30.jpg"
                                        alt="lorem ipsum dolor sit">
                                </div>
                            </div>
                            <!-- End Master Slider -->
                        </div>
                    </div>

                    <div class="col-md-6">
                        <h3>Mobile Legend</h3>
                        <p>Integer <strong>dapibus ut elit</strong> non volutpat. Integer auctor purus a lectus
                            suscipit fermentum. Vivamus lobortis nec erat consectetur elementum.</p><br>

                        <h3 class="shop-product-title">Voucher</h3>
                        <form name="f1" class="product-quantity sm-margin-bottom-20">
                                <select class="form-control" name="voucher" id="">

                                </select><br>
                                <button type='button' class="quantity-button" name='subtract' onclick='javascript: subtractQty();'
                                    value='-'>-</button>
                                <input type='text' class="quantity-field" name='qty' value="1" id='qty' />
                                <button type='button' class="quantity-button" name='add' onclick='javascript: document.getElementById("qty").value++;'
                                    value='+'>+</button>
                                <button type="button" class="btn-u btn-u-sea-shop btn-u-lg">Add to Cart</button>
                        </form>

                    </div>
                </div>
                <!--/end row-->
            </div>
        </div>
@endsection