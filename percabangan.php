<?php 
$nilai = 70;
$absen = 80;

if ($nilai >= 75 && absen >= 80){
	echo "Selamat, Anda Lulus dengan nilai A" . PHP_EOL;
} else if ($nilai >= 60 && $absen >= 75) {
	echo "Selamat, Anda Lulus dengan nilai B" . PHP_EOL;
} else{
	echo "Maaf, Anda tidak Lulus" . PHP_EOL;
}

 ?>