<div class="content-wrapper">
	<section class="content-header">
		<h1>
			<?= $title;?>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo site_url();?>/admin/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="<?php echo site_url();?>/SubAdmin/manageIdBannedPortal">Manage IdBanned Portal</a></li>
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
								<label>Portal Name*</label>
								<input type="text" class="form-control" value="<?php echo $details['portalName']?>" name="name" placeholder="Name">
								<div class="form-error1"><?= form_error('name');?></div>
							</div>
							<div class="form-group">
								<label>Username*</label>
								<input type="text" class="form-control" value="<?php echo $details['username']?>" name="username" placeholder="Username">
								<div class="form-error1"><?= form_error('username');?></div>
							</div>
							<div class="form-group">
								<label>Email*</label>
								<input type="text" class="form-control" value="<?php echo $details['email']?>" name="email" placeholder="Email">
								<div class="form-error1"><?= form_error('email');?></div>
							</div>
							<div class="form-group">
								<label>Mobile*</label>
								<input type="number" class="form-control" value="<?php echo $details['phone']?>" name="phone" placeholder="Mobile">
								<div class="form-error1"><?= form_error('phone');?></div>
							</div>
							<div class="form-group">

                                <label>Zone*</label>
                                
                                <select class="form-control" id="sel1" name="continent">
                                    <option value="">Select Zone</option>
                                    <option value="Asia" <?php if($details['portal_continent'] == 'Asia'){ echo "selected"; } ?>>Asia</option>
                                    <option value="Africa" <?php if($details['portal_continent'] == 'Africa'){ echo "selected"; } ?>>Africa</option>
                                    <option value="Europe" <?php if($details['portal_continent'] == 'Europe'){ echo "selected"; } ?>>Europe</option>
                                     <option value="North America" <?php if($details['portal_continent'] == 'North America'){ echo "selected"; } ?>>North America</option>
									 <option value="South America" <?php if($details['portal_continent'] == 'South America'){ echo "selected"; } ?>>South America</option> 
                                    <option value="Australia" <?php if($details['portal_continent'] == 'Australia'){ echo "selected"; } ?>>Australia</option>
                                    <option value="Antarctica" <?php if($details['portal_continent'] == 'Antarctica'){ echo "selected"; } ?>>Antarctica</option>
                                    

                                </select>

                                <div class="form-error1"><?= form_error('continent');?></div>

                            </div>

							<div class="form-group">
								<label>Picture*</label>
								<input type="file" class="form-control" name="image"> <br><br>
						        <img src="<?php echo $details['image'] ?>" style="width: 280px;height: 280px"><br>
								<div class="form-error1"><?= form_error('image');?></div>
							</div>
							<input type="hidden" value="<?php echo $details['id']?>" name="id">
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
