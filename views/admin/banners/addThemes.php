<div class="content-wrapper">

	<section class="content-header">

		<h1>

			<?= $title;?>

		</h1>

		<ol class="breadcrumb">

			<li><a href="<?php echo site_url();?>/admin/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>

			<li><a href="<?php echo site_url();?>/Admin/themes">View Themes</a></li>

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

								<label>Price*</label>

								<input type="text" class="form-control" value="<?= set_value('price');?>" name="price" placeholder="Price">

								<div class="form-error1"><?= form_error('price');?></div>

							</div>

							<div class="form-group">

								<label>valditity*</label>

								<input type="number" class="form-control" value="<?= set_value('valditity');?>" name="valditity" placeholder="valditity">

								<div class="form-error1"><?= form_error('valditity');?></div>

							</div>


							<div class="form-group">

								<label>Image*</label>

								<input type="file" class="form-control" name="theme">

								<div class="form-error1"><?= form_error('theme');?></div>

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