<!-- MODAL CREATE -->
<div class="modal fade" id="myModal"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
  <form class="formsiswa" id="formsiswa" action="{{route('store_supplier')}}" method="post">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Tambah Data Supplier</h4>
      </div>
      <div class="modal-body">
      <input type="hidden" name="id" class="form-control"/>

        <div class="form-group">
          <label for="nama_supplier">Nama Supplier</label>
          <input type="text" name="nama_supplier" id="nama_supplier" class="form-control" placeholder="Masukkan Nama Supplier"/>
        </div>

        <div class="form-group">
          <label for="alamat">Alamat</label>
          <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Masukkan Alamat Supplier"/>
        </div>
        
        <div class="form-group">
          <label for="no_telp">No Telepon</label>
          <input type="text" name="no_telp" id="no_telp" class="form-control" placeholder="Masukkan No Telepon Supplier"/>
        </div>

        <div class="form-group">
          <label for="email">Email</label>
          <input type="text" name="email" id="email" class="form-control" placeholder="Masukkan Email Supplier"/>
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
