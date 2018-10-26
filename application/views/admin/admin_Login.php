<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="<?php echo base_url('/assets/bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/-Login-form-Page-BS4-.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/styles.css');?>">
</head>

<body>
    <div class="container-fluid">
        <div class="row mh-100vh">
            <div class="col-10 col-sm-8 col-md-6 col-lg-6 offset-1 offset-sm-2 offset-md-3 offset-lg-0 align-self-center d-lg-flex align-items-lg-center align-self-lg-stretch bg-white p-5 rounded rounded-lg-0 my-5 my-lg-0" id="login-block" style="padding:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;">
                <div class="justify-content-center align-items-center align-content-center m-auto w-lg-75 w-xl-50" style="width:204px;margin:0px 0px 0px 0px;margin-right:100px;margin-top:20px;margin-bottom:20px;margin-left:100px;">
                    <h4 class="text-center text-info font-weight-light mb-5"><img src = "<?php echo base_url('assets/img/logougm.png');?>" style="width:40px;height:40px;margin-bottom:0px;">Booking Room</h4>
                    <form>
                        <div class="form-group"><label class="text-secondary">E-mail</label><input class="form-control" name ="email" type="text" required="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,15}$" inputmode="email"></div>
                        <div class="form-group"><label class="text-secondary">Password</label><input class="form-control" name="pass" type="password" required=""></div><button class="btn btn-info mt-2" type="submit">Log In</button></form>
                    <p class="mt-3 mb-0"><a href="#" class="text-info small">Forgot your email or password?</a></p>
                    <p class="mt-3 mb-0"><a href="#" class="text-info small">Don't have account?</a></p>
                </div>
            </div>
            <div class="col-lg-6 d-flex align-items-end" id="bg-block" style="background-size:cover;background-position:center center;background-image:url(&quot;assets/img/LogoIA.png&quot;);">
                <p class="ml-auto small text-dark mb-2"><em>EDS | Enterpreneur Development System&nbsp;</em><br></p>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>