<?php
session_start();
include("connectDB.php");
$query = "select * from users where username = ? and password = ? ";

// prepare and bindss
$stmt = $connect->prepare($query);
$stmt->bind_param("ss", $_POST["username"], $_POST["password"] );
$stmt->execute();
$result = $stmt->get_result();
while ($row = $result->fetch_assoc()) {
  //print_r($row);
  $_SESSION['username'] = $row['username'];
  $_SESSION['status'] = $row['status'];

}
header("location:admin.php"); // redirect
?>

