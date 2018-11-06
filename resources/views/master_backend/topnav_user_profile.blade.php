<div class="modal fade" id="Profile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none; aria-hidden="true" ">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
          <form method="post" action="{{Route('user.update',['id'=>auth::user()->id])}}" id="edit_user" accept-charset="utf-8">
            @csrf @method('PATCH')
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Profile</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
              <div class="col-md-12">
                <br>
                <br>
                <img src="{{asset('backend/img/avatar.png')}}" style="display: block; margin: 0 auto; text-align: center; width: 256px; height: 256px;"
                class="img-circle avatar" alt="user name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" />
                <br>
              </div>
              <div class="col-md-12">
              <div class="form-group row">
                <label class="col-sm-2 control-label">Nama</label>
                <div class="col-sm-10">
                <input type="text" name="name" value="{{ Auth::user()->name }}" class="form-control">
              </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                <input type="text" name="email" value="{{ Auth::user()->email }}" class="form-control">
              </div>
              </div>
            </div>
            <button id="save_edituser" type="submit" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Save</button>
            </div>
            </form>
        </div>
    </div>
</div>
