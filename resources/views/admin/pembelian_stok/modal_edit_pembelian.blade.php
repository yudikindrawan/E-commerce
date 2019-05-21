<!-- MODAL EDIT -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
    <form class="formsiswa" id="formsiswa" action="{{route('update_pembelian', $pembelian->id)}}" method="post">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Ubah Data Pembelian</h4>
        </div>
        <div class="modal-body">
         <div class="form-group">
            <label for="nama_produk">Nama Produk</label>
            <input type="text" name="nama_produk" id="nama_produk" class="form-control" onkeypress="return hanyaHuruf(event)" value="{{$pembelian->nama_produk}}"/>
          </div>

          <div class="form-group">
              <label for="id_supplier">Supplier</label>
                <select name="id_supplier" id="id_supplier" class="form-control select2" style="width: 100%;">
                  <option selected="selected" value="">Pilih size</option>
                    @foreach($suppliers as $supplier)
                      <option value="{{$supplier->id}}"
                        @if ($supplier->id === $pembelian->id_supplier)
                            selected
                        @endif
                      >{{$supplier->nama_supplier}}</option>
                    @endforeach
                </select>
            </div>

          <div class="form-group">
          <label for="jumlah">Jumlah</label>
          <input type="text" name="jumlah" id="jumlah" class="form-control" placeholder="Masukkan Jumlah" value="{{$pembelian->jumlah}}"/>
        </div>
        <div class="form-group">
          <label for="harga">Harga</label>
          <input type="text" name="harga" id="harga" class="form-control" placeholder="Masukkan Harga" value="{{$pembelian->harga}}"/>
        </div>
      </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <input type="submit" class="btn btn-primary" value="Yakin">
        </div>
      </div>
      </div>
    </form> 
  </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->

  <script type="text/javascript">
  function hanyaHuruf(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode
     if ((charCode >= 65 && charCode <= 127)||(charCode >= 32 && charCode <= 47))
      return true;
    return false;
  }