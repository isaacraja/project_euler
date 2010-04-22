<?php
/**
* Problem 4
* http://projecteuler.net/index.php?section=problems&id=4
*/

function prob4()
{
	$result = 0;
	for($i = 100; $i <= 999; $i++ )
	{
		for($j = 100; $j <= 999; $j++)
		{
			$k = $i * $j; //get the xxx*xxx
			if($k == strrev($k)) //check palindrome
			{
				if($k > $result) //highest palindrome
				{
					$result = $k;
				}
			}
		}
	}
	echo $result;
}
prob4();
?>