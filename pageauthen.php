<?php 
    session_start();
    $database = "SocialMedia";
    $servername = "localhost";
    $dataname = "root";
    $pass = "root";
    $conn = new mysqli($servername, $dataname, $pass, $database);
    $user=$_SESSION['userName'];
    $profile_id=$_SESSION['Profile_id'];
    $pageName=$_POST['PageName'];
    $pageCategory=$_POST['PageCategory'];
    $pageDescription=$_POST['PageDescription'];
    
    // echo $user;
    // echo "<br>";
    // echo $profile_id;
    // echo "<br>";
    // echo $pageName;
    // echo "<br>";
    // echo $pageCategory;
    // echo "<br>";
    // echo $pageDescription;
    // echo "<br>";
    // Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//if the conncetion works fine then do this
else{
    //now will insert to database the page info given by the user
    $sql = "INSERT into Pages (Page_Name,Description,Category,Admin_ID) VALUES ('$pageName','$pageDescription','$pageCategory','$profile_id')" ;
    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    echo "<br>";
    //header("Location: login.php");
    } 
    else {
    //echo "Error: " . $list . "<br>" . $conn->error;
    echo "no right";
    //header("Location: register.php");   
    }
}
?>