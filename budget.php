<?php 
$budget = true;
require_once "./config/sidebar.php" ;
require_once "./config/db.php";
$event_id_sql = "SELECT EventID,EventName FROM event";
$events =mysqli_query($conn,$event_id_sql);

?>
  <div id="content">
    <h1>Budget</h1>
    <?php
     if(isset($_SESSION['message'])){
    ?>

     <div class="error_msg">

       <?php echo $_SESSION['message'] ?>
        
     </div>

     <?php
      }
     ?>
    <form action="budget_post.php" method="POST">
     <label for="eventStatus">Event Name</label>
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
      <label for="ItemName">Item Name</label>
      <input type="text" id="ItemName" name="ItemName" required>
      <label for="Itemcost">Item Cost</label>
      <input type="number" id="Itemcost" name="ItemCost" required>
      <label for="description">Description</label>
      <textarea name="description" id="" style="width: 100%;" rows="5"></textarea>
      <button name="submit" type="submit">Add Budget</button>
    </form>
  </div>

<?php 
unset($_SESSION['message']);
require_once "./config/footer.php" 
?>
