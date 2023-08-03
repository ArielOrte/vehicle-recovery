<?php
// Establish database connection
$host = "localhost";
$username = "root";
$password = "";
$dbname = "car_db";

$conn = mysqli_connect($host, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Retrieve request ID from form
$request_id = $_POST['request_id'];
session_start();
$id = $_SESSION["id"];
$result = mysqli_query($conn, "SELECT * FROM mechanics WHERE id = $id");
$row = mysqli_fetch_assoc($result);

$mechna =$row["user_name"];
$mechnu =$row["number"];

// Update request status in database
$sql = "UPDATE requests SET status='approved-on the way', mechID='$id', mechName='$mechna', mechNumber='$mechnu' WHERE id='$request_id'";



if (mysqli_query($conn, $sql)) {
  echo "Request approved successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>