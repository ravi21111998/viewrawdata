<div class="content-wrapper">

	<section class="content-header">
		<h4>Add Coins</h4>
		<ol class="breadcrumb">
			<li><a href="<?php echo site_url();?>/admin/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
			<li>Add Coins</li>
			<!-- <li>Add Coins</li> -->
			<!-- <li><a href="<?php echo site_url();?>/user/manageCoins">Manage Coins</a></li> -->
			<!-- <li class="active"><?= $title;?></li> -->
		</ol>
	</section>

	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<form role="form" method="post" action="<?php echo site_url();?>/user/addCoins">
					<div class="box box-warning">
						<div class="box-header with-border">
							<h3 class="box-title"><?= $title;?></h3>
						</div>
						<div class="box-body">
							<div class="form-group">
								<label>Add Coins</label>
								<input type="number" class="form-control" value="<?= set_value('title');?>" name="coins" required placeholder="Add Coins">
								<div class="form-error1"><?= form_error('title');?></div>
							</div>
							<div class="form-group text-center">
								<input type="reset" class="btn btn-danger" value="Reset" style="margin-right:1rem">
								<input type="submit" class="btn btn-md btn-success" name="AddCoins" value="Submit">
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</section>
</div>