@extends('../index_backend')
@extends('backend.setting.additional')

@section('content')
<div class="col-md-6 col-xs-9">
<div class="col-md-12">

<div class="panel">
    <div class="panel-body">
            <form id="form_setting" method="POST" action="{{route('setting.update',['id'=>$data->id])}}">
                @csrf @method('PATCH')
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" class="form-control" name="nama_ecommerce" value="{{$data->nama_ecommerce}}" required="">
                    </div>
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <input type="text" class="form-control" name="alamat" value="{{$data->alamat}}" required="">
                    </div>
                    <div class="form-group">
                        <label for="">Telepon</label>
                        <input type="text" class="form-control" name="telp" value="{{$data->telp}}" required="">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success btn-3d">Simpan</button>
                </div>
            </form>
    </div>
</div>

</div>
</div>
@endsection
