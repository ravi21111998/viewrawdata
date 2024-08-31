<style>
    
    #lic_img img{
	width:100%;
}
#lic_img .modal-dialog{
	width:700px;
}

 #lic_imgg img{
	width:100%;
}
#lic_imgg .modal-dialog{
	width:700px;
}

 #pan_img img{
	width:100%;
}
#pan_img .modal-dialog{
	width:700px;
}
</style>
 

<div class="content-wrapper">
	<section class="content-header">
		<h1>
			<?= $title;?>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo site_url();?>/admin/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="<?php echo site_url();?>/user/viewOnlineServices">Manage Online Services</a></li>
			<li class="active"><?= $title;?></li>
		</ol>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-md-1">
			</div>
			<div class="col-md-10">
				<form role="form" method="post" id="specialitiesForm" enctype="multipart/form-data">
					<div class="box box-warning">
					    
						<div class="box-header with-border" style="display: flex;">
							<?php if(!empty($details['image'])){?>
            								<img src="<?php echo base_url().$details['image'];?>" style="width: 60px;height: 60px;border-radius: 50%;">
            							<?php } else{ ?>
            									<img src="<?php echo base_url()?>uploads/no_image_available.png" style="width: 60px;height: 60px;border-radius: 50%;">
            							<?php } ?>
							<div style="margin-left: 15px;font-size: 20px;"><?php echo $details['username']?></div>
						</div>
						<div class="box-body">

							<div role="tabpanel" style="background-color: #fff;" class="tab-pane active" id="track">
								 <ul style="padding: 0;margin: 0;">
									<div class="col-md-6">
										<li>
											<a href="#">Online Service Name</a>
											<span><?php echo $details['onlineServiceName']?></span>
										</li>
										<li>
											<a href="#">Username</a>
											<span><?php echo $details['username']?></span>
										</li>
										<li>
											<a href="#">UniqueId</a>
											<span><?php echo $details['uniqueId']?></span>
										</li>
										<li>
											<a href="#">Online Service Code</a>
											<span><?php  echo $details['onlineServiceCode'];?></span>
										</li>
										
										
										<li>
											<a  href="#">Online Service Link</a>
											<span><a class = "btn btn-warning" style="color:white !important" href="https://xrdsimulators.tech/wow_project/index.php/OnlineServices?id=<?=$details['onlineServiceCode']?>&&pass=<?=$details['viewPassword']?>">Link</a></span>
											
										
											
											<span><a class = "btn btn-warning" style="color:white !important" href="https://xrdsimulators.tech/wow_project/index.php/user/sendEmail/<?=$details['id']?>">Shear Link</a></span>
										</li>
									 
                 						
                 						<li>
												<a href="">AadharCard Front</a>
                                                 <span><img style="height:60px;width:70px border-radius: 50%;"  alt=".." src="<?php echo(!empty($details['aadharCardFront'])) ?  base_url().$details['aadharCardFront'] :  base_url().'uploads/no_image_available.png' ?>"data-toggle="modal" data-target="#lic_img"/></span>

											</li>
											
											<li>
												<a href="">PanCard Photo</a>
                                                 <span><img style="height:60px;width:70px border-radius: 50%;"  alt=".." src="<?php echo(!empty($details['panCardFrontPhoto'])) ?  base_url().$details['panCardFrontPhoto'] :  base_url().'uploads/no_image_available.png' ?>"data-toggle="modal" data-target="#pan_img"/></span>

											</li>
											
											
											
										<!--	<li>-->
										<!--    <a href="#">AadharCard Front</a>-->
										    
										<!--    <?php if(!empty($details['aadharCardFront'])){?>-->
          <!--      								<span><img src="<?php echo base_url().$details['aadharCardFront'];?>" style="width: 60px;height: 60px;border-radius: 50%;"></span>-->
          <!--      							<?php } else{ ?>-->
          <!--      									<span><img src="<?php echo base_url()?>uploads/no_image_available.png" style="width: 60px;height: 60px;border-radius: 50%;"></span>-->
          <!--      							<?php } ?>-->
										    
										<!--</li>-->
										
									</div>
									<div class="col-md-6">
											<li>
											<a href="#">Mobile</a>
											<span><?php echo $details['phone']?></span>
										</li>
								
										<li>
											<a href="#">Created at</a>
											<span><?php  echo $details['created'];?></span>
										</li>
										<li>
											<a href="#">Updated at</a>
											<span><?php  echo $details['updated'];?></span>
										</li>
										<li>
											<a href="#">Email</a>
											<span><?php  echo $details['email'];?></span>
										</li>
									 
									 
										<li>
											<a href="#">Password</a>
											<span><?php  echo $details['viewPassword'];?></span>
										</li>
										<li>
												<a href="">AadharCard Back</a>
                                                 <span><img style="height:60px;width:70px border-radius: 50%;"  alt=".." src="<?php echo(!empty($details['aadharCardBack'])) ?  base_url().$details['aadharCardBack'] :  base_url().'uploads/no_image_available.png' ?>"data-toggle="modal" data-target="#lic_imgg"/></span>

											</li>
										 
										 
										<!--<li>-->
										<!--	<a href="#">Agency Password</a>-->
										<!--	<span><?php  echo $details['viewPassword'];?></span>-->
										<!--</li>-->
										
										
										<!--<li>-->
										<!--	<a href="#">Updated at</a>-->
										<!--	<span><?php  echo $details['updated'];?></span>-->
										<!--</li>-->
									</div>
								</ul>
							</div>



						</div>
					</div>
				</form>
			</div>
			<div class="col-md-1">
			</div>
		</div>
	</section>
</div>

<div class="modal" id="lic_img">
		<div class="modal-dialog">
			<div class="modal-content">
 
			<div class="modal-body">
				<img src="<?php echo(!empty($details['aadharCardFront'])) ?  base_url().$details['aadharCardFront'] :  base_url().'uploads/no_image_available.png' ?>" class="w-100"alt="">
			</div>

			</div>
		</div>
</div>


<div class="modal" id="lic_imgg">
		<div class="modal-dialog">
			<div class="modal-content">
 
			<div class="modal-body">
				<img src="<?php echo(!empty($details['aadharCardBack'])) ?  base_url().$details['aadharCardBack'] :  base_url().'uploads/no_image_available.png' ?>" class="w-100"alt="">
			</div>

			</div>
		</div>
</div>


<div class="modal" id="pan_img">
		<div class="modal-dialog">
			<div class="modal-content">
 
			<div class="modal-body">
				<img src="<?php echo(!empty($details['panCardFrontPhoto'])) ?  base_url().$details['panCardFrontPhoto'] :  base_url().'uploads/no_image_available.png' ?>" class="w-100"alt="">
			</div>

			</div>
		</div>
</div>
