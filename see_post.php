<?php 
    session_start();
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
        <p>Your post will go here</p>
       





    </body>
    </html>