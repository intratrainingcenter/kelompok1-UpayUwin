<!DOCTYPE html>
<html>
<head>
	<title>Setup Application</title>
	@include('master_backend.css_index_backend')
	@include('backend.setting.css')
</head>
<body>
	       
	<div class="container-fluid">
		<div class="row"  style="margin-top: 20px;">
			<div class="col-md-12">	
				<div class="card">
					<div class="card-body">
						<h3><i class=" fas fa-seedling"></i> Get Started Application Setup</h3>
					</div>
				</div>
			</div>
		</div>	
		<form action="{{ route('setting.store') }}" method="post" enctype="multipart/form-data">
			@csrf()
			<div class="row">
				<div class="col-md-3">
					<div class="card">
						<div class="card-body">
							<h4><i class=" fas fa-images"></i> Website Logo</h4>
							<hr>
							<img id="logo" class="logo" src="{{ asset('img/noimage.jpg') }}" alt="Image">
							<hr>
							 <div class="custom-file">
	                            <input id="input_logo" type="file" class="custom-file-input" name="image" required="">
	                            <label class="custom-file-label" for="validatedCustomFile">Logo...</label>
	                            <div class="invalid-feedback">Example invalid custom file feedback</div>
	                        </div>
						</div>
					</div>
				</div>
				<div class="col-md-9">
					<div class="card">
						<div class="card-body">
							<h4><i class=" fas fa-cogs"></i> General Settings</h4>
							<hr>
								<label>Nama Website</label>
								<input type="text" class="form-control" name="web_name" required="">

								<label class="labels">Alamat Perusahaan</label>
								<input type="text" class="form-control" name="company_address" required="">

								<label class="labels">Nomor Telphone</label>
								<input type="number" class="form-control" name="phone_number" required="">
							<hr>
								 <button id="save" type="submit" class="btn btn-dark"><i class="fas fa-paper-plane"></i> Save</button>	
						</div>
					</div>
				</div>
			</div>
		</form>
	 	@if ($errors->any())
		 	<div class="alert alert-danger" role="alert">
	        	<ul>
		        	@foreach ($errors->all() as $error)
		            	<li>{{ $error }}</li>
		        	@endforeach
		    	</ul>
	     </div>
    	@endif
	</div>
	 @include('master_backend.js_index_backend')
	 @include('backend.setting.js')
</body>
</html>