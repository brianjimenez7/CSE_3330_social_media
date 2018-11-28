<?php
include_once 'all_icons.php';
session_start();
include_once 'dbh.php';

        
     

?>

<!DOCTYPE html>
    <html>
    <style>
html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
</style>
    <head>
    <html>
       <!-- Navbar -->
<!-- <div class="w3-top"> -->
 <div class="w3-bar w3-theme-d2 w3-center w3-large">
 <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:home.php" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="home.php" class="w3-bar-item w3-button w3-padding-large w3-theme-d4"><i class="fa fa-home w3-margin-right"></i>Home</a>
 
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:home.php" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="login.php" class="w3-bar-item w3-button w3-padding-large w3-theme-d4">Logout</a>
  <a href="settings.php" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white" title="My Account">
  <i class="material-icons">person</i>
  </a>
  </div>

        <title>Post on Specific Date</title>
        <link rel="stylesheet" type="text/css" href="style.css">

        </head>

            <body>
                 <div class="w3-center">
                    <h1>All Post for this day</h1>
                
                    <?php
                        session_start();
                        include_once 'dbh.php';

                        $date = $_POST['date'];
                       echo $date . "<br></div>";
                       

                       $sql = "SELECT is_text, Created_post,Profile_ID  FROM Post WHERE Created_post like '%$date%'";
                       $result = mysqli_query($conn, $sql);
                       
                      
                   
                     //Show all text   
                        if (mysqli_num_rows($result) > 0) {
                           // output data of each row
                           while($row = mysqli_fetch_assoc($result)) {
                            //    echo "Your post:  " . $row['is_text']. ":" . $row['Created_post']. "<br>";
                               if( $row['is_text'] != null )
                               {


                                $temp = $row['Profile_ID'];
                       
                               
                                  
                                  $sql1 = "SELECT Fname,Lname  FROM Profile WHERE Profile_ID = '$temp'";
                                  $result1 = mysqli_query($conn, $sql1);
                                  $abc=mysqli_fetch_array($result1);
                                 
           
                               
                              echo '<form method="post" >
                              <div class="w3-center w3-border w3-hover-border-black ">
                              <h3>Text Post:</h3>
                              <label>
                               '.$row['is_text'].'
                              </label>' ;
                              echo '<div class="w3-center w3-border w3-hover-border-black">
                              <label>
                              From: 
                               '.$abc['Fname'].' '.$abc['Lname'].'
                              </label>
                              </div>
                              </div>
                              </form>' ;


                           // echo '<h3>Text Post:</h3>' .$row['is_text']. " <br>";
                               }
                           }
                       } 
                   
                   else {
                    echo '<div class = "a"><h3>(No Text on this day)</h3></div></div>';
                       }
                   
           
                           echo '<div class = "w3-center w3-padding-64"><h3> Images</h3></div></div>';
           
                       $sql2 = "SELECT is_Audio, Created_post ,Profile_ID FROM Post WHERE Created_post like '%$date%'";
                       $result2 = mysqli_query($conn, $sql2);
                     
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
                              <div class="w3-center w3-border w3-hover-border-black">
                              <h3>Image Post:</h3>
                              <label> <img src="'.$row['is_Audio'].'" width="300" height="250" />
                              </label> </div>';
           
                              echo '
                              <label>
                              <div class="w3-center w3-border w3-hover-border-black">
                              From:
                               '.$abc['Fname'].' '.$abc['Lname'].'
                              </label>
                              </div>
                              </div>
                              
                              </form>' ;
                            }
                              
                           }
                       } 
                   else {
                    echo '<div class = "a"><h3>(No Images on this day)</h3></div></div>';
                       }




                    ?>











                     <div class="w3-center w3-padding-64">
                    <h1>Posts from Pages</h1>
                   

                    <?php
                        session_start();
                        include_once 'dbh.php';

                        $date = $_POST['date'];
                       echo $date . "<br></div>";
                       

                       $sql4 = "SELECT isText, Time,ProfileID, PageID  FROM Post_on_Page WHERE Time like '%$date%'";
                       $result4 = mysqli_query($conn, $sql4);
                       
                      
                   
                     //Show all text   
                        if (mysqli_num_rows($result4) > 0) {
                           // output data of each row
                           while($row = mysqli_fetch_assoc($result4)) {
                            //    echo "Your post:  " . $row['is_text']. ":" . $row['Created_post']. "<br>";
                               if( $row['isText'] != null )
                               {


                                $temp = $row['ProfileID'];
                                $temp_page_ID = $row['PageID'];
                    //    echo $temp_page_ID . " & "  . $temp;
                               
                                  
                                  $sql5 = "SELECT Fname,Lname  FROM Profile WHERE Profile_ID = '$temp'";
                                  $result5 = mysqli_query($conn, $sql5);
                                  $abc=mysqli_fetch_array($result5);

                                  $sql6 = "SELECT Page_Name  FROM Pages WHERE Page_ID = '$temp_page_ID'";
                                  $result6 = mysqli_query($conn, $sql6);
                                  $abcd=mysqli_fetch_array($result6);


                                 
           
                               
                              echo '<form method="post" >
                              <div class="w3-center w3-border w3-hover-border-black">
                              <h3>Text Post:</h3>
                              <label>
                               '.$row['isText'].'
                              </label>
                              </div>' ;
                              echo '<div class="w3-center w3-border w3-hover-border-black">
                              <label>
                              From: 
                               '.$abc['Fname'].' '.$abc['Lname'].'
                               <br>In Page : '.$abcd['Page_Name'].'
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
                   
           
                           echo '<div class = "w3-center w3-padding-64"><h3> Images</h3></div></div>';
           
                       $sql7 = "SELECT isImage, Time ,ProfileID, PageID  FROM Post_on_Page WHERE Time like '%$date%'";
                       $result7 = mysqli_query($conn, $sql7);
                     
                        if (mysqli_num_rows($result7) > 0 )
                         {
                           // output data of each row
                           while($row = mysqli_fetch_assoc($result7)) {
                              // echo "Your post:  " . $row['is_text']. ":" . $row['Created_post']. "<br>";
                             
                            if( $row['isImage'] != null)
                            {
                                $temp = $row['ProfileID'];
                                $temp_page_ID1 = $row['PageID'];
                       
                               
                                  
                                $sql3 = "SELECT Fname,Lname  FROM Profile WHERE Profile_ID = '$temp'";
                                $result3 = mysqli_query($conn, $sql3);
                                $abc=mysqli_fetch_array($result3);

                                $sql4 = "SELECT Page_Name  FROM Pages WHERE Page_ID = '$temp_page_ID1'";
                                  $result4 = mysqli_query($conn, $sql4);
                                  $abcde=mysqli_fetch_array($result4);
           
                              echo '<form method="post" >
                              <div class="w3-center w3-border w3-hover-border-black w2-padding-28">
                              <h3>Image Post:</h3>
                              <label> <img src="'.$row['isImage'].'" width="300" height="250" />
                              </label></div>';
           
                              echo '
                              <label>
                              <div class="w3-center w3-border w3-hover-border-black">
                              From:
                               '.$abc['Fname'].' '.$abc['Lname'].'
                               <br>In Page : '.$abcde['Page_Name'].'
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