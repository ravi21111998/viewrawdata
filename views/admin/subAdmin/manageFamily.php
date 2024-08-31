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
                    
                    <div class="main-data">
						<div class="row">
                        <form method="post" id="getPdf">
                        	<div class = "col-md-12" style="margin-left:60px;margin-top:10px;margin-bottom:20px">
					      			<div class="col-md-3">
                                	<div class="main-data-single-field">
                                    	<span style="font-weight: bold;">Search Family</span>
                                        <span><input type="text" id="pname" name="pname" placeholder="Enter...."style="border-radius: 4px;border-style: groove;width: 111px;"></span>
                                        <span><button type="button" id="search"style="background-color: #4340d9d9 ;color: #FFFFFF;border-radius:6px;border:1px solid #9B59B6;box-shadow: 0 4px 5px 0 rgba(156, 39, 176, 0.14), 0 1px 10px 0 rgba(156, 39, 176, 0.12), 0 2px 4px -1px rgba(156, 39, 176, 0.2);">Search</button></span>
                                    </div>
                                </div>
                            </div>
							</form>
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
                                <th>Family Name</th>
                                <th>Family UniqueId</th>
                                <th>Image</th>
 								<th>Status</th>
								<th>Action</th>
							</tr>
                            </thead>
                            <tbody id="ts">
                                <?php $i = 1; foreach($details as $data){ ?>
                                <tr>
                                    <td><?= $i;?></td>
                                    <td><?php  echo $data['name'];?></td>
                                    <td><?php  echo $data['familyName'];?></td>
                                    <td><?php  echo $data['uniqueId'];?></td>
                                     
                                    <td><?php if(!empty($data['image'])){?>
            								<img src="<?php echo $data['image'];?>" style="width: 60px;height: 60px;border-radius: 50%;">
            							<?php } else{ ?>
            									<img src="<?php echo base_url()?>uploads/no_image_available.png" style="width: 60px;height: 60px;border-radius: 50%;">
            							<?php } ?>
							       </td>
                                     
                                    <td>
                                        <?php if($data['status'] == '0'){ ?>
                                        <span class="label label-success">Pending</span>
                                        <?php  } elseif($data['status'] == '1'){ ?>
                                        <span class="label label-success">Approved</span>
                                        <?php } else{?>
                                        <span class="label label-success">Rejected</span>
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <ul class="admin-action btn btn-default"
                                            style="background-color: #f4f4f4;color: #fff !important;">
                                            <li class="dropdown">
                                                <a class="dropdown-toggle" style="color: black;" data-toggle="dropdown"
                                                    href="#" aria-expanded="false">
                                                    Action <span class="caret"></span>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <?php if($data['status'] == '0'){ ?>

                                                    <li role="presentation">
                                                        <a role="menuitem" tabindex="-1"
                                                            href="<?= site_url()?>/Admin/ViewFamily/<?= $data['id'];?>/0">View</a>
                                                    </li>
                                                  
                                                    <!--<li role="presentation">-->
                                                    <!--    <a role="menuitem" tabindex="-1"-->
                                                    <!--        onclick="return confirm('Are you sure you want to delete this?');"-->
                                                    <!--        href="<?= site_url()?>/Admin/deleteProducts/<?= $data['id'];?>/0">Delete</a>-->
                                                    <!--</li>-->


                                                    <?php  } elseif($data['status'] == '1'){ ?>

                                                    <li role="presentation">
                                                        <a role="menuitem" tabindex="-1"
                                                            href="<?= site_url()?>/Admin/ViewFamily/<?= $data['id'];?>/1">View</a>
                                                    </li>
                                                    
                                                    <li role="presentation">
                                                        <a role="menuitem" tabindex="-1"
                                                            href="<?= site_url()?>/Admin/ViewFamilyMembers/<?= $data['id'];?>/1"">View Members Details</a>
                                                    </li>

                                            
                                                    <!--<li role="presentation">-->
                                                    <!--    <a role="menuitem" tabindex="-1"-->
                                                    <!--        onclick="return confirm('Are you sure you want to delete this?');"-->
                                                    <!--        href="<?= site_url()?>/Admin/deleteProducts/<?= $data['id'];?>/1">Delete</a>-->
                                                    <!--</li>-->


                                                    <?php } else{?>

                                                    <li role="presentation">
                                                        <a role="menuitem" tabindex="-1"
                                                            href="<?= site_url()?>/Admin/ViewFamily/<?= $data['id'];?>/2">View</a>
                                                    </li>


                                                    <!--<li role="presentation">-->
                                                    <!--    <a role="menuitem" tabindex="-1"-->
                                                    <!--        onclick="return confirm('Are you sure you want to delete this?');"-->
                                                    <!--        href="<?= site_url()?>/Admin/deleteProducts/<?= $data['id'];?>/2">Delete</a>-->
                                                    <!--</li>-->
                                                        

                                                    <?php } ?>
                                                </ul>
                                            </li>
                                        </ul>
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
        var action = '<?php echo site_url();?>/user/getexcel';
        $('#getform').attr('action', action);
        $('#getform').submit();

    });
});
</script>


<!--pdf script  -->
<script>
$("#getpdf").click(function() {
    var action = '<?php echo site_url();?>/user/getpdf';
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
        var name = $("#pname").val();
        
        $.ajax({
            type: "post",
            url: "<?php echo site_url()?>/Admin/getFamilyResult", // Updated syntax
            data: {
                p: name
            },
            dataType: 'json',
            success: function(data) {
                if (data.length === 0) {
                    $('#ts').html('<tr class="odd"><td valign="top" colspan="7" class="dataTables_empty">No data available in table</td></tr>');
                } else {
                    var html = ""; // Initialize html variable

                    data.forEach(function(comment, i) {
                        var img = comment.image !== "" ? comment.image : "<?php echo base_url() ?> + 'uploads/no_image_available.png'";
                        var mainStatus = comment.status === 'Approved' ? 'Decline' : 'Approve';

                        html += '<tr>' +
                            '<td>' + (i + 1) + '</td>' +
                            '<td>' + comment.name + '</td>' +
                            '<td>' + comment.familyName + '</td>' +
                            '<td>' + comment.uniqueId + '</td>' +
                            '<td><img src="' + img + '" style="width: 60px;height: 60px;border-radius: 50%;"></td>' +
                            '<td><span class="label label-success">' + comment.status + '</span></td>' +
                            '<td>' +
                            '<ul class="admin-action btn btn-default" style="background-color: #f4f4f4;color: #fff !important;">' +
                            '<li class="dropdown">' +
                            '<a class="dropdown-toggle" style="color: black;" data-toggle="dropdown" href="#" aria-expanded="false">Action ' +
                            '<span class="caret"></span></a>' +
                            '<ul class="dropdown-menu dropdown-menu-right">' +
                            '<li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo site_url()?>/Admin/ViewFamily/' + comment.id + '/' + comment.get + '">View</a></li>' +
                            '<li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo site_url()?>/Admin/ViewFamilyMembers/' + comment.id + '/' + comment.get + '">' + comment.members + '</a></li>' +
                            '</ul></li></ul></td></tr>';
                    });

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