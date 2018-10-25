<?php 
include 'connection.php';

if(isset($_POST['crops'])) {

	$plants = $_POST['crops'];
	$acidity = $_POST['value'];
	$id = $_POST['id'];

	//query update

	$result = mysqli_query($conn, "UPDATE lime_calculator SET crops ='$plants', value ='$acidity' WHERE id='$id'");
	if($result){
		return 'Data Updated!';
	}
}

?>