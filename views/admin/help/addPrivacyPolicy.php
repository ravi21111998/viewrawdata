
<style>
.success-message {
		font-size: 20px;
		margin-bottom: 10px;
		text-align: center;
		color: #95c840;
}
</style>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       <?php if($this->session->userdata('language') == 'en'){ echo $title; } else { echo $title;  }?>
      </h1>
    <!-- <ol class="breadcrumb">
        <li><a href="<?php echo site_url();?>admin/Services"><button class="btn btn-primary"><?php if($this->session->userdata('language') == 'en'){ echo "Go Back"; } else { echo "Volte";  }?></button></a></li>
      </ol> -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">

            <form role="form" method="post" enctype='multipart/form-data'>
              <div class="box-body">
              <?php if($this->session->flashdata('success')){ ?>
				 <div class="success-message">
				 <?php echo $this->session->flashdata('success'); ?>
				 </div>
			 <?php }?>


             <div class="form-group">
                  <h3><label for="agentName"><?php if($details['heading_id']=='1'){
                     echo"Terms & Conditions";
                  }
                  elseif($details['heading_id']=='2'){
                    echo "Privacy Policy";
                  }
                    ?></label></h3>
                  <!-- <input type="text" class="form-control" value="<?php echo set_value('title') ?>" name="title" id="title" placeholder="<?php if($this->session->userdata('language') == 'en'){ echo "Enter..."; } else { echo "Título do serviço";  }?>"> -->
                  <!-- <select name="heading_id" class="form-control">
                    <option value="">---Choose Application Part---</option>
                    <option value="1">User Part</option>
                    <option value="2">Driver Part</option>
                  </select> -->
                  <!-- <div class="form-error"><?php echo form_error('heading_id'); ?> -->
                <!-- </div> -->
                </div>

                <div class="form-group">
                  <label for="agentName">Text</label>
                  <textarea type="text" class="form-control" rows='5' cols='100' name="title"  id="CKEditor" placeholder="Enter..."><?php echo $details['title']; ?></textarea>
                  <div class="form-error"><?php echo form_error('title'); ?>
                </div>
                </div>

                
        
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->

        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/bower_components/ckeditor/ckeditor.js"></script>
  <script>

  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('title')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  });
  </script>