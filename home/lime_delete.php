<?php 
	include 'connection.php';
	$select = "DELETE from lime_calculator WHERE id = '".$_GET['del_id']."'";
	$query = mysqli_query($conn, $select) or die ($select);
	header("location: lime_datatable.php");

?>