<style>
  .dummyImage {
    width: 128px !important;
    height: 128px !important;
}

    .ui-state-default, .ui-widget-content .ui-state-default, .ui-widget-header .ui-state-default {
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
        Agency Portal
      </h1>
    </section>

    <section class="content">
      <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="col-md-2">
                <div class="form-group">
                  <label>Monthly Statement</label>
                  <input type="text" class="form-control" value="<?php echo $todayDateTime?>" id="startdate" placeholder="startdate">
                </div>
            </div>
            <div class="col-md-2" style="padding-top: 24px;">
                <label></label>
                <button type="button" class="btn btn-success" id="searchDate">Searh</button>
            </div>
            <div class="clearfix"></div>
            <div role="tabpanel" style="background-color: #fff;" class="tab-pane active" id="track">
               <ul style="padding: 0;margin: 0;">
                <div class="col-md-4">
                  <li>
                    <a href="#">Talent Gems</a>
                    <span><?php if(!empty($totalGems['totalGems'])){ echo $totalGems['totalGems']; } else{ echo 0 ;} ?> </span>
                  </li>
                  <li>
                    <a href="#">New Talents</a>
                    <span><?php if(!empty($cureentMonthTalents)){ echo $cureentMonthTalents; } else{ echo 0 ;} ?>  </span>
                  </li>

                </div>
                <div class="col-md-4">
                  <li>
                    <a href="#">Gem Reward</a>
                    <span>NA </span>
                  </li>
                  <li>
                    <a href="#">Active Talents</a>
                    <span><?php if(!empty($activeTalents)){ echo $activeTalents; } else{ echo 0 ;} ?>  </span>
                  </li>

                </div>

                <div class="col-md-4">
                  <li>
                    <a href="#">Live Duration</a>
                    <span><?php if(!empty($liveDuration['spendTime'])){ echo $liveDuration['spendTime']; } else{ echo 0 ; } ?>   </span>
                  </li>
                  <li>
                    <a href="#">Total Talents</a>
                    <span>
                      <?php if(!empty($totalTalents)){ echo $totalTalents; } else{ echo 0 ;} ?>
                    </span>
                  </li>
                </div>


              </ul>
            </div>


          </div>
      </div>
      <!-- /.row -->




      <!-- Main row -->
      <div class="row" style="margin-top:80px">
        <!-- Left col -->
        <div class="col-md-12">
          <!-- MAP & BOX PANE -->

          <!-- <div class="row">

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
                    <?php foreach($topEagUser as $topEagUsers){?>
                      <li>
                        <?php if(empty($topEagUsers['image'])){?>
                        	<img class="dummyImage" src="<?php echo base_url()?>/uploads/dummy.png" alt="User Image">
                        <?php } else{
                          $url = $topEagUsers['image'];

                          if (filter_var($url, FILTER_VALIDATE_URL)) { ?>
                              <img class="dummyImage" src="<?php echo $topEagUsers['image'];?>" alt="User Image">
                          <?php } else { ?>
                              <img class="dummyImage" src="<?php echo base_url().$topEagUsers['image'];?>" alt="User Image">
                         <?php } }

                        ?>

                        <a class="users-list-name" href="<?php echo site_url()?>/User/view/<?php echo $topEagUsers['id']?>"><?php echo $topEagUsers['username']?></a>
                        <span class="users-list-date">
                        	<?php
                          		$originalDate = $topEagUsers['created'];
								echo date("d M", strtotime($originalDate));
                          	?>
                        </span>
                      </li>
                    <?php }?>
                  </ul>
                </div>
                <div class="box-footer text-center">
                  <a href="<?php echo site_url()?>/User/manage" class="uppercase">View All Users</a>
                </div>
              </div>
            </div>
          </div> -->


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
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"
				type="text/javascript"></script>
<link href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/start/jquery-ui.css"
			rel="Stylesheet" type="text/css" />
<script type="text/javascript">

    $("#searchDate").click(function(){
        var searchDate = $("#startdate").val();
        $.ajax({
      		method:"post",
     			url:"<?php echo site_url()?>/AgencyPanel/searhAgencyPortalWithDate",
      		data:{searchDate:searchDate},
      		//dataType: "json",                //data format
          success: function(result){
            $("#track").replaceWith(result);
         	}
      	});
    });

		$(function () {
				$("#startdate").datepicker({
				    dateFormat: "yy/mm/dd" ,
						numberOfMonths: 1,
						maxDate:0,
						onSelect: function (selected) {
								var dt = new Date(selected);
								dt.setDate(dt.getDate() + 1);
								$("#enddate").datepicker("option", "minDate", dt);
						}
				});
				$("#enddate").datepicker({
				    dateFormat: "yy/mm/dd" ,
						numberOfMonths: 1,
					maxDate:0,
						onSelect: function (selected) {
								var dt = new Date(selected);
								dt.setDate(dt.getDate() - 1);
								$("#startdate").datepicker("option", "maxDate", dt);
						}
				});
		});

</script>
