<?php
session_start();
ob_start();
if(isset($_SESSION['signed_in']))
{
	//unset all variables
	$_SESSION['signed_in'] = NULL;
session_destroy();

	header("location:index.php");
}
else
{ echo "Not Login Session"; }
?>