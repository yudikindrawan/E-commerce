<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ARTI BALI</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{asset('assets/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('assets/bower_components/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('assets/bower_components/Ionicons/css/ionicons.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('assets/dist/css/AdminLTE.min.css')}}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{asset('assets/dist/css/skins/_all-skins.min.css')}}">
  <!-- Morris chart -->
  <link rel="stylesheet" href="{{asset('assets/bower_components/morris.js/morris.css')}}">
  <!-- jvectormap -->
  <link rel="stylesheet" href="{{asset('assets/bower_components/jvectormap/jquery-jvectormap.css')}}">
  <!-- Date Picker -->
  <link rel="stylesheet" href="{{asset('assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('assets/bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/bower_components/form/fonts/material-icon/css/material-design-iconic-font.min.css')}}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-black sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="{{route('index')}}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>RT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>ARTI</b>BALI</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span class="hidden-xs">Yudik Indrawan</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <p>
                  Yudik Indrawan
                  <small>Admin</small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="modalUbahTrigger" data-toggle="modal" data-target="#modalLogoutTrigger"><button class="btn btn-default btn-flat">Ubah</button></a><input type="hidden" name="_token" value="{{ csrf_token() }}">
                </div>
                <div class="pull-right">
                  <a href="#" class="modalLogoutTrigger" data-toggle="modal" data-target="#modalLogoutTrigger"><button class="btn btn-default btn-flat">Keluar</button></a><input type="hidden" name="_token" value="{{ csrf_token() }}">
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
<li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i>
            <span>Data Master</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('user')}}"><i class="fa fa-circle-o"></i>Data User</a></li>
            <li><a href="{{route('customer')}}"><i class="fa fa-circle-o"></i>Data Customer</a></li>
            <li><a href="{{route('supplier')}}"><i class="fa fa-circle-o"></i>Data Supplier</a></li>
            <li><a href="{{route('pembelian')}}"><i class="fa fa-circle-o"></i>Data Pembelian</a></li>    
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-cart-plus"></i>
            <span>Data Master Penjualan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('penjualan')}}"><i class="fa fa-circle-o"></i>Data Penjualan</a></li>
            <li><a href="{{route('retur')}}"><i class="fa fa-circle-o"></i>Data Retur</a></li>
          </ul>
        </li>
         <li class="treeview">
          <a href="#">
            <i class="fa fa-paypal"></i>
            <span>Data Master Pemesanan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('tampil_pemesanan')}}"><i class="fa fa-circle-o"></i>Data Detail Pemesanan</a></li>
             <li><a href="{{route('indextampil')}}"><i class="fa fa-circle-o"></i>Data Pemesanan</a></li>
          </ul>
        </li>
         <li class="treeview">
          <a href="#">
            <i class="fa fa-dropbox"></i>
            <span>Data Master Produk</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('produk')}}"><i class="fa fa-circle-o"></i>Data Produk</a></li>
            <li><a href="{{route('kategori')}}"><i class="fa fa-circle-o"></i>Data Kategori</a></li>
            <li><a href="{{route('size')}}"><i class="fa fa-circle-o"></i>Data Size</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i>
            <span>Laporan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('laporan_produk')}}"><i class="fa fa-circle-o"></i>Laporan Produk</a></li>
            <li class="active"><a href="{{route('laporan_penjualan')}}"><i class="fa fa-circle-o"></i>Laporan Penjualan</a></li>
          </ul>
        </li> 
         <li>
          <a href="{{route('pemesanan')}}">
            <i class="fa fa-globe"></i>
            <span>Pemesanan</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Sistem Informasi
        <small>Penjualan</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header" style="padding-bottom:15px;">
                  <h3>LAPORAN PENJUALAN</h3>
                </div>
                  <div class="row"> 
                    <div class="col-xs-12">
                      <div class="box" style="box-shadow: 0 0 5px rgba(0,0,0,0.1); border-top:0px;">
                      <section class="content"  style="min-height: auto;">
                          <div class="col-md-6">
                              <div class="form-group">
                                <label>Date range:</label>
                                  <div class="input-group">
                                    <div class="input-group-addon">
                                      <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" class="form-control pull-right laporan_produk" id="laporan_produk">
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-2">
                            <div class="form-group">
                              <label>Tampilkan</label>
                               <div class="form-submit">
                                  <a href="#" id="cetak"><button class="btn btn-primary">Tampilkan</button></a><input type="hidden" name="_token" value="{{ csrf_token() }}">
                               </div>
                            </div>
                          </div>
                      </section>
                    <div class="clearfix"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xs-12">
            <div class="box box_tampil" style="box-shadow: 0 0 5px rgba(0,0,0,0.1); border-top: 0px; display: none;">
              <section class="content"  style="min-height: auto; padding-bottom: 0px;">
                <div class="col-md-12 no-padding">
                  <div class="form-group">
                    <div class="table">
                      <table id="dataTrans" class="table table-bordered">
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
                        </tbody>
                      </table>
                    </div>
                   
                  </div>
                </div>
                <div class="clearfix"></div>
                 <div class="box-footer">
                         <button type="button" id="print" class="btn btn-success pull-right" data-dismiss="modal">Cetak</button>
                         <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
                    </div>
              </section>
            </div>
          </div>
        </div>
      </section>
    </div>
  <!-- /.content -->
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2018</strong> Arti Bali Manufaktur.
  </footer>
  <div class="modalKu"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{asset('assets/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Sweet alert -->
<script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>
@include('sweetalert::alert')
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('assets/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/bower_components/bootstrap/dist/js/jquery.validate.min.js')}}"></script>
<!-- Morris.js charts -->
<script src="{{asset('assets/bower_components/raphael/raphael.min.js')}}"></script>
<script src="{{asset('assets/bower_components/morris.js/morris.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
<!-- jvectormap -->
<script src="{{asset('assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{asset('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('assets/bower_components/jquery-knob/dist/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('assets/bower_components/moment/min/moment.min.js')}}"></script>
<script src="{{asset('assets/bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<!-- datepicker -->
<script src="{{asset('assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{asset('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<!-- Slimscroll -->
<script src="{{asset('assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('assets/bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('assets/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('assets/dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('assets/dist/js/demo.js')}}"></script>

<script src="{{asset('assets/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.js" charset="utf-8"></script>


<script type="text/javascript">

  $(document).ready(function(){
     var tb = {};
      $('#dataTrans').parents('div.table').first().hide();
  }); 

 $.ajaxSetup({
  headers: {
   'X-CSRF-TOKEN': $('input[name="_token"]').val()
  }
 });

// modal logout
    $('.modalLogoutTrigger').click(function(event){
    event.preventDefault();
        $.ajax({
            url     : "{{route('modal_logout')}}",
            method  : 'get',
            success : function(response){
                $('.modalKu').html(response);
                $('#myModal').modal({ backdrop: 'static', keyboard: false });
            }
        });
  });

// modal ubah
    $('.modalUbahTrigger').click(function(event){
    event.preventDefault();
        $.ajax({
            url     : "{{route('modal_ubah')}}",
            method  : 'get',
            success : function(response){
                $('.modalKu').html(response);
                $('#myModal').modal({ backdrop: 'static', keyboard: false });
            }
        });
  });
    
</script>
<script>
  $(document).ready(function(){
    $('.laporan_produk').daterangepicker({
      "startDate": "<?php echo date('d - m - Y'); ?>",
      "endDate": "<?php echo date('d - m - Y'); ?>",
      "opens": "right",
      "locale": {
          "format": "DD - MM - YYYY",
          "separator": " s/d ",
          "applyLabel": "Ok",
          "cancelLabel": "Batal",
          "fromLabel": "Dari",
          "toLabel": "Sampai",
          "customRangeLabel": "Custom",
          "daysOfWeek": [
              "Min",
              "Sen",
              "Sel",
              "Rab",
              "Kam",
              "Jum",
              "Sab"
          ],
          "monthNames": [
              "Januari",
              "Februari",
              "Maret",
              "April",
              "Mei",
              "Juni",
              "Juli",
              "Agustus",
              "September",
              "Oktober",
              "November",
              "Desember"
          ],
          "firstDay": 0
      }
    });

   

    tb = $('#dataTrans').DataTable({
      "ordering" : false,
      "searching" : false,
      "lengthChange" : false,
      "iDisplayLength" : 5,
      'paging'      : false,
      columns : [
        {data : 'NamaProduk'},
        {data : 'NamaCustomer'},
        {data : 'Jumlah'},
        {data : 'Telepon'},
        {data : 'Email'},
        {data : 'Alamat'},
        {data : 'Tanggal'}
      ]
    });

   
});

$(document).on('click','#cetak',function(){
    var tanggal = {
     'awal' : $('#laporan_produk').data('daterangepicker').startDate.format('YYYY-MM-DD'),
     'akhir' : $('#laporan_produk').data('daterangepicker').endDate.format('YYYY-MM-DD')
    };

    $.ajax({
      headers: {'X-CSRF-TOKEN': $('input[name=_token]').val()},
      type: 'POST',
      url: '{{route('lap_cetak')}}',
      data: tanggal,
      cache: false,
      success: function(response){
        $.each(response, function(i, item) {
          var datas = [{
            'NamaProduk'    :  item.nama_produk,
            'NamaCustomer'  :  item.nama_customer,
            'Jumlah'        :  item.jumlah,
            'Telepon'       :  item.no_telp,
            'Email'         :  item.email,
            'Alamat'        :  item.alamat,
            'Tanggal'       :  item.created_at
          }];
          datas.forEach(function(data) {
            tb.row.add(data).draw();
          });
        });
      },
      error: function() {
        alert('A jQuery error has occurred. Status: ');
    }
    });
    $('#dataTrans').parents('div.table').first().show();
    $('.box_tampil').show();
    $('#dataTrans').dataTable().fnClearTable();
  });

$(document).on('click','#print',function(){
    var awal = $('#laporan_produk').data('daterangepicker').startDate.format('YYYY-MM-DD');
    var akhir = $('#laporan_produk').data('daterangepicker').endDate.format('YYYY-MM-DD');

  var link = "laporanpenjualan/print/"+awal+"/"+akhir;
  window.open(link);
        //window.location.replace(link);
  });


</script>
</body>
</html>