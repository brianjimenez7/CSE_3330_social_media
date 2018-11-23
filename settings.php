


<!DOCTYPE html>
    <html>
        <head>
        <style>
        div.a {
            text-indent: 45%;
                }   
        </style>

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
                        $user=$_SESSION['userName'];
                        echo "Username: " . $user . "<br>";
                    ?>
                    <p>Email</p>
                </div>


                <!-- upload pictures to profile -->

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


                </div>
            
            
            
            
            </body>














    </html>