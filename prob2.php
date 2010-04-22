<?php
/**
* Problem 2
* http://projecteuler.net/index.php?section=problems&id=2
*/

function prob2()
{
 	$limit = 4000000; //4 million
 	$m = $n = 1; //First two fibonacci numbers
 	$sum = 0;//Initial Sum

 	while($n < $limit)
 	{
		$temp = $n;
		$n = $m + $n; //Get the next number
		$m = $temp; //Assign the last number to m

		if($n % 2 == 0) //sum if n is even
		{
			$sum = $sum + $n;
		}
 	}

	echo $sum;
}
prob2();
?>
