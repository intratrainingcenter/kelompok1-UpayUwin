@extends('../index_backend')
@extends('backend.dashboard.additional')
@section('content')
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Dashboard</h4>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        @include('backend.dashboard.dashboard')
        @include('backend.dashboard.voucher')
        @include('backend.dashboard.item')
        @include('backend.dashboard.category')
        @include('backend.dashboard.user')
        @include('backend.dashboard.report')
        @include('backend.dashboard.customer_service')
        @include('backend.dashboard.setting')
    </div>
</div>
@endsection
