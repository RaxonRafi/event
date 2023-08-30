<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="./css/main.css">

<title>Event Planner Admin Dashboard</title>

</head>
<body>
<div id="sidebar">
  <h1 class="header-title">EventApp</h1>
  <ul>
        <a href="dashboard.html"><li class="active">Dashboard</li></a>
        <a href="event.html"><li>Events</li></a>
        <a href="budget.html"><li>Budget</li></a>
        <a href="task.html"><li>Task</li></a>
        <a href="checklist.html"><li>Checklist</li></a>
        <a href="guest.html"><li>Guest</li></a>
        <a href="event.html"><li>Logout</li></a>
    </ul>
  </div>
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
</body>
</html>