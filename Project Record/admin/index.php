<?php
include 'header.php';
?>
		<div class="body" align="center">
		<b><a href="../welcome.php"  style="margin:1%; float:right; border:solid 1px black; text-decoration:none; background:green; color:yellow; padding:2px;">Back</a></b>

		<div style="border: 1px solid #999;
		position:relative;
		width:35%;
		height:auto;
		overflow:hidden;
		box-shadow:0px 2px 2px 2px #ddd;
		border-radius:15px;
		margin:1em;
		padding:1em;">
		<h2> Login to Enter Administrative Page. </h2>

		<form name="frmLogin" method="POST" action="index.php">
			<p>Username: <input type="text" name="user_name" /></p>
			<p>Password: <input type="password" name="user_pass" /></p>
			<p><input type="submit" name="submit" value="Login" id="submit" /></p>
		</form>
		<?php
if(isset($_POST['submit']))
{
include "connect.php";
	if(!empty($_POST['user_name']) && !empty($_POST['user_pass']))
	{
		$select="SELECT * FROM `admin` WHERE(`username`='".$_POST['user_name']."' AND `password`='".$_POST['user_pass']."')";
		$query=mysqli_query($con, $select);
		if($query)
		{
			if(mysqli_num_rows($query) == 0)
			{
				echo 'ERROR: Invalid Username and Password combination';
			}
			else
			{
				session_start();
				ob_start();
				$_SESSION['signed_in']= true;
				header("location:welcome.php");
			}
				
		}
		else { echo 'Error while logging in.'; }
	}
	else
	{
		echo 'FIELDS CANNOT BE BLANK.';
	}
}
?>
		</div>
		</div>
		<footer>
			<b>Copyright &copy; <?php echo date('Y'); ?>, NUN.<br />
			Developed by HADIZA MUSA ABDULLAHI</b><br />
		</footer>
	</body>
</html>