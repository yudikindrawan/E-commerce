<!-- MODAL CREATE -->
<div class="modal fade" id="myModal"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
  <form class="formuser" id="formuser" action="{{route('store_user')}}" method="post">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Tambah Data User</h4>
      </div>
      <div class="modal-body">
        <input type="hidden" name="id" class="form-control"/>
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" name="username" id="username" class="form-control required" placeholder="Masukan Username" />
        </div>
        <div class="form-group">
          <label for="roles_id">Jabatan</label>
          <select name="roles_id" id="roles_id" class="form-control select2 required" style="width: 100%;">
            <option selected="selected" value="">Pilih Jabatan</option>
             @foreach($roles as $role)
                <option value="{{$role->id}}">{{$role->nama_role}}</option>
            @endforeach
          </select>
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
  $('#formuser').validate({
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
</script>