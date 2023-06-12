<?php 

session_start();

if(isset($_POST['btn'])){
    $name = $_POST['name'];


    $_SESSION['username'] = $name;

    header("Location: dashboard.php");


}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name='name'>
        <input type="submit" value="Submit" name='btn'>
    </form>
</body>
</html>