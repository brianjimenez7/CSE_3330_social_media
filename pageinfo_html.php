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


        <title>View Page Info</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="header">
            <h1>Page Info</h1>
        </div>
        <form method="post" action="pageinfo.php">
            <div class="input-group">
                <h3>Page ID:</h3>
                <label>
                    <?php
                        session_start(); 
                        $Cat=$_SESSION['pageID'];
                        echo $Cat;
                    ?>                             
                </label>
            </div>
            <div class="input-group">
                <h3>Page Name:</h3>
                <label>
                    <?php
                        session_start(); 
                        $Cat=$_SESSION['Page_Name'];
                        echo $Cat;
                    ?>                             
                </label>
            </div>
            <div class="input-group">
                <h3>Page Category:</h3>
                <label>
                    <?php
                        session_start(); 
                        $Cat=$_SESSION['Category'];
                        echo $Cat;
                    ?>                             
                </label>
            </div>
            <div class="input-group">
                <h3>Page Description:</h3>
                <label>
                    <?php
                        session_start(); 
                        $Cat=$_SESSION['Description'];
                        echo $Cat;
                    ?>                             
                </label>
            </div>
            <div class="input-group">
                <h3>Page Created Date:</h3>
                <label>
                    <?php
                        session_start(); 
                        $Cat=$_SESSION['CreateDate'];
                        echo $Cat;
                    ?>                             
                </label>
            </div>
            <!-- <div class="input-group">
                <button type="submit" name="register" class="btn">Submit</button>
            </div> -->
        </form>
    </body>
</html>