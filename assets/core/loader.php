<?php
	class InsertAdmin
	{

		var $page_redir = 'alert.php';
		var $error_msg = 'alert not sent';
		var $success = 'alert sent';
		var $host = 'localhost';
		var $user = 'root';
		var $pass = '';
		var $dbname = 'hotfarm';

		function __construct($pname, $weather, $peraffect, $control, $addr, $state, $city, $location, $hardate, $pdestroy, $datestart, $photo, $country, $cname, $p_url)
		{
			$this->_connect();
			$this->do_form($pname, $weather, $peraffect, $control, $addr, $state, $city, $location, $hardate, $pdestroy, $datestart, $photo, $country, $cname, $p_url);
		}

		function do_form($pname, $weather, $peraffect, $control, $addr, $state, $city, $location, $hardate, $pdestroy, $datestart, $photo, $country, $cname, $p_url)
		{
			$newArray = array(
				0 => $pname,
				1 => $weather,
				2 => $peraffect,
				3 => $control,
				4 => $addr,
				5 => $state,
				6 => $city,
				7 => $location,
				8 => $hardate,
				9 => $pdestroy,
				10 => $datestart,
				11 => $photo,
				12 => $country,
				13 => $cname,
				14 => $p_url

				);
			$this->escapeCharacter($newArray);
		}

		function escapeCharacter($array)
		{
			$pname = mysql_real_escape_string($array[0]);
			$weather = mysql_real_escape_string($array[1]);
			$peraffect = mysql_real_escape_string($array[2]);
			$control = mysql_real_escape_string($array[3]);
			$addr = mysql_real_escape_string($array[4]);
			$state = mysql_real_escape_string($array[5]);
			$city = mysql_real_escape_string($array[6]);
			$location = mysql_real_escape_string($array[7]);
			$hardate = mysql_real_escape_string($array[8]);
			$pdestroy = mysql_real_escape_string($array[9]);
			$datestart = mysql_real_escape_string($array[10]);
			$photo = mysql_real_escape_string($array[11]);
			$country = mysql_real_escape_string($array[12]);
			$cname = mysql_real_escape_string($array[13]);
			$p_url = mysql_real_escape_string($array[14]);

			$query = $this-> insertquery($pname, $weather, $peraffect, $control, $addr, $state, $city, $location, $hardate, $pdestroy, $datestart, $photo, $country, $cname, $p_url);
		

		}

		function insertquery($pname, $weather, $peraffect, $control, $addr, $state, $city, $location, $hardate, $pdestroy, $datestart, $photo, $country, $cname, $p_url
			)
		{
			if(isset($_SESSION['username']))
			{
				$query = "INSERT INTO hotfarm.crop_alert VALUES('".$country."', NULL, '".$addr."', '".$datestart."', NOW(), '".$peraffect."', '".$control."', 
					'".$hardate."', '".$pdestroy."', '".$p_url."', '".$weather."', '".$city."', '".$state."', '".$_SESSION['username']."', '".$cname."', '".$pname."')";
				$init = mysql_query($query) or die(mysql_error()."i do not know");

				if($init)
				{
					$index = 'sent.html';
					header('Location: '. $index);	
				}
				else
				{
					return false;
				}
			}

			else
			{
				
			}
		}

		function followsession()
		{
			if(empty($_SESSION))
			{
				session_start();
			}

			if(isset($_SESSION['username']))
			{
				return $_SESSION['username'];
			}
		}

		function _connect()
		{
			mysql_connect($this->host, $this->user, $this->pass) or die(mysql_error);
			mysql_select_db($this->dbname) or die(mysql_error());
		}
	}

	//$jarvis = new InsertAdmin('korede', 'hot', '100', 'kill', '...223232', 'kwara', 'ilorin', 'under the tree', '887/9898/oop', '100', '12323', 'korede.jpg', 'nigeria');
?>
