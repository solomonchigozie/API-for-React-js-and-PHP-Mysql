<?php

$host = "localhost";
$user = "root";
$pass = "";

$conn = mysqli_connect($host, $user, $pass);

$db = "CREATE DATABASE reactjscrud";

$createdb = mysqli_query($conn, $db);
if($createdb){
	echo "database created";
}else{
	echo "Database already exists";
}
$usedb = mysqli_select_db($conn, 'reactjscrud');
if($usedb){
	echo "\n database selected";
}

?>