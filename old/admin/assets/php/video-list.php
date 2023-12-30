<?php

error_reporting(E_ERROR | E_PARSE);

require_once $_SERVER['DOCUMENT_ROOT'] . '/admin/dbcon.php';


if (isset($_POST["videoList"])) {

    $title = $_POST["title"];
    $parentID = $_POST["parentID"];
    $file_name  = $_FILES["image"]["name"];
    $tmpname    = $_FILES["image"]["tmp_name"];
    $target_dir = $_SERVER["DOCUMENT_ROOT"] . "/admin/assets/images/".$file_name;

    if(!empty($title)){
        $sql = "INSERT INTO `video_list`(`title`, `image`, `parent_id`) VALUES ('$title','$file_name','$parentID')";
        $result = $conn->query($sql);
    
        if ($result == true) {
            move_uploaded_file($tmpname, $target_dir);
            echo '<script>alert("Data inserted successfully")</script>';
        } else {
            echo "failed to inserted :)";
        }
        unset($result);
    }

}
