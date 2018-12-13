<link rel="shortcut icon" type="image/x-icon" href="frontend_links/backend_images/icon.png" />


        <?php include 'frontend_links/links.php'; ?>
        <?php include '../admin/authentication.php'; ?>
		<?php include '../navigation/header.php' ?>
			<!-- start banner Area -->
			<section class="banner-area relative about-banner" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Calculator		
							</h1>	
							<p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="lime_calculator.php"> Calculator	</a></p>
						</div>	
					</div>
				</div>
			</section>
			
		
			<!-- Start events-list Area -->
       <section class="events-list-area section-gap event-page-lists bg-light">
            <div class="container">
                <h1>Lime Calculator  </h1><br>
                <hr>
                <div class="row">
                    <div class="col-lg-4 border"><br>
                        <h6>Calculate your fertilizer rate here:</h6><hr>
                       <hr>
                        <form action="lime_calculator2.php" method="POST">
                        <select class="form-control" id="crops" name="crops" >
                            <option selected="true" disabled>Select Plants</option>
                            <?php
                                include '../admin/connection.php'; 
                                $res = mysqli_query($conn, "SELECT * FROM lime_calculator ORDER BY id ASC");
                                while($row=mysqli_fetch_array($res))
                                {
                        
                                echo '<option value ="'.$row['crops'].'" required>'.$row['crops'].'</option>';
                                }
                            ?>

                            
                           
                        </select>
                                <hr>
                                <button type="submit" class="btn btn-success" name="submit">GET TARGET PH</button>
                        <form>
                        
                    </div>
                </div>
            </div>  
        </section>
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
        <script type="text/javascript">
            //for datatable
            $(document).ready(function() {
                $('#lime_datatable').DataTable();
            } );
        </script>
        <script type="text/javascript">
            $("#crops").change(function () {
                $("#value_value").val($(this).val());
            });
        </script>
        <script type="text/javascript">
            $("#crops1").change(function () {
                $("#value_value1").val($(this).val());
            });
        </script>		

		<?php include '../navigation/footer.php' ?>
			
