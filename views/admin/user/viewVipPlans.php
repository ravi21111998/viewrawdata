<style>
.label-success {
  animation: blinker 3s linear infinite;
}

@keyframes blinker {
  30% { opacity: 0; }
}

div#track ul li {
    list-style-type: none;
    border-bottom: 2px solid #eee;
    padding: 8px;
    padding-left: 20px;
    color: #666;
    font-size: 14px;
    margin-top: 40px;
}

#lic_img img{
	width:100%;
}
#lic_img .modal-dialog{
	
	margin:auto;
}
#lic_img .modal-dialog img{
	/*width: 100%;*/
	/*height:100%;*/
	object-fit:contain;
	width:60vw;
	height:60vh;
}



.modal-body {
    /*position: fixed;*/
}


</style>
<div class="content-wrapper">
	<section class="content-header">
		<h1>
			<?= $title;?>
		</h1>

    <?php if($this->session->flashdata('success')){ ?>
      <div class="success-message">
        <script> swal("Good job!", "<?= $this->session->flashdata('success')?>!", "success") </script>
      </div>

    <?php }?>

    <?php if($this->session->flashdata('error')){ ?>
      <div class="success-message">
        <script> swal("Oops!", "<?= $this->session->flashdata('error')?>!", "error") </script>
      </div>

    <?php }?>
		<ol class="breadcrumb">
			<li><a href="<?php echo site_url();?>/admin/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="<?php echo site_url();?>/User/vipPlans">Manage Vip Plans</a></li>
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

						<div class="box-body">

							<div role="tabpanel" style="background-color: #fff;" class="tab-pane active" id="track">
								 <ul style="padding: 0;margin: 0;">
									<div class="col-md-6">
										<li>
											<a href="#">Coins</a>
										
											<span><?php echo $details['coins']?></span>
										</li>
										
										<li>
											<a href="#">Batch</a>
											
											<?php if(!!$details['batch'] == "1"){?>
                                        
                                            <span class="label label-success"><?= "Highlight"?></span>
                                            <?php } else{ ?>
                                            <span class="label label-warning"><?= "UnHighlight"?></span>
                                            <?php } ?>
										</li>
										
										<li>
											<a href="#">Vip Icon</a>
											<?php if(!!$details['vipicon'] == "1"){?>
                                        
                                            <span class="label label-success"><?= "Highlight"?></span>
                                            <?php } else{ ?>
                                            <span class="label label-warning"><?= "UnHighlight"?></span>
                                            <?php } ?>
										</li>
										
										<li>
											<a href="#">Unique Frame</a>
											<?php if(!!$details['uniqueframes'] == "1"){?>
                                        
                                            <span class="label label-success"><?= "Highlight"?></span>
                                            <?php } else{ ?>
                                            <span class="label label-warning"><?= "UnHighlight"?></span>
                                            <?php } ?>
										</li>
										
										<li>
											<a href="#">Entrance Effect</a>
											<?php if(!!$details['entranceeffect'] == "1"){?>
                                        
                                            <span class="label label-success"><?= "Highlight"?></span>
                                            <?php } else{ ?>
                                            <span class="label label-warning"><?= "UnHighlight"?></span>
                                            <?php } ?>
										</li>
										
										<li>
											<a href="#">Getthiscar</a> 
											<?php if(!!$details['getthiscar'] == "1"){?>
                                        
                                            <span class="label label-success"><?= "Highlight"?></span>
                                            <?php } else{ ?>
                                            <span class="label label-warning"><?= "UnHighlight"?></span>
                                            <?php } ?>
										</li>
										
										<li>
											<a href="#">Exclusive Gifts</a>  
											<?php if(!!$details['exclusiveGifts'] == "1"){?>
                                        
                                            <span class="label label-success"><?= "Highlight"?></span>
                                            <?php } else{ ?>
                                            <span class="label label-warning"><?= "UnHighlight"?></span>
                                            <?php } ?>
										</li>
										
										<li>
											<a href="#">AntiBan</a>  
											<?php if(!!$details['antiBan'] == "1"){?>
                                        
                                            <span class="label label-success"><?= "Highlight"?></span>
                                            <?php } else{ ?>
                                            <span class="label label-warning"><?= "UnHighlight"?></span>
                                            <?php } ?>
										</li>
									
										<li>
										    <a href="#">VipIcon Image</a>
										    
										    <?php if(!empty($details['vipIconImage'])){?>
                								<span><img src="<?php echo $details['vipIconImage'];?>" style="width: 60px;height: 60px;border-radius: 50%;"></span>
                							<?php } else{ ?>
                									<span><img src="<?php echo base_url()?>uploads/no_image_available.png" style="width: 60px;height: 60px;border-radius: 50%;"></span>
                							<?php } ?>
										    
										</li>
										
										<li> 
    										 <a href="#">Entrance Effect Image</a>
    										    
    										    <?php if(!empty($details['entranceEffectImage'])){?>
                    								<span><img src="<?php echo $details['entranceEffectImage'];?>" style="width: 60px;height: 60px;border-radius: 50%;"></span>
                    							<?php } else{ ?>
                    									<span><img src="<?php echo base_url()?>uploads/no_image_available.png" style="width: 60px;height: 60px;border-radius: 50%;"></span>
                    							<?php } ?>
    										    
    									</li>
    									
    									<li>
										    <a href="#">Friends Image</a>
										    
										    <?php if(!empty($details['friendsImage'])){?>
                								<span><img src="<?php echo $details['friendsImage'];?>" style="width: 60px;height: 60px;border-radius: 50%;"></span>
                							<?php } else{ ?>
                									<span><img src="<?php echo base_url()?>uploads/no_image_available.png" style="width: 60px;height: 60px;border-radius: 50%;"></span>
                							<?php } ?>
										    
										</li>
										
											<li>
										    <a href="#">Following Friends</a>
										    
										    <?php if(!empty($details['followingFriends'])){?>
                								<span><img src="<?php echo $details['followingFriends'];?>" style="width: 60px;height: 60px;border-radius: 50%;"></span>
                							<?php } else{ ?>
                									<span><img src="<?php echo base_url()?>uploads/no_image_available.png" style="width: 60px;height: 60px;border-radius: 50%;"></span>
                							<?php } ?>
										    
										</li>
										
											<li>
										    <a href="#">Coins Image</a>
										    
										    <?php if(!empty($details['coinsImage'])){?>
                								<span><img src="<?php echo $details['coinsImage'];?>" style="width: 60px;height: 60px;border-radius: 50%;"></span>
                							<?php } else{ ?>
                									<span><img src="<?php echo base_url()?>uploads/no_image_available.png" style="width: 60px;height: 60px;border-radius: 50%;"></span>
                							<?php } ?>
										    
										</li>
										
										<li>
										    <a href="#">Main Image</a>
										    
										    <?php if(!empty($details['mainImage'])){?>
                								<span><img src="<?php echo $details['mainImage'];?>" style="width: 60px;height: 60px;border-radius: 50%;"></span>
                							<?php } else{ ?>
                									<span><img src="<?php echo base_url()?>uploads/no_image_available.png" style="width: 60px;height: 60px;border-radius: 50%;"></span>
                							<?php } ?>
										    
										</li>
    									
    									
									</div>
									
									<div class="col-md-6">
									    
    										<li>
    											<a href="#">Friends</a>
    											<?php if(!!$details['friends']){?>
                                            
                                                <span class="label label-warning"><?php  echo $details['friends'];?></span>
                                                <?php } else{ ?>
                                                <span class="label label-warning"><?php  echo "0";?></span>
                                                <?php } ?>
    										</li>
    										
    										<li> 
    											<a href="#">Following</a>
    											<?php if(!!$details['following']){?>
                                            
                                                <span class="label label-warning"><?php  echo $details['following'];?></span>
                                                <?php } else{ ?>
                                                <span class="label label-warning"><?php  echo "0";?></span>
                                                <?php } ?>
    										</li>
    										
    										<li>
    											<a href="#">Coins PerDay</a>
    											<?php if(!!$details['coinsPerDay']){?>
                                            
                                                <span class="label label-warning"><?php  echo $details['coinsPerDay'];?></span>
                                                <?php } else{ ?>
                                                <span class="label label-warning"><?php  echo "0";?></span>
                                                <?php } ?>
    										</li>
    										
    										<li>
    											<a href="#">Colorfull Message</a>
                                                <?php if(!!$details['colorfullMessage'] == "1"){?>
                                            
                                                <span class="label label-success"><?= "Highlight"?></span>
                                                <?php } else{ ?>
                                                <span class="label label-warning"><?= "UnHighlight"?></span>
                                                <?php } ?>
    										</li>
    										
    										<li>
    											<a href="#">Flying Comment</a> 
                                                <?php if(!!$details['flyingComment'] == "1"){?>
                                            
                                                <span class="label label-success"><?= "Highlight"?></span>
                                                <?php } else{ ?>
                                                <span class="label label-warning"><?= "UnHighlight"?></span>
                                                <?php } ?>
    										</li>
    										
    										<li>
    											<a href="#">HdeCountry And OnlineTime</a>  
                                                <?php if(!!$details['hdeCountryAndOnlineTime'] == "1"){?>
                                            
                                                <span class="label label-success"><?= "Highlight"?></span>
                                                <?php } else{ ?>
                                                <span class="label label-warning"><?= "UnHighlight"?></span>
                                                <?php } ?>
    										</li>
    										
    										<li>
    											<a href="#">Prevent From BeingKicked</a> 
                                                <?php if(!!$details['preventFromBeingKicked'] == "1"){?>
                                            
                                                <span class="label label-success"><?= "Highlight"?></span>
                                                <?php } else{ ?>
                                                <span class="label label-warning"><?= "UnHighlight"?></span>
                                                <?php } ?>
    										</li>
    										
    										<li>
    											<a href="#">Valid</a> 
    											<?php if(!!$details['valid']){?>
                                            
                                                <span class="label label-warning"><?php  echo $details['valid'] . " days ";?></span>
                                                <?php } else{ ?>
                                                <span class="label label-warning"><?php  echo "0";?></span>
                                                <?php } ?>
    										</li>
    										
    										<li> 
    										    <a href="#">UniqueFrame Image</a>
    										    
    										    <?php if(!empty($details['uniqueFrameImage'])){?>
                    								<span><img src="<?php echo $details['uniqueFrameImage'];?>" style="width: 60px;height: 60px;border-radius: 50%;"></span>
                    							<?php } else{ ?>
                    									<span><img src="<?php echo base_url()?>uploads/no_image_available.png" style="width: 60px;height: 60px;border-radius: 50%;"></span>
                    							<?php } ?>
    										    
    										</li>
    										
    										<li> 
    										    <a href="#">GetThis CarImage</a>
    										    
    										    <?php if(!empty($details['getThisCarImage'])){?>
                    								<span><img src="<?php echo $details['getThisCarImage'];?>" style="width: 60px;height: 60px;border-radius: 50%;"></span>
                    							<?php } else{ ?>
                    									<span><img src="<?php echo base_url()?>uploads/no_image_available.png" style="width: 60px;height: 60px;border-radius: 50%;"></span>
                    							<?php } ?>
    										    
    										</li>
    										
        									<li>
    										    <a href="#">ColorMessage Image</a>
    										    
    										    <?php if(!empty($details['colorMessageImage'])){?>
                    								<span><img src="<?php echo $details['colorMessageImage'];?>" style="width: 60px;height: 60px;border-radius: 50%;"></span>
                    							<?php } else{ ?>
                    									<span><img src="<?php echo base_url()?>uploads/no_image_available.png" style="width: 60px;height: 60px;border-radius: 50%;"></span>
                    							<?php } ?>
    										    
    										</li>
    										
    										<li>
    										    <a href="#">FlyingComment Image</a>
    										    
    										    <?php if(!empty($details['flyingCommentImage'])){?>
                    								<span><img src="<?php echo $details['flyingCommentImage'];?>" style="width: 60px;height: 60px;border-radius: 50%;"></span>
                    							<?php } else{ ?>
                    									<span><img src="<?php echo base_url()?>uploads/no_image_available.png" style="width: 60px;height: 60px;border-radius: 50%;"></span>
                    							<?php } ?>
    										    
										   </li>
										   
										   <li>
    										    <a href="#">ExclusiveGift Image</a>
    										    
    										    <?php if(!empty($details['exclusiveGiftImage'])){?>
                    								<span><img src="<?php echo $details['exclusiveGiftImage'];?>"data-toggle="modal" data-target="#lic_img" style="width: 60px;height: 60px;border-radius: 50%;"></span>
                    							<?php } else{ ?>
                    									<span><img src="<?php echo base_url()?>uploads/no_image_available.png" style="width: 60px;height: 60px;border-radius: 50%;" data-toggle="modal" data-target="#lic_img"></span>
                    							<?php } ?>
										    
										   </li>
										
    							
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

<!--<div class="modal" id="lic_img">-->
<!--		<div class="modal-dialog">-->
<!--			<div class="modal-content">-->

			<!-- Modal body -->
<!--			<div class="modal-body">-->
			     
				<!--<img src="<?php echo(!empty($details['exclusiveGiftImage'])) ? $details['exclusiveGiftImage'] :  base_url()?>uploads/no_image_available.png' ?>" class="w-100"alt="">-->
				
<!--				<?php if(!empty($details['exclusiveGiftImage'])){?>-->
<!--                    								<span><img src="<?php echo $details['exclusiveGiftImage'];?>"data-toggle="modal" data-target="#lic_img" style="border-radius: 10%; class="w-100"alt="""></span>-->
<!--                    							<?php } else{ ?>-->
<!--                    									<span><img src="<?php echo base_url()?>uploads/no_image_available.png" style="border-radius: 50%;" data-toggle="modal" data-target="#lic_img"></span>-->
<!--                    							<?php } ?>-->
<!--			</div>-->

<!--			</div>-->
<!--		</div>-->
<!--</div>-->

<script type="text/javascript">

  function liveHotlistAddRemove(id){
    var userId = id;
    var status = $("#liveHotlistAddRemoveData").val();
    $.ajax({
      type: 'post',
      url: "<?php echo site_url();?>/User/updateLiveHotlistStatus",
      data:{userId:userId,status:status},
      success: function(result){
        if(result == 1){
          swal({
            title: "Good job!",
            text: "Live Hotlist Add/Remove status updated successfully!",
            icon: "success",
          });
        }
        else
        {
          swal({
            title: "OOPS!",
            text: "Please try after some time!",
            icon: "error",
          });
        }
       }
    });
  }

  function hotlistAddRemove(id){
    var userId = id;
    var status = $("#hotlistAddRemoveData").val();
    $.ajax({
      type: 'post',
      url: "<?php echo site_url();?>/User/updateHotlistStatus",
      data:{userId:userId,status:status},
      success: function(result){
        if(result == 1){
          swal({
            title: "Good job!",
            text: "Video Hotlist Add/Remove status updated successfully!",
            icon: "success",
          });
        }
        else
        {
          swal({
            title: "OOPS!",
            text: "Please try after some time!",
            icon: "error",
          });
        }
       }
    });
  }

	function popular(id)
	{
		var userId = id;
		var status = $("#pp").val();
		$.ajax({
	      type: 'post',
	      url: "<?php echo site_url();?>/User/userStatus",
	      data:{userId:userId,status:status},
	      success: function(result){

	      	 if(result == 1){
	      	 	alert("status updated successfully");
	      	 }
	      	 else
	      	 {
	      	 	alert("status not updated");
	      	 }
	       }
	    });
	}

</script>

<script type="text/javascript">

    function deviceBlockUnBlock(id){
      var userId = id;
      var status = $("#deviceBlockUnBlockData").val();
      var deviceId = '<?php echo $details['deviceId']?>';
      $.ajax({
          type: 'post',
          url: "<?php echo site_url();?>/User/banDeviceId",
          data:{userId:userId,status:status,deviceId:deviceId},
          success: function(result){
              if(result == 1){
                swal({
                  title: "Good job!",
                  text: "DeviceId Ban/Unban status updated successfully!",
                  icon: "success",
                });
              }
              else
              {
                swal({
                  title: "OOPS!",
                  text: "Please try after some time!",
                  icon: "error",
                });
              }
          }
      });
    }

    function crownUpdate(id){
      var userId = id;
      var status = $("#crownStatusUpdate").val();
      $.ajax({
          type: 'post',
          url: "<?php echo site_url();?>/User/crownStatusUpdate",
          data:{userId:userId,status:status},
          success: function(result){
              if(result == 1){
                swal({
                  title: "Good job!",
                  text: "Crown status updated successfully!",
                  icon: "success",
                });
              }
              else
              {
                swal({
                  title: "OOPS!",
                  text: "Please try after some time!",
                  icon: "error",
                });
              }
          }
      });
    }


    function userIdBanUnban(id){
      var userId = id;
      var status = $("#userIdBanUnbanData").val();
      $.ajax({
          type: 'post',
          url: "<?php echo site_url();?>/User/updateUserIdBanUnbanStatus",
          data:{userId:userId,status:status},
          success: function(result){
              if(result == 1){
                swal({
                  title: "Good job!",
                  text: "UserId Ban/Unban status updated successfully!",
                  icon: "success",
                });
              }
              else
              {
                swal({
                  title: "OOPS!",
                  text: "Please try after some time!",
                  icon: "error",
                });
              }
          }
      });
    }


    function edit(id)
    {
        var userId = id;
        var status = $("#ban").val();


        $.ajax({
            type: 'post',
            url: "<?php echo site_url();?>/User/userCondition",
            data:{userId:userId,status:status},
            success: function(result){

                if(result == 1){
                    alert("status updated successfully");
                }
                else
                {
                    alert("status not updated");
                }
            }
        });
    }

</script>
