<!-- MODAL CREATE -->
<div class="modal fade" id="myModal"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
  <form class="formsiswa" id="formsiswa" action="{{ route('changePassword') }}" method="post">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Ubah Password</h4>
      </div>
      <div class="modal-body">
        <input type="hidden" name="id" class="form-control"/>
        <div class="form-group">
          <label for="currentpassword">Password Lama</label>
          <input type="password" name="currentpassword" id="currentpassword" class="form-control" placeholder="Masukan Password Lama "/>
        </div>
        <div class="form-group">
          <label for="newpassword">Password Baru</label>
          <input type="password" name="newpassword" id="newpassword" class="form-control" placeholder="Masukan Password Baru "/>
        </div>
        <div class="form-group">
          <label for="newpasswordconfirm">Konfirmasi Password Baru</label>
          <input type="password" name="newpasswordconfirm" id="newpasswordconfirm" class="form-control" placeholder="Masukan Konfirmasi Password Baru "/>
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
            currentpassword:{
              required: true 
            },
            newpassword:{
              minlength: 4,
              required: true 
            },
            newpasswordconfirm:{
              minlength: 4,
              required: true,
              equalTo: "#newpassword"
            },
        },
         messages: {
         currentpassword: {
         required: "Password lama tidak boleh kosong",
         },
         newpassword: {
         minlength: jQuery.validator.format("Kurang dari {0} karakter"),
         required: "Password baru tidak boleh kosong",
         },
         newpasswordconfirm: {
         minlength: jQuery.validator.format("Kurang dari {0} karakter"),
         required: "Konfirmasi password baru tidak boleh kosong",
         equalTo: "Password baru tidak sama",
         },
         }
    });
</script>