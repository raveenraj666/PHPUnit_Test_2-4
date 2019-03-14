<?php

class Data
{
	public $username;

	public $password;

	public function getUser()
	{
		return "$this->username";
	}


	public function getPwd()
	{
		return "$this->password";
	}

}