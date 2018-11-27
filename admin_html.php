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


        <title>Admin Settings</title>
        <link rel="stylesheet" type="text/css" href="style.css">

        </head>

            <body>
                 <div class="header">
                    <h1>Admin Settings</h1>
                </div>
                <form>
                <a href="ViewPostOnPagesByAccount.php">list of posts by specific account on pages</a>
                
                </form>
                <form>
                <a href="see_post.php"> total posts/comments in of each page by all
accounts(users) on specific date (e.g. PostDate).</a>
                </form>
            
            
            </body>














    </html>