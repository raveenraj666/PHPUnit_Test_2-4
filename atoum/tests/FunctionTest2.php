<?php 

use PHPUnit\Framework\TestCase;
include_once 'Function2.php';

class FunctionTest2 extends TestCase
{

	public function testMultiply()
	{
		$this->assertEquals(12, multiply(6,2));
	}
}
?>

