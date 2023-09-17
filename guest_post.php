<?php
session_start();
require_once "./config/db.php";

if(isset($_POST['submit'])){

    function generateUniqueID() {
        $uniqueID = uniqid();
        $uniqueID = str_replace(".", "", $uniqueID); // Remove the dots from uniqid
        $uniqueID = substr($uniqueID, 0, 10); // Get the first 10 characters
        
        return $uniqueID;
    }
    
    $EventID = $_POST['EventID'];
    $GuestName = $_POST['GuestName'];
    $GuestEmail = $_POST['GuestEmail'];
    $GuestPhone = $_POST['GuestPhone'];
    $GuestRSVPStatus = $_POST['GuestRSVPStatus'];
    
    $GuestID = generateUniqueID();
    
    $guest_insert_sql = "INSERT INTO guest(GuestID, GuestName, GuestEmail, GuestPhone,GuestRSVPStatus, EventID) VALUES ('$GuestID',' $GuestName','$GuestEmail','$GuestPhone',' $GuestRSVPStatus','$EventID')";
    $result = mysqli_query($conn,$guest_insert_sql);
        
    if($result){
    
        $_SESSION['message'] = "Guest Added Successfully!";
       
        header("location: guest.php");
    
    }else{
    
        $_SESSION['message'] = "Failed to add Guest!";
        header("location:guest.php");
    
    }


}




?>