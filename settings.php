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
</div>
        <head>
        <style>
        div.a {
            text-indent: 45%;
            color: blue;
                }  
        div.b {
            text-indent: 40%;
            color: red;
                } 
                div.c {
            text-indent: 35%;
            color: blue:
                } 
        </style>

       


        <title>Settings</title>
        <link rel="stylesheet" type="text/css" href="style.css">

        </head>

            <body>
                <div class="header">
                    <h1>Settings</h1>
                </div>
                <div>
                    <h2>Welcome user</h2>
                    
                    <?php 

                    

                        session_start();
                        include_once 'dbh.php';


                        $user=$_SESSION['userName'];
                        $email=$_SESSION['email'];
                        echo "Username: " . $user . "<br>";



                        $mysql_query = "SELECT email FROM Profile where Username='$user'";
                        $result = mysqli_query($conn, $mysql_query);
                        $email=mysqli_fetch_array($result);
                        echo "Email: " . $email[0] . "<br>";


                        
                        $mysql_query = "SELECT Profile_ID FROM Profile where Username='$user'";
                        $result = mysqli_query($conn, $mysql_query);
                        $id=mysqli_fetch_array($result);
                       // echo "id: " . $id[0] . "<br>";

                        $mysql_query = "SELECT Profile_Images FROM Profile where Username='$user'";
                        $result = mysqli_query($conn, $mysql_query);
                        $Pro_image=mysqli_fetch_array($result);
                       // echo "pro image: " . $Pro_image[0] . "<br>";
                       
                        if( $Pro_image[0] == null )
                        {
                           
                            // echo  '<div class="b"> <p>No Profile pick. Go to settings to upload! </p></div>';
                            echo '<div class="c"> <p>Upload your Profile picture here!!</p></div>';
                        }
                        else
                        {
        
                            echo '<div class="c"> <img src="'.$Pro_image[0].'" width="300" height="250" /></div>';
                        }
                       
                   
                    ?>
                   
                   
                </div>


                
                   
                <!-- upload pictures to profile -->
                <div class = "b">
                <h3>Upload profile picture</h3>
                </div>
                <form action = "upload.php" method = "POST" enctype = "multipart/form-data">
                <input type = "file" name = "file">
                <button type = "submit" name = "submit" >Upload profile image</button>
                
                </form>

             


                <div class = "a">
                <h1>Admin</h1>
                </div>
                <div>
                <form action = "admin_php.php" method = "POST" >
                <button type = "submit" name = "admin" >Admin Settings</button>
                <!-- <form method="post" action="DeleteProfile.php">
            <div class="input-group">
                <label>Delete profile</label>
                 <div class="input-group">
                    <button type="submit" name="Yes2Delete" class="btn">Delete Profile</button>
                </div> 
            </div>
        </form> -->
                        </form>
                        <form method="post" action="DeleteProfile.php">
            <div class="input-group">
                <label>Delete profile</label>
                 <div class="input-group">
                    <button type="submit" name="Yes2Delete" class="btn">Delete Profile</button>
                </div> 
            </div>
        </form>

                </div>

            
            
            
            
            </body>














    </html>