<?php
   if($_POST["current_ph"])
   {
   		$targetph = $_POST["target_ph"];
        $currentph = $_POST["current_ph"];
        $exacidity = $_POST["ex_acidity"];

        $answer = $targetph-$currentph;
        $answer2 = $answer/(6.6-$currentph);
        $answer3 = $answer2*$exacidity;
        $answer4 = $answer3*907.5;
        $answer5 = round($answer4/2.471,2);	
       // Here, you can also perform some database query operations with above values.
       echo "Your Target PH is: ". $targetph;
       echo "<br>";
       echo "Your Current PH is: ". $currentph;
       echo "<br>";
       echo "Your Exchangeable Acidity  is: ". $exacidity;

       echo "<hr>";

       echo "<h1><b>LIME RESULT:</b>$answer5 kg/hectare</h1>";
      
  }
?>