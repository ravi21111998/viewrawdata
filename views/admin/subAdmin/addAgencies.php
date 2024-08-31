<div class="content-wrapper">

	<section class="content-header">

		<h1>

			<?= $title;?>

		</h1>

		<ol class="breadcrumb">

			<li><a href="<?php echo site_url();?>/admin/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>

			<li><a href="<?php echo site_url();?>/SubAdmin/manageAgencies">Manage Coin Agency</a></li>

			<li class="active"><?= $title;?></li>

		</ol>

	</section>

	<section class="content">

		<div class="row">

			<div class="col-md-10">

				<form role="form" method="post" id="specialitiesForm" enctype="multipart/form-data">

					<div class="box box-warning">
					    
					    <?php if ($this->session->flashdata('flasherror')): ?>
                        <script>
                        swal({
                            title: "error",
                            text: "Please enter valid userId",
                            icon: "error",
                            button: "Okay",
                        });
                        </script>
                        <?php endif; ?>

						<div class="box-header with-border">

							<h3 class="box-title"><?= $title;?></h3>

						</div>

						<div class="box-body">
						    
						    <div class="form-group">

                                <label for="userId">UserId*</label>

                                <input class="form-control" placeholder="Enter uniqueId" name="userId" id="userId"
                                    type="text">

                                <!-- <button type="button" class="search-btn ms-3" onclick="checkResult(form)">Search for</button> -->

                                <div class="form-error1"><?= form_error('userId');?></div>
                            </div>
                            <div class="searchResult">search result:</div>

							<div class="form-group">

								<label>Name*</label>

								<input type="text" class="form-control" value="<?= set_value('username');?>" name="username" placeholder="Name">

								<div class="form-error1"><?= form_error('username');?></div>

							</div>

							<div class="form-group">

								<label>Email*</label>

								<input type="text" class="form-control" value="<?= set_value('email');?>" name="email" placeholder="Email">

								<div class="form-error1"><?= form_error('email');?></div>

							</div>

							<div class="form-group">

								<label>Mobile*</label>

								<input type="number" class="form-control" value="<?= set_value('phone');?>" name="phone" placeholder="Mobile">

								<div class="form-error1"><?= form_error('phone');?></div>

							</div>

							<div class="form-group">

								<label>Password*</label>

								<input type="password" class="form-control" value="<?= set_value('password');?>" name="password" placeholder="password">

								<div class="form-error1"><?= form_error('password');?></div>

							</div>

							<div class="form-group">

								<label>Confirm Password*</label>

								<input type="password" class="form-control" value="<?= set_value('cpassword');?>" name="cpassword" placeholder="password">

								<div class="form-error1"><?= form_error('cpassword');?></div>

							</div>

						 


							<div class="form-group">

								<label>Picture*</label>

								<input type="file" class="form-control" name="image">

								<div class="form-error1"><?= form_error('image');?></div>

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


<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js" type="text/javascript"></script>
<link href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/start/jquery-ui.css" rel="Stylesheet"
    type="text/css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<script>
$('#userId').keyup(function() {
    var searchdata = $('#userId').val();
     $.ajax({
        method: "post",
        url: "<?php echo site_url() ?>/SubAdmin/serarchUserList",
        data: {
            searchdata: searchdata
        },
        success: function(data) {
            $('.searchResult').html(data);
            //    alert(data);
        }
    });
});

 function getUserId(id){
	var data = "";
	$('.searchResult').html(data);
	$('#userId').val(id);
 }
</script>
