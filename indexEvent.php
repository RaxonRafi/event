<?php
require_once "./config/db.php";

$event_sql="SELECT * FROM event_task_view";
$data=mysqli_query($conn,$event_sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Planner</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>

    <div class="header-content">
        <div class="title">
             <h1>Event Planner</h1>
        </div>
        <div class="navigation">
            <nav>
                <ul>
                    <li><a href="registration.php">Registration</a></li>
                    <li><a href="login.php">Login</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <section class="main-content">
        <div class="event-list">
            <table>
                <tr>

                    <th>Event Name</th>
                    <th>Task Assigned To</th>
                    <th>Task Description</th>
                    <th>Task status</th>
                </tr>
        
                <?php
                foreach($data as $item){
                ?>
                <tr>
                    <td> <?php echo $item['EventName']  ?> </td>
                    <td><?php echo $item['TaskAssignedTo'] ?></td>
                    <td><?php echo $item['TaskDescription'] ?></td>
                    <td><?php echo $item['TaskStatus'] ?></td>
                </tr>
                
                <?php
                }
                ?>
            </table>

        </div>
    </section>
</body>
</html>
