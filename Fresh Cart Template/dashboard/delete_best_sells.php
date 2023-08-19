<?php 
 include 'config.php';
 $dbsid = $_GET['id'];


 $query = "DELETE FROM `daily_best_sells` WHERE dbsid = '{$dbsid}'";
 $result = mysqli_query($conn, $query);
 if($result){
    header("Location: organic_coffe_banner.php");
 }

?>