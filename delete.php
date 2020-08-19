<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, X-Requested-With");
header("Content-Type: application/json; charset=UTF-8");

require("connect.php");

$id = $_GET['id'];

echo $sql = "DELETE FROM `students` WHERE `id`='{$id}' LIMIT 1 ";

if(mysqli_query($conn, $sql)){
	http_response_code(204);
}else{
	return http_response_code(422);
}
?>