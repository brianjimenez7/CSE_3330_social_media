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
         <form method="post" action="create_post_authen.php">   
             <div class="input-group">
                <label>Image Post</label>
                <input type="text" name="image_post">
            </div> 
        <div class="input-group">
                <button type="submit" name="image_post_button" class="btn">POST IMAGE!!!</button>
        </div>
        </form> 





    </body>

        
    </html>