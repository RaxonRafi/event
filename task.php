<?php
$task = true;
require_once "./config/sidebar.php";
require_once "./config/db.php";
$event_id_sql = "SELECT EventID,EventName FROM event";
$events =mysqli_query($conn,$event_id_sql);
?>
<div id="content">
    <h1>Task</h1>
    <?php
     if(isset($_SESSION['message'])){
    ?>

     <div class="error_msg">

       <?php echo $_SESSION['message'] ?>
        
     </div>

     <?php
      }
     ?>
    <form action="task_post.php" method="post">
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
      <label for="TaskAssignedTo">Task Assigned To</label>
      <input type="text" id="TaskAssignedTo" name="TaskAssignedTo" required>
      
      <label for="TaskDescription">Task Description</label>
      <textarea name="TaskDescription" id="" style="width: 100%;" rows="5"></textarea>
      
      <label for="Taskstatus">Task Status</label>
      <select id="Taskstatus" name="Taskstatus">
          <option>Select Task Status...</option>
          <option value="Active">Active</option>
          <option value="Completed">Completed</option>
          <option value="Cancelled">Cancelled</option>
      </select>
      <button name="submit" type="submit">Add Task</button>
    </form>
  </div>
<?php
unset($_SESSION['message']);
require_once "./config/footer.php"
?>
