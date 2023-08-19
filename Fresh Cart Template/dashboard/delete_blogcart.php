<?php 
 include 'config.php';
 $bcid = $_GET['id'];


 $query = "DELETE FROM `blog_cart` WHERE bcid = '{$bcid}'";
 $result = mysqli_query($conn, $query);
 if($result){
    header("Location: blogcart.php");
 }

?>