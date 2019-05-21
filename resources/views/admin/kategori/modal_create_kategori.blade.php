<!-- MODAL CREATE -->
<div class="modal fade" id="myModal"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
  <form class="formkategori" id="formkategori" action="{{route('store_kategori')}}" method="post">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Tambah Kategori</h4>
      </div>
      <div class="modal-body">
      <input type="hidden" name="id" class="form-control"/>
        <div class="form-group">
          <label for="nama_kategori">Nama Kategori</label>
          <input type="text" name="nama_kategori" id="nama_kategori" class="form-control required" placeholder="Masukkan Nama Kategori" onkeypress=""/>
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

  $('#formkategori').validate({
        rules: {
            nama_kategori:{
              minlength:5,
              required: true 
            },
        },
         messages: {
         
         nama_customer: {
         required: "Nama Kategori tidak boleh kosong",
         minlength: jQuery.validator.format("Kurang dari {0} karakter"),
         }, 
        }
    });
</script>