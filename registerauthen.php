
<?php
session_start();
include_once 'dbh.php';
// $database = "SocialMedia";
// $servername = "localhost";
// $dataname = "root";
// $pass = "root";
// $conn = new mysqli($servername, $dataname, $pass, $database);
$email= $_POST["email"];
$username= $_POST["username"];
$password_1 = $_POST["password_1"];
$password_2 = $_POST["password_2"];
$Fname = $_POST["Fname"];
$Lnanme = $_POST["Lname"];
$mobilenumber = $_POST["mobilenumber"];
$gender = $_POST["gender"];
$dob = $_POST["dob"];
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//if the conncetion works fine then do this
else{
       //here that is first check. make sure passswords match
    if($password_1==$password_2)
    {
        //now have to make sure that the email and the username is not occupied
        $sql_1= "SELECT * FROM Profile where Username='$username'"; 
        $result = mysqli_query($conn, $sql_1);
        $row=mysqli_fetch_array($result);
        //will go back if the username is not unique
        if($row!=null){
            header("Location: register.php");
        }
        $sql_2="SELECT * FROM Profile where Email='$email'";
        $result_2 = mysqli_query($conn, $sql_2);
        $row_2=mysqli_fetch_array($result_2);
        //will go back to page if the email has been used as well 
        if($row_2!=null){
            header("Location: register.php");
        }
        //now will insert to database the person
        $sql = "INSERT into Profile (Username,Password,Email, FName, Lname, MobileNumber, Gender, DOB) VALUES ('$username','$password_1','$email','$Fname','$Lnanme','$mobilenumber','$gender','$dob')" ;
        if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        echo "<br>";
        header("Location: login.php");
        } 
        else {
        //echo "Error: " . $list . "<br>" . $conn->error;
        header("Location: register.php");   
        }
    }
    //if the passwrds dont match take you back to registration page
    else{
        header("Location: register.php");
    }

}
//$conn->close();
?>