<?php

  require 'db/connect.php';

  if (isset($_POST['submit'])) {
    
    $code = $_POST['code'];
    $pangalan = $_POST['pangalan'];
    $brgy = $_POST['brgy'];
    $bayan = $_POST['bayan'];
    $lalawigan = $_POST['lalawigan'];
    $lalim = $_POST['lalim'];
    $sampling = $_POST['sampling'];

    $sql = "INSERT INTO info(code,pangalan,brgy,bayan,lalawigan,lalim,sampling) 
            VALUES('$code','$pangalan','$brgy','$bayan','$lalawigan','$lalim','$sampling')";
         $query = mysqli_query($conn, $sql);
         if($query){
              $note= "SUCCESSFULLY REGISTER INFO";
             }
             else{
              $alert= "ERROR";
             }
  }

?>



    <link rel="shortcut icon" type="image/x-icon" href="img/icon.png" />
    <link rel="stylesheet" type="text/css" href="frontend_links/multipage.css">
    <?php include 'frontend_links/links.php'; ?>
    <?php include 'navigation/user_header.php' ?>
        <!-- start banner Area -->
        <section class="banner-area relative about-banner" id="home">	
            <div class="overlay overlay-bg"></div>
            <div class="container">				
                <div class="row d-flex align-items-center justify-content-center">
                    <div class="about-content col-lg-12">
                        <h1 class="text-white">
                            DSS PLATFORM				
                        </h1>	
                        <p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="soil_card.php"> DSS PLATFORM</a></p>
                    </div>	
                </div>
            </div>
        </section>
        <!-- End banner Area -->

        <!-- Start events-list Area -->
        <section class="events-list-area section-gap event-page-lists bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div style="height:40px;"></div>
                            <div class="assessment-container container">

                                <?php if (isset($note)) {echo "<div class=\"alert alert-success\"><strong>Note: </strong>" .$note. "</div>";}?>
                                <?php if (isset($alert)) {echo "<div class=\"alert alert-danger\"><strong>Note: </strong>" .$alert. "</div>";}?>
                                <h3 class="text-center">SOIL HEALTH CARD</h3><hr>
                                <div class="row">
                                    <div class="col-lg-3 border"><br>
                                        <form role="form" method="POST" action="soil_card3.php">
                                            <h5>Resulta ng Soil Analysis:</h5><br>
                                            <div class="form-group">
                                                <input class="form-control" type="number" name="ph" placeholder="0.00" required name="price" min="0" max="14.99" value="0" step="0.01" title="Currency" pattern="^\d+(?:\.\d{1,2})?$" onblur="this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'red'">
                                            </div>
                                            <div class="form-group">
                                                <label>Exchangeable Acidity</label><br>
                                                <input type="text" name="exchange">
                                            </div>
                                            <div class="form-group">
                                                <label>Electricity Conductivity</label><br>
                                                <input type="text" name="electricity" id="conduc">
                                            </div>
                                            <div class="form-group">
                                                <label>Organic Carbon (%)</label><br>
                                                <input type="text" name="carbon" id="carbon">
                                            </div>
                                            <div class="form-group">
                                                <label>Available Phosphorous (PPM)</label><br>
                                                <input type="text" name="phosphorous" id="phospo">
                                            </div>
                                            <div class="form-group">
                                                <label>Available Potassium (PPM)</label><br>
                                                <input type="text" name="potassium" id="pota">
                                            </div>
                                            <div class="form-group">
                                                <label>Available Sulfur (PPM)</label><br>
                                                <input type="text" name="sulfur" id="sulfur">
                                            </div>
                                            <div class="form-group">
                                                <label>Available Zinc (PPM)</label><br>
                                                <input type="text" name="zinc" id="zinc">
                                            </div>
                                            <div class="form-group">
                                                <label>Available Iron (PPM)</label><br>
                                                <input type="text" name="iron" id="iron">
                                            </div>
                                            <div class="form-group">
                                                <label>Available Copper (PPM)</label><br>
                                                <input type="text" name="copper" id="copper">
                                            </div>
                                            <div class="form-group">
                                                <label>Available Manganese (PPM)</label><br>
                                                <input type="text" name="manganese" id="manga">
                                            </div>
                                            <button type="submit" class="btn btn-warning form-control" name="submit">Submit</button>  
                                        </form>
                                    </div>
                                    <div class="col-lg-9 border"><br>
                                        <h5>DSS Details</h5><hr>
                                        <p><em>Dss details
                                        A decision support system (DSS) is an information system that supports business or organizational decision-making activities. DSSs serve the management, operations and planning levels of an organization (usually mid and higher management) and help people make decisions about problems that may be rapidly changing and not easily specified in advance—i.e. unstructured and semi-structured decision problems. Decision support systems can be either fully computerized or human-powered, or a combination of both.<br>
                                        In this DSS it provides help to farmers to know how much lime or fertilizer are they going to put in their soil and it also suggest where they can buy this agricultural product and recommend crops that depends on your soil analysis.
                                        </em></p><br><br>
                                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                          <ol class="carousel-indicators">
                                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                          </ol>
                                          <div class="carousel-inner">
                                            <div class="carousel-item active">
                                              <img class="d-block w-100" src="img/lupa1.jpg" alt="First slide">
                                              <div class="carousel-caption d-none d-md-block">
                                                <h2 class="text-light">SOIL</h2>
                                                <p class="text-justify">Soil is a mixture of organic matter, minerals, gases, liquids, and organisms that together support life. the upper layer of earth in which plants grow, a black or dark brown material typically consisting of a mixture of organic remains, clay, and rock particles.<br><b>Did you know?</b> Soil has a negative charge, while the contaminants tend to be positively charged.</p>
                                              </div>
                                            </div>
                                            <div class="carousel-item">
                                              <img class="d-block w-100" src="img/lupa2.jpg" alt="Second slide">
                                              <div class="carousel-caption d-none d-md-block">
                                                <h2 class="text-light">FERTILIZER</h2>
                                                <p class="text-justify">A fertilizer or fertiliser is any material of natural or synthetic origin that is applied to soils or to plant tissues to supply one or more plant nutrients essential to the growth of plants. Many sources of fertilizer exist, both natural and industrially produced.</p>
                                              </div>
                                            </div>
                                            <div class="carousel-item">
                                              <img class="d-block w-100" src="img/lupa3.jpg" alt="Third slide">
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
                            </div>
                    </div>
                </div>
            </div>	
        </section>
        <!-- End events-list Area -->
        <script type="text/javascript" src="frontend_links/multipage.js"></script>
            
        <?php include 'navigation/footer.php' ?>