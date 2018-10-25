<link rel="shortcut icon" type="image/x-icon" href="frontend_links/backend_images/icon.png" />
<?php include ("../admin/authentication.php"); ?>
<?php
// Create Connection
include 'connection.php';
if (isset($_POST['submit'])) {
		    
			$_SESSION['success'] = "Successfully Added!";
		    $input_crops = $_POST['crops'];
		    $input_value = $_POST['value'];
			//ensure that from fields are filled properly
			if (empty($input_crops)) {
				array_push($errors, "Crops is required");
			}
			if (empty($input_value)) {
				array_push($errors, "Value is required");
			}
			if (count($errors) == 0) {
			    $sql = "INSERT INTO lime_calculator (crops, value)
			    VALUES ('$input_crops', '$input_value')";
			    $query = mysqli_query($conn, $sql);
				header('location: lime_calculator.php'); 
				exit();
			}
			mysqli_close($conn);
		  }
?>

        <?php include 'frontend_links/links.php'; ?>
		<?php include '../navigation/header.php' ?>
			<!-- start banner Area -->
			<section class="banner-area relative about-banner" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Lime Calculator		
							</h1>	
							<p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="lime_calculator.php"> Lime Calculator	</a></p>
						</div>	
					</div>
				</div>
			</section>
			
		
			<!-- Start events-list Area -->
        <section class="events-list-area section-gap event-page-lists bg-light">
            <div class="container">
                <h1>Lime Calculator	</h1><br>
                <hr>
                <div class="row">
                    <div class="col-lg-6">
                        <h5>Add Crops</h5><hr>
                    	<?php if (isset($_SESSION['success'])) : ?>
		                  <div class="alert alert-success">
		                    <h4>
		                      <?php 
		                        echo $_SESSION['success']; 
		                        unset($_SESSION['success']);
		                      ?>
		                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
		                    </h4>
		                  </div>
		                <?php endif ?>
                        <form action="lime_calculator.php" method="POST">
                            <table class="col-lg-12"><br>
                                <tr>
                                    <td><input type="text" class="form-control h5" placeholder="Input Crops" name="crops" required><br></td>
                                </tr>
                                <tr>
                                    <td><input type="text" class="form-control h5" placeholder="Input Acidity" name="value" required><br></td>
                                </tr>
                                <tr>
                                    <td><input type="submit" name="submit" class="form-control btn btn-warning btn-md" value="ADD CROPS"><br><br></td>
                                </tr>
                                <tr>
                                    <td><a href = "lime_datatable.php"  class="form-control btn btn-primary btn-md" role = "button">LIME DATA TABLE</a></td>
                                </tr>
                            </table>
                        </form>
                    </div>
                    <div class="col-lg-6">
                        <h5>Calculate your fertilizer rate here:</h5><hr>
                        <h4>What Crops?</h4><br>
                    	<select class="form-control" id="crops" >
							<option selected="true" disabled>Select Plants</option>
                    		<?php
                    			include 'connection.php'; 
                    			$res = mysqli_query($conn, "SELECT * FROM lime_calculator ORDER BY id ASC");
                    			while($row=mysqli_fetch_array($res))
                    			{
                    	
                    			echo '<option value ="'.$row['value'].'" required>'.$row['crops'].'</option>';
                            	}
                    		?>
							<input class="form-control" type="text" id="value_value" placeholder="Acidity" readonly>
                    	</select>
                        <select class="form-control" id="operators" readonly>
				            <option value="/">/</option>
				        </select>
                        <input class="form-control h5" type="text" id="current_ph" placeholder="Input Current PH">
                        <input type="button" class="btn btn-dark form-control" onClick="calc();" Value="Calculate" />
                        <input class="border form-control h5" id="result" readonly>
                        <input class="form-control h5" type="text" id="exchangeable_acid" placeholder="Input Exchangeable Acidity">
                        <input type="button" class="btn btn-success form-control" onClick="multiplyBy()" value="Total">
                        <span class="border form-control h5" id="result_one" readonly><p class="font-italic">this is the total acidity</p></span>
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
			function multiplyBy(object) 
			{ 
			        num1 = document.getElementById("result").value;
			        num2 = document.getElementById("exchangeable_acid").value;
                    var3 = document.getElementById("result_one").innerHTML = num1 * num2;
                    num3 = var3.toFixed(2);
                    alert("The total acidity is " + var3);
			}

			function calc()
            {
                var n1 = parseFloat(document.getElementById('value_value').value);
                var n2 = parseFloat(document.getElementById('current_ph').value);
                
                oper = document.getElementById('operators').value;
                
                if(oper === '/')
                {
                    total = document.getElementById('result').value = n1/n2;
                }
            }
        </script>	  			

		<?php include '../navigation/footer.php' ?>
			
