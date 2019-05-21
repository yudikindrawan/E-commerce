<!-- MODAL CREATE -->
<div class="modal fade" id="myModal"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
  <form class="formsiswa" id="formsiswa" action="{{route('store_penjualan')}}" method="post">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Tambah Data Penjualan</h4>
      </div>
      
      <div class="modal-body">  
          <div class="form-group">
          <label for="id_produk">Nama Produk</label>
          <select name="id_produk" id="id_produk" class="form-control select2" style="width: 100%;">
            <option selected="selected">Pilih Produk</option>
            @foreach($produks as $produk)
                <option value="{{$produk->id}}"
              @if ($produk->stok > 0)
                    <option value="{{$produk->id}}">{{$produk->nama_produk}}</option>
              @endif
                > {{$produk->nama_produk}}
              </option>
            @endforeach
          </select>
        </div>

        <div class="form-group">
          <label for="id_customer">Nama Customer</label>
          <select name="id_customer" id="id_customer" class="form-control select2 id_customer" style="width: 100%;">
            <option selected="selected" value="">Pilih Customer</option>
             @foreach($customers as $customer)
                <option value="{{$customer->id}}">{{$customer->nama_customer}}</option>
            @endforeach
          </select>
        </div>

        <div class="form-group">
          <label for="id_kategori">Nama Kategori</label>
          <select name="id_kategori" id="id_kategori" class="form-control select2 id_kategori" style="width: 100%;">
            <option selected="selected" value="">Pilih kategori</option>
             @foreach($kategoris as $kategori)
                <option value="{{$kategori->id}}">{{$kategori->nama_kategori}}</option>
            @endforeach
          </select>
        </div>

        <div class="form-group">
          <label for="id_size">Nama Size</label>
          <select name="id_size" id="id_size" class="form-control select2 id_size" style="width: 100%;">
            <option selected="selected" value="">Pilih size</option>
             @foreach($sizes as $size)
                <option value="{{$size->id}}">{{$size->nama_size}}</option>
            @endforeach
          </select>
        </div>

        <div class="form-group">
          <label for="jumlah">Jumlah</label>
          <input type="text" name="jumlah" id="jumlah" class="form-control" placeholder="Masukkan Jumlah" />
        </div>

        <div class="form-group">
          <label for="no_telp">No Telepon</label>
          <input type="text" name="no_telp" id="no_telp" class="form-control" placeholder="Masukkan No Telepon"  />
        </div>

          <div class="form-group">
          <label for="email">Email</label>
          <input type="text" name="email" id="email" class="form-control" placeholder="Masukkan Email"/>
        </div>

         <div class="form-group">
          <label for="alamat">Alamat</label>
          <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Masukkan alamat"/>
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
$(document).on('change','.id_customer',function () {
      var id=$(this).val();

      var a=$(this).parent();
      console.log(id);
      var op="";
      $.ajax({
        type:'get',
        url:"{{route('cari')}}",
        data:{'id':id},
        dataType:'json',//return data will be json
        success:function(data){
          console.log(data.alamat);
          console.log(data.no_telp);
          console.log(data.email);

          // menampilkan value
          $('#alamat').val(data.alamat);
          $('#no_telp').val(data.no_telp);
          $('#email').val(data.email);
        },
        error:function(){

        }
      });
    });


</script>