<?php 

function sapa(){
	echo "halo semuanya". PHP_EOL;
}
sapa();

function sayHalo($name){
	echo "Halo $name" . PHP_EOL;
}
sayHalo("Hanasa");

function beli($sayur = "kol"){
	echo "saya telah membeli $sayur" .PHP_EOL;
}
beli("Tahu");

function totalBelanja(int $pasar, int $parkir, int $bensin){
	$total = $pasar + $parkir + $bensin;
	echo "saya menghabiskan uang sebayak $total" . PHP_EOL;
}
totalBelanja(40_000, 2_000, 10_000);

function belanja(...$items){
	foreach($items as $item){
		echo "saya belanja $item" .PHP_EOL;
	}
}
belanja("kable", "monitor", "pulsa");

$buah = ["anggur", "apel", "lengkeng", "tomat"];
belanja(...$buah);


 ?>
