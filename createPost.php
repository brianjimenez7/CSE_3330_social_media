<?php
session_start();
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
    



        <title>Create a Post</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body>
        <div class="header">
            <h1>Create a Post</h1>
        </div>
        <form method="post" action="create_post_authen.php">   
            <div class="input-group">
                <label>Text Post</label>
                <input type="text" name="text_post">
            </div>  
        <div class="input-group">
                <button type="submit" name="text_post_button" class="btn">POST TEXT!!!</button>

        </div>
        </form>
         <form method="POST" action="upload_Post_Image.php"  enctype = "multipart/form-data">  
             <div class="input-group">
                <label>Image Post</label>
                <input type="file" name="file">
            </div> 
             <div class="input-group">
                <button type="submit" name="submit" class="btn">POST IMAGE!!!</button>
             </div>
        </form> 

               





    </body>

        
    </html>