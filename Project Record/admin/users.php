<?php
		session_start();
		if(isset($_SESSION['signed_in']))
		{
include 'header.php';
?>
		<div class="body">
		<a href="welcome.php"><img src="./images/back.png" style="float:left;" /></a>
		<center><h3 style="margin-left:5%">Welcome to the System Users section.</h3></center>

			<h3><font color="navy">LIST OF REGISTERED STUDENTS</font></h3>
<?php
	include "connect.php";
		$query=mysqli_query($con, "SELECT * FROM `users`");
		echo '<table cellspacing="5" style="border-collapse:collapse;" border="1" cellpadding="15">';
		echo '<tr><td><b>NAME</b></td><td><b>SEX</b></td><td><b>ADDRESS</b></td><td><b>L.G.A</b></td><td><b>STATE</b></td><td><b>COUNTRY</b></td><td><b>PHONE</b></td><td><b>ADMISSION NO.</b></td><td><b>DEPARTMENT.</b></td></tr>';
		while ($row=mysqli_fetch_assoc($query))
		{
			echo '<tr><td>'.$row['name'].'</td><td>'.$row['sex'].'</td><td>'.$row['address'].'</td><td>'.$row['lga'].'</td><td>'.$row['state'].'</td><td>'.$row['country'].'</td><td>'.$row['phone'].'</td><td>'.$row['reg_no'].'</td><td>'.$row['dept'].'</td></tr>';
		}
		echo '</table>';
		?>
		</div>
<?php include 'footer.php';
		}
else { header("location:index.php"); }
	?>