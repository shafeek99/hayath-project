﻿<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Hayath</title>
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/logo-ct-dark.png">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="assets/css/feathericon.min.css">
	<link rel="stylehseet" href="https://cdn.oesmith.co.uk/morris-0.5.1.css">
	<link rel="stylesheet" href="assets/plugins/morris/morris.css">
	<link rel="stylesheet" href="assets/css/style.css"> </head>

<body>
		<div class="main-wrapper">
			<div class="header">
				<div class="header-left">
					<a href="./dashboard.php" class="logo"> <img src="./assets/img/logo-ct-dark.png" width="50" height="70" alt="logo"> <span class="logoclass">Hayath Gold</span> </a>
	
				</div>
				<a href="javascript:void(0);" id="toggle_btn"> <i class="fe fe-text-align-left"></i> </a>
				<a class="mobile_btn" id="mobile_btn"> <i class="fas fa-bars"></i> </a>
				<ul class="nav user-menu">
			<li class="nav-item dropdown noti-dropdown">
		<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"> <i class="fe fe-bell"></i> <span class="badge badge-pill">3</span> </a>
		<div class="dropdown-menu notifications">
			<div class="topnav-dropdown-header"> <span class="notification-title">Notifications</span> <a href="javascript:void(0)" class="clear-noti"> Clear All </a> </div>
			<div class="noti-content">
				<ul class="notification-list">
					<li class="notification-message">
						<a href="#">
							<div class="media"> <span class="avatar avatar-sm">
								<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-02.jpg">
								</span>
								<div class="media-body">
									<p class="noti-details"><span class="noti-title">Carlson Tech</span> has approved <span class="noti-title">your estimate</span></p>
									<p class="noti-time"><span class="notification-time">4 mins ago</span> </p>
								</div>
							</div>
						</a>
					</li>
					<li class="notification-message">
						<a href="#">
							<div class="media"> <span class="avatar avatar-sm">
								<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-11.jpg">
								</span>
								<div class="media-body">
									<p class="noti-details"><span class="noti-title">International Software
										Inc</span> has sent you a invoice in the amount of <span class="noti-title">$218</span></p>
									<p class="noti-time"><span class="notification-time">6 mins ago</span> </p>
								</div>
							</div>
						</a>
					</li>
					<li class="notification-message">
						<a href="#">
							<div class="media"> <span class="avatar avatar-sm">
								<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-17.jpg">
								</span>
								<div class="media-body">
									<p class="noti-details"><span class="noti-title">John Hendry</span> sent a cancellation request <span class="noti-title">Apple iPhone
										XR</span></p>
									<p class="noti-time"><span class="notification-time">8 mins ago</span> </p>
								</div>
							</div>
						</a>
					</li>
					<li class="notification-message">
						<a href="#">
							<div class="media"> <span class="avatar avatar-sm">
								<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-13.jpg">
								</span>
								<div class="media-body">
									<p class="noti-details"><span class="noti-title">Mercury Software
									Inc</span> added a new product <span class="noti-title">Apple
									MacBook Pro</span></p>
									<p class="noti-time"><span class="notification-time">12 mins ago</span> </p>
								</div>
							</div>
						</a>
					</li>
				</ul>
			</div>
			<div class="topnav-dropdown-footer"> <a href="#">View all Notifications</a> </div>
		</div>
	</li>
	<li class="nav-item dropdown has-arrow">
		<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"> <span class="user-img"><img class="rounded-circle img-fluid " src="assets/img/profile.jpg" width="20px" alt="shafeek"></span> </a>
		<div class="dropdown-menu">
					<div class="user-header">
						<div class="avatar avatar-sm"> <img src="assets/img/profile.jpg" alt="User Image" class="avatar-img rounded-circle"> </div>
						<div class="user-text">
							<h6>Shafeek</h6>
							<p class="text-muted mb-0">Administrator</p>
						</div>
					</div> <a class="dropdown-item" href="profile.html">My Profile</a>  <a class="dropdown-item" href="login.html">Logout</a> </div>
					</li>
				</ul>
				<div class="top-nav-search">
					<form>
						<input type="text" class="form-control" placeholder="Search here">
						<button class="btn" type="submit"><i class="fas fa-search"></i></button>
					</form>
				</div>
			</div>
<?php
 include"sidemenu.php";
?>
			<!--SIDE NAV END  -->

		<div class="page-wrapper">
			<div class="content container-fluid">
				<div class="page-header">
					<div class="row">
						<div class="col-sm-12 mt-5">
						
							<ul class="breadcrumb">
								<li class="breadcrumb-item active">Dashboard</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="row">
			
					<div class="col-xl-3 col-sm-6 col-12">
						<div class="card board1 fill">
							<div class="card-body">
								<div class="dash-widget-header">
									<div>
										<h3 class="card_widget_header">180</h3>
										<h6 class="text-muted">Available Collections</h6> </div>
									<div class="ml-auto mt-md-3 mt-lg-0"> <span class="opacity-7 text-muted"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="#009688" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign">
									<line x1="12" y1="1" x2="12" y2="23"></line>
									<path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
									</svg></span> </div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6 col-12">
						<div class="card board1 fill">
							<div class="card-body">
								<div class="dash-widget-header">
									<div>
										<h3 class="card_widget_header">538</h3>
										<h6 class="text-muted">Enquiry</h6> </div>
									<div class="ml-auto mt-md-3 mt-lg-0"> <span class="opacity-7 text-muted"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="#009688" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-plus">
									<path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z">
									</path>
									<polyline points="14 2 14 8 20 8"></polyline>
									<line x1="12" y1="18" x2="12" y2="12"></line>
									<line x1="9" y1="15" x2="15" y2="15"></line>
									</svg></span> </div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6 col-12">
						<div class="card board1 fill">
							<div class="card-body">
								<div class="dash-widget-header">
									<div>
										<h3 class="card_widget_header">364</h3>
										<h6 class="text-muted">Collections</h6> </div>
									<div class="ml-auto mt-md-3 mt-lg-0"> <span class="opacity-7 text-muted"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="#009688" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe">
									<circle cx="12" cy="12" r="10"></circle>
									<line x1="2" y1="12" x2="22" y2="12"></line>
									<path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z">
									</path>
									</svg></span> </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			
	<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
	<script src="assets/js/jquery-3.5.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/plugins/raphael/raphael.min.js"></script>
	<script src="assets/plugins/morris/morris.min.js"></script>
	<script src="assets/js/chart.morris.js"></script>
	<script src="assets/js/script.js"></script>
</body>

</html>