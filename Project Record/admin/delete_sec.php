<?php
		session_start();
		if(isset($_SESSION['signed_in']))
		{
include "connect.php";
		$query=mysqli_query($con, "DELETE FROM `sections` WHERE(`sec_id` = '".$_GET['sec_id']."')");
		if($query)
		{
		header("location:section.php");	
		}
		else { echo 'Error while Deleting department.'; }

		}
else { header("location:index.php"); }
	?>