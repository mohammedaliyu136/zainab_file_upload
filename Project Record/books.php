<?php
		session_start();
		if(isset($_SESSION['login']))
		{
include 'header.php';
?>
		<div class="body" align="center">
		<div style="border: 1px solid #999;
		width:90%;
		height:auto;
		box-shadow:0px 2px 2px 2px #ddd;
		margin:1em;
		padding:1em;">
			<h3><font color="navy">ALL PROJECTS</font></h3>
<?php
	include "connect.php";
		$query=mysqli_query($con, "SELECT * FROM `projects`");
		echo '<table cellspacing="5" style="border-collapse:collapse;" border="1" cellpadding="15">';
		echo '<tr><td><b>PROJECT TITLE</b></td><td><b>AUTHOR</b></td><td><b>YEAR</b></td><td><b>DEPARTMENT</b></td></tr>';
		while ($row=mysqli_fetch_assoc($query))
		{
			echo '<tr><td>'.$row['rec_topic'].'</td>
			<td>'.$row['rec_author'].'</td><td>'.$row['rec_year'].'</td><td>';
			$r=mysqli_fetch_assoc(mysqli_query($con, "SELECT* FROM `sections` WHERE `sec_id`='".$row['rec_dept']."'")); echo $r['sec_name']; 
			echo '</td><td><a href="pro_action.php?rec_id='.$row['rec_id'].'">View Project</a></td></tr>';
		}
		echo '</table>';
		?>
		</div>
		</div>
<?php include 'footer.php';
		}
else { header("location:index.php"); }
	?>
