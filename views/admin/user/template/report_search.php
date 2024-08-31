<div class="box-body" id="report">
    	<table id="example1" class="table table-bordered table-striped" id="table_search">
        	<thead>
        	<tr>
        		<th>Sr.</th>
        		<th>Username</th>
        		<th>Email</th>
        		<th>Social_id</th>
        		<th>Date of birth</th></th>
        		<!-- <th>Status</th> -->
        	</tr>
        	</thead>
        	<tbody>
        	<?php
			if(!!$list){
			 $i = 1; foreach($list as $data){ ?>
        		<tr>
        			<td><?= $i;?></td>
        			<td><?php  echo $data['name'];?></td>
        			<td><?php  echo $data['email'];?></td>
        			<td><?php  echo $data['social_id'];?></td>
        			<td><?php  echo $data['dob'];?></td>
        			<!-- <td>
        				<?php if($data['status'] == 'Approved'){?>
        					<span class="label label-success"><?php  echo $data['status'];?></span>
        				<?php } else{?>
        					<span class="label label-warning"><?php  echo $data['status'];?></span>
        				<?php }?>
        			</td> -->
        
        		</tr>
        	<?php $i++; }
			}else{
				?>
				<h1>No Data Found</h1>
				<?php
			} ?>
        	</tbody>
    </table>
</div>