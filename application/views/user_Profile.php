<!DOCTYPE html>

<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Booking Room | Profile</title>
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

  <link rel="stylesheet" type="text/css" href="styles.css" />




</head>


<body class="hold-transition skin-blue sidebar-mini">


<!--action rubah sandi-->
        
      


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
                    $row = $this->db->query("SELECT * FROM peminjam where email='".$this->session->email."'")->row_array();
                ?>


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
                     <a href="<?php echo base_url('User_Login/logout'); ?>" class="btn btn-default btn-flat">Sign out</a>
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
          <li class="active treeview">
            <a href="#">
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
          Reservator Profile
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Profile</li>
        </ol>
      </section>

      <section class="content-header">
          <div>
            <?php
              if($this->session->flashdata('kataSandiBerhasil')){
            ?>
                <div class="alert alert-success fade in">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                 Change password <strong>successfuly !</strong>
                </div>
            <?php
              }else if($this->session->flashdata('kataSandiTidakCocok')){
            ?>
                <div class="alert alert-danger fade in">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  Change password <strong>failed </strong>, new password and retype new password not maching !
                </div>
            <?php
              }else if($this->session->flashdata('kataSandiGagal')){
            ?>
                <div class="alert alert-danger fade in">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  Change password <strong>failed </strong>, try again !
                </div>
            <?php
              }
            ?>
          </div>
        </section>

      <section class="content">
        <div class="row">
         <section class="content">
          <div class="box box-default">           
            <div class="box-body">
              <div class="container">
                <div class="row">
                <div class="col-md-4" style="margin-left: 10px; margin-right: 10px;">
                  <center><img src="<?php echo base_url('assets/img/logo.png'); ?>" class="img-circle" alt="User Image" class="rounded float-left">
                  </center> 
                  <br>
                </div>

                  <div class="col-md-6" style="margin-left: 10px; margin-right: 10px;">
                    &nbsp;
                    <h4><b>Information:</b></h4>
                    <table>
                      <tr>
                        <td>Name/Unit :&nbsp;</td>
                        <td>&nbsp;&nbsp;<?php echo $row['nama_instansi']; ?></td>
                      </tr>
                      <tr>
                        <td>Phone&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</td>
                        <td>&nbsp;&nbsp;<?php echo $row['nohp']; ?></td>
                      </tr>
                      <tr>
                        <td>Email  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;:</td>
                        <td>&nbsp;&nbsp;<?php echo $row['email']; ?></td>
                      </tr>
                    </table>
                  </div>

                <div class="col-md-2" style="margin-left: 10px; margin-right: 10px;">
               
                      <button type="button" class="btn btn-success dropdown-toggle"  data-toggle="dropdown"> Change <span class="caret"></span></button>

                      <ul class="dropdown-menu" role="menu">
                              <li><a href="#" data-toggle="modal" data-target="#modal-editpass">Change Password</a></li>
                            </ul>

                       
                </div>
                </div>
                </div>
              </div>
            </div>
          </section>
          </div>
        </section>
      </div>
        
    
      <div class="modal fade" id="modal-editpass">
            
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Change Password </h4>
              </div>

              
              <div class="modal-body">
                
        <!--Form input change pass-->
       
                  <form  method="post" action="<?=base_url()?>User_Profile/ubahKataSandi" data-toggle="validator">
                  <div class="box-body">
                    <input type="hidden" name="email" value="<?php echo $row['email']; ?>">
                  <input type="hidden" name="pass" value="<?php echo $row['pass']; ?>">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Old Password: </label>
                    <div class="input-group">
                    <input type="password" class="form-control" placeholder="Enter Old Password" name="oldpass" required="" id="pwd" >
                    <span class="input-group-btn">
                        <button type="button" id="eye" class="btn btn-info btn-flat">
                          <i class="fa fa-eye"></i>
                        </button>
                      </span>
                  </div>
                </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">New Password: </label>
                    <input type="password" class="form-control" placeholder="Enter New Password" name="newpass" required="" id="inputPassword">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Retype New Password: </label>
                    <input type="password" class="form-control" placeholder="Enter Retype New Password" name="repass" required="" data-match="#inputPassword" data-match-error="Whoops, sandi tidak cocok">
                  </div>
                  </div>
                  
                
                  
            
           
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left btn-danger" data-dismiss="modal">Cancel</button>
               
                <button type="submit" class="btn btn-primary">Save changes</button>
              
              </div>
              </form>
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

<!-- page script mata -->
    <script src="<?=base_url()?>assets/js/validator.js"></script>
    <script>
      function show() {
          var p = document.getElementById('pwd');
          p.setAttribute('type', 'text');
      }

      function hide() {
          var p = document.getElementById('pwd');
          p.setAttribute('type', 'password');
      }

      var pwShown = 0;

      document.getElementById("eye").addEventListener("click", function () {
          if (pwShown == 0) {
              pwShown = 1;
              show();
          } else {
              pwShown = 0;
              hide();
          }
      }, false);
    </script>
</body>

</html>
