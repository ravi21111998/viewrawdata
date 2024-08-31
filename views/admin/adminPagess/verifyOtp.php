<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="shortcut icon" type="image/png" href="<?php echo base_url();?>uploads/logo/social1.png">
  <title>Social Integration | Verify Otp</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
<style>

.login-page, .register-page {
    height: auto;
    background: #892CFF !important;
}

		.login-box, .register-box {
		  width: 400px;
		}
    .form-error {
      color: #a76161;
      text-align: center;
      margin-bottom: 10px;
    }
    .form-error1 {
      color: #a76161;
    }
    .login-box-body {
    border: 2px solid #f0569c;
    box-shadow: 0 1px 5px #f0569c;
}
	.login-page, .register-page {
    height: auto;
    background: #892CFF;
}
	</style>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
   <a href=""><img style="width: 50%;" src="<?php echo base_url();?>uploads/logo/social1.png"></a>
  </div>
  <?php
   // echo "OTP => ".($details['otp']);
  ?>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Verify Otp</p>
    <?php if($this->session->flashdata('error')){ ?><div class="form-error"><?php echo $this->session->flashdata('error'); ?></div><?php }?>
    <form action="<?php echo site_url();?>/admin/verifyOtp" method="post">

      <div class="form-group has-feedback">
        <input type="text" name="otp"  class="form-control" value="<?php echo $details['otp']; ?>" placeholder=" Enter Otp">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        <div class="form-error1"><?php echo form_error('otp') ?></div>
      </div>
      <div class="row">
        <div class="col-xs-8">
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" style="background:#3caea3; border-color: #0000ff;color: white;" class="btn btn-primary btn-block btn-flat">Submit</button>
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
<script src="<?php echo base_url();?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url();?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url();?>assets/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
