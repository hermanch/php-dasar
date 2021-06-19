<?php
$bag = ["apple", "orange", "grape"];
$cart = ["cucumber", "carrot", $bag];

//var_dump($cart);
echo $cart[1] .PHP_EOL;
echo $cart[2][1] .PHP_EOL; //Orange
 ?>
