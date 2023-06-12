<?php 

session_start();

echo "<h1>Welcome {$_SESSION['username']} </h1>";


if(isset($_POST['logout'])){
    session_unset();
    session_destroy();

    header("Location: session.php");
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
    <form action="" method='post'>

        <input type="submit" value="Logout" name='logout'>
    </form>
</body>
</html>