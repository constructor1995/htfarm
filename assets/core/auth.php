<?php

	class Devniche_auth
	{
		var $home_redir = 'admin_forms-layouts.php'; 
		var $user = 'root';
		var $pass = '';
		var $host = 'localhost';
		var $dbname = 'hotfarm';
		
		function __construct($user, $pass)
		{
			$this->_connect();
			$this->filter($user, $pass);
		}
		
		
		function filter($username, $password)
		{
			$escaped_username = mysql_real_escape_string($username);
			$escaped_password = mysql_real_escape_string($password);
			
			$new_array = array(
			0 => $escaped_username, 
			1 => $escaped_password
			);
			
			$this->check_valid($new_array);
		}
		
		function check_valid($array_filtered)
		{
			$select_user = $array_filtered[0];
			$select_password = $array_filtered[1];
			
			$query = "SELECT firstname, email, password FROM registration WHERE firstname = '".$select_user."' AND password = '".$select_password."' OR email = '".$select_user."' AND password = '".$select_password."'" ;
			$init = mysql_query($query) or die(mysql_error());
			
			$row = mysql_num_rows($init);
			if($row != NULL)
			{	
				$this->start_session($select_user);
				header("Location: ". $this->home_redir);
				
			}
			
			else
			{
				print ("User does not exist yet");
			}
			
		


		}
		function _connect()
		{
			mysql_connect($this->host, $this->user, $this->pass) or die(mysql_error());
			mysql_select_db($this->dbname) or die(mysql_error());

		}

		function start_session($username)
		{
			if(empty($_SESSION))
			{
				session_start();
			}

			if(!isset($_SESSION['username']))
			{
				$_SESSION['username'] = $username;
			}
		}

	
	}	

		
?>