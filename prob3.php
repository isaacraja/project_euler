<?php
/**
* Problem 3
* http://projecteuler.net/index.php?section=problems&id=3
*/

function prob3()
{
	$number = 13195;
	$divisor = 2; // Smallest possible factor. 1 is universal factor and it is ignored

	while($number > 1)
	{
		if($number % $divisor == 0)
		{
			$number = $number / $divisor; //get the new number
		}
		else
		{
			$divisor = $divisor + 1; //move to the next number
		}
	}
	echo $divisor;
}
prob3();
?>