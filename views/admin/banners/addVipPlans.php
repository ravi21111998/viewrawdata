<style>
    
    .btn-danger {
    background-color: #dd4b39;
    border-color: #d73925;
    margin-top: 7px;
    }
    
   .btn-success {
    background-color: #892CFF;
    border-color: #0000ff;
    margin-top: 11px;
    }

</style>

<div class="content-wrapper">

	<section class="content-header">

		<h1>

			<?= $title;?>

		</h1>

		<ol class="breadcrumb">

			<li><a href="<?php echo site_url();?>/admin/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>

			<li><a href="<?php echo site_url();?>/User/vipPlans">View Vip Plans</a></li>

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

						</div>

						<div class="box-body">
                            
                                
							<div class="col-md-6 form-group">

								<label>Coins*</label>

								<input type="text" class="form-control" value="<?= set_value('coins');?>" name="coins" placeholder="Coins">

								<div class="form-error1"><?= form_error('coins');?></div>

							</div>
							
							<div class="col-md-6 form-group">

								<label>Friends*</label>

								<input type="text" class="form-control" value="<?= set_value('friends');?>" name="friends" placeholder="Friends">

								<div class="form-error1"><?= form_error('friends');?></div>

							</div>
							
							<div class="col-md-6 form-group">

								<label>Following*</label>

								<input type="text" class="form-control" value="<?= set_value('following');?>" name="following" placeholder="Following">

								<div class="form-error1"><?= form_error('following');?></div>

							</div>
							
								<div class="col-md-6 form-group">

								<label>CoinsPerDay*</label>

								<input type="text" class="form-control" value="<?= set_value('coinsPerDay');?>" name="coinsPerDay" placeholder="CoinsPerDay">

								<div class="form-error1"><?= form_error('coinsPerDay');?></div>

							</div>
				
							<div class="col-md-6 form-group">

								<label>Batch*</label>

								<!--<input type="text" class="form-control" value="<?= set_value('coins');?>" name="coins" placeholder="Coins">-->
								
								<select name="batch" class="col-md-12 form-control" value="<?= set_value('batch');?>" style="border: 1px solid #d2d6de;">
                                    <option disabled selected>Select Type</option>
                                    <option value="1">Highlight</option>
                                    <option value="0">UnHighlight</option>
                                </select>

								<div class="form-error1"><?= form_error('batch');?></div>

							</div>
							
							<div class="col-md-6 form-group">

								<label>Vip Icon*</label>

								<!--<input type="text" class="form-control" value="<?= set_value('coins');?>" name="coins" placeholder="Coins">-->
								
								<select name="vipicon" class="col-md-12 form-control" value="<?= set_value('vipicon');?>" style="border: 1px solid #d2d6de;">
                                    <option disabled selected>Select Type</option>
                                    <option value="1">Highlight</option>
                                    <option value="0">UnHighlight</option>
                                </select>

								<div class="form-error1"><?= form_error('vipicon');?></div>

							</div>

							<div class="col-md-6 form-group">

								<label>Unique Frame*</label>

								<!--<input type="text" class="form-control" value="<?= set_value('coins');?>" name="coins" placeholder="Coins">-->
								
								<select name="uniqueframes" class="col-md-12 form-control" value="<?= set_value('uniqueframes');?>" style="border: 1px solid #d2d6de;">
                                    <option disabled selected>Select Type</option>
                                    <option value="1">Highlight</option>
                                    <option value="0">UnHighlight</option>
                                </select>

								<div class="form-error1"><?= form_error('uniqueframes');?></div>

							</div>
							
							
							
							<div class="col-md-6 form-group">

								<label>Entrance Effect*</label>

								<!--<input type="text" class="form-control" value="<?= set_value('coins');?>" name="coins" placeholder="Coins">-->
								
								<select name="entranceeffect" class="col-md-12 form-control" value="<?= set_value('entranceeffect');?>" style="border: 1px solid #d2d6de;">
                                    <option disabled selected>Select Type</option>
                                    <option value="1">Highlight</option>
                                    <option value="0">UnHighlight</option>
                                </select>

								<div class="form-error1"><?= form_error('entranceeffect');?></div>

							</div>
							
							<div class="col-md-6 form-group">

								<label>Getthiscar*</label>

								<!--<input type="text" class="form-control" value="<?= set_value('coins');?>" name="coins" placeholder="Coins">-->
								
								<select name="getthiscar" class="col-md-12 form-control" value="<?= set_value('getthiscar');?>" style="border: 1px solid #d2d6de;">
                                    <option disabled selected>Select Type</option>
                                    <option value="1">Highlight</option>
                                    <option value="0">UnHighlight</option>
                                </select>

								<div class="form-error1"><?= form_error('getthiscar');?></div>

							</div>
							
							
							<div class="col-md-6 form-group">

								<label>ColorfullMessage*</label>

								<!--<input type="text" class="form-control" value="<?= set_value('coins');?>" name="coins" placeholder="Coins">-->
								
								<select name="colorfullMessage" class="col-md-12 form-control" value="<?= set_value('colorfullMessage');?>" style="border: 1px solid #d2d6de;">
                                    <option disabled selected>Select Type</option>
                                    <option value="1">Highlight</option>
                                    <option value="0">UnHighlight</option>
                                </select>

								<div class="form-error1"><?= form_error('colorfullMessage');?></div>

							</div>
							
							<div class="col-md-6 form-group">

								<label>FlyingComment*</label>

								<!--<input type="text" class="form-control" value="<?= set_value('coins');?>" name="coins" placeholder="Coins">-->
								
								<select name="flyingComment" class="col-md-12 form-control" value="<?= set_value('flyingComment');?>" style="border: 1px solid #d2d6de;">
                                    <option disabled selected>Select Type</option>
                                    <option value="1">Highlight</option>
                                    <option value="0">UnHighlight</option>
                                </select>

								<div class="form-error1"><?= form_error('flyingComment');?></div>

							</div>
							
							<div class="col-md-6 form-group"> 

								<label>Exclusive Gifts*</label>

								<!--<input type="text" class="form-control" value="<?= set_value('coins');?>" name="coins" placeholder="Coins">-->
								
								<select name="exclusiveGifts" class="col-md-12 form-control" value="<?= set_value('exclusiveGifts');?>" style="border: 1px solid #d2d6de;">
                                    <option disabled selected>Select Type</option>
                                    <option value="1">Highlight</option>
                                    <option value="0">UnHighlight</option>
                                </select>

								<div class="form-error1"><?= form_error('exclusiveGifts');?></div>

							</div>
							
							<div class="col-md-6 form-group">

								<label>HdeCountry And OnlineTime*</label>

								<!--<input type="text" class="form-control" value="<?= set_value('coins');?>" name="coins" placeholder="Coins">-->
								
								<select name="hdeCountryAndOnlineTime" class="col-md-12 form-control" value="<?= set_value('hdeCountryAndOnlineTime');?>" style="border: 1px solid #d2d6de;">
                                    <option disabled selected>Select Type</option>
                                    <option value="1">Highlight</option>
                                    <option value="0">UnHighlight</option>
                                </select>

								<div class="form-error1"><?= form_error('hdeCountryAndOnlineTime');?></div>

							</div>
							
							<div class="col-md-6 form-group"> 

								<label>Prevent From BeingKicked*</label>

								<!--<input type="text" class="form-control" value="<?= set_value('coins');?>" name="coins" placeholder="Coins">-->
								
								<select name="preventFromBeingKicked" class="col-md-12 form-control" value="<?= set_value('preventFromBeingKicked');?>" style="border: 1px solid #d2d6de;">
                                    <option disabled selected>Select Type</option>
                                    <option value="1">Highlight</option>
                                    <option value="0">UnHighlight</option>
                                </select>

								<div class="form-error1"><?= form_error('preventFromBeingKicked');?></div>

							</div>
							
							<div class="col-md-6 form-group"> 

								<label>AntiBan*</label>

								<!--<input type="text" class="form-control" value="<?= set_value('coins');?>" name="coins" placeholder="Coins">-->
								
								<select name="antiBan" class="col-md-12 form-control" value="<?= set_value('antiBan');?>" style="border: 1px solid #d2d6de;">
                                    <option disabled selected>Select Type</option>
                                    <option value="1">Highlight</option>
                                    <option value="0">UnHighlight</option>
                                </select>

								<div class="form-error1"><?= form_error('antiBan');?></div>

							</div>
					
							<div class="col-md-6 form-group">

								<label>vipIcon Image*</label>

								<input type="file" class="form-control" name="vipIconImage">

								<div class="form-error1"><?= form_error('vipIconImage');?></div>

							</div>
							
							<div class="col-md-6 form-group">

								<label>UniqueFrame Image*</label>

								<input type="file" class="form-control" name="uniqueFrameImage">

								<div class="form-error1"><?= form_error('uniqueFrameImage');?></div>

							</div>
							
							<div class="col-md-6 form-group">

								<label>EntranceEffect Image*</label>

								<input type="file" class="form-control" name="entranceEffectImage">

								<div class="form-error1"><?= form_error('entranceEffectImage');?></div>

							</div>
							
							<div class="col-md-6 form-group">

								<label>GetThisCar Image*</label>

								<input type="file" class="form-control" name="getThisCarImage">

								<div class="form-error1"><?= form_error('getThisCarImage');?></div>

							</div>
							
							<div class="col-md-6 form-group">

								<label>Friends Image*</label>

								<input type="file" class="form-control" name="friendsImage">

								<div class="form-error1"><?= form_error('friendsImage');?></div>

							</div>
							
							<div class="col-md-6 form-group">

								<label>Following Friends*</label>

								<input type="file" class="form-control" name="followingFriends">

								<div class="form-error1"><?= form_error('followingFriends');?></div>

							</div>
							
							<div class="col-md-6 form-group">

								<label>Coins Image*</label>

								<input type="file" class="form-control" name="coinsImage">

								<div class="form-error1"><?= form_error('coinsImage');?></div>

							</div>
							
							<div class="col-md-6 form-group">

								<label>Main Image*</label>

								<input type="file" class="form-control" name="mainImage">

								<div class="form-error1"><?= form_error('mainImage');?></div>

							</div>
							
							<div class="col-md-6 form-group">

								<label>ColorMessage Image*</label>

								<input type="file" class="form-control" name="colorMessageImage">

								<div class="form-error1"><?= form_error('colorMessageImage');?></div>

							</div>
							
							<div class="col-md-6 form-group">

								<label>FlyingComment Image*</label>

								<input type="file" class="form-control" name="flyingCommentImage">

								<div class="form-error1"><?= form_error('flyingCommentImage');?></div>

							</div>
							
							<div class="col-md-6 form-group">

								<label>ExclusiveGift Image*</label>

								<input type="file" class="form-control" name="exclusiveGiftImage">

								<div class="form-error1"><?= form_error('exclusiveGiftImage');?></div>

							</div>
							
							<div class="col-md-12 form-group mt-3">

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
