<?php
    include('server.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Register</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="header_1">
            <h1>Welcome to Social media APP!</h1>
        </div>
        <div class="header">
            <h1>Register</h1>
        </div>
        <form method="post" action="registerauthen.php">
            <div class="input-group">
                <label>Email</label>
                <input type="text" name="email">
            </div>
            <div class="input-group">
                <label>Username</label>
                <input type="text" name="username">
            </div>
            <div class="input-group">
                <label>Password</label>
                <input type="password" name="password_1">
            </div>
            <div class="input-group">
                <label>retype Password</label>
                <input type="password" name="password_2">
            </div>
            <div class="input-group">
                <label>First Name</label>
                <input type="text" name="Fname">
            </div>
            <div class="input-group">
                <label>Last Name</label>
                <input type="text" name="Lname">
            </div>
            <div class="input-group">
                <label>MobileNumber</label>
                <input type="text" name="mobilenumber">
            </div>
            <div class="input-group">
            <form>
            <input type="radio" name="gender" value="M" checked> Male<br>
            <input type="radio" name="gender" value="F"> Female<br>
            </form>
            <div class="input-group">
                <label>DOB</label>
                <input type="date" name="dob">
            </div>
            <div class="input-group">
                <button type="submit" name="register" class="btn">Register</button>
            </div>
            <p>
                Already a member? <a href="login.php">LogIn</a>
            </p>
        </form>
    </body>
</html>