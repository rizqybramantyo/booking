<!DOCTYPE html>

<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Booking Room | Admin Room</title>
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
        <li class="active">
          <a href="#">
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
      Room
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Room</li>
      </ol>
    </section>

    <!--peringatan tambah room, ubah room, hapus room tapi belum semuanya digunakan-->
<section class="content-header">
          <div>
            
              
            <?php
              if($this->session->flashdata('suksestambah')){
            ?>
                <div class="alert alert-success fade in">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  Add Room Data <strong>Successfully!</strong>
                </div>
            <?php
              }else if($this->session->flashdata('suksesubahRuang')){
            ?>
                <div class="alert alert-success fade in">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  Edit Room Data <strong>Successfully!</strong>
                </div>
            <?php
              }else if($this->session->flashdata('gagaltambah')){
            ?>
                <div class="alert alert-danger fade in">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  Added Room Data <strong>Failed !</strong> 
                </div>
            <?php
              }else if($this->session->flashdata('gagalubahRuang')){
            ?>
                <div class="alert alert-danger fade in">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  Edit Room Data <strong>Failed !</strong> 
                </div>
            
           
            <?php
              }
            ?>
          </div>
        </section>


    <!-- Tampilan untuk mendefinisikan button Daftar PUI -->
    <section class="content">

      <div class="row">
      <!-- Button Daftar PUI -->
        <div class="col-lg-3 col-xs-6">
        <a class="btn btn-block btn-social btn-bitbucket" data-toggle="modal" data-target="#modal-add">
        <i class="fa fa-bank"></i> Add Room </a>
        </div>
        <div class="col-lg-7 col-xs-6"></div>
        <!-- <div class="col-lg-2 col-xs-6">
          <button type="button" class="btn btn-block btn-success"><i class="fa fa-file-excel-o"> &nbsp;Export</i></button>
        </div> -->
      </div>
      <br>
      
      <!-- Membuat tampilan untuk table -->      
      <section class="content">
      <form method="post" action="<?php echo base_url('admin_Room');?>"> 
      <div class="row">
        <div class="col-xs-12">

          <div class="box">
            <div class="table-responsive">
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
               
                  <th><center>No</center></th>
                  <th><center>Room</center></th>
                  <th><center>Capacity</center></th>
                  <th><center>Facilities</center></th>
                  <th width="250px"><center>Photo</center></th>
                  <th><center>Action</center></th>
                
                </tr>
                </thead>
                <tbody>
                 <?php $i=0; foreach ($ruang as $item){ $i++; ?>
                    <tr>
                      <td><?php echo $i;?></td>
                  <td><?php echo $item->nama_ruang; ?></td>
                  <td><?php echo $item->kapasitas; ?></td>
                  <td><?php echo $item->fasilitas; ?></td>
                  <td>
                    <a data-toggle="modal" data-target="#myFoto<?php echo $item->id_ruang?>"><center><img src="<?=base_url()?>scan/ruang/<?php echo $item->foto;?>" class="img-circle" style="width:75%;"></center></a> 
                  </td>
                  <td>
                    <center>
                     <div class="btn-group">
                      <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modalview-<?php echo $item->id_ruang; ?>"><i class="glyphicon glyphicon-eye-open"></i></button>
                    </div>

                   <a href="<?php echo base_url(); ?>Admin_Room/ubah/<?php echo $item->id_ruang; ?>">
                    <div class="btn-group">
                     <button type="button" class="btn btn-warning"><i class="glyphicon glyphicon-pencil"></i>
                     </button>
                    </div>
                    </a>

                    <div class="btn-group">  
                      <a href = " <?php echo base_url('Admin_Room/hapus1/'.$item->id_ruang); ?>"><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-delete"><i class="glyphicon glyphicon-trash"></i></button></a>
                    </div>
                    </center>
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

  <!--modal add room-->
  <div class="modal fade" id="modal-add">
     <form method="post" action="<?php echo base_url('admin_Room/addRoom')?>" enctype="multipart/form-data">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Add Room</h4>
              </div>
              <div class="modal-body">
              
                <div class="box box-primary">
                  <form role="form">
                  <div class="box-body">
                  <div class="form-group">
                    <label for="exampleInputName1">Name  </label>
                    <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-bank"></i>
                    </div>
                    <input type="text" class="form-control" placeholder="Name" name="nama_ruang" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputCapacity1">Capacity </label>
                    <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-font"></i>
                    </div>
                    <input type="text" class="form-control" placeholder="Capacity" name="kapasitas" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFacility1">Facility </label>
                     <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-tags"></i>
                    </div>
                    <input type="text" class="form-control" placeholder="Facility" name="fasilitas" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputSize1">Size ( m<sup>2</sup> )</label>
                    <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-pencil"></i>
                    </div>
                    <input type="text" class="form-control" placeholder="Size" name="ukuran" required>
                    </div>
                  </div>
                  <div class="form-group">
                      <label>Image</label>
                          <div class="input-group">
                              <input type="file" id="exampleInputFile" name="foto" required>
                               <p class="help-block">Input file png, jpg, jpeg</p>
                          </div>
                  </div>
                  </div>
                  </form>
                  </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left btn-danger" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary" >Submit</button>
              </div>
              
            </div>
          </div>
           </form>
        </div>

        <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              </div>
              <div class="modal-body">
                <p>Add Success&hellip;</p>
              </div>
              <div class="modal-footer">
               <a href="<?php echo base_url('admin_Room'); ?>">
                <button type="button" class="btn btn-default pull-left" data="modal">Oke</button>
               </a>
              </div>
            </div>
          </div>
        </div>

<!--modal view-->
 <?php foreach ($ruang as $item){ ?>
  <div class="modal fade" id="modalview-<?php echo $item->id_ruang; ?>">
    <form method="post" action="<?php echo base_url('admin_Room');?>"> 
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
                    <label>No :</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-pencil"></i>
                        </div>
                        <input type="text" class="form-control" name="id_ruang" disabled="disabled" value="<?php //echo $item->id_ruang; ?>">
                    </div>
                </div> -->
                <div class="form-group">
                    <label>Room :</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-bank"></i>
                        </div>
                        <input type="text" class="form-control" name="nama_ruang" disabled="disabled" value="<?php echo $item->nama_ruang; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label>Capacity :</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-font"></i>
                        </div>
                        <input type="text" class="form-control" name="kapasitas" disabled="disabled" value="<?php echo $item->kapasitas; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label>Facilities :</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-tags"></i>
                        </div>
                        <input type="text" class="form-control" name="fasilitas" disabled="disabled" value="<?php echo $item->fasilitas; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label>Size ( m<sup>2</sup> ) :</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-tags"></i>
                        </div>
                        <input type="text" class="form-control" name="ukuran" disabled="disabled" value="<?php echo $item->ukuran; ?>">
                    </div>
                </div>
                
                  
              </div>
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
<!--modal edit-->
<?php foreach ($ruang as $item){ ?>
     <div class="modal fade" id="modaledit-<?php echo $item->id_ruang; ?>">
      <!-- <form method="post" action="<?=base_url()?>Admin_Room/edit" data-toggle="validator"> -->
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit</h4>
              </div>
              <div class="modal-body">
                <input type="hidden" readonly value="<?=$item->id_ruang;?>" name="id_ruang" class="form-control" >
                <div class="box box-primary">
           
              <div class="box-body">
                
                <div class="form-group">
                    <label>Room :</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-bank"></i>
                        </div>
                        <input type="hidden" name="id_ruang" value="<?php echo $item->id_ruang; ?>">
                        <input type="text" class="form-control" name="nama_ruang" value="<?php echo $item->nama_ruang; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label>Capacity :</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-font"></i>
                        </div>
                         <input type="text" class="form-control" name="kapasitas" value="<?php echo $item->kapasitas; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label>Facilities :</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-tags"></i>
                        </div>
                        <input type="text" class="form-control" name="fasilitas" value="<?php echo $item->fasilitas; ?>">
                    </div>
                </div>


                <div class="form-group">
                    <label for="exampleInputSize1">Size ( m<sup>2</sup> ) :</label>
                     <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-pencil"></i>
                    </div>
                    <input type="text" class="form-control" placeholder="Size" name="ukuran" value="<?php echo $item->ukuran; ?>">
                    </div>
                </div>
                <div class="form-group">
                      <label>Image :</label>
                          <div class="input-group">
                              <input type="file" id="exampleInputFile" name="foto" required>
                               <p class="help-block">Input file png, jpg, jpeg</p>
                          </div>
                  </div>
              </div>
              <div class="box-footer">
              </div>
          
          </div>
              </div>
              <div class="modal-footer">
               <button type="submit" class="btn btn-primary pull-right" data-dismiss="modal">Ok</button>
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
