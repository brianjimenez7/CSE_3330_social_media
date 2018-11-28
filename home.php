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
   

        <title>Home Page</title>
       
    </head>
    <!-- Navbar -->
<!-- <div class="w3-top"> -->
 <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
 <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:home.php" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="home.php" class="w3-bar-item w3-button w3-padding-large w3-theme-d4"><i class="fa fa-home w3-margin-right"></i>Home</a>
 
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:home.php" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="login.php" class="w3-bar-item w3-button w3-padding-large w3-theme-d4">Logout</a>
  <a href="settings.php" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white" title="My Account">
  <i class="material-icons">person</i>
  </a>


  <!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium w3-large">
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">My Profile</a>
</div>

<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">    
  <!-- The Grid -->
  <div class="w3-row">
    <!-- Left Column -->
    <div class="w3-col m3">
      <!-- Profile -->
      <div class="w3-card w3-round w3-white">
        <div class="w3-container">
         <h4 class="w3-center">My Profile</h4>
         <?php
         $user=$_SESSION['userName'];
         $email=$_SESSION['email'];
         $dob=$_SESSION['DOB'];

        
          $mysql_query = "SELECT * FROM Profile where Username='$user'";
          $result = mysqli_query($conn, $mysql_query);
          $Pro_image=mysqli_fetch_array($result);

        //  echo $email . $dob;
         echo '<div class="w3-center"><img src= "'.$Pro_image['Profile_Images'].'" class="w3-circle" style="height:160px;width:160px" alt="Avatar"></div>';
         
         echo '<hr>
        <p><i class="fa fa-id-card fa-fw w3-margin-right w3-text-theme"></i>'.$user.'</p>
         <p><i class="fa fa-envelope fa-fw w3-margin-right w3-text-theme"></i>'.$Pro_image['Email'].'</p>
         <p><i class="fa fa-birthday-cake fa-fw w3-margin-right w3-text-theme"></i>'.$Pro_image['DOB'].'</p>'
         ?>
        </div>
      </div>
      <br>


       <!-- Accordion -->
       <div class="w3-card w3-round">
        <div class="w3-white">
          <button onclick="myFunction('Demo1')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-magic fa-fw w3-margin-right"></i>Create Page</button>
          <div id="Demo1" class="w3-hide w3-container">
            <p>Some text..</p>
          </div>
          <button onclick="myFunction('Demo2')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-eye fa-fw w3-margin-right"></i>View Pages</button>
          <div id="Demo2" class="w3-hide w3-container">
            <p>Some other text..</p>
          </div>
          <button onclick="myFunction('Demo3')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-pencil-square-o fa-fw w3-margin-right"></i> My Post</button>
          <div id="Demo3" class="w3-hide w3-container">
         <div class="w3-row-padding">
         <br>
           <div class="w3-half">
             <img src="/w3images/lights.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
           <div class="w3-half">
             <img src="/w3images/nature.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
           <div class="w3-half">
             <img src="/w3images/mountains.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
           <div class="w3-half">
             <img src="/w3images/forest.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
           <div class="w3-half">
             <img src="/w3images/nature.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
           <div class="w3-half">
             <img src="/w3images/snow.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
         </div>
          </div>
        </div>      
      </div>
      <br>
      

  
</div>
    <body>
        <div class="front-page-section">
            <h1>CreepR</h1>
        </div>
       

            <div class = "sidebar" >
  
       
        <form method="post" action="createPage.php">
            <div class="input-group">
                <!-- <label>Delete profile</label> -->
                <div class="input-group">
                    <button type="submit" name="CPage" class="btn">Create A Page</button>
                </div>
            </div>
        </form>
        <form method="post" action="ViewAPage.php">
            <div class="input-group">
                <!-- <label>Delete profile</label> -->
                <div class="input-group">
                    <button type="submit" name="VPage" class="btn">View A Page</button>
                </div>
            </div>
        </form>
        <!-- <p>
            <a href="ViewAPage.php">View a page</a>
        </p> -->
        <form method="post" action="see_post.php">
            <div class="input-group">
                <!-- <label>Delete profile</label> -->
                <div class="input-group">
                    <button type="submit" name="OPost" class="btn">See Your Post</button>
                </div>
            </div>
        </form>
        <form method="post" action="createPost.php">
            <div class="input-group">
                <!-- <label>Delete profile</label> -->
                <div class="input-group">
                    <button type="submit" name="OPost" class="btn">Create Post</button>
                </div>
            </div>
        </form>
      
        </div>

        

    
    </body>
</html>
