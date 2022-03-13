<?php
session_start();
include_once 'conn.php';
$user = $_SESSION['id'];
$name= mysqli_real_escape_string($conn, $_POST['name']);
$phone =mysqli_real_escape_string($conn, $_POST["phone"]);
$email =mysqli_real_escape_string($conn, $_POST["email"]);


$sql = "INSERT INTO `contacts`( `user`, `name`, `phone`, `email`) VALUES ('$user','$name','$phone','$email')";

if (mysqli_query($conn, $sql)) {
    header("Location: dashboard.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);