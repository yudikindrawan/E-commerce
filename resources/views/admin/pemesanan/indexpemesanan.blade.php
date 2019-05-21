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

   <!-- Styles -->
  <style>
    .panel-google-plus {
        position: relative;
        border-radius: 0px;
    }
    .panel-google-plus > .panel-google-plus-tags {
        position: absolute;
        top: 5px;
        right: -3px;
    }
    .panel-google-plus > .panel-google-plus-tags > ul {
        list-style: none;
        padding: 0px;
        margin: 0px;
    }
    .panel-google-plus > .panel-google-plus-tags > ul:hover {
        box-shadow: 0px 0px 3px rgb(0, 0, 0);   
        box-shadow: 0px 0px 3px rgba(0, 0, 0, 0.25);   
    }
    .panel-google-plus > .panel-google-plus-tags > ul > li {
        display: block;
        right: 0px;
        width: 0px;
        padding: 5px 0px 5px 0px;
        background-color: rgb(245, 245, 245);
        font-size: 12px;
        overflow: hidden;
    }
    .panel-google-plus > .panel-google-plus-tags > ul > li::after {
        content:"";
        position: absolute;
        top: 0px;
        right: 0px;
        height: 100%;
      border-right: 3px solid rgb(66, 127, 237);
    }
    .panel-google-plus > .panel-google-plus-tags > ul:hover > li,
    .panel-google-plus > .panel-google-plus-tags > ul > li:first-child {
        padding: 5px 15px 5px 10px;
        width: auto;
        cursor: pointer;
        margin-left: auto;
    }
    .panel-google-plus > .panel-google-plus-tags > ul:hover > li {
        background-color: rgb(255, 255, 255);   
    }
    .panel-google-plus > .panel-google-plus-tags > ul > li:hover {
        background-color: rgb(66, 127, 237);
        color: rgb(255, 255, 255);
    }
    .panel-google-plus > .panel-heading,
    .panel-google-plus > .panel-footer {
        background-color: rgb(255, 255, 255);
        border-width: 0px; 
    }
    .panel-google-plus > .panel-heading {
        margin-top: 20px;    
        padding-bottom: 5px; 
    }
    .panel-google-plus > .panel-heading > img { 
        margin-right: 15px;
    }
    .panel-google-plus > .panel-heading > h3 {
        margin: 0px;
        font-size: 14px;
        font-weight: 700;
    }
    .panel-google-plus > .panel-heading > h5 {
        color: rgb(153, 153, 153);
        font-size: 12px;
        font-weight: 400;
    }
    .panel-google-plus > .panel-body {
        padding-top: 5px;
        font-size: 13px;
    }
    .panel-google-plus .btn-default:hover, 
    .panel-google-plus .btn-default:focus, 
    .panel-google-plus .btn-default:active {
        background-color: rgb(255, 255, 255);
        border-color: rgb(0, 0, 0);    
    }
  </style>
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
             <li class="active"><a href="{{route('indextampil')}}"><i class="fa fa-circle-o"></i>Data Pemesanan</a></li>
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
            <li><a href="{{route('laporan_penjualan')}}"><i class="fa fa-circle-o"></i>Laporan Penjualan</a></li>
          </ul>
        </li>
         <li class="">
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
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-header with-border" style="margin-bottom:15px;">
              <h3 class="box-title">Data Pemesanan</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            @if ($pemesanan->tampil > 0 )
            @foreach($pemesanans as $pemesanan)
              <section class="content" style="min-height: auto; padding-top:0px;">
                <!-- Small boxes (Stat box) -->
                <div class="box box-default collapsed-box" style="box-shadow: 0 0 5px rgba(0,0,0,0.1); border-top:0px; margin-bottom:0px;">
                  <div class="box-header with-border">
                    <div class="box-tools" style="position:relative; top:auto; left:0px;">
                      <button type="button" class="btn btn-box-tool" data-widget="collapse" style="padding-top:0px;"><i class="fa fa-plus"></i></button>
                      <h3 class="box-title" style="font-size: 16px; font-weight: 700;">{{$pemesanan->nama_customer}} <span style="color: rgb(153, 153, 153);font-size: 12px;font-weight: 400;">Pemesanan Pada : {{$pemesanan->created_at}}</span></h3>
                    </div>
                    <div class="box-tools pull-right">
                      <a onClick="modalSetujuTriger({{$pemesanan->id}})" class="btn btn-success">Disetujui</a>
                    </div>
                    <!-- /.box-tools -->
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body" style="margin-right: -15px;margin-left: -15px; padding:0px;">
                    <div class="[ col-xs-12 col-sm-offset-1 col-sm-12 ]" style="margin-left:0px;">
                      <div class="[ panel panel-default ] panel-google-plus" style="border:0px; margin-bottom:0px">
                        <div class="panel-google-plus-tags">
                            <ul>
                                <li>#{{$pemesanan->nama_pem_produk}}</li>
                            </ul>
                        </div>
                        <div class="panel-body">
                          <div class="row">
                            <div class="col-md-2">Kategori</div>
                            <div class="col-md-10">{{$pemesanan->nama_kategori}}</div>
                            <div class="col-md-2">Alamat</div>
                            <div class="col-md-10">{{$pemesanan->alamat}}</div>
                            <div class="col-md-2">E-mail</div>
                            <div class="col-md-10">{{$pemesanan->email}}</div>
                            <div class="col-md-2">No Telepon</div>
                            <div class="col-md-10">{{$pemesanan->no_telp}}</div>
                            <div class="col-md-2">Variasi</div>
                            <div class="col-md-10">{{$pemesanan->variasi}}</div>
                            <div class="col-md-2">Desain</div>
                            <div class="col-md-10">
                              <a href="{{ asset('image/'.$pemesanan->desain)  }}" data-toggle="lightbox">
                                <img src="{{ asset('image/'.$pemesanan->desain)  }}" style="max-height:200px;max-width:200px;margin-top:10px;">
                              </a>
                              <p class="text-aqua" style="margin-top:10px;">Nb : Tekan gambar untuk memperbesar ukuran</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.box-body -->
                </div>
              </section>
            @endforeach
            @else
            <section class="content" style="min-height: auto; padding-top:0px;">
              <div class="box-body" style="padding:0px;">
                <div class="alert alert-warning" style="margin-bottom:0px;">
                  <i class="fa fa-exclamation-triangle"></i> Data pemesanan tidak ada
                </div>
              </div>
            </section>
            @endif
            <div class="col-xs-12" style="padding:0px; height:40px;">
              <ul class="no-margin pull-right">
                <div style="margin-top:-10px; margin-bottom:-30px;">{{$pemesanans->render()}}</div>
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
  </div>
    <!-- /.content -->
  <!-- /.content-wrapper -->
  <div>
  <footer class="main-footer">
    <strong>Copyright &copy; 2018</strong> Arti Bali Manufaktur.
  </footer>
  <div class="modalKu"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{asset('assets/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Sweet alert -->

<!-- jQuery UI 1.11.4 -->
<script src="{{asset('ALT/bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.js" charset="utf-8"></script>


<script type="text/javascript">
 $.ajaxSetup({
  headers: {
   'X-CSRF-TOKEN': $('input[name="_token"]').val()
  }
 });


 // MODAL Setuju
    function modalSetujuTriger(id){
      $.ajax({
        url     : "{{route('modal_setuju_pemesanan')}}",
        method  : 'get',
        data    : {
          'id' : id
        },
        success : function(response){
          // console.log(response);
          $('.modalKu').html(response);
          $('#myModal').modal({ backdrop: 'static', keyboard: false });
        }
      });
    }

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
</body>
</html>