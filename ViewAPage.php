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
    <style>
        div.a {
            text-indent: 40%;
                }                  
    </style>


   


       



        
        <title>View Page</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="header">
            <h1>View Page Info</h1>
        </div>
        <form method="post" action="pageinfo.php">
            <div class="input-group">
                <label>Enter Page ID</label>
                <input type="text" name="PageID">
            </div>
            <div class="input-group">
                <button type="submit" name="register" class="btn">Submit</button>
            </div>
        </form>

        <div class = "a">
            <h3>Page ID & Name</h3> 
        </div>

  <?php
            //  $mysql_query = "SELECT Profile_ID FROM Profile where Username='$user'";
            //  $result = mysqli_query($conn, $mysql_query);
            //  $id=mysqli_fetch_array($result);
            
            session_start();
            include_once 'dbh.php';
            $user=$_SESSION['userName'];
            


            echo '<form method="post" action="pageinfo.php">
            <div class="input-group"> </div>';

            $sql = "SELECT Page_ID, Page_Name FROM Pages";
            $result1 = mysqli_query($conn, $sql);


             if (mysqli_num_rows($result1) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result1)) 
                {
                  echo ' <form method="post" action="pageinfo.php">
                  <div class="input-group">
                  <label>' .$row['Page_ID'].'  :  '.$row['Page_Name'].'
                   </label>
                   </div>' ;
                  
                }
            } else {
                echo "0 results";
            }
              
        ?>



    </body>
</html>