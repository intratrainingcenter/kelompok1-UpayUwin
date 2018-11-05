@foreach ($categori as $cat)
<div class="col-sm-3">
    <div class="product-img product-img-brd">
        @if ($product == 'voucher')
        <a href="{{url('/voucher/'.$cat->id)}}"><img class="full-width img-responsive" src="{{asset('FrontEnd')}}/assets/img/blog/16.jpg" alt=""></a>
        @else
        <a href="{{url('/item_category/'.$cat->nama_kategori)}}"><img class="full-width img-responsive" src="{{asset('FrontEnd')}}/assets/img/blog/16.jpg" alt=""></a>
        @endif
    </div>
    <div class="product-description product-description-brd">
        <div class="overflow-h ">
            <div class="pull-left">
                <h4 class="title-price"><a href="{{url('/voucher/'.$cat->id)}}">{{$cat->nama_kategori}}</a></h4>
            </div>
        </div>
    </div>
</div>
@endforeach