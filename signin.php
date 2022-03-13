<?php
session_start();
include_once 'conn.php';
$email= mysqli_real_escape_string($conn, $_POST['email']);
$password =mysqli_real_escape_string($conn, $_POST["password"]);
$mdpassword = md5($password);

if (isset($_POST['email'])) {
    $query    = "SELECT * FROM `users` WHERE email='$email'
                     AND password='$mdpassword'";

        $result = mysqli_query($conn, $query) or die(mysql_error());
        if (mysqli_num_rows($result) == 1) {
            while($row = mysqli_fetch_array($result)) {
                $_SESSION['id']= $row['id'];
                $_SESSION['username'] = $row['username'];
                header("Location: dashboard.php");
            }
        }
        else {
            echo 'wrong email and password';
        }
}