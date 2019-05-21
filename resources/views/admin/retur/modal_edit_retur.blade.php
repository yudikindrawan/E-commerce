<!-- MODAL CREATE -->
<div class="modal fade" id="myModal"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
  <form class="formsiswa" id="formsiswa" action="{{route('update_retur', $retur->id)}}" method="post">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Ubah Data Customer</h4>
      </div>
      <div class="modal-body">
      <input type="hidden" name="id" class="form-control"/>

        <div class="form-group">
              <label for="id_produk">Nama Produk</label>
                <select name="id_produk" id="id_produk" class="form-control select2 " style="width: 100%;">
                  <option selected="selected" value="">Pilih Produk</option>
                    @foreach($produks as $produk)
                      <option value="{{$produk->id}}"
                        @if ($produk->id === $retur->id_produk)
                            selected
                        @endif
                      >{{$produk->nama_produk}}</option>
                    @endforeach
                </select>
            </div>

             <div class="form-group">
              <label for="id_customer">Nama Customer</label>
                <select name="id_customer" id="id_customer" class="form-control select2" style="width: 100%;">
                  <option selected="selected" value="">Pilih Produk</option>
                    @foreach($customers as $customer)
                      <option value="{{$customer->id}}"
                        @if ($customer->id === $retur->id_customer)
                            selected
                        @endif
                      >{{$customer->nama_customer}}</option>
                    @endforeach
                </select>
            </div>

        <div class="form-group">
          <label for="jumlah">Jumlah</label>
          <input type="text" name="jumlah" id="jumlah" class="form-control" placeholder="Masukkan Email Customer" value="{{$retur->jumlah}}" />
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="submit" class="btn btn-primary" value="Simpan">
      </div>
      </form> 
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

