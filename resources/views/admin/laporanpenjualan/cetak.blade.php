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
        <b style="font-size:16px;">LAPORAN PENJUALAN</b>
        <br><b style="font-size:16px;">Periode :</b>
      </center>
    </td>
  </tr>
</table>
<div class="box-body">
  <table id="example" class="table table-bordered ">
    <thead>
      <tr>
         <th>Nama Produk</th>
         <th>Nama Customer</th>
         <th>Jumlah</th>
         <th>No Telepon</th>
         <th>Email</th>
         <th>Alamat</th>
         <th>Tanggal</th>
      </tr>
    </thead>
    <tbody>
      @foreach($penjualans as $penjualan)
        <tr>
          <td>{{$penjualan->nama_produk}}</td>
          <td>{{$penjualan->nama_customer}}</td>
          <td>{{$penjualan->jumlah}}</td>
          <td>{{$penjualan->no_telp}}</td>
          <td>{{$penjualan->email}}</td>
          <td>{{$penjualan->alamat}}</td>
          <td>{{$penjualan->created_at}}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
</body>
</html>
                     