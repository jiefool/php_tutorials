<?php
echo "Select operation [A=Addition, S=Subtraction, M=multiplication, D=division]:";

$operations = array(
				"A"=>array("Addend", "Adder", "Sum", "+"),
				"S"=>array("Minuend", "Subtrahend", "Difference", "-"),
				"M"=>array("Multiplicand", "Multiplier", "Product", "*"),
				"D"=>array("Dividend", "Divisor", "Quotiend", "/"),
			);

$handle = fopen ("php://stdin","r");
$operation = fgets($handle);

processOperation($operations[trim($operation)]);

function processOperation($operationParts){
	$count = count($operationParts);
	$num = array();
	foreach($operationParts as $key=>$op){	
		if ($key == 2){
			break;
		}
		echo "Enter $op: ";
		$handle = fopen ("php://stdin","r");
		$num[$key] = fgets($handle);
	}

	eval("\$result=\$num[0]$operationParts[3]$num[1];");

	echo "$operationParts[2]: ".$result."\n";

}

?>