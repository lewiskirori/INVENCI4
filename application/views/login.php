<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Log in - InvenCi4</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="https://unpkg.com/feather-icons/dist/feather.min.css">
  <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
  
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link rel="icon" type="image/x-icon" href="../../assets/images/inven-log3.png" />

  <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/bootstrap/dist/css/bootstrap.min.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/font-awesome/css/font-awesome.min.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/Ionicons/css/ionicons.min.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/AdminLTE.min.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/iCheck/square/blue.css') ?>">

  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <style>
        .form-control {
          box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
          border-radius: 5px;
          color: #fff;
          border: 1px solid #aaa;
          background-color: transparent;
        }
        
        .form-control:focus {
          border: 2px solid rgba(0, 123, 255, 0.5);
        }
    </style>

</head>

<!--nav-->
<body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="<?php echo base_url(''); ?>"> 
                <i class='fas fa-home'></i> Home </a>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                </div>
            </div>
        </nav>
</body>
<!--login-page-->       
<body class="hold-transition login-page">
    <style>
      .login-page{
        font-family: Nunito, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
        font-weight: bolder;
        background-color: #1E282C;
      }
    </style>
<div class="login-box">
    
    <!-- Page loader -->
     <div id="preloader">
         <style>
            #preloader {
              position: fixed;
              top: 0;
              left: 0;
              right: 0;
              bottom: 0;
              z-index: 9999;
              overflow: hidden;
              background: #fff;
            }
            
            #preloader:before {
              content: "";
              position: fixed;
              top: calc(50% - 30px);
              left: calc(50% - 30px);
              border: 6px solid #64a19d;
              border-top-color: #fff;
              border-bottom-color: #fff;
              border-radius: 50%;
              width: 60px;
              height: 60px;
              animation: animate-preloader 1s linear infinite;
            }
            
            @keyframes animate-preloader {
              0% {
                transform: rotate(0deg);
              }
            
              100% {
                transform: rotate(360deg);
              }
            }
         </style>
         
         <script>
            /**
             * Preloader
             */
            document.addEventListener("DOMContentLoaded", () => {
                const preloader = document.querySelector("#preloader");
                if (preloader) {
                    preloader.classList.add("hide");
                    setTimeout(() => {
                        preloader.remove();
                    }, 1000);
                }
            });
        </script>
    </div>

  <!-- /.login-logo -->
  <div class="login-box-body">
    <style>
      .login-box-body{
        box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
        box-shadow: 2px 2px 30px rgba(167, 158, 245, 0.2);
        border-radius: 4px;
        background-color: transparent;
      }
    </style>

    <div class="login-logo">
        <?php
        $unique_id = bin2hex(random_bytes(25)); // random string of 50 chars
        $url = base_url("auth/login?c=auth&m=login&id=$unique_id");
        ?>
    <a href="<?php echo $url; ?>">
    <b><style>
      .login-logo a{
        font-family: Nunito, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
        font-weight: bolder;
        color: #3C8DBC;
      }
      
    </style>
    Login </b></a>
    </div>

    <?php echo validation_errors(); ?>  

    <?php if(!empty($errors)) {
      echo $errors;
    } ?>

    <form action="<?php echo base_url('auth/login?c=auth&m=login') ?>" method="post" onsubmit="submitButton.disabled = true; submitButton.innerHTML = '<i class=\'fa-solid fa-spinner fa-spin-pulse\'></i>';">
      <div class="form-group has-feedback">
        <input type="email" class="form-control" name="email" id="email" placeholder="Email Address" autocomplete="on" >
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password" id="password" placeholder="Password" autocomplete="on" maxlength="30">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat" name="submitButton">
          <style>
              .btn-primary.btn-block{
            border-radius: 4px;
            background-color: transparent;
            }
            </style>
          Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->

<script src="<?php echo base_url('assets/bower_components/jquery/dist/jquery.min.js') ?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('assets/bower_components/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
<!-- iCheck -->
<script src="<?php echo base_url('assets/plugins/iCheck/icheck.min.js') ?>"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
    ///empty field error!
    //This will help you to hide your message after 3 seconds with fadeOut animation.
  // You can change seconds in timeout variable.
  var timeout = 3000; // in miliseconds (3*1000)

$('.alert-danger').delay(timeout).fadeOut(300);
  ///field validation error!
  //This will help you to hide your message after 3 seconds with fadeOut animation.
  // You can change seconds in timeout variable.
  var timeout = 3000; // in miliseconds (3*1000)

$('.alert-warning').delay(timeout).fadeOut(300);
  });

</script>
</body>
</html>
