<?php

require_once "./database/db.php";
if($_SERVER['REQUEST_METHOD'] == "POST"){

    $uniqueID = uniqid();
    $uniqueID = str_replace(".", "", $uniqueID); 
    $uniqueID = substr($uniqueID, 0, 10);
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email_address = $_POST['email_address'];
    $phone_no = $_POST['phone_no'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

$register_sql = "INSERT INTO users(uid, firstName, lastName, password, cpassword, email, phoneNo) VALUES ('$uniqueID','$firstname','$lastname','$email_address','$phone_no','$password','$cpassword')";

mysqli_query($conn,$register_sql);



}







?>