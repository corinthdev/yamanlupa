	
  		<link rel="shortcut icon" type="image/x-icon" href="img/icon.png" />
		<?php include ("frontend_links/links.php"); ?>
		<?php include ("admin/auth.php"); ?>
		<?php include("navigation/user_header.php"); ?>

	<!-- start banner Area -->
	<section class="banner-area relative" id="home">
		<div class="overlay overlay-bg"></div>	
		<div class="container">
			<div class="row fullscreen d-flex align-items-center justify-content-between">
				<div class="banner-content col-lg-9 col-md-12">
					<h1 class="text-uppercase">
						THE DECISION SUPPORT SYSTEM for 
						<strong class="text-success">"Yamang Lupa Program"</strong> in Sariaya, Quezon			
					</h1>
					<p class="pt-10 pb-10" style="font-size: 15px; text-align: justify;">
						<strong class="text-warning">Decision Support System (DSS) is a computer system that supports managers in nonroutine decision-making tasks. 
						Yamang Lupa Program in Region IV-A focuses on sustaining agriculture by strengthening community cooperation and 
						adopting science-based and practical soil and water conservation practices in rain-fed farmlands.</strong>
					</p>
					<?php if( isset($_SESSION['user']) && !empty($_SESSION['user']) )
					{
					?>
						<a class="text-light primary-btn text-uppercase"><?php echo $_SESSION['user']['fullname']; ?></a>
						<a href="admin/logout.php" class="primary-btn text-uppercase">LOG OUT</a>
					<?php }else{ ?>
						<a href="admin/login.php" class="primary-btn text-uppercase">SIGN IN</a>
						<a href="admin/register.php" class="primary-btn text-uppercase">SIGN UP</a>
					<?php } ?>
				</div>										
			</div>
		</div>					
	</section>
	<!-- End banner Area -->
			
	<!-- Start popular-course Area -->
	<section class="popular-course-area section-gap">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="menu-content pb-70 col-lg-8">
					<div class="title text-center">
						<h1 class="mb-10">Yamang Lupa Program</h1>
						<p class="text-justify">Yamang Lupa: Adoption of Bhoochetana Principles and Approaches for Natural Resources Management towards Sustainable 
							Philippine Agriculture.
							It is a science-led development and holistic mission mode program that uses the principles and approaches of the Bhoochetana 
							(soil rejuvenation) program in India to improve rural livelihoods of smallholder and marginal farmers in the Philippines by increasing 
							productivity through the use of best-bet soil, water, crop and nutrient management options.
						</p>
					</div>
				</div>
			</div>						
			<div class="row">
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				  <ol class="carousel-indicators">
				    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				  </ol>
				  <div class="carousel-inner">
				    <div class="carousel-item active">
				      <img class="d-block w-100" src="img/yaman2.jpg" alt="First slide">
				      <div class="carousel-caption d-none d-md-block">
					    <h2 class="text-light">SOIL</h2>
					    <p class="text-justify">Soil is a mixture of organic matter, minerals, gases, liquids, and organisms that together support life. the upper layer of earth in which plants grow, a black or dark brown material typically consisting of a mixture of organic remains, clay, and rock particles.<br><b>Did you know?</b> Soil has a negative charge, while the contaminants tend to be positively charged.</p>
					  </div>
				    </div>
				    <div class="carousel-item">
				      <img class="d-block w-100" src="img/yaman3.jpg" alt="Second slide">
				      <div class="carousel-caption d-none d-md-block">
					    <h2 class="text-light">FERTILIZER</h2>
					    <p class="text-justify">A fertilizer or fertiliser is any material of natural or synthetic origin that is applied to soils or to plant tissues to supply one or more plant nutrients essential to the growth of plants. Many sources of fertilizer exist, both natural and industrially produced.</p>
					  </div>
				    </div>
				    <div class="carousel-item">
				      <img class="d-block w-100" src="img/yaman1.jpg" alt="Third slide">
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
	<!-- End popular-course Area -->
	
	<!-- Start blog Area -->
	<section class="blog-area section-gap" id="blog">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="menu-content pb-70 col-lg-8">
					<div class="title text-center">
						<h1 class="mb-10">Yamang Lupa Projects</h1>
						<p>In the history of modern agriculturist there is.</p>
					</div>
				</div>
			</div>					
			<div class="row">
				<div class="col-lg-4 col-md-6 single-blog">
					<div class="thumb">
						<img class="img-fluid" src="img/plat.jpg" alt="">								
					</div>
					<a href="dss_platform.php"><br>
						<center><h5>DSS Platform</h5></center>
					</a>
					<p class="text-justify">
						A decision support system (DSS) is an information system that supports business or organizational decision-making activities. DSSs serve the management, operations and planning levels of an organization and help people make decisions about problems that may be rapidly changing and not easily specified in advance—i.e. unstructured and semi-structured decision problems. 
					</p>
					<a href="dss_platform.php" class="details-btn d-flex justify-content-center align-items-center"><span class="details">Go Now</span><span class="lnr lnr-arrow-right"></span></a>		
				</div>
				<div class="col-lg-4 col-md-6 single-blog">
					<div class="thumb">
						<img class="img-fluid" src="img/calcu1.jpg" alt="">								
					</div>
					<a href="fertilizer.php"><br>
						<center><h5>Fertilizer Calculator</h5></center>
					</a>
					<p class="text-justify">
						When it comes to fertilizing, more does not mean better. It is possible to overfeed your plants. Too much fertilizer can damage and maybe even kill your plants. Before applying any fertilizer, it’s a good idea to have your soil tested so you can select the type and formula that suits your plants’ needs. In return, our plants will reward us with bigger flowers, bigger leaves, and bigger fruits and vegetables.
					</p>
					<a href="fertilizer.php" class="details-btn d-flex justify-content-center align-items-center"><span class="details">Go Now</span><span class="lnr lnr-arrow-right"></span></a>						
				</div>
				<div class="col-lg-4 col-md-6 single-blog">
					<div class="thumb">
						<img class="img-fluid" src="img/calcu.jpg" alt="">								
					</div>
					<a href="lime_calculator.php"><br>
						<center><h5>Lime Calculator</h5></center>
					</a>
					<p class="text-justify">
						What is Lime?<br>
						Strictly speaking lime is calcium oxide or calcium hydroxide, but the term is also used to describe a wide range of calcium-containing compounds. Agricultural lime is usually calcium carbonate, or limestone. All of these soil conditioners will neutralize acids and make them less acidic. A commercial soil testing lab can measure and report the “Buffer pH”. 

					</p>
					<a href="lime_calculator.php" class="details-btn d-flex justify-content-center align-items-center"><span class="details">Go Now</span><span class="lnr lnr-arrow-right"></span></a>									
				</div>						
			</div>
		</div>	
	</section>
	<!-- End blog Area -->			
<?php include("navigation/footer.php") ?>
<script type="text/javascript">
	$('.carousel').carousel({
	  interval: 2000
	})
</script>