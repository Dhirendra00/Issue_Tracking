<!doctype html>
<html lang="en">

<head>
	<title>Dashboard | Project</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
	<link rel="stylesheet" href="assets/vendor/chartist/css/chartist-custom.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<a href="index.html"><img src="assets/img/logo-dark.png" alt="Klorofil Logo" class="img-responsive logo"></a>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>
				<form class="navbar-form navbar-left">
					<div class="input-group">
						<input type="text" value="" class="form-control" placeholder="Search dashboard...">
						<span class="input-group-btn"><button type="button" class="btn btn-primary" style="margin-top: 6px;">Go</button></span>
					</div>
				</form>
				<!-- <div class="navbar-btn navbar-btn-right">
					<a class="btn btn-success update-pro" href="https://www.themeineed.com/downloads/klorofil-pro-bootstrap-admin-dashboard-template/?utm_source=klorofil&utm_medium=template&utm_campaign=KlorofilPro" title="Upgrade to Pro" target="_blank"><i class="fa fa-rocket"></i> <span>UPGRADE TO PRO</span></a>
				</div> -->

				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
								<i class="lnr lnr-alarm"></i>
								<span class="badge bg-danger">5</span>
							</a>
							<ul class="dropdown-menu notifications">
								<li><a href="#" class="notification-item"><span class="dot bg-warning"></span>System space is almost full</a></li>
								<li><a href="#" class="notification-item"><span class="dot bg-danger"></span>You have 9 unfinished tasks</a></li>
								<li><a href="#" class="notification-item"><span class="dot bg-success"></span>Monthly report is available</a></li>
								<li><a href="#" class="notification-item"><span class="dot bg-warning"></span>Weekly meeting in 1 hour</a></li>
								<li><a href="#" class="notification-item"><span class="dot bg-success"></span>Your request has been approved</a></li>
								<li><a href="#" class="more">See all notifications</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="lnr lnr-question-circle"></i> <span>Help</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="#">Basic Use</a></li>
								<li><a href="#">Working With Data</a></li>
								<li><a href="#">Security</a></li>
								<li><a href="#">Troubleshooting</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="assets/img/user.png" class="img-circle" alt="Avatar"> <span>Samuel</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="#"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
								<li><a href="#"><i class="lnr lnr-envelope"></i> <span>Message</span></a></li>
								<li><a href="#"><i class="lnr lnr-cog"></i> <span>Settings</span></a></li>
								<li><a href="#"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
							</ul>
						</li>
						<!-- <li>
							<a class="update-pro" href="https://www.themeineed.com/downloads/klorofil-pro-bootstrap-admin-dashboard-template/?utm_source=klorofil&utm_medium=template&utm_campaign=KlorofilPro" title="Upgrade to Pro" target="_blank"><i class="fa fa-rocket"></i> <span>UPGRADE TO PRO</span></a>
						</li> -->
					</ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
						<div class="sidenav">
			<button class="drop"><i id="lnr" class="lnr lnr-home"></i>Dashboard
  
  </button>

  <button class="drop"><i id="lnr" class="lnr lnr-alarm"></i>Notification 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown">
     <a href="add_notification.php"><i id="lnr" class="lnr lnr-plus-circle"></i>Add</a>
    <a href="view_notifcation.php"><i id="lnr" class="lnr lnr-eye"></i>View</a>
  </div>
  <button class="drop"><i id="lnr" class="lnr lnr-user"></i>Register
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown">
     <a href="add_user.php"><i id="lnr" class="lnr lnr-plus-circle"></i>Add</a>
    <a href="view_user.php"><i id="lnr" class="lnr lnr-eye"></i>View</a>
  
  </div>
 
  <button class="drop"><i id="lnr" class="lnr lnr-trash"></i>Archive
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown">
    <!-- <a href="add_module.php">Add</a> -->
    <a href="archive_user.php"><i id="lnr" class="lnr lnr-eye"></i>View</a>
  </div>

  <button class="drop"><i id="lnr" class="lnr lnr-tag"></i><span>Category</span>
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown">
    <a href="add_library_sites.php"><i id="lnr" class="lnr lnr-plus-circle"></i>Add</a>
    <a href="view_library_sites.php"><i id="lnr" class="lnr lnr-eye"></i>View</a>
  </div>
</div>


<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var drop = document.getElementsByClassName("drop");
var i;

for (i = 0; i < drop.length; i++) {
  drop[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropContent = this.nextElementSibling;
  if (dropContent.style.display === "block") {
  dropContent.style.display = "none";
  } else {
  dropContent.style.display = "block";
  }
  });
}
</script>

<style>
.sidenav{
  height: auto;
  width: auto;
  z-index: 1;
  top: 0;
  left: 0;

  overflow-x: hidden;
  padding-top: 12px;

}
.sidenav a{
  display: block;
  color: black;
  padding: 12px;
  text-decoration: none;
}

@media(min-width:768px) {
    .sidenav {
        z-index: 1;
        /*position: absolute;*/
        width: 250px;
       
    }

.sidenav a, .drop {
  padding: 16px;
  text-decoration: none;
  font-size: 18px;
  /*color: #818181;*/
  border: none;
  background: none;
  width: 100%;
  text-align: left;
  cursor: pointer;
  
}


.sidenav a:hover, .drop:hover {
  color: white;
}

.active {

  color: white;
}


.dropdown {
  display: none;
  padding-left: 6px;
}

/* Optional: Style the caret down icon */
.fa-caret-down {
  float: right;
  padding-right: 15px;
}
.lnr{
	padding: 12px;
}
.lnr:hover{
	color: lightblue;
}

</style>  


				</nav>
			</div>
		</div>


		<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var drop = document.getElementsByClassName("collapsed");
var i;

for (i = 0; i < drop.length; i++) {
  drop[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropContent = this.nextElementSibling;

  if (dropContent.style.display === "block") {
  dropContent.style.display = "none";
  } else {
  dropContent.style.display = "block";
  }
  });
}
</script>