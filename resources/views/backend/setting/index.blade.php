@extends('../index_backend')
@extends('backend.setting.additional')

@section('content')
  <div class="col-md-6">

        <div class="card">
            <form class="form-horizontal" id="form_setting" method="POST" action="{{route('setting2.update',['id'=>$data->id])}}" enctype="multipart/form-data">
                @csrf @method('PATCH')
              <div class="card-body">
                  <h4 class="card-title">Setting</h4>
                  <div class="form-group row">
                      <label for="fname" class="col-sm-3 text-right control-label col-form-label">Image</label>
                      <img width="300px" id="logo" src="{{asset('backend/img')}}/{{$data->logo}}" class="img-responsive img-thumbnail" >
                      <img width="300px" id="uploadPreview" width="500px" src="#" class="img-responsive img-thumbnail">
                      <div class="col-sm-9">
                        <label for="image-upload">Logo</label>
                        <input type="file" class="form-control" name="logo" id="image" required="">
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="lname" class="col-sm-3 text-right control-label col-form-label">Name</label>
                      <div class="col-sm-9">
                            <input type="text" class="form-control" name="name_ecommerce" value="{{$data->nama_ecommerce}}" required="">
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="lname" class="col-sm-3 text-right control-label col-form-label">address</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="address" value="{{$data->alamat}}" required="">
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="email1" class="col-sm-3 text-right control-label col-form-label">Phone</label>
                      <div class="col-sm-9">
                            <input type="number" class="form-control" name="phone" value="{{$data->telp}}" required="">
                      </div>
                  </div>
              </div>
              <div class="border-top">
                  <div class="card-body">
                      <button type="submit" class="btn btn-primary">Simpan</button>
                  </div>
              </div>
          </form>
        </div>
      </div>

@endsection
