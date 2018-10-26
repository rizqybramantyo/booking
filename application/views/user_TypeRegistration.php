<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Booking Room | Type Registration</title>
  <link rel="icon" href="assets/img/LogoIA.png" type="image/gif">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url('AdminLTE/bower_components/bootstrap/dist/css/bootstrap.min.css'); ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('AdminLTE/bower_components/font-awesome/css/font-awesome.min.css'); ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url('AdminLTE/bower_components/Ionicons/css/ionicons.min.css'); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('AdminLTE/dist/css/AdminLTE.min.css'); ?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url('AdminLTE/dist/css/skins/_all-skins.min.css'); ?>">
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

<!-- Header -->

  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand"><b>Booking Room</b> EDS</a>
        </div>
      </div>
    </nav>
  </header>

<!-- Content -->

  <div class="content-wrapper">
    <div class="container"><br>
      <div class="col-md-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Type User Registration</h3>
            </div>&nbsp;

            <div class="row">
              <center><img src="assets/img/user.png" class="img-circle" style="width: 20%;"></center>
            </div>&nbsp;

            <div class="row" style="margin-left: 10px; margin-right: 10px;">
              <div class="col-md-4">
                <div class="small-box" style="background-color: #cd7f32;">
                  <div class="inner">
                    <h3>Bronze</h3>
                    <p>User Registrations</p>
                  </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                  <a href="<?php echo base_url('user_BronzeRegistration'); ?>" class="small-box-footer">
                    More info <i class="fa fa-arrow-circle-right"></i>
                  </a>
                </div>
                <div class="row">
                  <center><p style="margin: 20px;"><b>Bronze is intended for Organizations / Individuals related to Entrepreneurship</b></p></center>
                </div>
              </div>

              <div class="col-md-4">
                <div class="small-box" style="background-color: #b0b8b5;">
                  <div class="inner">
                    <h3>Silver</h3>
                    <p>User Registrations</p>
                  </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                  <a href="<?php echo base_url('user_SilverRegistration'); ?>" class="small-box-footer">
                    More info <i class="fa fa-arrow-circle-right"></i>
                  </a>
                </div>
                <div class="row">
                  <center><p style="margin: 20px;"><b>Silver is intended for UGM academicians who represent an Organization / Faculty</b></p></center>
                </div>
              </div>

              <div class="col-md-4">
                <div class="small-box" style="background-color: #e8c86b;">
                  <div class="inner">
                    <h3>Gold</h3>
                    <p>User Registrations</p>
                  </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                  <a href="<?php echo base_url('user_GoldRegistration'); ?>" class="small-box-footer">
                    More info <i class="fa fa-arrow-circle-right"></i>
                  </a>
                </div>
                <div class="row">
                  <center><p style="margin: 20px;"><b>Gold is intended for community Start Up and PUI</b></p></center>
                </div>       
              </div>

            </div>
          </div>
      </div>
    </div>
  </div>

  <div class="modal modal-danger fade" id="modal-login">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Information</h4>
        </div>
        <div class="modal-body">
          <p>You are not loged!</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">OK</button>
        </div>
      </div>
    </div>
  </div>

<!-- Footer -->

  <footer class="main-footer">
    <div class="container">
      <strong>Copyright &copy;<?php echo date("Y"); ?> Booking Room EDS.</strong> Universitas Gadjah Mada
    </div>
  </footer>
</div>

<!-- jQuery 3 -->
<script src="<?php echo base_url('AdminLTE/bower_components/jquery/dist/jquery.min.js'); ?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('AdminLTE/bower_components/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url('AdminLTE/bower_components/jquery-slimscroll/jquery.slimscroll.min.js'); ?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url('AdminLTE/bower_components/fastclick/lib/fastclick.js'); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('AdminLTE/dist/js/adminlte.min.js'); ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('AdminLTE/dist/js/demo.js'); ?>"></script>
</body>
</html>
