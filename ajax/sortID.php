<?php 


$conn = mysqli_connect('localhost','root','','student_record');

$id = $_POST['id'];

$fetch = "SELECT * FROM `users` ORDER BY `id` $id";
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