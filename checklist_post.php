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
    $ChecklistItem = $_POST['ChecklistItem'];
    $ChecklistStatus = $_POST['ChecklistStatus'];
   
    $ChecklistID = generateUniqueID();
    
    $checklist_insert_sql = "INSERT INTO checklist(ChecklistID, ChecklistItem, ChecklistStatus, EventID) VALUES (' $ChecklistID','$ChecklistItem','$ChecklistStatus','$EventID')";
    $result = mysqli_query($conn,$checklist_insert_sql);
        
    if($result){
    
        $_SESSION['message'] = "Checklist Added Successfully!";
    
        header("location: checklist.php");
    
    }else{
    
        $_SESSION['message'] = "Failed to add Checklist!";
        header("location:checklist.php");
    
    }


}




?>