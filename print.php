 
                <?php

                  require 'db/connect.php';

                  if (isset($_POST['submit'])) {
                    
                    $ph = $_POST['ph'];
                    $exchange = $_POST['exchange'];
                    $electricity = $_POST['electricity'];
                    $carbon = $_POST['carbon'];
                    $phosphorous = $_POST['phosphorous'];
                    $potassium = $_POST['potassium'];
                    $sulfur = $_POST['sulfur'];
                    $zinc = $_POST['zinc'];
                    $iron = $_POST['iron'];
                    $copper = $_POST['copper'];
                    $manganese = $_POST['manganese'];

                    $sql = "INSERT INTO soil_analysis(ph,exchange,electricity,carbon,phosphorous,potassium,sulfur,zinc,iron,copper,manganese) 
                            VALUES('$ph','$exchange','$electricity','$carbon','$phosphorous','$potassium','$sulfur','$zinc','$iron','$copper','$manganese')";
                         $query = mysqli_query($conn, $sql);

                         if($query){
                              $note= "SUCCESSFULLY REGISTERED SOIL NUTRIENTS";
                             }
                             else{
                              $alert= "ERROR";
                             }
                        
                  }
                ?>


                 <?php

                    require 'db/connect.php';

                    $sql = "SELECT * FROM info";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            
                            $code_show = $row['code'];
                            $pangalan_show = $row['pangalan'];
                            $barangay = $row['brgy'];
                            $bayan_show = $row['bayan'];
                            $lalawigan_show = $row['lalawigan'];
                            $lalim_show = $row['lalim'];
                            $sampling_show = $row['sampling'];
                        }
                        
                    } else {
                        echo "0 results";
                    }
                    $conn->close();
                ?>

                <?php
                    require 'db/connect.php';

                    $sql = "SELECT * FROM soil_analysis";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            
                            $ph_show = $row['ph'];
                            $exchange = $row['exchange'];
                            $electricity_show = $row['electricity'];
                            $carbon_show = $row['carbon'];
                            $phosphorous_show = $row['phosphorous'];
                            $potassium_show = $row['potassium'];
                            $sulfur_show = $row['sulfur'];
                            $zinc_show = $row['zinc'];
                            $iron_show = $row['iron'];
                            $copper_show = $row['copper'];
                            $manganese_show = $row['manganese'];


                        }
                        
                    } else {
                        echo "0 results";
                    }


                    $conn->close();
                ?>

                <!--START EDIT-->

                <!--N-->

                <?php

                           

                            if($carbon_show<="2"){
                                $rainfedWS_N="80";
                                $rainfedDS_N="80";
                                $uplandWS_N="90";
                                $mais_N = "120";
                                $mani_N="25";
                                $monngo_N="30";
                                $sigarilyas_N = "40";
                                $sitaw_N="40";
                                $kamotengkahoy_N = "50";
                                $gabi_N="20";
                                $kamatis_N = "80";
                                $ampalaya_N = "50";
                                $talong_N="80";
                                $okraH_N="100";
                                $okra_N = "80";
                                $kalabasa_N = "80";
                                $upo_N="60";
                                $patola_N = "60";
                                $fingpepper_N ="90";
                                $pechay_N="140";
                                $mustasa_N = "140";
                                $pakwan_N="60";
                                $repolyo_N="140";
                                $cauliflower_N="140";   
                                $spinach_N="120";
                                $sibuyas_N="60";
                                $luya_N = "70";
                                $muskmelon_N="40";
                                $carot_N="80";
                                $potato_N="70";
                                $chili_N="80";
                                $bellpepper_N="90";
                                $yam_N="50";
                               


                            }


                            else{


                                $rainfedWS_N=80/2;
                                $rainfedDS_N=80/2;
                                $uplandWS_N=90/2;
                                $mais_N = 120/2;
                                $mani_N=25/2;
                                $monngo_N=30/2;
                                $sigarilyas_N = 40/2;
                                $sitaw_N=40/2;
                                $kamotengkahoy_N = 50/2;
                                $gabi_N=20/2;
                                $kamatis_N = 80/2;
                                $ampalaya_N = 50/2;
                                $talong_N=80/2;
                                $okraH_N=100/2;
                                $okra_N = 80/2;
                                $kalabasa_N = 80/2;
                                $upo_N=60/2;
                                $patola_N = 60/2;
                                $fingpepper_N =90/2;
                                $pechay_N=140/2;
                                $mustasa_N = 140/2;
                                $pakwan_N=60/2;
                                $repolyo_N=140/2;
                                $cauliflower_N=140/2;   
                                $spinach_N=120/2;
                                $sibuyas_N=60/2;
                                $luya_N = 

                                70/2;
                                $muskmelon_N=40/2;
                                $carot_N=80/2;
                                $potato_N=70/2;
                                $chili_N=80/2;
                                $bellpepper_N=90/2;
                                $yam_N=50/2;


                            }

                ?>

                  <!--Phos-->

                <?php

                             if($phosphorous_show<="10"){

                                $rainfedWS_P="60";
                                $rainfedDS_P="60";
                                $uplandWS_P="60";
                                $mais_P = "60";
                                $mani_P="30";
                                $monngo_P="30";
                                $sigarilyas_P = "40";
                                $sitaw_P="40";
                                $kamotengkahoy_P = "40";
                                $gabi_P="50";
                                $kamatis_P = "90";
                                $ampalaya_P = "60";
                                $talong_P="60";
                                $okraH_P="60";
                                $okra_P = "60";
                                $kalabasa_P = "60";
                                $upo_P="60";
                                $patola_P = "60";
                                $fingpepper_P ="60";
                                $pechay_P="30";
                                $mustasa_P = "30";
                                $pakwan_P="90";
                                $repolyo_P="40";
                                $cauliflower_P="40";    
                                $spinach_P="40";
                                $sibuyas_P="60";
                                $luya_P = "40";
                                $muskmelon_P="75";
                                $carot_P="70";
                                $potato_P="40";
                                $chili_P="60";
                                $bellpepper_P="60";
                                $yam_P="60";
                               }

                               else{
                                     $rainfedWS_P=60/2;
                                $rainfedDS_P=60/2;
                                $uplandWS_P=60/2;
                                $mais_P = 60/2;
                                $mani_P=30/2;
                                $monngo_P=30/2;
                                $sigarilyas_P = 40/2;
                                $sitaw_P=40/2;
                                $kamotengkahoy_P = 40/2;
                                $gabi_P=50/2;
                                $kamatis_P = 90/2;
                                $ampalaya_P = 60/2;
                                $talong_P=60/2;
                                $okraH_P=60/2;
                                $okra_P = 60/2;
                                $kalabasa_P = 60/2;
                                $upo_P=60/2;
                                $patola_P = 60/2;
                                $fingpepper_P =60/2;
                                $pechay_P=30/2;
                                $mustasa_P = 30/2;
                                $pakwan_P=90/2;
                                $repolyo_P=40/2;
                                $cauliflower_P=40/2;    
                                $spinach_P=40/2;
                                $sibuyas_P=60/2;
                                $luya_P = 40/2;
                                $muskmelon_P=75/2;
                                $carot_P=70/2;
                                $potato_P=40/2;
                                $chili_P=60/2;
                                $bellpepper_P=60/2;
                                $yam_P=60/2;
                               }

                ?>

                  <!--Potassium-->

                <?php
                                 if($potassium_show<="75"){
                                $rainfedWS_K="60";
                                $rainfedDS_K="60";
                                $uplandWS_K="30";
                                $mais_K = "30";
                                $mani_K="30";
                                $monngo_K="40";
                                $sigarilyas_K = "45";
                                $sitaw_K="45";
                                $kamotengkahoy_K = "60";
                                $gabi_K="75";
                                $kamatis_K = "60";
                                $ampalaya_K = "30";
                                $talong_K="60";
                                $okraH_K="60";
                                $okra_K = "60";
                                $kalabasa_K = "40";
                                $upo_K="45";
                                $patola_K = "45";
                                $fingpepper_K ="120";
                                $pechay_K="60";
                                $mustasa_K = "60";
                                $pakwan_K="45";
                                $repolyo_K="60";
                                $cauliflower_K="45";    
                                $spinach_K="60";
                                $sibuyas_K="120";
                                $luya_K = "75";
                                $muskmelon_K="60";
                                $carot_K="75";
                                $potato_K="60";
                                $chili_K="75";
                                $bellpepper_K="120";
                                $yam_K="60";
                               }

                                else{

                                $rainfedWS_K=60/2;
                                $rainfedDS_K=60/2;
                                $uplandWS_K=30/2;
                                $mais_K = 30/2;
                                $mani_K=30/2;
                                $monngo_K=40/2;
                                $sigarilyas_K = 45/2;
                                $sitaw_K=45/2;
                                $kamotengkahoy_K = 60/2;
                                $gabi_K=75/2;
                                $kamatis_K = 60/2;
                                $ampalaya_K = 30/2;
                                $talong_K=60/2;
                                $okraH_K=60/2;
                                $okra_K = 60/2;
                                $kalabasa_K = 40/2;
                                $upo_K=45/2;
                                $patola_K = 45/2;
                                $fingpepper_K =120/2;
                                $pechay_K=60/2;
                                $mustasa_K = 60/2;
                                $pakwan_K=45/2;
                                $repolyo_K=60/2;
                                $cauliflower_K=45/2;    
                                $spinach_K=60/2;
                                $sibuyas_K=120/2;
                                $luya_K = 75/2;
                                $muskmelon_K=60/2;
                                $carot_K=75/2;
                                $potato_K=60/2;
                                $chili_K=75/2;
                                $bellpepper_K=120/2;
                                $yam_K= 60/2;


                                }
                ?>




                 <!--Sulfur-->

                <?php

                                    if($sulfur_show<="10"){

                                $rainfedWS_S="30";
                                $rainfedDS_S="30";
                                $uplandWS_S="30";
                                $mais_S="30";
                                $mani_S="75";
                                $monngo_S="30";
                                $sigarilyas_S="30";
                                $sitaw_S="30";
                                $kamotengkahoy_S="30";
                                $gabi_S="30";
                                $kamatis_S="30";
                                $ampalaya_S="30";
                                $talong_S="30";
                                $okraH_S="30";
                                $okra_S="30";
                                $kalabasa_S="30";
                                $upo_S="30";
                                $patola_S="30";
                                $fingpepper_S="30";
                                $pechay_S="30";
                                $mustasa_S="30";
                                $pakwan_S="30";
                                $repolyo_S="30";
                                $cauliflower_S="30";    
                                $spinach_S="30";
                                $sibuyas_S="30";
                                $luya_S="30";
                                $muskmelon_S="30";
                                $carot_S="30";
                                $potato_S="30";
                                $chili_S="30";
                                $bellpepper_S="30";
                                $yam_S="30";
                               }

                                else{

                               $rainfedWS_S=30/2;
                                $rainfedDS_S=30/2;
                                $uplandWS_S=30/2;
                                $mais_S=30/2;
                                $mani_S=75/2;
                                $monngo_S=30/2;
                                $sigarilyas_S=30/2;
                                $sitaw_S=30/2;
                                $kamotengkahoy_S=30/2;
                                $gabi_S=30/2;
                                $kamatis_S=30/2;
                                $ampalaya_S=30/2;
                                $talong_S=30/2;
                                $okraH_S=30/2;
                                $okra_S=30/2;
                                $kalabasa_S=30/2;
                                $upo_S=30/2;
                                $patola_S=30/2;
                                $fingpepper_S=30/2;
                                $pechay_S=30/2;
                                $mustasa_S=30/2;
                                $pakwan_S=30/2;
                                $repolyo_S=30/2;
                                $cauliflower_S=30/2;    
                                $spinach_S=30/2;
                                $sibuyas_S=30/2;
                                $luya_S=30/2;
                                $muskmelon_S=30/2;
                                $carot_S=30/2;
                                $potato_S=30/2;
                                $chili_S=30/2;
                                $bellpepper_S=30/2;
                                $yam_S=30/2;

                                }

                ?>

                  <!--Zinc-->

                <?php

                                if($zinc_show<="0.75"){

                                $rainfedWS_Z="10";
                                $rainfedDS_Z="10";
                                $uplandWS_Z="10";
                                $mais_Z="10";
                                $mani_Z="10";
                                $monngo_Z="10";
                                $sigarilyas_Z="10";
                                $sitaw_Z="10";
                                $kamotengkahoy_Z="10";
                                $gabi_Z="10";
                                $kamatis_Z="10";
                                $ampalaya_Z="10";
                                $talong_Z="10";
                                $okraH_Z="10";
                                $okra_Z="10";
                                $kalabasa_Z="10";
                                $upo_Z="10";
                                $patola_Z="10";
                                $fingpepper_Z="10";
                                $pechay_Z="10";
                                $mustasa_Z="10";
                                $pakwan_Z="10";
                                $repolyo_Z="10";
                                $cauliflower_Z="10";    
                                $spinach_Z="10";
                                $sibuyas_Z="10";
                                $luya_Z="10";
                                $muskmelon_Z="10";
                                $carot_Z="10";
                                $potato_Z="10";
                                $chili_Z="10";
                                $bellpepper_Z="10";
                                $yam_Z="10";
                               }
                               else{

                                $rainfedWS_Z=10/2;
                                $rainfedDS_Z=10/2;
                                $uplandWS_Z=10/2;
                                $mais_Z=10/2;
                                $mani_Z=10/2;
                                $monngo_Z=10/2;
                                $sigarilyas_Z=10/2;
                                $sitaw_Z=10/2;
                                $kamotengkahoy_Z=10/2;
                                $gabi_Z=10/2;
                                $kamatis_Z=10/2;
                                $ampalaya_Z=10/2;
                                $talong_Z=10/2;
                                $okraH_Z=10/2;
                                $okra_Z=10/2;
                                $kalabasa_Z=10/2;
                                $upo_Z=10/2;
                                $patola_Z=10/2;
                                $fingpepper_Z=10/2;
                                $pechay_Z=10/2;
                                $mustasa_Z=10/2;
                                $pakwan_Z=10/2;
                                $repolyo_Z=10/2;
                                $cauliflower_Z=10/2;    
                                $spinach_Z=10/2;
                                $sibuyas_Z=10/2;
                                $luya_Z=10/2;
                                $muskmelon_Z=10/2;
                                $carot_Z=10/2;
                                $potato_Z=10/2;
                                $chili_Z=10/2;
                                $bellpepper_Z=10/2;
                                $yam_Z=10/2;

                               }

                ?>


                <!--FORMULA FOR ZN--->

                 <?php 
                    $zinc_sulfate = ($rainfedWS_Z/20)*100;
                ?>

                <?php 

                    $zinc_sulfate2 = ($rainfedDS_Z/20)*100;
                ?>

                <?php 

                    $zinc_sulfate3 = ($uplandWS_Z/20)*100;
                ?>

                <?php 

                    $zinc_sulfate4 = ($mais_Z/20)*100;
                ?>

                <?php 

                    $zinc_sulfate5 = ($mani_Z/20)*100;
                ?>

                <?php 

                    $zinc_sulfate6 = ($monngo_Z/20)*100;
                ?>

                <?php 

                    $zinc_sulfate7 = ($sigarilyas_Z/20)*100;
                ?>

                <?php 

                    $zinc_sulfate8 = ($sitaw_Z/20)*100;
                ?>

                <?php 

                    $zinc_sulfate9 = ($kamotengkahoy_Z/20)*100;
                ?>

                <?php 

                    $zinc_sulfate10 = ($gabi_Z/20)*100;
                ?>

                <?php 

                    $zinc_sulfate11 = ($kamatis_Z/20)*100;
                ?>

                <?php 

                    $zinc_sulfate12 = ($ampalaya_Z/20)*100;
                ?>

                <?php 

                    $zinc_sulfate13 = ($talong_Z/20)*100;
                ?>

                <?php 

                    $zinc_sulfate14 = ($okraH_Z/20)*100;
                ?>

                <?php 

                    $zinc_sulfate15 = ($okra_Z/20)*100;
                ?>

                <?php 

                    $zinc_sulfate16 = ($kalabasa_Z/20)*100;
                ?>
                 <?php 

                    $zinc_sulfate17 = ($upo_Z/20)*100;
                ?>
                 <?php 

                    $zinc_sulfate18 = ($patola_Z/20)*100;
                ?>
                 <?php 

                    $zinc_sulfate19 = ($fingpepper_Z/20)*100;
                ?>
                 <?php 

                    $zinc_sulfate20 = ($pechay_Z/20)*100;
                ?>
                 <?php 

                    $zinc_sulfate21 = ($mustasa_Z/20)*100;
                ?>
                 <?php 

                    $zinc_sulfate22 = ($pakwan_Z/20)*100;
                ?>
                 <?php 

                    $zinc_sulfate23 = ($repolyo_Z/20)*100;
                ?>
                 <?php 

                    $zinc_sulfate24 = ($cauliflower_Z/20)*100;
                ?>
                 <?php 

                    $zinc_sulfate25 = ($spinach_Z/20)*100;
                ?>
                 <?php 

                    $zinc_sulfate26 = ($sibuyas_Z/20)*100;
                ?>
                 <?php 

                    $zinc_sulfate27 = ($luya_Z/20)*100;
                ?>
                 <?php 

                    $zinc_sulfate28 = ($muskmelon_Z/20)*100;
                ?>
                 <?php 

                    $zinc_sulfate29 = ($carot_Z/20)*100;
                ?>
                 <?php 

                    $zinc_sulfate30 = ($potato_Z/20)*100;
                ?>
                 <?php 

                    $zinc_sulfate31 = ($chili_Z/20)*100;
                ?>
                 <?php 

                    $zinc_sulfate32 = ($bellpepper_Z/20)*100;
                ?>
                 <?php 

                    $zinc_sulfate33 = ($yam_Z/20)*100;
                ?>


                <!--FORMULA FOR 21-0-24-S--->



                <?php
                    $sulfur= $rainfedWS_S-($zinc_sulfate*0.11);

                    $sulfurset = ($sulfur/24)*100;

                    $sulfuranswer = ($sulfurset*0.21);
                ?>


                <?php
                    $sulfur2= $rainfedDS_S-($zinc_sulfate2*0.11);

                    $sulfurset2 = ($sulfur2/24)*100;

                    $sulfuranswer2 = ($sulfurset2*0.21);                   
                ?>

                <?php
                    $sulfur3= $uplandWS_S-($zinc_sulfate3*0.11);

                    $sulfurset3 = ($sulfur3/24)*100;

                    $sulfuranswer3 = ($sulfurset3*0.21);                   
                ?>

                <?php
                    $sulfur4= $mais_S-($zinc_sulfate4*0.11);

                    $sulfurset4 = ($sulfur4/24)*100;

                    $sulfuranswer4 =($sulfurset4*0.21);
                ?>

                <?php
                    $sulfur5= $mani_S-($zinc_sulfate5*0.11);

                    $sulfurset5 = ($sulfur5/24)*100;

                    $sulfuranswer5 = ($sulfurset5*0.21);                   
                ?>

                <?php
                    $sulfur6= $monngo_S-($zinc_sulfate6*0.11);

                    $sulfurset6 = ($sulfur6/24)*100;

                    $sulfuranswer6 = ($sulfurset6*0.21);                   
                ?>

                <?php
                    $sulfur7= $sigarilyas_S-($zinc_sulfate7*0.11);

                    $sulfurset7 = ($sulfur7/24)*100;

                    $sulfuranswer7 =($sulfurset7*0.21);                   
                ?>

                <?php
                    $sulfur8= $sitaw_S-($zinc_sulfate8*0.11);

                    $sulfurset8 = ($sulfur8/24)*100;

                    $sulfuranswer8 = ($sulfurset8*0.21);
                ?>

                <?php
                    $sulfur9= $kamotengkahoy_S-($zinc_sulfate9*0.11);

                    $sulfurset9 = ($sulfur9/24)*100;

                    $sulfuranswer9 = ($sulfurset9*0.21);
                ?>

                <?php
                    $sulfur10= $gabi_S-($zinc_sulfate10*0.11);

                    $sulfurset10 = ($sulfur10/24)*100;

                    $sulfuranswer10 =($sulfurset10*0.21);                   
                ?>

                <?php
                    $sulfur11= $kamatis_S-($zinc_sulfate11*0.11);

                    $sulfurset11 = ($sulfur11/24)*100;

                    $sulfuranswer11 =($sulfurset11*0.21);
                ?>

                <?php
                    $sulfur12= $ampalaya_S-($zinc_sulfate12*0.11);

                    $sulfurset12 = ($sulfur12/24)*100;

                    $sulfuranswer12 = ($sulfurset12*0.21);
                ?>

                <?php
                    $sulfur13= $talong_S-($zinc_sulfate13*0.11);

                    $sulfurset13 = ($sulfur/24)*100;

                    $sulfuranswer13 = ($sulfurset13*0.21);                   
                ?>
                

                <?php
                    $sulfur14= $okraH_S-($zinc_sulfate14*0.11);

                    $sulfurset14 = ($sulfur14/24)*100;

                    $sulfuranswer14 =($sulfurset14*0.21);
                ?>

                <?php
                    $sulfur15= $okra_S-($zinc_sulfate15*0.11);

                    $sulfurset15 = ($sulfur15/24)*100;

                    $sulfuranswer15 =($sulfurset15*0.21);
                ?>

                <?php
                    $sulfur16= $kalabasa_S-($zinc_sulfate16*0.11);

                    $sulfurset16 = ($sulfur16/24)*100;

                    $sulfuranswer16 =($sulfurset16*0.21);
                ?>
                 <?php
                    $sulfur17= $upo_S-($zinc_sulfate17*0.11);

                    $sulfurset17 = ($sulfur17/24)*100;

                    $sulfuranswer17 =($sulfurset17*0.21);
                ?>
                 <?php
                    $sulfur18= $patola_S-($zinc_sulfate18*0.11);

                    $sulfurset18 = ($sulfur18/24)*100;

                    $sulfuranswer18 =($sulfurset18*0.21);
                ?>
                 <?php
                    $sulfur19= $fingpepper_S-($zinc_sulfate19*0.11);

                    $sulfurset19 = ($sulfur19/24)*100;

                    $sulfuranswer19 =($sulfurset19*0.21);
                ?>
                 <?php
                    $sulfur20= $pechay_S-($zinc_sulfate20*0.11);

                    $sulfurset20 = ($sulfur20/24)*100;

                    $sulfuranswer20 =($sulfurset20*0.21);
                ?>
                 <?php
                    $sulfur21= $mustasa_S-($zinc_sulfate21*0.11);

                    $sulfurset21 = ($sulfur21/24)*100;

                    $sulfuranswer21 =($sulfurset21*0.21);
                ?>
                 <?php
                    $sulfur22= $pakwan_S-($zinc_sulfate22*0.11);

                    $sulfurset22 = ($sulfur22/24)*100;

                    $sulfuranswer22 =($sulfurset22*0.21);
                ?>
                 <?php
                    $sulfur23= $repolyo_S-($zinc_sulfate23*0.11);

                    $sulfurset23 = ($sulfur23/24)*100;

                    $sulfuranswer23 =($sulfurset23*0.21);
                ?>
                 <?php
                    $sulfur24= $cauliflower_S-($zinc_sulfate24*0.11);

                    $sulfurset24 = ($sulfur24/24)*100;

                    $sulfuranswer24 =($sulfurset24*0.21);
                ?>
                 <?php
                    $sulfur25= $spinach_S-($zinc_sulfate25*0.11);

                    $sulfurset25 = ($sulfur25/24)*100;

                    $sulfuranswer25 =($sulfurset25*0.21);
                ?>
                 <?php
                    $sulfur26= $sibuyas_S-($zinc_sulfate26*0.11);

                    $sulfurset26 = ($sulfur26/24)*100;

                    $sulfuranswer26 =($sulfurset26*0.21);
                ?>
                 <?php
                    $sulfur27= $luya_S-($zinc_sulfate27*0.11);

                    $sulfurset27 = ($sulfur27/24)*100;

                    $sulfuranswer27 =($sulfurset27*0.21);
                ?>
                 <?php
                    $sulfur28= $muskmelon_S-($zinc_sulfate28*0.11);

                    $sulfurset28 = ($sulfur28/24)*100;

                    $sulfuranswer28 =($sulfurset28*0.21);
                ?>
                 <?php
                    $sulfur29= $carot_S-($zinc_sulfate29*0.11);

                    $sulfurset29 = ($sulfur29/24)*100;

                    $sulfuranswer29 =($sulfurset29*0.21);
                ?>
                 <?php
                    $sulfur30= $potato_S-($zinc_sulfate30*0.11);

                    $sulfurset30 = ($sulfur30/24)*100;

                    $sulfuranswer30 =($sulfurset30*0.21);
                ?>
                 <?php
                    $sulfur31= $chili_S-($zinc_sulfate31*0.11);

                    $sulfurset31 = ($sulfur31/24)*100;

                    $sulfuranswer31 =($sulfurset31*0.21);
                ?>
                 <?php
                    $sulfur32= $bellpepper_S-($zinc_sulfate32*0.11);

                    $sulfurset32 = ($sulfur32/24)*100;

                    $sulfuranswer32 =($sulfurset32*0.21);
                ?>
                 <?php
                    $sulfur33= $yam_S-($zinc_sulfate33*0.11);

                    $sulfurset33 = ($sulfur33/24)*100;

                    $sulfuranswer33 =($sulfurset33*0.21);
                ?>


                 <!--FORMULA FOR K20--->

                <?php

                    $potassium = ($rainfedWS_K/60)*100;
                ?>

                <?php

                    $potassium2 = ($rainfedDS_K/60)*100;
                ?>

                <?php

                    $potassium3 = ($uplandWS_K/60)*100;
                ?>

                <?php

                    $potassium4 = ($mais_K/60)*100;
                ?>

                <?php

                    $potassium5 = ($mani_K/60)*100;
                ?>

                <?php

                    $potassium6 = ($monngo_K/60)*100;
                ?>

                <?php

                    $potassium7 = ($sigarilyas_K/60)*100;
                ?>

                <?php

                    $potassium8 = ($sitaw_K/60)*100;
                ?>

                <?php

                    $potassium9 = ($kamotengkahoy_K/60)*100;
                ?>

                <?php

                    $potassium10 = ($gabi_K/60)*100;
                ?>

                <?php

                    $potassium11 = ($kamatis_K/60)*100;
                ?>

                <?php

                    $potassium12 = ($ampalaya_K/60)*100;
                ?>

                <?php

                    $potassium13 = ($talong_K/60)*100;
                ?>

                <?php

                    $potassium14 = ($okraH_K/60)*100;
                ?>

                <?php

                    $potassium15 = ($okra_K/60)*100;
                ?>

                <?php

                    $potassium16 = ($kalabasa_K/60)*100;
                ?>
                <?php

                    $potassium17 = ($upo_K/60)*100;
                ?>
                <?php

                    $potassium18 = ($patola_K/60)*100;
                ?>
                <?php

                    $potassium19 = ($fingpepper_K/60)*100;
                ?>
                <?php

                    $potassium20 = ($pechay_K/60)*100;
                ?>
                <?php

                    $potassium21 = ($mustasa_K/60)*100;
                ?>
                <?php

                    $potassium22 = ($pakwan_K/60)*100;
                ?>
                <?php

                    $potassium23 = ($repolyo_K/60)*100;
                ?>
                <?php

                    $potassium24 = ($cauliflower_K/60)*100;
                ?>
                <?php

                    $potassium25 = ($spinach_K/60)*100;
                ?>
                <?php

                    $potassium26 = ($sibuyas_K/60)*100;
                ?>
                <?php

                    $potassium27 = ($luya_K/60)*100;
                ?>
                <?php

                    $potassium28 = ($muskmelon_K/60)*100;
                ?>
                <?php

                    $potassium29 = ($carot_K/60)*100;
                ?>
                <?php

                    $potassium30 = ($potato_K/60)*100;
                ?>
                <?php

                    $potassium31 = ($chili_K/60)*100;
                ?>
                <?php

                    $potassium32 = ($bellpepper_K/60)*100;
                ?>
                <?php

                    $potassium33 = ($yam_K/60)*100;
                ?>



                 <!--FORMULA FOR P205-->

                <?php

                    $phos = ($rainfedWS_P/20)*100;

                    $phosanswer= $phos*0.16 ; 
                ?>

                <?php

                    $phos2 = ($rainfedDS_P/20)*100;

                    $phosanswer2= $phos2*0.16 ; 
                ?>

                <?php

                    $phos3 = ($uplandWS_P/20)*100;

                    $phosanswer3= $phos3*0.16 ; 
                ?>

                <?php

                    $phos4 = ($mais_P/20)*100;

                    $phosanswer4= $phos4*0.16 ; 
                ?>

                <?php

                    $phos5 = ($mani_P/20)*100;

                    $phosanswer5= $phos5*0.16 ; 
                ?>

                <?php

                    $phos6 = ($monngo_P/20)*100;

                    $phosanswer6= $phos6*0.16 ; 
                ?>

                <?php

                    $phos7 = ($sigarilyas_P/20)*100;

                    $phosanswer7= $phos7*0.16 ; 
                ?>

                <?php

                    $phos8 = ($sitaw_P/20)*100;

                    $phosanswer8= $phos8*0.16 ; 
                ?>

                <?php

                    $phos9 = ($kamotengkahoy_P/20)*100;

                    $phosanswer9= $phos9*0.16 ; 
                ?>

                <?php

                    $phos10 = ($gabi_P/20)*100;

                    $phosanswer10= $phos10*0.16 ; 
                ?>

                <?php

                    $phos11 = ($kamatis_P/20)*100;

                    $phosanswer11= $phos11*0.16 ; 
                ?>

                <?php

                    $phos12 = ($ampalaya_P/20)*100;

                    $phosanswer12= $phos12*0.16 ; 
                ?>

                <?php

                    $phos13 = ($talong_P/20)*100;

                    $phosanswer13= $phos13*0.16 ; 
                ?>

                <?php

                    $phos14 = ($okraH_P/20)*100;

                    $phosanswer14= $phos14*0.16 ; 
                ?>

                <?php

                    $phos15 = ($okra_P/20)*100;

                    $phosanswer15= $phos15*0.16 ; 
                ?>

                <?php

                    $phos16 = ($kalabasa_P/20)*100;

                    $phosanswer16= $phos16*0.16 ; 
                ?>
                 <?php

                    $phos17 = ($upo_P/20)*100;

                    $phosanswer17= $phos17*0.16 ; 
                ?>
                 <?php

                    $phos18 = ($patola_P/20)*100;

                    $phosanswer18= $phos18*0.16 ; 
                ?>
                 <?php

                    $phos19 = ($fingpepper_P/20)*100;

                    $phosanswer19= $phos19*0.16 ; 
                ?>
                 <?php

                    $phos20 = ($pechay_P/20)*100;

                    $phosanswer20= $phos20*0.16 ; 
                ?>
                 <?php

                    $phos21 = ($mustasa_P/20)*100;

                    $phosanswer21= $phos21*0.16 ; 
                ?>
                 <?php

                    $phos22 = ($pakwan_P/20)*100;

                    $phosanswer22= $phos22*0.16 ; 
                ?>
                 <?php

                    $phos23 = ($repolyo_P/20)*100;

                    $phosanswer23= $phos23*0.16 ; 
                ?>
                 <?php

                    $phos24 = ($cauliflower_P/20)*100;

                    $phosanswer24= $phos24*0.16 ; 
                ?>
                 <?php

                    $phos25 = ($spinach_P/20)*100;

                    $phosanswer25= $phos25*0.16 ; 
                ?>
                 <?php

                    $phos26 = ($sibuyas_P/20)*100;

                    $phosanswer26= $phos26*0.16 ; 
                ?>
                 <?php

                    $phos27 = ($luya_P/20)*100;

                    $phosanswer27= $phos27*0.16 ; 
                ?>
                 <?php

                    $phos28 = ($muskmelon_P/20)*100;

                    $phosanswer28= $phos28*0.16 ; 
                ?>
                 <?php

                    $phos29 = ($carot_P/20)*100;

                    $phosanswer29= $phos29*0.16 ; 
                ?>
                 <?php

                    $phos30 = ($potato_P/20)*100;

                    $phosanswer30= $phos30*0.16 ; 
                ?>
                 <?php

                    $phos31 = ($chili_P/20)*100;

                    $phosanswer31= $phos31*0.16 ; 
                ?>
                 <?php

                    $phos32 = ($bellpepper_P/20)*100;

                    $phosanswer32= $phos32*0.16 ; 
                ?>
                 <?php

                    $phos33 = ($yam_P/20)*100;

                    $phosanswer33= $phos33*0.16 ; 
                ?>



                 <!--FORMULA FOR UREA--->

                <?php

                    $ureaanswer = $sulfuranswer+$phosanswer;
                    $ureaanswer2 = $rainfedWS_N - $ureaanswer;


                    if($ureaanswer2<0){

                        $urea="0";
                    }

                    else{

                        $urea = ($ureaanswer2/46)*100;
                    }

                ?>

                <?php

                    $ureaanswer2 = $sulfuranswer2+$phosanswer2;
                    $ureaanswer22 = $rainfedDS_N - $ureaanswer2;


                    if($ureaanswer22<0){

                        $urea2="0";
                    }

                    else{

                        $urea2 = ($ureaanswer22/46)*100;
                    }

                ?>


                <?php
                    $ureaanswer3 = $sulfuranswer3+$phosanswer3;
                    $ureaanswer23 = $uplandWS_N - $ureaanswer3;
                     
                     if($ureaanswer23<0){

                        $urea3="0";
                    }

                    else{

                        $urea3 = ($ureaanswer23/46)*100;
                    }

                ?>

                <?php
                    $ureaanswer4 = $sulfuranswer4+$phosanswer4;
                    $ureaanswer24 = $mais_N - $ureaanswer4;
                    
                      if($ureaanswer24<0){

                        $urea4="0";
                    }

                    else{

                        $urea4 = ($ureaanswer24/46)*100;
                    }

                ?>

                <?php

                    $ureaanswer5 = $sulfuranswer5+$phosanswer5;
                    $ureaanswer25 = $mani_N - $ureaanswer5;
                    
                      if($ureaanswer25<0){

                        $urea5="0";
                    }

                    else{

                        $urea5 = ($ureaanswer25/46)*100;
                    }

                ?>

                <?php

                    $ureaanswer6 = $sulfuranswer6+$phosanswer6;
                    $ureaanswer26 = $monngo_N - $ureaanswer6;
                    
                      if($ureaanswer26<0){

                        $urea6="0";
                    }

                    else{

                        $urea6 = ($ureaanswer26/46)*100;
                    }

                ?>

                <?php

                    $ureaanswer7 = $sulfuranswer7+$phosanswer7;
                    $ureaanswer27 = $sigarilyas_N - $ureaanswer7;
                    
                      if($ureaanswer27<0){

                        $urea7="0";
                    }

                    else{

                        $urea7 = ($ureaanswer27/46)*100;
                    }

                ?>

                <?php

                    $ureaanswer8 = $sulfuranswer8+$phosanswer8;
                    $ureaanswer28 = $sitaw_N - $ureaanswer8;


                    if($ureaanswer28<0){

                        $urea8="0";
                    }

                    else{

                        $urea8 = ($ureaanswer28/46)*100;
                    }

                    

                ?>

                <?php

                     $ureaanswer9 = $sulfuranswer9+$phosanswer9;
                    $ureaanswer29 = $kamotengkahoy_N - $ureaanswer9;


                    if($ureaanswer29<0){

                        $urea9="0";
                    }

                    else{

                        $urea9 = ($ureaanswer29/46)*100;
                    }

                ?>

                <?php

                     $ureaanswer10 = $sulfuranswer10+$phosanswer10;
                    $ureaanswer30 = $gabi_N - $ureaanswer10;


                    if($ureaanswer30<0){

                        $urea10="0";
                    }

                    else{

                        $urea10 = ($ureaanswer30/46)*100;
                    }

                ?>

                <?php

                       $ureaanswer11 = $sulfuranswer11+$phosanswer11;
                    $ureaanswer31 = $kamatis_N - $ureaanswer11;


                    if($ureaanswer31<0){

                        $urea11="0";
                    }

                    else{

                        $urea11 = ($ureaanswer31/46)*100;
                    }

                ?>

                <?php

                       $ureaanswer12 = $sulfuranswer12+$phosanswer12;
                    $ureaanswer32 = $ampalaya_N - $ureaanswer12;


                    if($ureaanswer32<0){

                        $urea12="0";
                    }

                    else{

                        $urea12 = ($ureaanswer32/46)*100;
                    }

                ?>

                <?php

                       $ureaanswer13 = $sulfuranswer13+$phosanswer13;
                    $ureaanswer33 = $talong_N - $ureaanswer13;


                    if($ureaanswer33<0){

                        $urea13="0";
                    }

                    else{

                        $urea13 = ($ureaanswer33/46)*100;
                    }

                ?>


                <?php

                       $ureaanswer14 = $sulfuranswer14+$phosanswer14;
                    $ureaanswer34 = $okraH_N - $ureaanswer14;


                    if($ureaanswer34<0){

                        $urea14="0";
                    }

                    else{

                        $urea14 = ($ureaanswer34/46)*100;
                    }

                ?>

                <?php

                       $ureaanswer15 = $sulfuranswer15+$phosanswer15;
                    $ureaanswer35 = $okra_N - $ureaanswer15;


                    if($ureaanswer35<0){

                        $urea15="0";
                    }

                    else{

                        $urea15 = ($ureaanswer35/46)*100;
                    }

                ?>

                <?php

                       $ureaanswer16 = $sulfuranswer16+$phosanswer16;
                    $ureaanswer36 = $kalabasa_N - $ureaanswer16;


                    if($ureaanswer36<0){

                        $urea16="0";
                    }

                    else{

                        $urea16 = ($ureaanswer36/46)*100;
                    }

                ?>
                  <?php

                       $ureaanswer17 = $sulfuranswer17+$phosanswer17;
                    $ureaanswer37 = $upo_N - $ureaanswer17;


                    if($ureaanswer37<0){

                        $urea17="0";
                    }

                    else{

                        $urea17 = ($ureaanswer37/46)*100;
                    }

                ?>
                  <?php

                       $ureaanswer18 = $sulfuranswer18+$phosanswer18;
                    $ureaanswer38 = $patola_N - $ureaanswer18;


                    if($ureaanswer38<0){

                        $urea18="0";
                    }

                    else{

                        $urea18 = ($ureaanswer38/46)*100;
                    }

                ?>
                  <?php

                       $ureaanswer19 = $sulfuranswer19+$phosanswer19;
                    $ureaanswer39 = $fingpepper_N - $ureaanswer19;


                    if($ureaanswer39<0){

                        $urea19="0";
                    }

                    else{

                        $urea19 = ($ureaanswer39/46)*100;
                    }

                ?>
                  <?php

                       $ureaanswer20 = $sulfuranswer20+$phosanswer20;
                    $ureaanswer40 = $pechay_N - $ureaanswer20;


                    if($ureaanswer40<0){

                        $urea20="0";
                    }

                    else{

                        $urea20 = ($ureaanswer40/46)*100;
                    }

                ?>
                  <?php

                       $ureaanswer21 = $sulfuranswer21+$phosanswer21;
                    $ureaanswer41 = $mustasa_N - $ureaanswer21;


                    if($ureaanswer41<0){

                        $urea21="0";
                    }

                    else{

                        $urea21 = ($ureaanswer41/46)*100;
                    }

                ?>
                  <?php

                       $ureaanswerr22 = $sulfuranswer22+$phosanswer22;
                    $ureaanswer42 = $pakwan_N - $ureaanswerr22;


                    if($ureaanswer42<0){

                        $urea22="0";
                    }

                    else{

                        $urea22 = ($ureaanswer42/46)*100;
                    }

                ?>
                    <?php

                       $ureaanswerr23 = $sulfuranswer23+$phosanswer23;
                    $ureaanswer43 = $repolyo_N - $ureaanswerr23;


                    if($ureaanswer43<0){

                        $urea23="0";
                    }

                    else{

                        $urea23 = ($ureaanswer43/46)*100;
                    }

                ?>
                  <?php

                       $ureaanswerr24 = $sulfuranswer24+$phosanswer24;
                    $ureaanswer44 = $cauliflower_N - $ureaanswerr24;


                    if($ureaanswer44<0){

                        $urea24="0";
                    }

                    else{

                        $urea24 = ($ureaanswer44/46)*100;
                    }

                ?>
                  <?php

                       $ureaanswerr25 = $sulfuranswer25+$phosanswer25;
                    $ureaanswer45 = $spinach_N - $ureaanswerr25;


                    if($ureaanswer45<0){

                        $urea25="0";
                    }

                    else{

                        $urea25 = ($ureaanswer45/46)*100;
                    }

                ?>
                <?php

                       $ureaanswerr26 = $sulfuranswer26+$phosanswer26;
                    $ureaanswer46 = $sibuyas_N - $ureaanswerr26;


                    if($ureaanswer46<0){

                        $urea26="0";
                    }

                    else{

                        $urea26 = ($ureaanswer46/46)*100;
                    }

                ?>
                <?php

                       $ureaanswerr27 = $sulfuranswer27+$phosanswer27;
                    $ureaanswer47 = $luya_N - $ureaanswerr27;


                    if($ureaanswer47<0){

                        $urea27="0";
                    }

                    else{

                        $urea27 = ($ureaanswer47/46)*100;
                    }

                ?>
                  <?php

                       $ureaanswerr28 = $sulfuranswer28+$phosanswer28;
                    $ureaanswer48 = $muskmelon_N - $ureaanswerr28;


                    if($ureaanswer48<0){

                        $urea28="0";
                    }

                    else{

                        $urea28 = ($ureaanswer48/46)*100;
                    }

                ?>
                   <?php

                       $ureaanswerr29 = $sulfuranswer29+$phosanswer29;
                    $ureaanswer49 = $carot_N - $ureaanswerr29;


                    if($ureaanswer49<0){

                        $urea29="0";
                    }

                    else{

                        $urea29 = ($ureaanswer49/46)*100;
                    }

                ?>
                  <?php

                       $ureaanswerr30 = $sulfuranswer30+$phosanswer30;
                    $ureaanswer50 = $potato_N - $ureaanswerr30;


                    if($ureaanswer50<0){

                        $urea30="0";
                    }

                    else{

                        $urea30 = ($ureaanswer50/46)*100;
                    }

                ?>
                <?php

                       $ureaanswerr31 = $sulfuranswer31+$phosanswer31;
                    $ureaanswer51 = $chili_N - $ureaanswerr31;


                    if($ureaanswer51<0){

                        $urea31="0";
                    }

                    else{

                        $urea31 = ($ureaanswer51/46)*100;
                    }

                ?>
                 <?php

                       $ureaanswerr32 = $sulfuranswer32+$phosanswer32;
                    $ureaanswer52 = $bellpepper_N - $ureaanswerr32;


                    if($ureaanswer52<0){

                        $urea32="0";
                    }

                    else{

                        $urea32 = ($ureaanswer52/46)*100;
                    }

                ?>
                   <?php

                       $ureaanswerr33 = $sulfuranswer33+$phosanswer33;
                    $ureaanswer53 = $yam_N - $ureaanswerr33;


                    if($ureaanswer53<0){

                        $urea33="0";
                    }

                    else{

                        $urea33 = ($ureaanswer53/46)*100;
                    }

                ?>

                
                <?php 
                $rainfedRice = "6";
                $default = "6.6";
                $default1 = "907.5";
                $total = ($rainfedRice-$ph_show)/($default-$ph_show);
                
                   if($total<0){

                        $total1="0";
                    }

                    else{

                         $total1 = ($total*$exchange)*$default1;
                    }
               
                ?>
                <?php 
                $rainfedRiceD = "6";
                $default = "6.6";
                $default1 = "907.5";
                $total_1 = ($rainfedRiceD-$ph_show)/($default-$ph_show);
                    if($total_1<0){

                        $total2="0";
                    }

                    else{

                         $total2 = ($total_1*$exchange)*$default1;
                    }
                ?>
                <?php 
                $uplandRiceD = "6";
                $default = "6.6";
                $default1 = "907.5";
                $total_2 = ($uplandRiceD-$ph_show)/($default-$ph_show);
                     if($total_2<0){

                        $total3="0";
                    }

                    else{

                         $total3 = ($total_2*$exchange)*$default1;
                    }
                ?>
                <?php 
                $cornph = "6.3";
                $default = "6.6";
                $default1 = "907.5";
                $total_3 = ($cornph-$ph_show)/($default-$ph_show);
                  if($total_3<0){

                        $total4="0";
                    }

                    else{

                         $total4 = ($total_3*$exchange)*$default1;
                    }
              
                ?>
                <?php 
                $peanutph = "6.25";
                $default = "6.6";
                $default1 = "907.5";
                $total_4 = ($peanutph-$ph_show)/($default-$ph_show);
                    if($total_4<0){

                        $total5="0";
                    }

                    else{

                         $total5 = ($total_4*$exchange)*$default1;
                    }
              
                ?>
                <?php 
                $mungbeanph = "6.7";
                $default = "6.6";
                $default1 = "907.5";
                $total_5 = ($mungbeanph-$ph_show)/($default-$ph_show);
                    if($total_5<0){

                        $total6="0";
                    }

                    else{

                         $total6 = ($total_5*$exchange)*$default1;
                    }
               
                ?>
                <?php 
                $wingbeansph = "6.15";
                $default = "6.6";
                $default1 = "907.5";
                $total_6 = ($wingbeansph-$ph_show)/($default-$ph_show);
                 if($total_6<0){

                        $total7="0";
                    }

                    else{

                         $total7 = ($total_6*$exchange)*$default1;
                    }
               
                ?>
                <?php 
                $stringbeanph = "6.5";
                $default = "6.6";
                $default1 = "907.5";
                $total_7 = ($stringbeanph-$ph_show)/($default-$ph_show);
                      if($total_7<0){

                        $total8="0";
                    }

                    else{

                         $total8 = ($total_7*$exchange)*$default1;
                    }
                
                ?>
                <?php 
                $cassavaph = "5.65";
                $default = "6.6";
                $default1 = "907.5";
                $total_8 = ($cassavaph-$ph_show)/($default-$ph_show);
                if($total_8<0){

                        $total9="0";
                    }

                    else{

                         $total9 = ($total_8*$exchange)*$default1;
                    }
              
                ?>
                <?php 
                $taroph = "6";
                $default = "6.6";
                $default1 = "907.5";
                $total_9 = ($taroph-$ph_show)/($default-$ph_show);
                if($total_9<0){

                        $total10="0";
                    }

                    else{

                         $total10 = ($total_9*$exchange)*$default1;
                    }
               
                ?>
                <?php 
                $tomatoph = "6";
                $default = "6.6";
                $default1 = "907.5";
                $total_10 = ($tomatoph-$ph_show)/($default-$ph_show);
                if($total_10<0){

                        $total11="0";
                    }

                    else{

                         $total11 = ($total_10*$exchange)*$default1;
                    }
               
                
                ?>
                <?php 
                $ampalayap = "6.35";
                $default = "6.6";
                $default1 = "907.5";
                $total_11 = ($ampalayap-$ph_show)/($default-$ph_show);
                if($total_11<0){

                        $total12="0";
                    }

                    else{

                         $total12 = ($total_11*$exchange)*$default1;
                    }
               
                ?>
                <?php 
                $talongph = "5.75";
                $default = "6.6";
                $default1 = "907.5";
                $total_12 = ($talongph-$ph_show)/($default-$ph_show);
                if($total_12<0){

                        $total13="0";
                    }

                    else{

                         $total13 = ($total_12*$exchange)*$default1;
                    }
               
                ?>
                <?php 
                $okrahph = "6.15";
                $default = "6.6";
                $default1 = "907.5";
                $total_13 = ($okrahph-$ph_show)/($default-$ph_show);
                  if($total_13<0){

                        $total14="0";
                    }

                    else{

                         $total14 = ($total_13*$exchange)*$default1;
                    }
               
                ?>
                <?php 
                $okralph = "6.75";
                $default = "6.6";
                $default1 = "907.5";
                $total_14 = ($okralph-$ph_show)/($default-$ph_show);
                if($total_14<0){

                        $total15="0";
                    }

                    else{

                         $total15 = ($total_14*$exchange)*$default1;
                    }
              
                ?>
                <?php 
                $kalabasaph = "6.25";
                $default = "6.6";
                $default1 = "907.5";
                $total_15 = ($kalabasaph-$ph_show)/($default-$ph_show);
                if($total_15<0){

                        $total16="0";
                    }

                    else{

                         $total16 = ($total_15*$exchange)*$default1;
                    }
               
                ?>
                <?php 
                $upoph = "7";
                $default = "6.6";
                $default1 = "907.5";
                $total_16 = ($upoph-$ph_show)/($default-$ph_show);
                  if($total_16<0){

                        $total17="0";
                    }

                    else{

                         $total17 = ($total_16*$exchange)*$default1;
                    }
              
                ?>
                <?php 
                $patolaph = "7";
                $default = "6.6";
                $default1 = "907.5";
                $total_17 = ($patolaph-$ph_show)/($default-$ph_show);
                 if($total_17<0){

                        $total18="0";
                    }

                    else{

                         $total18 = ($total_17*$exchange)*$default1;
                    }
                
                ?>
                 <?php 
                $fingerph = "6.5";
                $default = "6.6";
                $default1 = "907.5";
                $total_18 = ($fingerph-$ph_show)/($default-$ph_show);
                 if($total_18<0){

                        $total19="0";
                    }

                    else{

                         $total19 = ($total_18*$exchange)*$default1;
                    }
                
                ?>
                <?php 
                $petchayph = "6";
                $default = "6.6";
                $default1 = "907.5";
                $total_19 = ($petchayph-$ph_show)/($default-$ph_show);
                 if($total_19<0){

                        $total20="0";
                    }

                    else{

                         $total20 = ($total_19*$exchange)*$default1;
                    }
                
                ?>
                <?php 
                $mustardph = "6.15";
                $default = "6.6";
                $default1 = "907.5";
                $total_20 = ($mustardph-$ph_show)/($default-$ph_show);
                 if($total_20<0){

                        $total21="0";
                    }

                    else{

                         $total21 = ($total_20*$exchange)*$default1;
                    }
               
                ?>
                <?php 
                $pakwanph = "6";
                $default = "6.6";
                $default1 = "907.5";
                $total_21 = ($pakwanph-$ph_show)/($default-$ph_show);
                if($total_21<0){

                        $total22="0";
                    }

                    else{

                         $total22 = ($total_21*$exchange)*$default1;
                    }
               
                ?>
                  <?php 
                $cabbageph = "6.65";
                $default = "6.6";
                $default1 = "907.5";
                $total_22 = ($cabbageph-$ph_show)/($default-$ph_show);
                 if($total_22<0){

                        $total23="0";
                    }

                    else{

                         $total23 = ($total_22*$exchange)*$default1;
                    }
               
                
                ?>
                  <?php 
                $cauliph = "6.65";
                $default = "6.6";
                $default1 = "907.5";
                $total_23 = ($cauliph-$ph_show)/($default-$ph_show);
                   if($total_23<0){

                        $total24="0";
                    }

                    else{

                         $total24 = ($total_23*$exchange)*$default1;
                    }
               
                ?>
                 
                <?php 
                $spinachph = "6.75";
                $default = "6.6";
                $default1 = "907.5";
                $total_24 = ($spinachph-$ph_show)/($default-$ph_show);
                  if($total_24<0){

                        $total25="0";
                    }

                    else{

                         $total25 = ($total_24*$exchange)*$default1;
                    }
               
                ?>
                <?php 
                $onionph = "6.5";
                $default = "6.6";
                $default1 = "907.5";
                $total_25 = ($onionph-$ph_show)/($default-$ph_show);
                 if($total_25<0){

                        $total26="0";
                    }

                    else{

                         $total26 = ($total_25*$exchange)*$default1;
                    }
                
                ?>
                <?php 
                $luyaph = "6.9";
                $default = "6.6";
                $default1 = "907.5";
                $total_26 = ($luyaph-$ph_show)/($default-$ph_show);
                 if($total_26<0){

                        $total27="0";
                    }

                    else{

                         $total27 = ($total_26*$exchange)*$default1;
                    }
                
                ?>
                <?php 
                $muskph = "6.25";
                $default = "6.6";
                $default1 = "907.5";
                $total_27 = ($muskph-$ph_show)/($default-$ph_show);
                 if($total_27<0){

                        $total28="0";
                    }

                    else{

                         $total28 = ($total_27*$exchange)*$default1;
                    }
              
                ?> 
                <?php 
                $potatoph = "5.65";
                $default = "6.6";
                $default1 = "907.5";
                $total_28 = ($potatoph-$ph_show)/($default-$ph_show);
                if($total_28<0){

                        $total29="0";
                    }

                    else{

                         $total29 = ($total_28*$exchange)*$default1;
                    }
              
                ?>
                <?php 
                $carrotph = "6.4";
                $default = "6.6";
                $default1 = "907.5";
                $total_29 = ($carrotph-$ph_show)/($default-$ph_show);
                 if($total_29<0){

                        $total30="0";
                    }

                    else{

                         $total30 = ($total_29*$exchange)*$default1;
                    }
                
                ?>
                <?php 
                $chiliph = "5.5";
                $default = "6.6";
                $default1 = "907.5";
                $total_30 = ($chiliph-$ph_show)/($default-$ph_show);
                  if($total_30<0){

                        $total31="0";
                    }

                    else{

                         $total31 = ($total_30*$exchange)*$default1;
                    }
                
                ?>
                <?php 
                $belph = "6.25";
                $default = "6.6";
                $default1 = "907.5";
                $total_31 = ($belph-$ph_show)/($default-$ph_show);
                  if($total_31<0){

                        $total32="0";
                    }

                    else{

                         $total32 = ($total_31*$exchange)*$default1;
                    }
                
                ?>
                  <?php 
                $yamph = "5.5";
                $default = "6.6";
                $default1 = "907.5";
                $total_32 = ($yamph-$ph_show)/($default-$ph_show);
                  if($total_32<0){

                        $total33="0";
                    }

                    else{

                         $total33 = ($total_32*$exchange)*$default1;
                    }
                ?>


    <link rel="shortcut icon" type="image/x-icon" href="img/icon.png" />
    <link rel="stylesheet" type="text/css" href="frontend_links/multipage.css">
    <?php include 'frontend_links/links.php'; ?>




        <div class="container"><br>
            <div class="row">
                <div class="col-lg-12">
                    <a class="btn btn-warning btn-lg text-dark" href="soil_card3.php">
                        <i class="fa fa-arrow-left">&nbsp<strong>BACK</strong></i>
                    </a>
                    <a class="btn btn-primary btn-lg text-white" onclick="PrintDiv();">
                        <i class="fa fa-print">&nbsp<strong>PRINT</strong></i>
                    </a>
                </div>
            </div>
            <div id="divToPrint">
            <div class="row">
                    <div class="col-lg-12 text-center">
                        <table width="100%" cellspacing="0">
                            <tr class="text-center">
                                <th><em>Yamang Lupa Program</em></th>
                            </tr>
                            <tr class="text-center">
                                <th><em>Region IV-A</em></th>
                            </tr>
                            <tr class="text-center">
                                <th>Soil Health Card</th>
                            </tr>
                        </table>
                    </div>
                <div class="col-lg-12 border"><br>
                    <h4>Code: <?php echo $code_show;?></h4>
                    <table width="100%"   border = "2 cellspacing="0">
                        <h4 align="center">Pangunahing Impormasyon</h4>
                        <hr>
                        <tr>
                            <th>Pangalan:</th>
                            <td>&nbsp;&nbsp;&nbsp;<?php echo $pangalan_show;?></td>
                        </tr>
                        <tr>
                            <th>Barangay:</th>
                            <td>&nbsp;&nbsp;&nbsp;<?php echo $barangay;?></td>
                        </tr>
                        <tr>
                            <th>Bayan:</th>
                            <td>&nbsp;&nbsp;&nbsp;<?php echo $bayan_show;?></td>
                        </tr>
                        <tr>
                            <th>Lalawigan:</th>
                            <td>&nbsp;&nbsp;&nbsp;<?php echo $lalawigan_show;?></td>
                        </tr>
                        <tr>
                            <th>Lalim:</th>
                            <td>&nbsp;&nbsp;&nbsp;<?php echo $lalim_show;?></td>
                        </tr>
                        <tr>
                            <th>Sampling:</th>
                            <td>&nbsp;&nbsp;&nbsp;<?php echo $sampling_show;?></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 border"><br>
                    <h4 align="center">Resulta ng Soil Analysis</h4><br>

                    <table width="100%"   border = "2 cellspacing="0">
                      <thead>
                        <tr>
                          <th scope="col">Impormasyon sa Kalusugan ng Lupa</th>
                          <th scope="col">Kritikal na Hangganan</th>
                          <th scope="col">Obserbasyon</th>
                          <th scope="col">Resulta</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">pH ng Lupa</th>
                          <td>-</td>
                          <td><?php echo $ph_show;?></td>
                          <td>
                              <?php 
                                if($ph_show<=5.9){
                                    echo "Maasim";
                                }else if($ph_show <= 6.9 && 6.0 ){
                                    echo "Normal";
                                }else if($ph_show >= 7) {
                                    echo "Di Maasim";
                                }
                                
                              ?>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">Electrical Conductivity</th>
                          <td>>0.8</td>
                          <td><?php echo $electricity_show;?></td>
                          <td><?php 
                                if($electricity_show<0.8){
                                    echo "Normal";
                                }

                                else{
                                    echo "Di Normal";
                                }
                              ?></td>
                        </tr>
                        <tr>
                            <th colspan="12" class="text-center">Pangunahing Elemento</th>
                        </tr>
                        <tr>
                          <th scope="row">Organic Carbon</th>
                          <td>>2.0</td>
                          <td><?php echo $carbon_show;?></td>
                          <td>
                              <?php 
                                if($carbon_show<=2){
                                    echo "Di Sapat";
                                }

                                else{
                                    echo "Sapat";
                                }
                              ?>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">Available Phosphorous(ppm)</th>
                          <td>>10</td>
                          <td><?php echo $phosphorous_show;?></td>
                          <td> <?php 
                                if($phosphorous_show<=10){
                                    echo "Di Sapat";
                                }

                                else{
                                    echo "Sapat";
                                }
                              ?></td>
                        </tr>

                        <tr>
                          <th scope="row">Available Potassium(ppm)</th>
                          <td>>75</td>
                          <td><?php echo $potassium_show;?></td>
                          <td> <?php 
                                if($potassium_show<=75){
                                    echo "Di Sapat";
                                }

                                else{
                                    echo "Sapat";
                                }
                              ?></td>
                        </tr>
                        </tbody>
                        <tr>
                            <th colspan="12" class="text-center">Sekondaryo Elemento</th>
                        </tr>

                        <tr>
                          <th scope="row">Available Sulfur(ppm)</th>
                          <td>>10</td>
                          <td><?php echo $sulfur_show;?></td>
                          <td>
                              <?php 
                                if($sulfur_show<=10){
                                    echo "Di Sapat";
                                }

                                else{
                                    echo "Sapat";
                                }
                              ?>
                          </td>
                        </tr>
                        <tr>
                            <th colspan="12" class="text-center">Mirco Nutrients</th>
                        </tr>

                            <tr>
                              <th scope="row">Available Zinc(ppm)</th>
                              <td>>0.75</td>
                              <td><?php echo $zinc_show;?></td>
                              <td>
                                  <?php 
                                    if($zinc_show<=.75){
                                        echo "Di Sapat";
                                    }

                                    else{
                                        echo "Sapat";
                                    }
                                  ?>
                              </td>
                            </tr>

                            <tr>
                              <th scope="row">Available Iron(ppm)</th>
                              <td>>2.00</td>
                              <td><?php echo $iron_show;?></td>
                              <td>
                                  <?php 
                                    if($iron_show<=2){
                                        echo "Di Sapat";
                                    }

                                    else{
                                        echo "Sapat";
                                    }
                                  ?>
                              </td>
                            </tr>


                            <tr>
                              <th scope="row">Available Copper(ppm)</th>
                              <td>>0.50</td>
                              <td><?php echo $copper_show;?></td>
                              <td>
                                  <?php 
                                    if($copper_show<=.50){
                                        echo "Di Sapat";
                                    }

                                    else{
                                        echo "Sapat";
                                    }
                                  ?>
                              </td>
                            </tr>


                            <tr>
                              <th scope="row">Available Manganese(ppm)</th>
                              <td>>1.00</td>
                              <td><?php echo $manganese_show;?></td>
                              <td>
                                  <?php 
                                    if($manganese_show<=1){
                                        echo "Di Sapat";
                                    }

                                    else{
                                        echo "Sapat";
                                    }
                                  ?>
                              </td>
                            </tr>

                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 border">
                    <center>
                        <h5 class="text-underline"><em>MGA MUNGKAHI PARA SA PAGPAPALUSOG  NG LUPA:</em></h5>
                    </center>
                        1. Gumamit ng compost at maghalo sa lupa ng dahon ng kakawate, katuray at azolla.<br>
                        2. Makabubuti para sa lupa ang paghahalo ng dumi ng hayop, dayami, at carbonized rice hull.<br>
                        3. Gumamit ng mycorrhiza (MykoVAM), trichoderma at Bio-N upang mapatibay ang ugat ng halaman laban sa kakulangan sa tubig, makatulong sa pagsipsip ng sustansya sa lupa, at makalaban sa mga sakit na dala ng mga mikrobyo sa lupa.

                </div>                    
            </div>
            <div class="row">
                <div class="col-lg-12 border"><br>
                    <h4 align="center">Rekomendasyon sa Pataba (kilo kada ektarya)</h4><br>
                    <table width="100%"   border = "2 cellspacing="0">
                              <thead>
                                <tr>
                                  <th scope="col">Halaman</th>
                                  <th scope="col">Urea</th>
                                  <th scope="col">16-20-0</th>
                                  <th scope="col">0-0-60</th>
                                  <th scope="col">21-0-0-24S</th>
                                  <th scope="col">Zinc Sulfate</th>
                                  <th scope="col">Lime</th>
                                 
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td scope="row">Rainfed Rice (WS)</th>
                                  <td><?php
                                        echo round($urea,2);
                                  ?></td>
                                  <td><?php

                                        echo round($phos,2);
                                  ?></td>
                                  <td><?php
                                        echo round($potassium,2);
                                  ?></td>
                                  <td><?php
                                        echo round($sulfurset,2); 
                                  ?></td>
                                  <td>
                                    <?php
                                        echo round($zinc_sulfate,2);
                                     ?>   
                                  </td>
                                  <td>
                                      <?php
                                        echo round($total1 / 2.471,2);
                                        ?> 
                                  </td>
                            
                                </tr>

                                <tr>
                                  <td scope="row">Rainfed Rice (DS)</th>
                                  <td><?php
                                        echo round($urea2,2);
                                  ?></td>
                                  <td><?php

                                        echo round($phos2,2);
                                  ?></td>
                                  <td><?php
                                        echo round($potassium2,2);
                                  ?></td>
                                  <td><?php
                                        echo round($sulfurset2,2); 
                                  ?>
                                  </td>
                                  <td><?php
                                        echo round($zinc_sulfate2,2);
                                     ?></td>
                                <td>
                                      <?php
                                        echo round($total2 / 2.471,2);
                                        ?> 
                                  </td>
                                </tr>

                                <tr>
                                  <td scope="row">Upland Rice (WS)</th>
                                  <td><?php
                                        echo round($urea3,2);
                                  ?></td>
                                  <td><?php

                                        echo round($phos3,2);
                                  ?></td>
                                  <td><?php
                                        echo round($potassium3,2);
                                  ?></td>
                                  <td><?php
                                        echo round($sulfurset3,2); 
                                  ?>
                                  </td>
                                  <td><?php
                                        echo round($zinc_sulfate3,2);
                                     ?></td>
                               <td>
                                      <?php
                                        echo round($total3 / 2.471,2);
                                        ?> 
                                  </td>
                                </tr>

                                <tr>
                                  <td scope="row">Corn</th>
                                  <td><?php
                                        echo round($urea4,2);
                                  ?></td>
                                  <td><?php

                                        echo round($phos4,2);
                                  ?></td>
                                  <td><?php
                                        echo round($potassium4,2);
                                  ?></td>
                                  <td><?php
                                        echo round($sulfurset4,2); 
                                  ?>
                                  </td>
                                  <td><?php
                                        echo round($zinc_sulfate4,2);
                                     ?></td>
                               <td>
                                      <?php
                                        echo round($total4 / 2.471,2);
                                        ?> 
                                  </td>
                                </tr>

                                 <tr>
                                  <td scope="row">Peanut</th>
                                  <td><?php
                                        echo round($urea5,2);
                                  ?></td>
                                  <td><?php

                                        echo round($phos5,2);
                                  ?></td>
                                  <td><?php
                                        echo round($potassium5,2);
                                  ?></td>
                                  <td><?php
                                        echo round($sulfurset5,2); 
                                  ?>
                                  </td>
                                  <td><?php
                                        echo round($zinc_sulfate5,2);
                                     ?></td>
                               <td>
                                      <?php
                                        echo round($total5 / 2.471,2);
                                        ?> 
                                  </td>
                                </tr>

                                <tr>
                                  <td scope="row">Mungbean</th>
                                  <td><?php
                                        echo round($urea6,2);
                                  ?></td>
                                  <td><?php

                                        echo round($phos6,2);
                                  ?></td>
                                  <td><?php
                                        echo round($potassium6,2);
                                  ?></td>
                                  <td><?php
                                        echo round($sulfurset6,2); 
                                  ?>
                                  </td>
                                  <td><?php
                                        echo round($zinc_sulfate6,2);
                                     ?></td>
                               <td>
                                      <?php
                                        echo round($total6 / 2.471,2);
                                        ?> 
                                  </td>
                                </tr>

                              <tr>
                                  <td scope="row">Winged Beans</th>
                                  <td><?php
                                        echo round($urea7,2);
                                  ?></td>
                                  <td><?php

                                        echo round($phos7,2);
                                  ?></td>
                                  <td><?php
                                        echo round($potassium7,2);
                                  ?></td>
                                  <td><?php
                                        echo round($sulfurset7,2); 
                                  ?>
                                  </td>
                                  <td><?php
                                        echo round($zinc_sulfate7,2);
                                     ?></td>
                               <td>
                                      <?php
                                        echo round($total7 / 2.471,2);
                                        ?> 
                                  </td>
                                </tr>

                                <tr>
                                  <td scope="row">String Beans</th>
                                  <td><?php
                                        echo round($urea8,2);
                                  ?></td>
                                  <td><?php

                                        echo round($phos8,2);
                                  ?></td>
                                  <td><?php
                                        echo round($potassium8,2);
                                  ?></td>
                                  <td><?php
                                        echo round($sulfurset8,2); 
                                  ?>
                                  </td>
                                  <td><?php
                                        echo round($zinc_sulfate8,2);
                                     ?></td>
                               <td>
                                      <?php
                                        echo round($total8 / 2.471,2);
                                        ?> 
                                  </td>
                                </tr>

                                <tr>
                                  <td scope="row">Sweet Potato and Cassava</th>
                                  <td><?php
                                        echo round($urea9,2);
                                  ?></td>
                                  <td><?php

                                        echo round($phos9,2);
                                  ?></td>
                                  <td><?php
                                        echo round($potassium9,2);
                                  ?></td>
                                  <td><?php
                                        echo round($sulfurset9,2); 
                                  ?>
                                  </td>
                                  <td><?php
                                        echo round($zinc_sulfate9,2);
                                     ?></td>
                               <td>
                                      <?php
                                        echo round($total9 / 2.471,2);
                                        ?> 
                                  </td>
                                </tr>

                                 <tr>
                                  <td scope="row">Taro</th>
                                  <td><?php
                                        echo round($urea10,2);
                                  ?></td>
                                  <td><?php

                                        echo round($phos10,2);
                                  ?></td>
                                  <td><?php
                                        echo round($potassium10,2);
                                  ?></td>
                                  <td><?php
                                        echo round($sulfurset10,2); 
                                  ?>
                                  </td>
                                  <td><?php
                                        echo round($zinc_sulfate10,2);
                                     ?></td>
                               <td>
                                      <?php
                                        echo round($total10 / 2.471,2);
                                        ?> 
                                  </td>
                                </tr>
                             
                                
                                  <tr>
                                  <td scope="row">Tomato</th>
                                  <td><?php
                                        echo round($urea11,2);
                                  ?></td>
                                  <td><?php

                                        echo round($phos11,2);
                                  ?></td>
                                  <td><?php
                                        echo round($potassium11,2);
                                  ?></td>
                                  <td><?php
                                        echo round($sulfurset11,2); 
                                  ?>
                                  </td>
                                  <td><?php
                                        echo round($zinc_sulfate11,2);
                                     ?></td>
                                 <td>
                                      <?php
                                        echo round($total11 / 2.471,2);
                                        ?> 
                                  </td>
                                </tr>

                               
                                  <tr>
                                  <td scope="row">Bitter Gourd</th>
                                  <td><?php
                                        echo round($urea12,2);
                                  ?></td>
                                  <td><?php

                                        echo round($phos12,2);
                                  ?></td>
                                  <td><?php
                                        echo round($potassium12,2);
                                  ?></td>
                                  <td><?php
                                        echo round($sulfurset12,2); 
                                  ?>
                                  </td>
                                  <td><?php
                                        echo round($zinc_sulfate12,2);
                                     ?></td>
                                 <td>
                                      <?php
                                        echo round($total12 / 2.471,2);
                                        ?> 
                                  </td>
                                </tr>

                                  <tr>
                                  <td scope="row">Eggplant</th>
                                  <td><?php
                                        echo round($urea13,2);
                                  ?></td>
                                  <td><?php

                                        echo round($phos13,2);
                                  ?></td>
                                  <td><?php
                                        echo round($potassium13,2);
                                  ?></td>
                                  <td><?php
                                        echo round($sulfurset13,2); 
                                  ?>
                                  </td>
                                  <td><?php
                                        echo round($zinc_sulfate13,2);
                                     ?></td>
                                 <td>
                                      <?php
                                        echo round($total13 / 2.471,2);
                                        ?> 
                                  </td>
                                </tr>
                                   <tr>
                                  <td scope="row">Okra hybrid</th>
                                  <td><?php
                                        echo round($urea14,2);
                                  ?></td>
                                  <td><?php

                                        echo round($phos14,2);
                                  ?></td>
                                  <td><?php
                                        echo round($potassium14,2);
                                  ?></td>
                                  <td><?php
                                        echo round($sulfurset14,2); 
                                  ?>
                                  </td>
                                  <td><?php
                                        echo round($zinc_sulfate14,2);
                                     ?></td>
                                 <td>
                                      <?php
                                        echo round($total14 / 2.471,2);
                                        ?> 
                                  </td>
                                </tr>

                                  <tr>
                                  <td scope="row">Okra local</th>
                                  <td><?php
                                        echo round($urea15,2);
                                  ?></td>
                                  <td><?php

                                        echo round($phos15,2);
                                  ?></td>
                                  <td><?php
                                        echo round($potassium15,2);
                                  ?></td>
                                  <td><?php
                                        echo round($sulfurset15,2); 
                                  ?>
                                  </td>
                                  <td><?php
                                        echo round($zinc_sulfate15,2);
                                     ?></td>
                                 <td>
                                      <?php
                                        echo round($total15 / 2.471,2);
                                        ?> 
                                  </td>
                                </tr>

                                <tr>
                                  <td scope="row">Squash</th>
                                  <td><?php
                                        echo round($urea16,2);
                                  ?></td>
                                  <td><?php

                                        echo round($phos16,2);
                                  ?></td>
                                  <td><?php
                                        echo round($potassium16,2);
                                  ?></td>
                                  <td><?php
                                        echo round($sulfurset16,2); 
                                  ?>
                                  </td>
                                  <td><?php
                                        echo round($zinc_sulfate16,2);
                                     ?></td>
                                 <td>
                                      <?php
                                        echo round($total16 / 2.471,2);
                                        ?> 
                                  </td>
                                </tr>

                                   <tr>
                                  <td scope="row">Upo</th>
                                  <td><?php
                                        echo round($urea17,2);
                                  ?></td>
                                  <td><?php

                                        echo round($phos17,2);
                                  ?></td>
                                  <td><?php
                                        echo round($potassium17,2);
                                  ?></td>
                                  <td><?php
                                        echo round($sulfurset17,2); 
                                  ?>
                                  </td>
                                  <td><?php
                                        echo round($zinc_sulfate17,2);
                                     ?></td>
                                 <td>
                                      <?php
                                        echo round($total17 / 2.471,2);
                                        ?> 
                                  </td>
                                </tr>
                                <tr>
                                  <td scope="row">Patola</th>
                                  <td><?php
                                        echo round($urea18,2);
                                  ?></td>
                                  <td><?php

                                        echo round($phos18,2);
                                  ?></td>
                                  <td><?php
                                        echo round($potassium18,2);
                                  ?></td>
                                  <td><?php
                                        echo round($sulfurset18,2); 
                                  ?>
                                  </td>
                                  <td><?php
                                        echo round($zinc_sulfate18,2);
                                     ?></td>
                                 <td>
                                      <?php
                                        echo round($total18 / 2.471,2);
                                        ?> 
                                  </td>
                                </tr>
                                 <tr>
                                  <td scope="row">Finger pepper</th>
                                  <td><?php
                                        echo round($urea19,2);
                                  ?></td>
                                  <td><?php

                                        echo round($phos19,2);
                                  ?></td>
                                  <td><?php
                                        echo round($potassium19,2);
                                  ?></td>
                                  <td><?php
                                        echo round($sulfurset19,2); 
                                  ?>
                                  </td>
                                  <td><?php
                                        echo round($zinc_sulfate19,2);
                                     ?></td>
                                 <td>
                                      <?php
                                        echo round($total19 / 2.471,2);
                                        ?> 
                                  </td>
                                </tr>
                                  <tr>
                                  <td scope="row">Pechay</th>
                                  <td><?php
                                        echo round($urea20,2);
                                  ?></td>
                                  <td><?php

                                        echo round($phos20,2);
                                  ?></td>
                                  <td><?php
                                        echo round($potassium20,2);
                                  ?></td>
                                  <td><?php
                                        echo round($sulfurset20,2); 
                                  ?>
                                  </td>
                                  <td><?php
                                        echo round($zinc_sulfate20,2);
                                     ?></td>
                                 <td>
                                      <?php
                                        echo round($total20 / 2.471,2);
                                        ?> 
                                  </td>
                                </tr>
                                 <tr>
                                  <td scope="row">Mustard</th>
                                  <td><?php
                                        echo round($urea21,2);
                                  ?></td>
                                  <td><?php

                                        echo round($phos21,2);
                                  ?></td>
                                  <td><?php
                                        echo round($potassium21,2);
                                  ?></td>
                                  <td><?php
                                        echo round($sulfurset21,2); 
                                  ?>
                                  </td>
                                  <td><?php
                                        echo round($zinc_sulfate21,2);
                                     ?></td>
                               <td>
                                      <?php
                                        echo round($total21 / 2.471,2);
                                        ?> 
                                  </td>
                                </tr>
                                 <tr>
                                  <td scope="row">Watermelon</th>
                                  <td><?php
                                        echo round($urea22,2);
                                  ?></td>
                                  <td><?php

                                        echo round($phos22,2);
                                  ?></td>
                                  <td><?php
                                        echo round($potassium22,2);
                                  ?></td>
                                  <td><?php
                                        echo round($sulfurset22,2); 
                                  ?>
                                  </td>
                                  <td><?php
                                        echo round($zinc_sulfate22,2);
                                     ?></td>
                               <td>
                                      <?php
                                        echo round($total22 / 2.471,2);
                                        ?> 
                                  </td>
                                </tr>
                                  <tr>
                                  <td scope="row">Cabbage</th>
                                  <td><?php
                                        echo round($urea23,2);
                                  ?></td>
                                  <td><?php

                                        echo round($phos23,2);
                                  ?></td>
                                  <td><?php
                                        echo round($potassium23,2);
                                  ?></td>
                                  <td><?php
                                        echo round($sulfurset23,2); 
                                  ?>
                                  </td>
                                  <td><?php
                                        echo round($zinc_sulfate23,2);
                                     ?></td>
                               <td>
                                      <?php
                                        echo round($total23 / 2.471,2);
                                        ?> 
                                  </td>
                                </tr>
                                 <tr>
                                  <td scope="row">Cauliflower</th>
                                  <td><?php
                                        echo round($urea24,2);
                                  ?></td>
                                  <td><?php

                                        echo round($phos24,2);
                                  ?></td>
                                  <td><?php
                                        echo round($potassium24,2);
                                  ?></td>
                                  <td><?php
                                        echo round($sulfurset24,2); 
                                  ?>
                                  </td>
                                  <td><?php
                                        echo round($zinc_sulfate24,2);
                                     ?></td>
                               <td>
                                      <?php
                                        echo round($total24 / 2.471,2);
                                        ?> 
                                  </td>
                                </tr>
                                  <tr>
                                  <td scope="row">Spinach</th>
                                  <td><?php
                                        echo round($urea25,2);
                                  ?></td>
                                  <td><?php

                                        echo round($phos25,2);
                                  ?></td>
                                  <td><?php
                                        echo round($potassium25,2);
                                  ?></td>
                                  <td><?php
                                        echo round($sulfurset25,2); 
                                  ?>
                                  </td>
                                  <td><?php
                                        echo round($zinc_sulfate25,2);
                                     ?></td>
                               <td>
                                      <?php
                                        echo round($total25 / 2.471,2);
                                        ?> 
                                  </td>
                                </tr>
                                  <tr>
                                  <td scope="row">Onion/Garlic</th>
                                  <td><?php
                                        echo round($urea26,2);
                                  ?></td>
                                  <td><?php

                                        echo round($phos26,2);
                                  ?></td>
                                  <td><?php
                                        echo round($potassium26,2);
                                  ?></td>
                                  <td><?php
                                        echo round($sulfurset26,2); 
                                  ?>
                                  </td>
                                  <td><?php
                                        echo round($zinc_sulfate26,2);
                                     ?></td>
                               <td>
                                      <?php
                                        echo round($total26 / 2.471,2);
                                        ?> 
                                  </td>
                                </tr>
                                   <tr>
                                  <td scope="row">Ginger </th>
                                  <td><?php
                                        echo round($urea27,2);
                                  ?></td>
                                  <td><?php

                                        echo round($phos27,2);
                                  ?></td>
                                  <td><?php
                                        echo round($potassium27,2);
                                  ?></td>
                                  <td><?php
                                        echo round($sulfurset27,2); 
                                  ?>
                                  </td>
                                  <td><?php
                                        echo round($zinc_sulfate27,2);
                                     ?></td>
                               <td>
                                      <?php
                                        echo round($total27 / 2.471,2);
                                        ?> 
                                  </td>
                                </tr>
                                   <tr>
                                  <td scope="row">Muskmelon </th>
                                  <td><?php
                                        echo round($urea28,2);
                                  ?></td>
                                  <td><?php

                                        echo round($phos28,2);
                                  ?></td>
                                  <td><?php
                                        echo round($potassium28,2);
                                  ?></td>
                                  <td><?php
                                        echo round($sulfurset28,2); 
                                  ?>
                                  </td>
                                  <td><?php
                                        echo round($zinc_sulfate28,2);
                                     ?></td>
                               <td>
                                      <?php
                                        echo round($total28 / 2.471,2);
                                        ?> 
                                  </td>
                                </tr>
                                  <tr>
                                  <td scope="row">Carrot </th>
                                  <td><?php
                                        echo round($urea29,2);
                                  ?></td>
                                  <td><?php

                                        echo round($phos29,2);
                                  ?></td>
                                  <td><?php
                                        echo round($potassium29,2);
                                  ?></td>
                                  <td><?php
                                        echo round($sulfurset29,2); 
                                  ?>
                                  </td>
                                  <td><?php
                                        echo round($zinc_sulfate29,2);
                                     ?></td>
                               <td>
                                      <?php
                                        echo round($total29 / 2.471,2);
                                        ?> 
                                  </td>
                                </tr>
                                  <tr>
                                  <td scope="row">Potato </th>
                                  <td><?php
                                        echo round($urea30,2);
                                  ?></td>
                                  <td><?php

                                        echo round($phos30,2);
                                  ?></td>
                                  <td><?php
                                        echo round($potassium30,2);
                                  ?></td>
                                  <td><?php
                                        echo round($sulfurset30,2); 
                                  ?>
                                  </td>
                                  <td><?php
                                        echo round($zinc_sulfate30,2);
                                     ?></td>
                               <td>
                                      <?php
                                        echo round($total30 / 2.471,2);
                                        ?> 
                                  </td>
                                </tr>
                                   <tr>
                                  <td scope="row">Chili</th>
                                  <td><?php
                                        echo round($urea31,2);
                                  ?></td>
                                  <td><?php

                                        echo round($phos31,2);
                                  ?></td>
                                  <td><?php
                                        echo round($potassium31,2);
                                  ?></td>
                                  <td><?php
                                        echo round($sulfurset31,2); 
                                  ?>
                                  </td>
                                  <td><?php
                                        echo round($zinc_sulfate31,2);
                                     ?></td>
                               <td>
                                      <?php
                                        echo round($total31 / 2.471,2);
                                        ?> 
                                  </td>
                                </tr>
                                   <tr>
                                  <td scope="row">Bell Pepper</th>
                                  <td><?php
                                        echo round($urea32,2);
                                  ?></td>
                                  <td><?php

                                        echo round($phos32,2);
                                  ?></td>
                                  <td><?php
                                        echo round($potassium32,2);
                                  ?></td>
                                  <td><?php
                                        echo round($sulfurset32,2); 
                                  ?>
                                  </td>
                                  <td><?php
                                        echo round($zinc_sulfate32,2);
                                     ?></td>
                               <td>
                                      <?php
                                        echo round($total32 / 2.471,2);
                                        ?> 
                                  </td>
                                </tr>
                                 <tr>
                                  <td scope="row">Yam</th>
                                  <td><?php
                                        echo round($urea33,2);
                                  ?></td>
                                  <td><?php

                                        echo round($phos33,2);
                                  ?></td>
                                  <td><?php
                                        echo round($potassium33,2);
                                  ?></td>
                                  <td><?php
                                        echo round($sulfurset33,2); 
                                  ?>
                                  </td>
                                  <td><?php
                                        echo round($zinc_sulfate33,2);
                                     ?></td>
                               <td>
                                      <?php
                                        echo round($total33 / 2.471,2);
                                        ?> 
                                  </td>
                                </tr>
                               
                              </tbody>
                    </table> 
                </div>
            </div><br><br><br><br><br><br>

            <div class="row">
                <div class="col-lg-12 border">
                    <table width="100%"   border = "2 cellspacing="0">
                        <tr>
                            <th colspan="12" class="text-center"><em>SARIAYA QUEZON AGRICULTURAL STORES</em></th>
                        </tr>
                        <tbody>
                            <tr>
                                <td>BLESSED GROWER CORPORATION</td>
                                <td>TUMBAGA 1, SARIAYA,  QUEZON</td>
                            </tr>
                            <tr>
                                <td>ANIBIO AGRI-ESSENTIALS ENTERPRISES</td>
                                <td>22 RODRIGUEZ STREET  POBLACION 5, SARIAYA,  QUEZON</td>
                            </tr>
                            <tr>
                                <td>SAMBAT AGRICULTURALSUPPLY</td>
                                <td>SAMPALOC STO. CRISTO, SARIAYA,  QUEZON</td>
                            </tr>
                            <tr>
                                <td>DOUBLE A AGRICULTURAL SUPPLY</td>
                                <td>POB. 3 SARIAYA, QUEZON</td>
                            </tr>
                            <tr>
                                <td>BRGY. PILI MULTI-PURPOSE COOPERATIVE</td>
                                <td>PILI</td>
                            </tr>
                            <tr>
                                <td>SARIAYA AGRICULTURAL CENTER</td>
                                <td>POBLACION 3, SARIAYA,  QUEZON</td>
                            </tr>
                            <tr>
                                <td>CAJESAR FARMS</td>
                                <td>LUTUCAN 1, SARIAYA,  QUEZON</td>
                            </tr>
                            <tr>
                                <td>BARTE'S FARMERS SUPPLY</td>
                                <td>SAMPALOC 2 SARIAYA, QUEZON</td>
                            </tr>
                            <tr>
                                <td>FL MENDOZA AGRICULTURAL SUPPLY</td>
                                <td>BIGNAY 1, SARIAYA,  QUEZON</td>
                            </tr>
                            <tr>
                                <td>QUIMINIANO AGRICULTURAL & FEEDS SUPPLY</td>
                                <td>PUBLIC MARKET POB. 3 SARIAYA, QUEZON</td>
                            </tr>
                            <tr>
                                <td>LAKEY JAS RICE AND FEEDS SUPPLY</td>
                                <td>PUBLIC MARKET POB. 3, SARIAYA, QUEZON</td>
                            </tr>
                            <tr>
                                <td>KENZO AND KLOE'S NATURE FARM</td>
                                <td>MORONG, SARIAYA,  QUEZON</td>
                            </tr>
                            <tr>
                                <td>ROSWILYN PALAY BUYER</td>
                                <td>TUMBAGA 1, SARIAYA,  QUEZON</td>
                            </tr>
                            <tr>
                                <td>GAUDENCIO REMO VEGETABLE TRADING</td>
                                <td>MAMALA 1, SARIAYA,  QUEZON</td>
                            </tr>
                            <tr>
                                <td>FLOR AND DAISY'S AGRICULTURAL FARM</td>
                                <td>MAMALA 2, SARIAYA,  QUEZON</td>
                            </tr>
                            <tr>
                                <td>MAILYN FLORES AGRI SUPPLY</td>
                                <td>LUTUCAN MALABAG, SARIAYA,  QUEZON</td>
                            </tr>
                            <tr>
                                <td>ALJAY AGRO-INDUSTRIAL SOLUTIONS, INCORPORATED</td>
                                <td>GIBANGA</td>
                            </tr>
                            <tr>
                                <td>FIRST BLESSED KIMBY CORPORATION</td>
                                <td>TUMBAGA 1, SARIAYA, QUEZON</td>
                            </tr>
                            <tr>
                                <td>JJC NOVERO AGRICULTURAL FARM</td>
                                <td>CONCEPCION PALASAN, SARIAYA,  QUEZON</td>
                            </tr>
                            <tr>
                                <td>AJB AGRI SUPPLY</td>
                                <td>GIBANGA, SARIAYA,  QUEZON</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-lg-12 border">
                    <table width="100%"   border = "2 cellspacing="0">
                        <tr>
                            <th colspan="12" class="text-center"><em>LUCBAN QUEZON AGRICULTURAL STORES</em></th>
                        </tr>
                        <tbody>
                            <tr>
                                <td>AGRI PHIL CORPORATION</td>
                                <td>QUEZON AVENUE B-8</td>
                            </tr>
                            <tr>
                                <td>AYUTI AGRI-SUPPLY</td>
                                <td>LORCAN SUBDIVISION, B-AYUTI</td>
                            </tr>
                            <tr>
                                <td>BARKADA VEGETABLE & CHICKEN DUNG DEALER</td>
                                <td>BREEDING B-AYUTI</td>
                            </tr>
                            <tr>
                                <td>COCKERS ROYALE ENTERPRISES</td>
                                <td>GOMBURZA ST., B-4</td>
                            </tr>
                            <tr>
                                <td>FKK TRADING</td>
                                <td>63 A. RACELIS AVE. B-8</td>
                            </tr>
                            <tr>
                                <td>GREEN-UP ENTERPRISES</td>
                                <td>GOMBURZA ST., B-4</td>
                            </tr>
                            <tr>
                                <td>LANCE AND RAI AGRI SUPPLY</td>
                                <td>AVENIDA RIZAL B-9</td>
                            </tr>
                            <tr>
                                <td>MACRO FARM AGRICULTURAL SUPPPLY</td>
                                <td>SAN LUIS ST. B-10</td>
                            </tr>
                            <tr>
                                <td>NACORDA AGRICULTURAL SUPPLY</td>
                                <td>A. MADERAL ST. B-5</td>
                            </tr>
                            <tr>
                                <td>SHOWER OF BLESSING AGRI-SUPPLY</td>
                                <td>RIZAL AVE. B-7</td>
                            </tr>
                            <tr>
                                <td>MACKEY TRADING</td>
                                <td>29 M. AGUILAR ST. B-9</td>
                            </tr>
                            <tr>
                                <td>MV ELEAZAR AGRICULTURAL REALTY ENTERPRISES INC.</td>
                                <td>MIRA-MONTE SUBD.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div><br><br><br><br><br><br>
        </section>
<script type="text/javascript">     
        function PrintDiv() {    
           var divToPrint = document.getElementById('divToPrint');
           var popupWin = window.open('', '_blank', 'width=1000,height=700');
           popupWin.document.open();
           popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
            popupWin.document.close();
                }
    </script>

            