<?php 

session_start();


// here we will check if that user is a admin or not, 
// if so, he will be directed to the admin settings pages.

header("Location: admin_html.php");



?>