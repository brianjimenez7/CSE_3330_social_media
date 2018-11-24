<?php
session_start();
include_once 'dbh.php';
$user=$_SESSION['userName'];


$mysql_query = "SELECT Profile_ID FROM Profile where Username='$user'";
$result = mysqli_query($conn, $mysql_query);
$id=mysqli_fetch_array($result);




if (isset($_POST['submit']))
{
    $file = $_FILES['fire'];


    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png', 'pdf');

    if(in_array($fileActualExt, $allowed))
    {
        if($fileError === 0)
        {
            if($fileSize < 10000000)
            {
                $fileNameNew = "profile". $id[0].  ".".$fileActualExt;
                $fileDestination = 'Upload/' .$fileNameNew;

                move_uploaded_file($fileTmpName, $fileDestination);
                
           
             
           $mysql_query = ("UPDATE Profile SET Profile_Images = '$fileDestination' WHERE Profile_ID = $id[0]");
           $result = mysqli_query($conn, $mysql_query);
           $row=mysqli_fetch_array($result);

        //    $image = addslashes(file_get_contents($fileDestination));
            


        //    $mysql_query1 = ("UPDATE Profile SET Profile_image_bi = null WHERE Profile_ID = $id[0]");
        //    $result1 = mysqli_query($conn, $mysql_query1);
        //    $row1=mysqli_fetch_array($result1);
        //    //echo $image;

           
        //    $image = $row1[0];

        //     header("Content-type: image/jpeg");
        //     //echo $image;


              
                header("Location: settings.php?uploadsuccess");
            
            }
            else
            {
                echo "Your file is too big!";
            }

        }
        else
        {
            echo "There was an error uploading your file!";
        }
    }
    else
    {
        echo "You cannot upload files of this type!";
    }

}



?>