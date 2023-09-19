<?php

require_once "./config/db.php";
$restore_event_id = $_GET['EventID'];
$update_sql = "UPDATE backup SET deleted = 1 WHERE EventID = '$restore_event_id'";
$update_result = mysqli_query($conn,$update_sql);

if($update_result){

    $insert_sql = "INSERT INTO event (EventID, EventName, EventDate, EventTime, EventLocation, EventDescription, EventStatus)
    SELECT EventID, EventName, EventDate, EventTime, EventLocation, EventDescription, EventStatus
    FROM backup
    WHERE EventID = '$restore_event_id'";
    $update_result = mysqli_query($conn,$insert_sql);

    if($insert_sql){
        $delete_sql = "DELETE FROM backup WHERE EventID = '$restore_event_id'";
        $update_result = mysqli_query($conn,$delete_sql);
    }


}

header("location:trash.php");

?>