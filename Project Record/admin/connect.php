<?php
//connect.php
$server	    = 'localhost';
$username	= 'root';
$password	= '';

$con=mysqli_connect($server, $username, $password);
if(!$con)
{
 	die('Error: could not establish connection to the server');
}
else
{
$con_db=mysqli_select_db($con, 'project_record');
if(!$con_db)
{
	die('<font color="red">Error: Failed to connect to the database</font>');
}

}
?>