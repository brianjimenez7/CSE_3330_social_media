<?php
    session_start();
    $database = "SocialMedia";
    $servername = "localhost";
    $dataname = "root";
    $pass = "root";
    $conn = new mysqli($servername, $dataname, $pass, $database);
    //$_SESSION['Profile_id']=$Profile_id;
    $profile_id=$_SESSION['Profile_id'];
    //$pageDescription=$_POST['PageDescription'];
    $pageID=$_POST['pageID'];
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    else{
        $sql_1= "SELECT * FROM Pages where (Admin_ID='$profile_id' AND Page_ID='$pageID')";
        //$sql = "INSERT into Pages (Page_Name,Description,Category,Admin_ID) VALUES ('$pageName','$pageDescription','$pageCategory','$profile_id')" ;
        $result = $conn->query($sql_1);
        if(mysqli_num_rows($result)==0){
            header("Location: UpdatePage.php");
        }
        else{
            header("Location: UpdatePage2.php");
        }
    }

?>