
    <link rel="shortcut icon" type="image/x-icon" href="img/icon.png" />
    <link rel="stylesheet" type="text/css" href="frontend_links/multipage.css">
    <?php include 'frontend_links/links.php'; ?>
    <?php include ("../admin/auth.php"); ?>
    <?php include '../navigation/header.php' ?>
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
                                <h1 class="text-center">Soil Health Card</h1><hr>
                                <form role="form" method="post" action="soil_cardd3.php">
                                    <div class="row border">
                                        <div class="col-lg-4 border"><br>
                                            <?php

                                            include '../admin/connection.php';
                                            if(isset($_GET["id"]))
                                            {

                                            $query = mysqli_query($conn, "SELECT * FROM ylp_table WHERE id = '".$_GET["id"]."'");
                                            while($row = mysqli_fetch_array($query))
                                                {   
                                                    $id=$row['id'] ;
                                                    $ylp_code=$row['ylp_code'] ;
                                                    $description=$row['description'] ;
                                                    $ylp_farmer=$row['ylp_farmer'] ;
                                                    $ylp_bayan=$row['ylp_bayan'] ;
                                                    $ylp_lalawigan=$row['ylp_lalawigan'] ;
                                                    $ylp_lalim=$row['ylp_lalim'] ;
                                                    $taon=$row['taon'] ;
                                                    $ylp_exchange=$row['ylp_exchange'] ;
                                                    $ylp_crop=$row['ylp_crop'] ;
                                                    $ylp_ec=$row['ylp_ec'] ;
                                                    $ylp_oc=$row['ylp_oc'] ;
                                                    $ylp_avail_p=$row['ylp_avail_p'] ;
                                                    $ylp_avail_k=$row['ylp_avail_k'] ;
                                                    $ylp_avail_s=$row['ylp_avail_s'] ;
                                                    $ylp_avail_zn=$row['ylp_avail_zn'] ;
                                                    $ylp_avail_b=$row['ylp_avail_b'] ;
                                                    $ylp_avail_cu=$row['ylp_avail_cu'] ;
                                                    $ylp_avail_mn=$row['ylp_avail_mn'] ;
                                                }
                                            }
                                            ?>
                                            <h5 class="text-center">Pangunahing Impormasyon:</h5><hr>
                                            <div class="form-group">
                                                <label>Code</label><br>
                                                <input type="text" name="code" id="code" value="<?php echo $ylp_code;?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Pangalan</label><br>
                                                <input type="text" name="pangalan" id="pangalan" value="<?php echo $description;?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Baranggay</label><br>
                                                <input type="text" name="brgy" id="brgy" value="<?php echo $ylp_farmer;?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Bayan</label><br>
                                                <input type="text" name="bayan" id="bayan" value="<?php echo $ylp_bayan;?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Lalawigan</label><br>
                                                <input type="text" name="lalawigan" id="lalawigan" value="<?php echo $ylp_lalawigan;?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Lalim ng Pagkuha ng Soil Sample</label><br>
                                                <input type="text" name="lalim" id="lalim" value="<?php echo $ylp_lalim;?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Taon ng Samplin</label><br>
                                                <input type="text" name="sampling" id="sampling" value="<?php echo $taon;?>" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-4"><br>
                                            <h5 class="text-center">Resulta ng Soil Analysis:</h5><hr>
                                            <div class="form-group">
                                                <label>PH ng Lupa</label><br>
                                                <input style="width: 72%; padding: 11px; border-radius: 5px;" type="number" name="ph" placeholder="0.00" required name="price" min="0" max="14.99" value="<?php echo $ylp_crop;?>" step="0.01" title="Currency" pattern="^\d+(?:\.\d{1,2})?$" onblur="this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'red'">
                                            </div>
                                            <div class="form-group">
                                                <label>Exchangeable Acidity</label><br>
                                                <input type="text" name="exchange" value="<?php echo $ylp_exchange; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Electricity Conductivity</label><br>
                                                <input type="text" name="electricity" id="conduc" value="<?php echo $ylp_ec;?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Organic Carbon (%)</label><br>
                                                <input type="text" name="carbon" id="carbon" value="<?php echo $ylp_oc;?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Available Phosphorous (PPM)</label><br>
                                                <input type="text" name="phosphorous" id="phospo" value="<?php echo $ylp_avail_p;?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Available Potassium (PPM)</label><br>
                                                <input type="text" name="potassium" id="pota" value="<?php echo $ylp_avail_k;?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Available Sulfur (PPM)</label><br>
                                                <input type="text" name="sulfur" id="sulfur" value="<?php echo $ylp_avail_s;?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-4"><br>
                                            <h5 class="text-center">Resulta ng Soil Analysis:</h5><hr>
                                            <div class="form-group">
                                                <label>Available Zinc (PPM)</label><br>
                                                <input type="text" name="zinc" id="zinc" value="<?php echo $ylp_avail_zn;?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Available Iron (PPM)</label><br>
                                                <input type="text" name="iron" id="iron" value="<?php echo $ylp_avail_b;?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Available Copper (PPM)</label><br>
                                                <input type="text" name="copper" id="copper" value="<?php echo $ylp_avail_cu;?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Available Manganese (PPM)</label><br>
                                                <input type="text" name="manganese" id="manga" value="<?php echo $ylp_avail_mn;?>">
                                            </div><br>
                                            <button style="width: 72%;" class="btn btn-warning" name="submit">Submit</button>    
                                        </div>
                                    </div> 
                                </form>
                            </div>
                    </div>
                </div>
            </div>  
        </section>
        <!-- End events-list Area -->
        <script type="text/javascript" src="frontend_links/multipage.js"></script>
            
        <?php include '../navigation/footer.php' ?>