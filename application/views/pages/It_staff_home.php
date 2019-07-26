
	<link rel="stylesheet" href="assets/css/user_main.css">
	<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
		
					<!-- END OVERVIEW -->
					<div class="row">
						<div class="col-md-6">
							<!-- RECENT PURCHASES -->
							<div class="panel" style="width: 1000px;">
								<div class="panel-heading">
									<h3 class="panel-title">User</h3>
									<div class="right">

					<a class="btn btn-success update-pro" href="#" title="Upgrade to Pro" id="button"><i class="fa fa-eye"></i> <span>View My Issue</span></a>
			
									<!-- 	<a href="">+ADD</a> -->
										<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
										<!-- <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button> -->
									</div>
								</div>
								<div class="panel-body no-padding">
									<table class="table table-striped">
										<thead>
											<tr>
												<th>Ticket No.</th>
												<th>Issue</th>
												<th>Priority</th>
												<th>Due_Date</th>
												<th>Description</th>
												<th>Status</th>
												<th>Assigned_to</th>
											</tr>
										</thead>
										<?php foreach ($issue as $post) :?>
										<tbody>
											<tr>
												<td><a href="#"><?php echo $post['ticket']?></a></td>
												<td><?php echo $post['title']?></td>
												<td><?php echo $post['category']?></td>
												<td><?php echo $post['date']?></td>
												<td><?php echo $post['description']?></td>
												<td><span class="label label-success"><?php echo $post['status']?></span></td>
												<td><?php echo $post['assigned']?></td>
											</tr>
										
										</tbody>
							<?php endforeach ;?>
									</table>
								</div>
								<div class="panel-footer">
									<div class="row">
										<div class="col-md-6"><span class="panel-note"><i class="fa fa-clock-o"></i> Last 24 hours</span></div>
										<div class="col-md-6 text-right"><a href="#" class="btn btn-primary">View All issue</a></div>
									</div>
								</div>
							</div>
							<!-- END RECENT PURCHASES -->
						</div>
						
					</div>
				
					
