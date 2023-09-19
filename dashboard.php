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

?>
  <div id="content">
    <h1>Welcome, Admin </h1>
    <h2>
      total events:<?php echo $total_event_cnt['total_event'];?>
    </h2>
   
  </div>
<?php
require_once "./config/footer.php"
?>
