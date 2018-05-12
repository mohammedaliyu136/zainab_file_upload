<?php
		session_start();
		if(isset($_SESSION['signed_in']))
		{
include 'header.php';
?>
		<div class="body" align="center">
		<a href="welcome.php"><img src="./images/back.png" style="float:left;" /></a>
		<center><h3 style="margin-left:5%">ADMIN PANEL.</h3></center>


		<form  method="POST" action="research.php">
		<fieldset style="border: 1px solid #999; width:50%; box-shadow:0px 2px 2px 2px #ddd; border-radius:15px;">
			<legend>ADD A NEW RESEARCH AREA</legend>
			<table cellspacing="15">
				<tr><td>RESEARCH AREA:</td><td><input type="text" name="r_area" size="30" /></td></tr>
				<tr><td>RESEARCH TOPIC:</td><td><input type="text" name="r_topic"  size="30" /></td></tr>
				<tr><td>DEPARTMENT:</td>
				<td><select name="cat">
				<?php
				include 'connect.php';
				$q=mysql_query("SELECT * FROM sections");
				while($r=mysql_fetch_assoc($q))
				{
					echo '<option>'.$r['sec_name'].'</option>';
				}
				?>
			
				<tr><td></td><td><input type="submit" value="ADD" name="submit"  id="submit" /></td></tr>
				</table>
				
<?php
if(isset($_POST['submit']))
{
include "connect.php";
	if(!empty($_POST['r_area']) && !empty($_POST['r_topic']) && !empty($_POST['cat']))
	{
		$insert="INSERT INTO `research` VALUES('',
											'".mysql_real_escape_string($_POST['cat'])."',
											'".mysql_real_escape_string($_POST['r_topic'])."',
											'".mysql_real_escape_string($_POST['r_area'])."',
											NOW()
											)";
		$query=mysql_query($insert);
		if($query)
		{
				echo 'new research area added successfully!';
		}
		else { echo 'Error while adding research area.'.mysql_error(); }
		}

	
	else
	{
		echo '*** fields cannot be blank ***.';
	}
}
?>				
				
		</fieldset>
		</form>

		
		</div>
<?php include 'footer.php';
		}
else { header("location:index.php"); }
	?>
