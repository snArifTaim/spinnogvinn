<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/admin/dbcon.php';


$sql = "SHOW TABLES FROM `freelancing_guideline`";

$result = $conn->query($sql);

if (!$result) {
  echo "DB Error, could not list tables\n";
  echo ('MySQL Error: ' . $mysqli->error);
}

?>
