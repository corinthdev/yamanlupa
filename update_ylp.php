<?php 
include 'connection.php';

if(isset($_POST['ylp_farmer'])) {

	$ylp_code = $_POST['ylp_code'];
	$ylp_farmer = $_POST['ylp_farmer'];
	$ylp_bayan = $_POST['ylp_bayan'];
	$ylp_lalawigan = $_POST['ylp_lalawigan'];
	$ylp_lalim = $_POST['ylp_lalim'];
	$taon = $_POST['taon'];
	$ylp_crop = $_POST['ylp_crop'];
	$description = $_POST['description'];
	$ylp_exchange = $_POST['ylp_exchange'];
	$ylp_ph = $_POST['ylp_ph'];
	$ylp_ec = $_POST['ylp_ec'];
	$ylp_oc = $_POST['ylp_oc'];
	$ylp_total_n = $_POST['ylp_total_n'];
	$ylp_avail_p = $_POST['ylp_avail_p'];
	$ylp_avail_k = $_POST['ylp_avail_k'];
	$ylp_avail_s = $_POST['ylp_avail_s'];
	$ylp_avail_zn = $_POST['ylp_avail_zn'];
	$ylp_avail_b = $_POST['ylp_avail_b'];
	$ylp_avail_fe = $_POST['ylp_avail_fe'];
	$ylp_avail_cu = $_POST['ylp_avail_cu'];
	$ylp_avail_mn = $_POST['ylp_avail_mn'];
	$id = $_POST['id'];

	//query update

	$result = mysqli_query($conn, "UPDATE ylp_table SET ylp_code='$ylp_code', ylp_farmer='$ylp_farmer', ylp_bayan='$ylp_bayan', ylp_lalawigan='$ylp_lalawigan', ylp_lalim='$ylp_lalim', taon='$taon', ylp_crop='$ylp_crop', description='$description', ylp_exchange='$ylp_exchange', ylp_ph='$ylp_ph', ylp_ec='$ylp_ec',ylp_oc='$ylp_oc',ylp_total_n='$ylp_total_n',ylp_avail_p='$ylp_avail_p',ylp_avail_k='$ylp_avail_k',ylp_avail_s='$ylp_avail_s',ylp_avail_zn='$ylp_avail_zn',ylp_avail_b='$ylp_avail_b', ylp_avail_fe='$ylp_avail_fe', ylp_avail_cu = '$ylp_avail_cu', ylp_avail_mn = '$ylp_avail_mn' WHERE id='$id'");
	if($result){
		return 'Data Updated!';
	}
}

?>