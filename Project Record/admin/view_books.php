<?php
		session_start();
		if(isset($_SESSION['signed_in']))
		{
include 'header.php';
?>
		<div class="body" align="center">
		<a href="welcome.php"><img src="./images/back.png" style="float:left;" /></a>
		<center><h3 style="margin-left:5%">Welcome to the PROJECTS Sections.</h3></center>



			<h3><font color="navy">ALL PROJECTS</font></h3>
<?php
	include "connect.php";
		$query=mysqli_query($con, "SELECT * FROM `projects`");
		echo '<table cellspacing="5" style="border-collapse:collapse;" border="1" cellpadding="15">';
		echo '<tr><td><b>PROJECT TITLE</b></td><td><b>AUTHOR</b></td><td><b>YEAR</b></td><td><b>SUPERVISOR</b></td><td><b>DEPARTMENT</b></td><td><b>DATE ADDED</b></td></tr>';
		while ($row=mysqli_fetch_assoc($query))
		{
			echo '<tr><td><a href="pro_action.php?rec_id='.$row['rec_id'].'">'.$row['rec_topic'].'</a></td>
			<td>'.$row['rec_author'].'</td><td>'.$row['rec_year'].'</td><td>'.$row['rec_sup'].'</td><td>';
			$r=mysqli_fetch_assoc(mysqli_query($con, "SELECT* FROM `sections` WHERE `sec_id`='".$row['rec_dept']."'")); echo $r['sec_name']; 
			echo '</td>	<td>'.$row['rec_date'].'</td></tr>';
		}
		echo '</table>';
		?>
		</div>
<?php include 'footer.php';
		}
else { header("location:index.php"); }
	?>
