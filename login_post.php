<?php
require_once "./config/db.php";

$email_address=$_POST['email_address'];
$password=$_POST['password'];
$loginSql = "SELECT password FROM users WHERE email = '$email_address'";
$result =mysqli_fetch_assoc(mysqli_query($conn,$loginSql));

if (password_verify($password,$result['password'])) {
    
   header("location: dashboard.php");

} else {
    header("location: login.php");
}




?>