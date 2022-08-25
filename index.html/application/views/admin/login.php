<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Codeigniter Web Application</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() ?>public/admin/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url() ?>public/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>public/admin/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
<style>
    .error{
        color:red;
    }

    </style>

</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"> <b>Cl Web Application </b></a>
  </div>
    <?php if(!empty($this->session->flashdata('msg'))){
        echo "<div class='alert alert-danger mb-3'>". $this->session->flashdata('msg')  ."</div>";

    } ?>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>
      <form action="<?php echo base_url().'admin/login/authenticate' ?>" name="loginForm" id="loginForm" method="post">
        <div class="input-group mb-2">
          <input type="text" name="username" id="username" class="form-control" value="<?php echo set_value('username'); ?>" placeholder="Username">
         
          <div class="input-group-append">
            <div class="input-group-text ">
              <span class="fas fa-envelope"></span>
         
            </div>
          </div>
        </div>
        <?php echo form_error('username'); ?>
        <div class="input-group mt-2">
          <input type="password" name="password" id="password" class="form-control" value="<?php echo set_value('password'); ?>" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <?php echo form_error('password'); ?>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          
          
          <!-- /.col -->
          
          <div class="col-4 text-center">
            <br>
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      
    <!-- /.login-card-body -->
  </div>
 
</div>
<div class="">
            <br>
            <a type="submit" href="<?php  echo base_url().'admin/Register/' ?>" class="btn btn-primary btn-block">Register Here</a>
          </div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?php echo base_url() ?>public/admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url() ?>public/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() ?>public/admin/dist/js/adminlte.min.js"></script>

</body>
</html>
