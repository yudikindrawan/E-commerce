<!-- MODAL CREATE -->
<div class="modal fade" id="myModal"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
  <form class="formsiswa" id="formsiswa" action="{{route('update_returpenjualan', $penjualan->id)}}" method="post">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Retur Penjualan</h4>
      </div>
      
        <div class="modal-body">
          <input type="hidden" name="id">
            <p style="text-align:center;">Apakah anda yakin ingin retur produk?</p>
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