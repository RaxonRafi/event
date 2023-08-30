<?php
session_start();
$dashboard = true;
require_once "./config/sidebar.php"
?>
  <div id="content">
    <h1>Welcome, <?php echo $_SESSION['firstName']." ". $_SESSION['lastName'] ?></h1>
    <p>This is where you can manage events, users, and settings for the event planner app.</p>
  </div>
<?php
require_once "./config/footer.php"
?>
