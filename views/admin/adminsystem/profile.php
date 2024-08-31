<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Caveat&family=Dancing+Script&display=swap" rel="stylesheet">
<div class="main-panel">
<div class="content-wrapper">
        <!-- preloader section -->
        <div class="preloader m-5">
            <div class="sk-spinner sk-spinner-wordpress">
                <span class="sk-inner-circle"></span>
            </div>
        </div>
        <style>
            .textstyle {
                font-family: 'Caveat', cursive;
            }
        </style>
        <!-- header section -->
        <?php if ($this->session->flashdata('errors')) {?>
            <div class="alert alert-danger">
                <?php echo $this->session->flashdata('errors'); ?>
            </div>
        <?php } ?>
        <?php if ($this->session->flashdata('success')) {?>
            <div class="alert alert-success">
                <?php echo $this->session->flashdata('success'); ?>
            </div>
        <?php } ?>
        <header class="content-header m-5">
            <?php
            foreach ($users as $user) :
            ?>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <img src="<?php echo base_url(); ?>assets/images/tm-easy-profile.jpg" class="rounded-circle" alt="Cinque Terre" width="304" height="250">
                            <hr>
                            <h1 class="tm-title bold textstyle">Hi, <?php echo $user['username']; ?></h1>
                            <!-- <h1 class="white bold textstyle"><?php echo $user['email']; ?></h1> -->
                        </div><br>
                    </div>
                </div>
                <div>
                    <!-- about and skills section -->
                    <section class="container">
                        <div class="row">
                            <div class="about mb-5 ">
                                <h2 class="textstyle">Kresfit Admin</h2>
                                <p class="textstyle" style="font-size:25px;">This easy HTML profile is brought to you by templatemo website. There are 4 color themes, Green, Blue, Gray, and Orange.
                                    Sed vitae dui in neque elementum tempor eu id risus. Phasellus sed facilisis lacus, et venenatis augue.</p>
                            </div>
                        </div>
                    </section>
                </div>
            <?php
            endforeach;
            ?>
        </header>
        <a class="m-5" href="profileEdit"><button class="btn btn-primary">Update Profile</button></a>
        <!-- <button>Update Profile</button> -->
