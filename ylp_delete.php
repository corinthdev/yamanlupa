<?php 
	include 'admin/connection.php';
	$select = "DELETE from ylp_table WHERE id = '".$_GET['del_id']."'";
	$query = mysqli_query($conn, $select) or die ($select);
	header("location: ylp_data.php");

?>