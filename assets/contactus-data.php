<?php
include("./dbconn.php");

// get_dbconn();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Collect form data
  $name = $_POST["name"];
  $email = $_POST["email"];
  $massage = $_POST["massage"];


  if (empty($name) || empty($email) || empty($massage)) {
    echo json_encode(['status' => false, 'msg' => "Please fill the input field!"]);

  } else {

    // Insert data into the database
    $sql = "INSERT INTO `contactdata`(`name`, `email`, `massage`) VALUES ('$name','$email','$massage')";

    if ($conn->query($sql) === TRUE) {
      // echo "New record created successfully";
      header("Location: /page/thank-you");
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }
}

// Close the database connection
$conn->close();
