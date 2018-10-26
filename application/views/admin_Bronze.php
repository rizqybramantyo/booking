<!DOCTYPE html>

<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Booking Room | Admin Bronze</title>
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

       
        <li class="active">
          <a href="#">
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
        <li>
          <a href="<?php echo base_url('admin_Schedule'); ?>">
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
      Bronze
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Bronze</li>
      </ol>
    </section>

    <!-- Tampilan untuk mendefinisikan button Daftar PUI -->
    <section class="content">

      <div class="row">
      <!-- Button Daftar PUI -->
        <div class="col-lg-3 col-xs-6"></div>
        <div class="col-lg-7 col-xs-6"></div>
        <div class="col-lg-2 col-xs-6">
          <a href="<?php echo base_url('Admin_Bronze/export'); ?>">
            <button type="button" class="btn btn-block btn-success"><i class="fa fa-file-excel-o"> &nbsp;Export</i></button>
          </a>
        </div>
      </div>
      <br>
      
      <!-- Membuat tampilan untuk table -->      
     <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <div class="box">
            <!-- /.box-header -->
            <div class="table-responsive">
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Booking Code</th>
                  <th>Name</th>
                  <th>Room</th>
                  <th>Event</th>
                  <th>Letter</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach ($bronze as $item){ ?>
                    <tr>
                      <td><?php echo $item->kode_booking; ?></td>
                      <td><?php echo $item->nama_instansi; ?></td>
                      <td><?php echo $item->nama_ruang; ?></td>
                      <td><?php echo $item->event; ?></td>
                      <td>
                        <a href="<?php echo $item->surat?>" target="_blank"><?php echo substr($item->surat, 46)?></a>
                      </td>
                      <td>
                      <div class="btn-group">
                        <button type="button" class="btn btn-success"><?php echo $item->status_pinjam; ?></button>
                        <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                          <span class="caret"></span>
                          <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                          <?php if($item->status_pinjam == 'Accept'){ ?>
                              <li><a href="#">Deny</a></li>
                              <li><a href="#">Process</a></li>
                          <?php 
                          } else if($item->status_pinjam == 'Deny'){ ?>
                              <li><a href="#">Process</a></li>
                         <?php 
                          } else if($item->status_pinjam == 'Process'){ ?>
                              <li><a href="#">Accept</a></li>
                              <li><a href="#">Deny</a></li>
                          <?php } ?>
                        </ul>
                      </div>
                      </td>
                      <td>
                        <div class="btn-group"> 
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modalview-<?php echo $item->kode_booking; ?>"><i class="glyphicon glyphicon-eye-open"></i></button>
                        </div>
                          <!-- 
                          <button type="button" class="btn btn-warning"  data-toggle="modal" data-target="#modal-edit"><i class="glyphicon glyphicon-pencil"></i></button> -->
                          <div class="btn-group">  
                          <a href = " <?php echo 
                          base_url('Admin_Bronze/hapus1/'.$item->kode_booking); ?>"><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-delete"><i class="glyphicon glyphicon-trash"></i></button></a>
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
    </section>
  </div>

  <div class="modal fade" id="modal-add">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Add PUI</h4>
              </div>
              <div class="modal-body">
                <div class="box box-primary">
                  <form role="form">
                  <div class="box-body">
                  <div class="form-group">
                    <label for="exampleInputName1">Name  </label>
                    <input type="text" class="form-control" placeholder="Name" name="name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email </label>
                    <input type="email" class="form-control" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputIdentity1">Identity </label>
                    <input type="text" class="form-control" placeholder="Identity number">
                  </div>
                  </div>
                  </form>
                  </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left btn-danger" data-dismiss="modal">Cancel</button>    
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">Submit</button>
              </div>
            </div>
          </div>
    </div>

     <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              </div>
              <div class="modal-body">
                <p>Add Success&hellip; Password ... Username ...</p>
              </div>
              <div class="modal-footer">
               <a href="<?php echo base_url('admin_GoldPUI'); ?>">
                <button type="button" class="btn btn-default pull-left" data="modal">Oke</button>
               </a>
              </div>
            </div>
          </div>
      </div>
     <!--modal view-->
<?php foreach ($bronze as $item){ ?>
<div class="modal fade" id="modalview-<?php echo $item->kode_booking; ?>">
    <form method="post" action="<?php echo base_url('admin_Silver');?>"> 
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">View</h4>
              </div>
              <div class="modal-body">
                <div class="box box-primary">
            <form role="form">
              <div class="box-body">
                <!-- <div class="form-group">
                    <label>No:</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-pencil"></i>
                        </div>
                        <input type="text" class="form-control" name="" disabled="disabled">
                    </div>
                </div> -->
                <div class="form-group">
                    <label>Booking Code:</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-pencil"></i>
                        </div>
                        <input type="text" class="form-control" name="kode_booking" disabled="disabled" value="<?php echo $item->kode_booking; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label>Name:</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-pencil"></i>
                        </div>
                        <input type="text" class="form-control" name="nama_ruang" disabled="disabled" value="<?php echo $item->nama_instansi; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label>Room:</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-pencil"></i>
                        </div>
                        <input type="text" class="form-control" name="nama_ruang" disabled="disabled" value="<?php echo $item->nama_ruang; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label>Start Date:</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <input type="date" class="form-control" name="tgl_mulai" disabled="disabled" value="<?php echo $item->tgl_mulai; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label>End Date:</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <input type="date" class="form-control" name="tgl_selesai" disabled="disabled" value="<?php echo $item->tgl_selesai; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label>Start Time:</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-clock-o"></i>
                        </div>
                        <input type="time" class="form-control" name="jam_mulai" disabled="disabled" value="<?php echo $item->jam_mulai; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label>End Time:</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-clock-o"></i>
                        </div>
                        <input type="time" class="form-control" name="jam_selesai" disabled="disabled" value="<?php echo $item->jam_selesai; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label>Event:</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-pencil"></i>
                        </div>
                        <input type="text" class="form-control" name="event" disabled="disabled" value="<?php echo $item->event; ?>">
                    </div>
                </div>
                
              </div>
              <!-- <div class="box-footer">
                <button type="submit" class="btn btn-primary"> <i class="fa fa-print"> Print</i></button>
              </div> -->
            </form>
          </div>
              </div>
              <div class="modal-footer">
               <button type="button" class="btn btn-primary pull-right" data-dismiss="modal">Ok</button>
              </div>
            </div>
          </div>
        </form>
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
            <!-- 

             -->
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
