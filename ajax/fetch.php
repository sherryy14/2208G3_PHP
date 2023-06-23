<?php 

$conn = mysqli_connect('localhost','root','','student_record');

$query = "SELECT * FROM `users`";
$res = mysqli_query($conn,$query);

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