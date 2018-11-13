@extends('../index_backend')
@section('content')
	<div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Kategori</h4>
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
                            <th>Kode Transaksi</th>
                            <th>User</th>
                            <th>Tanggal</th>
                            <th>Total Belanja</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($transaksi as $number => $data)
                        <tr>
                            <td>{{$number + 1}}</td>
                            <td>{{$data->kode_transaksi}}</td>
                            <td>{{$data->id_user}}</td>
                            <td>{{$data->tanggal_transaksi}}</td>
                            <td>{{$data->total}}</td>
                            <td>
                                <button type="button" class="btn btn-outline-warning" data-toggle="modal" data-target="#Modal-view{{$data->kode_transaksi}}"><i class="fas fa-pencil-alt"></i></button>
                            </td>
                        </tr>
                        
                
                        @endforeach
                    </tbody>
                </table>
                @foreach($transaksi as $number => $data)
                @include('backend.laporan.view')
                @endforeach
            </div>
          </div>
        </div>
@endsection
