<?php
/**
* Problem 1
* http://projecteuler.net/index.php?section=problems&id=1
*/

function prob1()
{
	$sum = 0;
	for($i = 1; $i < 1000; $i++)
	{
		if(($i % 3 == 0) || ($i % 5 == 0))
		{
			$sum = $sum + $i;
		}
	}

	echo $sum;
}
prob1();
?>
