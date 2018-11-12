<div class="modal fade" id="Modal-view{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none; aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
          
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Voucher</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                    
                    <label class="labels">Kode Transaksi :</label>  
                    <input type="text" name="code_category"  disabled="disabled" class="form-control" placeholder="Kode Category Here" value="{{$data->kode_transaksi}}">
                    
                    <label class="labels">id_user :</label>     
                    <input type="text" name="category"  disabled="disabled" class="form-control" placeholder="Category Name Here" value="{{$data->id_user}}">
                    
                    <label class="labels">Tanggal :</label>     
                    <input type="text" name="detail"  disabled="disabled" class="form-control" placeholder="Category Name Here" value="{{$data->tanggal_transaksi}}">
                    
                    <label class="labels">Total :</label>     
                    <input type="text" name="detail"  disabled="disabled" class="form-control" placeholder="Category Name Here" value="{{$data->total}}">
                    
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times"></i> Close</button>
                
            </div>
            
        </div>
    </div>
</div> 

