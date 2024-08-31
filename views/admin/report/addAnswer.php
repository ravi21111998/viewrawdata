
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
       <?php echo $title;?>
      </h1>
     <ol class="breadcrumb">
        <li><a href="<?php echo site_url();?>/Report/manageOnlineServiceAnswers"><button class="btn btn-primary">Go Back</button></a></li>
      </ol>
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

                <?php if($active=='onlineSerAns'){?>
             <div class="form-group">
                  <label>Question*</label>
                  <!-- <input type="text" class="form-control" value="<?php echo set_value('title') ?>" name="title" id="title" placeholder="<?php if($this->session->userdata('language') == 'en'){ echo "Enter..."; } else { echo "Título do serviço";  }?>"> -->
                  <select name="question_id" class="form-control">
                        <option value="">---Choose Question---</option>
                        <?php foreach($details as $row){ ?>
                        <option value="<?php echo $row['id'] ?>"><?php echo $row['question']; ?></option>
                        <?php } ?>
                  </select>
                  <div class="form-error"><?php echo form_error('question_id'); ?>
                </div>
                </div>

                <div class="form-group">
                  <label>Answer*</label>
                  <input type="text" class="form-control" value="<?php echo set_value('title') ?>" name="title" id="title" placeholder="Enter...">
                  <div class="form-error"><?php echo form_error('title'); ?>
                </div>
                </div>
                        <?php } ?>




              <?php if($active=='editAnswer'){ ?>
                <div class="form-group">
                  <!-- <label for="agentName"><?php if($this->session->userdata('language') == 'en'){ echo "Question"; } else { echo "Título do serviço";  }?></label> -->
                  <!-- <input type="text" class="form-control" value="<?php echo set_value('title') ?>" name="title" id="title" placeholder="<?php if($this->session->userdata('language') == 'en'){ echo "Enter..."; } else { echo "Título do serviço";  }?>"> -->
                  <!-- <select name="question_id" class="form-control" disable>
                        <option value="">---Choose Question---</option>
                        <?php foreach($details as $row){ ?>
                        <option value="<?php echo $row['id'] ?>" <?php echo ($question['id']==$row['question_id']) ? "selected" : ""; ?>><?php echo $row['title']; ?></option>
                        <?php } ?>
                  </select> -->
                  <div class="form-error"><?php echo form_error('question_id'); ?>
                </div>
                </div>

                <div class="form-group">
                  <label>Answer*</label>
                  <input type="text" class="form-control" value="<?php echo $details['answer']; ?>" name="title" id="title" placeholder="Enter...">
                  <div class="form-error"><?php echo form_error('title'); ?>
                </div>
                </div>

                        <?php } ?>


                


        
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
