<?php
session_start();
require_once "./config/db.php";
$EventID = $_GET['EventID'];
$event_delete_sql = "DELETE event, task, budget, guest, checklist
FROM event
LEFT JOIN task ON event.EventID = task.EventID
LEFT JOIN budget ON event.EventID = budget.EventID
LEFT JOIN guest ON event.EventID = guest.EventID
LEFT JOIN checklist ON event.EventID = checklist.EventID
WHERE event.EventID = '$EventID'";
$result = mysqli_query($conn,$event_delete_sql);

if($result){
    $_SESSION['message'] = "Event Deleted Successfully";
    header("location: eventList.php");
} else {

    $_SESSION['message'] = "Event Delete Failed";
    header("location: eventList.php");

}

?>