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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?= $title; ?>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo site_url(); ?>/AgencyPanel/mainDash"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active"><?= $title ?></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <!-- /.box -->
                <div class="box">
                            <div class="tab-content">
                                <div id="home" class="tab-pane fade in active">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Sr.</th>
                                                <th>Host Name</th>
                                                <th>HostId</th>
                                                <th>Minutes Live</th>
                                                <th>Diamonds</th>
                                                <th>Live Start</th>
                                                <th>Live End</th>
                                            </tr>
                                        </thead>
                                        <tbody id="ts">
                                            <?php
                                            $i = 1;
                                            foreach ($details as $data) { ?>
                                                <tr>
                                                    <td><?=$i?></td>
                                                    <td>
                                                        <?=$user['name']?>
                                                    </td>
                                                    <td><?=$user['username']?></td>
                                                    <td><?=$data['minutes']?></td>
                                                    <td><?= (!!$data['coin']) ? $data['coin'] : 0?></td>
                                                    <td><?=$data['livestart']?></td>
                                                    <td><?=$data['liveend']?></td>
                                                </tr>
                                            <?php
                                            } 
                                            ?>
                                        </tbody>
                                    </table>

                                </div>
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
<script type="text/javascript" src="http://w2ui.com/src/w2ui-1.4.2.min.js"></script>
<link rel="stylesheet" type="text/css" href="http://w2ui.com/src/w2ui-1.4.2.min.css" />
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

