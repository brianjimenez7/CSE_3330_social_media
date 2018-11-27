<?php
    session_start();
    $database = "SocialMedia";
    $servername = "localhost";
    $dataname = "root";
    $pass = "root";
    $conn = new mysqli($servername, $dataname, $pass, $database);
    $user=$_SESSION['userName'];
    $profile_id=$_SESSION['Profile_id'];
    $pageID=$_SESSION['page_ID'];
    $pageName=$_POST['PageName'];
    $pageCategory=$_POST['PageCategory'];
    $pageDescription=$_POST['PageDescription'];
    // echo $user;
    // echo "<br>";
    // echo $profile_id;
    // echo "<br>";
    // echo $pageName;
    // echo "<br>";
    // echo $pageCategory;
    // echo "<br>";
    // echo $pageDescription;
    // echo "<br>";
    // Check connection
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
//     }
    if(($pageCategory=="")&&($pageName=="")&&($pageDescription=="")){
        echo "nothing to change";
    }
    else if(($pageCategory=="")&&($pageName=="")){
        echo "change description <br>";
        $sql = "UPDATE Pages SET Description='$pageDescription' WHERE (Admin_ID='$profile_id' and Page_ID='$pageID')";
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
        } 
        else {
            echo "Error updating record: " . $conn->error;
        }
    }
    else if(($pageName=="")&&($pageDescription=="")){
        echo "change cat <br>";
        $sql = "UPDATE Pages SET Category='$pageCategory' WHERE (Admin_ID='$profile_id' and Page_ID='$pageID')";
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
        } 
        else {
            echo "Error updating record: " . $conn->error;
        }

    }
    else if(($pageCategory=="")&&($pageDescription=="")){
        echo "change name <br>";
        $sql = "UPDATE Pages SET Page_Name='$pageName' WHERE (Admin_ID='$profile_id' and Page_ID='$pageID')";
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
        } 
        else {
            echo "Error updating record: " . $conn->error;
        }

    }
    else if($pageCategory==""){
        echo "cahanged name and description<br>";
        $sql = "UPDATE Pages SET Page_Name='$pageName' , Description='$pageDescription'  WHERE (Admin_ID='$profile_id' and Page_ID='$pageID')";
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
        } 
        else {
            echo "Error updating record: " . $conn->error;
        }
    }
    else if($pageName==""){
        echo "changed description and category<br>";
        $sql = "UPDATE Pages SET Category='$pageCategory' , Description='$pageDescription'  WHERE (Admin_ID='$profile_id' and Page_ID='$pageID')";
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
        } 
        else {
            echo "Error updating record: " . $conn->error;
        }
    }
    else if($pageDescription==""){
        echo "cahnged name and category";
        $sql = "UPDATE Pages SET Category='$pageCategory' , Page_Name='$pageName'  WHERE (Admin_ID='$profile_id' and Page_ID='$pageID')";
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
        } 
        else {
            echo "Error updating record: " . $conn->error;
        }
    }
    else{
        echo "change all";
        $sql = "UPDATE Pages SET Category='$pageCategory' , Page_Name='$pageName', Description='$pageDescription'  WHERE (Admin_ID='$profile_id' and Page_ID='$pageID')";
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
        } 
        else {
            echo "Error updating record: " . $conn->error;
        }
    }
?>