


<!DOCTYPE html>
    <html>
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


                </div>
            
            
            
            
            </body>














    </html>