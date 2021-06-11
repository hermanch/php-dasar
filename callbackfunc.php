<?php 
function sayHello(string $name, callable  $func){
	// $getName = call_user_func($func, $name);
	// echo "Hello $getName" .PHP_EOL;
	$getName = $func($name);
	echo "Helo $getName" .PHP_EOL;
}

sayHello("Hanasa", function ($name) { return strtoupper($name);});
sayHello("Hanasa", "strtolower");
sayHello("Hanasa", function (string $name){
	return strtoupper($name);
});
sayHello("Hanasa", fn($name) => strtolower($name));

 ?>