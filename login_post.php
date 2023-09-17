<?php
session_start();
require_once "./config/db.php";

$email_address=$_POST['email_address'];
$password=$_POST['password'];
$loginSql = "SELECT password FROM users WHERE email = '$email_address'";
$result =mysqli_fetch_assoc(mysqli_query($conn,$loginSql));

if (password_verify($password,$result['password'])) {
    $_SESSION['email_address'] = $email_address;
    $userSql = "SELECT * FROM users WHERE email = '$email_address'";
    $userData =mysqli_fetch_assoc(mysqli_query($conn,$userSql ));
    $_SESSION['firstName'] = $userData['firstName'];
    $_SESSION['lastName'] = $userData['lastName'];
    
     header("location: dashboard.php");

} else {
    
    header("location: login.php");
}




?>