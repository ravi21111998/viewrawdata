<div class="content-wrapper">

	<section class="content-header">

		<h1>

			<?= $title;?>

		</h1>

		<ol class="breadcrumb">

			<li><a href="<?php echo site_url();?>/admin/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>

			<li><a href="<?php echo site_url();?>/Admin/viewGalleryPurchaseCoins">View PurchaseGallery Coins</a></li>

			<li class="active"><?= $title;?></li>

		</ol>

	</section>

	<section class="content">

		<div class="row">

			<div class="col-md-10">

				<form role="form" method="post" id="specialitiesForm" enctype="multipart/form-data">

					<div class="box box-warning">

						<div class="box-header with-border">

							<h3 class="box-title"><?= $title;?></h3>

						</div>

						<div class="box-body">

							<div class="form-group">

								<label>Coins*</label>

								<input type="text" class="form-control" value="<?= set_value('coins');?>" name="coins" placeholder="Coins">

								<div class="form-error1"><?= form_error('coins');?></div>

							</div>
							
							<div class="form-group">

								<label>Valid Days*</label>

								<input type="text" class="form-control" value="<?= set_value('valid');?>" name="valid" placeholder="Coins">

								<div class="form-error1"><?= form_error('valid');?></div>

							</div>

							<!--<div class="form-group">-->

							<!--	<label>Image*</label>-->

							<!--	<input type="file" class="form-control" name="frame_img">-->

							<!--	<div class="form-error1"><?= form_error('frame_img');?></div>-->

							<!--</div>-->

							<div class="form-group">

								<button type="reset" class="btn btn-danger">Cancel</button>

								<input type="submit" class="btn btn-success pull-right" name="submit" value="Submit">

							</div>

						</div>

					</div>

				</form>

			</div>

		</div>

	</section>

</div>
