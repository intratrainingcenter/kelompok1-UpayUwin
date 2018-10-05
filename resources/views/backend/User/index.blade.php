@extends('../index_backend')
@extends('backend.User.additional')

@section('content')
          <div class="page-breadcrumb">
              <div class="row">
                  <div class="col-12 d-flex no-block align-items-center">
                      <h4 class="page-title">User</h4>
                      <div class="ml-auto text-right">
                      </div>
                  </div>
              </div>
          </div>
          <div class="container-fluid">
           <div class="card">
             <div class="card-body">
               <button type="button" class="btn btn-outline-info add-button" data-toggle="modal" data-target="#Modal-add"><i class="fas fa-credit-card"></i> Add User</button>
              <table class="table">
                  <thead>
                      <tr>
                          <th>No</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Saldo</th>
                          <th>level</th>
                          <th>Opsi</th>
                      </tr>
                  </thead>
                  <tbody>
                        <?php $no = 0;?>
                        <?php foreach ($data as $data_user): ?>
                        <?php $no++ ;?>
                        <tr>
                          <td>{{$no}}</td>
                          <td>{{$data_user->name}}</td>
                          <td>{{$data_user->email}}</td>
                          <td>{{$data_user->saldo}}</td>
                          <td>{{$data_user->level}}</td>
                          <td>
                            <button type="button" class="btn btn-outline-warning" data-toggle="modal" data-target="#Modal-edit{{$data_user->id}}"><i class="fas fa-pencil-alt"></i></button>
                            <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#Modal-delete{{$data_user->id}}"><i class="fas fa-trash-alt"></i></button>
                          </td>
                        </tr>
                        @include('backend.User.edit')
                        @include('backend.User.delete')
                        <?php endforeach; ?>
                  </tbody>
              </table>
          </div>
        </div>
      </div>
      @include('backend.User.add')
@endsection
