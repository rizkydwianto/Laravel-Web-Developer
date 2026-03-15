<?php
// cara memanggil file animal.php
require_once('animal.php');
require_once("frog.php");
require_once('ape.php');

$sheep = new Animal("shaun");
echo "Name : " . $sheep -> name . "<br>"; // "shaun"
echo "legs : " .  $sheep -> legs . "<br>"; // 4
echo "cold_blooded : " . $sheep -> cold_blooded . "<br>"; // "no"
echo "================================<br>";

// menambahkan animal new "Frog"
$kodok = new Frog("buduk");
echo "Name : " . $kodok -> name . "<br>"; 
echo "legs : " .  $kodok -> legs . "<br>";
echo "cold_blooded : " . $kodok -> cold_blooded . "<br>";
echo "jump : " . $kodok -> jump . "<br>";
echo "================================<br>";

// menambah animal new "Ape"
$sungokong = new Ape("Kera Sakti");
echo "Name : " . $sungokong->name . "<br>";
echo "legs : " . $sungokong->legs . "<br>";
echo "cold blooded : " . $sungokong->cold_blooded . "<br>";
echo "yell : " . $sungokong->yell . "<br>";
?>


<!-- // NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded()) -->
