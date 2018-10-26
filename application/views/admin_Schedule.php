<!DOCTYPE html>

<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Innovative Academy | Summary</title>
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

  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url('/AdminLTE/bower_components/bootstrap/dist/css/bootstrap.min.css'); ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('/AdminLTE/bower_components/font-awesome/css/font-awesome.min.css'); ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url('/AdminLTE/bower_components/Ionicons/css/ionicons.min.css'); ?>">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url('/AdminLTE/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css'); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('/AdminLTE/dist/css/AdminLTE.min.css'); ?>">
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
      <!-- Gambar dan Nama User serta Logout dalam bentuk dropdown -->


                <?php 
                    $row = $this->db->query("SELECT * FROM admin where email='".$this->session->email."'")->row_array();
                ?>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="<?php echo base_url('assets/img/logo.png'); ?>" class="user-image" alt="User Image">
                <!-- Email admin -->
                <span class="hidden-xs"><?php echo $row['email']; ?></span>
              </a>
              <ul class="dropdown-menu">
                <li class="user-header">
                  <img src="<?php echo base_url('assets/img/logo.png'); ?>" class="img-circle" alt="User Image">
                  <p>
                    <?php echo $row['email']; ?>
                    <small>Admin</small>
                  </p>
                </li>
                <li class="user-footer">
                  <div class="pull-right">
                      <a href="<?php echo base_url('Admin_Login/logout'); ?>" class="btn btn-default btn-flat">Sign out</a>
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
            <p>Admin</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>

      <!-- sidebar menu: -->
       <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU</li>

        <!-- Halaman Dashboard -->
        <li>
          <a href="<?php echo base_url('admin_dashboard'); ?>">
            <i class="fa fa-dashboard"></i> 
            <span>Dashboard</span>
          </a>
        </li>

        <!-- Halaman Gold -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i> 
            <span>Gold</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <!-- Terdiri 2 Jenis -->
          <ul class="treeview-menu">
            <!-- Untuk PUI -->
            <li>
                <a href="<?php echo base_url('admin_GoldPUI'); ?>">
                <i class="fa fa-circle-o"></i>
                 PUI
               </a>
            </li>
            <!-- Untuk Start Up -->
            <li>
               <a href="<?php echo base_url('admin_GoldStartUp'); ?>">
                <i class="fa fa-circle-o">
              </i>
               Start Up
              </a>
            </li>
          </ul>
        </li>

        
        <li>
          <a href="<?php echo base_url('admin_Silver'); ?>">
            <i class="fa fa-user"></i> <span>Silver</span>
          </a>
        </li>

       
        <li>
          <a href="<?php echo base_url('admin_Bronze'); ?>">
            <i class="fa fa-user"></i> <span>Bronze</span>
          </a>
        </li>

        <li>
          <a href="<?php echo base_url('admin_Summary'); ?>">
            <i class="fa fa-clipboard"></i> <span>Summary</span>
          </a>
        </li>

        <!-- Halaman Room -->
        <li>
          <a href="<?php echo base_url('admin_Room'); ?>">
            <i class="fa fa-bank"></i> <span>Room</span>
          </a>
        </li>
        <li class="active">
          <a href="#">
            <i class="fa fa-calendar"></i> <span>Schedule</span>
            <span class="pull-right-container">
          </a>
        </li>
         <li>
          <a href="<?php echo base_url('admin_Map'); ?>">
            <i class="fa fa-map-marker"></i> <span>Map</span>
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
          Room Reservation Schedule
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Schedule</li>
        </ol>
      </section>

      <section class="content">
        <div class="row">
         <section class="content">
          <div class="col-md-12">
          <div class="box">&nbsp;
            <div class="row" style="margin-left: 10px; margin-right: 10px;">
            <div class="col-md-4">
                <div class="form-group">
                <label>Month :</label>
                <select name="bulan" class="form-control select2" style="width: 100%;">
                    <option selected="selected">January</option>
                    <?php
                    $bulan=array("January","February","March","April","May","June","July","August","September","October","November","December");
                    $jlh_bln=count($bulan);
                    for($c=0; $c<$jlh_bln; $c+=1){
                        echo"<option value=$bulan[$c]> $bulan[$c] </option>";
                    }
                    ?>
                </select>
                <!-- <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">January</option>
                  <option>February</option>
                  <option>March</option>
                  <option>April</option>
                  <option>May</option>
                  <option>June</option>
                  <option>July</option>
                  <option>August</option>
                  <option>September</option>
                  <option>October</option>
                  <option>November</option>
                  <option>December</option>
                </select> -->
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                <label>Year :</label>
                 <?php
                    $now=date('Y');
                        echo
                 "<select name='tahun' class='form-control select2' style='width: 100%;'>";
                    for ($a=2018;$a<=$now;$a++)
                          {
                   echo "<option value='$a'>$a</option>";
                          }
                    echo "</select>";
                      ?>
                    
            
                <!-- <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">2018</option>
                  <option>2019</option>
                  <option>2020</option>
                  <option>2021</option>
                  <option>2022</option>
                  <option>2023</option>
                  <option>2024</option>
                  <option>2025</option>
                  <option>2026</option>
                  <option>2027</option>
                </select> -->
                </div>
              </div>
              <div class="col-md-4">
                <button type="submit" class="btn btn-block btn-primary" style="margin-top: 24px;">Search</button>       
              </div>
            </div>

            <div class="table-responsive">
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead style="background-color: #d2d6de;">
                <tr>
                  <th>Start Date</th>
                  <th>End Date</th>
                  <th>Start Time</th>
                  <th>End Time</th>
                  <th>Room Name</th>
                  <th>Event</th>
                  <th>Status</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach ($adule as $item){ ?>
                    <tr>
                      <td><?php echo $item->tgl_mulai; ?></td>
                      <td><?php echo $item->tgl_selesai; ?></td>
                      <td><?php echo $item->jam_mulai; ?></td>
                      <td><?php echo $item->jam_selesai; ?></td>
                      <td><?php echo $item->nama_ruang; ?></td>
                      <td><?php echo $item->event; ?></td>
                    <td>
                      <?php 
                        if($item->status_pinjam == 'deny'){ ?>
                          <center><button type="button" class="btn btn-block btn-danger" disabled="disabled" style="width: auto;">Deny</button></center>
                      <?php
                        }else if($item->status_pinjam == 'accept'){ ?>
                          <center><button type="button" class="btn btn-block btn-success" disabled="disabled" style="width: auto;">Accept</button></center>
                      <?php
                        }else if($item->status_pinjam == 'process'){ ?>
                          <center><button type="button" class="btn btn-block btn-warning" disabled="disabled" style="width: auto;">Process</button></center>
                      <?php
                        }else if($item->tgl_mulai && $item->tgl_selesai < now()){ ?>
                          <center><button type="button" class="btn btn-block btn-default" disabled="disabled" style="width:auto;">Done</button></center>
                      <?php
                        }
                      ?>
                    </td>
                  </tr>
                  <?php
                    }
                  ?>
                </tbody>
              </table>
            </div>
            </div>
          </div>
      </div>
          </section>
          </div>
        </section>
      </div>

        <div class="modal modal-success fade" id="modal-submit">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
               
              </div>
              <div class="modal-body">
                <p>Booking process</p>
              </div>
              <div class="modal-footer">
                <a href="<?php echo base_url('admin_schedule'); ?>">
                <button type="button" class="btn btn-success">OK</button>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="modal-room">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">List Room's</h4>
              </div>
              <div class="modal-body">
                <div class="row" id="starts" style="margin-left: 10px; margin-right: 10px; ">
                      <div class="col-md-12 col-sm-12 col-xs-12 work-list">
                        <h2 class="text-center portfolio-text"><b>Rooms</b></h2>
                      </div>
                      <div class="row">
                        <div class="col-md-6" style="margin-top: 10px;margin-bottom:10px; margin-bottom:10pxmargin-bottom:10px">
                          <img class="img-responsive" alt="photos" src="assets/img/6.jpg">
                          <button type="button" class="btn btn-warning" style="width: 100%;">
                            A
                          </button>
                        </div>
                        <div class="col-md-6" style="margin-top: 10px;margin-bottom:10px; margin-bottom:10px">
                          <img class="img-responsive" alt="photos" src="assets/img/6.jpg">
                          <button type="button" class="btn btn-warning" style="width: 100%;">
                            B
                          </button>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6" style="margin-top: 10px;margin-bottom:10px; margin-bottom:10pxmargin-bottom:10px">
                          <img class="img-responsive" alt="photos" src="assets/img/4.jpg">
                          <button type="button" class="btn btn-warning" style="width: 100%;">
                            C
                          </button>
                        </div>
                        <div class="col-md-6" style="margin-top: 10px;margin-bottom:10px; margin-bottom:10px">
                          <img class="img-responsive" alt="photos" src="assets/img/4.jpg">
                          <button type="button" class="btn btn-warning" style="width: 100%;">
                            D
                          </button>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6" style="margin-top: 10px;margin-bottom:10px; margin-bottom:10pxmargin-bottom:10px">
                          <img class="img-responsive" alt="photos" src="assets/img/6.jpg">
                          <button type="button" class="btn btn-warning" style="width: 100%;">
                            E
                          </button>
                        </div>
                        <div class="col-md-6" style="margin-top: 10px;margin-bottom:10px; margin-bottom:10px">
                          <img class="img-responsive" alt="photos" src="assets/img/6.jpg">
                          <button type="button" class="btn btn-warning" style="width: 100%;">
                            F
                          </button>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6" style="margin-top: 10px;margin-bottom:10px; margin-bottom:10pxmargin-bottom:10px">
                          <img class="img-responsive" alt="photos" src="assets/img/6.jpg">
                          <button type="button" class="btn btn-warning" style="width: 100%;">
                            G
                          </button>
                        </div>
                      </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
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
