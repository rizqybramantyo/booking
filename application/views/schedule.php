<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Booking Room | Schedule</title>
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
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu" id="menukanan">
            <ul class="nav navbar-nav">
              <!-- Login -->
              <li class="dropdown user user-menu">
                <a href="<?php echo base_url('User_Login'); ?>">
                  <i class="glyphicon glyphicon-log-in"></i>
                  <span class="hidden-xs">Login</span>
                </a>
              </li>
            </ul>
          </div>
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
              <h3 class="box-title">Room Reservation Schedule</h3>
            </div>
            <div class="row" style="margin-left: 10px; margin-right: 10px;">
              <div class="col-md-4">
                <div class="form-group">
                <label>Month :</label>
                <select class="form-control select2" style="width: 100%;">
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
                </select>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                <label>Year :</label>
                <select class="form-control select2" style="width: 100%;">
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
                </select>
                </div>
              </div>
              <div class="col-md-4">
                <button type="button" class="btn btn-block btn-primary" style="margin-top: 24px;">Search</button>       
              </div>
            </div>
<!--sebelumnya pakai modal tpkan kalau pesen login dulu dan tadi ada modal kalau belum logout-->
            <div class="row">
              <div class="col-md-12" style="margin-left: 25px; margin-top: 10px;">
                <a href="<?php echo base_url('user_Login'); ?>">
                <button type="button" class="btn btn-block btn-success" data-toggle="modal"  style="width: auto;"><i class="fa fa-cart-plus"> Booking</i></button>
              </a>
              </div>
            </div>

            <div class="box-body">
              <div class="table-responsive">
              <table id="example2" class="table table-bordered table-hover">
                <thead style="background-color: #d2d6de;">
                <tr>
                  <th>Start Date</th>
                  <th>End Date</th>
                  <th>Start Time</th>
                  <th>End Time</th>
                  <th>Room's Name</th>
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
