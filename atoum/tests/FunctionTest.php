<?php 
require 'function.php';

use PHPUnit\Framework\TestCase;

class FunctionTest extends TestCase
{
	public function testaddbaru()
	{
	
		$this->assertEquals(4, add(2,2));
	}


	public function testaddxjadi()
	{
	
		$this->assertNotEquals(5, add(2,2));
	}
}