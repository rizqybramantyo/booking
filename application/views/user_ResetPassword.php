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
    <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4" style="margin-left: 10px; margin-right: 10px;">
    <div style="height:100px;"></div>
    <form class="align-items-center align-self-center" id="form" style="font-family:Quicksand, sans-serif;background-color:#5a80bf;padding:20px;">
        <center><h3 id="head" style="color:rgb(251,251,251);">Reset Password</h3></center>
        <div></div>

        <div class="form-row" style="height:20px;">
            <div class="col">
                <div></div>
            </div>
        </div>

        <div class="form-row">
            <div class="col-auto"><label class="col-form-label" style="color: #ffffff;">New Password</label></div>
        </div>
        <div class="form-row">
            <div class="col"><input class="form-control" type="Password" required="" name="newpass" placeholder="New Password"></div>
        </div>

        <div class="form-row">
            <div class="col-auto"><label class="col-form-label" style="margin-top:20px; color: #ffffff;">Retype New Password</label></div>
        </div>
        <div class="form-row">
            <div class="col"><input class="form-control" type="Password" required="" name="renewpass" placeholder="Retype New Password"></div>
        </div>
        <a href="<?php echo base_url('User_Login'); ?>">
            <button class="btn btn-info"type="button" id="butonas" style="width:100%;height:100%;margin-bottom:10px;background-color:rgb(106,176,209);margin-top:10px;">Change</button>
        </a>
    </form>
    </div>
    <div class="col-mh-4"></div>
    </div>
  </div>
    
  <!-- Footer -->
  <footer class="main-footer">
    <div class="container">
      <strong>Copyright &copy;<?php echo date("Y"); ?> Booking Room EDS.</strong> Universitas Gadjah Mada
    </div>
    <!-- /.container -->
  </footer>
</div>
<!-- ./wrapper -->

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
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>
