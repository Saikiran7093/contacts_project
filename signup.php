<?php
include_once 'conn.php';
$email= mysqli_real_escape_string($conn, $_POST['email']);
$username =mysqli_real_escape_string($conn, $_POST["username"]);
$password =mysqli_real_escape_string($conn, $_POST["password"]);
$mdpassword = md5($password);
$secert =mysqli_real_escape_string($conn, $_POST["secret"]);


$sql = "INSERT INTO `users`(`email`, `username`, `password`, `secret`) VALUES ('$email','$username','$mdpassword','$secert')";

if (mysqli_query($conn, $sql)) {
  echo "success";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);