<?php 
	include 'connection.php';
	//for 2018
	$select = "DELETE from dss_table_two WHERE id = '".$_GET['del_id']."'";
	$query = mysqli_query($conn, $select) or die ($select);
	header("location: dss_platform.php");

?>