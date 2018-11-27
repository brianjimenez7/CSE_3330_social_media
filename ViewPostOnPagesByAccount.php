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
        <title>Search Account</title>
        <link rel="stylesheet" type="text/css" href="style.css">

        </head>
        <body>
            <div class="header">
                <h1>Search Account</h1>
            </div>
            <form method="post" action="AccountPost.php">
            <div class="input-group">
                <label>Enter Account ID</label>
                <input type="text" name="AccountID">
            </div>
            <div class="input-group">
                <button type="submit" name="accountID" class="btn">Submit</button>
            </div>
        </form>
        <div class = "a">
            <h2>Account ID & Username</h2> 
        </div>
        <?php
            //  $mysql_query = "SELECT Profile_ID FROM Profile where Username='$user'";
            //  $result = mysqli_query($conn, $mysql_query);
            //  $id=mysqli_fetch_array($result);
            
            session_start();
            include_once 'dbh.php';
            $user=$_SESSION['userName'];
            


            echo '<form method="post" action="pageinfo.php">
            <div class="input-group"> </div>';

            $sql = "SELECT Profile_ID, Username FROM Profile";
            $result1 = mysqli_query($conn, $sql);


             if (mysqli_num_rows($result1) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result1)) 
                {
                  echo ' <form method="post" action="pageinfo.php">
                  <div class="input-group">
                  <label>' .$row['Profile_ID'].'  :  '.$row['Username'].'
                   </label>
                   </div>' ;
                  
                }
            } else {
                echo "0 results";
            }
              
        ?>
        </body>
    </html>