<?php
 session_start();
 include_once 'dbh.php';
$user=$_SESSION['userName'];


$is_text = $_POST["text_post"];
$is_image = $_POST["image_post"];




// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else if( ($is_text != null) || ($is_image != null))
{
    

    if( ($is_text != null)  )
    {
        //here we will put the entered text into the database
        //We will direct them to the see post page to see their post
        $mysql_query = "SELECT Profile_ID FROM Profile where Username='$user'";
        $result = mysqli_query($conn, $mysql_query);
        $id=mysqli_fetch_array($result);
      // echo "id: " . $id[0] . "and text : " . $is_text. "<br>";


        
       $mysql_query1 = "INSERT INTO Post(Is_text, Profile_ID) VALUES('$is_text','$id[0]')";
       if ($conn->query($mysql_query1) === TRUE) {
        
        header("Location: see_post.php");
        } 
        else {
        
       // echo "Sorry Try again";
        header("Location: create_post_authen.php");
       
        }

    }
    
}
else
{
    
    header("Location: createPost.php");
    // alert("Hello! I am an alert box!!");
}



?>