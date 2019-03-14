<?php 


use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
	
	public function testhantarnamauser()
	{
		require 'User.php';
		$user=new User; //user object
	
		$user->first_name = "Dele";
		$user->surname = "Ali"; 

		$this->assertEquals('Dele Ali', $user->getFullName());

	}

}