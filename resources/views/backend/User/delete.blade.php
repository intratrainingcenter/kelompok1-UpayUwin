<div class="modal fade" id="Modal-delete{{$data_user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none; aria-hidden="true" ">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
          <form action="{{ route('user.destroy',['id'=>$data_user->id]) }}" method="post" accept-charset="utf-8">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                    @csrf()
                    @method('delete')
                    <center>
                        <h3>Konfirmasi Hapus User</h3>
                        <p>Apakah Anda ingin Menghapus User</p>
                        <p>{{$data_user->name}}</p>
                    </center>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times"></i> Close</button>
                <button type="submit" class="btn btn-danger"><i class="fas fa-check"></i> Hapus</button>
            </div>
            </form>
        </div>
    </div>
</div>
