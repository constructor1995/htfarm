<?php
	class hotfarm_registration
	{
		var $home_redir = "admin_forms-layouts.php";
		var $user = "root";
		var $root = '';
		var $dbname = 'hotfarm';
		var $host = 'localhost';

		function __construct($email, $password, $phoneno, $firstname)
		{
			$this->_connect();
			$this->register($email, $password, $phoneno, $firstname);
		}

		function register($email, $password, $phoneno, $firstname)
		{
			$trueorfalse = $this->query($email, $password, $phoneno, $firstname);
			if($trueorfalse == true)
			{
				$this->startsession($email);
				header('Location: '. $this->home_redir);
			}
			else
			{
				echo "problems";
			}

		}

		function query($email, $password, $phoneno, $firstname)
		{
			$query = "INSERT INTO hotfarm.registration VALUES(NULL, '".$email."', '".$phoneno."', '".$password."', '".$firstname."')";
			$init = mysql_query($query) or die(mysql_error());

			if($init)
			{
				return true;
			}

			else
			{
				return false;
			}
		}

		function startsession($email)
		{
			if(empty($_SESSION))
			{
				session_start();
			}

			if(!isset($_SESSION['username']))
			{
				$_SESSION['username'] = $email;
			}
		}

		function _connect()
		{
			mysql_connect($this->host, $this->user, $this->root) or die(mysql_error());
			mysql_select_db($this->dbname) or die(mysql_error());
		}

	}

	?>