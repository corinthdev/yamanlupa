

<link rel="shortcut icon" type="image/x-icon" href="frontend_links/backend_images/icon.png" />

        <?php include 'frontend_links/links.php'; ?>
        <?php include '../admin/authentication.php'; ?>
        <?php include '../navigation/header.php' ?>

            <!-- start banner Area -->
            <section class="banner-area relative about-banner" id="home">   
                <div class="overlay overlay-bg"></div>
                <div class="container">             
                    <div class="row d-flex align-items-center justify-content-center">
                        <div class="about-content col-lg-12">
                            <h1 class="text-white">
                                Calculator      
                            </h1>   
                            <p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="calculator.php"> Calculator  </a></p>
                        </div>  
                    </div>
                </div>
            </section>
            
        
            <!-- Start events-list Area -->
        <section class="events-list-area section-gap event-page-lists bg-light">
            <div class="container">
                <h1>Fertilizer Calculator  </h1><br>
                <hr>
                <div class="row">
                    <div class="col-lg-4 border"><br>
                        <h5>Fertilizer</h5><hr>
                        <form method="POST" action="fertilizer1.php">
                            <select class="form-control" id="crops1" >
                            <option selected="true" disabled>Select Plants</option>
                            <?php
                                include '../admin/connection.php'; 
                                $res = mysqli_query($conn, "SELECT * FROM lime_calculator ORDER BY id ASC");
                                while($row=mysqli_fetch_array($res))
                                {
                        
                                echo '<option value ="'.$row['crops'].'" required>'.$row['crops'].'</option>';
                                }
                            ?>
                            </select><br>
                            <input class="form-control" type="text" name="acidity" id="value_value1" placeholder="Acidity" readonly>
                            <div class="form-group">
                                <input class="form-control" type="text" name = "carbon" placeholder="Input Organic Carbon">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" name = "phosphorous" placeholder="Available Phosphorous">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" name = "potassium" placeholder="Available Potassium">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" name = "sulfur" placeholder="Available Sulfur">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" name = "zinc"  placeholder="Available Zinc">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-warning form-control" name="submit">Calculate</button>  
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-4">
                            <h5>Price List of Fertilizer</h5>
                            <table id="ylp_datatable" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Urea</th>
                                        <th>Phosphorous</th>
                                        <th>Total-K</th>
                                        <th>Total-S</th>
                                        <th>Total-ZN</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <br>
                                    <?php

                                         include '../admin/connection.php';
                                          $table = mysqli_query($conn, "SELECT * FROM fertilizer_price");
                                          while($row = mysqli_fetch_array($table)) { 

                                            $urea=$row['urea'];
                                            $phosphorous1=$row['phosphorous1'];
                                            $total_k=$row['total_k'];
                                            $total_s=$row['total_s'];
                                            $total_zn=$row['total_zn'];

                                        ?>
                                        <tr id="<?php echo $row['id'];?>">
                                           <td data-target="urea"><?php echo $row['urea']?></td> 
                                           <td data-target="phosphorous1"><?php echo $row['phosphorous1']?></td> 
                                           <td data-target="total_k"><?php echo $row['total_k']?></td> 
                                           <td data-target="total_s"><?php echo $row['total_s']?></td> 
                                           <td data-target="total_zn"><?php echo $row['total_zn']?></td> 
                                           <td>
                                            <a href="#" role='button' class='btn btn-warning' data-role = "update" data-id="<?php echo $row['id']; ?>">
                                              <i class="fa fa-edit"></i>
                                            </a>
                                           </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>  
        </section>
        <!-- Modal View Account-->
        <div class="modal fade" id="myModal" role="dialog">
          <div class="modal-dialog">
            <!-- Modal Content -->
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Products</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                    <div class="form-group">
                      <label><strong>UREA</strong></label>
                        <input class="form-control" type="text" id="urea">                  
                    </div>
                    <div class="form-group">
                      <label><strong>PHOSPHOROUS</strong></label>
                        <input class="form-control" type="text" id="phosphorous1">                  
                    </div>
                    <div class="form-group">
                      <label><strong>TOTAL-K</strong></label>
                        <input class="form-control" type="text" id="total_k">                  
                    </div>
                    <div class="form-group">
                      <label><strong>TOTAL-S</strong></label>
                        <input class="form-control" type="text" id="total_s">                  
                    </div>
                    <div class="form-group">
                      <label><strong>TOTAL-ZN</strong></label>
                        <input class="form-control" type="text" id="total_zn">                  
                    </div>
                    <input type="hidden" id="farmerId" class="form-control">
                    <div class="form-group">
                      <a href = "#" id="save" class="btn btn-success form-control"><i class="fa fa-save">&nbsp<strong>Save</strong></i></a>
                    </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              </div>
            </div>
        </div>
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
        <script type="text/javascript">
            $("#crops1").change(function () {
                $("#value_value1").val($(this).val());
            });
        </script>
        <script type="text/javascript" src="fertilizer_price.js"></script>
        <?php include '../navigation/footer.php' ?>
            
