<?php 
$barang = ["Tepung", "Gula", "Garam"];
$names = [
	"first" => "Hanhan",
	"middle" => "Hanasa",
	"last" => "Sofari"
];

//menggunakan for
for($i = 0; $i < count($barang); $i++){
	echo "barang $barang[$i] masih ada dengan index ke-$i" .PHP_EOL;
}

//foreach
foreach($barang as $b){
	echo "barang $b masih ada " .PHP_EOL;
}

//foreach sambil arrayMap
foreach($names as $key => $val) {
	echo "key dari $key berisi $val" .PHP_EOL;
}

 ?>