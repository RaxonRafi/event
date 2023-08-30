<?php
session_start();
$flag = true;
require_once "./config/db.php";

if($_SERVER['REQUEST_METHOD'] == "POST"){


    if($_POST['password'] != $_POST['cpassword']){

        $flag = false;
        $_SESSION['pass_not_match'] = "Password and Confirm Password Should be same!";
        header("location:registration.php");
    }else{

        if(isset($flag)){

            $uniqueID = uniqid();
            $uniqueID = str_replace(".", "", $uniqueID); 
            $uniqueID = substr($uniqueID, 0, 10);
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email_address = $_POST['email_address'];
            $phone_no = $_POST['phone_no'];
            $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
    
            $register_sql = "INSERT INTO users(uid, firstName, lastName, password, email, phoneNo) VALUES ('$uniqueID','$firstname','$lastname','$password','$email_address','$phone_no')";
    
            $_SESSION['firstName'] = $firstname;
            $_SESSION['lastName'] = $lastname;
            $_SESSION['email_address'] = $email_address;
            mysqli_query($conn,$register_sql);

            header("location:dashboard.php");
    
        }
        
    
    }

 




}







?>