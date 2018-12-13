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
        <section class="events-list-area section-gap event-page-lists bg-light">
            <div class="container">
                <h1>Lime Calculator  </h1><br>
                <hr>
                <div class="row">
                    <div class="col-lg-4 border"><br>
                        <h6>Calculate your fertilizer rate here:</h6><hr>
                        <p>[(target Ph - current Ph)]</p>
                        <select class="form-control" id="crops" >
                            <option selected="true" disabled>Select Plants</option>
                            <?php
                                include 'admin/connection.php'; 
                                $res = mysqli_query($conn, "SELECT * FROM lime_calculator ORDER BY id ASC");
                                while($row=mysqli_fetch_array($res))
                                {
                        
                                echo '<option value ="'.$row['value'].'" required>'.$row['crops'].'</option>';
                                }
                            ?>
                            <input class="form-control" type="text" id="value_value" placeholder="Target Ph" readonly>
                        </select>
                        <select class="form-control" id="operators" readonly>
                            <option value="-">-</option>
                        </select>
                        <input class="form-control h5" type="text" id="current_ph" placeholder="Input Current PH">
                        <input type="button" class="btn btn-dark form-control" onClick="calc();" Value="Calculate " /><hr>
                        <p>[(6.6 - current Ph)]</p>
                        <input class="border form-control h5" id="default" value="6.6" readonly>
                        <select class="form-control" id="operators1" readonly>
                            <option value="-">-</option>
                        </select>
                        <input class="form-control h5" type="text" id="current_ph1" placeholder="Input Current PH">
                        <input type="button" class="btn btn-dark form-control" onClick="calc1();" Value="Calculate" /><hr>
                        <input class="border form-control h5" placeholder="total[(target Ph - current Ph)]" id="result" readonly>
                        <select class="form-control" id="operators2" readonly>
                            <option value="-">-</option>
                        </select>
                        <input class="border form-control h5" id="result1" placeholder="total[(6.6 - current Ph)]" readonly>
                        <input type="button" class="btn btn-dark form-control" onClick="totale()" Value="Calculate" />
                        <input class="border form-control h5" id="result3" placeholder="this is the total" readonly>
                        <input class="form-control h5" type="text" id="exchangeable_acid" placeholder="Input Exchangeable Acidity">
                        <input type="button" class="btn btn-success form-control" onClick="multiplyBy()" value="Total">
                        <span class="border form-control h5" id="result_one" readonly><p class="font-italic">this is the total acidity</p></span>
                    </div>
                </div>
            </div>  
        </section>
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
        <script type="text/javascript">
            function multiplyBy(object) 
            { 
                    num2 = document.getElementById("exchangeable_acid").value;
                    num1 = document.getElementById("result3").value;
                    var3 = document.getElementById("result_one").innerHTML = num2 * num1;
                    num3 = var3.toFixed(2);
                    alert("The total acidity is " + var3);
            }
        </script>
        <script type="text/javascript">

            function totale()
            {
                var n1 = parseFloat(document.getElementById('result').value);
                var n2 = parseFloat(document.getElementById('result1').value);
                
                oper = document.getElementById('operators2').value;
                
                if(oper === '-')
                {
                    total = document.getElementById('result3').value = n1-n2;
                }
            }

            function calc()
            {
                var n1 = parseFloat(document.getElementById('value_value').value);
                var n2 = parseFloat(document.getElementById('current_ph').value);
                
                oper = document.getElementById('operators').value;
                
                if(oper === '-')
                {
                    total = document.getElementById('result').value = n1-n2;
                }
            }

            function calc1()
            {
                var n1 = parseFloat(document.getElementById('default').value);
                var n2 = parseFloat(document.getElementById('current_ph1').value);
                
                oper = document.getElementById('operators1').value;
                
                if(oper === '-')
                {
                    total1 = document.getElementById('result1').value = n1-n2;
                    
                }
            }

        </script>      
        <script type="text/javascript">
            function divide()
            {
                var n1 = parseFloat(document.getElementById('value_value1').value);
                var n2 = parseFloat(document.getElementById('two').value);
                
                oper = document.getElementById('divide_two').value;
                
                if(oper === '/')
                {
                    total = document.getElementById('urea').value = n1/n2;
                    total = document.getElementById('ap').value = n1/n2;
                    total = document.getElementById('pota').value = n1/n2;
                    total = document.getElementById('sulf').value = n1/n2;
                    total = document.getElementById('zinc').value = n1/n2;
                }
            }
            
            function one()
            {
                var n1 = parseFloat(document.getElementById('urea').value);
                var n2 = parseFloat(document.getElementById('urea1').value);
                
                oper = document.getElementById('ureaop').value;
                
                if(oper === '*')
                {
                    total = document.getElementById('uresult').value = n1*n2;
                }
            }
            function twot()
            {
                var n1 = parseFloat(document.getElementById('ap').value);
                var n2 = parseFloat(document.getElementById('ap1').value);
                
                oper = document.getElementById('apop').value;
                
                if(oper === '*')
                {
                    total = document.getElementById('aptot').value = n1*n2;
                }
            }
            function three()
            {
                var n1 = parseFloat(document.getElementById('pota').value);
                var n2 = parseFloat(document.getElementById('pota1').value);
                
                oper = document.getElementById('potaop').value;
                
                if(oper === '*')
                {
                    total = document.getElementById('potare').value = n1*n2;
                }
            }
            function four()
            {
                var n1 = parseFloat(document.getElementById('sulf').value);
                var n2 = parseFloat(document.getElementById('sulf1').value);
                
                oper = document.getElementById('sulfop').value;
                
                if(oper === '*')
                {
                    total = document.getElementById('sulfres').value = n1*n2;
                }
            }
            function five()
            {
                var n1 = parseFloat(document.getElementById('zinc').value);
                var n2 = parseFloat(document.getElementById('zinc1').value);
                
                oper = document.getElementById('zincop').value;
                
                if(oper === '*')
                {
                    total = document.getElementById('zinctot').value = n1*n2;
                }
            }
        </script>         

        <?php include 'navigation/footer.php' ?>
            
