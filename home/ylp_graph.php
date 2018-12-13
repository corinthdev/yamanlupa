		<link rel="shortcut icon" type="image/x-icon" href="frontend_links/backend_images/icon.png" />
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
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
			                <th>Year</th>
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
			       
			              
			            </tr>
			        </thead>
			        <tbody>
			            <?php
		                      include 'connection.php';

		                      $getname = $_REQUEST['name'];

		                      $table = mysqli_query($conn, "SELECT * FROM ylp_table WHERE ylp_farmer='$getname'");
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
				               <td data-target="taon"><?php echo $row['taon']?></td>  
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
		         
			                   
		                    </tr>
		                <?php } ?>
			        </tbody>
			    </table><br><br>


			    


			 
			    
        	
        </section>
        <div class="row">
	        <div class="col-md-6">
		        <div width="500" height="500">
		        	<canvas id="chart1" width="800" height="450"></canvas>
		    	</div>
	    	</div>


	    	<div class="col-md-6">
		        <div width="500" height="500">
		        	<canvas id="chart2" width="800" height="450"></canvas>
		    	</div>
	    	</div>


	    	<div class="col-md-6">
		        <div width="500" height="500">
		        	<canvas id="chart3" width="800" height="450"></canvas>
		    	</div>
	    	</div>


	    	<div class="col-md-6">
		        <div width="500" height="500">
		        	<canvas id="chart4" width="800" height="450"></canvas>
		    	</div>
	    	</div>

	    	<div class="col-md-6">
		        <div width="500" height="500">
		        	<canvas id="chart5" width="800" height="450"></canvas>
		    	</div>
	    	</div>

	    	<div class="col-md-6">
		        <div width="500" height="500">
		        	<canvas id="chart6" width="800" height="450"></canvas>
		    	</div>
	    	</div>


	    	<div class="col-md-6">
		        <div width="500" height="500">
		        	<canvas id="chart7" width="800" height="450"></canvas>
		    	</div>
	    	</div>

	    	<div class="col-md-6">
		        <div width="500" height="500">
		        	<canvas id="chart8" width="800" height="450"></canvas>
		    	</div>
	    	</div>

	    	<div class="col-md-6">
		        <div width="500" height="500">
		        	<canvas id="chart9" width="800" height="450"></canvas>
		    	</div>
	    	</div>

	    	<div class="col-md-6">
		        <div width="500" height="500">
		        	<canvas id="chart10" width="800" height="450"></canvas>
		    	</div>
	    	</div>

	    	<div class="col-md-6">
		        <div width="500" height="500">
		        	<canvas id="chart11" width="800" height="450"></canvas>
		    	</div>
	    	</div>


	    	<div class="col-md-6">
		        <div width="500" height="500">
		        	<canvas id="chart12" width="800" height="450"></canvas>
		    	</div>
	    	</div>


	    	<div class="col-md-6">
		        <div width="500" height="500">
		        	<canvas id="chart13" width="800" height="450"></canvas>
		    	</div>
	    	</div>

    	
    	</div>


    	<!--ACIDITY-->

        <script>

			 new Chart(document.getElementById("chart1"), {
				    type: 'bar',
				    data: {
				      labels: ["Initial",<?php

				      				$farmername = $_REQUEST['name'];
									$servername = "localhost";
									$username = "root";
									$password = "";
									$dbname = "yamanlupa";

									// Create connection
									$conn = mysqli_connect($servername, $username, $password, $dbname);
									// Check connection
									if (!$conn) {
									    die("Connection failed: " . mysqli_connect_error());
									}

									$sql = "SELECT MIN(taon) AS mintaon FROM ylp_table WHERE ylp_farmer='$farmername'";
									$result = mysqli_query($conn, $sql);

									if (mysqli_num_rows($result) > 0) {
									    // output data of each row
									    while($row = mysqli_fetch_assoc($result)) {
									        
									        echo $row['mintaon'];
									        
									    }
									} else {
									    echo "0 results";
									}

									mysqli_close($conn);
									?>, 									<?php

									$farmername = $_REQUEST['name'];
									$servername = "localhost";
									$username = "root";
									$password = "";
									$dbname = "yamanlupa";

									// Create connection
									$conn = mysqli_connect($servername, $username, $password, $dbname);
									// Check connection
									if (!$conn) {
									    die("Connection failed: " . mysqli_connect_error());
									}

									$sql = "SELECT MAX(taon) AS maxtaon FROM ylp_table WHERE ylp_farmer='$farmername'";
									$result = mysqli_query($conn, $sql);

									if (mysqli_num_rows($result) > 0) {
									    // output data of each row
									    while($row = mysqli_fetch_assoc($result)) {
									        
									        echo $row['maxtaon'];
									        
									    }
									} else {
									    echo "0 results";
									}

									mysqli_close($conn);
									?>],
				      datasets: [
				        {
				          label: "Acidity",
				          backgroundColor: ["#3e78cd","#3e95cd", "#8e5ea2"],
				          data: [0,<?php

				          			$farmername = $_REQUEST['name'];
									$servername = "localhost";
									$username = "root";
									$password = "";
									$dbname = "yamanlupa";

									// Create connection
									$conn = mysqli_connect($servername, $username, $password, $dbname);
									// Check connection
									if (!$conn) {
									    die("Connection failed: " . mysqli_connect_error());
									}

									$sql = "SELECT MIN(ylp_exchange) AS minexchange FROM ylp_table WHERE ylp_farmer='$farmername'";
									$result = mysqli_query($conn, $sql);

									if (mysqli_num_rows($result) > 0) {
									    // output data of each row
									    while($row = mysqli_fetch_assoc($result)) {
									        
									        echo $row['minexchange'];
									        
									    }
									} else {
									    echo "0 results";
									}

									mysqli_close($conn);
									?>,
									<?php

									$farmername = $_REQUEST['name'];
									$servername = "localhost";
									$username = "root";
									$password = "";
									$dbname = "yamanlupa";

									// Create connection
									$conn = mysqli_connect($servername, $username, $password, $dbname);
									// Check connection
									if (!$conn) {
									    die("Connection failed: " . mysqli_connect_error());
									}

									$sql = "SELECT MAX(ylp_exchange) AS maxechange FROM ylp_table WHERE ylp_farmer='$farmername'";
									$result = mysqli_query($conn, $sql);

									if (mysqli_num_rows($result) > 0) {
									    // output data of each row
									    while($row = mysqli_fetch_assoc($result)) {
									        
									        echo $row['maxechange'];
									        
									    }
									} else {
									    echo "0 results";
									}

									mysqli_close($conn);
									?>]
				        }
				      ]
				    },
				    options: {
				      legend: { display: false },
				      title: {
				        display: true,
				        text: 'Acidity'
				      }
				    }
				});
			 </script>

			 <!--END SCRIPT-->


			     	<!--PH-->

        <script>

			 new Chart(document.getElementById("chart2"), {
				    type: 'bar',
				    data: {
				      labels: ["Initial",<?php

				      				$farmername = $_REQUEST['name'];
									$servername = "localhost";
									$username = "root";
									$password = "";
									$dbname = "yamanlupa";

									// Create connection
									$conn = mysqli_connect($servername, $username, $password, $dbname);
									// Check connection
									if (!$conn) {
									    die("Connection failed: " . mysqli_connect_error());
									}

									$sql = "SELECT MIN(taon) AS mintaon FROM ylp_table WHERE ylp_farmer='$farmername'";
									$result = mysqli_query($conn, $sql);

									if (mysqli_num_rows($result) > 0) {
									    // output data of each row
									    while($row = mysqli_fetch_assoc($result)) {
									        
									        echo $row['mintaon'];
									        
									    }
									} else {
									    echo "0 results";
									}

									mysqli_close($conn);
									?>, 									<?php

									$farmername = $_REQUEST['name'];
									$servername = "localhost";
									$username = "root";
									$password = "";
									$dbname = "yamanlupa";

									// Create connection
									$conn = mysqli_connect($servername, $username, $password, $dbname);
									// Check connection
									if (!$conn) {
									    die("Connection failed: " . mysqli_connect_error());
									}

									$sql = "SELECT MAX(taon) AS maxtaon FROM ylp_table WHERE ylp_farmer='$farmername'";
									$result = mysqli_query($conn, $sql);

									if (mysqli_num_rows($result) > 0) {
									    // output data of each row
									    while($row = mysqli_fetch_assoc($result)) {
									        
									        echo $row['maxtaon'];
									        
									    }
									} else {
									    echo "0 results";
									}

									mysqli_close($conn);
									?>],
				      datasets: [
				        {
				          label: "PH",
				          backgroundColor: ["#3e78cd","#3e95cd", "#8e5ea2"],
				          data: [0,<?php

				          			$farmername = $_REQUEST['name'];
									$servername = "localhost";
									$username = "root";
									$password = "";
									$dbname = "yamanlupa";

									// Create connection
									$conn = mysqli_connect($servername, $username, $password, $dbname);
									// Check connection
									if (!$conn) {
									    die("Connection failed: " . mysqli_connect_error());
									}

									$sql = "SELECT MIN(ylp_ph) AS minph FROM ylp_table WHERE ylp_farmer='$farmername'";
									$result = mysqli_query($conn, $sql);

									if (mysqli_num_rows($result) > 0) {
									    // output data of each row
									    while($row = mysqli_fetch_assoc($result)) {
									        
									        echo $row['minph'];
									        
									    }
									} else {
									    echo "0 results";
									}

									mysqli_close($conn);
									?>,
									<?php

									$farmername = $_REQUEST['name'];
									$servername = "localhost";
									$username = "root";
									$password = "";
									$dbname = "yamanlupa";

									// Create connection
									$conn = mysqli_connect($servername, $username, $password, $dbname);
									// Check connection
									if (!$conn) {
									    die("Connection failed: " . mysqli_connect_error());
									}

									$sql = "SELECT MAX(ylp_ph) AS maxph FROM ylp_table WHERE ylp_farmer='$farmername'";
									$result = mysqli_query($conn, $sql);

									if (mysqli_num_rows($result) > 0) {
									    // output data of each row
									    while($row = mysqli_fetch_assoc($result)) {
									        
									        echo $row['maxph'];
									        
									    }
									} else {
									    echo "0 results";
									}

									mysqli_close($conn);
									?>]
				        }
				      ]
				    },
				    options: {
				      legend: { display: false },
				      title: {
				        display: true,
				        text: 'PH'
				      }
				    }
				});
			 </script>

			 <!--END SCRIPT-->



			 	<!--EC-->

        <script>

			 new Chart(document.getElementById("chart3"), {
				    type: 'bar',
				    data: {
				      labels: ["Initial",<?php

				      				$farmername = $_REQUEST['name'];
									$servername = "localhost";
									$username = "root";
									$password = "";
									$dbname = "yamanlupa";

									// Create connection
									$conn = mysqli_connect($servername, $username, $password, $dbname);
									// Check connection
									if (!$conn) {
									    die("Connection failed: " . mysqli_connect_error());
									}

									$sql = "SELECT MIN(taon) AS mintaon FROM ylp_table WHERE ylp_farmer='$farmername'";
									$result = mysqli_query($conn, $sql);

									if (mysqli_num_rows($result) > 0) {
									    // output data of each row
									    while($row = mysqli_fetch_assoc($result)) {
									        
									        echo $row['mintaon'];
									        
									    }
									} else {
									    echo "0 results";
									}

									mysqli_close($conn);
									?>, 									<?php

									$farmername = $_REQUEST['name'];
									$servername = "localhost";
									$username = "root";
									$password = "";
									$dbname = "yamanlupa";

									// Create connection
									$conn = mysqli_connect($servername, $username, $password, $dbname);
									// Check connection
									if (!$conn) {
									    die("Connection failed: " . mysqli_connect_error());
									}

									$sql = "SELECT MAX(taon) AS maxtaon FROM ylp_table WHERE ylp_farmer='$farmername'";
									$result = mysqli_query($conn, $sql);

									if (mysqli_num_rows($result) > 0) {
									    // output data of each row
									    while($row = mysqli_fetch_assoc($result)) {
									        
									        echo $row['maxtaon'];
									        
									    }
									} else {
									    echo "0 results";
									}

									mysqli_close($conn);
									?>],
				      datasets: [
				        {
				          label: "EC",
				          backgroundColor: ["#3e78cd","#3e95cd", "#8e5ea2"],
				          data: [0,<?php

				          			$farmername = $_REQUEST['name'];
									$servername = "localhost";
									$username = "root";
									$password = "";
									$dbname = "yamanlupa";

									// Create connection
									$conn = mysqli_connect($servername, $username, $password, $dbname);
									// Check connection
									if (!$conn) {
									    die("Connection failed: " . mysqli_connect_error());
									}

									$sql = "SELECT MIN(ylp_ec) AS minec FROM ylp_table WHERE ylp_farmer='$farmername'";
									$result = mysqli_query($conn, $sql);

									if (mysqli_num_rows($result) > 0) {
									    // output data of each row
									    while($row = mysqli_fetch_assoc($result)) {
									        
									        echo $row['minec'];
									        
									    }
									} else {
									    echo "0 results";
									}

									mysqli_close($conn);
									?>,
									<?php

									$farmername = $_REQUEST['name'];
									$servername = "localhost";
									$username = "root";
									$password = "";
									$dbname = "yamanlupa";

									// Create connection
									$conn = mysqli_connect($servername, $username, $password, $dbname);
									// Check connection
									if (!$conn) {
									    die("Connection failed: " . mysqli_connect_error());
									}

									$sql = "SELECT MAX(ylp_ec) AS maxec FROM ylp_table WHERE ylp_farmer='$farmername'";
									$result = mysqli_query($conn, $sql);

									if (mysqli_num_rows($result) > 0) {
									    // output data of each row
									    while($row = mysqli_fetch_assoc($result)) {
									        
									        echo $row['maxec'];
									        
									    }
									} else {
									    echo "0 results";
									}

									mysqli_close($conn);
									?>]
				        }
				      ]
				    },
				    options: {
				      legend: { display: false },
				      title: {
				        display: true,
				        text: 'EC'
				      }
				    }
				});
			 </script>

			 <!--END SCRIPT-->

			 <!--OC-->

        <script>

			 new Chart(document.getElementById("chart4"), {
				    type: 'bar',
				    data: {
				      labels: ["Initial",<?php

				      				$farmername = $_REQUEST['name'];
									$servername = "localhost";
									$username = "root";
									$password = "";
									$dbname = "yamanlupa";

									// Create connection
									$conn = mysqli_connect($servername, $username, $password, $dbname);
									// Check connection
									if (!$conn) {
									    die("Connection failed: " . mysqli_connect_error());
									}

									$sql = "SELECT MIN(taon) AS mintaon FROM ylp_table WHERE ylp_farmer='$farmername'";
									$result = mysqli_query($conn, $sql);

									if (mysqli_num_rows($result) > 0) {
									    // output data of each row
									    while($row = mysqli_fetch_assoc($result)) {
									        
									        echo $row['mintaon'];
									        
									    }
									} else {
									    echo "0 results";
									}

									mysqli_close($conn);
									?>, 									<?php

									$farmername = $_REQUEST['name'];
									$servername = "localhost";
									$username = "root";
									$password = "";
									$dbname = "yamanlupa";

									// Create connection
									$conn = mysqli_connect($servername, $username, $password, $dbname);
									// Check connection
									if (!$conn) {
									    die("Connection failed: " . mysqli_connect_error());
									}

									$sql = "SELECT MAX(taon) AS maxtaon FROM ylp_table WHERE ylp_farmer='$farmername'";
									$result = mysqli_query($conn, $sql);

									if (mysqli_num_rows($result) > 0) {
									    // output data of each row
									    while($row = mysqli_fetch_assoc($result)) {
									        
									        echo $row['maxtaon'];
									        
									    }
									} else {
									    echo "0 results";
									}

									mysqli_close($conn);
									?>],
				      datasets: [
				        {
				          label: "OC",
				          backgroundColor: ["#3e78cd","#3e95cd", "#8e5ea2"],
				          data: [0,<?php

				          			$farmername = $_REQUEST['name'];
									$servername = "localhost";
									$username = "root";
									$password = "";
									$dbname = "yamanlupa";

									// Create connection
									$conn = mysqli_connect($servername, $username, $password, $dbname);
									// Check connection
									if (!$conn) {
									    die("Connection failed: " . mysqli_connect_error());
									}

									$sql = "SELECT MIN(ylp_oc) AS minoc FROM ylp_table WHERE ylp_farmer='$farmername'";
									$result = mysqli_query($conn, $sql);

									if (mysqli_num_rows($result) > 0) {
									    // output data of each row
									    while($row = mysqli_fetch_assoc($result)) {
									        
									        echo $row['minoc'];
									        
									    }
									} else {
									    echo "0 results";
									}

									mysqli_close($conn);
									?>,
									<?php

									$farmername = $_REQUEST['name'];
									$servername = "localhost";
									$username = "root";
									$password = "";
									$dbname = "yamanlupa";

									// Create connection
									$conn = mysqli_connect($servername, $username, $password, $dbname);
									// Check connection
									if (!$conn) {
									    die("Connection failed: " . mysqli_connect_error());
									}

									$sql = "SELECT MAX(ylp_oc) AS maxoc FROM ylp_table WHERE ylp_farmer='$farmername'";
									$result = mysqli_query($conn, $sql);

									if (mysqli_num_rows($result) > 0) {
									    // output data of each row
									    while($row = mysqli_fetch_assoc($result)) {
									        
									        echo $row['maxoc'];
									        
									    }
									} else {
									    echo "0 results";
									}

									mysqli_close($conn);
									?>]
				        }
				      ]
				    },
				    options: {
				      legend: { display: false },
				      title: {
				        display: true,
				        text: 'OC'
				      }
				    }
				});
			 </script>

			 <!--END SCRIPT-->

			 <!--TOTAL N-->

        <script>

			 new Chart(document.getElementById("chart5"), {
				    type: 'bar',
				    data: {
				      labels: ["Initial",<?php

				      				$farmername = $_REQUEST['name'];
									$servername = "localhost";
									$username = "root";
									$password = "";
									$dbname = "yamanlupa";

									// Create connection
									$conn = mysqli_connect($servername, $username, $password, $dbname);
									// Check connection
									if (!$conn) {
									    die("Connection failed: " . mysqli_connect_error());
									}

									$sql = "SELECT MIN(taon) AS mintaon FROM ylp_table WHERE ylp_farmer='$farmername'";
									$result = mysqli_query($conn, $sql);

									if (mysqli_num_rows($result) > 0) {
									    // output data of each row
									    while($row = mysqli_fetch_assoc($result)) {
									        
									        echo $row['mintaon'];
									        
									    }
									} else {
									    echo "0 results";
									}

									mysqli_close($conn);
									?>, 									<?php

									$farmername = $_REQUEST['name'];
									$servername = "localhost";
									$username = "root";
									$password = "";
									$dbname = "yamanlupa";

									// Create connection
									$conn = mysqli_connect($servername, $username, $password, $dbname);
									// Check connection
									if (!$conn) {
									    die("Connection failed: " . mysqli_connect_error());
									}

									$sql = "SELECT MAX(taon) AS maxtaon FROM ylp_table WHERE ylp_farmer='$farmername'";
									$result = mysqli_query($conn, $sql);

									if (mysqli_num_rows($result) > 0) {
									    // output data of each row
									    while($row = mysqli_fetch_assoc($result)) {
									        
									        echo $row['maxtaon'];
									        
									    }
									} else {
									    echo "0 results";
									}

									mysqli_close($conn);
									?>],
				      datasets: [
				        {
				          label: "Total-N",
				          backgroundColor: ["#3e78cd","#3e95cd", "#8e5ea2"],
				          data: [0,<?php

				          			$farmername = $_REQUEST['name'];
									$servername = "localhost";
									$username = "root";
									$password = "";
									$dbname = "yamanlupa";

									// Create connection
									$conn = mysqli_connect($servername, $username, $password, $dbname);
									// Check connection
									if (!$conn) {
									    die("Connection failed: " . mysqli_connect_error());
									}

									$sql = "SELECT MIN(ylp_total_n) AS mintotN FROM ylp_table WHERE ylp_farmer='$farmername'";
									$result = mysqli_query($conn, $sql);

									if (mysqli_num_rows($result) > 0) {
									    // output data of each row
									    while($row = mysqli_fetch_assoc($result)) {
									        
									        echo $row['mintotN'];
									        
									    }
									} else {
									    echo "0 results";
									}

									mysqli_close($conn);
									?>,
									<?php

									$farmername = $_REQUEST['name'];
									$servername = "localhost";
									$username = "root";
									$password = "";
									$dbname = "yamanlupa";

									// Create connection
									$conn = mysqli_connect($servername, $username, $password, $dbname);
									// Check connection
									if (!$conn) {
									    die("Connection failed: " . mysqli_connect_error());
									}

									$sql = "SELECT MAX(ylp_total_n) AS maxtotN FROM ylp_table WHERE ylp_farmer='$farmername'";
									$result = mysqli_query($conn, $sql);

									if (mysqli_num_rows($result) > 0) {
									    // output data of each row
									    while($row = mysqli_fetch_assoc($result)) {
									        
									        echo $row['maxtotN'];
									        
									    }
									} else {
									    echo "0 results";
									}

									mysqli_close($conn);
									?>]
				        }
				      ]
				    },
				    options: {
				      legend: { display: false },
				      title: {
				        display: true,
				        text: 'Total-N'
				      }
				    }
				});
			 </script>

			 <!--END SCRIPT-->

			 <!--Avail P-->

        <script>

			 new Chart(document.getElementById("chart6"), {
				    type: 'bar',
				    data: {
				      labels: ["Initial",<?php

				      				$farmername = $_REQUEST['name'];
									$servername = "localhost";
									$username = "root";
									$password = "";
									$dbname = "yamanlupa";

									// Create connection
									$conn = mysqli_connect($servername, $username, $password, $dbname);
									// Check connection
									if (!$conn) {
									    die("Connection failed: " . mysqli_connect_error());
									}

									$sql = "SELECT MIN(taon) AS mintaon FROM ylp_table WHERE ylp_farmer='$farmername'";
									$result = mysqli_query($conn, $sql);

									if (mysqli_num_rows($result) > 0) {
									    // output data of each row
									    while($row = mysqli_fetch_assoc($result)) {
									        
									        echo $row['mintaon'];
									        
									    }
									} else {
									    echo "0 results";
									}

									mysqli_close($conn);
									?>, 									<?php

									$farmername = $_REQUEST['name'];
									$servername = "localhost";
									$username = "root";
									$password = "";
									$dbname = "yamanlupa";

									// Create connection
									$conn = mysqli_connect($servername, $username, $password, $dbname);
									// Check connection
									if (!$conn) {
									    die("Connection failed: " . mysqli_connect_error());
									}

									$sql = "SELECT MAX(taon) AS maxtaon FROM ylp_table WHERE ylp_farmer='$farmername'";
									$result = mysqli_query($conn, $sql);

									if (mysqli_num_rows($result) > 0) {
									    // output data of each row
									    while($row = mysqli_fetch_assoc($result)) {
									        
									        echo $row['maxtaon'];
									        
									    }
									} else {
									    echo "0 results";
									}

									mysqli_close($conn);
									?>],
				      datasets: [
				        {
				          label: "Avail-P",
				          backgroundColor: ["#3e78cd","#3e95cd", "#8e5ea2"],
				          data: [0,<?php

				          			$farmername = $_REQUEST['name'];
									$servername = "localhost";
									$username = "root";
									$password = "";
									$dbname = "yamanlupa";

									// Create connection
									$conn = mysqli_connect($servername, $username, $password, $dbname);
									// Check connection
									if (!$conn) {
									    die("Connection failed: " . mysqli_connect_error());
									}

									$sql = "SELECT MIN(ylp_avail_p) AS minavailP FROM ylp_table WHERE ylp_farmer='$farmername'";
									$result = mysqli_query($conn, $sql);

									if (mysqli_num_rows($result) > 0) {
									    // output data of each row
									    while($row = mysqli_fetch_assoc($result)) {
									        
									        echo $row['minavailP'];
									        
									    }
									} else {
									    echo "0 results";
									}

									mysqli_close($conn);
									?>,
									<?php

									$farmername = $_REQUEST['name'];
									$servername = "localhost";
									$username = "root";
									$password = "";
									$dbname = "yamanlupa";

									// Create connection
									$conn = mysqli_connect($servername, $username, $password, $dbname);
									// Check connection
									if (!$conn) {
									    die("Connection failed: " . mysqli_connect_error());
									}

									$sql = "SELECT MAX(ylp_avail_p) AS maxavailP FROM ylp_table WHERE ylp_farmer='$farmername'";
									$result = mysqli_query($conn, $sql);

									if (mysqli_num_rows($result) > 0) {
									    // output data of each row
									    while($row = mysqli_fetch_assoc($result)) {
									        
									        echo $row['maxavailP'];
									        
									    }
									} else {
									    echo "0 results";
									}

									mysqli_close($conn);
									?>]
				        }
				      ]
				    },
				    options: {
				      legend: { display: false },
				      title: {
				        display: true,
				        text: 'Avail-P'
				      }
				    }
				});
			 </script>

			 <!--END SCRIPT-->

			 <!--Avail K-->

        <script>

			 new Chart(document.getElementById("chart7"), {
				    type: 'bar',
				    data: {
				      labels: ["Initial",<?php

				      				$farmername = $_REQUEST['name'];
									$servername = "localhost";
									$username = "root";
									$password = "";
									$dbname = "yamanlupa";

									// Create connection
									$conn = mysqli_connect($servername, $username, $password, $dbname);
									// Check connection
									if (!$conn) {
									    die("Connection failed: " . mysqli_connect_error());
									}

									$sql = "SELECT MIN(taon) AS mintaon FROM ylp_table WHERE ylp_farmer='$farmername'";
									$result = mysqli_query($conn, $sql);

									if (mysqli_num_rows($result) > 0) {
									    // output data of each row
									    while($row = mysqli_fetch_assoc($result)) {
									        
									        echo $row['mintaon'];
									        
									    }
									} else {
									    echo "0 results";
									}

									mysqli_close($conn);
									?>, 									<?php

									$farmername = $_REQUEST['name'];
									$servername = "localhost";
									$username = "root";
									$password = "";
									$dbname = "yamanlupa";

									// Create connection
									$conn = mysqli_connect($servername, $username, $password, $dbname);
									// Check connection
									if (!$conn) {
									    die("Connection failed: " . mysqli_connect_error());
									}

									$sql = "SELECT MAX(taon) AS maxtaon FROM ylp_table WHERE ylp_farmer='$farmername'";
									$result = mysqli_query($conn, $sql);

									if (mysqli_num_rows($result) > 0) {
									    // output data of each row
									    while($row = mysqli_fetch_assoc($result)) {
									        
									        echo $row['maxtaon'];
									        
									    }
									} else {
									    echo "0 results";
									}

									mysqli_close($conn);
									?>],
				      datasets: [
				        {
				          label: "Avail-K",
				          backgroundColor: ["#3e78cd","#3e95cd", "#8e5ea2"],
				          data: [0,<?php

				          			$farmername = $_REQUEST['name'];
									$servername = "localhost";
									$username = "root";
									$password = "";
									$dbname = "yamanlupa";

									// Create connection
									$conn = mysqli_connect($servername, $username, $password, $dbname);
									// Check connection
									if (!$conn) {
									    die("Connection failed: " . mysqli_connect_error());
									}

									$sql = "SELECT MIN(ylp_avail_k) AS minavailK FROM ylp_table WHERE ylp_farmer='$farmername'";
									$result = mysqli_query($conn, $sql);

									if (mysqli_num_rows($result) > 0) {
									    // output data of each row
									    while($row = mysqli_fetch_assoc($result)) {
									        
									        echo $row['minavailK'];
									        
									    }
									} else {
									    echo "0 results";
									}

									mysqli_close($conn);
									?>,
									<?php

									$farmername = $_REQUEST['name'];
									$servername = "localhost";
									$username = "root";
									$password = "";
									$dbname = "yamanlupa";

									// Create connection
									$conn = mysqli_connect($servername, $username, $password, $dbname);
									// Check connection
									if (!$conn) {
									    die("Connection failed: " . mysqli_connect_error());
									}

									$sql = "SELECT MAX(ylp_avail_k) AS maxavailK FROM ylp_table WHERE ylp_farmer='$farmername'";
									$result = mysqli_query($conn, $sql);

									if (mysqli_num_rows($result) > 0) {
									    // output data of each row
									    while($row = mysqli_fetch_assoc($result)) {
									        
									        echo $row['maxavailK'];
									        
									    }
									} else {
									    echo "0 results";
									}

									mysqli_close($conn);
									?>]
				        }
				      ]
				    },
				    options: {
				      legend: { display: false },
				      title: {
				        display: true,
				        text: 'Avail-K'
				      }
				    }
				});
			 </script>

			 <!--END SCRIPT-->

			 <!--Avail S-->

        <script>

			 new Chart(document.getElementById("chart8"), {
				    type: 'bar',
				    data: {
				      labels: ["Initial",<?php

				      				$farmername = $_REQUEST['name'];
									$servername = "localhost";
									$username = "root";
									$password = "";
									$dbname = "yamanlupa";

									// Create connection
									$conn = mysqli_connect($servername, $username, $password, $dbname);
									// Check connection
									if (!$conn) {
									    die("Connection failed: " . mysqli_connect_error());
									}

									$sql = "SELECT MIN(taon) AS mintaon FROM ylp_table WHERE ylp_farmer='$farmername'";
									$result = mysqli_query($conn, $sql);

									if (mysqli_num_rows($result) > 0) {
									    // output data of each row
									    while($row = mysqli_fetch_assoc($result)) {
									        
									        echo $row['mintaon'];
									        
									    }
									} else {
									    echo "0 results";
									}

									mysqli_close($conn);
									?>, 									<?php

									$farmername = $_REQUEST['name'];
									$servername = "localhost";
									$username = "root";
									$password = "";
									$dbname = "yamanlupa";

									// Create connection
									$conn = mysqli_connect($servername, $username, $password, $dbname);
									// Check connection
									if (!$conn) {
									    die("Connection failed: " . mysqli_connect_error());
									}

									$sql = "SELECT MAX(taon) AS maxtaon FROM ylp_table WHERE ylp_farmer='$farmername'";
									$result = mysqli_query($conn, $sql);

									if (mysqli_num_rows($result) > 0) {
									    // output data of each row
									    while($row = mysqli_fetch_assoc($result)) {
									        
									        echo $row['maxtaon'];
									        
									    }
									} else {
									    echo "0 results";
									}

									mysqli_close($conn);
									?>],
				      datasets: [
				        {
				          label: "Avail-S",
				          backgroundColor: ["#3e78cd","#3e95cd", "#8e5ea2"],
				          data: [0,<?php

				          			$farmername = $_REQUEST['name'];
									$servername = "localhost";
									$username = "root";
									$password = "";
									$dbname = "yamanlupa";

									// Create connection
									$conn = mysqli_connect($servername, $username, $password, $dbname);
									// Check connection
									if (!$conn) {
									    die("Connection failed: " . mysqli_connect_error());
									}

									$sql = "SELECT MIN(ylp_avail_s) AS minavailS FROM ylp_table WHERE ylp_farmer='$farmername'";
									$result = mysqli_query($conn, $sql);

									if (mysqli_num_rows($result) > 0) {
									    // output data of each row
									    while($row = mysqli_fetch_assoc($result)) {
									        
									        echo $row['minavailS'];
									        
									    }
									} else {
									    echo "0 results";
									}

									mysqli_close($conn);
									?>,
									<?php

									$farmername = $_REQUEST['name'];
									$servername = "localhost";
									$username = "root";
									$password = "";
									$dbname = "yamanlupa";

									// Create connection
									$conn = mysqli_connect($servername, $username, $password, $dbname);
									// Check connection
									if (!$conn) {
									    die("Connection failed: " . mysqli_connect_error());
									}

									$sql = "SELECT MAX(ylp_avail_s) AS maxavailS FROM ylp_table WHERE ylp_farmer='$farmername'";
									$result = mysqli_query($conn, $sql);

									if (mysqli_num_rows($result) > 0) {
									    // output data of each row
									    while($row = mysqli_fetch_assoc($result)) {
									        
									        echo $row['maxavailS'];
									        
									    }
									} else {
									    echo "0 results";
									}

									mysqli_close($conn);
									?>]
				        }
				      ]
				    },
				    options: {
				      legend: { display: false },
				      title: {
				        display: true,
				        text: 'Avail-S'
				      }
				    }
				});
			 </script>

			 <!--END SCRIPT-->

			 <!--Avail ZN-->

			 <script>

			 new Chart(document.getElementById("chart9"), {
				    type: 'bar',
				    data: {
				      labels: ["Initial",<?php

				      				$farmername = $_REQUEST['name'];
									$servername = "localhost";
									$username = "root";
									$password = "";
									$dbname = "yamanlupa";

									// Create connection
									$conn = mysqli_connect($servername, $username, $password, $dbname);
									// Check connection
									if (!$conn) {
									    die("Connection failed: " . mysqli_connect_error());
									}

									$sql = "SELECT MIN(taon) AS mintaon FROM ylp_table WHERE ylp_farmer='$farmername'";
									$result = mysqli_query($conn, $sql);

									if (mysqli_num_rows($result) > 0) {
									    // output data of each row
									    while($row = mysqli_fetch_assoc($result)) {
									        
									        echo $row['mintaon'];
									        
									    }
									} else {
									    echo "0 results";
									}

									mysqli_close($conn);
									?>, 									<?php

									$farmername = $_REQUEST['name'];
									$servername = "localhost";
									$username = "root";
									$password = "";
									$dbname = "yamanlupa";

									// Create connection
									$conn = mysqli_connect($servername, $username, $password, $dbname);
									// Check connection
									if (!$conn) {
									    die("Connection failed: " . mysqli_connect_error());
									}

									$sql = "SELECT MAX(taon) AS maxtaon FROM ylp_table WHERE ylp_farmer='$farmername'";
									$result = mysqli_query($conn, $sql);

									if (mysqli_num_rows($result) > 0) {
									    // output data of each row
									    while($row = mysqli_fetch_assoc($result)) {
									        
									        echo $row['maxtaon'];
									        
									    }
									} else {
									    echo "0 results";
									}

									mysqli_close($conn);
									?>],
				      datasets: [
				        {
				          label: "Avail-ZN",
				          backgroundColor: ["#3e78cd","#3e95cd", "#8e5ea2"],
				          data: [0,<?php

				          			$farmername = $_REQUEST['name'];
									$servername = "localhost";
									$username = "root";
									$password = "";
									$dbname = "yamanlupa";

									// Create connection
									$conn = mysqli_connect($servername, $username, $password, $dbname);
									// Check connection
									if (!$conn) {
									    die("Connection failed: " . mysqli_connect_error());
									}

									$sql = "SELECT MIN(ylp_avail_zn) AS minavailZN FROM ylp_table WHERE ylp_farmer='$farmername'";
									$result = mysqli_query($conn, $sql);

									if (mysqli_num_rows($result) > 0) {
									    // output data of each row
									    while($row = mysqli_fetch_assoc($result)) {
									        
									        echo $row['minavailZN'];
									        
									    }
									} else {
									    echo "0 results";
									}

									mysqli_close($conn);
									?>,
									<?php

									$farmername = $_REQUEST['name'];
									$servername = "localhost";
									$username = "root";
									$password = "";
									$dbname = "yamanlupa";

									// Create connection
									$conn = mysqli_connect($servername, $username, $password, $dbname);
									// Check connection
									if (!$conn) {
									    die("Connection failed: " . mysqli_connect_error());
									}

									$sql = "SELECT MAX(ylp_avail_zn) AS maxavailZN FROM ylp_table WHERE ylp_farmer='$farmername'";
									$result = mysqli_query($conn, $sql);

									if (mysqli_num_rows($result) > 0) {
									    // output data of each row
									    while($row = mysqli_fetch_assoc($result)) {
									        
									        echo $row['maxavailZN'];
									        
									    }
									} else {
									    echo "0 results";
									}

									mysqli_close($conn);
									?>]
				        }
				      ]
				    },
				    options: {
				      legend: { display: false },
				      title: {
				        display: true,
				        text: 'Avail-ZN'
				      }
				    }
				});
			 </script>

			 <!--END SCRIPT-->

			 <!--Avail B-->

			 <script>

			 new Chart(document.getElementById("chart10"), {
				    type: 'bar',
				    data: {
				      labels: ["Initial",<?php

				      				$farmername = $_REQUEST['name'];
									$servername = "localhost";
									$username = "root";
									$password = "";
									$dbname = "yamanlupa";

									// Create connection
									$conn = mysqli_connect($servername, $username, $password, $dbname);
									// Check connection
									if (!$conn) {
									    die("Connection failed: " . mysqli_connect_error());
									}

									$sql = "SELECT MIN(taon) AS mintaon FROM ylp_table WHERE ylp_farmer='$farmername'";
									$result = mysqli_query($conn, $sql);

									if (mysqli_num_rows($result) > 0) {
									    // output data of each row
									    while($row = mysqli_fetch_assoc($result)) {
									        
									        echo $row['mintaon'];
									        
									    }
									} else {
									    echo "0 results";
									}

									mysqli_close($conn);
									?>, 									<?php

									$farmername = $_REQUEST['name'];
									$servername = "localhost";
									$username = "root";
									$password = "";
									$dbname = "yamanlupa";

									// Create connection
									$conn = mysqli_connect($servername, $username, $password, $dbname);
									// Check connection
									if (!$conn) {
									    die("Connection failed: " . mysqli_connect_error());
									}

									$sql = "SELECT MAX(taon) AS maxtaon FROM ylp_table WHERE ylp_farmer='$farmername'";
									$result = mysqli_query($conn, $sql);

									if (mysqli_num_rows($result) > 0) {
									    // output data of each row
									    while($row = mysqli_fetch_assoc($result)) {
									        
									        echo $row['maxtaon'];
									        
									    }
									} else {
									    echo "0 results";
									}

									mysqli_close($conn);
									?>],
				      datasets: [
				        {
				          label: "Avail-B",
				          backgroundColor: ["#3e78cd","#3e95cd", "#8e5ea2"],
				          data: [0,<?php

				          			$farmername = $_REQUEST['name'];
									$servername = "localhost";
									$username = "root";
									$password = "";
									$dbname = "yamanlupa";

									// Create connection
									$conn = mysqli_connect($servername, $username, $password, $dbname);
									// Check connection
									if (!$conn) {
									    die("Connection failed: " . mysqli_connect_error());
									}

									$sql = "SELECT MIN(ylp_avail_b) AS minavailB FROM ylp_table WHERE ylp_farmer='$farmername'";
									$result = mysqli_query($conn, $sql);

									if (mysqli_num_rows($result) > 0) {
									    // output data of each row
									    while($row = mysqli_fetch_assoc($result)) {
									        
									        echo $row['minavailB'];
									        
									    }
									} else {
									    echo "0 results";
									}

									mysqli_close($conn);
									?>,
									<?php

									$farmername = $_REQUEST['name'];
									$servername = "localhost";
									$username = "root";
									$password = "";
									$dbname = "yamanlupa";

									// Create connection
									$conn = mysqli_connect($servername, $username, $password, $dbname);
									// Check connection
									if (!$conn) {
									    die("Connection failed: " . mysqli_connect_error());
									}

									$sql = "SELECT MAX(ylp_avail_b) AS maxavailB FROM ylp_table WHERE ylp_farmer='$farmername'";
									$result = mysqli_query($conn, $sql);

									if (mysqli_num_rows($result) > 0) {
									    // output data of each row
									    while($row = mysqli_fetch_assoc($result)) {
									        
									        echo $row['maxavailB'];
									        
									    }
									} else {
									    echo "0 results";
									}

									mysqli_close($conn);
									?>]
				        }
				      ]
				    },
				    options: {
				      legend: { display: false },
				      title: {
				        display: true,
				        text: 'Avail-B'
				      }
				    }
				});
			 </script>

			 <!--END SCRIPT-->

			 <!--Avail FE-->

			 <script>

			 new Chart(document.getElementById("chart11"), {
				    type: 'bar',
				    data: {
				      labels: ["Initial",<?php

				      				$farmername = $_REQUEST['name'];
									$servername = "localhost";
									$username = "root";
									$password = "";
									$dbname = "yamanlupa";

									// Create connection
									$conn = mysqli_connect($servername, $username, $password, $dbname);
									// Check connection
									if (!$conn) {
									    die("Connection failed: " . mysqli_connect_error());
									}

									$sql = "SELECT MIN(taon) AS mintaon FROM ylp_table WHERE ylp_farmer='$farmername'";
									$result = mysqli_query($conn, $sql);

									if (mysqli_num_rows($result) > 0) {
									    // output data of each row
									    while($row = mysqli_fetch_assoc($result)) {
									        
									        echo $row['mintaon'];
									        
									    }
									} else {
									    echo "0 results";
									}

									mysqli_close($conn);
									?>, 									<?php

									$farmername = $_REQUEST['name'];
									$servername = "localhost";
									$username = "root";
									$password = "";
									$dbname = "yamanlupa";

									// Create connection
									$conn = mysqli_connect($servername, $username, $password, $dbname);
									// Check connection
									if (!$conn) {
									    die("Connection failed: " . mysqli_connect_error());
									}

									$sql = "SELECT MAX(taon) AS maxtaon FROM ylp_table WHERE ylp_farmer='$farmername'";
									$result = mysqli_query($conn, $sql);

									if (mysqli_num_rows($result) > 0) {
									    // output data of each row
									    while($row = mysqli_fetch_assoc($result)) {
									        
									        echo $row['maxtaon'];
									        
									    }
									} else {
									    echo "0 results";
									}

									mysqli_close($conn);
									?>],
				      datasets: [
				        {
				          label: "Avail-FE",
				          backgroundColor: ["#3e78cd","#3e95cd", "#8e5ea2"],
				          data: [0,<?php

				          			$farmername = $_REQUEST['name'];
									$servername = "localhost";
									$username = "root";
									$password = "";
									$dbname = "yamanlupa";

									// Create connection
									$conn = mysqli_connect($servername, $username, $password, $dbname);
									// Check connection
									if (!$conn) {
									    die("Connection failed: " . mysqli_connect_error());
									}

									$sql = "SELECT MIN(ylp_avail_fe) AS minavailFE FROM ylp_table WHERE ylp_farmer='$farmername'";
									$result = mysqli_query($conn, $sql);

									if (mysqli_num_rows($result) > 0) {
									    // output data of each row
									    while($row = mysqli_fetch_assoc($result)) {
									        
									        echo $row['minavailFE'];
									        
									    }
									} else {
									    echo "0 results";
									}

									mysqli_close($conn);
									?>,
									<?php

									$farmername = $_REQUEST['name'];
									$servername = "localhost";
									$username = "root";
									$password = "";
									$dbname = "yamanlupa";

									// Create connection
									$conn = mysqli_connect($servername, $username, $password, $dbname);
									// Check connection
									if (!$conn) {
									    die("Connection failed: " . mysqli_connect_error());
									}

									$sql = "SELECT MAX(ylp_avail_fe) AS maxavailFE FROM ylp_table WHERE ylp_farmer='$farmername'";
									$result = mysqli_query($conn, $sql);

									if (mysqli_num_rows($result) > 0) {
									    // output data of each row
									    while($row = mysqli_fetch_assoc($result)) {
									        
									        echo $row['maxavailFE'];
									        
									    }
									} else {
									    echo "0 results";
									}

									mysqli_close($conn);
									?>]
				        }
				      ]
				    },
				    options: {
				      legend: { display: false },
				      title: {
				        display: true,
				        text: 'Avail-FE'
				      }
				    }
				});
			 </script>

			 <!--END SCRIPT-->

			 <!--Avail CU-->

			 <script>

			 new Chart(document.getElementById("chart12"), {
				    type: 'bar',
				    data: {
				      labels: ["Initial",<?php

				      				$farmername = $_REQUEST['name'];
									$servername = "localhost";
									$username = "root";
									$password = "";
									$dbname = "yamanlupa";

									// Create connection
									$conn = mysqli_connect($servername, $username, $password, $dbname);
									// Check connection
									if (!$conn) {
									    die("Connection failed: " . mysqli_connect_error());
									}

									$sql = "SELECT MIN(taon) AS mintaon FROM ylp_table WHERE ylp_farmer='$farmername'";
									$result = mysqli_query($conn, $sql);

									if (mysqli_num_rows($result) > 0) {
									    // output data of each row
									    while($row = mysqli_fetch_assoc($result)) {
									        
									        echo $row['mintaon'];
									        
									    }
									} else {
									    echo "0 results";
									}

									mysqli_close($conn);
									?>, 									<?php

									$farmername = $_REQUEST['name'];
									$servername = "localhost";
									$username = "root";
									$password = "";
									$dbname = "yamanlupa";

									// Create connection
									$conn = mysqli_connect($servername, $username, $password, $dbname);
									// Check connection
									if (!$conn) {
									    die("Connection failed: " . mysqli_connect_error());
									}

									$sql = "SELECT MAX(taon) AS maxtaon FROM ylp_table WHERE ylp_farmer='$farmername'";
									$result = mysqli_query($conn, $sql);

									if (mysqli_num_rows($result) > 0) {
									    // output data of each row
									    while($row = mysqli_fetch_assoc($result)) {
									        
									        echo $row['maxtaon'];
									        
									    }
									} else {
									    echo "0 results";
									}

									mysqli_close($conn);
									?>],
				      datasets: [
				        {
				          label: "Avail-CU",
				          backgroundColor: ["#3e78cd","#3e95cd", "#8e5ea2"],
				          data: [0,<?php

				          			$farmername = $_REQUEST['name'];
									$servername = "localhost";
									$username = "root";
									$password = "";
									$dbname = "yamanlupa";

									// Create connection
									$conn = mysqli_connect($servername, $username, $password, $dbname);
									// Check connection
									if (!$conn) {
									    die("Connection failed: " . mysqli_connect_error());
									}

									$sql = "SELECT MIN(ylp_avail_cu) AS minavailCU FROM ylp_table WHERE ylp_farmer='$farmername'";
									$result = mysqli_query($conn, $sql);

									if (mysqli_num_rows($result) > 0) {
									    // output data of each row
									    while($row = mysqli_fetch_assoc($result)) {
									        
									        echo $row['minavailCU'];
									        
									    }
									} else {
									    echo "0 results";
									}

									mysqli_close($conn);
									?>,
									<?php

									$farmername = $_REQUEST['name'];
									$servername = "localhost";
									$username = "root";
									$password = "";
									$dbname = "yamanlupa";

									// Create connection
									$conn = mysqli_connect($servername, $username, $password, $dbname);
									// Check connection
									if (!$conn) {
									    die("Connection failed: " . mysqli_connect_error());
									}

									$sql = "SELECT MAX(ylp_avail_cu) AS maxavailCU FROM ylp_table WHERE ylp_farmer='$farmername'";
									$result = mysqli_query($conn, $sql);

									if (mysqli_num_rows($result) > 0) {
									    // output data of each row
									    while($row = mysqli_fetch_assoc($result)) {
									        
									        echo $row['maxavailCU'];
									        
									    }
									} else {
									    echo "0 results";
									}

									mysqli_close($conn);
									?>]
				        }
				      ]
				    },
				    options: {
				      legend: { display: false },
				      title: {
				        display: true,
				        text: 'Avail-CU'
				      }
				    }
				});
			 </script>

			 <!--END SCRIPT-->

			 <!--Avail MN-->

			 <script>

			 new Chart(document.getElementById("chart13"), {
				    type: 'bar',
				    data: {
				      labels: ["Initial",<?php

				      				$farmername = $_REQUEST['name'];
									$servername = "localhost";
									$username = "root";
									$password = "";
									$dbname = "yamanlupa";

									// Create connection
									$conn = mysqli_connect($servername, $username, $password, $dbname);
									// Check connection
									if (!$conn) {
									    die("Connection failed: " . mysqli_connect_error());
									}

									$sql = "SELECT MIN(taon) AS mintaon FROM ylp_table WHERE ylp_farmer='$farmername'";
									$result = mysqli_query($conn, $sql);

									if (mysqli_num_rows($result) > 0) {
									    // output data of each row
									    while($row = mysqli_fetch_assoc($result)) {
									        
									        echo $row['mintaon'];
									        
									    }
									} else {
									    echo "0 results";
									}

									mysqli_close($conn);
									?>, 									<?php

									$farmername = $_REQUEST['name'];
									$servername = "localhost";
									$username = "root";
									$password = "";
									$dbname = "yamanlupa";

									// Create connection
									$conn = mysqli_connect($servername, $username, $password, $dbname);
									// Check connection
									if (!$conn) {
									    die("Connection failed: " . mysqli_connect_error());
									}

									$sql = "SELECT MAX(taon) AS maxtaon FROM ylp_table WHERE ylp_farmer='$farmername'";
									$result = mysqli_query($conn, $sql);

									if (mysqli_num_rows($result) > 0) {
									    // output data of each row
									    while($row = mysqli_fetch_assoc($result)) {
									        
									        echo $row['maxtaon'];
									        
									    }
									} else {
									    echo "0 results";
									}

									mysqli_close($conn);
									?>],
				      datasets: [
				        {
				          label: "Avail-MN",
				          backgroundColor: ["#3e78cd","#3e95cd", "#8e5ea2"],
				          data: [0,<?php

				          			$farmername = $_REQUEST['name'];
									$servername = "localhost";
									$username = "root";
									$password = "";
									$dbname = "yamanlupa";

									// Create connection
									$conn = mysqli_connect($servername, $username, $password, $dbname);
									// Check connection
									if (!$conn) {
									    die("Connection failed: " . mysqli_connect_error());
									}

									$sql = "SELECT MIN(ylp_avail_mn) AS minavailMN FROM ylp_table WHERE ylp_farmer='$farmername'";
									$result = mysqli_query($conn, $sql);

									if (mysqli_num_rows($result) > 0) {
									    // output data of each row
									    while($row = mysqli_fetch_assoc($result)) {
									        
									        echo $row['minavailMN'];
									        
									    }
									} else {
									    echo "0 results";
									}

									mysqli_close($conn);
									?>,
									<?php

									$farmername = $_REQUEST['name'];
									$servername = "localhost";
									$username = "root";
									$password = "";
									$dbname = "yamanlupa";

									// Create connection
									$conn = mysqli_connect($servername, $username, $password, $dbname);
									// Check connection
									if (!$conn) {
									    die("Connection failed: " . mysqli_connect_error());
									}

									$sql = "SELECT MAX(ylp_avail_mn) AS maxavailMN FROM ylp_table WHERE ylp_farmer='$farmername'";
									$result = mysqli_query($conn, $sql);

									if (mysqli_num_rows($result) > 0) {
									    // output data of each row
									    while($row = mysqli_fetch_assoc($result)) {
									        
									        echo $row['maxavailMN'];
									        
									    }
									} else {
									    echo "0 results";
									}

									mysqli_close($conn);
									?>]
				        }
				      ]
				    },
				    options: {
				      legend: { display: false },
				      title: {
				        display: true,
				        text: 'Avail-MN'
				      }
				    }
				});
			 </script>

			 <!--END SCRIPT-->








        <!-- End events-list Area -->
        <?php include '../navigation/footer.php' ?>
        <!-- Modal View Data-->
	   
	  		
	    	<script type="text/javascript" src="ylp_js/ylp_data.js"></script>
	        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	        <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
	        
	       