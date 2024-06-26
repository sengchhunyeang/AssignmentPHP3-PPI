<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>HOME</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
		<!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> -->
		<link rel="stylesheet" href="./css/index.css">
		<link rel="stylesheet" href="./css/medias.css">
		<script src="js/bootstrap.min.js"></script>
		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/jquery3.6.js"></script>

		<!-- *************
			************ CSS Files *************
		************* -->
		<link rel="stylesheet" href="assets/fonts/bootstrap/bootstrap-icons.css" />
		<link rel="stylesheet" href="assets/css/main.min.css" />

		<!-- *************
			************ Vendor Css Files *************
		************ -->

		<!-- Scrollbar CSS -->
		<link rel="stylesheet" href="assets/vendor/overlay-scroll/OverlayScrollbars.min.css" />
	</head>

	<body>
		<!-- Page wrapper start -->
		<div class="page-wrapper">

			<!-- Main container start -->
			<div class="main-container ">

				<!-- Sidebar wrapper start -->
					<?php 
					include "./include/navbar.php";
					?>
				<!-- Sidebar wrapper end -->

				<!-- App container starts -->
				<div class="app-container" style="background-image: linear-gradient(#ffffff, #f0ca91); width:100%; height:800px;">

					<!-- App header starts -->
					<?php 
						include "./include/sidebarIndex.php";
					?>
					<!-- App header ends -->

					<!-- App hero header starts -->
					<div >
						<div class="" id="app-page">
							<div class="app-hero-header p-3">
								<h1 class="p-3 text-center fw-light" style="font-family:Moul; font-size:45px"> សូមស្វាគមន៍ មកកាន់ប្រព័ន្ធគ្រប់គ្រង</h1>
								<h1 class="p-3 text-center fw-light" style="font-family:Moul; font-size:55px"> វិទ្យាស្ថាន​ ពហុបច្ចេកទេសព្រះកុសមៈ</h1>
							</div>						
							<img src="./images/school.png" class="p-3" width="100%" >
						</div >
					</div>
						
					</div>
				</div>
				<!-- App container ends -->

			</div>
			<!-- Main container end -->

		</div>
		<!-- Page wrapper end -->


		<!-- Overlay Scroll JS -->
		<script src="assets/vendor/overlay-scroll/jquery.overlayScrollbars.min.js"></script>
		<script src="assets/vendor/overlay-scroll/custom-scrollbar.js"></script>

		<!-- Apex Charts -->
		<script src="assets/vendor/apex/apexcharts.min.js"></script>
		<script src="assets/vendor/apex/custom/dash1/sales.js"></script>
		<script src="assets/vendor/apex/custom/dash1/sparkline.js"></script>
		<script src="assets/vendor/apex/custom/dash1/sparkline2.js"></script>

		<!-- Rating -->
		<script src="assets/vendor/rating/raty.js"></script>
		<script src="assets/vendor/rating/raty-custom.js"></script>

		<!-- Custom JS files -->
		<script src="assets/js/custom.js"></script>
	</body>

</html>