<?php
require_once "./config/sidebar.php";
require_once "./config/db.php";
$eventListSql ="SELECT * FROM backup";
$eventLists = mysqli_query($conn,$eventListSql);

?>
    <div id="content">
      <h1>Trash</h1>

    <?php
     if(isset($_SESSION['message'])){
    ?>

     <div class="error_msg">

       <?php echo $_SESSION['message'] ?>
        
     </div>

     <?php
      }
     ?>
        </head>
        <body>
        

        <table>
          <tr>
            <th>Event Name</th>
            <th>Event Date</th>
            <th>Event Time</th>
            <th>Location</th>
            <th>Description</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
          <?php
            foreach($eventLists as $eventList){
          ?>
          <tr>
            <td><?php echo $eventList['EventName'] ?></td>
            <td><?php echo $eventList['EventDate'] ?></td>
            <td><?php echo $eventList['EventTime'] ?></td>
            <td><?php echo $eventList['EventLocation'] ?></td>
            <td><?php echo $eventList['EventDescription'] ?></td>
            <td><?php echo $eventList['EventStatus'] ?></td>
            <td>
                <a class="global-btn" href="restore.php?EventID=<?php echo $eventList['EventID']?>">Restore</a>
                <a class="global-btn" onClick ="return confirm('Are you sure you want to delete?')" href="event_delete.php?EventID=<?php echo $eventList['EventID']?>">Delete Permanently</a>
            </td>
          </tr>
          <?php
          }
          ?>
        </table>
    </div>
<?php
unset($_SESSION['message']);
require_once "./config/footer.php";
?>
