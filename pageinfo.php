<?php
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
        $row = mysqli_fetch_assoc($result);
        $Category=$row['Category'];
        $PageName=$row['Page_Name'];
        $Description=$row['Description'];
        $CreateDate=$row['CreateDate'];
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