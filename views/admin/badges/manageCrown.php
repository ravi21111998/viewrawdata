<style>
    div#example1_filter {
        float: right;
    }

    .paging_simple_numbers{
        float: right;
    }
    .dataTables_empty{
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
                    <div class="box-header">
                        <h3 class="box-title"><a href="<?= site_url();?>/Badges/addCrown" style="font-size: 14px;" class="btn btn-block btn-success btn-xs">Add Crown</a></h3>
                    </div>

            

                    <!-- /.box-header -->
                    <div class="box-body">
                        <?php if($this->session->flashdata('success')){ ?>
                            <div class="success-message">
                                <script> swal("Good job!", "<?= $this->session->flashdata('success')?>!", "success") </script>
                            </div>
                        <?php }?>
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Sr.</th>
                                <th>Title</th>
                                <th>Likes</th>
                                <th>Followers</th>
                                <th>color</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody id = "ts">
                            <?php $i = 1; foreach($details as $data){ ?>
                                <tr>
                                    <td><?= $i;?></td>
                                    <td><?php  echo $data['title'];?></td>
                                    <td><?php  echo $data['likes'];?></td>
                                    <td><?php  echo $data['followers'];?></td>
                                    <td><?php  echo $data['color'];?></td>
                                    <td><img src="<?php  echo $data['image'];?>" style="width:80px;height:70px"> </td>
                                    <td>
                                        <ul class="admin-action btn btn-default" style="background-color: #f4f4f4;color: #fff !important;">
                                            <li class="dropdown">
                                                <a class="dropdown-toggle" style="color: black;" data-toggle="dropdown" href="#" aria-expanded="false">
                                                    Action <span class="caret"></span>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li role="presentation">
                                                        <a role="menuitem" tabindex="-1" href="<?= site_url()?>/Badges/editCrown/<?php echo  $data['id'];?>">Edit</a>
                                                    </li>
                                                    <li>
                                                        <a role="menuitem" tabindex="-1" onclick="return confirm('Are you sure?');" href="<?= site_url()?>/Badges/deleteCrown/<?php echo  $data['id'];?>">Delete </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <?php $i++; } ?>
                            </tbody>
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
    $(function () {
        $('#example1').DataTable()
        $('#example2').DataTable({
            'paging'      : true,
            'lengthChange': false,
            'searching'   : false,
            'ordering'    : true,
            'info'        : true,
            'autoWidth'   : false
        })
    })
</script>
<script type="text/javascript" src="http://w2ui.com/src/w2ui-1.4.2.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="http://w2ui.com/src/w2ui-1.4.2.min.css" />
<script>
    $(document).ready(function() {
        $(".popup_image").on('click', function() {
            w2popup.open({
                title: 'Payment Image',
                height : 1000,
                width : 1000,
                showMax : true,
                body: '<div class="w2ui-centered"><img src="' + $(this).attr('src') + '"></img></div>'
            });
        });

    });
</script>

<script>
    $("#pname").keyup(function(event) {
        event.preventDefault();
        if (event.keyCode === 13) {
            $("#search").click();
        }
    });
    $(document).ready(function(){
        $("#search").click(function(){
            var start = $("#sdate").val();
            var end = $("#edate").val();
            var name = $("#pname").val();
            $.ajax({
                type:"post",
                url:"<?= site_url()?>/badges/getResult",
                data:{s:start,e:end,p:name},
                dataType: 'json',                //data format
                success: function(data){
                    if(data ==''){
                        $('#ts').html('<tr class="odd"><td valign="top" colspan="7" class="dataTables_empty">No data available in table</td></tr>');
                    }
                    else{
                        var html, comment;
                        for(var i = 0; i < data.length; i++) {
                            comment = data[i];
                            if(comment.img == ""){
                                var img = '<img src="<?php  echo $data['image'];?>" style="width:80px;height:70px">';
                            }
                            else{
                                var img = '<img src="<?php  echo $data['image'];?>" style="width:80px;height:70px">';
                            }
                            html += '<tr><td>' + (i+1) + '</td><td>' + comment.title+ '</td><td>' + comment.likes + '</td><td>' + comment.followers +
                                '</td><td>' + comment.color + '</td><td>' + img +
                                '</td><td><ul class="admin-action btn btn-default" style="background-color: #f4f4f4;color: #fff !important;"><li class="dropdown"><a class="dropdown-toggle" style="color: black;" data-toggle="dropdown" href="#" aria-expanded="false">' + "Action " + '<span class="caret"></span></a></li></ul></td></tr>';
                        }

                        $('#ts').html(html);
                    }
                }
            });
        });
    });
    $(function(){
        var dtToday = new Date();
        var month = dtToday.getMonth() + 1;
        var day = dtToday.getDate();
        var year = dtToday.getFullYear()+1;
        if(month < 10)
            month = '0' + month.toString();
        if(day < 10)
            day = '0' + day.toString();
        var maxDate = year + '-' + month + '-' + day;
        $('#sdate').attr('max', maxDate);
        $('#edate').attr('max', maxDate);
    });
</script>
