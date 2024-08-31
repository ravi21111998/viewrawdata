<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Online Services</title>

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport" />


  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url();?>assets/onlineServicesFavicon/apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url();?>assets/onlineServicesFavicon/favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url();?>assets/onlineServicesFavicon/favicon-16x16.png" />
  <link rel="icon" sizes="192x192" href="<?php echo base_url();?>assets/onlineServicesFavicon/android-chrome-192x192.png" />
  <link rel="icon" sizes="512x512" href="<?php echo base_url();?>assets/onlineServicesFavicon/android-chrome-512x512.png" />
  <link rel="icon" type="image/x-icon" href="<?php echo base_url();?>assets/onlineServicesFavicon/favicon.ico" />
  <link rel="manifest" href="<?php echo base_url();?>assets/onlineServicesFavicon/site.webmanifest" />


  
    <link rel="stylesheet" href="<?php echo base_url();?>assets/onlineServicesCSS/bootstrap.min.css" />
  <link rel="stylesheet" href="<?php echo base_url();?>assets/onlineServicesCSS/font-awesome.min.css" />
  <link rel="stylesheet" href="<?php echo base_url();?>assets/onlineServicesCSS/ionicons.min.css" />
  <link rel="stylesheet" href="<?php echo base_url();?>assets/onlineServicesCSS/datepicker3.css" />
  <link rel="stylesheet" href="<?php echo base_url();?>assets/onlineServicesCSS/all.css" />
  <link rel="stylesheet" href="<?php echo base_url();?>assets/onlineServicesCSS/select2.min.css" />
  <link rel="stylesheet" href="<?php echo base_url();?>assets/onlineServicesCSS/dataTables.bootstrap.css" />
  <link rel="stylesheet" href="<?php echo base_url();?>assets/onlineServicesCSS/jquery.fancybox.css" />
  <link rel="stylesheet" href="<?php echo base_url();?>assets/onlineServicesCSS/AdminLTE.min.css" />
  <link rel="stylesheet" href="<?php echo base_url();?>assets/onlineServicesCSS/_all-skins.min.css" />
  <link rel="stylesheet" href="<?php echo base_url();?>assets/onlineServicesCSS/on-off-switch.css" />
  <link rel="stylesheet" href="<?php echo base_url();?>assets/onlineServicesCSS/summernote.css" />
  <link rel="stylesheet" href="<?php echo base_url();?>assets/style.css" />


  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-wfSDF2E50YqCQ5ih9mZRl9n0B9tlr1lU5f6yfaCWt/rW8l6C5aI/uDlwJor8BH9VGnXwZQltSfBAO8eob7ifDlw=="
crossorigin="anonymous">

  <script src="https://kit.fontawesome.com/399b1d9929.js" crossorigin="anonymous"></script>
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->

<!-- Firebase -->
<script src="https://www.gstatic.com/firebasejs/8.10.0/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.10.0/firebase-database.js"></script>



  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
    }

   #chat-box {
      max-width: 99%;
      margin: 20px auto;
      background-color: #fff;
      border-radius: 8px;
      overflow: hidden;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    #chat-messages {
      height: 450px;
      overflow-y: scroll;
      padding: 10px;
    }

.message-container {
    clear: both;
    overflow: hidden;
}

.sent-message {
    padding: 10px;
    border-radius: 8px;
    margin-bottom: 10px;
    word-wrap: break-word;
    max-width: 70%;
}

.admin-message {
    background-color: lightblue; /* Change the background color for admin messages */
    color: #333;
    float: right;
}

.right-message {
    background-color: lightgreen; /* Change the background color for sender messages */
    color: #333;
    float: left;
}

.timestamp {
    font-size: 10px;
    color: #999;
    margin-top: 5px;
}

    .sent-message img {
      max-width: 100px;
      display: block;
      margin-top: 5px;
    }

    .timestamp {
      font-size: 10px;
      color: #999;
      margin-top: 5px;
    }

    #attachment-preview {
      max-width: 100%;
      overflow: hidden;
      padding: 10px;
    }

    .input-container {
      position: relative;
    }

    input {
      width: calc(100% - 150px);
      padding: 10px;
      margin: 5px;
    }

    .attachment-icon {
      position: absolute;
      right: 120px;
      top: 50%;
      transform: translateY(-50%);
      cursor: pointer;
      border: none;
      width: 20px;
      background: #fff;
    }

    .send-btn {
      background-color: #3caea3;
      border-radius: 4px;
      color: #fff;
      width: 100px;
      padding: 10px;
      cursor: pointer;
      border: none;
      position: absolute;
      right: 10px;
      top: 50%;
      transform: translateY(-50%);
      height: 43px;
    }

    .send-btn:hover {
      background-color: #338a7d;
    }

    /* button:hover {
    background-color: #3caea2;
} */
  </style>
</head>

<body class="hold-transition fixed skin-blue sidebar-mini">
  <div class="wrapper">
    <header class="main-header">
      <a href="<?php echo site_url()?>/OnlineServices/home" class="logo">
        <span class="logo-lg"><img src="<?php echo base_url();?>assets/wows.png" alt="" width="40px" style="margin-left: 30%" /></span>
      </a>

      <nav class="navbar navbar-static-top">
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>

        <span style="
              float: left;
              line-height: 50px;
              color: #fff;
              padding-left: 15px;
              font-size: 18px;
            ">Online Services Admin</span>
        <!-- Top Bar ... User Inforamtion .. Login/Log out Area -->
        <div class="navbar-custom-menu">
       <ul class="nav navbar-nav">
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="<?php echo base_url();?>assets/wows.png" class="user-image" alt="User Image">
                <!--<span class="hidden-xs">-->
                <!--  <?php echo $_SESSION['admin_name']; ?>-->
                <!--</span>-->
              </a>
              <ul class="dropdown-menu">
                <li class="user-footer">
                  <!-- <div>-->
                  <!--  <a href="profile-edit.php" class="btn btn-default btn-flat">Edit Profile</a>-->
                  <!--</div>-->
                  <div>
                    <a id="logoutBtn" class="btn btn-default btn-flat" href="<?php echo site_url();?>/OnlineServices/logout">Log out</a>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
    </header>

     <?php $cur_page = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1); ?> 
    <!-- Side Bar to Manage chats -->
    <aside class="main-sidebar">
      <section class="sidebar">
        <ul class="sidebar-menu">
          <li class="treeview">
            <a href="<?php echo site_url()?>/OnlineServices/home">
              <i class="fa fa-dashboard"></i> <span>Home</span>
            </a>
          </li>

          <li class="treeview">
            <a href="<?php echo site_url()?>/OnlineServices/totalUsers" >
              <i class="fa fa-message"></i> <span>Total Users</span>
            </a>
          </li>

          <li class="treeview">
            <a href="<?php echo site_url()?>/OnlineServices/changePassword">
              <i class="fa fa-message"></i> <span>Change Password</span>
            </a>
          </li>

          <li class="treeview<?php if (($cur_page == 'index.php')) {
            echo 'active';
          } ?>">
            <a href="<?php echo site_url()?>/OnlineServices/ViewAllDetails">
              <i class="fa fa-message"></i> <span>Chats</span>
            </a>
          </li>
        </ul>
      </section>
    </aside>
    
    <div class="content-wrapper">