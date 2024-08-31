<div class="content-wrapper">
	<section class="content-header">
		<h1>
			<?= $title;?>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo site_url();?>/admin/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="<?php echo site_url();?>/Faq">Manage FaQ's / Help</a></li>
			<li class="active"><?= $title;?></li>
		</ol>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<form role="form" method="post" id="specialitiesForm" enctype="multipart/form-data">
					<div class="box box-warning">
						<div class="box-header with-border">
							<h3 class="box-title"><?= $title;?></h3>
							<span style="float: right;">
				                <button type="submit" data-toggle="tooltip" title="Save" class="saveButton"><i class="fa fa-save saveIcon"></i> </button>
				            </span>
						</div>
						<div class="box-body">
							<div class="form-group">
								<label>Qusetion</label>
								<input type="text" class="form-control" value="<?= set_value('title');?>" name="title" placeholder="Enter...">
								<div class="form-error1"><?= form_error('title');?></div>
							</div>
							<div class="form-group">
								<label>Answer</label>
								<input type="text" class="form-control" value="<?= set_value('ans');?>" name="ans" placeholder="Enter..">
								<div class="form-error1"><?= form_error('ans');?></div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</section>
</div>