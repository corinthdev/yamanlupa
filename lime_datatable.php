
<?php include 'frontend_links/links.php'; ?>
		<body>		
		  	<?php include 'navigation/header.php' ?>
			<?php include ("admin/authentication.php"); ?>
			<!-- start banner Area -->
			<section class="banner-area relative about-banner" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Lime Data Table		
							</h1>	
							<p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="lime_datatable.php"> Lime Data Table	</a></p>
						</div>	
					</div>
				</div>
			</section>
			
		
			<!-- Start events-list Area -->
        <section class="events-list-area section-gap event-page-lists bg-light">
            <div class="container">
                <h1>Lime Data Table	</h1><br>
                <a href="lime_calculator.php">Back to Lime Calculator</a>
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
				                       <td data-target = "acidity"><?php echo $row['acidity']?></td>
				                    </tr>
				                <?php } ?>
					        </tbody>
					    </table>
                    </div>
                </div>
            </div>	
        </section>
		<?php include 'navigation/footer.php' ?>
        <!-- Modal View Data-->
	    <div class="modal fade" id="myModal" role="dialog">
	    <br><br><br><br><br><br><br><br>
	      <div class="modal-dialog">
	        <!-- Modal Content -->
	        <div class="modal-content">
	          <div class="modal-header">
	            <h5 class="modal-title" id="exampleModalLabel">Update Plants</h5>
	            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	              <span aria-hidden="true">&times;</span>
	            </button>
	          </div>
	          <div class="modal-body">
	                <div class="form-group">
	                  <label><strong>Plants</strong></label>
	                    <input class="form-control" type="text" id="plants">                  
	                </div>
	                <div class="form-group">
	                  <label><strong>Acidity</strong></label>
	                    <input class="form-control" type="text" id="acidity">                  
	                </div>
	                <input type="hidden" id="plantsId" class="form-control">
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
        <script type="text/javascript">
        	//for datatable
	    	$(document).ready(function() {
				$('#lime_datatable').DataTable();
			} );
        </script>
        <script type="text/javascript">
        	//for update JS
       	$(document).ready(function(){
		  $(document).on('click','a[data-role=update]',function(){
		      var id = $(this).data('id');
		      var plants = $('#'+id).children('td[data-target=plants]').text();
		      var acidity = $('#'+id).children('td[data-target=acidity]').text();

		      $('#plants').val(plants);
		      $('#acidity').val(acidity);
     		  $('#plantsId').val(id);
		      $('#myModal').modal('toggle');
		  });

		  //creating event to get data from fields

		  $('#save').click(function(){
		      var id = $('#plantsId').val();
		      var plants = $('#plants').val();
		      var acidity = $('#acidity').val();
		      $.ajax({
		          url     : 'update_lime.php',
		          method  : 'post',
		          data    : {crops : plants, value : acidity, id : id},
		          success : function(data){
		                        alert("Successfully Edited!");
		                        location.href= "lime_datatable.php";
		                    }
		      });
		  });
		})

		//delete data
   		function deleteme(delid) {
   			if(confirm("Do you want to delete this data?")){
   				window.location.href='lime_delete.php?del_id=' +delid+'';
   				return true;
   			}
   		}
        </script>
			
