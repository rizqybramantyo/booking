<!DOCTYPE html>

<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Booking Room | Admin Member Bronze</title>
  <link rel="icon" href="assets/img/LogoIA.png" type="image/gif">

  <!-- 1. Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url('AdminLTE/bower_components/bootstrap/dist/css/bootstrap.min.css'); ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('AdminLTE/bower_components/font-awesome/css/font-awesome.min.css'); ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url('AdminLTE/bower_components/Ionicons/css/ionicons.min.css'); ?>">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url('AdminLTE/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css'); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('AdminLTE/dist/css/AdminLTE.min.css'); ?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url('AdminLTE/dist/css/skins/_all-skins.min.css'); ?>">


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
        <li class="active">
          <a href="<?php echo base_url('admin_Dashboard'); ?>">
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
               <a href="<?php echo base_url('admin_GoldStartup'); ?>">
                <i class="fa fa-circle-o">
              </i>
               Start Up
              </a>
            </li>
          </ul>
        </li>

        <!-- Halaman untuk data peminjam Silver -->
        <li>
          <a href="<?php echo base_url('admin_Silver'); ?>">
            <i class="fa fa-user"></i> <span>Silver</span>
          </a>
        </li>

        <!-- Halaman untuk data peminjam Bronze -->
        <li>
          <a href="<?php echo base_url('admin_Bronze'); ?>">
            <i class="fa fa-user"></i> <span>Bronze</span>
          </a>
        </li>

        <!-- Halaman untuk data summary -->
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

        <!-- Halaman untuk data Schedule-->
        <li>
          <a href="<?php echo base_url('admin_Schedule'); ?>">
            <i class="fa fa-calendar"></i> <span>Schedule</span>
          </a>
        </li>

        <!-- Halaman untuk Admin Map-->
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
        Dashboard
      </h1>
      <section class="content-header">
          <div>
            <?php
              if($this->session->flashdata('sukseskatasandiUbah')){
            ?>
                <div class="alert alert-success fade in">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  New Password :   <strong style="font-size:18px;color:black;"><?php echo $sandi; ?></strong> 
                </div>  
            <?php
              }
            ?>
          </div>
        </section>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Dashboard</li>
        <li class="active">Bronze</li>
      </ol>

    <!-- Tampilan untuk mendefinisikan jumlah pengguna -->
      <div class="row">
      <!-- Jumlah Pengguna Silver -->
        <form method="post" action="<?php echo base_url('Admin_MemberBronze');?>">
          <div class="col-md-12">
            <div class="small-box" style="background-color: #cd7f32;">
              <div class="inner">
                <h3><?php echo $bronze; ?></h3>
                <p>Bronze</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer"></a>
            </div>
          </div>
        </form>
      </div>
      
      <!-- Membuat tampilan untuk grafik -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
        </div>
        <div class="col-lg-7 col-xs-6"></div>
        <div class="col-lg-2 col-xs-6">
          <a href="<?php echo base_url('Admin_MemberBronze/export'); ?>">
            <button type="button" class="btn btn-block btn-success" style="width: 100%;"><i class="fa fa-file-excel-o"> &nbsp;Export</i></button>
          </a>
        </div>&nbsp;
      </div>
       
      <!-- Membuat tampilan untuk table --> <form method="post" action="<?php echo base_url('Admin_MemberBronze');?>">       
      <div class="row">
        <div class="col-xs-12">

          <div class="box">
            <!-- /.box-header -->
            <div class="table-responsive">
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Document</th>
                    <th>Change Password</th>
                    <th>Delete</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $i=0; foreach ($peminjam as $item){ $i++; ?>
                    <tr>
                      <td><?php echo $i;?></td>
                      <td><?php echo $item->nama_instansi; ?></td>
                      <td><?php echo $item->nohp; ?></td>
                      <td><?php echo $item->email; ?></td>
                      <td>
                        <a href="<?php echo $item->scan?>" target="_blank"><?php echo substr($item->scan, 44)?></a>
                      </td>
                      <td>
                        <div class="btn-group">
                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-<?php echo $item->id_penyewa; ?>" >Change</button>
                      </td>
                      <td>
                         <div class="btn-group">
                        <a href = " <?php echo base_url('Admin_MemberBronze/hapus1/'.$item->id_penyewa); ?>"><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-delete"><i class="glyphicon glyphicon-trash"></i></button></a>
                          </div>
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
    </form>
    </section>
  </div>

    <!--modal change pass user-->
 <?php foreach ($peminjam as $item){ ?> 
  <div class="modal modal-default fade" id="modal-<?php echo $item->id_penyewa; ?>" >
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                  
               
              </div>
              <div class="modal-body">
              <form method="post" action="<?=base_url()?>Admin_MemberBronze/ubahKataSandiPeminjam" data-toggle="validator">
              <input type="hidden" name="email" value="<?php echo $item->email?>">
              <input type="hidden" name="id_penyewa" value="<?php echo $item->id_penyewa?>">
                    <center><p>Are you sure to change password from <?php echo $item->email; ?></p></center>
             
              <div class="modal-footer">
               
                <button type="submit" class="btn btn-success">OK</button>
              
              </div>
            </form>
            </div>
          </div>
        </div>
      </div>

      <?php
        }
      ?>

      <!--modal delete -->
        <div class="modal fade" id="modal-delete">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
               
              </div>
              <div class="modal-body">
              <label name="">Delete Success
              </label>
              </div>
              <div class="modal-footer">
            
                </a>
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



        <!-- <div class="modal modal-default fade" id="modal-delete">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
               
              </div>
              <div class="modal-body">
              <p name="">Are you sure to delete this name?</p>
              </div>
              <div class="modal-footer">
                <a href="<?php echo base_url('admin_memberBronze'); ?>">
                <button type="button" class="btn btn-danger">OK</button>
                </a>
              </div>
            </div>
          </div>
        </div> -->
<!-- mendefinisikan Link -->

<!-- jQuery 3 -->
<script src="<?php echo base_url('AdminLTE/bower_components/jquery/dist/jquery.min.js'); ?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('AdminLTE/bower_components/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
<!-- DataTables -->
<script src="<?php echo base_url('AdminLTE/bower_components/datatables.net/js/jquery.dataTables.min.js'); ?>"></script>
<script src="<?php echo base_url('AdminLTE/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js'); ?>"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url('AdminLTE/bower_components/jquery-slimscroll/jquery.slimscroll.min.js'); ?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url('AdminLTE/bower_components/fastclick/lib/fastclick.js'); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('AdminLTE/dist/js/adminlte.min.js'); ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('AdminLTE/dist/js/demo.js'); ?>"></script>
<!-- page script -->
<script>
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
