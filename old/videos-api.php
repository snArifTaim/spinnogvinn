<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/admin/dbcon.php';

$sql = "SELECT videos.* FROM videos INNER JOIN sub_category ON videos.parent_id=sub_category.id";
$result = $conn->query($sql);

if ($result) {
	header("Content-Type: application/json");
	$i = 0;
	$data = array();

	while($row = mysqli_fetch_assoc($result)) {

	  $data[$i]['id'] = $row['id'];
	  $data[$i]['title'] = $row['title'];
	  $data[$i]['image'] = 'http://192.168.0.101/admin/assets/images/'.$row['image'];
	  $data[$i]['instructor_id'] = $row['instructor_id'];
	  $data[$i]['video_list'] = $row['video_list'];
	  $data[$i]['parent_id'] = $row['id'];
	  $i++;
 

	}
	  echo json_encode(['status' => true, 'data' => $data, 'result' => 'founded']);

	} else {
	echo json_encode(['status' => false, 'data' => 'data not found :)', 'result' => 'not found']);
}

$conn->close();





