<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Room | Login</title>
    <link rel="icon" href="assets/img/LogoIA.png" type="image/gif">
    <link rel="stylesheet" href="<?php echo base_url('/assets/bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/-Login-form-Page-BS4-.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/styles.css');?>">
</head>

<body>
    <div class="container-fluid">
        <div class="row mh-100vh">
            <div class="col-10 col-sm-8 col-md-6 col-lg-6 offset-1 offset-sm-2 offset-md-3 offset-lg-0 align-self-center d-lg-flex align-items-lg-center align-self-lg-stretch bg-white p-5 rounded rounded-lg-0 my-5 my-lg-0" id="login-block" style="padding:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;">
                <div class="justify-content-center align-items-center align-content-center m-auto w-lg-75 w-xl-50" style="width:204px;margin:0px 0px 0px 0px;margin-right:100px;margin-top:20px;margin-bottom:20px;margin-left:100px;">

                    <h4 class="text-center text-info font-weight-light mb-5">
                        <img src = "<?php echo base_url('assets/img/logougm.png');?>" style="width:40px;height:40px;margin-bottom:0px;">Booking Room EDS
                    </h4>
                    
                    <form method="post" action="<?php echo base_url('User_Login/verify'); ?>">
                        <div class="form-group">
                            <label class="text-secondary">Email</label>
                            <input class="form-control" name ="email" type="text" required="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,15}$">
                        </div>
                        <div class="form-group">
                            <label class="text-secondary">Password</label>
                            <input class="form-control" name="pass" type="password" required="">
                        </div>
                            <button class="btn btn-primary mt-2" type="submit">Log In</button>
                        <?php
                            if($this->session->flashdata('error')){
                                echo "<br><p><font color='#FF0000'><b><small>Email or password is wrong!</small></b></font></p>";
                            }
                        ?>
                    </form>

                    <p class="mt-3 mb-0">
                        <a href="#" class="text-info small" data-toggle="modal" data-target="#modal-default">Forgot your email or password?</a>
                    </p>
                    <p class="mt-3 mb-0">
                        <a href="<?php echo base_url('User_TypeRegistration'); ?>" class="text-info small">Don't have account?</a>
                    </p>
                </div>
            </div>

            <div class="col-lg-6 d-flex align-items-end" id="bg-block" style="background-size:cover;background-position:center center;background-image:url(&quot;assets/img/6.jpg&quot;);">
                <p class="ml-auto small text-dark mb-2">
                    <em>EDS | Enterpreneur Development System&nbsp;</em><br>
                </p>
            </div>
        </div>
    </div>
    <?php 
        $session = $this->session->flashdata('suksesregistrasi');
        if($session){ ?>

        <div class="modal show" id="suksesregistrasi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title" id="myModalLabel" style="text-align: center;"><b>Informasi</b></h3>
              </div>
              <div class="modal-body" style="text-align: center;">
                <img src="<?php echo base_url()?>assets/img/berhasil.png" style="width:150px;"><br><br>
                <h4>Registration Success !</h4>
              </div> 
              <div class="modal-footer">
                <button type="button" class="btn btn-danger pull-right" onclick="closeModal()">Close</button>
              </div>
            </div>          
          </div>
        </div>
    <?php
        }
    ?>

    <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              </div>
              <div class="modal-body">
                <p>Please contact admin . 0888888888&hellip;</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Oke</button>
              </div>
            </div>
          </div>
        </div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript">
      function closeModal(){
        document.getElementById("suksesregistrasi").className = "Modal hide";
      }
    </script>
</body>

</html>