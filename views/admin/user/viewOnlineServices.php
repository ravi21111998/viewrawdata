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
 .ghghg{
    margin-left:247px;
    background-color:green!important;
    padding:6px 10px;
    border-radius:8px;
    border:none;
    color:white;
    
}
.dvjhvjhvhsdvchd{
    text-align:center;
}
</style>
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
                                	<!--<div class="main-data-single-field">-->
                                 <!--   	<span style="font-weight: bold;">Search Online Services</span>-->
                                 <!--       <span><input type="text" id="pname" name="pname" placeholder="Enter...."style="border-radius: 4px;border-style: groove;width: 111px;"></span>-->
                                 <!--       <span><button type="button" id="search"style="background-color: #4340d9d9 ;color: #FFFFFF;border-radius:6px;border:1px solid #9B59B6;box-shadow: 0 4px 5px 0 rgba(156, 39, 176, 0.14), 0 1px 10px 0 rgba(156, 39, 176, 0.12), 0 2px 4px -1px rgba(156, 39, 176, 0.2);">Search</button></span>-->
                                 <!--   </div>-->
                                </div>
							          	<!--<div class="col-md-4">-->
                  <!--              	<div class="main-data-single-field">-->
                  <!--                  	<span style="font-weight: bold;">Start Date</span>-->
                  <!--                      <span><input type="date" id="sdate" name="sdate" style="border-radius: 4px;border-style: groove;"></span>-->
                  <!--                  </div>-->
                  <!--              </div>-->
                                <!--<div class="col-md-4">-->
                                <!--	<div class="main-data-single-field">-->
                                <!--    	<span style="font-weight: bold;">End Date</span>-->
                                <!--        <span><input type="date" id="edate" name="edate" style="border-radius: 4px;border-style: groove;"></span>-->
                                <!--        <span><button type="button" id="search"style="background-color: #d9a944;color: #FFFFFF;border-radius:6px;border:1px solid #33cccc;box-shadow: 0 4px 5px 0 rgba(156, 39, 176, 0.14), 0 1px 10px 0 rgba(156, 39, 176, 0.12), 0 2px 4px -1px rgba(156, 39, 176, 0.2);">Search</button></span>-->
                                <!--    </div>-->
                                <!--</div>-->
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
                        <?php if($this->session->flashdata('error')){ ?>
                        <div class="error-message">
                            <script>
                            swal("error", "<?= $this->session->flashdata('error')?>!", "error")
                            </script>
                        </div>
                        <?php }?>
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Sr.</th>
                                    <th> UniqueId</th>
                                    <th>Online Service Name</th>
                                    <th>name</th>
                                    <th>Online Services Code</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="ts">
                                <?php $i = 1; foreach($details as $data){ ?>
                                <tr>
                                    <td><?= $i;?></td>
                                    <!-- <td><img src="<?php echo $data['image'] ?>" style="width: 80px;height: 80px"></td> -->
                                    
                                    <td><?php  echo $data['uniqueId'];?></td>
                                    <td><?php  echo $data['onlineServiceName'];?></td>
                                    <td><?php  echo $data['username'];?></td>
                                    <td><?php  echo $data['onlineServiceCode'];?></td>
                                    <td><?php  echo $data['email'];?></td>
                                    <td><?php  echo $data['phone'];?></td>
                                   
                                    <td>
                                        <ul class="admin-action btn btn-default"
                                            style="background-color: #f4f4f4;color: #fff !important;">
                                            <li class="dropdown">
                                                <a class="dropdown-toggle" style="color: black;" data-toggle="dropdown"
                                                    href="#" aria-expanded="false">
                                                    Action <span class="caret"></span>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                            
                                                    
                                                    <li role="presentation">
                                                        <a role="menuitem" tabindex="-1"
                                                            href="<?= site_url()?>/user/manageOnlineService/<?= $data['id'];?>">Manage Online Services</a>
                                                    
                                                   


                                                    <li role="presentation" class="divider"></li>
                                                    
                                                    <li role="presentation">
                                                        <a href="<?= site_url()?>/user/deleteOnlineServices/<?= $data['id'];?>" role="menuitem" tabindex="-1"
                                                            >Delete</a>
                                                    </li>
                                                 
                                                </ul>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal<?= $data['id'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Reject Online Services</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="<?= site_url('SubAdmin/rejectAgency') ?>" method="post">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1"> Online Services Id</label>
                                                <input type="text" class="form-control" name="agencyId">
                                                <input type="hidden" name="rejectId" value="<?= $data['id'];?>">
                                                <small id="emailHelp" class="form-text text-muted">To whom you want to give all the live Users</small>
                                            </div>
                                            <button type="submit" class="ghghg">Submit</button>
                                            </form>
                                        </div>
                                        </div>
                                    </div>
                                </div>
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

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script src="sweetalert2.all.min.js"></script>
	<script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">

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
            url: "<?= site_url()?>/User/getOnlineServicesResult",
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
                        var siteUrl = "https://xrdsimulators.tech/wow_project";                     
                        html += '<tr><td>' + (i+1) + '</td><td><img src="' + siteUrl+'/'+comment.image + '" style="width:80px; height:80px;"></td><td>' + comment.uniqueId + '</td><td>' + comment.agencyName +
                            '</td><td>' + comment.username + '</td><td>' + comment.agencyCode + '</td><td>'+comment.email+'</td><td>'+comment.phone+'</td><td><span class="label label-success">' + comment.status +
                            '</span></td><td><ul class="admin-action btn btn-default" style="background-color: #f4f4f4;color: #fff !important;"><li class="dropdown"><a class="dropdown-toggle" style="color: black;" data-toggle="dropdown" href="#" aria-expanded="false">' + "Action " + '<span class="caret"></span></a><ul class="dropdown-menu dropdown-menu-right"><li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo  site_url()?>/subAdmin/manageHost/'+comment.id+'">Manage Hosts</a></li><li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo  site_url()?>/subAdmin/manageAgency/'+comment.id+'">Manage Agency</a></li><li role="presentation"><a role="menuitem" tabindex="-1" data-toggle="modal" data-target="#exampleModal'+comment.id+'">Reject Agency</a></li></ul></li></ul></td></tr>';
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
<script>
    function reApprove(agencyCode){
        $.ajax({
            url: "<?= site_url()?>/SubAdmin/reApproveAgency",
            type: "post",
            data: {agencyCode},
            datatype: "json",

            success: function(res){
                setTimeout(function(){
                    window.location.reload();
                }, 2000);
                // if(res == "1"){
                //     swal({
                //         title: "success",
                //         text: "Agency successfully approved",
                //         icon: "success",
                //     });
				// 		setTimeout(function(){
				// 			window.location.reload();
				// 		}, 2000);
				// 	}else if(res == "2"){
				// 		swal({
				// 		icon: "error",
				// 		title: "Oops...",
				// 		text: "Try someTime....!!!",
				// 		});
				// 		setTimeout(function(){
				// 			window.location.reload();
				// 		}, 2000);
				// 	}else if(res == "0"){
				// 		swal({
				// 		icon: "error",
				// 		title: "Oops...",
				// 		text: "Agency not found",
				// 		});
				// 		setTimeout(function(){
				// 			window.location.reload();
				// 		}, 2000);
				// 	}
            }
        });
    }
</script>