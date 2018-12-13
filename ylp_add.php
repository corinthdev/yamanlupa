<?php include 'frontend_links/links.php'; ?>
<?php include ("admin/authentication.php"); ?>


<?php
// Create Connection
include 'admin/connection.php';

if (isset($_POST['save'])) {
		    
			$_SESSION['success'] = "Successfully Added!";
		    $ylp_code = $_POST['ylp_code'];
		    $ylp_farmer = $_POST['ylp_farmer'];
		    $description = $_POST['description'];
		    $ylp_bayan = $_POST['ylp_bayan'];
		    $ylp_lalawigan = $_POST['ylp_lalawigan'];
		    $ylp_lalim = $_POST['ylp_lalim'];
		    $taon = $_POST['taon'];
		    $ylp_exchange = $_POST['ylp_exchange'];
		    $ylp_crop = $_POST['ylp_crop'];
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
		    $ylp_default = $_POST['ylp_default'];
			//ensure that from fields are filled properly
			if (empty($ylp_farmer)) {
				array_push($errors, "Farmer is required");
			}
			if (count($errors) == 0) {
			    $sql = "INSERT INTO ylp_table (ylp_code, ylp_farmer, ylp_bayan, ylp_lalawigan, ylp_lalim, taon, ylp_exchange, ylp_crop, ylp_ph, ylp_ec, ylp_oc, ylp_total_n, ylp_avail_p, ylp_avail_k, ylp_avail_s, ylp_avail_zn, ylp_avail_b, ylp_avail_fe, ylp_avail_cu, ylp_avail_mn, ylp_default, description)
			    VALUES ('$ylp_code', '$ylp_farmer', '$ylp_bayan', '$ylp_lalawigan', '$ylp_lalim', '$taon', '$ylp_exchange', '$ylp_crop', '$ylp_ph', '$ylp_ec', '$ylp_oc', '$ylp_total_n', '$ylp_avail_p', '$ylp_avail_k', '$ylp_avail_s', '$ylp_avail_zn', '$ylp_avail_b', '$ylp_avail_fe', '$ylp_avail_cu', '$ylp_avail_mn', '$ylp_default', '$description')";
			    $query = mysqli_query($conn, $sql);
				header('location: ylp_add.php'); 
				exit();
			}
			mysqli_close($conn);
		  }
?>
    <?php include 'navigation/user_header.php' ?>	
		<body>	
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
								<?php if( isset($_SESSION['user']) && !empty($_SESSION['user']) )
								{
								?>
								<input type="hidden" name="ylp_default" value="<?php echo $_SESSION['user']['fullname']; ?>">
								<?php } ?><br>
								<label>Code</label>
								<input type="text" class="form-control h5" name="ylp_code" required><br>
								<label>Farmer</label>
								<input type="text" class="form-control h5" name="description" required><br>
								<label>Barangay</label>
								<input type="text" class="form-control h5" name="ylp_farmer" required><br>
								<label>Bayan</label>
								<input type="text" class="form-control h5" name="ylp_bayan" required><br>
								<label>Lalawigan</label>
								<input type="text" class="form-control h5" name="ylp_lalawigan" required><br>
								<label>Lalim ng Sampling</label>
								<input type="text" class="form-control h5" name="ylp_lalim" required><br>
								<label>Taon</label>
								<input type="text" class="form-control h5" name="taon" required><br>
								<label>Exchangable Acidity</label>
								<input type="text" class="form-control h5" name="ylp_exchange" required><br>
								<label>Crop</label>
								<input type="text" class="form-control h5" name="ylp_crop" required><br>
								<label>pH</label><br>
								<input class="form-control" type="number" name="ylp_ph" placeholder="0.00" required name="price" min="0" max="14.99" value="0" step="0.01" title="Currency" pattern="^\d+(?:\.\d{1,2})?$" onblur="this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'red'">
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

			<?php include 'navigation/footer.php' ?>
			
