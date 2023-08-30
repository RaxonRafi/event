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
</body>
</html>
