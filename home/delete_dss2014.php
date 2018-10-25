<?php 
	include 'connection.php';
	$select = "DELETE from dss_table WHERE id = '".$_GET['del_id']."'";
	$query = mysqli_query($conn, $select) or die ($select);
	header("location: dss_platform.php");

?>