<?php 
$nilai = "A";

switch($nilai == "A"){
	case "A":
		echo "Anda Lulus dengan baik" .PHP_EOL;
		break;
	case "B":
	case "C":
		echo "Anda Lulus" .PHP_EOL;
		break;
	default:
		echo "Anda tidak Lulus" .PHP_EOL;
}


 ?>
