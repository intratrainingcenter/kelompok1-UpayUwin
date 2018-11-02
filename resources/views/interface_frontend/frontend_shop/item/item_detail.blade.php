@extends('interface_frontend.index_product')
@extends('interface_frontend.frontend_shop.item.additional_detail')
@section('content')
<div class="shop-product">
            <div class="container">
                <ul class="breadcrumb-v5">
                    <li><a href="index.html"><i class="fa fa-home"></i></a></li>
                    <li><a href="{{url('/item')}}">Item</a></li>
                    <li class="active" id="active"></li>
                </ul>
            </div>

            <div class="container">
                <div class="row" id="load_data" index="{{$id}}">
                    
                </div>
            </div>
        </div>
@endsection