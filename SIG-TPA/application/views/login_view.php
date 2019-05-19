<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login SPK-TPA</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition login-page" style="background-image: url(<?php echo base_url();?>assets/dist/img/alunalun.jpg); background-repeat: no-repeat; background-size: cover; background-attachment: fixed;">
 
<div class="login-box">
      <div class="login-logo">
        <a href="../../index2.html"><b>Login SPK-TPA</b></a>
        <h3>Kabupaten Pemalang</h3>
      </div>
  <!-- /.login-logo -->
  <div class="login-box-body" style="background-color: rgba(0,0,0,0.8);">
    <p class="login-box-msg" style="color: #fff;"><strong>Masukan Username dan Password Anda</strong></p>
      <form action="<?php echo base_url();?>index.php/Login/proseslogin" method="post">
          <?php if (validation_errors() || $this->session->flashdata('result_login')) { ?>
                      <div class="alert alert-danger animated fadeInDown" role="alert">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Peringatan!</strong>
                        <?php echo validation_errors(); ?>
                        <?php echo $this->session->flashdata('result_login'); ?>
                    </div>
          <?php } ?>
        <div class="form-group has-feedback">
          <input type="username" name="username" class="form-control" placeholder="Username" autofocus="true">
          <span class="fa fa-user form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <span class="fa fa-lock form-control-feedback"></span>
        </div>

        <div class="row">
          <!-- /.col -->
          <div class="col-xs-4 pull-right">
            <button type="submit" id="btn_login" class="btn btn-primary pull-right">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

    <!-- /.social-auth-links -->

  </div>

  <!-- /.login-box-body -->
</div>

<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="<?php echo base_url();?>/assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url();?>/assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url();?>/assets/plugins/iCheck/icheck.min.js"></script>
<script>
  // $(function () {
  //   $('input').iCheck({
  //     checkboxClass: 'icheckbox_square-blue',
  //     radioClass: 'iradio_square-blue',
  //     increaseArea: '20%' // optional
  //   });
  // });
</script>

</body>
</html>