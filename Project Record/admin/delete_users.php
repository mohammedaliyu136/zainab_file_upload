<?php
		session_start();
		if(isset($_SESSION['login']))
		{
include "connect.php";
		$query=mysql_query("DELETE FROM `users` WHERE(`user_id` = '".$_GET['user_id']."')");
		if($query)
		{
		header("location:users.php");	
		}
		else { echo 'Error while Deleting User.'; }

		}
else { header("location:index.php"); }
	?>