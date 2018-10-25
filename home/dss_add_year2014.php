<?php include ("../admin/authentication.php"); ?>
<?php
// Create Connection
include 'connection.php';

if (isset($_POST['save'])) {
		    
			$_SESSION['success'] = "Successfully Added!";
		    $dss_info = $_POST['dss_info'];
		    $dss_krit = $_POST['dss_krit'];
		    $dss_observe = $_POST['dss_observe'];
		    $dss_result = $_POST['dss_result'];
			//ensure that from fields are filled properly
			if (empty($dss_info)) {
				array_push($errors, "Information is required");
			}
			if (count($errors) == 0) {
			    $sql = "INSERT INTO dss_table (dss_info, dss_krit, dss_observe, dss_result)
			    VALUES ('$dss_info', '$dss_krit', '$dss_observe', '$dss_result')";
			    $query = mysqli_query($conn, $sql);
				header('location: dss_add_year2014.php'); 
				exit();
			}
			mysqli_close($conn);
		  }
?>
	<?php include 'frontend_links/links.php'; ?>
		<body>		
		  	<?php include '../navigation/header.php' ?>
			<!-- start banner Area -->
			<section class="banner-area relative about-banner" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								DSS Platform 
							</h1>	
							<p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="dss_platform.php"> DSS Platform</a></p>
						</div>	
					</div>
				</div>
			</section>
			
		
			<!-- End banner Area -->
			<section class="popular-courses-area section-gap courses-page">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">DSS PLATFORM 2014	</h1>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
		                	<?php if (isset($_SESSION['success'])) : ?>
			                  <div class="alert alert-success" id="flash-msg">
			                    <h4>
			                      <?php 
			                        echo $_SESSION['success']; 
			                        unset($_SESSION['success']);
			                      ?>
			                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
			                    </h4>
			                  </div>
			                <?php endif ?>
							<form method="POST" action="dss_add_year2014.php">
								<label>Impormasyon sa Kalusugan ng Lupa</label>
								<input type="text" class="form-control h5" name="dss_info" required><br>
								<label>Kritikal na Hangganan</label>
								<input type="text" class="form-control h5" name="dss_krit" required><br>
								<label>Obserbasyon</label>
								<input type="text" class="form-control h5" name="dss_observe" required><br>
								<label>Resulta</label>
								<input type="text" class="form-control h5" name="dss_result" required><br>
								<input type="submit" class="btn btn-primary btn-md" value="ADD DATA" name="save">
							</form>
						</div>
					</div>	
				</div>		
			</section><hr>						    			

			<?php include '../navigation/footer.php' ?>
			
