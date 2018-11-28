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
 <div class="w3-bar w3-theme-d2 w3-center w3-large">
 <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:home.php" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="home.php" class="w3-bar-item w3-button w3-padding-large w3-theme-d4"><i class="fa fa-home w3-margin-right"></i>Home</a>
 
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:home.php" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="login.php" class="w3-bar-item w3-button w3-padding-large w3-theme-d4">Logout</a>
  <a href="settings.php" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white" title="My Account">
  <i class="material-icons">person</i>
  </a>

  




<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">  
<div class = "w3-center ">
<h1>CreepR</h1> 
</div> 
  <!-- The Grid -->
  <div class="w3-row">
    <!-- Left Column -->
    <div class="w3-center">
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
         </div>  
        
        <form method="post" action="createPage.php"> 
          <button method="post" action="createPage.php" class="w3-button w3-block w3-theme-l1 w3-center"><i class="fa fa-magic fa-fw w3-margin-right"></i>Create Page</button>
          <div  type="submit" name="CPage" class="w3-hide w3-container">
          </form>
          </div>
         
         
         
          <form method="post" action="ViewAPage.php"> 
          <button class="w3-button w3-block w3-theme-l1 w3-center"><i class="fa fa-eye fa-fw w3-margin-right"></i>View Pages</button>
          <div  type="submit" name="VPage" class="w3-hide w3-container">
          </form>
          </div>

          <form method="post" action="see_post.php"> 
          <button  class="w3-button w3-block w3-theme-l1 w3-center"><i class="fa fa-pencil-square-o fa-fw w3-margin-right"></i> My Post</button>
          <div type="submit" name="OPost" class="w3-hide w3-container">
          </form>
        
          </div>

          <form method="post" action="createPost.php"> 
          <button  class="w3-button w3-block w3-theme-l1 w3-center"><i class="fa fa-pencil fa-fw w3-margin-right"></i>Create Post</button>
          <div type="submit" name="OPost" class="w3-hide w3-container">
          </form>
        
          </div>
           
    
      <br>
      <br>
      

</html>
