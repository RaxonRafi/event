<?php 
$budget = true;
require_once "./config/sidebar.php" 
?>
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

<?php 
require_once "./config/footer.php" 
?>
