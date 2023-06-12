<?php 

echo "<h1>Index file</h1>";

$number = 25;
$bool = FALSE;
$name = "Asmar Sheikh";

echo 'Student Name: '. $name . '<br>';

echo "New Student Name: $name <br>";

echo var_dump($bool);
echo "<br>";
echo "<br>";
echo "Length of string: $name =" . strlen($name);
echo "<br>";
echo "Word Count of string: $name =" . str_word_count($name);
echo "<br>";
echo "Reverse of string: $name =" . strrev($name);
echo "<br>";
echo "<br>";

echo pi();
echo "<br>";
echo rand(1,10);
echo "<br>";
echo sqrt($number);
echo "<br>";
echo pow(2,3);
echo "<br>";
echo round(2.4);
echo "<br>";
echo floor(2.4);
echo "<br>";
echo ceil(2.4);
echo "<br>";

// constant name 
define('age',25);

echo age;

// conditional statements 
echo "<br>";
echo 5**3;

$num1 = 5;
$num2 = 10;
$num3 = 7;
$num4 = "10";
echo "<br>";echo "<br>";


if(($num1 > $num2 AND $num3 > $num2 OR $num3 > $num1) XOR $num2 !== $num4){
    echo "Condition Satisfied.";
}else{
    echo "Condition Not Satisfied.";
}

echo "<br>";echo "<br>";

$driverAge = 70;

if($driverAge >= 50){

    if($driverAge >= 50 && $driverAge <=60 ){
        echo "Umair";
    }else{
        echo "Ubaid";
    }

}elseif($driverAge >= 30 && $driverAge <50){
    echo "Basit";
}else{
    echo "Ahmed Logic";
}
echo "<br>";echo "<br>";
$kd = 8;
$season = 2;
$map = "livik";

if($kd > 5 && $map == 'pochinki'  AND $season > 3){

    echo "Pro Player Max";
    if($kd < 6 ){
        echo "Pro Player";
    }elseif($map == 'livik' || $kd >= 3){
        echo "Umair Bot";
    }

}elseif($season >= 3 AND $kd < 2 XOR $map == 'livik'){

    echo "Avg Player";
    if($kd < 3 ){
        echo "AI Player";
    }elseif($map == 'sanhok' || $kd >= 3){
        echo "AI Bot";
    }

}else{
    echo "Classic Player";
}

$language = "php";
$version = 8;
switch ($language) {

    case 'php':
      echo "PHP is server side language";

      if($version >= 4.0 && $version <9 || $language == "php"){
        echo "PHP 8.0";
    }else{
        echo "PHP 7.0";
      }

        break;

    case 'js':
      echo "JS is client side language";

      if($version >= 3 XOR $version < 6 || $language == "c++"){
        echo "JS ES6";
    }else{
        echo "JS ES5";
      }

        break;
    case 'react':
      echo "React JS is front end tool";

      if(($version >= 1 XOR $version <= 2) || $language == "react"){
        echo "React Js is a library";
    }else{
        
        echo "React Js is a library of JavaScript";
      }

        break;    
    
    default:
        echo "You have got fooled";
        break;
}

// Loops 
echo "<br><br>";
for($i = 0 ; $i <=10; $i++){
    // echo "For: $i<br>";
    if($i ==5){
        continue;
    }

    echo "For: $i<br>";

}
$w = 0;
while($w <5){
    echo "While: $w<br>";

    $w++;
}

$d = 10;
do{
    echo "Do while: $d <br>";

    $d--;
}while($d>0);
// functions 
function sum(){
    $x= 4;
    $y= 4;
    $z = $x+$y;
    echo "$z <br>";
}
sum();

function info($name, $age, $edu="IT"){
    echo "Name: $name <br> Age: $age <br> Educaton: $edu";
}

info("Ali",34,"BSCS");

$n1 = 5;
$n2 =5;

function cal(){
    global $n1, $n2;
    $n3 = $n1+$n2;
    echo $n3;
}

cal();
echo "<br>";
function incre(){
   static $i = 0;
    $i++;
    echo $i;
}

incre();
incre();
incre();

// Arrays 

$std = ["Ali","Kashan","Rahim","Shahryar"];

$emp = array("Ali","Kashan","Rahim","Shahryar");
echo "<br>";
echo $std[2];
echo "<br>";
echo $emp[3];
echo "<br>";

echo "<pre>";
print_r($std);
echo "</pre>";

sort($std);
for($i = 0; $i <= count($std); $i++){
    echo "Student: $i <br>";
}

echo "<br>";
foreach ($std as $value) {
    echo " Student: $value <br>";
}

echo "<br>";echo "<br>";
foreach ($std as $ibr => $value) {
    echo "ID: $ibr Student: $value <br>";
}


$empDetails =[
    ["Kashif",23,"IT"],
    ["Owais",21,"IT"],
    ["Amsar",23,"IT"],
    ["Kashif",23,"CE"],
    ["Kashif",13,"IT"]

];
echo "<pre>";
print_r($empDetails);
echo "</pre>";

// echo $empDetails[0][0];

foreach ($empDetails as $o => $ov) {
    echo "Emp Details Of $o: <br>";
    foreach ($ov as $i => $iv) {
        echo "$iv <br>";
    }
}

// Associative Array 



?>