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


        <title>Create a Page</title>
        <link rel="stylesheet" type="text/css" href="style.css">

        </head>

            <body>
                 <div class="header">
                    <h1>Create a Page</h1>
                </div>

                 <form method="post" action="create_page_php.php">
            <div class="input-group">
                <label>Description</label>
                <input type="text" name="description">
            </div>
            <div class="input-group">
                <label>Category</label>
                <input type="text" name="category">
            </div>
            
            <div class="input-group">
                <button type="submit" name="register" class="btn">Register</button>
            </div>
        </form>
                
        
            
            </body>














    </html>