<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"  content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="icon" href="<?php echo base_url();?>assets/onlineServicesFavicon/favicon.ico" type="image/x-icon">
    <title>Login Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #592d92;
            color: #fff;
            margin: 0;
        }
        .content-header {
            background-color: #592d92;
            color: #fff;
            padding: 15px;
            text-align: center;
        }
        .content {
            padding: 20px;
        }
        #login-box {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: 0 auto;
            color: black;
        }
        label {
            display: block;
            margin-bottom: 8px;
        }
        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }
        button {
            background-color: #592d92;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #401f6a;
        }
    </style>
</head>
<body>
    <section class="content-header">
        <img src="<?php echo base_url();?>assets/wows.png" alt="Logo" style="max-width: 300px; height: auto;">
        <h1>Login</h1>
    </section>
    <section class="content">
        <div id="login-box">
            <label>Sign in to Enter your Online Service Panel</label>
            <?php if($this->session->flashdata('error')): ?>
                <div class="form-error"><?php echo $this->session->flashdata('error'); ?></div>
            <?php endif; ?>
            <form method="post" action="">
                <div>
                    <input type="text" placeholder='Online Service Code' name="onlineServiceCode" value="<?php 
        if(isset($_GET['id'])){
            echo $_GET['id'];
        }else{
            echo set_value('onlineServiceCode');
        }
        ?>">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    <div class="form-error1"><?php echo form_error('onlineServiceCode'); ?></div>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" name="password" value= "<?php 
        if(isset($_GET['pass'])){
            echo $_GET['pass'];
        }else{
            echo set_value('password');
        }?>" class="form-control" placeholder="Password">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    <div class="form-error1"><?php echo form_error('password'); ?></div>
                </div>
                <div class="row">
                   
                    <div class="col-xs-4">
                        <button type="submit" style="background:#3caea3; border-color: #e58a00;color: white;" class="btn btn-primary btn-block btn-flat">Login</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    
    <script src="<?php echo base_url();?>assets/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
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
