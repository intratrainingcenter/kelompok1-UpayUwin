<div class="modal fade" id="accountsetting" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none; aria-hidden="true" ">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
          <form action="" method="post" accept-charset="utf-8">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Account Setting</h5>
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
                <input type="text" name="name" value="{{ Auth::user()->name }}" class="form-control" disabled>
              </div>
            </div>
              <div class="form-group row">
                <label class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                <input type="text" name="name" value="{{ Auth::user()->email }}" class="form-control" disabled>
              </div>
              </div>
            </div>
            </form>
        </div>
    </div>
</div>
