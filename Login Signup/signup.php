<?php 
include 'config.php';
session_start();


if(isset($_SESSION['username'])){
    header("location: dashboard.php");
}

if(isset($_POST['signup'])){
    $name = $_POST['user'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $fetch = "SELECT * FROM `users` WHERE username = '{$name}' OR email = '{$email}'";
    $fetchRes = mysqli_query($conn, $fetch);

    if(mysqli_num_rows($fetchRes) > 0){
        $exist = "User already exist";
    }else{
        $insert = "INSERT INTO `users` (`username`, `email`, `passowrd`) VALUES ( '$name', '$email', '$pass')";
        $insertRes = mysqli_query($conn, $insert);

        if($insertRes){
            $success = "Successfully Sign Up";

            echo "<script>
            setTimeout(() => {
                window.location.href = 'login.php';
            }, 1000);
        </script>";
            // header("Location: login.php");
        }
    }

}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <h1 class='text-center'>Sign Up</h1>
    <div class="container">
        <form action="" method="post" class="row g-3">
           


                <div class="col-md-4">
                    <label for="validationDefaultUsername" class="form-label">Username</label>
                    <div class="input-group">
                        <span class="input-group-text" id="inputGroupPrepend2">@</span>
                        <input type="text" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" name='user'>
                    </div>
                </div>
             
           
                <div class="col-md-3">
                    <label for="validationDefault05" class="form-label">Email</label>
                    <input type="email" class="form-control" id="validationDefault05" name='email' >
                </div>
                <div class="col-md-3">
                    <label for="validationDefault05" class="form-label">Password</label>
                    <input type="password" class="form-control" id="validationDefault05" name='pass'>
                </div>

               
                <div class="col-12">
                    <button class="btn btn-primary" type="submit" name='signup'>Sign Up</button>
                </div>

                <p class="text-danger"> <?php echo @$exist;?> </p>
                <p class="text-success"> <?php echo @$success;?> </p>
            </form>
       
    </div>
</body>

</html>