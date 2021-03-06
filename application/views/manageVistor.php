	<!DOCTYPE html>
	<html lang="en">

	<head>
		<!-- Required meta tags-->
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="au theme template">
		<meta name="author" content="Hau Nguyen">
		<meta name="keywords" content="au theme template">

		<!-- Title Page-->
		<title>VMS Visitors</title>

		<!-- Fontfaces CSS-->
		<link href="<?php echo base_url();?>assets/css/font-face.css" rel="stylesheet" media="all">
		<link href="<?php echo base_url();?>assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
		<link href="<?php echo base_url();?>assets/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
		<link href="<?php echo base_url();?>assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

		<!-- Bootstrap CSS-->
		<link href="<?php echo base_url();?>assets/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

		<!-- Vendor CSS-->
		<link href="<?php echo base_url();?>assets/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
		<link href="<?php echo base_url();?>assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
		<link href="<?php echo base_url();?>assets/vendor/wow/animate.css" rel="stylesheet" media="all">
		<link href="<?php echo base_url();?>assets/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
		<link href="<?php echo base_url();?>assets/vendor/slick/slick.css" rel="stylesheet" media="all">
		<link href="<?php echo base_url();?>assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
		<link href="<?php echo base_url();?>assets/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

		<!-- Main CSS-->
		<link href="<?php echo base_url();?>assets/css/theme.css" rel="stylesheet" media="all">

	</head>

	<body class="animsition">
	<div class="page-wrapper">
		<?php
		$this->load->view('includes/sidebar');
		?>



		<!-- PAGE CONTAINER-->
		<div class="page-container">
			<?php
			$this->load->view('includes/header');
			?>

			<!-- MAIN CONTENT-->
			<div class="main-content">
				<div class="section__content section__content--p30">
					<div class="container-fluid">
						<div class="row">
							<div class="col-lg-12">
								<div class="table-responsive table--no-card m-b-30">
									<table class="table table-borderless table-striped table-earning">
										<thead>
										<tr>
										<tr>
											<th>Status</th>

											<th>Full Name</th>

											<th>Contact Number</th>
											<th>Email</th>
											<th>Action</th>
										</tr>
										</tr>
										</thead>
										<?php
										$cnt=0;
										foreach($data as $row) {

											?>

											<tr>

												<td><?php
													if ($row->Status==1){
														echo "In";
													}else{
														echo "Out";
													}
													?></td>
												<td><?php  echo $row->FullName;?></td>
												<td><?php  echo $row->MobileNumber;?></td>
												<td><?php  echo $row->Email;?></td>
												<td><a href="<?php echo base_url();?>Admin/details?id=<?php echo $row->ID; ?>" title="View Full Details"><i class="fa fa-edit fa-1x"></i></a></td>
											</tr>
											<?php
										}?>
									</table>
								</div>
							</div>

						</div>



						<?php
						$this->load->view('includes/footer');
						?>
					</div>
				</div>
			</div>
		</div>

	</div>
	<!-- Jquery JS-->
	<script src="<?php echo base_url();?>assets/vendor/jquery-3.2.1.min.js"></script>
	<!-- Bootstrap JS-->
	<script src="<?php echo base_url();?>assets/vendor/bootstrap-4.1/popper.min.js"></script>
	<script src="<?php echo base_url();?>assets/vendor/bootstrap-4.1/bootstrap.min.js"></script>
	<!-- Vendor JS       -->
	<script src="<?php echo base_url();?>assets/vendor/slick/slick.min.js">
	</script>
	<script src="<?php echo base_url();?>assets/vendor/wow/wow.min.js"></script>
	<script src="<?php echo base_url();?>assets/vendor/animsition/animsition.min.js"></script>
	<script src="<?php echo base_url();?>assets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
	</script>
	<script src="<?php echo base_url();?>assets/vendor/counter-up/jquery.waypoints.min.js"></script>
	<script src="<?php echo base_url();?>assets/vendor/counter-up/jquery.counterup.min.js">
	</script>
	<script src="<?php echo base_url();?>assets/vendor/circle-progress/circle-progress.min.js"></script>
	<script src="<?php echo base_url();?>assets/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
	<script src="<?php echo base_url();?>assets/vendor/chartjs/Chart.bundle.min.js"></script>
	<script src="<?php echo base_url();?>assets/vendor/select2/select2.min.js">
	</script>

	<!-- Main JS-->
	<script src="<?php echo base_url();?>assets/js/main.js"></script>

	</body>

	</html>

