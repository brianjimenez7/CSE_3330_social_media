<?php
    include('server.php');
  include_once 'all_icons.php';
?>

<!DOCTYPE html>
<html>
<div class="w3-bar w3-theme-d2 w3-left-align w3-large">
        <title>Register</title>
       
   
        <div class="header_1">
            <h1>Welcome to Social media APP!</h1>
        </div>
        <div class="header">
            <h1>Register</h1>
        </div>
        <form method="post" action="registerauthen.php">
            <div class="w3-animate-zoom ">
                <label>Email</label>
                <input type="text" name="email">
            </div>
            <div class="w3-animate-zoom ">
                <label>Username</label>
                <input type="text" name="username">
            </div>
            <div class="w3-animate-zoom ">
                <label>Password</label>
                <input type="password" name="password_1">
            </div>
            <div class="w3-animate-zoom ">
                <label>retype Password</label>
                <input type="password" name="password_2">
            </div>
            <div class="w3-animate-zoom ">
                <label>First Name</label>
                <input type="text" name="Fname">
            </div>
            <div class="w3-animate-zoom ">
                <label>Last Name</label>
                <input type="text" name="Lname">
            </div>
            <div class="w3-animate-zoom ">
                <label>MobileNumber</label>
                <input type="text" name="mobilenumber">
            </div>
            <div class="w3-animate-zoom ">
            <form>
            <input type="radio" name="gender" value="M" checked> Male<br>
            <input type="radio" name="gender" value="F"> Female<br>
            </form>
            <div class="w3-animate-zoom ">
                <label>DOB</label>
                <input type="date" name="dob">
            </div>
            <div class="w3-animate-zoom ">
                <input type="submit" name="register" class="w3-btn:hover">Register</w3-animate-zoom >
            </div>
            <p>
                Already a member? <a href="login.php">LogIn</a>
            </p>
        </form>
    </body>
</html>