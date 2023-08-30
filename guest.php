<?php
$guest = true;
require_once "./config/sidebar.php"
?>
<div id="content">
    <h1>Guest</h1>
    <form>
      <label for="GuestName">Guest Name</label>
      <input type="text" id="GuestName" name="GuestName" required>
      <label for="GuestEmail">Guest Email</label>
      <input type="email" id="GuestEmail" name="GuestEmail" required>
      <label for="GuestPhone">Guest Phone</label>
      <input type="phone" id="GuestPhone" name="GuestPhone" required>
      <label for="GuestRSVPStatus">Guest RSVP Status</label>
        <select id="GuestRSVPStatus	" name="GuestRSVPStatus	">
            <option>Select	Guest RSVP Status...</option>
            <option value="Active">Active</option>
            <option value="Completed">Completed</option>
            <option value="Cancelled">Cancelled</option>
        </select>
      <button type="submit">Add Event</button>
    </form>
</div>

<?php
require_once "./config/footer.php"
?>