<?php

function addNumbers($num1,$num2, $printResult= false){

	$sum=$num1 + $num2;
	if ($printResult) {     
    echo 'The result is' . $sum; 	
}
 
 return $sum;
}

$sum1 = addNumbers(1, 3); 
$sum1 = addNumbers(4, 5, true); 
$sum1 = addNumbers(1, raten, false); 
$sum1 = addNumbers(5,4.5); 
$sum1 = addNumbers(3.4,5,$$);
?>

