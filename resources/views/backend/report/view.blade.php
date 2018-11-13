<div class="modal fade" id="Modal-view{{$data->kode_transaksi}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none; aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
          
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Voucher</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
           
            <table class="table">
                    <thead>
                        <tr>
                            <th>Kode Transaksi</th>
                            <th>Jumlah</th>
                            <th>Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($detail_transaction as $numb => $detail)
                        <tr>
                            <td>{{$detail->kode_transaksi}}</td>
                            <td>{{$detail->jumlah}}</td>
                            <td>{{$detail->harga}}</td>
                        </tr>
                    @endforeach                        
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times"></i> Close</button>
                
            </div>
            
        </div>
    </div>
</div> 