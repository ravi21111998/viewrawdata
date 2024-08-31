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
			<li><a href="#"> Badges</a></li>
			<li class="active"><?= $title?></li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
		   <!-- /.box -->
				<div class="box">
				    <form id="getform" >
					</form>

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
								<th>Sr.</th>
								<th>UserId</th>
								<th>description</th>
								<th>Image/Video</th>
                                <th>Status</th>
                                <th>Like Count</th>
                                <th>Action</th>
							</tr>
							</thead>
							<tbody>
							<?php $i = 1; foreach($videos as $data){ ?>
								<tr>
									<td><?= $i;?></td>
                                        <td><?php  echo $data['userId'];?></td>
									<td><?php  echo $data['description'];?></td>
									<td><?php 
                                    if($data['status'] == 0){
                                        if(!empty($data['image'])){?>
											<img src="<?php echo $data['image'];?>" style="width: 200px;height: 200px">
										<?php } else{ ?>
												<img src="<?php echo base_url()?>uploads/dummy.png" style="width: 200px;height: 200px">
										<?php }
                                    }elseif($data['status'] == 1){
                                        if(!empty($data['image'])){?>
											<video src="<?php echo $data['image'];?>" style="width: 200px;height: 200px" controls>
										<?php } else{ ?>
												<img src="<?php echo base_url()?>uploads/dummy.png" style="width: 200px;height: 200px">
										<?php }
                                    }
                                     ?></td>
                                        <td><?php  echo $data['status'];?></td>
                                        <td><?php  echo $data['likeCount'];?></td>
                                    <td><a href="<?php echo site_url()?>/User/deleteVideo/<?php echo $data['id'];?>"><button>Delete</button></a></td>
								</tr>
							<?php $i++; } ?>
							</tbody>
						</table>
						<?php //echo $links;?>
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