<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
     <title>login page</title>
</head>
<body>
   
<div class="wrapper">
    <form action="login_post.php" method="post">
        <h1>LOGIN</h1>
        <p>Please Enter Email & Password for login</p>
        <hr>
        <div class="register-body">
            <div class="form-group">
                <label for="E_mail">Email</label>
                <input class="form-input" autocomplete="off" id="E_mail" name="email_address" placeholder="Enter your Email Address" type="text">
            </div> 
            <div class="form-group">
                <label for="password">Password</label>
                <input class="form-input" autocomplete="off" id="password" name="password" placeholder="Enter your Password" type="password">
            </div>
            <div  class="form-group">
                <button type="submit" class="btn">login</button>
            </div>
            <p>Don't have an Account? please <a href="registration.html">Register</a> </p>
        </div>
    </form> 
</div>
</body>
</html>