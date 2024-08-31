<div class="content-wrapper">

	<section class="content-header">

		<h1>

			<?= $title; ?>

		</h1>

		<ol class="breadcrumb">

			<li><a href="<?php echo site_url(); ?>/admin/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>

			<li><a href="<?php echo site_url(); ?>/User/manageUser">Manage Users</a></li>

			<li class="active"><?= $title; ?></li>

		</ol>

	</section>

	<div class="box-body">		
		
		<?php if ($this->session->flashdata('success')): ?>
                        <script>
                        swal({
                            title: "success",
                            text: "Coins added Successfully",
                            icon: "success",
                            button: "Okay",
                        });
                        </script>
                        <?php endif; ?>
                        
                         <?php if ($this->session->flashdata('error')): ?>
                        <script>
                        swal({
                            title: "error",
                            text: "Please enter valid user uniqueId",
                            icon: "error",
                            button: "Error",
                        });
                        </script>
        <?php endif; ?>
	</div>

	<section class="content">

		<div class="row">

			<div class="col-md-10">

				<form role="form" method="post" id="specialitiesForm" enctype="multipart/form-data">

					<div class="box box-warning">

						<div class="box-header with-border">

							<h3 class="box-title"><?= $title; ?></h3>

						</div>

						<div class="box-body">

							<div class="form-group">

								<label>UniqueId*</label>

								<input type="text" class="form-control" value="<?= set_value('uniqueId'); ?>" name="uniqueId" placeholder="UniqueId" id= "uniqueId">

								<div class="form-error1"><?= form_error('uniqueId'); ?></div>

							</div>
							<div class="searchResult">search result:</div>

							<div class="form-group">

								<label>Coins*</label>

								<input type="text" class="form-control" value="<?= set_value('coins'); ?>" name="coins" placeholder="Coins">

								<div class="form-error1"><?= form_error('coins'); ?></div>

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
$('#uniqueId').keyup(function() {
    var searchdata = $('#uniqueId').val();
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
</script>
<script>
	function getUserId(id){
		var userId = id;
		var data = "";
		$('.searchResult').html(data);
		$("#uniqueId").val(userId);
	}
</script>