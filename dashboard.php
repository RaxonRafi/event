<?php
$dashboard = true;
require_once "./config/sidebar.php";
if(!isset($_SESSION['email_address'])){

  header("location: login.php");
  
}
// <?php echo $_SESSION['firstName']." ". $_SESSION['lastName'] ?>
?>
  <div id="content">
    <h1>Welcome, Admin </h1>
    <p>This is where you can manage events, users, and settings for the event planner app.</p>
  </div>
<?php
require_once "./config/footer.php"
?>
