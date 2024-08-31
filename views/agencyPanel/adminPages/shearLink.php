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
						<input type="hidden" name="agencycode" id="agencycode" value="<?= $admin['agencyCode'] ?>">
						<input type="text" name="searchByHostId" id="searchByHostId" placeholder="Enter Email">
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
                                <th>Agency Code</th>
                                <th>Email</th>
								<th>Date</th>
							</tr>
							</thead>
							<tbody id = "ts">
							<?php $i = $segmentCount; foreach($details as $data){ ?>
								<tr>
									<td><?= $i ?></td>
                                      <td><?= $data['agency_code'] ?></td>
                                     <td><?= $data['email'] ?></td>
									<td><?= $data['created_at'] ?></td>
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

<script>
	 $("#searchByHostId").keyup(function(event) {
          event.preventDefault();
          var search = $('#searchByHostId').val();
          var agencycode = $('#agencycode').val();
		  $.ajax({
    		type:"post",
   			url:"<?= site_url()?>/AgencyPanel/searchByShearEmail",
               data:{search,agencycode},
    		dataType: 'json',
            success: function(data){
				// console.log(data);
			$('#ts').html(data);
			}
     	});
     });
</script>
