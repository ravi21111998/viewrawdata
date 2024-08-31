<div class="content-wrapper">

	<section class="content-header">

		<h1>

			<?= $title;?>

		</h1>

		<ol class="breadcrumb">

			<li><a href="<?php echo site_url();?>/admin/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>

			<li><a href="<?php echo site_url();?>/Videos/adminVideo">Manage Admin Video</a></li>

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

								<label>Video Title*</label>

								<input type="text" class="form-control" value="<?php echo  set_value('videoTitle');?>" name="videoTitle" placeholder="Video title">

								<div class="form-error1"><?= form_error('videoTitle');?></div>

							</div>

							<div class="form-group">

								<label>View Count*</label>

								<input type="number" class="form-control" value="<?= set_value('viewCount');?>" name="viewCount" placeholder="View Count">

								<div class="form-error1"><?= form_error('viewCount');?></div>

							</div>





							<div class="form-group">

								<label>Upload Video*</label>

								<input type="file" class="form-control" name="videoPath">

								<div class="form-error1"><?= form_error('videoPath');?></div>

							</div>



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
