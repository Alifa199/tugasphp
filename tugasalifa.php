<?php
echo "latihan 1</br>";
$a=80;
$b=81;

if ($a % 2 == 0){
    echo $a."adalah bilangan genap</br>";
} else {
    echo $a."adalah bilangan ganjil</br>";
} 
if ($b % 2 == 0){
    echo $b."adalah bilangan genap</br>";
} else {
    echo $b."adalah bilangan ganjil</br>";
}

echo "latihan 2</br>";
$a=2;
$b=5;

if ($a > $b) {
    echo "a lebih besar dari b";
}
if ($a < $b) {
    echo "a lebih kecil dari b";
}
if ($a == $b) {
    echo "a sama besar dengan b";
}

echo "</br>latihan 3</br>";
$username = "admin";
$password = "qwerty";

if ($username!="admin"  or $password!="qwerty") {
    echo "username dan  password tidak sesuai";
} else {
    echo "username dan password sesuai,hak akses diberikan";
} 

echo "</br>latihan 4</br>";
$username= "dmin";
$password = "qwerty";

$datausername = "admin";
$datapassword = "qwerty";

if($username == $datausername && $password == $datapassword){
    echo "username dan password sesuai,hak akses diberikan";
} elseif ($username!=$datausername && $password!=$datapassword){
    echo "username dan password tidak sesuai";
} 
if ($username!=$datausername && $password==$datapassword){
    echo "username tidak sesuai,password sesuai";
} elseif  ($username==$datausername && $password!=$datapassword){
    echo "username sesuai,password tidak sesuai";
} 

?>

