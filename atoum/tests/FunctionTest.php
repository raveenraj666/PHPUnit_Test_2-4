<?php 

use PHPUnit\Framework\TestCase;
require 'Function.php';

class FunctionTest extends TestCase
{

	public function testAdd()
	{		
		$this->assertEquals(0,add(-2,2));
	}

	public function testSubstrac()
	{
		$this->assertEquals(4, substrac(6,2));
	}

	public function testMultiply()
	{
		$this->assertEquals(12, multiply(6,2));
	}

	public function testMultiply2()
	{
		$this->assertEquals(12, multiply(6,2));
	}
	
	public function testDivide()
	{
		$this->assertEquals(4, divide(12,3));		
	}

    public function testFailure()
    {
        $this->assertCount(2, ['foo','foo']);
	}
	
	public function testFailuree()
    {
        $this->assertDirectoryExists('/home/iot-1/Desktop/project/login/project/atoum/tests');
	}
	
	public function testFail4ure()
    {
		$this->assertNotEmpty(["Raj"]);
	}

	

	
	}
?>

