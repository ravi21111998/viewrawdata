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
            <?= $title; ?>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo site_url(); ?>/admin/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active"><?= $title ?></li>
        </ol>
    </section>

    <?php 
        // print_r($details);
        // exit;
    ?>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <!-- /.box -->
                <div class="box">
                    <form id="getform">
                        <!-- <div class="box-header">
						<div <?php if ($admin['role'] == 'subAdmin') { ?> style="display:none" <?php } ?>><h3 class="box-title"><a href="<?= site_url(); ?>/User/addUser" style="font-size: 14px;" class="btn btn-block btn-success btn-xs">Add User</a></h3></div>
						<div style="float:right; font-size:30px;">   <a href="javascript:void(0)" id="getpdf"> <i class="fa fa-file-pdf-o" style="color:red; "aria-hidden="true"></i></a>
                <a href="javascript:void(0)" id="getexcel">   <i class="fa fa-file-excel-o" style=" color:green;" aria-hidden="true"></i></a>
             </div>
					</div> -->
                    </form>

                    <!-- /.box-header -->
                    <div class="box-body">
                        <?php if ($this->session->flashdata('success')) { ?>
                            <div class="success-message">
                                <script>
                                    swal("Good job!", "<?= $this->session->flashdata('success') ?>!", "success");
                                </script>
                            </div>

                        <?php 
                        unset($_SESSION['success']);
                    } ?>
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Sr.</th>
                                    <th>EntryEffect Name</th>
                                    <th>EntryEffect Type</th>
                                    <th>EntryEffect Thumbnail</th>
                                    <!-- <th>Garage Image</th> -->
                                    <th>Price</th>
                                    <th>Valid (DAYS)</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="ts">
                                <?php $i = $segmentCount; 
                                foreach ($details as $data) { 
                                    
                                    ?>
                                    <tr>
                                        <td><?= $i ?></td>
                                        <td><?= $data['name']; ?></td>
                                       <td>
                                            <?php if(!empty($data['entry_type']) == 1){?>
                                              <span class="label label-success"><?php  echo "PURCHASED";?></span>
                                            <?php } else{?>
                                              <span class="label label-warning">---</span>
                                            <?php } ?>
                                          </td>
                                        <td>
                                        <?php if(!empty($data['thumbnail'])){?>
                                          <img src="<?php echo $data['thumbnail']?>" style="width:80px">
                                        <?php } else{?>
                                          <img src="<?php echo base_url().'uploads/no_image_available.png' ?>" style="width:80px">
                                        <?php } ?>
                                      </td>
                                        <!-- <td>
                                        <img src="<?php echo $data['mainImage'] ?>" style="width:80px; height: 80px; object-fit: cover;">
                                        </td> -->
                                        <!-- <td><svg version="1.1" baseProfile="full" width="300" height="200" xmlns="<?php echo $data['mainImage'] ?>"> -->
                                                <!-- <rect width="100%" height="100%" fill="black" />
                                                <circle cx="150" cy="100" r="90" fill="blue" /> -->
                                            </svg></td>
                                        <!-- <td><iframe src="<?php echo $data['mainImage'] ?>" frameborder="0"></iframe></td> -->
                                        <!-- <td><object data="<?php echo $data['mainImage'] ?>" type="svga"></object></td> -->
                                        <td><?= $data['price']; ?></td>
                                        <td><?= $data['validity']; ?></td>
                                        <td>
                                        <ul class="admin-action btn btn-default" style="background-color: #f4f4f4;color: #fff !important;">
                                                <li class="dropdown">
                                                    <a class="dropdown-toggle" style="color: black;" data-toggle="dropdown" href="#" aria-expanded="false">
                                                        Action <span class="caret"></span>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-right">

                                                        <li>
                                                            <a role="menuitem" tabindex="-1" href="<?= site_url() ?>/Garage/editGarage/<?= $data['id']; ?>">Edit EntryEffect
                                                            </a>
                                                        </li>
                                                        <li>
                                                            
                                                            <a role="menuitem" tabindex="-1" onclick="return confirm(&quot;Do you want to delete the EntryEffect &quot;);" href="<?= site_url() ?>/Garage/deleteGarage/<?= $data['id']; ?>">Delete
                                                                EntryEffect
                                                            </a>
                                        
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                <?php $i++;
                                } ?>
                            </tbody>
                        </table>
                        <?php echo $links; ?>
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
                        $('#ts').html(
                            '<tr class="odd"><td valign="top" colspan="7" class="dataTables_empty">No data available in table</td></tr>'
                        );
                    } else {
                        var html, comment;
                        for (var i = 0; i < data.length; i++) {
                            comment = data[i];
                            if (comment.status == 'Approved')
                                var mainStaus = 'Decline';
                            else
                                var mainStaus = 'Approve';
                            html += '<tr><td>' + (i + 1) + '</td><td>' + comment.username +
                                '</td><td>' + comment.email + '</td><td>' + comment.phone +
                                '</td><td><span class="label label-warning">' + "Upgrade" +
                                '</span></td><td>' + "--" +
                                '</td><td><span class="label label-warning">' + "Clear" +
                                '</span></td><td><span class="label label-success">' + comment
                                .status +
                                '</span></td><td><ul class="admin-action btn btn-default" style="background-color: #f4f4f4;color: #fff !important;"><li class="dropdown"><a class="dropdown-toggle" style="color: black;" data-toggle="dropdown" href="#" aria-expanded="false">' +
                                "Action " +
                                '<span class="caret"></span></a><ul class="dropdown-menu dropdown-menu-right"><li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo  site_url() ?>/user/view/' +
                                comment.id +
                                '">View</a></li><li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo site_url() ?>/user/edit/' +
                                comment.id +
                                '">Edit</a></li><li><a role="menuitem" tabindex="-1" onclick="return confirm(&quot;Once you deleted this account, the user (' +
                                comment.username +
                                ') will no longer be able to log in to the site or apps. This action cannot be undone.&quot;);" href="<?= site_url() ?>/user/delete/' +
                                comment.id +
                                '">Delete</a></li><li role="presentation" class="divider"></li><li role="presentation"><a role="menuitem" tabindex="-1" href="<?= site_url() ?>/user/giftHistory/' +
                                comment.id +
                                '">Received Gift History</a></li><li role="presentation"><a role="menuitem" tabindex="-1" href="<?= site_url() ?>/user/giftHistory/' +
                                comment.id +
                                '">Send Gift History</a></li><li role="presentation"><a role="menuitem" tabindex="-1" href="<?= site_url() ?>/user/purchaseCoinHistory/' +
                                comment.id +
                                '">Coin Hisory</a></li><li role="presentation" class="divider"></li><li role="presentation"><a role="menuitem" onclick="return confirm(' +
                                comment.username + ' - Do you want' + mainStaus +
                                'this user;);" tabindex="-1" href="<?= site_url() ?>/user/status/' +
                                comment.id + '">' + mainStaus +
                                '</a></li></ul></li></ul></td></tr>';
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