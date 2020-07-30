<?php

require('animal.php');

$sheep = new Animal("Shaun");
$sheep->get_leg(2);
echo $sheep->nama."<br>";
echo $sheep->legs."<br>";
echo $sheep->cold_blooded."<br>";

echo "<br>";

$kodok = new Frog("buduk");
$kodok->get_leg(4);
echo $kodok->nama."<br>";
echo $kodok->legs."<br>";
echo $kodok->cold_blooded."<br>";
echo $kodok->jump()."<br>";

echo "<br>";

$sungokong = new Ape("kera sakti");
echo $sungokong->nama."<br>";
echo $sungokong->legs."<br>";
echo $sungokong->cold_blooded."<br>";
$sungokong->yell();
