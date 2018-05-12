<?php
		session_start();
		if(isset($_SESSION['signed_in']))
		{
include 'header.php';
?>
		<div class="body" align="center">
		<a href="section.php"><img src="./images/back.png" style="float:left;" /></a>
<br />

		<div style="border: 1px solid #999;
		width:auto%;
		height:auto;
		box-shadow:0px 2px 2px 2px #ddd;
		margin:1em;
		padding:1em;">
			<h3><font color="navy">PROJECTS IN THE <?php echo $_GET['sec_name']; ?> DEPARTMENT</font></h3>
<?php
	include "connect.php";
		$query=mysqli_query($con, "SELECT * FROM `projects` WHERE `rec_dept`='".$_GET['sec_id']."'");
		echo '<table cellspacing="5" style="border-collapse:collapse;" border="1" cellpadding="15">';
		echo '<tr><td><b>PROJECT TITLE</b></td><td><b>AUTHOR</b></td><td><b>YEAR</b></td><td><b>SUPERVISOR</b></td><td><b>DEPARTMENT</b></td><td><b>DATE ADDED</b></td></tr>';
		while ($row=mysqli_fetch_assoc($query))
		{
			echo '<tr><td><a href="pro_action.php?rec_id='.$row['rec_id'].'">'.$row['rec_topic'].'</a></td>
			<td>'.$row['rec_author'].'</td><td>'.$row['rec_year'].'</td><td>'.$row['rec_sup'].'</td><td>'.$_GET['sec_name'].'</td><td>'.$row['rec_date'].'</td></tr>';
		}
		echo '</table>';
		?>
		</div>
		</div>
<?php include 'footer.php';
		}
else { header("location:index.php"); }
	?>
