<?php
include_once 'all_icons.php';
session_start();
include_once 'dbh.php';

        
     

?>

<!DOCTYPE html>
    <html>
    <style>
html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
</style>
    <head>
   

        <title>Home Page</title>
       
    </head>
    <!-- Navbar -->
<!-- <div class="w3-top"> -->
 <div class="w3-bar w3-theme-d2 w3-center w3-large">
 <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:home.php" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="home.php" class="w3-bar-item w3-button w3-padding-large w3-theme-d4"><i class="fa fa-home w3-margin-right"></i>Home</a>
 
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:home.php" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="login.php" class="w3-bar-item w3-button w3-padding-large w3-theme-d4">Logout</a>
  <a href="settings.php" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white" title="My Account">
  <i class="material-icons">person</i>
  </a>
  </div>


        <title>Admin Settings</title>
        <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->

        </head>

            <body>
                 <div class="w3-center">
                    <h1>Admin Settings</h1>
                
                <form>
                    <div class="w3-border-left w3-padding-64" </div>
                <a   href="ViewPostOnPagesByAccount.php">list of posts by specific account on pages</a>
                </div>
                </div>
                </form>
                
              
                <div class="w3-center">
                <form method="POST" action="admin_see_all_post_by_dates_html.php"> 
                <a >See all post from a specific date<br></a>  
            
                <label>Enter Date:</label>
                <input type="date" name="date">
            
        
                <button type="submit" name="date_button" class="btn">GO!</button>
                </div>  
                         
                    </form>
               
            
            
            </body>














    </html>