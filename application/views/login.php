
<html lang="en" class="wide smoothscroll wow-animation">
  <head>
    <!-- Site Title-->
    <title>Login / Registrasi</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="<?=base_url()?>assets/images/icon_mk.png" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato:300,400,700,300italic,900">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/style.css">
		<!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
		<![endif]-->
  </head>
  <body>
    <!-- Page-->
    <div class="page text-center">
      <!-- Page Header-->
      <?php $this->load->view('header/head')?>
		<!-- Page Content-->
      <main class="page-content">
              <section class="bg-image-06">
                <div class="breadcrumb-wrapper">
                  <div class="shell context-dark section-30 section-lg-top-120">
                    <h5>MisterKlik.Com</h5>
                    <h1 class="offset-top-20 text-ubold">Login/Registrasi</h1>
                    <ol class="breadcrumb">
                      <li><a href="./">Home</a></li>
                      <li><a href="#">Pages</a></li>
                      <li>Login/Register
                      </li>
                    </ol>
                  </div>
                </div>
              </section>
			  
        <section class="section-80 section-md-120">
          <div class="shell">
            <ul class="nav-custom">
              <li><a href="<?=base_url()?>page/login" class="active">Login</a></li>
              <li><a href="<?=base_url()?>page/register">Registrasi</a></li>
            </ul>
            <div class="range range-xs-center">
              <div class="cell-sm-8 cell-md-6 cell-lg-4">
                <!-- RD Mailform-->
                <!--<form data-form-output="form-output-global" data-form-type="contact" method="post" action="" class="rd-mailform text-left">-->
				<?php //echo $_SESSION['password_session'];?>
				<form id="registrasi_customer" name="registrasi_customer" method="post" action="<?=base_url()?>page/logincustomer" style="text-align:left;">
                  <div class="form-group">
                    <label for="login" class="form-label form-label-outside">Username</label>
                    <input id="txtusername" type="text" name="txtusername" data-constraints="@Required" class="form-control form-control-gray">
                  </div>
                  <div class="form-group">
                    <label for="password" class="form-label form-label-outside">Password</label>
                    <input id="txtpassword" type="password" name="txtpassword" data-constraints="@Required" class="form-control form-control-gray">
                  </div>
                  <!--<button type="submit" class="btn btn-primary btn-block btn-sm offset-top-22">Log In</button>-->
				  <input type="submit" name="submit" class="btn btn-primary btn-block btn-sm offset-top-22" value="Log In">
                </form>
              </div>
            </div>
          </div>
        </section>
      </main>
      <!-- Page Footer-->
      <?php $this->load->view('footer/foot')?>
    <!-- Java script-->
    <script src="<?=base_url()?>assets/js/core.min.js"></script>
    <script src="<?=base_url()?>assets/js/script.js"></script>
  </body>
</html>