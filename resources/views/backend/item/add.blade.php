<div class="modal fade" id="Modal-add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none; aria-hidden="true" ">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
          <form id="form_add" enctype="multipart/form-data" accept-charset="utf-8">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add item</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                    <label class="labels">Kode item :</label>
                    <input type="text" id="code" name="code_item" class="form-control" placeholder="Kode item Here" required>
                    <div id="label_danger" class="invalid-feedback">
                        Kode item Sudah Ada
                    </div>

                    <label class="labels">Nama item :</label>
                    <input type="text" id="name_item" name="name_item" class="form-control" placeholder="Nama item Here" required>

                    <label class="labels">Kategori :</label>
                    <!-- <input type="text" id="category_item" name="category_item" class="form-control" placeholder="Kategori item Here" required> -->
                    <select name="category" class="form-control" required>
                        @foreach($category as $value)
                            <option id="category_item" value="{{$value->nama_kategori}}">{{$value->nama_kategori}}</option>
                        @endforeach
                    </select>

                    <label class="labels">Harga :</label>
                    <input type="number" id="price_item" name="price_item" class="form-control" placeholder="Harga Here" required>

                    <label class="labels">Stok :</label>
                    <input type="number" id="stock_item" name="Stock" class="form-control" required>

                    <label class="labels">Deskripsi :</label>
                    <input type="text" name="Description" class="form-control" id="description_item" required>

                    <div class="row">
                        <div class="col-md-3">
                            <img class="fotoAdd" src="{{asset('img/noimage.jpg')}}" alt="">
                        </div>
                         <div class="col-md-9">
                            <label class="labels">Foto :</label>
                            <input id="image_item" type="text" name="image" class="form-control" required>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times"></i> Close</button>
                <button id="saveadd" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Save</button>
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
