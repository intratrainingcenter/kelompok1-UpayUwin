@extends('../index_backend')
@extends('backend.item.additionalbitem')
@section('content')
					<div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">item</h4>
                    </div>
                </div>
            </div>
            @include('backend.item.add')
            <div class="container-fluid">
             <div class="card">
               <div class="card-body">
                 <button type="button" class="btn btn-outline-info add-button" data-toggle="modal" data-target="#Modal-add"><i class="fas fa-credit-card"></i> Add item</button>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Kode item</th>
                            <th>Nama item</th>
                            <th>Kategori</th>
                            <th>Harga item</th>
                            <th>Deskripsi</th>
														<th>Stok</th>
														<th>Gambar</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody id="result">

                    </tbody>
                </table>
            </div>
          </div>
        </div>
				@include('backend.item.edit')
				@include('backend.item.delete')
@endsection
