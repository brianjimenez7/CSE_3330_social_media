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
    

        <title>Update Page</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="header">
            <h1>Update Page</h1>
        </div>
        <form method="post" action="updateauthen2.php">
            <div class="input-group">
                <label>Page Name</label>
                <input type="text" name="PageName">
            </div>
            <div class="input-group">
                <label>Page Category</label>
                <input type="text" name="PageCategory">
            </div>
            <div class="input-group">
                <label>Page Description</label>
                <textarea name="PageDescription" rows="7" cols="81"></textarea>
            </div>
            <div class="input-group">
                <button type="submit" name="check" class="btn">Submit</button>
            </div>
        </form>
        <form method="post" action="updateauthen2.php">
            <div class="aligntocenter">
                <h1>Current Page Information:</h1>
                <h4>Page Name:</h4>
                <?php 
                    session_start();
                    $pageID=$_SESSION['page_ID'];
                    $database = "SocialMedia";
                    $servername = "localhost";
                    $dataname = "root";
                    $pass = "root";
                    $conn = new mysqli($servername, $dataname, $pass, $database);
                    $sql_1= "SELECT * FROM Pages where Page_ID='$pageID'"; 
                    $result = $conn->query($sql_1);
                    $row = mysqli_fetch_assoc($result);
                    $pageN=$row['Page_Name'];
                    echo $pageN;
                ?>
                <h4>Page Category:</h4>
                <?php session_start();
                    $pageID=$_SESSION['page_ID'];
                    $database = "SocialMedia";
                    $servername = "localhost";
                    $dataname = "root";
                    $pass = "root";
                    $conn = new mysqli($servername, $dataname, $pass, $database);
                    $sql_1= "SELECT * FROM Pages where Page_ID='$pageID'"; 
                    $result = $conn->query($sql_1);
                    $row = mysqli_fetch_assoc($result);
                    $pageC=$row['Category'];
                    echo $pageC;
                    ?>
                <h4>Page Decription:</h4>
                <?php session_start();
                    $pageID=$_SESSION['page_ID'];
                    $database = "SocialMedia";
                    $servername = "localhost";
                    $dataname = "root";
                    $pass = "root";
                    $conn = new mysqli($servername, $dataname, $pass, $database);
                    $sql_1= "SELECT * FROM Pages where Page_ID='$pageID'"; 
                    $result = $conn->query($sql_1);
                    $row = mysqli_fetch_assoc($result);
                    $pageD=$row['Description'];
                    echo $pageD;?>
            </div>

        </form>
        
    </body>
</html>