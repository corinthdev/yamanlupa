		<link rel="shortcut icon" type="image/x-icon" href="frontend_links/backend_images/icon.png" />
		<?php include 'frontend_links/links.php' ?>	
        <?php include '../navigation/header.php' ?>
		<?php include ("../admin/authentication.php"); ?>
        <!-- start banner Area -->
        <section class="banner-area relative about-banner" id="home">	
            <div class="overlay overlay-bg"></div>
            <div class="container">				
                <div class="row d-flex align-items-center justify-content-center">
                    <div class="about-content col-lg-12">
                        <h1 class="text-white">
                            YLP DATA				
                        </h1>	
                        <p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="ylp_data.php"> YLP Data</a></p>
                    </div>	
                </div>
            </div>
        </section>
        <!-- End banner Area -->

        <!-- Start events-list Area -->
        <section class="events-list-area section-gap event-page-lists bg-light">
            <h1><center>YLP DATA</center></h1><hr>
            	<table id="ylp_datatable" class="table table-striped table-bordered">
			        <thead>
			            <tr>
			                <th>Code</th>
			                <th>Farmer</th>
			                <th>Bayan</th>
			                <th>Lalawigan</th>
			                <th>Lalim ng Sampling</th>
			                <th>Taon</th>
			                <th>Crop</th>
			                <th>Address</th>
			                <th>Acidity</th>
			                <th>PH</th>
			                <th>EC</th>
			                <th>OC</th>
			                <th>Total-N</th>
			                <th>Avail-P</th>
			                <th>Avail-K</th>
			                <th>Avail-S</th>
			                <th>Avail-ZN</th>
			                <th>Avail-B</th>
			                <th>Avail-FE</th>
			                <th>Avail-CU</th>
			                <th>Avail-MN</th>
			                <th>Date</th>
			                <th><a href="ylp_add.php" role="button" class="btn btn-success btn-md"><i class="fa fa-plus"></i></a></th>
			                <th></th>
			                <th></th>
			                 <th></th>
			            </tr>
			        </thead>
			        <tbody>
			            <?php
		                      include 'connection.php';
		                      $table = mysqli_query($conn, "SELECT * FROM ylp_table");
		                      while($row = mysqli_fetch_array($table)) { 

		                        $id=$row['id'];
		                        $ylp_code=$row['ylp_code'];
		                        $ylp_farmer=$row['ylp_farmer'];
		                        $ylp_bayan=$row['ylp_bayan'];
		                        $ylp_lalawigan=$row['ylp_lalawigan'];
		                        $ylp_lalim=$row['ylp_lalim'];
		                        $taon=$row['taon'];
		                        $ylp_crop=$row['ylp_crop'];
		                        $ylp_details=$row['description'];
		                        $ylp_exchange=$row['ylp_exchange'];
		                        $ylp_ph=$row['ylp_ph'];
		                        $ylp_ec=$row['ylp_ec'];
		                        $ylp_oc=$row['ylp_oc'];
		                        $ylp_total_n=$row['ylp_total_n'];
		                        $ylp_avail_p=$row['ylp_avail_p'];
		                        $ylp_avail_k=$row['ylp_avail_k'];
		                        $ylp_avail_s=$row['ylp_avail_s'];
		                        $ylp_avail_zn=$row['ylp_avail_zn'];
		                        $ylp_avail_b=$row['ylp_avail_b'];
		                        $ylp_avail_fe=$row['ylp_avail_fe'];
		                        $ylp_avail_cu=$row['ylp_avail_cu'];
		                        $ylp_avail_mn=$row['ylp_avail_mn'];
		                        $date=$row['date'];

		                    ?>
		                    <tr id="<?php echo $row['id'];?>">
				               <td data-target="ylp_code"><?php echo $row['ylp_code']?></td> 
				               <td data-target="description"><?php echo $row['description']?></td> 
				               <td data-target="ylp_bayan"><?php echo $row['ylp_bayan']?></td> 
				               <td data-target="ylp_lalawigan"><?php echo $row['ylp_lalawigan']?></td> 
				               <td data-target="ylp_lalim"><?php echo $row['ylp_lalim']?></td> 
		                       <td data-target="taon"><?php echo $row['taon']?></td> 
		                       <td data-target="ylp_crop"><?php echo $row['ylp_crop']?></td> 
		                       <td data-target="ylp_farmer"><?php echo $row['ylp_farmer']?></td> 
				               <td data-target="ylp_exchange"><?php echo $row['ylp_exchange']?></td> 
		                       <td data-target="ylp_ph"><?php echo $row['ylp_ph']?></td> 
		                       <td data-target="ylp_ec"><?php echo $row['ylp_ec']?></td> 
		                       <td data-target="ylp_oc"><?php echo $row['ylp_oc']?></td> 
		                       <td data-target="ylp_total_n"><?php echo $row['ylp_total_n']?></td> 
		                       <td data-target="ylp_avail_p"><?php echo $row['ylp_avail_p']?></td> 
		                       <td data-target="ylp_avail_k"><?php echo $row['ylp_avail_k']?></td> 
		                       <td data-target="ylp_avail_s"><?php echo $row['ylp_avail_s']?></td> 
		                       <td data-target="ylp_avail_zn"><?php echo $row['ylp_avail_zn']?></td> 
		                       <td data-target="ylp_avail_b"><?php echo $row['ylp_avail_b']?></td> 
		                       <td data-target="ylp_avail_fe"><?php echo $row['ylp_avail_fe']?></td> 
		                       <td data-target="ylp_avail_cu"><?php echo $row['ylp_avail_cu']?></td> 
		                       <td data-target="ylp_avail_mn"><?php echo $row['ylp_avail_mn']?></td> 
		                       <td><?php echo $row['date']?></td> 
			                   <td>
		                        <a href="#" role='button' class='btn btn-warning' data-role = "update" data-id="<?php echo $row['id']; ?>">
		                          <i class="fa fa-edit"></i>
		                        </a>
			                   </td>
			                   <td>
		                        <button class = "btn btn-danger" onClick="deleteme(<?php echo $row['id']; ?>)"><i class="fa fa-trash"></i></button>
		                    	</td>
			                   <td>
		                        <a href="soil_cardd.php?id=<?php echo $row['id'];?>" role='button' class='btn btn-warning'>
		                          <i class="fa fa-forward"></i>
		                        </a>
		                    	</td>

		                    	<td>
		                        <a href="ylp_graph.php?name=<?php echo $row['ylp_farmer'];?>" role='button' class='btn btn-primary'>
		                          Graph
		                        </a>
		                    	</td>
		                    </tr>
		                <?php } ?>
			        </tbody>
			    </table><br><br>
			    
        	<div class="container">
        		<h1>YLP Details</h1><hr>
                <p class="text-black">
                    <em>Yamang Lupa Program making a soil test and stored data in database. All farmers that been have soil analysis was stored in here, it uses for lime calculations, fertilizer calculations, and even for storing data from mapping. </em>
                </p><br>
                <div class="row">
					<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					  <ol class="carousel-indicators">
					    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					  </ol>
					  <div class="carousel-inner">
					    <div class="carousel-item active">
					      <img class="d-block w-100" src="../img/yaman2.jpg" alt="First slide">
					      <div class="carousel-caption d-none d-md-block">
						    <h2 class="text-light">SOIL</h2>
						    <p class="text-justify">Soil is a mixture of organic matter, minerals, gases, liquids, and organisms that together support life. the upper layer of earth in which plants grow, a black or dark brown material typically consisting of a mixture of organic remains, clay, and rock particles.<br><b>Did you know?</b> Soil has a negative charge, while the contaminants tend to be positively charged.</p>
						  </div>
					    </div>
					    <div class="carousel-item">
					      <img class="d-block w-100" src="../img/yaman3.jpg" alt="Second slide">
					      <div class="carousel-caption d-none d-md-block">
						    <h2 class="text-light">FERTILIZER</h2>
						    <p class="text-justify">A fertilizer or fertiliser is any material of natural or synthetic origin that is applied to soils or to plant tissues to supply one or more plant nutrients essential to the growth of plants. Many sources of fertilizer exist, both natural and industrially produced.</p>
						  </div>
					    </div>
					    <div class="carousel-item">
					      <img class="d-block w-100" src="../img/yaman1.jpg" alt="Third slide">
					      <div class="carousel-caption d-none d-md-block">
						    <h2 class="text-light">PLANTS</h2>
						    <p class="text-justify">Plants are mainly multicellular, predominantly photosynthetic eukaryotes of the kingdom Plantae. They form the clade Viridiplantae that includes the flowering plants, conifers and other gymnosperms, ferns and their allies, hornworts, liverworts, mosses and the green algae, and excludes the red and brown algae.</p>
						  </div>
					    </div>
					  </div>
					  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
					    <span class="sr-only">Previous</span>
					  </a>
					  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					    <span class="carousel-control-next-icon" aria-hidden="true"></span>
					    <span class="sr-only">Next</span>
					  </a>
					</div>
				</div>
			</div>
        </section>
        <!-- End events-list Area -->
        <?php include '../navigation/footer.php' ?>
        <!-- Modal View Data-->
	    <div class="modal fade" id="myModal" role="dialog">
	      <div class="modal-dialog">
	        <!-- Modal Content -->
	        <div class="modal-content">
	          <div class="modal-header">
	            <h5 class="modal-title" id="exampleModalLabel">Update Products</h5>
	            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	              <span aria-hidden="true">&times;</span>
	            </button>
	          </div>
	          <div class="modal-body">
	                <div class="form-group">
	                  <label><strong>Code</strong></label>
	                    <input class="form-control" type="text" id="ylp_code">                  
	                </div>
	                <div class="form-group">
	                  <label><strong>Farmer</strong></label>
	                    <input class="form-control" type="text" id="description">                  
	                </div>
	                <div class="form-group">
	                  <label><strong>Bayan</strong></label>
	                    <input class="form-control" type="text" id="ylp_bayan">                  
	                </div>
	                <div class="form-group">
	                  <label><strong>Lalawigan</strong></label>
	                    <input class="form-control" type="text" id="ylp_lalawigan">                  
	                </div>
	                <div class="form-group">
	                  <label><strong>Lalim ng Sampling</strong></label>
	                    <input class="form-control" type="text" id="ylp_lalim">                  
	                </div>
	                <div class="form-group">
	                  <label><strong>Taon ng Sampling</strong></label>
	                    <input class="form-control" type="text" id="taon">                  
	                </div>
	                <div class="form-group">
	                  <label><strong>Crop</strong></label>
	                    <input class="form-control" type="text" id="ylp_crop">                  
	                </div>
	                <div class="form-group">
	                  <label><strong>Address Details</strong></label>
	                    <input class="form-control" type="text" id="ylp_farmer">                  
	                </div>
	                <div class="form-group">
	                  <label><strong>Exchangeable Acidity</strong></label>
	                    <input class="form-control" type="text" id="ylp_exchange">                  
	                </div>
	                <hr class="bg-info">
	                <div class="form-group">
	                  <label><strong>PH</strong></label>
	                    <input class="form-control" type="text" id="ylp_ph">                  
	                </div>
	                <hr class="bg-info">
	                <div class="form-group">
	                  <label><strong>EC</strong></label>
	                    <input class="form-control" type="text" id="ylp_ec">                  
	                </div>
	                  <div class="form-group">
	                  <label><strong>OC</strong></label>
	                    <input class="form-control" type="text" id="ylp_oc">                  
	                </div>
	                <div class="form-group">
	                  <label><strong>Total-N</strong></label>
	                    <input class="form-control" type="text" id="ylp_total_n">                  
	                </div>
	                <div class="form-group">
	                  <label><strong>Avail-P</strong></label>
	                    <input class="form-control" type="text" id="ylp_avail_p">                  
	                </div>
	                <div class="form-group">
	                  <label><strong>Avail-K</strong></label>
	                    <input class="form-control" type="text" id="ylp_avail_k">                  
	                </div>
	                <div class="form-group">
	                  <label><strong>Avail-S</strong></label>
	                    <input class="form-control" type="text" id="ylp_avail_s">                  
	                </div>
	                <div class="form-group">
	                  <label><strong>Avail-ZN</strong></label>
	                    <input class="form-control" type="text" id="ylp_avail_zn">                  
	                </div>
	                <div class="form-group">
	                  <label><strong>Avail-B</strong></label>
	                    <input class="form-control" type="text" id="ylp_avail_b" >                  
	                </div>
	                <div class="form-group">
	                  <label><strong>Avail-FE</strong></label>
	                    <input class="form-control" type="text" id="ylp_avail_fe" >                  
	                </div>
	                <div class="form-group">
	                  <label><strong>Avail-CU</strong></label>
	                    <input class="form-control" type="text" id="ylp_avail_cu" >                  
	                </div>
	                <div class="form-group">
	                  <label><strong>Avail-MN</strong></label>
	                    <input class="form-control" type="text" id="ylp_avail_mn" >                  
	                </div>
	                <input type="hidden" id="farmerId" class="form-control">
	                <div class="form-group">
	                  <a href = "#" id="save" class="btn btn-success form-control"><i class="fa fa-save">&nbsp<strong>Save</strong></i></a>
	                </div>
	          </div>
	          <div class="modal-footer">
	            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
	          </div>
	        </div>
	    </div>
	    	<script type="text/javascript" src="ylp_js/ylp_data.js"></script>
	        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	        <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
	        
	       