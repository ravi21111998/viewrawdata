<!DOCTYPE html>
<html>
<head>
    <title><?= $title; ?></title>
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
</head>
<body>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1><?= $title; ?></h1>
            <ol class="breadcrumb">
                <li><a href="<?php echo site_url(); ?>/admin/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active"><?= $title; ?></li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
				

                    <div class="box">
					<div class = "col-md-11" style="">
								
								<div class="col-md-12" style="display:flex;justify-content:space-between;align-items:center">
								

							  <div class="main-data-single-field" style="gap:8px;display:flex;" >
								  <!--<span style="font-weight: bold;">Search User</span>-->
								  <!--<span><input type="text" id="pname" name="pname" placeholder="Enter...."style="border-radius: 4px;border-style: groove;width: 111px;"></span>-->
								  <!--<span><button type="button" id="search"style="background-color: #4340d9d9 ;color: #FFFFFF;border-radius:6px;border:1px solid #9B59B6;box-shadow: 0 4px 5px 0 rgba(156, 39, 176, 0.14), 0 1px 10px 0 rgba(156, 39, 176, 0.12), 0 2px 4px -1px rgba(156, 39, 176, 0.2);">Search</button></span>-->
							  </div>
							  <div class="main-data-single-field">
							  <h3 class="box-title"><a href="<?= site_url();?>/user/addGameDetails" style="font-size: 14px;" class="btn btn-block btn-success btn-xs">Add New Game</a></h3>
							  </div>
						  </div>
	</div>
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Sno.</th>
                                    <th>Image</th>
                                    <th>Game Name</th>
                                    <th>Link</th>
                                    <th>Game Type</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody id="gameDetailsTableBody">
                                <!-- Table content will be inserted here by JavaScript -->
                                </tbody>
                            </table>
                        </div>
                    </div>
					
                </div>
            </div>
        </section>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            fetch("https://xrdsimulators.tech/wow_project/listGameDetails")
                .then(response => response.json())
                .then(data => {
                    const tbody = document.getElementById('gameDetailsTableBody');
                    let segmentCount = 1; // Initialize segment count (or fetch from your pagination logic)
                    console.log('datadata',data)
                    data?.data?.forEach((game, index) => {
                        let row = document.createElement('tr');
                        
                        row.innerHTML = `
                            <td>${segmentCount + index}</td>
                            <td><img src="${game.image ? game.image : '<?= base_url(); ?>uploads/no_image_available.png'}" style="width:80px"></td>
                            <td>${game.name}</td>
                            <td>${game.link}</td>
                            <td>${game.gameType}</td>
                            <td>${game.gameStatus}</td>
                            <td>
                                <ul class="admin-action btn btn-default" style="background-color: #f4f4f4;color: #fff !important;">
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" style="color: black;" data-toggle="dropdown" href="#" aria-expanded="false">
                                            Action <span class="caret"></span>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                          
                                            <li role="presentation">
                                                <a role="menuitem" tabindex="-1" href="<?= site_url(); ?>/User/gameEdit/${game.id}">Edit</a>
                                            </li>
                                            <li>
                                                <a role="menuitem" tabindex="-1" onclick="return confirm('Once you\'ve deleted this account, the user (${game.name}) will no longer be able to log in to the site or apps. This action cannot be undone.');" href="<?= site_url(); ?>/User/deleteGame/${game.id}">Delete</a>
                                            </li>
                                            ${game.gameType === 'Betting' && `
                                   <li role="presentation">
                                        <a role="menuitem" tabindex="-1" href="<?= site_url(); ?>/User/gameHistoryPoint?gameId=${game.id}">Game History</a>
                                    </li>
                                    `}
                                        </ul>
                                    </li>
                                </ul>
                            </td>
                        `;
                        
                        tbody.appendChild(row);
                    });
                })
                .catch(error => console.error('Error fetching game details:', error));
        });
    </script>
</body>
</html>
