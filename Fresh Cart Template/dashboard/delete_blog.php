<?php 
 include 'config.php';
 $bid = $_GET['id'];


 $query = "DELETE FROM `blog` WHERE bid = '{$bid}'";
 $result = mysqli_query($conn, $query);
 if($result){
    header("Location: blog.php");
 }

?>