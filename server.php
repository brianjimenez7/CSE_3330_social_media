<?php
    //here detect the errors
    $errors=array();
    $email="";
    $mobilenumber="";
    $Fname="";
    $Lname="";
    $dob="";
    $gender="";
    //here will first connect to the database
    // $database = "SocialMedia";
    // $servername = "localhost";
    // $usersname = "root";
    // $password = "root";
    // $conn = mysqli_connect($servername, $usersname, $password, $database);
    include_once 'dbh.php';

    //now here if the registration button is clicked
    if(isset($_POST['register'])){
        $email=mysql_real_escape_string($_POST['email']);
        $Fname=mysql_real_escape_string($_POST['Fname']);
        $Lname=mysql_real_escape_string($_POST['Lname']);
        $mobilenumber=mysql_real_escape_string($_POST['mobilenumber']);
        $dob=mysql_real_escape_string($_POST['dob']);
        $gender=mysql_real_escape_string($_POST['gender']);

        //now here will ensure that the fields are filled up
        if(empty($email)){
            array_push($errors, "email is required");
        }
        if(empty($Fname)){
            array_push($errors, "Fname is required");
        }
        if(empty($Lname)){
            array_push($errors, "Lname is required");
        }
        if(empty($mobilenumber)){
            array_push($errors, "mobilenumber is required");
        }
        if(empty($dob)){
            array_push($errors, "dob is required");
        }
        if(empty($gender)){
            array_push($errors, "gender is required");
        }

        //here if no errors then will excute the command
        if(count($errors)==0){
            $sql = "INSERT into Member (Email, Fname, Lname, Mobile_number, Gender, DOB) VALUES ('$email', '$Fname', '$Lname', '$mobilenumber', '$gender', '$dob')" ;
            mysqli_query($conn,$sql);
        }
    }
    $conn->close();
?>