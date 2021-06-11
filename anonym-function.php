<?php 
$sayhello = function (string $name) {
	echo "Helo $name" .PHP_EOL;
};

$sayhello("Hanasa");



$sapa = function ($name, $filter){
	echo $filter($name) .PHP_EOL;
};
$filterFunc = function ($name){
	return "halo $name";
};


$sapa("Han Han", function (string $name) {
	echo "Halooo $name";
});
$sapa("Hanasa", $filterFunc );

$fullName = "Han Han Hanasa";
$sayBye = function () use($fullName){
	echo "Good bye $fullName" .PHP_EOL;
};
$sayBye();

 ?>
