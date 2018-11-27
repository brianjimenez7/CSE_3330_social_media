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


        <title>Update Page</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="header">
            <h1>Update Page</h1>
        </div>
        <form method="post" action="updateauthen2.php">
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
                <textarea name="PageDescription" rows="7" cols="81"></textarea>
            </div>
            <div class="input-group">
                <button type="submit" name="check" class="btn">Submit</button>
            </div>
        </form>
        <form method="post" action="updateauthen2.php">
            <div class="aligntocenter">
                <h1>Current Page Information:</h1>
                <h4>Page Name:</h4>
                <?php 
                    session_start();
                    $pageID=$_SESSION['page_ID'];
                    $database = "SocialMedia";
                    $servername = "localhost";
                    $dataname = "root";
                    $pass = "root";
                    $conn = new mysqli($servername, $dataname, $pass, $database);
                    $sql_1= "SELECT * FROM Pages where Page_ID='$pageID'"; 
                    $result = $conn->query($sql_1);
                    $row = mysqli_fetch_assoc($result);
                    $pageN=$row['Page_Name'];
                    echo $pageN;
                ?>
                <h4>Page Category:</h4>
                <?php session_start();
                    $pageID=$_SESSION['page_ID'];
                    $database = "SocialMedia";
                    $servername = "localhost";
                    $dataname = "root";
                    $pass = "root";
                    $conn = new mysqli($servername, $dataname, $pass, $database);
                    $sql_1= "SELECT * FROM Pages where Page_ID='$pageID'"; 
                    $result = $conn->query($sql_1);
                    $row = mysqli_fetch_assoc($result);
                    $pageC=$row['Category'];
                    echo $pageC;
                    ?>
                <h4>Page Decription:</h4>
                <?php session_start();
                    $pageID=$_SESSION['page_ID'];
                    $database = "SocialMedia";
                    $servername = "localhost";
                    $dataname = "root";
                    $pass = "root";
                    $conn = new mysqli($servername, $dataname, $pass, $database);
                    $sql_1= "SELECT * FROM Pages where Page_ID='$pageID'"; 
                    $result = $conn->query($sql_1);
                    $row = mysqli_fetch_assoc($result);
                    $pageD=$row['Description'];
                    echo $pageD;?>
            </div>

        </form>
        
    </body>
</html>