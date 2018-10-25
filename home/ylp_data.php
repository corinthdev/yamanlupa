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
            <div class="container">
                <h1>YLP Data</h1><br>
                <div class="row">
                    <div class="col-lg-12">
                    	<table id="ylp_datatable" class="table table-striped table-bordered">
					        <thead>
					            <tr>
					                <th>Farmer</th>
					                <th>Crop</th>
					                <th>Eastings</th>
					                <th>Northings</th>
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
					                <th><a href="ylp_add.php" role="button" class="btn btn-success btn-md"><i class="fa fa-plus"></i></a></th>
					                <th></th>
					            </tr>
					        </thead>
					        <tbody>
					            <?php
				                      include 'connection.php';
				                      $table = mysqli_query($conn, "SELECT * FROM ylp_table");
				                      while($row = mysqli_fetch_array($table)) { 

				                        $ylp_farmer=$row['ylp_farmer'];
				                        $ylp_crop=$row['ylp_crop'];
				                        $ylp_eastings=$row['ylp_eastings'];
				                        $ylp_northings=$row['ylp_northings'];
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

				                    ?>
				                    <tr id="<?php echo $row['id'];?>">
				                       <td data-target="ylp_farmer"><?php echo $row['ylp_farmer']?></td> 
				                       <td data-target="ylp_crop"><?php echo $row['ylp_crop']?></td> 
				                       <td data-target="ylp_eastings"><?php echo $row['ylp_eastings']?></td> 
				                       <td data-target="ylp_northings"><?php echo $row['ylp_northings']?></td> 
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
					                   <td>
				                        <a href="#" role='button' class='btn btn-warning' data-role = "update" data-id="<?php echo $row['id']; ?>">
				                          <i class="fa fa-edit"></i>
				                        </a>
					                   </td>
				                       <td><button class = "btn btn-danger" onClick="deleteme(<?php echo $row['id']; ?>)"><i class="fa fa-trash"></i></button></td>
				                    </tr>
				                <?php } ?>
					        </tbody>
					    </table>
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
	                  <label><strong>Farmer</strong></label>
	                    <input class="form-control" type="text" id="ylp_farmer">                  
	                </div>
	                <div class="form-group">
	                  <label><strong>Crop</strong></label>
	                    <input class="form-control" type="text" id="ylp_crop">                  
	                </div>
	                <hr class="bg-info">
	                <div class="form-group">
	                  <label><strong>Eastings</strong></label>
	                    <input class="form-control" type="text" id="ylp_eastings">                  
	                </div>
	                <div class="form-group">
	                  <label><strong>Northings</strong></label>
	                    <input class="form-control" type="text" id="ylp_northings">                  
	                </div>
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

	        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	        <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
	        <script src="ylp_js/ylp_js.js"></script>
	        
	       