<!DOCTYPE html>
<html>
<head>
  <title>Cetak Laporan Produk</title>
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<table class="table table-bordered" style="border-bottom-color: black; border-bottom-style: solid;border-bottom-width: 3px;border-top-width: 0px;border-left-width: 0px;border-right-width: 0px;">
  <tr>
    <td width="14" align="left" style="border: none;"><img src="./assets/images/artilogo.png" width="500%"></td>
    <td style="border: none;">
    <center>
        <b style="font-size:18px;">CV. ARTI BALI MANUFAKTUR</b>
        <br><b style="font-size:12px;">Jl. Betaka Gg Mawar No:6x Desa Dalung, Kecamaan Kuta Utara</b>
        <br><b style="font-size:12px;">www.artibali.com, artini@gmail.com</b>
      </center>
      </td>
      <td width="15" align="right" style="border: none;"><img src="./assets/images/artilogo.png" width="500%"></td>
  </tr>
</table>
<table class="table table-bordered" style="border:none;">
  <tr>
    <td style="border: none;">
      <center>
        <b style="font-size:16px;">LAPORAN PRODUK</b>
        <br><b style="font-size:16px;">Periode :</b>
      </center>
    </td>
  </tr>
</table>
<div class="box-body table-responsive">
  <table id="example" class="table table-bordered">
    <thead>
      <tr>
        <th>Nama Produk</th>
        <th>Kategori</th>
        <th>Ukuran</th>
        <th>Stok</th>
        <th>Harga</th>
      </tr>
    </thead>
    <tbody>
      @foreach($produks as $produk)
        <tr>
          <td>{{$produk->nama_produk}}</td>
          <td>{{$produk->nama_kategori}}</td>
          <td>{{$produk->nama_size}}</td>
          <td>{{$produk->stok}}</td>
          <td>{{$produk->harga}}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
</body>
</html>
                     