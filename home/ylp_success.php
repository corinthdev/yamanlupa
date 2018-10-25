<?php include 'frontend_links/links.php'; ?>  
    <body>  
        <?php include '../navigation/header.php' ?>
        <?php include ("../admin/authentication.php"); ?>
      <!-- start banner Area -->
      <section class="banner-area relative about-banner" id="home"> 
        <div class="overlay overlay-bg"></div>
        <div class="container">       
          <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
              <h1 class="text-white">
                YLP Data    
              </h1> 
              <p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="/pages/ylp_data/ylp_data"> YLP Data</a></p>
            </div>  
          </div>
        </div>
      </section>
      
    
      <!-- End banner Area -->
      <section class="popular-courses-area section-gap courses-page">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="jumbotron">
                  <div class="alert alert-dark" role="alert">
                      <center><strong><h4>Success!</h4></strong> You successfully read this
                      important alert message.</center>
                  </div>
                  <a href="ylp_add.php" role = "button" class="btn btn-success form-control">Back to Add</a>
              </div>
            </div>
          </div>  
        </div>    
      </section><hr>                      

      <?php include '../navigation/footer.php' ?>
      
