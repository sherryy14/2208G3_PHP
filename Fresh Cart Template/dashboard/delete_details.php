<?php 
 include 'config.php';
 $did = $_GET['id'];


 $query = "DELETE FROM `details` WHERE did = '{$did}'";
 $result = mysqli_query($conn, $query);
 if($result){
    header("Location: details.php");
 }

?>