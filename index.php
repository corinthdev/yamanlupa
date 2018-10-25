	
  		<link rel="shortcut icon" type="image/x-icon" href="img/icon.png" />
		<?php include ("frontend_links/links.php"); ?>
		<?php include ("admin/auth.php"); ?>
		<?php include("navigation/user_header.php") ?>

	<!-- start banner Area -->
	<section class="banner-area relative" id="home">
		<div class="overlay overlay-bg"></div>	
		<div class="container">
			<div class="row fullscreen d-flex align-items-center justify-content-between">
				<div class="banner-content col-lg-9 col-md-12">
					<h1 class="text-uppercase">
						THE <strong class="text-success">DECISION</strong> SUPPORT SYSTEM for 
						"Yamang Lupa" Program in Sariaya, Quezon			
					</h1>
					<p class="pt-10 pb-10">
						Decision Support System (DSS) is a computer system that supports managers in nonroutine decision-making tasks. 
						Yamang Lupa Program in Region IV-A focuses on sustaining agriculture by strengthening community cooperation and 
						adopting science-based and practical soil and water conservation practices in rain-fed farmlands.
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

	<!-- Start feature Area -->
	<?php include("navigation/feature.php") ?>
	<!-- End feature Area -->
			
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
				<div class="active-popular-carusel">
					<div class="single-popular-carusel">
						<div class="thumb-wrap relative">
							<div class="thumb relative">
								<div class="overlay overlay-bg"></div>	
								<img class="img-fluid" src="img/lupain.jpg" alt="">
							</div>								
						</div>
						<div class="details">
							<a href="#">
								<h4>
									Title
								</h4>
							</a>
							<p>
								Description...										
							</p>
						</div>
					</div>	
					<div class="single-popular-carusel">
						<div class="thumb-wrap relative">
							<div class="thumb relative">
								<div class="overlay overlay-bg"></div>	
								<img class="img-fluid" src="img/ferti2.jpg" alt="">
							</div>									
						</div>
						<div class="details">
							<a href="#">
								<h4>
									Title
								</h4>
							</a>
							<p>
								Description...										
							</p>
						</div>
					</div>	
					<div class="single-popular-carusel">
						<div class="thumb-wrap relative">
							<div class="thumb relative">
								<div class="overlay overlay-bg"></div>	
								<img class="img-fluid" src="img/halamanin.jpg" alt="">
							</div>									
						</div>
						<div class="details">
							<a href="#">
								<h4>
									Title
								</h4>
							</a>
							<p>
								Description...										
							</p>
						</div>
					</div>	
					<div class="single-popular-carusel">
						<div class="thumb-wrap relative">
							<div class="thumb relative">
								<div class="overlay overlay-bg"></div>	
								<img class="img-fluid" src="img/fertil.jpg" alt="">
							</div>									
						</div>
						<div class="details">
							<a href="#">
								<h4>
									Title
								</h4>
							</a>
							<p>
								Description...										
							</p>
						</div>
					</div>					
				</div>
			</div>
		</div>	
	</section>
	<!-- End popular-course Area -->
	

	<!-- Start search-course Area -->
	<?php include("navigation/contact.php") ?>
	<!-- End search-course Area -->
	<br><br><br><br><br><hr><br><br><br><br><br>
	<!-- Start cta-one Area -->
	<section class="cta-one-area relative section-gap">
		<div class="container">
			<div class="overlay overlay-bg"></div>
			<div class="row justify-content-center">
				<div class="wrap">
					<h1 class="text-white">Become an agriculturist</h1>
					<p>
						There is a moment in the life of any aspiring agriculturist that it is time to buy that first lot. It’s exciting to think about setting up your own viewing location.
					</p>
					<a class="primary-btn wh" href="#">Apply for the post</a>
				</div>					
			</div>
		</div>	
	</section>
	<!-- End cta-one Area -->

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
						<img class="img-fluid" src="img/soil.jpg" alt="">								
					</div>
					<a href="blog-single.html">
						<h5>Title</h5>
					</a>
					<p>
						Description... 
					</p>
					<a href="#!" class="details-btn d-flex justify-content-center align-items-center"><span class="details">Details</span><span class="lnr lnr-arrow-right"></span></a>		
				</div>
				<div class="col-lg-4 col-md-6 single-blog">
					<div class="thumb">
						<img class="img-fluid" src="img/soil01.jpg" alt="">								
					</div>
					<a href="blog-single.html">
						<h5>Title</h5>
					</a>
					<p>
						Description...
					</p>
					<a href="#!" class="details-btn d-flex justify-content-center align-items-center"><span class="details">Details</span><span class="lnr lnr-arrow-right"></span></a>						
				</div>
				<div class="col-lg-4 col-md-6 single-blog">
					<div class="thumb">
						<img class="img-fluid" src="img/soil02.jpg" alt="">								
					</div>
					<a href="blog-single.html">
						<h5>Title</h5>
					</a>
					<p>
						Description... 
					</p>
					<a href="#!" class="details-btn d-flex justify-content-center align-items-center"><span class="details">Details</span><span class="lnr lnr-arrow-right"></span></a>									
				</div>						
			</div>
		</div>	
	</section>
	<!-- End blog Area -->			
<?php include("navigation/footer.php") ?>