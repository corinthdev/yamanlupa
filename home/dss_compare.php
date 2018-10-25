<!doctype html>
<html lang="en" class="no-js">
<head>
	<link rel="stylesheet" href="dsscompare_links/css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="dsscompare_links/css/style.css"> <!-- Resource style -->
	<script src="dsscompare_links/js/modernizr.js"></script> <!-- Modernizr -->
  	
	<title>DSS Platform Comparison</title>
	<?php include '../frontend_links/links.php'; ?>
	<?php include '../admin/authentication.php'; ?>
</head>
<body>

	<?php include '../navigation/header.php'; ?>
	<!-- start banner Area -->
    <section class="banner-area relative about-banner" id="home">   
        <div class="overlay overlay-bg"></div>
        <div class="container">             
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        Platform Comparison Table    
                    </h1>   
                    <p class="text-white link-nav"><a href="/">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="lime_calculator.php"> Platform Comparison Table</a></p>
                </div>  
            </div>
        </div>
    </section><br>
	<section class="cd-products-comparison-table">
		<header>
			<div class="actions">
				<a href="#0" class="reset">Reset</a>
				<a href="#0" class="filter">Filter</a>
			</div>
		</header>

		<div class="cd-products-table">
			<div class="cd-products-wrapper">
				<ul class="cd-products-columns">
					<li class="product">
						<div class="top-info border border-right">
							<div class="check"></div><br>
							<h2>DSS PLATFORM TABLE 2014</h2>
						</div> <!-- .top-info border -->

						<ul class="cd-features-list list-group">
							<?php
                                  include 'connection.php';    
                                  $table = mysqli_query($conn, "SELECT * FROM dss_table");
                                  while($row = mysqli_fetch_array($table)) { 

                                    $dss_info=$row['dss_info'];
                                    $dss_krit=$row['dss_krit'];
                                    $dss_observe=$row['dss_observe'];
                                    $dss_result=$row['dss_result'];

                                ?>
                                   <li class="list-group-item bg-secondary text-light"><?php echo $row['dss_info']?></li> 
                                   <li class="list-group-item"><?php echo $row['dss_krit']?></li> 
                                   <li class="list-group-item"><?php echo $row['dss_observe']?></li> 
                                   <li class="list-group-item"><?php echo $row['dss_result']?></li> 
                            <?php } ?>
						</ul>
					</li> 

					<li class="product">
						<div class="top-info border border-right">
							<div class="check"></div><br>
							<h2>DSS PLATFORM TABLE 2016</h2>
						</div> <!-- .top-info -->

						<ul class="cd-features-list">
							<?php
                                  include 'connection.php';    
                                  $table = mysqli_query($conn, "SELECT * FROM dss_table_one");
                                  while($row = mysqli_fetch_array($table)) { 

                                    $dss_info=$row['dss_info'];
                                    $dss_krit=$row['dss_krit'];
                                    $dss_observe=$row['dss_observe'];
                                    $dss_result=$row['dss_result'];

                                ?>
                                   <li class="list-group-item bg-secondary text-light"><?php echo $row['dss_info']?></li> 
                                   <li class="list-group-item"><?php echo $row['dss_krit']?></li> 
                                   <li class="list-group-item"><?php echo $row['dss_observe']?></li> 
                                   <li class="list-group-item"><?php echo $row['dss_result']?></li> 
                            <?php } ?>
						</ul>
					</li> 

					<li class="product">
						<div class="top-info border border-right">
							<div class="check"></div><br>
							<h2>DSS PLATFORM TABLE 2018</h2>
						</div> <!-- .top-info -->

						<ul class="cd-features-list">
							<?php
                                  include 'connection.php';    
                                  $table = mysqli_query($conn, "SELECT * FROM dss_table_two");
                                  while($row = mysqli_fetch_array($table)) { 

                                    $dss_info=$row['dss_info'];
                                    $dss_krit=$row['dss_krit'];
                                    $dss_observe=$row['dss_observe'];
                                    $dss_result=$row['dss_result'];

                                ?>
                                   <li class="list-group-item"><?php echo $row['dss_info']?></li> 
                                   <li class="list-group-item"><?php echo $row['dss_krit']?></li> 
                                   <li class="list-group-item"><?php echo $row['dss_observe']?></li> 
                                   <li class="list-group-item"><?php echo $row['dss_result']?></li> 
                            <?php } ?>
                            <li class="list-group-item">No data available in table</li>
                            <li class="list-group-item">No data available in table</li>
                            <li class="list-group-item">No data available in table</li>
                            <li class="list-group-item">No data available in table</li>
						</ul>
					</li> 

					<li class="product">
						<div class="top-info border border-right">
							<div class="check"></div><br>
							<h2>DSS PLATFORM TABLE 2019</h2>
						</div> <!-- .top-info -->

						<ul class="cd-features-list">
							<?php
                    include 'connection.php';    
                    $table = mysqli_query($conn, "SELECT * FROM dss_table_two");
                    while($row = mysqli_fetch_array($table)) { 

                      $dss_info=$row['dss_info'];
                      $dss_krit=$row['dss_krit'];
                      $dss_observe=$row['dss_observe'];
                      $dss_result=$row['dss_result'];

                  ?>
                     <li class="list-group-item"><?php echo $row['dss_info']?></li> 
                     <li class="list-group-item"><?php echo $row['dss_krit']?></li> 
                     <li class="list-group-item"><?php echo $row['dss_observe']?></li> 
                     <li class="list-group-item"><?php echo $row['dss_result']?></li> 
              <?php } ?>
              <li class="list-group-item">No data available in table</li>
              <li class="list-group-item">No data available in table</li>
              <li class="list-group-item">No data available in table</li>
              <li class="list-group-item">No data available in table</li>
						</ul>
					</li> 

				</ul> <!-- .cd-products-columns -->
			</div> <!-- .cd-products-wrapper -->
			
			<ul class="cd-table-navigation">
				<li><a href="#0" class="prev inactive">Prev</a></li>
				<li><a href="#0" class="next">Next</a></li>
			</ul>
		</div> <!-- .cd-products-table -->
	</section> <!-- .cd-products-comparison-table -->
	<?php include '../navigation/footer.php'; ?>
<!-- <script src="dsscompare_links/js/jquery-2.1.4.js"></script> -->
<script src="dsscompare_links/js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>