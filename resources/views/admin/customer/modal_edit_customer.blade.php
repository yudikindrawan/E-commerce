<!-- MODAL EDIT -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
    <form class="formsiswa" id="formsiswa" action="{{route('update_customer', $customer->id)}}" method="post">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Ubah Data Customer</h4>
        </div>
        <div class="modal-body">
         <div class="form-group">
            <label for="nama_customer">Nama Customer</label>
            <input type="text" name="nama_customer" id="nama_customer" class="form-control" onkeypress="return hanyaHuruf(event)" value="{{$customer->nama_customer}}"/>
          </div>

          <div class="form-group">
            <label for="alamat">Alamat Customer</label>
            <textarea type="text" name="alamat" id="alamat" class="form-control">{{$customer->alamat}}</textarea>
          </div>

          <div class="form-group">
            <label for="no_telp">No Telp</label>
            <input type="text" name="no_telp" id="no_telp" class="form-control" value="{{$customer->no_telp}}"/>
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" class="form-control" value="{{$customer->email}}"/>
          </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <input type="submit" class="btn btn-primary" value="Yakin">
        </div>
      </div>
      </div>
    </form> 
  </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->

  <script type="text/javascript">
  function hanyaHuruf(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode
     if ((charCode >= 65 && charCode <= 127)||(charCode >= 32 && charCode <= 47))
      return true;
    return false;
  }