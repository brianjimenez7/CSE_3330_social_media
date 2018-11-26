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



        
        <title>View Page</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="header">
            <h1>View Page Info</h1>
        </div>
        <form method="post" action="pageinfo.php">
            <div class="input-group">
                <label>Enter Page ID</label>
                <input type="text" name="PageID">
            </div>
            <div class="input-group">
                <button type="submit" name="register" class="btn">Submit</button>
            </div>
        </form>
    </body>
</html>