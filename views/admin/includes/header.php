<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url();?>uploads/logo/SI.png">
    <title>WOW</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

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
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/skins/_all-skins.min.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/morris.js/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/jvectormap/jquery-jvectormap.css">
    <!-- Date Picker -->

    <link rel="stylesheet"
        href="<?php echo base_url();?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet"
        href="<?php echo base_url();?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet"
        href="<?php echo base_url();?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

    <!-- Google Font -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <style>
        section.sidebar {
    overflow: hidden;
    max-width: 12%;
}
    .form-error1 {
        color: #a76161;
    }

    .skin-blue .main-header .navbar {
        background-image: linear-gradient(to right, #4340d9d9 30%, #aa2bd4) !important;
    }

    .skin-blue .main-header .logo {
        background-image: linear-gradient(to left, #4340d9d9 30%, #aa2bd4) !important;
        color: #fff;
        border-bottom: 0 solid transparent;
    }

    .skin-blue .main-header .logo:hover {
        background-color: #041551;
    }

    .skin-blue .main-header .navbar .sidebar-toggle:hover {
        background-color: #041551;
    }

    .skin-blue .wrapper,
    .skin-blue .main-sidebar,
    .skin-blue .left-side {
        background-color: #201804;
    }

    .skin-blue .sidebar-menu>li.header {
        color: #4b646f;
        background: black;
    }

    .skin-blue .sidebar-menu>li.active>a {
        border-left-color: #0000ff;
    }

    .skin-blue .main-header li.user-header {
        background-color: #1dc2f1;
    }

    .box.box-warning {
        border-top-color: #0000ff;
    }

    .btn-default:hover,
    .btn-default:active,
    .btn-default.hover {
        background-color: #f0569c;
        color: #fff !important;
    }

    .nav-tabs-custom>.nav-tabs>li.active {
        border-top-color: #f0569c;
    }

    .box.box-primary {
        border-top-color: #f0569c;
    }

    .btn-success {
        background-color: #f0569c;
        border-color: #0000ff;
    }

    .box.box-danger {
        border-top: none;
    }

    .box-header.with-border {
        background-image: linear-gradient(to right, #4340d9d9 50%, #aa2bd4) !important;
        color: #fff;
    }

    .main-footer {
        background-image: linear-gradient(to right, #4340d9d9 50%, #aa2bd4) !important;
        padding: 15px;
        color: #fff;
        /* border-top: 1px solid #d2d6de; */
    }

    .admin-action {
        list-style: none;
        font-size: 14px;
        line-height: 1.42857143;
        color: #333 !important;
    }

    .btn-box-tool {
        padding: 5px;
        font-size: 12px;
        background: transparent;
        color: #ecf0f5;
    }

    div#track ul li {
        list-style-type: none;
        border-bottom: 2px solid #eee;
        padding: 8px;
        padding-left: 20px;
        color: #666;
        font-size: 14px;
        margin-top: 20px;
    }

    div#track ul li a {
        text-decoration: none;
        color: #666;
    }

    div#track ul li span {
        display: inline-block;
        float: right;
        padding-right: 10px;
    }

    .reposrtImage img {
        width: 50px;
        / top: 17px;/ position: absolute;
        / right: -68px;/ left: 0px;
    }

    .pagination>.active>a,
    .pagination>.active>a:focus,
    .pagination>.active>a:hover,
    .pagination>.active>span,
    .pagination>.active>span:focus,
    .pagination>.active>span:hover {
        z-index: 3;
        color: #fff;
        cursor: default;
        background-color: #f0569c;
        border-color: #f0569c;
    }

    .skin-blue .main-header li.user-header {
        background-color: #f0569c;
    }

    i.fa.fa-edit.editIcon {
        font-size: 18px;
    }

    i.fa.fa-fw.fa-remove.deleteIcon {
        color: #b52929;
        font-size: 20px;
    }
    </style>





</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <header class="main-header">
            <!-- Logo -->
            <?php if($admin['role'] == 0) { ?><a href="<?= site_url();?>/admin-dashbord" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>SI</b></span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>WOW</b></span>

            </a>
            <?php }else{ ?>

            <a href="javascript:void()" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>SI</b></span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>WOW</b></span>

            </a>

            <?php   } ?>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>

                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">

                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <?php if(!empty($admin['image'])){?>
                                <img src="<?php echo  $admin['image'];?>" class="user-image" alt="User Image">
                                <?php } else{ ?>
                                <img src="<?php echo base_url();?>assets/dist/img/user2-160x160.jpg" class="user-image"
                                    alt="User Image">
                                <?php }?>
                                <span class="hidden-xs"><?php echo $admin['name']; ?></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="<?php echo $admin['image'];?>" class="img-circle" alt="User Image">

                                    <!-- <p>
                                        <?php echo $admin['designation'];?>
                                        <small><?php echo $admin['education'];?></small>
                                    </p> -->
                                </li>
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="<?php echo site_url()?>/AdminController/edit_profile"
                                            class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="<?php echo site_url()?>/admin-logout"
                                            class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <section class="sidebar">
            <div class="user-panel">
                <div class="pull-left image">
                    <?php if(!empty($admin['image'])){?>
                    <img src="<?php echo $admin['image'];?>" class="img-circle" alt="User Image">
                    <?php } else{ ?>
                    <img src="<?php echo base_url();?>assets/dist/img/user2-160x160.jpg" class="img-circle"
                        alt="User Image">
                    <?php }?>
                </div>
                <div class="pull-left info">
                    <p><?php echo $admin['name']; ?></p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
            <ul class="sidebar-menu" data-widget="tree">
                <?php
                // if($admin['assignRole'] == 'USER SUBADMIN'){
         ?>
                <li class="header">ACCOUNTS MANAGEMENT</li>


                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-user"></i> <span>Users</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class=""><a href="<?php echo site_url()?>/User/manage"><i class="fa fa-circle-o"></i>View
                                Users</a></li>
                        <li class=""><a href="<?php echo site_url()?>/User/hotListUser"><i
                                    class="fa fa-circle-o"></i>Top
                                User</a></li>
                        <!-- <li class=""><a href="<?php echo site_url()?>/User/liveUser"><i class="fa fa-circle-o"></i>Live
                                User</a></li>
                        <li class=""><a href="<?php echo site_url()?>/User/liveRequest"><i
                                    class="fa fa-circle-o"></i>Live
                                Request</a></li> -->
                        <li class=""><a href="<?php echo site_url()?>/User/userReport"><i
                                    class="fa fa-circle-o"></i>User
                                Report</a></li>
                        <!-- <li class=""><a href="<?php echo site_url()?>/User/message"><i class="fa fa-circle-o"></i>Push
                                Message</a></li> -->
                    </ul>
                </li>



                <?php
                //  }  elseif($admin['assignRole'] == 'ADMIN'){ 
                    ?>

                <li><a href="<?php echo site_url('admin-dashbord');?>"><i class="fa fa-dashboard"></i> Dashboard</a>
                </li>

                <!-- <li class="header">ACCOUNT MANAGEMENT</li>

                <li class=" treeview">
                    <a href="#">
                        <i class="fa fa-support"></i> <span>Coin Portal</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">

                        <li class=""><a href="<?php echo site_url()?>/SubAdmin/addCoinAgency"><i
                                    class="fa fa-circle-o"></i>Add Coin Portal</a></li>
                        <li class=""><a href="<?php echo site_url()?>/SubAdmin/manageAgencies"><i
                                    class="fa fa-circle-o"></i>View Coin Portal</a></li>

                    </ul>
                </li>


                <li class=" treeview">
                    <a href="#">
                        <i class="fa fa-credit-card"></i> <span>Recharge</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class=""><a href="<?php echo site_url()?>/SubAdmin/sendCoinsToCoinAgency"><i
                                    class="fa fa-circle-o"></i>Send Coins</a></li>

                        <li class=""><a href="<?php echo site_url()?>/Payment/adminCoinsHistory"><i
                                    class="fa fa-circle-o"></i>Send Coin History</a></li>

                        <li class=""><a href="<?php echo site_url()?>/Payment/recieveCoinHistory"><i
                                    class="fa fa-circle-o"></i>Recieve Coin History</a></li>



                    </ul>
                </li> -->





                <?php 
                // }  elseif($admin['assignRole'] == 'AGENCY SUBADMIN'){ 
                    ?>






                <!-- <li class=" treeview">
                    <a href="#">
                        <i class="fa fa-users"></i> <span>Manage Agency</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class=""><a href="<?php echo site_url()?>/SubAdmin/agencyList"><i
                                    class="fa fa-circle-o"></i>View
                                Agency</a></li>
                    </ul>
                </li> -->


                <?php
                    //  } elseif($admin['assignRole'] == 'MONITOR SUBADMIN'){ 
    ?>

                <li class="header">ACCOUNTS MANAGEMENT</li>
              





                <li class=" treeview">
                    <a href="#">
                        <i class="fa fa-users"></i> <span>Host</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                    <li class=""><a href="<?php echo site_url()?>/User/LiveHost"><i
                                    class="fa fa-circle-o"></i>View Host</a></li>
                        <!-- <li class=""><a href="<?php echo site_url()?>/UserVerification/manageHost/1"><i
                                    class="fa fa-circle-o"></i>Pending Host Request</a></li>
                        <li class=""><a href="<?php echo site_url()?>/UserVerification/manageHost/2"><i
                                    class="fa fa-circle-o"></i>Approved Host Request</a></li>
                        <li class=""><a href="<?php echo site_url()?>/UserVerification/manageHost/3"><i
                                    class="fa fa-circle-o"></i>Rejected Host Request</a></li> -->
                    </ul>
                </li>

                <?php 
                    // }elseif($admin['assignRole'] == 'VIDEO MANAGEMENT'){ 
                        ?>

                <li class="header">BADGES & GIFT</li>
                <li class=" treeview">
                    <a href="#">
                        <i class="fa fa-book"></i> <span>Badges</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class=""><a href="<?php echo site_url()?>/User/getBadges"><i class="fa fa-circle-o"></i>Badges</a>
                        </li>
                        <li class=""><a href="<?php echo site_url()?>/User/AddBadges"><i class="fa fa-circle-o"></i>Add Badges</a>
                        </li>
                        <li class=""><a href="<?php echo site_url()?>/User/AddChidBadges"><i class="fa fa-circle-o"></i>Add Child Badges</a>
                        </li>
                    </ul>
                </li>

                <!-- <li class=" treeview">
                    <a href="#">
                        <i class="fa fa-book"></i> <span>Crown</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class=""><a href="<?php echo site_url()?>/Badges/manageCrown"><i
                                    class="fa fa-circle-o"></i>Crown</a></li>
                    </ul>
                </li> -->


                <li class="header">VIDEO MANAGEMENT</li>

                <li class=" treeview">
                    <a href="#">
                        <i class="fa fa-video-camera"></i> <span>Videos</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <!-- <li class=""><a href="<?php echo site_url()?>/Videos/pending"><i
                                    class="fa fa-circle-o"></i>Approved
                                Videos</a></li>
                        <li class=""><a href="<?php echo site_url()?>/Videos/trending"><i
                                    class="fa fa-circle-o"></i>Trending Videos</a></li>
                        <li class=""><a href="<?php echo site_url()?>/Videos/rejected"><i
                                    class="fa fa-circle-o"></i>Rejected Videos</a></li> -->
                                    <li class=""><a href="<?php echo site_url()?>/User/Video"><i
                                    class="fa fa-circle-o"></i>View Videos</a></li>
                    </ul>
                </li>
                <!-- <li class=" treeview">
                    <a href="#">
                        <i class="fa fa-video-camera"></i> <span>Admin Video</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class=""><a href="<?php echo site_url()?>/Videos/addAdminVideo"><i
                                    class="fa fa-circle-o"></i>Add Videos</a></li>
                        <li class=""><a href="<?php echo site_url()?>/Videos/adminVideo"><i
                                    class="fa fa-circle-o"></i>View
                                Videos</a></li>
                    </ul>
                </li> -->


                <!-- <li class=" treeview">
                    <a href="#">
                        <i class="fa fa-suitcase"></i> <span>Hashtags</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class=""><a href="<?php echo site_url()?>/Hashtags/addHash"><i
                                    class="fa fa-circle-o"></i>Add
                                Hashtags</a></li>
                        <li class=""><a href="<?php echo site_url()?>/Hashtags/manage"><i
                                    class="fa fa-circle-o"></i>View
                                Hashtags</a></li>
                    </ul>
                </li> -->
<!-- 
                <li class=" treeview">
                    <a href="#">
                        <i class="fa fa-diamond"></i> <span>Sliders</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class=""><a href="<?php echo site_url()?>/Slider/add"><i
                                    class="fa fa-circle-o"></i>Slider</a>
                        </li>
                        <li class=""><a href="<?php echo site_url()?>/Slider/manage"><i class="fa fa-circle-o"></i>View
                                Slider</a></li>
                    </ul>
                </li> -->

                <!-- <li class=" treeview">
                    <a href="#">
                        <i class="fa fa-diamond"></i> <span>Country Flag</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class=""><a href="<?php echo site_url()?>/Country/add"><i class="fa fa-circle-o"></i>Add
                                Country
                                Flag</a></li>
                        <li class=""><a href="<?php echo site_url()?>/Country/manage"><i class="fa fa-circle-o"></i>View
                                Country Flag</a></li>
                    </ul>
                </li> -->

                <?php 
                // }  elseif($admin['assignRole'] == 'REPORTS MANAGEMENT'){ 
                    ?>

                <!-- <li class="header">REPORTS MANAGEMENT</li>
                <li class=" treeview">
                    <a href="#">
                        <i class="fa fa-book"></i> <span>Reports</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class=""><a href="<?php echo site_url()?>/Report/manage"><i
                                    class="fa fa-circle-o"></i>Reports</a></li>
                        <li class=""><a href="<?php echo site_url()?>/Report/streamReport"><i
                                    class="fa fa-circle-o"></i>User Report</a></li>
                        <li class=""><a href="<?php echo site_url()?>/Report/problemReport"><i
                                    class="fa fa-circle-o"></i>Problem Report</a></li>
                        <li class=""><a href="<?php echo site_url()?>/Report/problemReport"><i
                                    class="fa fa-circle-o"></i>UserProblem Report</a></li>
                        <li class=""><a href="<?php echo site_url()?>/Report/userProblem"><i
                                    class="fa fa-circle-o"></i>User
                                video Report</a></li>


                    </ul>
                </li> -->
                <?php 
                // } else{ 
                    ?>

                <!-- <li class=""><a href="<?php echo site_url()?>/admin/dashboard"><i
                            class="fa fa-dashboard"></i>Dashboard</a>
                </li> -->


                <!-- <li class="header">ACCOUNTS MANAGEMENT</li>
                <li class=" treeview">
                    <a href="#">
                        <i class="fa fa-user"></i> <span>Users</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class=""><a href="<?php echo site_url()?>/User/manage"><i class="fa fa-circle-o"></i>View
                                Users</a></li>
                        <li class=""><a href="<?php echo site_url()?>/User/hotListUser"><i
                                    class="fa fa-circle-o"></i>Top
                                User</a></li>
                        <li class=""><a href="<?php echo site_url()?>/User/liveUser"><i class="fa fa-circle-o"></i>Live
                                User</a></li>
                        <li class=""><a href="<?php echo site_url()?>/User/liveRequest"><i
                                    class="fa fa-circle-o"></i>Live
                                Request</a></li>
                        <li class=""><a href="<?php echo site_url()?>/User/userReport"><i
                                    class="fa fa-circle-o"></i>User
                                Report</a></li>
                        <li class=""><a href="<?php echo site_url()?>/User/message"><i class="fa fa-circle-o"></i>Push
                                Message</a></li>
                        <li class=""><a href="<?php echo site_url()?>/User/posterImage"><i
                                    class="fa fa-circle-o"></i>Poster
                                Image Requests</a></li>
                    </ul>
                </li> -->





<!-- 
                <li class=" treeview">
                    <a href="#">
                        <i class="fa fa-users"></i> <span>Host</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class=""><a href="<?php echo site_url()?>/UserVerification/manageHost/1"><i
                                    class="fa fa-circle-o"></i>Pending Host Request</a></li>
                        <li class=""><a href="<?php echo site_url()?>/UserVerification/manageHost/2"><i
                                    class="fa fa-circle-o"></i>Approved Host Request</a></li>
                        <li class=""><a href="<?php echo site_url()?>/UserVerification/manageHost/3"><i
                                    class="fa fa-circle-o"></i>Rejected Host Request</a></li>
                    </ul>
                </li> -->



                <!-- <li class=" treeview">
                    <a href="#">
                        <i class="fa fa-users"></i> <span>Manage Agency</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class=""><a href="<?php echo site_url()?>/SubAdmin/addAgency"><i
                                    class="fa fa-circle-o"></i>Add
                                Agency</a></li>
                        <li class=""><a href="<?php echo site_url()?>/SubAdmin/viewAgency"><i
                                    class="fa fa-circle-o"></i>View
                                Agency</a></li>
                    </ul>
                </li>

                <li class=" treeview">
                    <a href="#">
                        <i class="fa fa-support"></i> <span>Admin</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class=""><a href="<?php echo site_url()?>/Admin/addAdmin"><i class="fa fa-circle-o"></i>Add
                                Admin</a></li>
                        <li class=""><a href="<?php echo site_url()?>/Admin/manageAdmin"><i
                                    class="fa fa-circle-o"></i>View
                                Admin</a></li>


                    </ul>
                </li> -->

                <!-- <li class=" treeview">
                    <a href="#">
                        <i class="fa fa-support"></i> <span>Sub Admin</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class=""><a href="<?php echo site_url()?>/SubAdmin/addSubAdmin"><i
                                    class="fa fa-circle-o"></i>Add Sub Admin</a></li>
                        <li class=""><a href="<?php echo site_url()?>/SubAdmin/manage"><i
                                    class="fa fa-circle-o"></i>View
                                Sub Admin</a></li>


                    </ul>
                </li> -->





                <li class="header">GIFT</li>
                <!-- <li class=" treeview">
                    <a href="#">
                        <i class="fa fa-book"></i> <span>Banners</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class=""><a href="<?php echo site_url()?>/Banners/add"><i class="fa fa-circle-o"></i>Add
                                Banners</a>
                        </li>
                        <li class=""><a href="<?php echo site_url()?>/Banners"><i class="fa fa-circle-o"></i>View
                                Banners</a>
                        </li>
                    </ul>
                </li> -->



                <li class=" treeview">
                    <a href="#">
                        <i class="fa fa-gift"></i> <span>Gift And Emoji</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class=""><a href="<?php echo site_url()?>/User/giftAdd"><i class="fa fa-circle-o"></i>Add
                                Gift</a>
                        </li>
                        <li class=""><a href="<?php echo site_url()?>/User/giftView"><i class="fa fa-circle-o"></i>View
                                Gift</a></li>
                                <li class=""><a href="<?php echo site_url()?>/User/emojiAdd"><i class="fa fa-circle-o"></i>Add Emoji</a>
                        </li>
                        <li class=""><a href="<?php echo site_url()?>/User/emojiView"><i class="fa fa-circle-o"></i>View Emoji</a></li>
                    </ul>
                </li>

                    <!-- //  Coins Management Starts// -->
                    <li class="header">COINS MANAGEMENT</li>
                    <li class=" treeview">
                        <a href="#">
                            <i class="fa fa-gift"></i> <span>Coins</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class=" treeview">
                                <a href="#">
                                    <i class="fa fa-gift"></i> <span>Add</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li class=""><a href="<?php echo site_url()?>/User/addCoins"><i class="fa fa-circle-o"></i>Coins</a></li>
                                    <li class=""><a href="<?php echo site_url()?>/User/addCoinsQuantity"><i class="fa fa-circle-o"></i>CoinQuantity</a></li>
                                </ul>
                            </li>
                            <li class=" treeview">
                                <a href="#">
                                    <i class="fa fa-gift"></i> <span>Manage</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li class=""><a href="<?php echo site_url()?>/User/manageCoins"><i class="fa fa-circle-o"></i>Coins</a></li>
                                    <li class=""><a href="<?php echo site_url()?>/User/manageCoinsQuantity"><i class="fa fa-circle-o"></i>CoinQuantity</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <!-- //  Coins Management End// -->

                <!-- <li class=" treeview">
                    <a href="#">
                        <i class="fa fa-gift"></i> <span>Live Gift</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class=""><a href="<?php echo site_url()?>/Gift/liveGiftCategory"><i
                                    class="fa fa-circle-o"></i>Gift Category</a></li>
                        <li class=""><a href="<?php echo site_url()?>/Gift/addliveGift"><i
                                    class="fa fa-circle-o"></i>Add
                                Live Gift</a></li>
                        <li class=""><a href="<?php echo site_url()?>/Gift/liveGift"><i class="fa fa-circle-o"></i>View
                                Live
                                Gift</a></li>
                    </ul>
                </li> -->

                <!-- <li class="header">COIN HISTORY</li>
                <li
                    class="<?php if($active == 'AdminCoinHistory' || $active == 'AdminCoinHistory' || $active == 'AdminCoinHistory' || $active == 'AdminCoinHistory'){ echo "active"; }?> treeview">
                    <a href="#">
                        <i class="fa fa-book"></i> <span>
                            Master Admin Coin History</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="<?php if($active == 'AdminCoinHistory'){ echo "active"; }?>"><a
                                href="<?php echo site_url()?>/subAdmin/coinDetails"><i class="fa fa-circle-o"></i>Master
                                Admin Recharge History</a></li>
                    </ul>
                </li> -->
                <!-- <li
                    class="<?php if($active == 'motherCoinHistory' || $active == 'motherCoinHistory' || $active == 'motherCoinHistory' || $active == 'motherCoinHistory'){ echo "active"; }?> treeview">
                    <a href="#">
                        <i class="fa fa-book"></i> <span>Mother
                            Coin History</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="<?php if($active == 'report'){ echo "active"; }?>"><a
                                href="<?php echo site_url()?>/subAdmin/motherCoinHistory"><i
                                    class="fa fa-circle-o"></i>Mother
                                Coin History</a></li>
                    </ul>
                </li> -->
                <!-- <li
                    class="<?php if($active == 'coinAgencyHistory' || $active == 'coinAgencyHistory' || $active == 'coinAgencyHistory' || $active == 'coinAgencyHistory'){ echo "active"; }?> treeview">
                    <a href="#">
                        <i class="fa fa-book"></i> <span>
                            Coin Agency History</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="<?php if($active == 'report'){ echo "active"; }?>"><a
                                href="<?php echo site_url()?>/subAdmin/coinAgencyHistory"><i class="fa fa-circle-o"></i>
                                Coin Agency History</a></li>
                    </ul>
                </li> -->
                <!-- <li
                    class="<?php if($active == 'subAdminCoinHistory' || $active == 'subAdminCoinHistory' || $active == 'subAdminCoinHistory' || $active == 'subAdminCoinHistory'){ echo "active"; }?> treeview">
                    <a href="#">
                        <i class="fa fa-book"></i> <span>
                            SubAdmin Coin History</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="<?php if($active == 'subAdminCoinHistory'){ echo "active"; }?>"><a
                                href="<?php echo site_url()?>/SubAdmin/coinsHistory"><i
                                    class="fa fa-circle-o"></i>SubAdmin Coins History</a></li>
                    </ul>
                </li> -->



                <li class="header">LEVELS</li>

                <li
                    class="<?php if($active == 'userLevels' || $active == 'manageLevel' || $active == 'addlevel'){ echo "active"; }?> treeview">
                    <a href="#">
                        <i class="fa fa-book"></i> <span>My Level</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="<?php if($active == 'manageLevel'){ echo "active"; }?>"><a
                                href="<?php echo site_url()?>/User/carLavel"><i class="fa fa-circle-o"></i>View Cars Level</a></li>
                                <li class="<?php if($active == 'manageLevel'){ echo "active"; }?>"><a
                                href="<?php echo site_url()?>/User/addCars"><i class="fa fa-circle-o"></i>Add Cars Level</a></li>
                    </ul>
                </li>

                <!-- <li
                    class="<?php if($active == 'crownlevels' || $active == 'managecrownlevels' || $active == 'addcrownlevels'){ echo "active"; }?> treeview">
                    <a href="#">
                        <i class="fa fa-book"></i> <span>The Talent</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="<?php if($active == 'managecrownlevels'){ echo "active"; }?>"><a
                                href="<?php echo site_url()?>/Level/manageTalentLevels"><i
                                    class="fa fa-circle-o"></i>Manage Levels</a></li>
                    </ul>
                </li> -->



                <!-- <li class="header">REPORTS MANAGEMENT</li> -->
                <!-- <li
                    class="<?php if($active == 'report' || $active == 'streamReport' || $active == 'problemReport' || $active == 'userReport'){ echo "active"; }?> treeview">
                    <a href="#">
                        <i class="fa fa-book"></i> <span>Reports</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="<?php if($active == 'report'){ echo "active"; }?>"><a
                                href="<?php echo site_url()?>/Report/manage"><i class="fa fa-circle-o"></i>Reports</a>
                        </li>
                        <li class="<?php if($active == 'streamReport'){ echo "active"; }?>"><a
                                href="<?php echo site_url()?>/Report/streamReport"><i class="fa fa-circle-o"></i>User
                                Report</a></li>
                        <li class="<?php if($active == 'userReport'){ echo "active"; }?>"><a
                                href="<?php echo site_url()?>/Report/problemReport"><i
                                    class="fa fa-circle-o"></i>UserProblem Report</a></li>
                        <li class="<?php if($active == 'userReport'){ echo "active"; }?>"><a
                                href="<?php echo site_url()?>/Report/userProblem"><i class="fa fa-circle-o"></i>User
                                video Report</a></li>


                    </ul>
                </li> -->

                <!-- <li
                    class="<?php if( $active == 'subAdminCoinsHistory' || $active == 'addAdminCoins'){ echo "active"; }?> treeview">
                    <a href="#">
                        <i class="fa fa-credit-card"></i> <span>Recharge</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="<?php if($active == 'addAdminCoins'){ echo "active"; }?>"><a
                                href="<?php echo site_url()?>/SubAdmin/sendCoinsAdmin"><i
                                    class="fa fa-circle-o"></i>Send Coins</a></li>

                        <li class="<?php if($active == 'subAdminCoinsHistory'){ echo "active"; }?>"><a
                                href="<?php echo site_url()?>/Payment/subAdminCoinsHistory"><i
                                    class="fa fa-circle-o"></i>Recharge History</a></li>
                    </ul>
                </li> -->




                <?php
                //  } 
                 ?>


                <li class="header">Admin Account</li>
                <li class="<?php if($active == 'edit_profile'){ echo "active"; }?>"><a
                        href="<?php echo site_url()?>/AdminController/edit_profile"><i class="fa fa-diamond"></i>Account</a>
                </li>

                <?php if($admin['role'] == 0){?>
                <li
                    class="<?php if($active == 'settings' || $active == 'logo' || $active == 'length' || $active == 'splash'){ echo "active"; }?> treeview">
                    <a href="#">
                        <i class="fa fa-cog" aria-hidden="true"></i> <span>Settings</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="<?php if($active == 'logo'){ echo "active"; }?>"><a
                                href="<?php echo site_url()?>/Settings/logo"><i class="fa fa-circle-o"></i>Logo</a>
                        </li>
                        <li class="<?php if($active == 'length'){ echo "active"; }?>"><a
                                href="<?php echo site_url()?>/Settings/length"><i class="fa fa-circle-o"></i>Description
                                Length</a></li>
                        <li class="<?php if($active == 'splash'){ echo "active"; }?>"><a
                                href="<?php echo site_url()?>/Settings/splash"><i class="fa fa-circle-o"></i>Splash
                                Image</a></li>
                    </ul>
                </li>
                <?php } ?>
                <li class=""><a href="<?php echo site_url()?>/admin-logout"><i class="fa fa-sign-out"></i>Sign
                        Out</a></li>
            </ul>
        </section>
        <!-- /.sidebar -->
        </aside>
        </header>

        