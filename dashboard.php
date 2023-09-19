<?php
$dashboard = true;
require_once "./config/db.php";
require_once "./config/sidebar.php";
if(!isset($_SESSION['email_address'])){

  header("location: login.php");
  // SELECT COUNT(*) AS total_event FROM event;
  
}
$total_event_sql="SELECT COUNT(*) AS total_event FROM event";
$total_event_cnt=mysqli_fetch_assoc(mysqli_query($conn,$total_event_sql));

$total_completed_event_sql="SELECT COUNT(*) AS completed_event FROM event WHERE EventStatus = 'Completed'";
$total_completed_event_cnt=mysqli_fetch_assoc(mysqli_query($conn,$total_completed_event_sql));

$total_active_event_sql="SELECT COUNT(*) AS active_event FROM event WHERE EventStatus = 'Active'";
$total_active_event_cnt=mysqli_fetch_assoc(mysqli_query($conn,$total_active_event_sql));

$total_user_sql="SELECT COUNT(*) AS total_user FROM users";
$total_user_cnt=mysqli_fetch_assoc(mysqli_query($conn,$total_user_sql));

?>
  <div id="content">
    <h1>Welcome, Admin </h1>

    <div class="dashboard-items">
      <div class="box">
        <h2>total events:<?php echo $total_event_cnt['total_event'];?> </h2>
      </div>
      <div class="box">
        <h2>Active events:<?php echo $total_active_event_cnt['active_event'];?> </h2>
      </div>
      <div class="box">
        <h2>total Users:<?php echo $total_user_cnt['total_user'];?> </h2>
      </div>
      <div class="box">
        <h2>Completed events:<?php echo $total_completed_event_cnt['completed_event'];?> </h2>
      </div>
    </div>


  
   
  </div>
<?php
require_once "./config/footer.php"
?>
