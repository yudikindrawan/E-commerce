<!-- MODAL EDIT -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
    <form class="formsize" id="formsize" action="{{route('update_size', $size->id)}}" method="post">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Ubah Data Size</h4>
        </div>
        <div class="modal-body">
         <div class="form-group">
            <label for="nama_size">Nama Size</label>
            <input type="text" name="nama_size" id="nama_size" class="form-control" onkeypress="" value="{{$size->nama_size}}"/>
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