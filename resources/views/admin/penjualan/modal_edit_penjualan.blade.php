<!-- MODAL EDIT -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
    <form class="formsiswa" id="formsiswa" action="{{route('update_penjualan', $penjualan->id)}}" method="post">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Reset Data Penjualan</h4>
        </div>
        <div class="modal-body">  
          <div class="form-group">
          <label for="id_produk">produk</label>
          <select name="id_produk" id="id_produk" class="form-control select2" style="width: 100%;">
            @foreach($produks as $produk)
                <option value="{{$produk->id}}"
            @if ($produk->id === $penjualan->id_produk)
                selected
            @elseif ($produk->stok > 0)
                <option value="{{$produk->id}}">{{$produk->nama_produk}}</option>
            @else 
                 <option disabled="disabled" value="{{$produk->id}}">{{$produk->nama_produk}} {{$produk->keterangan}}</option>
            @endif
                > {{$produk->nama_produk}}
              </option>
            @endforeach
          </select>
        </div>

         <div class="form-group">
              <label for="id_customer">Customer</label>
                <select name="id_customer" id="id_customer" class="form-control select2" style="width: 100%;">
                  <option selected="selected" value="">Pilih size</option>
                    @foreach($customers as $customer)
                  <option value="{{$customer->id}}"
                    @if ($customer->id === $penjualan->id_customer)
                      selected
                    
                    @endif
                    > {{$customer->nama_customer}}
                  </option>
                @endforeach
                </select>
            </div>

        <div class="form-group">
          <label for="jumlah">Jumlah</label>
          <input type="text" name="jumlah" id="jumlah" class="form-control" placeholder="Masukkan Jumlah" value="{{$penjualan->jumlah}}" />
        </div>

        <div class="form-group">
          <label for="no_telp">No Telepon</label>
          <input type="text" name="no_telp" id="no_telp" class="form-control" placeholder="Masukkan No Telepon" value="{{$penjualan->no_telp}}" />
        </div>

          <div class="form-group">
          <label for="email">Email</label>
          <input type="text" name="email" id="email" class="form-control" placeholder="Masukkan Email" value="{{$penjualan->email}}"/>
        </div>

         <div class="form-group">
          <label for="alamat">Alamat</label>
          <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Masukkan alamat" value="{{$penjualan->alamat}}"/>
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
