<?php 
session_start();
$event = true;
require_once "./config/sidebar.php" 
?>

  <div id="content">
    <h1>Events</h1>

    <?php
     if(isset($_SESSION['message'])){
    ?>

     <div class="error_msg">

       <?php echo $_SESSION['message'] ?>
        
     </div>

     <?php
      }
     ?>


    <a class="evt-view-btn" href="eventList.html">View Event List</a>
    <div class="form-class">
      <form action="event_post.php" method="post">
        <label for="eventName">Event Name</label>
        <input type="text" id="eventName" name="eventName" required>
        <label for="eventDate">Event Date</label>
        <input type="date" id="eventDate" name="eventDate" required>
        <label for="eventTime">Event time</label>
        <input type="time" id="eventTime" name="eventTime" required>
        <label for="eventLocation">Event Location</label>
        <input type="text" id="eventLocation" name="eventLocation" required>
        <label for="description">Description</label>
        <textarea name="description" id="" style="width: 100%;" rows="5"></textarea>
        <label for="eventStatus">Event Status</label>
          <select id="eventStatus" name="eventStatus">
              <option>Select Event Status...</option>
              <option value="Active">Active</option>
              <option value="Completed">Completed</option>
              <option value="Cancelled">Cancelled</option>
          </select>
        
        <button name="submit" type="submit">Add Event</button>
      </form>
    </div>
   
  </div>
  <?php
   require_once "./config/footer.php";
   session_unset();
  ?>