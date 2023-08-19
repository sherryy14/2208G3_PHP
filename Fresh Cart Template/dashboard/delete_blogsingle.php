<?php 
 include 'config.php';
 $bsid = $_GET['id'];


 $query = "DELETE FROM `blog_single` WHERE bsid = '{$bsid}'";
 $result = mysqli_query($conn, $query);
 if($result){
    header("Location: blogsingle.php");
 }

?>