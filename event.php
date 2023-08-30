<?php 
$event = true;
require_once "./config/sidebar.php" 
?>

  <div id="content">
    <h1>Events</h1>
    <a class="evt-view-btn" href="eventList.html">View Event List</a>
    <div class="form-class">
      <form>

        <label for="eventName">Event Name</label>
        <input type="text" id="eventName" name="eventName" required>
        
        <label for="eventDate">Event Date</label>
        <input type="date" id="eventDate" name="eventDate" required>
        <label for="eventTime">Event time</label>
        <input type="time" id="eventTime" name="eventDate" required>
        <label for="eventLocation">Event Location</label>
        <input type="text" id="eventLocation" name="eventLocation" required>
        <label for="eventType">Description</label>
        <textarea name="" id="" style="width: 100%;" rows="5"></textarea>
        <label for="eventStatus">Event Status</label>
          <select id="eventStatus" name="eventStatus">
              <option>Select Event Status...</option>
              <option value="Active">Active</option>
              <option value="Completed">Completed</option>
              <option value="Cancelled">Cancelled</option>
          </select>
        
        <button type="submit">Add Event</button>
      </form>
    </div>
   
  </div>
  <?php
   require_once "./config/footer.php" 
  ?>