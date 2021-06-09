<?php 

$name = "Hanasa";
echo "nama saya " . $name . PHP_EOL;
$nilai = 100;
echo "nilai tugas: " . $nilai . PHP_EOL;


// mengganti type data
$valueStr = (string)100;
var_dump($valueStr);

$valueInt = (int)"309";
var_dump($valueInt);

$valueFloat = (float)"16.454";
var_dump($valueFloat);

var_dump((int)"string");

 ?>