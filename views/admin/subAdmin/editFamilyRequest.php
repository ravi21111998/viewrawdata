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
					<div class="box-body">
						<?php if($this->session->flashdata('success')){ ?>
							<div class="success-message">
								<script> swal("Good job!", "<?= $this->session->flashdata('success')?>!", "success") </script>
							</div>
						<?php }?>
						<?php if($this->session->flashdata('error')){ ?>
							<div class="success-message">
								<script> swal("<?= $this->session->flashdata('error')?>!", "error") </script>
							</div>
						<?php }?>
						<table id="example1" class="table table-bordered table-striped">
							<thead>
							<tr>
								<th>Sr.</th>
								<th>Old Name</th>
                                <th>New Name</th>
                                <th>Old Description</th>
                                <th>New Description</th>
								<th>Old Image</th>
								<th>New Image</th>
								<th>Action</th>
							</tr>
							</thead>
							<tbody id="ts">
							<?php
							if(!empty($details)){
								$i = 1; 
								foreach($details as $data){ ?>
									<tr>
										<td><?= $i;?></td>
										<td><?= $data['oldFamilyName'];?></td>
										<td><?= $data['newFamilyName'];?></td>
										<td><?= $data['oldDescription'];?></td>
										<td><?= $data['newDescription'];?></td>
										<td><img src="<?= ($data['oldImage']) ? $data['oldImage'] : base_url('uploads/no_image_available.png');?>" alt="" width="80px" height="80px"></td>
										<td><img src="<?= ($data['newImage']) ? $data['newImage'] : base_url('uploads/no_image_available.png');?>" alt="" width="80px" height="80px"></td>
										<td>
										<select name="approveReject" class="approveReject" onchange="approveReject('<?= $data['editId'] ?>', this.value)">
											<option value="">----Select One----</option>
											<option value="1">Approve</option>
											<option value="2">Reject</option>
										</select>
										</td>
									</tr>
								<?php
								 $i++;
								  }
							}else{
								?>
								<tr class="text-center">
									<td colspan="8">Data Not Found</td>
								</tr>
								<?php
							}							
							   ?>
							</tbody>
						</table>
						<!-- <?php echo $links;?> -->
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
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script src="sweetalert2.all.min.js"></script>
	<script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">
	<script>
		function approveReject(rowId, status) {
			var familyId = rowId;
			var selectedValue = status;
			$.ajax({
				url: "<?= site_url('Admin/appRejeFamilyReq') ?>",
				type: "post",
				data: {selectedValue,familyId},
				dataType: "json",

				success: function (res){
					if(res == "1"){
						Swal.fire({
						icon: "success",
						title: "Done",
						text: "Family request updated",
						});
						setTimeout(function(){
							window.location.reload();
						}, 2000);
					}else if(res == "2"){
						Swal.fire({
						icon: "error",
						title: "Oops...",
						text: "Failed to update family request",
						});
						setTimeout(function(){
							window.location.reload();
						}, 2000);
					}else if(res == "0"){
						Swal.fire({
						icon: "error",
						title: "Oops...",
						text: "Family not found",
						});
						setTimeout(function(){
							window.location.reload();
						}, 2000);
					}else if(res == "3"){
						Swal.fire({
						icon: "success",
						title: "Done",
						text: "Family request Rejected",
						});
						setTimeout(function(){
							window.location.reload();
						}, 2000);
					}else if(res == "4"){
						Swal.fire({
						icon: "error",
						title: "Oops...",
						text: "Failed to Rejected family request",
						});
						setTimeout(function(){
							window.location.reload();
						}, 2000);
					}else if(res == "5"){
						Swal.fire({
						icon: "error",
						title: "Oops...",
						text: "Invalid status value",
						});
						setTimeout(function(){
							window.location.reload();
						}, 2000);
					}else if(res == "6"){
						Swal.fire({
						icon: "error",
						title: "Oops...",
						text: "Missing status or family ID",
						});
						setTimeout(function(){
							window.location.reload();
						}, 2000);
					}
				}
			});
		}
	</script>
