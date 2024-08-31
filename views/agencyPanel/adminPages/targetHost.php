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


                    <div class="box-body">
                        <form action="" method="get" style="padding-top: 8px;padding-bottom:15px; padding-left:15px;">
                            <input  name="user" type="text" placeholder="search by hostId" style="height:22px;width:135px;">
                            <button type="submit" name="users" style="background:#337ab7;border:none;color:#fff;font-weight:500; pading-left:6px; padding-right:6px; border-radius:3px;height:22px;">Search</button>

                        </form>
                        <?php if ($this->session->flashdata('success')) { ?>
                            <div class="success-message">
                                <script>
                                    swal("Good job!", "<?= $this->session->flashdata('success') ?>!", "success");
                                </script>
                            </div>

                        <?php } ?>
                        <div class="container">
                            <ul class="nav nav-pills" style="width:100%">
                                <!-- <span> -->
                                        <li class="active"><a data-toggle="pill" href="#home">Previous Month</a></li>
                                        <li><a data-toggle="pill" href="#menu1">Current Month</a></li>
                                <!-- </span> -->
                                <div style="text-align:end;width:60%">
                                    <form action="" method="get">
                                        <input type="text" style="width:120px; height:22px; " placeholder="Year" name="year">
                                        <input type="text" style="width:120px; height:22px; " placeholder="Month" name="month">
                                        <input type="submit" name="daaa" value="Search by Month" style="background-color:#337ab7; color:#fff;padding:3px 6px; font-weight:500; ">
                                    </form>
                                    <form action="" method="get">
                                        <input type="date" style="width:120px; height:22px;" name="startDate">
                                        <input type="date" style="width:120px; height:22px;" name="endDate">
                                        <input type="submit" name="searchByDate" value="Search by date" style="background-color:#337ab7; color:#fff;padding:3px 6px; font-weight:500; ">
                                    </form>
                                </div>
                            </ul>

                            <div class="tab-content">
                                <div id="home" class="tab-pane fade in active">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Sr.</th>
                                                <th>Image</th>
                                                <th>Host Name</th>
                                                <th>HostId</th>
                                                <th>Valid Day</th>
                                                <th>Minutes</th>
                                                <th>Diamonds</th>
                                                <th>Join Date</th>
                                                <th>Record</th>
                                            </tr>
                                        </thead>
                                        <tbody id="ts">
                                            <?php
                                            $i = 0;
                                            foreach ($details['previous'] as $data) { ?>
                                                <tr>
                                                    <td><?= ++$i ?></td>
                                                    <td>
                                                        <?php if (!empty($data->image)) { ?>
                                                            <img src="<?php echo $data->image ?>" style="width:80px">
                                                        <?php } else { ?>
                                                            <img src="<?php echo base_url() . 'uploads/no_image_available.png' ?>" style="width:80px">
                                                        <?php } ?>
                                                    </td>
                                                    <td><?php echo $data->name; ?></td>
                                                    <td><?php echo $data->username; ?></td>
                                                    <td><?php echo $data->valid_day; ?></td>
                                                    <td><?php echo $data->minutes; ?></td>
                                                    <td><?php echo $data->coins; ?></td>
                                                    <td><?php echo $data->date; ?></td>
                                                    <td><a href="<?= base_url('AgencyPanel/getRecord') ?>/<?= $data->username ?>">Go to link</a></td>
                                                </tr>
                                            <?php
                                            } ?>
                                        </tbody>
                                    </table>

                                </div>
                                <div id="menu1" class="tab-pane fade">
                                <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Sr.</th>
                                                <th>Image</th>
                                                <th>Host Name</th>
                                                <th>HostId</th>
                                                <th>Valid Day</th>
                                                <th>Minutes</th>
                                                <th>Diamonds</th>
                                                <th>Join Date</th>
                                            </tr>
                                        </thead>
                                        <tbody id="ts">
                                            <?php
                                            $i = 0;
                                            foreach ($details['current'] as $data) { ?>
                                                <tr>
                                                    <td><?= ++$i ?></td>
                                                    <td>
                                                        <?php if (!empty($data->image)) { ?>
                                                            <img src="<?php echo $data->image ?>" style="width:80px">
                                                        <?php } else { ?>
                                                            <img src="<?php echo base_url() . 'uploads/no_image_available.png' ?>" style="width:80px">
                                                        <?php } ?>
                                                    </td>
                                                    <td><?php echo $data->name; ?></td>
                                                    <td><?php echo $data->username; ?></td>
                                                    <td><?php echo $data->valid_day; ?></td>
                                                    <td><?php echo $data->minutes; ?></td>
                                                    <td><?php echo $data->coins; ?></td>
                                                    <td><?php echo $data->date; ?></td>
                                                </tr>
                                            <?php
                                            } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
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
                body: '<div class="w2ui-centered"><img src="' + $(this).attr('src') + '"></img></div>'
            });
        });

    });
</script>

<!--excel script    -->
<script>
    $(document).ready(function() {
        $('#getexcel').on('click', function() {
            var action = '<?php echo site_url(); ?>/user/getexcel';
            $('#getform').attr('action', action);
            $('#getform').submit();

        });
    });
</script>


<!--pdf script  -->
<script>
    $("#getpdf").click(function() {
        var action = '<?php echo site_url(); ?>/user/getpdf';
        $('#getform').attr('action', action);
        $('#getform').attr('target', "_blank");
        $('#getform').submit();
    });
</script>

<script>
    $("#pname").keyup(function(event) {
        event.preventDefault();
        if (event.keyCode === 13) {
            $("#search").click();
        }
    });
    $(document).ready(function() {
        $("#search").click(function() {
            var start = $("#sdate").val();
            var end = $("#edate").val();
            var name = $("#pname").val();
            $.ajax({
                type: "post",
                url: "<?= site_url() ?>/user/getResult",
                data: {
                    s: start,
                    e: end,
                    p: name
                },
                dataType: 'json', //data format
                success: function(data) {
                    if (data == '') {
                        $('#ts').html('<tr class="odd"><td valign="top" colspan="7" class="dataTables_empty">No data available in table</td></tr>');
                    } else {
                        var html, comment;
                        for (var i = 0; i < data.length; i++) {
                            comment = data[i];
                            if (comment.status == 'Approved')
                                var mainStaus = 'Decline';
                            else
                                var mainStaus = 'Approve';
                            html += '<tr><td>' + (i + 1) + '</td><td>' + comment.username + '</td><td>' + comment.email + '</td><td>' + comment.phone +
                                '</td><td><span class="label label-warning">' + "Upgrade" + '</span></td><td>' + "--" + '</td><td><span class="label label-warning">' + "Clear" +
                                '</span></td><td><span class="label label-success">' + comment.status +
                                '</span></td><td><ul class="admin-action btn btn-default" style="background-color: #f4f4f4;color: #fff !important;"><li class="dropdown"><a class="dropdown-toggle" style="color: black;" data-toggle="dropdown" href="#" aria-expanded="false">' + "Action " + '<span class="caret"></span></a><ul class="dropdown-menu dropdown-menu-right"><li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo  site_url() ?>/user/view/' + comment.id + '">View</a></li><li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo site_url() ?>/user/edit/' + comment.id + '">Edit</a></li><li><a role="menuitem" tabindex="-1" onclick="return confirm(&quot;Once you deleted this account, the user (' + comment.username + ') will no longer be able to log in to the site or apps. This action cannot be undone.&quot;);" href="<?= site_url() ?>/user/delete/' + comment.id + '">Delete</a></li><li role="presentation" class="divider"></li><li role="presentation"><a role="menuitem" tabindex="-1" href="<?= site_url() ?>/user/giftHistory/' + comment.id + '">Received Gift History</a></li><li role="presentation"><a role="menuitem" tabindex="-1" href="<?= site_url() ?>/user/giftHistory/' + comment.id + '">Send Gift History</a></li><li role="presentation"><a role="menuitem" tabindex="-1" href="<?= site_url() ?>/user/purchaseCoinHistory/' + comment.id + '">Coin Hisory</a></li><li role="presentation" class="divider"></li><li role="presentation"><a role="menuitem" onclick="return confirm(' + comment.username + ' - Do you want' + mainStaus + 'this user;);" tabindex="-1" href="<?= site_url() ?>/user/status/' + comment.id + '">' + mainStaus + '</a></li></ul></li></ul></td></tr>';
                        }

                        $('#ts').html(html);
                    }
                }
            });
        });
    });
    $(function() {
        var dtToday = new Date();
        var month = dtToday.getMonth() + 1;
        var day = dtToday.getDate();
        var year = dtToday.getFullYear() + 1;
        if (month < 10)
            month = '0' + month.toString();
        if (day < 10)
            day = '0' + day.toString();
        var maxDate = year + '-' + month + '-' + day;
        $('#sdate').attr('max', maxDate);
        $('#edate').attr('max', maxDate);
    });
</script>

