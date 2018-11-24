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


        <title>Pages</title>
        <link rel="stylesheet" type="text/css" href="style.css">

        </head>

            <body>
                 <div class="header">
                    <h1>Pages</h1>
                </div>
                <div> 
                    <h1>Here you will see your pages and list them</h1>
                    <ul>
                        <li>thesitewizard.com</li>
                        <li>thefreecountry.com</li>
                        <li>howtohaven.com</li>
                    </ul>
                </div>
                </form>
         <form method="post" action="create_page_html.php">   
             <div class="input-group">
                <label>Create Page..</label>
                <input type="text" name="Page_name">
            </div> 
        <div class="input-group">
                <button type="submit" name="Page_name" class="btn">Enter Page name</button>
        </div>
        </form> 
                
             
            
            
            </body>














    </html>