<?php
		session_start();
		if(isset($_SESSION['signed_in']))
		{
include 'header.php';
?>
		<div class="body" align="center">
		<a href="welcome.php"><img src="./images/back.png" style="float:left;" /></a>
		<center><h3 style="margin-left:5%">ADMIN PANEL.</h3></center>


		<form enctype="multipart/form-data" method="POST" action="add_books.php">
		<fieldset style="border: 1px solid #999; width:50%; box-shadow:0px 2px 2px 2px #ddd; border-radius:15px;">
			<legend>ADD A NEW PROJECT</legend>
			<table cellspacing="15">
				<tr><td>PROJECT TOPIC:</td><td><input type="text" name="title" size="30" /></td></tr>
				<tr><td>PROJECT AUTHOR:</td><td><input type="text" name="author"  size="30" /></td></tr>
				<tr><td>YEAR:</td><td><input type="text" name="year"  size="30" /></td></tr>
				<tr><td>PROJECT SUPERVISOR:</td><td><input type="text" name="sub" size="30" /></td></tr>
				<tr><td>DEPARTMENT:</td>
				<td><select name="cat">
				<?php
				include 'connect.php';
				$q=mysqli_query($con, "SELECT * FROM `sections`");
				while($r=mysqli_fetch_assoc($q))
				{
					echo '<option value='.$r['sec_id'].'>'.$r['sec_name'].'</option>';
				}
				?>
				</select></td></tr>
				<tr><td colspan="2">PROJECT OVERVIEW (ABSTRACT):<textarea cols="50" rows="10" name="abstract"></textarea></td></tr>
				<tr>
				  <td><input type="file" name="upload_file"  /></td>
				  <td><input type="submit" value="ADD" name="submit"  id="submit" /></td></tr>
				</table>
				
		</fieldset>
		</form>
<?php
if(isset($_POST['submit']))
{
include "connect.php";
	if(!empty($_POST['title']) && !empty($_POST['author']) && !empty($_POST['year']) && !empty($_POST['sub']) && !empty($_POST['cat'])&& !empty($_POST['abstract'])&& !empty($_POST['upload_file']))
	{

		$insert="INSERT INTO `projects` VALUES('',
											'".mysqli_real_escape_string($con, $_POST['title'])."',
											'".mysqli_real_escape_string($con, $_POST['author'])."',
											'".mysqli_real_escape_string($con, $_POST['year'])."',
											'".mysqli_real_escape_string($con, $_POST['sub'])."',
											'".mysqli_real_escape_string($con, $_POST['cat'])."',
											'".mysqli_real_escape_string($con, $_POST['abstract'])."',
											NOW()
											)";
		$query=mysqli_query($con, $insert);

	    $path = "documents/";
	    $filename = $_FILES['upload_file']['name'];
	    $ext = pathinfo($filename, PATHINFO_EXTENSION);
	    $path = $path . $_POST['title'].".".$ext;
	    if(move_uploaded_file($_FILES['upload_file']['tmp_name'], $path)) {

	    } else{
	    	
	    }
		if($query)
		{
				echo 'PROJECT added successfully!';
		}
		else { echo 'Error while adding PROJECT.'.mysqli_error(); }
		}

	
	else
	{
		echo '*** fields cannot be blank ***.';
	}
}
?>
		
		</div>
<?php include 'footer.php';
		}
else { header("location:index.php"); }
	?>
