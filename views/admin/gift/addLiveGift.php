<div class="content-wrapper">

    <section class="content-header">

        <h1>

            <?= $title;?>

        </h1>

        <ol class="breadcrumb">

            <li><a href="<?php echo site_url();?>/admin/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>

            <li><a href="<?php echo site_url();?>/Gift/liveGift">Manage Live Gift</a></li>

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
                                <label for="sel1">Category List:</label>
                                <select class="form-control" id="sel1" name="categoryId">
                                    <option value="">Please select category</option>
                                    <option value="Privilege">Privilege</option>
                                    <option value="EventGifts">EventGifts</option>
                                    <!--<option value="Trick">Trick</option>-->
                                    <option value="SoundGifts">SoundGifts</option>
                                 </select>
                                <div class="form-error1"><?= form_error('categoryId');?></div>
                            </div>
                            
                         
                   



                            <div class="form-group">

                                <label>Title*</label>

                                <input type="text" class="form-control" value="<?= set_value('title');?>" name="title"
                                    placeholder="title">

                                <div class="form-error1"><?= form_error('title');?></div>

                            </div>

                            <div class="form-group">

                                <label>Price(0 For Free)*</label>

                                <input type="number" class="form-control" value="<?= set_value('primeAccount');?>"
                                    name="primeAccount" placeholder="Price">

                                <div class="form-error1"><?= form_error('primeAccount');?></div>

                            </div>


                            <!-- <div class="form-group">

								<label>Image*</label>

								<input type="file" class="form-control" name="image">

								<div class="form-error1"><?= form_error('image');?></div>

							</div> -->

                            <script>
                            function showPreview1(event) {
                                if (event.target.files.length > 0) {
                                    var src = URL.createObjectURL(event.target.files[0]);
                                    var preview = document.getElementById("file-ip-1-preview");
                                    preview.src = src;
                                    preview.style.display = "block";
                                }
                            }

                            function showPreview2(event) {
                                if (event.target.files.length > 0) {
                                    var src = URL.createObjectURL(event.target.files[0]);
                                    var preview = document.getElementById("file-ip-2-preview");
                                    preview.src = src;
                                    preview.style.display = "block";
                                }
                            }
                            </script>

                            <div class="form-group">

                                <label>Image*</label>

                                <input accept="image/*" type="file" class="form-control" name="image" id="file-ip-1"
                                    onchange="showPreview1(event)">

                                <img id="file-ip-1-preview" name="pre" src="#" alt="your image" height="70" width="70"
                                    style="display: none;">

                                <div class="form-error1"><?= form_error('image');?></div>

                            </div>

                            <!-- <div class="form-group">
                                <label>Thumbnail*</label>
                                <input type="file" class="form-control" name="thumbnail">
                                <div class="form-error1"><?= form_error('thumbnail');?></div>
                            </div> -->

                            <div class="form-group">

                                <label>Thumbnail*</label>

                                <input accept="image/*" type="file" class="form-control" name="thumbnail" id="file-ip-2"
                                    onchange="showPreview2(event)">

                                <img id="file-ip-2-preview" name="pre" src="#" alt="your image" height="70" width="70"
                                    style="display: none;">

                                <div class="form-error1"><?= form_error('thumbnail');?></div>

                            </div>

                            <!--<div class="form-group">-->

                            <!--    <label>Sound*</label>-->

                            <!--    <input type="file" class="form-control" name="sound">-->

                            <!--    <div class="form-error1"><?= form_error('sound');?></div>-->

                            <!--</div>-->



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