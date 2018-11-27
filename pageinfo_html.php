<!DOCTYPE html>
<html>
    <head>
    <button onclick="Logout()">Logout</button>
        <script>
            function Logout() 
            {
             window.location.href="login.php";
            }
        </script>
 <button onclick="goHome()">Home</button>
        <script>
            function goHome() 
            {
             window.location.href="home.php";
            }
        </script>
    <button onclick="goBack()">Go Back</button>
        <script>
            function goBack() 
            {
             window.history.back();
            }
        </script>

        <p>
                    <?php
                        session_start(); 
                        include_once 'dbh.php';
                        $id = $_SESSION['Profile_id'];

                        $mysql_query = "SELECT Profile_ID FROM Profile where Username='$user'";
                        $result = mysqli_query($conn, $mysql_query);
                        
                        $pageID=$_SESSION['pageID'];
                        
                        $mysql_query1 = "SELECT Admin_ID FROM Pages where Page_ID='$pageID'";
                        $result1 = mysqli_query($conn, $mysql_query1);
                        $id1=mysqli_fetch_array($result1);
                        
                       // echo "id: " . $id . "& " .$id1[0]. "<br>";


                        if( $id == $id1[0] )
                        {
                        //display the update pages button to redirect to UpdatePage2.php to update that page
                        //link them with the id number and admin_id

                       echo ' <div>
                       <form method="post" action="UpdatePage2.php">
                        <label>Update Page?</label>
                        <button type="submit" name="submit" class="btn">Yes!</button>
                    </div> 
                    
                    </form>';
                    
                   

                        }
                        else
                        {
                            //do not display the update pages
                           
                        }

                        
                        
                    ?>   
                    </p>


        <title>View Page Info</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="header">
            <h1>Page Info</h1>
        </div>
        <form method="post" action="pageinfo.php">
            <div class="input-group">
                <h3>Page ID:</h3>
                <label>
                    <?php
                        session_start(); 
                        $Cat=$_SESSION['pageID'];
                        echo $Cat;
                    ?>                             
                </label>
            </div>
            <div class="input-group">
                <h3>Page Name:</h3>
                <label>
                    <?php
                        session_start(); 
                        $Cat=$_SESSION['Page_Name'];
                        echo $Cat;
                    ?>                             
                </label>
            </div>
            <div class="input-group">
                <h3>Page Category:</h3>
                <label>
                    <?php
                        session_start(); 
                        $Cat=$_SESSION['Category'];
                        echo $Cat;
                    ?>                             
                </label>
            </div>
            <div class="input-group">
                <h3>Page Description:</h3>
                <label>
                    <?php
                        session_start(); 
                        $Cat=$_SESSION['Description'];
                        echo $Cat;
                    ?>                             
                </label>
            </div>
            <div class="input-group">
                <h3>Page Created Date:</h3>
                <label>
                    <?php
                        session_start(); 
                        $Cat=$_SESSION['CreateDate'];
                        echo $Cat;
                    ?>                             
                </label>
            </div>
            <!-- <div class="input-group">
                <button type="submit" name="register" class="btn">Submit</button>
            </div> -->
        </form>

<div class="header">
            <h1>Post to this Page</h1>
        </div>
        <form method="POST" action="Post_on_page_text.php">   
            <div class="input-group">
                <label>Text Post</label>
                <input type="text" name="text_post_page">
            </div>  
        <div class="input-group">
                <button type="submit" name="text_post_button" class="btn">POST TEXT!!!</button>

        </div>
        </form>
         <form method="POST" action="upload_Page_Image.php"  enctype = "multipart/form-data">  
             <div class="input-group">
                <label>Image Post</label>
                <input type="file" name="file">
            </div> 
             <div class="input-group">
                <button type="submit" name="submit" class="btn">POST IMAGE!!!</button>
             </div>
        </form> 
</div>
                    

















 <?php

session_start(); 
include_once 'dbh.php';
//$user=$_SESSION['userName'];



 //this is to show the Post and Images
            
             $pageID=$_SESSION['pageID'];
            
         

            $sql = "SELECT * FROM Post_on_Page WHERE PageID='$pageID'";
            $result1 = mysqli_query($conn, $sql);
                        
             if (mysqli_num_rows($result1) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result1)) {
                   // echo "Your post:  " . $row['is_text']. ":" . $row['Created_post']. "<br>";
                    if( $row['isText'] != null )
                    {

                    
                   echo '<form method="post" action="pageinfo.php">
                   <div class="input-group">
                   <h3>Text Post:</h3>
                   <label>
                    '.$row['isText'].'
                   </label>
                   </div>' ;
                   echo '<div class="input-group">
                   <label>
                   Date: 
                    '.$row['Time'].'
                   </label>
                   </div>
                   </form>' ;
                    }
                }
            } 
        
        else {
                echo "0 results <br>";
            }
        

                echo '<div class = "a"><h3> Images</h3></div></div>';

            $sql1 =  "SELECT * FROM Post_on_Page WHERE PageID='$pageID'";
            $result2 = mysqli_query($conn, $sql1);

           // echo $isImage;
        
             if (mysqli_num_rows($result2) > 0)
              {
                // output data of each row
                while($row = mysqli_fetch_assoc($result2)) {
                  
                   if( $row['isImage'] != null )
                   {

                   echo '<form method="post" >
                   <div class="input-group">
                   <h3>Image Post:</h3>
                   <label> <img src="'.$row['isImage'].'" width="300" height="250" />
                   </label></div>';

                   echo '
                   <label>
                   Date:
                    '.$row['Time'].'
                   </label>
                   </div>
                   </form>' ;
                   }
                   
                }
            } 
        else {
                echo "0 results";
            }
        
              
        ?>












    </body>
</html>