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
             <div class="card">     
               <div class="card-body"> 
                 <button type="button" class="btn btn-outline-info add-button" data-toggle="modal" data-target="#Modal-add"><i class="fas fa-credit-card"></i> Add Voucher</button>
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
                        @foreach($data as $number => $data)
                        <tr>
                            <td>{{$data->kode_voucher}}</td>
                            <td>{{$data->nama_voucher}}</td>
                            <td>{{$data->kode_kategori}}</td>
                            <td>{{$data->harga_voucher}}</td>
                            <td>{{$data->masa_aktif}}</td>
                            <td>{{$data->status}}</td>
                            <td>
                                <button type="button" class="btn btn-outline-warning" data-toggle="modal" data-target="#Modal-edit{{$data->id}}"><i class="fas fa-pencil-alt"></i></button>
                                <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#Modal-delete{{$data->id}}"><i class="fas fa-trash-alt"></i></button>
                            </td>
                        </tr>
                        @include('backend.voucher.edit')
                        @include('backend.voucher.delete')
                        @endforeach
                    </tbody>
                </table>
            </div>
          </div>
        </div>
        @include('backend.voucher.add')
@endsection