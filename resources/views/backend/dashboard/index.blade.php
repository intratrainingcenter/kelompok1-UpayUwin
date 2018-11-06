@extends('../index_backend')
@extends('backend.dashboard.additional')

@section('content')
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Dashboard</h4>
            <div class="ml-auto text-right">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Library</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            <div class="card card-hover">
                <div class="box bg-cyan text-center">
                    <h1 class="font-light text-white"><i class="mdi mdi-view-dashboard"></i></h1>
                    <h6 class="text-white">Dashboard</h6>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card card-hover">
                <div class="box bg-success text-center">
                    <a href="{{url('/backend/voucher')}}">
                        <h1 class="font-light text-white"><i class="fab fa-steam"></i></h1>
                        <h6 class="text-white">Voucher</h6>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card card-hover">
                <div class="box bg-danger text-center">
                    <a href="{{url('/backend/item')}}">
                        <h1 class="font-light text-white"><i class="fas fa-shield-alt"></i></h1>
                        <h6 class="text-white">Item</h6>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-hover">
                <div class="box bg-warning text-center">
                    <h1 class="font-light text-white"><i class="fas fa-gamepad"></i></h1>
                    <h6 class="text-white">Kategori</h6>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card card-hover">
                <div class="box bg-danger text-center">
                    <a href="{{url('/backend/user')}}">
                        <h1 class="font-light text-white"><i class="fas fa-user"></i></h1>
                        <h6 class="text-white">User</h6>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-hover">
                <div class="box bg-info text-center">
                    <h1 class="font-light text-white"><i class="fas fa-book"></i></h1>
                    <h6 class="text-white">Laporan</h6>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card card-hover">
                <div class="box bg-success text-center">
                    <a href="{{url('/backend/customer')}}">
                        <h1 class="font-light text-white"><i class="fas fa-people-carry"></i></h1>
                        <h6 class="text-white">Customer Service</h6>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card card-hover">
                <div class="box bg-warning text-center">
                    <a href="{{url('/backend/setting')}}">
                        <h1 class="font-light text-white"><i class="fas fa-wrench"></i></h1>
                        <h6 class="text-white">Setting</h6>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection