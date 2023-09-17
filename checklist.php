<?php 
$checklist = true;
require_once "./config/sidebar.php";
require_once "./config/db.php";
$event_id_sql = "SELECT EventID,EventName FROM event";
$events =mysqli_query($conn,$event_id_sql);
?>
  <div id="content">
    <h1>Checklist</h1>
    <?php
     if(isset($_SESSION['message'])){
    ?>

     <div class="error_msg">

       <?php echo $_SESSION['message'] ?>
        
     </div>

     <?php
      }
     ?>
    <form action="checklist_post.php" method="post">
    <label for="eventStatus">Event Name</label>
     <select name="EventID" id="">

     <option>--Select an Event--</option>
     <?php
     foreach($events as $event){
     ?>
       <option value="<?php echo $event['EventID'] ?>"><?php echo $event['EventName'] ?></option>
       
     <?php
      }
     ?>
  
      </select>
      <label for="ChecklistItem">	Check listItem</label>
      <input type="text" id="ChecklistItem" name="ChecklistItem" required>
      <label for="ChecklistItem">Checklist Status</label>
        <select id="ChecklistItem" name="ChecklistStatus">
            <option>Select Checklist Status...</option>
            <option value="Active">Active</option>
            <option value="Completed">Completed</option>
            <option value="Cancelled">Cancelled</option>
        </select>
      <button name="submit" type="submit">Add ChecklistItem</button>

    </form>
  </div>
<?php 
unset($_SESSION['message']);
require_once "./config/footer.php" 
?>

