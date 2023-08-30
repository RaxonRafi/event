<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Registration</title>
</head>
<body>

    <div class="wrapper">
        <h1>Please Register first!</h1>
        <hr>
        <div class="register-body">
           <form action="registration_post.php" method="post">
                <div class="form-group">
                    <label for="FirstName">FirstName</label>
                    <input placeholder="Enter your firstname" name="firstname" class="form-input" type="text">
                </div>
                <div class="form-group">
                    <label for="LastName">LastName</label>
                    <input placeholder="Enter your Lastname" name="lastname" class="form-input" type="text">
                </div>
                <div class="form-group">
                    <label for="Email">Email</label>
                    <input placeholder="Enter your Email Address" name="email_address"  class="form-input" type="text">
                </div>
                <div class="form-group">
                    <label for="PhoneNO">Phone NO.</label>
                    <input placeholder="Enter your Phone number" name="phone_no" class="form-input" type="text">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input placeholder="Enter your Password" name="password"  class="form-input" type="text">
                </div>
                <div class="form-group">
                    <label for="Confirm-Password">Confirm Password</label>
                    <input placeholder="Re-type Password" name="cpassword" class="form-input" type="text">
                    <?php
                       if(isset($_SESSION['pass_not_match'])){
                    ?>

                    <small style="color: red;"><?php echo "***". $_SESSION['pass_not_match']?></small>

                      <?php

                       }

                       ?>
                   
                </div>
                <div class="form-group">
                    <button class="btn" type="submit">Register</button>
                </div>
           </form> 
            <p>Already have an Account? please <a href="login.html">login</a> </p>
    
        </div>
    </div>
</body>
</html>

<?php
session_unset();
?>