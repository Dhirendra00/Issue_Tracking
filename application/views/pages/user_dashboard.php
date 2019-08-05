<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
				
					<!-- END OVERVIEW -->
					<div class="row">
						<div class="col-md-6">
							<!-- RECENT PURCHASES -->
							<div class="panel" style="width: 1045px;">
								<div class="panel-heading">
									<h3 class="panel-title">My Issues</h3>
									<div class="right">

					<a class="btn btn-success update-pro"  id="add_issue"><i class="fa fa-plus"></i> <span>Add Issue</span></a>
			
									<!-- 	<a href="">+ADD</a> -->
										<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
										<!-- <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button> -->
									</div>
								</div>
								<div class="panel-body no-padding">
									<table class="table table-striped">
										<thead>
											<tr>
												<th>Ticket No:</th>
												<th>Issue</th>
												<th>Date </th>
												<th>location</th>
												<th>Description </th>
												<th>Status</th>
											</tr>
										</thead>
										<?php foreach ($issue as $post) :?>
										<tbody>
											<tr>
											
												<td><?php
												$this->load->helper('string');
												$this->load->helper('date');
												$format="%Y%m";
												echo mdate($format);
                                                echo random_string('numeric',2,5);?></td>
												<td><?php echo $post['issue']?></td>
												<td><?php echo $post['date']?></td>
												<td><?php echo $post['description']?></td>
												<td><span class="label label-success"><?php echo $post['status']?></span></td>
												
											</tr>
										
										</tbody>
											<?php endforeach ;?>
									</table>
								</div>
								<div class="panel-footer">
									<div class="row">
										<div class="col-md-6"><span class="panel-note"><i class="fa fa-clock-o"></i> Last 24 hours</span></div>
										<div class="col-md-6 text-right"><a href="#" class="btn btn-primary">View All Issues</a></div>
									</div>
								</div>
							</div>
							<!-- END RECENT PURCHASES -->
						</div>
						
					</div>
				
			
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<div class="add_issue1">

       <div class="container"style="background: white; ">

  	<div class="cl1" style=" color: green; font-family: bold;">
  			<h3>ADD ISSUE</h3>
  <label style="color: red;">x</label>
</div>
  <form method="POST" action="add_issue">
   <div id="form" style="background: ivory; border-radius: 5px;"> 
    <label for="fname">Issue Title*</label>
    <input type="text"  name="issue" placeholder="Issue title..">
    <label for="fname">Description*</label>
    <input type="text"  name="description" placeholder="Description..">
      <label for="fname">Date*</label>
    <input type="date"  name="date">

    </div><br><hr>
    <input type="submit" value="Add Issue">
  </form>

</div>
						
		</div>
<script>

  document.getElementById('add_issue').addEventListener("click", function() {
	document.querySelector('.add_issue1').style.display = "flex";
});
	document.querySelector('.cl1').addEventListener("click", function() {
	document.querySelector('.add_issue1').style.display = "none";
});	
</script>
