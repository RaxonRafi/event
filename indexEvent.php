<?php
require_once "./config/db.php";

$event_sql="SELECT EventName,EventDate,EventDescription FROM event";
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
                    <th>Event Date</th>
                    <th>Event Description</th>
                </tr>
        
                <?php
                foreach($data as $item){
                ?>
                <tr>
                    <td> <?php echo $item['EventName']  ?> </td>
                    <td><?php echo $item['EventDate'] ?></td>
                    <td><?php echo $item['EventDescription'] ?></td>
                </tr>
                
                <?php
                }
                ?>
            </table>

        </div>
    </section>
</body>
</html>
