<style>
div#example1_filter {
    float: right;
}

.paging_simple_numbers{
    float: right;
}
.dataTables_empty{
  text-align: center;
}
span.link {
    padding: 5px;
    border: 1px solid gray;
    margin: 2px;
    border-radius: 10px;
}
</style>

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			<?= $title;?>
		</h1>
		<ol class="breadcrumb">
			
			<li><a href="<?php echo site_url();?>/admin/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="<?php echo site_url();?>/User/listShowGameDetails"><i class="fa fa-dashboard"></i> View All Game</a></li>
			<li class="active"><?= $title?></li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
	     <div class="row">
	         	<div class="col-xs-12">
		   <!-- /.box -->
				<div style='padding:2px; height:200px' class="box">
				    <div class="box-body">
				        
				          <div>
                <form style='display:flex;align-items:center;flex-direction:row;padding-bottom:30px;gap:25px' action="" method="get">
                       <div style='display:none;' class="form-group">
        <label for="gameId">Game ID</label>
        <input type="text" id="gameId" name="gameId" value="<?= $this->input->get('gameId'); ?>" style="width:120px; height:22px;" required>
    </div>
                    <div class="form-group">
                        <label for="startDate">Start Date</label>
                        <input type="date" id="startDate" name="startDate" value="<?= $this->input->get('startDate'); ?>" style="width:120px; height:22px;">
                    </div>
                    <div class="form-group">
                        <label for="endDate">End Date</label>
                        <input type="date" id="endDate" name="endDate" value="<?= $this->input->get('endDate'); ?>" style="width:120px; height:22px;">
                    </div>
                  
                    <div class="form-group">
                    <button style="width:120px; height:22px;display:flex;align-items:center;justify-content:center" type="submit" name="searchByDate" class="btn btn-primary">Search by date</button>
                    </div>
                </form>
            </div>
				        
         
          <div class="col-md-3 col-sm-6 ">
          <div class="info-box" style="background: #52BE80;color: #fff;">
            <span class="info-box-icon"><i class="fa-solid fa-users"></i></span>

            <div class="info-box-content">
              <span class="info-box-text"><b>Total bet by users                  </b></span>
              <!--<span class="info-box-number"><?php echo $totalWaggerAmount;; ?></span>-->
                          <!--<span class="info-box-number">1</span>-->

              <span class="info-box-number"><?= $totalWaggerAmount; ?></span>
            </div>
 
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
       
          
       
        
        <div class="col-md-3 col-sm-6">
          <div class="info-box" style="background: #3498DB;color: #fff;">
            <span class="info-box-icon"><i class="fa-solid fa-users"></i></span>

            <div class="info-box-content">
              <span class="info-box-text"><b>Total Won by Users</b></span>
              <!--<span class="info-box-number"><?php echo $totalWaggersWon; ?></span>-->
              <span class="info-box-number"><?= $totalWaggersWon; ?></span>
                
            </div>
 
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
    
        
        <div class="col-md-3 col-sm-6">
          <div class="info-box" style="background: #52BE80;color: #fff;">
            <span class="info-box-icon"><i class="fa-solid fa-users"></i></span>

            <div class="info-box-content">
               <span class="info-box-text"><b>Total Company Profit</b></span>
      <!--<span class="info-box-number"><?php echo $companyProfitLoss > 0 ? $companyProfitLoss : 0; ?></span>-->
       <span class="info-box-number"><?= $companyProfitLoss; ?></span>
     </div>
 
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
       
    
        <div class="col-md-3 col-sm-6">
          <div class="info-box" style="background: red;color: #fff;">
            <span class="info-box-icon"><i class="fa-solid fa-users"></i></span>

            <div class="info-box-content">
              <span class="info-box-text"><b>Total Company Loss</b></span>
      <!--<span class="info-box-number"><?php echo $companyProfitLoss < 0 ? abs($companyProfitLoss) : 0; ?></span>-->
       <span class="info-box-number"><?= $companyLoss; ?></span>
      </div>
 
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        
        
          </div>
          </div>
          </div>
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
 
    

     
			<div class="col-xs-12">
		   <!-- /.box -->
				<div class="box">
				
                
            <!--     	<div class="main-data">
						<div class="row">
                        <form method="post" id="getPdf">
                        	<div class = "col-md-12" style="margin-left:60px;margin-top:10px;margin-bottom:20px">
								<div class="col-md-3">
                                	<div class="main-data-single-field">
                                    	<span style="font-weight: bold;">Search</span>
                                        <span><input type="text" id="pname" name="pname" style="border-radius: 4px;border-style: groove;width: 111px;"></span>
                                    </div>
                                </div>
								<div class="col-md-4">
                                	<div class="main-data-single-field">
                                    	<span style="font-weight: bold;">Start Date</span>
                                        <span><input type="date" id="sdate" name="sdate" style="border-radius: 4px;border-style: groove;"></span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                	<div class="main-data-single-field">
                                    	<span style="font-weight: bold;">End Date</span>
                                        <span><input type="date" id="edate" name="edate" style="border-radius: 4px;border-style: groove;"></span>
                                        <span><button type="button" id="search"style="background-color: #d9a944;color: #FFFFFF;border-radius:6px;border:1px solid #33cccc;box-shadow: 0 4px 5px 0 rgba(156, 39, 176, 0.14), 0 1px 10px 0 rgba(156, 39, 176, 0.12), 0 2px 4px -1px rgba(156, 39, 176, 0.2);">Search</button></span>
                                    </div>
                                </div>
                            </div>
							</form>
						</div>
					</div>
					
                 -->
                
        
					<!-- /.box-header -->
					<div class="box-body">
						<?php if($this->session->flashdata('success')){ ?>
							<div class="success-message">
								<script> swal("Good job!", "<?= $this->session->flashdata('success')?>!", "success") </script>
							</div>
						<?php }?>
						<table id="example1" class="table table-bordered table-striped">
							<thead>
						  <tr>
                                    <th>Sno.</th>
                                    <th>User ID</th>
                                    <th>Username</th>
                                    <th>Bet Amount</th>
                                    <th>Won Amount</th>
                                    <th>Date</th>
                                </tr>
							</thead>
							<tbody id = "ts">
							<?php $i = $segmentCount; foreach($details as $data){ ?>
								<tr>
									<td><?= $i+1;?></td>
									<td><?php  echo $data['userName'];?></td>
									 <td><?php  echo $data['name'];?></td>
									 <td><?php  echo $data['waggerAmount'];?></td>
									<td><?php  echo $data['waggersWon'];?></td>
									<td><?php  echo $data['date'];?></td>
								
								</tr>
							<?php $i++; } ?>
							</tbody>
						</table>
						<?php echo $links;?>
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->
			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->
	</section>
	<!-- /.content -->
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
<script type="text/javascript" src="http://w2ui.com/src/w2ui-1.4.2.min.js"></script>
	<link rel="stylesheet" type="text/css" href="http://w2ui.com/src/w2ui-1.4.2.min.css" />
	<script>
	$(document).ready(function() {
	  $(".popup_image").on('click', function() {
		w2popup.open({
		  title: 'Payment Image',
		  height : 1000,
		  width : 1000,
		  showMax : true,
		  body: '<div class="w2ui-centered"><img src="' + $(this).attr('src') + '"></img></div>'
		});
	  });

	});
</script>
<script>
document.addEventListener("DOMContentLoaded", function() {
    var startDateInput = document.getElementById('startDate');
    var endDateInput = document.getElementById('endDate');
    var searchButton = document.getElementById('searchButton');

    // Set max attribute to current date to prevent future dates selection
    var today = new Date().toISOString().split('T')[0];
    startDateInput.setAttribute('max', today);
    endDateInput.setAttribute('max', today);

    // Update end date min attribute when start date changes
    startDateInput.addEventListener('change', function() {
        var startDate = startDateInput.value;
        endDateInput.setAttribute('min', startDate);
        // Clear end date if it is before the new start date
        if (endDateInput.value && endDateInput.value < startDate) {
            endDateInput.value = '';
        }
    });

    // Ensure end date is not before start date
    searchButton.addEventListener('click', function(event) {
        var startDate = startDateInput.value;
        var endDate = endDateInput.value;

        if (startDate && endDate && endDate < startDate) {
            alert('End Date cannot be earlier than Start Date.');
            event.preventDefault(); // Prevent form submission
        }
    });
});
</script>

<script>
	$(document).ready(function(){
    // Date range picker initialization
    var dtToday = new Date();
    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear() + 1;
    if(month < 10) month = '0' + month.toString();
    if(day < 10) day = '0' + day.toString();
    var maxDate = year + '-' + month + '-' + day;
    $('#startDate').attr('max', maxDate);
    $('#endDate').attr('max', maxDate);
});              
</script>