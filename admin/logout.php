<?php 
  session_start();
  session_destroy();
  unset($_SESSION['username']);
  $_SESSION['message'] = "You are now logout!";
  header("location: login.php");
?>