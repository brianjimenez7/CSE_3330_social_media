<!DOCTYPE html>
    <html>
        <head>
        <style>
        div.a {
            text-indent: 40%;
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
        <title>Delete Account</title>
        <link rel="stylesheet" type="text/css" href="style.css">

        </head>
        <body>
            <div class="header">
                <h1>Delete Account</h1>
            </div>
            <form method="post" action="DeleteAccountauthen.php">
                <div class="input-group">
                    <label>Are you sure you want to delete account?</label>
                </div>
                <div class="input-group">
                    <button type="submit" name="Yes2Delete" class="btn">Yes</button>
                </div>
            </form>
        </body>
</html>