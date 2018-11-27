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
        <title>View Account POst</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="header">
            <h1>All Post of Account on Pages</h1>
        </div>
        <?php

        //     session_start(); 
        //     include_once 'dbh.php';
        //     $AID=$_POST['AccountID'];
        //     // echo $temp;
        //     $sql1 =  "SELECT * FROM Post_on_Page WHERE ProfileID='$AID'";
        //     $result2 = mysqli_query($conn, $sql1);
        //     if (mysqli_num_rows($result2) > 0)
        //     {
        //         // output data of each row
        //         while($row = mysqli_fetch_assoc($result2)) {
        //             if( $row['isImage'] != null ){
        //                 echo '<form method="post" >
        //                     <div class="input-group">
        //                     <h3>Image Post:</h3>
        //                     <label> <img src="'.$row['isImage'].'" width="300" height="250" />
        //                     </label></div>';
        //                     //here could try to do a query to get the page name to post
        //                     //will do it later

        //                     echo '<label>
        //                             Page ID:
        //                             '.$row['PageID'].'
        //                             </label> <br>';
                            
                            
        //                     echo '
        //                     <label>
        //                     Date:
        //                      '.$row['Time'].'
        //                     </label>
        //                     </div>
        //                     </form>' ;
        //             }
        //         }

        //     }
        //     else{
        //         echo "none";

        //     }

        //     $sql = "SELECT * FROM Post_on_Page WHERE ProfileID='$AID'";
        //     $result1 = mysqli_query($conn, $sql);
                        
        //      if (mysqli_num_rows($result1) > 0) {
        //         // output data of each row
        //         while($row = mysqli_fetch_assoc($result1)) {
        //            // echo "Your post:  " . $row['is_text']. ":" . $row['Created_post']. "<br>";
        //             if( $row['isText'] != null )
        //             {

                    
        //            echo '<form method="post" action="pageinfo.php">
        //            <div class="input-group">
        //            <h3>Text Post:</h3>
        //            <label>
        //             '.$row['isText'].'
        //            </label>
        //            </div>' ;
        //            echo '<div class="input-group">
        //            <label>
        //            Date: 
        //             '.$row['Time'].'
        //            </label>
        //            </div>
        //            </form>' ;
        //             }
        //         }
        //     } 
        
        // else {
        //         echo "0 results <br>";
        //     }
            session_start(); 
            include_once 'dbh.php';
        $AID=$_POST['AccountID'];
        $sql = "SELECT * FROM Post_on_Page WHERE ProfileID='$AID'";
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
                                        echo '<label>
                                    Page ID:
                                    '.$row['PageID'].'
                                    </label> <br>';
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
        

                echo '<div class = "a"><h2> Images</h2></div></div>';

            $sql1 =  "SELECT * FROM Post_on_Page WHERE ProfileID='$AID'";
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

                   echo '<label>
                   Page ID:
                   '.$row['PageID'].'
                   </label> <br>';

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