<?php 
 include 'config.php';
 $pid = $_GET['id'];


 $query = "DELETE FROM `products` WHERE pid = '{$pid}'";
 $result = mysqli_query($conn, $query);
 if($result){
    header("Location: products.php");
 }

?>