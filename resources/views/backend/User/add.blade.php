<div class="modal fade" id="Modal-add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none; aria-hidden="true" ">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
          <form id="form_add" action="{{ route('user.store') }}" method="post" accept-charset="utf-8">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                    @csrf()
                    <label class="labels">Nama :</label>
                    <input type="text" name="name" class="form-control" placeholder="Nama Here" required>

                    <label class="labels">Email :</label>
                    <input type="text" name="email" class="form-control" placeholder="Email Here" required>

                    <label class="labels">Password</label>
                    <input type="text" name="password" class="form-control" placeholder="Password Here" required>
                    <input type="hidden" name="level" class="form-control" value="admin">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times"></i> Close</button>
                <button id="save" type="submit" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Save</button>
            </div>
            </form>
        </div>
    </div>
</div>
