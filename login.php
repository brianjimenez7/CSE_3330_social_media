<?php
include_once 'all_icons.php';
?>

<!DOCTYPE html>
<html>
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
</style>

 <div class="w3-bar w3-theme-d2 w3-left-align w3-large">

    
        <title>Login</title>
        <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
    

    
    <div class="w3-animate-zoom">
    
  

    
        <!-- <div class="header"> -->
            <h1>Login</h1>
       
        <form method="post" action="loginauthen.php">
            <!-- <div class="input-group"> -->
                <label>Username</label>
                <input type="text" name="username_1">
           
            <!-- <div class="input-group"> -->
                <label>Password</label>
                <input type="password" name="password_3">
            
            <!-- <div class="input-group"> -->
                <button type="submit" name="login" class="btn">Login</button>
            
            <p>
                New member? <a href="register.php">Sign Up</a>
            </p>
        </form>
        
        
</html>