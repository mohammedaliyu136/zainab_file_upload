<?php
		session_start();
		if(isset($_SESSION['signed_in']))
		{
include 'header.php';
?>
		<div class="body">
		<a href="welcome.php"><img src="./images/back.png" style="float:left;" /></a>
		<center><h3 style="margin-left:5%">Welcome to the Administrative section.</h3></center>

		<div style="border: 1px solid #999;
		position:relative;
		width:30%;
		height:auto;
		box-shadow:0px 2px 2px 2px #ddd;
		border-radius:15px;
		margin:1em; float:left;
		padding:1em;">
		<form  method="POST" action="admin.php">
				<p><font color="red">Add an Administrator</font></p>
				<p>USERNAME:<input type="text" name="user_name" placeholder="Enter UserName"  style="margin-left:10%;" /></p>
				<p>PASSWORD:<input type="password" name="user_pass" placeholder="Enter Password" style="margin-left:10%;" /></p>
				<p><input type="submit" value="ADD" name="submit" style="margin-left:35%;" /></p>
		</form>
<?php
if(isset($_POST['submit']))
{
include "connect.php";
	if(!empty($_POST['user_name']) && !empty($_POST['user_pass']))
	{
		$insert="INSERT INTO `admin` VALUES('', '".$_POST['user_name']."' ,'".$_POST['user_pass']."')";
		$query=mysqli_query($con, $insert);
		if($query)
		{
				echo 'Admin added successfully!';
				header("location:admin.php");	
		}
		else { echo 'Error while adding Admin.'; }
	}
	else
	{
		echo '*** fields cannot be blank ***.';
	}
}
?>
		</div>
		
		<div style="border: 1px solid #999;
		position:relative;
		width:55%;
		height:auto;
		box-shadow:0px 2px 2px 2px #ddd;
		margin:1em; float:left;
		padding:1em;">
			<h3><font color="navy">System Administrators</font></h3>
<?php
	include "connect.php";
		$query=mysqli_query($con, "SELECT * FROM `admin`");
		echo '<table cellspacing="5" style="border-collapse:collapse;" border="1" cellpadding="15">';
		echo '<tr><td><b>S/N</b></td><td><b>USERNAME</b></td><td><b>PASSWORD</b></td><td><b>ACTION</b></td></tr>';
		while ($row=mysqli_fetch_assoc($query))
		{
			echo '<tr><td>'.$row['admin_id'].'</td><td>'.$row['username'].'</td><td>'.$row['password'].'</td><td><a href="delete_admin.php?admin_id='.$row['admin_id'].'">Delete</a></td></tr>';
		}
		echo '</table>';
		?>
		</div>
		</div>
<?php include 'footer.php';
		}
else { header("location:index.php"); }
	?>
