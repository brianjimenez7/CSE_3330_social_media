<?php
    session_start();
    // $database = "SocialMedia";
    // $servername = "localhost";
    // $dataname = "root";
    // $pass = "root";
    // $conn = new mysqli($servername, $dataname, $pass, $database);
    include_once 'dbh.php';
    $username= $_POST["username_1"];
    $password= $_POST["password_3"];
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    //here will now go check if the passsword and username are correct 
    else{
        
        $sql_1= "SELECT * FROM Profile where Username='$username'"; 
        $result = mysqli_query($conn, $sql_1);
        $row=mysqli_fetch_array($result);
        //will go back if there is no username like that
        if($row==null){
            header("Location: login.php");
        }
        else{
            $sql_2= "SELECT * FROM Profile where Username='$username'"; 
            $result_2 = mysqli_query($conn, $sql_2);
            $itemList = mysqli_fetch_array($result_2);
            $temp= "".$itemList["Password"]."";
            $temp_username="".$itemList["Username"]."";
            $Profile_id="".$itemList["Profile_ID"]."";
            //if the passwrods match then will go to the home page
            //also make sure the usernam is good 
            if(($temp_username==$username)&&($temp==$password))
            {
                $_SESSION['userName']=$username;
                $_SESSION['Profile_id']=$Profile_id;
                header("Location: home.php");

            }
            else{
                header("Location: login.php");
            }
        }
    }
   // $conn->close();
?>