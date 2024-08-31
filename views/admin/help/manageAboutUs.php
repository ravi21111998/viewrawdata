<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<style>
.success-message {
		font-size: 20px;
		margin-bottom: 10px;
		text-align: center;
		color: #95c840;
}
</style>

<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>
		 <?php echo $title; ?>
			</h1>
	 <!-- <ol class="breadcrumb">
				<li><a href="<?php echo site_url();?>admin/Admin/viewVehicle"><button class="btn btn-primary"><?php if($this->session->userdata('language') == 'en'){ echo "view Category"; } else { echo "Adicionar sub-serviços";  }?></button></a></li>

            </ol> -->
		</section>

		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-xs-12">
					<div class="box">
						<!--div class="box-header">
							<h3 class="box-title">Add Category</h3>
						</div-->
						<!-- /.box-header -->
						<div class="box-body">
			 <?php if($this->session->flashdata('success')){ ?>
				 <div class="success-message">
				 <?php echo $this->session->flashdata('success'); ?>
				 </div>
			 <?php }?>
							<table id="example1" class="table table-bordered table-striped">
								<thead>
								<tr>
									<th>S. No.</th>
									<th>Application</th>
									<th>Content</th>
				                    <th>Action</th>
								 </tr>
								</thead>
								<tbody>
			 <?php $i= 1; foreach($details as $row){?>
								<tr>
									<td><?php echo $i ?></td>

				 <td><?php 
                 if($row['heading_id']=='1'){
                     echo "Terms & Conditions";
                 }
                 elseif($row['heading_id']=='2'){
                        echo "Privacy Policy";
                 }
                 elseif($row['heading_id']=='0'){
                     echo "About us";
                 }
                 
                 ?></td>
				 <td><?php echo $row['title']?></td>
                 
				 
									<td>
										<!-- <a href="<?php echo site_url();?>admin/Admin/viewVehicle/<?php echo $cate['id']?>"><i class="fa fa-eye" style="font-size: 20px;"></i>&nbsp;&nbsp;</a> -->

					 <a href="<?php echo site_url()?>/Admin/addAboutUs/<?php echo $row['id']?>"><i class="fa fa-edit" style="font-size: 20px;"></i>&nbsp;&nbsp;</a>
					 <!-- <a onclick="return confirm('Are you sure want to delete it? ');" href="<?php echo site_url();?>admin/Admin/deleteVehicle/<?php echo $cate['id']?>"><i class="fa fa-trash" style="font-size: 22px;"></i></a> -->

				 </td>
								</tr>
			 <?php $i++; } ?>
								</tbody>
							</table>
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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
		 showMax : false,
		 body: '<div class="w2ui-centered"><img src="' + $(this).attr('src') + '"></img></div>'
	 });
	 });

 });

</script>