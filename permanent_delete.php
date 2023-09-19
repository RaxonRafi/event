<?php
require_once "./config/db.php";

// 

print_r($_GET);
session_start();
require_once "./config/db.php";
$EventID = $_GET['EventID'];
$backup_delete_sql = "DELETE FROM backup WHERE EventID= '$EventID'";

$result = mysqli_query($conn,$backup_delete_sql);

if($result){
    $_SESSION['message'] = "Event Deleted Successfully";
    header("location: trash.php");
} else {

    $_SESSION['message'] = "Event Delete Failed";
    header("location: trash.php");
}

?>