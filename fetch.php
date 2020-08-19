<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, X-Requested-With");
header("Content-Type: application/json; charset=UTF-8");

require("connect.php");

// print_r($_POST);
$postdata = file_get_contents("php://input");

error_reporting(E_ERROR);
$students = [];

$sql = "SELECT * FROM students";

if($result=mysqli_query($conn, $sql)){
	$cr= 0;
	while($row= mysqli_fetch_assoc($result)){
		$students[$cr]['id'] = $row['id'];
		$students[$cr]['fullname'] = $row['fullname'];
		$students[$cr]['email'] = $row['email'];
		$students[$cr]['password'] = $row['password'];
		$cr++;
	}
	
	//retrieve data as a full array
	// print_r($students);
	
	//retrieve data in JSON format
	echo json_encode($students);
}
else{
	http_response_code(404);
}

?>