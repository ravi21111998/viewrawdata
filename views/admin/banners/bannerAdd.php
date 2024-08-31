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

            <li><a href="<?php echo site_url();?>/Admin/vipImages">View Vip Images</a></li>

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

                                <label>Image*</label>

                                <input accept="vip_image/*" type="file" class="form-control" name="vip_image" id="file-ip-1"
                                    onchange="showPreview1(event)">

                                <img id="file-ip-1-preview" name="pre" src="#" alt="your vip_image" height="70" width="70"
                                    style="display: none;">

                                <div class="form-error1"><?= form_error('vip_image');?></div>

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
</script>