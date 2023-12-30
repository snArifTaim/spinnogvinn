<?php
include_once('./db_conn.php');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: *');
header('Access-Control-Allow-Headers: *');

$userContactData = file_get_contents("php://input");
$contactdata = json_decode($userContactData, true);
$cname =$contactdata['c_name'];
$cemail =$contactdata['c_email'];
$ctextarea =$contactdata['c_textarea'];

$sql1 = "INSERT INTO `contactdata`(`name`, `email`, `massage`) VALUES ('$cname','$cemail','$ctextarea')";

$result1 = $conn->query($sql1);

if ($result1 == true) {
  echo json_encode(['status' => true, 'msg' => "Aend msg successfully"]);
  exit();
} else {
  echo json_encode(['status' => false, 'msg' => "Msg send error"]);
  exit();
}