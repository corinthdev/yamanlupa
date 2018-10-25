        
        <link rel="shortcut icon" type="image/x-icon" href="img/icon.png" />
        <?php include 'frontend_links/links.php'; ?>
	  	<?php include 'navigation/user_header.php' ?>
		<!-- start banner Area -->
		<section class="banner-area relative about-banner" id="home">	
			<div class="overlay overlay-bg"></div>
			<div class="container">				
				<div class="row d-flex align-items-center justify-content-center">
					<div class="about-content col-lg-12">
						<h1 class="text-white">
							Lime Calculator		
						</h1>	
						<p class="text-white link-nav"><a href="/">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="lime_calculator.php"> Lime Calculator</a></p>
					</div>	
				</div>
			</div>
		</section>
			
		
			<!-- Start events-list Area -->
        <section class="events-list-area section-gap event-page-lists bg-light">
            <div class="container">
                <h1>Lime Data Table</h1><br>
                <hr>
                <div class="row">
                    <div class="col-lg-12">
                        <table id="lime_datatable" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Plants</th>
                                    <th>Acidity</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                      include 'admin/connection.php';
                                      $table = mysqli_query($conn, "SELECT * FROM lime_calculator");
                                      while($row = mysqli_fetch_array($table)) { 

                                        $id=$row['id'];
                                        $plants=$row['crops'];
                                        $acidity=$row['value'];

                                    ?>
                                    <tr id="<?php echo $row['id'];?>">
                                       <td><?php echo $row['id']?></td> 
                                       <td data-target = "plants"><?php echo $row['crops']?></td> 
                                       <td data-target = "acidity"><?php echo $row['value']?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>	
        </section>
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
        <!-- End events-list Area -->		
        <script type="text/javascript">
        	$(document).ready(function () {
			    $("#flash-msg").delay(2000).fadeOut("slow");
			});
        </script>	
        <script type="text/javascript">
            //for datatable
            $(document).ready(function() {
                $('#lime_datatable').DataTable();
            } );
        </script>		    			
		<?php include 'navigation/footer.php' ?>
			
