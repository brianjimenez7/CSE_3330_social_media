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


        <title>Post on Specific Date</title>
        <link rel="stylesheet" type="text/css" href="style.css">

        </head>

            <body>
                 <div class="header">
                    <h1>All Post for this day</h1>
                
                    <?php
                        session_start();
                        include_once 'dbh.php';

                        $date = $_POST['date'];
                       echo $date . "<br></div>";
                       

                       $sql = "SELECT is_text, Created_post,Profile_ID  FROM Post WHERE Created_post like '%$date%'";
                       $result1 = mysqli_query($conn, $sql);
                       
                      
                   
                     //Show all text   
                        if (mysqli_num_rows($result1) > 0) {
                           // output data of each row
                           while($row = mysqli_fetch_assoc($result1)) {
                            //    echo "Your post:  " . $row['is_text']. ":" . $row['Created_post']. "<br>";
                               if( $row['is_text'] != null )
                               {


                                $temp = $row['Profile_ID'];
                       
                               
                                  
                                  $sql2 = "SELECT Fname,Lname  FROM Profile WHERE Profile_ID = '$temp'";
                                  $result2 = mysqli_query($conn, $sql2);
                                  $abc=mysqli_fetch_array($result2);
                                 
           
                               
                              echo '<form method="post" >
                              <div class="input-group">
                              <h3>Text Post:</h3>
                              <label>
                               '.$row['is_text'].'
                              </label>
                              </div>' ;
                              echo '<div class="input-group">
                              <label>
                              From: 
                               '.$abc['Fname'].'
                              </label>
                              </div>
                              </form>' ;


                           // echo '<h3>Text Post:</h3>' .$row['is_text']. " <br>";
                               }
                           }
                       } 
                   
                   else {
                    echo '<div class = "a"><h3>(No Text on this day)</h3></div></div>';
                       }
                   
           
                           echo '<div class = "a"><h3> Images</h3></div></div>';
           
                       $sql1 = "SELECT is_Audio, Created_post ,Profile_ID FROM Post WHERE Created_post like '%$date%'";
                       $result2 = mysqli_query($conn, $sql1);
                     
                        if (mysqli_num_rows($result2) > 0 )
                         {
                           // output data of each row
                           while($row = mysqli_fetch_assoc($result2)) {
                              // echo "Your post:  " . $row['is_text']. ":" . $row['Created_post']. "<br>";
                             
                            if( $row['is_Audio'] != null)
                            {
                                $temp = $row['Profile_ID'];
                       
                               
                                  
                                $sql3 = "SELECT Fname,Lname  FROM Profile WHERE Profile_ID = '$temp'";
                                $result3 = mysqli_query($conn, $sql3);
                                $abc=mysqli_fetch_array($result3);
           
                              echo '<form method="post" >
                              <div class="input-group">
                              <h3>Image Post:</h3>
                              <label> <img src="'.$row['is_Audio'].'" width="300" height="250" />
                              </label></div>';
           
                              echo '
                              <label>
                              From:
                               '.$abc['Fname'].'
                              </label>
                              </div>
                              </form>' ;
                            }
                              
                           }
                       } 
                   else {
                    echo '<div class = "a"><h3>(No Images on this day)</h3></div></div>';
                       }




                    ?>
                
            
            </body>














    </html>