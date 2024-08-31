<div class="content-wrapper">
	<section class="content-header" style="margin:15px 0px;">
		<h1>
			<?= $title;?>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo site_url();?>/admin/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active"><?= $title;?></li>
		</ol>
	</section>
	<section class="content">
			
		<!-- favicon  -->
		<div class="row">
			<div class="col-md-8">
				<form role="form" action="" method="post" id="" enctype="multipart/form-data">
					<div class="box box-warning">
						<?php if($this->session->flashdata('success')){ ?>
             				<div class="success-message">
                			<script> swal("Good job!", "<?= $this->session->flashdata('success')?>!", "success") </script>
              				</div>

            			<?php unset($_SESSION['success']); }?>
						<div class="box-header with-border">
							<h3 class="box-title"><?= $title2;?></h3>

							<span style="float: right;">
				           <button type="submit" data-toggle="tooltip" name="favIcon" title="Save" class="saveButton"><i class="fa fa-save saveIcon"></i>
						</button>
				            </span>
						</div>
						<div class="box-body">
							<div class="form-group">
								<label>Update Favicon</label>
								<input type="file" class="form-control" name="image" >
								<div class="form-error1"><?php echo  form_error('image');?></div>
							</div>
						 <!-- <input type="hidden" name="id" value="<?php echo $details['id'];?>"> -->
						</div>
					</div>
				</form>
			</div>

			<div class="col-md-4">
				<form role="form" method="post" id="" enctype="multipart/form-data">
					<div class="box box-warning">
						<div class="box-body" style="background:#000;">
							<div class="form-group">
								<label style="color:#fff;">Favicon</label>
									<span style="float: right;">
							<img src="<?= base_url().$img1?>" style="height: 90px;" >


                            </span>
							</div>

						</div>
					</div>
				</form>
			</div>
		</div>

		<!-- logo  -->

		<div class="row">
			<div class="col-md-8">
				<form role="form" action="" method="post" id="" enctype="multipart/form-data">
					<div class="box box-warning">
						<?php if($this->session->flashdata('success')){ ?>
             				<div class="success-message">
                			<script> swal("Good job!", "<?= $this->session->flashdata('success')?>!", "success") </script>
              				</div>

            			<?php unset($_SESSION['success']); }?>
						<div class="box-header with-border">
							<h3 class="box-title"><?= $title3;?></h3>

							<span style="float: right;">
				           <button type="submit" data-toggle="tooltip" name="logo" title="Save" class="saveButton"><i class="fa fa-save saveIcon"></i>
						</button>
				            </span>
						</div>
						<div class="box-body">
							<div class="form-group">
								<label>Update Logo</label>
								<input type="file" class="form-control" name="image" >
								<div class="form-error1"><?php echo  form_error('image');?></div>
							</div>
						 <!-- <input type="hidden" name="id" value="<?php echo $details['id'];?>"> -->
						</div>
					</div>
				</form>
			</div>

			<div class="col-md-4">
				<form role="form" method="post" id="" enctype="multipart/form-data">
					<div class="box box-warning">
						<div class="box-body" style="background:#000;">
							<div class="form-group">
								<label style="color:#fff;">Logo</label>
									<span style="float: right;">
							<img src="<?= base_url().$img2;?>" style="height: 120px;" >


                            </span>
							</div>

						</div>
					</div>
				</form>
			</div>
		</div>
	</section>

</div>




<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
</script>
