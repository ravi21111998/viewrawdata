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
            <?= $title; ?>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo site_url(); ?>/admin/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="<?php echo site_url(); ?>/User/listShowGameDetails">Manage Game</a></li>
            <li class="active"><?= $title; ?></li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-10">
                <form role="form" method="post" id="specialitiesForm" enctype="multipart/form-data">
                    <div class="box box-warning">
                        <div class="box-header with-border">
                            <h3 class="box-title"><?= $title; ?></h3>
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
                                <label>Name*</label>
                                <input type="text" class="form-control" value="<?php echo $details['name']; ?>" name="name" placeholder="Name">
                                <div class="form-error1"><?= form_error('name'); ?></div>
                            </div>

                            <div class="form-group">
                                <label>Image*</label>
                                <input accept="image/*" type="file" class="form-control" name="image" id="file-ip-1" onchange="showPreview1(event)">
                                <img id="file-ip-1-preview" name="pre" src="#" alt="your image" height="70" width="70" style="display: none;">
                                <div class="form-error1"><?= form_error('image'); ?></div>
                            </div>


                            <div class="form-group">
                                <label>Link*</label>
                                <input type="text" class="form-control" value="<?php echo $details['link']?>" name="link" placeholder="Link">
                                <div class="form-error1"><?= form_error('link'); ?></div>
                            </div>
                            
                             <div class="form-group">
                                <label for="sel1">Game Type :</label>
                                <select class="form-control" id="sel1" name="gameType">
                                    <option value="">Please select Type</option>
                                    <option value="Betting" <?php if($details['gameType'] == 'Betting'){ echo "selected"; } ?>>Betting</option>
                                    <option value="Nonbetting"<?php if($details['gameType'] == 'Nonbetting'){ echo "selected"; } ?>>Nonbetting</option>
                                 </select>
                                <div class="form-error1"><?= form_error('gameType');?></div>
                            </div>

                            <div class="form-group">
                                <label for="sel1">Game Status :</label>
                                <select class="form-control" id="sel1" name="gameStatus">
                                    <option value="">Please select status</option>
                                    <option value="Enabled" <?php if($details['gameStatus'] == 'Enabled'){ echo "selected"; } ?>>Enabled</option>
                                    <option value="Disabled"<?php if($details['gameStatus'] == 'Disabled'){ echo "selected"; } ?>>Disabled</option>
                                 </select>
                                <div class="form-error1"><?= form_error('gameStatus');?></div>
                            </div>
							<input type="hidden" value="<?php echo $details['id']?>" name="id">
                            <div class="form-group">
                                <!--<button type="reset" class="btn btn-danger">Reset</button>-->
                                <input type="submit" class="btn btn-success pull-right" name="submit" value="Submit">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
