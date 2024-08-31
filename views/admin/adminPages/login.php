<!DOCTYPE html>
<html><?php
print_r($_GET['id']);
        exit;?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url();?>uploads/logo/NC1.png">
    <title>Social_Integration</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="/assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/assets/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="/assets/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/assets/dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="/assets/plugins/iCheck/square/blue.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">


    <style>
    body {
        background-image: linear-gradient(to bottom, #4340d9d9 50%, #aa2bd4) !important;
    }

    .login-box,
    .register-box {
        ƒ width: 400px;
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
        border: 2px solid #aa2bd4;
        box-shadow: 0 5px 13px #4340d9d9;
    }

    .login-page,
    .register-page {
        height: auto;
        background: #f0569c;
    }
    </style>
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href=""><img style="width: 50%;" src="<?php echo base_url();?>uploads/logo/SI.png"></a>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
            <p class="login-box-msg">Sign in to Enter your Admin panelaaaaaaaaaaa</p>
            <?php if($this->session->flashdata('error')){ ?><div class="form-error">
                <?php echo $this->session->flashdata('error'); ?></div><?php }?>
            <form action="" method="post">

                <div class="form-group has-feedback">
                    <input type="text" name="phone" value="<?php 
        if(isset($_GET['id'])){
            echo $_GET['id'];
        }else{
            echo set_value('phone');
        }
        ?>" class="form-control"
                        placeholder="Phone">
                    <span class="glyphicon glyphicon-phone form-control-feedback"></span>
                    <div class="form-error1"><?php echo form_error('phone') ?></div>
                </div>
                <!-- <div class="form-group has-feedback">
        <input type="text" name="email" value="<?php echo set_value('email')?>" class="form-control" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        <div class="form-error1"><?php echo form_error('email') ?></div>
      </div> -->
                <div class="form-group has-feedback">
                    <input type="password" value= "<?php 
        if(isset($_GET['pass'])){
            echo $_GET['pass'];
        }else{
            echo set_value('password');
        }
        
        
        ?>" name="password"
                        class="form-control" placeholder="Password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    <div class="form-error1"><?php echo form_error('password') ?></div>
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
                        <button type="submit" style="background:#3caea3; border-color: #0000ff;color: white;"
                            class="btn btn-primary btn-block btn-flat">Sign In</button>
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
    <script src="/assets/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="/assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="/assets/plugins/iCheck/icheck.min.js"></script>
    <script>
    $(function() {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' /* optional */
        });
    });
    </script>
</body>

</html>