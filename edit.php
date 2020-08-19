<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, X-Requested-With");
header("Content-Type: application/json; charset=UTF-8");

require("connect.php");

$id= $_GET['id'];

//GET ID
$sql = "SELECT * FROM `students` WHERE `id`='{$id}' LIMIT 1 ";

$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

// print_r($row);

echo $json = json_encode($row);
//echo json_encode(['data' => $json]);


?>
