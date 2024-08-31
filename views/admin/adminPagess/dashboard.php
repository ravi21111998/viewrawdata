<style>
  .dummyImage {
    width: 128px !important;
    height: 128px !important;
}
  </style>
  

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <?php if($this->session->flashdata('error')){ ?>
    <div class="error-message">
      <script> swal("Oops!", "<?= $this->session->flashdata('error')?>!", "error") </script>  
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
        <li><a href="<?php echo site_url()?>/admin/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
 
    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
          <?php
          if($admin['role'] == '0'){ ?>
          <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box" style="background: #52BE80;color: #fff;">
            <span class="info-box-icon"><i class="fa-solid fa-users"></i></span>

            <div class="info-box-content">
              <span class="info-box-text"><b>Total Users</b></span>
              <span class="info-box-number"><?php echo $user; ?></span>
            </div>
 
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <?php
          }
          ?>
          
          <?php
          if($admin['role'] == '0'){ ?>
        
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box" style="background: #3498DB;color: #fff;">
            <span class="info-box-icon"><i class="fa-solid fa-users"></i></span>

            <div class="info-box-content">
              <span class="info-box-text"><b>Total Sub Admins</b></span>
              <span class="info-box-number"><?php echo $subadmin; ?></span>
            </div>
 
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <?php
          }?>
          
          <?php
          if($admin['role'] == '0' || $admin['role'] == '1'){ ?>
        
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box" style="background: #52BE80;color: #fff;">
            <span class="info-box-icon"><i class="fa-solid fa-users"></i></span>

            <div class="info-box-content">
              <span class="info-box-text"><b>Total Host Agency</b></span>
              <span class="info-box-number"><?php echo $hostAgency; ?></span>
            </div>
 
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        
        <?php
          }?>
          
          <?php
          if($admin['role'] == '0'){ ?>
        
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box" style="background: #A569BD;color: #fff;">
            <span class="info-box-icon"><i class="fa-solid fa-users"></i></span>

            <div class="info-box-content">
              <span class="info-box-text"><b>Total Coin Agency</b></span>
              <span class="info-box-number"><?php echo $coinAgency; ?></span>
            </div>
 
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        
        <?php
          }
          ?>
          
          <?php
          if($admin['role'] == '1'){ ?>
        
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box" style="background: #A569BD;color: #fff;">
            <span class="info-box-icon"><i class="fa-solid fa-users"></i></span>

            <div class="info-box-content">
              <span class="info-box-text"><b>Pending Family</b></span>
              <span class="info-box-number"><?php echo $pending_family; ?></span>
            </div>
 
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        
        <?php
          }
          ?>
          
          <?php
          if($admin['role'] == '1'){ ?>
        
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box" style="background: #3498DB;color: #fff;">
            <span class="info-box-icon"><i class="fa-solid fa-users"></i></span>

            <div class="info-box-content">
              <span class="info-box-text"><b>Approved Family</b></span>
              <span class="info-box-number"><?php echo $approve_family; ?></span>
            </div>
 
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        
        <?php
          }
          ?>
          
          <?php
          if($admin['role'] == '1'){ ?>
        
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box" style="background: #E59866;color: #fff;">
            <span class="info-box-icon"><i class="fa-solid fa-users"></i></span>

            <div class="info-box-content">
              <span class="info-box-text"><b>Rejected Family</b></span>
              <span class="info-box-number"><?php echo $rejected_family; ?></span>
            </div>
 
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        
        <?php
          }
          ?>
          
          <?php
          if($admin['role'] == '1'){ ?>
        
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box" style="background: #3498DB;color: #fff;">
            <span class="info-box-icon"><i class="fa-solid fa-users"></i></span>

            <div class="info-box-content">
              <span class="info-box-text"><b>Pending Host</b></span>
              <span class="info-box-number"><?php echo $rejected_family; ?></span>
            </div>
 
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        
        <?php
          }
          ?>
          
          <?php
          if($admin['role'] == '1'){ ?>
        
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box" style="background: #E59866;color: #fff;">
            <span class="info-box-icon"><i class="fa-solid fa-users"></i></span>

            <div class="info-box-content">
              <span class="info-box-text"><b>Approved Host</b></span>
              <span class="info-box-number"><?php echo $approved_host; ?></span>
            </div>
 
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        
        <?php
          }
          ?>
          
          <?php
          if($admin['role'] == '1'){ ?>
        
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box" style="background: #52BE80;color: #fff;">
            <span class="info-box-icon"><i class="fa-solid fa-users"></i></span>

            <div class="info-box-content">
              <span class="info-box-text"><b>Rejected Host</b></span>
              <span class="info-box-number"><?php echo $rejected_host; ?></span>
            </div>
 
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        
        <?php
          }
          ?>
 
        <!-- <div class="col-md-3 col-sm-6 col-xs-12">
               <div class="info-box" style="background: #058d9e;color: #fff;">
            <span class="info-box-icon"><i class="fa fa-user"></i></span>
            <div class="info-box-content">
              <span class="info-box-text"><b>Total Approved Host</b></span>
              <span class="info-box-number"><?php echo $approved_host; ?></span>
            </div> -->
            <!-- /.info-box-content -->
          <!-- </div> -->
          <!-- /.info-box -->
        <!-- </div> -->

        <!-- <div class="col-md-3 col-sm-6 col-xs-12"> -->
               <!-- <div class="info-box" style="background: #058d9e;color: #fff;">
            <span class="info-box-icon"><i class="fa fa-user"></i></span>
            <div class="info-box-content">
              <span class="info-box-text"><b>Total Pending Host</b></span>
              <span class="info-box-number"><?php echo $pending_host; ?></span>
            </div> -->
            <!-- /.info-box-content -->
          <!-- </div> -->
          <!-- /.info-box -->
        <!-- </div> -->
     
        <!-- <div class="col-md-3 col-sm-6 col-xs-12">

            <div class="info-box" style="background: #c72a16;color: #fff;">
            <span class="info-box-icon"><i class="fa fa-user"></i></span>

            <div class="info-box-content">
              <span class="info-box-text"><b>Total Rejected Host</b></span>
              <span class="info-box-number"><?php echo $rejected_host; ?></span>
            </div> -->
            <!-- /.info-box-content -->
          <!-- </div> -->
          <!-- /.info-box -->
        <!-- </div> -->


    

        <!-- /.col -->
        <div class="clearfix visible-sm-block"></div>
        <!--<div class="col-md-3 col-sm-6 col-xs-12">-->
        <!--  <div class="info-box" style="background: #06690d;color: #fff;">-->
        <!--    <span class="info-box-icon"><i class="fa fa-user"></i></span>-->

        <!--    <div class="info-box-content">-->
        <!--      <span class="info-box-text"><b>Total Pending Agency</b></span>-->

        <!--      <span class="info-box-number"><?php echo $pending_agency; ?></span>-->
        <!--    </div>-->
            <!-- /.info-box-content -->
        <!--  </div>-->
          <!-- /.info-box -->
        <!--</div>-->

        <div class="clearfix visible-sm-block"></div>
        <!--<div class="col-md-3 col-sm-6 col-xs-12">-->
        <!--  <div class="info-box" style="background: #06690d;color: #fff;">-->
        <!--    <span class="info-box-icon"><i class="fa fa-user"></i></span>-->

        <!--    <div class="info-box-content">-->
        <!--      <span class="info-box-text"><b>Total Approve Agency</b></span>-->
        <!--      <span class="info-box-number"><?php echo $approve_agency; ?></span>-->
        <!--    </div>-->
            <!-- /.info-box-content -->
        <!--  </div>-->
          <!-- /.info-box -->
        <!--</div>-->

        <div class="clearfix visible-sm-block"></div>
        <!--<div class="col-md-3 col-sm-6 col-xs-12">-->
        <!--  <div class="info-box" style="background: #06690d;color: #fff;">-->
        <!--    <span class="info-box-icon"><i class="fa fa-user"></i></span>-->

        <!--    <div class="info-box-content">-->
        <!--      <span class="info-box-text"><b>Total Rejected Agency</b></span>-->
        <!--      <span class="info-box-number"><?php echo $rejected_agency; ?></span>-->
        <!--    </div>-->
            <!-- /.info-box-content -->
        <!--  </div>-->
          <!-- /.info-box -->
        <!--</div>-->


        <div class="clearfix visible-sm-block"></div>
        <!--<div class="col-md-3 col-sm-6 col-xs-12">-->
        <!--  <div class="info-box" style="background: #06690d;color: #fff;">-->
        <!--    <span class="info-box-icon"><i class="fa fa-user"></i></span>-->

        <!--    <div class="info-box-content">-->
        <!--      <span class="info-box-text"><b>Total Coins</b></span>-->
        <!--      <span class="info-box-number"><?php echo $subAdminCoins['totalCoins']; ?></span>-->
        <!--    </div>-->
            <!-- /.info-box-content -->
        <!--  </div>-->
          <!-- /.info-box -->
        <!--</div>-->
      
        <!--<div class="col-md-3 col-sm-6 col-xs-12">-->
        <!--  <div class="info-box" style="background: #06690d;color: #fff;">-->
        <!--    <span class="info-box-icon"><i class="fa fa-user"></i></span>-->

        <!--    <div class="info-box-content">-->
        <!--      <span class="info-box-text"><b>Total SubAdmin</b></span>-->
        <!--      <span class="info-box-number"><?php echo $subadmin; ?></span>-->
        <!--    </div>-->
            <!-- /.info-box-content -->
        <!--  </div>-->
          <!-- /.info-box -->
        <!--</div>-->


        <!--<div class="col-md-3 col-sm-6 col-xs-12">-->
        <!--  <div class="info-box" style="background: #06690d;color: #fff;">-->
        <!--    <span class="info-box-icon"><i class="fa fa-user"></i></span>-->

        <!--    <div class="info-box-content">-->
        <!--      <span class="info-box-text"><b>Total Coins</b></span>-->
        <!--      <span class="info-box-number"><?php echo $coins['totalCoins']; ?></span>-->
        <!--    </div>-->
            <!-- /.info-box-content -->
        <!--  </div>-->
          <!-- /.info-box -->
        <!--</div>-->
        






        <!-- /.col -->
      <!--   <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-google-plus"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Likes</span>
              <span class="info-box-number">41,410</span>
            </div> -->
            <!-- /.info-box-content -->
          <!-- </div> -->
          <!-- /.info-box -->
        <!-- </div> -->
        <!-- /.col -->

        <!-- fix for small devices only -->

        <!-- /.col -->

      </div>
      <!-- /.row -->







                          <!--graphs-->

      <!--<div class="row">-->
               <!--Left col-->
      <!--  <section class="col-lg-12" style="padding-bottom: 10px">-->
      <!--  <div style="padding-right: 2em">-->

      <!--      <canvas id="myChart"  height="120"></canvas>-->

      <!--  </div>-->

      <!--  <div style="display: flex;flex-wrap: wrap">-->
      <!--      <div style="width: 50%">-->

      <!--          <div>-->
      <!--              <canvas id="follow_chart"  height="150"></canvas>-->
      <!--          </div>-->


      <!--      </div>-->
          <!--   <div style="width: 50%">-->

          <!--      <div>-->
          <!--          <canvas id="block_chart"  height="150"></canvas>-->
          <!--      </div>-->


          <!--  </div>-->

          <!--  <div style="width: 50%;margin-top: 2em;">-->

          <!--      <div>-->
          <!--          <canvas id="view_video"  height="150"></canvas>-->
          <!--      </div>-->


          <!--  </div>-->
          <!--    <div style="width: 50%;margin-top: 2em;">-->

          <!--      <div>-->
          <!--          <canvas id="like_video"  height="150"></canvas>-->
          <!--      </div>-->

          <!--  </div>-->
          <!--<div style="width: 50%;margin-top: 2em;">-->

          <!--      <div>-->
          <!--          <canvas id="comment_video"  height="150"></canvas>-->
          <!--      </div>-->


          <!--  </div>-->

          <!--  <div style="width: 50%;margin-top: 2em;">-->

          <!--     <div>-->
          <!--         <canvas id="upload_video"  height="150"></canvas>-->
          <!--     </div>-->


          <!-- </div>-->

      <!--  </div>-->

      <!--  </section>-->


      <!--</div>-->
      <!-- /.row (main row) -->


        <?php
          if($admin['role'] == '0'){ ?>
      <!-- Main row -->
      <div class="row">

                    <div class="col-md-12">
                        <div class="box box-danger">
                            <div class="box-header with-border">
                                <h3 class="box-title">Latest Members</h3>

                                <div class="box-tools pull-right">
                                    <span class="label label-danger">8 New Members</span>
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="box-body no-padding">
                                <ul class="users-list clearfix">
                                    <?php foreach ($topEagUser as $topEagUsers) { ?>
                                        <li>
                                            <?php if (empty($topEagUsers['UserProfileImage'])) { ?>
                                                <img class="dummyImage" src="<?php echo base_url() ?>/uploads/dummy.png" alt="User Image">
                                                <?php } else {
                                                $url = $topEagUsers['UserProfileImage'];

                                                if (filter_var($url, FILTER_VALIDATE_URL)) { ?>
                                                    <img class="dummyImage" src="<?php echo $topEagUsers['UserProfileImage']; ?>" alt="User Image">
                                                <?php } else { ?>
                                                    <img class="dummyImage" src="<?php echo $topEagUsers['UserProfileImage']; ?>" alt="User Image">
                                            <?php }
                                            }

                                            ?>

                                            <a class="users-list-name" href="<?php echo site_url() ?>/User/viewUser/<?php echo $topEagUsers['id'] ?>"><?php echo $topEagUsers['username'] ?></a>
                                            <span class="users-list-date">
                                                <?php
                                                $originalDate = $topEagUsers['created_at'];
                                                echo date("d M", strtotime($originalDate));
                                                ?>
                                            </span>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </div>
                            <div class="box-footer text-center">
                                <a href="<?php echo site_url() ?>/User/manageUser" class="uppercase">View All Users</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <?php
          }
          ?>
          
          <?php
          
          if($admin['role'] == '1' || $admin['role'] == '0'){ ?>

          <TABLE: BANNED USERS DETAILS>
                <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Banned Users Details</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th>Banned Type</th>
                    <th>Numbers of Banned Users</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td><a href="<?php echo site_url();?>/admin/managePermanentBanUsers">Permanent Banned Users</a></td>
                    <td><span class="label label-danger"><?= $PermanentBanUsers?></span></td>
                  </tr>
                  <tr>
                    <td><a href="<?php echo site_url();?>/admin/manageOneDayBanUsers">1 Day Banned Users</a></td>
                    <td><span class="label label-warning"><?=$OneDayBanUsers?></span></td>
                  </tr>
                  <tr>
                    <td><a href="<?php echo site_url();?>/admin/manageThreeDaysBanUsers">3 Days Banned Users</a></td>
                    <td><span class="label label-success"><?=$ThreeDayBanUsers?></span></td>
                  </tr>
                  <tr>
                    <td><a href="<?php echo site_url();?>/admin/manageThirtyDaysBanUsers">30 Days Banned Users</a></td>
                    <td><span class="label label-info"><?=$onemnthBanUsers?></span></td>
                  </tr>
                   
                  </tbody>
                </table>
              </div>
            </div>
            <!--</.box-body>-->
            <!--    <div class="box-footer clearfix">-->
            <!--  <a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-left">Place New Order</a>-->
            <!--  <a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">View All Orders</a>-->
            <!--</div>-->
          </div>
        </div>
        <?php
              
          }
        ?>

        <!--<div class="col-md-4">-->
          <!-- Info Boxes Style 2 -->
          <!-- PRODUCT LIST -->
          <!--div class="box box-primary">
          <!--  <div class="box-header with-border">-->
          <!--    <h3 class="box-title">Recently Added Products</h3>-->

          <!--    <div class="box-tools pull-right">-->
          <!--      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>-->
          <!--      </button>-->
          <!--      <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>-->
          <!--    </div>-->
          <!--  </div>-->
          <!--  <div class="box-body">-->
          <!--    <ul class="products-list product-list-in-box">-->
          <!--      <li class="item">-->
          <!--        <div class="product-img">-->
          <!--          <img src="<?php echo base_url();?>assets/dist/img/default-50x50.gif" alt="Product Image">-->
          <!--        </div>-->
          <!--        <div class="product-info">-->
          <!--          <a href="javascript:void(0)" class="product-title">Samsung TV-->
          <!--            <span class="label label-warning pull-right">$1800</span></a>-->
          <!--          <span class="product-description">-->
          <!--                Samsung 32" 1080p 60Hz LED Smart HDTV.-->
          <!--              </span>-->
          <!--        </div>-->
          <!--      </li>-->
          <!--      <li class="item">-->
          <!--        <div class="product-img">-->
          <!--          <img src="<?php echo base_url();?>assets/dist/img/default-50x50.gif" alt="Product Image">-->
          <!--        </div>-->
          <!--        <div class="product-info">-->
          <!--          <a href="javascript:void(0)" class="product-title">Bicycle-->
          <!--            <span class="label label-info pull-right">$700</span></a>-->
          <!--          <span class="product-description">-->
          <!--                26" Mongoose Dolomite Men's 7-speed, Navy Blue.-->
          <!--              </span>-->
          <!--        </div>-->
          <!--      </li>-->
          <!--      <li class="item">-->
          <!--        <div class="product-img">-->
          <!--          <img src="<?php echo base_url();?>assets/dist/img/default-50x50.gif" alt="Product Image">-->
          <!--        </div>-->
          <!--        <div class="product-info">-->
          <!--          <a href="javascript:void(0)" class="product-title">Xbox One <span-->
          <!--              class="label label-danger pull-right">$350</span></a>-->
          <!--          <span class="product-description">-->
          <!--                Xbox One Console Bundle with Halo Master Chief Collection.-->
          <!--              </span>-->
          <!--        </div>-->
          <!--      </li>-->
          <!--      <li class="item">-->
          <!--        <div class="product-img">-->
          <!--          <img src="<?php echo base_url();?>assets/dist/img/default-50x50.gif" alt="Product Image">-->
          <!--        </div>-->
          <!--        <div class="product-info">-->
          <!--          <a href="javascript:void(0)" class="product-title">PlayStation 4-->
          <!--            <span class="label label-success pull-right">$399</span></a>-->
          <!--          <span class="product-description">-->
          <!--                PlayStation 4 500GB Console (PS4)-->
          <!--              </span>-->
          <!--        </div>-->
          <!--      </li>-->
          <!--    </ul>-->
          <!--  </div>-->
          <!--  <div class="box-footer text-center">-->
          <!--    <a href="javascript:void(0)" class="uppercase">View All Products</a>-->
          <!--  </div>-->
          <!--</div-->
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

    $(function () {


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
                    fill:'origin',
                    label: 'User\'s joined in last 30 days',
                    data: [<?php echo $chartUserCount;?>],
                    backgroundColor:'#69cd3c',
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

        $("#myChart").click(function (evt) {

            var firstPoint = myChart.getElementAtEvent(evt)[0];

            if (firstPoint) {
                var label = new Date(myChart.data.labels[firstPoint._index]);
                // var value = myChart.data.datasets[firstPoint._datasetIndex].data[firstPoint._index];
                var date = label.getFullYear()+"-"+(parseInt(label.getMonth())+1)+"-"+label.getDate();



                window.location.href = "<?php echo site_url()."/User/graphResult/"?>"+date;
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
                    backgroundColor:'#4633FF',
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

        $("#follow_chart").click(function (evt) {

            var follow_firstPoint = follow_chart.getElementAtEvent(evt)[0];

            if (follow_firstPoint) {
                let follow_label = follow_chart.data.labels[follow_firstPoint._index];
                let sliced = follow_label.slice(1);

                window.location.href = "<?php echo site_url()."/user/followGraph/"; ?>"+sliced;
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
                    backgroundColor:'#4633FF',
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

        $("#block_chart").click(function (evt) {

            var block_firstPoint = block_chart.getElementAtEvent(evt)[0];

            if (block_firstPoint) {
                let block_label = block_chart.data.labels[block_firstPoint._index];
                let sliced = block_label.slice(1);

                window.location.href = "<?php echo site_url()."/user/blockGraph/"; ?>"+sliced;
            }

        });


                  // most viewed video graph



                  //most liked video graph


                  var liked = document.getElementById("like_video").getContext('2d');

                  var likeVideo = new Chart(liked,{
                      type:'bar',
                      data:{
                          labels:['<?php echo $like_labels; ?>'],
                          datasets:[{
                              label:'Video likes',
                              data:[<?php echo $like_datasets; ?>],
                              backgroundColor:'#1F91F0',
                              borderWidth: 1
                          }]
                      },
                      options:{
                          scales: {
                              yAxes: [{
                                  ticks: {
                                      beginAtZero: true
                                  }
                              }]
                          }
                      }
                  });

                  $("#like_video").click(function (evt) {
                      var like_first = likeVideo.getElementAtEvent(evt)[0];
                      if (like_first) {
                          let like_label = likeVideo.data.labels[like_first._index];
                          window.location.href = "<?php echo site_url()."/videos/video_likes_graph/"; ?>"+like_label;
                      }
                  });


                  // graph for most commented video


                  var comment = document.getElementById("comment_video").getContext('2d');

                  var commentVideo = new Chart(comment,{
                      type:'bar',
                      data:{
                          labels:['<?php echo $comment_labels; ?>'],
                          datasets:[{
                              label:'Video Comments',
                              data:[<?php echo $comment_datasets; ?>],
                              backgroundColor:'#6a5acd',
                              borderWidth: 1
                          }]
                      },
                      options:{
                          scales: {
                              yAxes: [{
                                  ticks: {
                                      beginAtZero: true
                                  }
                              }]
                          }
                      }
                  });

                  $("#comment_video").click(function (evt) {
                      var comment_first = commentVideo.getElementAtEvent(evt)[0];
                      if (comment_first) {
                          let comment_label = commentVideo.data.labels[comment_first._index];
                          window.location.href = "<?php echo site_url()."/videos/video_comment_graph/"; ?>"+comment_label;
                      }
                  });




        //   most uploaded videos


        var upload = document.getElementById("upload_video").getContext('2d');

        var uploadVideo = new Chart(upload,{
            type:'bar',
            data:{
                labels:['<?php echo $upload_labels; ?>'],
                datasets:[{
                    label:'Video\'s uploaded',
                    data:[<?php echo $upload_datasets; ?>],
                    backgroundColor:'#6a5acd',
                    borderWidth: 1
                }]
            },
            options:{
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });

        $("#upload_video").click(function (evt) {
            var upload_first = uploadVideo.getElementAtEvent(evt)[0];
            if (upload_first) {
                let upload_label = uploadVideo.data.labels[upload_first._index];
                let upload_sliced = upload_label.slice(1);
                window.location.href = "<?php echo site_url()."/videos/video_upload_graph/"; ?>"+upload_sliced;
            }
        });




    });
</script>
