<?php
require_once "./config/sidebar.php";
require_once "./config/db.php";
$EventID = $_GET['EventID'];
$join_query = "SELECT *
FROM event
left JOIN task ON event.EventID = task.EventID
left JOIN budget ON event.EventID = budget.EventID
left JOIN guest ON event.EventID = guest.EventID
left JOIN checklist ON event.EventID = checklist.EventID
WHERE event.EventID = '$EventID'


";
$data = mysqli_query($conn,$join_query);


?>
  <div id="content">
      <h1>Event Details!</h1>

        </head>
        <body>
            <div class="table-data">
                <h1></h1>
                <table>
                    <tr>
                        <th>Task Assigned To</th>
                        <th>Task Description</th>
                        <th>Task Status</th>
                        <th>ItemName</th>
                        <th>Item Description</th>
                        <th>ItemCost</th>
                        <th>Guest Name</th>
                        <th>Guest Email</th>
                        <th>Guest Phone</th>
                        <th>Guest RSVP Status</th>
                        <th>Checklist Item</th>
                        <th>Checklist Status</th>
                        
                    </tr>
                    <?php
                    if(mysqli_num_rows($data)>0){

                   
                    foreach($data as $task){
                    ?>
                    <tr>
                        <td><?php echo $task['TaskAssignedTo'] ?></td>
                        <td><?php echo $task['TaskDescription'] ?></td>
                        <td><?php echo $task['TaskStatus'] ?></td>
                        <td><?php echo $task['ItemName'] ?></td>
                        <td><?php echo $task['ItemDescription'] ?></td>
                        <td><?php echo $task['ItemCost'] ?></td>
                        <td><?php echo $task['GuestName'] ?></td>
                        <td><?php echo $task['GuestEmail'] ?></td>
                        <td><?php echo $task['GuestPhone'] ?></td>
                        <td><?php echo $task['GuestRSVPStatus'] ?></td>
                        <td><?php echo $task['ChecklistItem'] ?></td>
                        <td><?php echo $task['ChecklistStatus'] ?></td>

                    </tr>
                    <?php
                     }
                    }else{
                       echo "<h1>No data Available</h1>";
                    }
                    ?>
                </table>

            </div>
            <!-- <div class="table-data">
                <h1>Budget</h1>
                <table>
                    <tr>
                        <th>ItemName</th>
                        <th>Item Description</th>
                        <th>ItemCost</th>
                        
                    </tr>
                    <?php
                    foreach($data as $budget){
            
                    ?>
                    <tr>
                        <td><?php echo $budget['ItemName'] ?></td>
                        <td><?php echo $budget['ItemDescription'] ?></td>
                        <td><?php echo $budget['ItemCost'] ?></td>
                
                    </tr>
                    <?php
                    }
                    ?>
                </table>

            </div>
            <div class="table-data">
                <h1>Guests</h1>
                <table>
                    <tr>
                        <th>Guest Name</th>
                        <th>Guest Email</th>
                        <th>Guest Phone</th>
                        <th>Guest RSVP Status</th>
                        
                    </tr>
                    <?php
                    foreach($data as $guest){
                    ?>
                    <tr>
                        <td><?php echo $guest['GuestName'] ?></td>
                        <td><?php echo $guest['GuestEmail'] ?></td>
                        <td><?php echo $guest['GuestPhone'] ?></td>
                        <td><?php echo $guest['GuestRSVPStatus'] ?></td>
                    </tr>
                    <?php
                    }
                    ?>
                </table>

            </div>
            <div class="table-data">
                <h1>Checklist</h1>
                <table>
                    <tr>
                        <th>Checklist Item</th>
                        <th>Checklist Status</th>
                        
                    </tr>
                    <?php
                    foreach($data as $checklist){
                        if(isset($checklist)){
                            echo '<tr>No data Available!</tr>';
                            break;
                        }else{

                        
                    ?>
                    
                    <tr>
                        <td><?php echo $checklist['ChecklistItem'] ?></td>
                        <td><?php echo $checklist['ChecklistStatus'] ?></td>

                    </tr>
                    <?php
                     }
                    }
                    ?>
                </table>

            </div> -->

    </div>
<?php
require_once "./config/footer.php";
?>