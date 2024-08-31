<style>
div#example1_filter {
    float: right;
}

.paging_simple_numbers {
    float: right;
}

.dataTables_empty {
    text-align: center;
}

span.link {
    padding: 5px;
    border: 1px solid gray;
    margin: 2px;
    border-radius: 10px;
}
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?= $title;?>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo site_url();?>/admin/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="<?php echo site_url();?>/User/manageUser"> Manage User</a></li>
            <li class="active"><?= $title?></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <!-- /.box -->
                <div class="box">
                    <div class="box-header">
                    </div>
                    <div class="main-data">
                        <div class="row">
                            <div class="col-md-12" style="margin-left:60px;margin-top:10px;margin-bottom:20px">

                                <div class="col-md-6">
                                    <div class="main-data-single-field">
                                        <div class="col-md-6">
                                            <span style="font-size: 20px;">Total Gift</span>
                                        </div>
                                        <div class="col-md-6">
                                            <span style="font-size: 20px;"><?php echo $countList; ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="main-data-single-field">
                                        <div class="col-md-6">
                                            <span style="font-size: 20px;">Total Diamonds</span>
                                        </div>
                                        <div class="col-md-6">
                                            <span style="font-size: 20px;"><?php  echo floor($totalCoin['totalCoin']); ?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <?php if($this->session->flashdata('success')){ ?>
                        <div class="success-message">
                            <script>
                            swal("Good job!", "<?= $this->session->flashdata('success')?>!", "success")
                            </script>
                        </div>

                        <?php }?>
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Sr.</th>
                                    <th>Username</th>
                                    <!-- <th>Name</th> -->
                                    <th>GiftImage</th>
                                    <th>Diamonds</th>
                                    <th>LiveId</th>
                                    <th>Date/Time</th>
                                </tr>
                            </thead>
                            <tbody id="ts">
                                <?php $i = 1; foreach($details as $data){ ?>
                                <tr>
                                    <td><?= $i;?></td>
                                    <td><?php  echo $data['username'];?></td>
                                    <!-- <td><?php  echo $data['name'];?></td> -->
                                    <td>
                                        <?php if(!empty($data['giftImage'])){?>
                                        <img src="<?php echo $data['giftImage']?>" style="width:80px">
                                        <?php } else{?>
                                        <img src="<?php echo base_url()?>uploads/no_image_available.png"
                                            style="width:80px">
                                        <?php } ?>
                                    </td>
                                    <td><?php  echo $data['diamond'];?></td>
                                    <td><?php  echo $data['liveId'];?></td>
                                    <td><?php  echo $data['created'];?></td>
                                    </td>
                                </tr>
                                <?php $i++; } ?>
                            </tbody>
                        </table>
                        <?php echo $links;?>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>