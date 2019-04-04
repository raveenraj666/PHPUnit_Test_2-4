<?php
   
function add($a,$b)
{
	return $a+$b ;	
}

function substrac($a,$b)
{
	return $a-$b;
}
function multiply($a,$b)
{
	return  $a*$b ;	
}
function divide($a,$b)
{
		if($b == 0) 
		{
			throw new Exception("Division by '0' is not possible");		
		}			
		return $a / $b;		
}

?>

	