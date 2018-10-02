@extends('../index_backend')
@extends('backend.voucher.additional')
@section('content')
	<div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Voucher</h4>
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
                 <a type="button" href="{{route('voucher.create')}}" class="btn btn-success add-voucher"><i class="fas fa-credit-card"></i> Add Voucher</a>
            
                <table class="table">
                    <thead>
                        <tr>
                            <th>Kode Voucher</th>
                            <th>Nama Voucher</th>
                            <th>Kategori</th>
                            <th>Harga Voucher</th>
                            <th>Masa Aktif</th>
                            <th>Status</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>2017120088</td>
                            <td>Garena</td>
                            <td>game</td>
                            <td>50.000</td>
                            <td>5 tahun</td>
                            <td>hangus</td>
                            <td>
                                <button type="button" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></button>
                                <button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
@endsection