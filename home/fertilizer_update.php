<?php 
include '../admin/connection.php';

if(isset($_POST['urea'])) {

	$urea = $_POST['urea'];
	$phosphorous1 = $_POST['phosphorous1'];
	$total_k = $_POST['total_k'];
	$total_s = $_POST['total_s'];
	$total_zn = $_POST['total_zn'];
	$id = $_POST['id'];

	//query update

	$result = mysqli_query($conn, "UPDATE fertilizer_price SET urea='$urea', phosphorous1='$phosphorous1', total_k='$total_k', total_s='$total_s', total_zn='$total_zn' WHERE id='$id'");
	if($result){
		return 'Data Updated!';
	}
}

?>