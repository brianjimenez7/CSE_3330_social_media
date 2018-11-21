<?php
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
        

        
        header("Location: see_post.php");
    }
    else if ( $is_image != null )
    {
        echo "Feature not supported.";
    }
   
    
       

    
}
else
{
    
    header("Location: createPost.php");
    // alert("Hello! I am an alert box!!");
}



?>