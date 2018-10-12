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
            <h5 class="shop_w3 text-capitalize">TOP Games</h5>
            <div class="row card-group my-sm-5 mt-5">
                @foreach ($categori as $cat)
                    
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="card product-men p-3">
                        <div class="men-thumb-item">
                            <img src="{{asset('FrontEnd1')}}/images/pm11.jpg" alt="img" class="card-img-top">
                            <div class="men-cart-pro">
                                <div class="inner-men-cart-pro">
                                    <a href="{{url('/game/'.$cat->kode_kategori)}}" class="link-product-add-cart">Quick View</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body  py-3 px-2">
                            <h4 class="card-title text-capitalize">{{$cat->nama_kategori}}</h4>
                        </div>
                    </div>
                </div>
                @endforeach
                
            </div>
        </div>
    </div>
</div>
@endsection