<?php

$servername = "localhost";
$username = "root";
$password = "";

$mydb = "freelancing_guideline";
global $conn;
$conn = new mysqli($servername, $username, $password, $mydb);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
  // echo "conection successfully done";
