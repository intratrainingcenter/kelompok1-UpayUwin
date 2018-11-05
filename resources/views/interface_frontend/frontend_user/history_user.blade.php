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
									<th>Number</th>
									<th>Goods</th>
									<th class="hidden-sm">Quantity</th>
									<th>Price</th>
									<th>Status</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>Mark</td>
									<td class="hidden-sm">Otto</td>
									<td>@mdo</td>
									<td><span class="label label-warning">Expiring</span></td>
								</tr>
								
							</tbody>
						</table>
					</div>
					<!--End Basic Table-->
				</div>
@endsection