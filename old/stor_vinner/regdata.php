<?php
include_once('./db_conn.php');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: *');
header('Access-Control-Allow-Headers: *');

$datas = file_get_contents("php://input");
$datas = json_decode($datas, true);
$name = $datas["name"];
$email = $datas['email'];
$passwordi = $datas['password'];




$sql = "INSERT INTO `userdata`(`name`, `email`, `password`) VALUES ('$name','$email','$passwordi')";

$result = $conn->query($sql);

if ($result == true) {
  echo json_encode(['status' => true, 'msg' => "Account created successfully"]);
  exit();
} else {
  echo json_encode(['status' => false, 'msg' => "Account creation error"]);
  exit();
}
