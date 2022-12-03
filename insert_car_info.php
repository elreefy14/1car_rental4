<?php
$servername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "CarRental";

$brand = $_POST['brand'];
$model = $_POST['model'];
$year = $_POST['year'];
$price = $_POST['price'];
$description = $_POST['description'];
$color = $_POST['color'];
$status = $_POST['status'];

// Create connection
$conn = new mysqli($servername, $dbUsername, $dbPassword, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
    $sql = "INSERT INTO cars (brand , model , color , year , price , description , status)
    VALUES (
    '$brand',
    '$model',
    '$color',
    '$year',
    '$price',
    '$description',
    '$status'
    )";
    if ($conn->query($sql) === TRUE) {
     echo json_encode(array("status" => "success",'id' => $conn->insert_id));  
      return 
    } else {
     echo json_encode(array("status" => "error"));
    }
  $conn->close();
//}

?>