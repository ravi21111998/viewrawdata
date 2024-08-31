<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url();?><?= $favicon ?>">
    <title><?= $title; ?></title>

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
    .form-error1 {
        color: #a76161;
    }

    .skin-blue .main-header .navbar {
        background-color: #f0569c;
    }

    .skin-blue .main-header .logo {
        background-color: #f0569c;
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
        border-top-color: #892CFF;
    }

    .box.box-primary {
        border-top-color: #892CFF;
    }

    .btn-success {
        background-color: #892CFF;
        border-color: #0000ff;
    }

    .box.box-danger {
        border-top-color: #892CFF;
    }

    .box-header.with-border {
        background: #892CFF;
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
         background-image: linear-gradient(to right, #4340d9d9 30%, #aa2bd4) !important;
    }

    i.fa.fa-edit.editIcon {
        font-size: 18px;
    }

    i.fa.fa-fw.fa-remove.deleteIcon {
        color: #b52929;
        font-size: 20px;
    }
    
    .skin-blue .main-header .navbar {
        background-image: linear-gradient(to right, #4340d9d9 30%, #aa2bd4) !important;
    }

    .skin-blue .main-header .logo {
        background-image: linear-gradient(to left, #4340d9d9 30%, #aa2bd4) !important;
        color: #fff;
        border-bottom: 0 solid transparent;
    }
	.content-wrapper {
        min-height: 95vh !important;
    }
    .main-sidebar{
        overflow:auto;
        max-height:75vh !important;
    }
    .col-xs-12{
        margin-bottom:10rem !important;   
    }
    ::-webkit-scrollbar {
  display: none;
}
    </style>
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <header class="main-header">
            <!-- Logo -->
            <?php if($admin['role'] == 0 || $admin['role'] == 1) { ?><a href="<?= site_url();?>/admin/dashboard" class="logo">
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
                                <img src="<?php echo $admin['image'];?>" class="user-image"
                                    alt="User Image">
                                <?php } else{ ?>
                                <img src="<?php echo base_url();?>assets/dist/img/user2-160x160.jpg" class="user-image"
                                    alt="User Image">
                                <?php }?>
                                <span class="hidden-xs"><?php echo $admin['name']; ?></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="<?php echo $admin['image'];?>" class="img-circle"
                                        alt="User Image">

                                    <p>
                                        <?php echo $admin['designation'];?>
                                        <small><?php echo $admin['education'];?></small>
                                    </p>
                                </li>
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="<?php echo site_url()?>/admin/edit_profile"
                                            class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="<?php echo site_url();?>/admin/logout"
                                            class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <aside class="main-sidebar">
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
                    
 
    
                    <li class="<?php if($active == 'dashboard'){ echo "active"; }?>"><a
                            href="<?php echo site_url()?>/admin/dashboard"><i class="fa fa-dashboard"></i>Dashboard</a>
                    </li>
                    
                    <?php if(!!$admin['role'] == '0' || !!$admin['role'] == '1'){?>
                    
                    <li class="header">ACCOUNTS MANAGEMENT</li>
                    <!-- <li class="<?php if($active == 'managePendingHostRequest' || $active == 'approvedHostRequest' || $active == 'rejectedHostRequest'){ echo "active"; }?> treeview">
                  <a href="#">
                    <i class="fa fa-users"></i> <span>Host</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li class="<?php if($active == 'managePendingHostRequest'){ echo "active"; }?>"><a href="<?php echo site_url()?>/UserVerification/manageHost/1"><i class="fa fa-circle-o"></i>Pending Host Request</a></li>
                    <li class="<?php if($active == 'approvedHostRequest'){ echo "active"; }?>"><a href="<?php echo site_url()?>/UserVerification/manageHost/2"><i class="fa fa-circle-o"></i>Approved Host Request</a></li>
                    <li class="<?php if($active == 'rejectedHostRequest'){ echo "active"; }?>"><a href="<?php echo site_url()?>/UserVerification/manageHost/3"><i class="fa fa-circle-o"></i>Rejected Host Request</a></li>
                  </ul>
                </li> -->
                
                <?php
                    }?>
                    
                    <?php if(!!$admin['role'] == '0'){?>

                    <li
                        class="<?php if($active == 'addUser' || $active == 'user' || $active == 'verifyUser' || $active == 'userreport' || $active == 'userMessage' || $active == 'liveuser' || $active == 'hotlist'){ echo "active"; }?> treeview">
                        <a href="#">
                            <i class="fa fa-user"></i> <span>Users</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <!--<li class="<?php if($active == 'addUser'){ echo "active"; }?>"><a href="<?php echo site_url()?>/User/addUser"><i class="fa fa-circle-o"></i>Add User</a></li>-->
                            <li class="<?php if($active == 'user'){ echo "active"; }?>"><a href="<?php echo site_url()?>/User/manageUser"><i class="fa fa-circle-o"></i>View Users</a></li>
                            <li class="<?php if ($active == 'hotlist') { echo "active"; } ?>"><a href="<?php echo site_url() ?>/User/hotListUser"><i class="fa fa-circle-o"></i>Top User</a></li>
                            <li class="<?php if ($active == 'liveuser') { echo "active"; } ?>"><a href="<?php echo site_url() ?>/User/liveUser"><i class="fa fa-circle-o"></i>Live
                                        User</a></li>
                            <li class="<?php if($active == 'userMessage'){ echo "active"; }?>"><a href="<?php echo site_url()?>/User/message"><i class="fa fa-circle-o"></i>Push Message</a></li>
                            <li class="<?php if($active == 'userEarning'){ echo "active"; }?>"><a href="<?php echo site_url()?>/User/earning"><i class="fa fa-circle-o"></i>Earnings</a></li>
                        </ul>
                    </li>
                    
                    <?php
                    }
                    ?>
                     <?php if(!!$admin['role'] == '0' ){?>
                    
                    <li
                       class="<?php if($active == 'viewOnlineServices'){ echo "active"; }?> treeview">
                        <a href="#">
                            <i class="fa fa-users"></i> <span>Online Services</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="<?php if($active == 'addOnlineServices'){ echo "active"; }?>"><a
                                    href="<?php echo site_url()?>/User/addOnlineServices"><i class="fa fa-circle-o"></i>Add
                                    Online Services</a></li>
                            <li class="<?php if($active == 'viewOnlineServices'){ echo "active"; }?>"><a
                                    href="<?php echo site_url()?>/User/viewOnlineServices"><i
                                        class="fa fa-circle-o"></i>View
                                    Online Services</a></li>
                            
                        </ul>
                    </li>
                    
                    <?php
                        }?>
                    <?php if(!!$admin['role'] == '1' || !!$admin['role'] == '0'){?>
                    
                    <li class="<?php if ($active == 'managePendingHostRequest' || $active == 'manageApprovedHostRequest' || $active == 'rejectedHostRequest') {
                                        echo "active";
                                    } ?> treeview">
                            <a href="#">
                                <i class="fa fa-users"></i> <span>Host</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="<?php if ($active == 'managePendingHostRequest') {
                                                echo "active";
                                            } ?>"><a href="<?php echo site_url() ?>/UserVerification/manageHost/1"><i class="fa fa-circle-o"></i>Pending Host Request</a></li>
                                <li class="<?php if ($active == 'manageApprovedHostRequest') {
                                                echo "active";
                                            } ?>"><a href="<?php echo site_url() ?>/UserVerification/manageHost/2"><i class="fa fa-circle-o"></i>Approved Host Request</a></li>
                                <li class="<?php if ($active == 'rejectedHostRequest') {
                                                echo "active";
                                            } ?>"><a href="<?php echo site_url() ?>/UserVerification/manageHost/3"><i class="fa fa-circle-o"></i>Rejected Host Request</a></li>
                            </ul>
                        </li>
                        <?php
                        }?>
                        
                        <?php if(!!$admin['role'] == '0'){?>
                    
                    <li
                        class="<?php if($active == 'subAdmin' || $active == 'addSubAdmin'){ echo "active"; }?> treeview">
                        <a href="#">
                            <i class="fa fa-support"></i> <span>Sub Admin</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="<?php if($active == 'addSubAdmin'){ echo "active"; }?>"><a href="<?php echo site_url()?>/SubAdmin/addSubAdmin"><i class="fa fa-circle-o"></i>Add Sub Admin</a></li>
                            <li class="<?php if($active == 'subAdmin'){ echo "active"; }?>"><a href="<?php echo site_url()?>/SubAdmin/manage"><i class="fa fa-circle-o"></i>View Sub Admin</a></li>
                        </ul>
                    </li>
                    
                    <?php
                        }?>
                        
                        <?php if(!!$admin['role'] == '0' || !!$admin['role'] == '1'){?>
                    
                    <li
                        class="<?php if($active == 'penidngAgency' || $active == 'agency' || $active == 'rejectedAgency' || $active == 'addAgency' || $active == 'viewAgency'){ echo "active"; }?> treeview">
                        <a href="#">
                            <i class="fa fa-users"></i> <span>Manage Agency</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="<?php if($active == 'addAgency'){ echo "active"; }?>"><a
                                    href="<?php echo site_url()?>/SubAdmin/addAgency"><i class="fa fa-circle-o"></i>Add
                                    Agency</a></li>
                            <li class="<?php if($active == 'viewAgency'){ echo "active"; }?>"><a
                                    href="<?php echo site_url()?>/SubAdmin/viewAgency"><i
                                        class="fa fa-circle-o"></i>View
                                    Agency</a></li>
                            
                        </ul>
                    </li>
                    
                    <?php
                        }?>
                        
                                
                       
                        
                        <?php if(!!$admin['role'] == '0'){?>
                    
                    <li class="<?php if ($active == 'addCoinAgency' || $active == 'manageAgencies') { echo "active"; } ?> treeview">
                        <a href="#">
                                <!-- <i class="fa fa-support"></i> <span>Sub Admin</span> -->
                                <i class="fa fa-support"></i> <span>Coin Portal</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                        </a>
                            <ul class="treeview-menu">
                                

                                <li class="<?php if ($active == 'addCoinAgency') {
                                                echo "active";
                                            } ?>"><a href="<?php echo site_url() ?>/SubAdmin/addCoinAgency"><i class="fa fa-circle-o"></i>Add Coin Portal</a></li>
                                <li class="<?php if ($active == 'manageAgencies') {
                                                echo "active";
                                            } ?>"><a href="<?php echo site_url() ?>/SubAdmin/manageAgencies"><i class="fa fa-circle-o"></i>View Coin Portal</a></li>
                                

                            </ul>
                    </li>
                    
                    <li class="<?php if ($active == 'addIdBannedPortal' || $active == 'manageidBannedPortal') { echo "active"; } ?> treeview">
                        <a href="#">
                                <!-- <i class="fa fa-support"></i> <span>Sub Admin</span> -->
                                <i class="fa fa-support"></i> <span>Id Banned Portal</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                        </a>
                            <ul class="treeview-menu">
                                

                                <li class="<?php if ($active == 'addIdBannedPortal') {
                                                echo "active";
                                            } ?>"><a href="<?php echo site_url() ?>/SubAdmin/IdBannedPortal"><i class="fa fa-circle-o"></i>Add Id-Banned Portal</a></li>
                                <li class="<?php if ($active == 'manageidBannedPortal') {
                                                echo "active";
                                            } ?>"><a href="<?php echo site_url() ?>/SubAdmin/manageIdBannedPortal"><i class="fa fa-circle-o"></i>View Id-Banned Portal</a></li>
                                

                            </ul>
                    </li>
                    
                    <?php
                    
                        }?>
                        
                        <?php if(!!$admin['role'] == '0'){?>
                    
                    <li class="<?php if ($active == 'sendCoins' || $active == 'recieveHistory' || $active == 'sendHistory' || $active == 'sendCoinsUser' || $active == 'sendUserCoinHistory') {
                                        echo "active";
                                    } ?> treeview">
                            <a href="#">
                                <i class="fa fa-credit-card"></i> <span>Recharge</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                              
                                <li class="<?php if ($active == 'sendCoins') {
                                                echo "active";
                                            } ?>"><a href="<?php echo site_url() ?>/SubAdmin/sendCoinsToCoinAgency"><i class="fa fa-circle-o"></i>Send Coins</a></li>
                                            
                                <li class="<?php if ($active == 'sendCoinsUser') {
                                                echo "active";
                                            } ?>"><a href="<?php echo site_url() ?>/SubAdmin/sendCoinsToUser"><i class="fa fa-circle-o"></i>Send Coins To User</a></li>

                                <li class="<?php if ($active == 'sendHistory') {
                                                echo "active";
                                            } ?>"><a href="<?php echo site_url() ?>/Payment/adminCoinsHistory"><i class="fa fa-circle-o"></i>Send Coin History</a></li>
                                <li class="<?php if ($active == 'sendUserCoinHistory') {
                                                echo "active";
                                            } ?>"><a href="<?php echo site_url() ?>/Payment/sendUserCoinHistory"><i class="fa fa-circle-o"></i>Send User Coin History</a></li>

                                



                            </ul>
                        </li>
                        
                        <?php
                        }?>
                        
                        <!--Share panel credentials button-->
                        <?php
                        /*
                        if(!!$admin['role'] == '0'){?>
                                                
                                                <li class="<?php if ($active == 'shareCre' || $active == 'viewShareCre') {
                                                                echo "active";
                                                            } ?> treeview">
                                                    <a href="#">
                                                        <i class="fa fa-key"></i> <span>Share Panel Credentials</span>
                                                        <span class="pull-right-container">
                                                            <i class="fa fa-angle-left pull-right"></i>
                                                        </span>
                                                    </a>
                                                    <ul class="treeview-menu">
                                                      
                                                        <!-- <li class="<?php if ($active == 'shareCre') {
                                                                        echo "active";
                                                                    } ?>"><a href="#"><i class="fa fa-circle-o"></i>Send Credentials</a></li> -->
                                                       
                                                        <li class="<?php if ($active == 'viewShareCre') {
                                                                        echo "active";
                                                                    } ?>"><a href="<?= site_url() ?>/SubAdmin/viewAdminShareLink"><i class="fa fa-circle-o"></i>Send Credentials Details</a></li>
                                                    </ul>
                                                </li>
                                                <?php
                                                }
                        */
                        ?>
                        
                        <?php if(!!$admin['role'] == '0'){?>
                        <li class="header">GAME SECTION</li>
    <li class="<?php if($active == 'listShowGameDetails'){ echo "active"; }?> treeview">
        <a href="#">
            <i class="fa fa-gamepad"></i> <span>Games</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li class="<?php if($active == 'listShowGameDetails'){ echo "active"; }?>"><a href="<?php echo site_url()?>/User/listShowGameDetails"><i class="fa fa-circle-o"></i>View All Games</a></li>
        </ul>
    </li>
<?php } ?>
                        <?php if(!!$admin['role'] == '0'){?>
                 
                    <li class="header">BANNER SECTION</li>
                    
                    <li
                        class="<?php if($active == 'vipImg' || $active == 'addVipImag'){ echo "active"; }?> treeview">
                        <a href="#">
                            <i class="fa fa-photo"></i> <span>Vip Images</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                             
                            <li class="<?php if($active == 'addVipImag'){ echo "active"; }?>"> <a href="<?php echo site_url()?>/Admin/add"><i class="fa fa-circle-o"></i>Add Vip Images</a></li>
                            <li class="<?php if($active == 'vipImg'){ echo "active"; }?>"><a href="<?php echo site_url()?>/Admin/vipImages"><i class="fa fa-circle-o"></i>View Vip Images</a></li>
                           
                        </ul>
                    </li>
                    
                    
                    
                    <li
                        class="<?php if($active == 'themes' || $active == 'addThemes'){ echo "active"; }?> treeview">
                        <a href="#">
                            <i class="fa fa-photo"></i> <span>Themes</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="<?php if($active == 'addThemes'){ echo "active"; }?>"><a href="<?php echo site_url()?>/Admin/addThemes"><i class="fa fa-circle-o"></i>Add Themes</a></li>
                            <li class="<?php if($active == 'themes'){ echo "active"; }?>"><a href="<?php echo site_url()?>/Admin/themes"><i class="fa fa-circle-o"></i>View Themes</a></li>
                        </ul>
                    </li>
                    
                    <li
                        class="<?php if($active == 'gamesBanner' || $active == 'addgamesBanner'){ echo "active"; }?> treeview">
                        <a href="#">
                            <i class="fa fa-photo"></i> <span>Games Banner</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="<?php if($active == 'addgamesBanner'){ echo "active"; }?>"><a href="<?php echo site_url()?>/Admin/addGamesBanner"><i class="fa fa-circle-o"></i>Add Games Banner</a></li>
                            <li class="<?php if($active == 'gamesBanner'){ echo "active"; }?>"><a href="<?php echo site_url()?>/Admin/gamesBanner"><i class="fa fa-circle-o"></i>View Games Banner</a></li>
                        </ul>
                    </li>
                    
                    <li
                        class="<?php if($active == 'Emoji' || $active == 'addEmoji'){ echo "active"; }?> treeview">
                        <a href="#">
                            <i class="fa fa-photo"></i> <span>Emoji</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="<?php if($active == 'addEmoji'){ echo "active"; }?>"><a href="<?php echo site_url()?>/Admin/addEmoji"><i class="fa fa-circle-o"></i>Add Emoji</a></li>
                            <li class="<?php if($active == 'Emoji'){ echo "active"; }?>"><a href="<?php echo site_url()?>/Admin/Emoji"><i class="fa fa-circle-o"></i>View Emoji</a></li>
                        </ul>
                    </li>
                    
                     <li
                        class="<?php if($active == 'img' || $active == 'addImag'){ echo "active"; }?> treeview">
                        <a href="#">
                            <i class="fa fa-photo"></i> <span>Images</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="<?php if($active == 'addImag'){ echo "active"; }?>"><a href="<?php echo site_url()?>/Admin/addImages"><i class="fa fa-circle-o"></i>Add Images</a></li>
                            <li class="<?php if($active == 'img'){ echo "active"; }?>"><a href="<?php echo site_url()?>/Admin/Images"><i class="fa fa-circle-o"></i>View Images</a></li>
                        </ul>
                    </li>
                    
                    <li
                        class="<?php if($active == 'liveGift' || $active == 'addliveGift'){ echo "active"; }?> treeview">
                        <a href="#">
                            <i class="fa fa-photo"></i> <span>Live Gift</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="<?php if($active == 'addliveGift'){ echo "active"; }?>"><a href="<?php echo site_url()?>/Gift/addLiveGift"><i class="fa fa-circle-o"></i>Add Live Gift</a></li>
                            <li class="<?php if($active == 'liveGift'){ echo "active"; }?>"><a href="<?php echo site_url()?>/Gift/liveGift"><i class="fa fa-circle-o"></i>View Live Gift</a></li>
                        </ul>
                    </li>
                    
                    <li class="<?php if ($active == 'addGarage' || $active == 'editGarage' || $active == 'viewGarage' || $active == 'addFrames' || $active == 'viewFrames' || $active == 'editFrames'||$active == 'addLuckyId' || $active == 'viewLuckyId') {
                                        echo "active";
                                    } ?> treeview">
                            <a href="#">
                                <i class="fa fa-book"></i> <span>Mall</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <!-- Garage s -->
                            <ul class="treeview-menu">
                                
                                <!-- Garage e -->
                                

                                <!-- Frame s -->
                                <li class="<?php if ($active == 'addFrames' || $active == 'editFrames' || $active == 'viewFrames') {
                                                echo "active";
                                            } ?> treeview">
                                    <a href="#">
                                        <i class="fa fa-book"></i> <span>Frames</span>
                                        <span class="pull-right-container">
                                            <i class="fa fa-angle-left pull-right"></i>
                                        </span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li class="<?php if ($active == 'addFrames' || $active == 'editFrames') {
                                                        echo "active";
                                                    } ?>"><a href="<?php echo site_url() ?>/Frames/add"><i class="fa fa-circle-o"></i>Add
                                                Frame</a>
                                        </li>
                                        <li class="<?php if ($active == 'viewFrames') {
                                                        echo "active";
                                                    } ?>"><a href="<?php echo site_url() ?>/Frames"><i class="fa fa-circle-o"></i>View
                                                Frames</a>
                                        </li>
                                    </ul>
                                </li>
                                
                                <li class="<?php if ($active == 'addGarage' || $active == 'editGarage'  || $active == 'viewGarage') {
                                                echo "active";
                                            } ?> treeview">
                                    <a href="#">
                                        <i class="fa fa-book"></i> <span>EntryEffect</span>
                                        <span class="pull-right-container">
                                            <i class="fa fa-angle-left pull-right"></i>
                                        </span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li class="<?php if ($active == 'addGarage' || $active == 'editGarage') {
                                                        echo "active";
                                                    } ?>"><a href="<?php echo site_url() ?>/Garage/add"><i class="fa fa-circle-o"></i>Add
                                                EntryEffect</a>
                                        </li>
                                        <li class="<?php if ($active == 'viewGarage') {
                                                        echo "active";
                                                    } ?>"><a href="<?php echo site_url() ?>/Garage"><i class="fa fa-circle-o"></i>View
                                                EntryEffect</a>
                                        </li>
                                    </ul>
                                </li>
                                <!-- Frame e -->
                            </ul>

                    </li>
                    
                    <?php
                    }?>
                    
                    <?php if(!!$admin['role'] == '0'){?>
                    
                    <li class="header">REPORTS MANAGEMENT</li>
                    <li
                        class="<?php if($active == 'report' || $active == 'streamReport' || $active == 'problemReport' || $active == 'userReport' || $active == 'reportAction'){ echo "active"; }?> treeview">
                        <a href="#">
                            <i class="fa fa-book"></i> <span>Reports</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="<?php if($active == 'report'){ echo "active"; }?>"><a href="<?php echo site_url()?>/Report/manage"><i class="fa fa-circle-o"></i>Reports</a></li>
                            
                            <li class="<?php if($active == 'reportAction'){ echo "active"; }?>"><a href="<?php echo site_url()?>/Report/manageReportAction"><i class="fa fa-circle-o"></i>Report Actions</a></li>
                            
                            <li class="<?php if($active == 'streamReport'){ echo "active"; }?>"><a href="<?php echo site_url()?>/Report/streamReport"><i class="fa fa-circle-o"></i>User Report</a></li>
                            
                            
                            <!-- <li class="<?php if($active == 'problemReport'){ echo "active"; }?>"><a href="<?php echo site_url()?>/Report/problemReport"><i class="fa fa-circle-o"></i>Problem Report</a></li> -->
                            <!-- <li class="<?php if($active == 'userReport'){ echo "active"; }?>"><a
                                    href="<?php echo site_url()?>/Report/problemReport"><i
                                        class="fa fa-circle-o"></i>UserProblem Report</a></li>
                            <li class="<?php if($active == 'userReport'){ echo "active"; }?>"><a
                                    href="<?php echo site_url()?>/Report/userProblem"><i class="fa fa-circle-o"></i>User
                                    video Report</a></li> -->


                        </ul>
                    </li>
                    <?php
                    }?>
                    
                    <?php if(!!$admin['role'] == '0'){?>
                    
                    <li class="header">POST MANAGEMENT</li>
                    <li
                        class="<?php if($active == 'managePendingPost' || $active == 'manageApprovedPost' || $active == 'manageRejectedPost'){ echo "active"; }?> treeview">
                        <a href="#">
                            <i class="fa fa-users"></i> <span>Manage Posts</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            
                            
                            <li class="<?php if($active == 'managePendingPost'){ echo "active"; }?>"><a href="<?php echo site_url()?>/Admin/manageAllProductsRequest/0"><i class="fa fa-circle-o"></i>Pending Posts</a></li>
                            <li class="<?php if($active == 'manageApprovedPost'){ echo "active"; }?>"><a href="<?php echo site_url()?>/Admin/manageAllProductsRequest/1"><i class="fa fa-circle-o"></i>Approved Posts</a></li>
                            <li class="<?php if($active == 'manageRejectedPost'){ echo "active"; }?>"><a href="<?php echo site_url()?>/Admin/manageAllProductsRequest/2"><i class="fa fa-circle-o"></i>Rejected Posts</a></li>
                                    
                             
                        </ul>
                    </li>>
                    
                    <?php
                    }?>
                    
                 
                    <?php if(!!$admin['role'] == '1' || !!$admin['role'] == '0'){?>
                    <li class="header">FAMILY MANAGEMENT</li>
                    <li
                        class="<?php if($active == 'managePendingfamily' || $active == 'manageApprovedfamily' || $active == 'manageRejectedfamily'){ echo "active"; }?> treeview">
                        <a href="#">
                            <i class="fa fa-users"></i> <span>Manage Family</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            
                            
                            <li class="<?php if($active == 'managePendingfamily'){ echo "active"; }?>"><a href="<?php echo site_url()?>/Admin/manageFamily/0"><i class="fa fa-circle-o"></i>Pending Family</a></li>
                            <li class="<?php if($active == 'manageApprovedfamily'){ echo "active"; }?>"><a href="<?php echo site_url()?>/Admin/manageFamily/1"><i class="fa fa-circle-o"></i>Approved Family</a></li>
                            <li class="<?php if($active == 'manageRejectedfamily'){ echo "active"; }?>"><a href="<?php echo site_url()?>/Admin/manageFamily/2"><i class="fa fa-circle-o"></i>Rejected Family</a></li>
                            <li class="<?php if($active == 'manageEditFamilyRequest'){ echo "active"; }?>"><a href="<?php echo site_url()?>/Admin/editFamilyRequest"><i class="fa fa-circle-o"></i>Edit Family Request</a></li>
                                    
                             
                        </ul>
                    </li>
                    <?php
                    }
                    ?>
                   
                    <?php if(!!$admin['role'] == '0'){?>
                    <li class="header">VIP MANAGEMENT</li>
                    <li
                        class="<?php if($active == 'vipPlans'){ echo "active"; }?> treeview">
                        <a href="#">
                            <i class="fa fa-book"></i> <span>Manage Vip Center</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="<?php if($active == 'vipPlans'){ echo "active"; }?>"><a href="<?php echo site_url()?>/User/vipPlans"><i class="fa fa-circle-o"></i>Vip Plans</a></li>
                          
                            <!-- <li class="<?php if($active == 'problemReport'){ echo "active"; }?>"><a href="<?php echo site_url()?>/Report/problemReport"><i class="fa fa-circle-o"></i>Problem Report</a></li> -->
                            <!-- <li class="<?php if($active == 'userReport'){ echo "active"; }?>"><a
                                    href="<?php echo site_url()?>/Report/problemReport"><i
                                        class="fa fa-circle-o"></i>UserProblem Report</a></li>
                            <li class="<?php if($active == 'userReport'){ echo "active"; }?>"><a
                                    href="<?php echo site_url()?>/Report/userProblem"><i class="fa fa-circle-o"></i>User
                                    video Report</a></li> -->


                        </ul>
                    </li>
                    
                    <?php
                    }?>
                    
                    <?php if(!!$admin['role'] == '0'){?>
                    <li class="header">COINS MANAGEMENT</li>
                    <li
                        class="<?php if($active == 'ViewLuckyBagCoins' || $active == 'addCoins' || $active == 'addCoinsQuan' || $active == 'ViewLuckyBagCoinsqua'){ echo "active"; }?> treeview">
                        <a href="#">
                            <i class="fa fa-photo"></i> <span>Manage LuckyBag</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="<?php if($active == 'addCoins'){ echo "active"; }?>"><a href="<?php echo site_url()?>/Admin/addLuckyBagCoins"><i class="fa fa-circle-o"></i>Add LuckyBag Coins</a></li>
                            <li class="<?php if($active == 'ViewLuckyBagCoins'){ echo "active"; }?>"><a href="<?php echo site_url()?>/Admin/viewLuckyBagCoins"><i class="fa fa-circle-o"></i>View LuckyBag Coins</a></li>
                            <li class="<?php if($active == 'addCoinsQuan'){ echo "active"; }?>"><a href="<?php echo site_url()?>/Admin/addLuckyBagCoinsQuantity"><i class="fa fa-circle-o"></i>Add LuckyBag Coins Quantity</a></li>
                            <li class="<?php if($active == 'ViewLuckyBagCoinsqua'){ echo "active"; }?>"><a href="<?php echo site_url()?>/Admin/viewLuckyBagCoinsQuantity"><i class="fa fa-circle-o"></i>View LuckyBag Coins Quantity</a></li>
                        </ul>
                    </li>
                    
                    <li
                        class="<?php if($active == 'ViewSuperLuckyBagCoins' || $active == 'addSuperCoins' || $active == 'addSUPCoinsQuan' || $active == 'ViewSuLuckyBagCoinsqua'){ echo "active"; }?> treeview">
                        <a href="#">
                            <i class="fa fa-photo"></i> <span>Manage SuperLuckyBag</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="<?php if($active == 'addSuperCoins'){ echo "active"; }?>"><a href="<?php echo site_url()?>/Admin/addSuperLuckyBagCoins"><i class="fa fa-circle-o"></i>Add SuperLuckyBag Coins</a></li>
                            <li class="<?php if($active == 'ViewSuperLuckyBagCoins'){ echo "active"; }?>"><a href="<?php echo site_url()?>/Admin/viewSuperLuckyBagCoins"><i class="fa fa-circle-o"></i>View SuperLuckyBag Coins</a></li>
                            <li class="<?php if($active == 'addSUPCoinsQuan'){ echo "active"; }?>"><a href="<?php echo site_url()?>/Admin/addSuperLuckyBagCoinsQuantity"><i class="fa fa-circle-o"></i>Add SuperLuckyBag Quantity</a></li>
                            <li class="<?php if($active == 'ViewSuLuckyBagCoinsqua'){ echo "active"; }?>"><a href="<?php echo site_url()?>/Admin/viewSuperLuckyBagCoinsQuantity"><i class="fa fa-circle-o"></i>View SuperLuckyBag Quantity</a></li>
                        </ul>
                    </li>
                    
                    <li
                        class="<?php if($active == 'ViewGalleryCoins' || $active == 'addGalleryCoins'){ echo "active"; }?> treeview">
                        <a href="#">
                            <i class="fa fa-photo"></i> <span>Manage Gallery Coins</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="<?php if($active == 'addGalleryCoins'){ echo "active"; }?>"><a href="<?php echo site_url()?>/Admin/addGalleryPurchaseCoins"><i class="fa fa-circle-o"></i>Add Gallery Coins</a></li>
                            <li class="<?php if($active == 'ViewGalleryCoins'){ echo "active"; }?>"><a href="<?php echo site_url()?>/Admin/viewGalleryPurchaseCoins"><i class="fa fa-circle-o"></i>View Gallery Coins</a></li>
                             
                        </ul>
                    </li>
                    
                    <?php
                    }?>
                    
                    <?php if(!!$admin['role'] == '0'){?>
                   <!-- <li class="header">CHAT MANAGEMENT</li>-->
                   <!-- <li class="<?php if($active == 'chat'){ echo "active"; }?>"><a href="<?php echo base_url()?>Admin/chat"><i class="fa fa-comments" aria-hidden="true"></i></i>Chat</a></li> -->
                   <!--<li class="<?php if($active == 'onlineSupport'){ echo "active"; }?>"><a href="<?php echo site_url()?>/admin/onlineSupport"><i class="fa fa-comments" aria-hidden="true"></i>&nbsp;&nbsp;Online Support</a></li>-->
                 
                   <?php
                    }?>
                    
                    
  

                  
                    
                     <?php if(!!$admin['role'] == '0'){?>
                    <li class="header">SPIN WHEEL MANAGEMENT</li>
                    <li
                        class="<?php if($active == 'viewSpinWheelDetails'){ echo "active"; }?> treeview">
                        <a href="#">
                            <i class="fa fa-shield"></i> <span>Manage Spin Wheel</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="<?php if($active == 'viewSpinWheelDetails'){ echo "active"; }?>"><a href="<?php echo site_url()?>/Frames/manageSpinWheel"><i class="fa fa-circle-o"></i>Spin Wheel Details</a></li>
                  
                        </ul>
                    </li>
                    
                    <?php
                     }
                     ?>
                
                    <!-- <li class="<?php if( $active == 'subAdminCoinsHistory' || $active == 'addAdminCoins'){ echo "active"; }?> treeview">
              <a href="#">
                <i class="fa fa-credit-card"></i> <span>Recharge</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">

          <li class="<?php if($active == 'addAdminCoins'){ echo "active"; }?>"><a href="<?php echo site_url()?>/SubAdmin/sendCoinsAdmin"><i class="fa fa-circle-o"></i>Send Coins</a></li>

          <li class="<?php if($active == 'subAdminCoinsHistory'){ echo "active"; }?>"><a href="<?php echo site_url()?>/Payment/subAdminCoinsHistory"><i class="fa fa-circle-o"></i>Recharge History</a></li>

              </ul>
        </li> -->



                    
                 <?php if(!!$admin['role'] == '0'){?>
                    <li class="header">CMS MANAGEMENT</li>
                    <li
                        class="<?php if($active == 'manageTermsCondition' || $active == 'managePrivacyPolicy' || $active == 'manageAboutUs'){ echo "active"; }?> treeview">
                        <a href="#">
                            <i class="fa fa-shield"></i> <span>Terms & Condition</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="<?php if($active == 'manageTermsCondition'){ echo "active"; }?>"><a href="<?php echo site_url()?>/Admin/manageTermsCondition"><i class="fa fa-circle-o"></i>manageTermsCondition</a></li>
                            
                            <li class="<?php if($active == 'managePrivacyPolicy'){ echo "active"; }?>"><a href="<?php echo site_url()?>/Admin/managePrivacyPolicy"><i class="fa fa-circle-o"></i>managePrivacyPolicy</a></li>
                            
                            <li class="<?php if($active == 'manageAboutUs'){ echo "active"; }?>"><a href="<?php echo site_url()?>/Admin/manageAboutUs"><i class="fa fa-circle-o"></i>manageAboutUs</a></li>
                          
                            <!-- <li class="<?php if($active == 'problemReport'){ echo "active"; }?>"><a href="<?php echo site_url()?>/Report/problemReport"><i class="fa fa-circle-o"></i>Problem Report</a></li> -->
                            <!-- <li class="<?php if($active == 'userReport'){ echo "active"; }?>"><a
                                    href="<?php echo site_url()?>/Report/problemReport"><i
                                        class="fa fa-circle-o"></i>UserProblem Report</a></li>
                            <li class="<?php if($active == 'userReport'){ echo "active"; }?>"><a
                                    href="<?php echo site_url()?>/Report/userProblem"><i class="fa fa-circle-o"></i>User
                                    video Report</a></li> -->


                        </ul>
                    </li>
                    
                    <li
                        class="<?php if($active == 'onlineSerQue' || $active == 'onlineSerAns' || $active == 'problemReport' || $active == 'userReport' || $active == 'reportAction'){ echo "active"; }?> treeview">
                        <a href="#">
                            <i class="fa fa-book"></i> <span>Online Services Details</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="<?php if($active == 'onlineSerQue'){ echo "active"; }?>"><a href="<?php echo site_url()?>/Report/manageOnlineServiceQuestions"><i class="fa fa-circle-o"></i>Online Services Questions</a></li>
                            
                            <li class="<?php if($active == 'onlineSerAns'){ echo "active"; }?>"><a href="<?php echo site_url()?>/Report/manageOnlineServiceAnswers"><i class="fa fa-circle-o"></i>Online Services Answers</a></li>
                        </ul>
                    </li>
                
                    <?php
                 }
                 ?>

                    <li class="header">ADMIN ACCOUNT</li>
                    <li class="<?php if($active == 'change_logo_favIcon'){ echo "active"; }?>"><a
                            href="<?php echo site_url()?>/admin/change_logo_favIcon"><i class="fa fa-font-awesome"></i>Logo</a>
                    </li>
                    <li class="<?php if($active == 'edit_profile'){ echo "active"; }?>"><a
                            href="<?php echo site_url()?>/admin/edit_profile"><i class="fa fa-diamond"></i>Account</a>
                    </li>

                  
                    <!--<li-->
                    <!--    class="<?php if($active == 'settings' || $active == 'logo' || $active == 'length' || $active == 'splash'){ echo "active"; }?> treeview">-->
                    <!--    <a href="#">-->
                    <!--        <i class="fa fa-cog" aria-hidden="true"></i> <span>Settings</span>-->
                    <!--        <span class="pull-right-container">-->
                    <!--            <i class="fa fa-angle-left pull-right"></i>-->
                    <!--        </span>-->
                    <!--    </a>-->
                    <!--    <ul class="treeview-menu">-->
                    <!--        <li class="<?php if($active == 'logo'){ echo "active"; }?>"><a-->
                    <!--                href="<?php echo site_url()?>/Settings/logo"><i class="fa fa-circle-o"></i>Logo</a>-->
                    <!--        </li>-->
                    <!--        <li class="<?php if($active == 'length'){ echo "active"; }?>"><a-->
                    <!--                href="<?php echo site_url()?>/Settings/length"><i-->
                    <!--                    class="fa fa-circle-o"></i>Description Length</a></li>-->
                    <!--        <li class="<?php if($active == 'splash'){ echo "active"; }?>"><a-->
                    <!--                href="<?php echo site_url()?>/Settings/splash"><i class="fa fa-circle-o"></i>Splash-->
                    <!--                Image</a></li>-->
                    <!--    </ul>-->
                    <!--</li>-->
                 
                    <li class=""><a href="<?php echo site_url()?>/admin/logout"><i class="fa fa-sign-out"></i>SignOut</a></li>
                    
                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>
        
        
        
        
        
        
          
               