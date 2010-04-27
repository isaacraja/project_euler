<?php
/**
* Problem 5
* http://projecteuler.net/index.php?section=problems&id=5
*/

//may not complete within php's 30 seconds execution time. Have to find a way to optimize this.
function prob5()
{
	for($n = 20; ; $n+=20) //the smallest number divisible by 20 is 20(n). the next numver divisible by 20 is n+20
	{
		for($i=2;$i<=20;$i++)
		{
			if($n % $i)
			{
				continue 2; //continue the outermost foreach loop
			}
			break;
		}

	}

	echo $n;
}
prob5();
?>