<?php 
$name = "Hanasa";
$umur = 23;
function getName(){
	global $name, $umur; //ngambil variable global
	echo "Halo $name dan dia berusia $umur tahun" .PHP_EOL;
}

function sayHalo(){
	$name = "Han Han";
	echo "Halooo $name" .PHP_EOL;
}

function hitung(){
	static $co = 1;
	echo "ini hitungan ke-$co".PHP_EOL;

	$co++;
}

getName();
sayHalo();

hitung();
hitung();
 ?>