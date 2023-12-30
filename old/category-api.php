<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/admin/dbcon.php';

  $sql = "SELECT `id`, `title`, `image` FROM `category` WHERE 1";

  $result = $conn->query($sql);

  if ($result) {

    header("Content-Type: application/json");
    $i = 0;
    $data = array();

    while($row = mysqli_fetch_assoc($result)) {

      $data[$i]['id'] = $row['id'];
      $data[$i]['title'] = $row['title'];
      $data[$i]['image'] = 'http://192.168.0.101/admin/assets/images/'.$row['image'];
      $i++;
 


    }
      echo json_encode(['status' => true, 'data' => $data, 'result' => 'founded']);
  } else {
    echo "connection failed :)";
    echo json_encode(['status' => false, 'data' => 'data not found :)', 'result' => 'not found']);
  }



$conn->close();

 