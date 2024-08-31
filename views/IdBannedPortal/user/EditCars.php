<style>
div#example1_filter {
    float: right;
}

.paging_simple_numbers{
    float: right;
}
.dataTables_empty{
  text-align: center;
}
span.link {
    padding: 5px;
    border: 1px solid gray;
    margin: 2px;
    border-radius: 10px;
}
input[type="submit"] {
    margin-top: 10px;
    margin-left: 10px;
}
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			<?= $title;?>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo site_url();?>/admin/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="#"> Edit Cars</a></li>
			<li class="active"><?= $title?></li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
		        <!-- /.box -->
				<div class="box mt-5">

                    <form action="" method="post" enctype="multipart/form-data">
                            <div class="mb-3 mt-3 ms-3 ps-3 col-4">
                            <label for="exampleInputEmail1" class="form-label">Level</label>
                            <input type="hidden" name="id" value="<?php echo $getCars['id'] ?>">
                            <input type="text" class="form-control" name="level" value="<?php echo $getCars['level'] ?>">
                        </div>
                        <div class="mb-3 mt-3 ms-3 ps-3 col-4">
                            <label for="exampleInputEmail1" class="form-label">Prime</label>
                            <input type="text" class="form-control" name="price" value="<?php echo $getCars['price'] ?>">
                        </div>
                        <div class="mb-3 mt-3 ms-3 ps-3 col-4">
                            <label for="exampleInputEmail1" class="form-label">Validity</label>
                            <input type="text" class="form-control" name="validity" value="<?php echo $getCars['validity'] ?>">
                        </div>
                        <div class="mb-3 mt-3 ms-3 ps-3 col-4">
                            <label for="exampleInputEmail1" class="form-label">Image</label>
                            <input type="file" class="form-control" name="image">
                        </div>
                        <div class="mb-3 mt-3 ms-3 ps-3 col-4">
                            <input type="submit" value="Submit" name="submit" calss="btn btn-primary">
                        </div>
                    
                    </form>

                </div>
				<!-- /.box -->
			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->
	</section>
	<!-- /.content -->
</div>