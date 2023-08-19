<?php 


$conn = mysqli_connect('localhost','root','','student_record');

$city = $_POST['cityVal'];

$fetch = "SELECT * FROM `users` WHERE city = '{$city}'";
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