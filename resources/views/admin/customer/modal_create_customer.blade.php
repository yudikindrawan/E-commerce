<!-- MODAL CREATE -->
<div class="modal fade" id="myModal"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
  <form class="formcustomer" id="formcustomer" action="{{route('store_customer')}}" method="post">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Tambah Data Customer</h4>
      </div>
      <div class="modal-body">
      <input type="hidden" name="id" class="form-control"/>

        <div class="form-group">
          <label for="nama_customer">Nama Customer</label>
          <input type="text" name="nama_customer" id="nama_customer" class="form-control required" placeholder="Masukkan Nama Customer" onkeypress="return hanyaHuruf(event)"/>
        </div>

        <div class="form-group">
          <label for="alamat">Alamat Customer</label>
          <textarea type="text" name="alamat" id="alamat" class="form-control required" placeholder="Masukan Alamat Customer"/></textarea>
        </div>

        <div class="form-group">
          <label for="no_telp">No Telepon</label>
          <input type="text" name="no_telp" id="no_telp" class="form-control required" placeholder="Masukan No Telepon Customer"/>
        </div>

        <div class="form-group">
          <label for="email">Email</label>
          <input type="text" name="email" id="email" class="form-control required" placeholder="Masukkan Email Customer"/>
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

  function hanyaHuruf(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode
     if ((charCode >= 65 && charCode <= 90)||(charCode >= 97 && charCode <= 122))
      return true;
    return false;
  }

  $(function () {
    //Datemask yyyy
    $('#no_telp').inputmask('999999999999', { 'placeholder': '' })
  })

  $('#formcustomer').validate({
        rules: {
            alamat:{
              minlength:8,
              required: true 
            },
            nama_customer:{
              minlength:8,
              required: true 
            },
            no_telp:{
              minlength:11,
              maxlength:12,
              required: true 
            },
            email:{
              minlength:8,
              required: true 
            },
        },
         messages: {
         
         nama_customer: {
         required: "Nama Customer tidak boleh kosong",
         minlength: jQuery.validator.format("Kurang dari {0} karakter"),
         },
         alamat: {
         required: "Alamat Customer tidak boleh kosong",
         minlength: jQuery.validator.format("Kurang dari {0} karakter"),
         },
         no_telp: {
         required: "Nomor Telepon Customer tidak boleh kosong",
         minlength: jQuery.validator.format("Kurang dari {0} karakter"),
         maxlength: jQuery.validator.format("Lebih dari {0} karakter"),
         },
         email: {
         required: "E-mail Customer tidak boleh kosong",
         minlength: jQuery.validator.format("Kurang dari {0} karakter"),
         },
         
         }
    });
</script>