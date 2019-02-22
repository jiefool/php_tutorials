<?php

	$operation = "\$result=$argv[1]$argv[2]$argv[3];";
	$operation = str_replace("calculator.php", "*", $operation);
	eval($operation);
	echo $result."\n";

?>