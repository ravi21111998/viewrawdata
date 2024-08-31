<div class="content-wrapper">

    <section class="content-header">

        <h1>

            <?= $title;?>

        </h1>

        <ol class="breadcrumb">

            <li><a href="<?php echo site_url();?>/admin/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>

            <li><a href="<?php echo site_url();?>/subAdmin/manage">Manage Online Services</a></li>

            <li class="active"><?= $title;?></li>

        </ol>

    </section>

    <section class="content">

        <div class="row">

            <div class="col-md-10">

                <form role="form" method="post" id="specialitiesForm" enctype="multipart/form-data">

                    <div class="box box-warning">
                        <?php if ($this->session->flashdata('flashSuccess')): ?>
                        <script>
                        swal({
                            title: "success",
                            text: "Your data successfully inserted",
                            icon: "success",
                            button: "Okay",
                        });
                        </script>
                        <?php endif; ?>
                        
                         <?php if ($this->session->flashdata('flasherror')): ?>
                        <script>
                        swal({
                            title: "error",
                            text: "Please enter valid user's uniqueId",
                            icon: "error",
                            button: "Error",
                        });
                        </script>
                        <?php endif; ?>

                        <div class="box-header with-border">

                            <h3 class="box-title"><?= $title;?></h3>

                        </div>

                        <div class="box-body">
                            
                            <div class="form-group">

                                <label for="uniqueId">uniqueId*</label>

                                <input class="form-control" placeholder="Enter uniqueId" name="uniqueId" id="uniqueId"
                                    type="text">

                                <!-- <button type="button" class="search-btn ms-3" onclick="checkResult(form)">Search for</button> -->

                                <div class="form-error1"><?= form_error('uniqueId');?></div>
                            </div>
                            <div class="searchResult"></div>
                            <!--<div class="searchResult">search result:</div>-->

                           
                             <div class="form-group">

                                <label> Username*</label>

                                <input type="text" class="form-control" value="<?= set_value('username');?>"
                                    name="username" placeholder="Username">

                                <div class="form-error1"><?= form_error('username');?></div>

                            </div>
                            

                            <div class="form-group">

                                <label> online Service Name*</label>

                                <input type="text" class="form-control" value="<?= set_value('onlineServiceName');?>"
                                    name="onlineServiceName" placeholder=" online Service Name">

                                <div class="form-error1"><?= form_error('onlineServiceName');?></div>

                            </div>
                            
                             
                            
                            
                             

                          

                            <!--<div class="form-group">-->

                            <!--    <label>Coin Agency Unique Code*</label>-->

                            <!--    <input type="text" class="form-control" value="<?= set_value('uCode');?>" name="uCode"-->
                            <!--        placeholder="Unique Code">-->

                            <!--    <div class="form-error1"><?= form_error('uCode');?></div>-->

                            <!--</div>-->

                            <div class="form-group">

                                <label>Email*</label>

                                <input type="text" class="form-control" value="<?= set_value('email');?>" name="email"
                                    placeholder="Email">

                                <div class="form-error1"><?= form_error('email');?></div>

                            </div>

                            <!--<div class="form-group">-->

                            <!--    <label>Special Approval Name*</label>-->

                            <!--    <input type="text" class="form-control"-->
                            <!--        value="<?= set_value('special_approval_name');?>" name="special_approval_name"-->
                            <!--        placeholder="special_approval_name">-->

                            <!--    <div class="form-error1"><?= form_error('special_approval_name');?></div>-->

                            <!--</div>-->

                            <!--<div class="form-group">-->

                            <!--    <label>Deposit Amount*</label>-->

                            <!--    <input type="text" class="form-control" value="<?= set_value('deposit_amount');?>"-->
                            <!--        name="deposit_amount" placeholder="deposit_amount">-->

                            <!--    <div class="form-error1"><?= form_error('deposit_amount');?></div>-->

                            <!--</div>-->

                            <!--<div class="form-group">-->

                            <!--    <label>Bank Name*</label>-->

                            <!--    <input type="text" class="form-control" value="<?= set_value('bank_name');?>"-->
                            <!--        name="bank_name" placeholder="bank_name">-->

                            <!--    <div class="form-error1"><?= form_error('bank_name');?></div>-->

                            <!--</div>-->

                            <!--<div class="form-group">-->

                            <!--    <label>Account Number*</label>-->

                            <!--    <input type="text" class="form-control" value="<?= set_value('account_num');?>"-->
                            <!--        name="account_num" placeholder="account_num">-->

                            <!--    <div class="form-error1"><?= form_error('account_num');?></div>-->

                            <!--</div>-->

                            <!--<div class="form-group">-->

                            <!--    <label>IFSC Code*</label>-->

                            <!--    <input type="text" class="form-control" value="<?= set_value('IFCS_code');?>"-->
                            <!--        name="IFCS_code" placeholder="IFCS_code">-->

                            <!--    <div class="form-error1"><?= form_error('IFCS_code');?></div>-->

                            <!--</div>-->

                            <!--<div class="form-group">-->

                            <!--    <label>Payment Method*</label>-->

                            <!--    <input type="text" class="form-control" value="<?= set_value('payment_method');?>"-->
                            <!--        name="payment_method" placeholder="payment_method">-->

                            <!--    <div class="form-error1"><?= form_error('payment_method');?></div>-->

                            <!--</div>-->

       <!--                      <div class="form-group">-->

							<!--	<label>Agency Code*</label>-->

							<!--	<input type="text" class="form-control" value ="<?= set_value('agencyCode');?>" name="agencyCode" placeholder="agencyCode">-->

							<!--	<div class = "form-error1"><?= form_error('agencyCode')?></div>-->

							<!--</div>-->

                            <div class="form-group">

                                <label>Mobile*</label>

                                <input type="number" class="form-control" value="<?= set_value('phone');?>" name="phone"
                                    placeholder="Mobile">

                                <div class="form-error1"><?= form_error('phone');?></div>

                            </div>
                            
                             <div class="form-group">

                                <label>country*</label>

                                <input type="text" class="form-control" value="<?= set_value('country');?>" name="country"
                                    placeholder="Country">

                                <div class="form-error1"><?= form_error('country');?></div>

                            </div>

                            <div class="form-group">

                                <label>Password*</label>

                                <input type="password" class="form-control" value="<?= set_value('password');?>"
                                    name="password" placeholder="password">

                                <div class="form-error1"><?= form_error('password');?></div>

                            </div>

                           


                            <script>
                            // function showPreview1(event) {
                            //     if (event.target.files.length > 0) {
                            //         var src = URL.createObjectURL(event.target.files[0]);
                            //         var preview = document.getElementById("file-ip-1-preview");
                            //         preview.src = src;
                            //         preview.style.display = "block";
                            //     }
                            // }

                            function showPreview2(event) {
                                if (event.target.files.length > 0) {
                                    var src = URL.createObjectURL(event.target.files[0]);
                                    var preview = document.getElementById("file-ip-2-preview");
                                    preview.src = src;
                                    preview.style.display = "block";
                                }
                            }

                            function showPreview3(event) {
                                if (event.target.files.length > 0) {
                                    var src = URL.createObjectURL(event.target.files[0]);
                                    var preview = document.getElementById("file-ip-3-preview");
                                    preview.src = src;
                                    preview.style.display = "block";
                                }
                            }

                            function showPreview4(event) {
                                if (event.target.files.length > 0) {
                                    var src = URL.createObjectURL(event.target.files[0]);
                                    var preview = document.getElementById("file-ip-4-preview");
                                    preview.src = src;
                                    preview.style.display = "block";
                                }
                            }
                            </script>



                            <!--<div class="form-group">-->

                            <!--    <label>Image*</label>-->

                            <!--    <input accept="image/*" type="file" class="form-control" name="image" id="file-ip-1"-->
                            <!--        onchange="showPreview1(event)">-->

                            <!--    <img id="file-ip-1-preview" name="pre" src="#" alt="your image" height="70" width="70"-->
                            <!--        style="display: none;">-->

                            <!--    <div class="form-error1"><?= form_error('image');?></div>-->

                            <!--</div>-->

                            <div class="form-group">

                                <label>AadharCardFront/ ID-Proof*</label>

                                <input accept="image/*" type="file" class="form-control" name="aadharCardFront"
                                    id="file-ip-2" onchange="showPreview2(event)">

                                <img id="file-ip-2-preview" name="pre" src="#" alt="your image" height="70" width="70"
                                    style="display: none;">

                                <div class="form-error1"><?= form_error('aadharCardFront');?></div>

                            </div>

                            <div class="form-group">

                                <label>AadharCardBack/ Address Proof*</label>

                                <input accept="image/*" type="file" class="form-control" name="aadharCardBack"
                                    id="file-ip-3" onchange="showPreview3(event)">

                                <img id="file-ip-3-preview" name="pre" src="#" alt="your image" height="70" width="70"
                                    style="display: none;">

                                <div class="form-error1"><?= form_error('aadharCardBack');?></div>

                            </div>

                            <div class="form-group">

                                <label>PanCard/ Passport/ NID*</label>

                                <input accept="image/*" type="file" class="form-control" name="panCardFrontPhoto"
                                    id="file-ip-4" onchange="showPreview4(event)">

                                <img id="file-ip-4-preview" name="pre" src="#" alt="your image" height="70" width="70"
                                    style="display: none;">

                                <div class="form-error1"><?= form_error('panCardFrontPhoto');?></div>

                            </div>



                            <!-- <div class="form-group">

                                <label>Family's Govt PhotoId Proof*</label>

                                <input type="file" class="form-control" name="govt_photoId_proof">

                                <div class="form-error1"><?= form_error('govt_photoId_proof');?></div>

                            </div> -->

                            <div class="form-group">

                                    <!--<button type="reset"></button>-->

                                <input type="submit" class="btn btn-success pull-right" name="submit" value="Submit">

                            </div>

                        </div>

                    </div>

                </form>

            </div>

        </div>

    </section>

</div>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js" type="text/javascript"></script>
<link href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/start/jquery-ui.css" rel="Stylesheet"
    type="text/css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<script>
$('#uniqueId').keyup(function() {
    var searchdata = $('#uniqueId').val();
     $.ajax({
        method: "post",
        url: "<?php echo site_url() ?>/User/serarchUserList",
        data: {
            searchdata: searchdata
        },
        success: function(data) {
            $(".searchResult").css("display", "block");
            $('.searchResult').html(data);
            //    alert(data);
        }
    });
});
</script>
<script>
    function getUserId(username){
        $('#uniqueId').val(username);
        $(".searchResult").css("display", "none");
    }
</script>