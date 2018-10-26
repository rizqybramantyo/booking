<!DOCTYPE html>

<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Booking Room | History View</title>
  <link rel="icon" href="assets/img/LogoIA.png" type="image/gif">

  <!-- Mendefinisikan Link CSS, Font, Bootsstrap, dsb -->

  <!-- 1. Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- 2. Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url('/AdminLTE/bower_components/bootstrap/dist/css/bootstrap.min.css'); ?>">
  <!-- 3. Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('/AdminLTE/bower_components/font-awesome/css/font-awesome.min.css'); ?>">
  <!-- 4. Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url('/AdminLTE/bower_components/Ionicons/css/ionicons.min.css'); ?>">
  <!-- 5. Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('/AdminLTE/dist/css/AdminLTE.min.css'); ?>">
  <!-- 6. AdminLTE Skins. Choose a skin from the css/skins -->
  <link rel="stylesheet" href="<?php echo base_url('/AdminLTE/dist/css/skins/_all-skins.min.css'); ?>">
  <!-- 7. Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url('/AdminLTE/bower_components/morris.js/morris.css'); ?>">
  <!-- 8. jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url('/AdminLTE/bower_components/jvectormap/jquery-jvectormap.css'); ?>">
  <!-- 9. Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url('/AdminLTE/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css'); ?>">
  <!-- 10. Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url('/AdminLTE/bower_components/bootstrap-daterangepicker/daterangepicker.css'); ?>">
  <!-- 11. bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url('/AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css'); ?>">
  <!-- 12. Google Font -->
  <link rel="stylesheet" href="<?php echo base_url('/AdminLTE/https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic'); ?>">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url('/AdminLTE/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css'); ?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url('/AdminLTE/dist/css/skins/_all-skins.min.css'); ?>">

</head>


<body class="hold-transition skin-blue sidebar-mini">

<!-- Mendefinisikan Headernya -->

<div class="wrapper">
  <header class="main-header">

    <!-- 1. Ini adalah bagian Brand -->
    <a class="logo">
      <!-- Tulisan sidebar responsive mini 50x50 pixels -->
      <span class="logo-mini"><b>EDS</b></span>
      <!-- Tampilan Brand saat pada Desktop -->
      <span class="logo-lg"><b>Booking Room </b>EDS</span>
    </a>

    <!-- 2. Menambahkan Navbar -->
    <nav class="navbar navbar-static-top">
      <!-- Button untuk menyembunyikan Sidebar -->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>


                <?php 
                  $row = $this->db->query("SELECT * FROM peminjam where email='".$this->session->email."'")->row_array();
                ?>


      <!-- Gambar dan Nama User serta Logout dalam bentuk dropdown -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">

              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="<?php echo base_url('assets/img/logo.png'); ?>" class="user-image" alt="User Image">
                <!-- Email pengguna -->
                <span class="hidden-xs"><?php echo $row['email']; ?></span>
              </a>
           <ul class="dropdown-menu">
                <li class="user-header">
                  <img src="<?php echo base_url('assets/img/logo.png'); ?>" class="img-circle" alt="User Image">
                  <p>
                    <?php echo $row['email']; ?>
                    <small><?php echo $row['nama_instansi']; ?></small>
                  </p>
                </li>
                <li class="user-footer">
                  <div class="pull-right">
                    <a href="<?php echo base_url('User_Login'); ?>" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>

          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- 3. Membuat Sidebar sebelah kiri yang mengandung logo -->
  <aside class="main-sidebar">
    <section class="sidebar">

      <!-- Sidebar panel User -->
      <div class="user-panel">
        <div class="pull-left image">
         <img src="<?php echo base_url('assets/img/logo.png'); ?>" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p><?php echo $row['nama_instansi']; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- sidebar menu: -->
       <ul class="sidebar-menu" data-widget="tree">
          <li class="header">MENU</li>

          <!-- Halaman Profile-->
          <li>
            <a href="<?php echo base_url('User_Profile'); ?>">
              <i class="fa fa-user"></i> 
              <span>Profile</span>
            </a>
          </li>

          <!-- Halaman Schedule -->
          <li>
            <a href="<?php echo base_url('User_Schedule'); ?>">
              <i class="fa fa-calendar"></i> <span>Schedule</span>
            </a>
          </li>

          <!-- Halaman Reservation History -->
          <li class="active">
            <a href="<?php echo base_url('User_ReservationHistory'); ?>">
              <i class="fa fa-calendar-check-o"></i> <span>Reservation History</span>
            </a>
          </li>

          <!-- Halaman Map -->
          <li>
            <a href="<?php echo base_url('User_Map'); ?>">
              <i class="fa fa-map-marker"></i> <span>Map</span>
            </a>
          </li>

          <!-- Halaman Rooms -->
          <li>
            <a href="<?php echo base_url('User_Room'); ?>">
              <i class="fa fa-bank"></i> <span>Rooms</span>
              <span class="pull-right-container">
            </a>
          </li>
        </ul>
    </section>
  </aside>

  <!-- 4. Halaman Show -->
  <div class="content-wrapper">
    <!-- Menampilkan kontent header yang mengandung Breadcrumb -->
    <section class="content-header">
      <h1>
     History View
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="">History</li>
          <li class="active">View</li>
      </ol>
    </section>

    <!-- Tampilan untuk mendefinisikan button Daftar PUI -->
    <section class="content">

      
      
      <!-- Membuat tampilan untuk table -->      
      <section class="content">
      <div class="row">
         <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                    <label>Name:</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </div>
                        <input type="text" class="form-control" name="nama" disabled="disabled">
                    </div>
                </div>
                <div class="form-group">
                    <label>Booking Number:</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-pencil"></i>
                        </div>
                        <input type="text" class="form-control" name="no_booking" disabled="disabled">
                    </div>
                </div>
                <div class="form-group">
                    <label>Name Room:</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-bank"></i>
                        </div>
                        <input type="text" class="form-control" name="name_room" disabled="disabled">
                    </div>
                </div>
                <div class="form-group">
                    <label>No Identity:</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-credit-card"></i>
                        </div>
                        <input type="text" class="form-control" name="no_identitas" disabled="disabled">
                    </div>
                </div>
                <div class="form-group">
                    <label>Start Date:</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <input type="date" class="form-control" name="jam_mulai" disabled="disabled">
                    </div>
                </div>
                <div class="form-group">
                    <label>End Date:</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <input type="date" class="form-control" name="jam_selesai" disabled="disabled">
                    </div>
                </div>
                <div class="form-group">
                    <label>Start Time:</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-clock-o"></i>
                        </div>
                        <input type="time" class="form-control" name="jam_mulai" disabled="disabled">
                    </div>
                </div>
                <div class="form-group">
                    <label>End Time:</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-clock-o"></i>
                        </div>
                        <input type="time" class="form-control" name="jam_selesai" disabled="disabled">
                    </div>
                </div>
                <div class="form-group">
                    <i class="fa fa-check-square-o"></i><a href="#"> Nama File yang diupload</a>
                </div>
              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary"> <i class="fa fa-print"> Print</i></button>
              </div>
            </form>
          </div>
          <!-- /.box -->
      </div>
    </section>
  </div>

  <!-- 5. Membuat Footer-->
   <footer class="main-footer">
      <div class="container">
        <strong>Copyright &copy;<?php echo date("Y"); ?> Booking Room EDS.</strong> Universitas Gadjah Mada
      </div>
    </footer>
</div>


<!-- mendefinisikan Link -->

<!-- jQuery 3 -->
<script src="<?php echo base_url('/AdminLTE/bower_components/jquery/dist/jquery.min.js'); ?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url('/AdminLTE/bower_components/jquery-ui/jquery-ui.min.js'); ?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('/AdminLTE/bower_components/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
<!-- Morris.js charts -->
<script src="<?php echo base_url('/AdminLTE/bower_components/raphael/raphael.min.js'); ?>"></script>
<script src="<?php echo base_url('/AdminLTE/bower_components/morris.js/morris.min.js'); ?>"></script>
<!-- Sparkline -->
<script src="<?php echo base_url('/AdminLTE/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js'); ?>"></script>
<!-- jvectormap -->
<script src="<?php echo base_url('/AdminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'); ?>"></script>
<script src="<?php echo base_url('/AdminLTE/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'); ?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url('/AdminLTE/bower_components/jquery-knob/dist/jquery.knob.min.js'); ?>"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url('/AdminLTE/bower_components/moment/min/moment.min.js'); ?>"></script>
<script src="<?php echo base_url('/AdminLTE/bower_components/bootstrap-daterangepicker/daterangepicker.js'); ?>"></script>
<!-- datepicker -->
<script src="<?php echo base_url('/AdminLTE/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js'); ?>"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url('/AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js'); ?>"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url('/AdminLTE/bower_components/jquery-slimscroll/jquery.slimscroll.min.js'); ?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url('/AdminLTE/bower_components/fastclick/lib/fastclick.js'); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('/AdminLTE/dist/js/adminlte.min.js'); ?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url('/AdminLTE/dist/js/pages/dashboard.js'); ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('/AdminLTE/dist/js/demo.js'); ?>"></script>
<script >
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>

</html>
