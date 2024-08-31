<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            User Profile
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo site_url();?>/AgencyPanel/mainDash"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">User profile</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-md-3">

                <!-- Profile Image -->
                <div class="box box-primary">
                    <div class="box-body box-profile">

                        <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url().$admin['image'];?>"
                            alt="User profile picture">

                        <h3 class="profile-username text-center"><?php echo $admin['agencyName']?></h3>

                        <!--<p class="text-muted text-center"><?php echo $admin['designation']?></p>-->
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

                <!-- About Me Box -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">About Me</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <strong><i class="fa fa-phone margin-r-5"></i> Phone Number</strong>

                        <p class="text-muted">
                            <?php echo $admin['phone']?>
                        </p>

                        <hr>

                        <strong><i class="fa fa-envelope margin-r-5"></i> Email</strong>

                        <p class="text-muted">
                            <?php echo $admin['email']?>
                        </p>

                        <hr>

                        <!--<strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>-->

                        <p class="text-muted"><?php echo $admin['country']?></p>

                        <!--<hr>-->

                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
            <div class="col-md-9">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="<?php if($activeTab == 'profile'){ echo "active"; }?>"><a href="#settings"
                                data-toggle="tab">Settings</a></li>
                        <li class="<?php if($activeTab == 'changePass'){ echo "active"; }?>"><a href="#changePassword"
                                data-toggle="tab">Change Password</a></li>
                    </ul>
                    <div class="tab-content">
                        <?php if($this->session->flashdata('success')){ ?><div class="form-error">
                            <script>
                            swal("Good job!", "Mail Successfully sand....", "success");
                            </script>
                        </div><?php }?>
                        <?php if($this->session->flashdata('erorr')){ ?><div class="form-error">
                            <script>
                            swal("warning", "Email sending failed.", "erorr");
                            </script>
                        </div><?php }?>
                        <div class="<?php if($activeTab == 'profile'){ echo "active"; }?> tab-pane" id="settings">
                            <form class="form-horizontal" method="post" enctype='multipart/form-data'>
                                <div class="form-group">
                                    <label for="inputName" class="col-sm-2 control-label">Agency Name</label>

                                    <div class="col-sm-10">
                                        <input  type="text" name="name"
                                            value="<?php echo $admin['agencyName']?>" class="form-control"
                                            id="inputName" placeholder="Name" readonly>
                                        <div class="form-error1"><?php echo form_error('name') ?></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputName" class="col-sm-2 control-label">Agency Code</label>

                                    <div class="col-sm-10">
                                        <input  type="text" name="agencyCode"
                                            value="<?php echo $admin['agencyCode']?>" class="form-control"
                                            id="inputName" placeholder="agencyCode" readonly>
                                        <div class="form-error1"><?php echo form_error('agencyCode') ?></div>
                                    </div>
                                </div>
                                <!-- <div class="form-group">
                                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                                    <div class="col-sm-10">
                                        <input  type="text" name="email" value="<?php echo $admin['email']?>"
                                            class="form-control" id="inputEmail" placeholder="Email" readonly>
                                        <div class="form-error1"><?php echo form_error('email') ?></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputName" class="col-sm-2 control-label">Phone Number</label>

                                    <div class="col-sm-10">
                                        <input  type="number" name="phone" value="<?php echo $admin['phone']?>"
                                            class="form-control" id="inputName" placeholder="Phone Number" readonly>
                                        <div class="form-error1"><?php echo form_error('phone') ?></div>
                                    </div>
                                </div> -->
                                <input type="hidden" value="profile" name="type">
                                
                                <div class="form-group">
                                    <label for="inputName" class="col-sm-2 control-label">Email </label>
                                    <div class="col-sm-10">
                                        <input  type="text" name="shearEmail" class="form-control" placeholder="Enter Email">
                                        <input  type="hidden" name="aCode" class="form-control" value="<?php echo $admin['agencyCode']?>">
                                        <input  type="hidden" name="aPass" class="form-control" value="<?php echo $admin['viewPassword']?>">
                                        <div class="form-error1"><?php echo form_error('email') ?></div>
                                    </div>
                                </div>
                                <div class="form-group mt-2">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <input type="submit" name="submit" id="shearLinkBtn" class="btn btn-success" value="Shear to Email">
                                        <button type="button" class="btn btn-success text-light"><a style="text-decoration:none; color:#fff;" href="whatsapp://send?text=Agency link : https://xrdsimulators.tech/wow_project/index.php/AgencyPanel , username : <?= $admin['agencyCode'] ?> and password : <?= $admin['viewPassword'] ?>" data-action="share/whatsapp/share"  target="_blank"> Share to WhatsApp </a></button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="<?php if($activeTab == 'changePass'){ echo "active"; }?> tab-pane"
                            id="changePassword">
                            <?php if($this->session->flashdata('oldPass')){ ?><div class="form-error">
                                <script>
                                swal("OOPS!", "Old Password Does't Match!", "error")
                                </script>
                            </div><?php }?>
                            <?php if($this->session->flashdata('passSuccess')){ ?><div class="form-error">
                                <script>
                                swal("Good job!", "Password Update Successfully!", "success")
                                </script>
                            </div><?php }?>
                            <form class="form-horizontal" method="post">
                                <div class="form-group">
                                    <label for="inputName" class="col-sm-2 control-label">Old Password</label>

                                    <div class="col-sm-10">
                                        <input type="password" name="oldPassword"
                                            value="<?php echo set_value('oldPassword') ?>" class="form-control"
                                            id="inputName" placeholder="Old Password">
                                        <div class="form-error1"><?php echo form_error('oldPassword') ?></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail" class="col-sm-2 control-label">New Password</label>

                                    <div class="col-sm-10">
                                        <input type="password" name="newPassword"
                                            value="<?php echo set_value('newPassword') ?>" class="form-control"
                                            id="inputEmail" placeholder="New Password">
                                        <div class="form-error1"><?php echo form_error('newPassword') ?></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputName" class="col-sm-2 control-label">Confirm Password</label>

                                    <div class="col-sm-10">
                                        <input type="password" name="confirmPassword"
                                            value="<?php echo set_value('confirmPassword') ?>" class="form-control"
                                            id="inputName" placeholder="Confirm Password">
                                        <div class="form-error1"><?php echo form_error('confirmPassword') ?></div>
                                    </div>
                                </div>
                                <input type="hidden" value="pass" name="type">
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <input type="submit" class="btn btn-success" value="Update Password">
                                    </div>
                                </div>
                            </form>
                        </div>

                        <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->
                </div>
                <!-- /.nav-tabs-custom -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

    </section>
    <!-- /.content -->
</div>