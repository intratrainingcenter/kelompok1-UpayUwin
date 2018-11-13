<div class="modal fade" id="Modal-edit{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none; aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
          <form action="{{ route('category.update',$data->id) }}" method="post" enctype="multipart/form-data" accept-charset="utf-8">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Voucher</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                    @csrf
                    @method('put')
                    <label class="labels">Kode Kategori :</label>  
                    <input type="number" name="code_category" class="form-control" placeholder="Kode Category Here" value="{{$data->kode_kategori}}">
                    
                    <label class="labels">Nama Kategori :</label>     
                    <input type="text" name="category" class="form-control" placeholder="Category Name Here" value="{{$data->nama_kategori}}">
                    
                    <label class="labels">Detail Kategori :</label>     
                    <input type="text" name="detail" class="form-control" placeholder="Category Name Here" value="{{$data->detail}}">
                    
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times"></i> Close</button>
                <button type="submit" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Save</button>
            </div>
            </form>
        </div>
    </div>
</div> 

