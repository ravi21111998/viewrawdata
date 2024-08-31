<div class="content-wrapper">
	<section class="content-header">
		<h1>
			<?= $title;?>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo site_url();?>/admin/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="<?php echo site_url();?>/Gift/liveGift">Manage Live Gift</a></li>
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
							  <label for="sel1">Category List:</label>
							   
							  
							  <select class="form-control" id="sel1" name="categoryId">
                                    <option value="">Please select category</option>
                                    <option value="Privilege" <?php if($details['gift_type'] == "Privilege"){ echo "selected"; } ?> >Privilege</option>
                                    <option value="EventGifts" <?php if($details['gift_type'] == "EventGifts"){ echo "selected"; } ?> >EventGifts</option>
                                    <option value="Trick" <?php if($details['gift_type'] == "Trick"){ echo "selected"; } ?> >Trick</option>
                                    <option value="SoundGifts" <?php if($details['gift_type'] == "SoundGifts"){ echo "selected"; } ?> >SoundGifts</option>
                                    
                                    <!--<option value="1" <?php if($details['userBanStatus'] == 1){ echo "selected"; } ?> >Permanent Ban</option>-->
                                 </select>
                                 
								<div class="form-error1"><?= form_error('categoryId');?></div>
							</div>



							<div class="form-group">
								<label>Title*</label>
								<input type="text" class="form-control" value="<?php echo $details['title']?>" name="title" placeholder="title">
								<div class="form-error1"><?= form_error('title');?></div>
							</div>
							<div class="form-group">
								<label>Coin*</label>
								<input type="number" class="form-control" value="<?php echo $details['primeAccount']?>" name="primeAccount" placeholder="Coin">
								<div class="form-error1"><?= form_error('primeAccount');?></div>
							</div>
							<div class="form-group">
								<label>Image*</label>
								<input type="file" class="form-control" name="image">
								<div class="form-error1"><?= form_error('image');?></div>
							</div>
							<div class="form-group">
								<label>Thumbnail*</label>
								<input type="file" class="form-control" name="thumbnail">
								<div class="form-error1"><?= form_error('thumbnail');?></div>
							</div>

                            <!--<div class="form-group">-->

                            <!--    <label>Sound*</label>-->

                            <!--    <input type="file" class="form-control" name="sound">-->

                            <!--    <div class="form-error1"><?= form_error('sound');?></div>-->

                            <!--</div>-->

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
