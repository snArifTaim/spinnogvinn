<?php

error_reporting(E_ERROR | E_PARSE);

require_once $_SERVER['DOCUMENT_ROOT'].'/admin/dbcon.php';


if(isset($_POST["catgsubmit"])){

    $title = $_POST["title"];

    $file_name  = $_FILES["image"]["name"];
    $tmpname    = $_FILES["image"]["tmp_name"];
    $target_dir = $_SERVER["DOCUMENT_ROOT"] . "/admin/assets/images/".$file_name;

    $sql = "INSERT INTO `category`(`title`, `image`) VALUES ( '$title','$file_name')";

    $result = $conn->query($sql);

    if($result == true){
        move_uploaded_file($tmpname, $target_dir);
        echo '<script>alert("data inserted successfully")</script>';
    }else{
        echo "failed to inserted :)";
    }

}


