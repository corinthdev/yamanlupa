        <link rel="shortcut icon" type="image/x-icon" href="frontend_links/backend_images/icon.png" />        
        <?php include 'frontend_links/links.php'; ?>    
        <?php include '../navigation/header.php'; ?>
        <?php include ("../admin/authentication.php"); ?>

        <!-- start banner Area -->
        <section class="banner-area relative about-banner" id="home">	
            <div class="overlay overlay-bg"></div>
            <div class="container">				
                <div class="row d-flex align-items-center justify-content-center">
                    <div class="about-content col-lg-12">
                        <h1 class="text-white">
                            DSS Platform				
                        </h1>	
                        <p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="/pages/dss_platform/dss_platform"> DSS Platform</a></p>
                    </div>	
                </div>
            </div>
        </section>
        <!-- End banner Area -->

        <!-- Start events-list Area -->
        <section class="events-list-area section-gap event-page-lists bg-light">
            <div class="container">
            <center><h1>DSS Platform</h1></center><br><hr>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-12">
                                <a href="dss_compare.php" class="btn btn-warning btn-lg form-control" role = "button"><h4>TABLE COMPARISON</h4></a>
                            </div>
                        </div><br>
                        <h3>2014 Platform</h3><br><br>
                        <table id="dss_datatable1" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Impormasyon ng Kalusugan ng Lupa</th>
                                    <th>Kritikal na Hangganan</th>
                                    <th>Obserbasyon</th>
                                    <th>Resulta</th>
                                    <th><a href="dss_add_year2014.php" role="button" class="btn btn-success btn-md"><i class="fa fa-plus"></i></a></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                      include 'connection.php';    
                                      $table = mysqli_query($conn, "SELECT * FROM dss_table");
                                      while($row = mysqli_fetch_array($table)) { 

                                        $dss_info=$row['dss_info'];
                                        $dss_krit=$row['dss_krit'];
                                        $dss_observe=$row['dss_observe'];
                                        $dss_result=$row['dss_result'];

                                    ?>
                                    <tr>
                                       <td><?php echo $row['dss_info']?></td> 
                                       <td><?php echo $row['dss_krit']?></td> 
                                       <td><?php echo $row['dss_observe']?></td> 
                                       <td><?php echo $row['dss_result']?></td> 
                                       <td>
                                        <a role="button" class="btn btn-warning btn-md" href="update_dss2014.php?id=<?php echo $row['id'];?>">
                                          <i class="fa fa-edit"></i>
                                        </a>
                                        <button class = "btn btn-danger" onClick="delete2014(<?php echo $row['id']; ?>)"><i class="fa fa-trash"></i></button>
                                       </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div><br><hr>
                <div class="row">
                    <div class="col-lg-12">
                        <h3>2016 Platform</h3>
                        <table id="dss_datatable" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Impormasyon ng Kalusugan ng Lupa</th>
                                    <th>Kritikal na Hangganan</th>
                                    <th>Obserbasyon</th>
                                    <th>Resulta</th>
                                    <th><a href="dss_add_year2016.php" role="button" class="btn btn-success btn-md"><i class="fa fa-plus"></i></a></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                      include 'connection.php';    
                                      $table = mysqli_query($conn, "SELECT * FROM dss_table_one");
                                      while($row = mysqli_fetch_array($table)) { 

                                        $dss_info=$row['dss_info'];
                                        $dss_krit=$row['dss_krit'];
                                        $dss_observe=$row['dss_observe'];
                                        $dss_result=$row['dss_result'];

                                    ?>
                                    <tr>
                                       <td><?php echo $row['dss_info']?></td> 
                                       <td><?php echo $row['dss_krit']?></td> 
                                       <td><?php echo $row['dss_observe']?></td> 
                                       <td><?php echo $row['dss_result']?></td>
                                       <td>
                                        <a role="button" class="btn btn-warning btn-md" href="update_dss2016.php?id=<?php echo $row['id'];?>">
                                          <i class="fa fa-edit"></i>
                                        </a>
                                        <button class = "btn btn-danger" onClick="delete2016(<?php echo $row['id']; ?>)"><i class="fa fa-trash"></i></button>
                                       </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div><hr>
                </div><hr>
                <div class="row">
                    <div class="col-lg-12">
                        <h3>2018 Platform</h3>
                        <table id="dss_datatable2" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Impormasyon ng Kalusugan ng Lupa</th>
                                    <th>Kritikal na Hangganan</th>
                                    <th>Obserbasyon</th>
                                    <th>Resulta</th>
                                    <th><a href="dss_add_year2018.php" role="button" class="btn btn-success btn-md"><i class="fa fa-plus"></i></a></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                      include 'connection.php';    
                                      $table = mysqli_query($conn, "SELECT * FROM dss_table_two");
                                      while($row = mysqli_fetch_array($table)) { 

                                        $dss_info=$row['dss_info'];
                                        $dss_krit=$row['dss_krit'];
                                        $dss_observe=$row['dss_observe'];
                                        $dss_result=$row['dss_result'];

                                    ?>
                                    <tr>
                                       <td><?php echo $row['dss_info']?></td> 
                                       <td><?php echo $row['dss_krit']?></td> 
                                       <td><?php echo $row['dss_observe']?></td> 
                                       <td><?php echo $row['dss_result']?></td>
                                       <td>
                                        <a role="button" class="btn btn-warning btn-md" href="update_dss2018.php?id=<?php echo $row['id'];?>">
                                          <i class="fa fa-edit"></i>
                                        </a>
                                        <button class = "btn btn-danger" onClick="delete2018(<?php echo $row['id']; ?>)"><i class="fa fa-trash"></i></button>
                                       </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div><hr>
                </div>
            </div>  
        </section>
        <?php include '../navigation/footer.php'; ?>
        <!-- End events-list Area -->
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
        <script src="dss_js/dss_delete.js"></script>
            