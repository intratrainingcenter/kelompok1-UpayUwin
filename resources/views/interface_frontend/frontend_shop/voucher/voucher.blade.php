@extends('interface_frontend.index_product')
@extends('interface_frontend.frontend_shop.voucher.additional')
@section('content')
<div class="shop-product">
            <div class="container">
                <ul class="breadcrumb-v5">
                    <li><a href="#"><i class="fa fa-home"></i></a></li>
                    <li><a href="{{url('/voucher')}}">Voucher</a></li>
                    <li class="active">{{$category->nama_kategori}}</li>
                </ul>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 md-margin-bottom-50">
                        <div class="ms-showcase2-template">
                            <!-- Master Slider -->
                            <div class=" ms-skin-default" id="masterslider">
                                <div class="ms-slide">
                                    <img class="ms-brd" src="{{asset('img/voucher.jpg')}}" data-src="{{asset('img/voucher.jpg')}}">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <h3>Mobile Legend</h3>
                        <p>{{$category->detail}}</p>
                        <h3 class="shop-product-title">Voucher</h3>
                        <form id="form_order" action="/voucher/store" name="f1" class="product-quantity sm-margin-bottom-20" method="post">
                            @csrf
                            <select class="form-control" name="voucher" id="">
                                @foreach ($voucher as $data)
                                    <option value="{{$data->id}}">{{$data->nama_voucher}} | {{"$ ".number_format($data->harga_voucher,2)}}</option>
                                @endforeach
                            </select><br>
                            <button type='button' class="quantity-button" name='subtract' onclick='javascript: subtractQty();' value='-'>-</button>
                            <input type='text' class="quantity-field" name='qty' value="1" id='qty' />
                            <button type='button' class="quantity-button" name='add' onclick='javascript: document.getElementById("qty").value++;' value='+'>+</button>
                            @if (Auth::check())
                                <button type="submit" class="btn-u btn-u-sea-shop btn-u-lg">Add to Cart</button>
                            @else
                                <button type="button" class="btn-u btn-u-sea-shop btn-u-lg" disabled="">Add to Cart</button>
                                <p class="alert alert-danger">Login Untuk Melanjutkan Proses</p>
                            @endif
                            @if(Session::has("message"))
                            <p class="alert {{ Session::get("alert-class", "alert-info") }}">{{ Session::get("message") }}</p>
                            @endif
                        </form>

                    </div>
                </div>
            </div>
        </div>
@endsection
