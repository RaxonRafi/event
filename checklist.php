<?php 
$checklist = true;
require_once "./config/sidebar.php" 
?>
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
<?php 
require_once "./config/footer.php" 
?>

