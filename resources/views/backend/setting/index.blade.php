@extends('../index_backend')
@extends('backend.setting.additional')

@section('content')

        <div class="card">
            <form class="form-horizontal" id="form_setting" method="POST" action="{{route('setting2.update',['id'=>$data->id])}}" enctype="multipart/form-data">
                @csrf @method('PATCH')
              <div class="card-body">
                  <h4 class="card-title">Setting</h4>
                  <div class="row">
                    <div class="modal-body col-md-6">
                      <label for="fname" class="col-sm-3 text-right control-label col-form-label">Logo</label>
                      <img width="300px" id="logo" src="{{asset('backend/img')}}/{{$data->logo}}" class="img-responsive img-thumbnail" >
                      <img width="300px" id="uploadPreview" width="500px" src="#" class="img-responsive img-thumbnail">
                        <input type="file" class="form-control" name="logo" id="image" required="">
                    </div>

                    <div class="modal-body col-md-6">
                      <div class="form-group">
                      <label for="lname" >Name</label>
                      <input type="text" class="form-control" name="name_ecommerce" value="{{$data->nama_ecommerce}}" required="">
                      </div>
                      <div class="form-group">
                      <label for="lname" >address</label>
                      <input type="text" class="form-control" name="address" value="{{$data->alamat}}" required="">
                      </div>
                      <label for="email1" >Phone</label>
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

@endsection
