<div class="content-wrapper">

    <?php if ($this->session->flashdata('success')): ?>
    <script>
    swal({
        title: "success",
        text: "Your data successfully inserted",
        icon: "success",
        button: "Okay",
    });
    </script>
    <?php endif; ?>

    <section class="content-header">
        <h1>
            <?= $title;?>
        </h1>

        <ol class="breadcrumb">
            <li><a href="<?php echo site_url();?>/admin/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="<?php echo site_url();?>/Garage">View EntryEffects</a></li>
            <li class="active"><?= $title;?></li>
        </ol>
    </section>
    
   
    <section class="content">
        <div class="row">
            <div class="col-md-10">

            <?php
                if ($title == 'Edit EntryEffect') { ?>
                    <form role="form" method="post" id="specialitiesForm" enctype="multipart/form-data">
                        <div class="box box-warning">
                            <div class="box-header with-border">
                                <h3 class="box-title"><?= $title; ?></h3>
                            </div>
                            <div class="box-body">
                                <div class="form-group">
                                    <label>Image Thumbnail*</label>
                                    
                                        <input accept="" type="file" class="form-control" name="thumbnail" id="file-ip-3" onchange="showPreview(event,'file-ip-3-preview')">
                                        <img id="file-ip-3-preview" class="pre-img" name="pre" src="#" alt="image" height="70" width="70" style="display: none;">
                                        <div class="form-error1"><?= form_error('thumbnail'); ?></div>
                                    
                                </div>

                                <div class="form-group">
                                    <label>Main Image*</label>
                                    <input accept="" type="file" class="form-control" name="image" id="file-ip-4" onchange="showPreview(event,'file-ip-4-preview')">
                                    <img id="file-ip-4-preview" class="pre-img" name="pre" src="#" alt="thumb" height="70" width="70" style="display: none;">
                                    <div class="form-error1"><?= form_error('image'); ?></div>
                                </div>

               <!--                 <div class="form-group">-->
               <!--                     <label for="garage_type">Garage Type*</label>-->
               <!--                     <select class="form-control" id="garage_type" name="garage_type">-->
               <!--                         <option value="">Select Type</option>-->
               <!--                         <option value="admin" <?php if($details['type']=='admin'){ echo "selected";}?> >Admin</option>-->
               <!--                         <option value="purchased" <?php if($details['type']=='purchased'){ echo "selected" ;}?> >Purchased</option>-->
							        <!--</select>-->
               <!--                     <div class="form-error1"><?= form_error('garage_type'); ?></div>-->
               <!--                 </div>-->

                                <div class="form-group">
                                    <label>Name*</label>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <input type="text" value="<?= $details['name'] ?>" class="form-control" name="name1" disabled>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" value="<?= set_value('name');?>" class="form-control input" name="name">
                                            <div class="form-error1"><?= form_error('name'); ?></div>
                                        </div>
                                    </div>    
                                </div>
                                <div class="form-group">
                                    <label>Price*</label>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <input type="text" value="<?= $details['price'] ?>" class="form-control" name="price1" disabled>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" value="<?= set_value('price');?>" class="form-control input" name="price">
                                            <div class="form-error1"><?= form_error('price'); ?></div>
                                        </div>
                                    </div>    
                                </div>

                                <div class="form-group">
                                    <label>Valid Days*</label>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <input type="text" value="<?= $details['validity']; ?>" class="form-control" name="valid1" disabled >
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" value="<?= set_value('validity'); ?>" class="form-control input" name="valid">
                                            <div class="form-error1"><?= form_error('validity'); ?></div>
                                        </div>
                                    </div>
                                </div>

                                

                                <div class="form-group">
                                    <button type="reset" class="btn btn-danger" id="clearBtn">Cancel</button>
                                    <input type="submit" class="btn btn-success pull-right" name="submit" value="Submit">
                                </div>

                            </div>
                        </div>
                    </form>
                <?php } else { ?>

                <form role="form" method="post" id="specialitiesForm" enctype="multipart/form-data">
                    <div class="box box-warning">
                        <div class="box-header with-border">
                            <h3 class="box-title"><?= $title;?></h3>
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                                <label>Image Thumbnail*</label>
                                <input type="file" class="form-control" name="thumbnail" id="file-ip-1"
                                    onchange="showPreview(event,'file-ip-1-preview')">
                                <img id="file-ip-1-preview" class="pre-img" name="pre" src="#" alt="image" height="70" width="70" style="display: none;">
                                <div class="form-error1"><?= form_error('thumbnail');?></div>
                            </div>

                            <div class="form-group">
                                <label>Main Image*</label>
                                <input type="file" class="form-control" name="image" id="file-ip-2" onchange="showPreview(event,'file-ip-2-preview')">
                                <img id="file-ip-2-preview"  class="pre-img" name="pre" src="#" alt="your image" height="70" width="70" style="display: none;">
                                <div class="form-error1"><?= form_error('image');?></div>
                            </div>

                            <!--<div class="form-group">-->
                            <!--    <label for="garage_type">Garage Type*</label>-->
                            <!--    <select class="form-control" id="garage_type" name="garage_type">-->
                            <!--        <option value="">Select Type</option>-->
                            <!--        <option value="admin">Admin</option>-->
                            <!--        <option value="purchased">Purchased</option>-->
                            <!--    </select>-->
                            <!--    <div class="form-error1"><?= form_error('garage_type'); ?></div>-->
                            <!--</div>-->

                            <div class="form-group">
                                <label>Name*</label>
                                <input type="text" class="form-control input" name="name" value="<?= set_value('name');?>">
                                <div class="form-error1"><?= form_error('name');?></div>
                            </div>
                            <div class="form-group">
                                <label>Price*</label>
                                <input type="text" class="form-control input" name="price" value="<?= set_value('price');?>">
                                <div class="form-error1"><?= form_error('price');?></div>
                            </div>

                            <div class="form-group">
                                <label>Valid Days*</label>
                                <input type="text" class="form-control input" name="valid" value="<?= set_value('valid');?>">
                                <div class="form-error1"><?= form_error('valid');?></div>
                            </div>

                            <div class="form-group">
                                <button type="reset" class="btn btn-danger" id="clearBtn">Cancel</button>
                                <input type="submit" class="btn btn-success pull-right" name="submit" value="Submit">
                            </div>

                        </div>
                    </div>
                </form>
                <?php 
                }
                ?>
            </div>
        </div>
    </section>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
    $(".allownumericwithoutdecimal").on("keypress keyup blur", function(event) {
        $(this).val($(this).val().replace(/[^\d].+/, ""));
        if ((event.which < 48 || event.which > 57)) {
            event.preventDefault();
        }
    });
});

$("#likes").on('keyup paste', function() {
    var likesVal = $(this).val();
    if (likesVal == '') {
        $("#followers").val('');
        $("#totalFollowers").val('');
    } else {
        var followersVal = $("#followers").val();
        if (followersVal != '') {
            var mainval = likesVal * followersVal;
            var deviVal = parseInt(mainval / 100);
            $("#totalFollowers").val(deviVal);
        }
    }
});


//$("#followers").keyup(function(){
$("#followers").on('keyup paste', function() {
    var likesVal = $('#likes').val();
    if (likesVal == '') {
        $("#totalFollowers").val('');
    } else {
        var followersVal = $("#followers").val();
        if (followersVal != '') {
            var mainval = likesVal * followersVal;
            var deviVal = parseInt(mainval / 100);
            $("#totalFollowers").val(deviVal);
        } else {
            $("#totalFollowers").val('');
        }
    }
});

// show preview
function showPreview(event,preview) {
    if (event.target.files.length > 0) {
        var src = URL.createObjectURL(event.target.files[0]);
        var preview = document.getElementById(preview);
        preview.src = src;
        preview.style.display = "block";
    }
}

// clear image preview 
let clearBtn= document.getElementById('clearBtn');
clearBtn.addEventListener('click',function(){
    let arr= document.querySelectorAll('.pre-img');
    for(let i=0; i<arr.length;i++){
        arr[i].src="";
        arr[i].style.display='none';
    }
    let errors=document.querySelectorAll('.form-error1');
    for(let j=0;j<errors.length;j++){
        errors[j].innerHTML="";
    }
});

</script>
