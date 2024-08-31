<div class="content-wrapper">

    <section class="content-header">

        <h1>

            <?= $title;?>

        </h1>

        <ol class="breadcrumb">

            <li><a href="<?php echo site_url();?>/admin/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>

            <li><a href="<?php echo site_url();?>/SubAdmin/manage">Manage Sub Admin</a></li>

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

                                <label>Name*</label>

                                <input type="text" class="form-control" value="<?= set_value('username');?>"
                                    name="username" placeholder="Name">

                                <div class="form-error1"><?= form_error('username');?></div>

                            </div>

                            <div class="form-group">

                                <label>Email*</label>

                                <input type="text" class="form-control" value="<?= set_value('email');?>" name="email"
                                    placeholder="Email">

                                <div class="form-error1"><?= form_error('email');?></div>

                            </div>

                            <div class="form-group">

                                <label>Mobile*</label>

                                <input type="number" class="form-control" value="<?= set_value('phone');?>" name="phone"
                                    placeholder="Mobile">

                                <div class="form-error1"><?= form_error('phone');?></div>

                            </div>

                            <div class="form-group">

                                <label>Password*</label>

                                <input type="password" class="form-control" value="<?= set_value('password');?>"
                                    name="password" placeholder="password">

                                <div class="form-error1"><?= form_error('password');?></div>

                            </div>

                            <div class="form-group">

                                <label>Confirm Password*</label>

                                <input type="password" class="form-control" value="<?= set_value('cpassword');?>"
                                    name="cpassword" placeholder="password">

                                <div class="form-error1"><?= form_error('cpassword');?></div>

                            </div>

                          

                            <div class="form-group">

                                <label>Zone*</label>

                                <select class="form-control" id="sel1" name="continent">
                                    <option value="">Select Zone</option>
                                    <option value="Asia">Asia</option>
                                    <option value="Africa">Africa</option>
                                    <option value="Europe">Europe</option>
                                     <option value="North America">North America</option>
									 <option value="South America">South America</option> 
                                    <option value="Australia">Australia</option>
                                    <option value="Antarctica">Antarctica</option>
                                    <!--<option value="PAYMENT MANAGEMENT">PAYMENT MANAGEMENT</option>-->
                                    <!--<option value="OFFLINE PAYMENT MANAGEMENT">OFFLINE PAYMENT MANAGEMENT</option>-->

                                </select>

                                <div class="form-error1"><?= form_error('continent');?></div>

                            </div>
                    



                            <!-- <div class="form-group">

                                <label>Picture*</label>

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
                            </script>

                            <div class="form-group">

                                <label>Picture*</label>

                                <input accept="image/*" type="file" class="form-control" name="image" id="file-ip-1"
                                    onchange="showPreview1(event)">

                                <img id="file-ip-1-preview" name="pre" src="#" alt="your image" height="70" width="70"
                                    style="display: none;">

                                <div class="form-error1"><?= form_error('image');?></div>

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