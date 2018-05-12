<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
	"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html lang="en" xml:lang="en">
	<head>
		<title>PROJECT RECORD |NUN|</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="style.css" />
		<link rel="shortcut icon" type="image/jpeg" href="./images/nile.png" />

		
	</head>

	<body>
		<header><img src="./images/header.png" style="position:relative; left:13%;" /></header>
		
		<div class="body">
		<div class="left">
<p style="color:darkgreen;"> <b>New to the site? Please kindly fill in your information below to register </b></p>
		
		<form method="POST" action="index.php" enctype="multipart/form-data" name="regForm">

		<table cellspacing="15">
			 <style>
			 td{color:green;}
			 </style>
			<tr><td>NAME:</td><td><input type="text" name="name" /></td></tr>
			<tr><td>SEX:</td><td><input type="radio" name="sex" value="MALE"  />MALE<input type="radio" name="sex" value="FEMALE" />FEMALE</td></tr>	
			<tr><td>ADDRESS:</td><td><input type="text" name="address" /></td></tr>						
			<tr><td>L.G.A:</td><td><input type="text" name="lga" /></td></tr>			
			<tr><td>STATE:</td><td><input type="text" name="state" /></td></tr>			
			<tr><td>COUNTRY:</td><td><input type="text" name="country" /></td></tr>			
			<tr><td>PHONE NO.:</td><td><input type="text" name="phone" /></td></tr>		
			<tr><td>ADM. NO.:</td><td><input type="text" name="regno" /></td></tr>
			<tr><td>DEPARTMENT:</td><td><select name="courses">
				<option value=""> ---Select One--- </option>
				<option value="ACCOUNTANCY">ACCOUNTANCY</option>
				<option value="BIOCHEMISTRY">BIOCHEMISTRY</option>
				<option value="BUSINESS ADMIN.">BUSINESS ADMIN</option>
				<option value="CHEMISTRY (APPLIED)">CHEMISTRY (APPLIED)</option>
				<option value="CIVIL ENGINEERING">CIVIL ENGINEERING</option>
				<option value="COMPUTER SCIENCE">COMPUTER SCIENCE</option>
				<option value="COMPUTER ENGINEERING">COMPUTER ENGINEERING</option>
				<option value="ECONOMICS">ECONOMICS</option>
				<option value="ENGLISH">ENGLISH STUDIES</option>
				<option value="ELECTRICAL & ELECTRONIC ENGR.">ELECTRICAL & ELECTRONIC ENGR.</option>
				<option value="MASS COMM.">MASS COMMUNICATION</option>
				<option value="MICROBIOLOGY">MICROBIOLOGY</option>
				<option value="POLITICAL SCI.">POLITICAL SCI. & INTERNATIONAL RELATIONS</option>
				<option value="PETROLEUM & GAS ENGINEERING">PETROLEUM & GAS ENGINEERING</option>
				<option value="PUBLIC ADMIN">PUBLIC ADMIN</option>
				<option value="PUBLIC & INTERNATIONAL LAW">PUBLIC & INTERNATIONAL LAW</option>
				<option value="PRIVATE & ISLAMIC LAW">PRIVATE & ISLAMIC LAW</option>
				
				</select>
			</td>
			</tr>
			<tr><td>LEVEL:</td><td><select name="level">
				<option value=""> ---Select One--- </option>
				<option value="100">100</option>
				<option value="200">200</option>
				<option value="300">300</option>
				<option value="400">400</option>
				<option value="500">500</option>
				</select>
			</td>
			</tr>
			<tr><td>PASSWORD:</td><td><input type="password" name="user_pass" /></td></tr>
			
		  </table>
	
			<p><input type="submit" name="register" value="REGISTER" id="submit" /></p>
		</form>
<?php
if(isset($_POST['register']))
{
	include 'connect.php';
	if(!empty($_POST['name']) && !empty($_POST['sex']) && !empty($_POST['address']) && !empty($_POST['lga']) && !empty($_POST['state']) && !empty($_POST['country']) && !empty($_POST['phone']) && !empty($_POST['regno']) && !empty($_POST['courses']) &&!empty($_POST['level']))
	{
		$insert= "INSERT INTO `users` VALUES('',
													'".mysqli_real_escape_string($con, $_POST['name'])."',
													'".mysqli_real_escape_string($con, $_POST['sex'])."',
													'".mysqli_real_escape_string($con, $_POST['address'])."',
													'".mysqli_real_escape_string($con, $_POST['lga'])."',
													'".mysqli_real_escape_string($con, $_POST['state'])."',
													'".mysqli_real_escape_string($con, $_POST['country'])."',
													'".mysqli_real_escape_string($con, $_POST['phone'])."',
													'".mysqli_real_escape_string($con, $_POST['regno'])."',
													'".mysqli_real_escape_string($con, $_POST['courses'])."',
													'".mysqli_real_escape_string($con, $_POST['level'])."',
													'".mysqli_real_escape_string($con, $_POST['user_pass'])."',
													NOW()
														)";
				$query=mysqli_query($con, $insert);
				if(!$query)
				{
					echo "<h4>FAILED TO REGISTER!</h4>";
					echo mysqli_error();
					
				}
				else
				{
					echo 'Your Registration was successful!';
				}
	}
	else
	{
		echo "<h4>You Must Fill all Fields!</h4>";
	}
}
?>
		</div>
		
		
		<div  style="border: 1px solid #999;
		position:relative; 
		width:30%;
		height:auto;
		float:left;
		box-shadow:0px 2px 2px 2px #ddd;
		border-radius:15px;
		margin:1em;
		padding:1em;">
		<h2> Already have an account? Login to Continue </h2>

		<form method="POST" action="index.php">
			<p>Admission No.: <input type="text" name="user_name" /></p>
			<p>Password: <input type="password" name="user_pass" /></p>
			<p><input type="submit" name="login" id="submit" value="Login" /></p>
		</form>

<?php
if(isset($_POST['login']))
{
include "connect.php";
	if(!empty($_POST['user_name']) && !empty($_POST['user_pass']))
	{
		$select="SELECT * FROM `users` WHERE(`reg_no`='".$_POST['user_name']."' AND `password`='".$_POST['user_pass']."')";
		$query=mysqli_query($con, $select);
		if($query)
		{
			if(mysqli_num_rows($query) == 0)
			{
				echo 'ERROR: Invalid Login Details';
			}
			else
			{
				while($r=mysqli_fetch_assoc($query))
				{
				session_start();
				ob_start();
				$_SESSION['login'] = true;
				$_SESSION['name'] = $r['name'];
				}
				header("location:welcome.php");
			}
				
		}
		//else { echo 'Error while logging in.'; }
		session_start();
				ob_start();
				$_SESSION['login'] = true;
				$_SESSION['name'] = $r['name'];
				//}
				header("location:welcome.php");
	}
	else
	{
		echo '***FIELDS CANNOT BE BLANK.***';
	}
}

?>
		
		</div>
		</div>
		<footer>
			<b>Copyright &copy; <?php echo date('Y'); ?>, NUN. 
		<li><a href="admin/index.php">|ADMIN|</a></li>
			Developed by HADIZA M. ABDULLAHI.</b>
			
			<br /><br />

		</footer>
	</body>
</html>
