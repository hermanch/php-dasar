<?php 

$counter = 1;

while(true){

	echo "Ini Break ke $counter". PHP_EOL;
	$counter++;
	if ($counter > 4){
		break;
	}
}

for($i = 1; true; $i++){
	echo "ini i yang ke-$i".PHP_EOL;
	if ($i >= 23 ){
		break;
	}
}


 ?>

