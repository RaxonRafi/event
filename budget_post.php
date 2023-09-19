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
    $ItemName = $_POST['ItemName'];
    $ItemCost = $_POST['ItemCost'];
    $description = mysqli_real_escape_string($conn,$_POST['description']);
    
    $BudgetID = generateUniqueID();
    
    $budget_insert_sql = "INSERT INTO budget(BudgetID, ItemName, ItemDescription, ItemCost, EventID) VALUES ('$BudgetID','$ItemName','$description','$ItemCost','$EventID')";
    $result = mysqli_query($conn,$budget_insert_sql);
        
    if($result){
    
        $_SESSION['message'] = "Budget Added Successfully!";
       
        header("location:budget.php");
    
    }else{
    
        $_SESSION['message'] = "Failed to add budget!";
        header("location:budget.php");
    
    }


}


?>