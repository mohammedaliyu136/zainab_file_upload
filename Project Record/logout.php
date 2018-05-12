<?php
session_start('login');
ob_start();
if(isset($_SESSION['login']))
{
	//unset all variables
	$_SESSION['login'] = NULL;
session_destroy();

	header("location:index.php");
}
else
{ echo "Not Login Session"; echo mysql_error();}
?>