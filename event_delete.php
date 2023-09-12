<?php
session_start();
require_once "./config/db.php";
$EventID = $_GET['EventID'];
$event_delete_sql = "DELETE FROM event WHERE EventID = $EventID";
$result = mysqli_query($conn,$event_delete_sql);

if($result){
    $_SESSION['message'] = "Event Deleted Successfully";
    header("location: eventList.php");
} else {

    $_SESSION['message'] = "Event Delete Failed";
    header("location: eventList.php");

}

?>