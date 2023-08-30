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
    <h1>Budget</h1>
    <form>
      <label for="ItemName">Item Name</label>
      <input type="text" id="ItemName" name="ItemName" required>
      <label for="Itemcost">Item Cost</label>
      <input type="number" id="Itemcost" name="ItemCost" required>
      <label for="eventType">Description</label>
      <textarea name="" id="" style="width: 100%;" rows="5"></textarea>
      
      
     
      <button type="submit">Add Budget</button>
    </form>
  </div>
</body>
</html>