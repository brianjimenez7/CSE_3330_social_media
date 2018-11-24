


<!DOCTYPE html>
<html>
    <head>
    <style>
        div.a {
            text-indent: 45%;
                }   
    </style>


        <title>Home Page</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="header">
            <h1>Home Page</h1>
        </div>
        <button onclick="Logout()">Logout</button>
        <script>
            function Logout() 
            {   
             window.location.href="login.php";
            }
        </script>

            <div class = "a" >
        <p>
            <a href="createPage.php">Create a page</a>
        </p>
        <p>
            <a href="ViewOwnPages.php">View Own Pages</a>
        </p>
        <p>
            <a href="ViewAPage.php">View a page</a>
        </p>
        
        <p>
            <a href="createPost.php">Post a post </a>

        <p>
            <a href="createPost.php">Create Post!</a>
        </p>

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
