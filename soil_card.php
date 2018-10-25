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
                            Soil Health Card				
                        </h1>	
                        <p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="soil_card.php"> Soil Health Card</a></p>
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
                                <form role="form" class="registration-form" action="#!">
                                    <fieldset>
                                        <div class="form-top">
                                            <div class="form-top-left"><br>
                                                <h3>SOIL HEALTH CARD</h3>
                                            </div>
                                        </div>
                                        <div class="form-bottom">
                                            <h3>Pangunahing Impormasyon:</h3><br>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Pangalan" id="pangalan">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Baranggay" id="brgy">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Bayan" id="bayan">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Lalawigan" id="lalawigan">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Lalim ng Pagkuha ng Soil Sample" id="lalim">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Taon ng Sampling" id="sampling">
                                            </div>
                                            <button type="button" class="btn btn-success btn-next">Next</button>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <div class="form-top">
                                            <div class="form-top-left"><br>
                                                <h3>SOIL HEALTH CARD</h3>
                                            </div>
                                        </div>
                                        <div class="form-bottom">
                                            <h3>Resulta ng Soil Analysis:</h3><br>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="PH ng Lupa" id="pangalan">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Electricity Conductivity" id="conduc">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Organic Carbon (%)" id="carbon">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Available Phosphorous (PPM)" id="phospo">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Available Potassium (PPM)" id="pota">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Available Sulfur (PPM)" id="sulfur">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Available Zinc (PPM)" id="zinc">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Available Iron (PPM)" id="iron">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Available Copper (PPM)" id="copper">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Available Manganese (PPM)" id="manga">
                                            </div>
                                            <button type="button" class="btn btn-success btn-previous">Previous</button>
                                            <button type="submit" class="btn btn-warning">Submit</button>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                    </div>
                </div>
            </div>	
        </section>
        <!-- End events-list Area -->
        <script type="text/javascript" src="frontend_links/multipage.js"></script>
            
        <?php include 'navigation/footer.php' ?>