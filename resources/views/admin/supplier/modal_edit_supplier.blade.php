<!-- MODAL EDIT -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
    <form class="formsiswa" id="formsiswa" action="{{route('update_supplier', $supplier->id)}}" method="post">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Ubah Data Supplier</h4>
        </div>
        <div class="modal-body">
          
           <div class="form-group">
            <label for="nama_supplier">Nama Supplier</label>
            <input type="text" name="nama_supplier" id="nama_supplier" class="form-control" onkeypress="return hanyaHuruf(event)" value="{{$supplier->nama_supplier}}"/>
          </div>

          <div class="form-group">
            <label for="alamat">Alamat Supplier</label>
            <textarea type="text" name="alamat" id="alamat" class="form-control">{{$supplier->alamat}}</textarea>
          </div>

          <div class="form-group">
            <label for="no_telp">No Telp</label>
            <input type="text" name="no_telp" id="no_telp" class="form-control" value="{{$supplier->no_telp}}"/>
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" class="form-control" value="{{$supplier->email}}"/>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <input type="submit" class="btn btn-primary" value="Yakin">
        </div>
        </form> 
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->