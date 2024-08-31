<style>
.info_wrapp img {
    width: 100%;
    max-width: 250px;
}

.info_wrapp .col-6 {
    width: 50%;
    float: left;
    padding: 10px;
}

.info_wrapp a {
    color: #000;
    font-size: 18px;
    text-transform: capitalize;
    text-align: center;
    display: block;
    border-bottom: 2px solid #eeeeee;
}

.info_wrapp img {
    width: 100%;
    max-width: 300px;
    margin: auto;
    display: block;
    margin-top: 20px;
    margin-bottom: 50px;
}
</style>


<div class="content-wrapper">
    <section class="content-header">
        <h1>
            <?= $title;?>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo site_url();?>/admin/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="<?php echo site_url().$backFunction;?>"><?php echo $backTitle?></a></li>
            <li class="active"><?= $title;?></li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-10">
                <div class="box box-warning">
                    <div class="box-header with-border">

                    </div>
                    <div class="box-body">

                        <div role="tabpanel" style="background-color: #fff;" class="tab-pane active" id="track">
                            <ul style="padding: 0;margin: 0;">
                                <div class="col-md-6">
                                    <li>
                                        <a href="#">Username</a>
                                        <span><?php echo $view['name']?></span>
                                    </li>
                                    <li>
                                        <a href="#">Family Name</a>
                                        <span><?php echo $view['familyName']?></span>
                                    </li>
                                    <li>
                                        <a href="#">Family Description</a>
                                        <span><?php echo $view['description']?></span>
                                    </li>
                                    <li>
                                        <a href="<?= site_url()?>/Admin/ViewFamilyMembers/<?= $view['id'];?>/1">Members</a>
                                        <span><?php echo $view['members']?></span>
                                    </li>
                                     
                               
                                </div>

                                <div class="col-md-6">
                               
                                    <li>
                                        <a href="#">Status</a>
                                        <?php if($view['status'] == '0'){?>
                                        <span class="label label-info">Pending</span>
                                        <?php } elseif($view['status'] == '1'){?>
                                        <span class="label label-success">Approved</span>
                                        <?php } else{?>
                                        <span class="label label-danger">Rejected</span>
                                        <?php }?>
                                    </li>
                                    
                                    <li>
                                        <a href="#">UniqueId</a>
                                        <span><?php echo $view['username']?></span>
                                    </li>

                                    <?php 
                                    if($view['status'] == 0)
                                    {?>
 
                                    <li style="border-bottom: none; margin-top: 50px;"><a href="#" style="color: #f39b12;font-size: 15px;">Update Family Status</a> </li>
                                        <li style="border-bottom: none;padding-top: 0px;">
                                            <select name="status" class="col-md-12 form-control" id="userIdBanUnbanData"
                                                style="border: 2px solid #f39b127a;"
                                                onchange="userIdBanUnban(<?php  echo $view['id'];?>)">
                                                <option disabled selected>Select User Status</option>
                                                <option value="0"
                                                    <?php if($view['status'] == 0){ echo "selected"; } ?>>Pending
                                                </option>
                                                <option value="1"
                                                    <?php if($view['status'] == 1){ echo "selected"; } ?>>Approve
                                                </option>
                                                <option value="2"
                                                    <?php if($view['status'] == 2){ echo "selected"; } ?>>Reject
                                                </option>

                                            </select>
                                    </li>

                                    <?php
                                }?>
               
                                </div>
                                


                                
                        </div>

                        </ul>
                    </div>

                </div>
            </div>

        </div>
        <div class="col-md-1">
        </div>
</div>
</section>
</div>

<script type="text/javascript">
function popular(id) {
    var userId = id;
    var status = $("#pp").val();
    // alert(status);
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

function popular1(id) {

    var userId = id;
    var status = $("#crown").val();
    // alert(status);
    $.ajax({
        type: 'post',
        url: "<?php echo site_url();?>/User/userStatus1",
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

function popular2(id) {
    var userId = id;
    var status = $('#live').val();
    // alert(status);
    $.ajax({
        type: 'post',
        url: '<?php echo site_url();?>/User/userStatus2',
        data: {
            userId: userId,
            status: status
        },
        success: function(data) {

            if (data == 1) {
                alert("status updated successfully");
            } else {
                alert("status not updated");
            }

        }
    });
}

function userIdBanUnban(id) {
    var userId = id;
    var status = $("#userIdBanUnbanData").val();
    $.ajax({
        type: 'post',
        url: "<?php echo site_url();?>/Admin/familyStatusUpdate",
        data: {
            userId: userId,
            status: status
        },
        success: function(result) {
            if (result == 1) {
                swal({
                    title: "Good job!",
                    text: "Family Approve/Reject status updated successfully!",
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
        url: "<?php echo site_url();?>/User/updateBanUnbanStatus",
        data: {
            userId: userId,
            status: status
        },
        success: function(result) {
            if (result == 1) {
                swal({
                    title: "Good job!",
                    text: "Host ban/Unban status updated successfully!",
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
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$("#approveUser").change(function() {
    var status = $("#approveUser").val();
    //	  alert(status);
    if (status == 2) {
        $("#AgnecyCode").show(1500);
    } else {
        $("#AgnecyCode").hide(1500);
    }


});
</script>