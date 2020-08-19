<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, X-Requested-With");
header("Content-Type: application/json; charset=UTF-8");

require("connect.php");


// print_r($_POST);
$postdata = file_get_contents("php://input");

if(isset($postdata) && !empty($postdata)){
	$request = json_decode($postdata);

	//sanitize
	$fName = $request->fname;
	$email = $request->email;
	$pass = $request->password;

	//hash password
	$password = md5($pass);

	//store
	$sql = "INSERT INTO `students`(`fullname`,`email`,`password`)
	VALUES('{$fName}','{$email}','{$password}')";

	if(mysqli_query($conn, $sql)){
		http_response_code(201);
	}else{
		http_response_code(422);
	}
}

?>
