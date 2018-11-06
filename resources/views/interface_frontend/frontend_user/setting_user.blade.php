@extends('interface_frontend.index_user')
@section('content')
				<div class="col-md-9">
					<div class="profile-body margin-bottom-20">
						<div class="tab-v1">
							<ul class="nav nav-justified nav-tabs">
								<li class="active"><a data-toggle="tab" href="#profile">Profile</a></li>
								<li><a data-toggle="tab" href="#edit">Edit Profile</a></li>
								<li><a data-toggle="tab" href="#passwordTab">Change Password</a></li>
								<li><a data-toggle="tab" href="#verifypassword">Account Status</a></li>
							</ul>
							<div class="tab-content">
								
							@include('interface_frontend.frontend_user.tabs.profile')
							@include('interface_frontend.frontend_user.tabs.password')
							@include('interface_frontend.frontend_user.tabs.settings')

							</div>
						</div>
					</div>
				</div>
@endsection