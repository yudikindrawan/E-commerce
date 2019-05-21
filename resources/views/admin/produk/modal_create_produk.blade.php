<!-- MODAL CREATE -->
<div class="modal fade" id="myModal"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
  <form class="formsiswa" id="formsiswa" action="{{route('store_produk')}}" method="post" enctype="multipart/form-data">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Tambah Data Produk</h4>
      </div>
      <div class="modal-body">
      <input type="hidden" name="id" class="form-control"/>

        <div class="form-group">
          <label for="nama_produk">Nama Produk</label>
          <input type="text" name="nama_produk" id="nama_produk" class="form-control" placeholder="Masukkan Nama Produk"/>
        </div>

         <div class="form-group">
          <label for="id_kategori">Kategori</label>
          <select name="id_kategori" id="id_kategori" class="form-control select2 " style="width: 100%;">
            <option selected="selected" value="">Pilih Kategori</option>
             @foreach($kategoris as $kategori)
                <option value="{{$kategori->id}}">{{$kategori->nama_kategori}}</option>
            @endforeach
          </select>
        </div>

        <div class="form-group">
          <label for="id_size">size</label>
          <select name="id_size" class="form-control select2" style="width: 100%;">
            <option selected="selected" value="">Pilih size</option>
             @foreach($sizes as $size)
                <option value="{{$size->id}}">{{$size->nama_size}}</option>
            @endforeach
          </select>
        </div>

        <div class="form-group">
          <label for="stok">Stok</label>
          <input type="text" name="stok" id="stok" class="form-control" placeholder="Masukkan Stok"/>
        </div>

        <div class="form-group">
          <label for="harga">Harga</label>
          <input type="text" name="harga" id="harga" class="form-control" placeholder="Masukkan Harga"/>
        </div>

        <div class="form-group">
          <label for="desain">Desain</label>
          <input type="file" id="desain" name="desain">
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

<!-- hanya angka
form input : onkeypress="return hanyaAngka(event)"
js :function hanyaAngka(evt) {
      var charCode = (evt.which) ? evt.which : event.keyCode
       if (charCode > 31 && (charCode < 48 || charCode > 57))
 
        return false;
      return true;
    } -->

<script type="text/javascript">
  $('#formsiswa').validate({
        rules: {
            username:{
              minlength:4,
              required: true 
            },
            id_roles:{
              required: true 
            },
        },
         messages: {
         username: {
         required: "Username tidak boleh kosong",
         minlength: jQuery.validator.format("Kurang dari {0} karakter"),
         },
         id_roles: {
         required: "Jabatan tidak boleh kosong",
         },
         }
    });

  $(document).ready(function() {
  $('.mdb-select').materialSelect();
});
  
</script>

