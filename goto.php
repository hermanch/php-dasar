<?php 
goto a;
echo "Hello Dunia". PHP_EOL;

a: 
echo "Hello A". PHP_EOL;


for($i = 1; true; $i++){
	echo "ini i yang ke-$i".PHP_EOL;
	if ($i >= 23 ){
		goto stop;
	}
}
stop:
echo "berhenti" .PHP_EOL;

 ?>