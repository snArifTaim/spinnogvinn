<?php

error_reporting(E_ERROR | E_PARSE);

require_once $_SERVER['DOCUMENT_ROOT'] . '/admin/dbcon.php';



if (isset($_POST["profileSubmit"])) {
    $name = $_POST["iname"];
    $ytlink = $_POST["ytlink"];
    $parentID = $_POST["parentID"];

    $file_name  = $_FILES["image"]["name"];
    $tmpname    = $_FILES["image"]["tmp_name"];
    $target_dir = $_SERVER["DOCUMENT_ROOT"] . "/admin/assets/images/".$file_name;


    if (!empty($name) && !empty($ytlink)) {
        $sql = "INSERT INTO `instructor_profile`( `name`, `image`, `ytLink`, `parent_id`) VALUES ('$name', '$file_name', '$ytlink', '$parentID')";
        $result = $conn->query($sql);

        if ($result == true ) {
            move_uploaded_file($tmpname, $target_dir);
            echo '<script>alert("data inserted successfully")</script>';
        } else {
            echo "failed to inserted :)";
        }
    }
}
