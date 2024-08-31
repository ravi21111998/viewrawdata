<style>
.dummyImage {
    width: 128px !important;
    height: 128px !important;
}
</style>

<?php if($this->session->flashdata('error')){ ?>
<div class="error-message">
    <script>
    swal("Oops!", "<?= $this->session->flashdata('error')?>!", "error")
    </script>
</div>
<?php } ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Dashboard
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo site_url('admin-dashbord')?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Info boxes -->
        <div class="row">
            <?php
         //   if($admin['role'] == '0' || $admin['assignRole'] == 'MONITOR SUBADMIN'){ 
            ?>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box"
                    style="  background-image: linear-gradient(to right, #4340d9d9 50%, #aa2bd4) !important;color: #fff;">
                    <span class="info-box-icon"><i class="fa fa-user"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text"><b>Total User</b></span>
                        <span class="info-box-number">
                            <?php
                             echo $count;
                              ?></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <?php
            // }if($admin['assignRole'] == 'SUBADMIN' || $admin['role'] == '0' || $admin['assignRole'] == 'MONITOR SUBADMIN'){
            ?>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box"
                    style="  background-image: linear-gradient(to right, #4340d9d9 50%, #aa2bd4) !important;;color: #fff;">
                    <span class="info-box-icon"><i class="fa fa-user"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text"><b>Total Approved Host</b></span>
                        <span class="info-box-number">0<?php
                        //  echo $approved_host; 
                         ?></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box" style="background: #058d9e;color: #fff;">
                    <span class="info-box-icon"><i class="fa fa-user"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text"><b>Total Pending Host</b></span>
                        <span class="info-box-number">0<?php
                        //  echo $pending_host;
                          ?></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <?php
          // }if($admin['assignRole'] == 'SUBADMIN' || $admin['role'] == '0' || $admin['assignRole'] == 'MONITOR SUBADMIN'){
            ?>
            <div class="col-md-3 col-sm-6 col-xs-12">

                <div class="info-box"
                    style="  background-image: linear-gradient(to right, #4340d9d9 50%, #aa2bd4) !important;color: #fff;">
                    <span class="info-box-icon"><i class="fa fa-user"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text"><b>Total Rejected Host</b></span>
                        <span class="info-box-number">0<?php 
                        // echo $rejected_host; 
                        ?></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>


            <?php

         // }if($admin['assignRole'] == 'AGENCY SUBADMIN'){
            ?>

            <!-- /.col -->
            <div class="clearfix visible-sm-block"></div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box"
                    style="  background-image: linear-gradient(to right, #4340d9d9 50%, #aa2bd4) !important;color: #fff;">
                    <span class="info-box-icon"><i class="fa fa-user"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text"><b>Total Pending Agency</b></span>

                        <span class="info-box-number">0<?php
                        //  echo $pending_agency;
                          ?></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>

            <div class="clearfix visible-sm-block"></div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box" style="background: #06690d;color: #fff;">
                    <span class="info-box-icon"><i class="fa fa-user"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text"><b>Total Approve Agency</b></span>
                        <span class="info-box-number">0<?php
                        //  echo $approve_agency; 
                         ?></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>

            <div class="clearfix visible-sm-block"></div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box" style="background: #06690d;color: #fff;">
                    <span class="info-box-icon"><i class="fa fa-user"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text"><b>Total Rejected Agency</b></span>
                        <span class="info-box-number">0<?php
                        //  echo $rejected_agency;
                          ?></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>


            <div class="clearfix visible-sm-block"></div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box" style="background: #06690d;color: #fff;">
                    <span class="info-box-icon"><i class="fa fa-user"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text"><b>Total Coins</b></span>
                        <span class="info-box-number">0<?php 
                        // echo $subAdminCoins['totalCoins']; 
                        ?></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <?php
            // }if($admin['assignRole'] == 'ADMIN'){
            ?>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box" style="background: #06690d;color: #fff;">
                    <span class="info-box-icon"><i class="fa fa-user"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text"><b>Total SubAdmin</b></span>
                        <span class="info-box-number">0<?php 
                        // echo $subadmin;
                        ?></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>


            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box" style="background: #058d9e;color: #fff;">
                    <span class="info-box-icon"><i class="fa fa-user"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text"><b>Total Coin Balance</b></span>
                        <span class="info-box-number">0<?php 
                        // echo $coins['totalCoins']; 
                        ?></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box" style="background: #c72a16;color: #fff;">
                    <span class="info-box-icon"><i class="fa fa-user"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text"><b>Total Send Coins</b></span>
                        <span class="info-box-number">0<?php
                        //  echo $sendCoins['coins']; 
                         ?></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <?php
            // }
            ?>

            <!-- fix for small devices only -->

            <!-- /.col -->

        </div>
        <!-- /.row -->







        <!--graphs-->
        <?php 
        // if($admin['role'] == 'subAdmin'){ 
            ?>
        <!-- style="display:none"  -->
        <?php
            //  } 
             ?>
       
        <!-- /.row (main row) -->

        <div class="row m-5">
            <form action="" method="post" class="form-horizontal">
                <a class="btn btn-primary w-50 m-5" href="<?=base_url()?>index.php/admin/newSeason">Start New Season</a>
            </form>
        </div>



        <!-- Main row -->
        <div class="row">
            <!-- Left col -->
            <div class="col-md-12">
                <!-- MAP & BOX PANE -->

                <div class="row">

                    <div class="col-md-12">
                        <div class="box box-danger">
                            <div class="box-header with-border">
                                <h3 class="box-title">Latest Members</h3>

                                <div class="box-tools pull-right">
                                    <span class="label label-danger">8 New Members</span>
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                            class="fa fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                                            class="fa fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="box-body no-padding">
                                <ul class="users-list clearfix">
                                    <?php foreach($topEagUser as $topEagUsers){?>
                                    <li>
                                        <?php if(empty($topEagUsers['image'])){?>
                                        <img class="dummyImage" src="<?php echo base_url()?>/uploads/dummy.png"
                                            alt="User Image">
                                        <?php } else{
                          $url = $topEagUsers['image'];

                          if (filter_var($url, FILTER_VALIDATE_URL)) { ?>
                                        <img class="dummyImage" src="<?php echo $topEagUsers['image'];?>"
                                            alt="User Image">
                                        <?php } else { ?>
                                        <img class="dummyImage" src="<?php echo base_url().$topEagUsers['image'];?>"
                                            alt="User Image">
                                        <?php } }

                        ?>

                                        <a class="users-list-name"
                                            href="<?php echo site_url()?>/User/view/<?php echo $topEagUsers['id']?>"><?php echo $topEagUsers['username']?></a>
                                        <span class="users-list-date">
                                            <?php
                                             echo $topEagUsers['created_at'];
                          		// $originalDate = $topEagUsers['created'];
								// echo date("d M", strtotime($originalDate));
                          	?>
                                        </span>
                                    </li>
                                    <?php }?>
                                </ul>
                            </div>
                            <div class="box-footer text-center">
                                <a href="<?php echo base_url('admin-userList')?>" class="uppercase">View All Users</a>
                            </div>
                        </div>
                    </div>
                </div>

               
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->


<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
<script>
$(function() {


    var dates = [];
    for (var i = 29; i >= 0; i--) {
        var current = new Date();
        current.setDate(current.getDate() - i);
        dates.push(current.toDateString());
    }





    var ctx = document.getElementById('myChart').getContext('2d');

    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: dates,
            datasets: [{
                fill: 'origin',
                label: 'User\'s joined in last 30 days',
                data: [<?php echo $chartUserCount;?>],
                backgroundColor: '#69cd3c',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });

    $("#myChart").click(function(evt) {

        var firstPoint = myChart.getElementAtEvent(evt)[0];

        if (firstPoint) {
            var label = new Date(myChart.data.labels[firstPoint._index]);
            // var value = myChart.data.datasets[firstPoint._datasetIndex].data[firstPoint._index];
            var date = label.getFullYear() + "-" + (parseInt(label.getMonth()) + 1) + "-" + label
                .getDate();



            window.location.href = "<?php echo site_url()."/user/graphResult/"?>" + date;
        }

    });

    // follow chart


    var follow = document.getElementById('follow_chart').getContext('2d');

    var follow_chart = new Chart(follow, {
        type: 'bar',
        data: {
            labels: ['<?php echo $labels; ?>'],
            datasets: [{
                label: 'user\'s following',
                data: [<?php echo $datasets; ?>],
                backgroundColor: '#4633FF',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });

    $("#follow_chart").click(function(evt) {

        var follow_firstPoint = follow_chart.getElementAtEvent(evt)[0];

        if (follow_firstPoint) {
            let follow_label = follow_chart.data.labels[follow_firstPoint._index];
            let sliced = follow_label.slice(1);

            window.location.href = "<?php echo site_url()."/user/followGraph/"; ?>" + sliced;
        }

    });

    // blockeduser chart


    var block = document.getElementById('block_chart').getContext('2d');

    var block_chart = new Chart(block, {
        type: 'bar',
        data: {
            labels: ['<?php echo $block_labels; ?>'],
            datasets: [{
                label: 'user\'s blocked',
                data: [<?php echo $block_datasets; ?>],
                backgroundColor: '#4633FF',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });

    $("#block_chart").click(function(evt) {

        var block_firstPoint = block_chart.getElementAtEvent(evt)[0];

        if (block_firstPoint) {
            let block_label = block_chart.data.labels[block_firstPoint._index];
            let sliced = block_label.slice(1);

            window.location.href = "<?php echo site_url()."/user/blockGraph/"; ?>" + sliced;
        }

    });


    // most viewed video graph



    //most liked video graph


    var liked = document.getElementById("like_video").getContext('2d');

    var likeVideo = new Chart(liked, {
        type: 'bar',
        data: {
            labels: ['<?php echo $like_labels; ?>'],
            datasets: [{
                label: 'Video likes',
                data: [<?php echo $like_datasets; ?>],
                backgroundColor: '#1F91F0',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });

    $("#like_video").click(function(evt) {
        var like_first = likeVideo.getElementAtEvent(evt)[0];
        if (like_first) {
            let like_label = likeVideo.data.labels[like_first._index];
            window.location.href = "<?php echo site_url()."/videos/video_likes_graph/"; ?>" +
                like_label;
        }
    });


    // graph for most commented video


    var comment = document.getElementById("comment_video").getContext('2d');

    var commentVideo = new Chart(comment, {
        type: 'bar',
        data: {
            labels: ['<?php echo $comment_labels; ?>'],
            datasets: [{
                label: 'Video Comments',
                data: [<?php echo $comment_datasets; ?>],
                backgroundColor: '#6a5acd',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });

    $("#comment_video").click(function(evt) {
        var comment_first = commentVideo.getElementAtEvent(evt)[0];
        if (comment_first) {
            let comment_label = commentVideo.data.labels[comment_first._index];
            window.location.href = "<?php echo site_url()."/videos/video_comment_graph/"; ?>" +
                comment_label;
        }
    });




    //   most uploaded videos


    var upload = document.getElementById("upload_video").getContext('2d');

    var uploadVideo = new Chart(upload, {
        type: 'bar',
        data: {
            labels: ['<?php echo $upload_labels; ?>'],
            datasets: [{
                label: 'Video\'s uploaded',
                data: [<?php echo $upload_datasets; ?>],
                backgroundColor: '#6a5acd',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });

    $("#upload_video").click(function(evt) {
        var upload_first = uploadVideo.getElementAtEvent(evt)[0];
        if (upload_first) {
            let upload_label = uploadVideo.data.labels[upload_first._index];
            let upload_sliced = upload_label.slice(1);
            window.location.href = "<?php echo site_url()."/videos/video_upload_graph/"; ?>" +
                upload_sliced;
        }
    });
});
</script>