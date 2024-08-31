<div class="content-wrapper">

	<section class="content-header">
		<h4>Manage Coins</h4>
		<ol class="breadcrumb">
			<li><a href="<?php echo site_url();?>/admin/dashboard"><i class="fa fa-dashboard"></i>Home</a></li>
			<li>Manage Coins</li>
			<!-- <li>Add Coins</li> -->
			<!-- <li><a href="<?php echo site_url();?>/user/manageCoins">Manage Coins</a></li> -->
			<!-- <li class="active"><?= $title;?></li> -->
		</ol>
	</section>

	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<!-- <form role="form" method="post" id="specialitiesForm" enctype="multipart/form-data">
					<div class="box box-warning">
						<div class="box-header with-border">
							<h3 class="box-title"><?= $title;?></h3>
						</div>
						<div class="box-body">
							<div class="form-group">
								<label>Title*</label>
								<input type="text" class="form-control" value="<?php echo $details['title']?>" name="title" placeholder="title">
								<div class="form-error1"><?= form_error('title');?></div>
							</div>
							<div class="form-group">

								<label>Beans*</label>

								<input type="number" class="form-control" value="<?php echo $details['coin']?>" name="coin" placeholder="Coin">
 
								<div class="form-error1"><?= form_error('coin');?></div>
 
							</div>
						</div>
					</div>
				</form> -->

				<table class="table table-bordered table-hover text-center" style="border-style:solid;border-color:red">
					<tr>
						<th>#</th>
						<th>Coins</th>
						<th>Action</th>
					</tr>
				<tbody>
				<?php
					foreach($result as $row)
					{
				?>
					<tr>
						<td><?php echo $row['id'];?></td>
						<td><?php echo $row['coins'];?></td>
						<td>
							<button class="btn btn-success">Edit</button>
						</td>
					</tr>
				<?php
					}
				?>
				</tbody>
				</table>
			</div>
		</div>
	</section>
</div>
