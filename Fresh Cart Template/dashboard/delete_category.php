<?php 
 include 'config.php';
 $cid = $_GET['id'];


 $query = "DELETE FROM `category` WHERE cid = '{$cid}'";
 $result = mysqli_query($conn, $query);
 if($result){
    header("Location: categories.php");
 }

?>