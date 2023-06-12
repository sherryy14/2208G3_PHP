<?php 

$std = ["Ali","Kashan","Rahim","Shahryar"];
rsort($std);
for($i = 0; $i < count($std); $i++){
    echo "Student: $std[$i] <br>";
}
$marks = [
    "Asmar" => 8,
    "Ubaid" => 10,
    "Basit" => 12,
    "Umair" => 6
];

ksort($marks);

// echo $marks['Asmar'];
echo "<br>";
foreach ($marks as $i => $v) {
    echo "Name: $i and Age: $v<br>";
}

?>