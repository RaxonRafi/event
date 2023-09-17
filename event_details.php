<?php
// require_once "./config/sidebar.php";
require_once "./config/db.php";
$EventID = $_GET['EventID'];
$join_query = "SELECT *
FROM event
left JOIN task ON event.EventID = task.EventID
left JOIN budget ON event.EventID = budget.EventID
left JOIN guest ON event.EventID = guest.EventID
left JOIN checklist ON event.EventID = checklist.EventID
WHERE event.EventID = '$EventID'";
$data = mysqli_fetch_assoc(mysqli_query($conn,$join_query));

print_r($data);


?>