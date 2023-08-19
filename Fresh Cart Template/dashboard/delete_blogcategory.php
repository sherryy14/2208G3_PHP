<?php 
 include 'config.php';
 $bcatid = $_GET['id'];


 $query = "DELETE FROM  `blog_category` WHERE bcatid = '{$bcatid}'";
 $result = mysqli_query($conn, $query);
 if($result){
    header("Location: blogcategory.php");
 }

?>