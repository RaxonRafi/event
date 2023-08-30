<?php
$task = true;
require_once "./config/sidebar.php"
?>
<div id="content">
    <h1>Task</h1>
    <form>
      <label for="TaskAssignedTo">Task Assigned To</label>
      <input type="text" id="TaskAssignedTo" name="TaskAssignedTo" required>
      
      <label for="TaskDescription">Task Description</label>
      <textarea name="" id="" style="width: 100%;" rows="5"></textarea>
      
      <label for="Taskstatus">Task Status</label>
      <select id="Taskstatus" name="Taskstatus">
          <option>Select Task Status...</option>
          <option value="Active">Active</option>
          <option value="Completed">Completed</option>
          <option value="Cancelled">Cancelled</option>
      </select>
      <button type="submit">Add Task</button>
    </form>
  </div>
<?php
require_once "./config/footer.php"
?>
