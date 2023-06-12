<?php
// serverName, username, password, databaseName 
$conn = mysqli_connect('localhost', 'root', '', 'stddata');

if ($conn) {
    echo "Database connected<br>";
} else {
    echo "Database failed to connected<br>";
}

if (isset($_POST['btn'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];

    $query = "INSERT INTO `studentrecord` ( `name`, `email`, `gender`) VALUES ( '$name', '$email','$gender')";
    // DatabaseConnectivity, SqlQuery 
    $result = mysqli_query($conn, $query);




    if ($result) {
        echo "Data Inserted<br>";
    } else {
        echo "Data Failed To Insert <br>";
    }

    //    echo $name . $email;

   


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
    <form method="post">
        <input type="text" name="name" id="" placeholder="enter name">
        <input type="text" name="email" id="" placeholder="enter email">

        Male &nbsp;&nbsp; <input type="radio" name="gender" id="" value='M'>
        Female &nbsp;&nbsp; <input type="radio" name="gender" id="" value='F'>
 
        <input type="submit" value="Submit" name='btn'>

    </form>


    <div class="container">
        <table class="table table-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Gender</th>
            </tr>

            <?php
             $fetch = "SELECT * FROM `studentrecord`";
             $fetchResult = mysqli_query($conn, $fetch);
            while($row = mysqli_fetch_array($fetchResult)) {
            ?>
            <tr>
                <td> <?php echo $row[0];?> </td>
                <td><?php echo $row[1];?></td>
                <td><?php echo $row[2];?></td>
                <td><?php echo $row[3];?></td>
            </tr>

            <?php }?>

        </table>
    </div>
    
</body>

</html>