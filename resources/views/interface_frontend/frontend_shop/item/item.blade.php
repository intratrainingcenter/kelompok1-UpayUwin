@extends('interface_frontend.index_shop')
@extends('interface_frontend.frontend_shop.item.add')
@section('content')

<div class="row" id="hasil">
    
    <div class="row ">
        <div class="col-sm-3 result-category">
            <h1>{{$category}}</h1>
            <small class="shop-bg-red badge-results" id="count"></small><br><br>
        </div>
    </div>
    <div class="filter-results">
        <div class="row illustration-v2" id="load" category="{{$category}}">
        </div>
    </div>
</div>
@endsection