<?php 
function sayHalo(){
	echo "Halo Semuanya" . PHP_EOL;
}

$halo = "sayHalo";
$halo();

function filterFunc(string $name, $filter){
	echo $filter($name) .PHP_EOL;
}
filterFunc("Hanasa", "strtoupper");

function sapa(string $name){
	echo "halo $name".PHP_EOL;
}	

filterFunc("Han Han", "sapa");

 ?>