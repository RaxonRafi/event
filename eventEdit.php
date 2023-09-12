<?php 
session_start();
require_once "./config/db.php";
require_once "./config/sidebar.php" ;
$EventID = $_GET['EventID'];
$select_Event_Sql = "SELECT * FROM event WHERE EventID = $EventID";
$data = mysqli_fetch_assoc(mysqli_query($conn,$select_Event_Sql)); 

?>

  <div id="content">
    <h1>Edit Event</h1>
    <?php
     if(isset($_SESSION['message'])){
    ?>

     <div class="error_msg">

       <?php echo $_SESSION['message'] ?>
        
     </div>

     <?php
      }
     ?>
    <a class="evt-view-btn" href="eventList.php">View Event List</a>
    <div class="form-class">
      <form action="eventEdit_post.php?EventID=<?php echo $data['EventID'] ?>" method="post">
        <label for="eventName">Event Name</label>
        <input type="text" value="<?php echo $data['EventName'] ?>" id="eventName" name="eventName" required>
        <label for="eventDate">Event Date</label>
        <input type="date" value="<?php echo $data['EventDate'] ?>"  id="eventDate" name="eventDate" required>
        <label for="eventTime">Event time</label>
        <input type="time" value="<?php echo $data['EventTime'] ?>"  id="eventTime" name="eventTime" required>
        <label for="eventLocation">Event Location</label>
        <input type="text" value="<?php echo $data['EventLocation'] ?>"  id="eventLocation" name="eventLocation" required>
        <label for="description">Description</label>
        <input  name="description" value="<?php echo $data['EventDescription'] ?>"  id="" >
        <label for="eventStatus">Event Status</label>
          <select id="eventStatus" name="eventStatus">
              <option>Select Event Status...</option>
              <option value="Active" <?php if($data['EventStatus'] == "Active"){ echo "selected";}?> >Active</option>
              <option value="Completed" <?php if($data['EventStatus'] == "Completed"){ echo "selected";}?> >Completed</option>
              <option value="Cancelled"<?php if($data['EventStatus'] == "Cancelled"){ echo "selected";}?> >Cancelled</option>
          </select>
        
        <button name="submit" type="submit">Add Event</button>
      </form>
    </div>
   
  </div>
  <?php
   require_once "./config/footer.php";
   session_unset();
  ?>