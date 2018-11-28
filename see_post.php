<?php 
    session_start();
    include_once 'dbh.php';
    include_once 'all_icons.php';
    $user=$_SESSION['userName'];
?>

<!DOCTYPE html>
    <html>
     <head>


    <style>
        div.a {
            text-indent: 45%;
                }   
    </style>




        

<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
</style>
<body class="w3-theme-l5">

<!-- Navbar -->
<!-- <div class="w3-top"> -->
 <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:home.php" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="home.php" class="w3-bar-item w3-button w3-padding-large w3-theme-d4"><i class="fa fa-home w3-margin-right"></i>Home</a>
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:home.php" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="login.php" class="w3-bar-item w3-button w3-padding-large w3-theme-d4">Logout</a>
  
            </div>
       

        <title>See a Post</title>
        <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
    <!-- </head> -->

   
        <div class="w3-center">
            <h1>Your post</h1>
        </div>
       

        <?php
             $mysql_query = "SELECT Profile_ID FROM Profile where Username='$user'";
             $result = mysqli_query($conn, $mysql_query);
             $id=mysqli_fetch_array($result);
            
            $sql = "SELECT is_text, Created_post  FROM Post WHERE Profile_ID='$id[0]'";
            $result1 = mysqli_query($conn, $sql);

            

            
             if (mysqli_num_rows($result1) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result1)) {
                   // echo "Your post:  " . $row['is_text']. ":" . $row['Created_post']. "<br>";
                    if( $row['is_text'] != null )
                    {

                    
                   echo '<form method="post" action="pageinfo.php">
                   <div class="w3-animate-zoom w3-center ">
                   <h3>Text Post:</h3>
                   <label>
                    '.$row['is_text'].'
                   </label>
                   </div>' ;
                   echo '<div class="w3-animate-zoom w3-center ">
                   <label>
                   Date: 
                    '.$row['Created_post'].'
                   </label>
                   </div>
                   </form>' ;
                    }
                }
            } 
        
        else {
                echo "0 results <br>";
            }
        

                echo '<div class = "w3-center w3-padding-64"><h3> Images</h3>';

            $sql1 = "SELECT is_Audio, Created_post  FROM Post WHERE Profile_ID='$id[0]'";
            $result2 = mysqli_query($conn, $sql1);
           // $Post_image =mysqli_fetch_array($result2);
          //  echo '<div class="c"> <img src="'.$Post_image[0].'" width="300" height="250" /></div>';


       

             if (mysqli_num_rows($result2) > 0)
              {
                // output data of each row
                while($row = mysqli_fetch_assoc($result2)) {
                   // echo "Your post:  " . $row['is_text']. ":" . $row['Created_post']. "<br>";
                   if( $row['is_Audio'] != null )
                   {

                   echo '<form method="post" >
                   <div class="w3-animate-zoom center w3-center ">
                   <h3>Image Post:</h3>
                   <label> <img src="'.$row['is_Audio'].'" width="300" height="250" />
                   </label></div>';

                   echo '
                   <label>
                   <div class="w3-animate-zoom center w3-center ">
                   Date:
                    '.$row['Created_post'].'
                   </label>
                   </div>
                   </form>' ;
                   }
                   
                }
            } 
        else {
                echo "0 results";
            }
        
              
        ?>
      
     



    </body>
    </html>