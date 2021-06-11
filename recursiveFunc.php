<?php 
function loop($val){
	if ($val == 1 ){
		return 1;
	} else {
		return $val * loop($val - 1);
	}
}
var_dump(loop(5));
 ?>