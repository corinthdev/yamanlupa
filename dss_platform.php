	    <link rel="shortcut icon" type="image/x-icon" href="img/icon.png" />
        <?php include 'frontend_links/links.php'; ?>
        <?php include ("admin/auth.php"); ?>
        <?php include 'navigation/user_header.php'; ?>

        <!-- start banner Area -->
        <section class="banner-area relative about-banner" id="home">	
            <div class="overlay overlay-bg"></div>
            <div class="container">				
                <div class="row d-flex align-items-center justify-content-center">
                    <div class="about-content col-lg-12">
                        <h1 class="text-white">
                            DSS Platform				
                        </h1>	
                        <p class="text-white link-nav"><a href="/">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="/pages/dss_platform/dss_platform"> DSS Platform</a></p>
                    </div>	
                </div>
            </div>
        </section>
        <!-- End banner Area -->

        <!-- Start events-list Area -->
        <section class="events-list-area section-gap event-page-lists bg-light">
            <div class="container">
                <h1>DSS Platform</h1><hr>
                <h3>DSS Details</h3><br>
                <p class="text-black text-justify">
                    <em>A decision support system (DSS) is an information system that supports business or organizational decision-making activities. DSSs serve the management, operations and planning levels of an organization (usually mid and higher management) and help people make decisions about problems that may be rapidly changing and not easily specified in advance—i.e. unstructured and semi-structured decision problems. Decision support systems can be either fully computerized or human-powered, or a combination of both.<br><br>
                    In this DSS it provides help to farmers to know how much lime or fertilizer are they going to put in their soil and it also suggest where they can buy this agricultural product and recommend crops that depends on your soil analysis.</em>

                </p><br>
                <div class="row">
                    <div class="col-lg-12">
                        <h3>2016 Platform</h3><br>
                        <table id="dss_datatable" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Impormasyon ng Kalusugan ng Lupa</th>
                                    <th>Kritikal na Hangganan</th>
                                    <th>Obserbasyon</th>
                                    <th>Resulta</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                      include 'admin/connection.php';    
                                      $table = mysqli_query($conn, "SELECT * FROM dss_table_one");
                                      while($row = mysqli_fetch_array($table)) { 

                                        $id=$row['id'];
                                        $dss_info=$row['dss_info'];
                                        $dss_krit=$row['dss_krit'];
                                        $dss_observe=$row['dss_observe'];
                                        $dss_result=$row['dss_result'];

                                    ?>
                                    <tr id="<?php echo $row['id'];?>">
                                       <td data-target="id"><?php echo $row['id']?></td> 
                                       <td data-target="dss_info"><?php echo $row['dss_info']?></td> 
                                       <td data-target="dss_krit"><?php echo $row['dss_krit']?></td> 
                                       <td data-target="dss_observe"><?php echo $row['dss_observe']?></td> 
                                       <td data-target="dss_result"><?php echo $row['dss_result']?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-lg-12">
                        <h3>2014 Platform</h3><br>
                        <table id="dss_datatable1" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Impormasyon ng Kalusugan ng Lupa</th>
                                    <th>Kritikal na Hangganan</th>
                                    <th>Obserbasyon</th>
                                    <th>Resulta</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                      include 'admin/connection.php';    
                                      $table = mysqli_query($conn, "SELECT * FROM dss_table");
                                      while($row = mysqli_fetch_array($table)) { 

                                        $id=$row['id'];
                                        $dss_info=$row['dss_info'];
                                        $dss_krit=$row['dss_krit'];
                                        $dss_observe=$row['dss_observe'];
                                        $dss_result=$row['dss_result'];

                                    ?>
                                    <tr id="<?php echo $row['id'];?>">
                                       <td data-target="id"><?php echo $row['id']?></td> 
                                       <td data-target="dss_info"><?php echo $row['dss_info']?></td> 
                                       <td data-target="dss_krit"><?php echo $row['dss_krit']?></td> 
                                       <td data-target="dss_observe"><?php echo $row['dss_observe']?></td> 
                                       <td data-target="dss_result"><?php echo $row['dss_result']?></td> 
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>  
        </section>
        <!-- End events-list Area -->
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
        <script type="text/javascript">
            //for datatable
            $(document).ready(function() {
                $('#dss_datatable').DataTable();
            } );

            //for datatable
            $(document).ready(function() {
                $('#dss_datatable1').DataTable();
            } );
            // for delete js
            function delete2014(delid) {
                if(confirm("Do you want to delete this data?")){
                    window.location.href='delete_dss2014.php?del_id=' +delid+'';
                    return true;
                }
            }
            // for delete js
            function delete2016(delid) {
                if(confirm("Do you want to delete this data?")){
                    window.location.href='delete_dss2016.php?del_id=' +delid+'';
                    return true;
                }
            }
        </script>
            
        <?php include 'navigation/footer.php'; ?>