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


    
        <title>Create Page</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="header">
            <h1>New Page</h1>
        </div>
        <form method="post" action="pageauthen.php">
            <div class="input-group">
                <label>Page Name</label>
                <input type="text" name="PageName">
            </div>
            <div class="input-group">
                <label>Page Category</label>
                <input type="text" name="PageCategory">
            </div>
            <div class="input-group">
                <label>Page Description</label>
                <textarea name="PageDescription" rows="7" cols="44"></textarea>
            </div>
            <div class="input-group">
                <button type="submit" name="register" class="btn">Submit</button>
            </div>
        </form>
    </body>
</html>