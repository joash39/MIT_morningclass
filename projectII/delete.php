<?php
//check if the $_GET superglobal has the data(id)
if($_GET['user_id']){
    $id = $_GET['user_id'];
    include 'config.php';
    $sql = "DELETE FROM `shoes` WHERE 0";
    if(mysqli_query($conn, $sql)){
        echo "record deleted successfully";
        header("location:index.php");
    }else{
        echo 'Deletion unsuccessful';
    }
}
?>