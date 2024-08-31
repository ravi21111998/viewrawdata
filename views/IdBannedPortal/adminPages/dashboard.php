<style>
.dummyImage {
    width: 128px !important;
    height: 128px !important;
}

.ui-state-default,
.ui-widget-content .ui-state-default,
.ui-widget-header .ui-state-default {
    border: 1px solid #7ae0ec !important;
    background: #7ae0ec !important;
    font-weight: normal !important;
    color: #201804 !important;
}

.ui-widget-header {
    border: 1px solid #7ae0ec !important;
    background: #7ae0ec !important;
    color: #201804 !important;
    font-weight: bold !important;
}

.main_header_h5 {
    height: 50px;
    background-color: #C39BD3;
}

.main_header_h5 h5 {
    color: white;
    font-weight: bold;
    text-align: center;
    padding-top: 10px;
}
</style>
<div class="content-wrapper">
    
    <div class="container-fluid main_header_h5">
        <h5>IdBanned Portal</h5>
    </div>
    <section class="content-header">
        <!--<h1 style="margin-top: 12px;font-family: auto;text-align: center;">-->
        <!--Id Banned Portal-->
        <!--</h1>-->
    </section>

    <section class="content">
        <!-- Info boxes -->
        <div class="row">

            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box" style="background: #AF7AC5;color: #fff;">
                    <span class="info-box-icon"><i class="fa fa-user"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text"><b>Total Users</b></span>
                        <span class="info-box-number"><?php echo $users; ?></span>
                    </div>
                     
                </div>
                 
            </div>
            
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box" style="background: #16A085;color: #fff;">
                    <span class="info-box-icon"><i class="fa fa-user"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text"><b>Total Banned Users</b></span>
                        <span class="info-box-number"><?php echo $bannusers; ?></span>
                    </div>
                     
                </div>
                 
            </div>

            <!--<div class="col-md-3 col-sm-6 col-xs-12">-->
            <!--    <div class="info-box" style="background: #c72a16;color: #fff;">-->
            <!--        <span class="info-box-icon"><i class="fa fa-user"></i></span>-->

            <!--        <div class="info-box-content">-->
            <!--            <span class="info-box-text"><b>Total Send Coins</b></span>-->
            <!--            <span class="info-box-number"><?php echo $send_coins['coin']; ?></span>-->
            <!--        </div>-->
                    <!-- /.info-box-content -->
            <!--    </div>-->
                <!-- /.info-box -->
            <!--</div>-->






            <!-- /.col -->








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

        <div class="row" <?php if($admin['status'] == '1'){ ?> style="display:none" <?php } ?>>
            <!--Left col-->
            <section class="col-lg-12" style="padding-bottom: 10px">
                <div style="padding-right: 2em">

                    <canvas id="myChart" height="120"></canvas>

                </div>

                <div style="display: flex;flex-wrap: wrap">
                    <div style="width: 50%">

                        <div>
                            <canvas id="follow_chart" height="150"></canvas>
                        </div>


                    </div>
                    <div style="width: 50%">

                        <div>
                            <canvas id="block_chart" height="150"></canvas>
                        </div>


                    </div>

                    <!-- <div style="width: 50%;margin-top: 2em;">

                <div>
                    <canvas id="view_video"  height="150"></canvas>
                </div>


            </div> -->
                    <div style="width: 50%;margin-top: 2em;">

                        <div>
                            <canvas id="like_video" height="150"></canvas>
                        </div>

                    </div>
                    <div style="width: 50%;margin-top: 2em;">

                        <div>
                            <canvas id="comment_video" height="150"></canvas>
                        </div>


                    </div>

                    <div style="width: 50%;margin-top: 2em;">

                        <div>
                            <canvas id="upload_video" height="150"></canvas>
                        </div>


                    </div>

                </div>

            </section>


        </div>
        <!-- /.row (main row) -->



        <!-- Main row -->
        <div class="row">
            <!-- Left col -->
            <div class="col-md-12">
                <!-- MAP & BOX PANE -->



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
                    <td><a href="<?php echo site_url();?>/IdBannedPortal/managePermanentBanUsers">Permanent Banned Users</a></td>
                    <td><span class="label label-danger"><?= $PermanentBanUsers?></span></td>
                  </tr>
                  <tr>
                    <td><a href="<?php echo site_url();?>/IdBannedPortal/manageOneDayBanUsers">1 Day Banned Users</a></td>
                    <td><span class="label label-warning"><?=$OneDayBanUsers?></span></td>
                  </tr>
                  <tr>
                    <td><a href="<?php echo site_url();?>/IdBannedPortal/manageThreeDaysBanUsers">3 Days Banned Users</a></td>
                    <td><span class="label label-success"><?=$ThreeDayBanUsers?></span></td>
                  </tr>
                  <tr>
                    <td><a href="<?php echo site_url();?>/IdBannedPortal/manageThirtyDaysBanUsers">30 Days Banned Users</a></td>
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

        <div class="col-md-4">
          <!-- Info Boxes Style 2 -->
                <!-- PRODUCT LIST -->
                <!--div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Recently Added Products</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <ul class="products-list product-list-in-box">
                <li class="item">
                  <div class="product-img">
                    <img src="<?php echo base_url();?>assets/dist/img/default-50x50.gif" alt="Product Image">
                  </div>
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">Samsung TV
                      <span class="label label-warning pull-right">$1800</span></a>
                    <span class="product-description">
                          Samsung 32" 1080p 60Hz LED Smart HDTV.
                        </span>
                  </div>
                </li>
                <li class="item">
                  <div class="product-img">
                    <img src="<?php echo base_url();?>assets/dist/img/default-50x50.gif" alt="Product Image">
                  </div>
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">Bicycle
                      <span class="label label-info pull-right">$700</span></a>
                    <span class="product-description">
                          26" Mongoose Dolomite Men's 7-speed, Navy Blue.
                        </span>
                  </div>
                </li>
                <li class="item">
                  <div class="product-img">
                    <img src="<?php echo base_url();?>assets/dist/img/default-50x50.gif" alt="Product Image">
                  </div>
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">Xbox One <span
                        class="label label-danger pull-right">$350</span></a>
                    <span class="product-description">
                          Xbox One Console Bundle with Halo Master Chief Collection.
                        </span>
                  </div>
                </li>
                <li class="item">
                  <div class="product-img">
                    <img src="<?php echo base_url();?>assets/dist/img/default-50x50.gif" alt="Product Image">
                  </div>
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">PlayStation 4
                      <span class="label label-success pull-right">$399</span></a>
                    <span class="product-description">
                          PlayStation 4 500GB Console (PS4)
                        </span>
                  </div>
                </li>
              </ul>
            </div>
            <div class="box-footer text-center">
              <a href="javascript:void(0)" class="uppercase">View All Products</a>
            </div>
          </div-->
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
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js" type="text/javascript"></script>
<link href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/start/jquery-ui.css" rel="Stylesheet"
    type="text/css" />
<script type="text/javascript">
$("#searchDate").click(function() {
    var searchDate = $("#startdate").val();
    $.ajax({
        method: "post",
        url: "<?php echo site_url()?>/AgencyPanel/searhAgencyPortalWithDate",
        data: {
            searchDate: searchDate
        },
        //dataType: "json",                //data format
        success: function(result) {
            $("#track").replaceWith(result);
        }
    });
});

$(function() {
    $("#startdate").datepicker({
        dateFormat: "yy/mm/dd",
        numberOfMonths: 1,
        maxDate: 0,
        onSelect: function(selected) {
            var dt = new Date(selected);
            dt.setDate(dt.getDate() + 1);
            $("#enddate").datepicker("option", "minDate", dt);
        }
    });
    $("#enddate").datepicker({
        dateFormat: "yy/mm/dd",
        numberOfMonths: 1,
        maxDate: 0,
        onSelect: function(selected) {
            var dt = new Date(selected);
            dt.setDate(dt.getDate() - 1);
            $("#startdate").datepicker("option", "maxDate", dt);
        }
    });
});
</script>