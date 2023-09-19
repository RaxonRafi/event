<?php
session_start();

require_once "./config/db.php";

function generateUniqueID() {
    $uniqueID = uniqid();
    $uniqueID = str_replace(".", "", $uniqueID); // Remove the dots from uniqid
    $uniqueID = substr($uniqueID, 0, 10); // Get the first 10 characters
    
    return $uniqueID;
}

$uniqueID = generateUniqueID();

if(isset($_POST['submit'])){

    $eventName = $_POST['eventName'];
    $eventDate = $_POST['eventDate'];
    $eventTime = $_POST['eventTime'];
    $eventLocation =mysqli_real_escape_string($conn,$_POST['eventLocation']) ;
    $description = mysqli_real_escape_string($conn,$_POST['description']);
    
    $eventStatus = $_POST['eventStatus'];
    
    $eventInsert = "INSERT INTO event(EventID,EventName, EventDate, EventTime, EventLocation, EventDescription,EventStatus) VALUES ('$uniqueID','$eventName','$eventDate ','$eventTime','$eventLocation','$description','$eventStatus')";
     $result = mysqli_query($conn,$eventInsert);
    
    if($result){
    
        $_SESSION['message'] = "Event Added Successfully!";
        $_SESSION['EventID'] = $uniqueID;
        header("location:event.php");
    
    }else{
    
        $_SESSION['message'] = "Failed to add Event!";
        header("location:event.php");
    
    }
    
}



?>