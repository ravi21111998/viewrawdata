<div class="content-wrapper">
    <section class="content-header">
        <h1>
            <?= $title;?>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo site_url();?>/admin/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="<?php echo site_url();?>/Level/editLevel">Edit Level </a></li>

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

                                <label>Level*</label>

                                <input type="number" class="form-control" value="<?php echo $details['level']?>"
                                    name="level" placeholder="level">

                                <div class="form-error1"><?= form_error('level');?></div>

                            </div>
                            <div class="form-group">

                                <label> ExpCount*</label>


                                <input type="number" class="form-control" value="<?= $details['experince']?>"
                                    name="expCount" placeholder="ExpCount">

                                <div class="form-error1"><?= form_error('expCount');?></div>

                            </div>

                            <script>
                            function showPreview1(event) {
                                if (event.target.files.length > 0) {
                                    var src = URL.createObjectURL(event.target.files[0]);
                                    var preview = document.getElementById("file-ip-1-preview");
                                    preview.src = src;
                                    preview.style.display = "block";
                                }
                            }
                            </script>

                            <div class="form-group">

                                <label>Old Icon*</label>

                                <!-- <input accept="image/*" type="file" class="form-control" name="image" id="file-ip-1"
                                    onchange="showPreview1(event)"> -->

                                <img src="<?php
                                
                                if($details['level_num'] == '0'){
                                    echo $details['image'];
                                }else{
                                    echo $details['image'];
                                }
                                
                                ?>" alt="your image" height="70" width="70">



                            </div>

                            <div class="form-group">

                                <label>Icon*</label>

                                <input accept="image/*" type="file" class="form-control" name="image" id="file-ip-1"
                                    onchange="showPreview1(event)">

                                <img id="file-ip-1-preview" name="pre" src="#" alt="your image" height="70" width="70"
                                    style="display: none;">

                                <div class="form-error1"><?= form_error('image');?></div>

                            </div>


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