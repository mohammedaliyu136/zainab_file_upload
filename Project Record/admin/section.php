<?php
		session_start();
		if(isset($_SESSION['signed_in']))
		{
include 'header.php';
?>
		<div class="body">
		<a href="welcome.php"><img src="./images/back.png" style="float:left;" /></a>
		<center><h3 style="margin-left:5%">Welcome to the DEPARTMENT Sections.</h3></center>


		<form  method="POST" action="section.php" enctype="multipart/form-data">
		<fieldset style="margin:2%; border: 1px solid #999; width:45%; box-shadow:0px 2px 2px 2px #ddd; border-radius:15px;">
			<legend>ADD A NEW DEPARTMENT</legend>
				<p>DEPARTMENT NAME:<input type="text" name="sec_name" placeholder="*** e.g Engineering/Physics ***"  style="margin-left:6%;" size="30" /></p>
				<p>PHOTO:<input type="file" name="image" style="margin-left:6%;" /></p>
				<p><input type="submit" value="ADD" name="submit" style="margin-left:35%;" id="submit" /></p>
				<?php
if(isset($_POST['submit']))
{
include "connect.php";
$url="./photos/";
		$digit=rand(0000,9999);
		$picname=$digit.$_FILES['image']['name'];
		$imagetype=$_FILES['image']['type'];
	if(!empty($_POST['sec_name']) && !empty($_FILES['image']))
	{
		$q=mysqli_query($con, "SELECT * FROM `sections` WHERE `sec_name` ='".$_POST['sec_name']."'");
		if(mysqli_num_rows($q)!=0) 
		{ echo 'The Section '.$_POST['sec_name'].' Already exists. You Can View the Section Below'; }
		else{
		$insert="INSERT INTO `sections` VALUES('', 
												'".$_POST['sec_name']."',
												'',
												'".mysqli_real_escape_string($con, $picname)."',
												NOW())";
		$query=mysqli_query($con, $insert);
		if($query)
		{
				move_uploaded_file($_FILES['image']['tmp_name'], $url.$picname);
				echo 'Section  added successfully!';
				header("location:section.php");		
		}
		else { echo 'Error while adding Section.'.mysqli_error(); }
		}
	}
	else
	{
		echo '*** fields cannot be blank ***.';
	}
}
?>
		</fieldset>
		</form>

		
		<div style="border: 1px solid #999;
		width:90%;
		height:auto;
		box-shadow:0px 2px 2px 2px #ddd;
		margin:1em;
		padding:1em;" align="center">
			<h3><font color="navy">DEPARTMENTS</font></h3>
<?php
	include "connect.php";
		$query=mysqli_query($con, "SELECT * FROM `sections`");
		echo '<table cellspacing="5" style="border-collapse:collapse;" border="1" cellpadding="15">';
		echo '<tr><td><b>S/N</b></td><td><b>NAME</b></td><td><b>DATE ADDED</b></td><td><b>ACTION</b></td></tr>';
		while ($row=mysqli_fetch_assoc($query))
		{
			echo '<tr><td>'.$row['sec_id'].'</td><td>'.$row['sec_name'].'</td><td>'.$row['sec_date'].'</td><td><a href="sec_action.php?sec_id='.$row['sec_id'].'&sec_name='.$row['sec_name'].'">View Department</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="delete_sec.php?sec_id='.$row['sec_id'].'">Delete Department</a></td></tr>';
		}
		echo '</table>';
		?>
		</div>
		</div>
<?php include 'footer.php';
		}
else { header("location:index.php"); }
	?>
