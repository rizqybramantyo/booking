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
    <center>
    <div class="col-md-4">
    <div style="height:100px;"></div>
    <form class="align-items-center align-self-center" id="form" style="font-family:Quicksand, sans-serif;background-color:#5a80bf;width:320px;padding:20px;">
        <h3 id="head" style="color:rgb(251,251,251);">Forgot Password</h3>

        <div class="form-row" style="height:20px;">
            <div class="col">
                <div></div>
            </div>
        </div>

        <div class="form-row">
            <div class="col-auto">
                <label class="col-form-label" style="color: #ffffff;">E-mail</label>
            </div>
            <div class="col-auto">
                <div></div>
            </div>

            <!-- Ini adalah form input email yang lupa password name=email -->
            <div class="col"><input class="form-control" name="email" type="text" required="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,15}$" inputmode="email" style="margin-left:0px;padding-right:0px;" placeholder="Email">
            </div>
        </div>
        <div class="form-row">
            <div class="col">
                <div style="height:20px;"></div>
            </div>
        </div>
        <!-- Ini adlah tombol button -->
        <button class="btn btn-info" type="button" id="butonas" data-toggle="modal" data-target="#modal-info" style="width:100%;height:100%;margin-bottom:10px;">Submit</button>
    </form>
    </div>
    </center>
    <div class="col-mh-4"></div>
    </div>
    </div>
  </div>

  <div class="modal modal-info fade" id="modal-info">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              </div>
              <div class="modal-body">
                <p>Please check your email.</b></p>
              </div>
              <div class="modal-footer">
                <a href="<?php echo base_url('User_ResetPassword')?>">
                <button type="button" class="btn btn-outline">OK</button>
                </a>
              </div>
            </div>
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
