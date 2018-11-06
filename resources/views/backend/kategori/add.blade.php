<div class="modal fade" id="Modal-add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none; aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
          <form id="form_add" action="{{ route('category.store') }}" method="post" enctype="multipart/form-data" accept-charset="utf-8">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Voucher</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                    @csrf()
                    <label class="labels">Code Category :</label>  
                    <input type="text" id="code" name="code_category" class="form-control" placeholder="Insert Code of New Category here" required>
                    
                    <label class="labels">New Category :</label>  
                    <input type="text" id="code" name="category" class="form-control" placeholder="Insert Name of New Category here" required>
                    
                    <div id="label_danger" class="invalid-feedback">
                        Kode Voucher Sudah Ada
                    </div>
                    
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times"></i> Close</button>
                <button id="save" type="submit" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Save</button>
            </div>
            </form>
        </div>
    </div>
</div> 
@if ($errors->any())
 <div class="alert alert-danger" role="alert" style="margin-top: 20px;">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
      <h4 class="alert-heading">Something Wrong!</h4>
      <hr>
      @foreach($errors->all() as $error)
        <p>{{ $error }}</p>
      @endforeach
</div>
@endif

