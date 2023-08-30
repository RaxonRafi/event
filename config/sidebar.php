<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="./css/main.css">
<title>Event Planner Admin Dashboard</title>

</head>
<body>
  <div id="sidebar">
    <h1 class="header-title">EventApp</h1>
    <ul>
        <a href="dashboard.php"><li class="<?php echo isset($dashboard) ? "active" : "" ?>">Dashboard</li></a>
        <a href="event.php"><li class="<?php echo isset($event) ? "active" : "" ?>">Events</li></a>
        <a href="budget.php"><li class="<?php echo isset($budget) ? "active" : "" ?>">Budget</li></a>
        <a href="task.php"><li class="<?php echo isset($task) ? "active" : "" ?>">Task</li></a>
        <a href="checklist.php"><li class="<?php echo isset($checklist) ? "active" : "" ?>">Checklist</li></a>
        <a href="guest.php"><li class="<?php echo isset($guest) ? "active" : "" ?>">Guest</li></a>
        <a href="event.php"><li>Logout</li></a>      
    </ul>
  </div>

