<!-- MODAL EDIT -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
    <form class="formkategoti" id="formkategoti" action="{{route('update_kategori', $kategori->id)}}" method="post">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Ubah Data Kategori</h4>
        </div>
        <div class="modal-body">
         <div class="form-group">
            <label for="nama_customer">Nama Kategori</label>
            <input type="text" name="nama_customer" id="nama_customer" class="form-control" onkeypress="" value="{{$kategori->nama_kategori}}"/>
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