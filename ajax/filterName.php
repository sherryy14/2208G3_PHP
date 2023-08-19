<?php 


$conn = mysqli_connect('localhost','root','','student_record');

$name = $_POST['nameVal'];

$fetch = "SELECT * FROM `users` WHERE name LIKE '$name%'";
$res = mysqli_query($conn,$fetch);


$output = '';
while($row = mysqli_fetch_array($res)){
    $output .="
    <tr>
    <td>$row[0]</td>
    <td>$row[1]</td>
    <td>$row[2]</td>
    <td>$row[3]</td>
    </tr>
    ";
}

echo $output;
?>