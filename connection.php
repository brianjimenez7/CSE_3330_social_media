<?php
$database = "SocialMedia";
$servername = "localhost";
$username = "root";
$password = "root";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";
echo "<br>";
$list = "INSERT into Member (Email, Fname, Lname, Mobile_number, Gender, DOB) VALUES ('jimenez@yahoo.com', 'Brian', 'Jimenez', '2147098888', 'M', '1989-10-03')" ;
if ($conn->query($list) === TRUE) {
    echo "New record created successfully";
    echo "<br>";
} else {
    echo "Error: " . $list . "<br>" . $conn->error;
}
mysqli_close($conn);
