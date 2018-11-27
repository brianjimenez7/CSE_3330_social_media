<?php
 session_start();
 include_once 'dbh.php';
$user=$_SESSION['userName'];


$is_text = $_POST["text_post_page"];
$is_image = $_POST["submit"];




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

        $pageID=$_SESSION['pageID'];



       echo "id: " . $id[0] . " and text : " . $is_text. "<br>";


        
       $mysql_query1 = "INSERT INTO Post_on_Page (isText, ProfileID, PageID) VALUES('$is_text','$id[0]', '$pageID')";
       if ($conn->query($mysql_query1) === TRUE) {
        
        //header("Location: see_post.php");
        echo "yes";
        } 
        else {
        
       // echo "Sorry Try again";
       // header("Location: create_post_authen.php");
       echo "no";
        }

    }
    
}
else
{
    
  //  header("Location: createPost.php");
    // alert("Hello! I am an alert box!!");
}



?>