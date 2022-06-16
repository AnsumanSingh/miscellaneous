<?php

function isPerfectSquare($x){

	$c=0;

	foreach ($x as  $value) {


		$sqroot=sqrt($value);

		$floor= floor($sqroot);

		if($sqroot - $floor == 0){

			$c=$c+1;
		}
		
	}

	
	return $c;
}



$n = array('10','81','33','55','64');

$count = isPerfectSquare($n);

echo 'Perfect Square Count==>'.$count ;


?>
