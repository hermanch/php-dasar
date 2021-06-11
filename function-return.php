<?php 
function totalBelanja(int $pasar, int $parkir, int $bensin){
	return $pasar + $parkir + $bensin;
}
$total = totalBelanja(24000, 3000, 5000);
var_dump($total);

function sum($ang, $ka): int{
	return $ang + $ka;
}
$angka = sum(12,3);
var_dump($angka);
 ?>
