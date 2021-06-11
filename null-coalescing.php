<?php 
$person = [
	"name" => "Hanasa"
	];
$name = $person["name"] ?? "Blank"; 
// jika $person => "name" itu tidak ada nilainya maka akan diisi dengan "blank"

echo $name .PHP_EOL; 
 ?>