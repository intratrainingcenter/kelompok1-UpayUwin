@extends('interface_frontend.index_user')
@section('content')
				<div class="col-md-9">
					<!--Basic Table-->
					<div class="panel panel-green margin-bottom-40">
                        <div class="panel-heading">
							<h3 class="panel-title"><i class="fa fa-tasks"></i>History Transaction</h3>
						</div>
						<div class="panel-body">
							<p>History of your transaction, what things & items you have done purchased</p>
						</div>
						<table class="table">
							<thead>
								<tr>
									<th>Transaction Code</th>
									<th>Goods</th>
									<th class="hidden-sm">Quantity</th>
									<th>Price</th>
									<th>Time &amp; Date</th>
									<th>Status</th>
								</tr>
							</thead>
							<tbody>
							@foreach($data as $index => $data)
								<tr>
									<td>{{$data->kode_transaksi}}</td>
									<td>{{$data->kode_voucher}}</td>
									<td class="hidden-sm">{{$data->jumlah}}</td>
									<td>{{$data->harga}}</td>
									<td>{{$data->created_at}}</td>
									<td><span class="label label-success">Paid</span></td>
								</tr>
							@endforeach
							</tbody>
						</table>
					</div>
					<!--End Basic Table-->
				</div>
@endsection