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
    <h1>Checklist</h1>
    <form>
      <label for="	ChecklistItem">	Check listItem</label>
      <input type="text" id="ChecklistItem" name="ChecklistItem" required>
      
      
      <label for="ChecklistItem">ChecklistItem</label>
        <select id="ChecklistItem" name="ChecklistItem">
            <option>Select Checklist Status...</option>
            <option value="Active">Active</option>
            <option value="Completed">Completed</option>
            <option value="Cancelled">Cancelled</option>
        </select>
     
      <button type="submit">Add ChecklistItem</button>



    </form>
  </div>
</body>
</html>
