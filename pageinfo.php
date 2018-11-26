<?php
    session_start();
    $database = "SocialMedia";
    $servername = "localhost";
    $dataname = "root";
    $pass = "root";
    $conn = new mysqli($servername, $dataname, $pass, $database);
    //$username= $_POST["username_1"];
    $pageID=$_POST["PageID"];
    // echo $pageID;
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    else{
        // $temp="hey";
        $sql_1= "SELECT * FROM Pages where Page_ID='$pageID'"; 
        $result = $conn->query($sql_1);
        if(mysqli_num_rows($result)==1){
            $row = mysqli_fetch_assoc($result);
            $Category=$row['Category'];
            $PageName=$row['Page_Name'];
            $Description=$row['Description'];
            $CreateDate=$row['CreateDate'];
            $_SESSION['CreateDate']=$CreateDate;
            $_SESSION['Description']=$Description;
            $_SESSION['Page_Name']=$PageName;
            $_SESSION['pageID']=$pageID;
            $_SESSION['Category']=$Category;
            // $_SESSION['userName']=$username;
            header("Location: pageinfo_html.php");
        }
        else{
            header("Location: ViewAPage.php");
        }
        
        //go to the next page to display
        // echo $CreateDate;
        // echo "<br>";
        // echo $Description;
        // echo "<br>";
        // echo $PageName;
        // echo "<br>";
        // echo $Category;
        // echo "<br>";
    }
    
?>