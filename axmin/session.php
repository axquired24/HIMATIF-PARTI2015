<?php
//class session
class session
{
	var $user;
	var $pass;
	
	function __construct($user,$pass)
	{
		$this->user=$user;
		$this->pass=$pass;
	}
	
	function startSession()
	{		
		session_register('user');
		session_register('pass');
		
		$_SESSION[user]=$this->user;
		$_SESSION[pass]=$this->pass;
	}
}
?>