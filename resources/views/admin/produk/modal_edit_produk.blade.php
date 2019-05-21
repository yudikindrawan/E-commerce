<!-- MODAL EDIT -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
    <form class="formsiswa" id="formsiswa" action="{{route('update_produk', $produk->id)}}" method="post">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Ubah Data Produk</h4>
        </div>
        <div class="modal-body">
            <div class="form-group">
              <label for="nama_produk">Nama Produk</label>
              <input type="text" name="nama_produk" id="nama_produk" class="form-control" placeholder="Masukkan Nama Produk" value="{{$produk->nama_produk}}"/>
            </div>
            <div class="form-group">
              <label for="id_kategori">Kategori</label>
                <select name="id_kategori" id="id_kategori" class="form-control select2" style="width: 100%;">
                  <option selected="selected" value="">Pilih Kategori</option>
                    @foreach($kategoris as $kategori)
                       <option value="{{$kategori->id}}"
                          @if ($kategori->id === $produk->id_kategori)
                              selected
                          @endif    
                          >{{$kategori->nama_kategori}}
                       </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
              <label for="id_size">size</label>
                <select name="id_size" id="id_size" class="form-control select2" style="width: 100%;">
                  <option selected="selected" value="">Pilih size</option>
                    @foreach($sizes as $size)
                      <option value="{{$size->id}}"
                        @if ($size->id === $produk->id_size)
                            selected
                        @endif
                      >{{$size->nama_size}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
             <label for="stok">Stok</label>
               <input type="text" name="stok" id="stok" class="form-control" placeholder="Masukkan Stok" value="{{$produk->stok}}"/>
            </div>  
            <div class="form-group">
              <label for="harga">Harga</label>
                <input type="text" name="harga" id="harga" class="form-control" placeholder="Masukkan Harga" value="{{$produk->harga}}"/>
            </div>
            </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" class="btn btn-primary" value="Yakin">
            </div>
        </form> 
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->