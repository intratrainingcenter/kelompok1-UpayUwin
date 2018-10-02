@extends('../index_backend')
@extends('backend.voucher.additional')
@section('content')
	<div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Add Voucher</h4>
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
                <form action="{{ route('voucher.store') }}" method="post" accept-charset="utf-8">
                    @csrf()
                    <div class="form-group row line">
                        <label for="fname" class="col-sm-2 text-right control-label col-form-label">Kode Voucher</label>
                        <div class="col-sm-8">
                            <input type="number" name="code_voucher" class="form-control" placeholder="Kode Voucher Here">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lname" class="col-sm-2 text-right control-label col-form-label">Nama Voucher</label>
                        <div class="col-sm-8">
                            <input type="text" name="name_voucher" class="form-control" placeholder="Nama Voucher Here">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lname" class="col-sm-2 text-right control-label col-form-label">Kategori</label>
                        <div class="col-sm-8">
                            <input type="text" name="category" class="form-control" placeholder="Kategori Here">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email1" class="col-sm-2 text-right control-label col-form-label">Harga</label>
                        <div class="col-sm-8">
                            <input type="number" name="price" class="form-control" placeholder="Harga Here">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cono1" class="col-sm-2 text-right control-label col-form-label">Masa Aktif</label>
                        <div class="col-sm-8">
                            <input type="date" name="active_period" class="form-control" id="cono1">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cono1" class="col-sm-2 text-right control-label col-form-label">Status</label>
                        <div class="col-sm-8">
                            <select class="form-control" name="status">
                                <option value="aktif">Aktif</option>
                                <option value="pasif">Pasif</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-8">
                            <button type="submit" class="btn btn-dark">Submit</button>
                        </div>
                    </div>
                </form>    
              </div>  
            </div>  
           </div>
@endsection

