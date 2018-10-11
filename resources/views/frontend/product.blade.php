@extends('index_frontend')
@section('content')
<div class="ibanner_w3 pt-sm-5 pt-3">
    <h4 class="head_agileinfo text-center text-capitalize text-center pt-5">
        <span>f</span>ashion
        <span>h</span>ub</h4>
</div>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Shop</li>
    </ol>
</nav>
<div class="innerf-pages section">
    <div class="container">
        <div class="py-sm-5 py-3 right-product-grid">
            @foreach ($categori as $cat)
            <h5 class="shop_w3 text-capitalize">{{$cat->nama_kategori}}</h5>
            <div class="row card-group my-sm-5 mt-5">
                @foreach ($voucher as $data)
                @if($cat->kode_kategori == $data->kode_kategori)
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="card product-men p-3">
                        <div class="men-thumb-item">
                            <img src="{{asset('FrontEnd1')}}/images/pm11.jpg" alt="img" class="card-img-top">
                            <div class="men-cart-pro">
                                <div class="inner-men-cart-pro">
                                    <a href="mens.html" class="link-product-add-cart">Quick View</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body  py-3 px-2">
                            <h5 class="card-title text-capitalize">{{$data->nama_voucher}}</h5>
                            <div class="card-text d-flex justify-content-between">
                                <p class="text-dark font-weight-bold">$20.00</p>
                                <p class="line-through">$25.00</p>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-end">
                            <form action="#" method="post">
                                <input type="hidden" name="cmd" value="_cart">
                                <input type="hidden" name="add" value="1">
                                <input type="hidden" name="hub_item" value="Black Casual Mens Blazer">
                                <input type="hidden" name="amount" value="20.00">
                                <button type="submit" class="hub-cart phub-cart btn">
                                    <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                </button>
                                <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                            </form>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
                <div class="col-lg-3 col-sm-6">
                    <div class="card py-sm-5 border-0">
                        <a class="btn-lg btn-secondary text-center m-5" href="men.html">View More</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection