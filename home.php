<!DOCTYPE html>
<html>
    <head>
        <title>Register</title>
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
        </p>

        <p>
            <a href="settings.php">Settings</a>
        </p>
    </body>
</html>
