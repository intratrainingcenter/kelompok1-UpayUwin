@extends('interface_frontend.index_product')
@extends('interface_frontend.frontend_shop.voucher.additional')
@section('content')
<div class="shop-product">
            <div class="container">
                <ul class="breadcrumb-v5">
                    <li><a href="index.html"><i class="fa fa-home"></i></a></li>
                    <li><a href="#">Voucher</a></li>
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
                                    <img class="ms-brd" src="{{asset('FrontEnd')}}/assets/img/blank.gif" data-src="{{asset('FrontEnd')}}/assets/img/blog/28.jpg">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <h3>Mobile Legend</h3>
                        <p>Integer <strong>dapibus ut elit</strong> non volutpat. Integer auctor purus a lectus
                            suscipit fermentum. Vivamus lobortis nec erat consectetur elementum.</p><br>

                        <h3 class="shop-product-title">Voucher</h3>
                        <form id="form_order" action="/voucher/store" name="f1" class="product-quantity sm-margin-bottom-20" method="post">
                            @csrf
                            <select class="form-control" name="voucher" id="">
                                @foreach ($voucher as $data)
                                    <option value="{{$data->id}}">{{$data->nama_voucher}} | {{"Rp.".number_format($data->harga_voucher)}}</option>
                                @endforeach
                            </select><br>
                            <button type='button' class="quantity-button" name='subtract' onclick='javascript: subtractQty();' value='-'>-</button>
                            <input type='text' class="quantity-field" name='qty' value="1" id='qty' />
                            <button type='button' class="quantity-button" name='add' onclick='javascript: document.getElementById("qty").value++;' value='+'>+</button>
                            <button type="submit" class="btn-u btn-u-sea-shop btn-u-lg">Add to Cart</button>
                            @if(Session::has("message"))
                            <p class="alert {{ Session::get("alert-class", "alert-info") }}">{{ Session::get("message") }}</p>
                            @endif
                        </form>

                    </div>
                </div>
            </div>
        </div>
@endsection