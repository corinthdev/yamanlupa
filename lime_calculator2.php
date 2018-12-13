<link rel="shortcut icon" type="image/x-icon" href="frontend_links/backend_images/icon.png" />

        <?php include 'frontend_links/links.php'; ?>
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
            
        
            <!-- Start events-list Area -->
        <form id="form" method="post">
        <section class="events-list-area section-gap event-page-lists bg-light">
            <div class="container">
                <h1>Lime Calculator  </h1><br>
                <hr>

                <div class="row">
                    <div class="col-lg-4 border"><br>
                        <h6>Calculate your fertilizer rate here:</h6><hr>


                            <?php
                                    $servername = "localhost";
                                    $username = "root";
                                    $password = "";
                                    $dbname = "yamanlupa";

                                    $cropsselect = $_REQUEST['crops'];

                                    // Create connection
                                    $conn = new mysqli($servername, $username, $password, $dbname);
                                    // Check connection
                                    if ($conn->connect_error) {
                                        die("Connection failed: " . $conn->connect_error);
                                    } 

                                    $sql = "SELECT * FROM lime_calculator WHERE crops='$cropsselect'";
                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                        
                                        while($row = $result->fetch_assoc()) {
                                            
                                            $showvalue=$row['value'];
                                        }
                                        
                                    } else {
                                        echo "0 results";
                                    }
                                    $conn->close();
                            ?>


                        <label>Target PH</label>
                        <input readOnly="readOnly" class="form-control h5" value="<?php echo $showvalue;?>" name="targetph" type="text" id="target_ph">
                        <hr>
                        <input class="form-control h5" type="text" name="currentph" id="current_ph" placeholder="Input Current PH">
                        <hr>
                     
                        <input class="form-control h5" type="text" name="exacidity" id="ex_acidity" placeholder="Input Current Exchangeable Acidity">
                        <hr>
                        <button type="button" id="btn" class="btn btn-info" data-toggle="modal" data-target="#myModal">Calculate</button> 
                    </div>
                </div>
            </div>  
        </section>
        </form>


         <!-- The Modal -->
          <div class="modal" id="myModal">
            <div class="modal-dialog">
              <div class="modal-content">
              
                <!-- Modal Header -->
                <div class="modal-header">
                  <h4 class="modal-title">Lime Calculator Result:</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                
                <!-- Modal body -->
                  <div id="bingo">
                      

                  </div>

                
                <!-- Modal footer -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
                
              </div>
            </div>
          </div>




        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
        <script type="text/javascript">
            //for datatable
            $(document).ready(function() {
                $('#lime_datatable').DataTable();
            } );
        </script>
        <script type="text/javascript">
            $("#crops").change(function () {
                $("#value_value").val($(this).val());
            });
        </script>
        <script type="text/javascript">
            $("#crops1").change(function () {
                $("#value_value1").val($(this).val());
            });
        </script>


        <script>
        $(document).ready(function(){
            $("#btn").click(function(){
                var vtarget_ph = $("#target_ph").val();
                var vcurrent_ph = $("#current_ph").val();
                var vex_acidity = $("#ex_acidity").val();
             if(vcurrent_ph=='')
             {
                 alert("Please Enter Current PH");
             }
             else{
                $.post("limeresult.php", //Required URL of the page on server
                   { // Data Sending With Request To Server
                      target_ph:vtarget_ph,
                      current_ph:vcurrent_ph,
                      ex_acidity:vex_acidity,
                   },
             function(response,status){ // Required Callback Function
                 $("#bingo").html(response);//"response" receives - whatever written in echo of above PHP script.
                 $("#form")[0].reset();
              });
            }
         });
       });
    </script>
             

        <?php include 'navigation/footer.php' ?>
            
