<?php if($this->session->flashdata('success')){ ?>
toastr.success("<?php echo $this->session->flashdata('success'); ?>");
<?php }else if($this->session->flashdata('error')){  ?>
toastr.error("<?php echo $this->session->flashdata('error'); ?>");
<?php }else if($this->session->flashdata('warning')){  ?>
toastr.warning("<?php echo $this->session->flashdata('warning'); ?>");
<?php }else if($this->session->flashdata('info')){  ?>
toastr.info("<?php echo $this->session->flashdata('info'); ?>");
<?php } ?>

<style>
.switch {
    position: relative;
    display: inline-block;
    width: 60px;
    height: 34px;
    margin-bottom: 40%;
}

.switch input {
    opacity: 0;
    width: 0;
    height: 0;
}

.slider {
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #ccc;
    -webkit-transition: .4s;
    transition: .4s;
}

.slider:before {
    position: absolute;
    content: "";
    height: 26px;
    width: 26px;
    left: 4px;
    bottom: 4px;
    background-color: white;
    -webkit-transition: .4s;
    transition: .4s;
}

input:checked+.slider {
    background-color: #2196F3;
}

input:focus+.slider {
    box-shadow: 0 0 1px #2196F3;
}

input:checked+.slider:before {
    -webkit-transform: translateX(26px);
    -ms-transform: translateX(26px);
    transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
    border-radius: 34px;
}

.slider.round:before {
    border-radius: 50%;
}
</style>
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            <?= $title;?>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo site_url();?>/admin/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="<?php echo site_url();?>/subAdmin/manage">Manage Sub Admin</a></li>
            <li class="active"><?= $title;?></li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-10">
                <form role="form" method="post" id="specialitiesForm" enctype="multipart/form-data">
                    <div class="box box-warning">
                        <div class="box-header with-border" style="display: flex;">
                            <img src="<?php echo $details['image'];?>"
                                style="width: 60px;height: 60px;border-radius: 50%;">
                            <div style="margin-left: 15px;font-size: 20px;"><?php echo $details['username']?></div>
                        </div>
                        <div class="box-body">

                            <div role="tabpanel" style="background-color: #fff;" class="tab-pane active" id="track">
                                <ul style="padding: 0;margin: 0;">
                                    <div class="col-md-6">
                                        <li>
                                            <a href="#">Ban / Unban</a>

                                            <span>

                                                <label class="switch">
                                                    <input value="<?=$details['banUnban']?>" type="checkbox"
                                                        name="banUnban" <?php
                                                        if($details['banUnban'] == 1){echo "checked";} ?>>
                                                    <span class="slider round"></span>
                                                </label>

                                            </span>
                                        </li>
                                        <li>
                                            <a href="#">Kick</a>

                                            <span>
                                                <label class="switch">
                                                    <input value="<?=$details['kick']?>" type="checkbox" name="kick" <?php
                                                        if($details['kick'] == 1){echo "checked";} ?>>
                                                    <span class="slider round"></span>

                                                </label>
                                            </span>
                                        </li>
                                        <li>
                                            <a href="#">Agency Ban</a>

                                            <span>
                                                <label class="switch">
                                                    <input value="<?=$details['agencyBan']?>" type="checkbox"
                                                        name="agencyBan" <?php
                                                        if($details['agencyBan'] == 1){echo "checked";} ?>>
                                                    <span class="slider round"></span>
                                                </label>
                                            </span>
                                        </li>

                                    </div>
                                    <div class="col-md-6">
                                        <li>
                                            <a href="#">Mute</a>

                                            <span>
                                                <label class="switch">
                                                    <input value="<?=$details['antikick_block_mute']?>" type="checkbox"
                                                        name="antikick_block_mute" <?php
                                                        if($details['antikick_block_mute'] == 1){echo "checked";} ?>>
                                                    <span class="slider round"></span>
                                                </label>
                                            </span>
                                        </li>
                                        <li>
                                            <a href="#">Screenshot & Recording</a>

                                            <span><label class="switch">
                                                    <input value="<?=$details['screen_shot_and_recording']?>"
                                                        type="checkbox" name="screen_shot_and_recording"
                                                        <?php
                                                        if($details['screen_shot_and_recording'] == 1){echo "checked";} ?>>
                                                    <span class="slider round"></span>
                                                </label></span>
                                        </li>
                                        <li>
                                            <a href="#">DP Approve</a>

                                            <span><label class="switch">
                                                    <input value="<?=$details['dp_approve']?>" type="checkbox"
                                                        name="dp_approve" <?php
                                                        if($details['dp_approve'] == 1){echo "checked";} ?>>
                                                    <span class="slider round"></span>
                                                </label></span>
                                        </li>
                                    </div>
                                    <br><br>
                                    <input type="hidden" value="<?php echo $details['id']?>" name="id">
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-success pull-right" name="submit"
                                            value="Submit">
                                    </div>
                                </ul>
                            </div>



                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-1">
            </div>
        </div>
    </section>
</div>