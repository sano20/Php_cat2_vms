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
		<title>VSM Visitors Forms</title>

		<!-- Fontfaces CSS-->
		<link href="<?php echo base_url();?>assets/css/font-face.css" rel="stylesheet" media="all">
		<link href="<?php echo base_url();?>assets/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
		<link href="<?php echo base_url();?>assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
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
		<!-- HEADER MOBILE-->
		<?php
		$this->load->view('includes/sidebar');
		?>

		<div class="page-container">
			<?php
			$this->load->view('includes/header');
			?>
			<!-- HEADER DESKTOP-->

			<!-- MAIN CONTENT-->
			<div class="main-content">
				<div class="section__content section__content--p30">
					<div class="container-fluid">
						<div class="row">

							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<strong>Add</strong> New Visitors
									</div>
									<div class="card-body card-block">
										<form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
											<p style="font-size:16px; color:red" align="center"><?php echo @$message; ?> </p>
											<div class="row form-group">
												<div class="col col-md-3">
													<label for="text-input" class=" form-control-label">Full Name</label>
												</div>
												<div class="col-12 col-md-9">
													<input type="text" id="fullname" name="fullname" placeholder="Full Name" class="form-control" required="">

												</div>
											</div>
											<div class="row form-group">
												<div class="col col-md-3">
													<label for="email-input" class=" form-control-label">Email Input</label>
												</div>
												<div class="col-12 col-md-9">
													<input type="email" id="email" name="email" placeholder="Enter Email" class="form-control" required="">

												</div>
											</div>
											<div class="row form-group">
												<div class="col col-md-3">
													<label for="password-input" class=" form-control-label">Phone Number</label>
												</div>
												<div class="col-12 col-md-9">
													<input type="text" id="mobilenumber" name="mobilenumber" placeholder="Mobile Number" class="form-control" maxlength="10" required="">

												</div>
											</div>

											<div class="row form-group">
												<div class="col col-md-3">
													<label for="textarea-input" class=" form-control-label">Address</label>
												</div>
												<div class="col-12 col-md-9">
													<textarea name="address" id="address" rows="9" placeholder="Enter Visitor Address..." class="form-control" required=""></textarea>
												</div>
											</div>
											<div class="row form-group">
												<div class="col col-md-3">
													<label for="password-input" class=" form-control-label">Whom to Meet</label>
												</div>
												<div class="col-12 col-md-9">
													<input type="text" id="whomtomeet" name="whomtomeet" placeholder="Whom to Meet" class="form-control" required="">

												</div>
											</div>
											<div class="row form-group">
												<div class="col col-md-3">
													<label for="password-input" class=" form-control-label">Department</label>
												</div>
												<div class="col-12 col-md-9">
													<select class="form-control" name="department">
														<option></option>
														<option value="Administration">Administration</option>
														<option value="IT">IT</option>
														<option value="ET">ET</option>
														<option value="RE">RE</option>
														<option value="Incubation">Incubation</option>
														<option value="Restaurant">Restaurant</option>
													</select>
												</div>
											</div>
											<div class="row form-group">
												<div class="col col-md-3">
													<label for="password-input" class=" form-control-label">Reason To Meet</label>
												</div>
												<div class="col-12 col-md-9">
													<input type="text" id="reasontomeet" name="reasontomeet" placeholder="Reason To Meet" class="form-control" required="">

												</div>
											</div>

											<div class="card-footer">
												<p style="text-align: center;"><input class="au-btn au-btn--block au-btn--green m-b-20" type="submit" name="submit" value="Submit"></p>

											</div>
										</form>
									</div>

								</div>

							</div>

						</div>


						<?php
						$this->load->view('includes/footer');
						?>
					</div> </div>
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
	<!-- end document-->
