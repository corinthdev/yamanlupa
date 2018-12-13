<link rel="shortcut icon" type="image/x-icon" href="frontend_links/backend_images/icon.png" />

        <?php include 'frontend_links/links.php'; ?>
        <?php include 'admin/auth.php' ?>
        <?php include 'navigation/user_header.php' ?>
            <!-- start banner Area -->
            <section class="banner-area relative about-banner" id="home">   
                <div class="overlay overlay-bg"></div>
                <div class="container">             
                    <div class="row d-flex align-items-center justify-content-center">
                        <div class="about-content col-lg-12">
                            <h1 class="text-white">
                                Calculator      
                            </h1>   
                            <p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="lime_calculator.php"> Calculator  </a></p>
                        </div>  
                    </div>
                </div>
            </section>
        
         <!-- Start blog Area -->
            <section class="blog-area section-gap" id="blog">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="menu-content pb-70 col-lg-8">
                            <div class="title text-center">
                                <h1 class="mb-10">CALCULATOR</h1>
                                <p>Calculate your Crops here</p>
                            </div>
                        </div>
                    </div>                  
                    <div class="row">
                        <div class="col-lg-6 col-md-6 single-blog">
                            <div class="thumb">
                                <img class="img-fluid" src="img/calcu1.jpg" alt="">                               
                            </div>
                            <a href="fertilizer.php"><br>
                                <center><h5>Fertilizer Calculator</h5></center>
                            </a>
                            <p class="text-justify">
                                Fertilizer<br>
                                <em>When it comes to fertilizing, more does not mean better. It is possible to overfeed your plants. Too much fertilizer can damage and maybe even kill your plants. Before applying any fertilizer, it’s a good idea to have your soil tested so you can select the type and formula that suits your plants’ needs.</em>
                            </p>
                            <a href="fertilizer.php" class="details-btn d-flex justify-content-center align-items-center"><span class="details">Click me</span><span class="lnr lnr-arrow-right"></span></a>     
                        </div>
                        <div class="col-lg-6 col-md-6 single-blog">
                            <div class="thumb">
                                <img class="img-fluid" src="img/calcu.jpg" alt="">                             
                            </div>
                            <a href="lime_calculator.php"><br>
                                <center><h5>Lime Calculator</h5></center>
                            </a>
                            <p class="text-justify">
                                What is Lime?<br>
                                <em>Strictly speaking lime is calcium oxide or calcium hydroxide, but the term is also used to describe a wide range of calcium-containing compounds. Agricultural lime is usually calcium carbonate, or limestone. All of these soil conditioners will neutralize acids and make them less acidic.</em>

                            </p>
                            <a href="lime_calculator.php" class="details-btn d-flex justify-content-center align-items-center"><span class="details">Click me</span><span class="lnr lnr-arrow-right"></span></a>                     
                        </div>                    
                    </div>
                </div>  
            </section>
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>      

        <?php include 'navigation/footer.php' ?>
            
