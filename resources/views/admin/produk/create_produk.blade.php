
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
  <link rel="stylesheet" href="{{asset('assets/bower_components/select2/dist/css/select2.min.css')}}">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
  <!-- Data Tables -->
  <link rel="stylesheet" href="{{asset('assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/bower_components/form/css/style.css')}}">

   

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
              <span class="hidden-xs">Alexander Pierce</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <p>
                  Alexander Pierce
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
            <i class="fa fa-database"></i>
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
            <li><a href="#"><i class="fa fa-circle-o"></i>Data Customer</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>Data Supplier</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>Data Produk</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>Data Penjualan</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>Data Pembelian</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>Data Retur</a></li>
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
        <br>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
        <li><a href="#">Data Master</a></li>
        <li class="active">Data Produk</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
     <div class="container">    
        <h2>Tambah Produk</h2> 
      <div class="signup-form">
      <form method="POST" class="tambah_produk" id="tambah_produk" action="{{route('store_produk')}}">
                        <div class="form-row">
                            <div class="form-group">
                                <div class="form-input">
                                    <label for="nama_customer" class="required">Nama Produk</label>
                                    <input type="text" name="nama_customer" id="nama_customer" />
                                </div>
                                <div class="form-input">
                                  <label for="id_kategori">Kategori</label>
                                    <select name="id_kategori" id="id_kategori" class="form-control select2 " style="width: 100%;">
                                        <option selected="selected" value="">Pilih Kategori</option>
                                           @foreach($kategoris as $kategori)
                                              <option value="{{$kategori->id}}">{{$kategori->nama_kategori}}</option>
                                           @endforeach
                                    </select>
                                </div>
                                <div class="form-input">
                                   <label for="id_size">size</label>
                                     <select name="id_size" class="form-control select2" tabindex="4" style="width: 100%;">
                                        <option selected="selected" value="">Pilih size</option>
                                          @foreach($sizes as $size)
                                            <option value="{{$size->id}}">{{$size->nama_size}}</option>
                                          @endforeach
                                        </select>
                                </div>
                                <div class="form-input">
                                    <label for="jumlah" class="required">Jumlah Barang</label>
                                    <input type="text" name="jumlah" id="jumlah" />
                                </div>
                                <div class="form-input">
                                    <label for="alamat" class="required">Alamat</label>
                                    <input type="text" name="alamat" id="alamat" />
                                </div>
                                <div class="form-input">
                                    <label for="email" class="required">Email</label>
                                    <input type="text" name="email" id="email" />
                                </div>
                                <div class="form-input">
                                    <label for="phone_number" class="required">No Telepon</label>
                                    <input type="text" name="phone_number" id="phone_number" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-input">
                                    <label for="chequeno">Variasi</label>
                                    <input type="text" name="chequeno" id="chequeno" placeholder="Contoh: Warna Putih, Ukuran XL, Edisi ke-2" />
                                </div>
                                <div class="form-input">
                                    <label for="desain">Desain</label>
                                    <input type="text" name="desain" id="desain" />
                                </div>
                            </div>
                        </div>                       
                        <div class="form-submit">
                            <input type="submit" value="Submit" class="submit" id="submit" name="submit" />
                            <input type="submit" value="Reset" class="submit" id="reset" name="reset" />
                        </div>
                    </form>
                  </div>
                </div>
    </section>
    <!-- /.content -->
  </div>
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
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('assets/bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
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
<!-- DataTables -->
<script src="{{asset('assets/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>

<link rel="stylesheet" href="{{asset('assets/bower_components/select2/dist/js/select2.min.js')}}">

    <script src="{{asset('assets/bower_components/form/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/bower_components/form/vendor/nouislider/nouislider.min.js')}}"></script>
    <script src="{{asset('assets/bower_components/form/vendor/wnumb/wNumb.js')}}"></script>
    <script src="{{asset('assets/bower_components/form/vendor/jquery-validation/dist/jquery.validate.min.js')}}"></script>
    <script src="{{asset('assets/bower_components/form/vendor/jquery-validation/dist/additional-methods.min.js')}}"></script>
    <script src="{{asset('assets/bower_components/form/js/main.js')}}"></script>

<script src="autoNumeric.js"></script>

<!--javascript modal -->
<script type="text/javascript">
 $.ajaxSetup({
  headers: {
   'X-CSRF-TOKEN': $('input[name="_token"]').val()
  }
 });

// modal create
    $('.modalCreateTrigger').click(function(event){
    event.preventDefault();
        $.ajax({
            url     : "{{route('modal_create_produk')}}",
            method  : 'get',
            success : function(response){
                $('.modalKu').html(response);
                $('#myModal').modal({ backdrop: 'static', keyboard: false });
            }
        });
  });

// MODAL EDIT
    function modalEditTriger(id){
      $.ajax({
        url     : "{{route('modal_edit_produk')}}",
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

 $(function () {
  $('#example').DataTable({
    'paging'      : true,
    'lengthChange': true,
    'searching'   : true,
    'ordering'    : true,
    'info'        : true,
    'autoWidth'   : true
    })
  })

 $(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
});

 
</script>

<!-- ./javascript modal -->

</body>
</html>
