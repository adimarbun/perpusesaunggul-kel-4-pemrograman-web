<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login - Perpustakaan</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url() ?>assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url() ?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url() ?>assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?php echo base_url() ?>assets/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url() ?>assets/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>

      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
        <div>
              <img src="assets/images/upload/profile/logo_esgul.png" alt="Logo Universitas Esa Unggul">
              <style>
                img {
                  display: block;
                  margin-left: auto;
                  margin-right: auto;
                  width: 100px;
                }

                .login {
                  background-image: url('assets/images/upload/profile/1719111.jpg');
                  
                  background-size: 100%;
                  background-position: center;
                  background-repeat: no-repeat;
                  background-attachment: fixed;
                  background-size: cover;
                }


              </style>
            </div>
          <section class="login_content">
            <form method="post" action="<?php echo base_url() ?>login/dologin">
            
              <h1>Admin Login</h1>
              <?php
                $announce = $this->session->flashdata('announce');
                if(!empty($announce)){
                  echo '
                    <div class="alert alert-danger">
                    '.$announce.' 
                    </div>
                  ';
                }
              ?>
              <div>
                <input type="text" class="form-control" name="username" placeholder="Username" />
              </div>
              <div>
                <input type="password" class="form-control" name="password" placeholder="Password" />
              </div>
              <div>
                <input type="submit" name="login" class="btn btn-default submit pull-right" value="Login" />
              </div>
              <!--<div> <input type="submit" formaction=" echo base_url() ?>daftar" name="daftar" class="btn btn-default submit pull-right" value="Daftar" /> </div>-->
              
              

              <div class="clearfix"></div>

              <div class="separator">
                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-book"></i>  Perpustakaan</h1>
                  <p>Copyright © <?php echo date('Y') ?> Kelompok 4</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
