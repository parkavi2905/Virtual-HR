<?php
$op="1";
$a=52;
$b=75;
	switch($op)
	{
		case '1': $c=$a+$b; echo "Addition of $a and $b is ".$c; break;
		case '2': $c=$a-$b; echo "Subtraction of $a and $b is ".$c; break;
		case '3': $c=$a*$b; echo "Multiplication of $a and $b is ".$c; break;
		case '4': $c=$a/$b; echo "Division of $a and $b is ".$c; break;
		default: echo "Select any option";
	}	
?>
