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
                
              
               
                <form method="POST" action="admin_see_all_post_by_dates_html.php"> 
                <a >See all post from a specific date</a>  
            <div class="input-group">
                <label>Enter Date:</label>
                <input type="date" name="date">
            </div>  
        <div class="input-group">
                <button type="submit" name="date_button" class="btn">GO!</button>

                         
                    </form>
               
            
            
            </body>














    </html>