<?php
$guest = true;
require_once "./config/sidebar.php";
require_once "./config/db.php";
$event_id_sql = "SELECT EventID,EventName FROM event";
$events =mysqli_query($conn,$event_id_sql);
?>
<div id="content">
    <h1>Guest</h1>
    <?php
     if(isset($_SESSION['message'])){
    ?>

     <div class="error_msg">

       <?php echo $_SESSION['message'] ?>
        
     </div>

     <?php
      }
     ?>
    <form action="guest_post.php" method="post">
    <label for="eventName">Event Name</label>
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
      <label for="GuestName">Guest Name</label>
      <input type="text" id="GuestName" name="GuestName" required>

      <label for="GuestEmail">Guest Email</label>
      <input type="email" id="GuestEmail" name="GuestEmail" required>


      <label for="GuestPhone">Guest Phone</label>
      <input type="phone" id="GuestPhone" name="GuestPhone" required>
      <label for="GuestRSVPStatus">Guest RSVP Status</label>
        <select id="GuestRSVPStatus" name="GuestRSVPStatus">
            <option>Select	Guest RSVP Status...</option>
            <option value="Active">Active</option>
            <option value="Completed">Completed</option>
            <option value="Cancelled">Cancelled</option>
        </select>
      <button name="submit" type="submit">Add Event</button>
    </form>
</div>

<?php
unset($_SESSION['message']);
require_once "./config/footer.php"
?>