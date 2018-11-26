<?php 
    session_start();
    include_once 'dbh.php';
    $user=$_SESSION['userName'];
?>

<!DOCTYPE html>
    <html>
    <head>
    <button onclick="Logout()">Logout</button>
        <script>
            function Logout() 
            {
             window.location.href="login.php";
            }
        </script>
 <button onclick="goHome()">Home</button>
        <script>
            function goHome() 
            {
             window.location.href="home.php";
            }
        </script>
    <button onclick="goBack()">Go Back</button>
        <script>
            function goBack() 
            {
             window.history.back();
            }
        </script>


        <title>See a Post</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body>
        <div class="header">
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
                   <div class="input-group">
                   <h3>Post:</h3>
                   <label>
                    '.$row['is_text'].'
                   </label>
                   </div>' ;
                   echo '<div class="input-group">
                   <h3>Date:</h3>
                   <label>
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

                   echo '<form method="post" action="pageinfo.php">
                   <div class="input-group">
                   <h3>Image Post:</h3>
                   <label> <img src="'.$row['is_Audio'].'" width="300" height="250" />
                   </label></div>';

                   echo '<div class="input-group">
                   <h3>Date:</h3>
                   <label>
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