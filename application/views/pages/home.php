

	<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">Weekly Overview</h3>
							<p class="panel-subtitle">Period: Oct 14, 2016 - Oct 21, 2016</p>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-3">
									<div class="metric">
										<span class="icon"><i class="fa fa-download"></i></span>
										<p>
											<span class="number">1,252</span>
											<span class="title">Admin</span>
										</p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="metric">
										<span class="icon"><i class="fa fa-shopping-bag"></i></span>
										<p>
											<span class="number">203</span>
											<span class="title">Developer</span>
										</p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="metric">
										<span class="icon"><i class="fa fa-eye"></i></span>
										<p>
											<span class="number">274,678</span>
											<span class="title">Staffs</span>
										</p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="metric">
										<span class="icon"><i class="fa fa-bar-chart"></i></span>
										<p>
											<span class="number">35%</span>
											<span class="title">Conversions</span>
										</p>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-9">
									<div id="headline-chart" class="ct-chart"></div>
								</div>
								<div class="col-md-3">
									<div class="weekly-summary text-right">
										<span class="number">2,315</span> <span class="percentage"><i class="fa fa-caret-up text-success"></i> 1%</span>
										<span class="info-label">Total Sales</span>
									</div>
									<div class="weekly-summary text-right">
										<span class="number">$5,758</span> <span class="percentage"><i class="fa fa-caret-up text-success"></i> 23%</span>
										<span class="info-label">Monthly Income</span>
									</div>
									<div class="weekly-summary text-right">
										<span class="number">$65,938</span> <span class="percentage"><i class="fa fa-caret-down text-danger"></i> 8%</span>
										<span class="info-label">Total Income</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- END OVERVIEW -->
					<div class="row">
						<div class="col-md-6">
							<!-- RECENT PURCHASES -->
							<div class="panel" style="width: 1000px;">
								<div class="panel-heading">
									<h3 class="panel-title">Issues</h3>
									<div class="right">

					<a class="btn btn-success update-pro" href="#" title="Upgrade to Pro" id="button"><i class="fa fa-plus"></i> <span>Add Issue</span></a>
			
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
												<th>Title</th>
												<th>Category</th>
												<th>Description</th>
												<th>Due_Date</th>
												<th>Assigned_to</th>
												<th>Status</th>
											</tr>
										</thead>
										<?php foreach ($issue as $post) :?>
										<tbody>
											<tr>
												<td><a href="#"><?php echo $post['ticket']?></a></td>
												<td><?php echo $post['title']?></td>
												<td><?php echo $post['category']?></td>
												<td><?php echo $post['description']?></td>
												<td><?php echo $post['date']?></td>
												<td><?php echo $post['assigned']?></td>
												<td><span class="label label-success"><?php echo $post['status']?></span></td>
											</tr>
										
										</tbody>
							<?php endforeach ;?>
									</table>
								</div>
								<div class="panel-footer">
									<div class="row">
										<div class="col-md-6"><span class="panel-note"><i class="fa fa-clock-o"></i> Last 24 hours</span></div>
										<div class="col-md-6 text-right"><a href="#" class="btn btn-primary">View All Issue</a></div>
									</div>
								</div>
							</div>
							<!-- END RECENT PURCHASES -->
						</div>
						
					</div>
				
					<div class="row">
						<div class="col-md-4">
							<!-- TASKS -->
							<div class="panel" style="width: 300px; height: 385px;">
								<div class="panel-heading">
									<h3 class="panel-title">category</h3>
									<div class="right">
										<a class="btn btn-success update-pro" href="#" title="Upgrade to Pro" id="category_button"><i class="fa fa-plus"></i> <span>Add Category</span></a>
										<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
									</div>
								</div>
								<div class="panel-body">
										<table class="table table-striped">
										<thead>
											<tr>
												<th>Id</th>
												<th>Name</th>
												
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><a href="#">763648</a></td>
												<td>Steve</td>
												
											</tr>
											<tr>
												<td><a href="#">763649</a></td>
												<td>Amber</td>
												
											</tr>
											<tr>
												<td><a href="#">763650</a></td>
												<td>Michael</td>
										
												
											</tr>
											<tr>
												<td><a href="#">763651</a></td>
												<td>Roger</td>
											
												
											</tr>
											<tr>
												<td><a href="#">763652</a></td>
												<td>Smith</td>
												
											</tr>
										</tbody>
									</table>
								</div>
								<div class="panel-footer">
									<div class="row">
									
										<div class="col-md-6 text-right" style="margin-left: 95px;"><a href="#" class="btn btn-primary">View All Category</a></div>
									</div>
								</div>
							</div>
							<!-- END TASKS -->
						</div>
						<div class="col-md-4">
							<!-- VISIT CHART -->
							<div class="panel" style="width: 300px;">
								<div class="panel-heading">
									<h3 class="panel-title">Website Visits</h3>
									<div class="right">
										<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
										<button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
									</div>
								</div>
								<div class="panel-body">
									<div id="visits-chart" class="ct-chart"></div>
								</div>
							</div>
							<!-- END VISIT CHART -->
						</div>
						<div class="col-md-4">
							<!-- REALTIME CHART -->
							<div class="panel" style="width: 300px;">
								<div class="panel-heading">
									<h3 class="panel-title">System Load</h3>
									<div class="right">
										<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
										<button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
									</div>
								</div>
								<div class="panel-body">
									<div id="system-load" class="easy-pie-chart" data-percent="70">
										<span class="percent">70</span>
									</div>
									<h4>CPU Load</h4>
									<ul class="list-unstyled list-justify">
										<li>High: <span>95%</span></li>
										<li>Average: <span>87%</span></li>
										<li>Low: <span>20%</span></li>
										<li>Threads: <span>996</span></li>
										<li>Processes: <span>259</span></li>
									</ul>
								</div>
							</div>
							<!-- END REALTIME CHART -->
						</div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>
		
	</div>
		<div class="add_issue1">

       <div class="container"style="background: #008080; ">

  	<div class="cl" style=" color: white;">
  			<h2>Add Issue</h2>
  <label style="color: red;">x</label>
</div>
  <form method="POST" action="add_issue" >
 <div id="form"style="background: ivory; border-radius: 5px;">
    <label for="fname">Ticket No.</label>
    <input type="number"  name="ticket" placeholder="Your name..">

    <label for="lname">Title</label>
    <input type="text" id="lname" name="title" placeholder="Your last name..">
<label>Category</label>
<input type="text" name="category">
<label>Assigned_to</label>
<input type="text" name="assigned">
<label>Due_Date</label>
<input type="date" name="date">
    <label for="country">Status</label>
    <select id="country" name="status">
      <option value="Completed">Completed</option>
      <option value="Partial">Partial</option>
      <option value="Incomplete">Incomplete</option>
    </select>

    <label for="subject">Description</label>
   <input type="text" name="description">
</div>
<br><hr>
    <input type="submit" value="Add Issue">
  </form>

</div>
						
		</div>

<!-- adding category -->
			<div class="add_category">

       <div class="container"style="background: #008080; ">

  	<div class="cl1" style=" color: white; ">
  			<h2>Add Category</h2>
  <label style="color: red;">x</label>
</div>
  <form method="POST" action="add_category" >
   <div id="form" style="background: ivory; border-radius: 5px;"> 
    <label for="fname">Name</label>
    <input type="text"  name="name" placeholder="Your name..">

    </div><br><hr>
    <input type="submit" value="Add Category">
  </form>

</div>
						
		</div>




	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
	<script src="assets/vendor/chartist/js/chartist.min.js"></script>
	<script src="assets/scripts/klorofil-common.js"></script>
	<script>
	$(function() {
		var data, options;

		// headline charts
		data = {
			labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
			series: [
				[23, 29, 24, 40, 25, 24, 35],
				[14, 25, 18, 34, 29, 38, 44],
			]
		};

		options = {
			height: 300,
			showArea: true,
			showLine: false,
			showPoint: false,
			fullWidth: true,
			axisX: {
				showGrid: false
			},
			lineSmooth: false,
		};

		new Chartist.Line('#headline-chart', data, options);


		// visits trend charts
		data = {
			labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
			series: [{
				name: 'series-real',
				data: [200, 380, 350, 320, 410, 450, 570, 400, 555, 620, 750, 900],
			}, {
				name: 'series-projection',
				data: [240, 350, 360, 380, 400, 450, 480, 523, 555, 600, 700, 800],
			}]
		};

		options = {
			fullWidth: true,
			lineSmooth: false,
			height: "270px",
			low: 0,
			high: 'auto',
			series: {
				'series-projection': {
					showArea: true,
					showPoint: false,
					showLine: false
				},
			},
			axisX: {
				showGrid: false,

			},
			axisY: {
				showGrid: false,
				onlyInteger: true,
				offset: 0,
			},
			chartPadding: {
				left: 20,
				right: 20
			}
		};

		new Chartist.Line('#visits-trends-chart', data, options);


		// visits chart
		data = {
			labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
			series: [
				[6384, 6342, 5437, 2764, 3958, 5068, 7654]
			]
		};

		options = {
			height: 300,
			axisX: {
				showGrid: false
			},
		};

		new Chartist.Bar('#visits-chart', data, options);


		// real-time pie chart
		var sysLoad = $('#system-load').easyPieChart({
			size: 130,
			barColor: function(percent) {
				return "rgb(" + Math.round(200 * percent / 100) + ", " + Math.round(200 * (1.1 - percent / 100)) + ", 0)";
			},
			trackColor: 'rgba(245, 245, 245, 0.8)',
			scaleColor: false,
			lineWidth: 5,
			lineCap: "square",
			animate: 800
		});

		var updateInterval = 3000; // in milliseconds

		setInterval(function() {
			var randomVal;
			randomVal = getRandomInt(0, 100);

			sysLoad.data('easyPieChart').update(randomVal);
			sysLoad.find('.percent').text(randomVal);
		}, updateInterval);

		function getRandomInt(min, max) {
			return Math.floor(Math.random() * (max - min + 1)) + min;
		}

	});
	</script>
</body>

</html>
<style>
/*body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}*/

input[type=text], select, textarea {
  width: 100%;
  padding: 5px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 20px;
  resize: vertical;
}
input[type=date]{
  width: 100%;
  padding: 5px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 10px;
  resize: vertical;
}
input[type=number]{
  width: 100%;
  padding: 5px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 10px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 5px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
margin-bottom: 10px;
}

input[type=submit]:hover {
  background-color: #45a049;
}
form{
	border-radius: 15px solid;
}
.add_issue1{
	width: 100%;
	height: 100%;
	background:rgba(0,0,0,0.7);
	  position: absolute;
	  top: 0;
	  justify-content: center;
	  align-items: top;
	  display: none;
}
.add_category{
	width: 100%;
	height: 100%;
	background:rgba(0,0,0,0.7);
	  position: absolute;
	  top: 0;
	  justify-content: center;
	  align-items: top;
	  display: none;
}
.container {
height: fit-content;
  border-radius: 5px;
  background-color: #f2f2f2;
margin-top: 100px;
  padding-top: 5px;
  width: 50%;
}
.cl {
	display: flex;
	justify-content: space-between;
	/*position: absolute;*/
	/*margin-top: -20px;*/
	/*margin-left: 620px;*/
	top: 2;
	/*right: 10px;*/
	font-size: 25px;
	color: #333;
	/*transform: rotate(45deg);*/
	cursor: pointer;
	&:hover {
		color: #666;
	}
}
.cl1 {
	display: flex;
	justify-content: space-between;
		top: 2;
	/*right: 10px;*/
	font-size: 25px;
	color: #333;
	cursor: pointer;
	&:hover {
		color: #666;
	}
}


</style>
<script>
	document.getElementById('button').addEventListener("click", function() {
	document.querySelector('.add_issue1').style.display = "flex";
});
	document.querySelector('.cl').addEventListener("click", function() {
	document.querySelector('.add_issue1').style.display = "none";
});

  document.getElementById('category_button').addEventListener("click", function() {
	document.querySelector('.add_category').style.display = "flex";
});
	document.querySelector('.cl1').addEventListener("click", function() {
	document.querySelector('.add_category').style.display = "none";
});	
</script>
