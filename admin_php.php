<?php 

session_start();

include_once 'dbh.php';
// here we will check if that user is a admin or not, 
// if so, he will be directed to the admin settings pages.

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{

}
//here have to verify that if you are the admin
$user=$_SESSION['userName'];
$P_ID=$_SESSION['Profile_id'];
$sql_1= "SELECT * FROM Profile where Username='$user'"; 
$result = $conn->query($sql_1);
$row = mysqli_fetch_assoc($result);
$PID=$row['Profile_ID'];

$sql_2= "SELECT * FROM Profile where Username='Admin'"; 
$result2 = $conn->query($sql_2);
$row2 = mysqli_fetch_assoc($result2);
$PID2=$row2['Profile_ID'];
if($PID==$PID2){
    //continue
    header("Location: admin_html.php");
}
else{
    //stay on the page and do nothing
    header("Location: settings.php");

}
// header("Location: admin_html.php");



?>