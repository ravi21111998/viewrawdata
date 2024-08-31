<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

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
			<li><a href="<?php echo site_url();?>/AgencyPanel/mainDash"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active"><?= $title?></li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
		   <!-- /.box -->
				<div class="box">
					<div class="searchHost mt-2 ms-2">
						<label for="">Search By Host Id</label>
						<input type="hidden" name="agencycode" id="agencycode" value="<?= $agencycode ?>">
						<input type="text" name="searchByHostId" id="searchByHostId" placeholder="Enter host id">
					</div>
					<div class="box-body">
						<?php if($this->session->flashdata('success')){ ?>
							<div class="success-message">
								<script> swal("Good job!", "<?= $this->session->flashdata('success')?>!", "success") </script>
							</div>

						<?php }?>
						<table id="example1" class="table table-bordered table-striped">
							<thead>
							<tr>
								<th>Sr.</th>
                                <th>Image</th>
                                <th>Host Name</th>
								<th>HostId</th>
								<th>Email</th>
								<th>Host Status</th>
 								<th>Action</th>
							</tr>
							</thead>
							<tbody id = "ts">
							<?php $i = $segmentCount; foreach($details as $data){ ?>
								<tr>
									<td><?= $i;?></td>
                                      <td>
                                        <?php if(!empty($data['image'])){?>
                                          <img src="<?php echo $data['image']?>" style="width:80px">
                                        <?php } else{?>
                                          <img src="<?php echo base_url().'uploads/no_image_available.png' ?>" style="width:80px">
                                        <?php } ?>
                                      </td>
                                     <td><?php  echo $data['name'];?></td>
									<td><?php  echo $data['username'];?></td>
									<td><?php  echo $data['email'];?></td>
									<td>
                                        <?php if($data['host_status'] == "1"){?>
                                          <span class="label label-success"><?php  echo "Pending";?></span>
                                        <?php } elseif($data['host_status'] == "2"){?>
                                        
                                        <span class="label label-success"><?php  echo "Approved";?></span>
                                        
                                        <?php }else{ ?>
                                          <span class="label label-warning"><?php  echo "Rejected";?></span>
                                        <?php } ?>
                                    </td>
									<!-- By AAAAAAA -->

									<td>
									<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal<?= $data['username'];?>">Modal</button>
									</td>
									<!-- End  AAAAAA -->
								</tr>

								<!-- Modal -->
							<div class="modal fade" id="exampleModal<?= $data['username'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">Re-Assign Host</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<form action="<?= site_url('AgencyPanel/reAssignHost') ?>" method="post">
											<div class="form-group">
												<label for="exampleInputEmail1">Agency Code</label>
												<input type="text" class="form-control" name="agencyCode">
												<small id="emailHelp" class="form-text text-muted">The agency to witch the host is to be given  </small>
												<input type="hidden" name="userId" value="<?= $data['username'];?>">
											</div>
											<button type="submit" class="btn btn-primary">Submit</button>
										</form>
									</div>
									</div>
								</div>
								</div>
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

<!--excel script    -->
<script>
    $(document).ready(function() {
        $('#getexcel').on('click', function() {
            var action = '<?php echo site_url();?>/user/getexcel';
            $('#getform').attr('action', action);
            $('#getform').submit();

        });
    });

</script>


<!--pdf script  -->
<script>
     $("#getpdf").click(function() {
        var action = '<?php echo site_url();?>/user/getpdf';
        $('#getform').attr('action', action);
        $('#getform').attr('target', "_blank");
        $('#getform').submit();
    });
</script>
<script>
	 $("#searchByHostId").keyup(function(event) {
          event.preventDefault();
          var search = $('#searchByHostId').val();
          var agencycode = $('#agencycode').val();
		  $.ajax({
    		type:"post",
   			url:"<?= site_url()?>/AgencyPanel/searchByHostId",
    		data:{search,agencycode},
    		dataType: 'json',                //data format
            success: function(data){
				// console.log(data);
			$('#ts').html(data);
			}
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
   			url:"<?= site_url()?>/user/getResult",
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
                  if(comment.status == 'Approved')
                  var mainStaus = 'Decline';
                  else
                  var mainStaus = 'Approve';
           			html += '<tr><td>' + (i+1) + '</td><td>' + comment.username + '</td><td>' + comment.email + '</td><td>' + comment.phone +
                    '</td><td><span class="label label-warning">' + "Upgrade" + '</span></td><td>' + "--" + '</td><td><span class="label label-warning">' + "Clear" +
                    '</span></td><td><span class="label label-success">' + comment.status +
                    '</span></td><td><ul class="admin-action btn btn-default" style="background-color: #f4f4f4;color: #fff !important;"><li class="dropdown"><a class="dropdown-toggle" style="color: black;" data-toggle="dropdown" href="#" aria-expanded="false">' + "Action " + '<span class="caret"></span></a><ul class="dropdown-menu dropdown-menu-right"><li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo  site_url()?>/user/view/'+comment.id+'">View</a></li><li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo site_url()?>/user/edit/'+comment.id+'">Edit</a></li><li><a role="menuitem" tabindex="-1" onclick="return confirm(&quot;Once you deleted this account, the user (' + comment.username + ') will no longer be able to log in to the site or apps. This action cannot be undone.&quot;);" href="<?= site_url()?>/user/delete/'+comment.id+'">Delete</a></li><li role="presentation" class="divider"></li><li role="presentation"><a role="menuitem" tabindex="-1" href="<?= site_url()?>/user/giftHistory/'+comment.id+'">Received Gift History</a></li><li role="presentation"><a role="menuitem" tabindex="-1" href="<?= site_url()?>/user/giftHistory/'+comment.id+'">Send Gift History</a></li><li role="presentation"><a role="menuitem" tabindex="-1" href="<?= site_url()?>/user/purchaseCoinHistory/'+comment.id+'">Coin Hisory</a></li><li role="presentation" class="divider"></li><li role="presentation"><a role="menuitem" onclick="return confirm(' + comment.username +' - Do you want'+ mainStaus +'this user;);" tabindex="-1" href="<?= site_url()?>/user/status/'+comment.id+'">'+ mainStaus +'</a></li></ul></li></ul></td></tr>';
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
