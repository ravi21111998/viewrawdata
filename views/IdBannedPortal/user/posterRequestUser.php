<?php

if(empty($details)){
    redirect(site_url().'/User/posterImage');
}

?>

<style>
.btns {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 600px;
}

.label-success {
    animation: blinker 3s linear infinite;
}

.btn {
    padding: 17px 60px !important;
}

.btn-danger {

    margin-top: 30px !important;
}

.btn-success {
    background-image: linear-gradient(to right, #4340d9d9 50%, #aa2bd4) !important;
}

@keyframes blinker {
    30% {
        opacity: 0;
    }
}
</style>
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            <?= $title;?>
        </h1>

        <?php if($this->session->flashdata('success')){ ?>
        <div class="success-message">
            <script>
            swal("Good job!", "<?= $this->session->flashdata('success')?>!", "success")
            </script>
        </div>

        <?php }?>

        <?php if($this->session->flashdata('error')){ ?>
        <div class="success-message">
            <script>
            swal("Oops!", "<?= $this->session->flashdata('error')?>!", "error")
            </script>
        </div>

        <?php }?>
        <ol class="breadcrumb">
            <li><a href="<?php echo site_url();?>/admin/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="<?php echo site_url();?>/User/manage">Manage User</a></li>
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
                            <?php if(!empty($details['image'])){?>
                            <img src="<?php echo $details['image'];?>"
                                style="width: 60px;height: 60px;border-radius: 50%;">
                            <?php } else{ ?>
                            <img src="<?php echo base_url()?>uploads/no_image_available.png"
                                style="width: 60px;height: 60px;border-radius: 50%;">
                            <?php } ?>

                            <div style="margin-left: 15px;font-size: 20px;"><?php echo $details['username']?></div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <img src="<?=$details['image'];?>" alt="" height="600px" width="600px">
                            </div>
                            <div class="col-lg-6 btns">
                                <center>
                                    <form action=""></form>
                                    <form action="<?=site_url()?>/user/approvePosterImage" method="post">
                                        <input hidden name="id" type="text" value="<?=$details['id']?>">
                                        <input type="submit" value="ACCEPT" class="btn btn-success"> <br>
                                    </form>

                                    <form action=""></form>
                                    <form action="<?=site_url()?>/user/rejectPosterImage" method="post">
                                        <input hidden name="id" type="text" value="<?=$details['id']?>">
                                        <input type="submit" value="REJECT" class="btn btn-danger my-4">

                                    </form>
                                </center>
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

<script type="text/javascript">
function liveHotlistAddRemove(id) {
    var userId = id;
    var status = $("#liveHotlistAddRemoveData").val();
    $.ajax({
        type: 'post',
        url: "<?php echo site_url();?>/User/updateLiveHotlistStatus",
        data: {
            userId: userId,
            status: status
        },
        success: function(result) {
            if (result == 1) {
                swal({
                    title: "Good job!",
                    text: "Live Hotlist Add/Remove status updated successfully!",
                    icon: "success",
                });
            } else {
                swal({
                    title: "OOPS!",
                    text: "Please try after some time!",
                    icon: "error",
                });
            }
        }
    });
}

function hotlistAddRemove(id) {
    var userId = id;
    var status = $("#hotlistAddRemoveData").val();
    $.ajax({
        type: 'post',
        url: "<?php echo site_url();?>/User/updateHotlistStatus",
        data: {
            userId: userId,
            status: status
        },
        success: function(result) {
            if (result == 1) {
                swal({
                    title: "Good job!",
                    text: "Video Hotlist Add/Remove status updated successfully!",
                    icon: "success",
                });
            } else {
                swal({
                    title: "OOPS!",
                    text: "Please try after some time!",
                    icon: "error",
                });
            }
        }
    });
}

function popular(id) {
    var userId = id;
    var status = $("#pp").val();
    $.ajax({
        type: 'post',
        url: "<?php echo site_url();?>/User/userStatus",
        data: {
            userId: userId,
            status: status
        },
        success: function(result) {

            if (result == 1) {
                alert("status updated successfully");
            } else {
                alert("status not updated");
            }
        }
    });
}
</script>

<script type="text/javascript">
function deviceBlockUnBlock(id) {
    var userId = id;
    var status = $("#deviceBlockUnBlockData").val();
    var deviceId = '<?php echo $details['deviceId']?>';
    $.ajax({
        type: 'post',
        url: "<?php echo site_url();?>/User/banDeviceId",
        data: {
            userId: userId,
            status: status,
            deviceId: deviceId
        },
        success: function(result) {
            if (result == 1) {
                swal({
                    title: "Good job!",
                    text: "DeviceId Ban/Unban status updated successfully!",
                    icon: "success",
                });
            } else {
                swal({
                    title: "OOPS!",
                    text: "Please try after some time!",
                    icon: "error",
                });
            }
        }
    });
}

function crownUpdate(id) {
    var userId = id;
    var status = $("#crownStatusUpdate").val();
    $.ajax({
        type: 'post',
        url: "<?php echo site_url();?>/User/crownStatusUpdate",
        data: {
            userId: userId,
            status: status
        },
        success: function(result) {
            if (result == 1) {
                swal({
                    title: "Good job!",
                    text: "Crown status updated successfully!",
                    icon: "success",
                });
            } else {
                swal({
                    title: "OOPS!",
                    text: "Please try after some time!",
                    icon: "error",
                });
            }
        }
    });
}


function userIdBanUnban(id) {
    var userId = id;
    var status = $("#userIdBanUnbanData").val();
    $.ajax({
        type: 'post',
        url: "<?php echo site_url();?>/User/updateUserIdBanUnbanStatus",
        data: {
            userId: userId,
            status: status
        },
        success: function(result) {
            if (result == 1) {
                swal({
                    title: "Good job!",
                    text: "UserId Ban/Unban status updated successfully!",
                    icon: "success",
                });
            } else {
                swal({
                    title: "OOPS!",
                    text: "Please try after some time!",
                    icon: "error",
                });
            }
        }
    });
}


function edit(id) {
    var userId = id;
    var status = $("#ban").val();


    $.ajax({
        type: 'post',
        url: "<?php echo site_url();?>/User/userCondition",
        data: {
            userId: userId,
            status: status
        },
        success: function(result) {

            if (result == 1) {
                alert("status updated successfully");
            } else {
                alert("status not updated");
            }
        }
    });
}
</script>