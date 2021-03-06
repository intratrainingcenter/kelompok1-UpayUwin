<div class="modal fade" id="Modal-add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none; aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
          <form id="form_add" action="{{ route('voucher.store') }}" method="post" enctype="multipart/form-data" accept-charset="utf-8">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Voucher</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                    @csrf()
                    <label class="labels">Kode Voucher :</label>  
                    <input type="text" id="code" name="code_voucher" class="form-control" placeholder="Kode Voucher Here" required>
                    <div id="label_danger" class="invalid-feedback">
                        Kode Voucher Sudah Ada
                    </div>
                    
                    <label class="labels">Nama Voucher :</label>     
                    <input type="text" name="name_voucher" class="form-control" placeholder="Nama Voucher Here" required>
                     
                    <label class="labels">Kategori :</label>
                    <select name="category" class="form-control" required>
                        @foreach($category as $value)
                            <option value="{{$value->kode_kategori}}">{{$value->nama_kategori}}</option>
                        @endforeach
                    </select>
                     
                    <label class="labels">Harga :</label> 
                    <input type="number" name="price" class="form-control" placeholder="Harga Here" required>
                      
                    <label class="labels">Masa Aktif :</label>
                    <input type="date" name="active_period" class="form-control" id="cono1" required>
                   
                    <label class="labels">Status :</label>
                    <select class="form-control" name="status">
                        <option value="aktif">Aktif</option>
                        <option value="pasif">Pasif</option>
                    </select>      
                    <div class="row">
                        <div class="col-md-3">  
                            <img class="fotoAdd" src="{{asset('img/noimage.jpg')}}" alt="">
                        </div>  
                         <div class="col-md-9">  
                            <label class="labels">Foto :</label>
                            <input id="input_logo" type="file" name="image" class="form-control" required>
                        </div>  
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

