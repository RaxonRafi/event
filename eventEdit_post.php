<?php
session_start();
require_once "./config/db.php";
$EventID = $_GET['EventID'];
$eventName = $_POST['eventName'];
$eventDate = $_POST['eventDate'];
$eventTime = $_POST['eventTime'];
$eventLocation = $_POST['eventLocation'];
$description = $_POST['description'];
$eventStatus = $_POST['eventStatus'];

$update_event_sql = "UPDATE event SET EventName= '$eventName',EventDate= '$eventDate ',EventTime='$eventTime',EventLocation='$eventLocation',EventDescription='$description',EventStatus='$eventStatus' WHERE EventID = '$EventID'";
$result = mysqli_query($conn,$update_event_sql);
if($result){
    
    $_SESSION['message'] = "Event Updated Successfully!";
    header("location: eventEdit.php?EventID=".$EventID);

}else{

    $_SESSION['message'] = "Failed to Update Event!";
    header("location: eventEdit.php?EventID=".$EventID);

}


?>