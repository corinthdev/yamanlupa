<?php include ("../admin/authentication.php"); ?>
<?php
// Create Connection
include 'connection.php';

if (isset($_POST['save'])) {
		    
			$_SESSION['success'] = "Successfully Added!";
		    $ylp_farmer = $_POST['ylp_farmer'];
		    $ylp_crop = $_POST['ylp_crop'];
		    $ylp_eastings = $_POST['ylp_eastings'];
		    $ylp_northings = $_POST['ylp_northings'];
		    $ylp_ph = $_POST['ylp_ph'];
		    $ylp_ec = $_POST['ylp_ec'];
		    $ylp_oc = $_POST['ylp_oc'];
		    $ylp_total_n = $_POST['ylp_total_n'];
		    $ylp_avail_p = $_POST['ylp_avail_p'];
		    $ylp_avail_k = $_POST['ylp_avail_k'];
		    $ylp_avail_s = $_POST['ylp_avail_s'];
		    $ylp_avail_zn = $_POST['ylp_avail_zn'];
		    $ylp_avail_b = $_POST['ylp_avail_b'];
		    $ylp_avail_fe = $_POST['ylp_avail_fe'];
		    $ylp_avail_cu = $_POST['ylp_avail_cu'];
		    $ylp_avail_mn = $_POST['ylp_avail_mn'];
			//ensure that from fields are filled properly
			if (empty($ylp_farmer)) {
				array_push($errors, "Farmer is required");
			}
			if (count($errors) == 0) {
			    $sql = "INSERT INTO ylp_table (ylp_farmer, ylp_crop, ylp_eastings, ylp_northings, ylp_ph, ylp_ec, ylp_oc, ylp_total_n, ylp_avail_p, ylp_avail_k, ylp_avail_s, ylp_avail_zn, ylp_avail_b, ylp_avail_fe, ylp_avail_cu, ylp_avail_mn)
			    VALUES ('$ylp_farmer', '$ylp_crop', '$ylp_eastings', '$ylp_northings', '$ylp_ph', '$ylp_ec', '$ylp_oc', '$ylp_total_n', '$ylp_avail_p', '$ylp_avail_k', '$ylp_avail_s', '$ylp_avail_zn', '$ylp_avail_b', '$ylp_avail_fe', '$ylp_avail_cu', '$ylp_avail_mn')";
			    $query = mysqli_query($conn, $sql);
				header('location: ylp_add.php'); 
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
								YLP Data		
							</h1>	
							<p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="ylp_data.php"> YLP Data</a></p>
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
								<h1 class="mb-10">YLP ADD DATA  </h1>
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
							<form method="POST" action="ylp_add.php">
								<label>Farmer</label>
								<input type="text" class="form-control h5" name="ylp_farmer" required><br>
								<label>Crop</label>
								<input type="text" class="form-control h5" name="ylp_crop" required><br>
								<label>Eastings</label>
								<input type="text" class="form-control h5" name="ylp_eastings" required><br>
								<label>Northings</label>
								<input type="text" class="form-control h5" name="ylp_northings" required><br>
								<label>pH</label>
								<input type="text" class="form-control h5" name="ylp_ph" required><br>
								<label>EC</label>
								<input type="text" class="form-control h5" name="ylp_ec" required><br>
								<label>OC</label>
								<input type="text" class="form-control h5" name="ylp_oc" required><br>
								<label>Total N</label>
								<input type="text" class="form-control h5" name="ylp_total_n" required><br>
								<label>Avail-P</label>
								<input type="text" class="form-control h5" name="ylp_avail_p" required><br>
								<label>Avail-K</label>
								<input type="text" class="form-control h5" name="ylp_avail_k" required><br>
								<label>Avail-S</label>
								<input type="text" class="form-control h5" name="ylp_avail_s" required><br>
								<label>Avail-Zn</label>
								<input type="text" class="form-control h5" name="ylp_avail_zn" required><br>
								<label>Avail-B</label>
								<input type="text" class="form-control h5" name="ylp_avail_b" required><br>
								<label>Avail-Fe</label>
								<input type="text" class="form-control h5" name="ylp_avail_fe" required><br>
								<label>Avail-Cu</label>
								<input type="text" class="form-control h5" name="ylp_avail_cu" required><br>
								<label>Avail-Mn</label>
								<input type="text" class="form-control h5" name="ylp_avail_mn" required><br>
								<input type="submit" class="btn btn-primary btn-md" value="Save" name="save">
							</form>
						</div>
					</div>	
				</div>		
			</section><hr>						    			

			<?php include '../navigation/footer.php' ?>
			
