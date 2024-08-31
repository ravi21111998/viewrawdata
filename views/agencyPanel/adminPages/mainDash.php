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
</style>
<div class="content-wrapper">
    <section class="content-header">
        <h1 style="margin-top: 12px;font-family: auto;text-align: center;">
            Agency Panel
        </h1>
    </section>

    <section class="content">
        <!-- Info boxes -->
        <div class="row">

            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box" style="background: #06690d;color: #fff;">
                    <span class="info-box-icon"><i class="fa fa-user"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text"><b>Total Approved Hosts</b></span>
                        <span class="info-box-number"><?php echo $approvedHost; ?></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box" style="background: #058d9e;color: #fff;">
                    <span class="info-box-icon"><i class="fa fa-user"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text"><b>Total Pending Hosts</b></span>
                        <span class="info-box-number"><?php echo $pendingHost; ?></span>
                    </div>

                </div>

            </div>

            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box" style="background: #c72a16;color: #fff;">
                    <span class="info-box-icon"><i class="fa fa-user"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text"><b>Total Rejected Hosts</b></span>
                        <span class="info-box-number"><?php echo $rejectedHost; ?></span>
                    </div>

                </div>

            </div>





        </div>










        <!--<div class="row" <?php if($admin['role'] == 'subAdmin'){ ?> style="display:none" <?php } ?>>-->
        <div class="row">

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