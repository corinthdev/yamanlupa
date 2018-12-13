<?php

$conn = new mysqli('localhost', 'root', '', 'yamanlupa_shc');


if($conn->connect_errno){
	echo $db->connect_error;
	//die( '<br />Sorry we are having some problems');

}

?>