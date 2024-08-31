
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
                <?php if($active=='addQuestion'){ ?>
                <div class="form-group">
                  <label for="agentName"><?php if($this->session->userdata('language') == 'en'){ echo "Title"; } else { echo "Título do serviço";  }?></label>
                  <input type="text" class="form-control" value="<?php echo set_value('title') ?>" name="title" id="title" placeholder="<?php if($this->session->userdata('language') == 'en'){ echo "Enter..."; } else { echo "Título do serviço";  }?>">
                  <div class="form-error"><?php echo form_error('title'); ?>
                </div>
                </div>

                <div class="form-group">
                  <label for="agentName"><?php if($this->session->userdata('language') == 'en'){ echo "Icon"; } else { echo "Icon";  }?></label>
                  <input type="file" class="form-control" value="<?php echo set_value('icon') ?>" name="icon" id="icon" placeholder="<?php if($this->session->userdata('language') == 'en'){ echo "Enter..."; } else { echo "enter";  }?>" required>
                  <div class="form-error"><?php echo form_error('icon'); ?>
                </div>
                </div>
                  <?php } ?>



                  <?php if($active=='editQuestion'){ ?>
                <div class="form-group">
                  <label for="agentName"><?php if($this->session->userdata('language') == 'en'){ echo "Title"; } else { echo "Título do serviço";  }?></label>
                  <input type="text" class="form-control" value="<?php echo $details['title'] ?>" name="title" id="title" placeholder="<?php if($this->session->userdata('language') == 'en'){ echo "Enter..."; } else { echo "Título do serviço";  }?>">
                  <div class="form-error"><?php echo form_error('title'); ?>
                </div>
                </div>

                <div class="form-group">
                  <label for="agentName"><?php if($this->session->userdata('language') == 'en'){ echo "Icon"; } else { echo "Icon";  }?></label>
                  <input type="file" class="form-control"  name="icon" id="icon" placeholder="<?php if($this->session->userdata('language') == 'en'){ echo "Enter..."; } else { echo "enter";  }?>">
                  <div class="form-error"><?php echo form_error('icon'); ?>
                </div>
                </div>
                  <?php } ?>

        
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary"><?php if($this->session->userdata('language') == 'en'){ echo "Submit"; } else { echo "Enviar";  }?></button>
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
