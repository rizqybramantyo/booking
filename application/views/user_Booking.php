<!DOCTYPE html>

<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Booking Room | Booking</title>
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
          <li class="active">
            <a href="<?php echo base_url('User_Schedule'); ?>">
              <i class="fa fa-calendar"></i> <span>Schedule</span>
            </a>
          </li>

          <!-- Halaman Reservation History -->
          <li>
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
     Booking
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="">Schedule</li>
          <li class="active">Booking</li>
      </ol>
    </section>


   <!--  <section class="content-header">
          <div>
                <?php
                  if($this->session->flashdata('berhasilPinjam')){
                ?>
                    <div class="alert alert-success fade in">
                      <a href="<?php echo base_url('User_Schedule'); ?>" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    Booking Done! Your booking code is <b><?php echo $kode_booking; ?></b> <strong>successfuly !</strong>
                    </div>
                <?php
                  }else if($this->session->flashdata('gagalPinjamRuangAda')){
                ?>
                    <div class="alert alert-danger fade in">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                      Your Booking is <strong>Failed </strong>. The room(s) is already booked !
                    </div>
                <?php
                  }else if($this->session->flashdata('gagaltanggal')){
                ?>
                    <div class="alert alert-danger fade in">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                      Your Booking is <strong>Failed </strong>. Date is invalid !
                    </div>
                <?php
                  }else if($this->session->flashdata('gagalwaktu')){
                ?>
                    <div class="alert alert-danger fade in">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                      Your Booking is <strong>Failed </strong>. Time is invalid !
                    </div>
                <?php
                  }
                ?>
          </div>
        </section> -->

    

    <!-- Tampilan untuk mendefinisikan button Daftar PUI -->
    <section class="content">

      
      
      <!-- Membuat tampilan untuk table -->      
      <section class="content">
      <div class="row">
         <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <form method="post" action="<?php echo base_url('User_Booking/booking')?>" enctype="multipart/form-data">
                <div class="box-body">
                    
                    <input type="hidden" name="id_penyewa" value="<?php echo $row['id_penyewa']; ?>">
                    <input type="hidden" name="kode_booking" value="<?php echo $kode_booking; ?>">
                  <div class="form-group">
                    <label>No. Identity: </label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-credit-card"></i>
                        </div>
                    <input type="text" class="form-control" disabled="disabled" name="no_identitas" value="<?php echo $row['no_identitas']; ?>" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Name: </label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </div>
                    <input type="text" class="form-control" disabled="disabled" name="nama_instansi" value="<?php echo $row['nama_instansi']; ?>" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Event: </label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-font"></i>
                        </div>
                        <input type="text" class="form-control" placeholder="Enter Event" name="event" value="<?php if($event != null){echo $event;}?>" required>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12"><label>Date:</label></div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Start</label>
                          <div class="input-group date">
                            <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                          </div>
                            <input min="<?php echo date('Y-m-d') ?>" type="date"  data-format="dd/MM/yyyy" class="form-control pull-right" id="datepicker" name="tgl_mulai" required>
                          </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>End</label>
                          <div class="input-group date">
                            <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                          </div>
                            <input min="<?php echo date('Y-m-d') ?>" type="date" data-format="dd/MM/yyyy" class="form-control pull-right" id="datepicker2" name="tgl_selesai" required>
                          </div>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12"><label>Time:</label></div>
                    <div class="col-md-6">
                      <div class="bootstrap-timepicker">
                        <div class="form-group">
                          <label>Start</label>
                          <div class="input-group">
                            <div class="input-group-addon">
                              <i class="fa fa-clock-o"></i>
                            </div>
                            <input type="time" class="form-control timepicker" name="jam_mulai" required>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="bootstrap-timepicker">
                        <div class="form-group">
                          <label>End</label>
                          <div class="input-group">
                            <div class="input-group-addon">
                              <i class="fa fa-clock-o"></i>
                            </div>
                            <input type="time" class="form-control timepicker" name="jam_selesai" required>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Room: </label>
                    <div class="input-group">
                          <?php
                          foreach ($ruang as $value) {
                        ?>
                          <input type="checkbox" name="nama_ruang[]" value="<?php echo $value->id_ruang;?>">&nbsp;&nbsp;<?php echo $value->nama_ruang;?><br>
                        <?php
                          }
                        ?>
                          <br>
                         <!--  <a data-toggle="modal" data-target="#modal-room">Show Room's</a> -->
                    </div>
                  </div>
                    <?php
                      if($row['jenisPaket'] != 1){
                    ?>
                        <div class="form-group">
                            <label>Letter of reservation :</label>
                            <div class="input-group">
                                <input type="file" id="exampleInputFile" name="surat">
                                <p class="help-block">Input file .pdf</p>
                            </div>
                        </div>
                    <?php
                      }
                    ?>
                    
                    <div class="btn-group">
                     <button type="submit" class="btn btn-success">Submit</button>
                  </div>
                  </div>
          </form>
          </div>
          </div>



                  <!-- <?php
                    if($this->session->flashdata('gagalPinjamRuangAda')){
                  ?>

                  <div class="modal show" id="gagalPinjamRuangAda" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
                    <div class="modal-dialog" role="document">


                        <div class="modal-content">
                          <div class="modal-header">
                           
                          <h3 class="modal-title" id="myModalLabel" style="text-align: center;"><b>Information</b></h3>
                          </div>
                          <div class="modal-body" style="text-align: center;">
                          <h4>Sorry, Your Booking  Failed !</h4>
                          <h5>The room(s) is already booked.</h5>
                          </div> 
                          <div class="modal-footer">
                            <button type="button" class="btn btn-danger pull-right" onclick="closeModal()" data-dismiss="modal">OK</button>
                          </div>
                          <?php echo form_close(); ?>

                        </div> 
                      </div>
                    </div>

                  <?php
                    }
                  ?>


                  <?php
                    if($this->session->flashdata('berhasilPinjam')){
                  ?>

                  <div class="modal show" id="berhasilPinjam" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
                    <div class="modal-dialog" role="document">


                        <div class="modal-content">
                          <div class="modal-header">
                           
                          <h3 class="modal-title" id="myModalLabel" style="text-align: center;"><b>Information</b></h3>
                          </div>
                          <div class="modal-body" style="text-align: center;">
                          <h4>Booking Done !</h4>
                          <h5>Your booking code is <?php echo $kode_booking; ?>.</h5>
                          </div> 
                          <div class="modal-footer">
                            <button type="button" class="btn btn-success pull-right" onclick="closeModal1()" data-dismiss="modal">OK</button>
                          </div>
                          <?php echo form_close(); ?>


                        </div> 
                      </div>
                    </div>

                  <?php
                    }
                  ?>


                  <?php
                    if($this->session->flashdata('gagalwaktu')){
                  ?>

                  <div class="modal show" id="gagalwaktu" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
                    <div class="modal-dialog" role="document">


                        <div class="modal-content">
                          <div class="modal-header">
                           
                          <h3 class="modal-title" id="myModalLabel" style="text-align: center;"><b>Information</b></h3>
                          </div>
                          <div class="modal-body" style="text-align: center;">
                          <h4>Sorry, Your Booking  Failed !</h4>
                          <h5>Time is invalid.</h5>
                          </div> 
                          <div class="modal-footer">
                            <button type="button" class="btn btn-danger pull-right" onclick="closeModal2()" data-dismiss="modal">OK</button>
                          </div>
                          <?php echo form_close(); ?>


                        </div> 
                      </div>
                    </div>

                  <?php
                    }
                  ?>

                  <?php
                    if($this->session->flashdata('gagaltanggal')){
                  ?>

                  <div class="modal show" id="gagaltanggal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
                    <div class="modal-dialog" role="document">


                        <div class="modal-content">
                          <div class="modal-header">
                           
                          <h3 class="modal-title" id="myModalLabel" style="text-align: center;"><b>Information</b></h3>
                          </div>
                          <div class="modal-body" style="text-align: center;">
                          <h4>Sorry, Your Booking  Failed !</h4>
                          <h5>Date is invalid.</h5>
                          </div> 
                          <div class="modal-footer">
                            <button type="button" class="btn btn-danger pull-right" onclick="closeModal3()" data-dismiss="modal">OK</button>
                          </div>
                          <?php echo form_close(); ?>

                        </div> 
                      </div>
                    </div>

                  <?php
                    }
                  ?> -->



                </div>
              </div>
         




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
