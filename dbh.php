<?php 

$conn = mysqli_connect("localhost" , "root", "root", "SocialMedia");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


?>