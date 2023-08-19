<?php 
 include 'config.php';
 $bid = $_GET['id'];


 $query = "DELETE FROM `banner` WHERE bid = '{$bid}'";
 $result = mysqli_query($conn, $query);
 if($result){
    header("Location: banner.php");
 }

?>