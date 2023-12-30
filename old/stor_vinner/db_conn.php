<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: *');
header('Access-Control-Allow-Headers: *');

$servername = "localhost";
$username = "root";
$password = "";

$mydb = "stor_vinner";
global $conn;
$conn = new mysqli($servername, $username, $password, $mydb);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


