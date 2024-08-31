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
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			<?= $title;?>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo site_url();?>/admin/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active"><?= $title?></li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
		   <!-- /.box -->
				<div class="box">
					<!-- <div class="box-header">
						<h3 class="box-title"><a href="<?= site_url();?>/Report/addProblem" style="font-size: 14px;" class="btn btn-block btn-success btn-xs">Add Problem Report</a></h3>
					</div> -->
                
                   <!--	<div class="main-data">
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
					</div> -->
                
					<!-- /.box-header -->
					<div class="box-body">
						<!-- <?php if($this->session->flashdata('success')){ ?>
							<div class="success-message">
								<script> swal("Good job!", "<?= $this->session->flashdata('success')?>!", "success") </script>
							</div>
						<?php }?> -->
						<table id="example1" class="table table-bordered table-striped">
							<thead>
							<tr>
								<th>Sr.</th>
								<th>Username</th>
								<th>Report Username</th>
								<th>Report</th>
								<th>Date/Time</th>
								<th>Video</th>
								<th>Action</th>
								<!-- <th>Action</th> -->
							</tr>
							</thead>
							<tbody id = "ts">
							<?php $offset += 1; foreach($details as $data){ ?>
								<tr>
									<td><?= $offset++; ?></td>
									<td><?php  echo $data['uname'];?></td>
									<td><?php  echo $data['rname'];?></td>
									<td><?php  echo $data['report'];?></td>
									<td><?php  echo $data['created'];?></td>
									<td><video controls="" loop="" muted="" style="width: 100px;height: 100px;">
                      				<source src="<?php echo $data['videoPath'] ?>" type="video/mp4">
                    				</video></td>
									 <td>
										<ul class="admin-action btn btn-default" style="background-color: #f4f4f4;color: #fff !important;">
											<li class="dropdown">
											    <a class="dropdown-toggle" style="color: black;" data-toggle="dropdown" href="#" aria-expanded="false">
												  Action <span class="caret"></span>
												</a>
												<ul class="dropdown-menu dropdown-menu-right">
													<!-- <li role="presentation">
														<a role="menuitem" tabindex="-1" href="<?= site_url()?>/Report/editProblem/<?= $data['id'];?>">Edit</a>
													</li> -->
													<li>
														<a role="menuitem" tabindex="-1" onclick="return confirm('Are you sure you want to delete?');" href="<?= site_url()?>/Report/deleteuserProblem/<?= $data['id'];?>">Delete
											            </a>
													</li>   	             	
												</ul>
											</li>
										</ul>
									</td> 
								</tr>
							<?php  } ?>
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
     $("#pname").keyup(function(event) {
          event.preventDefault();
          if (event.keyCode === 13) {
              $("#search").click();
           }
     });
	 $(document).ready(function(){
	 $("#search").click(function(){
		var start = $("#sdate").val();
		var end = $("#edate").val();
		var name = $("#pname").val();
    	$.ajax({
    		type:"post",
   			url:"<?= site_url()?>/report/getuserResult",
    		data:{s:start,e:end,p:name},
    		dataType: 'json',                //data format
            success: function(data){
            if(data ==''){
            	$('#ts').html('<tr class="odd"><td valign="top" colspan="7" class="dataTables_empty">No data available in table</td></tr>');
            }
            else{
            	var html, comment;
                for(var i = 0; i < data.length; i++) {
                	comment = data[i];
           			html += '<tr><td>' + (i+1) + '</td><td>' + comment.name + '</td><td>' + comment.userId + '</td><td>' + comment.email + 
                    '</td><td>' + comment.phone + '</td><td>' + comment.report + 
                    '</td><td><ul class="admin-action btn btn-default" style="background-color: #f4f4f4;color: #fff !important;"><li class="dropdown"><a class="dropdown-toggle" style="color: black;" data-toggle="dropdown" href="#" aria-expanded="false">' + "Action " + '<span class="caret"></span></a></li></ul></td></tr>';
            	}
            
           		$('#ts').html(html);
           		}
       		}
    	});										          
	});
});
		$(function(){
			var dtToday = new Date();
			var month = dtToday.getMonth() + 1;
			var day = dtToday.getDate();
			var year = dtToday.getFullYear()+1;
			if(month < 10)
				month = '0' + month.toString();
			if(day < 10)
				day = '0' + day.toString();
				var maxDate = year + '-' + month + '-' + day;
			$('#sdate').attr('max', maxDate);
			$('#edate').attr('max', maxDate);
		});  
		
</script>

