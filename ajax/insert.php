<?php 

$conn = mysqli_connect('localhost','root','','student_record');

$name = $_POST['stdName'];
$class = $_POST['stdClass'];
$city = $_POST['stdCity'];

$insert = "INSERT INTO `users` ( `name`, `class`, `city`) VALUES ('$name', '$class', '$city')";
$res = mysqli_query($conn,$insert);
?>