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
    <html>
        <head>
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
        <title>Search Account</title>
        

        </head>
        <body>
            <div class="w3-center">
                <h1>Search Account</h1>
            </div>
            <form method="post" action="AccountPost.php">
            <div class="w3-center">
                <label>Enter Account ID</label>
                <input type="text" name="AccountID">
            
           
                <button type="submit" name="accountID" class="btn">Submit</button>
            </div>
            </div>
        </form>
        <div class = "w3-center">
            <h2>Account ID & Username</h2> 
        </div>
        <?php
            //  $mysql_query = "SELECT Profile_ID FROM Profile where Username='$user'";
            //  $result = mysqli_query($conn, $mysql_query);
            //  $id=mysqli_fetch_array($result);
            
            session_start();
            include_once 'dbh.php';
            $user=$_SESSION['userName'];
            


            echo '<form method="post" action="pageinfo.php">
            <div class="w3-center"> </div>';

            $sql = "SELECT Profile_ID, Username FROM Profile";
            $result1 = mysqli_query($conn, $sql);


             if (mysqli_num_rows($result1) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result1)) 
                {
                  echo ' <form method="post" action="pageinfo.php">
                  <div class="w3-center">
                  <label>' .$row['Profile_ID'].'  :  '.$row['Username'].'
                   </label>
                   </div>' ;
                  
                }
            } else {
                echo "0 results";
            }
              
        ?>
        </body>
    </html>