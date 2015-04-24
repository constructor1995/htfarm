<?php
	class Alert_me
	{
	
		function check_user()
		{
			if(empty($_SESSION))
			{
				session_start();
			}
			if(isset($_SESSION['username']))
			{
				$this->_connect();
				$query = "SELECT cropname FROM crop_alert WHERE user = '".$_SESSION['username']."'";
				$init = mysql_query($query) or die(mysql_error());
				$row = mysql_num_rows($init);

				while($tut = mysql_fetch_array($init))
				{
					echo "<li>".$tut['cropname']."</li>";
					
				}

				if($row == NULL)
				{
					echo "No alerts yet";
				}
			}
		}

		function _connect()
		{

			mysql_connect('localhost', 'root', '') or die(mysql_error());
			mysql_select_db('hotfarm') or die(mysql_error());
		}
	}
?>