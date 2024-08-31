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
            <li class="active"><?= $title?></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <!-- /.box -->
                <div class="box">
                    <div class="box-header " style="display:flex;">
                        <!-- <form method="post" id="getPdf" style="width:100%;">
                            <div class="col-md-12" style="margin-left:10px;">
                                <div class="col-md-3">
                                    <div class="main-data-single-field">
                                        <span style="font-weight: bold;">Search SubAdmin</span>
                                        <span><input type="text" id="pname" name="pname" placeholder="Enter...."
                                                style="border-radius: 4px;border-style: groove;width: 111px;"></span>
                                        <span><button type="button" id="search"
                                                style="background-color: #4340d9d9 ;color: #FFFFFF;border-radius:6px;border:1px solid #9B59B6;box-shadow: 0 4px 5px 0 rgba(156, 39, 176, 0.14), 0 1px 10px 0 rgba(156, 39, 176, 0.12), 0 2px 4px -1px rgba(156, 39, 176, 0.2);">Search</button></span>
                                    </div>
                                </div>
                            </div>
                        </form> -->
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
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Type</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody id="ts">
                                <?php 
                                $zz = 1;
                                foreach ($details as $detail){ 
                                    ?>
                                <tr>
                                    <td><?= $zz; ?></td>
                                    <td><?= $detail['name']; ?></td>
                                    <td><?= $detail['email']; ?></td>
                                    <td><?php if($detail['type'] == "0"){echo "subAdmin";}elseif($detail['type'] == "1"){echo "Agency";}elseif($detail['type'] == "2"){echo "Coin Portal";}elseif($detail['type'] == "3"){echo "Id Banned Portal";} ?></td>
                                    <td><?= $detail['date']; ?></td>
                                </tr>
                                <?php 
                                $zz++;
                            }
                             ?>
                            </tbody>
                            <?= $this->pagination->create_links(); ?>
                        </table>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(function() {
    $('#example1').DataTable()
    $('#example2').DataTable({
        'paging': true,
        'lengthChange': false,
        'searching': false,
        'ordering': true,
        'info': true,
        'autoWidth': false
    })
})
</script>
<script type="text/javascript" src="http://w2ui.com/src/w2ui-1.4.2.min.js"></script>
<link rel="stylesheet" type="text/css" href="http://w2ui.com/src/w2ui-1.4.2.min.css" />
<script>
$(document).ready(function() {
    $(".popup_image").on('click', function() {
        w2popup.open({
            title: 'Payment Image',
            height: 1000,
            width: 1000,
            showMax: true,
            body: '<div class="w2ui-centered"><img src="' + $(this).attr('src') +
                '"></img></div>'
        });
    });

});
</script>