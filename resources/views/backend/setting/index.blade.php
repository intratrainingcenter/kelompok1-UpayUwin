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
                      <div class="col-sm-9">
                        <img width="150px" src="{{asset('backend/img')}}/{{$data->logo}}" id="logonya" alt="">
                        <input type="file" class="form-control" name="logo" id="logo" required="">
                        <img id="preview_logo" src="#" alt=""/>
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
                            <input type="text" class="form-control" name="phone" value="{{$data->telp}}" required="">
                      </div>
                  </div>
              </div>
              <div class="border-top">
                  <div class="card-body">
                      <button type="button" class="btn btn-primary">Submit</button>
                  </div>
              </div>
          </form>
        </div>
      </div>

@endsection
