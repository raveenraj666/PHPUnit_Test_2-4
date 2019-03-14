<?php 


use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
	
	public function testUserPwd()
	{
		require 'Data.php';
		$user=new Data; //user object
	
		$user->username = "Dele";
		$user->password = "Ali"; 

		$this->assertEquals('Dele', $user->getUser());
		$this->assertEquals('Ali', $user->getPwd());
	}

}