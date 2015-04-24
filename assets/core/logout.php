<?php
	if(empty($_SESSION))
	{
		session_start();
	}
	if(isset($_SESSION['username']))
	{
		unset($_SESSION['username']);
		session_destroy();
		$redir = '../../index.php';
		header('Location: '. $redir);
	}
?>