<?php
// Create Connection
include 'connection.php';

if (isset($_POST['submit'])) {
            
    $_SESSION['success'] = "Successfully Added!";
    //sariling impormasyon
    $pangalan = $_POST['pangalan'];
    $brgy = $_POST['brgy'];
    $bayan = $_POST['bayan'];
    $lalawigan = $_POST['lalawigan'];
    $soil_sample = $_POST['soil_sample'];
    $sampling = $_POST['sampling'];
    //ph table
    $ph_lupa = $_POST['ph_lupa'];
    $ph_krit = $_POST['ph_krit'];
    $ph_observe = $_POST['ph_observe'];
    $ph_result = $_POST['ph_result'];
    //electricity conductivity
    $ec_conduc = $_POST['ec_conduc'];
    $ec_krit = $_POST['ec_krit'];
    $ec_observe = $_POST['ec_observe'];
    $ec_result = $_POST['ec_result'];
    //oraganic carbon
    $oc_carb = $_POST['oc_carb'];
    $oc_krit = $_POST['oc_krit'];
    $oc_observe = $_POST['oc_observe'];
    $oc_result = $_POST['oc_result'];
    //available phosphorous
    $phospho = $_POST['phospho'];
    $phospho_krit = $_POST['phospho_krit'];
    $phospho_observe = $_POST['phospho_observe'];
    $phospho_result = $_POST['phospho_result'];
    //available potassium
    $pota = $_POST['pota'];
    $pota_krit = $_POST['pota_krit'];
    $pota_observe = $_POST['pota_observe'];
    $pota_result = $_POST['pota_result'];
    //available sulfur
    $sulfur = $_POST['sulfur'];
    $sulfur_krit = $_POST['sulfur_krit'];
    $sulfur_observe = $_POST['sulfur_observe'];
    $sulfur_result = $_POST['sulfur_result'];
    //available zinc
    $zinc = $_POST['zinc'];
    $zinc_krit = $_POST['zinc_krit'];
    $zinc_observe = $_POST['zinc_observe'];
    $zinc_result = $_POST['zinc_result'];
    //available copper
    $copper = $_POST['copper'];
    $copper_krit = $_POST['copper_krit'];
    $copper_observe = $_POST['copper_observe'];
    $copper_result = $_POST['copper_result'];
    //available manga
    $manga = $_POST['manga'];
    $manga_krit = $_POST['manga_krit'];
    $manga_observe = $_POST['manga_observe'];
    $manga_result = $_POST['manga_result'];

    //ensure that from fields are filled properly
    $sql = "INSERT INTO soil_table (pangalan, brgy, bayan, lalawigan, soil_sample, sampling)
    VALUES ('$pangalan', '$brgy', '$bayan', '$lalawigan', '$soil_sample', '$sampling');";
    $sql2 = "INSERT INTO soil_ph (info_lupa, krit_hangganan, obserbasyon, resulta)
    VALUES ('$ph_lupa', '$ph_krit', '$ph_observe', '$ph_result');";
    $sql3 = "INSERT INTO soil_elec (info_lupa, krit_hangganan, obserbasyon, resulta)
    VALUES ('$ec_conduc', '$ec_krit', '$ec_observe', '$ec_result');";
    $sql4 = "INSERT INTO soil_org (info_lupa, krit_hangganan, obserbasyon, resulta)
    VALUES ('$oc_carb', '$oc_krit', '$oc_observe', '$oc_result');";
    $sql5 = "INSERT INTO soil_phospho (info_lupa, krit_hangganan, obserbasyon, resulta)
    VALUES ('$phospho', '$phospho_krit', '$phospho_observe', '$phospho_result');";
    $sql6 = "INSERT INTO soil_pota (info_lupa, krit_hangganan, obserbasyon, resulta)
    VALUES ('$pota', '$pota_krit', '$pota_observe', '$pota_result');";
    $sql7 = "INSERT INTO soil_sulfur (info_lupa, krit_hangganan, obserbasyon, resulta)
    VALUES ('$sulfur', '$sulfur_krit', '$sulfur_observe', '$sulfur_result');";
    $sql8 = "INSERT INTO soil_zinc (info_lupa, krit_hangganan, obserbasyon, resulta)
    VALUES ('$zinc', '$zinc_krit', '$zinc_observe', '$zinc_result');";
    $sql9 = "INSERT INTO soil_copper (info_lupa, krit_hangganan, obserbasyon, resulta)
    VALUES ('$copper', '$copper_krit', '$copper_observe', '$copper_result');";
    $sql10 = "INSERT INTO soil_manga (info_lupa, krit_hangganan, obserbasyon, resulta)
    VALUES ('$manga', '$manga_krit', '$manga_observe', '$manga');";
    
      mysqli_query($conn,$sql);
      mysqli_query($conn,$sql2);
      mysqli_query($conn,$sql3);
      mysqli_query($conn,$sql4);
      mysqli_query($conn,$sql5);
      mysqli_query($conn,$sql6);
      mysqli_query($conn,$sql7);
      mysqli_query($conn,$sql8);
      mysqli_query($conn,$sql9);
      mysqli_query($conn,$sql10);

      header("locations: soil_card.php");
  

  }
?>