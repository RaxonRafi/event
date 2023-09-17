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
    $TaskAssignedTo = $_POST['TaskAssignedTo'];
    $Taskstatus = $_POST['Taskstatus'];
    $TaskDescription = $_POST['TaskDescription'];
    
    $TaskID = generateUniqueID();
    
    $task_insert_sql = "INSERT INTO task(TaskID, TaskDescription, TaskStatus, TaskAssignedTo, EventID) VALUES ('$TaskID','$TaskDescription','$Taskstatus','$TaskAssignedTo','$EventID')";
    $result = mysqli_query($conn,$task_insert_sql);
        
    if($result){
    
        $_SESSION['message'] = "Task Added Successfully!";
       
        header("location:task.php");
    
    }else{
    
        $_SESSION['message'] = "Failed to add Task!";
        header("location:task.php");
    
    }


}




?>