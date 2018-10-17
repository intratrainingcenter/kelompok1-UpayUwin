@extends('index_frontend')
@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{url('/')}}">Home</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">{{$categori->nama_kategori}}</li>
    </ol>
</nav>
<div class="ibanner_w3 pt-sm-5 pt-3">
    <h4 class="head_agileinfo text-center text-capitalize text-center pt-5">
        <span>f</span>ashion
        <span>h</span>ub</h4>
</div>
<div class="innerf-pages section py-5">
    <div class="container">
        <div class="row my-sm-5">
            <div class="col-lg-4 single-right-left">
                <div class="grid images_3_of_2">
                    <div class="flexslider1">
                        <ul class="slides">
                            <li data-thumb="images/ms1.jpg">
                                <div class="thumb-image">
                                    <img src="{{asset('FrontEnd1')}}/images/pm11.jpg" data-imagezoom="true" alt=" "
                                        class="img-fluid"> </div>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 mt-lg-0 mt-5 single-right-left simpleCart_shelfItem">
                <h3>{{$categori->nama_kategori}}</h3>
                <p class="text-dark font-weight-bold">
                    Mobile Legends: Bang Bang! adalah game untuk perangkat Android dan iOS bergenre MOBA dengan battle
                    system PvP 5v5. Kontrol dalam game ini dimaksimalkan untuk perangkat touchscreen sehingga gameplay
                    akan terasa intens dan cepat. Untuk kamu pengguna perangkat Android jangan sampai tertinggal dengan
                    lawan maupun teman-temanmu, dapatkan Hero favorit beserta skin keren dengan cara terbaik yaitu
                    menggunakan Voucher Google Play sekarang juga! Dijamin murah, aman dan terpercaya.
                </p>
                <hr>
                <div class="description">
                    <h5>Cek voucher untuk {{$categori->nama_kategori}}</h5>
                    <form action="#" method="post">
                        <div class="form-group">
                        <select class="form-control" name="voucher">
                            @foreach ($voucher as $data)
                                <option value="{{$data->kode_voucher}}">{{$data->nama_voucher}} harga {{"Rp.".number_format($data->harga_voucher)}}</option>
                            @endforeach
                        </select>
                        </div>
                </div>
                <div class="occasion-cart">
                    <div class="chr single-item single_page_b">
                            <input type="hidden" name="cmd" value="_cart">
                            <input type="hidden" name="add" value="1">
                            <input type="hidden" name="hub_item" value="mobile">
                            <input type="hidden" name="amount" value="22">
                            <button type="submit" class="hub-cart phub-cart btn">
                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                            </button>
                            <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection