<?php
session_start();
include "includes/config.php";
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="description" content="">
		<meta name="author" content="">

		<!-- Title -->
		<title>HMS</title>

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/themify-icons/themify-icons.css">
		<link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/animate.css/animate.min.css">
		<link rel="stylesheet" href="vendor/jscrollpane/jquery.jscrollpane.css">
		<link rel="stylesheet" href="vendor/waves/waves.min.css">
		<link rel="stylesheet" href="vendor/chartist/chartist.min.css">
		<link rel="stylesheet" href="vendor/switchery/dist/switchery.min.css">
		<link rel="stylesheet" href="vendor/morris/morris.css">
		<link rel="stylesheet" href="vendor/jvectormap/jquery-jvectormap-2.0.3.css">

		<!-- Neptune CSS -->
		<link rel="stylesheet" href="css/core.css">
	</head>
	<body class="large-sidebar fixed-sidebar fixed-header content-appear">
		<div class="wrapper">

			<!-- Sidebar -->
			<?php include "includes/sidebar.php"; ?>
			
			<!-- Header -->
			<?php include "includes/header.php"; ?>

			<div class="site-content">
			
			
				
				<!--Admin Dashboard Content -->
				<?php
				if($_SESSION['user']=="admin")
				{
				?>
				<div class="content-area p-y-1">
					<div class="container-fluid">
						<div class="row row-md">
							<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
								<div class="box box-block bg-white tile tile-1 m-b-2">
									<div class="t-icon right"><span class="bg-danger"></span><i class="ti-shopping-cart-full"></i></div>
									<div class="t-content">
										<h6 class="text-uppercase m-b-1">Doctors</h6>
										<?php
										$row_count = mysql_query("select * from hms_dr") or die(mysql_error());
										$count = mysql_num_rows($row_count);
										?>

										<h1 class="m-b-1"><?php echo $count;?></h1>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
								<div class="box box-block bg-white tile tile-1 m-b-2">
									<div class="t-icon right"><span class="bg-success"></span><i class="ti-bar-chart"></i></div>
									<div class="t-content">
										<h6 class="text-uppercase m-b-1">Staff</h6>
										<?php
										$row_count = mysql_query("select * from hms_staff") or die(mysql_error());
										$count = mysql_num_rows($row_count);
										?>

										<h1 class="m-b-1"><?php echo $count;?></h1>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
								<div class="box box-block bg-white tile tile-1 m-b-2">
									<div class="t-icon right"><span class="bg-primary"></span><i class="ti-package"></i></div>
									<div class="t-content">
										<h6 class="text-uppercase m-b-1">Patients</h6>
										<?php
										$row_count = mysql_query("select * from hms_patients") or die(mysql_error());
										$count = mysql_num_rows($row_count);
										?>

										<h1 class="m-b-1"><?php echo $count;?></h1>
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
				<?php 
				}
				?>
				
				<!--Doctor Dashboard Content -->
				<?php
				if($_SESSION['user']=="doctor")
				{
				?>
				<div class="content-area p-y-1">
					<div class="container-fluid">
						<div class="row row-md">
							<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
								<div class="box box-block bg-white tile tile-1 m-b-2">
									<div class="t-icon right"><span class="bg-danger"></span><i class="ti-shopping-cart-full"></i></div>
									<div class="t-content">
										<?php
										$uid = $_SESSION['uid'];	
										$row_count = mysql_query("select * from hms_appointment where doctor_name = '$uid' and status = 'Inprogress'") or die(mysql_error());
										$count = mysql_num_rows($row_count);
										?>
										<h6 class="text-uppercase m-b-1"><a href="appointment-request.php"> Appointment Requests</a></h6>
										<h1 class="m-b-1"><?php echo $count;?></h1>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
								<div class="box box-block bg-white tile tile-1 m-b-2">
									<div class="t-icon right"><span class="bg-success"></span><i class="ti-bar-chart"></i></div>
									<div class="t-content">
									<?php
										$row_count = mysql_query("select * from hms_patients") or die(mysql_error());
										$count = mysql_num_rows($row_count);
									?>
										<h6 class="text-uppercase m-b-1"><a href="list-patients.php"> Total Patients</a></h6>
										<h1 class="m-b-1"><?php echo $count;?></h1>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
								<div class="box box-block bg-white tile tile-1 m-b-2">
									<div class="t-icon right"><span class="bg-primary"></span><i class="ti-package"></i></div>
									<div class="t-content">
										<?php
										$uid = $_SESSION['uid'];	
										$row_count = mysql_query("select * from hms_appointment where doctor_name = '$uid' and billing <> 'no'") or die(mysql_error());
										$count = mysql_num_rows($row_count);
										?>
										<h6 class="text-uppercase m-b-1"><a href="patient-history.php"> Patients History</a></h6>
										<h1 class="m-b-1"><?php echo $count;?></h1>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
								<div class="box box-block bg-white tile tile-1 m-b-2">
									<div class="t-icon right"><span class="bg-warning"></span><i class="ti-receipt"></i></div>
									<div class="t-content">
										<h6 class="text-uppercase m-b-1">Total Visitors</h6>
										<h1 class="m-b-1"><?=$hits?></h1>
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-md-12">
								<div class="box bg-white post post-1">
									<div class="p-img img-cover" style="background-image: url(img/testimonials-banner.jpg);">
										
									</div>
									<div class="p-content">
										<h5><a class="text-black" href="#">Testimonial / Feedbacks</a></h5>
										<p class="m-b-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi</p>
									</div>
								</div>
							</div>
					</div>
				</div>
				<?php 
				}
				?>
				
				
				<!--Receptionist Dasboard Content -->
				<?php
				if($_SESSION['user']=="staff")
				{
				?>	
				<div class="content-area p-y-1">
					<div class="container-fluid">
						<div class="row row-md">
							<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
								<div class="box box-block bg-white tile tile-1 m-b-2">
									<div class="t-icon right"><span class="bg-danger"></span><i class="ti-shopping-cart-full"></i></div>
									<div class="t-content">
										<?php
										$row_count = mysql_query("select * from hms_appointment where patient_prescription = 'no' and status = 'Inprogress'") or die(mysql_error());
										$count = mysql_num_rows($row_count);
										?>
										<h6 class="text-uppercase m-b-1"><a href="appointment-request-staff.php">   Appointment Requests</a></h6>
										<h1 class="m-b-1"><?php echo $count;?></h1>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
								<div class="box box-block bg-white tile tile-1 m-b-2">
									<div class="t-icon right"><span class="bg-success"></span><i class="ti-bar-chart"></i></div>
									<div class="t-content">
									<?php
										$row_count = mysql_query("select * from hms_patients") or die(mysql_error());
										$count = mysql_num_rows($row_count);
									?>
										<h6 class="text-uppercase m-b-1"><a href="list-patients.php"> Total Patients</a></h6>
										<h1 class="m-b-1"><?php echo $count;?></h1>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
								<div class="box box-block bg-white tile tile-1 m-b-2">
									<div class="t-icon right"><span class="bg-primary"></span><i class="ti-package"></i></div>
									<div class="t-content">
										<?php
										$row_count = mysql_query("select * from hms_appointment where patient_prescription <> 'no' and billing = 'no'");
										$count = mysql_num_rows($row_count);
										?>
										<h6 class="text-uppercase m-b-1"><a href="billing.php">Pending Billings</a></h6>
										<h1 class="m-b-1"><?php echo $count;?></h1>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
								<div class="box box-block bg-white tile tile-1 m-b-2">
									<div class="t-icon right"><span class="bg-warning"></span><i class="ti-receipt"></i></div>
									<div class="t-content">
									<?php
										$row_count = mysql_query("select * from hms_appointment where billing <> 'no'");
										$count = mysql_num_rows($row_count);
									?>
										<h6 class="text-uppercase m-b-1"><a href="billing-history.php">Billing History</a></h6>
										<h1 class="m-b-1"><?php echo $count;?></h1>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php 
				}
				?>
				
				
				<!--Pharma Dashboard Content -->
				<?php
				if($_SESSION['user']=="pharma")
				{
				?>
				<div class="content-area p-y-1">
					<div class="container-fluid">
						<div class="row row-md">
							<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
								<div class="box box-block bg-white tile tile-1 m-b-2">
									<div class="t-icon right"><span class="bg-danger"></span><i class="ti-shopping-cart-full"></i></div>
									<div class="t-content">
										<h6 class="text-uppercase m-b-1">Daily Sales</h6>
										<h1 class="m-b-1">10</h1>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
								<div class="box box-block bg-white tile tile-1 m-b-2">
									<div class="t-icon right"><span class="bg-success"></span><i class="ti-bar-chart"></i></div>
									<div class="t-content">
										<h6 class="text-uppercase m-b-1">Stocks Left</h6>
										<h1 class="m-b-1">10</h1>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php 
				}
				?>
				
				
				
				<!--Patient Dashboard Content -->
				<?php
				if($_SESSION['user']=="patient")
				{
					$uid = $_SESSION['uid']
				?>
				<div class="content-area p-y-1">
					<div class="container-fluid">
						<div class="box box-block bg-white">
							<h5>HMS</h5>
							<dl class="row">
								<div class="header text-xs-center img-cover m-b-2" style="background-image: url(img/photos-1/4.jpg);">
							<div class="gradient gradient-warning"></div>
							<div class="h-content">
								<div class="row">
									<div class="col-md-8 offset-md-2">
										<div class="h-title">Better Health For A Better World</div>
										<div class="h-text" style="text-align:justify">M. S. Ramaiah Memorial Hospital is one of the best hospitals in India with many super specialty services. The vision is to create a better world through our values of care and compassion. MSRMH is amongst top five hospitals today in Bangalore transcending the best health care industry and serving the patients with utmost commitment. A team of professionals making the best of the facilities and technology around the massive infrastructure. The legacy and the brand promise remains the same. MSRMH offers a unique basket of services provides 31 super specialty services. The affordable hospital services aims to serve all with the best quality yet making it possible for them to avail the services.</div>
									</div>
								</div>
								<div class="h-down">
									<a class="text-white" href="#">
										<i class="ti-angle-double-down"></i>
									</a>
								</div>
							</div>
						</div>

							</dl>
						</div>

					</div>
				</div>
				<?php 
				}
				?>
				
				
				<!-- Footer -->
				<footer class="footer">
					<div class="container-fluid">
						<?=$hits?> People Viewed Us | MSRP &copy; 2017, All Rights Reserved.
					</div>
				</footer>
			</div>
			
		</div>

		<!-- Vendor JS -->
		<script type="text/javascript" src="vendor/jquery/jquery-1.12.3.min.js"></script>
		<script type="text/javascript" src="vendor/tether/js/tether.min.js"></script>
		<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="vendor/detectmobilebrowser/detectmobilebrowser.js"></script>
		<script type="text/javascript" src="vendor/jscrollpane/jquery.mousewheel.js"></script>
		<script type="text/javascript" src="vendor/jscrollpane/mwheelIntent.js"></script>
		<script type="text/javascript" src="vendor/jscrollpane/jquery.jscrollpane.min.js"></script>
		<script type="text/javascript" src="vendor/waves/waves.min.js"></script>
		<script type="text/javascript" src="vendor/chartist/chartist.min.js"></script>
		<script type="text/javascript" src="vendor/switchery/dist/switchery.min.js"></script>
		<script type="text/javascript" src="vendor/flot/jquery.flot.min.js"></script>
		<script type="text/javascript" src="vendor/flot/jquery.flot.resize.min.js"></script>
		<script type="text/javascript" src="vendor/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
		<script type="text/javascript" src="vendor/CurvedLines/curvedLines.js"></script>
		<script type="text/javascript" src="vendor/TinyColor/tinycolor.js"></script>
		<script type="text/javascript" src="vendor/sparkline/jquery.sparkline.min.js"></script>
		<script type="text/javascript" src="vendor/raphael/raphael.min.js"></script>
		<script type="text/javascript" src="vendor/morris/morris.min.js"></script>
		<script type="text/javascript" src="vendor/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
		<script type="text/javascript" src="vendor/jvectormap/jquery-jvectormap-world-mill.js"></script>

		<!-- Neptune JS -->
		<script type="text/javascript" src="js/app.js"></script>
		<script type="text/javascript" src="js/demo.js"></script>
		<script type="text/javascript" src="js/index.js"></script>
	</body>
</html>