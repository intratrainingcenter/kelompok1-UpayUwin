@extends('../index_backend')
@section('content')
	<div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Kategori</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Kategori</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
             <div class="card">     
               <div class="card-body"> 
                 <button type="button" class="btn btn-outline-info add-button" data-toggle="modal" data-target="#Modal-add"><i class="fas fa-credit-card"></i> Add Kategori</button>
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Kategori</th>
                            <th>Kategori</th>
                            <th>Detail</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($transaksi as $number => $data)
                        <tr>
                            <td>{{$number + 1}}</td>
                            <td>{{$data->kode_kategori}}</td>
                            <td>{{$data->nama_kategori}}</td>
                            <td>{{$data->detail}}</td>
                            <td>
                                <button type="button" class="btn btn-outline-warning" data-toggle="modal" data-target="#Modal-edit{{$data->id}}"><i class="fas fa-pencil-alt"></i></button>
                                <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#Modal-delete{{$data->id}}"><i class="fas fa-trash-alt"></i></button>
                            </td>
                        </tr>
                        @include('backend.kategori.view')
                        @endforeach
                    </tbody>
                </table>
            </div>
          </div>
        </div>
@endsection