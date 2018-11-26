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
        <p>You have posted</p>

        <?php
             $mysql_query = "SELECT Profile_ID FROM Profile where Username='$user'";
             $result = mysqli_query($conn, $mysql_query);
             $id=mysqli_fetch_array($result);
            
            $sql = "SELECT is_text, Created_post  FROM Post WHERE Profile_ID='$id[0]'";
            $result1 = mysqli_query($conn, $sql);


             if (mysqli_num_rows($result1) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result1)) {
                    echo "Your post:  " . $row['is_text']. ":" . $row['Created_post']. "<br>";
                }
            } else {
                echo "0 results";
            }
              
        ?>
       





    </body>
    </html>