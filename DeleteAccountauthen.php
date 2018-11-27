<?php
    session_start();

    include_once 'dbh.php';
    echo "here";
    $user=$_SESSION['userName'];
    $P_ID=$_SESSION['Profile_id'];
    // echo $user;
    // echo "<br>";
    // echo $P_ID;
    // sql to delete a record
    $sql = "DELETE FROM Profile WHERE Profile_ID='$P_ID'";

    if (mysqli_query($conn, $sql)) {
        echo "Record deleted successfully";
        header("Location: SDeletePage.php");
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
        echo "<br>";
}
?>