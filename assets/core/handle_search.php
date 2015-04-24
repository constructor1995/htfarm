<?php
	class Handle_search
	{
		function __construct($search_key)
		{
			$this->_connect();
			$this->escape($search_key);
		}

		function escape($key)
		{
			$new_key = mysql_real_escape_string($key);
			$this->query($new_key);
		}

		function query($key)
		{
				$query = "SELECT * FROM crop_alert WHERE cropname LIKE '%".$key."%' OR pname LIKE '%".$key."%' OR country LIKE '%".$key."%'";
				$init = mysql_query($query) or die(mysql_error());
				$row = mysql_num_rows($init);
				if($row == NULL)
				{
					echo "<p>Sorry no results for your search</p>";
				}

				while($array = mysql_fetch_array($init))
				{
					echo "<div class='panel'>";
                  	echo "<img src = 'images/".$array['photo_url']."' alt = '' height 100 width =100/>";
                    echo "<b>Courtesy of ".$array['user']. "<br/><br/>"; 
                    echo "<b>".$array['pname']."</b><br/> in ". $array['city'].", ".$array['state'].". ".$array['country'] ."|". $array['current_date']."<br/>";
                    echo "at ".$array['farm_address']. " ".$array['pname']. " was encountered and (".$array['control_taken'].") was performed to solve the ".$array['pname'];
                    echo "</a>";
                    echo "<hr/>";
                    echo "</div>";
                    
                    
                    echo "</div>";
                    
				}  
		}

		function _connect()
		{
			mysql_connect('localhost', 'root', '') or die(mysql_error());
			mysql_select_db('hotfarm') or die(mysql_error());
		}



	}
?>