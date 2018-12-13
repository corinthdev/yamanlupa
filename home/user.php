			<link rel="shortcut icon" type="image/x-icon" href="frontend_links/backend_images/icon.png" />
			<?php include("frontend_links/links.php") ?>
			<?php include("../navigation/header.php") ?>
			<?php include ("../admin/authentication.php"); ?>
			  
			<!-- start banner Area -->
			<section class="banner-area relative about-banner" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Farmer Details				
							</h1>	
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	
			<br><br>

			<!-- Start course-mission Area -->
			<section class="course-mission-area pb-120">
				<div class="container">				
                    <div class="row">
                        <div class="col-md-12 accordion-left">
                        	<form role="form" method="post" action="soil_cardd3.php">
                                <div class="row border">
                                    <div class="col-md-12"><br>
                                        <h3 class="text-center">Farmer Details:</h3><br>
                                    </div>
                                </div>
                                <div class="row border">
                                    <div class="col-lg-4 border"><br>
                                        <?php

                                        include '../admin/connection.php';
                                        if(isset($_GET["id"]))
                                        {

                                        $query = mysqli_query($conn, "SELECT * FROM ylp_table WHERE id = '".$_GET["id"]."'");
                                        while($row = mysqli_fetch_array($query))
                                            {   
                                                $id=$row['id'] ;
                                                $description=$row['description'] ;
                                                $taon=$row['taon'] ;
                                                $ylp_exchange=$row['ylp_exchange'] ;
                                                $ylp_crop=$row['ylp_crop'] ;
                                                $ylp_ec=$row['ylp_ec'] ;
                                                $ylp_oc=$row['ylp_oc'] ;
                                                $ylp_avail_p=$row['ylp_avail_p'] ;
                                                $ylp_avail_k=$row['ylp_avail_k'] ;
                                                $ylp_avail_s=$row['ylp_avail_s'] ;
                                                $ylp_avail_zn=$row['ylp_avail_zn'] ;
                                                $ylp_avail_b=$row['ylp_avail_b'] ;
                                                $ylp_avail_cu=$row['ylp_avail_cu'] ;
                                                $ylp_avail_mn=$row['ylp_avail_mn'] ;
                                            }
                                        }
                                        ?>
                                        <div class="form-group">
                                            <label>Farmer</label><br>
                                            <input class = "form-control" readonly type="text" name="pangalan" id="pangalan" value="<?php echo $description;?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Taon ng Samplin</label><br>
                                            <input class = "form-control" readonly type="text" name="sampling" id="sampling" value="<?php echo $taon;?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label>PH ng Lupa</label><br>
                                            <input class = "form-control" readonly type="text" name="ph" placeholder="0.00" value="<?php echo $ylp_crop;?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Exchangeable Acidity</label><br>
                                            <input class = "form-control" readonly type="text" name="exchange" value="<?php echo $ylp_exchange; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Electricity Conductivity</label><br>
                                            <input class = "form-control" readonly type="text" name="electricity" id="conduc" value="<?php echo $ylp_ec;?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 border"><br>
                                        <div class="form-group">
                                            <label>Organic Carbon (%)</label><br>
                                            <input class = "form-control" readonly type="text" name="carbon" id="carbon" value="<?php echo $ylp_oc;?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Available Phosphorous (PPM)</label><br>
                                            <input class = "form-control" readonly type="text" name="phosphorous" id="phospo" value="<?php echo $ylp_avail_p;?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Available Potassium (PPM)</label><br>
                                            <input class = "form-control" readonly type="text" name="potassium" id="pota" value="<?php echo $ylp_avail_k;?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Available Sulfur (PPM)</label><br>
                                            <input class = "form-control" readonly type="text" name="sulfur" id="sulfur" value="<?php echo $ylp_avail_s;?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 border"><br>
                                        <div class="form-group">
                                            <label>Available Zinc (PPM)</label><br>
                                            <input class = "form-control" readonly type="text" name="zinc" id="zinc" value="<?php echo $ylp_avail_zn;?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Available Iron (PPM)</label><br>
                                            <input class = "form-control" readonly type="text" name="iron" id="iron" value="<?php echo $ylp_avail_b;?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Available Copper (PPM)</label><br>
                                            <input class = "form-control" readonly type="text" name="copper" id="copper" value="<?php echo $ylp_avail_cu;?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Available Manganese (PPM)</label><br>
                                            <input class = "form-control" readonly type="text" name="manganese" id="manga" value="<?php echo $ylp_avail_mn;?>">
                                        </div> 
                                    </div>
                                </div> 
                            </form>
                        </div>
                    </div>
				</div>	
			</section>
			<!-- End course-mission Area -->
						
				<br><br><br><br>
			<?php include("../navigation/footer.php") ?>