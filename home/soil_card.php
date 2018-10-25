    <link rel="shortcut icon" type="image/x-icon" href="frontend_links/backend_images/icon.png" />
    <?php include ("../admin/authentication.php"); ?>
    <link rel="stylesheet" type="text/css" href="frontend_links/multipage.css">
    <?php include 'frontend_links/links.php'; ?>
    <?php include '../navigation/header.php' ?>
    <?php include 'soil.php' ?>
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
                                <?php if (isset($_SESSION['success'])) : ?>
                                  <div class="alert alert-success" id="flash-msg">
                                    <h4>
                                      <?php 
                                        echo $_SESSION['success']; 
                                        unset($_SESSION['success']);
                                      ?>
                                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                                    </h4>
                                  </div>
                                <?php endif ?>

                                <div id="divToPrint">
                                <form role="form" class="registration-form" method="POST" action="soil_card.php">
                                    <fieldset>
                                        <div class="form-top">
                                            <div class="form-top-left"><br>
                                                <h3>SOIL HEALTH CARD</h3>
                                            </div>
                                        </div>
                                        <div class="form-bottom">
                                            <h3>Pangunahing Impormasyon:</h3><br>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Pangalan" name="pangalan">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Baranggay" name="brgy">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Bayan" name="bayan">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Lalawigan" name="lalawigan">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Lalim ng Pagkuha ng Soil Sample" name="soil_sample">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Taon ng Sampling" name="sampling">
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
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <input type="text" class="form-control" value="PH ng Lupa" name="ph_lupa" readonly>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <input type="text" class="form-control" value="-" name="ph_krit" readonly>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <input type="text" class="form-control" placeholder="Obserbasyon" name="ph_observe">
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <input type="text" class="form-control" placeholder="Resulta" name="ph_result">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <input type="text" class="form-control" value="Electricity Conductivity" name="ec_conduc" readonly>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <input type="text" class="form-control" value="0.8" name="ec_krit" readonly>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <input type="text" class="form-control" placeholder="Obserbasyon" name="ec_observe">
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <input type="text" class="form-control" placeholder="Resulta" name="ec_result">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <input type="text" class="form-control" value="Oraganic Carbon (%)" name="oc_carb" readonly>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <input type="text" class="form-control" value="2.0" name="oc_krit" readonly>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <input type="text" class="form-control" placeholder="Obserbasyon" name="oc_observe">
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <input type="text" class="form-control" placeholder="Resulta" name="oc_result">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <input type="text" class="form-control" value="Available Phosphorous (PPM)" name="phospho" readonly>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <input type="text" class="form-control" value="10" name="phospho_krit" readonly>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <input type="text" class="form-control" placeholder="Obserbasyon" name="phospho_observe">
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <input type="text" class="form-control" placeholder="Resulta" name="phospho_result">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <input type="text" class="form-control" value="Available Potassium (PPM)" name="pota" readonly>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <input type="text" class="form-control" value="75" name="pota_krit" readonly>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <input type="text" class="form-control" placeholder="Obserbasyon" name="pota_observe">
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <input type="text" class="form-control" placeholder="Resulta" name="pota_result">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <input type="text" class="form-control" value="Available Sulfur (PPM)" name="sulfur" readonly>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <input type="text" class="form-control" value="10" name="sulfur_krit" readonly>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <input type="text" class="form-control" placeholder="Obserbasyon" name="sulfur_observe">
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <input type="text" class="form-control" placeholder="Resulta" name="sulfur_result">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <input type="text" class="form-control" value="Available Zinc (PPM)" name="zinc" readonly>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <input type="text" class="form-control" value="0.75" name="zinc_krit" readonly>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <input type="text" class="form-control" placeholder="Obserbasyon" name="zinc_observe">
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <input type="text" class="form-control" placeholder="Resulta" name="zinc_result">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <input type="text" class="form-control" value="Available Iron (PPM)" name="iron" readonly>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <input type="text" class="form-control" value="2.00" name="iron_krit" readonly>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <input type="text" class="form-control" placeholder="Obserbasyon" name="iron_observe">
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <input type="text" class="form-control" placeholder="Resulta" name="iron_result">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <input type="text" class="form-control" value="Available Copper (PPM)" name="copper" readonly>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <input type="text" class="form-control" value="0.50" name="copper_krit" readonly>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <input type="text" class="form-control" placeholder="Obserbasyon" name="copper_observe">
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <input type="text" class="form-control" placeholder="Resulta" name="copper_result">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <input type="text" class="form-control" value="Available Manganese (PPM)" name="manga" readonly>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <input type="text" class="form-control" value="1.00" name="manga_krit" readonly>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <input type="text" class="form-control" placeholder="Obserbasyon" name="manga_observe">
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <input type="text" class="form-control" placeholder="Resulta" name="manga_result">
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="button" class="btn btn-success btn-previous">Previous</button>
                                            <input type="submit" class="btn btn-warning" value="Submit" name="submit">
                                            <a class="btn btn-primary text-white" onclick="PrintDiv();">
                                                <i class="fa fa-print">&nbsp<strong>PRINT</strong></i>
                                            </a>
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
        <script type="text/javascript">
            $(document).ready(function () {
                $("#flash-msg").delay(2000).fadeOut("slow");
            });
        </script>   
        <script type="text/javascript">     
            function PrintDiv() {    
               var divToPrint = document.getElementById('divToPrint');
               var popupWin = window.open('', '_blank', 'width=1000,height=700');
               popupWin.document.open();
               popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
                popupWin.document.close();
                    }
        </script>
            
        <?php include '../navigation/footer.php' ?>