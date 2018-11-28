<?php
include_once 'all_icons.php';
?>
<!DOCTYPE html>
<html>
<div class="w3-bar w3-theme-d2 w3-left-align w3-large">
 <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:home.php" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="home.php" class="w3-bar-item w3-button w3-padding-large w3-theme-d4"><i class="fa fa-home w3-margin-right"></i>Home</a>
 
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:home.php" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="login.php" class="w3-bar-item w3-button w3-padding-large w3-theme-d4">Logout</a>
  <a href="settings.php" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white" title="My Account">
  <i class="material-icons">person</i>
  </a>
</div>
    <head>
</div>


    
        <title>Create Page</title>
        
    </head>
    <body>
        <div class="w3-center">
            <h1>New Page</h1>
        </div>
        <form method="post" action="pageauthen.php">
            <div class="w3-center">
                <label>Page Name</label>
                <input type="text" name="PageName">
            </div>
            <div class="w3-center">
                <label>Page Category</label>
                <input type="text" name="PageCategory">
            </div>
            <div class="w3-center">
                <label>Page Description<br></label>
                <textarea name="PageDescription" rows="7" cols="44"></textarea>
            </div>
            <div class="w3-center">
                <button type="submit" name="register" class="btn">Submit</button>
            </div>
        </form>
    </body>
</html>