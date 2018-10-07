<div class="modal fade" id="Modal-edit{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none; aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
          <form action="{{ route('voucher.update',$data->id) }}" method="post" accept-charset="utf-8">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Voucher</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                    @csrf
                    @method('put')
                    <label class="labels">Kode Voucher :</label>  
                    <input type="number" name="code_voucher" class="form-control" placeholder="Kode Voucher Here" value="{{$data->kode_voucher}}">
                    
                    <label class="labels">Nama Voucher :</label>     
                    <input type="text" name="name_voucher" class="form-control" placeholder="Nama Voucher Here" value="{{$data->nama_voucher}}">
                     
                    <label class="labels">Kategori :</label>
                    <input type="text" name="category" class="form-control" placeholder="Kategori Here" value="{{$data->kode_kategori}}">
                     
                    <label class="labels">Harga :</label> 
                    <input type="number" name="price" class="form-control" placeholder="Harga Here" value="{{$data->harga_voucher}}">
                      
                    <label class="labels">Masa Aktif :</label>
                    <input type="date" name="active_period" class="form-control" id="cono1" value="{{$data->masa_aktif}}">
                   
                    <label class="labels">Status :</label>
                    <select class="form-control" name="status">
                        @if($data->status != 'aktif')
                            <option value="aktif">Aktif</option>
                            <option value="pasif" selected="">Pasif</option>
                        @else
                            <option value="aktif" selected="">Aktif</option>
                            <option value="pasif">Pasif</option>
                        @endif
                    </select>      
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times"></i> Close</button>
                <button type="submit" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Save</button>
            </div>
            </form>
        </div>
    </div>
</div> 

