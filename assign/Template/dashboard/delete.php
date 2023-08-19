<?php 
 include 'config.php';
 $id = $_GET['id'];


 $query = "DELETE FROM `products` WHERE id = '{$id}'";
 $result = mysqli_query($conn, $query);
 if($result){
    header("Location: products.php");
 }

?>