<!DOCTYPE html>
<html>
    <head>
    <style>
        div.a {
            text-indent: 45%;
                }   
                div.b {
            text-indent: 20%;
                }   
    </style>
    <button onclick="Logout()">Logout</button>
        <script>
            function Logout() 
            {   
             window.location.href="login.php";
            }
        </script>


        <title>Home Page</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="header">
            <h1>Home Page</h1>
        </div>
        <!-- <button onclick="Logout()">Logout</button>
        <script>
            function Logout() 
            {   
             window.location.href="login.php";
            }
        </script> -->

            <div class = "b" >
        <?php 

                            

        session_start();
        include_once 'dbh.php';

        $user=$_SESSION['userName'];
        
        $mysql_query = "SELECT Profile_ID FROM Profile where Username='$user'";
        $result = mysqli_query($conn, $mysql_query);
        $id=mysqli_fetch_array($result);
        // echo "id: " . $id[0] . "<br>";

        $mysql_query = "SELECT Profile_Images FROM Profile where Username='$user'";
        $result = mysqli_query($conn, $mysql_query);
        $Pro_image=mysqli_fetch_array($result);


        if( $Pro_image[0] == null )
        {
            echo "No Profile pick. Go to settings to upload!";
        }
        else
        {

            echo '<div class="c"> <img src="'.$Pro_image[0].'" width="300" height="250" /></div>';
        }


        ?>
        <!-- <p>
            <a href="DeleteProfile.php">Delete profile</a>
        </p> -->
        <!-- <form method="post" action="DeleteProfile.php">
            <div class="input-group">
                <label>Delete profile</label>
                 <div class="input-group">
                    <button type="submit" name="Yes2Delete" class="btn">Delete Profile</button>
                </div> 
            </div>
        </form> -->
        <form method="post" action="createPage.php">
            <div class="input-group">
                <!-- <label>Delete profile</label> -->
                <div class="input-group">
                    <button type="submit" name="CPage" class="btn">Create A Page</button>
                </div>
            </div>
        </form>
        <form method="post" action="ViewAPage.php">
            <div class="input-group">
                <!-- <label>Delete profile</label> -->
                <div class="input-group">
                    <button type="submit" name="VPage" class="btn">View A Page</button>
                </div>
            </div>
        </form>
        <!-- <p>
            <a href="ViewAPage.php">View a page</a>
        </p> -->
        <form method="post" action="see_post.php">
            <div class="input-group">
                <!-- <label>Delete profile</label> -->
                <div class="input-group">
                    <button type="submit" name="OPost" class="btn">See Your Post</button>
                </div>
            </div>
        </form>
        <form method="post" action="createPost.php">
            <div class="input-group">
                <!-- <label>Delete profile</label> -->
                <div class="input-group">
                    <button type="submit" name="OPost" class="btn">Create Post</button>
                </div>
            </div>
        </form>
        <!-- <p>
            <a href="see_post.php">See your post</a>
        </p> -->
        <!-- <p>

            <a href="createPost.php">Create Post!</a>
        </p> -->
        </div>

        <p>
            <a href="settings.php">Settings</a>
        </p>
       

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
                        
                    ?>

        
    </body>
</html>
