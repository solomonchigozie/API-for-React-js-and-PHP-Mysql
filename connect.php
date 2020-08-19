<?php
$conn = mysqli_connect("localhost", "root", "", "reactjscrud");

if(!$conn){
	echo "Failed " . mysqli_error();
}

?>