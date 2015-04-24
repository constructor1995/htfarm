<?php
	class Hotfarm_auth
	{
		var $home_redir = 'home.php';
		var $user = 'root';
		var $pass = '';
		var $host = 'localhost';
		var $dbname = 'hotfarm';
		function __construct($email, $password)
		{
			$this->_connect();
			$this->authorization($email, $password);
		}
		public function authorization($email, $password)
		{
			
			$arrayLogin = array(
				1=>$email,
				2=>$password
				);
			$check_query = $this->query($arrayLogin);
			if($check_query == true)
			{
				$this->start_session($email);
				header('Location: '. $this->home_redir);
			}

		}

		public function start_session($email)
		{
			try
			{
				if(empty($_SESSION))
				{
					throw new Exception('cannot start session');
					session_start();
				}	

				if(!isset($_SESSION['username']))
				{
					$_SESSION['username'] = $email;
				}
			}

			catch(Exception $e)
			{
				$errormsg = ($e->getmessage());
				echo $errormsg;
			}
			

			

		}


		public function query($array)
		{	
			$username = $array[1];
			$password = $array[2];
			$query = "SELECT * FROM hotfarm.registration WHERE firstname = '".$username."' AND password = '".$password."' ";
			$init = mysql_query($query) or die(mysql_error());

			$rows = mysql_num_rows($init);

			if($rows)
			{
				return true;
			}

			else
			{
				echo 'korede';
			}
		}

	

		public function _connect()
		{
			mysql_connect($this->host, $this->user, $this->pass) or die(mysql_error());
			mysql_select_db($this->dbname) or die(mysql_error());

		}


	}

	$jarvis = new Hotfarm_auth('korede', 'constructor');
?>