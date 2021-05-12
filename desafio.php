<?php

$RestoDaDivisão=0;

for ($contador=0; $contador <=100; $contador++) {
	$RestoDaDivisão = $contador % 2;
	if ($RestoDaDivisão != 0) {
		echo "#$contador" .PHP_EOL;

	 } else
	 continue;	
}